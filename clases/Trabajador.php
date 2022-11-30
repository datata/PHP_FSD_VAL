<?php

require './Persona.php';

class Trabajador extends Persona
{
    public $puesto = 'junior';

    public function getNameTrabajador()
    {
        return $this->getName();
    }

}

$trabajador = new Trabajador('hola', 'adios', 21);

var_dump($trabajador->getNameTrabajador());

?>
