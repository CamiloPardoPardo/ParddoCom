<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pedido extends Model
{
    protected $fillable =['Cantidad','Valor','Area','Estado','id_Producto','id_Proovedor'];
}
