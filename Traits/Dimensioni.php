<?php

trait Dimensioni
{
    public $L;
    public $W;
    public $H;


    public function GetDimensions()
    {
        return "$this->L $this->W $this->H";
    }

    public function SetDimensions($L, $W, $H)
    {
        if (!is_int($L)) {
            throw new Exception('Valori Non Coerenti');
        }
        $this->L = $L;
        $this->W = $W;
        $this->H = $H;
    }

}