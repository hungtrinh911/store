<?php

namespace App;

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
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function permissions()
    {
        return $this->belongsToMany('\App\Permission', '\App\UserPermission');
    }

    public function roles()
    {
        return $this->belongsToMany('\App\Role', '\App\UserRole');
    }

    public function checkLogin($userName) {
        return $this::find('id')->where('name', $userName)->first();
    }
}
