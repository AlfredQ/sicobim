$(document).ready(function()
{
	$(".obligatorio").html('*');
	/* REGISTRAR CENSO
	  * PESTAÑA: 
	  * 
	  * 
	  */

	$("#pestanaRegistrarUsuario").tabs();
	
	$.validator.addMethod("regex",function(value,element,regexp){
        var re= new RegExp(regexp);
        return this.optional(element) || re.test(value);
    },"Solo caracteres alfanumericos");
	
	/////////////////////////////////////////////////////////////////////////
	// Pagina	=> Guardar Usuario
	// Detalle	=> Guardar 
	/////////////////////////////////////////////////////////////////////////
	$('#botonGuardarUsuario').click(function()
	{
		$("#frmRegistrarUsuario").validate(
		{
			//onfocusout: false,
			errorContainer: "div#error",
	        errorLabelContainer : "div#error",
			rules :
		    {
				cedula:
				{
					required: true,
					minlength: 6,
					number : true	 	
				},
				stsNombreUsuario:
				{
					required :true,
					regex:"^[a-zA-Z0-9. áéíóúñ]+$"
				},
			
				stsNbBdUsuario:
				{
					required :true,
					regex:"^[a-zA-Z0-9]+$"
				},
				
				tipoUsuario:
		        {
		        	required : true
		        },
		        
		        stsNbOrga:
		        {
		        	required : true
		        },
		        
		        stsNuTelefono:
		        {
		        	required: true,
		        	minlength: 11,
			        maxlength: 11,
					number : true	
				},
				stsCaptcha:
				{
					required : true 
				}
		    },
		    messages :
	    	{
		    	cedula:
		        {
					required:"<li>Cédula Obligatoria</li>",
					minlength:"<li>Cédula No Menor a 6 Dígitos</li>",
					number:"<li>Cédula solo Permite Dígitos</li>"
		        },
		        stsNombreUsuario:
				{
		        	required : "<li>Nombre y Apellido Obligatorio</li>",
					regex:	   "<li>Nombre y Apellido no debe tener Caracteres Especiales</li>"
				},
				stsNbBdUsuario:
		        {
					required : "<li>Login Obligatorio</li>",
					regex:	   "<li>Login solo Letras o Número</li>"
		        },
		        stsNuTelefono:
				{
					required :"<li>Teléfono Obligatorio</li>",
					minlength:"<li>Teléfono máximo 11 Dígitos</li>",
			        maxlength:"<li>Teléfono máximo 11 Dígitos</br>",
					number:"<li> Teléfono solo Permite Dígitos</li>"
				},
		        stsClave:
				{
					required :"<li>Clave Obligatorio</li>",
					minlength: "<li>Clave mínimo 8 Caracteres</li>",
					regex:"<li>Clave no permite los siguientes Caracteres Especiales: el símbolo dolar, comillas dobles o simples </li>"
				},
				stsRepetirClave:
				{
					required :"<li>Repetir Clave Obligatorio</li>",
					minlength:"<li>Repetir Clave mínimo 8 Caracteres</li>",
					regex:"<li>Repetir Clave no permite los siguientes Caracteres Especiales: el símbolo dolar, comillas dobles o simples</li>",
					equalTo: "<li>Clave y Repetir Clave deben Coincidir</li>"
				},
		        tipoUsuario:
		        {
		        	required : "<li>Estado Civil Obligatorio</li>"
		        },
		        stsNbOrga:
		        {
		        	required : "<li>Organizacion Obligatorio</li>"
		        },
				stsCaptcha:
				{
					required : "<li>Caracteres Obligatorio</li>"
			
				}		
	    },	        
	    
	    submitHandler:function()
	    {
			
			$.post("../controlador/usuario/usuarios.Control.php?opc=2", $("#frmRegistrarUsuario").serialize()+"&ram="+Math.random(), function(data)
			{
				//alert(data.error);
				if (data.error == 0)
				{
					alert(data.msj);
					$("#siimage").attr("src","../../assets/captcha/securimage_show_example.php?sid="+ Math.random());
					$("#frmRegistrarUsuario").reset();
				}
				if (data.error == 1)
				{ //alert(data.error);
					alert(data.msj);
					$("#siimage").attr("src","../../assets/captcha/securimage_show_example.php?sid="+ Math.random());
					$("#stsCaptcha").val("");
				}
			},"json");
	    }
	});
});	
	
	
	
	
	
	$('#botonConsultarUsuario').click(function()
	{
		$.post("../controlador/usuario/usuarios.Control.php?opc=4", $("#frmConsultarUsuario").serialize()+"&ram="+Math.random(), function(data)
		{
			if (data.error == 0)
			{
				
				var cantidadTotal = 1;
				var divis = (cantidadTotal / 10);
				var totPag = Math.ceil(divis);
				
					if (totPag >= 1)
					{
						$("#div_1_consulta_usuarios_paginacion").paginate({}, parseInt(totPag), 10, 1, 'usuarios');
						
						$.post("../controlador/censo/registros.Paginador.Control.php", { option: 2, page: 1, cedula: $("#cedula").val() }, function(data2)
						{ 
							$("#div_1_consulta_usuarios_noHayConexion").css("display", "none");
							$("#div_1_consulta_usuarios_global").css("display", "block");
							$("#div_1_consulta_usuarios_cabecera, #div_1_consulta_usuarios_paginacionGlobal").css("display", "block");
							$('#div_1_consulta_usuarios_botonesTablaGlobal').css("display", "block");
							$('#div_1_consulta_usuarios_global').html(data2);
						}, "html");
					}
					else
					{
						alert("La consulta no arroj\u00F3 resultados");
					}
			}
			
			if (data.error == 1)
			{
				alert(data.msj);
			    $("#divTabla").html('');
			}
		},"json");
	});
	
	$('#botonModificarUsuario').click(function()
	{	
		$("#frmModificarUsuario").validate(
		{
			//onfocusout: false,
			errorContainer: "div#error",
	        errorLabelContainer : "div#error",
			rules :
		    {
				stsNombreUsuario:
				{
					required :true,
					regex:"^[a-zA-Z0-9. áéíóúñ]+$"
				},
				
				tipoUsuario:
		        {
		        	required : true
		        },
		        stsNuTelefono:
				{
		        	required: true,
		            minlength: 11,
		            maxlength: 11,
		            number : true
				},
				stsCaptcha:
				{
					required : true 
				}
		    },
		    messages :
	    	{
		        stsNombreUsuario:
				{
		        	required : "<li>Nombre y Apellido Obligatorio</li>",
					regex:	   "<li>Nombre y Apellido no debe tener Caracteres Especiales</li>"
				},
				
		        tipoUsuario:
		        {
		        	required : "<li>Estado Civil Obligatorio</li>"
		        },
		        stsNuTelefono:
				{
		        	required: "<li>Teléfono Obligatorio</li>",
		            minlength:"<li>Teléfono máximo 11 Dígitos</li>",
		            maxlength:"<li>Teléfono máximo 11 Dígitos</br>",
		            number :"<li>Teléfono solo Permite Dígitos</li>"
				} ,
				stsCaptcha:
				{
					required : "<li>Caracteres Obligatorio</li>"
			
				}		
	    },	        
	    
	    submitHandler:function()
	    {
			$.post("../controlador/usuario/usuarios.Control.php?opc=5", $("#frmModificarUsuario").serialize()+"&ram="+Math.random(), function(data)
			{
				//alert(data)
				if (data.error == 0)
				{
					alert(data.msj);
					$("#siimage").attr("src","../../assets/captcha/securimage_show_example.php?sid="+ Math.random());
					$("#stsCaptcha").val("");
				}
				if (data.error == 1)
				{
					alert(data.msj);
					$("#siimage").attr("src","../../assets/captcha/securimage_show_example.php?sid="+ Math.random());
					$("#stsCaptcha").val("");
				}
			},"json");
	    }
	});	
});	
	
	$("#botonBuscarUsuario").click(function()
	{	
			$(".frmBuscarCedula").validate(
			{
				//onfocusout: false,
				errorContainer: "div#error",
		        errorLabelContainer : "div#error",
				rules :
			    {
					stsNumeroCedula:
					{
						required :true,
						minlength: 6,
						number : true
					}

			    },
			    messages :
		    	{
			    	stsNumeroCedula:
					{
				    	required:"<li>Cédula Obligatoria</li>",
						minlength:"<li>Cédula No Menor a 6 Dígitos</li>",
						number:"<li>Cédula solo Permite Dígitos</li>"
					}
		    	},	        
		    
		    	submitHandler:function()
			    {
					$.post("../controlador/usuario/usuarios.Control.php?opc=9", $(".frmBuscarCedula").serialize()+"&ram="+Math.random(), function(data)
					{
						if (data.error == 0)
						{
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
						{
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
			});		
	});	
	$("#botonReiniciarClave").click(function()
	{	
				
			$.post("../controlador/usuario/usuarios.Control.php?opc=10", $(".frmBuscarCedula").serialize()+"&ram="+Math.random(), function(data)
			{
				//alert(data.stsCedula);
				if (data.error == 0)
				{
					alert(data.msj);
					$("#stsCedula").val(data.stsCedula);
					$("#stsNombreApellido").val(data.stsNbUsuario);
					$("#stslogin").val(data.stsNbBdUsuario);
					$("#tipoUsuario").val(data.stsTipoUsuario);
					$("#nroTelefono").val(data.stsNroTelefonoUsuario);
					$("#estatusUsuario").val(data.bolEstatusUsuario);
					$("#divUsuario").css("display","block");
					
				}
				if (data.error == 1)
				{
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
					    		
	});	
	
})/*FIN DE $(document).ready(function() */