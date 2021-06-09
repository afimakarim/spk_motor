<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Notifications\Notifiable;

class Promo extends Model
{
    use Notifiable;
    use SoftDeletes;
    protected $table = 'promos';
    protected $fillable = [
        'gambar', 'judul', 'ket_promo',  'tipe_id', 'dealer_id'
    ];
    public function dealer()
    {
        return $this->belongsTo(Dealer::class);
    }

    public function Motor()
    {
        return $this->belongsTo(Motor::class);
    }

    public function komentar()
    {
        return $this->hasMany(Komentar::class, 'id_promo', 'id');
    }
}
