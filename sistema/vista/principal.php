<?php 
require_once 'sesion.php';
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
  		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  		<!-- Estilos -->
		  <link rel="shortcut icon" type="image/x-icon" href="../../assets/img/favicon.png"/>
		  <link rel="stylesheet" type="text/css" href="../../assets/css/prototipoSistema.css" />
		  <link rel="stylesheet" type="text/css" href="../../assets/css/paginador.css" />
		  <link rel="stylesheet" type="text/css" href="../../assets/css/superfish.css" />
		  <link rel="stylesheet" type="text/css" href="../../assets/css/superfish-vertical.css" />
		  <link rel="stylesheet" type="text/css" href="../../assets/css/custom-theme/jquery-ui-1.7.2.custom.css" />
  		<!-- Javascript -->
		  <script type="text/javascript" src="../../assets/js/jquery-1.7.2.min.js"></script>
		  <script type="text/javascript" src="../../assets/js/jquery-ui-1.8.20.custom.min.js"></script>
		  <script type="text/javascript" src="../../assets/js/jquery.dataTables.min.js"></script>
		  <script type="text/javascript" src="../../assets/js/jquery.validate.min.js"></script>
		  <script type="text/javascript" src="../../assets/js/superfish.js"></script>
		  <script type="text/javascript" src="../../assets/js/prototipoSistema.js"></script>
		  <script type="text/javascript" src="../../assets/js/calendario.js"></script>
		  <script type="text/javascript" src="../../assets/js/calendario.js"></script>
		  <script type="text/javascript" src="../../assets/js/encriptacion.js"></script>
		  <script type="text/javascript" src="../../assets/js/inactividad.js"></script>
		  <script type="text/javascript" src="../../assets/js/jquery.meio.mask.js"></script>
  	    <title>.:: SICOBIM ::.</title>
 		<script type="text/javascript">
 		
		/*var t=false; 
 			function contar()
 			{ 
 				if(t)clearTimeout(t); 
 					s=arguments[0] || 0; 
 				if(s>1200)
 	 				location.href="../controlador/usuarios/usuarios.Control.php?opc=1";
 	 			s++; 
 	 			t=setTimeout("contar("+s+")",120000);
 	 			/*if(s>1200)
 					location.href="../controlador/usuarios/usuarios.Control.php?opc=1";
 				s++; 
 				t=setTimeout("contar("+s+")",120000); */
 			//}
 			//window.onload=document.onmousemove=contar; 
		</script> 
 	</head>
<!-- 	<body onload="contar();" onmousemove="contar();" onclick="contar();" onkeypress="contar();" >-->
	<body>
  	<center>
   		<div id="cuerpoSistema">
   			<div id="bannerSistema"></div>
   			<div id="containerSistema">
	      		<div id="saludo">
	       			<span class="msgSaludo">
				  		Bienvenido(a): <?php echo $_SESSION["stsNbUsuario_sicobim"]; ?>
		         		[<a href="#" class="cambioContrasena">  Cambiar Clave  </a>]
		          		[<a href="#" class="salida">  Salir  </a>]
	       			</span>
	      		</div>
	      		<div id="menuPrincipal">
	       			<!-- El menu -->
	       			<?php  if (($_SESSION["stsTipoUsuario_sicobim"]== "A") || ($_SESSION["stsTipoUsuario_sicobim"]== "J"))
	       			{ 
	        			require_once("menuPrincipal.php");
	       			}
	       		else if ($_SESSION["stsTipoUsuario_sicobim"]== "S")
	       			
	       				require_once("menuUsuario.php");
	       			
	       			?>
      			</div>
      			<div id="contenido">
      				<p class="items">Bienvenido al Sistema de control de Bienes Muebles (SICOBIM)</p>
      			</div>
   			</div>
   			<div id="pieSistema">Todos los derechos reservados. Alcaldía de Caracas © Copyright 2013</div>
  		</div>
  	</center>
	<div id='msgSalida'></div>
	<div id="error"></div>
 	</body>
</html>
