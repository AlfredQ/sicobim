<?php session_start();
/*
 * < censo.control.php >
 * 
 * < Creacion: Miercoles 30 de Mayo de 2012 >
 * 
 * < Ultima Modificacion: Jueves 31 de Mayo de 2012 >
 * 
 * < Version: 1.0 >
 * 
 * < Desarrollador: Darimer Torres >
 * 
 * < Nota: Controlador que pertenece a la planilla >
 * 
 * */

/*CASOS*/
$opc = 0;
$opc = $_GET['opc'];
$resRegistrado = '';

	switch ($opc)
	{
		/* CARGA VISTA REGISTRAR */
		case 0:
			$arrResultado["vista"] = "censo/registrarCenso.php"; 
			echo json_encode( $arrResultado );
		break;
		
		/* Guardar Formulario */
		case 1:
		
			include_once '../../modelo/censo/trabajador.Class.php';
			$databaseManager = new baseDatos();
			$trabajador = new trabajador($databaseManager);
			
			//Nacionalidad
			$trabajador->setIntInNacionalidad($_POST['nacionalidad']);
			
			//Cedula
			$trabajador->setIntNuCedula($_POST['cedula']);
			
			$trabajador->consultarTrabajador();
			if ($trabajador->getStsDsDireccionOficina()== "")
			{
								
				//Nacionalidad
				$trabajador->setIntInNacionalidad($_POST['nacionalidad']);
				
				//Cedula
				$trabajador->setIntNuCedula($_POST['cedula']);

				//NOMBRE
				$trabajador->setStsDsApellidos($_POST['nombres']);
				
				//APELLIDO
				$trabajador->setStsDsApellidos($_POST['apellidos']);
				
				//Direccion Oficina
				$trabajador->setStsDsDireccionOficina($_POST['txa_direccionOficina']);

				
				//txa_dependencia
				$trabajador->setStsDsDependencia($_POST['txa_dependencia']);
				
				//txt_cargo
				$trabajador->setStsDsCargo($_POST['txt_cargo']);
				
				//correo
				$trabajador->setStsCorreo($_POST['txt_correo']);
								
				//Edificio
				$trabajador->setIntNuEdificioUbicacion($_POST['cbo_edificio']);

				//Piso
				$trabajador->setIntNuPisoUbicacion($_POST['cbo_piso']);
				
				//Oficina
				$trabajador->setIntNuOficinaUbicacion($_POST['cbo_oficina']);
				
				
				//Nacionalidad
					//		$estudiante->setStsEdificio($_POST['cbo_edificio']);
				//Descripcion Oficina / Piso
				//$trabajador->setStsDsOficinaPiso($_POST['txa_oficinaPiso']);
				
				//Telefono Oficina
				$trabajador->setStsNuTeleOfic($_POST['txt_tlfOficina']);
				
				//Otro Telefono Contacto 
				$trabajador->setStsNuTeleContacto($_POST['txt_tlfCelular']);
				
				//txt_estatus
				$trabajador->setFeIngreso($_POST['txt_estatus']);
					
				$trabajador->insertarUbicacion()	;
				
				if ($trabajador->modificarTrabajador()==TRUE)
				{
					$resultado["error"] = "0";
					$resultado["msj"] = "Persona Registrada";
				}
				else
				{
					$resultado["error"] = "1";
					$resultado["msj"] = "No se pudo Registrar";
				}			
							
			}
			else
			{
				$resultado["error"] = "1";
				$resultado["msj"] = "Ya está Registrado";
							
			}		
			echo json_encode($resultado);
		break;

		/* Consulta la cedula */
		case 6:
			include_once '../../modelo/censo/trabajador.Class.php';
			$databaseManager = new baseDatos();
			$datosTrabajador = new trabajador($databaseManager);
			
			$nacionalidad=trim($_GET['ele1']);
			$cedula=trim($_GET['ele2']);
			$compania=trim($_GET['ele3']);
			if ( ($nacionalidad != "") and ($cedula !="") and ($compania !="") )			
			{	
				include_once '../../modelo/censo/sireh.Class.php';
			
				$objSireh = new sireh();
				$objSireh->setStsIntCompania($compania);
				$objSireh->setStsNacionalidad($_GET['ele1']);
				$objSireh->setStsCedula($_GET['ele2']);
					
				$datosTrabajador->setIntInNacionalidad($_GET['ele1']);
				$datosTrabajador->setIntNuCedula($_GET['ele2']);
			
				if ($re1 = $datosTrabajador->consultarTrabajador(0) != 0)
				{	
					
						$arrResultado['error'] = 1;
						$arrResultado['msj'] ="El trabajador ya está registrado ";
					
				}
				// SI NO EXISTE EN SISREVI --- INSERTA Y MUESTRA
				else
				{ 
					/*Hace consulta en sireh(oracle) */
					$objSireh->consultarSireh(); 
					if ( $objSireh->getStsCedula()!= "" )
					{
						/*INSERTA*/
						$datosTrabajador->setIntNuCedula($objSireh->getStsCedula());
						$datosTrabajador->setIntNuNomina($objSireh->getIntNroNomina());
						$datosTrabajador->setStsDsNombres($objSireh->getStsNombre());
						$datosTrabajador->setStsDsApellidos($objSireh->getStsApellido());		
						$datosTrabajador->setStsCdTipoEmpleado($objSireh->getStsEstatus());//TIPO DE EMPLEADO
						$datosTrabajador->setStsDsDependencia($objSireh->getStsDependencia()); //UBICACION
						$datosTrabajador->setStsDsCargo($objSireh->getStsCargo());
						$datosTrabajador->setIntInNacionalidad($objSireh->getStsNacionalidad());
						$datosTrabajador->setStsNbCompania($objSireh->getStsCompania());

						 
						$resultadoTrabajador=$datosTrabajador->insertarTrabajador();
					
						if ($re1 = $datosTrabajador->consultarTrabajador(0) != 0)
						{					
							$datosTrabajador->consultarTrabajador(1);
							$arrResultado['IdRegistro']=$datosTrabajador->getArrIntIdRegistro();
							$arrResultado['IntNuNomina']=$datosTrabajador->getArrIntNuNomina ();
							$arrResultado['InNacionalidad']=$datosTrabajador->getArrIntInNacionalidad(); 
							$arrResultado['IntNuCedula']=$datosTrabajador->getArrIntNuCedula ();			
							$arrResultado['StsDsApellidos']=$datosTrabajador->getArrStsDsApellidos ();
							$arrResultado['StsDsNombres']=$datosTrabajador->getArrStsDsNombres();
							$arrResultado['StsCdTipoEmpleado']=$datosTrabajador->getArrStsCdTipoEmpleado ();
							$arrResultado['StsDsDependencia']=$datosTrabajador->getArrStsDsDependencia();
							$arrResultado['StsDsCargo']=$datosTrabajador->getArrStsDsCargo();
							$arrResultado['StsNbCompania']=$datosTrabajador->getArrStsNbCompania();
							
							$arrResultado['error'] = 0;
							$arrResultado['msj'] ="";
						}
						else
						{
							$arrResultado['error'] = 1;
							$arrResultado['msj'] ="El Usuario no se Registro en Páginas Blancas";
						}
					}
					else
					{
						$arrResultado['error'] = 1;
						$arrResultado['msj'] ="El Usuario no se encuentra en nómina, no puede continuar con el registro";
						
					}
					
				}	
					
							
				
			}
			else
			{
				$arrResultado['error'] = 1;
				$arrResultado['msj'] ="Ingrese Su Cédula";
			}
			echo json_encode($arrResultado);
		break;
		
		/* Menu - Consultar Modificar */ 
		case 7:
			$arrResultado["vista"] = "censo/consultarCenso.php";
			echo json_encode( $arrResultado );
		break;
		
		/* Consultar trabajador */ 
		case 8:	
	include_once '../../modelo/censo/trabajador.Class.php';
		$databaseManager = new baseDatos();
		$datosTrabajador = new trabajador($databaseManager);
		$sw = 0;

		
	if (($_GET['ele1'] != '') || ($_GET['ele2'] != ''))
			{
					if (($_GET['ele1'] != '') && ($_GET['ele2'] != ''))
				{
					if ($_GET['ele1'] != '')
						$datosTrabajador-> setIntInNacionalidad($_GET['ele1']);
						
					if ($_GET['ele2'] != '')
						$datosTrabajador-> setIntNuCedula($_GET['ele2']);
				}
				else if (($_GET['ele1'] != '') || ($_GET['ele2'] != ''))
				{
					$sw = 1;
					$arrResultado['error'] = 4;
				}
					
									
				if ($sw == 0)
				{ 
					$arrResultado = $datosTrabajador->consultarTrabajadorEspecifico(1);

						
							if (($datosTrabajador->getArrStsDsApellidos() != null) && $datosTrabajador->getArrStsDsApellidos() != '')
							{			$arrResultado['InNacionalidad'] =$datosTrabajador->getIntInNacionalidad();		
										$arrResultado['IntNunomina'] =$datosTrabajador->getArrIntNuNomina();
										$arrResultado['IntNuCedula'] = $datosTrabajador->getArrIntNuCedula(); //
										$arrResultado['StsDsApellidos'] = $datosTrabajador->getArrStsDsApellidos(); //
										$arrResultado['StsDsNombres'] = $datosTrabajador->getArrStsDsNombres(); //
										$arrResultado['StsDsDependencia'] = $datosTrabajador->getArrStsDsDependencia(); //
										$arrResultado['StsDsDireccionOficina'] = $datosTrabajador->getArrStsDsDireccionOficina(); //
										$arrResultado['StsDsCargo'] = $datosTrabajador->getArrStsDsCargo(); 
										$arrResultado['StsDsOficinaPiso'] = $datosTrabajador->getArrStsDsOficinaPiso();
										$arrResultado['StsNuTeleOfic'] = $datosTrabajador->getArrStsNuTeleOfic();
										$arrResultado['StsNuTeleContacto'] = $datosTrabajador->getArrStsNuTeleContacto();
										$arrResultado['StsNbCompania'] = $datosTrabajador->getArrStsNbCompania();
										$arrResultado['StsCdTipoEmpleado'] = $datosTrabajador->getArrStsCdTipoEmpleado();
										$arrResultado['StsCorreo'] = $datosTrabajador->getArrStsCorreo();
							
										//$arrResultado['IntNuNomina'] = $datosTrabajador->getArrIntNuNomina();
										$arrResultado['IntNuEdificioUbicacion'] = $datosTrabajador->getArrIntNuEdificioUbicacion(); //
										$arrResultado['IntNuPisoUbicacion'] = $datosTrabajador->getArrIntNuPisoUbicacion(); //
										$arrResultado['IntNuOficinaUbicacion'] = $datosTrabajador->getArrIntNuOficinaUbicacion(); //*/
										$arrResultado['error'] = 3;
								
						}
						else if($arrResultado['StsDsApellidos'] == '')
						{
							$arrResultado['error'] = 1;
						
				
			
				}
		}
	}
	
		echo json_encode($arrResultado);
		break;	
		
		
		/* Modificar Planilla */ 
		case 9:
			include_once '../../modelo/censo/trabajador.Class.php';
			$databaseManager = new baseDatos();
			$trabajador = new trabajador($databaseManager);
			
			//Nacionalidad
			$trabajador->setIntInNacionalidad($_POST['nacionalidad']);
			
				//Cedula
				if (($_POST['cedula'] != '') && ($_POST['cedula'] != null))
					$trabajador->setIntNuCedula($_POST['cedula']);

					//Edificio
					$trabajador->setIntNuEdificioUbicacion($_POST['cbo_edificio']);
	
					//Piso
					$trabajador->setIntNuPisoUbicacion($_POST['cbo_piso']);
					
					//Oficina
					$trabajador->setIntNuOficinaUbicacion($_POST['cbo_oficina']);		
												
					//Direccion Oficina
					$trabajador->setStsDsDireccionOficina($_POST['txa_direccionOficina']);
										
					//Telefono Oficina
					$trabajador->setStsNuTeleOfic($_POST['txt_tlfOficina']);
					
					//Otro Telefono Contacto 
					$trabajador->setStsNuTeleContacto($_POST['txt_tlfCelular']);
					
					$trabajador->setStsCorreo($_POST['txt_correo']);
					
					//Nacionalidad
					$trabajador->setIntInNacionalidad($_POST['nacionalidad']);
					
					//Cedula
					$trabajador->setIntNuCedula($_POST['cedula']);
					
					$res = $trabajador->modificarTrabajador(2);
				
				//Se modifico los datos del trabajador
				if ($res == true)
				{
					$arrResultado['error'] = 1;
					$_SESSION["cedula"] = $_POST['cedula'];
					$_SESSION["nacionalidad"] = $_POST['nacionalidad'];
			}
			else
			{
				$arrResultado['error'] = 0;
				$arrResultado['msj']="No se pudo Modificar la Planilla";
			}
			echo json_encode($arrResultado);
		break;
		
		/* Consultar Traza */ 
		case 10:
			$arrResultado["vista"] = "../vista/usuario/trazaUsuario.php";
			echo json_encode($arrResultado);
		break;
		
		/* Consultar Nombre Usuario BD */ 
		case 11:
			include_once '../../modelo/usuarios/trazaUsuario.Class.php';
			$databaseManager = new baseDatos();
			$nombresUsuarios = new trazaUsuario($databaseManager);
				
			echo $nombresUsuarios->consultarNombreUsuario(1);
		break;
		
		/* Consultar Traza */ 
		case 12:
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
					$trazaUsuario->setFecHrTraza($sepFecha[2]."-".$sepFecha[1]."-".$sepFecha[0]." 00:00:00");
				}
				
				if ($_POST['cbo_1_nombreUsuario'] != '')
					$trazaUsuario->setStsNbBdUsuario($_POST['cbo_1_nombreUsuario']);

			$resultadoConsulta = $trazaUsuario->consultarTrazaUsuarioTotal();
			
				if (($trazaUsuario->getTotal() != null) && ($trazaUsuario->getTotal() != '') && ($trazaUsuario->getTotal() > 0))
				{
					$arrResultado['total'] = $trazaUsuario->getTotal();
					
					$arrResultado['error'] = 1;
				}
				else
				{
					$arrResultado['error'] = "La consulta no arrojó resultados";
				}
			
			echo json_encode($arrResultado);
		break;
	}/*FIN DEL SWITCH*/
	?>
