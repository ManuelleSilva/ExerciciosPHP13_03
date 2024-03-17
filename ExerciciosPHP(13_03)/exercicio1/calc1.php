<?php

$numDig = $_POST['numDig'];

if($numDig >0){
    echo "O número " . $numDig . " é positivo.";
}elseif ($numDig <0){
    echo "O número " . $numDig . " é negativo.";
}else {
    echo "O número é igual a 0";
}
?>