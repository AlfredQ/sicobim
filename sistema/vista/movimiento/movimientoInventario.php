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
    
    div.style.display='none';
    div1.style.display='none';
    div2.style.display = 'none';
    
}


function Mostrar(){
    var div = document.getElementById('divOculto');
    var div1 = document.getElementById('divOculto1');
    var div2 = document.getElementById('divOculto2');
    var div3 = document.getElementById('divOculto3');
    var div4 = document.getElementById('divOculto4');
    var tr5 = document.getElementById('trOculto5');
    var div6 = document.getElementById('divOculto6');
    div.style.display = '';
    div1.style.display = '';
    div2.style.display = '';
    div3.style.display = '';
    div4.style.display = '';
    tr5.style.display = '';
    div6.style.display = '';
   
}

function MostrarJusti(){

    var div3 = document.getElementById('divOculto3');
    var div4 = document.getElementById('divOculto4');
    var div6 = document.getElementById('divOculto6');
    div3.style.display = '';
    div4.style.display = '';
    div6.style.display = '';
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
}
</script>  


<script language="javascript" type="text/javascript">

/* VALIDAR AGREGAR ITEMS SOCIOS */
function validarIncorporacion(id_numBien,id_numOrden,id_producto,id_caracter,id_concepto,id_tabla)
{
	numBien=document.getElementById(id_numBien);
	numOrden=document.getElementById(id_numOrden);
	cbo_producto=document.getElementById(id_producto);
	caracter==document.getElementById(id_caracter);
	cbo_concepto=document.getElementById(id_concepto);
	
	if(numBien.value=='' || numOrden.value=='' || cbo_producto.value=='' || caracter.value=='' || cbo_concepto.value=='')
	{
		alert('Debe ingresar los campos con (*) !!!');
		return false;
	}else
	{
		agregarIncorporacion(id_numBien,id_numOrden,id_producto,id_caracter,id_concepto,id_tabla);
		return true;
	}
}


var contadorItem=1;
function agregarIncorporacion(idinput1,idSelect1,idSelect2,idSelect3,idinput2,idSelect4,idinput3,idinput4,idinput5,idinput6,idTablaAInsertar){
	//VALORES DE LOS INPUT
	input1=document.getElementById(idinput1),
		valorinput1=input1.value,
	//VALORES DE LOS SELECT
	select1=document.getElementById(idSelect1),
	valorSelect1=select1.options[select1.selectedIndex].value,
	textSelect1=select1.options[select1.selectedIndex].text,

	select2=document.getElementById(idSelect2),
	valorSelect2=select2.options[select2.selectedIndex].value,
	textSelect2=select2.options[select2.selectedIndex].text,

	select3=document.getElementById(idSelect3),
	valorSelect3=select3.options[select3.selectedIndex].value,
	textSelect3=select3.options[select3.selectedIndex].text,
	//VALORES DE LOS INPUT		
	input2=document.getElementById(idinput2),
		valorinput2=input2.value,

	select4=document.getElementById(idSelect4),
	valorSelect4=select4.options[select4.selectedIndex].value,
	textSelect4=select4.options[select4.selectedIndex].text,
		
	input3=document.getElementById(idinput3),
		valorinput3=input3.value,
	input4=document.getElementById(idinput4),
		valorinput4=input4.value,
	input5=document.getElementById(idinput5),
		valorinput5=input5.value,
	input6=document.getElementById(idinput6),
		valorinput6=input6.value,

	//VALOR DE LA TABLA	
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
	inputhidden4.setAttribute("name","asignaComboProducto[]"+contadorItem);
	inputhidden4.setAttribute("value",valorSelect3);
	inputhidden4.setAttribute("id","nombrecuartocampo"+contadorItem);

	inputhidden5.setAttribute("type","hidden");
	inputhidden5.setAttribute("name","asignaCaracteristica[]"+contadorItem);
	inputhidden5.setAttribute("value",valorinput2);
	inputhidden5.setAttribute("id","nombrequintocampo"+contadorItem);

	inputhidden6.setAttribute("type","hidden");
	inputhidden6.setAttribute("name","asignaComboConcepto"+contadorItem);
	inputhidden6.setAttribute("value",valorSelect4);
	inputhidden6.setAttribute("id","nombresextocampo"+contadorItem);

	inputhidden7.setAttribute("type","hidden");
	inputhidden7.setAttribute("name","asignanNumeroOrden[]"+contadorItem);
	inputhidden7.setAttribute("value",valorinput3);
	inputhidden7.setAttribute("id","nombreseptimocampo"+contadorItem);
	
	inputhidden8.setAttribute("type","hidden");
	inputhidden8.setAttribute("name","asignaFechaOrden[]"+contadorItem);
	inputhidden8.setAttribute("value",valorinput4);
	inputhidden8.setAttribute("id","nombreoctavocampo"+contadorItem);

	inputhidden9.setAttribute("type","hidden");
	inputhidden9.setAttribute("name","asignaNumFactura[]"+contadorItem);
	inputhidden9.setAttribute("value",valorinput5);
	inputhidden9.setAttribute("id","nombrenovenocampo"+contadorItem);

	inputhidden10.setAttribute("type","hidden");
	inputhidden10.setAttribute("name","asignaFechaFactura[]"+contadorItem);
	inputhidden10.setAttribute("value",valorinput6);
	inputhidden10.setAttribute("id","nombredecimocampo"+contadorItem);

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
	td5.innerHTML=valorinput2;
	
	td6.setAttribute("style"," text-align:center;");
	td6.setAttribute("width","15%");
	td6.setAttribute("bgcolor","#FFFFFF");
	td6.setAttribute("class","textoCampo");
	td6.innerHTML=textSelect4;

	td7.setAttribute("style"," text-align:center;");
	td7.setAttribute("width","15%");
	td7.setAttribute("bgcolor","#FFFFFF");
	td7.setAttribute("class","textoCampo");
	td7.innerHTML=valorinput3;

	td8.setAttribute("style"," text-align:center;");
	td8.setAttribute("width","15%");
	td8.setAttribute("bgcolor","#FFFFFF");
	td8.setAttribute("class","textoCampo");
	td8.innerHTML=valorinput4;

	td9.setAttribute("style"," text-align:center;");
	td9.setAttribute("width","15%");
	td9.setAttribute("bgcolor","#FFFFFF");
	td9.setAttribute("class","textoCampo");
	td9.innerHTML=valorinput5;

	td10.setAttribute("style"," text-align:center;");
	td10.setAttribute("width","15%");
	td10.setAttribute("bgcolor","#FFFFFF");
	td10.setAttribute("class","textoCampo");
	td10.innerHTML=valorinput6;

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
	td7.appendChild(inputhidden7);
	td8.appendChild(inputhidden8);
	td9.appendChild(inputhidden9);
	td10.appendChild(inputhidden10);
	tdimagen.appendChild(img);
	
	tr.appendChild(td1);
	tr.appendChild(td2);
	tr.appendChild(td3);
	tr.appendChild(td4);
	tr.appendChild(td5);
	tr.appendChild(td6);
	tr.appendChild(td7);
	tr.appendChild(td8);
	tr.appendChild(td9);
	tr.appendChild(td10);
	tr.appendChild(tdimagen);
	
	tabla.appendChild(tr);
	
	/*input1.value=input2.value=input3.value=input5.value=input6.value="";
	select3.selectedIndex=0,*/
	
	contadorItem++;
}
function eliminarBien(idAEliminar){
	var elementoAEliminar=document.getElementById(idAEliminar);
	var padreDelElementoAEliminar=elementoAEliminar.parentNode;
	padreDelElementoAEliminar.removeChild(elementoAEliminar);
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
									<label><span class='obligatorio'></span>N° Planilla:</label>
								</td>
								<td>
									<input type="text" name="nplanilla" id="nplanilla" maxlength="50" size="15">
								</td>
								<td>
									<label><span class='obligatorio'></span>Fecha Planilla:</label>
								</td>
								<td>
									<input type="text" name="fechaPlanilla" id="fechaPlanilla" maxlength="50" size="15">
								</td>
							</tr>
							<tr class="titleColor">
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
								<td>
									<select name="cbo_direccion" id="cbo_direccion">
										<option value="">- Seleccione -</option>
									</select>
								</td>			
							</tr>
						  	<tr class="titleColor">
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
								<td>
									<select name="cbo_coordinacion" id="cbo_coordinacion">
										<option value="">- Seleccione -</option>
									</select>
								</td>			
							</tr>			
					  	</table>
					</td>
				</tr>	
			    <tr>
			    	<td><br><br> 
				    	<table border="0" cellpadding="1" cellspacing="1" align="center" width="70%">
				    		<tr class="titleColor">
				    			<td width="30%"><label> Incorporar</label><img id="agregar" src="../../assets/img/incorporar.png" title="Incorporar"></td>
								<td width="30%"><label> Desincorporar</label><img id="agregar" src="../../assets/img/desincorporar.png" title="Desincorporar"></td>
								<td width="30%"><label> Traspaso</label><img id="agregar" src="../../assets/img/traspaso.png" title="Traspaso"></td>
									<!-- <input type="submit" name="botonAgregarIncorporacion" id="botonAgregarIncorporacion" value="Incorporacion" />
									<input type="submit" name="botonAgregarDesincorporacion" id="botonAgregarDesincorporacion" value="Desincorporacion" />
									<input type="submit" name="botonAgregarTraspaso" id="botonAgregarDesincorporacion" value="Desincorporacion" />
									<input type="submit" name="botonSalir" id="botonSalir" value="Salir" />-->			    		
				    		</tr>
				    	</table>
			    	</td>					
				</tr>						  					 
			</table>	
			<br>
		<div >		<!-- style="display:none;" id="divOculto6"  -->					
			<table width="50%" align="center" border="0">
				<tr>
					<td>
						<table  border="0" cellpadding="1" cellspacing="1" align="center" width="98%" bgcolor="#D6D6D6">
							<tr class="titleColor"> 
								<td bgcolor="#D6D6D6">N° Inventario</td>
								<td bgcolor="#D6D6D6">SubGrupo</td> 
								<td bgcolor="#D6D6D6">Secci&oacute;n</td>
								<td bgcolor="#D6D6D6">Activo</td>
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
			                    <td bgcolor="#F2F2F2" align="center"><textarea  name="caracter" id="caracter" cols="18" rows="1"></textarea></td>                    
			                    <td bgcolor="#F2F2F2" align="center" rowspan="3"><img id="agregar" onclick="agregarIncorporacion('numBien', 'cbo_subGrupo', 'cbo_seccion', 'cbo_producto', 'caracter', 'cbo_concepto', 'numOrden', 'fechaOrden', 'numFactura', 'fechaFactura', 'tablaBienes')" src="../../assets/img/add.png" title="Agregar"></td>
			                </tr>
			                <tr class="titleColor"> 
								<td bgcolor="#D6D6D6">Concepto</td>
								<td bgcolor="#D6D6D6">N° Orden</td> 
								<td bgcolor="#D6D6D6">Fecha Orden</td>
								<td bgcolor="#D6D6D6">N° Factura</td>
								<td bgcolor="#D6D6D6">Fecha Factura</td>
							</tr>
							<tr class="titleColor">
			                	<td bgcolor="#F2F2F2" align="center">
			                		<select name="cbo_concepto" id="cbo_concepto"   style="width:120px;" >
											<option value="">- Seleccione -</option>
											<option value="1">- uno -</option>
									</select>
			                	</td>
			                    <td bgcolor="#F2F2F2" align="center"><input type="text" name="numOrden" id="numOrden" size="10"></td>                   
			                    <td bgcolor="#F2F2F2"><input type="text" name="fechaOrden" id="fechaOrden" size="10"></td>		                    
			                    <td bgcolor="#F2F2F2" align="center"><input type="text" name="numFactura" id="numFactura" size="10"></td>                   
			                    <td bgcolor="#F2F2F2" align="center"><input type="text" name="fechaFactura" id="fechaFactura" size="15"></td>	
			                </tr>
						</table><br>
						<table  id="tablaIncorporacion" border="1" cellpadding="3" cellspacing="1" align="center" width="800px" bgcolor="#D6D6D6">
							<tr class="titleColor">
								<td bgcolor="#D6D6D6" class="tituloTablas" align="center" colspan="7">Datos de la Incorporaci&oacute;n</td>
							</tr>
							<tr class="titleColor">
								<td bgcolor="#F2F2F2" align="center">N° Inventario</td>
								<td bgcolor="#F2F2F2" align="center">N° Orden</td>
								<td bgcolor="#F2F2F2" align="center">Activo</td>
								<td bgcolor="#F2F2F2" align="center">Caracter&iacute;stica</td>								
								<td bgcolor="#F2F2F2" align="center">Concepto</td>
								<td bgcolor="#F2F2F2" align="center">Acci&oacute;n</td>
							</tr>
						</table>
					</td>
				</tr>
			</table>
		</div> 		
		<div style="display:none;" id="divOculto6">							
			<table width="50%" align="center" border="0">
				<tr >
					<td>
					<table  border="0" cellpadding="1" cellspacing="1" align="center" width="95%" bgcolor="#D6D6D6">
					
					
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
