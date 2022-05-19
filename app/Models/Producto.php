<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

use Attribute\Database\Eloquent\Casts\Attribute;

class Producto extends Model
{
    use HasFactory;
    use SoftDeletes;
    public $timestamps=false;

    protected $fillable = ['titulo', 'foto', 'descripcion', 'precioU', 'precioV', 'cantidadP','url'];

    public function sucursales()
    {
        return  $this->belongsToMany(Sucursal::class);
    }


    public function setTituloAttribute($titulo){

        $this->attributes['titulo'] = strtolower($titulo);
    }

    public function getTituloAttribute($titulo){

        return ucfirst($titulo);
    }

}
