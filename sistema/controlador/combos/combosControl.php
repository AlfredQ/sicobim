<?php

session_start();
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

/* CASOS */
$opc = 0;

$opc = $_GET['opc'];
$valor = $_GET['valor']; //agregada

$usuario = $_SESSION['stsLoginUsuario_sicobim'];
$usuario1 = explode("_", $usuario);

switch ($opc) {
    /* Consulta de todos las Dependencia */
    case 0:
        include_once '../../modelo/combos/dependenciaClass.php';
        $databaseManager = new BaseDatos();
        $dependencia = new dependencia($databaseManager);
        $dependencia->obtenerDependencia($valor);
        break;

    /* Consulta de todos las Direcciones segun dependencia */
    case 1:
        include_once '../../modelo/combos/direccionClass.php';
        $databaseManager = new BaseDatos();
        $direccion = new direccion($databaseManager);
        $direccion->setIntCdDependencia($_POST['dependenciaElegida']);
        echo $_POST['dependenciaElegida'];
        if (isset($_GET['d']))
            $d = $_GET['d'];
        else
            $d = '';

        echo $direccion->obtenerDireccion($d);
        break;

    /* Consulta de todos las Unidades segun direcciones */
    case 2:
        include_once '../../modelo/combos/unidadClass.php';
        $databaseManager = new BaseDatos();
        $unidad = new unidad($databaseManager);
        $unidad->setIntCdDireccion($_POST['direccionElegida']);
        //	echo $_POST['dependenciaElegida'];
        if (isset($_GET['u']))
            $d = $_GET['u'];
        else
            $d = '';

        echo $unidad->obtenerUnidad($u);
        break;

    /* Consulta de todos las Coordinaciones segun unidades */
    case 3:
        include_once '../../modelo/combos/coordinacionClass.php';
        $databaseManager = new BaseDatos();
        $coordinacion = new coordinacion($databaseManager);
        $coordinacion->setIntCdUnidad($_POST['unidadElegida']);
        //	echo $_POST['dependenciaElegida'];
        if (isset($_GET['c']))
            $c = $_GET['c'];
        else
            $c = '';

        echo $coordinacion->obtenerCoordinacion($c);
        break;

    /* Consultar de todos los subgrupo */
    case 4:
        include_once '../../modelo/combos/subGrupoClass.php';
        $databaseManager = new BaseDatos();
        $combos = new combos($databaseManager);
        $combos->obtenerSubGrupo($valor);
        break;

    /* Consulta de las Secciones segun subgrupo */
    case 5:
        include_once '../../modelo/combos/subGrupoClass.php';
        $databaseManager = new BaseDatos();
        $combos = new combos($databaseManager);
        $combos->setIntCdSeccion($_POST['subGrupoElegido']);

        if (isset($_GET['s']))
            $s = $_GET['s'];
        else
            $s = '';

        echo $combos->obtenerSeccion($s);
        break;

    /* Consulta de todos las Proveedor */
    case 6:
        include_once '../../modelo/combos/subGrupoClass.php';
        $databaseManager = new BaseDatos();
        $combos = new combos($databaseManager);
        $combos->obtenerProveedor($valor);
        break;

    /* Consulta de todos los Productos */
    case 7:
        include_once '../../modelo/combos/subGrupoClass.php';
        $databaseManager = new BaseDatos();
        $combos = new combos($databaseManager);
        $combos->obtenerProductos($valor);
        break;

    /*     * ****Caso al modificar con combos dependientes******* */
    /*    Consulta de todos las Direcciones segun $valor   */
    case 8:
        include_once '../../modelo/combos/direccionClass.php';
        $databaseManager = new BaseDatos();
        $direccion = new direccion($databaseManager);
        echo $direccion->obtenerDireccion($valor);
        break;

    /*   Consulta de todos las Unidades segun $valor */
    case 9:
        include_once '../../modelo/combos/unidadClass.php';
        $databaseManager = new BaseDatos();
        $unidad = new unidad($databaseManager);
        echo $unidad->obtenerUnidad($valor);
        break;

    /* Consulta de las Secciones segun $valor */
    case 10:
        include_once '../../modelo/combos/subGrupoClass.php';
        $databaseManager = new BaseDatos();
        $combos = new combos($databaseManager);
        echo $combos->obtenerSeccion($valor);
}/* FIN DEL SWITCH */
?>
