<?php
$num = "0";
$num2 = "0";
$operacion = readline("Escriba R para restar, S para sumar, M para multiplicar y D para dividir: ");

switch ($operacion){
    case "R":
        leerinput();
        echo "La resta es: " .resta($num,$num2);
        break;
    case "S":
        leerinput();
        echo "La suma es: " .suma($num,$num2);
        break;
    case "M":
        leerinput();
        echo "La multiplicacion es: " .multiplicacion($num,$num2);
            break;
    case "D":
        leerinput();
        echo "La division es: " .division($num,$num2);
            break;
    default: echo "No existe la operacion ".$operacion;
}


function suma($num1,$num2) {
    return $num1+$num2;
}
function resta($num1,$num2){
    return $num1-$num2;
}
function multiplicacion($num1,$num2){
    return $num1*$num2;
}
function division($num1,$num2){
    return $num1/$num2;
}
function leerinput(){
    global $num,$num2;
    $num=$num=readline("Introduzca un numero aqui a operar: ");
    $num2=$num2=readline("Introduzca un numero aqui a operar: ");

    if (!is_numeric($num) || !is_numeric($num2)){
        exit ("Los valores deben ser numericos.");

    }
}