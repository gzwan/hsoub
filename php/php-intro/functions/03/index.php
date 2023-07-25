<?php

//Arguments

function sum (...$numbers) {

$acc = 0;
foreach ($numbers as $number) $acc += $number;
echo $acc ;


}


$arr = [3 , 2 , 4 , 10];

sum(...$arr);