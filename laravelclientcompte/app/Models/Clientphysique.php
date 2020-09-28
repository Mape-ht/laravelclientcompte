<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Symfony\Contracts\Service\Attribute\Required;

class Clientphysique extends Model
{
    protected $fillable = array('clientmorals_id', 'nom', 'prenom', 'adresse', 'telephone', 'statut', 'salaire');
    public static $rules = array('clientmorals_id',
                                    'nom'=>'required|min:2',
                                    'prenom'=>'required|min:3',
                                    'adresse'=>'required|min:2',
                                    'telephone'=>'required|min:9',
                                    'statut'=>'required|min:2',
                                    'salaire'=>'required|integer'
                                );
    public function clientmoral(){
        return $this->belongsTo('App\Clientmoral');
    }     
    public function compte(){

        return $this->hasMany('App\Compte');
    }                         

}
