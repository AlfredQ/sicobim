
<?php
//session_start();
require_once '../sesion.php';
?>
<!-- 
         Created on 28/01/2013
         <Nombre del archivo:registrarDependencia.php>  
         <Versión del archivo: 1.0>
         <Autor del archivo: Milagros Negrín>
         <Breve explicación del contenido de el archivo: 
         Vista de registro de dependencia>
        
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
    function fnFeaturesInit()
    {
        /* Not particularly modular this - but does nicely :-) */
        $('ul.limit_length>li').each(function(i) {
            if (i > 9) {
                this.style.display = 'none';
            }
        });
        $('ul.limit_length').append('<li class="css_link">Show more<\/li>');
        $('ul.limit_length li.css_link').click(function() {
            $('ul.limit_length li').each(function(i) {
                if (i > 5) {
                    this.style.display = 'list-item';
                }
            });
            $('ul.limit_length li.css_link').css('display', 'none');
        });
    }
    $(document).ready(function()
    {
        fnFeaturesInit();
        $('#example').dataTable({
            "bJQueryUI": true,
            "sPaginationType": "full_numbers",
        });
    });
</script>
<div id="pestanaRegistrarCoordinacion">
    <ul>
        <li><a href="#tabRegistrarDireccion">Estructura Organizativa / Coordinaci&oacute;n</a></li>
    </ul>

    <form id="frmRegistrarCoordinacion" name="frmRegistrarCoordinacion" method="post">
        <div id="tabCenso" class="contenedorPestanas">
            <div id="formularioHorizontal">
                <table align="center">
                    <tr class="titleColor">

                        <td>
                            <label><span class='obligatorio'></span>N° de Cuenta</label>
                        </td>	
                        <td>
                            <input type="text" name="nrocuentacoor" id="nrocuentacoor" maxlength="8" size="25">    										
                        </td>
                    </tr>


                    <tr class="titleColor">
                        <td>
                            <label><span class='obligatorio'></span>Denominaci&oacute;n:</label>
                        </td>

                        <td>
                            <input type="text" name="denominacion" id="denominacion" size="25">
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
                    </tr>

                    <tr class="titleColor">
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
                        <!-- imput que guarda el id cuando se esta modificando  -->
                        <td>
                            <input type="hidden" name="intIdFila" id="intIdFila"/>

                            <input type="hidden" name="status" id="status" value="TRUE"/>
                        </td>  


                </table>
                <div class="tablaBtn" id="div_2_btn">
                    <input type="submit" name="botonGuardarCoordinacion" id="botonGuardarCoordinacion" value="Guardar" />
                    <input type="submit" name="botonLimpiar" id="botonLimpiar" Value="limpiar" onclick="this.value = ''";>
                    <input type="submit" name="botonSalir" id="botonSalir" value="Salir" />
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
                                            <th><strong>N° Cuenta</strong></th>
                                            <th><strong>Denominaci&oacute;n</strong></th>
                                            <th><strong>Dependencia</strong></th>
                                            <th><strong>Direcci&oacute;n</strong></th>	
                                            <th><strong>Unidad</strong></th>	
                                            <th><strong>Acci&oacute;n</strong></th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        <?php
                                        $contadorCoor = $_SESSION['contadorRegistro'];
                                        $codigoCoor = $_SESSION['ArrId_Coor'];
                                        $nombreCoor = $_SESSION['ArrDescripcionCoor'];

                                        $codigoDepe = $_SESSION['ArrId_Depe'];
                                        $nombreDepe = $_SESSION['ArrDescripcion'];

                                        $codigoDire = $_SESSION['ArrId_Dire'];
                                        $nombreDire = $_SESSION['ArrDescripcionDire'];

                                        $codigoUnid = $_SESSION['ArrId_Unidad'];
                                        $nombreUnid = $_SESSION['ArrDescripcionUnidad'];

                                        for ($index = 0; $index < $contadorCoor; $index++) {
                                            $cont = $index + 1;
                                            echo"
	                 				<tr class='gradeX'>
			                 				<td align='center' width='6%'>" . $cont . "</td>
			                 				<td align='center' width='15%'>" . $codigoCoor[$index] . "</td>
			                 				<td align='left' width='14%'>" . $nombreCoor[$index] . "</td>  
											<td align='left' width='15%'>" . $nombreDepe[$index] . "</td>
			                 				<td align='left' width='14%'>" . $nombreDire[$index] . "</td>  
			                 				<td align='left' width='10%'>" . $nombreUnid[$index] . "</td>  
			                 				<td align='center'>
			                 				
	                 						<a class='tablaCoordinacionModificar'>
	                 						<input type='hidden' name='cdCoor$index' id='cdCoor$index' value='" . $id[$index] . "'/>
	                 						<input type='hidden' name='codigoDepe$index' id='codigoDepe$index' value='" . $codigoDepe[$index] . "'/>
	                 						<input type='hidden' name='codigoDire$index' id='codigoDire$index' value='" . $codigoDire[$index] . "'/>
	          								<input type='hidden' name='codigoUnid$index' id='codigoUnid$index' value='" . $codigoUnid[$index] . "'/>
	                 						<img src='../../assets/img/edit.png' border='0' title='Modificar'></a>
	                 						
	                 						<a class='tablaCoordinacionEliminar'>
	                 						<img src='../../assets/img/eliminar.png' border='0' title='Eliminar'></a>
	                 						<input type='hidden' name='cdCoor$index' id='cdCoor$index' value='".$codigoCoor."'/>
	                 						</td>
	                 						
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
            <div id="aceptarCoordinacion"></div>
            <div id="EliminarCoordinacion"></div>
        </div>	
    </form>
</div>
<div id="error"></div>