<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Merek extends Model
{
    use SoftDeletes;
    protected $table='mereks';
    protected $fillable = ['name', 'gambar'];
//    public function ()
//    {
//        return $this->belongsTo(Category::class);
//    }
}
