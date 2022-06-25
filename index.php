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



    //3.======= constant========
    // not changeable;

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

















    ?>