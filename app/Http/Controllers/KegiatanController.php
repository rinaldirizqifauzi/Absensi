<?php

namespace App\Http\Controllers;

use DateTime;
use DateTimeZone;
use App\Models\Kegiatan;
use App\Models\Timetableguru;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class KegiatanController extends Controller
{
    public function index()
    {
        $jadwalguru = Timetableguru::all();
        return view('penjadwalan.jadwalguru.index', compact('jadwalguru'));
    }

    public function mulai()
    {
        $datakegiatan = Kegiatan::get();
        return view('penjadwalan.jadwalguru.mulai', compact('datakegiatan'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'kegiatan_id' => 'required',
        ]);

        $timezone =  'Asia/Jakarta';
        $date = new DateTime('now', new DateTimeZone($timezone));
        $tanggal = $date->format('Y-m-d');
        $localtime = $date->format('H:i:s');


        $data = Timetableguru::where([
            ['kegiatan_id', '=' , $request->kegiatan_id],
            ['tgl', '=', $tanggal],
        ])->first();

        if ($data) {
         Alert::error('Maaf', 'Acara Sudah Dimulai');
        }else{
            Timetableguru::create([
                'kegiatan_id' => $request->kegiatan_id,
                'tgl' => $tanggal,
                'mulai' => $localtime,
            ]);
            Alert::success('Ayo', 'Acara Dimulai');
        }

       return redirect()->route('jadwalguru.index');
    }

    public function selesai()
    {
        $datakegiatan = Kegiatan::get();
        return view('penjadwalan.jadwalguru.selesai', compact('datakegiatan'));
    }

    public function update(Request $request)
    {
        $request->validate([
            'kegiatan_id' => 'required',
        ]);

        $timezone =  'Asia/Jakarta';
        $date = new DateTime('now', new DateTimeZone($timezone));
        $tanggal = $date->format('Y-m-d');
        $localtime = $date->format('H:i:s');

        $data = Timetableguru::where([
            ['kegiatan_id', '=' , $request->kegiatan_id],
            ['tgl', '=', $tanggal],
        ])->first();

        $dt = [
            'selesai' => $localtime,
         ];

        if ($data->selesai == "") {
            $data->update($dt);
            Alert::success('Terima Kasih', 'Acara Sudah Selesai');
            return redirect()->route('jadwalguru.index');
        }else{
             Alert::error('Maaf', 'Acara Sudah Selesai');
             return redirect()->route('jadwalguru.index');
         }
    }

    public function hapus($id)
    {
        $data = Timetableguru::find($id);
        $data->delete();

        Alert::warning('Data Kegiatan', 'Telah dihapus..');
        return redirect()->route('jadwalguru.index');
    }
}
