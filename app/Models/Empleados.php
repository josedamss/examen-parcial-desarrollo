<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Empleados extends Model
{
    protected $table = 'empleados';
    protected $primaryKey = 'id_empleado';
    protected $fillable = ['nombre', 'apellido', 'direccion', 'telefono', 'correo'];

    public function pedidos()
    {
        return $this->hasMany(Pedidos::class, 'id_empleado', 'id_empleado');
    }


}
