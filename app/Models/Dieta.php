<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dieta extends Model
{
    use HasFactory;

    protected $table = "dietas";
    //app/Models/
    protected $fillable = [
        "nome",
        "cafe", 
        "lanche1",
        "almoco", 
        "lanche2", 
        "janta", 
        "ceia",
    ]; 

}
