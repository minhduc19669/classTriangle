<?php
namespace shape;
class Shape
{
    public $name;
    public function __construct($name)
    {
        $this->name=$name;
    }
    public function show(){

        echo "Tôi là : $this->name";
    }
}