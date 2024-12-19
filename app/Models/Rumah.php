<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Rumah extends Model
{

    protected $primaryKey = 'id_rumah';
    protected $fillable = ['nama_pemilik', 'kabupaten', 'kecamatan', 'desa', 'alamat'];

}
