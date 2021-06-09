<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Kriteria extends Model
{
    use SoftDeletes;
    protected $table='kriterias';
    protected $fillable = ['nama_kriteria', 'tipe_kriteria'];
}
