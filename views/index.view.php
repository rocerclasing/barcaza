<html>
	<head>
		<title>Menu Desplegable</title>
		<link rel="stylesheet" href="../../barcaza/css/estilos.css">
		<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
		<style type="text/css">
			
			ul, ol {
				list-style:none;
			}
			
			.nav {
				width:500px; /*Le establecemos un ancho*/
				margin:0 auto; /*Centramos automaticamente*/
			}

			.nav > li {
				float:left;
			}
			
			.nav li a {
				background-color:#000;
				color:#fff;
				text-decoration:none;
				padding:10px 12px;
				display:block;
			}
			
			.nav li a:hover {
				background-color:#434343;
			}
			
			.nav li ul {
				display:none;
				position:absolute;
				min-width:140px;
			}
			
			.nav li:hover > ul {
				display:block;
			}
			
			.nav li ul li {
				position:relative;
			}
			
			.nav li ul li ul {
				right:-180px;
				top:0px;
			}
			
		</style>
	</head>
	<body>
    <div class="contenedor">
		
		<header class="header">
		   
			<img id="logo-izquierda"src="../../barcaza/img/logo.png" alt="">
		   
      </header>
		   
		   <nav> <!-- Aqui estamos iniciando la nueva etiqueta nav -->
				<ul class="nav">
          <li><a href="">Historial</a>

          <ul>
              <li><a href="../../barcaza/views/historial.view.php">Acerca de</a></li>
          </ul>
        
           </li>
					<li><a href="">Servicios</a>
						<ul>
							<li><a href="../../barcaza/servicios/views/remolque.view.html">Remolque</a></li>
							<li><a href="../../barcaza/views/servicios/views/cabotaje.view.php">Cabotaje de carga</a></li>
							<li><a href="../../barcaza/views/servicios/views/arriendocascodesnudo.view.php">Arriendo casco desnudo</a></li>
             				 <li><a href="../../barcaza/views/servicios/views/mantencionesyreparaciones.view.php">Mantenciones y reparaciones</a>
              				<li><a href="../../barcaza/views/servicios/views/fabricaciondehuinchesaltolinaje.view.php">Fabricacion de huinches de alto linaje</a>
							</li>
						</ul>
					</li>
         			<li><a href="">Naves</a>
					
					<ul>
						
					<li><a href="views/Naves/views/EIZER1.view.php">Eizer1</a></li>	
					<li><a href="views/Naves/views/Gewain.view.php">Gewain</a></li>
					<li><a href="views/Naves/views/RemolcadormenorEthanWees1.php">Ethan Wees 1</a></li>
					<li><a href="views/Naves/views/CatamaránWile-Noe.php">Wile-Noe</a></li>
					<li><a href="views/Naves/views/chiporro.view.php">Chiporro C.</a></li>
					<li><a href="views/Naves/views/proyecto2remolcadormenor.view.php">Proyecto2 Remolcador Menor</a></li>	
						
					</ul>
					
					</li>
							
          <li><a href="">Contacto</a>
          <ul>
              <li><a href="../../barcaza/views/contactenos.view.php">Ayuda</a></li>
          </ul>
          <li><a href="">Clientes</a>
          <ul>
              <li><a href="../../barcaza/views/clientes.view.php">Ayuda</a></li>
          </ul>
        
        </li>
				</ul>
		 </nav>
			 
		   
		  <!--footer-->
	  <div class="footer">
	  
	  <img id="logo-izquierda2" src="../../barcaza/img/logo.png" alt="">
	  
	  	</div>
			
			
		   
		   
		
		   
		
	</div>
	</body>
</html>