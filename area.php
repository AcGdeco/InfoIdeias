<?php
//Informe o número da área
$numArea = $_POST["quantQuad"];

function quantidadeQuadrados($numArea){

    $quantidadeQuadrados = 1;

    for($i = 2; $i <= $numArea; $i++){

        $quantidadeQuadrados = $quantidadeQuadrados + ($i - 1) * 4;

    }   

    return $quantidadeQuadrados;

}

$quantidadeQuadrados = quantidadeQuadrados($numArea);

echo $quantidadeQuadrados;

?>