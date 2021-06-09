<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Nilai extends Model
{
    use SoftDeletes;
    protected $table='nilais';
    protected $fillable = ['nama_nilai', 'nilai'];
}
