<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class postre extends Model
{
    use HasFactory;

    public function registro(){
        //$registro = registro::find($this->registro_id);//
        return $this->belongsTo('App\Models\registro');
        
        }
}
