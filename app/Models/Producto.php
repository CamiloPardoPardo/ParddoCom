<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    protected $fillable =['Codigo_id','Referencia','Marca','Descripcion','id_Proovedor'];
}
