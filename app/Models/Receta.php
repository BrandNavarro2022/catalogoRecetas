<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Receta
 *
 * @property $id
 * @property $nombre
 * @property $categoria_id
 * @property $descripcion
 * @property $imagen
 * @property $instrucciones
 * @property $ingredientes
 * @property $variaciones
 * @property $created_at
 * @property $updated_at
 *
 * @property Categoria $categoria
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Receta extends Model
{
    
    static $rules = [
		'nombre' => 'required',
		'categoria_id' => 'required',
		'descripcion' => 'required',
		'imagen' => 'required',
		'instrucciones' => 'required',
		'ingredientes' => 'required',
		'variaciones' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nombre','categoria_id','descripcion','imagen','instrucciones','ingredientes','variaciones'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function categoria()
    {
        return $this->hasOne('App\Models\Categoria', 'id', 'categoria_id');
    }
    

}
