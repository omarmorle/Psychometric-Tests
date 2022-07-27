<?php
session_start();
?>

<!doctype html>
<html lang="en">
	<head>
		<title>Resultado</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
	</head>
	<body>
		<div class="container">
		
			<?php

			include 'conn.php';	
			
			$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

			if (!$conn) {
				die("Error en la conexión: " . mysqli_connect_error());
			}
			
			$email = $_POST['name']; 
			$password = $_POST['pass'];
			
			$result = mysqli_query($conn, "SELECT nombre, codigo, resultado, fecha_registro FROM datos WHERE nombre = '$email'");
			
			$row = mysqli_fetch_assoc($result);
			
			if($row){

				if ($_POST['pass'] == $row['codigo']) {	
						
					$_SESSION['loggedin'] = true;
					$_SESSION['name'] = $row['nombre'];
					$_SESSION['start'] = time();
					$_SESSION['expire'] = $_SESSION['start'] + (1 * 60) ;						
						
					echo "<div class='alert alert-success mt-4' role='alert'><strong>Nombre del candidato:</strong> $row[nombre]
					<br>
					<strong>Resultado</strong> $row[resultado]	
					<br>
					<strong>Fecha de ingreso:</strong> $row[fecha_registro]			
					
					<p><a href='logout.php'>Salir</a></p></div>";	
					
				} 
				else {
					echo'<script type="text/javascript">
					    alert("Contraseña incorrecta");
				    </script>';
				?> 
		    	<META http-equiv="refresh" content="1;url=index.html"> </head>
	           <?php	
				}	

			}
			else{

				echo'<script type="text/javascript">
					    alert("Usuario no válido");
				    </script>';
				?> 
		    	<META http-equiv="refresh" content="1;url=index.html"> </head>
	           <?php

			}

			?>
		</div>
		<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>

	</body>
</html>