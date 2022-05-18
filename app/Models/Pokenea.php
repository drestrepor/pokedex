<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pokenea extends Model
{
    use HasFactory;

    protected $table = 'pokeneas';

    protected $fillable = ['id', 'nombre', 'altura', 'habilidad', 'imagen', 'frase_filosofica'];

    public function getId()

    {

        return $this->attributes['id'];
    }

    public function setId($id)

    {

        $this->attributes['id'] = $id;
    }

    public function getNombre()

    {

        return $this->attributes['nombre'];
    }

    public function setNombre($nombre)

    {

        $this->attributes['nombre'] = $nombre;
    }

    public function getAltura()

    {

        return $this->attributes['altura'];
    }

    public function setAltura($altura)

    {

        $this->attributes['altura'] = $altura;
    }

    public function getHabilidad()

    {

        return $this->attributes['habilidad'];
    }

    public function setHabilidad($habilidad)

    {

        $this->attributes['habilidad'] = $habilidad;
    }

    public function getImagen()

    {

        return $this->attributes['imagen'];
    }

    public function setImagen($imagen)

    {

        $this->attributes['imagen'] = $imagen;
    }

    public function getFrase()

    {

        return $this->attributes['frase_filosofica'];
    }

    public function setFrase($frase)

    {

        $this->attributes['frase'] = $frase;
    }
}
