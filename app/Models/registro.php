<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use app\Models\desayuno;
use app\Models\comida;
use app\Models\bebida;
use app\Models\postre;

class registro extends Model
{
    use HasFactory;

    /*protected $fillable = ['nombre','mesa','comensales'];*/
    protected $guarded =[];

public function desayuno(){
 // $desayuno = desayuno::where('registros_id', $this->id)->first();//
    return $this->hasOne(desayuno::class);
}

public function comida(){
return $this->hasOne(comida::class);
}


public function bebida(){
    return $this->hasOne(bebida::class);
    }


    public function postre(){
        return $this->hasOne(postre::class);
        }
    
}


