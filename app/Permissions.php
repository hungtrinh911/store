<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Permissions extends Model
{
    protected $fillable = ['name', 'role_id'];

    public function permissions()
    {
        return $this->hasOne('App\Role', 'App\UserRole');
    }

    public function users()
    {
    	return $this->belongsToMany('App\User');
    }
}
