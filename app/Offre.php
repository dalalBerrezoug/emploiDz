<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Offre extends Model
{
    //
    public function recruteur()
{ 
    return $this->belongsTo(Recruteur::class); 
}
}
