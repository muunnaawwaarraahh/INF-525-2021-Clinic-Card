<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'tanggalLahir' ,
        'alamat',
        'pekerjaan',
        'nik' ,
        'fotoktp' ,
        'nobpjs' ,
        'fotobpjs'
    ];
}
