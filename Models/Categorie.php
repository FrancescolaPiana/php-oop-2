<?php

class Category
{
    public $id;
    public $name;


    public function __construct($_name)
    {
        $this->name = $_name;
    }
    public function setId()
    {
        if ($this->name = "Cat") {
            $this->id = 1;
        } elseif ($this->name = "Dog") {
            $this->id = 2;
        }
    }
}