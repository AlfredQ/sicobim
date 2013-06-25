$(document).ready(function()
{
	$(".obligatorio").html('*');
	/* REGISTRAR CENSO
	  * PESTAÑA: 
	  */

	$("#pestanaReportesCenso").tabs();
	
	$.validator.addMethod("regex",function(value,element,regexp){
        var re= new RegExp(regexp);
        return this.optional(element) || re.test(value);
    },"Solo caracteres alfanumericos");

	$("#fechaing").datepicker( {
		changeMonth : true,
		changeYear : true,
		yearRange: '-106:+0'
	}, $.datepicker.regional['es']);	
	
	/////////////////////////////////////////////////////////////////////////
	// Pagina	=> Guardar Planilla (Censo Vivienda y Datos Socioeconomicos)
	// Detalle	=> Guardar toda la planilla
	/////////////////////////////////////////////////////////////////////////
	$('input[name=btn_consultar_censo]').click(function()
	{
		$("#frmReportesCenso").validate(
		{
			//onfocusout: false,
			errorContainer: "div#error",
	        errorLabelContainer : "div#error",
		
	        rules :
		    {
			cedula:
			{
				minlength: 6,
				number : true	 	
			},
			numPersonasCargo:
			{
	            number : true
			},
			numHijosMenores:
			{
	            number : true
			}	       
	    },
	    messages :
    	{
	    	cedula:
	        {
				minlength:"<li>Cédula No Menor a 6 Dígitos</li>",
				number:"<li>Cédula solo Permite Dígitos</li>"
	        },
	        numPersonasCargo:
			{
				number : "<li>Número de Persona solo Permite Dígitos</li>"
			} ,
			numHijosMenores:
			{
				number : "<li>Número de Hijos solo Permite Dígitos</li>"
			}			
	    },	        
	    submitHandler:function()
	    {
	        $.ajax
			({
				type:"POST",
				url: "../controlador/reportes/reportesControl.php?opc=1",
				dataType:"json",
				//dataType:"html",
				data: $("#frmReportesCenso").serialize(),
				async:true,
				success:function(data)
				{
					//alert(data.error);
					//alert(data);
					if (data.error == 0)
					{
						window.open('../vista/reportes/comprobanteReportesCenso.php','_blank');
						$("#frmReportesCenso").reset();
						alert("El Reporte Se ha Generado Satisfactoriamente");
					}
					else if (data.error == 1)
					{
						$("#frmReportesCenso").reset();
						alert("No se encotraron registro asociados a la consulta");
					}
				}
			});
	    }
	});
});
	
	///////////////////////////////////////////
	// Pagina	=> Planilla de Censo Vivienda
	// Detalle	=> Cargar combo de estado
	///////////////////////////////////////////
	$.post("../controlador/censo/censo.Control.php?opc=2", function(data)
	{
		$("#cbo_estado").html(data);
	});
	
	
	///////////////////////////////////////////
	// Pagina	=> Planilla de Censo Vivienda
	// Detalle	=> Cargar combo de municipio
	///////////////////////////////////////////
	$('#cbo_estado').change(function()
	{
		estadoElegido = $(this).val();
		
		$.post("../controlador/censo/censo.Control.php?opc=3", {estadoElegido : estadoElegido} , function(data)
		{
			$("#cbo_municipio").html(data);
		});
	});
	
	///////////////////////////////////////////
	// Pagina	=> Planilla de Censo Vivienda
	// Detalle	=> Cargar combo de parroquia
	///////////////////////////////////////////
	$('#cbo_municipio').change(function()
	{
		municipioElegido = $(this).val();
		
		$.post("../controlador/censo/censo.Control.php?opc=4", {municipioElegido : municipioElegido} , function(data)
		{
			$("#cbo_parroquia").html(data);
		});
	});
	
})/*FIN DE $(document).ready(function() */