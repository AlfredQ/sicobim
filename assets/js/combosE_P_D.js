$(document).ready(function()
{

	///////////////////////////////////////////
	//combo edificio
	// Detalle	=> Cargar combo de edificio
	///////////////////////////////////////////
/*	$.post("../../sistema/controlador/censo/combosE_P_D_Control.php?opc=1", function(data)
	{
		$("#cbo_edificio").html(data);
		
	});*/
	
	
	///////////////////////////////////////////
	//combo piso
	// Detalle	=> Cargar combo de piso
	///////////////////////////////////////////
/*	$('#cbo_edificio').change(function()
	{
		edificioElegido = $(this).val();
		$.post("../../sistema/controlador/censo/combosE_P_D_Control.php?opc=2", {edificioElegido : edificioElegido} , function(data)
		{
			$("#cbo_piso").html(data);
			
		});
	});*/
	///////////////////////////////////////////
	//combo oficina
	// Detalle	=> Cargar combo de oficina
	///////////////////////////////////////////
	/*$('#cbo_piso').change(function()
	{
		
		pisoElegido = $(this).val();
		
		$.post("../../sistema/controlador/censo/combosE_P_D_Control.php?opc=3", {pisoElegido : pisoElegido} , function(data)
		{
			$("#cbo_oficina").html(data);
		});
	});*/

	///////////////////////////////////////////
	//combo subgrupo
	// Detalle	=> Cargar combo de subgrupo
	///////////////////////////////////////////
	$.post("../../sistema/controlador/mantenimiento/combosE_P_D_Control.php?opc=1", function(data)
	{
		$("#cbo_subGrupo").html(data);
	
		
	});
	
	////////////////////////////////////////////////////////
	//combos Dependeiente para estructura Organizativa	   /
	// Dependencia | Direccion | Unidad | Coordinacion	   /
	////////////////////////////////////////////////////////
	
	/*            Dependencia                   */
	$.post("../../sistema/controlador/mantenimiento/combosE_P_D_Control.php?opc=2", function(data)
	{
		$("#cbo_dependencia").html(data);
	});
	
	
	/*            Direccion                   */
	$('#cbo_dependencia').change(function()
	{
		dependenciaElegida = $(this).val();
		$.post("../../sistema/controlador/mantenimiento/combosE_P_D_Control.php?opc=3", {dependenciaElegida : dependenciaElegida} , function(data)
		{
			$("#cbo_direccion").html(data);
					
		});
	});
	
	
	/*             Unidad                    */
	$('#cbo_direccion').change(function()
	{
		direccionElegida = $(this).val();
		$.post("../../sistema/controlador/mantenimiento/combosE_P_D_Control.php?opc=4", {direccionElegida : direccionElegida} , function(data)
		{
			$("#cbo_unidad").html(data);
		});
	});

	
	/*             Unidad                    */
	$('#cbo_unidad').change(function()
	{
		unidadElegida = $(this).val();
		$.post("../../sistema/controlador/mantenimiento/combosE_P_D_Control.php?opc=5", {unidadElegida : unidadElegida} , function(data)
		{
			$("#cbo_coordinacion").html(data);
		});
	});


	/*             Seccion                    */
	
	$('#cbo_subGrupo').change(function()
			{
				subGrupoElegido = $(this).val();
				$.post("../../sistema/controlador/mantenimiento/combosE_P_D_Control.php?opc=5", {subGrupoElegido : subGrupoElegido} , function(data)
				{
					$("#cbo_seccion").html(data);
					
				});
			});
	
	
	
	/*             Proveedor                    */
	$.post("../../sistema/controlador/mantenimiento/combosE_P_D_Control.php?opc=6", function(data)
			{
				$("#cbo_proveedor").html(data);
			});
	
	/*             Productos                    */
	$.post("../../sistema/controlador/mantenimiento/combosE_P_D_Control.php?opc=7", function(data)
			{
				$("#cbo_producto").html(data);
			});
});
	///////////////////////////////////////////
	//combo residencia
	// Detalle	=> Cargar combo de municipio
	///////////////////////////////////////////
/*	$('#cbo_1_estado_residencia').change(function()
	{
		
		estadoElegido = $(this).val();
		$.post("../controlador/combosE_P_PControl.php?opc=2", {estadoElegido : estadoElegido} , function(data)
		{
			$("#cbo_1_municipio_residencia").html(data);
		});
	});*/
	///////////////////////////////////////////
	//combo residencia
	// Detalle	=> Cargar combo de parroquia
	///////////////////////////////////////////
/*	$('#cbo_1_municipio_residencia').change(function()
	{
		
		municipioElegido = $(this).val();
		
		$.post("../controlador/combosE_M_PControl.php?opc=3", {municipioElegido : municipioElegido} , function(data)
		{
			$("#cbo_1_parroquia_residencia").html(data);
		});
	});*/

	///////////////////////////////////////////
	//combo institucion
	// Detalle	=> Cargar combo de estado
	///////////////////////////////////////////
/*	$.post("../controlador/combosE_M_PControl.php?opc=1", function(data)
	{
		$("#cbo_2_estado_institucion").html(data);
	});*/
	
	
	///////////////////////////////////////////
	//combo institucion
	// Detalle	=> Cargar combo de municipio
	///////////////////////////////////////////
/*	$('#cbo_2_estado_institucion').change(function()
	{
		
		estadoElegido = $(this).val();
		$.post("../controlador/combosE_M_PControl.php?opc=2", {estadoElegido : estadoElegido} , function(data)
		{
			$("#cbo_1_municipio_institucion").html(data);
		});
	});
	///////////////////////////////////////////
	//combo institucion
	// Detalle	=> Cargar combo de parroquia
	///////////////////////////////////////////
	$('#cbo_1_municipio_institucion').change(function()
	{
		
		municipioElegido = $(this).val();
		
		$.post("../controlador/combosE_M_PControl.php?opc=3", {municipioElegido : municipioElegido} , function(data)
		{
			$("#cbo_1_parroquia_institucion").html(data);
		});
	});	
}) /* FIN DE $(document).ready(function() */
