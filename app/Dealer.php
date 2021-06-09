<?php

namespace App;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use App\Notifications\DealerResetPasswordNotification;

class Dealer extends Authenticatable
{
    use Notifiable;
    use SoftDeletes;
    protected $table = 'dealers';
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',  'gambar', 'user_id', 'telephone', 'ket_dealer', 'alamat'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function sendPasswordResetNotification($token)
    {
        $this->notify(new DealerResetPasswordNotification($token));
    }
}