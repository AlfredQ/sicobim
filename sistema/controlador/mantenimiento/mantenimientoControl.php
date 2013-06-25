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


switch ($opc) {
    /*     * **********CARGAR VISTAS************ */
    /* Cargar vista Registrar Dependencia */
    case 0:
        include_once '../../modelo/mantenimiento/mantenimientoClass.php';
        $databaseManager = new baseDatos();
        $objMantenimiento = new mantenimiento($databaseManager);
        $intTotalConsulta = $objMantenimiento->ConsultarDependencia(1, $usuario1[1]);
        $_SESSION['contadorRegistro'] = $intTotalConsulta;
        $intTotalConsulta = $objMantenimiento->ConsultarDependencia(0, $usuario1[1]);
        $_SESSION['ArrId_Depe'] = $objMantenimiento->getArrId_Depe();
        $_SESSION['ArrDescripcion'] = $objMantenimiento->getArrDescripcion();
        echo $stsUrl = "mantenimiento/registrarDependencia.php";
        break;


    /* Cargar vista Registrar Direccion */
    case 1:
        include_once '../../modelo/mantenimiento/mantenimientoClass.php';
        $databaseManager = new baseDatos();
        $objMantenimiento = new mantenimiento($databaseManager);
        $intTotalConsulta = $objMantenimiento->ConsultarDireccion(1, $usuario1[1]);
        $_SESSION['contadorRegistro'] = $intTotalConsulta;
        $intTotalConsulta = $objMantenimiento->ConsultarDireccion(0, $usuario1[1]);
        $_SESSION['ArrId_Dire'] = $objMantenimiento->getArrId_Dire();
        $_SESSION['ArrDescripcionDire'] = $objMantenimiento->getArrDescripcionDire();
        $_SESSION['ArrNombreDepe'] = $objMantenimiento->getArrDescripcion();
        $_SESSION['ArrId_Depe'] = $objMantenimiento->getArrId_Depe();
        echo $stsUrl = "mantenimiento/registrarDireccion.php";
        // echo $_SESSION['ArrId_Dire'];
        break;

    /* Cargar vista Registrar Unidad */
    case 2:
        include_once '../../modelo/mantenimiento/mantenimientoClass.php';
        $databaseManager = new baseDatos();
        $objMantenimiento = new mantenimiento($databaseManager);
        $intTotalConsulta = $objMantenimiento->ConsultarUnidad(1, $usuario1[1]);
        $_SESSION['contadorRegistro'] = $intTotalConsulta;
        $intTotalConsulta = $objMantenimiento->ConsultarUnidad(0, $usuario1[1]);
        $_SESSION['ArrId_Unidad'] = $objMantenimiento->getArrId_Unidad();
        $_SESSION['ArrDescripcionUnidad'] = $objMantenimiento->getArrDescripcionUnidad();
        $_SESSION['ArrNombreDepe'] = $objMantenimiento->getArrDescripcion();
        $_SESSION['ArrId_Depe'] = $objMantenimiento->getArrId_Depe();
        $_SESSION['ArrDescripcionDire'] = $objMantenimiento->getArrDescripcionDire();
        $_SESSION['ArrId_Dire'] = $objMantenimiento->getArrId_Dire();
        echo $stsUrl = "mantenimiento/registrarUnidad.php";

        break;

    /* Cargar vista Registrar Coordinacion */
    case 3:
        include_once '../../modelo/mantenimiento/mantenimientoClass.php';
        $databaseManager = new baseDatos();
        $objMantenimiento = new mantenimiento($databaseManager);
        $intTotalConsulta = $objMantenimiento->ConsultarCoordinacion(1, $usuario1[1]);
        $_SESSION['contadorRegistro'] = $intTotalConsulta;
        $intTotalConsulta = $objMantenimiento->ConsultarCoordinacion(0, $usuario1[1]);
        $_SESSION['ArrId_Coor'] = $objMantenimiento->getArrId_Coor();
        $_SESSION['ArrDescripcionCoor'] = $objMantenimiento->getArrDescripcionCoor();
        $_SESSION['ArrDescripcion'] = $objMantenimiento->getArrDescripcion();
        $_SESSION['ArrId_Depe'] = $objMantenimiento->getArrId_Depe();
        $_SESSION['ArrDescripcionDire'] = $objMantenimiento->getArrDescripcionDire();
        $_SESSION['ArrId_Dire'] = $objMantenimiento->getArrId_Dire();
        $_SESSION['ArrDescripcionUnidad'] = $objMantenimiento->getArrDescripcionUnidad();
        $_SESSION['ArrId_Unidad'] = $objMantenimiento->getArrId_Unidad();
        echo $stsUrl = "mantenimiento/registrarCoordinacion.php";

        break;

    /* Cargar vista Registrar tipo Concepto */
    case 4:
        include_once '../../modelo/mantenimiento/mantenimientoClass.php';
        $databaseManager = new baseDatos();
        $objMantenimiento = new mantenimiento($databaseManager);
        $intTotalConsulta = $objMantenimiento->ConsultarTipoConcepto(1);
        $_SESSION['contadorRegistro'] = $intTotalConsulta;
        $intTotalConsulta = $objMantenimiento->ConsultarTipoConcepto(0);
        $_SESSION['ArrConcepto'] = $objMantenimiento->getArrConcepto();
        $_SESSION['ArrDescripcion'] = $objMantenimiento->getArrDescripcion();
        $_SESSION['ArrTipoConcepto'] = $objMantenimiento->getArrTipoConcepto();
        echo $stsUrl = "mantenimiento/registrarTipoMovimiento.php";
        break;

    /* Cargar vista Registrar Seccion */
    case 5:
        include_once '../../modelo/mantenimiento/mantenimientoClass.php';
        $databaseManager = new baseDatos();
        $objMantenimiento = new mantenimiento($databaseManager);
        $intTotalConsulta = $objMantenimiento->consultarSeccion(1);
        $_SESSION['contadorRegistro'] = $intTotalConsulta;
        $intTotalConsulta = $objMantenimiento->consultarSeccion(0);
        $_SESSION['ArrCodigoSeccion'] = $objMantenimiento->getArrCodigoSeccion();
        $_SESSION['ArrNombreSeccion'] = $objMantenimiento->getArrNombreSeccion();
        $_SESSION['ArrNombreSubGrupo'] = $objMantenimiento->getArrNombreSubgrupo();
        $_SESSION['ArrCodigoSubGrupo'] = $objMantenimiento->getArrCodigoSubGrupo();
        echo $stsUrl = "mantenimiento/registrarSeccion.php";
        break;

    /* Cargar vista Registrar Activos reales */
    case 6:
        include_once '../../modelo/mantenimiento/mantenimientoClass.php';
        $databaseManager = new baseDatos();
        $objMantenimiento = new mantenimiento($databaseManager);
        $intTotalConsulta = $objMantenimiento->consultarProducto(1);
        $_SESSION['contadorRegistro'] = $intTotalConsulta;
        $intTotalConsulta = $objMantenimiento->consultarProducto(0);
        $_SESSION['ArrId_Prod'] = $objMantenimiento->getArrId_Prod();
        $_SESSION['ArrNombreProd'] = $objMantenimiento->getArrNombreProd();
        $_SESSION['ArrDescripcionProd'] = $objMantenimiento->getArrDescripcionProd();
        $_SESSION['ArrCodigoSeccion'] = $objMantenimiento->getArrCodigoSeccion();
        $_SESSION['ArrNombreSeccion'] = $objMantenimiento->getArrNombreSeccion();
        $_SESSION['ArrNombreSubGrupo'] = $objMantenimiento->getArrNombreSubgrupo();
        $_SESSION['ArrCodigoSubGrupo'] = $objMantenimiento->getArrCodigoSubGrupo();
        echo $stsUrl = "mantenimiento/registrarActivos.php";
        break;

    /* Cargar vista Registrar  SubGrupo */
    case 7:
        include_once '../../modelo/mantenimiento/mantenimientoClass.php';
        $databaseManager = new baseDatos();
        $objMantenimiento = new mantenimiento($databaseManager);
        $intTotalConsulta = $objMantenimiento->ConsultarSubGrupo(1);
        $_SESSION['contadorRegistro'] = $intTotalConsulta;
        $intTotalConsulta = $objMantenimiento->ConsultarSubGrupo(0);
        $_SESSION['arrCodigoSubGrupo'] = $objMantenimiento->getArrCodigoSubgrupo();
        $_SESSION['arrNombreSubGrupo'] = $objMantenimiento->getArrNombreSubgrupo();

        //	echo $_SESSION['arrResultado'] = $objMantenimiento->getArrResultadoSubgrupo();
        echo $stsUrl = "mantenimiento/registrarSubGrupo.php";
        /* echo json_encode( $arrResultado ); */
        break;

    /* Cargar vista Registrar Proveedor */
    case 8:
        include_once '../../modelo/mantenimiento/mantenimientoClass.php';
        $databaseManager = new baseDatos();
        $objMantenimiento = new mantenimiento($databaseManager);
        $intTotalConsulta = $objMantenimiento->consultarProveedor(1, $usuario1[1]);
        $_SESSION['contadorRegistro'] = $intTotalConsulta;
        $intTotalConsulta = $objMantenimiento->consultarProveedor(0, $usuario1[1]);
        $_SESSION['ArrRifTipo'] = $objMantenimiento->getArrRifTipo();
        $_SESSION['ArrRifId'] = $objMantenimiento->getArrRifId();
        $_SESSION['ArrDenominacionPro'] = $objMantenimiento->getArrDenominacionPro();
        $_SESSION['ArrDireccionPro'] = $objMantenimiento->getArrDireccionPro();
        $_SESSION['ArrTlfPro'] = $objMantenimiento->getArrTlfPro();
        echo $stsUrl = "mantenimiento/registrarProveedor.php";
        break;

    /* Cargar vista Registrar SubGrupo Proveedor */
    case 9:
        break;


    /*     * ***************REGISTRAR********************* */
    /* Registrar Dependencia */
    case 10:

        include_once '../../modelo/mantenimiento/mantenimientoClass.php';
        $databaseManager = new baseDatos();
        $mantenimiento = new mantenimiento($databaseManager);
        $intTotalConsulta = $mantenimiento->ConsultarOrgUsu($usuario);
        trim($orga = substr($intTotalConsulta, 7, -1));

        $mantenimiento->setId_Depe($_POST['nrocuenta']);

        //Id_orga
        $mantenimiento->setId_Orga($orga);

        //Descripcion
        $mantenimiento->setDescripcion($_POST['denominacion']);

        //Status
        $mantenimiento->setStatus($_POST['status']);

        if ($_POST["intIdFila"] == "") {// REGISTRA dependencia
            if ($mantenimiento->insertarDependencia() == TRUE) {
                $resultado["error"] = "0";
                $resultado["msj"] = "La Dependencia se ha Registrada Éxitosamente";
            } else {
                $resultado["error"] = "1";
                $resultado["msj"] = "No se pudo Registrar";
            }
        } else {//MODIFICA concepto
            //id_depe
            $mantenimiento->setId_Depe($_POST['intIdFila']);

            //Id_orga
            $mantenimiento->setId_Orga($_POST['orga']);

            //Descripcion
            $mantenimiento->setDescripcion($_POST['denominacion']);

            //Status
            $mantenimiento->setStatus($_POST['status']);


            $bolResultado = $mantenimiento->modificarDependencia();

            if ($bolResultado == TRUE) {
                $resultado['error'] = 0;
                $resultado['msj'] = 'Modificado Exitosamente';
            } else {
                $resultado['error'] = 1;
                $resultado['msj'] = 'Problemas al Modificar';
            }
        }

        echo json_encode($resultado);
        break;

    /* Registrar Direccion */
    case 11:

        include_once '../../modelo/mantenimiento/mantenimientoClass.php';
        $databaseManager = new baseDatos();
        $mantenimiento = new mantenimiento($databaseManager);
        $intTotalConsulta = $mantenimiento->ConsultarOrgUsu($usuario);
        trim($orga = substr($intTotalConsulta, 7, -1));

        //id_dire
        $mantenimiento->setId_Dire($_POST['nrocuentadire']);
        //Descripcion
        $mantenimiento->setDescripcionDire($_POST['denominacion']);
        //Id_orga
        $mantenimiento->setId_Orga($orga);
        //cbo_dependecias
        $mantenimiento->setId_Depe($_POST['cbo_dependencia']);
        //echo ">>>>".$_POST['cbo_dependencia']."<<<<";
        //Status
        $mantenimiento->setStatus($_POST['status']);

        if ($_POST["intIdFila"] == "") {// REGISTRA DIRECCION
            if ($mantenimiento->insertarDireccion() == TRUE) {
                $resultado["error"] = "0";
                $resultado["msj"] = "La Direcci&oacute;n se ha Registrada Éxitosamente";
            } else {
                $resultado["error"] = "1";
                $resultado["msj"] = "No se pudo Registrar";
            }
        } else {//MODIFICA concepto
            //id_depe
            $mantenimiento->setId_Dire($_POST['intIdFila']);
            //Descripcion
            $mantenimiento->setDescripcion($_POST['denominacion']);
            //id_depe
            $mantenimiento->setId_Depe($_POST['cbo_dependencia']);

            $bolResultado = $mantenimiento->modificarDireccion();

            if ($bolResultado == TRUE) {
                $resultado['error'] = 0;
                $resultado['msj'] = 'Modificado Exitosamente';
            } else {
                $resultado['error'] = 1;
                $resultado['msj'] = 'Problemas al Modificar';
            }
        }

        echo json_encode($resultado);

        break;

    /* Registrar Unidad */
    case 12:
        include_once '../../modelo/mantenimiento/mantenimientoClass.php';
        $databaseManager = new baseDatos();
        $mantenimiento = new mantenimiento($databaseManager);
        $intTotalConsulta = $mantenimiento->ConsultarOrgUsu($usuario);
        trim($orga = substr($intTotalConsulta, 7, -1));

        //unidada
        $mantenimiento->setId_Unidad($_POST['nrocuentaunid']);
        //Descripcion unidad
        $mantenimiento->setDescripcionUnidad($_POST['denominacion']);

        //Id_orga
        $mantenimiento->setId_Orga($orga);

        //cbo_dependecias
        $mantenimiento->setId_Depe($_POST['cbo_dependencia']);
        //cbo_direccion
        $mantenimiento->setId_Dire($_POST['cbo_direccion']);

        //Status
        $mantenimiento->setStatus($_POST['status']);

        if ($_POST["intIdFila"] == "") {// REGISTRA DIRECCION
            if ($mantenimiento->insertarUnidad() == TRUE) {
                $resultado["error"] = "0";
                $resultado["msj"] = "La Unidad se ha Registrada Éxitosamente";
            } else {
                $resultado["error"] = "1";
                $resultado["msj"] = "No se pudo Registrar";
            }
        } else {//MODIFICA Unidad
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


            $bolResultado = $mantenimiento->modificarUnidad();

            if ($bolResultado == TRUE) {
                $resultado['error'] = 0;
                $resultado['msj'] = 'Modificado Exitosamente';
            } else {
                $resultado['error'] = 1;
                $resultado['msj'] = 'Problemas al Modificar';
            }
        }

        echo json_encode($resultado);
        break;

    /* Registrar Coordinacion */
    case 13:
        include_once '../../modelo/mantenimiento/mantenimientoClass.php';
        $databaseManager = new baseDatos();
        $mantenimiento = new mantenimiento($databaseManager);
        $intTotalConsulta = $mantenimiento->ConsultarOrgUsu($usuario);
        trim($orga = substr($intTotalConsulta, 7, -1));
        //Coordinacion
        $mantenimiento->setId_Coor($_POST['nrocuentacoor']);

        //denominacion Coordinacion
        $mantenimiento->setDescripcionCoor($_POST['denominacion']);

        //cbo_dependecias
        $mantenimiento->setId_Depe($_POST['cbo_dependencia']);

        //cbo_direccion
        $mantenimiento->setId_Dire($_POST['cbo_direccion']);

        //cbo_unidad
        $mantenimiento->setId_Unidad($_POST['cbo_unidad']);


        //Id_orga
        $mantenimiento->setId_Orga($orga);

        //Status
        $mantenimiento->setStatus($_POST['status']);

        if ($_POST["intIdFila"] == "") {// REGISTRA DIRECCION
            if ($mantenimiento->insertarCoordinacion() == TRUE) {
                $resultado["error"] = "0";
                $resultado["msj"] = "La Coordinación se ha Registrada Éxitosamente";
            } else {
                $resultado["error"] = "1";
                $resultado["msj"] = "No se pudo Registrar";
            }
        } else {//MODIFICA Unidad
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
              $mantenimiento->setStatus($_POST['status']); */


            $bolResultado = $mantenimiento->modificarCoordinacion();

            if ($bolResultado == TRUE) {
                $resultado['error'] = 0;
                $resultado['msj'] = 'Modificado Exitosamente';
            } else {
                $resultado['error'] = 1;
                $resultado['msj'] = 'Problemas al Modificar';
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
        if ($_POST["intIdFila"] == "") {// REGISTRA CARGOS
            if ($mantenimiento->insertarTipoConcepto() == TRUE) {
                $resultado["error"] = "0";
                $resultado["msj"] = "El Concepto se ha Registrada Éxitosamente";
            } else {
                $resultado["error"] = "1";
                $resultado["msj"] = "No se pudo Registrar";
            }
        } else {//MODIFICA concepto
            //$intIdFila=trim($_POST["intIdFila"]-1);
            //$intCdConceptos=$_POST["cdConceptos$intIdFila"];


            $mantenimiento->setConcepto($_POST['intIdFila']);

            //denominacion
            $mantenimiento->setDenominacion($_POST['denominacion']);

            //cbo_tmovi
            $mantenimiento->setTipoConcepto($_POST['cbo_tmovi']);

            $bolResultado = $mantenimiento->modificarConceptos();

            if ($bolResultado == TRUE) {
                $resultado['error'] = 0;
                $resultado['msj'] = 'Modificado Exitosamente';
            } else {
                $resultado['error'] = 1;
                $resultado['msj'] = 'Problemas al Modificar';
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

        if ($_POST["intIdFila"] == "") {// REGISTRA SubGrupo
            if ($mantenimiento->insertarSubgrupo() == TRUE) {
                $resultado["error"] = "0";
                $resultado["msj"] = "El Subgrupo se ha Registrado Exitosamente";
            } else {
                $resultado["error"] = "1";
                $resultado["msj"] = "No se pudo Registrar";
            }
        } else {//Modificar sub grupo

            $mantenimiento->setCodigoSubGrupo($_POST['intIdFila']);

            $mantenimiento->setNombreSubGrupo($_POST['nombreSubGrupo']);

            $bolResultado = $mantenimiento->modificarSubGrupo();

            if ($bolResultado == TRUE) {
                $resultado['error'] = 0;
                $resultado['msj'] = 'Modificado Exitosamente';
            } else {
                $resultado['error'] = 1;
                $resultado['msj'] = 'Problemas al Modificar';
            }
        }
        echo json_encode($resultado);
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


        if ($_POST["intIdFila"] == "") {// Registrar seccion
            if ($mantenimiento->insertarSeccion() == TRUE) {
                $resultado["error"] = "0";
                $resultado["msj"] = "La seccion se ha Registrada Exitosamente";
            } else {
                $resultado["error"] = "1";
                $resultado["msj"] = "No se pudo Registrar";
            }
        } else {//MODIFICA concepto
            //$intIdFila=trim($_POST["intIdFila"]-1);
            //$intCdConceptos=$_POST["cdConceptos$intIdFila"];						
            //codigo
            $mantenimiento->setCodigoSeccion($_POST['intIdFila']);
            //nombreSeccion
            $mantenimiento->setNombreSeccion($_POST['nombreSeccion']);
            //cbo_subGrupo
            $mantenimiento->setNombreSubGrupo($_POST['cbo_subGrupo']);
            $bolResultado = $mantenimiento->modificarSeccion();

            if ($bolResultado == TRUE) {
                $resultado['error'] = 0;
                $resultado['msj'] = 'Modificado Exitosamente';
            } else {
                $resultado['error'] = 1;
                $resultado['msj'] = 'Problemas al Modificar';
            }
        }

        echo json_encode($resultado);
        break;

    /* Cargar vista Registrar Activos reales */
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


        if ($_POST["intIdFila"] == "") {// REGISTRA DIRECCION
            if ($mantenimiento->insertarProducto() == TRUE) {
                $resultado["error"] = "0";
                $resultado["msj"] = "El activo real se ha Registrada Éxitosamente";
            } else {
                $resultado["error"] = "1";
                $resultado["msj"] = "No se pudo Registrar";
            }
        } else {//modificar producto
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


            $bolResultado = $mantenimiento->modificarProducto();

            if ($bolResultado == TRUE) {
                $resultado['error'] = 0;
                $resultado['msj'] = 'Modificado Exitosamente';
            } else {
                $resultado['error'] = 1;
                $resultado['msj'] = 'Problemas al Modificar';
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

        if ($_POST["intIdFila"] == "") {// Registrar proveedor
            if ($mantenimiento->insertarProveedor() == TRUE) {
                $resultado["error"] = "0";
                $resultado["msj"] = "El Proveedor se ha Registrada Éxitosamente";
            } else {
                $resultado["error"] = "1";
                $resultado["msj"] = "No se pudo Registrar";
            }
        } else {//modificar proveedor
            $rifmod = $_POST['intIdFila'];
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


            $bolResultado = $mantenimiento->modificarProveedor();

            if ($bolResultado == TRUE) {
                $resultado['error'] = 0;
                $resultado['msj'] = 'Modificado Exitosamente';
            } else {
                $resultado['error'] = 1;
                $resultado['msj'] = 'Problemas al Modificar';
            }
        }

        echo json_encode($resultado);
        break;

    case 19:
        include_once '../../modelo/mantenimiento/mantenimientoClass.php';

        $databaseManager = new baseDatos();
        $objMantenimiento = new mantenimiento($databaseManager);

        $intTotalConsulta = $objMantenimiento->ConsultarTipoConcepto();

        if ($intTotalConsulta != 0) {
            $arrResultado["error"] = "0";
        } else {
            $arrResultado['error'] = 1;
            $arrResultado['msj'] = "No Existen Registros Cargados";
        }

        echo json_encode($arrResultado);

        break;

    case 20:
        include_once '../../modelo/mantenimiento/mantenimientoClass.php';
        $databaseManager = new baseDatos();
        $mantenimiento = new mantenimiento($databaseManager);
        // explode para cortar el rif
        $id = trim($_GET["id"]);
        $rifMo = explode("-", $id);
        $rifM = $rifMo[1];

        $mantenimiento->setRifId($rifM);
        $bolResultado = $mantenimiento->eliminarProveedor();

        if ($bolResultado == TRUE) {

            $arrResultado["error"] = 0;
            $arrResultado['msj'] = 'Eliminado Exitosamente';
        } else {
            $arrResultado['error'] = 1;
            $arrResultado['msj'] = 'Problemas al Eliminar';
        }

        echo json_encode($arrResultado);

    break;

//validar que nro de cuenta exista en bd
    case 21:
        $nrocuenta = $_REQUEST['valor'];
        //echo $nrocuenta;
        include_once '../../modelo/mantenimiento/mantenimientoClass.php';
        $databaseManager = new baseDatos();
        $mantenimiento = new mantenimiento($databaseManager);
        $bolResultado = $mantenimiento->ConsultarDependendiaId($nrocuenta);
        $var = $mantenimiento->getArrId_Depe();
        $_SESSION['getArrId_Depe'] = $mantenimiento->getArrId_Depe();
        if ($var[0] == $nrocuenta) {
            $arrResultado["error"] = 0;
            $arrResultado['msj'] = 'El nro de cuenta se encuentra registrado';
        }
        echo json_encode($arrResultado);
    break;
   
    //validar que nro de cuenta exista en bd
    case 22:
        $nrocuentadire = $_REQUEST['valor'];
        //echo $nrocuenta;
        include_once '../../modelo/mantenimiento/mantenimientoClass.php';
        $databaseManager = new baseDatos();
        $mantenimiento = new mantenimiento($databaseManager);
        $bolResultado = $mantenimiento->ConsultarDireccionId($nrocuentadire);
        $var = $mantenimiento->getArrId_Dire();
        $_SESSION['getArrId_Dire'] = $mantenimiento->getArrId_Dire();
        if ($var[0] == $nrocuentadire) {
            $arrResultado["error"] = 0;
            $arrResultado['msj'] = 'El nro de cuenta ya ha sido registrado';
        }
        echo json_encode($arrResultado);
    break;
    
     //validar que nro de cuenta exista en bd
    case 23:
        $nrocuentaunid = $_REQUEST['valor'];
        //echo $nrocuentaunid;
        include_once '../../modelo/mantenimiento/mantenimientoClass.php';
        $databaseManager = new baseDatos();
        $mantenimiento = new mantenimiento($databaseManager);
        $bolResultado = $mantenimiento->ConsultarUnidadId($nrocuentaunid);
        $var = $mantenimiento->getArrId_Unidad();
        $_SESSION['getArrId_Unidad'] = $mantenimiento->getArrId_Unidad();
        if ($var[0] == $nrocuentaunid) {
            $arrResultado["error"] = 0;
            $arrResultado['msj'] = 'El nro de cuenta ya ha sido registrado';
        }
        echo json_encode($arrResultado);
    break;

   //validar que nro de cuenta exista en bd
    case 24:
        $nrocuentacoor = $_REQUEST['valor'];
        //echo $nrocuentaunid;
        include_once '../../modelo/mantenimiento/mantenimientoClass.php';
        $databaseManager = new baseDatos();
        $mantenimiento = new mantenimiento($databaseManager);
        $bolResultado = $mantenimiento->ConsultarCoordinacionId($nrocuentacoor);
        $var = $mantenimiento->getArrId_Coor();
        $_SESSION['getArrId_Coor'] = $mantenimiento->getArrId_Coor();
        if ($var[0] == $nrocuentacoor) {
            $arrResultado["error"] = 0;
            $arrResultado['msj'] = 'El nro de cuenta ya ha sido registrado';
        }
        echo json_encode($arrResultado);
    break;
    
    case 25:
        include_once '../../modelo/mantenimiento/mantenimientoClass.php';
        $databaseManager = new baseDatos();
        $mantenimiento = new mantenimiento($databaseManager);
        // explode para cortar el rif
        $id = ($_GET["id"]);       
        $mantenimiento->setId_Coor($id);
        $bolResultado = $mantenimiento->eliminarCoordinacion();

        if ($bolResultado == TRUE) {

            $arrResultado["error"] = 0;
            $arrResultado['msj'] = 'Eliminado Exitosamente';
        } else {
            $arrResultado['error'] = 1;
            $arrResultado['msj'] = 'Problemas al Eliminar';
        }

        echo json_encode($arrResultado);

    break;

    /*     * *************************CONSULTAR********************** */



    /*     * *************************MODIFICAR********************** */
}/*FIN DEL SWITCH*/
?>
