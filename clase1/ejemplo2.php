<!DOCTYPE html>
<html>
<head>
	<title>Ejemplo 2 de php</title>
</head>
<body>

<? 
#php no es sensible a mayusculas ni minusculas en el nombre de las funciones

echo "hey<br>";
ECHO "hey2<br>";
EcHo "hey3<br>"; #si queremos poner etiquetas de html dentro de php se ponen dentro de un echo

#php si es sensible en el nombre de las variables

$prebe = "benja"; #php reconoce el tipo de dato sin especificarlo
$PREBE = "donaldo";
$Prebe = "cesar";

echo "<br>";

echo $prebe."<br>"; #para concatenar cadenas se usa el operador punto .
echo $PREBE."<br>";
echo $Prebe."<br>";

echo "<br>";

?>

<a href="./index.php">Inicio</a>

</body>
</html>