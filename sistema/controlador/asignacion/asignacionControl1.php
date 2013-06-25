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
		$arrResultado["vista"] = "asignacion/asignacionInventario.php";
		echo json_encode( $arrResultado );
	break;
		
	/* Registrar Dependencia */
	case 1:
		include_once '../../modelo/asignacion/asignacionClass.php';
		$databaseManager = new baseDatos();
		$asignacion = new asignacion($databaseManager);
        
                
		//Id_acta
		$asignacion->setId_Acta($_POST['nActa']);
		
		$asignacion->setRadio($_POST['control']);
		
		//NumOrden
		$asignacion->setId_Orden($_POST['nOrden']);
		
		//Fecha Orden
		$asignacion->setFecha_Orden($_POST['fechaOrden']);
		
		//Num Factura
		$asignacion->setId_Factura($_POST['nFactura']);
		
		//Fecha Orden
		$asignacion->setFecha_Factura($_POST['fechaFactura']);
		
		//Combo proveedor
		$asignacion->setId_Rif($_POST['cbo_proveedor']);
		
		//Combo dependencia
		$asignacion->setId_Depe($_POST['cbo_dependencia']);
		
		//Combo coordinacion
		$asignacion->setId_Direccion($_POST['cbo_direccion']);
		
		
		//Combo unidad
		$asignacion->setId_Unidad($_POST['cbo_unidad']);
		
		//Combo coordinacion
		$asignacion->setId_Coordinacion($_POST['cbo_coordinacion']);
		
	/*	$fechaFactura = explode("/", $_POST['fechaFactura']);
		$fechaF= $fechaFactura[2].'-'.$fechaFactura[1].'-'.$fechaFactura[0];
	
		$fechaOrden = explode("/", $_POST['fechaOrden']);
		$fechaO = $fechaOrden[2].'-'.$fechaOrden[1].'-'.$fechaOrden[0];
		
		$fechaRegistro = date('Y-m-d');*/
		//echo $fechaRegistro;
		///Arreglo
		//Num inventario
		$asignacion->setArrId_Inve($_POST['asignaNumeroBien']);
		
		$asignacion->setArrRadio($_POST['control']);
		
		//Fecha Orden
		$asignacion->setArrId_SubGrupo($_POST['asignaComboSubGrupo']);
		
		//Combo proveedor
		$asignacion->setArrId_Seccion($_POST['asignaComboSeccion']);
		
		//Combo dependencia
		$asignacion->setArrId_Producto($_POST['asignaActivoReal']);
		
		//Combo unidad
		$asignacion->setArrPrecio($_POST['asignaCostoPrecio']);
		
		//Combo coordinacion
		$asignacion->setArrCaracteristica($_POST['asignaCaracteristica']);
		
			  	
	  	$id_asig = $asignacion->getArrId_Inve();
		$id_subgrupo = $asignacion->getArrId_SubGrupo();
		$id_seccion =  $asignacion->getArrId_Seccion();
	    $id_producto = $asignacion->getArrId_Producto();
	    $precio = $asignacion->getArrPrecio();
	    $caracteristica = $asignacion->getArrCaracteristica();
	    $radio = $asignacion->getArrRadio();
	   // print_r($id_asig);
	   //$asignacion->insertarCompra($fechaF, $fechaO, $fechaRegistro);
	   
	    foreach ($id_asig[0] as $key => $value) 
	    { 
	       $numBien = $id_asig[0][$key];
	       $numSubg = $id_subgrupo[0][$key];
	       $numSecc = $id_seccion[0][$key];
	       $numProd = $id_producto[0][$key];
	       $bsf = $precio[0][$key];
	       $carac = $caracteristica[0][$key];
	       $radio = $radio[0][$key];
	     
	       $asignacion->insertar($numBien, $numSubg, $numSecc, $numProd, $bsf, $carac, $radio);
	      
	     }
         
   break;
	case 2:
		$arrResultado["vista"] = "asignacion/consultarAsignacionInventario.php";
		echo json_encode( $arrResultado );
	break;
	
	
	case 3:
		include_once '../../modelo/asignacion/asignacionClass.php';
		$databaseManager = new baseDatos();
		$asignacion = new asignacion($databaseManager);
		$asignacion->setId_Orden($_POST['numOrden']);
		$asignacion->consultarAsignacion( );
		$_SESSION['ArrId_Acta'] = $asignacion->getArrId_Acta();
		$_SESSION['ArrFecha_Orden'] = $asignacion->getArrFecha_Orden();
		$_SESSION['ArrFecha_Orden'] = $asignacion->getArrId_Factura();
		$_SESSION['ArrId_Rif'] = $asignacion->getArrId_Rif();
		$_SESSION['ArrId_Coordinacion'] = $asignacion->getArrId_Coordinacion();
		$_SESSION['ArrId_Depe'] = $asignacion->getArrId_Depe();
		$_SESSION['ArrId_Unidad'] = $asignacion->getArrId_Unidad();
		$_SESSION['ArrId_Direccion'] = $asignacion->getArrId_Direccion();		
	
				
				
				
		 echo $stsUrl = "asignacion/consultarAsignacionInventario.php";
		 echo json_encode($arrResultado);
		//	$_SESSION['ArrId_Depe'] = $objMantenimiento->getArrId_Depe();
        //$_SESSION['ArrDescripcion'] = $objMantenimiento->getArrDescripcion();
		
		//echo json_encode( $arrResultado );
		/*
		 $numeroOrden= $asignacion->setId_Orden($_REQUEST['numOrden']);
	*/
		 
		
		
	/*	
        $intTotalConsulta = $objMantenimiento->ConsultarDireccion(1, $usuario1[1]);
        $_SESSION['contadorRegistro'] = $intTotalConsulta;
        $intTotalConsulta = $objMantenimiento->ConsultarDireccion(0, $usuario1[1]);
        $_SESSION['ArrId_Dire'] = $objMantenimiento->getArrId_Dire();
        $_SESSION['ArrDescripcionDire'] = $objMantenimiento->getArrDescripcionDire();
        $_SESSION['ArrNombreDepe'] = $objMantenimiento->getArrDescripcion();
        $_SESSION['ArrId_Depe'] = $objMantenimiento->getArrId_Depe();
        echo $stsUrl = "mantenimiento/registrarDireccion.php";
        // echo $_SESSION['ArrId_Dire'];
		echo"<table border='1'>";
		echo"<tr>";
		echo"<td>";
		echo"</td>";
		echo"</tr>";
		echo"</table>";
		
		/*include_once '../../modelo/asignacion/asignacionClass.php';
		$databaseManager = new baseDatos();
		$asignacion = new asignacion($databaseManager);
		
		
		 $numeroOrden= $asignacion->setId_Orden($_POST['numOrden']);
		 
		
		$asignacion->consultaAsignacion( $nOrden);
		
	    echo json_encode($arrResultado);*/
	
     
    
    break;

   
	
	
}/*FIN DEL SWITCH*/
?>
