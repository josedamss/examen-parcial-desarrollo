<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Productos extends Model
{
    protected $table = 'productos';
    protected $primaryKey = 'id_producto';
    protected $fillable = ['nombre_producto', 'descripcion', 'precio', 'id_categoria'];

    public function categoria()
    {
        return $this->belongsTo(Categorias::class, 'id_categoria', 'id_categoria');
    }

    public function proveedor()
    {
        return $this->belongsTo(Proveedores::class, 'id_proveedor', 'id_proveedor');
    }
}
