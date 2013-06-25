<?php 
//session_start();
require_once '../sesion.php';
?>
<!-- 
	 Created on 28/01/2013
	 <Nombre del archivo:registrarUsuario.php>  
	 <Versión del archivo: 1.0>
	 <Autor del archivo: Milagros Negrín>
	 <Breve explicación del contenido de el archivo: 
	 Vista de registro de usuario>
	
--> 
<div id="pestanaRegistrarUsuario">
 	<ul>
   		<li><a href="#tabRegistrarUsuario">Registrar Usuario</a></li>
	</ul>
	
	<form id="frmRegistrarUsuario" name="frmRegistrarUsuario" method="post">
		<div id="tabCenso" class="contenedorPestanas">
			<div id="formularioHorizontal">
				<table align="center">
					<tr class="titleColor">
						
						<td>
							<label><span class='obligatorio'></span>C.I</label>
						</td>	
						<td>
	                        <input type="text" name="cedula" id="cedula" maxlength="8" size="20">    										
						</td>
					</tr>
					<tr class="titleColor">
						<td>
							<label><span class='obligatorio'></span>Nombre y Apellido:</label>
						</td>
						
						<td>
							<input type="text" name="stsNombreUsuario" id="stsNombreUsuario" size="20">
						</td>
					</tr>
					
					<tr class="titleColor">
						<td>
							<label><span class='obligatorio'></span>Login:</label>
						</td>
						
						<td>
							<input type="text" name="stsNbBdUsuario" id="stsNbBdUsuario" maxlength="20" size="20">
						</td>
					</tr>
					<tr class="titleColor">
						<td>
							<label><span class='obligatorio'></span>Tipo de Usuario:</label>
						</td>
						
						<td>
							<select name="tipoUsuario" id="tipoUsuario">
								<option value="">- Seleccione -</option>
								<option value="A">Analista</option>
								<option value="J">Jefe</option>
								<option value="S">Supervisor de Seguridad</option>
							</select>
						</td>
					</tr>
						<tr class="titleColor">
						<td>
							<label><span class='obligatorio'></span>Organizaci&oacute;n:</label>
						</td>
						
						<td>
						<!-- Select que definie la organizacion donde trabaja el el usuario
						 1=Alcaldia, 2=IMPC -->
							<select name="stsNbOrga" id="stsNbOrga" >
								<option value="">- Seleccione -</option>
								<option value="1">Alcald&iacute;a del Municipio Bolivariano Libertador</option>
								<option value="2">Instituto Municipal de Credito Popular</option>
							</select>
						</td>
					</tr>
					<tr class="titleColor">
						<td>
							<label><span class='obligatorio'></span>N&uacute;mero de Tel&eacute;fono:</label>
						</td>
						
						<td>
							<input type="text" name="stsNuTelefono" id="stsNuTelefono" maxlength="11" size="20">
						</td>
					</tr>
					<tr class="titleColor">

              			<td colspan="2" align="center">
              			    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
     	 					<img style="background:#eeeeee;" id="siimage" src="../../assets/captcha/securimage_show_example.php" />
        					<a href="#"  title="Refrescar la Imagen" onclick="document.getElementById('siimage').src = '../../assets/captcha/securimage_show_example.php?sid=' + Math.random(); return false"><img src="../../assets/captcha/images/refresh.gif" alt="Reload Image" border="0" onclick="this.blur()"  /></a>
        			    </td>
					</tr>
					<tr class="titleColor">
						<td class="celda">Caracteres:</td>
			            <td><input type="text" name="stsCaptcha" id="stsCaptcha" size="12"  value="" /> </td>
		            </tr>
				</table>
				<div class="tablaBtn" id="div_2_btn">
					<input type="submit" name="botonGuardarUsuario" id="botonGuardarUsuario" value="Guardar" />
				</div>
			</div>
		</div>	
	</form>
</div>
<div id="error"></div>