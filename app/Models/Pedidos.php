<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Pedidos extends Model
{
    protected $table = 'pedidos';
    protected $primaryKey = 'id_pedido';
    protected $fillable = ['id_cliente', 'id_empleado', 'fecha_pedido', 'estado'];

    public function cliente()
    {
        return $this->belongsTo(Clientes::class, 'id_cliente', 'id_cliente');
    }

    public function empleado()
    {
        return $this->belongsTo(Empleados::class, 'id_empleado', 'id_empleado');
    }
}
