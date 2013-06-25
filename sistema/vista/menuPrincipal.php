<?php session_start();
?>
<!-- 
	 Created on 28/09/2011
	 <Nombre del archivo:menuPrincipal.php>  
	 <Versión del archivo: 1.0>
	 <Autor del archivo: Virginia Naassaneh>
	 <Breve explicación del contenido de el archivo: 
	 Vista del Menu Principal>
-->
<fieldset class="menuP">
	<legend>Menu Principal</legend>
		<ul class="sf-menu sf-vertical">
			<li>
				<a href="#" id="">Mantenimiento</a>
			    <ul>
					<li><a href="#" id="menuRegistrarTipoMovimiento">Tipo de Movimiento</a></li>
					<li><a href="#" id="">Estructura Organizativa</a>
						<ul>
							<li><a href="#" id="menuRegistrarDependencia">Dependencia</a></li>
							<li><a href="#" id="menuRegistrarDireccion">Direcci&oacute;n</a></li>
							<li><a href="#" id="menuRegistrarUnidad">Unidad</a></li>
							<li><a href="#" id="menuRegistrarCoordinacion">Coordinaci&oacute;n</a></li>
				    	</ul>
			   		</li>
					
					<li><a href="#" id="">Clasificaci&oacute;n de Bienes</a>
						<ul>
							<li><a href="#" id="menuRegistrarSubGrupo">SubGrupo</a></li>
						    <li><a href="#" id="menuRegistrarSeccion">Secci&oacute;n</a></li>
					   	</ul>
					</li>
					
					<li><a href="#" id="menuRegistrarActivos">Activos Reales</a></li>
					<li><a href="#" id="menuRegistrarProveedor">Proveedor</a></li>
			    </ul>
			</li>
			
								
			<li>
				<a href="#" id="">Asignaci&oacute;n de Control de Inventario</a>
			    <ul>
					<li><a href="#" id="menuRegistrarAsignacionInventario">Registrar</a></li>
					<li><a href="#" id="menuConsultarAsignacionInventario">Consultar</a></li>
			    </ul>
			</li>
			<li>
				<a href="#" id="">Movimientos de Bienes</a>
			    <ul>
					<li><a href="#" id="menuRegistrarMovimientoInventario">Registrar</a></li>
					<li><a href="#" id="menuConsultarCENSO">Consultar</a></li>
			    </ul>
			</li>
		
			<!-- Andres -->
			<?php if ($_SESSION["stsTipoUsuario"]== "A")
	       			{ 
	        ?>
	      	<li>
				<a href="#" id="menuReportesCENSO">Reportes</a>
			</li>
			<?php   }?>
			<!-- Andres fin  -->
			
			
		</ul>
</fieldset>