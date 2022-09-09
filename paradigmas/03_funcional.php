<?php

$input = array(22, 15,13,18,23,53);
$filtro = function(int $age){
    return ($age >= 18);
};

$output = array_filter($input, $filtro);
print_r($output);