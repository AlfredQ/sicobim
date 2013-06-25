<?php
//session_start();
require_once '../sesion.php';

?>
<!-- 
	 Created on 29/04/2013
	 <Nombre del archivo:registrarSubGrupo.php>  
	 <Versión del archivo: 1.0>
	 <Autor del archivo: Milagros Negrin>
	 <Breve explicación del contenido de el archivo: 
	 Vista de registro de Subgrupo>
	
-->
<style type="text/css" media="screen">
@import "../../assets/css/tableSorter/demo_table_jui.css";
@import "../../assets/css/site_jui.css";
.dataTables_info {
	padding-top: 0;
}

.dataTables_paginate {
	padding-top: 0;
}

.css_right {
	float: right;
}

#example_wrapper .fg-toolbar {
	font-size: 0.8em
}

#theme_links span {
	float: left;
	padding: 2px 10px;
}
</style>
<script type="text/javascript">
			function fnFeaturesInit ()
			{
				/* Not particularly modular this - but does nicely :-) */
				$('ul.limit_length>li').each( function(i) {
					if ( i > 9 ) {
						this.style.display = 'none';
					}
				});
				$('ul.limit_length').append( '<li class="css_link">Show more<\/li>' );
				$('ul.limit_length li.css_link').click( function (){
					$('ul.limit_length li').each( function(i){
						if ( i > 5 ){
						this.style.display = 'list-item';
						}
					});
					$('ul.limit_length li.css_link').css( 'display', 'none' );
				});
			}
				$(document).ready( function()
			{
				fnFeaturesInit();
				$('#example').dataTable({
					"bJQueryUI": true,
					"sPaginationType": "full_numbers",
				});
			});
    		</script>
    		
    		
    		
<div id="pestanaRegistrarProveedor">
	<ul>
		<li><a href="#tabRegistrarProveedor">Proveedores</a></li>
	</ul>

	<form id="frmRegistrarProveedor" name="frmRegistrarProveedor"
		method="post">
		<div id="tabCenso" class="contenedorPestanas">
			<div id="formularioHorizontal">
				<table align="center">
					<tr class="titleColor">

						
						<td><input type="hidden" name="id" id="id" maxlength="40" size="25"></td>
					</tr>
					<tr class="titleColor">

						<td><label><span class='obligatorio'></span>RIF:</label></td>
						
						<td>
							<select name="cbo_rifTipo" id="cbo_rifTipo">
								<option value=""> - </option>
								<option value="V"> V </option>
								<option value="E"> E </option>
								<option value="J"> J </option>
								<option value="G"> G </option>
							</select>
							<input type="text" name="rifId" id="rifId" maxlength="50" size="14">
						</td>
					</tr>
					<tr class="titleColor">
						<td><label><span class='obligatorio'></span>Denominac&oacute;n:</label></td>
						<td>
							<input type="text" name="denominacionPro" id="denominacionPro"></td>
					</tr>	
					<tr class="titleColor">
						<td><label><span class='obligatorio'></span>Direcci&oacute;n:</label></td>
						<td>
							<input type="text" name="direccionPro" id="direccionPro"></td>
					</tr>
					<tr class="titleColor">
						<td><label><span class='obligatorio'></span>Tel&eacute;fono:</label></td>
						<td>
							<input type="text" name="tlfPro" id="tlfPro" maxlength="11"></td>
					</tr>			
					<tr class="titleColor">
						<!-- imput que guarda el id cuando se esta modificando  -->
						<td>
    						<input type="hidden" name="intIdFila" id="intIdFila"/>
    						<input type="hidden" name="status" id="status" value="TRUE"/>
    						<input type="hidden" name="id_orga" id="id_orga" value="1"/>
    				   </td>  
				  </tr>
				</table>
				<div class="tablaBtn" id="div_2_btn">
					<input type="submit" name="botonGuardarProveedor"
						id="botonGuardarProveedor" value="Guardar" /> <input type="submit"
						name="botonSalir" id="botonSalir" value="Salir" />
				</div>
			</div>
			<div id="resultadoConsultaModificar">
			<!-- ******************************* TABLE SORTER ********************************************  -->
			<div id="example_wrapper" class="dataTables_wrapper">
				<table border="0" width="80%" cellpadding="2" cellspacing="2" align="center">
					<tr>
						<td>
					<table cellpadding="1" cellspacing="1" border="0" id="example"
					style="width: 700px" class="display">
					<thead>
						<tr>
							<th><strong>N°</strong></th>
							<th><strong>Rif</strong></th>	
							<th><strong>Descripci&oacute;n</strong></th>	
							<th><strong>Direcci&oacute;n</strong></th>	
							<th><strong>Tel&eacute;fono</strong></th>			
							<th><strong>Acci&oacute;n</strong></th>
						</tr>
					</thead>
					<tbody>
					
					<?php

					$contadorProveedor= $_SESSION['contadorRegistro'];
					$rifTipo= $_SESSION['ArrRifTipo'];
					$rifId=$_SESSION['ArrRifId'];
					$denominacionPro=$_SESSION['ArrDenominacionPro'];
					$direccionPro=$_SESSION['ArrDireccionPro'];
					$tlfPro=$_SESSION['ArrTlfPro'];
					
					for ($index = 0; $index < $contadorProveedor; $index++)
					{ 		
						$rif=$rifTipo[$index].'-'.$rifId[$index];
						$cont=$index+1;
								echo"
	                 				<tr class='gradeX'>
			                 				<td align='left'>".$cont."</td>
			                 				<td align='left'>".$rif."</td>
			                 				<td align='left' width='35%'>".$denominacionPro[$index]."</td>
			                 				<td align='left' width='15%'>".$direccionPro[$index]."</td>
			                 				<td align='left' width='15%'>".$tlfPro[$index]."</td>          
			                 				<td align='center'>
	                 						<a class='tablaProveedorModificar'>
	                 						<input type='hidden' name='cbo_Prove$index' id='cbo_Prove$index' value='".$rifTipo[$index]."'/>
	                 						<input type='hidden' name='cdProve$index' id='cdProve$index' value='".$rifId."'/>
	                 						<img name='modificar' src='../../assets/img/edit.png' border='0'></a>
	                 						<a class='tablaProveedorEliminar'>
	                 						<img src='../../assets/img/eliminar.png' border='0' title='Eliminar'></a>
	                 						<input type='hidden' name='cdProve$index' id='cdProve$index' value='".$rifId."'/>
	                 						</td>
	          						</tr>";
					}
					?>
					</tbody>
					
				    </table>						
					</tr>
				</table>
			</div>
			</div>
	 <div id="aceptarProveedor"></div>
     <div id="EliminarProveedor"></div>
	</div>
<!-- ******************************* TABLE SORTER ********************************************  -->
	</form>
</div>
<div id="error"></div>