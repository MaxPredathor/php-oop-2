<?php 

class Product
{
    protected float $price;
    public int $sconto;
    protected int $quantita;

    public function __construct($price, $quantita){
        $this->price = $price;
        $this->quantita = $quantita;
    }
}


?>