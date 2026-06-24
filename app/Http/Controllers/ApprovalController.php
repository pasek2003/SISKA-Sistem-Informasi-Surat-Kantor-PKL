<?php

namespace App\Http\Controllers;

use App\Models\SuratMasuk;

class ApprovalController extends Controller
{

public function index()
{

$data = SuratMasuk::where('status','pending')->get();

return view('approve.index',compact('data'));

}

public function approve($id)
{

$data = SuratMasuk::find($id);

$data->update([
'status'=>'approved'
]);

return back();

}

}