<?php
//Informe a palavra a ser estudada
$palavra = $_POST["palindromo"];

function palindromo($palavra){

    $quantidadeCaracteres = strlen ( $palavra );

    if($quantidadeCaracteres == 1){

        $Palindromo = "É um palíndromo";

    }else{

        $quantidadeCaracteresDivididoDois = $quantidadeCaracteres / 2;
        $quantidadeCaracteresDivididoDois = floor ( $quantidadeCaracteresDivididoDois);

        for($i = 1; $i <= $quantidadeCaracteresDivididoDois;$i++){

            $stringEsquerda = substr($palavra, $i - 1, 1);
            $stringDireita = substr($palavra, - $i, 1);

            if($stringEsquerda != $stringDireita){
                $Palindromo = "Não é um palíndromo";
            }

        }

        if(empty($Palindromo)){

            $Palindromo = "É um palíndromo";

        }

    }

    if(empty($Palindromo)){

        $Palindromo = "Não é um palíndromo";

    }

    return $Palindromo;

}

$ePalindromo = palindromo($palavra);

echo $ePalindromo;

?>