<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Proveedores extends Model
{
    protected $table = 'proveedores';
    protected $primaryKey = 'id_proveedor';
    protected $fillable = ['nombre_proveedor', 'direccion', 'telefono', 'correo_electronico'];

    public function productos()
    {
        return $this->hasMany(Productos::class, 'id_proveedor', 'id_proveedor');
    }
}
