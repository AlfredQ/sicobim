<?php
//session_start();
require_once '../sesion.php';
?>

<script type="text/javascript" src="../../assets/js/jquery.documento.js"></script>
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
   		<li><a href="#tabConsultarUsuario">Consultar Usuario</a></li>
	</ul>
	
	<form id="frmConsultarUsuario" name="frmConsultarUsuario" method="post">
		<div id="tabConsultarUsuario" class="contenedorPestanas">
			<div id="formularioHorizontal">
				<table align="center">
					<tr class="titleColor">
						<td>
							<label>C&eacute;dula: </label>
						</td>
						
						<td>
							<input type="text" name="cedula" id="cedula" maxlength="8" size="20">
						</td>
						
						<td>
							<input type="button" name="botonConsultarUsuario" id="botonConsultarUsuario" value="Consultar" />
						</td>
					</tr>
				</table>
				
				<div id="div_1_consulta_usuarios_cabecera" class="celdaFilaLeft" style="clear: both; display: none; width:944px;">
					<p align='center'class='item' style='width:800px;'>Lista de Usuarios</p><br>
					
					<table align='center' class='tableSelect'>
						<tr class='titleColor'>
							<td style="width: 80px;">Cédula</td>
							<td style="width: 160px;">Nombre y Apellido</td>
							<td style="width: 200px;">Login</td>
							<td style="width: 200px;">Tipo de Usuario</td>
							<td style="width: 80px;">Estatus</td>
							<td style="width: 100px;">N&uacute;mero de Tel&eacute;fono</td>
							<td style="width: 40px;" align='center' colspan='3'>Acci&oacute;n</td>
						</tr>
					</table>
				</div>
				
				<!-- Div para colocar los registros de la consulta -->
				<div id="div_1_consulta_usuarios_global" class="celdaFilaLeft" style="clear: both; display: none; width:944px;">
					
				</div>
				
        		<!-- Div para colocar los botones de la consulta -->
				<div id="div_1_consulta_usuarios_paginacionGlobal" class="divGlobalPaginate944" style="display: none;">
					<div id="div_1_consulta_usuarios_paginacion"></div>
	            </div>
				
				<!-- Div para colocar que hay problemas de conexion de la tabla Datos Registrales (Oficina Subalterna de Registro) -->
        		<div id="div_1_consulta_usuarios_noHayConexion" class="msjAdvertencia" style="display:none;">
					<?php echo "Por favor intente m&aacute;s tarde, tenemos problemas t&eacute;cnicos";?>
        		</div>
			</div>
		</div>
	</form>
</div>

<div id="error"></div>