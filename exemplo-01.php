<?php

$qualASuaIdade = 10;

$idadeCrianca = 12;
$idadeMarior = 18;
$idadeMelhor = 65;

if ($qualASuaIdade < $idadeCrianca){
    echo "é uma criança";
} else if ($qualASuaIdade < $idadeMarior) {
    echo "adolecengte";
} else if ($qualASuaIdade < $idadeMelhor) {
    echo "adulto";
    
}else{
    echo "Idoso";
}

echo "<br>";

echo ($qualASuaIdade < $idadeMarior)?"menor de idade" : "maior de idade";

?>