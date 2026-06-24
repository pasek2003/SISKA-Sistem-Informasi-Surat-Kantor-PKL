<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SuratMasuk extends Model{

protected $fillable = [
'no_surat',
'pengirim',
'perihal',
'tanggal_surat',
'file_surat',
'status'
];

}
