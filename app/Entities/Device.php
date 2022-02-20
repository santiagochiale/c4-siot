<?php namespace App\Entities;

use CodeIgniter\Entity;


class Device extends Entity
{

    protected $dates = ['created_at', 'updated_at'];

    //Estas funciones especiales set y get son funciones que se ejecutan cuando la entidad detecta que se seteo o se obtuvo cierto atributo
    //por ejemplo cuando detecta que se recibe el atributo created_at se ejecuta esta funcion y se devuelve algo que se realiza con ese atributo
    protected function setCreatedAt(string $created_at){

        $this->attributes['created_at'] = $created_at;

    }

    protected function setSerie(string $serie){

        $this->attributes['serie'] = $serie.'prueba';

    }

}