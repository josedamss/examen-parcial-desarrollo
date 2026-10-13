<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Categorias extends Model
{
    protected $table = 'categorias';
    protected $primaryKey = 'id_categoria';
    protected $fillable = ['nombre_categoria'];

    public function productos()
    {
        return $this->hasMany(Productos::class, 'id_categoria', 'id_categoria');
    }
}
