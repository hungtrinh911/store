<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Roles extends Model
{
    protected $fillable = ['name'];

    public function permissions()
    {
        return $this->belongsToMany('App\permissions', 'App\UserPermissions');
    }

    public function users()
    {
        return $this->belongsToMany('App\Users');
    }
}
