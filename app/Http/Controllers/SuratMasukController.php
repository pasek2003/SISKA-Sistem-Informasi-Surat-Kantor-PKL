<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SuratMasuk;

class SuratMasukController extends Controller
{

public function index()
{
$data = SuratMasuk::latest()->get();
return view('surat_masuk.index', compact('data'));
}

public function create()
{
return view('surat_masuk.create');
}

public function store(Request $request)
{

$request->validate([
'no_surat' => 'required',
'pengirim' => 'required',
'perihal' => 'required',
'tanggal_surat' => 'required',
'file_surat' => 'nullable|mimes:pdf|max:2048'
]);

$nama_file = null;

if ($request->hasFile('file_surat')) {

$file = $request->file('file_surat');

$nama_file = time().'_'.$file->getClientOriginalName();

$file->move(public_path('surat'), $nama_file);

}

$data = new SuratMasuk();

$data->no_surat = $request->no_surat;
$data->pengirim = $request->pengirim;
$data->perihal = $request->perihal;
$data->tanggal_surat = $request->tanggal_surat;
$data->file_surat = $nama_file;

$data->save();

return redirect('/surat-masuk');

}

public function edit($id)
{
$data = SuratMasuk::find($id);
return view('surat_masuk.edit', compact('data'));
}

public function update(Request $request,$id)
{

$data = SuratMasuk::find($id);

$nama_file = $data->file_surat;

if($request->hasFile('file_surat')){

$file = $request->file('file_surat');

$nama_file = time().'_'.$file->getClientOriginalName();

$file->move(public_path('surat'),$nama_file);

}

$data->update([

'no_surat'=>$request->no_surat,
'pengirim'=>$request->pengirim,
'perihal'=>$request->perihal,
'tanggal_surat'=>$request->tanggal_surat,
'file_surat'=>$nama_file

]);

return redirect('/surat-masuk');

}

public function destroy($id)
{
SuratMasuk::find($id)->delete();
return redirect('/surat-masuk');
}

}