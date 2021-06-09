<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Notifications\Notifiable;

class Motor extends Model
{
    use Notifiable;
    use SoftDeletes;
    protected $table = 'motors';
    protected $fillable = [
        'gambar', 'jenis_motor', 'tipe_motor',  'harga_motor', 'merek_id', 'warna', 'ban_depan', 'ban_belakang', 'jenis_ban',
        'kapasitas_mesin', 'tenaga_maksimal', 'jenis_transmisi'
    ];
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function jenis()
    {
        return $this->belongsTo(Jenis::class);
    }
}

