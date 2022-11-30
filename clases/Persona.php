<?php

class Persona
{
    const CONSTANTE = "Soy una CONSTANTE";

    private string $name;
    private string $surname;
    private int $age;

    function __construct(string $name, string $surname, int $age)
    {
        $this->name = $name;
        $this->surname = $surname;
        $this->age = $age;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        return $this->name = $name;
    }

    public function getSurname()
    {
        return $this->surname;
    }

    public function setSurname($surname)
    {
        return $this->surname = $surname;
    }

    public function getAge()
    {
        return $this->age;
    }

    public function setAge($age)
    {
        return $this->age = $age;
    }

    public function getConstant()
    {
        return self::CONSTANTE;
    }

    public static function getStatic()
    {
        return "esto es una funcion static";
    }
}

// $persona = new Persona('Sergio', 'Gonzalez', 21);
// var_dump($persona->getName());





// var_dump(Persona::getstatic());

// var_dump($persona->getName());

// var_dump(Persona::CONSTANTE);

// var_dump($persona->getConstant());

// $persona->setName('Sergio');

// var_dump($persona->getName());



// var_dump($persona->name);

// $persona->name = 'Electronico';

// var_dump($persona->name);
