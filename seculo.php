<?php
//Informe o ano nessa variável
$ano = $_POST["seculoAno"];

function seculoAno($ano){
    
    $seculo = $ano / 100;

    if(is_int($seculo)){
        //Faz nada
    }else{
        $seculo = floor ( $seculo ) + 1;
    }

    return $seculo;
}

$periodo = seculoAno($ano);

echo "Século ".$periodo;

?>