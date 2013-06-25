<!-- 
	 Created on 14/01/13
	 <Nombre del archivo:acceso.php>  
	 <Versión del archivo: 1.0>
	 <Autor del archivo: Milagros negrin>
	 <Breve explicación del contenido de el archivo: 
	 Vista de Acceso al SICOBIM>
-->
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  	<!-- Estilos -->
  	<link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.png"/>
  	<link rel="stylesheet" type="text/css" href="assets/css/prototipo.css" />
  	<link rel="stylesheet" type="text/css" href="assets/css/custom-theme/jquery-ui-1.7.2.custom.css"/>  	
 	<!-- Estilos -->

  	<!-- Javascript -->
  	<!--<script type="text/javascript" src="assets/js/jquery-1.7.1.js"></script>-->
	<!--<script type="text/javascript" src="assets/js/jquery-ui-1.8.16.custom.min.js"></script>-->
	
	<script type="text/javascript" src="assets/js/jquery-1.7.2.min.js"></script>
	<script type="text/javascript" src="assets/js/jquery-ui-1.8.20.custom.min.js"></script>
	<script type="text/javascript" src="assets/js/jquery.validate.min.js"></script>
	<script type="text/javascript" src="assets/js/encriptacion.js"></script>
	<script type="text/javascript" src="assets/js/prototipo.js"></script>	
	<script type="text/javascript" src="assets/js/prototipoSistema.js"></script>
	<script type="text/javascript" src="assets/js/numerico.js"></script>
  	<!-- Javascript -->
  	<script>
  	
  	</script>
  	
  	<title>.:: SICOBIM ::.</title>
</head>
<body>
	<center>
    	<div id="cuerpo">
	     	<div id="banner"></div>
	      	<div id="container">
	      		<p class="item">Sistema para el Control de Bienes Muebles(SICOBIM)</p>
	      		<br/>
	      		<br/>
	      		<br/>
	      		<form id="frmAcceso" name="frmAcceso" method="post" <?php echo "autocomplete='off'" ?>>
		        	<fieldset class="accesoF">
		        		<legend>Acceso</legend>
	           			<div id="divMsj" style="display:none;"></div>
	           			<table width="100%">
	              			<tr>
	                 			<td width="40%">&nbsp;</td>
	                 			<td width="60%">&nbsp;</td>
	              			</tr>
	              			<tr>
	                 			<td class="celda">Usuario:</td>
	                 			<td align="left">
	                    			<input type="text" name="stsLoginUsuario"  id='stsLoginUsuario' size="12" value=""/>
	                 			</td>
	              			</tr>
	              			<tr>
	                 			<td class="celda">Clave:</td>
	                 			<td class="celda2">
	                    			<input type="password" name="stsClave" id="stsClave" size="12" value=""/>
	                 			</td>
	              			</tr>
	              			<tr>
	              				<td colspan="2" align="center">
	              				    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
     			 					<img id="siimage" src="assets/captcha/securimage_show_example.php" />
        							<a href="#" title="Refrescar la Imagen" onclick="document.getElementById('siimage').src = 'assets/captcha/securimage_show_example.php?sid=' + Math.random(); return false"><img src="assets/captcha/images/refresh.gif" alt="Reload Image" border="0" onclick="this.blur()"  /></a>
        					    </td>
	              			
	              			
	              			
	              			<!--  	<td colspan="2" align="center">
	              				    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
     			 					<img id="siimage" src="assets/captcha/securimage_show_example.php" />
        							<a href="#" title="Refrescar la Imagen" onclick="document.getElementById('siimage').src = 'assets/captcha/securimage_show_example.php?sid=' + Math.random(); return false"><img src="assets/captcha/images/refresh.gif" alt="Reload Image" border="0" onclick="this.blur()"  /></a>
        					    </td>-->
							</tr>
							<tr>
								<td class="celda">Caracteres:</td>
					            <td><input type="text" name="stsCaptcha" id="stsCaptcha" size="12"  value="" /> </td>
				            </tr>  
	              			<tr>
	                 			<td>&nbsp;</td>
	                 			<td class="celda2">
	                    			<input type="submit" id="botonEntrar" value="Entrar" /> 
				                </td>
	             			</tr>
	             			<tr>
	                 			<td>&nbsp;</td>
	                 			<td>&nbsp;</td>
	              			</tr>
	              			<tr>
	                 			<td colspan="2"></td>
	             			</tr>
	         			</table>
	   			</fieldset>
		   	</form>
	   		</div>
                <div id="pie">Todos los derechos reservados. Alcald&iacute;a de Caracas | � CopyLeft 2013</div>
    	</div>
    	<div id="error"></div>
	<div id="msgCambiar"></div>  	
	</center>
</body>
</html>
