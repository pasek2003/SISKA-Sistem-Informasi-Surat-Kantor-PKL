<?php

namespace App\Http\Controllers;

use App\Models\SuratKeluar;
use Illuminate\Http\Request;

class SuratKeluarController extends Controller
{

public function index()
{
$data = SuratKeluar::latest()->get();
return view('surat_keluar.index',compact('data'));
}

public function create()
{
return view('surat_keluar.create');
}

public function store(Request $request)
{

SuratKeluar::create([

'no_surat'=>$request->no_surat,
'tujuan'=>$request->tujuan,
'perihal'=>$request->perihal,
'tanggal_surat'=>$request->tanggal_surat

]);

return redirect('/surat-keluar');

}

public function edit($id)
{

$data = SuratKeluar::find($id);

return view('surat_keluar.edit',compact('data'));

}

public function update(Request $request,$id)
{

$data = SuratKeluar::find($id);

$data->update([

'no_surat'=>$request->no_surat,
'tujuan'=>$request->tujuan,
'perihal'=>$request->perihal,
'tanggal_surat'=>$request->tanggal_surat

]);

return redirect('/surat-keluar');

}

public function destroy($id)
{

SuratKeluar::find($id)->delete();

return redirect('/surat-keluar');

}

}