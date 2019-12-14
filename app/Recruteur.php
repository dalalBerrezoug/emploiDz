<?php

namespace App;
use App\User;
use Illuminate\Database\Eloquent\Model;

class Recruteur extends Model
{
    public function offres() 
    { 
        return $this->hasMany(Offres::class); 
    } 
    public function users()
    { 
        return $this->belongsTo(User::class); 
    }
    public function contect()
    { 
        return $this->belongsTo(Contect::class); 
    }
}
