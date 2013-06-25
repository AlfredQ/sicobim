<?php 
require_once 'sesion.php';
?>
<!-- 
	 Created on 28/09/2011
	 <Nombre del archivo:acceso.php>  
	 <Versión del archivo: 1.0>
	 <Autor del archivo: Virginia Naassaneh>
	 <Breve explicación del contenido de el archivo: 
	 Vista de Acceso al Usuario>
-->
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  	<!-- Estilos -->
  	<link rel="shortcut icon" type="image/x-icon" href="../../assets/img/favicon.png"/>
  	<link rel="stylesheet" type="text/css" href="../../assets/css/prototipoSistema.css" />
  	<link rel="stylesheet" type="text/css" href="../../assets/css/custom-theme/jquery-ui-1.7.2.custom.css"/>  	
 	<!-- Estilos -->

  	<!-- Javascript -->
  	<!--<script type="text/javascript" src="assets/js/jquery-1.7.1.js"></script>-->
	<!--<script type="text/javascript" src="assets/js/jquery-ui-1.8.16.custom.min.js"></script>-->
	
	<script type="text/javascript" src="../../assets/js/jquery-1.7.2.min.js"></script>
	<script type="text/javascript" src="../../assets/js/jquery-ui-1.8.20.custom.min.js"></script>
	<script type="text/javascript" src="../../assets/js/jquery.validate.min.js"></script>
	<script type="text/javascript" src="../../assets/js/encriptacion.js"></script>
	<script type="text/javascript" src="../../assets/js/usuario/cambiarClave.js"></script>
	<script type="text/javascript" src="../../assets/js/prototipo.js"></script>

  	<!-- Javascript -->
  	<title>.::PÁGINAS BLANCAS::.</title>
</head>
<body>
	<center>
		<div id="cuerpoSistema">
   			<div id="bannerSistema"></div>
   			<div id="containerSistema">
				<form name="" method="post" class="cambiarClaveInicio" action="">
		         	<br/>
				 	<br/>
				
		        <!--INICIO FIELDSET CAMBIO DE CLAVE -->
				 	<p class="title" >Cambiar Clave</p>
				 	<br/>
				 	<br/>
				 	<table align="center">
						<tr class="titleColor">
							<td>Usuario:</td>
						    <td><input type="text" name="usuario" id="usuario" disabled="disabled" value='<?php $stsLogin= explode('pagb_',$_SESSION['stsLoginUsuario_pagb']); echo $stsLogin[1];?>'/></td>
						 </tr>   
				    <tr class="titleColor">
						<td><span class='obligatorio'></span> Clave Actual:</td>
		                <td><input type="password" name="claveActual" id="claveActual" /></td>
				    </tr>
				    <tr class="titleColor">
						<td><span class='obligatorio'></span> Clave Nueva:</td>
		                <td><input type="password" name="claveNueva" id="claveNueva"/></td>
				    </tr>
				   <tr class="titleColor">
						<td><span class='obligatorio'></span> Repetir Clave Nueva:</td>
		                <td><input type="password" name="confirmarclaveNueva" id="confirmarclaveNueva"/></td>
				    </tr>
				    <tr class="titleColor">
				     	  
				     	  <td colspan="2" align="center">
		              	    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		      				<img style="background:#eeeeee;" id="siimage" src="../../assets/captcha/securimage_show_example.php" />
		        			<a href="#"  title="Refrescar la Imagen" onclick="document.getElementById('siimage').src = '../../assets/captcha/securimage_show_example.php?sid=' + Math.random(); return false"><img src="../../assets/captcha/images/refresh.gif" alt="Reload Image" border="0" onclick="this.blur()"  /></a>
		        	     </td>
			    	</tr>
				    <tr class="titleColor">
					    <td><span class='obligatorio'></span> Caracteres</td>
					    <td><input type="text" name="caracteres" id="caracteres" size="20" /></td>
				    </tr> 
				   <!-- <div id="status" align="center" style="margin-top:5px; display:none; ">
		   			<img src="../img/cargando.gif" alt="" title="Cambiando..." style="margin-right:15px;" />
		   			<span>Cambiando</span>
		   		</div> --> 
				</table>
				<!--FIN CAMBIO DE CLAVE -->
		  		<br/>
				<br/>
		  		<p class="botones">
		   	  		<span>
		   				<input type="submit"  name="botonCambiarClaveInicio" id="botonCambiarClaveInicio" value="Aceptar" />
						<input type="button"  name="cancelarcambiarClave" id="cancelarcambiarClave" value="Cancelar" />
		      		</span>
		   		</p>
		</form>
	</div>
      		<div id="pieSistema">Todos los derechos reservados. Alcaldía de Caracas | © Copyright 2012</div>
    	</div>
    	<div id="error"></div>
    	<div id="msgCambiar"></div>
  	</center>
</body>
</html>