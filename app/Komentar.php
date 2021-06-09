<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Komentar extends Model
{
    public function promo() {
        return $this->belongsTo(Promo::class, 'id_promo', 'id');
    }
}
