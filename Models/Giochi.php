<?php

require_once 'Prodotti.php';

class Giochi extends Product
{

    public function __construct($_id, $_name, $_price, $_imgPath, $_category)
    {
        parent::__construct($_id, $_name, $_price, $_imgPath, $_category);
    }
}