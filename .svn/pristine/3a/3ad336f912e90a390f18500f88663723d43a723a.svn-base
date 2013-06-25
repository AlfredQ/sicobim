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
<div id="pestanaRegistrarSeccion">
	<ul>
		<li><a href="#tabRegistrarseccion">Clasificaci&oacute;n de Bienes / Secci&oacute;n</a></li>
	</ul>

	<form id="frmRegistrarSeccion" name="frmRegistrarSeccion" method="post">
		<div id="tabCenso" class="contenedorPestanas">
			<div id="formularioHorizontal">
				<table align="center">
					<tr class="titleColor">
						<td><label><span class='obligatorio'></span>C&oacute;digo:</label>
						</td>
						<td><input type="text" name="codigoSeccion" id="codigoSeccion" maxlength="8" size="25">
						</td>
					</tr>
					<tr class="titleColor">
						<td><label><span class='obligatorio'></span>Nombre:</label>
						</td>
						<td><input type="text" name="nombreSeccion" id="nombreSeccion"
							maxlength="250" size="25">
						</td>
					</tr>
					<tr class="titleColor">
						<td><label><span class='obligatorio'></span>Subgrupo:</label>
						</td>
						<td>
							<select name="cbo_subGrupo" id="cbo_subGrupo" style="width: 100px;">
									<option value="">- Seleccione -</option>								
							</select>
						</td>
						<!-- imput que guarda el id cuando se esta modificando  -->
						<td>
    						<input type="hidden" name="intIdFila" id="intIdFila"/>
						</td> 
					</tr>				
				</table>
				<div class="tablaBtn" id="div_2_btn">
					<input type="submit" name="botonGuardarSeccion"
						id="botonGuardarSeccion" value="Guardar" /> <input type="submit"
						name="botonSalir" id="botonSalir" value="Salir" />
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
							<th><strong>Codigo Secci&oacute;n</strong></th>
							<th><strong>Descripcion</strong></th>	
							<th><strong>SubGrupo</strong></th>			
							<th><strong>Acci&oacute;n</strong></th>
						</tr>
					</thead>
					<tbody>
					
					<?php

					$contadorSeccion = $_SESSION['contadorRegistro'];
					$codigoSeccion = $_SESSION['ArrCodigoSeccion'];
					$nombreSeccion = $_SESSION['ArrNombreSeccion'];
					$nombreSubGrupo = $_SESSION['ArrNombreSubGrupo'];
                    $codigoSubGrupo= $_SESSION['ArrCodigoSubGrupo'];							

					for ($index = 0; $index < $contadorSeccion; $index++)
					{
						$cont=$index+1;
                                                
								echo"
	                 				<tr class='gradeX'>
			                 				<td align='center' width='5%'>".$cont."</td>
			                 				<td align='center' width='15%'>".$codigoSeccion[$index]."</td>
			                 				<td align='left' width='30%'>".$nombreSeccion[$index]."</td>  
			                 				<td align='left' width='20%'>".$nombreSubGrupo[$index]."</td>      
			                 				<td align='center' width='10%'>
	                 						<a class='tablaSeccionModificar'>
	                 						<input type='hidden' name='cdSeccion$index' id='cdSeccion$index' value='".$id[$index]."'/>
                                            <input type='hidden' name='codigoSubGrupoSeccion$index' id='codigoSubGrupoSeccion$index' value='".$codigoSubGrupo[$index]."'/>
	          								<img src='../../assets/img/edit.png' border='0' title='Modificar'>
                                            </a></td>
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
			<div id="aceptarSeccion"></div>
      		<div id="aceptarSeccion"></div>									
			</div>
		</div>
	</form>
</div>
<div id="error"></div>
