<h1>RIOT</h1>
<?php
echo "<h1>EMPRESADEJUEGOS</h1>";
echo "<h1>NOMINA:</h1>";
//Encabezado de la pagina


//Variable TECNOLOGO_EN_INFRAESTRCUTURA
$x= "TECNOLOGO_EN_INFRAESTRUCTURA";
echo $x;
$Cargo = $x;
$Texto = "NUMERO DE  $Cargo";
$Salida = $_GET["Salida"];
$Parrafo = "<h1>".$Texto.",ES DE: ".$Salida."</h1>";
echo $Parrafo ;

echo "<hr>";
echo $_GET["Salida"];

//Condicones de Numero de Tecnologos

if ($Salida >= 1) {

    echo "<h3>Hay un $Cargo</h3>"; }
else{
    echo"<h3>No hay un $Cargo</h3>";
}
if ($Salida >= 100) {
    echo "<h3>Hay muchos$Cargo</h3>"; 
}

//Variable PROGRAMADOR

$y= "PROGRAMADOR";
echo $y;
$Cargo = $y;
$Texto = "NUMERO DE  $Cargo";
$Salida = $_GET["Salida"];
$Parrafo = "<h1>".$Texto.",ES DE: ".$Salida."</h1>";
echo $Parrafo ;

echo "<hr>";
echo $_GET["Salida"];

//Condicones de Numero de Programadores

if ($Salida >= 5) {

    echo "<h3>Hay un $Cargo</h3>"; }
else{
    echo"<h3>No hay suficientes $Cargo</h3>";
}
if ($Salida >= 100) {
    echo "<h3>Hay muchos$Cargo</h3>"; 
}

//Variable ADMINISTRADOR_TECNOLOGICO

$a= "ADMINISTRADOR_TECNOLOGICO,";
echo $a;
$Cargo = $a;
$Texto = "NUMERO DE  $Cargo";
$Salida = $_GET["Salida"];
$Parrafo = "<h1>".$Texto.",ES DE: ".$Salida."</h1>";
echo $Parrafo ;

echo "<hr>";
echo $_GET["Salida"];

//Condicones de Numero de Admistratores Tecnologicos

if ($Salida >= 1) {

    echo "<h3>Hay un $Cargo</h3>"; }
else{
    echo"<h3>No hay un $Cargo</h3>";
}
if ($Salida >= 100) {
    echo "<h3>Hay muchos$Cargo</h3>"; 
}

//Variable CONTADOR

$m= "CONTADOR,";
echo $m;
$Cargo = $m;
$Texto = "NUMERO DE  $Cargo";
$Salida = $_GET["Salida"];
$Parrafo = "<h1>".$Texto.",ES DE: ".$Salida."</h1>";
echo $Parrafo ;

echo "<hr>";
echo $_GET["Salida"];

//Condicones de Numero de Contadores

if ($Salida >= 1) {

    echo "<h3>Hay un $Cargo</h3>"; }
else{
    echo"<h3>No hay un $Cargo</h3>";
}
if ($Salida >= 100) {
    echo "<h3>Hay muchos$Cargo</h3>"; 
}

//Variable CONTADOR_ASISTENTE

$n= "CONTADOR_ASISTENTE,";
echo $n;
$Cargo = $n;
$Texto = "NUMERO DE  $Cargo";
$Salida = $_GET["Salida"];
$Parrafo = "<h1>".$Texto.",ES DE: ".$Salida."</h1>";
echo $Parrafo ;

echo "<hr>";
echo $_GET["Salida"];

//Condicones de Numero de Asitentes de Contador

if ($Salida >= 1) {

    echo "<h3>Hay un $Cargo</h3>"; }
else{
    echo"<h3>No hay un $Cargo</h3>";
}
if ($Salida >= 100) {
    echo "<h3>Hay muchos$Cargo</h3>"; 
}

//Variable REVISION_FISCAL

$p= "REVISION_FISCAL,";
echo $p;
$Cargo = $p;
$Texto = "NUMERO DE  $Cargo";
$Salida = $_GET["Salida"];
$Parrafo = "<h1>".$Texto.",ES DE: ".$Salida."</h1>";
echo $Parrafo ;

echo "<hr>";
echo $_GET["Salida"];

//Condicones Numero de encargado en revision fiscal

if ($Salida >= 1) {

    echo "<h3>Hay un $Cargo</h3>"; }
else{
    echo"<h3>No hay un $Cargo</h3>";
}
if ($Salida >= 100) {
    echo "<h3>Hay muchos$Cargo</h3>"; 
}

//Variables CAJERPS

$Z= "CAJEROS,";
echo $Z;
$Cargo = $Z;
$Texto = "NUMERO DE  $Cargo";
$Salida = $_GET["Salida"];
$Parrafo = "<h1>".$Texto.",ES DE: ".$Salida."</h1>";
echo $Parrafo ;

echo "<hr>";
echo $_GET["Salida"];

//Condicones de Numero de Cajeros

if ($Salida >= 15) {

    echo "<h3>Hay un $Cargo</h3>"; }
else{
    echo"<h3>No hay suficientes $Cargo</h3>";
}
if ($Salida >= 100) {
    echo "<h3>Hay muchos$Cargo</h3>"; 
}

//Variable VENDEDORES

$Q= "VENDEDORES  ";
echo $Q;
$Cargo = $Q;
$Texto = "NUMERO DE  $Cargo";
$Salida = $_GET["Salida"];
$Parrafo = "<h1>".$Texto.",ES DE: ".$Salida."</h1>";
echo $Parrafo ;

echo "<hr>";
echo $_GET["Salida"];

//Condicones de Numero de Vendedores

if ($Salida >= 25) {

    echo "<h3>Hay un $Cargo</h3>"; }
else{
    echo"<h3>No hay suficientes $Cargo</h3>";
}
if ($Salida >= 100) {
    echo "<h3>Hay muchos$Cargo</h3>"; 
}

//Variable ABOGADO

$H= "ABOGADO,";
echo $H;
$Cargo = $H;
$Texto = "NUMERO DE  $Cargo";
$Salida = $_GET["Salida"];
$Parrafo = "<h1>".$Texto.",ES DE: ".$Salida."</h1>";
echo $Parrafo ;

echo "<hr>";
echo $_GET["Salida"];

//Condicones de Numero de Abogados

if ($Salida >= 1) {

    echo "<h3>Hay un $Cargo</h3>"; }
else{
    echo"<h3>No hay un $Cargo</h3>";
}
if ($Salida >= 100) {
    echo "<h3>Hay muchos$Cargo</h3>"; 
}

//Variable PSICOLOGOS

$l= "PSICOLOGOS";
echo $l;
$Cargo = $l;
$Texto = "NUMERO DE  $Cargo";
$Salida = $_GET["Salida"];
$Parrafo = "<h1>".$Texto.",ES DE: ".$Salida."</h1>";
echo $Parrafo ;

echo "<hr>";
echo $_GET["Salida"];

//Condicones de Numero de psicologos

if ($Salida >= 2) {

    echo "<h3>Hay un $Cargo</h3>"; }
else{
    echo"<h3>No hay un $Cargo</h3>";
}
if ($Salida >= 100) {
    echo "<h3>Hay muchos$Cargo</h3>"; 
}

//Variable GEFE

$k= "GEFE";
echo $k;
$Cargo = $k;
$Texto = "NUMERO DE  $Cargo";
$Salida = $_GET["Salida"];
$Parrafo = "<h1>".$Texto.",ES DE: ".$Salida."</h1>";
echo $Parrafo ;

echo "<hr>";
echo $_GET["Salida"];

//Condicones De numero de gefes

if ($Salida = 1) {

    echo "<h3>Hay un $Cargo</h3>"; }
else{
    echo"<h3>No hay un $Cargo</h3>";
}
if ($Salida >= 100) {
    echo "<h3>Hay muchos$Cargo</h3>"; 
}



?>


//Suma de los cargos es nuestra la empresa

echo "<h1>SumadeNumerodeCargos</h1>";

$Tecnologia = 3;

echo $Tecnologia;

$Contabilidad = 3;

echo "<h1>$Contabilidad</h1>";

$Atencion = 2;

echo "<h1>$Atencion</h1>";

$RecursosHumanos= 2;

echo "<h1>$RecursosHumanos</h1>";

$Direccion = 1;

echo "<h1>$Direccion</h1>";

$SumadeCargos = $Tecnologia+$Contabilidad+$Atencion+$RecursosHumanos+$Direccion;

echo $SumadeCargos;



