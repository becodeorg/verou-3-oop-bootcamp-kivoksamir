<?php

$basket = [

    'banana' => ['number' => 6,'price' => 1,],
    'apple' => ['number' => 3,'price' => 1.5,],
    'wine' => ['number' => 2,'price' => 10,]
];



function total_Price($basket)
{
    $total_price = 0;

    foreach ($basket as $item_info) {
        $total_price += $item_info['price'] * $item_info['number'];
    }

    return $total_price;
}



function the_Tax($basket)
{
    $tax = 0;  // start from 0 and increas by operations
    

    foreach ($basket as $item => $item_info) {
        $total_price = $item_info['price'] * $item_info['number'];

      
        if($item == 'banana') 
        {
            $tax += $total_price * 0.06;

        }
        elseif($item=='apple'){

            $tax += $total_price * 0.06;

        }
        elseif($item == 'wine')
        {                
            $tax += $total_price * 0.21;
        }
        
        }


       

        return $tax;
        
       

    };




echo total_Price($basket) . ' ' .'total Price';
echo "<br/>";
echo the_tax($basket) . ' ' . 'The tax';