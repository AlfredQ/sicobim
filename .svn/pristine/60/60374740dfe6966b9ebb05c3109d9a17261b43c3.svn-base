<?php session_start();

/*
 * < controlRegistrosPaginador.php >
 *
 * < Creacion: Martes 19 de Junio de 2012 >
 *
 * < Ultima Modificacion: Martes 19 de Junio de 2012 >
 *
 * < Version: 1.0 >
 *
 * < Desarrollador: Darimer Torres >
 *
 * < Nota: controla los registros de los paginadores >
 *
 * */

$divRegistros = '';

	//Auditoria
	if ($_POST["option"] == 1)
	{
		include_once '../../modelo/usuarios/trazaUsuario.Class.php';
			
			$databaseManager = new baseDatos();
			$trazaUsuario = new trazaUsuario($databaseManager);
			
				if ($_POST['cbo_1_tipoMovimiento'] != '')
					$trazaUsuario->setStsTipoMovimientoTraza($_POST['cbo_1_tipoMovimiento']);
				
				if ($_POST['cbo_1_tabla'] != '')
					$trazaUsuario->setStsNbTablaTraza($_POST['cbo_1_tabla']);
				
				if ($_POST['fechaConsulta'] != '')
				{
					$sepFecha = explode("/", $_POST['fechaConsulta']);
					$trazaUsuario->setFecHrTraza($sepFecha[2]."-".$sepFecha[1]."-".$sepFecha[0]);
				}
				
				if ($_POST['cbo_1_nombreUsuario'] != '')
					$trazaUsuario->setStsNbBdUsuario($_POST['cbo_1_nombreUsuario']);
		
			$desde = (($_POST["page"] * 20) - 20);
			$resultadoConsulta = $trazaUsuario->consultarTrazaUsuario(1, $desde, 20);
			
				if (($trazaUsuario->getArrIntId() != null) && ($trazaUsuario->getArrIntId() != ''))
				{
				//	$arrResultado['IntId'] = $trazaUsuario->getArrIntId();
					$arrResultado['StsIpTraza'] = $trazaUsuario->getArrStsIpTraza();
					$arrResultado['StsTipoMovimientoTraza'] = $trazaUsuario->getArrStsTipoMovimientoTraza();
					$arrResultado['StsNbTablaTraza'] = $trazaUsuario->getArrStsNbTablaTraza();
					$arrResultado['IntIdRegistroTraza'] = $trazaUsuario->getArrIntIdRegistroTraza();
					$arrResultado['FecHrTraza'] = $trazaUsuario->getArrFecHrTraza();
					$arrResultado['StsNbBdUsuario'] = $trazaUsuario->getArrStsNbBdUsuario();
					$arrResultado['StsNbEsquema'] = $trazaUsuario->getArrStsNbEsquema();
					$arrResultado['totalRegistros'] = count($trazaUsuario->getArrStsNbEsquema());
					
						for ($i=0; $i<count($trazaUsuario->getArrStsNbEsquema()); $i++)
						{
							//Ip
							$divRegistros.= '<div id="celdaResultado798_115_inicio" style="clear:both;">';
							$divRegistros.= $arrResultado['StsIpTraza'][$i];
							$divRegistros.= '</div>';
			
							//Movimiento
							$divRegistros.= '<div id="celdaResultado798_84">';
							$divRegistros.= $arrResultado['StsTipoMovimientoTraza'][$i];
							$divRegistros.= '</div>';
							
							//Tabla
							$divRegistros.= '<div id="celdaResultado798_200">';
							$divRegistros.= $arrResultado['StsNbTablaTraza'][$i];
							$divRegistros.= '</div>';
							
							//Id Registro
							$divRegistros.= '<div id="celdaResultado798_84">';
							$divRegistros.= $arrResultado['IntIdRegistroTraza'][$i];
							$divRegistros.= '</div>';
							
							//Fecha
							$divRegistros.= '<div id="celdaResultado798_200">';
							$fechaSeparada1 = explode(" ", $arrResultado['FecHrTraza'][$i]);
							$fechaSeparada2 = explode("-", $fechaSeparada1[0]);
							$divRegistros.= $fechaSeparada2[2]."-".$fechaSeparada2[1]."-".$fechaSeparada2[0]." ".$fechaSeparada1[1];
							$divRegistros.= '</div>';
							
							//Usuario
							$divRegistros.= '<div id="celdaResultado798_185">';
							$divRegistros.= $arrResultado['StsNbBdUsuario'][$i];
							$divRegistros.= '</div>';
							
							//Esquema
							$divRegistros.= '<div id="celdaResultado798_120">';
							$divRegistros.= $arrResultado['StsNbEsquema'][$i];
							$divRegistros.= '</div>';
						}
				}
	}
	//Consulta Usuarios
	elseif ($_POST["option"] == 2)
	{
		$divRegistros = "";
		include_once '../../modelo/usuarios/usuarios.Class.php';
			
		$databaseManager = new baseDatos();
		$usuarios = new usuarios($databaseManager);
		
			if ($_POST['cedula'] != '')
				$usuarios->setStsNuCedulaUsuario($_POST['cedula']);
		//echo "-->".$_POST['cedula']."<--";
		$desde = (($_POST["page"] * 10) - 10);
		//$resultadoConsulta = 
		$usuarios->validarUsuarioTablaConsulta($desde, 10);
		 //print_r ($usuarios->getArrStsNuCedulaUsuario());
			if (($usuarios->getArrStsNuCedulaUsuario() != null) && ($usuarios->getArrStsNuCedulaUsuario() != ''))
			{
			//	$arrResultado['IntId'] = $usuarios->getArrIntId();
				$arrResultado['StsNuCedulaUsuario'] = $usuarios->getArrStsNuCedulaUsuario();
				$arrResultado['StsNbUsuario'] = $usuarios->getArrStsNbUsuario();
				$arrResultado['StsNbBdUsuario'] = $usuarios->getArrStsNbBdUsuario();
				$arrResultado['BolStUsuario'] = $usuarios->getArrBolStUsuario();
				$arrResultado['StsInTipoUsuario'] = $usuarios->getArrStsInTipoUsuario();
				$arrResultado['StsNuTelefono'] = $usuarios->getArrStsNuTelefono();
				$arrResultado['BolInControl'] = $usuarios->getArrBolInControl();
				$arrResultado['Login'] = $usuarios->getArrLogin();
				$arrResultado['TipoUsuario'] = $usuarios->getArrTipoUsuario();
				$arrResultado['EstatusUsuario'] = $usuarios->getArrEstatusUsuario();
				
				
					for ($i=0; $i<count($usuarios->getArrStsNuCedulaUsuario()); $i++)
					{
						$y = $i + 1;
						
						$divRegistros.= "<tr class='titleColor3'>";
						$divRegistros.= '<td style="border: #FFFFFF solid 1px;  width: 100px;">';
						$divRegistros.= $arrResultado['StsNuCedulaUsuario'][$i];
						$divRegistros.= '</td>';
						
						$divRegistros.= '<td style="border: #FFFFFF solid 1px; width: 160px;">';
						$divRegistros.= $arrResultado['StsNbUsuario'][$i];
						$divRegistros.= '</td>';
						
						$divRegistros.= '<td style="border: #FFFFFF solid 1px; width: 200px;">';
						$divRegistros.= $arrResultado['StsNbBdUsuario'][$i];
						$divRegistros.= '</td>';
						
						$divRegistros.= '<td style="border: #FFFFFF solid 1px; width: 200px;">';
						$divRegistros.= $arrResultado['TipoUsuario'][$i];
						$divRegistros.= '</td>';
						
						$divRegistros.= '<td style="border: #FFFFFF solid 1px; width: 80px;">';
						$divRegistros.= $arrResultado['EstatusUsuario'][$i];
						$divRegistros.= '</td>';
						
						$divRegistros.= '<td style="border: #FFFFFF solid 1px; width: 100px;">';
						$divRegistros.= $arrResultado['StsNuTelefono'][$i];
						$divRegistros.= '</td>';
						
						$divRegistros.= '<td style="border: #FFFFFF solid 1px; width: 40px;">';
						$divRegistros.= '<a class="modificaUsuario" href="javascript:void(0);" onClick="modificaUsuario('.$arrResultado["StsNuCedulaUsuario"][$i].');"><img  src="../../assets/img/edit.png" height="15" border="0" title="Modificar Usuario"/></a>';
						$divRegistros.= '</td>';
						$divRegistros.= "</tr>";
					}
			}
	}

		//Consulta Usuarios
	elseif ($_POST["option"] == 3)
	{
		//die("entro");
		$divRegistros = "";
            include_once '../../modelo/mantenimiento/mantenimientoClass.php';
			$objBaseDatos = new baseDatos();
			$objMantenimiento= new mantenimiento($objBaseDatos);
			
			if ($_GET['id'] != '')
				$objMantenimiento->setConcepto($_GET['id']);
			
		//echo "-->".$_POST['cedula']."<--";
		$desde = (($_POST["page"] * 10) - 10);
		//$resultadoConsulta = 
		$objMantenimiento->validarMovimientoTablaConsulta($desde, 10);
		 //print_r ($objMantenimiento->getArrStsNuCedulaUsuario());
			if (($objMantenimiento->getArrConcepto()!= null) && ($objMantenimiento->getArrConcepto() != ''))
			{
			//	$arrResultado['IntId'] = $objMantenimiento->getArrIntId();
				$arrResultado['ArrConcepto'] =$objMantenimiento->getArrConcepto();
				$arrResultado['ArrDenominacion'] =$objMantenimiento->getArrDenominacion();
				$arrResultado['ArrTipoConcepto'] =$objMantenimiento->getArrTipoConcepto();
				

				
				
					for ($i=0; $i<count($objMantenimiento->getArrConcepto()); $i++)
					{
						$y = $i + 1;
						
						$divRegistros.= "<tr class='titleColor3'>";
						$divRegistros.= '<td style="border: #FFFFFF solid 1px;  width: 100px;">';
						$divRegistros.= $y;
						$divRegistros.= '</td>';
						
						$divRegistros.= '<td style="border: #FFFFFF solid 1px; width: 160px;">';
						$divRegistros.= $arrResultado['ArrConcepto'][$i];
						$divRegistros.= '</td>';
						
						$divRegistros.= '<td style="border: #FFFFFF solid 1px; width: 200px;">';
						$divRegistros.= $arrResultado['ArrDenominacion'][$i];
						$divRegistros.= '</td>';
						
						$divRegistros.= '<td style="border: #FFFFFF solid 1px; width: 200px;">';
						$divRegistros.= $arrResultado['ArrTipoConcepto'][$i];
						$divRegistros.= '</td>';
						
						$divRegistros.= '<td style="border: #FFFFFF solid 1px; width: 40px;">';
						$divRegistros.= '<a class="modificarMovimiento" href="javascript:void(0);" onClick="modificarMovimiento('.$arrResultado["ArrConcepto"][$i].');"><img  src="../../assets/img/edit.png" height="15" border="0" title="Modificar Movimiento"/></a>';
						$divRegistros.= '<a class="eliminarMovimiento" href="javascript:void(0);" onClick="eliminarMovimiento('.$arrResultado["ArrConcepto"][$i].');"><img  src="../../assets/img/delete.png" height="15" border="0" title="Eliminar Movimiento"/></a>';
						$divRegistros.= '</td>';
						$divRegistros.= "</tr>";
					}
			}
	}
	
	
	
echo $divRegistros;?>