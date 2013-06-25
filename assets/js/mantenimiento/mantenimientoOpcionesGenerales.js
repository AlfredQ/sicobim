$(document).ready(function()
{
    //funcion para validar si el numero de cuenta de dependencia ya se encuentra registrado
    $("#nrocuenta").focusout(function() {
        var nrocuenta = $("#nrocuenta").val();
        $.ajax({
            url: "../controlador/mantenimiento/mantenimientoControl.php?opc=21&valor=" + nrocuenta,
            type: "POST",
            dataType: "json",
            data: $("#frmRegistrarDependencia").serialize(),
            success: function(datos)
            {
                if (datos.error == 0)
                {
                    $("#nrocuenta").val("");
                    $("#aceptarmsjDependencia").dialog("destroy");
                    $("#aceptarmsjDependencia").dialog({
                        title: "SICOBIM",
                        resizable: false,
                        bgiframe: true,
                        autoOpen: true,
                        modal: true,
                        buttons:
                                {
                                    "Aceptar": function()
                                    {
                                        $(this).dialog('close');

                                    }
                                }
                    }).html(datos.msj);
                }

            }
        });
    });//Fin validar nro cuenta dependencia

    //funcion para validar si el numero de cuenta de dependencia ya se encuentra registrado
    $("#nrocuentadire").focusout(function() {
        var nrocuentadire = $("#nrocuentadire").val();
        $.ajax({
            url: "../controlador/mantenimiento/mantenimientoControl.php?opc=22&valor=" + nrocuentadire,
            type: "POST",
            dataType: "json",
            data: $("#frmRegistrarDireccion").serialize(),
            success: function(datos)
            {
                if (datos.error == 0)
                {
                    $("#nrocuentadire").val("");
                    $("#aceptarDireccion").dialog("destroy");
                    $("#aceptarDireccion").dialog({
                        title: "SICOBIM",
                        resizable: false,
                        bgiframe: true,
                        autoOpen: true,
                        modal: true,
                        buttons:
                                {
                                    "Aceptar": function()
                                    {
                                        $(this).dialog('close');

                                    }
                                }
                    }).html(datos.msj);
                }

            }
        })
    });/*Fin funcion validar numero*/

    //funcion para validar si el numero de cuenta de unidad ya se encuentra registrado
    $("#nrocuentaunid").focusout(function() {
        var nrocuentaunid = $("#nrocuentaunid").val();
        $.ajax({
            url: "../controlador/mantenimiento/mantenimientoControl.php?opc=23&valor=" + nrocuentaunid,
            type: "POST",
            dataType: "json",
            data: $("#frmRegistrarUnidad").serialize(),
            success: function(datos)
            {
                if (datos.error == 0)
                {
                    $("#nrocuentaunid").val("");
                    $("#aceptarUnidad").dialog("destroy");
                    $("#aceptarUnidad").dialog({
                        title: "SICOBIM",
                        resizable: false,
                        bgiframe: true,
                        autoOpen: true,
                        modal: true,
                        buttons:
                                {
                                    "Aceptar": function()
                                    {
                                        $(this).dialog('close');

                                    }
                                }
                    }).html(datos.msj);
                }

            }
        });
    });/*Fin funcion validar numero*/

    //funcion para validar si el numero de cuenta de unidad ya se encuentra registrado
    $("#nrocuentacoor").focusout(function() {
        var nrocuentacoor = $("#nrocuentacoor").val();
        $.ajax({
            url: "../controlador/mantenimiento/mantenimientoControl.php?opc=24&valor=" + nrocuentacoor,
            type: "POST",
            dataType: "json",
            data: $("#frmRegistrarCoordinacion").serialize(),
            success: function(datos)
            {
                if (datos.error == 0)
                {
                    $("#nrocuentacoor").val("");
                    $("#aceptarCoordinacion").dialog("destroy");
                    $("#aceptarCoordinacion").dialog({
                        title: "SICOBIM",
                        resizable: false,
                        bgiframe: true,
                        autoOpen: true,
                        modal: true,
                        buttons:
                                {
                                    "Aceptar": function()
                                    {
                                        $(this).dialog('close');

                                    }
                                }
                    }).html(datos.msj);
                }

            }
        });
    });/*Fin funcion validar numero*/

    $("#fecha").datepicker(
            {
                changeMonth: true,
                changeYear: true
            }, $.datepicker.regional['es']);

    $(".obligatorio").html('*');
    /*
     * REGISTRAR CENSO PESTAÑA:
     * 
     * 
     */
    $("#pestanaRegistrarDependencia").tabs();

    $.validator.addMethod("regex", function(value, element, regexp) {
        var re = new RegExp(regexp);
        return this.optional(element) || re.test(value);
    }, "Solo caracteres alfanumericos");


    /*Validar numeros*/
    $.validator.addMethod("regex", function(value, element, regexp) {
        var re = new RegExp(regexp);
        return this.optional(element) || re.test(value);
    }, "Solo caracteres alfanumericos");


    // ///////////////////////////////////////////////////////////////////////
    // Pagina => Guardar Usuario
    // Detalle => Guardar
    // ///////////////////////////////////////////////////////////////////////



    $('#botonGuardarDependencia').click(function()
    {
        $("#frmRegistrarDependencia").validate(
                {
// onfocusout: false,
                    errorContainer: "div#error",
                    errorLabelContainer: "div#error",
                    rules:
                            {
                                nrocuenta:
                                        {
                                            required: true,
                                            regex: "^[a-zA-Z0-9-#.,/ áéíóúñ]+$"
                                        },
                                denominacion:
                                        {
                                            required: true,
                                            regex: "^[a-zA-Z0-9-#.,/ áéíóúñ]+$"
                                        }


                            },
                    messages:
                            {
                                nrocuenta:
                                        {
                                            required: "<li>Número de Cuenta Obligatorio</li>",
                                            regex: "<li>Número de Cuenta no debe tener Caracteres Especiales</li>"
                                        },
                                denominacion:
                                        {
                                            required: "<li>Denominacion Obligatorio</li>",
                                            regex: "<li>Denominacion solo Letras o Número</li>"
                                        }

                   },
                    submitHandler: function()
                    {
                        $.ajax
                                ({
                                    url: "../controlador/mantenimiento/mantenimientoControl.php?opc=10",
                                    type: "POST",
                                    //dataType: "html",
                                    dataType: "json",
                                    data: $("#frmRegistrarDependencia").serialize(),
                                    success: function(datos)
                                    {


                                        if (datos.error == 0)
                                        {
                                            $("#aceptarDependencia").dialog("destroy");
                                            $("#aceptarDependencia").dialog({
                                                title: "SICOBIM",
                                                resizable: false,
                                                bgiframe: true,
                                                autoOpen: true,
                                                modal: true,
                                                buttons:
                                                        {
                                                            "Aceptar": function()
                                                            {
                                                                $(this).dialog('close');
                                                                $("#dependencia").attr("disabled", false);

                                                                $.post("../controlador/mantenimiento/mantenimientoControl.php?opc=0", function(data)
                                                                {
                                                                    //alert(data);
                                                                    $.post(data, function(datos)
                                                                    {
                                                                        $.getScript("../../assets/js/mantenimiento/mantenimientoOpcionesGenerales.js");

                                                                        $("#contenido").html(datos);
                                                                    });

                                                                });

                                                            }
                                                        }
                                            }).html(datos.msj);
                                        }
                                        if (datos.error == 1)
                                        {

                                            $("#error").html(datos.msj);
                                            $("#error").show();
                                        }
                                    }
                                });
                    }
                });
    });
    /*TABLA Modificar Dependencia (MODIFICAR)*/
    $("a.tablaDependenciaModificar").click(function(evento)
    {
        intIdFila = $(this).parents("tr").find("td").eq(0).html();
        codigo = $(this).parents("tr").find("td").eq(1).html();
        $("#intIdFila").val(intIdFila);

        intIdFila = $(this).parents("tr").find("td").eq(0).html();
        codigo = $(this).parents("tr").find("td").eq(1).html();
        nombre = $(this).parents("tr").find("td").eq(2).html();

        $("#intIdFila").val(codigo);
        $("#nrocuenta").val(codigo);
        $("#nrocuenta").attr("disabled", true);
        $("#denominacion").val(nombre);


    });

    $("#pestanaRegistrarDireccion").tabs();

    $.validator.addMethod("regex", function(value, element, regexp) {
        var re = new RegExp(regexp);
        return this.optional(element) || re.test(value);
    }, "Solo caracteres alfanumericos");

    // ///////////////////////////////////////////////////////////////////////
    // Pagina => Guardar Usuario
    // Detalle => Guardar
    // ///////////////////////////////////////////////////////////////////////
    $('#botonGuardarDireccion').click(function()
    {
        $("#frmRegistrarDireccion").validate(
                {
                    // onfocusout: false,
                    errorContainer: "div#error",
                    errorLabelContainer: "div#error",
                    rules:
                            {
                                nrocuentadire:
                                        {
                                            required: true,
                                            number: true
                                        },
                                denominacion:
                                        {
                                            required: true,
                                            regex: "^[a-zA-Z0-9-#.,/ áéíóúñ]+$"
                                        },
                                cbo_depencia:
                                        {
                                            required: true
                                        }

                            },
                    messages:
                            {
                                nrocuentadire:
                                        {
                                            required: "<li>Numero de cuenta Obligatoria</li>",
                                            number: "<li>Cédula solo Permite Dígitos</li>"
                                        },
                                denominacion:
                                        {
                                            required: "<li>Denominacion Obligatorio</li>",
                                            regex: "<li>Denominacion no debe tener Caracteres Especiales</li>"
                                        },
                                cbo_dependencia:
                                        {
                                            required: "<li>dependencia Obligatorio</li>"

                                        }

                   },
                    submitHandler: function()
                    {
                        $.ajax
                                ({
                                    url: "../controlador/mantenimiento/mantenimientoControl.php?opc=11",
                                    type: "POST",
                                    //dataType: "html",
                                    dataType: "json",
                                    data: $("#frmRegistrarDireccion").serialize(),
                                    success: function(datos)
                                    {


                                        if (datos.error == 0)
                                        {
                                            $("#aceptarDireccion").dialog("destroy");
                                            $("#aceptarDireccion").dialog({
                                                title: "SICOBIM",
                                                resizable: false,
                                                bgiframe: true,
                                                autoOpen: true,
                                                modal: true,
                                                buttons:
                                                        {
                                                            "Aceptar": function()
                                                            {
                                                                $(this).dialog('close');
                                                                $("#direccion").attr("disabled", false);

                                                                $.post("../controlador/mantenimiento/mantenimientoControl.php?opc=1", function(data)
                                                                {
                                                                    //alert(data);
                                                                    $.post(data, function(datos)
                                                                    {
                                                                        $.getScript("../../assets/js/mantenimiento/mantenimientoOpcionesGenerales.js");

                                                                        $("#contenido").html(datos);
                                                                    });

                                                                });

                                                            }
                                                        }
                                            }).html(datos.msj);
                                        }
                                        if (datos.error == 1)
                                        {

                                            $("#error").html(datos.msj);
                                            $("#error").show();
                                        }
                                    }
                                });
                    }
                });
    });



    /*TABLA Modificar Direccion (MODIFICAR)*/
    $("a.tablaDireccionModificar").click(function(evento)
    {
        intIdFila = $(this).parents("tr").find("td").eq(0).html();
        cuentaDire = $(this).parents("tr").find("td").eq(1).html();
        $("#intIdFila").val(intIdFila);

        intIdFila = $(this).parents("tr").find("td").eq(0).html();
        cuentaDire = $(this).parents("tr").find("td").eq(1).html();
        denominacion = $(this).parents("tr").find("td").eq(2).html();
        cbo_dependencia = $(this).parents("tr").find("td").eq(3).html();

        contador = 0;
        contador = intIdFila - 1;

        cbo_codigoDepe = $("#codigoDependencia" + contador).val();

        $("#intIdFila").val(cuentaDire);
        $("#nrocuentadire").val(cuentaDire);
        $("#nrocuentadire").attr("disabled", true);
        $("#denominacion").val(denominacion);

        $.post("../../sistema/controlador/combos/combosControl.php?opc=0&valor=" + cbo_codigoDepe, function(data)
        {
            $("#cbo_dependencia").html(data);
        });
    });




    $("#pestanaRegistrarUnidad").tabs();

    $.validator.addMethod("regex", function(value, element, regexp) {
        var re = new RegExp(regexp);
        return this.optional(element) || re.test(value);
    }, "Solo caracteres alfanumericos");

    // ///////////////////////////////////////////////////////////////////////
    // Pagina => Guardar Usuario
    // Detalle => Guardar
    // ///////////////////////////////////////////////////////////////////////
    $('#botonGuardarUnidad').click(function()
    {
        $("#frmRegistrarUnidad").validate(
                {
                    // onfocusout: false,
                    errorContainer: "div#error",
                    errorLabelContainer: "div#error",
                    rules:
                            {
                                nrocuentaunid:
                                        {
                                            required: true,
                                            number: true
                                        },
                                denominacion:
                                        {
                                            required: true,
                                            regex: "^[a-zA-Z0-9-#.,/ áéíóúñ]+$"
                                        },
                                cbo_dependencia:
                                        {
                                            required: true
                                        },
                                cbo_direccion:
                                        {
                                            required: true
                                        }
                            },
                    messages:
                            {
                                nrocuentaunid:
                                        {
                                            required: "<li>Cédula Nro de Cuenta</li>",
                                            number: "<li>Nro de Cuentasolo Permite Dígitos</li>"
                                        },
                                denominacion:
                                        {
                                            required: "<li>Denominacion Obligatorio</li>",
                                            regex: "<li>Denominacion no debe tener Caracteres Especiales</li>"
                                        },
                                cbo_dependencia:
                                        {
                                            required: "<li>Dependencia Obligatorio</li>"
                                        },
                                cbo_direccion:
                                        {
                                            required: "<li>Dirección Obligatorio</li>"
                                        }
                   },
                    submitHandler: function()
                    {

                        $.ajax
                                ({
                                    url: "../controlador/mantenimiento/mantenimientoControl.php?opc=12",
                                    type: "POST",
                                    //dataType: "html",
                                    dataType: "json",
                                    data: $("#frmRegistrarUnidad").serialize(),
                                    success: function(datos)
                                    {


                                        if (datos.error == 0)
                                        {
                                            $("#aceptarUnidad").dialog("destroy");
                                            $("#aceptarUnidad").dialog({
                                                title: "SICOBIM",
                                                resizable: false,
                                                bgiframe: true,
                                                autoOpen: true,
                                                modal: true,
                                                buttons:
                                                        {
                                                            "Aceptar": function()
                                                            {
                                                                $(this).dialog('close');
                                                                $("#unidad").attr("disabled", false);

                                                                $.post("../controlador/mantenimiento/mantenimientoControl.php?opc=2", function(data)
                                                                {
                                                                    //alert(data);
                                                                    $.post(data, function(datos)
                                                                    {
                                                                        $.getScript("../../assets/js/mantenimiento/mantenimientoOpcionesGenerales.js");

                                                                        $("#contenido").html(datos);
                                                                    });

                                                                });

                                                            }
                                                        }
                                            }).html(datos.msj);
                                        }
                                        if (datos.error == 1)
                                        {

                                            $("#error").html(datos.msj);
                                            $("#error").show();
                                        }
                                    }
                                });
                    }
                });
    });



    /*TABLA Modificar unidad (MODIFICAR)*/
    $("a.tablaUnidadModificar").click(function(evento)
    {
        intIdFila = $(this).parents("tr").find("td").eq(0).html();
        codigoUnidad = $(this).parents("tr").find("td").eq(1).html();
        $("#intIdFila").val(intIdFila);

        intIdFila = $(this).parents("tr").find("td").eq(0).html();
        codigoUnidad = $(this).parents("tr").find("td").eq(1).html();
        nombreUnidad = $(this).parents("tr").find("td").eq(2).html();
        cbo_Depe = $(this).parents("tr").find("td").eq(3).html();
        cbo_Dire = $(this).parents("tr").find("td").eq(4).html();
        contador = 0;
        contador = intIdFila - 1;
        cbo_Depe = $("#codigoDepe" + contador).val();


        contadordire = 0;
        contadordire = intIdFila - 1;
        cbo_Dire = $("#codigoDire" + contadordire).val();


        $("#intIdFila").val(codigoUnidad);
        $("#nrocuentaunid").val(codigoUnidad);
        $("#nrocuentaunid").attr("disabled", true);
        $("#denominacion").val(nombreUnidad);

        $.post("../../sistema/controlador/combos/combosControl.php?opc=0&valor=" + cbo_Depe, function(data)
        {
            $("#cbo_dependencia").html(data);


        });

        $.post("../../sistema/controlador/combos/combosControl.php?opc=8&valor=" + cbo_Dire, function(data)
        {
            $("#cbo_direccion").html(data);


        });

    });


    $("#pestanaRegistrarCoordinacion").tabs();

    $.validator.addMethod("regex", function(value, element, regexp) {
        var re = new RegExp(regexp);
        return this.optional(element) || re.test(value);
    }, "Solo caracteres alfanumericos");

    // ///////////////////////////////////////////////////////////////////////
    // Pagina => Guardar Usuario
    // Detalle => Guardar
    // ///////////////////////////////////////////////////////////////////////
    $('#botonGuardarCoordinacion').click(function()
    {
        $("#frmRegistrarCoordinacion").validate(
                {
                    // onfocusout: false,
                    errorContainer: "div#error",
                    errorLabelContainer: "div#error",
                    rules:
                            {
                                nrocuentacoor:
                                        {
                                            required: true
                                        },
                                denominacion:
                                        {
                                            required: true,
                                            regex: "^[a-zA-Z0-9-#.,/ áéíóúñ]+$"
                                        },
                                cbo_dependencia:
                                        {
                                            required: true
                                        },
                                cbo_direccion:
                                        {
                                            required: true
                                        },
                                cbo_unidad:
                                        {
                                            required: true
                                        }
                            },
                    messages:
                            {
                                nrocuentacoor:
                                        {
                                            required: "<li>Numero de Cuenta Obligatorio</li>"

                                        },
                                denominacion:
                                        {
                                            required: "<li>Denominacion Obligatorio</li>",
                                            regex: "<li>Denominacion solo Letras o Número</li>"
                                        },
                                cbo_dependencia:
                                        {
                                            required: "<li>Dependencia Obligatorio</li>"
                                        },
                                cbo_unidad:
                                        {
                                            required: "<li>Unidad Obligatorio</li>"
                                        },
                                cbo_direccion:
                                        {
                                            required: "<li>direccion Obligatorio</li>"
                                        }

                   },
                    submitHandler: function()
                    {

                        $.ajax
                                ({
                                    url: "../controlador/mantenimiento/mantenimientoControl.php?opc=13",
                                    type: "POST",
                                    //dataType: "html",
                                    dataType: "json",
                                    data: $("#frmRegistrarCoordinacion").serialize(),
                                    success: function(datos)
                                    {
                                        if (datos.error == 0)
                                        {
                                            $("#aceptarCoordinacion").dialog("destroy");
                                            $("#aceptarCoordinacion").dialog({
                                                title: "SICOBIM",
                                                resizable: false,
                                                bgiframe: true,
                                                autoOpen: true,
                                                modal: true,
                                                buttons:
                                                        {
                                                            "Aceptar": function()
                                                            {
                                                                $(this).dialog('close');
                                                                $("#coordinacion").attr("disabled", false);

                                                                $.post("../controlador/mantenimiento/mantenimientoControl.php?opc=3", function(data)
                                                                {
                                                                    //alert(data);
                                                                    $.post(data, function(datos)
                                                                    {
                                                                        $.getScript("../../assets/js/mantenimiento/mantenimientoOpcionesGenerales.js");

                                                                        $("#contenido").html(datos);
                                                                    });

                                                                });

                                                            }
                                                        }
                                            }).html(datos.msj);
                                        }
                                        if (datos.error == 1)
                                        {
                                            $("#error").html(datos.msj);
                                            $("#error").show();
                                        }
                                    }
                                });
                    }
                });
    });


    /*TABLA Modificar Coordinacion (MODIFICAR)*/
    $("a.tablaCoordinacionModificar").click(function(evento)
    {
        intIdFila = $(this).parents("tr").find("td").eq(0).html();
        codigoCoor = $(this).parents("tr").find("td").eq(1).html();
        $("#intIdFila").val(intIdFila);

        intIdFila = $(this).parents("tr").find("td").eq(0).html();
        codigoCoor = $(this).parents("tr").find("td").eq(1).html();
        nombreCoor = $(this).parents("tr").find("td").eq(2).html();
        cbo_Depe = $(this).parents("tr").find("td").eq(3).html();
        cbo_Dire = $(this).parents("tr").find("td").eq(4).html();
        cbo_Unid = $(this).parents("tr").find("td").eq(5).html();
        contador = 0;
        contador = intIdFila - 1;
        cbo_Depe = $("#codigoDepe" + contador).val();

        contadordire = 0;
        contadordire = intIdFila - 1;
        cbo_Dire = $("#codigoDire" + contadordire).val();

        contadorunid = 0;
        contadorunid = intIdFila - 1;
        cbo_Unid = $("#codigoUnid" + contadorunid).val();


        $("#intIdFila").val(codigoCoor);
        $("#nrocuentacoor").val(codigoCoor);
        $("#nrocuentacoor").attr("disabled", true);
        $("#denominacion").val(nombreCoor);

        $.post("../../sistema/controlador/combos/combosControl.php?opc=0&valor=" + cbo_Depe, function(data)
        {
            $("#cbo_dependencia").html(data);
        });

        $.post("../../sistema/controlador/combos/combosControl.php?opc=8&valor=" + cbo_Dire, function(data)
        {
            $("#cbo_direccion").html(data);
        });

        $.post("../../sistema/controlador/combos/combosControl.php?opc=9&valor=" + cbo_Unid, function(data)
        {
            $("#cbo_unidad").html(data);
        });
    });

    //FUNCION ELIMINAR Coordinacion
    $("a.tablaCoordinacionEliminar").click(function(evento)
    {
        var intIdFila = $(this).parents("tr").find("td").eq(1).html();        
        $("#EliminarCoordinacion").dialog("destroy");

        $("#EliminarCoordinacion").dialog({
            title: "SICOBIM",
            resizable: false,
            bgiframe: true,
            autoOpen: true,
            modal: true,
            buttons:
	        {
	            "Aceptar": function()
	            {
	                $.ajax
                        ({
                            url: "../controlador/mantenimiento/mantenimientoControl.php?opc=25&id=" + intIdFila,
                            type: "POST",
                            //dataType: "html",
                            dataType: "json",
                            data: $("#frmRegistrarCoordinacion").serialize(),
                            success: function(datos)
                            {
                                if (datos.error == 0)
                                {
                                    $("#aceptarCoordinacion").dialog("destroy");
                                    $("#aceptarCoordinacion").dialog({
                                        title: "SICOBIM",
                                        resizable: false,
                                        bgiframe: true,
                                        autoOpen: true,
                                        modal: true,
                                        buttons:
                                            {
                                                "Aceptar": function()
                                                {
                                                    $(this).dialog('close');
                                                    $("#codigoCoordinacion").attr("disabled", false);

                                                    $.post("../controlador/mantenimiento/mantenimientoControl.php?opc=3", function(data)
                                                    {
                                                        //alert(data);
                                                        $.post(data, function(datos)
                                                        {
                                                            $.getScript("../../assets/js/mantenimiento/mantenimientoOpcionesGenerales.js");

                                                            $("#contenido").html(datos);
                                                        });

                                                    });
                                                }
                                            }
                                    }).html(datos.msj);
                                }
                                if (datos.error == 1)
                                {

                                    $("#error").html(datos.msj);
                                    $("#error").show();
                                }
                            }

                        });
	                $(this).dialog('close');
	            },
	            "Cancelar": function()
	            {
	                $(this).dialog('close');
	
	            }
	        }
        }).html('¿Está Seguro de Eliminar la Coordinacion?');

    });//FIN ELIMINAR Coordinacion
    
    
    $("#pestanaRegistrarTipoMovimiento").tabs();

    $.validator.addMethod("regex", function(value, element, regexp) {
        var re = new RegExp(regexp);
        return this.optional(element) || re.test(value);
    }, "Solo caracteres alfanumericos");

    // ///////////////////////////////////////////////////////////////////////
    // Pagina => Guardar Usuario
    // Detalle => Guardar
    // ///////////////////////////////////////////////////////////////////////
    $('#botonGuardarTipoMovimiento').click(function()
    {
        $("#frmRegistrarTipoMovimiento").validate(
                {
                    // onfocusout: false,
                    errorContainer: "div#error",
                    errorLabelContainer: "div#error",
                    rules:
                            {
                                concepto:
                                        {
                                            required: true,
                                            maxlength: 2,
                                            number: true
                                     },
                                denominacion:
                                        {
                                            required: true,
                                            regex: "^[a-zA-Z0-9]+$"
                                        },
                                cbo_tmovi:
                                        {
                                            required: true

                                        }
                            },
                    messages:
                            {
                                concepto:
                                        {
                                            required: "<li>Concepto Obligatoria</li>",
                                            maxlength: "<li>Concepto no mayor a dos Dígitos</li>",
                                            number: "<li>Concepto solo Dígitos</li>"
                                        },
                                denominacion:
                                        {
                                            required: "<li>Denominacion Obligatorio</li>",
                                            regex: "<li>Denominacion solo Letras o Número</li>"
                                        },
                                cbo_tmovi:
                                        {
                                            required: "<li>Tipo de Concepto Obligatorio</li>"
                                        }
                   },
                    submitHandler: function()
                    {

                        $.ajax
                                ({
                                    url: "../controlador/mantenimiento/mantenimientoControl.php?opc=14",
                                    type: "POST",
                                    //dataType: "html",
                                    dataType: "json",
                                    data: $("#frmRegistrarTipoMovimiento").serialize(),
                                    success: function(datos)
                                    {


                                        if (datos.error == 0)
                                        {
                                            $("#aceptarConcepto").dialog("destroy");
                                            $("#aceptarConcepto").dialog({
                                                title: "SICOBIM",
                                                resizable: false,
                                                bgiframe: true,
                                                autoOpen: true,
                                                modal: true,
                                                buttons:
                                                        {
                                                            "Aceptar": function()
                                                            {
                                                                $(this).dialog('close');
                                                                $("#concepto").attr("disabled", false);

                                                                $.post("../controlador/mantenimiento/mantenimientoControl.php?opc=4", function(data)
                                                                {
                                                                    //alert(data);
                                                                    $.post(data, function(datos)
                                                                    {
                                                                        $.getScript("../../assets/js/mantenimiento/mantenimientoOpcionesGenerales.js");

                                                                        $("#contenido").html(datos);
                                                                    });

                                                                });

                                                            }
                                                        }
                                            }).html(datos.msj);
                                        }
                                        if (datos.error == 1)
                                        {

                                            $("#error").html(datos.msj);
                                            $("#error").show();
                                        }
                                    }
                                });

                    }
                });
    });


    /*TABLA Modificar concepto (MODIFICAR)*/
    $("a.tablaConceptoModificar").click(function(evento)
    {
        $("#intIdFila").val(intIdFila);


        intIdFila = $(this).parents("tr").find("td").eq(0).html();
        concepto = $(this).parents("tr").find("td").eq(1).html();
        descripcion = $(this).parents("tr").find("td").eq(2).html();
        tipo = $(this).parents("tr").find("td").eq(3).html();

        if (tipo == 'Incorporacion') {
            tipo = 1;
        }
        if (tipo == 'Desincorporacion') {
            tipo = 2;
        }


        $("#intIdFila").val(concepto);
        $("#concepto").val(concepto);
        $("#concepto").attr("disabled", true);
        $("#denominacion").val(descripcion);
        $("#cbo_tmovi").val(tipo);


    });




    $("#pestanaRegistrarSubGrupo").tabs();

    $.validator.addMethod("regex", function(value, element, regexp) {
        var re = new RegExp(regexp);
        return this.optional(element) || re.test(value);
    }, "Solo caracteres alfanumericos");

    // ///////////////////////////////////////////////////////////////////////
    // Pagina => Guardar Usuario
    // Detalle => Guardar
    // ///////////////////////////////////////////////////////////////////////
    $('#botonGuardarSubGrupo').click(function()
    {
        $("#frmRegistrarSubGrupo").validate(
                {
                    // onfocusout: false,
                    errorContainer: "div#error",
                    errorLabelContainer: "div#error",
                    rules:
                            {
                                codigoSubGrupo:
                                        {
                                            required: true,
                                            maxlength: 2,
                                            number: true
                                     },
                                nombreSubGrupo:
                                        {
                                            required: true,
                                            regex: "^[a-zA-Z0-9-#.,/ áéíóúñ]+$"
                                        }
                            },
                    messages:
                            {
                                codigoSubGrupo:
                                        {
                                            required: "<li>Concepto Obligatoria</li>",
                                            maxlength: "<li>Concepto no mayor a dos Dígitos</li>",
                                            number: "<li>Concepto solo Dígitos</li>"
                                        },
                                nombreSubGrupo:
                                        {
                                            required: "<li>Denominacion Obligatorio</li>",
                                            regex: "<li>Denominacion solo Letras o Número</li>"
                                        }
                            },
                    submitHandler: function()
                    {
                        $.ajax
                                ({
                                    url: "../controlador/mantenimiento/mantenimientoControl.php?opc=15",
                                    type: "POST",
                                    //dataType: "html",
                                    dataType: "json",
                                    data: $("#frmRegistrarSubGrupo").serialize(),
                                    success: function(datos)
                                    {


                                        if (datos.error == 0)
                                        {
                                            $("#aceptarSubgrupo").dialog("destroy");
                                            $("#aceptarSubgrupo").dialog({
                                                title: "SICOBIM",
                                                resizable: false,
                                                bgiframe: true,
                                                autoOpen: true,
                                                modal: true,
                                                buttons:
                                                        {
                                                            "Aceptar": function()
                                                            {
                                                                $(this).dialog('close');
                                                                $("#codigoSubGrupo").attr("disabled", false);

                                                                $.post("../controlador/mantenimiento/mantenimientoControl.php?opc=7", function(data)
                                                                {
                                                                    //alert(data);
                                                                    $.post(data, function(datos)
                                                                    {
                                                                        $.getScript("../../assets/js/mantenimiento/mantenimientoOpcionesGenerales.js");

                                                                        $("#contenido").html(datos);
                                                                    });

                                                                });

                                                            }
                                                        }
                                            }).html(datos.msj);
                                        }
                                        if (datos.error == 1)
                                        {

                                            $("#error").html(datos.msj);
                                            $("#error").show();
                                        }
                                    }
                                });
                    }


                });
    });


    /*TABLA OPCIONES DE ModificR SUB GRUPO*/
    $("a.tablaSubGrupoModificar").click(function(evento)
    {

        intIdFila = $(this).parents("tr").find("td").eq(0).html();
        codigoSubGrupo = $(this).parents("tr").find("td").eq(1).html();
        $("#intIdFila").val(intIdFila);


        intIdFila = $(this).parents("tr").find("td").eq(0).html();
        codigoSubGrupo = $(this).parents("tr").find("td").eq(1).html();
        nombreSubGrupo = $(this).parents("tr").find("td").eq(2).html();


        $("#intIdFila").val(codigoSubGrupo);
        $("#codigoSubGrupo").val(codigoSubGrupo);
        $("#codigoSubGrupo").attr("disabled", true);
        $("#nombreSubGrupo").val(nombreSubGrupo);


    });


    $("#pestanaRegistrarSeccion").tabs();

    $.validator.addMethod("regex", function(value, element, regexp) {
        var re = new RegExp(regexp);
        return this.optional(element) || re.test(value);
    }, "Solo caracteres alfanumericos");

    // ///////////////////////////////////////////////////////////////////////
    // Pagina => Guardar Usuario
    // Detalle => Guardar
    // ///////////////////////////////////////////////////////////////////////
    $('#botonGuardarSeccion').click(function()
    {
        $("#frmRegistrarSeccion").validate(
                {
                    // onfocusout: false,
                    errorContainer: "div#error",
                    errorLabelContainer: "div#error",
                    rules:
                            {
                                codigoSeccion:
                                        {
                                            required: true,
                                            maxlength: 2,
                                            number: true
                             },
                                nombreSeccion:
                                        {
                                            required: true,
                                            regex: "^[a-zA-Z0-9-#.,/ áéíóúñ]+$"
                                        },
                                cbo_subGrupo:
                                        {
                                            required: true

                                        }
                            },
                    messages:
                            {
                                codigoSeccion:
                                        {
                                            required: "<li>Codigo Obligatoria</li>",
                                            maxlength: "<li>Codigo no mayor a dos Dígitos</li>",
                                            number: "<li>Codigo solo Dígitos</li>"
                                        },
                                nombreSeccion:
                                        {
                                            required: "<li>Nombre Obligatorio</li>",
                                            regex: "<li>Nombre solo Letras o Número</li>"
                                        },
                                cbo_subGrupo:
                                        {
                                            required: "<li>Tipo de Concepto Obligatorio</li>"
                                        }
                 },
                    submitHandler: function()
                    {

                        $.ajax
                                ({
                                    url: "../controlador/mantenimiento/mantenimientoControl.php?opc=16",
                                    type: "POST",
                                    //dataType: "html",
                                    dataType: "json",
                                    data: $("#frmRegistrarSeccion").serialize(),
                                    success: function(datos)
                                    {


                                        if (datos.error == 0)
                                        {
                                            $("#aceptarSeccion").dialog("destroy");
                                            $("#aceptarSeccion").dialog({
                                                title: "SICOBIM",
                                                resizable: false,
                                                bgiframe: true,
                                                autoOpen: true,
                                                modal: true,
                                                buttons:
                                                        {
                                                            "Aceptar": function()
                                                            {
                                                                $(this).dialog('close');
                                                                $("#codigoSeccion").attr("disabled", false);

                                                                $.post("../controlador/mantenimiento/mantenimientoControl.php?opc=5", function(data)
                                                                {
                                                                    //alert(data);
                                                                    $.post(data, function(datos)
                                                                    {
                                                                        $.getScript("../../assets/js/mantenimiento/mantenimientoOpcionesGenerales.js");

                                                                        $("#contenido").html(datos);
                                                                    });

                                                                });

                                                            }
                                                        }
                                            }).html(datos.msj);
                                        }
                                        if (datos.error == 1)
                                        {

                                            $("#error").html(datos.msj);
                                            $("#error").show();
                                        }
                                    }
                                });
                    }
                });
    });



    /*TABLA Modificar Seccion (MODIFICAR)*/
    $("a.tablaSeccionModificar").click(function(evento)
    {
        intIdFila = $(this).parents("tr").find("td").eq(0).html();
        codigoSeccion = $(this).parents("tr").find("td").eq(1).html();
        $("#intIdFila").val(intIdFila);

        intIdFila = $(this).parents("tr").find("td").eq(0).html();
        codigoSeccion = $(this).parents("tr").find("td").eq(1).html();
        nombreSeccion = $(this).parents("tr").find("td").eq(2).html();
        cbo_subGrupo = $(this).parents("tr").find("td").eq(3).html();

        contador = 0;
        contador = intIdFila - 1;

        cbo_codigoSubGrupo = $("#codigoSubGrupoSeccion" + contador).val();
        //alert(cbo_codigoSubGrupo);

        $("#intIdFila").val(codigoSeccion);
        $("#codigoSeccion").val(codigoSeccion);
        $("#codigoSeccion").attr("disabled", true);
        $("#nombreSeccion").val(nombreSeccion);

        $.post("../../sistema/controlador/combos/combosControl.php?opc=4&valor=" + cbo_codigoSubGrupo, function(data)
        {
            $("#cbo_subGrupo").html(data);


        });


    });


    $("#pestanaRegistrarActivos").tabs();

    $.validator.addMethod("regex", function(value, element, regexp) {
        var re = new RegExp(regexp);
        return this.optional(element) || re.test(value);
    }, "Solo caracteres alfanumericos");

    // ///////////////////////////////////////////////////////////////////////
    // Pagina => Guardar Usuario
    // Detalle => Guardar
    // ///////////////////////////////////////////////////////////////////////
    $('#botonGuardarActivos').click(function()
    {
        $("#frmRegistrarActivos").validate(
                {
                    // onfocusout: false,
                    errorContainer: "div#error",
                    errorLabelContainer: "div#error",
                    rules:
                            {
                                nombreActivo:
                                        {
                                            required: true,
                                            regex: "^[a-zA-Z0-9-#.,/ áéíóúñ]+$"
                                        },
                                descripcion:
                                        {
                                            required: true,
                                            regex: "^[a-zA-Z0-9-#.,/ áéíóúñ]+$"
                                        },
                                cbo_subGrupo:
                                        {
                                            required: true
                                        },
                                cbo_seccion:
                                        {
                                            required: true
                                        }

                            },
                    messages:
                            {
                                nombreActivo:
                                        {
                                            required: "<li>Nombre Obligatoria</li>",
                                            regex: "<li>Nombre solo Letras o Número</li>"
                                        },
                                descripcion:
                                        {
                                            required: "<li>Descripcion Obligatorio</li>",
                                            regex: "<li>Descripcion solo Letras o Número</li>"
                                        },
                                cbo_subGrupo:
                                        {
                                            required: "<li>SubGrupo Obligatorio</li>"
                                        },
                                cbo_seccion:
                                        {
                                            required: "<li>Seccion Obligatorio</li>"
                                        }
                 },
                    submitHandler: function()
                    {

                        $.ajax
                                ({
                                    url: "../controlador/mantenimiento/mantenimientoControl.php?opc=17",
                                    type: "POST",
                                    //dataType: "html",
                                    dataType: "json",
                                    data: $("#frmRegistrarActivos").serialize(),
                                    success: function(datos)
                                    {


                                        if (datos.error == 0)
                                        {
                                            $("#aceptarActivos").dialog("destroy");
                                            $("#aceptarActivos").dialog({
                                                title: "SICOBIM",
                                                resizable: false,
                                                bgiframe: true,
                                                autoOpen: true,
                                                modal: true,
                                                buttons:
                                                        {
                                                            "Aceptar": function()
                                                            {
                                                                $(this).dialog('close');
                                                                $("#codigoActivos").attr("disabled", false);

                                                                $.post("../controlador/mantenimiento/mantenimientoControl.php?opc=6", function(data)
                                                                {
                                                                    //alert(data);
                                                                    $.post(data, function(datos)
                                                                    {
                                                                        $.getScript("../../assets/js/mantenimiento/mantenimientoOpcionesGenerales.js");

                                                                        $("#contenido").html(datos);
                                                                    });

                                                                });

                                                            }
                                                        }
                                            }).html(datos.msj);
                                        }
                                        if (datos.error == 1)
                                        {

                                            $("#error").html(datos.msj);
                                            $("#error").show();
                                        }
                                    }
                                });
                    }
                });
    });


    /*TABLA Modificar Productos*/
    $("a.tablaProductosModificar").click(function(evento)
    {
        intIdFila = $(this).parents("tr").find("td").eq(0).html();
        codigoProd = $(this).parents("tr").find("td").eq(0).html();
        $("#intIdFila").val(intIdFila);

        intIdFila = $(this).parents("tr").find("td").eq(0).html();
        codigoProd = $(this).parents("tr").find("td").eq(0).html();
        nombreProd = $(this).parents("tr").find("td").eq(1).html();
        descripcionProd = $(this).parents("tr").find("td").eq(2).html();
        cbo_Subg = $(this).parents("tr").find("td").eq(3).html();
        cbo_Secc = $(this).parents("tr").find("td").eq(4).html();

        contador = 0;
        contador = codigoProd - 1;
        cbo_Subg = $("#cdSubGrupo" + contador).val();

        contadorsecc = 0;
        contadorsecc = codigoProd - 1;
        cbo_Secc = $("#cdSeccion" + contadorsecc).val();

        $("#intIdFila").val(codigoProd);
        $("#codigoProd").val(codigoProd);
        $("#codigoProd").attr("disabled", true);
        $("#nombreActivo").val(nombreProd);
        $("#descripcion").val(descripcionProd);

        $.post("../../sistema/controlador/combos/combosControl.php?opc=4&valor=" + cbo_Subg, function(data)
        {
            $("#cbo_subGrupo").html(data);
        });

        $.post("../../sistema/controlador/combos/combosControl.php?opc=10&valor=" + cbo_Secc, function(data)
        {
            $("#cbo_seccion").html(data);
        });

    });


    $("#pestanaRegistrarProveedor").tabs();

    $.validator.addMethod("regex", function(value, element, regexp) {
        var re = new RegExp(regexp);
        return this.optional(element) || re.test(value);
    }, "Solo caracteres alfanumericos");

    // ///////////////////////////////////////////////////////////////////////
    // Pagina => Guardar Usuario
    // Detalle => Guardar
    // ///////////////////////////////////////////////////////////////////////
    $('#botonGuardarProveedor').click(function()
    {
        $("#frmRegistrarProveedor").validate(
                {
                    // onfocusout: false,
                    errorContainer: "div#error",
                    errorLabelContainer: "div#error",
                    rules:
                            {
                                cbo_rifTipo:
                                        {
                                            required: true
                                        },
                                rifId:
                                        {
                                            required: true,
                                            number: true
                                        },
                                denominacionPro:
                                        {
                                            required: true,
                                            regex: "^[a-zA-Z0-9-#.,/ áéíóúñ]+$"
                                        },
                                direccionPro:
                                        {
                                            required: true,
                                            regex: "^[a-zA-Z0-9-#.,/ áéíóúñ]+$"
                                        },
                                tlfPro:
                                        {
                                            required: true,
                                            minlength: 11,
                                            maxlength: 11,
                                            number: true
                                        }

                            },
                    messages:
                            {
                                cbo_rifTipo:
                                        {
                                            required: "<li>Tipo RIF Obligatorio</li>"
                                        },
                                rifId:
                                        {
                                            required: "<li>RIF Obligatorio</li>",
                                            regex: "<li>RIF solo Números</li>"
                                        },
                                denominacionPro:
                                        {
                                            required: "<li>Denominaci&oacute;n Obligatorio</li>",
                                            regex: "<li>Denominaci&oacute;n solo Letras o Números</li>"
                                        },
                                direccionPro:
                                        {
                                            required: "<li>Direcci&acuteo;n Obligatorio</li>",
                                            regex: "<li>Direcci&acuteo;n solo Letras o Números</li>"
                                        },
                                tlfPro:
                                        {
                                            required: "<li>Tel&eacute;fono Obligatorio</li>",
                                            regex: "<li>Tel&eacute;fono solo Números</li>"
                                        }
                 },
                    submitHandler: function()
                    {

                        $.ajax
                                ({
                                    url: "../controlador/mantenimiento/mantenimientoControl.php?opc=18",
                                    type: "POST",
                                    //dataType: "html",
                                    dataType: "json",
                                    data: $("#frmRegistrarProveedor").serialize(),
                                    success: function(datos)
                                    {


                                        if (datos.error == 0)
                                        {
                                            $("#aceptarProveedor").dialog("destroy");
                                            $("#aceptarProveedor").dialog({
                                                title: "SICOBIM",
                                                resizable: false,
                                                bgiframe: true,
                                                autoOpen: true,
                                                modal: true,
                                                buttons:
                                                        {
                                                            "Aceptar": function()
                                                            {
                                                                $(this).dialog('close');
                                                                $("#codigoProveedor").attr("disabled", false);

                                                                $.post("../controlador/mantenimiento/mantenimientoControl.php?opc=8", function(data)
                                                                {
                                                                    //alert(data);
                                                                    $.post(data, function(datos)
                                                                    {
                                                                        $.getScript("../../assets/js/mantenimiento/mantenimientoOpcionesGenerales.js");

                                                                        $("#contenido").html(datos);
                                                                    });

                                                                });

                                                            }
                                                        }
                                            }).html(datos.msj);
                                        }
                                        if (datos.error == 1)
                                        {

                                            $("#error").html(datos.msj);
                                            $("#error").show();
                                        }
                                    }
                                });
                    }
                });
    });


    /*TABLA Modificar Proveedor*/
    $("a.tablaProveedorModificar").click(function(evento)
    {
        intIdFila = $(this).parents("tr").find("td").eq(1).html();
        id_Rif = $(this).parents("tr").find("td").eq(1).html();
        $("#intIdFila").val(intIdFila);


        cbo_rif = $(this).parents("tr").find("td").eq(0).html();
        id_Rif = $(this).parents("tr").find("td").eq(1).html();
        denominacionPro = $(this).parents("tr").find("td").eq(2).html();
        direccionPro = $(this).parents("tr").find("td").eq(3).html();
        tlfPro = $(this).parents("tr").find("td").eq(4).html();


        $("#intIdFila").val(id_Rif);
        $("#rifId").val(id_Rif);
        $("#rifId").attr("disabled", true);
        $("#cbo_rifTipo").val(cbo_rif);
        $("#cbo_rifTipo").attr("disabled", true);
        $("#denominacionPro").val(denominacionPro);
        $("#direccionPro").val(direccionPro);
        $("#tlfPro").val(tlfPro);

    });


    $("a.tablaProveedorEliminar").click(function(evento)
    {
        var intIdFila = $(this).parents("tr").find("td").eq(1).html();

        $("#EliminarProveedor").dialog("destroy");

        $("#EliminarProveedor").dialog({
            title: "SICOBIM",
            resizable: false,
            bgiframe: true,
            autoOpen: true,
            modal: true,
            buttons:
                    {
                        "Aceptar": function()
                        {
                            $.ajax
                                    ({
                                        url: "../controlador/mantenimiento/mantenimientoControl.php?opc=20&id=" + intIdFila,
                                        type: "POST",
                                        //dataType: "html",
                                        dataType: "json",
                                        data: $("#frmRegistrarProveedor").serialize(),
                                        success: function(datos)
                                        {
                                            if (datos.error == 0)
                                            {
                                                $("#aceptarProveedor").dialog("destroy");
                                                $("#aceptarProveedor").dialog({
                                                    title: "SICOBIM",
                                                    resizable: false,
                                                    bgiframe: true,
                                                    autoOpen: true,
                                                    modal: true,
                                                    buttons:
                                                            {
                                                                "Aceptar": function()
                                                                {
                                                                    $(this).dialog('close');
                                                                    $("#codigoProveedor").attr("disabled", false);

                                                                    $.post("../controlador/mantenimiento/mantenimientoControl.php?opc=8", function(data)
                                                                    {
                                                                        //alert(data);
                                                                        $.post(data, function(datos)
                                                                        {
                                                                            $.getScript("../../assets/js/mantenimiento/mantenimientoOpcionesGenerales.js");

                                                                            $("#contenido").html(datos);
                                                                        });

                                                                    });

                                                                }
                                                            }
                                                }).html(datos.msj);
                                            }
                                            if (datos.error == 1)
                                            {

                                                $("#error").html(datos.msj);
                                                $("#error").show();
                                            }
                                        }

                                    });
                            $(this).dialog('close');
                        },
                        "Cancelar": function()
                        {
                            $(this).dialog('close');

                        }
                    }
        }).html('¿Está Seguro de Eliminar el Proveedor?');

    });

});/* FIN DE $(document).ready(function() */