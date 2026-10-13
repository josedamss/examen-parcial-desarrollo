<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Clientes extends Model
{
    protected $table = 'clientes';
    protected $primaryKey = 'id_cliente';
    protected $fillable = ['nombre_cliente', 'direccion', 'telefono', 'correo_electronico'];

    public function pedidos()
    {
        return $this->hasMany(Pedidos::class, 'id_cliente', 'id_cliente');
    }
}
