<h1>RIOT</h1>
<?php
echo "<h1>EMPRESADEJUEGOS</h1>";
echo "<h1>NOMINA:</h1>";
//Encabezado de la pagina
$string1 = "TECNOLOGIA"; 
echo "<h1>".$string1."</h1>";
$x= "TECNOLOGO_EN_INFRAESTRUCTURA,";
echo $x;
$y= "PROGRAMADOR";
echo $y;
$a= "ADMINISTRADOR_TECNOLOGICO,";
echo $a;
$string2 = "CONTABILIDAD"; 
echo "<h1>".$string2."</h1>";
$m= "CONTADOR,";
echo $m;
$n= "CONTADOR_ASISTENTE,";
echo $n;
$p= "REVISION_FISCAL,";
echo $p;
$string3 = 'ATENCION';
echo "<h1>".$string3."</h1>";
$Z= "CAJEROS,";
echo $Z;
$Q= "VENDEDORES  ";
echo $Q;
$string4 = "RECURSOSHUMANOS"; 
echo "<h1>".$string4."</h1>";
$H= "ABOGADO,";
echo $H;
$l= "PSICOLOGOS";
echo $l;
$string5 = 'DIRRECCION'; 
echo "<h1>".$string5."</h1>";
$k= "GEFE";
echo $k;
// Definimos las variables
echo "<h1>NOMINA Y CONTRASEÑAS;</h1>";
$TECNOLOGIA = array 
("TECNOLOGO_EN_INFRAESTRUCTURA"=>"JUANPABLO852", 
"PROGRAMADOR"=>"BETHA852", "ADMINISTRADOR_TECNOLOGICO"=>"SENA123");
print_r ($TECNOLOGIA);
// Una matriz para conocer las contraseñas de personal de tecnologia
$CONTABILIDAD = array 
("CONTADOR "=>"SENA123", 
"CONTADOR_ASISTENTE"=>"SENA123", "REVISION_FISCAL"=>"SENA123");
print_r ($CONTABILIDAD);
// Una matriz para conocer las contraseñas de personal de Contabilidad
$ATENCION = array
("CAJEROS "=>"SENA123", 
"VENDEDORES"=>"SENA123");
print_r ($ATENCION);
// Una matriz para conocer las contraseñas de personal de Atencion
$RECURSOSHUMANOS = array
 ("ABOGADO"=>"SENA123",
"PSICOLOGOS"=>"SENA123");
print_r ($RECURSOSHUMANOS);
// Una matriz para conocer las contraseñas de personal de Derechos humanos
$DIRRECCION = array
 (" GEFE " => "sena123");
print_r ($DIRRECCION);
?>

