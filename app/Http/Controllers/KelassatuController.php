<?php

namespace App\Http\Controllers;

use App\Models\Kelassatu;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use RealRashid\SweetAlert\Facades\Alert;

class KelassatuController extends Controller
{
    public function index()
    {
        $kelassatu = Kelassatu::all();
        return view('admin.kelas.kelas1.index',compact('kelassatu'));
    }

    public function create()
    {
        return view('admin.kelas.kelas1.create');
    }


    public function store(Request $request)
    {

        $validatedData = $request->validate([
            'nama_siswa' => 'required|max:255',
            'no_induk' => 'required|max:13',
            'file' => 'image|file|max:1024',
            'tpt_lhr' => 'required',
            'tgl_lhr' => 'required',
        ]);

        if ($request->file('file')) {
            $validatedData['file'] = $request->file('file')->store('foto-kelasI');
        }

        Kelassatu::create($validatedData);
        Alert::success('Data Siswa Kelas I', 'Berhasi Disimpan!');
        return redirect()->route('kelassatu.index');
    }


    public function show()
    {
        //
    }


    public function edit($id)
    {
        $kelassatu = Kelassatu::find($id);
        return view('admin.kelas.kelas1.edit', compact('kelassatu'));
    }


    public function update(Request $request, $id)
    {
        $rules = [
            'nama_siswa' => 'required|max:255',
            'no_induk' => 'required|max:13',
            'file' => 'image|file|max:1024',
            'tpt_lhr' => 'required',
            'tgl_lhr' => 'required',
        ];

        $validatedData = $request->validate($rules);

        if ($request->file('file')) {
            if($request->oldImage){
                Storage::delete($request->oldImage);
            }
          $validatedData['file'] = $request->file('file')->store('foto-kelasI');
        }

        Kelassatu::find($id)->update($validatedData);

        Alert::success('Data Siswa Kelas I',  'Berhasil Diubah!');
        return redirect()->route('kelassatu.index');
    }

    public function destroy(Kelassatu $kelassatu, $id)
    {
        if($kelassatu->file){
            Storage::delete($kelassatu->file);
        }

        Kelassatu::find($id)->delete();
        Alert::success('Data Siswa Kelas I',  'Berhasil Dihapus!');
        return redirect()->route('kelassatu.index');
    }
}
