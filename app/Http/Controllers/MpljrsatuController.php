<?php

namespace App\Http\Controllers;

use App\Models\Mpljrsatu;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class MpljrsatuController extends Controller
{
    public function index()
    {
        $mpl = Mpljrsatu::where('parent_id', 0)->with(str_repeat('children.', 10))->get();
        return view('ruangan.kelasI.pelajaran.index', compact('mpl'));
    }

   public function store(Request $request)
   {
        $validateData = $request->validate([
            'judul' => 'required|max:20',
        ]);

        $validateData =  Mpljrsatu::create($request->all());
        Alert::success('Mata Pelajaran', 'Berhasil Ditambahkan');

        return redirect()->back();
   }

   public function edit($id)
   {
       $mpl =  Mpljrsatu::find($id);
        return view('ruangan.kelasI.pelajaran.edit', compact('mpl'));
   }

   public function update(Request $request, $id)
   {
        $mpl = Mpljrsatu::find($id);

        $mpl->update($request->all());
        Alert::success('Judul Mata Pelajran', 'Berhasil Diubah!');
        return redirect()->route('rkelassatu.mpljr');
   }

   public function delete($id)
   {
       $mpl = Mpljrsatu::find($id);

       $mpl->delete();
       Alert::success('Judul Mata Pelajran', 'Berhasil Dihapus!');
       return redirect()->route('rkelassatu.mpljr');
   }
}
