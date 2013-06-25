$(document).ready(function() 
{
	function startActivityChecking()
	{ 
		var activityTimeout = null; 
		$(document.body).mousemove(function(event)
		{ 
			if (activityTimeout) 
			{ 
	           clearTimeout(activityTimeout); 
	        } 
			activityTimeout = setTimeout(function() 
			{ 
				alert('Incatividad del Usuario. Se Cerrará su Sesión'); 
				$.post("../controlador/usuarios/usuarios.Control.php?opc=11", function(data)
				{
					location=data;
				})
				//1 minuto son 60.000 / 120000 son 2 minutos / 300000 son 5 minutos  
				
			},1200000); 
	   }); 
	   $(document.body).click(function(event)
	   { 
			if (activityTimeout) 
			{ 
	           clearTimeout(activityTimeout); 
	        } 
			activityTimeout = setTimeout(function() 
			{ 
				alert('Incatividad del Usuario. Se Cerrará su Sesión'); 
				$.post("../controlador/usuarios/usuarios.Control.php?opc=11", function(data)
				{
					location=data;
				})
				
			},1200000); 
	   });
	   $(document.body).keypress(function(event)
	   { 
			if (activityTimeout) 
			{ 
	           clearTimeout(activityTimeout); 
	        } 
			activityTimeout = setTimeout(function() 
			{ 
				alert('Incatividad del Usuario. Se Cerrará su Sesión'); 
				$.post("../controlador/usuarios/usuarios.Control.php?opc=11", function(data)
				{
					location=data;
				})
				
			}, 1200000); 
	   });
	} 
	
startActivityChecking(); 

}); /*FIN DE $(document).ready(function() */