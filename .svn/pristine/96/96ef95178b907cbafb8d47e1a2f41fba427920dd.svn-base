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

	switch ($opc)
	{
		/* Consulta de todos los edificio */
		case 1:
			include_once '../../modelo/edificioClass.php';
		   	$databaseManager = new BaseDatos();
		    $edificio = new edificio($databaseManager);
		   	$edificio->obtenerEdificios('');
		break;
		
		/* Consulta los pisos dependiendo el codigo de edificio que se le envie */
		case 2:
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
			
		break;
			
			/* Consulta las oficinas dependiendo del piso que se le envie */
		case 3:
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
		break;
		
		/* Consulta de todos los edificio */
		case 4:
			if (isset($_GET['e']))
					$e = $_GET['e'];
				else
					$e = '';
			include_once '../../modelo/edificioClass.php';
		   	$databaseManager = new BaseDatos();
		    $edificio = new edificio($databaseManager);
		   	$edificio->obtenerEdificios($e);
		break;
		
	}/*FIN DEL SWITCH*/
?>
