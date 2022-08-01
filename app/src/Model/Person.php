<?php

namespace App\Model;

class Person
{
    private string $name;
    private int $age;

    public function __construct(string $name)
    {
        $this->age = 25;
        $this->name = $name;        
    }

    public function __toString()
    {
        return $this->name;
    }
    public function getName() {
        return $this->name;
    }
    public function getAge() {
        return $this->age;
    }

}
