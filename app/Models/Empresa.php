<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Empresa extends Model
{
    use HasFactory;

    protected $table = "empresas";
    //app/Models/
    protected $fillable = [
        "nome",
        "endereco", 
        "telefone",
    ]; 
    public function produtos()
    {
        return $this->hasMany(Produto::class);
    }

}
