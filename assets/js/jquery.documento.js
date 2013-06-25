function modificaUsuario(elegido)
{
	//elegido = $(this).parents("tr").find("td").eq(1).html();
	//alert(elegido);
	$.ajax
	({
		type:"POST",
		url: "../controlador/usuario/usuarios.Control.php?opc=4&elegido="+elegido,
		dataType:"json",
		data: "",
		async:true,
		success:function(data)
		{
			if (data.error == 0)
			{
				$.post("../vista/usuario/modificarUsuario",{},function(pantalla)
				{
					$.getScript("../../assets/js/usuario/usuarioOpcionesGenerales.js");
					$("#contenido").html(pantalla);
					$("#siimage").attr("src","../../assets/captcha/securimage_show_example.php?sid="+ Math.random());
					$("#cedula").val(data.stsCedulaUsuario);
					$("#stsNombreUsuario").val(data.stsNbUsuario);
					$("#stsNbBdUsuario").val(data.stsNbBdUsuario);
					$("#tipoUsuario").val(data.stsTipoUsuario);
					$("#stsNuTelefono").val(data.stsNuTelefono);
					$("#stsLogin").val(data.stsLogin);
					$("#stsTipoUsuario").val(data.stsTipoUsuario);
					
					var estatus = data.bolStUsuario;
					
						if (estatus == "t")
						{
							$("#bolEstatus").attr("checked", "checked");
						}
						else
						{
							if (estatus == "f")
								$("#bolEstatus").attr("","");
						}
				 });
			}
			
			if (data.error == 1)
			{
				$("#error").html(data.msj);
				$("#error").show();
			}
		}
	});
		
}/* FIN ICONO MODIFICAR CEI*/	

function modificarMovimiento(elegido)
{
	//elegido = $(this).parents("tr").find("td").eq(1).html();
	//alert(elegido);
	$.ajax
	({
		type:"POST",
		url: "../controlador/usuario/usuarios.Control.php?opc=4&elegido="+elegido,
		dataType:"json",
		data: "",
		async:true,
		success:function(data)
		{
			if (data.error == 0)
			{
				$.post("../vista/usuario/modificarUsuario",{},function(pantalla)
				{
					$.getScript("../../assets/js/usuario/usuarioOpcionesGenerales.js");
					$("#contenido").html(pantalla);
					$("#siimage").attr("src","../../assets/captcha/securimage_show_example.php?sid="+ Math.random());
					$("#cedula").val(data.stsCedulaUsuario);
					$("#stsNombreUsuario").val(data.stsNbUsuario);
					$("#stsNbBdUsuario").val(data.stsNbBdUsuario);
					$("#tipoUsuario").val(data.stsTipoUsuario);
					$("#stsNuTelefono").val(data.stsNuTelefono);
					$("#stsLogin").val(data.stsLogin);
					$("#stsTipoUsuario").val(data.stsTipoUsuario);
					
					var estatus = data.bolStUsuario;
					
						if (estatus == "t")
						{
							$("#bolEstatus").attr("checked", "checked");
						}
						else
						{
							if (estatus == "f")
								$("#bolEstatus").attr("","");
						}
				 });
			}
			
			if (data.error == 1)
			{
				$("#error").html(data.msj);
				$("#error").show();
			}
		}
	});
		
}/* FIN ICONO MODIFICAR MOVIMIENTO*/	

function eliminarMovimiento()
{
	//elegido = $(this).parents("tr").find("td").eq(1).html();
	//alert(elegido);
	$.ajax
	({
		type:"POST",
		url: "../controlador/usuario/usuarios.Control.php?opc=4&elegido="+elegido,
		dataType:"json",
		data: "",
		async:true,
		success:function(data)
		{
			if (data.error == 0)
			{
				$.post("../vista/usuario/modificarUsuario",{},function(pantalla)
				{
					$.getScript("../../assets/js/usuario/usuarioOpcionesGenerales.js");
					$("#contenido").html(pantalla);
					$("#siimage").attr("src","../../assets/captcha/securimage_show_example.php?sid="+ Math.random());
					$("#cedula").val(data.stsCedulaUsuario);
					$("#stsNombreUsuario").val(data.stsNbUsuario);
					$("#stsNbBdUsuario").val(data.stsNbBdUsuario);
					$("#tipoUsuario").val(data.stsTipoUsuario);
					$("#stsNuTelefono").val(data.stsNuTelefono);
					$("#stsLogin").val(data.stsLogin);
					$("#stsTipoUsuario").val(data.stsTipoUsuario);
					
					var estatus = data.bolStUsuario;
					
						if (estatus == "t")
						{
							$("#bolEstatus").attr("checked", "checked");
						}
						else
						{
							if (estatus == "f")
								$("#bolEstatus").attr("","");
						}
				 });
			}
			
			if (data.error == 1)
			{
				$("#error").html(data.msj);
				$("#error").show();
			}
		}
	});
		
}/* FIN ICONO Eliminar Movimiento*/	