<?php

namespace NovalSuryaMandala\Belajar;

class Customer {

    public function __construct(private string $name)
    {
        # code...
    }

    public function sayHello(string $name): string
    {
        return "Hello $name, My name is " . $this->name . PHP_EOL;
    }

}


?>