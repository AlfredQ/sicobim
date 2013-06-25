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


    (function($) {
        // call setMask function on the document.ready event
        $(function() {
            $('input:text').setMask();
        });
    })(jQuery);
</script>

<div id="pestanaRegistrarUnidad">
    <ul>
        <li><a href="#tabRegistrarUnidad">Estructura Organizativa / Unidad</a></li>
    </ul>

    <form id="frmRegistrarUnidad" name="frmRegistrarUnidad" method="post">
        <div id="tabCenso" class="contenedorPestanas">
            <div id="formularioHorizontal">
                <table align="center">
                    <tr class="titleColor">

                        <td>
                            <label><span class='obligatorio'></span>N° de Cuenta</label>
                        </td>	
                        <td>
                            <input type="text" name="nrocuentaunid" id="nrocuentaunid" maxlength="8" size="25" alt="9999999">    										
                        </td>
                    </tr>
                    <tr class="titleColor">
                        <td>
                            <label><span class='obligatorio'></span>Denominaci&oacute;n:</label>
                        </td>

                        <td>
                            <input type="text" name="denominacion" id="denominacion" size="25" alt="aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa">
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
                        <!-- imput que guarda el id cuando se esta modificando  -->
                        <td>
                            <input type="hidden" name="status" id="status" value="TRUE"/>

                            <!-- imput que guarda el id cuando se esta modificando  -->
                            <input type="hidden" name="intIdFila" id="intIdFila"/>
                        </td> 
                    </tr>								
                </table>
                <div class="tablaBtn" id="div_2_btn">
                    <input type="submit" name="botonGuardarUnidad" id="botonGuardarUnidad" value="Guardar" />
                    <input type="submit" name="botonSalir" id="botonSalir" value="Salir" />
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
                                                <th><strong>Acci&oacute;n</strong></th>
                                            </tr>
                                        </thead>
                                        <tbody>

                                            <?php
                                            $contadorUnidad = $_SESSION['contadorRegistro'];
                                            $id_Unidad = $_SESSION['ArrId_Unidad'];
                                            $nombreUnidad = $_SESSION['ArrDescripcionUnidad'];
                                            $nombreDire = $_SESSION['ArrDescripcionDire'];
                                            $codigoDire = $_SESSION['ArrId_Dire'];
                                            $nombreDepe = $_SESSION['ArrNombreDepe'];
                                            $codigoDepe = $_SESSION['ArrId_Depe'];
                                            $codigoconcat = $codigoDepe[$_SESSION['ArrId_Depe']] . '.' . $codigoDire[$_SESSION['ArrId_Dire']] . '.' . $id_Unidad[$_SESSION['ArrId_Unidad']];
                                            for ($index = 0; $index < $contadorUnidad; $index++) {
                                                $codigoconcat = $codigoDepe[$index] . '.' . $codigoDire[$index] . '.' . $id_Unidad[$index];
                                                $cont = $index + 1;
                                                echo"
	                 				<tr class='gradeX'>
			                 				<td align='center'>" . $cont . "</td>
			                 				<td align='center' width='15%'>" . $id_Unidad[$index] . "</td>
			                 				<td align='left' width='20%'>" . $nombreUnidad[$index] . "</td>  
			                 				<td align='left' width='20%'>" . $nombreDepe[$index] . "</td>    
			                 				<td align='left' width='20%'>" . $nombreDire[$index] . "</td>   
			                 			    <td align='center'>
	                 						<a class='tablaUnidadModificar'>
	                 						<input type='hidden' name='cdUnidad$index' id='cdUnidad$index' value='" . $id[$index] . "'/>
	          								<img src='../../assets/img/edit.png' border='0' title='Modificar'></a>
	          							
	                 						<a class='tablaDireccionEliminar'>
	                 						<input type='hidden' name='cdUnidad$index' id='cdUnidad$index' value='" . $id[$index] . "'/>
	                 						<input type='hidden' name='codigoDepe$index' id='codigoDepe$index' value='" . $codigoDepe[$index] . "'/>
	                 						<input type='hidden' name='codigoDire$index' id='codigoDire$index' value='" . $codigoDire[$index] . "'/>
	          								<img src='../../assets/img/eliminar.png' border='0' title='Eliminar'></a></td>
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
                <div id="aceptarUnidad"></div>
                <div id="aceptarUnidad"></div>
            </div>
        </div>	
    </form>
</div>
<div id="error"></div>