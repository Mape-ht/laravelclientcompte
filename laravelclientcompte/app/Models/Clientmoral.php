<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Clientmoral extends Model
{
    protected $fillable = array('raisonsocial', 'adresse', 'telephone');
    public static $rules = array('raisonsocial'=>'required|min:2',
                                    'adresse'=>'required|min:2',
                                    'telephone'=>'required|min:9'
                                );
    
    public function Clientphysique(){

        return $this->hasMany('App\Clientphysique');

    }   
    public function Compte(){

        return $this->hasMany('App\Compte');

    }
    
}
