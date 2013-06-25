<?php
include('../../../ejemplo.php');

defined('_JEXEC') or die;
$session =& JFactory::getSession();
// Creamos la variable 'usu' donde guardamos el usuario activo
$user	 = JFactory::getUser();
$username = $user->get('id');
// Añadimos el usuario activo a la url de la pagina a mostrar en el wrapper


$db= JFactory::getDBO();
$query = "SELECT cb_cdula FROM #__comprofiler WHERE id =" . $username;
$db->setQuery($query);
$row = $db->loadObject(); 
$cedula=$row->cb_cdula; 
$session->set('cedula',$cedula);
?><script>
session_start();
var f = new Date();
//document.write(f.getDate() + "/" + (f.getMonth() +1) + "/" + f.getFullYear());
var anoActual = f.getFullYear();
//document.write(anoActual);
 <head>
</script> 
<!-- Estilos -->
  <link rel="shortcut icon" type="image/x-icon" href="../../assets/img/favicon.png"/>
  <link rel="stylesheet" type="text/css" href="../../assets/css/prototipoSistema.css" />
  <link rel="stylesheet" type="text/css" href="../../assets/css/superfish.css" />
  <link rel="stylesheet" type="text/css" href="../../assets/css/superfish-vertical.css" />
  <link rel="stylesheet" type="text/css" href="../../assets/css/custom-theme/jquery-ui-1.7.2.custom.css" />
  <!-- Estilos -->
  
  <!-- Javascript -->

  <script type="text/javascript" src="../../assets/js/jquery-1.6.4.js"></script>
  <script type="text/javascript" src="../../assets/js/superfish.js"></script> 
  <script type="text/javascript" src="../../assets/js/jquery.validate.min.js"></script>
  <script type="text/javascript" src="../../assets/js/jquery-ui-1.7.2.custom.min.js"></script><!-- TABS -->
  <script type="text/javascript" src="../../assets/js/calendario.js"></script>
  <script type="text/javascript" src="../../assets/js/prototipoSistema.js"></script>
  
 </head>
	<body>
  		<center>
	 <div id="cuerpoSistema">
	   <div id="bannerSistema"></div>
	   <div id="containerSistema">
	      <div id="saludo">
	      
	      </div>
 <div id="contenido">

<form  class="frmConsultarReciboPago" id="frmConsultarReciboPago" action="#" method="post">
 	
<div id="pestanaConsultarReciboPago">
		<ul>
			<li><a href="#ConsultarReciboPago">Consultar Recibo de Pago</a></li>
		</ul>
        <br>
		<div id="consultarReciboPago" class="contenedorPestanas">
        <div id="formularioHOrizontal">
		<!-- Consulta por cedula -->
       				<div id="consultaCedula" style="display:block;" >
        				<div id="celda">
						<label><span id="obCedula" class='obligatorio'></span>C&eacute;dula:</label>						
						<input type="text" name="intCedula" id="intCedula" maxlength="8" size="12" readonly="readonly" value="<?php echo $cedula?>"/>
					</div>

		<div id="celda">
				<label ><span class='obligatorio'></span> Compañía:</label>
				<span id="divCompania">
					<select name="cbo_2_Compania" id="cbo_2_Compania">
	        			<option value="01" selected="selected" >Alcaldía del Municipio Bolivariano Libertador</option>
					</select>
				</span>				
		</div>
		
		
		<div id="celda">
				<label ><span class='obligatorio'></span> Tipo de Pago:</label>
				<span id="divTipoPago">
					<select name="cbo_2_TipoPago" id="cbo_2_TipoPago">
	        			<option value="">-Seleccione-</option>
	        			<option value="Q">Quincenal</option>
	        			<option value="S">Semanal</option>
					</select>
				</span>				
		</div>
		
		<div id="celda">
				<label><span class='obligatorio'></span> Fecha de Consulta:</label>
					<span id="divAñoConsulta">
						<select name="cbo_2_anoConsulta" id="cbo_2_anoConsulta" disabled="disabled">
		        			  <option value="">Año</option>
		        			<?php for ($index = date("Y"); $index >= 2007; $index--) {
		        				echo "<option value=".$index.">$index</option>";
		        			} ?>	  
		        			           
						</select>
					</span>
					<span id="divMesConsulta" >
						<select name="cbo_2_mesConsulta" id="cbo_2_mesConsulta" disabled="disabled">
		        			<option value="">Mes</option>
		        			<option value="01">01</option>
		        			<option value="02">02</option>
		        			<option value="03">03</option>
		        			<option value="04">04</option>
		        			<option value="05">05</option>
		        			<option value="06">06</option>
		        			<option value="07">07</option>
		        			<option value="08">08</option>
		        			<option value="09">09</option>
		        			<option value="10">10</option>
		        			<option value="11">11</option>
		        			<option value="12">12</option>
						</select>
					</span>
					<span id="divFechaConsulta">
						<select name="cbo_2_FechaConsulta" id="cbo_2_FechaConsulta" style="display:block;" disabled="disabled">
	        				<option value="">-Consulta-</option>
						</select>
					</span>				
		</div>
		
		<div id="botonConsultar" style="display:block;" >
		<p class="botones">
			<input type="submit"  name="botonConsultarReportes" id="botonConsultarReciboPago" value="Consultar" />
		</p>
		</div>
		
		<div id="sinResultadosUsuariosInternos" style="display:none;">
				<?php echo "No hay registros.";?>
	    </div>
		</div>
		</div>
		</div>
		
		<div ><span  class='pieObligatorio'> (*) </span> Campos Requeridos</div>
</div></form>
 </div>
 </div>
   <div id="pieSistema">Todos los derechos reservados. Alcaldía de Caracas © Copyright 2013</div>
  </div>
  	</center>
</body>
