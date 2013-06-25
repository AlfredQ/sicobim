<?php
/*
 * < CombosE_P_DControl.php >
 * 
 * < Creacion: Jueves 13 de Diciembre de 2012 >
 * 
 * < Desarrollador: Milagros Negrín >
 * 
 * < Nota: Combos dependientes(Edificio/Piso/Oficina)>
 * 
 * */

/*CASOS*/
$opc = 0;

$opc = $_GET['opc'];
$valor =$_GET['valor'];//agregada

	switch ($opc)
	{
		/* Consulta de todos los edificio */
		/*case 1:
			include_once '../../modelo/edificioClass.php';
		   	$databaseManager = new BaseDatos();
		    $edificio = new edificio($databaseManager);
		   	$edificio->obtenerEdificios('');
		break;*/
		
		/* Consulta los pisos dependiendo el codigo de edificio que se le envie */
	/*	case 2:
			include_once '../../modelo/piso.Class.php';
			$databaseManager = new BaseDatos();
			$piso = new piso($databaseManager);
			$piso->setIntCdEdificio($_POST['edificioElegido']);
	//echo $_POST['edificioElegido'];
			if (isset($_GET['m']))
				$m = $_GET['m'];
			else
				$m = '';

			echo $piso->obtenerPisos($m);
			
		break;*/
			
			/* Consulta las oficinas dependiendo del piso que se le envie */
		/*case 3:
			include_once '../../modelo/oficina.Class.php';
			$databaseManager = new BaseDatos();
			$oficina = new oficina($databaseManager);
			$oficina->setIntCdPiso($_POST['pisoElegido']);
			//echo $_POST['pisoElegido'];
		
				if (isset($_GET['p']))
					$p = $_GET['p'];
				else
					$p = '';
				
		echo $oficina->obtenerOficinas($p);
		break;*/
		/* Consulta de todos los edificio */
	/*	case 4:
			if (isset($_GET['e']))
					$e = $_GET['e'];
				else
					$e = '';
			include_once '../../modelo/edificioClass.php';
		   	$databaseManager = new BaseDatos();
		    $edificio = new edificio($databaseManager);
		   	$edificio->obtenerEdificios($e);
		break;*/

		/* Consulta de todos los subGrupos */
		case 1:
			include_once '../../modelo/mantenimiento/subGrupoClass.php';
			$databaseManager = new BaseDatos();
                  $combos = new combos($databaseManager);
		   	$combos->obtenerSubGrupo('');
		break;
		
		/* Consulta de todos las Seccion */
		case 5:
			include_once '../../modelo/mantenimiento/subGrupoClass.php';
			$databaseManager = new BaseDatos();
            $combos = new combos($databaseManager);
		   	$combos->setIntCdSeccion($_POST['subGrupoElegido']);

		   	if (isset($_GET['s']))
				$s = $_GET['s'];
			else
				$s = '';

			echo $combos->obtenerSeccion($s);
		break;
		
		/* Consulta de todos las Dependencia */
		case 2:
			include_once '../../modelo/mantenimiento/subGrupoClass.php';
			$databaseManager = new BaseDatos();
           	$combos = new combos($databaseManager);
		   	$combos->obtenerDependencia('');
		break;
		
		/* Consulta de todos las Direcciones */
			
		case 3: 
			include_once '../../modelo/mantenimiento/subGrupoClass.php';
			$databaseManager = new BaseDatos();
            $combos = new combos($databaseManager);
           	$combos->setIntCdDependencia($_POST['dependenciaElegida']);
		//	echo $_POST['dependenciaElegida'];
		   	if (isset($_GET['d']))
				$d = $_GET['d'];
			else
				$d = '';

			echo $combos->obtenerDireccion($d);
		break;
		
		/* Consulta de todos las Unidades */
		case 4:
			include_once '../../modelo/mantenimiento/subGrupoClass.php';
			$databaseManager = new BaseDatos();
 			$combos = new combos($databaseManager);
           	$combos->setIntCdDireccion($_POST['direccionElegida']);
		//	echo $_POST['dependenciaElegida'];
		   	if (isset($_GET['u']))
				$d = $_GET['u'];
			else
				$d = '';

			echo $combos->obtenerUnidad($u);
		break;
		
		/* Consulta de todos las Unidades */
		case 8:
			include_once '../../modelo/mantenimiento/subGrupoClass.php';
			$databaseManager = new BaseDatos();
 			$combos = new combos($databaseManager);
           	$combos->setIntCdUnidad($_POST['unidadElegida']);
		//	echo $_POST['dependenciaElegida'];
		   	if (isset($_GET['c']))
				$c = $_GET['c'];
			else
				$c = '';

			echo $combos->obtenerCoordinacion($c);
		break;
			/* Consulta de todos las Proveedor */
		case 6:
			include_once '../../modelo/mantenimiento/subGrupoClass.php';
			$databaseManager = new BaseDatos();
                  $combos = new combos($databaseManager);
		   	$combos->obtenerProveedor($valor);
		break;
		
			/* Consulta de todos los Productos */
		case 7:
			include_once '../../modelo/mantenimiento/subGrupoClass.php';
			$databaseManager = new BaseDatos();
                  $combos = new combos($databaseManager);
		   	$combos->obtenerProductos($valor);
		break;
		
	/*	case 4:
			include_once '../../modelo/mantenimiento/subGrupoClass.php';
		   	$databaseManager = new BaseDatos();
		    $combos = new $combos($databaseManager);
		   	$combos->$combos('');		   	
		break;
		
		case 5:
			include_once '../../modelo/mantenimiento/subGrupoClass.php';
			$databaseManager = new BaseDatos();
			$combos = new $combos($databaseManager);
			$combos->setIntCdDependencia($_POST['edificioElegido']);
		break;*/
		
	}/*FIN DEL SWITCH*/
?>
