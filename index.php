<?php 

//1. ======== variable =========

// => starts with a dolor($)
// =>support alphanumeric characters and underscores (A-z, 0-9, _)
// =>variable name must start with letter or underscores
// => cannot contain space
// =>variable are case insensitive

    $name = " Ariyan arif";
    $_num  =  25;
    $bool = true;
    $fruits = ['apple', 'banana', 'mango'];

    echo ('hello '.  $_num);
    echo '<br>';
    echo ("hello, {$name}");

    echo '<br>';

    
//2. ======echo and print========

    print('hello ariyan arif');
    echo '<br>';
    echo 'hello,' . ' arif' .  ' vai' ;

    // [note]: echo normally faster than print



//3.======= constant (not changeable)========

// 2 way to create constant: =>;
// => define()
// =>const keyword

define('NUMBER',50);
// define('NUMBER',60);
echo NUMBER;

echo '<br>';

const FRUITS = 'mango';
echo FRUITS;

// constant don not follow any variable scoping rules
// they can be defined and accessed from anywhere in the

// const -> global 
// variable => global, local, static




// ==========PHP Data Types=============

// Variables can store data of different types, and different data types can do different things.

// PHP supports the following data types:

// => 4 Scalar Type
// String
$name = 'Yeasir Arafat';
var_dump($name);

// Integer
 $num  =  25;
 var_dump($num);

// Float (floating point numbers - also called double)
$num  =  25.5;
 var_dump($num);

// Boolean
$bool = true;
var_dump($bool);


// => 4 compound type:
// Array
$fruits = ['apple', 'banana', 'mango'];
var_dump($fruits);

//Object
class Car {

}
$car = new Car();
var_dump($car);

// Callable
// Iterable

// => 3 special type:
//Null
$null = NULL;
var_dump ($null);
// Object
// Resource

// ==============magic constant============
echo __FILE__ ;
echo '<br>';
echo __LINE__ ;
echo '<br>';
echo __DIR__ ;
echo '<br>';
echo __FUNCTION__ ;
echo '<br>';
echo __CLASS__ ;
echo '<br>';
echo __TRAIT__ ;
echo '<br>';
echo __METHOD__ ;
echo '<br>';



echo PHP_VERSION ;












    ?>