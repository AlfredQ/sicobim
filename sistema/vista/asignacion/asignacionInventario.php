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
   
    div.style.display = 'none';
    div1.style.display = 'none';
    div2.style.display = 'none';
 
    
}


function OcultarJusti(){
   
    var div8 = document.getElementById('divOculto8');
   
    div8.style.display = 'none';
    
}

function Mostrar(){
    var div = document.getElementById('divOculto');
    var div1 = document.getElementById('divOculto1');
    var div2 = document.getElementById('divOculto2');
    var div3 = document.getElementById('divOculto3');
    var div4 = document.getElementById('divOculto4');
    var tr5 = document.getElementById('trOculto5');
    var div6 = document.getElementById('divOculto6');
   // var div8 = document.getElementById('divOculto8');
    div.style.display = '';
    div1.style.display = '';
    div2.style.display = '';
    div3.style.display = '';
    div4.style.display = '';
    tr5.style.display = '';
    div6.style.display = '';
   // div8.style.display = '';
   
}

function MostrarJusti(){

    var div3 = document.getElementById('divOculto3');
    var div4 = document.getElementById('divOculto4');
    var div6 = document.getElementById('divOculto6');
    var div8 = document.getElementById('divOculto8');
    var tr5 = document.getElementById('trOculto5');
    div3.style.display = '';
    div4.style.display = '';
    div6.style.display = '';
    div8.style.display = '';
    tr5.style.display = '';
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
	document.frmRegistrarAsignacionInventario.asignaNumeroBien.value = "";
	document.frmRegistrarAsignacionInventario.asignaComboSubGrupo.value = "";
}
</script>  


<script language="javascript" type="text/javascript">

/* VALIDAR AGREGAR ITEMS SOCIOS */
function validarBien(id_numBien,id_cbo_Subgrupo,id_cbo_seccion,id_producto,id_precio,id_caracter,id_tabla)
{
	numBien=document.getElementById(id_numBien);
	cbo_Subgrupo=document.getElementById(id_cbo_Subgrupo);
	cbo_seccion=document.getElementById(id_cbo_seccion);
	cbo_producto=document.getElementById(id_producto);
	precio==document.getElementById(id_precio);
	caracter==document.getElementById(id_caracter);

	if(numBien.value=='' || cbo_Subgrupo.value=='' || cbo_seccion.value=='' || cbo_producto.value=='' || precio.value=='' || caracter.value=='')
	{
		alert('Debe ingresar los campos con (*) !!!');
		return false;
	}else
	{
		agregarBien(id_numBien,id_cbo_Subgrupo,id_cbo_seccion,id_producto,id_precio,id_caracter,id_tabla);
		return true;
	}
}


var contadorItem=1;


function agregarBien(idinput1,idSelect1,idSelect2,idSelect3,idinput5,idinput6,idTablaAInsertar){
	//VALORES DE LOS INPUT
	input1=document.getElementById(idinput1),
		valorinput1=input1.value;

	select1=document.getElementById(idSelect1),
	valorSelect1=select1.options[select1.selectedIndex].value,
	textSelect1=select1.options[select1.selectedIndex].text	;
	
	select2=document.getElementById(idSelect2),
	valorSelect2=select2.options[select2.selectedIndex].value,
	textSelect2=select2.options[select2.selectedIndex].text	;
	
	select3=document.getElementById(idSelect3),
	valorSelect3=select3.options[select3.selectedIndex].value,
	textSelect3=select3.options[select3.selectedIndex].text	;
		
	input5=document.getElementById(idinput5),
		valorinput5=input5.value;
	input6=document.getElementById(idinput6),
		valorinput6=input6.value;

	tabla=document.getElementById(idTablaAInsertar);
	//creando Objetos HTML a usar
	var	tr=document.createElement("tr"),
		td1=document.createElement("td"),
		td2=document.createElement("td"),
		td3=document.createElement("td"),
		td4=document.createElement("td"),
		td5=document.createElement("td"),
		td6=document.createElement("td"),
		tdimagen=document.createElement("td"),
		img=document.createElement("img"),
		inputhidden1=document.createElement("input"),
		inputhidden2=document.createElement("input"),
		inputhidden3=document.createElement("input"),
		inputhidden4=document.createElement("input"),
		inputhidden5=document.createElement("input"),
		inputhidden6=document.createElement("input");

	//asigno atributos (en este caso es recomendable usar css para generar una class y asigar stylos pero com soy tan flojo :D)
	tr.setAttribute("id",idTablaAInsertar+contadorItem);
	tr.setAttribute("align","center");
	
	inputhidden1.setAttribute("type","hidden");
	inputhidden1.setAttribute("name","asignaNumeroBien[]"+contadorItem);
	inputhidden1.setAttribute("value",valorinput1);
	inputhidden1.setAttribute("id","nombreprimercampo"+contadorItem);

	inputhidden2.setAttribute("type","hidden");
	inputhidden2.setAttribute("name","asignaComboSubGrupo[]"+contadorItem);
	inputhidden2.setAttribute("value",valorSelect1);
	inputhidden2.setAttribute("id","nombresegundocampo"+contadorItem);
	
	inputhidden3.setAttribute("type","hidden");
	inputhidden3.setAttribute("name","asignaComboSeccion[]"+contadorItem);
	inputhidden3.setAttribute("value",valorSelect2);
	inputhidden3.setAttribute("id","nombretercercampo"+contadorItem);

	inputhidden4.setAttribute("type","hidden");
	inputhidden4.setAttribute("name","asignaActivoReal[]"+contadorItem);
	inputhidden4.setAttribute("value",valorSelect3);
	inputhidden4.setAttribute("id","nombrecuartocampo"+contadorItem);
	
	inputhidden5.setAttribute("type","hidden");
	inputhidden5.setAttribute("name","asignaCostoPrecio[]"+contadorItem);
	inputhidden5.setAttribute("value",valorinput5);
	inputhidden5.setAttribute("id","nombrequintocampo"+contadorItem);

	inputhidden6.setAttribute("type","hidden");
	inputhidden6.setAttribute("name","asignaCaracteristica[]"+contadorItem);
	inputhidden6.setAttribute("value",valorinput6);
	inputhidden6.setAttribute("id","nombresextocampo"+contadorItem);

	img.setAttribute("src","../../assets/img/eliminar.png");
	img.setAttribute("alt","Quitar");
	img.setAttribute("title","Quitar Bien");
	img.setAttribute("onclick","eliminarBien('"+idTablaAInsertar+contadorItem+"')");
	
	td1.setAttribute("style","text-align:center;");
	td1.setAttribute("width","15%");
	td1.setAttribute("bgcolor","#FFFFFF");
	td1.setAttribute("class","textoCampo");
	td1.innerHTML=valorinput1;
	
	td2.setAttribute("style"," text-align:center;");
	td2.setAttribute("width","15%");
	td2.setAttribute("bgcolor","#FFFFFF");
	td2.setAttribute("class","textoCampo");
	td2.innerHTML=textSelect1;
	
	td3.setAttribute("style"," text-align:center;");
	td3.setAttribute("width","15%");
	td3.setAttribute("bgcolor","#FFFFFF");
	td3.setAttribute("class","textoCampo");
	td3.innerHTML=textSelect2;
	
	td4.setAttribute("style","text-align:center;");
	td4.setAttribute("width","15%");
	td4.setAttribute("bgcolor","#FFFFFF");
	td4.setAttribute("class","textoCampo");
	td4.innerHTML=textSelect3;
	
	td5.setAttribute("style"," text-align:center;");
	td5.setAttribute("width","15%");
	td5.setAttribute("bgcolor","#FFFFFF");
	td5.setAttribute("class","textoCampo");
	td5.innerHTML=valorinput5;
	
	td6.setAttribute("style"," text-align:center;");
	td6.setAttribute("width","15%");
	td6.setAttribute("bgcolor","#FFFFFF");
	td6.setAttribute("class","textoCampo");
	td6.innerHTML=valorinput6;

	tdimagen.setAttribute("style","text-align:center;");
	tdimagen.setAttribute("bgcolor","#FFFFFF");
	tdimagen.setAttribute("class","textoCampo");

	//Empiezo a organizar la lista
	td1.appendChild(inputhidden1);
	td2.appendChild(inputhidden2);
	td3.appendChild(inputhidden3);
	td4.appendChild(inputhidden4);
	td5.appendChild(inputhidden5);
	td6.appendChild(inputhidden6);
	tdimagen.appendChild(img);
	
	tr.appendChild(td1);
	tr.appendChild(td2);
	tr.appendChild(td3);
	tr.appendChild(td4);
	tr.appendChild(td5);
	tr.appendChild(td6);
	tr.appendChild(tdimagen);
	
	tabla.appendChild(tr);
	
	input1.value=input5.value=input6.value="",
	select1.selectedIndex=0;
	select2.selectedIndex=0;
	select3.selectedIndex=0;
	
	contadorItem++;
}
function eliminarBien(idAEliminar){
	var elementoAEliminar=document.getElementById(idAEliminar);
	var padreDelElementoAEliminar=elementoAEliminar.parentNode;
	padreDelElementoAEliminar.removeChild(elementoAEliminar);
}
/*funcion vaciar tablas dinamicas*/
function vaciarTablasDinamicas(tablaBienes)
{  alert(tablaBienes);
	vaciarNodos(tablaBienes,1);

}
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
									<input type="radio" name="control" id="Compra" value="C" onclick="OcultarJusti(), Mostrar(), Limpiar();">
									<label>Compra: </label>
								</td>
								<td>
									<input type="radio" name="control" id="Justiprecio" value="J" onclick="MostrarJusti(), Ocultar(), Limpiar(), vaciarTablasDinamicas();" >
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
				<tr class="titleColor" style="display:none;" id="divOculto8">
					<td>
						<label><span class='obligatorio'></span>N° Acta:</label>
					</td>
					<td >
						<input type="text" name="nActaj" id="nActaj" maxlength="50" size="15">
					</td>
				<!-- 	<td>
						<label><span class='obligatorio'></span>Fecha:</label>
					</td>
					<td>
						<input type="text" name="fecha" id="fecha" maxlength="50" size="15" value"";>
					</td>	 -->		
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
			<div style="display:none;" id="divOculto6">							
			<table width="50%" align="center" border="0">
				<tr >
					<td>
					<table  border="0" cellpadding="1" cellspacing="1" align="center" width="95%" bgcolor="#D6D6D6">
						<tr class="titleColor"> 
							<td bgcolor="#D6D6D6">N° Inventario</td>
							<td bgcolor="#D6D6D6">SubGrupo</td> 
							<td bgcolor="#D6D6D6">Secci&oacute;n</td>
							<td bgcolor="#D6D6D6">Activo</td>
							<td bgcolor="#D6D6D6">Valor</td>
							<td bgcolor="#D6D6D6">Caracteristicas</td>
							<td bgcolor="#D6D6D6">Acciones</td>
						</tr>
						<tr class="titleColor">
		                	<td bgcolor="#F2F2F2" align="center"><input type="text" name="numBien" id="numBien" size="10"></td>
		                    <td bgcolor="#F2F2F2" align="center">
		                    	<select name="cbo_subGrupo" id="cbo_subGrupo"   style="width:120px;" >
										<option value="">- Seleccione -</option>
								</select>
							</td>
		                    <td bgcolor="#F2F2F2" align="center">
		                    	<select name="cbo_seccion" id="cbo_seccion"   style="width:120px;" >
										<option value="">- Seleccione -</option>
								</select>
							</td>		                    
		                    <td bgcolor="#F2F2F2">
								<select name="cbo_producto" id="cbo_producto"   style="width:120px;" >
										<option value="">- Seleccione -</option>
								</select>
							</td>
		                    <td bgcolor="#F2F2F2" align="center"><input type="text" name="precio" id="precio" size="10" onkeypress="dar_formato(this.value);">
		                    
		           			</td>
		                    
		                    <td bgcolor="#F2F2F2" align="center"><textarea  name="caracter" id="caracter" cols="18" rows="1"></textarea></td>                    
		                    <td bgcolor="#F2F2F2" align="center"><img id="agregar" onclick="validarBien('numBien', 'cbo_subGrupo', 'cbo_seccion','cbo_producto', 'precio', 'caracter', 'tablaBienes')" src="../../assets/img/add.png" title="Agregar"></td>
		                </tr>
					</table>                        
					<table  id="tablaBienes" border="1" cellpadding="3" cellspacing="1" align="center" width="800px" bgcolor="#D6D6D6">
						<tr class="titleColor">
							<td bgcolor="#D6D6D6" class="tituloTablas" align="center" colspan="7">Datos del Bien</td>
						</tr>
						<tr class="titleColor">
							<td bgcolor="#F2F2F2" align="center">N° Inventario</td>
							<td bgcolor="#F2F2F2" align="center">SubGrupo</td>
							<td bgcolor="#F2F2F2" align="center">Secci&oacute;n</td>
							<td bgcolor="#F2F2F2" align="center">Activo</td>
							<td bgcolor="#F2F2F2" align="center">Valor</td>
							<td bgcolor="#F2F2F2" align="center">Caracteristicas</td>
							<td bgcolor="#F2F2F2" align="center">Acci&oacute;n</td>
						</tr>
					</table>
					</td>
				</tr>
			</table>
		</div>
			<div class="tablaBtn" id="div_2_btn">
				<table align="center">
					<tr style="display:none;" id="trOculto5">
						<td>
							<input type="submit" name="botonGuardarAsignacionInventario" id="botonGuardarAsignacionInventario" value="Guardar" />
							<input type="submit" name="botonSalir" id="botonSalir" value="Salir" />
						</td>
					</tr>
				</table>
			</div>                        	
		</div>
	</div>
</form>
</div>
<div id="error"></div>
