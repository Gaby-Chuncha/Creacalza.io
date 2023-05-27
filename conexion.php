<?php
  
    function conectar()
   {
	$servidor="localhost";
	$usuario="root";
	$password="root";
	$bd="sindicato";
	$conexion=mysqli_connect($servidor,$usuario,$password,$bd);
	if (!$conexion)
	{
		echo"ERROR AL CONECTARCE CON EL SERVIDOR";
		exit();
	}

		return ($conexion);
   }
?>