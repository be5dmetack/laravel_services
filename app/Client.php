<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    protected $fillable = ['name', 'email', 'age', 'image', 'phone', 'id', 'user_id', 'role'];

    public function services()
    {
        return $this->hasMany('App\Service');
    }

}
