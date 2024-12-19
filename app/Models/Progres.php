<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Progres extends Model
{
    use HasFactory;

    protected $primaryKey = 'id_progres';
    protected $fillable = ['id_rumah', 'index1', 'index2', 'index3', 'index4', 'index5'];

    public function rumah()
    {
        return $this->belongsTo(Rumah::class, 'id_rumah');
    }
}
