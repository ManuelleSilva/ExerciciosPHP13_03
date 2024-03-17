<?php

$numDig = $_POST["numDig"];

if($numDig % 2 == 0){
    echo "O número digitado " . $numDig . " é par!";
} else {
    echo "O número digitado " . $numDig . " é impar!";
}


?>