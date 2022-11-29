<?php

class Cart
{
    private int $quantity; //int nombre entier (sans virgule)
    private float $totalPrice; //float nombre à virgule

    
    public function __construct(int $quantity, float $totalPrice)
    {
        $this->quantity = $quantity;
        $this->totalPrice = $totalPrice;
    }

    public function getTotalPrice(): float
    {
        return $this->totalPrice;
    }

    public function setTotalPrice(float $price): void
    {
        $this->totalPrice =$price;
    }

}

?>