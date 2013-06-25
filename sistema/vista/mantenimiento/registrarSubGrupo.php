<?php
//session_start();
require_once '../sesion.php';

?>
<!-- 
	 Created on 28/01/2013
	 <Nombre del archivo:registrarSubGrupo.php>  
	 <Versión del archivo: 1.0>
	 <Autor del archivo: Jose Echeverria>
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
<div id="pestanaRegistrarSubGrupo">
	<ul>
		<li><a href="#tabRegistrarSubGrupo">Clasificaci&oacute;n de Bienes / Subgrupo</a></li>
	</ul>

	<form id="frmRegistrarSubGrupo" name="frmRegistrarSubGrupo"
		method="post">
		<div id="tabCenso" class="contenedorPestanas">
			<div id="formularioHorizontal">
				<table align="center">
					<tr class="titleColor">

						<td><label><span class='obligatorio'></span>C&oacute;digo:</label>
						</td>
						<td><input type="text" name="codigoSubGrupo" id="codigoSubGrupo"
							maxlength="8" size="25">
						</td>
					</tr>

					<tr class="titleColor">
						<td><label><span class='obligatorio'></span>Nombre:</label>
						</td>

						<td><input type="text" name="nombreSubGrupo" id="nombreSubGrupo"
							maxlength="250" size="25">
						</td>
					</tr>

					<tr class="titleColor">
						<!-- CAMPO HIDDEN GRUPO CON VALOR POR DEFECTIO 2 -->
						<td><input type="hidden" name="codigoGrupo" id="codigoGrupo"
							value="2" size="25">
						</td>
						
							<!-- imput que guarda el id cuando se esta modificando  -->
						<td>
    						<input type="hidden" name="intIdFila" id="intIdFila"/>
						</td>  
						
						
					</tr>
				</table>
				<div class="tablaBtn" id="div_2_btn">
					<input type="submit" name="botonGuardarSubGrupo"
						id="botonGuardarSubGrupo" value="Guardar" /> <input type="submit"
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
							<th><strong>Codigo Sub Grupo</strong></th>
							<th><strong>Descripcion</strong></th>	
									
							<th><strong>Acci&oacute;n</strong></th>
						</tr>
					</thead>
					<tbody>
					
					<?php

					$contadorSubGrupo= $_SESSION['contadorRegistro'];
					$codigoSubGrupo= $_SESSION['arrCodigoSubGrupo'];
					$nombreSubGrupo=$_SESSION['arrNombreSubGrupo'];
					

					for ($index = 0; $index < $contadorSubGrupo; $index++)
					{
						$cont=$index+1;
								echo"
	                 				<tr class='gradeX'>
			                 				<td align='center' width='5%'>".$cont."</td>
			                 				<td align='center' width='15%'>".$codigoSubGrupo[$index]."</td>
			                 				<td align='left' width='40%'>".$nombreSubGrupo[$index]."</td>    
			                 				<td align='center' width='10%'>
	                 						<a class='tablaSubGrupoModificar'>
	                 						<input type='hidden' name='cdSubgrupo$index' id='cdSubgrupo$index' value='".$id[$index]."'/>
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
	 <div id="aceptarSubgrupo"></div>
     <div id="aceptarSubgrupo"></div>
	</div>
<!-- ******************************* TABLE SORTER ********************************************  -->
	</form>
</div>
<div id="error"></div>
