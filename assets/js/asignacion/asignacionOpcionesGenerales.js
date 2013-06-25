$(document).ready(function()
{
	//funcion para validar si el numero de cuenta de dependencia ya se encuentra registrado
   /* $("#numBien").focusout(function() {
        var frmRegistrarAsignacionInventario = $("#numBien").val();
        $.ajax({
            url: "../controlador/asignacion/asignacionControl.php?opc=2&valor=" + numBien,
            type: "POST",
            dataType: "json",
            data: $("#frmRegistrarAsignacionInventario").serialize(),
            success: function(datos)
            {
                if (datos.error == 0)
                {
                    $("#nrocuenta").val("");
                    $("#aceptarAsignacion").dialog("destroy");
                    $("#aceptarAsignacion").dialog({
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
	
	*/
	
	
	$(".obligatorio").html('*');
	/*
	 * REGISTRAR CENSO PESTAÑA:
	 * 
	 * 
	 */

	 $("#fechaFactura").datepicker( {
         changeMonth : true,
         changeYear : true
     }, $.datepicker.regional['es']);
     
	 $("#fechaOrden").datepicker( {
         changeMonth : true,
         changeYear : true
     }, $.datepicker.regional['es']);
     

$("#pestanaRegistrarAsignacionInventario").tabs();

	$.validator.addMethod("regex",function(value,element,regexp){
        var re= new RegExp(regexp);
        return this.optional(element) || re.test(value);
    },"Solo caracteres alfanumericos");
	

	$("#pestanaConsultarAsignacionInventario").tabs();

	$.validator.addMethod("regex",function(value,element,regexp){
        var re= new RegExp(regexp);
        return this.optional(element) || re.test(value);
    },"Solo caracteres alfanumericos");
	


	
	// ///////////////////////////////////////////////////////////////////////
	// Pagina => Guardar Usuario
	// Detalle => Guardar
	// ///////////////////////////////////////////////////////////////////////
	$('#botonGuardarAsignacionInventario').click(function()
	{
		$("#frmRegistrarAsignacionInventario").validate(
		{ 
		errorContainer: "div#error",
	        errorLabelContainer : "div#error",
			
	        rules :
		    {
				nrocuenta:
				{
					required: true,
					regex:"^[a-zA-Z0-9. áéíóúñ]+$"
				},
							
				denominacion:
				{
					required :true,
					regex:"^[a-zA-Z0-9]+$"
				}				
		       
		     
		    },
		    messages :
	    	{
		    	nrocuenta:
		        {
		    		required : "<li>Número de Cuenta Obligatorio</li>",
					regex:	   "<li>Número de Cuenta no debe tener Caracteres Especiales</li>"
		        },
		        
				denominacion:
		        {
					required : "<li>Denominacion Obligatorio</li>",
					regex:	   "<li>Denominacion solo Letras o Número</li>"
		        }
				
	    },	        
	    
	    submitHandler:function()
	    {
			$.post("../controlador/asignacion/asignacionControl.php?opc=1", 
                        $("#frmRegistrarAsignacionInventario").serialize()+"&ram="+Math.random(), 
                        function(data)
			{
				alert("data.error");
				if (data.error == 0)
				{
					alert(data.msj);
					$("#frmRegistrarAsignacionInventario").reset();
				}
				if (data.error == 1)
				{ //alert(data.error);
					alert(data.msj);
																																																																																																																																																																																																																																																																																																																																																																																										
				}
			},"json");
	    
	    }
	});
});	
	
	
	$('#botonConsultarAsignacionInventario').click(function()
{

			
			
			$("#frmConsultarAsignacionInventario").validate(
					{ 
					errorContainer: "div#error",
				        errorLabelContainer : "div#error",
						
				        rules :
					    {
							numOrden:
							{
								required: true,
								regex:"^[a-zA-Z0-9. áéíóúñ]+$"
							}		
					       
					     
					    },
					    messages :
				    	{
					    	numOrden:
					        {
					    		required : "<li>Número de Cuenta Obligatorio</li>",
								regex:	   "<li>Número de Cuenta no debe tener Caracteres Especiales</li>"
					        }
					       
							
				    },
			
			submitHandler:function()
		    {
				$.post("../controlador/asignacion/asignacionControl.php?opc=3", 
	                        $("#frmConsultarAsignacionInventario").serialize()+"&ram="+Math.random(), 
	                        function(data)
				{
					
					
					if (data.error == 0)
						
						
					{$("#divTabla").html('');
						//alert(data.msj);
						$("#stsCedula").val(data.stsCedula);
						$("#stsNombreApellido").val(data.stsNbUsuario);
						$("#stslogin").val(data.stsNbBdUsuario);
						$("#tipoUsuario").val(data.stsTipoUsuario);
						$("#nroTelefono").val(data.stsNroTelefonoUsuario);
						$("#estatusUsuario").val(data.bolEstatusUsuario);
						$("#divUsuario").css("display","block");
						
					}
					if (data.error == 1)
					{$("#divTabla").html('');
						alert(data.msj);
						$("#stsCedula").val("");
						$("#stsNombreApellido").val("");
						$("#stslogin").val("");
						$("#tipoUsuario").val("");
						$("#nroTelefono").val("");
						$("#estatusUsuario").val("");
						$("#divUsuario").css("display","none");
					}
					
				},"json");
		    
		    }
			
		/*	
			{  
		$.post("../controlador/asignacion/asignacionControl.php?opc=3",
				$("#frmmenuConsultarAsignacionInventario").serialize()+"&ram="+Math.random(), 
                 function(data)
			{
			
			alert("fgfg");
				
			},"json");*/
	});
});
	
	
});/* FIN DE $(document).ready(function() */

