<?php

// for runing the programs you can decleare the function

function ifdemo(){
    $a = 5;
    if($a > 0){
        echo "Number is Positive";
    }
}

function ifelsedemo(){
    $a = 8;
    $b = 6;
    $a = readline("Enter value of A = ");
    $b = readline("Enter value of B = ");
    if ($a > $b) {
        echo "A is Greter than B";
    }
    else{
        echo "B is Greter than A";
    }
}

function nestedifdemo(){
    $age = 20;
    $age = readline("Enter value Age = ");

    if($age > 22){
        echo "You are Eligible for marrid";
    }
    elseif($age > 18){
        echo "You are Eligible for Driving";
    }
    elseif($age < 18){
        echo "You are not Eligible for Driving";
    }
    else{
        echo "Your Chield";
    }
}

function switchdemo(){
    $ch = 1;
    $ch = readline("Enter Your choice = ");
    $a = 8;
    $b = 6;
    switch($ch){
        case 1:
            echo "Addition is = ",$a + $b;
            break;
        case 2:
            echo "Sunstraction is = ",$a - $b;
            break;
        case 3:
            echo "Divition is = ",$a / $b;
            break;
        case 4:
            echo "Multiplication is = ",$a * $b;
            break;
        default:
            echo "Wrong Choice";
    }
}


?>