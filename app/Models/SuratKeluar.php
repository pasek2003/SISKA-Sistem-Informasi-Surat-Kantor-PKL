<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SuratKeluar extends Model
{

protected $fillable = [

'no_surat',
'tujuan',
'perihal',
'tanggal_surat'

];

}