<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Alternatif2 extends Model
{
    use SoftDeletes;
    protected $table = 'alternatif2';
    protected $guarded = [];
//    protected $fillable = [
//        'alternatif', 'harga', 'teknologi_motor', 'kapasitas_mesin', 'desain_motor'
//    ];
}
