<?php

$numerosArray = [5,8,12,5,9];
    foreach ($numerosArray as $numeroArray){
        echo $numeroArray;
    }

$x = array(10,20,30,40,50, 60);
echo count($x);
unset($x[4]);
$x = array_values($x);
var_dump($x);


function BuscarLetra(array $palabras, string $letra){
    foreach($palabras as $palabra){
        if(strpos($palabra, $letra) === false){
            return false;
        }
        else{
            return true;
        }
    }
}
$palabras = ['campana', 'elefante', 'guagua', '+'];
echo BuscarLetra($palabras, 'e') ? "Todas tienen la e!" : "Sorry profe";
function Info(){
    $PersonalInfo = [
        'nombre' => 'Marc',
        'edad' => 36,
        'email' => 'mks4nch3@gmail.com',
        'comida' => 'yakimeshi',
    ];
    return 'Me llamo '.$PersonalInfo['nombre'].',y tengo '.$PersonalInfo['edad'].'. 
    Mi email es '.$PersonalInfo['email'].' y me encanta el '.$PersonalInfo['comida'].'.';
}
Info();


?>