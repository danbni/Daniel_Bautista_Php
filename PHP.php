Basico
<?php
echo "<p>HolaClase!</p>";
//This is is single-line comment 
echo "<p> me gusta php!</p>
echo "<p> Voy a programar! </p>";
?>
Variables
<?php
$name="Daniel" ;
&age= 17
echo= $name;

// Outputs "Daniel"

Operaciones
<?php
$x=30
$x+=90
echo $x

// Outputs: 120
?>

Matrices
$people = array("Daniel"=>"17", "Juan"=>"18", "	Cristian"=>"21"

//or
$people("Daniel")="17"
$people("Juan")="18"
$people("Cristian")="21"

Estrcutuas de control

if (condition) (
Cualquier condicion es true
) else (
Cualquier condicion es false;
)

for(init; test; Increment) (
Codigo a ejecutar;
)

if (condición) {
 
  código a ejecutar si la condición es true ;
} elseif (condición) {
 
  código que se ejecutará si la condición es true ;
} else {
 
   código a ejecutar si la condición es false ;
}

while (la condición es true ) {
 
   código a ejecutar;
}

do {
 
  código a ejecutar;
} while (la condición es true );

foreach (matriz como $ valor) {
 
  código a ejecutar;
}
 
// o
 
foreach (matriz como $ ckey => $ valor) {
 
   código a ejecutar;
}

funciones
function functionDaniel () {    
 
   // código a ejecutar
 
}

funtion multiplyByTwo($number) (
$answer=$number * 2;
echo $answeer;
)
multiplyBytwo
<? php

Variables predefinidas
<? php
 
// Inicie la sesión
 
session_start (); $ _SESSION ['color'] = "rojo";
$ _SESSION ['nombre'] = "Daniel";
?>

Trabajo con archivos
 
$ host = $ _SERVER ['HTTP_HOST'];
$ image_path = $ host. '/ images /';
?>






 