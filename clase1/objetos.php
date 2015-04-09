<!DOCTYPE html>
<html>
<head>
	<title>Objetos en php</title>
</head>
<body>

<h1>Objetos</h1>
<?php 
	
	
class Carro {
    function Carro($modelo, $color) {
        $this->modelo = $modelo;
        $this->color = $color;
    }

    function arrancar(){
    	echo "run run ...";
    }
}


$ferrari = new Carro(2000, "rojo");

echo "<br>";
echo "modelo: ".$ferrari->modelo;
echo "<br>";
echo "color: ".$ferrari->color;
echo "<br>";

echo "El carro esta arrancando: ";
$ferrari->arrancar();

echo "<br>"


 ?>

 <a href="./variables.php">Regresar</a>
</body>
</html>