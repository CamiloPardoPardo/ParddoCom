<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pedido extends Model
{
    public function Producto()
    {
        return $this->belongsTo(Producto::class, 'id_Producto');
    }

    public function Proovedor()
    {
        return $this->belongsTo(Proovedor::class, 'id_Proovedor');
    }

    
    protected $fillable =['Cantidad','Valor','Area','Estado','id_Producto','id_Proovedor'];

}
