<?php

//Passe a array 
$array = $_POST["sequencia"];

$array =  preg_split("/,/", $array);

function sequenciaCrescente($array){
    
    if(count($array) == 1){
        $verdadeiroFalse = "True";
    }else if(count($array) == 0){
        $verdadeiroFalse = "Nenhum valor informado";
    }else{
        $quanNumNaoCresc = 0;
        //$numElemMat = count($array);

        for($i = 0; $i < count($array) - 1; $i++){
            //if($numElemMat >= $i){
                if((($i + 1) < count($array)) && $array[$i] < $array[$i + 1]){
                    //$matriz[$i] =  $array[$i];
                    //echo $array[$i]." - ".$array[$i + 1]."<br>";
                }else{
                    $quanNumNaoCresc = $quanNumNaoCresc + 1;
                    
                    //echo "<br>".$array[$i + 1]."<br>";

                    if(!empty($array[$i - 1]) && $array[$i + 1] > $array[$i - 1] && $array[$i + 1] < $array[$i]){
                        array_splice($array, $i, 1);
                    }else if(!empty($array[$i + 2]) && empty($array[$i - 1]) && $array[$i + 1] < $array[$i + 2] && $array[$i + 1] < $array[$i]){
                        array_splice($array, $i, 1);
                    }else{
                        array_splice($array, $i + 1, 1);
                    }

                    //print_r($array);
                    
                    //$numElemMat = $numElemMat - 1;

                    $i = $i - 1;

                }
            //}
        }   

        if($quanNumNaoCresc > 1){
            $verdadeiroFalse = 'False';
        }else{
            $verdadeiroFalse = 'True';
        }

    }

    if(empty($verdadeiroFalse)){
        $verdadeiroFalse = "Indefinido";
    }

    return $verdadeiroFalse;

}

echo sequenciaCrescente($array);





?>