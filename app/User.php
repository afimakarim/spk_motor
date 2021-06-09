<?php

namespace App;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    use SoftDeletes;
    protected $table='users';
    protected $fillable = [
        'name', 'email', 'password',  'gambar', 'merek_id'
    ];
    public function merek()
    {
        return $this->belongsTo(Merek::class);
    }
    public function admin()
    {
        return $this->belongsTo(Admin::class);
    }

    // protected $guarded = [];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
}
