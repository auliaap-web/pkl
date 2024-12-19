<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Keterangan extends Model
{
    protected $fillable = ['keterangan', 'id_progres'];

    public function progres()
    {
        return $this->belongsTo(Progres::class, 'id_progres');
    }
}
