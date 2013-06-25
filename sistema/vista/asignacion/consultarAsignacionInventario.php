<?php
//session_start();
require_once '../sesion.php';
?>
<!-- 
	 Created on 28/01/2013
	 <Nombre del archivo:registrarSeccion.php>  
	 <Versión del archivo: 1.0>
	 <Autor del archivo: Mialgros Negrin>
	 <Breve explicación del contenido de el archivo: 
	 Vista de registro de Seccion>
	
-->

<div id="pestanaConsultarAsignacionInventario">
<ul>
	<li><a href="#tabConsultarAsignacionInventario"> Consultar Control de Inventario</a></li>
</ul>
<form id="frmConsultarAsignacionInventario" name="frmConsultarAsignacionInventario" method="post">
	<div id="tabCenso" class="contenedorPestanas">
		<div id="formularioHorizontal">
			<table align="center">
				<tr class="titleColor">
					<td>
						<table align="center" >
							<tr>
							
								<td>
									<label><span class='obligatorio'></span>N° Orden de Compra:</label>
								</td>
								<td>
									<input type="text"  name="numOrden" id="numOrden" maxlength="50" size="15">
								</td>
								<td >
									<input  type="submit" name="botonConsultarAsignacionInventario" id="botonConsultarAsignacionInventario" value="Consultar" />
								</td>
								
							</tr>
							
						</table>
						
						
					<div id="div_1_consulta_usuarios_cabecera" class="celdaFilaLeft" style="clear: both; display: none; width:944px;">
					<p align='center'class='item' style='width:800px;'>Listado de Usuarios</p><br>
					
					<table align='center' class='tableSelect'>
						<tr class='titleColor'>
							<td style="width: 20px;">ID</td>
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
						  <?php
                                       
                                        $acta = $_SESSION['ArrId_Acta'];
                                        
                                     /*   $nombreCoor = $_SESSION['ArrDescripcionCoor'];

                                        $codigoDepe = $_SESSION['ArrId_Depe'];
                                        $nombreDepe = $_SESSION['ArrDescripcion'];

                                        $codigoDire = $_SESSION['ArrId_Dire'];
                                        $nombreDire = $_SESSION['ArrDescripcionDire'];

                                        $codigoUnid = $_SESSION['ArrId_Unidad'];
                                        $nombreUnid = $_SESSION['ArrDescripcionUnidad'];

                                        for ($index = 0; $index < $contadorCoor; $index++) {
                                            $cont = $index + 1;
                                            echo"
	                 				<tr class='gradeX'>
			                 				<td align='center'>" . $cont . "</td>
			                 				<td align='center' width='15%'>" . $codigoCoor[$index] . "</td>
			                 				<td align='left' width='14%'>" . $nombreCoor[$index] . "</td>  
											<td align='left' width='15%'>" . $nombreDepe[$index] . "</td>
			                 				<td align='left' width='14%'>" . $nombreDire[$index] . "</td>  
			                 				<td align='left' width='14%'>" . $nombreUnid[$index] . "</td>  
			                 				<td align='center'>
			                 				
	                 						<a class='tablaCoordinacionModificar'>
	                 						<input type='hidden' name='cdCoor$index' id='cdCoor$index' value='" . $id[$index] . "'/>
	                 						<input type='hidden' name='codigoDepe$index' id='codigoDepe$index' value='" . $codigoDepe[$index] . "'/>
	                 						<input type='hidden' name='codigoDire$index' id='codigoDire$index' value='" . $codigoDire[$index] . "'/>
	          								<input type='hidden' name='codigoUnid$index' id='codigoUnid$index' value='" . $codigoUnid[$index] . "'/>
	                 						<img src='../../assets/img/edit.png' border='0' title='Modificar'></a>
	                 						
	                 						<a class='tablaCoordinacionEliminar'>
	                 						<img src='../../assets/img/eliminar.png' border='0' title='Eliminar'></a>
	                 						</td>
	                 						
	          						</tr>";
                                        }*/
                                        ?>
						
			
				
					</td>						
				</tr>
		 </table>
		</div>
			                       	
		</div>
</form>
</div>
<div id="error"></div>
