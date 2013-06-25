<?php 
//session_start();
require_once '../sesion.php';
?>
<!-- 
	 Created on 29/09/2011
	 <Nombre del archivo:datosCentroVista.php>  
	 <Versión del archivo: 1.0>
	 <Autor del archivo: Virginia Naassaneh>
	 <Breve explicación del contenido de el archivo: 
	 Vista de los Datos del Centro>
--> 
<div id="pestanaRegistrarUsuario">
 	<ul>
   		<li><a href="#tabModificarUsuario">Modificar Usuario</a></li>
	</ul>
	
	<form id="frmModificarUsuario" name="frmModificarUsuario" method="post">
		<div id="tabModificarUsuario" class="contenedorPestanas">
			<div id="formularioHorizontal">
				<table align="center">
					<tr class="titleColor">
						
						<td>
							<label>C.I</label>
						</td>	
						<td>
	                        <input type="text" name="cedula" readonly="readonly" id="cedula" maxlength="8" size="20">    										
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
							<label>Login:</label>
						</td>
						
						<td>
							<input type="text" readonly="readonly" name="stsNbBdUsuario" id="stsNbBdUsuario" maxlength="20" size="20">
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
								<option value="J">Jefe de Unidad</option>
								<option value="R">Registrador</option>
								<option value="S">Supervisor de Seguridad</option>
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
						<td>
							<label><span class='obligatorio'></span>Estatus:</label>
						</td>
						<td>
							<input type="checkbox" name="bolEstatus" id="bolEstatus">
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
				<input type="hidden" name="stsLogin" id="stsLogin"  size="20">
				<input type="hidden" name="stsTipoUsuario" id="stsTipoUsuario"  size="20">
					
				<div class="tablaBtn" id="div_2_btn">
					<input type="submit" name="botonModificarUsuario" id="botonModificarUsuario" value="Guardar" />
				</div>
			</div>
		</div>	
	</form>
</div>
<div id="error"></div>