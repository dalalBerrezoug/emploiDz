<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contect extends Model
{
    //
    public function recrut()
    { 
        return $this->belongsTo(Recruteur::class); 
    }
}
