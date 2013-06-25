$(document).ready(function()
{
	////////////////////////////////////////////////////////
	//combos Dependeiente para estructura Organizativa	   /
	// Dependencia | Direccion | Unidad | Coordinacion	   /
	////////////////////////////////////////////////////////
	
	/*            Dependencia                   */
	$.post("../../sistema/controlador/combos/combosControl.php?opc=0", function(data)
	{
		$("#cbo_dependencia").html(data);
	});
	
	
	/*            Direccion                   */
	$('#cbo_dependencia').change(function()
	{
		dependenciaElegida = $(this).val();
		$.post("../../sistema/controlador/combos/combosControl.php?opc=1", {dependenciaElegida : dependenciaElegida} , function(data)
		{
			$("#cbo_direccion").html(data);
					
		});
	});
	
	
	/*             Unidad                    */
	$('#cbo_direccion').change(function()
	{
		direccionElegida = $(this).val();
		$.post("../../sistema/controlador/combos/combosControl.php?opc=2", {direccionElegida : direccionElegida} , function(data)
		{
			$("#cbo_unidad").html(data);
		});
	});

	
	/*             Unidad                    */
	$('#cbo_unidad').change(function()
	{
		unidadElegida = $(this).val();
		$.post("../../sistema/controlador/combos/combosControl.php?opc=3", {unidadElegida : unidadElegida} , function(data)
		{
			$("#cbo_coordinacion").html(data);
		});
	});

	
	/////////////////////////////////////////////////////
	//Combos dependependiente Clasisficacion de Bienes  /
	//  SubGrupo y Seccion								/
	////////////////////////////////////////////////////
	$.post("../../sistema/controlador/combos/combosControl.php?opc=4", function(data)
	{
		$("#cbo_subGrupo").html(data);
	
		
	});
	
	/*             Seccion                    */
	
	$('#cbo_subGrupo').change(function()
			{
				subGrupoElegido = $(this).val();
				$.post("../../sistema/controlador/combos/combosControl.php?opc=5", {subGrupoElegido : subGrupoElegido} , function(data)
				{
					$("#cbo_seccion").html(data);
					
				});
			});
	
	

	/////////////////////////////////////////////////////
	//			Combos Independiente Proveedor			/
	//  												/
	////////////////////////////////////////////////////
	
	/*             Proveedor                    */
	$.post("../../sistema/controlador/combos/combosControl.php?opc=6", function(data)
			{
				$("#cbo_proveedor").html(data);
			});
	
	
	/////////////////////////////////////////////////////
	//			Combos Independiente Productos			/
	//  												/
	////////////////////////////////////////////////////	
	
	/*             Productos                    */
	$.post("../../sistema/controlador/combos/combosControl.php?opc=7", function(data)
			{
				$("#cbo_producto").html(data);
			});
}); /* FIN DE $(document).ready(function() */
