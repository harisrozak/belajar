<?php

$nomer = 1 / 4;

echo $nomer;

echo "<br/>";

echo "<b>Bold</b><u>Underline</u><i>Italic</i>";


$arr = array(
	1 => 'satu', 
	2 => 'dua', 
	3 => 'tiga', 
	4 => 'empat', 
);

echo "<pre>";
print_r($arr);
echo "</pre>";

echo "<pre>";
print_r(array_values($arr));
echo "</pre>";

echo implode(',', array_values($arr));