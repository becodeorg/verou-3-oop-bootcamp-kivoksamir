<?php

class Product
{
    public $name;
    public $price;
    public $tax;

    public function __construct($name, $price, $amount, $tax)
    {
        $this->name = $name;
        $this->price = $price;
        $this->amount = $amount;
        $this->tax = $tax;
    }

    public function getTotal()
    {
        return ($this->price * $this->amount);
        
    }
    public function gettax()
    {
        return ($this->getTotal()/100* $this->tax);
    }
    public function getDiscount()
    {
        return ($this->getTotal()/2);
    }
}


$product1 = new Product ('banana', 1, 6, 6);
$product2 = new Product ('apple', 1.5, 3, 6);
$product3 = new Product ('wine', 10, 2, 6);



echo ($product2 ->getTotal()) + ($product1 ->getTotal())+ ($product3->getTotal());
echo "<br>";
echo $product1 -> getTotal();
echo "<br>";
echo $product2 ->getTotal();
echo "<br>";
echo $product3 -> getTotal();
echo "<br>";
echo $product2-> gettax();
echo "<br>";
echo $product1->getDiscount();



