<?php

$input = array("red", "green", "blue", "yellow");
array_splice($input, 4, 0, "purple");

echo "<pre>";
print_r($input);
echo "</pre>";