jQuery.fn.reset = function () {
  $(this).each (function() { this.reset(); });
};
jQuery.fn.cerrar=function(){
	$(this).hide("slow",function(){$(this).empty(); });
};

$(document).ready(function() 
{
	/* ACCESO */
	$("#botonEntrar").click(function(e)
	{				
		e.preventDefault();
		
		if ($('#stsLoginUsuario').val()!="")
		{
			var stsLoginEncrypt;
	        stsLoginEncrypt = $().crypt(
	        {
	            method: 'b64enc',
	            source: $('#stsLoginUsuario').val()
	        });
	        $('#stsLoginUsuario').val("");
	        $('#stsLoginUsuario').val(stsLoginEncrypt);
		}   
		if ($('#stsClave').val()!="")
		{
	        var pwEncrypt;
	        pwEncrypt = $().crypt(
	        {
	            method: 'b64enc',
	            source: $('#stsClave').val()
	        });
	        $('#stsClave').val("");
	        $('#stsClave').val(pwEncrypt);
		}
      
		$.ajax
	    ({ 
	    	url : "sistema/controlador/usuario/usuarios.Control.php?opc=0",
	    	
            type: "POST",//.attr('method'),
            dataType:"html",
            data: $("#frmAcceso").serialize(),
            
            success: function(data)
            {
            	//alert(data);
	    		
		    	if (data=="Exito")
	    	    {// alert("de");
	    	 		location="sistema/vista/principal.php";
	    	    }
	    		else
	    		{
	    			if (data=="Inactivo")
		    	    {
	    				var stsLoginEncrypt;
	    		        stsLoginEncrypt = $().crypt(
	    		        {
	    		            method: 'b64dec',
	    		            source: $('#stsLoginUsuario').val()
	    		        });
	    				$("#stsLoginUsuario").val(stsLoginEncrypt);
	    				$("#stsClave").val("");
	    				$("#stsCaptcha").val("");
	    				$("#siimage").attr("src","../captcha/securimage_show_example.php?sid="+ Math.random());
		 				$("#error").html("<li>Comuníquese con el Administrador del Sistema, no tiene permiso para acceder.</li>");
	                    $("#error").show();
		    	    }
	    			else
	    			{
	    				if (data=="Cambiar")
			    	    {
	    				   					 
	    					$("#msgCambiar").dialog("open");
			    	    }
	    				else
	    				{
	    					if (data=="Notabla")
				    	    {
	    						var stsLoginEncrypt;
	    	    		        stsLoginEncrypt = $().crypt(
	    	    		        {
	    	    		            method: 'b64dec',
	    	    		            source: $('#stsLoginUsuario').val()
	    	    		        });
	    	    				$("#stsLoginUsuario").val(stsLoginEncrypt);
	    	    				$("#stsClave").val("");
	    	    				$("#stsCaptcha").val("");
	    						$("#siimage").attr("src","../captcha/securimage_show_example.php?sid="+ Math.random());
				 				$("#error").html("<li>Datos de Usuarios Incorrecto</li>");
			                    $("#error").show();
				    	    }
	    					else
	    					{
	    						var error = data.split("$$");
	    						if (error[0]=="")
	    						{
	    								
	    							var stsLoginEncrypt;
	    		    		        stsLoginEncrypt = $().crypt(
	    		    		        {
	    		    		            method: 'b64dec',
	    		    		            source: $('#stsLoginUsuario').val()
	    		    		        });
	    		    				$("#stsLoginUsuario").val(stsLoginEncrypt);
	    		    				$("#stsClave").val("");
	    		    				$("#stsCaptcha").val("");
	    							$("#siimage").attr("src","../captcha/securimage_show_example.php?sid="+ Math.random());
					 				$("#error").html(error[1]);
					 				$("#error").show();
	    						}
	    						else
	    						{	
	    							var stsLoginEncrypt;
	    		    		        stsLoginEncrypt = $().crypt(
	    		    		        {	
	    		    		            method: 'b64dec',
	    		    		            source: $('#stsLoginUsuario').val()
	    		    		        });
	    		    				$("#stsLoginUsuario").val(stsLoginEncrypt);
	    		    				$("#stsClave").val("");
	    		    				$("#stsCaptcha").val("");
	    							$("#siimage").attr("src","../captcha/securimage_show_example.php?sid="+ Math.random());
					 				$("#error").html("<li>Datos de Usuarios Incorrecto</li>");
				                    $("#error").show();
				                   
				                    
	    						}
	    					}
	    				}
	    				
	    			}
	    		}
  		 }
	    });	
		
	});/*FIN DE $(botonEntrar).click(function() */
	
	$("#msgCambiar").dialog({
		title: "Cambiar Clave.",
		resizable: false,
		bgiframe:true,
		autoOpen: false,
		modal: true,
		buttons: {
			/*"No": function() {
				$(this).dialog('close');
			}
			,*/
			"Si": function() {
				$(this).dialog('close');	
				location="sistema/vista/usuario/cambiarClave.php";

			}
		}
	}).html("Debe cambiar su clave obligatoriamente para que pueda acceder al Sistema");
	


}); /*FIN DE $(document).ready(function() */

