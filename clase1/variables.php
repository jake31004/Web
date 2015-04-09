<!DOCTYPE html>
<html>
<head>
	<title>Variables en php</title>
</head>
<body>

<?#las variables empiezan con un signo de $, y el tipo de dato es reconocido automaticamente
$var1 = 1;
$var2 = "jake";
$var3 = 1.5;

echo "<h1>Bienvenido $var2 </h1>";

echo "Suma de dos variables: <br>";
echo $var1 + $var3;

/*
	Tipos de datos de php:

    String
    Integer
    Float (floating point numbers - also called double)
    Boolean
    Array
    Object
    NULL
    Resource

*/

 echo "<br><h2>Arreglos</h2>";
 $dulces = array("tutsi pop", "muecas", "crayon", "rockaleta");
 echo "<br>Primer elemento del arreglo de ducles: ";
 echo $dulces[0];

 $dulces[4] = "llaves"; #los arreglos son dinamicos, si agregamos otro elemento el tam del arreglo aumenta

 echo "<br>";
 echo $dulces[4];

 echo "<br>";
 echo $dulces[2];
 unset($dulces[2]);
 echo "<br>";
 print_r($dulces);
 #echo $dulces[2]; #marcaria error porque el elemento 2 ya no existe
 echo "<br>";
 $aux = array_values($dulces); #reindexar los elementos del arreglo
 print_r($aux);

 echo "<br>"

 ?>

<a href="http://php.net/manual/es/language.types.array.php">Mayor info sobre arreglos</a>
<br>

<br><br>
<a href="./objetos.php"><h2>Objetos</h2></a>

<a href="./index.php">Inicio</a>

</body>
</html>