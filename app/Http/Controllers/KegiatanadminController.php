<?php

namespace App\Http\Controllers;

use App\Models\Kegiatan;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;


class KegiatanadminController extends Controller
{
    public function create()
    {
        return view('admin.kegiatan.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'nama_kegiatan' => 'required',
        ]);

       $data = Kegiatan::create([
           'nama_kegiatan' => $request->nama_kegiatan,
       ]);

       Alert::success('Data Kegiatan', 'Berhasil Ditambahkan');
       return redirect()->route('admin.kegiatan');
    }

    public function edit($id)
    {
        $kegiatan = Kegiatan::find($id);
        return view('admin.kegiatan.edit', compact('kegiatan'));
    }

    public function update(Request $request, $id)
    {
        $kegiatan = Kegiatan::find($id);

        $kegiatan->update($request->all());
        Alert::success('Data Kegiatan', 'Berhasil Diubah');
        return redirect()->route('admin.kegiatan');
    }

    public function delete($id)
    {
        $kegiatan = Kegiatan::find($id);

        $kegiatan->delete();
        Alert::success('Data Kegiatan', 'Berhasil Dihapus');
        return redirect()->back();
    }
}
