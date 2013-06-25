<?php
require_once '../sesion.php';
?>
<form class="frmBuscarCedula" action="#" method="post">
	<div id="pestanaRegistrarUsuario">
 		<ul>
  			<li><a href="#" >Reiniciar Clave</a></li>
		</ul>	
  		<div class="contenedorPestanas">	
  		<br/>
  		<table align="center">
			<tr class="titleColor">  								
				<td>
					<label><span class='obligatorio'></span>C&eacute;dula:</label>
					<input  type="text" name="stsNumeroCedula" id="stsNumeroCedula" size="20" maxlength="8"  > 			             
				</td>	        	
				<td>
					<input type="submit" id="botonBuscarUsuario" value="Consultar" name="botonBuscarUsuario" />
				</td>	
			</tr>  	
		</table>
		<div id="divUsuario" style="display:none;">
      		<br>
      		<p align='center'class='item'>Datos del Usuario</p>
      		<br>
      		<table align="center">
          	<tr class="titleColor">
          		<td>
            	<label> C&eacute;dula: </label> 
               	<input type="text" name="stsCedula" readonly="readonly" id="stsCedula" size="20">		
            	</td>
            </tr>		           
            <tr class="titleColor"> 
            	<td>
            	<label>Nombre y Apellido:</label> 
               	<input type="text" name="stsNombreApellido" readonly="readonly" id="stsNombreApellido"size="20">		               	
            	</td>			  	   
	  	    </tr>
			<tr class="titleColor">
				<td>
            	<label>Login:</label> 
               	<input type="text" name="stslogin" readonly="readonly" id="stslogin"  size="20">
               	</td>		               	
            </tr>				  	   
	  	    <tr class="titleColor">
				<td>
				<label >Tipo de Usuario:</label>
				<select disabled="disabled" name="tipoUsuario" id="tipoUsuario">
						<option value="">- Seleccione -</option>
						<option value="A">Analista</option>
						<!--  <option value="J">Jefe de Unidad</option>-->
						<option value="S">Supervisor de Seguridad</option>
				</select>
				</td>
			</tr >
	    	<tr class="titleColor">
	    		<td>
				<label >Nro Tel&eacute;fono:</label>
				<input type="text" name="nroTelefono" readonly="readonly" id="nroTelefono"  size="20">
	    		</td>
	    	</tr>
	    	<tr class="titleColor">
			 	<td>
			 	<label >Estatus Usuario:</label>
				<input type="text" name="estatusUsuario" readonly="readonly" id="estatusUsuario" size="20">
				</td>		               	
	    	</tr>
	    	</table>   
            <p class="botones">	        	
				<input type="button" id="botonReiniciarClave" value="Reiniciar Clave" name="botonReiniciarClave" />
			</p>    
       </div>            
		</div>					
	</div>
	<div id="divReiniciarClave"></div>
	</form>
<br>
<!-- <div ><span  class='pieObligatorio'> (*) </span> Campos Requeridos</div> -->
<!-- </form> -->