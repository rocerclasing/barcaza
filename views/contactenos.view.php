

<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Formulario envio</title>
	<link rel="stylesheet" href="../../barcaza/css/contactenos.css">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
</head>
<body>

<div class="contenedor">
	<!--header-->
	<div class="header">
	
		<img id="logo-izquierda" src="../../barcaza/img/logo.png" alt="">
		<h1>Formulario de envio</h1>
	
	</div>
	
	<!--formulario-->
	
	<div class="wrap">
		<form action="correos.php" method="post">
			
			<input type="text" class="form-control" name="name" id="name" placeholder="Nombre:" value="">
		
			<input type="text" class="form-control" name="mail"  placeholder="Correo:" value="">	

			<input type="text" class="form-control" name="asunto" id="asunto" placeholder="Asunto:" value="">			
		
			<textarea  name="message"class="form-control"  placeholder="Mensaje:"></textarea>
		
			<input type="submit" name="submit" class="btn btn-primary" value="Enviar Correo">
		</form>
	</div>

	<!--footer-->
	
  <div class="footer">
	
		<img id="logo-izquierda2" src="../../barcaza/img/logo.png" alt="">
		
	
	</div>




</div>
	
	
	
</body>
</html>