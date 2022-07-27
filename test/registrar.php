<?php 

include("con_db.php");

if (isset($_POST['register'])) 
{
    if (strlen($_POST['name']) >= 1 && strlen($_POST['pass']) >= 1 && $_POST['pass']%11==0) 
    {
	    $recuperado = trim($_POST['name']);
		$name = strtoupper($recuperado);
	    $pass = trim($_POST['pass']);
	    $fechareg = date("d/m/y");
	    $consulta = "INSERT INTO datos(nombre, codigo, resultado, fecha_registro) VALUES ('$name','$pass','No evaluado','$fechareg')";
	    $resultado = mysqli_query($conex,$consulta);
	    if ($resultado)
	    {
	    	?> 
	    	<META http-equiv="refresh" content="1;url=examen/index.php"> </head>
           <?php
	    } 
	    else 
	    {
	    	?> 
	    	<h4 class="bad">¡Ha ocurrido un error! contactate a omarmorleno@gmail.com</h4>
           <?php
	    }
    }
    else
    {
    	?> 
    	<h3 class="bad">Código erroneo</h3>
    	<?php
    }
}

?>