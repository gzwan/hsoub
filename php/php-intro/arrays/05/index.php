<?php

//count 
echo count(['Hello','World']);
echo '<br />';

// is_array
echo (integer) is_array([1,2,3]);
echo '<br />';
echo (integer) is_array('hello');
echo '<br />';


//explode 
$string = 'php javascript ruby swift kotlin';
$arr = explode(' ',$string);
print_r($arr);
echo '<br />';
// implode
echo implode('-',$arr);
echo '<br />';

//array_merge
$arr1 = ['red' ,'green','blue'];
$arr2 = ['black','yellow'];
$result = array_merge($arr1,$arr2);
print_r($result);

