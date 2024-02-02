<?php

// While Statement
function whileloop(){
    $i = 0;
    while($i <= 20){
        echo "$i\n";
        $i += 2;
    }
}
// whileloop();

// do-while statement
function dowhile(){
    $i = 1;
    do{
        echo "$i\n";
        $i += 2;
    }while($i < 20);
}
// dowhile();

// for Statement
function fordemo(){
    // You can calulate addition of 0 to your choice value
    $sum = 0;
    $value = 10;
    $value = readline("Enter your choice = ");
    for ($i=0; $i <= $value; $i++) { 
        echo "$i\n";
        $sum += $i;
    }
    echo "Sum = $sum";
}
// fordemo();

// foreach statement
function foreachdemo(){
    $arr = array(10,20,30,40,50,60);
    foreach($arr as $i){
        echo "$i\n";
    }
}
foreachdemo();


?>