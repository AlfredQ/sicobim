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
	
	
	////////////////////////////////////////////////////////////////////////
	// Pagina	=> Agregar otro grupo familiar
	// Detalle	=> Pesta�a 2
	////////////////////////////////////////////////////////////////////////
	$('#lnk_2_datosSocio_agregar').click(function()
	{
		var totalFilas = $("div#div_2_datosSocio_globalFilas").children().length;
		var numDiv = (totalFilas + 1);
		
		$('#div_2_datosSocio_global_' + totalFilas).after('<div class="celdaFilaLeft" id="div_2_datosSocio_global_' + numDiv + '">');
		$('#div_2_datosSocio_global_' + numDiv).append('<div class="celdaFilaLeft" id="div_2_datosSocio_completo_' + numDiv + '">');
		$('#div_2_datosSocio_completo_' + numDiv).append('<div class="celda2500_40_inicio" id="div_2_datosSocio_bloque_1_' + numDiv + '">');
		$('#div_2_datosSocio_bloque_1_' + numDiv).append('<a id="lnk_2_datosSocio_eliminar_1_' + numDiv + '" href="javascript:void(0);" title="Eliminar">');
		$('#lnk_2_datosSocio_eliminar_1_' + numDiv).append('<img border="0" src="../../assets/img/delete1.png" />');
		
		//Nombre y apellido
		$('#div_2_datosSocio_completo_' + numDiv).after('<div class="celda2500_248" id="div_2_datosSocio_bloque_2_' + numDiv + '">');
		$('#div_2_datosSocio_bloque_2_' + numDiv).append('<input type="text" id="txt_2_datosSocio_2_' + numDiv + '" name="txt_2_datosSocio_2_' + numDiv + '" maxlength="40" size="40">');
		
		//Cedula
		$('#div_2_datosSocio_bloque_2_' + numDiv).after('<div class="celda2500_150" id="div_2_datosSocio_bloque_3_' + numDiv + '">');
		$('#div_2_datosSocio_bloque_3_' + numDiv).append('<div class="celdaFilaLeft" id="div_2_datosSocio_nac_3_' + numDiv + '">');
		var combo = '';
		combo = '<select name="cbo_2_datosSocio_3_' + numDiv + '" id="cbo_2_datosSocio_3_' + numDiv + '">';
		combo += '<option value=""> - </option>';
		combo += '<option value="V">V</option>';
		combo += '<option value="E">E</option>';
		$('#div_2_datosSocio_nac_3_' + numDiv).append(combo);
		
		$('#div_2_datosSocio_nac_3_' + numDiv).after('<div class="celdaFilaLeft" id="div_2_datosSocio_guion_3_' + numDiv + '" style="margin-top: 5px;">');
		$('#div_2_datosSocio_guion_3_' + numDiv).append('&nbsp; - &nbsp;');
		
		$('#div_2_datosSocio_guion_3_' + numDiv).after('<div class="celdaFilaLeft" id="div_2_datosSocio_ci_3_' + numDiv + '">');
		$('#div_2_datosSocio_ci_3_' + numDiv).append('<input type="text" id="txt_2_datosSocio_3_' + numDiv + '" name="txt_2_datosSocio_3_' + numDiv + '" maxlength="8" size="8">');
		
		//Edad
		$('#div_2_datosSocio_bloque_3_' + numDiv).after('<div class="celda2500_55" id="div_2_datosSocio_bloque_4_' + numDiv + '">');
		$('#div_2_datosSocio_bloque_4_' + numDiv).append('<input type="text" id="txt_2_datosSocio_4_' + numDiv + '" name="txt_2_datosSocio_4_' + numDiv + '" maxlength="2" size="2">');
		
		//Sexo
		$('#div_2_datosSocio_bloque_4_' + numDiv).after('<div class="celda2500_55" id="div_2_datosSocio_bloque_5_' + numDiv + '">');
		var combo = '';
		combo = '<select name="cbo_2_datosSocio_5_' + numDiv + '" id="cbo_2_datosSocio_5_' + numDiv + '">';
		combo += '<option value=""> - </option>';
		combo += '<option value="F">F</option>';
		combo += '<option value="M">M</option>';
		$('#div_2_datosSocio_bloque_5_' + numDiv).append(combo);
		
		//Estado Civil
		$('#div_2_datosSocio_bloque_5_' + numDiv).after('<div class="celda2500_110" id="div_2_datosSocio_bloque_6_' + numDiv + '">');
		var combo = '';
		combo = '<select name="cbo_2_datosSocio_6_' + numDiv + '" id="cbo_2_datosSocio_6_' + numDiv + '">';
		combo += '<option value=""> - Seleccione - </option>';
		combo += '<option value="S">Soltero(a)</option>';
		combo += '<option value="C">Casado(a)</option>';
		combo += '<option value="B">Concubino(a)</option>';
		combo += '<option value="S">Separado(a)</option>';
		combo += '<option value="D">Divorciado(a)</option>';
		combo += '<option value="V">Viudo(a)</option>';
		$('#div_2_datosSocio_bloque_6_' + numDiv).append(combo);
		
		//Filiacion
		$('#div_2_datosSocio_bloque_6_' + numDiv).after('<div class="celda2500_145" id="div_2_datosSocio_bloque_7_' + numDiv + '">');
		var combo = '';
		combo = '<select name="cbo_2_datosSocio_7_' + numDiv + '" id="cbo_2_datosSocio_7_' + numDiv + '">';
		combo += '<option value=""> - Seleccione - </option>';
		combo += '<option value="1">C&oacute;yuge / Esposo(a)</option>';
		combo += '<option value="2">Hijo(a) / Hijastro(a)</option>';
		combo += '<option value="3">Nieto(a)</option>';
		combo += '<option value="4">Madre</option>';
		combo += '<option value="5">Padre</option>';
		combo += '<option value="6">Suegro(a)</option>';
		combo += '<option value="7">Hermano(a)</option>';
		combo += '<option value="8">Sobrino(a)</option>';
		combo += '<option value="9">Primo(a)</option>';
		combo += '<option value="10">Yerno(a)</option>';
		combo += '<option value="11">Cu&ntilde;ado(a)</option>';
		combo += '<option value="12">Nuera(o)</option>';
		combo += '<option value="13">T&iacute;o(a)</option>';
		combo += '<option value="14">No Pariente</option>';
		$('#div_2_datosSocio_bloque_7_' + numDiv).append(combo);
		
		//Grado Instruccion
		$('#div_2_datosSocio_bloque_7_' + numDiv).after('<div class="celda2500_150" id="div_2_datosSocio_bloque_8_' + numDiv + '">');
		var combo = '';
		combo = '<select name="cbo_2_datosSocio_8_' + numDiv + '" id="cbo_2_datosSocio_8_' + numDiv + '">';
		combo += '<option value=""> - Seleccione - </option>';
		combo += '<option value="1">Preescolar</option>';
		combo += '<option value="2">B&aacute;sica</option>';
		combo += '<option value="3">Primaria</option>';
		combo += '<option value="4">Educaci&oacute;n Especial</option>';
		combo += '<option value="5">Diversificada</option>';
		combo += '<option value="6">T&eacute;cnico Medio</option>';
		combo += '<option value="7">T&eacute;cnico Superior</option>';
		combo += '<option value="8">Universitario</option>';
		combo += '<option value="9">Postgrado</option>';
		$('#div_2_datosSocio_bloque_8_' + numDiv).append(combo);
		
		//Trabaja
		$('#div_2_datosSocio_bloque_8_' + numDiv).after('<div class="celda2500_70" id="div_2_datosSocio_bloque_9_' + numDiv + '">');
		var combo = '';
		combo = '<select name="cbo_2_datosSocio_9_' + numDiv + '" id="cbo_2_datosSocio_9_' + numDiv + '">';
		combo += '<option value=""> - </option>';
		combo += '<option value="1">Si</option>';
		combo += '<option value="0">No</option>';
		$('#div_2_datosSocio_bloque_9_' + numDiv).append(combo);
		
		//Ingresos Mensuales
		$('#div_2_datosSocio_bloque_9_' + numDiv).after('<div class="celda2500_150" id="div_2_datosSocio_bloque_10_' + numDiv + '">');
		$('#div_2_datosSocio_bloque_10_' + numDiv).append('<input type="text" id="txt_2_datosSocio_10_' + numDiv + '" name="txt_2_datosSocio_10_' + numDiv + '" maxlength="12" size="21">');
		
		//Aporte Mensual
		$('#div_2_datosSocio_bloque_10_' + numDiv).after('<div class="celda2500_150" id="div_2_datosSocio_bloque_11_' + numDiv + '">');
		$('#div_2_datosSocio_bloque_11_' + numDiv).append('<input type="text" id="txt_2_datosSocio_11_' + numDiv + '" name="txt_2_datosSocio_11_' + numDiv + '" maxlength="12" size="21">');
		
		//Observaciones
		$('#div_2_datosSocio_bloque_11_' + numDiv).after('<div class="celda2500_660" id="div_2_datosSocio_bloque_12_' + numDiv + '">');
		$('#div_2_datosSocio_bloque_12_' + numDiv).append('<textarea id="txa_2_datosSocio_12_' + numDiv + '" name="txa_2_datosSocio_12_' + numDiv + '" class="textareaObservaciones"></textarea>');
		
		
		////////////////////////////////////////////////////
		// Esconder el boton de eliminar en la fila anterior
		//////////////////////////////////////////////////////
		$('#lnk_2_datosSocio_eliminar_1_' + (numDiv - 1)).hide();
		
		
		///////////////////////////////////////////////////////////
		// Cuando se le da click al link de eliminar una fila
		// Unicamente funciona cuando es la primera fila y no se le
		// da al menos una vez al boton de agregar una nueva fila
		/////////////////////////////////////////////////////////////
		$("a").click(function()
		{
			var nombreLink = $(this).attr('id').split('_');
			var nombreLinkCompleto = $(this).parent().parent().parent().attr('id');
			var nombreLinkEliminarSeparado = $(this).parent().attr('id').split("_");
			var nombreLinkSeparado = $(this).parent().parent().attr('id').split("_");
			
				//Se le dio click en el boton de eliminar
				if ((nombreLink[0] == 'lnk') && (nombreLink[1] == '2') && (nombreLink[2] == 'datosSocio') && (nombreLink[3] == 'eliminar') && (nombreLink[4] == '1'))
				{
					//Intenta eliminar la primera fila, pero solo se puede limpia todos los campos
					if (nombreLinkEliminarSeparado[5] == '1')
					{
						$('#txt_2_datosSocio_2_1, #cbo_2_datosSocio_3_1, #txt_2_datosSocio_3_1, #txt_2_datosSocio_4_1, #cbo_2_datosSocio_5_1, #cbo_2_datosSocio_6_1, #cbo_2_datosSocio_7_1, #cbo_2_datosSocio_8_1, #cbo_2_datosSocio_9_1, #txt_2_datosSocio_10_1, #txt_2_datosSocio_11_1, #txt_2_datosSocio_12_1').val("");
					}
					//Intenta eliminar otra fila (diferente a la primera)
					else
					{
						$('#' + nombreLinkCompleto).remove();
												
						/////////////////////////////////////////////////////////////////////////////
						// Agregar el boton de eliminar en la fila anterior a la fila que se elimino
						/////////////////////////////////////////////////////////////////////////////
						$('#lnk_2_datosSocio_eliminar_1_' + (nombreLinkEliminarSeparado[5] - 1)).show();
					}
				}
		});
	});
	
	
	///////////////////////////////////////////////////////////
	// Cuando se le da click al link de eliminar una fila
	// Unicamente funciona cuando es la primera fila y no se le
	// da al menos una vez al boton de agregar una nueva fila
	/////////////////////////////////////////////////////////////
	$("a").click(function()
	{
		var nombreLink = $(this).attr('id').split('_');
	
			//Se le dio click en el boton de eliminar
			if ((nombreLink[0] == 'lnk') && (nombreLink[1] == '2') && (nombreLink[2] == 'datosSocio') && (nombreLink[3] == 'eliminar') && (nombreLink[4] == '1'))
			{
				var nombreLinkEliminarSeparado = $(this).parent().attr('id').split("_");
				
					//Intenta eliminar la primera fila, pero solo se puede limpia todos los campos
					if (nombreLinkEliminarSeparado[5] == '1')
					{
						$('#txt_2_datosSocio_2_1, #cbo_2_datosSocio_3_1, #txt_2_datosSocio_3_1, #txt_2_datosSocio_4_1, #cbo_2_datosSocio_5_1, #cbo_2_datosSocio_6_1, #cbo_2_datosSocio_7_1, #cbo_2_datosSocio_8_1, #cbo_2_datosSocio_9_1, #txt_2_datosSocio_10_1, #txt_2_datosSocio_11_1, #txa_2_datosSocio_12_1').val("");
					}
			}
	});
	
	
	/////////////////////////////////////////////////////////////////////////
	// Pagina	=> Guardar Planilla (Censo Vivienda y Datos Socioeconomicos)
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
				fechanac:
				{
					required : true
				},
				edad:
		       	{
		            number : true,
		            maxlength:3,
		            range: ['18', "110"]
				},
				estadoCivil:
		        {
		        	required : true
		        },
				numPersonasCargo:
				{
					required : true,
		            number : true
				},
				numHijosMenores:
				{
					required : true,
		            number : true
				},
				cbo_vialidad:
				{
					required :true
				},
				txt_Vialidad:
				{
					required :true,
					regex:"^[a-zA-Z0-9-#.,/ áéíóúñ]+$"
				},
				cbo_vivienda:
				{
					required : true
				},
				txt_vivienda:
				{
					required : true,
					regex:"^[a-zA-Z0-9-#.,/ áéíóúñ]+$"
				},
				txt_numVivienda:
				{
					required : true,
					number:true
				},
				txt_piso:
				{
					required : true,
					regex:"^[a-zA-Z0-9-# áéíóúñ]+$"
				},
				cbo_zona:
				{
					required : true
				},
				txt_zona:
				{
					required : true,
					regex:"^[a-zA-Z0-9-#.,/ áéíóúñ]+$"
				},
				txt_ciudad:
				{
					required :true,
					regex:"^[a-zA-Z0-9-#.,/ áéíóúñ]+$"
				},
				cbo_estado:
				{
					required :true
				},
				cbo_municipio:
				{
					required : true
				},
				cbo_parroquia:
				{
					required :true
				},
				txt_anosResidencia:
				{
					required : true,
		            number : true
				},
				txt_tlfLocal :
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
		        txt_tlfotroContacto:
		        {
		        	required: true,
		            minlength: 11,
		            maxlength: 11,
		            number : true
		        },
		        cbo_2_viviendaTipo:
		        {
		        	required: true
		        },
		        cbo_2_tenenciaTipo:
		        {
		        	required: true
		        },
		        'electrodomesticosTipo[]':
		        {
		        	required: true,
		        	minlength: 1
		        },
		        'serviciosTipo[]':
		        {
		        	required:true,
		            minlength:1
		        },
		        cbo_2_terreno:
		        {
		        	required: true
		        },
		        cbo_2_techo:
		        {
		        	required: true
		        },
		        cbo_2_paredes:
		        {
		        	required: true
		        },
		        txt_2_numAmbiente:
		    	{
					required : true,
					number:true
				},
				cbo_2_pisos:
				{
		        	required: true
		        },
		        txt_2_numDormitorios:
		    	{
					required : true,
					number:true
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
		        fechanac:
				{
		        	required:"<li>Fecha de Nacimiento Obligatoria</li>"
				},
		        edad:
		        {
		            number : "<li>Edad solo Permite Dígitos</li>",
		            maxlength:"<li>Edad máximo 3 Dígitos</li>",
		            range:"<li>Debe ser mayor de Edad</li>"
		        },
		        estadoCivil:
		        {
		        	required : "<li>Estado Civil Obligatorio</li>"
		        },
		        numPersonasCargo:
				{
					required : "<li>Número de Persona Obligatorio</li>",
					number : "<li>Número de Persona solo Permite Dígitos</li>"
				} ,
				numHijosMenores:
				{
					required : "<li>Número de Hijos Obligatorio</li>",
					number : "<li>Número de Hijos solo Permite Dígitos</li>"
				},
				cbo_vialidad:
				{
					required : "<li>Vialidad Obligatoria</li>"
				},
				txt_Vialidad:
				{
					required : "<li>Descripción de Vialidad Obligatoria</li>",
					regex:	   "<li>Descripción de Vialidad no debe tener Caracteres Especiales</li>"
				},
				cbo_vivienda:
				{
					required : "<li>Vivienda Obligatoria</li>"
				},
				txt_vivienda:
				{
					required : "<li>Descripción de Vivienda Obligatoria</li>",
					regex:	   "<li>Descripción de Vivienda no debe tener Caracteres Especiales</li>"
				},
				txt_numVivienda:
				{
					required :  "<li>Número de Vivienda Obligatorio</li>",
					number : "<li>Número de Vivienda solo Permite Dígitos</li>"
				},
				txt_piso:
				{
					required : "<li>Piso/Nivel Obligatorio</li>",
					regex:	   "<li>Piso/Nivel  no debe tener Caracteres Especiales</li>"
				},
				cbo_zona:
				{
					required : "<li>Zona Obligatoria</li>"
				},
				txt_zona:
				{
					required : "<li>Descripción de Zona Obligatoria</li>",
					regex:	   "<li>Descripción de Zona no debe tener Caracteres Especiales</li>"
				},
				txt_ciudad:
				{
					required :"<li>Ciudad Obligatoria</li>",
					regex:	  "<li>Ciudad no debe tener Caracteres Especiales</li>"
				},
				cbo_estado:
				{
					required :"<li>Estado Obligatorio</li>"
				},
				cbo_municipio:
				{
					required : "<li>Municipio Obligatorio</li>"
				},
				cbo_parroquia:
				{
					required :"<li>Parroquia Obligatoria</li>"
				},
				txt_anosResidencia:
				{
					required : "<li>Años de Residencia Obligatoria</li>",
		            number : "<li>Años de Residencia solo Permite Dígitos</li>"
				},
				txt_tlfLocal :
		        {
		        	required: "<li>Teléfono Local Obligatorio</li>",
		            minlength:"<li>Teléfono Local máximo 11 Dígitos</li>",
		            maxlength:"<li>Teléfono Local máximo 11 Dígitos</br>",
		            number :"<li>Teléfono Local solo Permite Dígitos</li>"
		        },
		        txt_tlfCelular:
		        {
		        	required: "<li>Teléfono Celular Obligatorio</br>",
		            minlength:"<li>Teléfono Celular máximo 11 Dígitos</li>",
		            maxlength:"<li>Teléfono Celular máximo 11 Dígitos</li>",
		            number :"<li>Teléfono Celular solo Permite Dígitos</li>"
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
		        txt_tlfotroContacto:
		        {
		        	required: "<li>Otro Número de Contacto Obligatorio</li>",
		            minlength:"<li>Otro Número de Contacto máximo 11 Dígitos</li>",
		            maxlength:"<li>Otro Número de Contacto máximo 11 Dígitos</li>",
		            number :"<li>Otro Número de Contacto solo Permite Dígitos</li>"
		        },
		        cbo_2_viviendaTipo:
		        {
		        	required: "<li>Vivienda Tipo Obligatorio</li>"
		        },
		        cbo_2_tenenciaTipo:
		        {
		        	required: "<li>Tenencia Tipo Obligatorio</li>"
		        },
		        'electrodomesticosTipo[]':
		        {
		        	required: "<li>Electrodomésticos Obligatorio</li>",
		            minlength:"<li>Electrodomésticos mínimo 1 Opción</li>",
		        },
		        'electrodomesticosTipo[]':
		        {
		        	required: "<li>Electrodomésticos Obligatorio</li>",
		            minlength:"<li>Electrodomésticos mínimo 1 Opción</li>",
		        },
		        'serviciosTipo[]':
		        {
		        	required: "<li>Servicios Obligatorio</li>",
		            minlength:"<li>Servicios mínimo 1 Opción</li>",
		        },
		        cbo_2_terreno:
		        {
		        	required: "<li>Terreno Obligatorio</li>"
		        },
		        cbo_2_techo:
		        {
		        	required: "<li>Techo Obligatorio</li>"
		        },
		        cbo_2_paredes:
		        {
		        	required: "<li>Paredes Obligatorio</li>"
		        },
		        txt_2_numAmbiente:
		    	{
		        	required: "<li>Número de Ambientes Obligatorio</li>",
					number:"<li>Número de Ambientes solo Permite Dígitos</li>"
				},
				cbo_2_pisos:
				{
					required: "<li>Piso Obligatorio</li>"
		        },
		        txt_2_numDormitorios:
		    	{
		        	required: "<li>Número de Dormitorios Obligatorio</li>",
					number:"<li>Número de Dormitorios solo Permite Dígitos</li>"
				}
				
	    },	        
	    
	    submitHandler:function()
	    {
	        var totalFilas = $("div#div_2_datosSocio_globalFilas").children().length;
			
			$.post("../../pagina_cau/sistema/controlador/censo/censo.Control.php?opc=1&tof=" + totalFilas, $("#frmRegistrarCenso").serialize()+"&ram="+Math.random(), function(data)
			{
				//alert(data);
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
	
	
	$('#fechanac').change(function()
	{
		//Fecha de Nacimiento Seleccionada
		var fechaSele = $('#fechanac').val().split("/"); //Fecha Nacimiento
	
		//Fecha Actual
		var fullDate = new Date()
		//Thu May 19 2011 17:25:38 GMT+1000 {}
		 
		//convert month to 2 digits
		var twoDigitMonth = ((fullDate.getMonth().length+1) === 1)? (fullDate.getMonth()+1) : '0' + (fullDate.getMonth()+1);
		 
		var actualCompleta = fullDate.getDate() + "/" + twoDigitMonth + "/" + fullDate.getFullYear();
		var diaAct = fullDate.getDate();
		var mesAct = twoDigitMonth;
		var anoAct = fullDate.getFullYear();
		
			if ((fechaSele[1] == mesAct) && (fechaSele[0] > diaAct))
			{
				anoAct = (anoAct - 1);
			}
		
			//si el mes es superior al actual tampoco habrá cumplido años, por eso le quitamos un año al actual
			if (fechaSele[1] > mesAct)
			{
				anoAct = (anoAct - 1);
			}
			 
		//ya no habría mas condiciones, ahora simplemente restamos los años y mostramos el resultado como su edad
		edad = (anoAct - fechaSele[2]);
		
			if (edad >= 0)
				$('#edad').val(edad);
			else
				$('#edad').val("La edad es Incorrecta");
	});
	
	
	$('#cedula').blur(function()
	{
		var ele1 = $('#nacionalidad').val();
		var ele2 = $('#cedula').val();
			$.ajax
			({
				type:"POST",
				url: "../controlador/censo/censo.Control.php?opc=6&ele1="+ele1+"&ele2="+ele2,
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
						$("#fechaing").val(data.FeIngreso);
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
						$("#fechaing").val("");
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
		var ele3 = $('#txt_1_consultaControl').val();
		var sw = 0;
		
			if ((ele1 != '') || (ele2 != '') || (ele3 != ''))
			{
				if ((ele2 != '') || (ele3 != ''))
				{
					if (ele2 != '')
					{
						if ($.isNumeric(ele2) == false)
							sw = 1;
					}
					
					if (ele3 != '')
					{
						if ($.isNumeric(ele3) == false)
							sw = 1;
					}
				}
				
				
				if (sw == 0)
				{
					$.ajax
					({
						type:"POST",
						url: "../controlador/censo/censo.Control.php?opc=8&ele1=" + ele1 + "&ele2=" + ele2 + "&ele3=" + ele3,
						dataType:"json",
						//dataType:"html",
						data: "",
						async:true,
						success:function(data)
						{
							if (data.error == 2)
							{
								alert("El Usuario primero se debe registrar para poder modificar sus datos");
								$("#pestanaRegistrarCenso").css("display", "none");
							}
							else if (data.error == 1)
							{
								alert("El Usuario no se encuentra registrado");
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
								
								
								//Trabajador
								$("#fecharecep").val(data.FeRecepcion);
								$("#nacionalidad").val(data.InNacionalidad);
								$("#cedula").val(data.IntNuCedula);
								$("#apellidos").val(data.StsDsApellidos);
								$("#nombres").val(data.StsDsNombres);
								$("#fechanac").val(data.FeNacimiento);
								$("#edad").val(data.IntNuEdad);
								$("#estadoCivil").val(data.StsInEstadoCivil);
								$("#numPersonasCargo").val(data.IntNuPersCargo);
								$("#numHijosMenores").val(data.InNuHijosMenores);
								
									if (data.BolInDiscapacidad = 'f')
										$("#rdo_1_presentaDiscapacidad1").attr("checked", "checked");
									else if (data.BolInDiscapacidad = 't')
										$("#rdo_1_presentaDiscapacidad").attr("checked", "checked");
										
								$("#cbo_vialidad").val(data.IntCdVialidad);
								$("#txt_Vialidad").val(data.StsDsVialidad);
								$("#cbo_vivienda").val(data.IntCdDomicilio);
								$("#txt_vivienda").val(data.StsDsDomicilio);
								$("#txt_piso").val(data.IntNuPiso);
								$("#txt_numVivienda").val(data.StsNuVivienda);
								$("#cbo_zona").val(data.IntCdZona);
								$("#txt_zona").val(data.StsDsZona);
								
								var est = data.IntCdEstado;
								estadoElegido = parseInt(est);
								
								var mun = data.IntCdMunicipio;
								municipioElegido = parseInt(mun);
								
								var par = data.IntCdParroquia;
								parroquiaElegido = parseInt(par);

								$.post("../controlador/censo/censo.Control.php?opc=3&m=" + mun, {estadoElegido : estadoElegido} , function(data)
								{
									$("#cbo_municipio").html(data);
								});
									
								$.post("../controlador/censo/censo.Control.php?opc=4&p=" + par, {municipioElegido : municipioElegido} , function(data)
								{
									$("#cbo_parroquia").html(data);
								});
								
								
								$("#txt_ciudad").val(data.StsNbCiudad);
								$("#cbo_estado").val(data.IntCdEstado);
								//$("#cbo_municipio").val(mun);
								//$("#cbo_parroquia").val(data.data.IntCdParroquia);
								//$('#cbo_municipio').append('<option value="' + data.IntCdMunicipio +'" selected="selected">' + data.StsNbMunicipio + '</option>');
								//$('#cbo_parroquia').append('<option value="' + data.IntCdParroquia +'" selected="selected">' + data.StsNbParroquia + '</option>');
								
								$("#txt_ciudad").val(data.StsNbCiudad);
								$("#cbo_estado").val(data.IntCdEstado);
								$('#cbo_municipio').append('<option value="' + data.IntCdMunicipio +'" selected="selected">' + data.StsNbMunicipio + '</option>');
								$('#cbo_parroquia').append('<option value="' + data.IntCdParroquia +'" selected="selected">' + data.StsNbParroquia + '</option>');
								$("#txt_anosResidencia").val(data.IntNuAnosResidencia);
								$("#txt_tlfLocal").val(data.StsNuTelefono);
								$("#txt_tlfCelular").val(data.StsNuCelular);
								$("#txa_direccionOficina").val(data.StsDsDireccionOficina);
								$("#txa_dependencia").val(data.StsDsDependencia);
								$("#txt_cargo").val(data.StsDsCargo);
								$("#fechaing").val(data.FeIngreso);
								$("#txa_oficinaPiso").val(data.StsDsOficinaPiso);
								$("#txt_tlfOficina").val(data.StsNuTeleOfic);
								$("#txt_tlfotroContacto").val(data.StsNuTeleContacto);
								$("#txt_estatus").val(data.StsCdTipoEmpleado);
									
									if (data.BolInMision == 'f')
										$("#rdo_2_inscritoMision1").attr("checked", "checked");
									else if (data.BolInMision == 't')
										$("#rdo_2_inscritoMision").attr("checked", "checked");
								
								$("#cbo_2_viviendaTipo").val(data.IntCdVivienda);
								$("#cbo_2_tenenciaTipo").val(data.IntCdTenencia);
								$("#cbo_2_terreno").val(data.IntCdTerreno);
								$("#cbo_2_techo").val(data.IntCdTecho);
								$("#cbo_2_paredes").val(data.IntCdParedes);
								$("#txt_2_numAmbiente").val(data.IntNuAmbientes);
								
									if (data.BolInVentilacion == 'f')
										$("#rdo_2_ventilacion1").attr("checked", "checked");
									else if (data.BolInVentilacion == 't')
										$("#rdo_2_ventilacion").attr("checked", "checked");
								
								$("#cbo_2_pisos").val(data.IntCdPiso);
								
									if (data.BolInVera == 'f')
										$("#rdo_2_vera1").attr("checked", "checked");
									else if (data.BolInVera == 't')
										$("#rdo_2_vera").attr("checked", "checked");
									
								$("#txt_2_numDormitorios").val(data.IntNuDormitorios);
								
								//Electrodosmesticos por trabajador
								var totalElec = data.IntCdElectrodomesticos.length;
								
									for (i=0; i<totalElec; i++)
									{
										$('#electrodomesticosTipo option[value=' + data.IntCdElectrodomesticos[i] + ']').prop('selected', 'selected');
									}
								
								//Servicios por trabajador
								var totalServ = data.IntCdServicios.length;
								
									for (i=0; i<totalServ; i++)
									{
										$('#serviciosTipo option[value=' + data.IntCdServicios[i] + ']').prop('selected', 'selected');
									}
								
									
								//GrupoFamiliar
								var totalIn = $("div#div_2_datosSocio_globalFilas").children().length;
								
									if (totalIn > 1)
									{
										for (z=2; z<=totalIn; z++)
										{
											$("#div_2_datosSocio_global_" + z).remove();
										}
									}
								
								var totalGrupo = data.IntIdRegistroGrupo.length;
								var y = 0;
								var i = 0;
								var totalFilasGp = 0;
								var numDiv = 0;
								
									for (i=0; i<totalGrupo; i++)
									{
										y = i;
										var nombre = data.StsNbIntegranteGfGrupo[y];
										var nac = data.StsNacionalidadInteGrupo[y];
										
											if ((data.IntNuCedulaInteGrupo[y] != null) && (data.IntNuCedulaInteGrupo[y] != ''))
												var ci = data.IntNuCedulaInteGrupo[y];
											else
												var ci = '';
												
										var edad = data.IntNuEdadGrupo[y];
										var sexo = data.StsSexoGrupo[y];
										var civil = data.StsEstadoCivilGrupo[y];
										var filiacion = data.IntCdFiliacionGrupo[y];
										var grado = data.IntCdGradoInstruccionGrupo[y];
										var trabaja = data.BolTrabajoGrupo[y];
										var ingresos = data.IntMoIngresosGrupo[y];
										var aporte = data.IntMoAporteGrupo[y];
										var observaciones = data.TextDsObservacionesGrupo[y];
										
											//Es el primer registro
											if (y == 0)
											{
												$("#txt_2_datosSocio_2_1").val(nombre);
												$("#cbo_2_datosSocio_3_1").val(nac);
												$("#txt_2_datosSocio_3_1").val(ci);
												$("#txt_2_datosSocio_4_1").val(edad);
												$("#cbo_2_datosSocio_5_1").val(sexo);
												$("#cbo_2_datosSocio_6_1").val(civil);
												$("#cbo_2_datosSocio_7_1").val(filiacion);
												$("#cbo_2_datosSocio_8_1").val(grado);
												
													if (trabaja == "t")
													{
														$("#cbo_2_datosSocio_9_1").val(1);
													}
													else if (trabaja == "f")
													{
														$("#cbo_2_datosSocio_9_1").val(0);
													}
													
												$("#txt_2_datosSocio_10_1").val(ingresos);
												$("#txt_2_datosSocio_11_1").val(aporte);
												$("#txa_2_datosSocio_12_1").val(observaciones);
											}
											else if (y > 0)
											{
												var totalFilasGp = $("div#div_2_datosSocio_globalFilas").children().length;
												var numDiv = (totalFilasGp + 1);
												
												$('#div_2_datosSocio_global_' + totalFilasGp).after('<div class="celdaFilaLeft" id="div_2_datosSocio_global_' + numDiv + '">');
												$('#div_2_datosSocio_global_' + numDiv).append('<div class="celdaFilaLeft" id="div_2_datosSocio_completo_' + numDiv + '">');
												$('#div_2_datosSocio_completo_' + numDiv).append('<div class="celda2500_40_inicio" id="div_2_datosSocio_bloque_1_' + numDiv + '">');
												$('#div_2_datosSocio_bloque_1_' + numDiv).append('<a id="lnk_2_datosSocio_eliminar_1_' + numDiv + '" href="javascript:void(0);" title="Eliminar">');
												$('#lnk_2_datosSocio_eliminar_1_' + numDiv).append('<img border="0" src="../../assets/img/delete1.png" />');
												
												//Nombre y apellido
												$('#div_2_datosSocio_completo_' + numDiv).after('<div class="celda2500_248" id="div_2_datosSocio_bloque_2_' + numDiv + '">');
												$('#div_2_datosSocio_bloque_2_' + numDiv).append('<input type="text" id="txt_2_datosSocio_2_' + numDiv + '" name="txt_2_datosSocio_2_' + numDiv + '" maxlength="40" size="40" value="' + nombre + '">');
												
												
												//Cedula
												$('#div_2_datosSocio_bloque_2_' + numDiv).after('<div class="celda2500_150" id="div_2_datosSocio_bloque_3_' + numDiv + '">');
												$('#div_2_datosSocio_bloque_3_' + numDiv).append('<div class="celdaFilaLeft" id="div_2_datosSocio_nac_3_' + numDiv + '">');
												var combo = '';
												combo = '<select name="cbo_2_datosSocio_3_' + numDiv + '" id="cbo_2_datosSocio_3_' + numDiv + '">';
												combo += '<option value=""> - </option>';
												combo += '<option value="V">V</option>';
												combo += '<option value="E">E</option>';
												$('#div_2_datosSocio_nac_3_' + numDiv).append(combo);
												$('#cbo_2_datosSocio_3_' + numDiv).val(nac);
												
												$('#div_2_datosSocio_nac_3_' + numDiv).after('<div class="celdaFilaLeft" id="div_2_datosSocio_guion_3_' + numDiv + '" style="margin-top: 5px;">');
												$('#div_2_datosSocio_guion_3_' + numDiv).append('&nbsp; - &nbsp;');
												
												//Cedula
												$('#div_2_datosSocio_guion_3_' + numDiv).after('<div class="celdaFilaLeft" id="div_2_datosSocio_ci_3_' + numDiv + '">');
												$('#div_2_datosSocio_ci_3_' + numDiv).append('<input type="text" id="txt_2_datosSocio_3_' + numDiv + '" name="txt_2_datosSocio_3_' + numDiv + '" maxlength="8" size="8" value=' + ci + '>');
												
												//Edad
												$('#div_2_datosSocio_bloque_3_' + numDiv).after('<div class="celda2500_55" id="div_2_datosSocio_bloque_4_' + numDiv + '">');
												$('#div_2_datosSocio_bloque_4_' + numDiv).append('<input type="text" id="txt_2_datosSocio_4_' + numDiv + '" name="txt_2_datosSocio_4_' + numDiv + '" maxlength="2" size="2" value=' + edad + '>');
												
												//Sexo
												$('#div_2_datosSocio_bloque_4_' + numDiv).after('<div class="celda2500_55" id="div_2_datosSocio_bloque_5_' + numDiv + '">');
												var combo = '';
												combo = '<select name="cbo_2_datosSocio_5_' + numDiv + '" id="cbo_2_datosSocio_5_' + numDiv + '">';
												combo += '<option value=""> - </option>';
												combo += '<option value="F">F</option>';
												combo += '<option value="M">M</option>';
												$('#div_2_datosSocio_bloque_5_' + numDiv).append(combo);
												$('#cbo_2_datosSocio_5_' + numDiv).val(sexo);
												
												//Estado Civil
												$('#div_2_datosSocio_bloque_5_' + numDiv).after('<div class="celda2500_110" id="div_2_datosSocio_bloque_6_' + numDiv + '">');
												var combo = '';
												combo = '<select name="cbo_2_datosSocio_6_' + numDiv + '" id="cbo_2_datosSocio_6_' + numDiv + '">';
												combo += '<option value=""> - Seleccione - </option>';
												combo += '<option value="S">Soltero(a)</option>';
												combo += '<option value="C">Casado(a)</option>';
												combo += '<option value="B">Concubino(a)</option>';
												combo += '<option value="S">Separado(a)</option>';
												combo += '<option value="D">Divorciado(a)</option>';
												combo += '<option value="V">Viudo(a)</option>';
												$('#div_2_datosSocio_bloque_6_' + numDiv).append(combo);
												$('#cbo_2_datosSocio_6_' + numDiv).val(civil);
												
												//Filiacion
												$('#div_2_datosSocio_bloque_6_' + numDiv).after('<div class="celda2500_145" id="div_2_datosSocio_bloque_7_' + numDiv + '">');
												var combo = '';
												combo = '<select name="cbo_2_datosSocio_7_' + numDiv + '" id="cbo_2_datosSocio_7_' + numDiv + '">';
												combo += '<option value=""> - Seleccione - </option>';
												combo += '<option value="1">C&oacute;yuge / Esposo(a)</option>';
												combo += '<option value="2">Hijo(a) / Hijastro(a)</option>';
												combo += '<option value="3">Nieto(a)</option>';
												combo += '<option value="4">Madre</option>';
												combo += '<option value="5">Padre</option>';
												combo += '<option value="6">Suegro(a)</option>';
												combo += '<option value="7">Hermano(a)</option>';
												combo += '<option value="8">Sobrino(a)</option>';
												combo += '<option value="9">Primo(a)</option>';
												combo += '<option value="10">Yerno(a)</option>';
												combo += '<option value="11">Cu&ntilde;ado(a)</option>';
												combo += '<option value="12">Nuera(o)</option>';
												combo += '<option value="13">T&iacute;o(a)</option>';
												combo += '<option value="14">No Pariente</option>';
												$('#div_2_datosSocio_bloque_7_' + numDiv).append(combo);
												$('#cbo_2_datosSocio_7_' + numDiv).val(filiacion);
												
												//Grado Instruccion
												$('#div_2_datosSocio_bloque_7_' + numDiv).after('<div class="celda2500_150" id="div_2_datosSocio_bloque_8_' + numDiv + '">');
												var combo = '';
												combo = '<select name="cbo_2_datosSocio_8_' + numDiv + '" id="cbo_2_datosSocio_8_' + numDiv + '">';
												combo += '<option value=""> - Seleccione - </option>';
												combo += '<option value="1">Preescolar</option>';
												combo += '<option value="2">B&aacute;sica</option>';
												combo += '<option value="3">Primaria</option>';
												combo += '<option value="4">Educaci&oacute;n Especial</option>';
												combo += '<option value="5">Diversificada</option>';
												combo += '<option value="6">T&eacute;cnico Medio</option>';
												combo += '<option value="7">T&eacute;cnico Superior</option>';
												combo += '<option value="8">Universitario</option>';
												combo += '<option value="9">Postgrado</option>';
												$('#div_2_datosSocio_bloque_8_' + numDiv).append(combo);
												$('#cbo_2_datosSocio_8_' + numDiv).val(grado);
												
												//Trabaja
												$('#div_2_datosSocio_bloque_8_' + numDiv).after('<div class="celda2500_70" id="div_2_datosSocio_bloque_9_' + numDiv + '">');
												var combo = '';
												combo = '<select name="cbo_2_datosSocio_9_' + numDiv + '" id="cbo_2_datosSocio_9_' + numDiv + '">';
												combo += '<option value=""> - </option>';
												combo += '<option value="1">Si</option>';
												combo += '<option value="0">No</option>';
												$('#div_2_datosSocio_bloque_9_' + numDiv).append(combo);
												
													if (trabaja == 't')
														$('#cbo_2_datosSocio_9_' + numDiv).val(1);
													else if (trabaja == 'f')
														$('#cbo_2_datosSocio_9_' + numDiv).val(0);
												
												//Ingresos Mensuales
												$('#div_2_datosSocio_bloque_9_' + numDiv).after('<div class="celda2500_150" id="div_2_datosSocio_bloque_10_' + numDiv + '">');
												$('#div_2_datosSocio_bloque_10_' + numDiv).append('<input type="text" id="txt_2_datosSocio_10_' + numDiv + '" name="txt_2_datosSocio_10_' + numDiv + '" maxlength="12" size="21" value=' + ingresos + '>');
												
												//Aporte Mensual
												$('#div_2_datosSocio_bloque_10_' + numDiv).after('<div class="celda2500_150" id="div_2_datosSocio_bloque_11_' + numDiv + '">');
												$('#div_2_datosSocio_bloque_11_' + numDiv).append('<input type="text" id="txt_2_datosSocio_11_' + numDiv + '" name="txt_2_datosSocio_11_' + numDiv + '" maxlength="12" size="21" value=' + aporte + '>');
												
												//Observaciones
												$('#div_2_datosSocio_bloque_11_' + numDiv).after('<div class="celda2500_660" id="div_2_datosSocio_bloque_12_' + numDiv + '">');
												$('#div_2_datosSocio_bloque_12_' + numDiv).append('<textarea id="txa_2_datosSocio_12_' + numDiv + '" name="txa_2_datosSocio_12_' + numDiv + '" class="textareaObservaciones">' + observaciones + '</textarea>');
												
			//									//////////////////////////////////////////////////
												// Esconder el boton de eliminar en la fila anterior
												//////////////////////////////////////////////////////
												$('#lnk_2_datosSocio_eliminar_1_' + (numDiv - 1)).hide();
												
												
												///////////////////////////////////////////////////////////
												// Cuando se le da click al link de eliminar una fila
												// Unicamente funciona cuando es la primera fila y no se le
												// da al menos una vez al boton de agregar una nueva fila
												/////////////////////////////////////////////////////////////
												$("a").click(function()
												{
													var nombreLink = $(this).attr('id').split('_');
													var nombreLinkCompleto = $(this).parent().parent().parent().attr('id');
													var nombreLinkEliminarSeparado = $(this).parent().attr('id').split("_");
													var nombreLinkSeparado = $(this).parent().parent().attr('id').split("_");
													
														//Se le dio click en el boton de eliminar
														if ((nombreLink[0] == 'lnk') && (nombreLink[1] == '2') && (nombreLink[2] == 'datosSocio') && (nombreLink[3] == 'eliminar') && (nombreLink[4] == '1'))
														{
															//Intenta eliminar la primera fila, pero solo se puede limpia todos los campos
															if (nombreLinkEliminarSeparado[5] == '1')
															{
																$('#txt_2_datosSocio_2_1, #cbo_2_datosSocio_3_1, #txt_2_datosSocio_3_1, #txt_2_datosSocio_4_1, #cbo_2_datosSocio_5_1, #cbo_2_datosSocio_6_1, #cbo_2_datosSocio_7_1, #cbo_2_datosSocio_8_1, #cbo_2_datosSocio_9_1, #txt_2_datosSocio_10_1, #txt_2_datosSocio_11_1, #txt_2_datosSocio_12_1').val("");
															}
															//Intenta eliminar otra fila (diferente a la primera)
															else
															{
																$('#' + nombreLinkCompleto).remove();
																						
																/////////////////////////////////////////////////////////////////////////////
																// Agregar el boton de eliminar en la fila anterior a la fila que se elimino
																/////////////////////////////////////////////////////////////////////////////
																$('#lnk_2_datosSocio_eliminar_1_' + (nombreLinkEliminarSeparado[5] - 1)).show();
															}
														}
												});
											}
									}
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
					minlength: 6,
					number : true	 	
				},
				fechanac:
				{
					required : true
				},
				edad:
		       	{
		            number : true,
		            maxlength:3,
		            range: ['18', "110"]
				},
				estadoCivil:
		        {
		        	required : true
		        },
				numPersonasCargo:
				{
					required : true,
		            number : true
				},
				numHijosMenores:
				{
					required : true,
		            number : true
				},
				cbo_vialidad:
				{
					required :true
				},
				txt_Vialidad:
				{
					required :true,
					regex:"^[a-zA-Z0-9-#.,/ áéíóúñ]+$"
				},
				cbo_vivienda:
				{
					required : true
				},
				txt_vivienda:
				{
					required : true,
					regex:"^[a-zA-Z0-9-#.,/ áéíóúñ]+$"
				},
				txt_numVivienda:
				{
					required : true,
					number:true
				},
				txt_piso:
				{
					required : true,
					regex:"^[a-zA-Z0-9-# áéíóúñ]+$"
				},
				cbo_zona:
				{
					required : true
				},
				txt_zona:
				{
					required : true,
					regex:"^[a-zA-Z0-9-#.,/ áéíóúñ]+$"
				},
				txt_ciudad:
				{
					required :true,
					regex:"^[a-zA-Z0-9-#.,/ áéíóúñ]+$"
				},
				cbo_estado:
				{
					required :true
				},
				cbo_municipio:
				{
					required : true
				},
				cbo_parroquia:
				{
					required :true
				},
				txt_anosResidencia:
				{
					required : true,
		            number : true
				},
				txt_tlfLocal :
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
		        txa_direccionOficina:
		        {
		        	required: true,
		        	regex:"^[a-zA-Z0-9-#.,/ áéíóúñ]+$"
		        },
		        txa_oficinaPiso:
		        {
		        	required: true
		        },
		        txt_tlfOficina :
		        {
		        	required: true,
		            minlength: 11,
		            maxlength: 11,
		            number : true

		        },
		        txt_tlfotroContacto:
		        {
		        	required: true,
		            minlength: 11,
		            maxlength: 11,
		            number : true
		        },
		        cbo_2_viviendaTipo:
		        {
		        	required: true
		        },
		        cbo_2_tenenciaTipo:
		        {
		        	required: true
		        },
		        'electrodomesticosTipo[]':
		        {
		        	required: true,
		        	minlength: 1
		        },
		        'serviciosTipo[]':
		        {
		        	required:true,
		            minlength:1
		        },
		        cbo_2_terreno:
		        {
		        	required: true
		        },
		        cbo_2_techo:
		        {
		        	required: true
		        },
		        cbo_2_paredes:
		        {
		        	required: true
		        },
		        txt_2_numAmbiente:
		    	{
					required : true,
					number:true
				},
				cbo_2_pisos:
				{
		        	required: true
		        },
		        txt_2_numDormitorios:
		    	{
					required : true,
					number:true
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
		        fechanac:
				{
		        	required:"<li>Fecha de Nacimiento Obligatoria</li>"
				},
		        edad:
		        {
		            number : "<li>Edad solo Permite Dígitos</li>",
		            maxlength:"<li>Edad máximo 3 Dígitos</li>",
		            range:"<li>Debe ser mayor de Edad</li>"
		        },
		        estadoCivil:
		        {
		        	required : "<li>Estado Civil Obligatorio</li>"
		        },
		        numPersonasCargo:
				{
					required : "<li>Número de Persona Obligatorio</li>",
					number : "<li>Número de Persona solo Permite Dígitos</li>"
				} ,
				numHijosMenores:
				{
					required : "<li>Número de Hijos Obligatorio</li>",
					number : "<li>Número de Hijos solo Permite Dígitos</li>"
				},
				cbo_vialidad:
				{
					required : "<li>Vialidad Obligatoria</li>"
				},
				txt_Vialidad:
				{
					required : "<li>Descripción de Vialidad Obligatoria</li>",
					regex:	   "<li>Descripción de Vialidad no debe tener Caracteres Especiales</li>"
				},
				cbo_vivienda:
				{
					required : "<li>Vivienda Obligatoria</li>"
				},
				txt_vivienda:
				{
					required : "<li>Descripción de Vivienda Obligatoria</li>",
					regex:	   "<li>Descripción de Vivienda no debe tener Caracteres Especiales</li>"
				},
				txt_numVivienda:
				{
					required :  "<li>Número de Vivienda Obligatorio</li>",
					number : "<li>Número de Vivienda solo Permite Dígitos</li>"
				},
				txt_piso:
				{
					required : "<li>Piso/Nivel Obligatorio</li>",
					regex:	   "<li>Piso/Nivel  no debe tener Caracteres Especiales</li>"
				},
				cbo_zona:
				{
					required : "<li>Zona Obligatoria</li>"
				},
				txt_zona:
				{
					required : "<li>Descripción de Zona Obligatoria</li>",
					regex:	   "<li>Descripción de Zona no debe tener Caracteres Especiales</li>"
				},
				txt_ciudad:
				{
					required :"<li>Ciudad Obligatoria</li>",
					regex:	  "<li>Ciudad no debe tener Caracteres Especiales</li>"
				},
				cbo_estado:
				{
					required :"<li>Estado Obligatorio</li>"
				},
				cbo_municipio:
				{
					required : "<li>Municipio Obligatorio</li>"
				},
				cbo_parroquia:
				{
					required :"<li>Parroquia Obligatoria</li>"
				},
				txt_anosResidencia:
				{
					required : "<li>Años de Residencia Obligatoria</li>",
		            number : "<li>Años de Residencia solo Permite Dígitos</li>"
				},
				txt_tlfLocal :
		        {
		        	required: "<li>Teléfono Local Obligatorio</li>",
		            minlength:"<li>Teléfono Local máximo 11 Dígitos</li>",
		            maxlength:"<li>Teléfono Local máximo 11 Dígitos</br>",
		            number :"<li>Teléfono Local solo Permite Dígitos</li>"
		        },
		        txt_tlfCelular:
		        {
		        	required: "<li>Teléfono Celular Obligatorio</br>",
		            minlength:"<li>Teléfono Celular máximo 11 Dígitos</li>",
		            maxlength:"<li>Teléfono Celular máximo 11 Dígitos</li>",
		            number :"<li>Teléfono Celular solo Permite Dígitos</li>"
		        },
		        txa_direccionOficina:
		        {
		        	required: "<li>Dirección de Oficina Obligatoria</li>",
		        	regex:	  "<li>Dirección de Oficina no debe tener Caracteres Especiales</li>"
		        },
		        txa_oficinaPiso:
		        {
		        	required: "<li>Oficina/Piso Obligatorio</li>"
		        },
		        txt_tlfOficina :
		        {
		        	required: "<li>Teléfono de Oficina Obligatorio</li>",
		            minlength:"<li>Teléfono de Oficina máximo 11 Dígitos</li>",
		            maxlength:"<li>Teléfono de Oficina máximo 11 Dígitos</br>",
		            number :"<li>Teléfonode Oficina  solo Permite Dígitos</li>"

		        },
		        txt_tlfotroContacto:
		        {
		        	required: "<li>Otro Número de Contacto Obligatorio</li>",
		            minlength:"<li>Otro Número de Contacto máximo 11 Dígitos</li>",
		            maxlength:"<li>Otro Número de Contacto máximo 11 Dígitos</li>",
		            number :"<li>Otro Número de Contacto solo Permite Dígitos</li>"
		        },
		        cbo_2_viviendaTipo:
		        {
		        	required: "<li>Vivienda Tipo Obligatorio</li>"
		        },
		        cbo_2_tenenciaTipo:
		        {
		        	required: "<li>Tenencia Tipo Obligatorio</li>"
		        },
		        'electrodomesticosTipo[]':
		        {
		        	required: "<li>Electrodomésticos Obligatorio</li>",
		            minlength:"<li>Electrodomésticos mínimo 1 Opción</li>",
		        },
		        'electrodomesticosTipo[]':
		        {
		        	required: "<li>Electrodomésticos Obligatorio</li>",
		            minlength:"<li>Electrodomésticos mínimo 1 Opción</li>",
		        },
		        'serviciosTipo[]':
		        {
		        	required: "<li>Servicios Obligatorio</li>",
		            minlength:"<li>Servicios mínimo 1 Opción</li>",
		        },
		        cbo_2_terreno:
		        {
		        	required: "<li>Terreno Obligatorio</li>"
		        },
		        cbo_2_techo:
		        {
		        	required: "<li>Techo Obligatorio</li>"
		        },
		        cbo_2_paredes:
		        {
		        	required: "<li>Paredes Obligatorio</li>"
		        },
		        txt_2_numAmbiente:
		    	{
		        	required: "<li>Número de Ambientes Obligatorio</li>",
					number:"<li>Número de Ambientes solo Permite Dígitos</li>"
				},
				cbo_2_pisos:
				{
					required: "<li>Piso Obligatorio</li>"
		        },
		        txt_2_numDormitorios:
		    	{
		        	required: "<li>Número de Dormitorios Obligatorio</li>",
					number:"<li>Número de Dormitorios solo Permite Dígitos</li>"
				}
				
			},	        
	    
			submitHandler:function()
			{
				var totalFilas = $("div#div_2_datosSocio_globalFilas").children().length;
				 
				$.post("../controlador/censo/censo.Control.php?opc=9&tof=" + totalFilas, $("#frmRegistrarCenso").serialize()+"&ram="+Math.random(), function(data)
				{
					if (data.error == 1)
					{
						window.open('../vista/censo/comprobanteCenso.php','_blank');
						$("#frmRegistrarCenso").reset();
						$("#pestanaRegistrarCenso").css("display", "none");
						$("#cbo_1_consultaNac").val("");
						$("#txt_1_consultaCi").val("");
						$("#txt_1_consultaControl").val("");
						alert("Planilla Modificada Satisfactoriamente");
					}
					else
					{
						alert("No se pudo Modificar la Planilla");
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
				var divis = (data.totalRegistros / 20);
				var totPag = Math.ceil(divis);
				$("#div_1_traza_auditoria_paginacion").paginate({}, parseInt(totPag), 6, 1, 'auditoria');
				
					//Hay registros para mostrar
					if (totPag >= 1)
					{
						$.post("../controlador/censo/registros.Paginador.Control.php", { option: 1 }, function(data2)
						{
							//, cbo_1_tipoMovimiento: $("#cbo_1_tipoMovimiento").val(), cbo_1_tabla: $("#cbo_1_tabla").val(), fechaConsulta: $("#fechaConsulta").val(), cbo_1_nombreUsuario: $("#cbo_1_nombreUsuario").val()
							alert(data2);
						});
					}
			}
			else
			{
				alert(data.error);
			}
		}, "json");
	});
})/*FIN DE $(document).ready(function() */