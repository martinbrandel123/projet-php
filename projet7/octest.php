<?php

class Vehicle 
{

    private $_name;

    public function __construct(string $name)
    {
        $this->_name = $name;
    }

}

$obj1 = new Vehicle('Mon bolide');
echo $obj1->_name."<br>";

$obj2 = new Vehicle('Mon Autre bolide');
echo $obj2->_name."<br>";











// affiche pour $obj1 son attribu name    echo $obj1->_name;