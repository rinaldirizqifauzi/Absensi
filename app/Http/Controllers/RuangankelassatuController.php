<?php

namespace App\Http\Controllers;

use DateTime;
use DateTimeZone;
use App\Models\Rkelassatu;
use App\Models\Kelassatu;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Http\Request;

class RuangankelassatuController extends Controller
{
    public function index()
    {
        $rkelassatu = Rkelassatu::get();
        return view('ruangan.kelasI.index', compact('rkelassatu'));
    }

    public function absen()
    {
        $kelassatu = Kelassatu::get();
        return view('ruangan.kelasI.absen', compact('kelassatu'));
    }

    public function store(Request $request)
    {
        $timezone =  'Asia/Jakarta';
        $date = new DateTime('now', new DateTimeZone($timezone));
        $tanggal = $date->format('Y-m-d');
        $localtime = $date->format('H:i:s');

        $data = Rkelassatu::where([
            ['namasiswa_id', '=' , $request->namasiswa_id],
            ['tgl', '=', $tanggal],
        ])->first();

        if ($data) {
            Alert::warning('Absen Siswa', 'Sudah Diisi');
        }else{
            Rkelassatu::create([
                'namasiswa_id' => $request->namasiswa_id,
                'keterangan' => $request->keterangan,
                'alasan' => $request->alasan,
                'tgl' => $tanggal,
            ]);
            Alert::success('Absen Siswa', 'Telah Diisi!');
        }
        return redirect()->route('rkelassatu');
    }

    public function edit($id)
    {
        $data = Rkelassatu::find($id);
        $kelassatu = Kelassatu::get();
        return view('ruangan.kelasI.editabsen', compact('kelassatu','data'));
    }

    public function update(Request $request, $id)
    {
        $data = Rkelassatu::find($id);

        $timezone =  'Asia/Jakarta';
        $date = new DateTime('now', new DateTimeZone($timezone));
        $tanggal = $date->format('Y-m-d');
        $localtime = $date->format('H:i:s');


        $data->update($request->all());
            Alert::success('Absen Siswa', 'Telah Diubah!');

            return redirect()->route('rkelassatu');
        }

    public function delete($id)
    {
            $data = Rkelassatu::find($id);
            $data->delete();

            Alert::success('Absen Siswa', 'Telah Hapus!');
            return redirect()->route('rkelassatu');

    }
}
