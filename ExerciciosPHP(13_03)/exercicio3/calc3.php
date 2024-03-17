<?php

$A = $_POST["A"];
$B = $_POST["B"];

if($A > $B){
    echo $A . " é maior do que " . $B;
} elseif($A < $B){
    echo $A . " é menor do que " . $B;
}else{
    echo "Os dois valores são iguais";
}
?>