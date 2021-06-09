<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Alternatif extends Model
{
    use SoftDeletes;
    protected $table = 'alternatifs';
    protected $fillable = [
        'motor_id', 'kriteria_id', 'nilai', 'dealer_id'
    ];
    public function motor()
    {
        return $this->belongsTo(Motor::class);
    }

    public function kriteria()
    {
        return $this->belongsTo(Kriteria::class);
    }

    public function dealer()
    {
        return $this->belongsTo(Dealer::class);
    }
}
