(function($)
{
	$.fn.paginate = function(options, count, display, page, capa)
	{
		if (count >= 1)
		{
			var paginasMostrar;
			$.fn.paginate.defaults["count"] = count;
			$.fn.paginate.defaults["start"] = page;
			
				if ((capa == 'auditoria') && (count > 0))
					$('#pestanaResultadoTrazaUsuario').css("display", "block");
				else if ((capa == 'usuarios') && (count > 0))
					$('#div_1_consulta_usuarios_cabecera, #div_1_consulta_usuarios_global, #div_1_consulta_usuarios_paginacionGlobal').css("display", "block");
				else if ((capa == 'movimiento') && (count > 0))
					$('#div_1_consulta_movimiento_cabecera, #div_1_consulta_movimiento_global, #div_1_consulta_movimiento_paginacionGlobal').css("display", "block");
			
			
				if (count > display)
					paginasMostrar = display;
				else
					paginasMostrar = count;
					
			$.fn.paginate.defaults["display"] = paginasMostrar;
			var opts = $.extend({}, $.fn.paginate.defaults, options);
			
				return this.each(function()
				{
					$this = $(this);
					var o = $.meta ? $.extend({}, opts, $this.data()) : opts;
					var selectedpage = o.start;
					$.fn.draw (o, $this, selectedpage, capa);
				});
		}
	};
	
	var outsidewidth_tmp = 0;
	var insidewidth 	 = 0;
	var bName = navigator.appName;
	var bVer = navigator.appVersion;
		
		if(bVer.indexOf('MSIE 7.0') > 0)
			var ver = "ie7";
		
	$.fn.paginate.defaults =
	{
		border					: false,
		border_color			: 'none',
		text_color  			: '#0042761',
		background_color    	: 'none',	
		border_hover_color		: '#2573AF',
		text_hover_color  		: 'none',
		background_hover_color	: 'none', 
		rotate      			: true,
		images					: true,
		mouse					: 'press',
		onChange				: /**
		 * @param page
		 * @param capa
		 * @returns
		 */
		function(page, capa)
		{
			if (capa == "auditoria")
			{
				$.post("../controlador/censo/registros.Paginador.Control.php", { option: 1, page: page, cbo_1_tipoMovimiento: $("#cbo_1_tipoMovimiento").val(), cbo_1_tabla: $("#cbo_1_tabla").val(), fechaConsulta: $("#fechaConsulta").val(), cbo_1_nombreUsuario: $("#cbo_1_nombreUsuario").val() }, function(data2)
				{
					$("#div_1_traza_auditoria_noHayConexion").css("display", "none");
					$("#div_1_traza_auditoria_global, #div_1_traza_auditoria_cabecera, #div_1_traza_auditoria_paginacionGlobal").css("display", "block");
					$('#div_1_traza_auditoria_botonesTablaGlobal').css("display", "block");
					$('#div_1_traza_auditoria_global').html(data2);
				}, "html");
			}
			else if (capa == "usuarios")
			{
				$.post("../controlador/censo/registros.Paginador.Control.php", { option: 2, page: page, cedula: $("#cedula").val() }, function(data2)
				{
					$("#div_1_consulta_usuarios_noHayConexion").css("display", "none");
					$("#div_1_consulta_usuarios_global, #div_1_consulta_usuarios_cabecera, #div_1_consulta_usuarios_paginacionGlobal").css("display", "block");
					$('#div_1_consulta_usuarios_botonesTablaGlobal').css("display", "block");
					$('#div_1_consulta_usuarios_global').html("");
					$('#div_1_consulta_usuarios_global').html(data2);
				}, "html");
			}
			else if (capa == "movimiento")
			{
				$.post("../controlador/paginador/registros.Paginador.Control.php", { option: 3, page: page, id: $("#id").val() }, function(data2)
				{
					$("#div_1_consulta_movimiento_noHayConexion").css("display", "none");
					$("#div_1_consulta_movimiento_global, #div_1_consulta_movimiento_cabecera, #div_1_consulta_movimiento_paginacionGlobal").css("display", "block");
					$('#div_1_consulta_movimiento_botonesTablaGlobal').css("display", "block");
					$('#div_1_consulta_movimiento_global').html("");
					$('#div_1_consulta_movimiento_global').html(data2);
				}, "html");
			}
		}
	};
		
	$.fn.draw = function(o, obj, selectedpage, capa)
	{
		var option = 1;
		var totalRegistros = 0;
			
			if(o.display > o.count)
				o.display = o.count;
		
		$this.empty();
		
			if(o.images)
			{
				var spreviousclass 	= 'jPag-sprevious-img';
				var previousclass 	= 'jPag-previous-img';
				var snextclass 		= 'jPag-snext-img';
				var nextclass 		= 'jPag-next-img';
			}
			else
			{
				var spreviousclass 	= 'jPag-sprevious';
				var previousclass 	= 'jPag-previous';
				var snextclass 		= 'jPag-snext';
				var nextclass 		= 'jPag-next';
			}
		
			//Auditoria
			if (capa == 'auditoria')
				var _first = $(document.createElement('a')).attr("id","div_1_traza_auditoria_primeroGlobal").addClass('jPag-first2');
			//Consulta Usuarios
			else if (capa == 'usuarios')
				var _first = $(document.createElement('a')).attr("id","div_1_consulta_usuarios_primeroGlobal").addClass('jPag-first2');
			else if (capa == 'movimiento')
				var _first = $(document.createElement('a')).attr("id","div_1_consulta_movimiento_primeroGlobal").addClass('jPag-first2');
			if(o.rotate)
			{
				if(o.images)
				{
					//Auditoria
					if (capa == 'auditoria')
						var _rotleft = $(document.createElement('span')).attr("id","div_1_traza_auditoria_anterior").addClass(spreviousclass);
					//Consulta Usuarios
					else if (capa == 'usuarios')
						var _rotleft = $(document.createElement('span')).attr("id","div_1_consulta_usuarios_anterior").addClass(spreviousclass);
					//Consulta Usuarios
					else if (capa == 'movimiento')
						var _rotleft = $(document.createElement('span')).attr("id","div_1_consulta_movimiento_anterior").addClass(spreviousclass);
				}
				else
					var _rotleft = $(document.createElement('span')).addClass(spreviousclass).html('&laquo;');		
			}
			
			//Auditoria
			if (capa == 'auditoria')
				var _divwrapleft = $(document.createElement("div")).attr("id","div_1_traza_auditoria_botonesAnterior").addClass('jPag-control-back');
			//Consulta Usuarios
			else if (capa == 'usuarios')
				var _divwrapleft = $(document.createElement("div")).attr("id","div_1_consulta_usuarios_botonesAnterior").addClass('jPag-control-back');
			//Consulta movimiento
			else if (capa == 'movimiento')
				var _divwrapleft = $(document.createElement("div")).attr("id","div_1_consulta_movimiento_botonesAnterior").addClass('jPag-control-back');
			
		_divwrapleft.append(_first).append(_rotleft);
		
			//Auditoria
			if (capa == 'auditoria')
				var _ulwrapdiv	= $(document.createElement('div')).attr("id","div_1_traza_auditoria_numeros").css('overflow','hidden');
			//Consulta Usuarios
			else if (capa == 'usuarios')
				var _ulwrapdiv	= $(document.createElement('div')).attr("id","div_1_consulta_usuarios_numeros").css('overflow','hidden');
			//Consulta movimiento
			else if (capa == 'movimiento')
				var _ulwrapdiv	= $(document.createElement('div')).attr("id","div_1_consulta_movimiento_numeros").css('overflow','hidden');

			//Auditoria
			if (capa == 'auditoria')
				var _ul	= $(document.createElement('ul')).attr("id","div_1_traza_auditoria_paginasGlobal").addClass('jPag-pages');
			//Consulta Usuarios
			else if (capa == 'usuarios')
				var _ul	= $(document.createElement('ul')).attr("id","div_1_consulta_usuarios_paginasGlobal").addClass('jPag-pages');
			//Consulta movimiento
			else if (capa == 'movimiento')
				var _ul	= $(document.createElement('ul')).attr("id","div_1_consulta_movimiento_paginasGlobal").addClass('jPag-pages');
		
		var c = (o.display - 1) / 2;
		var first = selectedpage - c;
		var selobj;
		
			for(var i = 0; i < o.count; i++)
			{
				var val = i+1;
				
					if(val == selectedpage)
					{
							//Auditoria
							if (capa == 'auditoria')
								var _obj = $(document.createElement('li')).html('<span class="jPag-current" id="div_1_traza_auditoria_paginaSeleccionada">'+val+'</span>');
							//Consulta Usuarios
							else if (capa == 'usuarios')
								var _obj = $(document.createElement('li')).html('<span class="jPag-current" id="div_1_consulta_usuarios_paginaSeleccionada">'+val+'</span>');
							//Consulta movimiento
							else if (capa == 'movimiento')
								var _obj = $(document.createElement('li')).html('<span class="jPag-current" id="div_1_consulta_movimiento_paginaSeleccionada">'+val+'</span>');
							
						selobj = _obj;
						_ul.append(_obj);
					}
					else
					{
							//Auditoria
							if (capa == 'auditoria')
								var _obj = $(document.createElement('li')).attr("id","div_1_traza_auditoria_paginas").html('<a>'+ val +'</a>');
							//Consulta Usuarios
							else if (capa == 'usuarios')
								var _obj = $(document.createElement('li')).attr("id","div_1_consulta_usuarios_paginas").html('<a>'+ val +'</a>');
							//Consulta movimiento
							else if (capa == 'movimiento')
								var _obj = $(document.createElement('li')).attr("id","div_1_consulta_movimiento_paginas").html('<a>'+ val +'</a>');
						
						
						_ul.append(_obj);
					}
			}
			
		_ulwrapdiv.append(_ul);
		
			if(o.rotate)
			{
				if(o.images)
				{
						//Auditoria
						if (capa == 'auditoria')
							var _rotright = $(document.createElement('span')).attr("id","div_1_traza_auditoria_siguienteGlobal").addClass(snextclass);
						//Consulta Usuarios
						else if (capa == 'usuarios')
							var _rotright = $(document.createElement('span')).attr("id","div_1_consultaa_usuarios_siguienteGlobal").addClass(snextclass);
						//Consulta movimiento
						else if (capa == 'movimiento')
							var _rotright = $(document.createElement('span')).attr("id","div_1_consultaa_movimiento_siguienteGlobal").addClass(snextclass);
				}
				else
					var _rotright = $(document.createElement('span')).addClass(snextclass).html('&raquo;');
			}

			//Auditoria
			if (capa == 'auditoria')
				var _last = $(document.createElement('a')).attr("id","div_1_traza_auditoria_siguiente").addClass('jPag-last2');
			//Consulta Usuarios
			else if (capa == 'usuarios')
				var _last = $(document.createElement('a')).attr("id","div_1_consulta_usuarios_siguiente").addClass('jPag-last2');
			//Consulta movimiento
			else if (capa == 'movimiento')
				var _last = $(document.createElement('a')).attr("id","div_1_consulta_movimiento_siguiente").addClass('jPag-last2');

			//Auditoria
			if (capa == 'auditoria')
				var _divwrapright = $(document.createElement('div')).attr("id","div_1_traza_auditoria_botonesSiguiente").addClass('jPag-control-front');
			//Consulta Usuarios
			else if (capa == 'usuarios')
				var _divwrapright = $(document.createElement('div')).attr("id","div_1_consulta_usuarios_botonesSiguiente").addClass('jPag-control-front');
			//Consulta movimiento
			else if (capa == 'movimiento')
				var _divwrapright = $(document.createElement('div')).attr("id","div_1_consulta_movimiento_botonesSiguiente").addClass('jPag-control-front');
		
		
		_divwrapright.append(_rotright).append(_last);
		$this.addClass('jPaginate').append(_divwrapleft).append(_ulwrapdiv).append(_divwrapright);
			
			if(!o.border)
			{
				if(o.background_color == 'none')
					var a_css = {'color':o.text_color};
				else
					var a_css = {'color':o.text_color,'background-color':o.background_color};
				
				if(o.background_hover_color == 'none')
					var hover_css = {'color':o.text_hover_color};
				else
					var hover_css = {'color':o.text_hover_color,'background-color':o.background_hover_color};	
			}
			else
			{
				if(o.background_color == 'none')
					var a_css = {'color':o.text_color,'border':'1px solid '+o.border_color};
				else
					var a_css = {'color':o.text_color,'background-color':o.background_color,'border':'1px solid '+o.border_color};
				
				if(o.background_hover_color == 'none')
					var hover_css = {'color':o.text_hover_color,'border':'1px solid '+o.border_hover_color};
				else
					var hover_css = {'color':o.text_hover_color,'background-color':o.background_hover_color,'border':'1px solid '+o.border_hover_color};
			}
		
		$.fn.applystyle(o, $this, a_css, hover_css, _first, _ul, _ulwrapdiv, _divwrapright);
		
		//calculate width of the ones displayed:
		var outsidewidth = outsidewidth_tmp - _first.parent().width() -3;
			
			if(ver == 'ie7')
			{
				_ulwrapdiv.css('width',outsidewidth+72+'px');
				_divwrapright.css('left',outsidewidth_tmp+6+72+'px');
			}
			else
			{		
				_ulwrapdiv.css('width',outsidewidth+'px');
				_divwrapright.css('left',outsidewidth_tmp+6+'px');
			}			
		
			if(o.rotate)
			{
				_rotright.hover(
					function() {
					  thumbs_scroll_interval = setInterval(
						function() {
						  var left = _ulwrapdiv.scrollLeft() + 1;
						  _ulwrapdiv.scrollLeft(left);
						},
						20
					  );
					},
					function() {
					  clearInterval(thumbs_scroll_interval);
					}
				);
				_rotleft.hover(
					function() {
					  thumbs_scroll_interval = setInterval(
						function() {
						  var left = _ulwrapdiv.scrollLeft() - 1;
						  _ulwrapdiv.scrollLeft(left);
						},
						20
					  );
					},
					function() {
					  clearInterval(thumbs_scroll_interval);
					}
				);
				
				if(o.mouse == 'press')
				{
					_rotright.mousedown
					(
						function()
						{
							thumbs_mouse_interval = setInterval(
								function()
								{
									var left = _ulwrapdiv.scrollLeft() + 5;
									_ulwrapdiv.scrollLeft(left);
								},
								20
							);
						}
					).mouseup
					(
						function()
						{
							clearInterval(thumbs_mouse_interval);
						}
					);
					_rotleft.mousedown
					(
						function()
						{
							thumbs_mouse_interval = setInterval
							(
								function()
								{
									var left = _ulwrapdiv.scrollLeft() - 5;
									_ulwrapdiv.scrollLeft(left);
								},
								20
							);
						}
					).mouseup
					(
						function()
						{
							clearInterval(thumbs_mouse_interval);
						}
					);
				}
				else
				{
					_rotleft.click(function(e)
					{
						var width = outsidewidth - 10;
						var left = _ulwrapdiv.scrollLeft() - width;
						_ulwrapdiv.animate({scrollLeft: left +'px'});
					});	
					
					_rotright.click(function(e)
					{
						var width = outsidewidth - 10;
						var left = _ulwrapdiv.scrollLeft() + width;
						_ulwrapdiv.animate({scrollLeft: left +'px'});
					});
				}
			}
			
			//Auditoria
			if (capa == 'auditoria')
			{
				var medidaDiv1 = parseInt($('#div_1_traza_auditoria_botonesAnterior').width());
				var medidaDiv2 = parseInt($('#div_1_traza_auditoria_numeros').width());
				var medidaDiv3 = parseInt($('#div_1_traza_auditoria_botonesSiguiente').width());
				var medidaDiv4 = parseInt($('#div_1_traza_auditoria_paginacion').width());
				var medidaDiv5 = parseInt($('#div_1_traza_auditoria_paginacionGlobal').width());
				var medidaDiv = medidaDiv1 + medidaDiv2 + medidaDiv3;
				medidaLado1 = parseInt((medidaDiv5 - medidaDiv) / 2); 
				$('#div_1_traza_auditoria_paginacion').width(medidaDiv);
				$('#div_1_traza_auditoria_paginacion').css('left', medidaLado1 + 'px');
				$('#div_1_traza_auditoria_paginacion').css('right', medidaLado1 + 'px');
			}
			//Consulta Usuarios
			else if (capa == 'usuarios')
			{
				var medidaDiv1 = parseInt($('#div_1_consulta_usuarios_botonesAnterior').width());
				var medidaDiv2 = parseInt($('#div_1_consulta_usuarios_numeros').width());
				var medidaDiv3 = parseInt($('#div_1_consulta_usuarios_botonesSiguiente').width());
				var medidaDiv4 = parseInt($('#div_1_consulta_usuarios_paginacion').width());
				var medidaDiv5 = parseInt($('#div_1_consulta_usuarios_paginacionGlobal').width());
				var medidaDiv = medidaDiv1 + medidaDiv2 + medidaDiv3;
				medidaLado1 = parseInt((medidaDiv5 - medidaDiv) / 2); 
				$('#div_1_consulta_usuarios_paginacion').width(medidaDiv);
				$('#div_1_consulta_usuarios_paginacion').css('left', medidaLado1 + 'px');
				$('#div_1_consulta_usuarios_paginacion').css('right', medidaLado1 + 'px');
			}
			//Consulta movimiento
			else if (capa == 'movimiento')
			{
				var medidaDiv1 = parseInt($('#div_1_consulta_movimiento_botonesAnterior').width());
				var medidaDiv2 = parseInt($('#div_1_consulta_movimiento_numeros').width());
				var medidaDiv3 = parseInt($('#div_1_consulta_movimiento_botonesSiguiente').width());
				var medidaDiv4 = parseInt($('#div_1_consulta_movimiento_paginacion').width());
				var medidaDiv5 = parseInt($('#div_1_consulta_movimiento_paginacionGlobal').width());
				var medidaDiv = medidaDiv1 + medidaDiv2 + medidaDiv3;
				medidaLado1 = parseInt((medidaDiv5 - medidaDiv) / 2); 
				$('#div_1_consulta_movimiento_paginacion').width(medidaDiv);
				$('#div_1_consulta_movimiento_paginacion').css('left', medidaLado1 + 'px');
				$('#div_1_consulta_movimiento_paginacion').css('right', medidaLado1 + 'px');
			}
		
		//first and last:
		_first.click(function(e)
		{
			_ulwrapdiv.animate({scrollLeft: '0px'});
			_ulwrapdiv.find('li').eq(0).click();
		});
		
		_last.click(function(e)
		{
			_ulwrapdiv.animate({scrollLeft: insidewidth +'px'});
			_ulwrapdiv.find('li').eq(o.count - 1).click();
		});
		
		//click a page
		_ulwrapdiv.find('li').click(function(e)
		{
			//Saber quien lo llama
			var div_separado = $(this).parent().attr('id').split("_");
			
			//MODIFICADO
			selobj.html('<a>'+selobj.find('.jPag-current').html()+'</a>');
			
			//MODIFICADO
			var currval = $(this).find('a').html();
			$(this).html('<span class="jPag-current">'+currval+'</span>');
			selobj = $(this);
			$.fn.applystyle(o, $(this).parent().parent().parent(), a_css, hover_css, _first, _ul, _ulwrapdiv, _divwrapright);	
			var left = (this.offsetLeft) / 2;
			var left2 = _ulwrapdiv.scrollLeft() + left;
			var tmp = left - (outsidewidth / 2);
			
				if(ver == 'ie7')
					_ulwrapdiv.animate({scrollLeft: left + tmp - _first.parent().width() + 52 + 'px'});	
				else
					_ulwrapdiv.animate({scrollLeft: left + tmp - _first.parent().width() + 'px'});
			
			//div_separado[3] -> Cambiando esto se puede obtener cualquier parte del nombre del div 
			o.onChange(currval, div_separado[3]);
		});
		
		var last = _ulwrapdiv.find('li').eq(o.start-1);
		last.attr('id','tmp');
		var left = document.getElementById('tmp').offsetLeft / 2;
		last.removeAttr('id');
		var tmp = left - (outsidewidth / 2);
		
			if(ver == 'ie7')
				_ulwrapdiv.animate({scrollLeft: left + tmp - _first.parent().width() + 52 + 'px'});	
			else
				_ulwrapdiv.animate({scrollLeft: left + tmp - _first.parent().width() + 'px'});
		
			if (o.display == 1)
			{
				//Auditoria
				if (capa == 'auditoria')
				{
					$('#div_1_traza_auditoria_paginacion').css('padding-left', '56px');
					$('#div_1_traza_auditoria_paginacion').css('width', '128px');
					$('#div_1_traza_auditoria_paginacion').css('left', '523px');
					$('#div_1_traza_auditoria_paginacion').css('right', '523px');
					$('#div_1_traza_auditoria_numeros').css('width', '26px');
					$('#div_1_traza_auditoria_botonesSiguiente').css('left', '86px');
				}
				//Consulta Usuarios
				else if (capa == 'usuarios')
				{
					$('#div_1_consulta_usuarios_paginacion').css('padding-left', '56px');
					$('#div_1_consulta_usuarios_paginacion').css('width', '128px');
					$('#div_1_consulta_usuarios_paginacion').css('left', '523px');
					$('#div_1_consulta_usuarios_paginacion').css('right', '523px');
					$('#div_1_consulta_usuarios_numeros').css('width', '26px');
					$('#div_1_consulta_usuarios_botonesSiguiente').css('left', '86px');
				}
				//Consulta movimiento
				else if (capa == 'movimiento')
				{
					$('#div_1_consulta_movimiento_paginacion').css('padding-left', '56px');
					$('#div_1_consulta_movimiento_paginacion').css('width', '128px');
					$('#div_1_consulta_movimiento_paginacion').css('left', '523px');
					$('#div_1_consulta_movimiento_paginacion').css('right', '523px');
					$('#div_1_consulta_movimiento_numeros').css('width', '26px');
					$('#div_1_consulta_movimiento_botonesSiguiente').css('left', '86px');
				}
			}
	}
	
	$.fn.applystyle = function(o,obj,a_css,hover_css,_first,_ul,_ulwrapdiv,_divwrapright)
	{
		obj.find('a').css(a_css);
		obj.find('span.jPag-current').css(hover_css);
		obj.find('a').hover(
			function(){
				$(this).css(hover_css);
			},
			function(){
				$(this).css(a_css);
			}
			);
		
		obj.css('padding-left',_first.parent().width() + 5 +'px');
		insidewidth = 0;
		
		obj.find('li').each(function(i,n)
		{
				if (i == (o.display-1))
				{
					outsidewidth_tmp = this.offsetLeft + this.offsetWidth;
				}
			insidewidth += this.offsetWidth;
		})
		
		_ul.css('width',insidewidth+'px');
	}
})(jQuery);