<?php 
    $name = 'Jack'; //String
    $age = 21;  //Int
    $hasKids = true; //boolean
    $cashOnHand = 20.75; //float



    echo 'Echo', $hasKids, 'echo end';

    var_dump('var_dump', $hasKids);
    var_dump($name, $age, $hasKids, $cashOnHand);


    echo $name . ' is ' . $age . ' years old';
    //here we have to concat in single quotes
    //OR
    //we can use double quotes
    echo "${name} is ${age} years old";

    //create constant
    define('HOST', 'localhost');
    define('DB_NAME', 'dev_db');

    echo HOST;
    echo DB_NAME;
?>