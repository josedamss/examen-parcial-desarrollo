<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Detalles_Pedido extends Model
{
    protected $table = 'detalles_pedido';
    protected $primaryKey = 'id_detalle';
    protected $fillable = ['id_pedido', 'id_producto', 'cantidad', 'precio_unitario'];

    public function pedido()
    {
        return $this->belongsTo(Pedidos::class, 'id_pedido', 'id_pedido');
    }

    public function producto()
    {
        return $this->belongsTo(Productos::class, 'id_producto', 'id_producto');
    }
}
