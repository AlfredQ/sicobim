<?php
//session_start();
require_once '../sesion.php';
?>
<!-- 
	 Created on 28/01/2013
	 <Nombre del archivo:registrarSeccion.php>  
	 <Versión del archivo: 1.0>
	 <Autor del archivo: Jose Echeverria>
	 <Breve explicación del contenido de el archivo: 
	 Vista de registro de Seccion>
	
-->

<script language="JavaScript">
function Ocultar(){
    var div = document.getElementById('divOculto');
    var div1 = document.getElementById('divOculto1');
    var div2 = document.getElementById('divOculto2');
    div.style.display='none';
    div1.style.display='none';
    div2.style.display = 'none';
}


function Mostrar(){
    var div = document.getElementById('divOculto');
    var div1 = document.getElementById('divOculto1');
    var div2 = document.getElementById('divOculto2');
    var div3 = document.getElementById('divOculto3');
    var div4 = document.getElementById('divOculto4');
    var tr5 = document.getElementById('trOculto5');
    var div6 = document.getElementById('divOculto6');
    div.style.display = '';
    div1.style.display = '';
    div2.style.display = '';
    div3.style.display = '';
    div4.style.display = '';
    tr5.style.display = '';
    div6.style.display = '';
}

function MostrarJusti(){

    var div3 = document.getElementById('divOculto3');
    var div4 = document.getElementById('divOculto4');
   
   
    div3.style.display = '';
    div4.style.display = '';
   
}

function Limpiar()
{
	document.frmRegistrarAsignacionInventario.nActa.value = "";
	document.frmRegistrarAsignacionInventario.nOrden.value = "";
	document.frmRegistrarAsignacionInventario.fechaOrden.value = "";
	document.frmRegistrarAsignacionInventario.nFactura.value = "";
	document.frmRegistrarAsignacionInventario.fechaFactura.value = "";
	document.frmRegistrarAsignacionInventario.cbo_proveedor.value = "";
	document.frmRegistrarAsignacionInventario.cbo_dependencia.value = "";
	document.frmRegistrarAsignacionInventario.cbo_direccion.value = "";
	document.frmRegistrarAsignacionInventario.cbo_unidad.value = "";
	document.frmRegistrarAsignacionInventario.cbo_coordinacion.value = "";
}
</script>  


<script language="javascript" type="text/javascript"> /* Abrimos etiqueta de código Javascript */
	/* 
	  	Partimos por definir una variable llamada posicionCampo. 
		Esta variable servirá como índices para marcar cuantos campos se han agregado dinámicamente.
		La inicializamos en 1, ya que la primera llamada ocurrirá cuando no hayan campos agregados
	*/
	/* Declaramos la función agregarUsuario( ) */
	var posicionCampo=1; 
	/* Declaramos una variable llamada nuevaFila y a ella le asignamos la recuperación del elemento HTML designado por el id tablaUsuarios.
	En este caso, la tabla en la que manejamos los campos dinámicamente y llamamos a la función insertRow para agregar una fila */
	function agregarBien(){
			/* Asignamos a la propiedad id de nuevaFila el valor de posicionCampo, que inicializamos en 1 */
			nuevaFila = document.getElementById("tablaBienes").insertRow(-1);
			/* Luego en otra variable llamada nuevaCelda, agregaremos una celda a la tabla, mediante la función insertCell */
			/* Con la celda creada, insertamos dinámicamente un campo de texto, el cual almacenaremos en un array llamado nombre, con una posición equivalente a la variable posicionCampo.
			Una vez terminado, repetimos la acción para el sitio Web y correo, asignando al array respectivo */ 
			nuevaFila.id=posicionCampo;  nuevaCelda=nuevaFila.insertCell(-1);
			/* Finalmente añadimos una última celda para las acciones y ahí agregamos un botón llamado Eliminar, el cual al ser presionado (definiendo la propiedad onClick), llamará a una función eliminarUsuario, pasando como parámetro la fila correspondiente */ 
			nuevaCelda.innerHTML="<td bgcolor='white'><input type='text' size='10' name='num["+posicionCampo+"]' ></td>";
			nuevaCelda=nuevaFila.insertCell(-1); nuevaCelda.innerHTML="<td bgcolor='white'> <input type='text' size='10' name='nunInvi["+posicionCampo+"]' ></td>";
			nuevaCelda=nuevaFila.insertCell(-1); nuevaCelda.innerHTML="<td bgcolor='white'> <input type='text' size='10' name='subGrupo["+posicionCampo+"]' ></td>";
			nuevaCelda=nuevaFila.insertCell(-1); nuevaCelda.innerHTML="<td bgcolor='white'> <input type='text' size='10' name='seccion["+posicionCampo+"]' ></td>";			
			nuevaCelda=nuevaFila.insertCell(-1); nuevaCelda.innerHTML="<td bgcolor='white'> <input type='text' size='10' name='producto["+posicionCampo+"]' ></td>";
			nuevaCelda=nuevaFila.insertCell(-1); nuevaCelda.innerHTML="<td bgcolor='white'> <input type='text' size='10' name='caracteristicas["+posicionCampo+"]' ></td>";
			nuevaCelda=nuevaFila.insertCell(-1); nuevaCelda.innerHTML="<td bgcolor='white'> <input type='text' size='10' name='valor["+posicionCampo+"]' ></td>"; 
			nuevaCelda=nuevaFila.insertCell(-1); nuevaCelda.innerHTML="<td bgcolor='white'><input type='button' value='Eliminar' onclick='Quitar(this)'></td>";
			/* Incrementamos el valor de posicionCampo para que empiece a contar de la fila siguiente */
			posicionCampo++;
		}
	/* Definimos la función eliminarUsuario, la cual se encargará de quitar la fila completa del formulario.
	No es necesario hacer modificaciones sobre este código */
	function Quitar(obj){
			var oTr = obj; while(oTr.nodeName.toLowerCase()!='tr'){
				oTr=oTr.parentNode;
			}
			var root = oTr.parentNode; root.removeChild(oTr);
		}
/* Cerramos el código Javascript */
</script>
<div id="pestanaRegistrarAsignacionInventario">
<ul>
	<li><a href="#tabRegistrarAsignacionInventario"> Asignaci&oacute;n de Control de Inventario</a></li>
</ul>
<form id="frmRegistrarAsignacionInventario" name="frmRegistrarAsignacionInventario" method="post">
	<div id="tabCenso" class="contenedorPestanas">
		<div id="formularioHorizontal">
			<table align="center">
				<tr class="titleColor">
					<td colspan="4">
						<table align="center">
							<tr>
								<td>					
									<input type="radio" name="control" id="Compra" value="" onclick="Mostrar(), Limpiar();">
									<label>Compra: </label>
								</td>
								<td>
									<input type="radio" name="control" id="Justiprecio" value="" onclick="MostrarJusti(), Ocultar(), Limpiar();">
									<label>Justiprecio: </label>
								</td>
							</tr>
						</table>
					</td>						
				</tr>
				<tr class="titleColor" style="display:none;" id="divOculto">
					<td>
						<label><span class='obligatorio'></span>N° Acta:</label>
					</td>
					<td >
						<input type="text" name="nActa" id="nActa" maxlength="50" size="15">
					</td>
					<td>
						<label><span class='obligatorio'></span>N° Orden:</label>
					</td>
					<td>
						<input type="text" name="nOrden" id="nOrden" maxlength="50" size="15">
					</td>			
				</tr>
			  	<tr class="titleColor" style="display:none;" id="divOculto1">
			  		<td>
						<label><span class='obligatorio'></span>Fecha Orden:</label>
					</td>
					<td>
						<input type="text" name="fechaOrden" id="fechaOrden" maxlength="50" size="15">
					</td>
			  		<td>
						<label><span class='obligatorio'></span>N° Factura:</label>
					</td>
					<td>
						<input type="text" name="nFactura" id="nFactura" maxlength="50" size="15">
					</td>
				</tr>
				<tr class="titleColor" style="display:none;" id="divOculto2">
					<td>
						<label><span class='obligatorio'></span>Fecha Factura:</label>
					</td>
					<td>
						<input type="text"  name="fechaFactura" id="fechaFactura" maxlength="50" size="15">
					</td>
					<td>
						<label><span class='obligatorio'></span>Proveedor:</label>
					</td>
					<td>
						<select name="cbo_proveedor" id="cbo_proveedor">
							<option value="">- Seleccione -</option>
						</select>
					</td>
			  	</tr>		
			  	<tr class="titleColor" style="display:none;" id="divOculto3">
					<td>
						<label><span class='obligatorio'></span>Dependencia:</label>
					</td>
					<td>
						<select name="cbo_dependencia" id="cbo_dependencia">
							<option value="">- Seleccione -</option>
						</select>
					</td>
					<td>
						<label><span class='obligatorio'></span>Direcci&oacute;n:</label>
					</td>
					<td >
						<select name="cbo_direccion" id="cbo_direccion">
							<option value="">- Seleccione -</option>
						</select>
					</td>
			  	</tr>	
			    <tr class="titleColor" style="display:none;" id="divOculto4">
					<td>
						<label><span class='obligatorio'></span>Unidad:</label>
					</td>
					<td>
						<select name="cbo_unidad" id="cbo_unidad">
							<option value="">- Seleccione -</option>
						</select>
					</td>
					<td>
						<label><span class='obligatorio'></span>Coordinaci&oacute;n:</label>
					</td>
					<td >
						<select name="cbo_coordinacion" id="cbo_coordinacion">
							<option value="">- Seleccione -</option>
						</select>
					</td>
			  	</tr>				  
			</table>			
			<div class="tablaBtn" id="div_2_btn">
				<table align="center">
					<tr style="display:none;" id="trOculto5">
						<td>
							<input type="button" onClick="agregarBien()" value="Agregar Bien"/>
							<input type="submit" name="botonGuardarAsignacionInventario" id="botonGuardarAsignacionInventario" value="Guardar" />
							<input type="submit" name="botonSalir" id="botonSalir" value="Salir" />
						</td>
					</tr>
				</table>
			</div>
			<div class="tablaBtn" style="display:none;" id="divOculto6">			
				<table id="tablaBienes" align="center" border="1" bgcolor="grey" width="95%">
					<tr> 
						<td width='5%' bgcolor="white">N°</td>
						<td width='20%' bgcolor="white">N° Inventario</td>
						<td bgcolor="white">SubGrupo</td> 
						<td bgcolor="white">Secci&oacute;n</td>
						<td bgcolor="white">Producto</td>
						<td bgcolor="white">Valor</td>
						<td bgcolor="white">Caracteristicas</td>
						<td bgcolor="white">Acciones</td>
					 </tr>
				</table>
			</div>
		</div>
	</div>
</form>
</div>
<div id="error"></div>
