/*
 * <Nombre del archivo: cambiarClave.js>
 * <Fecha de creación del archivo: 5/05/2011> 
 * <Versión del archivo: 1.0>
 * <Autor del archivo: Virginia Naassaneh>
 * <Breve explicación del contenido de el archivo: Js del Proceso Cambio de Clave>
*/
jQuery.fn.reset = function () {
  $(this).each (function() { this.reset(); });
};
jQuery.fn.cerrar=function(){
	$(this).hide("slow",function(){$(this).empty(); });
};
cambioPestanas = function(id,form) {
	tabs = $(id).tabs();
};
$(document).ready(function() 
{

	$("#pestanaCambiarClave").tabs();
	$(".obligatorio").html('*');	
/******  INICIO: CAMBIAR CLAVE  *****/
	
	$.validator.addMethod("regex",function(value,element,regexp){
        var re= new RegExp(regexp);
        return this.optional(element) || re.test(value);
    },"Solo caracteres alfanumericos");
$('#cancelarcambiarClave').click(function()
{
	location="../../index.php";
});
	$("#botonCambiarClave").click(function()
	{  	//e.preventDefault();
		 var claveActualEncrypt;
		 claveActualEncrypt = $().crypt(
	        {
	            method: 'b64enc',
	            source: $('#claveActual').val()
	        });
	        
	        var claveNuevaEncrypt;
	        claveNuevaEncrypt = $().crypt(
	        {
	            method: 'b64enc',
	            source: $('#claveNueva').val()
	        });
	        
	        var confirmarclaveNuevaEncrypt;
	        confirmarclaveNuevaEncrypt = $().crypt(
	        {
	            method: 'b64enc',
	            source: $('#confirmarclaveNueva').val()
	        });
	        
	        
	        $('#claveActual').val("");
	        $('#claveNueva').val("");
	        $('#confirmarclaveNueva').val("");
	        
	        
	        $('#claveActual').val(claveActualEncrypt);
	        $('#claveNueva').val(claveNuevaEncrypt);
	        $('#confirmarclaveNueva').val(confirmarclaveNuevaEncrypt);
	        
		$(".cambiarClave").validate( {
			onfocusout: false,
			errorLabelContainer: $("div#error"),
			rules:
			{	
				claveActual:
				{
					required:true
					//minlength:8
				},
				claveNueva:
				{
					required:true,
					minlength:8
					//regex:"^[a-zA-Z0-9-#.,-_/ áéíóúñ]+$"
				},
				
				confirmarclaveNueva:
				{
					required:true,
					minlength:8,
					equalTo:"#claveNueva"
					//regex:"^[a-zA-Z0-9-#.,-_/ áéíóúñ]+$"
				},
				caracteres: 
				{
					required: true											
					
				}
			},
			messages: 
			{
				claveActual:
				{
					required:"<li>Clave Actual Obligatoria</li>"
					//minlength:"<li>Clave Actual No Menor a 8 Dígitos</li>"
				},
				claveNueva:
				{
					required:"<li>Clave Nueva Obligatoria</li>",
					minlength:"<li>Clave Nueva No Menor a 8 Dígitos</li>"
					//regex:"<li>Clave no permite los siguientes Caracteres Especiales: el símbolo dolar, comillas dobles o simples </li>"
				},
				confirmarclaveNueva:
				{
					required:"<li>Repetir Clave Nueva Obligatoria</li>",
					minlength:"<li>Repetir Clave No Menor a 8 Dígitos</li>",
					equalTo: "<li>Clave Nueva y Repetir Clave deben Coincidir</li>"
					//regex:"<li>Clave no permite los siguientes Caracteres Especiales: el símbolo dolar, comillas dobles o simples </li>"
				},
				caracteres: 
				{
					required: "<li>Caracteres de la Imagen, Obligatorios</li>"											
				}
			},
			submitHandler:function()
			{ 
				$.post("../controlador/usuario/usuarios.Control.php?opc=6", $(".cambiarClave").serialize()+"&ram="+Math.random(), function(data)
				{
					//alert(data);
					if (data == "Exito")
					{
						alert("Clave Cambiada Satisfactoriamente");
						$.post("../controlador/usuario/usuarios.Control.php?opc=7", function(dato)
						{
							if (dato==0)
							{
							location.href="../../index.php";
							}
						})
					}
					else
					{	
						if (data == "NO")
						{
							
							alert("Problemas al Cambiar su Clave");
							$("#siimage").attr("src","../../assets/captcha/securimage_show_example.php?sid="+ Math.random());
							$("#caracteres").val("");
							$('#claveActual').val("");
						    $('#claveNueva').val("");
						    $('#confirmarclaveNueva').val("");
							/*$("#error").html("<li>Problemas al Cambiar su Clave</li>");
		                    $("#error").show();*/
						}
						else
						{
							if (data == "Caracteres")
    						{
								$("#siimage").attr("src","../../assets/captcha/securimage_show_example.php?sid="+ Math.random());
								$("#caracteres").val("");
								$('#claveActual').val("");
							    $('#claveNueva').val("");
							    $('#confirmarclaveNueva').val("");
								alert("Caracteres Incorrectos");
				 				/*$("#error").html("<li>Caracteres Incorrectos</li>");
			                    $("#error").show();*/
    						}
							else
							{
								$("#siimage").attr("src","../../assets/captcha/securimage_show_example.php?sid="+ Math.random());
								$("#caracteres").val("");
								$('#claveActual').val("");
							    $('#claveNueva').val("");
							    $('#confirmarclaveNueva').val("");
								/*$("#error").html("<li>Clave Actual Incorrecta</li>");
			                    $("#error").show();*/
								alert("Clave Actual Incorrecta");
								
    						}
						}
					}	
				},"html");
			}
		});
	});
	
	$("#botonCambiarClaveInicio").click(function()
	{  
		 var claveActualEncrypt;
		 claveActualEncrypt = $().crypt(
	        {
	            method: 'b64enc',
	            source: $('#claveActual').val()
	        });
	        
	        var claveNuevaEncrypt;
	        claveNuevaEncrypt = $().crypt(
	        {
	            method: 'b64enc',
	            source: $('#claveNueva').val()
	        });
	        
	        var confirmarclaveNuevaEncrypt;
	        confirmarclaveNuevaEncrypt = $().crypt(
	        {
	            method: 'b64enc',
	            source: $('#confirmarclaveNueva').val()
	        });
	        
	        
	        $('#claveActual').val("");
	        $('#claveNueva').val("");
	        $('#confirmarclaveNueva').val("");
	        
	        
	        $('#claveActual').val(claveActualEncrypt);
	        $('#claveNueva').val(claveNuevaEncrypt);
	        $('#confirmarclaveNueva').val(confirmarclaveNuevaEncrypt);
			
			$(".cambiarClaveInicio").validate( {
					onfocusout: false,
					errorLabelContainer: $("div#error"),
					rules:
					{	
						claveActual:
						{
							required:true
							//minlength:8
						},
						claveNueva:
						{
							required:true,
							minlength:8
							//regex:"^[a-zA-Z0-9-#.,-_/ áéíóúñ]+$"
						},
						
						confirmarclaveNueva:
						{
							required:true,
							minlength:8,
							equalTo:"#claveNueva"
							//regex:"^[a-zA-Z0-9-#.,-_/ áéíóúñ]+$"
						},
						caracteres: 
						{
							required: true											
							
						}
					},
					messages: 
					{
						claveActual:
						{
							required:"<li>Clave Actual Obligatoria</li>"
							//minlength:"<li>Clave Actual No Menor a 8 Dígitos</li>"
						},
						claveNueva:
						{
							required:"<li>Clave Nueva Obligatoria</li>",
							minlength:"<li>Clave Nueva No Menor a 8 Dígitos</li>"
							//regex:"<li>Clave no permite los siguientes Caracteres Especiales: el símbolo dolar, comillas dobles o simples </li>"
						},
						confirmarclaveNueva:
						{
							required:"<li>Repetir Clave Nueva Obligatoria</li>",
							minlength:"<li>Repetir Clave No Menor a 8 Dígitos</li>",
							equalTo: "<li>Clave Nueva y Repetir Clave deben Coincidir</li>"
							//regex:"<li>Clave no permite los siguientes Caracteres Especiales: el símbolo dolar, comillas dobles o simples </li>"
						},
						caracteres: 
						{
							required: "<li>Caracteres de la Imagen, Obligatorios</li>"											
						}
					},
					submitHandler:function()
					{ 
						$.post("../../controlador/usuario/usuarios.Control.php?opc=6", $(".cambiarClaveInicio").serialize()+"&ram="+Math.random(), function(data)
						{
							//alert(data.err);
							if (data == "Exito")
							{
								alert("Clave Cambiada Satisfactoriamente");
								$.post("../../controlador/usuario/usuarios.Control.php?opc=7", function(dato)
								{//alert ('2');
									if (dato==0)
									{
										location.href="../vista/principal";
										//location.href="../vista/usuario/iniciars.php";	
									//location.href="../../index.php";
									}
								})
							}
							else
							{	
								if (data == "NO")
								{
									alert("Problemas al Cambiar su Clave");
									$("#siimage").attr("src","../../assets/captcha/securimage_show_example.php?sid="+ Math.random());
									$("#caracteres").val("");
									$('#claveActual').val("");
								    $('#claveNueva').val("");
								    $('#confirmarclaveNueva').val("");
									/*$("#error").html("<li>Problemas al Cambiar su Clave</li>");
				                    $("#error").show();*/
								}
								else
								{
	    							if (data == "Caracteres")
		    						{
	    								$("#siimage").attr("src","../../assets/captcha/securimage_show_example.php?sid="+ Math.random());
	    								$("#caracteres").val("");
	    								$('#claveActual').val("");
	    							    $('#claveNueva').val("");
	    							    $('#confirmarclaveNueva').val("");
	    								alert("Caracteres Incorrectos");
						 				/*$("#error").html("<li>Caracteres Incorrectos</li>");
					                    $("#error").show();*/
		    						}
	    							else
	    							{
	    								$("#siimage").attr("src","../../assets/captcha/securimage_show_example.php?sid="+ Math.random());
	    								$("#caracteres").val("");
	    								$('#claveActual').val("");
	    							    $('#claveNueva').val("");
	    							    $('#confirmarclaveNueva').val("");
	    								/*$("#error").html("<li>Clave Actual Incorrecta</li>");
					                    $("#error").show();*/
	    								alert("Clave Actual Incorrecta");
		    						}
								}
							}	
							
							
							/*if (data.error == 0)
							{
								alert(data.msj);
								$.post("../controlador/usuario/usuarios.Control.php?opc=7", function(dato)
								{
									
									if (dato==1)
									{
									location.href="../index.php";
									}
								})
							}
							else
							{	
								if (data.error == 1)
								{
									alert(data.msj);
									$("#siimage").attr("src","../../assets/captcha/securimage_show_example.php?sid="+ Math.random());
									$("#stsCaptcha").val("");
								}
								else
								{
									var error = data.split("1");
		    						if (error[1]=="2")
		    						{
		    							$("#siimage").attr("src","assets/captcha/securimage_show_example.php?sid="+ Math.random());
						 				alert("Clave Actual Incorrecta");
		    							$("#error").html("<li>Clave Actual Incorrecta</li>");
					                    $("#error").show();
		    						}
								}
							}*/	
						},"html");
					}
				});
			});
	
});/* fin function ready*/


