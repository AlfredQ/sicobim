<?php
require_once '../sesion.php';

/*
 * <Nombre del archivo: cambiarClave.php>
 * <Fecha de creación del archivo: 5/05/2011> 
 * <Versión del archivo: 1.0>
 * <Autor del archivo: Virginia Naassaneh>
 * <Breve explicación del contenido de el archivo: Vista del Cambio de Clave>
*/
?>
<form  id="cambiarClave" name="cambiarClave" class="cambiarClave" method="POST" action="">
<!--INICIO CONTENT pestanaCambiarClave !-->
<div id="pestanaCambiarClave">
	<ul>
		<li><a href="#cambioClave">Cambiar Clave</a></li>
	</ul>
    <!--INICIO CONTENT CAMBIO DE CLAVE  --> 
    <div id="cambioClave" class="contenedorPestanas">
        <!--INICIO FIELDSET CAMBIO DE CLAVE -->
		 	<table align="center">
				<tr class="titleColor">
					<td>Usuario:</td>
					
<!-- <form name="frmCambiarClave" method="post" class="CambiarClave" action="">
         <span class="items">Cambiar Clave</span>
         <br/>
		 <br/>
		 	<table align="center">
				<tr class="titleColor">
					<td>Usuario:</td> -->
				    <td><input type="text" name="usuario" id="usuario" disabled value='<?php $stsLogin= explode('sicobim_',$_SESSION['stsLoginUsuario_sicobim']); echo $stsLogin[1];?>'/></td>
				 </tr>   
		    <tr class="titleColor">
				<td><span class='obligatorio'></span> Clave Actual:</td>
                <td><input type="password" name="claveActual" id="claveActual" /></td>
		    </tr>
		    <tr class="titleColor">
				<td><span class='obligatorio'></span> Clave Nueva:</td>
                <td><input type="password" name="claveNueva" id="claveNueva"/></td>
		    </tr>
		   <tr class="titleColor">
				<td><span class='obligatorio'></span> Repetir Clave Nueva:</td>
                <td><input type="password" name="confirmarclaveNueva" id="confirmarclaveNueva"/></td>
		    </tr>
		    <tr class="titleColor">
		     	  
		     	  <td colspan="2" align="center">
              	    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      				<img style="background:#eeeeee;" id="siimage" src="../../assets/captcha/securimage_show_example.php" />
        			<a href="#"  title="Refrescar la Imagen" onclick="document.getElementById('siimage').src = '../../assets/captcha/securimage_show_example.php?sid=' + Math.random(); return false"><img src="../../assets/captcha/images/refresh.gif" alt="Reload Image" border="0" onclick="this.blur()"  /></a>
        	     </td>
	    	</tr>
		    <tr class="titleColor">
			    <td><span class='obligatorio'></span> Caracteres</td>
			    <td><input type="text" name="caracteres" id="caracteres" size="20" /></td>
		    </tr> 
		   <!-- <div id="status" align="center" style="margin-top:5px; display:none; ">
   			<img src="../img/cargando.gif" alt="" title="Cambiando..." style="margin-right:15px;" />
   			<span>Cambiando</span>
   		</div> --> 
		</table>
		<!--FIN CAMBIO DE CLAVE -->
  		<p class="botones">
   	  		<span>
   				<input type="submit"  name="botonCambiarClave" id="botonCambiarClave" value="Aceptar" />
				<input type="button"  name="cancelarcambiarClave" id="cancelarcambiarClave" value="Cancelar" />
      		</span>
   		</p>
	<div id='cambiarClave'></div>
	</div>
		</div>
	<!--FIN CONTENT CAMBIO DE CLAVE -->
<!--FIN CONTENT pestanaCambiarClave !-->
</form> 