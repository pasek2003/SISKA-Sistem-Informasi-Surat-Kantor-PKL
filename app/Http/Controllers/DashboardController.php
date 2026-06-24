<?php

namespace App\Http\Controllers;

use App\Models\SuratMasuk;
use App\Models\SuratKeluar;
use App\Models\Disposisi;

class DashboardController extends Controller
{

public function index()
{

$masuk = SuratMasuk::count();
$pending = SuratMasuk::where('status','pending')->count();
$keluar = SuratKeluar::count();
$disposisi = Disposisi::count();

return view('dashboard.index',compact(
'masuk',
'keluar',
'disposisi',
'pending'
));

}

}