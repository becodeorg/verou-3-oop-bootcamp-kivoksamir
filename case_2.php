<?php

class basket
{
    public $name;
    public $price;
    public $quantity;
    public $tax;
    public $dis_products=['banana' , 'apple' , 'wine']; // only these  products can have a discount .. 
    

    public function __construct($name, $price, $quantity, $tax)
    {
        $this->name = $name;
        $this->price = $price;
        $this->quantity = $quantity;
        $this->tax = $tax;
        
    }

    public function total_price()
    {
        return ($this->price * $this->quantity);
        
    }
    
    public function the_tax()
    {
        return ($this->total_price() * $this->tax);
    }

    public function the_discount()
    
    {
        if(in_array($this->name , $this->dis_products))
            {

                 return ($this->total_price()/2);

            }else{
                echo 'this item has no discount';
            }
    }
       
}



$product1 = new basket ('banana', 1 , 6 , 0.6);
$product2 = new basket ('apple', 1.5 , 3 , 0.06);
$product3 = new basket ('wine', 10 , 2 , 21);
$product4 = new basket ('pear', 5 , 2 , 0.05);




echo ($product1 ->total_price()) + ($product2 ->total_price())+ ($product3->total_price()) .' ' .'total_price';
echo "<br/>";
echo $product1 ->total_price() . '  ' . 'banana price';
echo "<br/>";
echo $product2 ->total_price() . ' '. 'apple price';
echo "<br/>";
echo $product3 ->total_price() . ' ' . 'wine price';
echo "<br/>";
echo $product2-> the_tax() . ' ' . 'apple & banana tax';
echo "<br/>";
echo $product1->the_discount() . ' '. ' '.' bannan discount 50%';
echo '<br/>';
echo $product2->the_discount(). ' ' . ' '. 'apple discount 50%';
echo '<br/>';
echo $product3->the_discount(). ' ' . ' '. 'wine discount 50%';
echo '<br/>';
echo '<br/>';
echo $product4 ->total_price() . '  ' . 'pear price';
echo '<br/>';
echo $product4-> the_tax() . ' ' . 'pear tax';
echo'<br/>';
echo $product4->the_discount(). ' ' . ' '. ' euro discount ';




