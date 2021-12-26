<?php

namespace App\Http\Controllers;

use DateTime;
use DateTimeZone;
use Illuminate\Http\Request;
use App\Models\Absenguru;
use App\Models\User;
use RealRashid\SweetAlert\Facades\Alert;

class AbsenGuruController extends Controller
{
    public function __construct()
    {
        $this->middleware('permission:Absen Show', ['only' => 'index']);
        $this->middleware('permission:Absen Masuk', ['only' => ['create', 'store']]);
        $this->middleware('permission:Absen Keluar', ['only' => ['goout','pulang']]);
        $this->middleware('permission:Absen Hapus', ['only' => 'hapus']);
    }
   public function index()
   {
       $absenguru = Absenguru::all();
       return view('absenguru.index', compact('absenguru'));
    }

    public function create()
    {
       $users = User::get();
       return view('absenguru.create',compact('users'));
    }

   public function store(Request $request)
   {
       $timezone =  'Asia/Jakarta';
       $date = new DateTime('now', new DateTimeZone($timezone));
       $tanggal = $date->format('Y-m-d');
       $localtime = $date->format('H:i:s');

       $data = Absenguru::where([
           ['guru_id', '=' , $request->guru_id],
           ['tgl', '=', $tanggal],
       ])->first();
       if ($data) {
        Alert::warning('Maaf', 'Absen Sudah Anda Isi');
       }else{
           Absenguru::create([
               'guru_id' => $request->guru_id,
               'tgl' => $tanggal,
               'jammasuk' => $localtime,
           ]);
       }
       return redirect()->route('absenguru.index');
   }

   public function goout()
   {
        $users = User::get();
        return view('absenguru.keluar',compact('users'));
   }

   public function pulang(Request $request)
   {
       $timezone =  'Asia/Jakarta';
       $date = new DateTime('now', new DateTimeZone($timezone));
       $tanggal = $date->format('Y-m-d');
       $localtime = $date->format('H:i:s');

       $data = Absenguru::where([
           ['guru_id', '=' , $request->guru_id],
           ['tgl', '=', $tanggal],
       ])->first();

       $dt = [
           'jamkeluar' => $localtime,
           'jamkerja' => date('H:i:s', strtotime($localtime) - strtotime($data->jammasuk)),
        ];

       if ($data->jamkeluar == "") {
           $data->update($dt);
           return redirect()->route('absenguru.index');
       }else{
            Alert::warning('Maaf', 'Anda Sudah Mengisi Absen Keluar');
            return redirect()->route('absenguru.index');
        }
    }

    public function hapus($id)
    {
        $data = Absenguru::find($id);
        $data->delete();

        Alert::warning('Data Absen', 'Telah dihapus..');
        return redirect()->route('absenguru.index');
   }
}
