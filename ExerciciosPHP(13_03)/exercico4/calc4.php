<?php

$lado1 = $_POST['lado1'];
$lado2 = $_POST['lado2'];
$lado3 = $_POST['lado3'];

if ($lado1 + $lado2 > $lado3 && $lado1 + $lado3 > $lado2 && $lado2 + $lado3 > $lado1) {
    if ($lado1 == $lado2 && $lado1 == $lado3) {
        echo "É um triângulo equilátero.";
    } elseif ($lado1 != $lado2 && $lado1 != $lado3 && $lado2 != $lado3) {
        echo "É um triângulo escaleno.";
    } else {
        echo "É um triângulo isósceles.";
    }
} else {
    echo "Não é um triângulo válido.";
}
?>