<?php
// Write a PHP script to sort the following associative array: 
// array("Sagar"=>"31","Vicky"=>"41","Leena"=>"39","Ramesh"=>"40") in 
// 1. ascending order sort by Value 
// 2. ascending order sort by Key 
// 3. descending order sorting by Value 
// 4. descending order sorting by Key

$arr = array(
    "Sagar" => "31",
    "Vicky" => "41",
    "Leena" => "39",
    "Ramesh" => "40"
);

asort($arr);
echo "<h3>Ascending Order by Value:</h3>";
print_r($arr);

ksort($arr);
echo "<h3>Ascending Order by Key:</h3>";
print_r($arr);

arsort($arr);
echo "<h3>Descending Order by Value:</h3>";
print_r($arr);

krsort($arr);
echo "<h3>Descending Order by Key:</h3>";
print_r($arr);
?>
