<?php
/* CBTIS 89 
   Programa que almacena los precios de 5 articulos, obteniendo su Iva, su Descuento, Y al final imprime el contenido de todos los arreglos.
   Angel Guerrero
   3ºA Programaciòn Matutino
   */

$arrayPrecios=array(500,400,200,700,100);
$arrayIVA=array();
$arraySubtotal=array();
$arrayDescuento=array();
$arrayTotal=array();

$longitud=count($arrayPrecios);
echo "ARREGLO PRECIOS","<br>";
for ($i=0; $i <$longitud; $i++)
{echo$arrayPrecios[$i];
	echo "<br>";}

echo "ARREGLO IVA","<br>";
for ($i=0; $i <$longitud ; $i++)
 {
  $arrayIVA=$arrayPrecios[$i]*0.16;
	echo $arrayIVA;
	echo "<br>";
}


echo "ARREGLO SUBTOTAL","<br>","<br>";
for ($i=0; $i <$longitud ; $i++)
{
 $arraySubtotal=$arrayPrecios[$i]+$arrayIVA;
	echo $arraySubtotal;
	echo "<br>";
}	

echo "ARREGLO DESCUENTOS","<br>","<br>";
for ($i=0; $i <$longitud ; $i++)
{
 $arrayDescuento=$arraySubtotal[$i]*0.10;
	echo $arrayDescuento;
	echo "<br>";
}	
?>