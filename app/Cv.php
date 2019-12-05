<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cv extends Model
{
    //
    public function user()
    {
        return $this->belongsTo('App\User');
    }
    public function experiences()
    {
        return $this->hasMany('App\Experience');
    }
    public function competences()
    {
        return $this->hasMany('App\Competence');
    }
    public function formation()
    {
        return $this->hasMany('App\Formation');
    }
}
