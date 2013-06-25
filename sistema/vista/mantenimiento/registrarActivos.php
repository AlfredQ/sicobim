<?php
//session_start();
require_once '../sesion.php';

?>
<!-- 
	 Created on 28/01/2013
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
<div id="pestanaRegistrarActivos">
	<ul>
		<li><a href="#tabRegistrarActivos">Activos Reales</a></li>
	</ul>

	<form id="frmRegistrarActivos" name="frmRegistrarActivos"
		method="post">
		<div id="tabCenso" class="contenedorPestanas">
			<div id="formularioHorizontal">
				<table align="center">
					<tr class="titleColor">

						
						<td><input type="hidden" name="id" id="id" maxlength="50" size="25">
						</td>
					</tr>
					<tr class="titleColor">

						<td><label><span class='obligatorio'></span>Nombre del Activo:</label>
						</td>
						<td><input type="text" name="nombreActivo" id="nombreActivo" maxlength="50" size="25">
						</td>
					</tr>

					<tr class="titleColor">
						<td><label><span class='obligatorio'></span>Descripci&oacute;n:</label>
						</td>

						<td>
							<textarea cols=29 rows=3 name="descripcion" id="descripcion"></textarea> 
						</td>
					</tr>
					
					<tr class="titleColor">
						<td><label><span class='obligatorio'></span>Subgrupo:</label>
						</td>

						<td>
							<select name="cbo_subGrupo" id="cbo_subGrupo"   style="width: 228px;" >
									<option value="">- Seleccione -</option>
							</select>
						</td>
					</tr>
					
						<tr class="titleColor">
						<td><label><span class='obligatorio'></span>Seccion:</label>
						</td>

						<td>
							<select name="cbo_seccion" id="cbo_seccion" style="width: 228px;">
									<option value="">- Seleccione -</option>
							</select>
						</td>
					</tr>
					

					<tr class="titleColor">
						<!-- imput que guarda el id cuando se esta modificando  -->
						<td>
    						<input type="hidden" name="intIdFila" id="intIdFila"/>
    				   </td>  
				  </tr>
				</table>
				<div class="tablaBtn" id="div_2_btn">
					<input type="submit" name="botonGuardarActivos"
						id="botonGuardarActivos" value="Guardar" /> <input type="submit"
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
							<th><strong>Nombre</strong></th>	
							<th><strong>Descripci&oacute;n</strong></th>	
							<th><strong>SubGrupo</strong></th>	
							<th><strong>Secci&oacute;n</strong></th>			
							<th><strong>Acci&oacute;n</strong></th>
						</tr>
					</thead>
					<tbody>
					
					<?php

					$contadorProducto= $_SESSION['contadorRegistro'];
					$codigoProd= $_SESSION['ArrId_Prod'];
					$nombreProd=$_SESSION['ArrNombreProd'];
					$DescripcionProd=$_SESSION['ArrDescripcionProd'];
					$nombreSubG=$_SESSION['ArrNombreSubGrupo'];
					$CodigoSubG=$_SESSION['ArrCodigoSubGrupo'];
					$nombreSecc=$_SESSION['ArrNombreSeccion'];
					$CodigoSecc=$_SESSION['ArrCodigoSeccion'];

					for ($index = 0; $index < $contadorProducto; $index++)
					{ 		
						$cont=$index+1;
								echo"
	                 				<tr class='gradeX'>
			                 				
			                 				<td align='left'>".$codigoProd[$index]."</td>
			                 				<td align='left'>".$nombreProd[$index]."</td>
			                 				<td align='left' width='35%'>".$DescripcionProd[$index]."</td>
			                 				<td align='left' width='15%'>".$nombreSubG[$index]."</td>
			                 				<td align='left' width='15%'>".$nombreSecc[$index]."</td>          
			                 				<td align='center'>
	                 						<a class='tablaProductosModificar'>
	                 						<input type='hidden' name='cdProd$index' id='cdProd$index' value='".$codigoProd[$index]."'/>
	                 						<input type='hidden' name='cdSubGrupo$index' id='cdSubGrupo$index' value='".$CodigoSubG[$index]."'/>
	                 						<input type='hidden' name='cdSeccion$index' id='cdSeccion$index' value='".$CodigoSecc[$index]."'/>
	          								<img src='../../assets/img/edit.png' border='0' title='Modificar'></a></td>
	          						</tr>";
					}
					?>
					</tbody>
				    </table>
						</td>
					</tr>
				</table>
			</div>
			</div>
	 <div id="aceptarActivos"></div>
     <div id="aceptarActivos"></div>
	</div>
<!-- ******************************* TABLE SORTER ********************************************  -->
	</form>
</div>
<div id="error"></div>