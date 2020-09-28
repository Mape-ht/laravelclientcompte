<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Compte extends Model
{
    protected $fillable = array('clientmorals_id', 'clientphysiques_id', 'numero', 'clerib', 'typecompte', 'typefrais');
    public static $rules = array('clientmorals_id'=>'required|integer',
                                    'clientphysiques_id'=>'required|integer',
                                    'numero'=>'required|min:2',
                                    'clerib'=>'required|min:3',
                                    'typecompte'=>'required|min:2',
                                    'typefrais'=>'required|min:9',
                                 );

    public function clientmoral(){
        return $this->belongsTo('App\Clientmoral');
    }
    public function clientphysique(){
        return $this->belongsTo('App\Clientphysique');
    }                                  
}
