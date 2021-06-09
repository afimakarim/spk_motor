<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class pengunjung extends Model
{

    protected $table='pengunjungs';
    protected $fillable = [
        'name', 'kunjungan_id', 'motor_id', 'vektor_v', 'hasil'
    ];
    public function Motor()
    {
        return $this->belongsTo(Motor::class);
    }
    public function Promo()
    {
        return $this->belongsTo(Promo::class);
    }
}
