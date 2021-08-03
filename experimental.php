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
function orderPizza($pizzaType, $forWhom)
{

    $type = $pizzaType;
    $toPrint = 'A ';
    $toPrint .= $pizzaType;
    $price = calculatePrice($pizzaType);
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
    echo 'The bill is €'.$price.'.<br>';
    echo 'Order finished.' . '<br><br>';
};

function totalPrice($price) 
{
        return $price;
};

function test($pizzaType)
{
    echo 'Test: type is' . $pizzaType . '<br>';
};

function calculatePrice($pizzaType)
{

    $cost = 'unknown';

    if ($pizzaType == 'marguerita') {
        $cost = 5;
    }
    else {
        if ($pizzaType == 'golden') {
            $cost = 100;
        }

        if ($pizzaType == 'calzone') {
                $cost = 10;
            }

        if ($pizzaType == 'hawai') {
            throw new Exception('Computer says no');
        }
    }

    return $cost;
};

function orderPizzaAll()
{
    
    $test= 0;
    orderPizza('calzone', 'Koen');
    orderPizza('marguerita', 'Manuele');

    orderPizza('golden', 'students');
};

function makeAllhappy($do_it)
{
    
    if ($do_it) {
            orderPizzaAll();
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

makeAllhappy(true);