<?php
require_once 'Categorie.php';
require_once 'Prodotti.php';
class Cibo extends Product
{

    public $taste;

    public $grams;

    public $deadline;


    public function __construct($_id, $_name, $_price, $_taste, $_grams, $_deadline, $_imgPath, $_category)
    {
        parent::__construct($_id, $_name, $_price, $_imgPath, $_category);
        $this->taste = $_taste;
        $this->grams = $_grams;
        $this->deadline = $_deadline;

    }
}