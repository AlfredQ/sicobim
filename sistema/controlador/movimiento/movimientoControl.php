<?php session_start();
/*
 * < mantenimientoControl.php >
 *
 * < Creacion: Miercoles 20 de Febrero de 2013 >
 *
 * < Ultima Modificacion:  >
 *
 * < Version: 1.0 >
 *
 * < Desarrollador: Milagros Negrin >
 *
 * < Nota: Controlador que pertenece al menu de mantenimiento>
 *
 * */

/*CASOS*/

//echo "sesion>>>".$_SESSION["stsLoginUsuario_sicobim"].".<<session";
$opc = 0;
$opc = $_GET['opc'];
$resRegistrado = '';
$usuario = $_SESSION['stsLoginUsuario_sicobim'];
$usuario1 = explode("_", $usuario);

//echo $pieces[1];


switch ($opc)
{
	/************CARGAR VISTAS*************/
	/* Cargar vista Registrar Asignacion de inventario */
	case 0:
		$arrResultado["vista"] = "movimiento/movimientoInventario.php";
		echo json_encode( $arrResultado );
	break;
		
	
    /* Cargar vista Registrar Direccion */
	case 1:
		include_once '../../modelo/mantenimiento/mantenimientoClass.php';
		$databaseManager = new baseDatos();
		$objMantenimiento = new mantenimiento($databaseManager);
		$intTotalConsulta=$objMantenimiento->ConsultarDireccion(1);
		$_SESSION['contadorRegistro'] = $intTotalConsulta;	
		$intTotalConsulta=$objMantenimiento->ConsultarDireccion(0);
		$_SESSION['ArrId_Dire'] = $objMantenimiento->getArrId_Dire();
		$_SESSION['ArrDescripcionDire'] = $objMantenimiento->getArrDescripcionDire();
		$_SESSION['ArrNombreDepe'] = $objMantenimiento->getArrDescripcion();
		$_SESSION['ArrId_Depe'] = $objMantenimiento->getArrId_Depe();
		echo $stsUrl= "mantenimiento/registrarDireccion.php";
	break;


	
	
	/*****************REGISTRAR**********************/	
	/* Registrar asignacion de bienes */
	case 10:
		
		include_once '../../modelo/mantenimiento/mantenimientoClass.php';
		$databaseManager = new baseDatos();
		$asignacion = new asignacion($databaseManager);

		
		$asignacion->setId_Depe($_POST['nrocuenta']);
		
		//Id_orga
		$asignacion->setId_Orga($_POST['orga']);
		
		//Descripcion
		$asignacion->setDescripcion($_POST['denominacion']);
		
		//Status
		$asignacion->setStatus($_POST['status']);

		if ($_POST["intIdFila"]=="")// REGISTRA dependencia
		{	
			if ($mantenimiento->insertarDependencia()==TRUE)
			{
				$resultado["error"] = "0";
				$resultado["msj"] = "La Dependencia se ha Registrada Éxitosamente";
			}
			else
			{
				$resultado["error"] = "1";
				$resultado["msj"] = "No se pudo Registrar";
			}
		}
		else//MODIFICA concepto
		{
		//id_depe
		$mantenimiento->setId_Depe($_POST['intIdFila']);
		
		//Id_orga
		$mantenimiento->setId_Orga($_POST['orga']);
		
		//Descripcion
		$mantenimiento->setDescripcion($_POST['denominacion']);
		
		//Status
		$mantenimiento->setStatus($_POST['status']);
		

			$bolResultado=$mantenimiento->modificarDependencia();
			
			if ($bolResultado==TRUE)
			{
				$resultado['error']=0;
				$resultado['msj']='Modificado Exitosamente';
			}	
			else
			{
				$resultado['error']=1;
				$resultado['msj']='Problemas al Modificar';
			}	
		}

		echo json_encode($resultado);
	break;
	
	/* Registrar Direccion */
	case 11:
		
		include_once '../../modelo/mantenimiento/mantenimientoClass.php';
		$databaseManager = new baseDatos();
		$mantenimiento = new mantenimiento($databaseManager);

		//id_dire
		$mantenimiento->setId_Dire($_POST['nrocuenta']);	
		//Descripcion
		$mantenimiento->setDescripcionDire($_POST['denominacion']);		
		//Id_orga
		$mantenimiento->setId_Orga($_POST['orga']);
		//cbo_dependecias
		$mantenimiento->setId_Depe($_POST['cbo_dependencia']);
			//echo ">>>>".$_POST['cbo_dependencia']."<<<<";
		//Status
		$mantenimiento->setStatus($_POST['status']);
	
		if ($_POST["intIdFila"]=="")// REGISTRA DIRECCION
		{	
			if ($mantenimiento->insertarDireccion()==TRUE)
			{
				$resultado["error"] = "0";
				$resultado["msj"] = "La Direcci&oacute;n se ha Registrada Éxitosamente";
			}
			else
			{
				$resultado["error"] = "1";
				$resultado["msj"] = "No se pudo Registrar";
			}
		}
		else//MODIFICA concepto
		{
		//id_depe
		$mantenimiento->setId_Dire($_POST['intIdFila']);
		//Descripcion
		$mantenimiento->setDescripcion($_POST['denominacion']);		
		//id_depe
		$mantenimiento->setId_Depe($_POST['cbo_dependencia']);		

			$bolResultado=$mantenimiento->modificarDireccion();
			
			if ($bolResultado==TRUE)
			{
				$resultado['error']=0;
				$resultado['msj']='Modificado Exitosamente';
			}	
			else
			{
				$resultado['error']=1;
				$resultado['msj']='Problemas al Modificar';
			}	
		}

		echo json_encode($resultado);
		
	break;
	
	/* Registrar Unidad */
	case 12:
		include_once '../../modelo/mantenimiento/mantenimientoClass.php';
		$databaseManager = new baseDatos();
		$mantenimiento = new mantenimiento($databaseManager);

		//unidada
		$mantenimiento->setId_Unidad($_POST['nrocuenta']);	
		//Descripcion unidad
		$mantenimiento->setDescripcionUnidad($_POST['denominacion']);	
				
		//Id_orga
		$mantenimiento->setId_Orga($_POST['orga']);
		
		//cbo_dependecias
		$mantenimiento->setId_Depe($_POST['cbo_dependencia']);
		//cbo_direccion
		$mantenimiento->setId_Dire($_POST['cbo_direccion']);
		
		//Status
		$mantenimiento->setStatus($_POST['status']);
	
		if ($_POST["intIdFila"]=="")// REGISTRA DIRECCION
		{	
			if ($mantenimiento->insertarUnidad()==TRUE)
			{
				$resultado["error"] = "0";
				$resultado["msj"] = "La Unidad se ha Registrada Éxitosamente";
			}
			else
			{
				$resultado["error"] = "1";
				$resultado["msj"] = "No se pudo Registrar";
			}
		}
		else//MODIFICA Unidad
		{
			//unidad
		$mantenimiento->setId_Unidad($_POST['intIdFila']);	
		
		//Descripcion unidad
		$mantenimiento->setDescripcionUnidad($_POST['denominacion']);	
				
		//Id_orga
		$mantenimiento->setId_Orga($_POST['orga']);
		
		//cbo_dependecias
		$mantenimiento->setId_Depe($_POST['cbo_dependencia']);
		
		//cbo_direccion
		$mantenimiento->setId_Dire($_POST['cbo_direccion']);
		
		//Status
		$mantenimiento->setStatus($_POST['status']);
			

		$bolResultado=$mantenimiento->modificarUnidad();
			
			if ($bolResultado==TRUE)
			{
				$resultado['error']=0;
				$resultado['msj']='Modificado Exitosamente';
			}	
			else
			{
				$resultado['error']=1;
				$resultado['msj']='Problemas al Modificar';
			}	
		}

		echo json_encode($resultado);
	break;
	
	/* Registrar Coordinacion */
	case 13:
		include_once '../../modelo/mantenimiento/mantenimientoClass.php';
		$databaseManager = new baseDatos();
		$mantenimiento = new mantenimiento($databaseManager);

		//Coordinacion
		$mantenimiento->setId_Coor($_POST['nrocuenta']);	
		
     	//denominacion Coordinacion
		$mantenimiento->setDescripcionCoor($_POST['denominacion']);	
		
		//cbo_dependecias
		$mantenimiento->setId_Depe($_POST['cbo_dependencia']);
		
		//cbo_direccion
		$mantenimiento->setId_Dire($_POST['cbo_direccion']);
		
		//cbo_unidad
		$mantenimiento->setId_Unidad($_POST['cbo_unidad']);
		
				
		//Id_orga
		$mantenimiento->setId_Orga($_POST['orga']);
						
		//Status
		$mantenimiento->setStatus($_POST['status']);
		
		if ($_POST["intIdFila"]=="")// REGISTRA DIRECCION
		{	
			if ($mantenimiento->insertarCoordinacion()==TRUE)
			{
				$resultado["error"] = "0";
				$resultado["msj"] = "La Coordinación se ha Registrada Éxitosamente";
			}
			else
			{
				$resultado["error"] = "1";
				$resultado["msj"] = "No se pudo Registrar";
			}
		}
		else//MODIFICA Unidad
		{
		//Coordinacion
		$mantenimiento->setId_Coor($_POST['intIdFila']);	

		//denominacion Coordinacion
		$mantenimiento->setDescripcionCoor($_POST['denominacion']);	
		
		//cbo_dependecias
		$mantenimiento->setId_Depe($_POST['cbo_dependencia']);
		
		//cbo_direccion
		$mantenimiento->setId_Dire($_POST['cbo_direccion']);
		
		//cbo_unidad
		$mantenimiento->setId_Unidad($_POST['cbo_unidad']);
		
		/*		
		//Id_orga
		$mantenimiento->setId_Orga($_POST['orga']);
						
		//Status
		$mantenimiento->setStatus($_POST['status']);*/
		

		$bolResultado=$mantenimiento->modificarCoordinacion();
			
			if ($bolResultado==TRUE)
			{
				$resultado['error']=0;
				$resultado['msj']='Modificado Exitosamente';
			}	
			else
			{
				$resultado['error']=1;
				$resultado['msj']='Problemas al Modificar';
			}	
		}

		echo json_encode($resultado);
	break;
	
	/* Cargar vista Registrar tipo de Concepto */
	case 14:
		include_once '../../modelo/mantenimiento/mantenimientoClass.php';
		$databaseManager = new baseDatos();
		$mantenimiento = new mantenimiento($databaseManager);

		//concepto
		$mantenimiento->setConcepto($_POST['concepto']);

		//denominacion
		$mantenimiento->setDenominacion($_POST['denominacion']);

		//cbo_tmovi
		$mantenimiento->setTipoConcepto($_POST['cbo_tmovi']);

		//	$mantenimiento->insertarTipoConcepto()	;
		if ($_POST["intIdFila"]=="")// REGISTRA CARGOS
		{	
			if ($mantenimiento->insertarTipoConcepto()==TRUE)
			{
				$resultado["error"] = "0";
				$resultado["msj"] = "El Concepto se ha Registrada Éxitosamente";
			}
			else
			{
				$resultado["error"] = "1";
				$resultado["msj"] = "No se pudo Registrar";
			}
		}
		else//MODIFICA concepto
		{
			//$intIdFila=trim($_POST["intIdFila"]-1);
			//$intCdConceptos=$_POST["cdConceptos$intIdFila"];
			
			
			$mantenimiento->setConcepto($_POST['intIdFila']);

			//denominacion
			$mantenimiento->setDenominacion($_POST['denominacion']);
	
			//cbo_tmovi
			$mantenimiento->setTipoConcepto($_POST['cbo_tmovi']);

			$bolResultado=$mantenimiento->modificarConceptos();
			
			if ($bolResultado==TRUE)
			{
				$resultado['error']=0;
				$resultado['msj']='Modificado Exitosamente';
			}	
			else
			{
				$resultado['error']=1;
				$resultado['msj']='Problemas al Modificar';
			}	
		}

		echo json_encode($resultado);
	break;
	
	
	/* Cargar vista Registrar SubGrupo */
	case 15:
		include_once '../../modelo/mantenimiento/mantenimientoClass.php';
		$databaseManager = new baseDatos();
		$mantenimiento = new mantenimiento($databaseManager);
			
		//codigo
		$mantenimiento->setCodigoSubGrupo($_POST['codigoSubGrupo']);

		//nombre
		$mantenimiento->setNombreSubGrupo($_POST['nombreSubGrupo']);

		//codigoGrupo
		$mantenimiento->setCodigoGrupo($_POST['codigoGrupo']);

		if ($_POST["intIdFila"]=="")// REGISTRA SubGrupo
		{
			if ($mantenimiento->insertarSubgrupo()==TRUE)
			{
				$resultado["error"] = "0";
				$resultado["msj"] = "El Subgrupo se ha Registrado Exitosamente";
			}
			else
			{
				$resultado["error"] = "1";
				$resultado["msj"] = "No se pudo Registrar";
			}
		}
		else//Modificar sub grupo
		{
				
			$mantenimiento->setCodigoSubGrupo($_POST['intIdFila']);
		
			$mantenimiento->setNombreSubGrupo($_POST['nombreSubGrupo']);

			$bolResultado=$mantenimiento->modificarSubGrupo();
			
			if ($bolResultado==TRUE)
			{
				$resultado['error']=0;
				$resultado['msj']='Modificado Exitosamente';
			}	
			else
			{
				$resultado['error']=1;
				$resultado['msj']='Problemas al Modificar';
			}	
		}	
		echo json_encode( $resultado );
	break;
	
	/* Cargar vista Registrar Seccion */
	case 16:
		
		include_once '../../modelo/mantenimiento/mantenimientoClass.php';
		$databaseManager = new baseDatos();
		$mantenimiento = new mantenimiento($databaseManager);

		//codigo
		$mantenimiento->setCodigoSeccion($_POST['codigoSeccion']);
		//nombreSeccion
		$mantenimiento->setNombreSeccion($_POST['nombreSeccion']);
		//cbo_subGrupo
		$mantenimiento->setCodigoSubGrupo($_POST['cbo_subGrupo']);

                
		if ($_POST["intIdFila"]=="")// Registrar seccion
		{	
			if ($mantenimiento->insertarSeccion()==TRUE)
			{
				$resultado["error"] = "0";
				$resultado["msj"] = "La seccion se ha Registrada Exitosamente";
			}
			else
			{
				$resultado["error"] = "1";
				$resultado["msj"] = "No se pudo Registrar";
			}
		}
		else//MODIFICA concepto
		{
			//$intIdFila=trim($_POST["intIdFila"]-1);
			//$intCdConceptos=$_POST["cdConceptos$intIdFila"];						
				//codigo
			$mantenimiento->setCodigoSeccion($_POST['intIdFila']);
			//nombreSeccion
			$mantenimiento->setNombreSeccion($_POST['nombreSeccion']);
			//cbo_subGrupo
			$mantenimiento->setNombreSubGrupo($_POST['cbo_subGrupo']);		
			$bolResultado=$mantenimiento->modificarSeccion();
			
			if ($bolResultado==TRUE)
			{
				$resultado['error']=0;
				$resultado['msj']='Modificado Exitosamente';
			}	
			else
			{
				$resultado['error']=1;
				$resultado['msj']='Problemas al Modificar';
			}	
		}

		echo json_encode($resultado);
	break;
	
	/* Cargar vista Registrar Activos reales*/
	case 17:
		include_once '../../modelo/mantenimiento/mantenimientoClass.php';
		$databaseManager = new baseDatos();
		$mantenimiento = new mantenimiento($databaseManager);

		//Nombre
		$mantenimiento->setNombreProd($_POST['nombreActivo']);	
		
     	//denominacion 
		$mantenimiento->setDescripcionProd($_POST['descripcion']);	
		
		//cbo_subGrupo
		$mantenimiento->setCodigoSubGrupo($_POST['cbo_subGrupo']);
		
		//cbo_seccion
		$mantenimiento->setCodigoSeccion($_POST['cbo_seccion']);
		
				
		if ($_POST["intIdFila"]=="")// REGISTRA DIRECCION
		{	
			if ($mantenimiento->insertarProducto()==TRUE)
			{
				$resultado["error"] = "0";
				$resultado["msj"] = "El activo real se ha Registrada Éxitosamente";
			}
			else
			{
				$resultado["error"] = "1";
				$resultado["msj"] = "No se pudo Registrar";
			}
		}
		else//modificar producto
		{
		//id producto
		$mantenimiento->setId_Prod($_POST['intIdFila']);	

		//Nombre
		$mantenimiento->setNombreProd($_POST['nombreActivo']);	
		
     	//denominacion 
		$mantenimiento->setDescripcionProd($_POST['descripcion']);	
		
		//cbo_subGrupo
		$mantenimiento->setCodigoSubGrupo($_POST['cbo_subGrupo']);
		
		//cbo_seccion
		$mantenimiento->setCodigoSeccion($_POST['cbo_seccion']);
		

		$bolResultado=$mantenimiento->modificarProducto();
			
			if ($bolResultado==TRUE)
			{
				$resultado['error']=0;
				$resultado['msj']='Modificado Exitosamente';
			}	
			else
			{
				$resultado['error']=1;
				$resultado['msj']='Problemas al Modificar';
			}	
		}

		echo json_encode($resultado);
	break;
	
	/* Cargar vista Registrar Proveedor */
	case 18:
		include_once '../../modelo/mantenimiento/mantenimientoClass.php';
		$databaseManager = new baseDatos();
		$mantenimiento = new mantenimiento($databaseManager);

		//rif tipo
		$mantenimiento->setRifTipo($_POST['cbo_rifTipo']);	
		
     	//rif id 
		$mantenimiento->setRifId($_POST['rifId']);	
		
		//denominacion
		$mantenimiento->setDenominacionPro($_POST['denominacionPro']);
		
		//Direccion
		$mantenimiento->setDireccionPro($_POST['direccionPro']);
		
		//Tlf
		$mantenimiento->setTlfPro($_POST['tlfPro']);
		
		//Status
		$mantenimiento->setStatusPro($_POST['status']);
		
		//Organizacion
		$mantenimiento->setId_Orga($_POST['id_orga']);
				
		if ($_POST["intIdFila"]=="")// Registrar proveedor
		{	
			if ($mantenimiento->insertarProveedor()==TRUE)
			{
				$resultado["error"] = "0";
				$resultado["msj"] = "El Proveedor se ha Registrada Éxitosamente";
			}
			else
			{
				$resultado["error"] = "1";
				$resultado["msj"] = "No se pudo Registrar";
			}
		}
		else//modificar proveedor
		{
			$rifmod=$_POST['intIdFila'];
			$rifM = explode("-", $rifmod);
		
     	//rif id 
		$mantenimiento->setRifId($rifM[1]);	
		
		//denominacion
		$mantenimiento->setDenominacionPro($_POST['denominacionPro']);
		
		//Direccion
		$mantenimiento->setDireccionPro($_POST['direccionPro']);
		
		//Tlf
		$mantenimiento->setTlfPro($_POST['tlfPro']);
		
		//Status
		$mantenimiento->setStatusPro($_POST['status']);
		
		//Organizacion
		$mantenimiento->setId_Orga($_POST['id_orga']);
		

		$bolResultado=$mantenimiento->modificarProveedor();
			
			if ($bolResultado==TRUE)
			{
				$resultado['error']=0;
				$resultado['msj']='Modificado Exitosamente';
			}	
			else
			{
				$resultado['error']=1;
				$resultado['msj']='Problemas al Modificar';
			}	
		}

		echo json_encode($resultado);
	break;
	
	case 19:
	     include_once '../../modelo/mantenimiento/mantenimientoClass.php';
			
			$databaseManager = new baseDatos();
			$objMantenimiento = new mantenimiento($databaseManager);
			
			$intTotalConsulta=$objMantenimiento->ConsultarTipoConcepto();
			
			if($intTotalConsulta!=0)
			{
			$arrResultado["error"] = "0";	
			}
			else
			{
			$arrResultado['error'] = 1;
			$arrResultado['msj'] ="No Existen Registros Cargados";
			}
		 	
			echo json_encode( $arrResultado );
			
		break;
		
		case 20:
			
			include_once '../../modelo/mantenimiento/mantenimientoClass.php';
			$databaseManager = new baseDatos();
			$mantenimiento = new mantenimiento($databaseManager);
			// explode para cortar el rif
			$id=trim($_GET["id"]);
			$rifMo = explode("-", $id);
			$rifM = 	$rifMo[1];
			
			$mantenimiento->setRifId($rifM);	
			$bolResultado=$mantenimiento->eliminarProveedor();
				
			if ($bolResultado==TRUE)
			{
				
				$arrResultado["error"] = 0;	
				$arrResultado['msj']='Eliminado Exitosamente';
			}	
			else
			{
				$arrResultado['error']=1;
				$arrResultado['msj']='Problemas al Eliminar';
			}
			

					
			echo json_encode($arrResultado);
			
		break;
	
	
	
	
	/***************************CONSULTAR***********************/
	
	
	
	/***************************MODIFICAR***********************/
	
	
	
	
	
	
}/*FIN DEL SWITCH*/
?>
