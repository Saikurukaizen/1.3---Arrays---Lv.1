<?php

$numeros = [5,8,12,5,9];
echo $numeros[0];
echo $numeros[1];
echo $numeros[2];
echo $numeros[3];
echo $numeros[4];

$x = array(10,20,30,40,50, 60);
echo count($numeros);
unset($numeros[4]);
$nuevosNumeros = [];
foreach($numeros as $numero){
    $nuevosNumeros[] = $numero;
}
echo count($numeros);

$palabras = ['campana', 'elefante','guagua','+'];
if(strchr($palabras[2], 'g') == true){
    echo 'Tiene la G!';
}
elseif(strchr($palabras[2], 'g') == false){
    echo 'No tiene la G!';
}
else{
    echo 'Escoge otra letra';
}

$PersonalInfo = [
    'nombre' => 'Marc',
    'edad' => 36,
    'email' => 'mks4nch3@gmail.com',
    'comida' => 'yakimeshi',
];


?>