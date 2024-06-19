<?php
//EJERCICIOS DE VARIABLES
//1. Crear dos variables, una para almacenar el nombre completo de una 
//persona y otra para almacenar el correo electrónico e imprimir las dos variables en un echo.

$nombre = 'Andres Felipe Pacheco';
$correo = 'andres0519pa@gmail.com';

echo 'Mi nombre es: '.$nombre, '<br>Mi correo es: '.$correo;
// una forma menos estetica es:
echo $nombre, $correo,'<br><br>';

// 2. Crear tres variables para tres números, de 0 a 9, cada uno diferente del otro, es decir, sin repetir; 
//imprimir todas las combinaciones posibles entre los números para formar números de tres dígitos.

$var_1 = 8 ;
$var_2 = 7 ;
$var_3 = 6 ;

echo $var_1, $var_2, $var_3,'<br>';
echo $var_2, $var_1, $var_3,'<br>';
echo $var_2, $var_3, $var_1,'<br>';

?>