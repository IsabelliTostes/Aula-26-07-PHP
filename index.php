<?php

$parametro= "a,b,c";

switch ($parametro) {
    case "a,b,c":
        echo "Entrou no primeiro case";
        break;

    case 1:
            echo "Entrou no case 1";
        break;

    default:
        echo "Entrou no default";
        break;
    }


/* TAREFA2*/


$dia=8;
switch ($dia) {

case 1: 
    echo" Domingo";
    break;

case 2: 
    echo" Segunda";
    break;

case 3: 
    echo" Terça";
     break;

case 4: 
    echo" Quarta";
    break;

case 5: 
    echo" Quinta";
    break;
        
case 6: 
    echo" Sexta";
     break;

case 7: 
    echo" Sábado";
    break;
    
default:
    echo "número inválido. Digita de 1 a 7";
    break;
    }
    
/*TAREFA3*/


    $nota=6;
switch ($nota) {

case 10: 
    echo" A";
    break;

case 9: 
    echo" B";
    break;

case 8: 
    echo" C";
     break;

case 7: 
    echo" D";
    break;

case 6: 
    echo" E";
    break;

case 5: 
    echo" F";
    break;

default:
    echo "REPROVADO!";
    break;

}
/*TAREFA4*/


$resultado= 1;
$numero2= 30;
$numero3= 70;
switch ($resultado) {

case 1: 
    echo $numero2 + $numero3;
    break;

case 2: 
    echo $numero2 - $numero3;
    break;

case 3: 
    echo $numero2 / $numero3;
    break;

case 4: 
    echo $numero2 * $numero3;
    break;

default:
    echo "REPROVADO!";
    break;
}

/*TAREFA5*/


$mes= 6;
switch ($mes) {

    case 1: 
        echo" Janeiro";
        break;

    case 2: 
        echo" Fevereiro";
        break;

    case 3: 
        echo" Março";
        break;

    case 4: 
        echo" Abril";
        break;

    case 5: 
        echo" Maio";
        break;

    case 6: 
        echo" Junho";
        break;

    case 7: 
         echo" Julho";
        break;

    case 8: 
        echo" Agosto";
        break;

    case 9: 
        echo" Setembro";
        reak;

    case 10: 
        echo" Outubro";
        break;

    case 11: 
        echo" Novembro";
         break;

    case 12: 
        echo" Dezembro";
         break;

    default: 
        echo" Reprovado";
         break;

    }

?>