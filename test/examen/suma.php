<?php
	session_start();
	$economico = $_POST['groupOfDefaultRadiosA'];
	$_SESSION['economico'] = $_SESSION['economico'] + $economico;

	$contador=0;
	$cadena;
	$nom = $_SESSION['name'];
	$cont = $_SESSION['pass'];

	$conex = mysqli_connect("localhost","root","","candidatos"); 
	if (!$conex) {
		die("Error en la conexión: " . mysqli_connect_error());
	}
			

	if($_SESSION['moral']>26){
		$contador=$contador+1;
	}
	if($_SESSION['legal']>26){
		$contador=$contador+1;
	}
	if($_SESSION['corrupto']<16){
		$contador=$contador+1;
	}
	if($_SESSION['economico']<16){
		$contador=$contador+1;
	}
	if($contador>2){
		$cadena="Aceptado";
	}else{
		$cadena="Rechazado";
	}

	$consulta = "UPDATE datos SET resultado = '$cadena' WHERE nombre = '$nom' and codigo = '$cont'";
	mysqli_query($conex,$consulta);

	//echo $consulta;
	?> 
	    <META http-equiv="refresh" content="1;url=../../resultados/index.html"> </head>
    <?php

?>