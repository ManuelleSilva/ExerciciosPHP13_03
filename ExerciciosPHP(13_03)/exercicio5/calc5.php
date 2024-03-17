<?php

$escolha = $_POST["escolha"];
$nome = $_POST["nome"];
$escolhaComputador = rand(1, 3);

if(($escolha == 1) && ($escolhaComputador == 1)){
    echo "<p>" . $nome . ": <img src='pedra.png'</p>";
    echo "<p>Computador: <img src='pedra.png'</p>";
    echo "<p>EMPATE</p>";
} elseif(($escolha == 1) && ($escolhaComputador == 2)){
    echo "<p>" . $nome . ": <img src='pedra.png'</p>";
    echo "<p>Computador: <img src='papel.png'</p>";
    echo "<p>Você perdeu!!</p>";
} elseif(($escolha == 1) && ($escolhaComputador == 3)){
    echo "<p>" . $nome . ": <img src='pedra.png'</p>";
    echo "<p>Computador: <img src='tesoura.png'</p>";
    echo "<p>PARABÉNS!! Você ganhou!</p>";
}elseif(($escolha == 2) && ($escolhaComputador == 1)){
    echo "<p>" . $nome . ": <img src='papel.png'</p>";
    echo "<p>Computador: <img src='pedra.png'</p>";
    echo "<p>PARABÉNS!! Você ganhou!</p>";
}elseif(($escolha == 2) && ($escolhaComputador == 2)){
    echo "<p>" . $nome . ": <img src='papel.png'</p>";
    echo "<p>Computador: <img src='papel.png'</p>";
    echo "<p>EMPATE</p>";
}elseif(($escolha == 2) && ($escolhaComputador == 3)){
    echo "<p>" . $nome . ": <img src='papel.png'</p>";
    echo "<p>Computador: <img src='tesoura.png'</p>";
    echo "<p>Você perdeu!</p>";
}elseif(($escolha == 3) && ($escolhaComputador == 1)){
    echo "<p>" . $nome . ": <img src='tesoura.png'</p>";
    echo "<p>Computador: <img src='pedra.png'</p>";
    echo "<p>Você perdeu!</p>";
}elseif(($escolha == 3) && ($escolhaComputador == 2)){
    echo "<p>" . $nome . ": <img src='tesoura.png'</p>";
    echo "<p>Computador: <img src='papel.png'</p>";
    echo "<p>PARABÉNS!! Você ganhou!</p>";
}elseif(($escolha == 3) && ($escolhaComputador == 3)){
    echo "<p>" . $nome . ": <img src='tesoura.png'</p>";
    echo "<p>Computador: <img src='tesoura.png'</p>";
    echo "<p>EMPATE</p>";
}else {
    echo "Um número digitado não é compativel";
}



?>