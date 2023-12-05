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
    public function setDiscount($title)
    {
        if ($title == 'Gunfight at Rio Bravo') {
            return $this->sconto = 20;
        } else {
            return $this->sconto;
        }
    }
}


?>