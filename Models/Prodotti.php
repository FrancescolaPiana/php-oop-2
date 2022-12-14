<?php
require_once 'Categorie.php';
require_once './Traits/Dimensioni.php';
class Product
{
    use Dimensioni;
    public $id;
    public $name;
    public $price;
    public $imgPath;

    public $category;
    public $units;
    private $discount;
    public $peso;
    public function __construct($_id, $_name, $_price, $_imgPath, Category $_category)
    {
        $this->id = $_id;
        $this->name = $_name;
        $this->price = $_price;
        $this->imgPath = $_imgPath;
        $this->category = $_category;

    }

}