<?php



    $numero1 =$_POST['numero1'];
    $numero2 =$_POST['numero2'];

    $signo = $_POST['signo'];
    $suma = "+";
    $resta = "-";
    $multiplicacion = "*";
    $division = "/";
    $cociente = "%";

    if(strcasecmp($signo,$resta)==0){
        $resultado = $numero1-$numero2;
        echo $resultado;
       
    }


    if(strcasecmp($signo,$suma)==0){
        $resultado = $numero1+$numero2;
        echo $resultado;
    }
    if(strcasecmp($signo,$multiplicacion)==0){
        $resultado = $numero1*$numero2;
        echo $resultado;
       
    }


    if(strcasecmp($signo,$division)==0){
        $resultado = $numero1/$numero2;
        echo $resultado;
    }
      
    if(strcasecmp($signo,$cociente)==0){
        $resultado = $numero1%$numero2;
        echo $resultado;
       
    }


   
      

?>