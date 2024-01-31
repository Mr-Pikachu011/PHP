<?php

// variables

$int = 1001;
$str = "Mr_Pikachu";
$bool = true;
$flo = 3.15;
$arr = [2, 3, 56];
$n = NULL;

// this are all type of variable exist in PHP

echo "Variable\n<br>\n<br>";
echo "Variable Integer = ",$int,"\n<br>";
echo "Variable String  = ",$str,"\n<br>";
echo "Variable boolean = ",$bool,"\n<br>";
echo "Variable float   = ",$flo,"\n<br>";
echo "Variable array   = ",$arr[1],"\n<br>";
echo "Variable null    = ",$n,"\n<br>\n<br>";

// for see the variable type

echo var_dump($int),"\n<br>";
echo var_dump($str),"\n<br>";
echo var_dump($bool),"\n<br>";
echo var_dump($flo),"\n<br>";
echo var_dump($arr),"\n<br>";
echo var_dump($n),"\n<br>\n<br>\n<br>";


// Local variable 
// in local variable the variable call only in function and outside of the function

echo "local Variable   \n<br>\n<br>";
$num = 20;
function local_variable(){
    $num = 30;
    echo "Variable Inside Function $num\n<br>";
}
local_variable();
echo "Variable Outside Function $num\n<br>\n<br>\n<br>";



// Globel variable 
// in globl variable the variable call in both i.e. inside function and outside of the function

echo "Globel Variable   \n<br>\n<br>";
$num = 20;
function globel_variable(){
    global $num;
    echo "Variable Inside Function $num\n<br>";
}
globel_variable();
echo "Variable Outside Function $num\n<br>\n<br>\n<br>";


// static variable 
// In the static variable you can create static variable the you can increment them thes variable store incremented value
echo "static Variable   \n<br>\n<br>";
function static_variable(){
    static $num1 = 20;
    $num2 = 20;
    $num1++;
    $num2++;
    echo "num1 = $num1\n<br>";
    echo "num2 = $num2\n<br>";
}
static_variable();
static_variable();
static_variable();


?>