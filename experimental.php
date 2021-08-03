<?php

declare(strict_types=1);

ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

/*
$orders = [
    ['pizza' => 'calzone', 'client' => 'Koen', 'adress' => ' a yacht in Antwerp'],
    ['pizza' => 'margarita','client' => 'Manuele', 'address' => ' somewhere in Belgium'],
    ['pizza' => 'golden','client' => 'students', 'address' => ' BeCode office']
];
*/

// fw = for who
function order_pizza($pizzatype, $forWhom)
{

    $type = $pizzatype;
    $toPrint = 'A ';
    $toPrint .= $pizzatype;
    $pizza = calc_cts($type);
    $address = 'unknown';

    if($forWhom == 'Koen') {
        $address = ' a yacht in Antwerp';
    } 
    elseif ($forWhom == 'Manuele') {
        $address = ' somewhere in Belgium';
    } 
    elseif ($forWhom == 'students') {
        $address = ' BeCode office';
    }

    $toPrint .= ' pizza should be sent to ' . $forWhom . '. <br>The address: ' . $address . '.';
    echo 'Creating new order...' . '<br>';
    echo $toPrint . '<br>';
    echo 'The bill is €'.$pizza.'.<br>';
    echo 'Order finished.' . '<br><br>';
};

function total_price($pizza) 
{
        return $pizza;
};

function test($pizza_type)
{
    echo 'Test: type is' . $pizza_type . '<br>';
};

function calc_cts($pizza_type)
{

    $cost = 'unknown';

    if ($pizza_type == 'marguerita') {
        $cost = 5;
    }
    else {
        if ($pizza_type == 'golden') {
            $cost = 100;
        }

        if ($pizza_type == 'calzone') {
                $cost = 10;
            }

        if ($pizza_type == 'hawai') {
            throw new Exception('Computer says no');
        }
    }

    return $cost;
};

function order_pizza_all()
{
    
    $test= 0;
    order_pizza('calzone', 'Koen');
    order_pizza('marguerita', 'Manuele');

    order_pizza('golden', 'students');
};

function make_Allhappy($do_it)
{
    
    if ($do_it) {
            order_pizza_all();
        } 
    
    else {
            // Should not do anything when false
        }
};


/*
foreach ($orderList as $order){
    try {
        pizzaOrder($order['pizza'], $order['client'], $order['address']);
    }
}
*/

make_Allhappy(true);