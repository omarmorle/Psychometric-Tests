<?php
session_start();
$economico = $_POST['groupOfDefaultRadiosB'];

$_SESSION['economico'] = $_SESSION['economico'] + $economico;
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Examen</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100" style="background-image: url('images/bg-01.jpg');">
			<div class="wrap-login100">
				<form method="post" class="login100-form validate-form" action="21.php">

					<span style="color:white; font-size:20px;">
						19. Quiere pedir un favor a un conocido, que beneficiará a la empresa para la cual trabaja:
					</span>
					<br><br>
					<span style="color:white; font-size:12px">A) Le explica los motivos y necesidades por las cuales requiere ese favor.</span>
					<div class="custom-control custom-radio" style="color:white; font-size:12px;">
					  <input value="1" type="radio" class="custom-control-input" id="defaultGroupExample1" name="groupOfDefaultRadiosA" checked>
					  <label class="custom-control-label" for="defaultGroupExample1">1</label>
					  <input value="2" type="radio" class="custom-control-input" id="defaultGroupExample2" name="groupOfDefaultRadiosA">
					  <label class="custom-control-label" for="defaultGroupExample2">2</label>
					  <input value="3" type="radio" class="custom-control-input" id="defaultGroupExample3" name="groupOfDefaultRadiosA">
					  <label class="custom-control-label" for="defaultGroupExample3">3</label>
					  <input value="4" type="radio" class="custom-control-input" id="defaultGroupExample3" name="groupOfDefaultRadiosA">
					  <label class="custom-control-label" for="defaultGroupExample3">4</label>
					</div>
					<span style="color:white; font-size:12px;">B) Le pide el favor sin mayor explicación.</span>
					<div class="custom-control custom-radio" style="color:white; font-size:12px;">
					  <input value="1" type="radio" class="custom-control-input" id="defaultGroupExample1" name="groupOfDefaultRadiosB">
					  <label class="custom-control-label" for="defaultGroupExample1">1</label>
					  <input value="2" type="radio" class="custom-control-input" id="defaultGroupExample2" name="groupOfDefaultRadiosB" checked>
					  <label class="custom-control-label" for="defaultGroupExample2">2</label>
					  <input value="3" type="radio" class="custom-control-input" id="defaultGroupExample3" name="groupOfDefaultRadiosB">
					  <label class="custom-control-label" for="defaultGroupExample3">3</label>
					  <input value="4" type="radio" class="custom-control-input" id="defaultGroupExample3" name="groupOfDefaultRadiosB">
					  <label class="custom-control-label" for="defaultGroupExample3">4</label>
					</div>
					<span style="color:white; font-size:12px;">C) Le hace creer que él será el más beneficiado al ofrecerle una retribución.</span>
					<div class="custom-control custom-radio" style="color:white; font-size:12px;">
					  <input value="1" type="radio" class="custom-control-input" id="defaultGroupExample1" name="groupOfDefaultRadiosC">
					  <label class="custom-control-label" for="defaultGroupExample1">1</label>
					  <input value="2" type="radio" class="custom-control-input" id="defaultGroupExample2" name="groupOfDefaultRadiosC">
					  <label class="custom-control-label" for="defaultGroupExample2">2</label>
					  <input value="3" type="radio" class="custom-control-input" id="defaultGroupExample3" name="groupOfDefaultRadiosC" checked>
					  <label class="custom-control-label" for="defaultGroupExample3">3</label>
					  <input value="4" type="radio" class="custom-control-input" id="defaultGroupExample3" name="groupOfDefaultRadiosC">
					  <label class="custom-control-label" for="defaultGroupExample3">4</label>
					</div>
					<span style="color:white; font-size:12px;">D) Le sugiere a su jefe que sea él quien se lo pida y explique la necesidad.</span>
					<div class="custom-control custom-radio" style="color:white; font-size:12px;">
					  <input value="1" type="radio" class="custom-control-input" id="defaultGroupExample1" name="groupOfDefaultRadiosD">
					  <label class="custom-control-label" for="defaultGroupExample1">1</label>
					  <input value="2" type="radio" class="custom-control-input" id="defaultGroupExample2" name="groupOfDefaultRadiosD"> 
					  <label class="custom-control-label" for="defaultGroupExample2">2</label>
					  <input value="3" type="radio" class="custom-control-input" id="defaultGroupExample3" name="groupOfDefaultRadiosD">
					  <label class="custom-control-label" for="defaultGroupExample3">3</label>
					  <input value="4" type="radio" class="custom-control-input" id="defaultGroupExample3" name="groupOfDefaultRadiosD" checked>
					  <label class="custom-control-label" for="defaultGroupExample3">4</label>
					</div>
					<br>
					<div class="container-login100-form-btn">
						<a href="2.php"><input type="submit" name="register" value="Siguiente"></input></a>
					</div>

				</form>
			</div>
		</div>
	</div>
	

	<div id="dropDownSelect1"></div>
	
<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>