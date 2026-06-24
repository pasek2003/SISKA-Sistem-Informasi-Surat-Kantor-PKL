<?php

namespace App\Http\Controllers;

use App\Models\Disposisi;
use Illuminate\Http\Request;

class DisposisiController extends Controller
{
    public function index(){
        $data = Disposisi::all();
        return view('disposisi.index',compact('data'));
    }

    public function create(){
        return view('disposisi.create');
    }

    public function store(Request $request){
        Disposisi::create($request->all());
        return redirect('/disposisi');
    }
    public function destroy($id){
    Disposisi::find($id)->delete();
    return redirect('/disposisi');
    }
    public function edit($id)
{
    $data = Disposisi::find($id);

    return view('disposisi.edit', compact('data'));
}


public function update(Request $request, $id)
{
    $data = Disposisi::find($id);

    $data->update([
        'surat_masuk_id' => $request->surat_masuk_id,
        'tujuan' => $request->tujuan,
        'catatan' => $request->catatan
    ]);

    return redirect('/disposisi');
}
}
