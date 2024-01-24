<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar Sesión</title>


</head>
<body>
<div class="Formulario" id="form-container1" >	
	
	<label class="bienv"><h2 class="bienvenida">Bienvenido A La Comunidad</h2></label>


	<form action="procesar.php" method = "POST" ><label>Iniciar Sesion</label>
	 <div class="casilla"> <input type="email" name="email" placeholder="Email"  class="inp" autocomplete="email"></div>
	<div class="casilla"> <input type="password" name="password" placeholder="Contraseña" class="inp" autocomplete="off"> </div>

	<?php
	if(isset($_GET['error'])) {
		$error = $_GET['error'];

		if($error == "incorrecto") {
			echo "<p>USUARIO O CONTRASEÑA INCORRECTOS</p>";
		}
		if($error == "vacio") {
			echo "<p>POR FAVOR RELLENE LOS CAMPOS</p>";
		}
	}
?>

	<div class="casilla-3"> <input type="submit" value="Entrar" class="is2"> </div>

	</form>
</div>
</body>
</html>