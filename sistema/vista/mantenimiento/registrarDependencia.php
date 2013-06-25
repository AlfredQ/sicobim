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
<script>
function validar(e) {
    tecla = (document.all)?e.keyCode:e.which;
    if (tecla==8) return true;
    patron = /\d/;
    te = String.fromCharCode(tecla);
    return patron.test(te); 
} 
</script>
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
            "sPaginationType": "full_numbers"
        });
    });
</script>
<div id="pestanaRegistrarDependencia">
    <ul>
        <li><a href="#tabRegistrarDependencia">Estructura Organizativa / Dependencia</a></li>
    </ul>

    <form id="frmRegistrarDependencia" name="frmRegistrarDependencia" method="post">
        <div id="tabCenso" class="contenedorPestanas">
            <div id="formularioHorizontal">
                <table align="center">
                    <tr class="titleColor">

                        <td>
                            <label><span class='obligatorio'></span>N° de Cuenta</label>
                        </td>	
                        <td>
                            <input type="text" onkeypress="return validar(event)" autocomplete="off" name="nrocuenta" id="nrocuenta" maxlength="8" size="25"  >    
                        </td>
                    </tr>

                    <tr class="titleColor">
                        <td>
                            <label><span class='obligatorio'></span>Denominaci&oacute;n:</label>
                        </td>

                        <td>
                            <input type="text" name="denominacion" id="denominacion" size="25" alt="aaaaaaaaaa">
                        </td>
                    </tr>

                    <tr class="titleColor">

                        <td>
                            <input type="hidden" name="status" id="status" value="TRUE" size="25">
                        </td>

                        <td>
                            <input type="hidden" name="orga" id="orga" value="1" size="25">
                        </td>
                        <!-- imput que guarda el id cuando se esta modificando  -->
                        <td>
                            <input type="hidden" name="intIdFila" id="intIdFila"/>
                        </td> 

                    </tr>
                </table>
                <div class="tablaBtn" id="div_2_btn">
                    <input type="submit" name="botonGuardarDependencia" id="botonGuardarDependencia" value="Guardar" />
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
                                                <th><strong>N° cuenta</strong></th>
                                                <th><strong>Descripci&oacute;n</strong></th>	
                                                <th><strong>Acci&oacute;n</strong></th>
                                            </tr>
                                        </thead>
                                        <tbody>

                                            <?php
                                            $contador = $_SESSION['contadorRegistro'];
                                            $codigo = $_SESSION['ArrId_Depe'];
                                            $nombre = $_SESSION['ArrDescripcion'];


                                            for ($index = 0; $index < $contador; $index++) {
                                                $cont = $index + 1;
                                                echo"
	                 				<tr class='gradeX'>
			                 				<td align='center'>" . $cont . "</td>
			                 				<td align='center'>" . $codigo[$index] . "</td>
			                 				<td align='left' width='50%'>" . $nombre[$index] . "</td>    
			                 				<td align='center'>
	                 						<a class='tablaDependenciaModificar'>
	                 						<input type='hidden' name='cdDependencia$index' id='cdDependencia$index' value='" . $id[$index] . "'/>
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
                <div id="aceptarDependencia"></div>
                <div id="aceptarmsjDependencia"></div>
            </div>	
        </div>	

    </form>
</div>
<div id="error"></div>

<script type="text/javascript">
    (function($){
    // call setMask function on the document.ready event
    $(function(){
        $('input:text').setMask();
    });
})(jQuery);
</script>    