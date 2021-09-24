<!DOCTYPE hml>
<html land="RiorGames">
    <head>
        <tile>RiotGames</title>
</head>
<body>
<form method="POST" action="operaciones.php" >
    <Label>Ingrese Numero de Jugadores por equipo </label><br>
    <input type="number" name="numero1"><br>
    <Label>Ingrese Numero de Jugadores por equipo</label><br>
    <input type="number" name="numero2"><br>
    <Label>Ingrese Numero de Jugadores que compran Riot point</label><br>
    <input type="number" name="numero3"><br>

    <button type="submit">Resultado</button>

</form>
</body>
<html>



<?php

//Las variables donde van los numeros

$num1=$_POST['numero1'];
$num2=$_POST['numero2'];
$num3=$_POST['numero3'];
$num4=10;


$suma=$num1+$num2; 

$Resultado=$suma*$num3/$num4;

//Variable porcentaje de jugadores que compran PL
echo "el procentaje de jugadores que Compran es : ".$Resultado."Porciento";

?>