<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Provider extends Model
{
    //
    protected $fillable = ['name', 'email', 'age', 'image', 'phone', 'id', 'user_id', 'role'];

    public function providers()
    {
        return $this->belongsTo('App\Service');
    }

    public function proposal()
    {
        return $this->hasOne('App\Proposal');
    }
}
