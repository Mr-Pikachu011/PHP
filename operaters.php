<?php

// You can try all operater by changing the variable values

// Arithmetic Operaters
echo "Arithmetic Operaters\n";

$a = 2;
$b = 2;
echo "\nNagation       of -a    = ",-$a;
echo "\nAddition       of a + b = ",$a+$b;
echo "\nSubstraction   of a - b = ",$a-$b;
echo "\nMultiplication of a * b = ",$a*$b;
echo "\nDivition       of a / b = ",$a/$b;
echo "\nModule         of a % b = ",$a%$b;
echo "\nExponation     of a ** b= ",$a**$b;



// Assignment operater 
echo "\n\nAssignment operater\n ";

$a = 10;
echo "\na+=5  = ",$a+=5;
$a = 10;
echo "\na-=5  = ",$a-=5;
$a = 10;
echo "\na*=5  = ",$a*=5;
$a = 10;
echo "\na/=5  = ",$a/=5;
$a = 10;
echo "\na%=5  = ",$a%=5;
$a = 10;
echo "\na^=5  = ",$a^=5;
$a = 10;
echo "\na^&=5  = ",$a&=5;
$a = 10;
echo "\na!=5  = ",$a!=5;
$a = 10;
echo "\na.=5  = ",$a.=5;
$a = 10;
echo "\na-+5  = ",$a-+5;



// comparition operator
echo "\n\ncomparition operator\n\n";

$a = 4;
$b = 6;
if($a == $b){
    echo "a == b\n";
}
if($a === $b){
    echo "a === b\n";
}
if($a !== $b){
    echo "a !== b\n";
}
if($a != $b){
    echo "a != b\n";
}
if($a <> $b){
    echo "a <> b\n";
}
if($a < $b){
    echo "a < b\n";
}
if($a > $b){
    echo "a > b\n";
}
if($a <= $b){
    echo "a <= b\n";
}
if($a >= $b){
    echo "a >= b\n";
}



// Autoincrement and Autodecrement Operator
echo "\n\n\nAutoincrement and Autodecrement Operator\n";

$a = 5;
echo "\npreincrement   ",++$a;
$a = 5;
echo "\npostincrement  ",$a++;
$a = 5;
echo "\npredecrement   ",--$a;
$a = 5;
echo "\npostdecrement  ",$a--,"\n";



// logical operater 
echo "\n\nlogical operater \n\n";

$a = 4;
$b = 4;
if($a && $b){
    echo "a && b\n";
}
if($a || $b){
    echo "a || b\n";
}
if(!$b){
    echo "!b\n";
}
if($a and $b){
    echo "a and b\n";
}
if($a or $b){
    echo "a or b\n";
}
if($a xor $b){
    echo "a xor b\n";
}



// Betwise Operator
echo "\n\n\nBetwise Operator\n\n";

$a = 8;
$b = 8;
if($a & $b){
    echo "a & b\n";
}
if($a | $b){
    echo "a | b\n";
}
if(~$a){
    echo "$a ~ $b\n";
}
if($a >> $b){
    echo "a >> b\n";
}
if($a << $b){
    echo "a << b\n";
}

?>