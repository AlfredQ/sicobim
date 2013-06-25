$(document).ready(function()
{
	$(".obligatorio").html('*');
	/* REGISTRAR CENSO
	  * PESTAÑA: 
	  * 
	  * 
	  */

	$("#pestanaRegistrarCenso").tabs();
	
	$.validator.addMethod("regex",function(value,element,regexp){
        var re= new RegExp(regexp);
        return this.optional(element) || re.test(value);
    },"Solo caracteres alfanumericos");
	
	/*FECHAS de Recepción*/
	//$("#fecharecep").datepicker( {
	//	changeMonth : true,
	//	changeYear : true
	//}, $.datepicker.regional['es']);
	/*FECHA de Ingreso*/
	/*$("#fechaing").datepicker( {
		changeMonth : true,
		changeYear : true
	}, $.datepicker.regional['es']);
	/*FECHA de Nacimiento*/
	$("#fechanac").datepicker( {
		changeMonth : true,
		changeYear : true,
		yearRange: '-106:+0'
	}, $.datepicker.regional['es']);
	$("#fechaConsulta").datepicker({
		changeMonth : true,
		changeYear : true,
		yearRange: '-0:+0'
	}, $.datepicker.regional['es']);
	


	
	/////////////////////////////////////////////////////////////////////////
	// Pagina	=> Guardar Planilla (trabajador)
	// Detalle	=> Guardar toda la planilla
	/////////////////////////////////////////////////////////////////////////
	$('input[name=btn_2_planilla_guardar]').click(function()
	{
		$("#frmRegistrarCenso").validate(
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
				cbo_edificio:
				{
					required :true
				},
				cbo_piso:
				{
					required : true
				},
			
		        txa_direccionOficina:
		        {
		        	required: true,
		        	regex:"^[a-zA-Z0-9-#.,/ áéíóúñ]+$"
		        },
		        txa_oficinaPiso:
		        {
		        	required: true,
					regex:"^[a-zA-Z0-9-# áéíóúñ]+$"
		        },
		        txt_tlfOficina :
		        {
		        	required: true,
		            minlength: 11,
		            maxlength: 11,
		            number : true

		        },
		        txt_correo :
		        {
		        	required: true
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
		       	cbo_edificio:
				{
					required : "<li>Edificio Obligatoria</li>"
				},
			 	cbo_piso:
				{
					required : "<li>Piso Obligatoria</li>"
				},
				txa_direccionOficina:
		        {
		        	required: "<li>Dirección de Oficina Obligatoria</li>",
		        	regex:	  "<li>Dirección de Oficina no debe tener Caracteres Especiales</li>"
		        },
		        txa_oficinaPiso:
		        {
		        	required: "<li>Oficina/Piso Obligatorio</li>",
					regex:	   "<li>Descripción de Zona no debe tener Caracteres Especiales</li>"
		        },
		        txt_tlfOficina :
		        {
		        	required: "<li>Teléfono de Oficina Obligatorio</li>",
		            minlength:"<li>Teléfono de Oficina máximo 11 Dígitos</li>",
		            maxlength:"<li>Teléfono de Oficina máximo 11 Dígitos</br>",
		            number :"<li>Teléfonode Oficina  solo Permite Dígitos</li>"

		        },
		 
		        txt_correo:
				{
					required: "<li>Correo Eléctronico Obligatorio</li>"
		        },
		       
				
	    },	        
	    
	    submitHandler:function()
	    {
	        var totalFilas = $("div#div_2_datosSocio_globalFilas").children().length;
			
			$.post("../controlador/censo/censo.Control.php?opc=1&tof=" + totalFilas, $("#frmRegistrarCenso").serialize()+"&ram="+Math.random(), function(data)
			{
				//alert(data.error);
			if (data.error == 0)
				{
					window.open('../vista/censo/comprobanteCenso.php','_blank');
					$("#frmRegistrarCenso").reset();
					alert("Planilla Registrada Satisfactoriamente");
				}
				if (data.error == 1)
				{
					alert(data.msj);
				}
			}, "json");
	    }
	});
});

	
	
	$('#cedula').blur(function()
	{
		var ele1 = $('#nacionalidad').val();
		var ele2 = $('#cedula').val();
		var ele3 = $('input[name="rdo_2_compania"]:checked').val();
			$.ajax
			({
				type:"POST",
				url: "../controlador/censo/censo.Control.php?opc=6&ele1="+ele1+"&ele2="+ele2+"&ele3="+ele3,
									
				dataType:"json",
				//dataType:"html",
				data: "",
				async:true,
				success:function(data)
				{
					//alert(data.error);
					//alert(data);
					if (data.error == 0)
					{
						$("#apellidos").val(data.StsDsApellidos);
						$("#nombres").val(data.StsDsNombres);
						$("#txt_estatus").val(data.StsCdTipoEmpleado);
						//$("#fechaing").val(data.FeIngreso);
						$("#txa_dependencia").val(data.StsDsDependencia);
						$("#txt_cargo").val(data.StsDsCargo);
						$("#div_2_btn").css("display", "block");
								
					}
					else if (data.error == 1)
					{
						alert(data.msj);
						$("#apellidos").val("");
						$("#nombres").val("");
						$("#txt_estatus").val("");
						//$("#fechaing").val("");
						$("#txa_dependencia").val("");
						$("#txt_cargo").val("");
						$("#div_2_btn").css("display", "none");
					}
				}
			});
	});
	
	

	////////////////////////////////////////////////////////////////////////
	// Pagina	=> Modulo Consultar
	// Detalle	=> Pesta�a 2
	////////////////////////////////////////////////////////////////////////
	$('#btn_1_consultaCi').click(function()
	{
		var ele1 = $('#cbo_1_consultaNac').val();
		var ele2 = $('#txt_1_consultaCi').val();
		//var ele3 = $('#txt_1_consultaControl').val();
		var sw = 0;
		
			if ((ele1 != '') || (ele2 != '')  /*||(ele3 != '')*/)
			{
				if ((ele2 != '')  /*|| (ele3 != '')*/)
				{
					if (ele2 != '')
					{
						if ($.isNumeric(ele2) == false)
							sw = 1;
					}
					
					/*if (ele3 != '')
					{
						if ($.isNumeric(ele3) == false)
							sw = 1;
					}*/
				}
				
				
				if (sw == 0)
				{
					
					$.ajax
					({
						type:"POST",
						url: "../controlador/censo/censo.Control.php?opc=8&ele1=" + ele1 + "&ele2=" + ele2,
				
						dataType:"json",
						//dataType:"html",
						data: "",
						async:true,
						success:function(data)
						{
							if (data.error == 2)
							{
								alert("El trabajador primero se debe registrar para poder modificar sus datos");
								$("#pestanaRegistrarCenso").css("display", "none");
							}
							else if (data.error == 1)
							{
								alert("El trabajador no se encuentra registrado");
								$("#pestanaRegistrarCenso").css("display", "none");
							}
							else if (data.error == 4)
							{
								alert("Debe seleccionar la nacionalidad y la cedula");
								$("#pestanaRegistrarCenso").css("display", "none");
							}
							else if (data.error == 3)
							{
								$("#pestanaRegistrarCenso").css("display", "block");
								var nombre = "frmRegistrarCenso";
								
	//							//Recorrer todos los campos que tiene el formulario
	//							var $inputs = $('#frmRegistrarCenso :input');
	//							
	//							$inputs.each(function()
	//							{
	//								if ($(this).attr('type') == 'radio')
	//									$(this).attr('disabled', 'disabled');
	//								else if ($(this).attr('type') == 'text')
	//									$(this).attr('readonly','true');
	//								else
	//									$(this).attr('disabled', 'true');
	//							});
								//$.getScript("../../assets/js/combosE_P_D.js");
								
								//Trabajador
								$("#nacionalidad").val(data.InNacionalidad);
								$("#cedula").val(data.IntNuCedula);
								$("#apellidos").val(data.StsDsApellidos);
								$("#nombres").val(data.StsDsNombres);
								//$("#txt_piso").val(data.IntNuPiso);
								$("#txt_tlfLocal").val(data.StsNuTelefono);
							//	$("#txt_tlfCelular").val(data.StsNuCelular);
								$("#txa_direccionOficina").val(data.StsDsDireccionOficina);
								$("#txa_dependencia").val(data.StsDsDependencia);
								$("#txt_cargo").val(data.StsDsCargo);
								//$("#fechaing").val(data.FeIngreso);
								//$("#txa_oficinaPiso").val(data.StsDsOficinaPiso);
								$("#txt_tlfOficina").val(data.StsNuTeleOfic);
								$("#txt_tlfCelular").val(data.StsNuTeleContacto);
								//	alert(data.StsNuTeleContacto);
								$("#txt_estatus").val(data.StsCdTipoEmpleado);
								$("#txt_correo").val(data.StsCorreo);	
								$.post("../../sistema/controlador/censo/combosE_P_D_Control.php?opc=4&e="+data.IntNuEdificioUbicacion, function(data)
								{	
									$("#cbo_edificio").html("<select id='cbo_edificio'>"+data+"</select>");
									
									
								});
								
								$.post("../../sistema/controlador/censo/combosE_P_D_Control.php?opc=2&m="+data.IntNuPisoUbicacion,{edificioElegido : data.IntNuEdificioUbicacion[0] }, function(data)
								{	
									$("#cbo_piso").html("<select id='cbo_piso'>"+data+"</select>");
									
									$('#cbo_edificio').change(function()
											{ 
												edificioElegido = $(this).val();
												$.post("../../sistema/controlador/censo/combosE_P_D_Control.php?opc=2", {edificioElegido : edificioElegido} , function(data)
												{
													$("#cbo_piso").html("<select id='cbo_piso'>"+data+"</select>");
													
												});
											});
											
									
								});
								
								$.post("../../sistema/controlador/censo/combosE_P_D_Control.php?opc=3&p="+data.IntNuOficinaUbicacion, { pisoElegido : data.IntNuPisoUbicacion[0] }, function(data)
								{	
									$("#cbo_oficina").html("<select id='cbo_oficina'>"+data+"</select>");
									
									$('#cbo_piso').change(function()
											{ 
												pisoElegido = $(this).val();
												$.post("../../sistema/controlador/censo/combosE_P_D_Control.php?opc=3", {pisoElegido : pisoElegido} , function(data)
												{
													$("#cbo_oficina").html("<select id='cbo_oficina'>"+data+"</select>");
													
												});
											});
								});
								
							
								
							}
						}
					});
				}
				else
				{
					$("#pestanaRegistrarCenso").css("display", "none");
					alert("Debe introducir solo numeros");
				}
			}
			else
			{
				$("#pestanaRegistrarCenso").css("display", "none");
				alert("Debe seleccionar al menos un criterio para realizar la consulta");
			}
	});
	
	
	////////////////////////////////////////////////////////////////////////
	// Pagina	=> Modificar Planilla
	// Detalle	=> Pestana 2
	////////////////////////////////////////////////////////////////////////
	$('#btn_2_planilla_modificar').click(function()
	{
		$("#frmRegistrarCenso").validate(
		{
			//onfocusout: false,
			errorContainer: "div#error",
	        errorLabelContainer : "div#error",
			rules :
		    {
				cedula:
				{
					required: true,
					minlength: 5,
					number : true	 	
				},
				
				cbo_edificio:
		        {
		        	required: true
		        },
		        
		    	cbo_piso:
		        {
		        	required: true
		        },
				
		        cbo_oficina:
		        {
		        	required: true
		        },
		        
		        txa_direccionOficina:
		        {
		        	required: true,
		        	regex:"^[a-zA-Z0-9-#.,/ áéíóúñ]+$"
		        },
		        
		        txt_tlfOficina :
		        {
		        	required: true,
		            minlength: 11,
		            maxlength: 11,
		            number : true

		        },
		  
		        txt_tlfCelular :
		        {
		        	required: true,
		            minlength: 11,
		            maxlength: 11,
		            number : true

		        },
		        txt_correo :
		        {
		        	required: true
		        }
		       
		    },
		    messages :
	    	{
		    	cedula:
		        {
					required:"<li>Cédula Obligatoria</li>",
					minlength:"<li>Cédula No Menor a 5 Dígitos</li>",
					number:"<li>Cédula solo Permite Dígitos</li>"
		        },
		
		        cbo_edificio:
		        {
					required:"<li>Edificio Obligatoria</li>",
					
		        },
		        cbo_piso:
		        {
					required:"<li>Piso Obligatoria</li>",
					
		        },
		        cbo_oficina:
		        {
					required:"<li>Oficina Obligatoria</li>",
					
		        },
				txa_direccionOficina:
		        {
		        	required: "<li>Dirección de Oficina Obligatoria</li>",
		        	regex:	  "<li>Dirección de Oficina no debe tener Caracteres Especiales</li>"
		        },
		      //  txa_oficinaPiso:
		     ///   {
		      //  	required: "<li>Oficina/Piso Obligatorio</li>"
		       // },
		        txt_tlfOficina :
		        {
		        	required: "<li>Teléfono de Oficina Obligatorio</li>",
		            minlength:"<li>Teléfono de Oficina máximo 11 Dígitos</li>",
		            maxlength:"<li>Teléfono de Oficina máximo 11 Dígitos</br>",
		            number :"<li>Teléfono de Oficina  solo Permite Dígitos</li>"

		        },
		   		  
		        txt_tlfCelular :
		        {
		        	required: "<li>Teléfono Celular Obligatorio</li>",
		            minlength:"<li>Teléfono Celular máximo 11 Dígitos</li>",
		            maxlength:"<li>Teléfono Celular máximo 11 Dígitos</br>",
		            number :"<li>Teléfono Celular  solo Permite Dígitos</li>"

		        },
		        txt_correo:
				{
					required: "<li>Correo Eléctronico Obligatorio</li>"
		        }, 
		        
			},	        
	    
			submitHandler:function()
			{
				var totalFilas = $("div#pestanaConsultarCenso").children().length;
				 
				$.post("../controlador/censo/censo.Control.php?opc=9&tof=" + totalFilas, $("#frmRegistrarCenso").serialize()+"&ram="+Math.random(), function(data)
				{
					if (data.error == 1)
					{
						
						$("#frmRegistrarCenso").reset();
						$("#pestanaConsultarCenso").css("display", "none");
						$("#pestanaRegistrarCenso").css("display", "none");
						$("#txt_1_consultaCi").val("");
						//$("#txt_1_consultaControl").val("");
						alert("Planilla Modificada Satisfactoriamente");
						location.href='../vista/principal.php','_blank';
					}
					else
					{
						alert(data.msj);
					}
				}, "json");
			}
		});
	});
	
	////////////////////////////////////////////////////////////////////////
	// Pagina	=> Modificar Planilla
	// Detalle	=> Pestana 2
	////////////////////////////////////////////////////////////////////////
	$('#btn_1_consultaTrazaUsuario').click(function()
	{
		$.post("../controlador/censo/censo.Control.php?opc=12", $("#frmConsultarTrazaUsuario").serialize()+"&ram="+Math.random(), function(data)
		{
			if (data.error == 1)
			{
				var divis = (data.total / 20);
				var totPag = Math.ceil(divis);
				
					//Hay registros para mostrar
					if (totPag >= 1)
					{
						$("#div_1_traza_auditoria_paginacion").paginate({}, parseInt(totPag), 10, 1, 'auditoria');
					
						$.post("../controlador/censo/registros.Paginador.Control.php", { option: 1, page: 1, cbo_1_tipoMovimiento: $("#cbo_1_tipoMovimiento").val(), cbo_1_tabla: $("#cbo_1_tabla").val(), fechaConsulta: $("#fechaConsulta").val(), cbo_1_nombreUsuario: $("#cbo_1_nombreUsuario").val() }, function(data2)
						{
							$("#div_1_traza_auditoria_noHayConexion").css("display", "none");
							$('#pestanaResultadoTrazaUsuario').css("display", "block");
							$("#div_1_traza_auditoria_global, #div_1_traza_auditoria_cabecera, #div_1_traza_auditoria_paginacionGlobal").css("display", "block");
							$('#div_1_traza_auditoria_botonesTablaGlobal').css("display", "block");
							$('#div_1_traza_auditoria_global').html(data2);
						}, "html");
					}
					else
					{
						alert("La consulta no arroj\u00F3 resultados");
					}
			}
			else
			{
				alert(data.error);
				$('#pestanaResultadoTrazaUsuario').css("display", "none");
			}
		}, "json");
	});
})/*FIN DE $(document).ready(function() */
