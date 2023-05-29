<?php

$n=50;
$sumOdd=0;
$sumEven=0;

$numbers=0;
$i=1;
for($i=1;$i<=$n;$i++){
if($i%2!=0){

$sumOdd+=$i;

$numbers++;

echo "Series of Odd number between 1 to 50=".$i." <br>";




}elseif($i%2==0){

$sumEven+=$i;

echo "Series of Even number between 1 to 50=".$i." <br>";
}



}

echo "Numbers of odd numbers in Series is =".$numbers;
echo "<br>Sum of Series of Odd number between 1 to 50=".$sumOdd;

echo "<br>Sum of Series of Even number between 1 to 50=".$sumEven;

?>