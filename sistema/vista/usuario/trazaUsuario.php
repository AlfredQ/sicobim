<?php
require_once '../sesion.php';

/*
 * <Nombre del archivo: trazaUsuario.php>
 * <Fecha de creación del archivo: 18/06/2012>
 * <Versión del archivo: 1.0>
 * <Autor del archivo: Darimer Torres>
 * <Breve explicación del contenido de el archivo: Traza Usuario>
*/
?>

<div id="pestanaTrazaUsuario" class="tablaGeneralInfo2">
	<form id="frmConsultarTrazaUsuario" name="frmConsultarTrazaUsuario" method="post">
		<div class="celdaFilaLeft2">
			<div class="celdaFila3">
				Tipo Movimiento:
			</div>
			
			<div class="celdaFila4">
				<select name="cbo_1_tipoMovimiento" id="cbo_1_tipoMovimiento">
        			<option value="">- Seleccione -</option>
        			<option value="UPDATE">Actualizar</option>
        			<option value="INSERT">Agregar</option>
        			<option value="DELETE">Eliminar</option>
				</select>
			</div>
			
			<div class="celdaFila5">
				Tabla:
			</div>
			
			<div class="celdaFila4">
				<select name="cbo_1_tabla" id="cbo_1_tabla">
        			<option value="">- Seleccione -</option>
        			<option value="inventario">Inventario</option>
        			<option value="traspaso">Traspasos</option>
        			<option value="coordinacion">Coordinaci&oacute;n</option>
        			<option value="direccion">Direcci&oacute;n</option>
        			<option value="dependencia">Dependencia</option>
        			<option value="unidad">Unidad</option>
        			<option value="usuario">Usuario</option>
        			<option value="proveedor">Proveedor</option>
        			<option value="trabajador">Orden de Compra</option>
        			<option value="producto">Producto</option>
				</select>
			</div>
		</div>
		
		<div class="celdaFilaLeft2">
			<div class="celdaFila3">
				Fecha:
			</div>
			
			<div class="celdaFila4">
				<input type="text" name="fechaConsulta" id="fechaConsulta" size="8">
			</div>
			
			<div class="celdaFila5">
				Nombre Usuario:
			</div>
			
			<div class="celdaFila4">
				<select name="cbo_1_nombreUsuario" id="cbo_1_nombreUsuario">
        			<option value="">- Seleccione -</option>
				</select>
			</div>
		</div>
		
		<div class="celdaFilaLeft2" style="clear: both; text-align: center; width: 796px;">
			<input type="button" id="btn_1_consultaTrazaUsuario" name="btn_1_consultaTrazaUsuario" value="Consultar" />
		</div>
	</form>
</div>

<div id="pestanaResultadoTrazaUsuario" style="display: none; margin-top: 90px;">
	<form id="frmResultadoTrazaUsuario" name="frmRegistrarCenso" method="post">
		<div class="tablaGeneralInfo798" id="div_1_traza_auditoria_titulo">
        	<div class=celdaFila796>
        		<div class="celdaFilaLeft" id="div_1_traza_auditoria_cabecera">
					<div id="celdaTitulo798_115_inicio">
        				<?php echo "Ip";?>
        			</div>
					
					<div id="celdaTitulo798_84">
        				<?php echo "Movimiento";?>
        			</div>
					
        			<div id="celdaTitulo798_200">
        				<?php echo "Tabla";?>
        			</div>
        			
        			<div id="celdaTitulo798_84">
        				<?php echo "Id Registro";?>
        			</div>
        			
        			<div id="celdaTitulo798_200">
        				<?php echo "Fecha";?>
        			</div>
        			
        			<div id="celdaTitulo798_185">
        				<?php echo "Usuario";?>
        			</div>
        			
        			<div id="celdaTitulo798_120">
        				<?php echo "Esquema";?>
        			</div>
        		</div>
        		
				<!-- Div para colocar los registros de la consulta -->
				<div id="div_1_traza_auditoria_global" class="celdaFilaLeft" style="clear: both; display: none;">
					
				</div>
				
        		<!-- Div para colocar los botones de la consulta -->
				<div id="div_1_traza_auditoria_paginacionGlobal" class="divGlobalPaginate1174">
					<div id="div_1_traza_auditoria_paginacion"></div>
	            </div>
				
				<!-- Div para colocar que hay problemas de conexion de la tabla Datos Registrales (Oficina Subalterna de Registro) -->
        		<div id="div_1_traza_auditoria_noHayConexion" class="msjAdvertencia" style="display:none;">
					<?php echo "Por favor intente m&aacute;s tarde, tenemos problemas t&eacute;cnicos";?>
        		</div>
        	</div>
        </div>
	</form>
</div>