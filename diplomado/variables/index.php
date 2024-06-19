<?php
// VARIABLES

// VARIABLES POR VALOR
$numero = 8;
$nombre = 'Andres'; // cuando se le asigna un valor de texto a una variable esta debe ir acompañada de comillas alrededor del valor
$altura = 1.73;

$edad;
$edad = 29;
echo $edad;
// una el nombre de una Variable no puede comenzar con un numero, pero el numero si puede estar presente en otra posicion diferente al inicio 
// pero si puede ser de una sola letra
echo $x = 9;
echo $y = 8;
echo $z = 0;

echo $nombre_1= 'Andres Felipe<br>';

//$this = "Esto es PhP"; this es una variable que no puede sera asignada

// VARIABLES DE REFERENCIA 

$nombre = 'ana';
$name = &$nombre;

$nombre= 'andrea';

echo $nombre.'<br>';

echo $name;

// VARIABLES GLOBALES Y LOCALES
// Las variables en el ambito global no pueden ser accedidos en el ambito local

//$x=5; Esta es una variable global

function prueba(){
    $x = 5;// esta es una variable local
    echo 'el valor de la variable es:<br>'.$x ;
}

prueba();

$edad = 51;

function prueba_2(){
    global $edad;// global se utiliza para acceder a una variable global dentro de una funcion 
    // se debe declarar antes de las variables dentro de la funcion 
    $edad = 22;
}
prueba_2();
echo $edad;

// Otra forma es haciendo uso de las variables predefinidas

$altura = 1.73;

function prueba_3(){
    $GLOBALS['altura'] = 1.83;
}

prueba_3();

echo $altura;

// VARIABLES ESTATICAS

function prueba_4(){
    static $x = 0;
    echo $x;
    $x++;
}
// cada vez que hagamos un llamado a esta funcion esta retendra la informacion 
prueba_4();
prueba_4();
prueba_4();

?>