<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Disposisi extends Model
{
    protected $fillable = [
        'surat_masuk_id',
        'tujuan',
        'catatan'
    ];
}
