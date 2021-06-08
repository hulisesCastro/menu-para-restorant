<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\registro;

class desayuno extends Model
{
    use HasFactory;
    protected $guarded =[];

public function registro(){
//$registro = registro::find($this->registro_id);//
return $this->belongsTo(registro::class);

}



}
    