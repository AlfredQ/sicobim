<?php session_start();
/*
 * Created on 28/10/2011
 * <Nombre del archivo: usuariosControl.php>
 * <Fecha de creación del archivo: 28/10/2011> 
 * <Versión del archivo: 1.0>
 * <Autor del archivo: Virginia Naassaneh>
 * <Breve explicación del contenido de el archivo: controlador de Usuarios del sistema>
*/

/*CASOS*/
$opc=$_GET['opc'];
switch ($opc)
{
	/*********INICIAR SESION*********/
case 0:
	
		$stsLoginUsuario1=base64_decode($_POST["stsLoginUsuario"]);
		$stsLoginUsuario="sicobim_".$stsLoginUsuario1;
		$stsClave=base64_decode($_POST["stsClave"]);
		$stsCaptcha=$_POST["stsCaptcha"];
		
		include_once "validacionesUsuarios/validacionesUsuarios.php";
		$intResultado=validarFrmUsuario( $stsLoginUsuario1,$stsClave,$stsCaptcha );

		if ($intResultado==1)
		
		{	$_SESSION['stsLoginUsuario_sicobim']=$stsLoginUsuario;	
			$_SESSION['stsClave_sicobim']=$stsClave;
				
			include_once( '../../modelo/usuarios/usuarios.Class.php');	
	
			$objBaseDatos = new baseDatos();
			$objUsuario   = new usuarios( $objBaseDatos );
			 
			$objUsuario->setStsNbBdUsuario( $stsLoginUsuario );
			$bolResultado=$objUsuario->validarUsuario(); 
							 
			if ( $bolResultado==TRUE )
			{ 
				$bolResultado=$objUsuario->validarUsuarioTabla();
				
				if ( $bolResultado == TRUE ) 
				{					
					$stsEstatusUusuario=$objUsuario->getArrBolStUsuario();
					
					if ($stsEstatusUusuario[0] == "t")
					{ 	$bolInControl=$objUsuario->getArrBolInControl();

						if ($bolInControl[0] == "t")
						{
							$_SESSION["intAutentificado_sicobim"]=1;
							$stsNbUsuario=$objUsuario->getArrStsNbUsuario();
							$stsTipoUusuario=$objUsuario->getArrStsInTipoUsuario();
							$stsLogin=$objUsuario->getArrStsNbBdUsuario();
							$_SESSION['stsLoginUsuario_sicobim']=$stsLogin[0];
							$_SESSION["stsTipoUsuario_sicobim"]= $stsTipoUusuario[0];
							$_SESSION["stsNbUsuario_sicobim"]= $stsNbUsuario[0];
							
					    	$_SESSION["ultimoAcceso_sicobim"]= date("Y-n-j H:i:s");
					    	echo "Exito";
						}
						else
						{
					        echo "Cambiar";
							$stsLogin=$objUsuario->getArrStsNbBdUsuario();
							$nroCedulaUsuario=$objUsuario->getArrStsNuCedulaUsuario();
							$_SESSION['stsLoginUsuario_sicobim_']=$stsLogin[0];
							$_SESSION['stsCedula_sicobim']=$nroCedulaUsuario[0];
							$_SESSION["ultimoAcceso_sicobim"]= date("Y-n-j H:i:s");
						}
					}
					else
					{
						echo "Inactivo";
						$_SESSION["intAutentificado_sicobim"]=0;
					}
					
				} 
				else
				{
					echo "Notabla";
					$_SESSION["intAutentificado_sicobim"]=0;
				}
			}
			else
			{
				echo "Usuario Incorrecto";
				$_SESSION["intAutentificado_sicobim"]=0;
			}
		}
		else
		{
			echo $stsMensajes=$intResultado;
			//$arrResutado= array('error'=>'1','msj'=>$stsMensajes);
		
		}		
	break;
	
	case 1:
		$arrResultado["vista"] = "../vista/usuario/registrarUsuario.php";
		//		$arrResultado["vista"] = "../privado/sistema/vista/usuario/registrarUsuario.php";
		echo json_encode( $arrResultado );
	break;
	
	/*********CREAR USUARIOS*********/

	
		case 2:
			//Incluimos la clase 
			require_once("../../../assets/captcha/securimage.php");
	 		$objCaptcha = new Securimage();
 			$bolResultado = $objCaptcha->check( $_POST['stsCaptcha']);
	  		if($bolResultado == true)
	  		{
			    include_once( '../../modelo/usuarios/usuarios.Class.php' );	
				$objBaseDatos = new baseDatos();
				$objUsuario   = new usuarios( $objBaseDatos );
				$objUsuario->setStsNuCedulaUsuario($_POST['cedula']);
				$bolResultado=$objUsuario->validarUsuarioTabla();
				//Verifica que la cedula exista o no en DB
				if ( $bolResultado == TRUE ) 
				{
					//echo "{'error':1,'msj':'El usuario ya existe en el sistema'}";
					$arrResultado["error"] =1;
					$arrResultado["msj"] ='La Cédula de Usuario ya existe';
				}
				else 	//if ( $objUsuario->buscarUsuario( $_POST['intCedula'] ) )
				{
					
					$objUsuario->setStsNbBdUsuario('sicobim_'.strtolower($_POST['stsNbBdUsuario']));	
					$bolResultado=$objUsuario->validarUsuario();
					if ( $bolResultado==FALSE )
					{	
						//Carga de la data en el objeto para guardar de la DB
						$objUsuario->setArrStsNuCedulaUsuario( $_POST['cedula'] );
						$objUsuario->setStsNbUsuario( $_POST['stsNombreUsuario'] );
						$objUsuario->setBolStUsuario("TRUE");
						$objUsuario->setBolInControl("FALSE");
						$stsTipoUsuario=$_POST['tipoUsuario'];
						$stsPrefijo="sicobim_";
						if( $stsTipoUsuario=="A")
							$stsRol=$stsPrefijo."analista";
						if( $stsTipoUsuario=="S")
							$stsRol=$stsPrefijo."administrador";
						if( $stsTipoUsuario=="J")
							$stsRol=$stsPrefijo."jefe";
							if( $stsTipoUsuario=="R")
							$stsRol=$stsPrefijo."Registrador";
						
						$objUsuario->setStsInTipoUsuario( $stsRol );
						$objUsuario->setStsNbBdUsuario('sicobim_'.strtolower($_POST['stsNbBdUsuario']));
						//$objUsuario->setStsClave( $_POST['stsRepetirClave'] );
						$objUsuario->setStsClave( strtolower($_POST['stsNbBdUsuario']));
						$objUsuario->setStsNbOrga( $_POST['stsNbOrga'] );
						//echo $objUsuario->setStsNbOrga( $_POST['stsNbOrga'] );
						$objUsuario->setStsNuTelefono($_POST['stsNuTelefono']);
					   	
					   	// usuario de bd
					   	$bolResultado=$objUsuario->guardarRegistroBD();
					   	if  ($bolResultado=='t')
					   	{
					   		$objUsuario->setStsInTipoUsuario($stsTipoUsuario);
					   		// usuario de sistema
							if ( $objUsuario->GuardarRegistro() ) 
							{
								//$objUsuario->buscarUsuario( $_POST['intCedula'] );
								//$intCdUsuario=$objUsuario->getIntId();
								$arrResultado["error"] =0;
								$arrResultado["msj"] ='Usuario Registrado Satisfactoriamente';
								//echo "{'error':0,'msj':'Usuario Registrado Satisfactoriamente'}";
							}
							else //if ( $objUsuario->GuardarRegistro() )
							{
								
								//echo "{'error':1,'msj':'El usuario no pudo ser creado'}";
								$arrResultado["error"] =1;
								$arrResultado["msj"] ='El usuario no pudo ser creado';
								
							}	//Fin de if ( $objUsuario->GuardarRegistro() )
						
					   	}
					   	else
					   	{
					   		//echo "{'error':1,'msj':'El usuario no pudo ser creado'}";
					   		$arrResultado["error"] =1;
							$arrResultado["msj"] ='El usuario no pudo ser creado';
					   	}
					}
					else
					{
						//echo "{'error':1,'msj':'El Nombre de Usuario ya Existe '}";
						$arrResultado["error"] =1;
						$arrResultado["msj"] ='El Nombre de Usuario ya Existe';
					}
					
				}		//Fin de if ( $objUsuario->buscarUsuario( $_POST['intCedula'] ) )
	  		}
		    else
	  		{	
	  			//echo "{'error':1,'msj':'Caracteres Incorrectos'}";
	  			$arrResultado["error"] =1;
				$arrResultado["msj"] ='Caracteres Incorrectos';
	  		}
		
		echo json_encode($arrResultado );
	break;

	
	case 3:
		$arrResultado["vista"] = "usuario/consultarUsuario.php";
		echo json_encode( $arrResultado );
	break;
	
		
	case 4:
	  include_once( '../../modelo/usuarios/usuarios.Class.php' );	
		  $objBaseDatos = new baseDatos();
		  $objUsuario   = new usuarios( $objBaseDatos );
		 
		  if (trim($_GET['elegido']==""))
		  {
		  	$objUsuario->setStsNuCedulaUsuario($_POST['cedula']);
		 // 	echo "-->".$objUsuario->setStsNuCedulaUsuario($_POST['cedula'])."<--";
		  }
		  else
		  {
		  	$objUsuario->setStsNuCedulaUsuario($_GET['elegido']);
		  }
		//  echo $objUsuario->setStsNuCedulaUsuario($_POST['cedula']);
		   
		  $bolResultado=$objUsuario->validarUsuarioTabla();
		  
		  if ($bolResultado == TRUE)
		  {
				//$arrResultado['idRegistro']=$objUsuario->getArrIntId();
				$arrResultado['stsCedulaUsuario']=$objUsuario->getArrStsNuCedulaUsuario();
			  	$arrResultado['stsNbUsuario']=$objUsuario->getArrStsNbUsuario();
			  //	$arrResultado['stsNbBdUsuario']=$objUsuario->getArrLogin();
			  	$arrResultado['stsNbBdUsuario']=$objUsuario->getArrStsNbBdUsuario();
			  	$arrResultado['stsTipoUsuario']=$objUsuario->getArrStsInTipoUsuario();
			  	$arrResultado['bolStUsuario']=$objUsuario->getArrBolStUsuario();
			  	$arrResultado['stsNuTelefono']=$objUsuario->getArrStsNuTelefono();
			  	$arrResultado['tipoUsuario']=$objUsuario->getArrTipoUsuario();
			  	$arrResultado['estatusUsuario']=$objUsuario->getArrEstatusUsuario();
			 // 	print_r($arrResultado);
			  	$arrResultado['error'] = 0;
				$arrResultado['msj'] ="";
		  }
		  else
		  {
		  		$arrResultado['error'] = 1;
				$arrResultado['msj'] ="No Existe el Usuario";
		  	
		  }
		 //print_r($arrResultado);
		 echo json_encode( $arrResultado ); 
	break;
	
	/*MOFIFICAR REGISTRO*/
	case 5:
		 require_once("../../../assets/captcha/securimage.php");
	 	 $objCaptcha = new Securimage();
 		 $bolResultado = $objCaptcha->check( $_POST['stsCaptcha']);
 		 if($bolResultado == true)
	  	 {
			  include_once( '../../modelo/usuarios/usuarios.Class.php' );	
			  $objBaseDatos = new baseDatos();
			  $objUsuario   = new usuarios( $objBaseDatos );
			  $objUsuario->setStsNuCedulaUsuario($_POST['cedula']);
			  
			  $bolResultado=$objUsuario->validarUsuarioTabla();
			  
			  if ($bolResultado == TRUE)
			  {
					$objUsuario->setStsNbUsuario( $_POST['stsNombreUsuario'] );
					$objUsuario->setBolStUsuario($_POST['bolEstatus'] );
					$objUsuario->setStsNuTelefono($_POST['stsNuTelefono']);
					$objUsuario->setStsNbBdUsuario($_POST['stsLogin']);
					$inEstatusUsuario=$_POST['bolEstatus'];
					if ($inEstatusUsuario=="on")
						$objUsuario->setBolStUsuario("TRUE");
					if ($inEstatusUsuario=="")
						$objUsuario->setBolStUsuario("FALSE");
					$stsTipoUsuarioNuevo=$_POST['tipoUsuario'];
					$objUsuario->setStsInTipoUsuario($stsTipoUsuarioNuevo);	
					$stsPrefijo="sicobim_";
					if( $stsTipoUsuarioNuevo=="A")
						$stsRolNuevo=$stsPrefijo."analista";
					if( $stsTipoUsuarioNuevo=="S")
						$stsRolNuevo=$stsPrefijo."administrador";
					if( $stsTipoUsuarioNuevo=="J")
						$stsRolNuevo=$stsPrefijo."jefe";
					if( $stsTipoUsuarioNuevo=="R")
						$stsRolNuevo=$stsPrefijo."registrador";
					$objUsuario->setStsInTipoUsuario($stsTipoUsuarioNuevo);	
					
					$stsTipoUsuarioActual=$_POST['stsTipoUsuario'];
					if( $stsTipoUsuarioActual=="A")
						$stsRolActual=$stsPrefijo."analista";
					if( $stsTipoUsuarioActual=="S")
						$stsRolActual=$stsPrefijo."administrador";
					if( $stsTipoUsuarioActual=="J")
						$stsRolActual=$stsPrefijo."jefe";
					if( $stsTipoUsuarioActual=="R")
						$stsRolActual=$stsPrefijo."registrador";	
						
					/*if( $stsTipoUsuarioActual=="J")
						$stsRolActual=$stsPrefijo."jefe";*/
		
					if ($stsRolActual != $stsRolNuevo)
					{
						$intControlCambioTipoUsuario=1;
					}
					else
					{
						$intControlCambioTipoUsuario=0;	
					}
			 		
					if(($stsTipoUsuarioActual=="J")||($stsTipoUsuarioActual=="A") || ($stsTipoUsuarioActual=="R") ) 
					{
						if ($stsTipoUsuarioNuevo=="S")
						{
							$arrResultado['error'] = 1;
							$arrResultado['msj'] ="UD. no puede ser Tipo de Usuario: Administrador";
						}
						else 
						{
							$intResultado=$objUsuario->modificarUsuario($intControlCambioTipoUsuario,$stsRolActual,$stsRolNuevo); 
							if ($intResultado == TRUE) 
							{
								$arrResultado['error'] = 0;
								$arrResultado['msj'] ="El Usuario fue Modificado Satisfactoriamente";
							}
							else 	//if ( $objUsuario->modificarRegistro() )
							{
								//die("fd");
								$arrResultado['error'] = 1;
								$arrResultado['msj'] ="Problemas al Modificar el Usuario";
							}		//Fin de if ( $objUsuario->modificarRegistro() )	
						 }	
						}
				     else
					 {
						$intResultado=$objUsuario->modificarUsuario($intControlCambioTipoUsuario,$stsRolActual,$stsRolNuevo); 
							//6echo "else-->".$intResultado."<--";
							if ($intResultado == TRUE) 
							{
								$arrResultado['error'] = 0;
								$arrResultado['msj'] ="El Usuario fue Modificado Satisfactoriamente";
							}
							else 	//if ( $objUsuario->modificarRegistro() )
							{//die("feeee");
								$arrResultado['error'] = 1;
								$arrResultado['msj'] ="Problemas al Modificar el Usuario";
							}		//Fin de if ( $objUsuario->modificarRegistro() )		
						}
					
				  
			  }
			  else
			  {
			  		$arrResultado['error'] = 1;
					$arrResultado['msj'] ="No Existen Usuarios";
			  	
			  }
	  	 }
    	else
	  	{	
  			//echo "{'error':1,'msj':'Caracteres Incorrectos'}";
  			$arrResultado["error"] =1;
			$arrResultado["msj"] ='Caracteres Incorrectos';
	  	}
		 // print_r($arrResultado);
		 echo json_encode( $arrResultado ); 
	break;
	
	/*CAMBIAR CLAVE*/
	case 6:					
			//Incluimos la clase 
			//CAPTCHA
			require_once("../../../assets/captcha/securimage.php");
	  		$img = new Securimage();
	  		$valid = $img->check($_POST['caracteres']);
	  	
	  		if($valid == true)
	  		{ 
				include_once( '../../modelo/usuarios/usuarios.Class.php' );	
			  	$objBaseDatos = new baseDatos();
			  	$objUsuario   = new usuarios( $objBaseDatos );
				//Verifica que la cedula exista o no en DB
				$objUsuario->setStsNbBdUsuario($_SESSION['stsLoginUsuario_sicobim']);
		
			  	$bolResultado=$objUsuario->validarUsuarioTabla();
		
			  	if ($bolResultado == TRUE)
				{ 
					$stsLogin=$objUsuario->getStsNbBdUsuario();
					//$stsClave=$objUsuario->getStsClave();
					$stsClaveActual=base64_decode($_POST["claveActual"]);
					//$stsClaveActual = $_POST['claveActual'];
				
					$stsConexion=pg_connect("host=172.51.1.18 port=5432 dbname=sicobim user=$stsLogin password=$stsClaveActual");
					//$stsConexion=pg_connect("host=172.17.0.101 port=5432 dbname=censo_vivienda user=$stsLogin password=$stsClaveActual");
					
					if ($stsConexion==TRUE)
					{	//echo "ddddddddd";
						//echo $_SESSION['stsCedula_sicobim'];
											//$stsConfirmarclaveNueva = $_POST['confirmarclaveNueva'];
						$stsConfirmarclaveNueva=base64_decode($_POST['confirmarclaveNueva']);
						$objUsuario->setStsClave($stsConfirmarclaveNueva);				
						$objUsuario->setStsNuCedulaUsuario($_SESSION['stsCedula_sicobim']); 
						$objUsuario->setBolInControl("TRUE"); 
						 
						if ( $objUsuario->cambiarClave() ) 
						{
						
							echo "Exito";
						}
						else 
						{
							echo "NO";
							
						}				
					}
				 	else
				 	{
				 		echo "Clave";
						
					}
				}
				else 	//	if ($bolResultado == TRUE)
				{
					echo "NO";
				
					
				}		//Fin de if ( $objUsuario->buscarUsuario( $_POST['intCedula'] ) )
	  		} //CAPTCHA
		    else
	  		{	echo "Caracteres";
	  			
	  		}
	  	
		break;	//Fin de case 6
		
	case 7:
		session_destroy();
		echo 0;
	break;

	case 8:
		$arrResultado["vista"] = "../vista/usuario/reiniciarClave.php";
		echo json_encode( $arrResultado );
	break;
	
	case 9:
			include_once( '../../modelo/usuarios/usuarios.Class.php' );	
	  		$objBaseDatos = new baseDatos();
	  		$objUsuario   = new usuarios( $objBaseDatos );
	  		$objUsuario->setStsNuCedulaUsuario($_POST['stsNumeroCedula']);
	 		$bolResultado=$objUsuario->validarUsuarioTabla();
	 		
	 		if ( $bolResultado==TRUE )
	 		{
	 			$stsCedula=$objUsuario->getArrStsNuCedulaUsuario();
	 			$stsNbUsuario=$objUsuario->getArrStsNbUsuario();
				$bolEstatusUsuario=$objUsuario->getArrBolStUsuario();
				$stsNroTelefonoUsuario=$objUsuario->getArrStsNuTelefono();
				$stsNbBdUsuario=$objUsuario->getArrStsNbBdUsuario();
				$stsTipoUsuario=$objUsuario->getArrStsInTipoUsuario();
					
				if ($_SESSION["stsLoginUsuario"]!= $stsNbBdUsuario[0])
				{
				

					if ($bolEstatusUsuario[0]=="t")
						$estatusUsuario="Activo";
					if ($bolEstatusUsuario[0]=="f")
						$estatusUsuario="Inactivo";
					
					$arrResultado["stsCedula"] = $stsCedula[0];	
					$arrResultado["stsNbUsuario"] = $stsNbUsuario[0];	
					$arrResultado["bolEstatusUsuario"] = $estatusUsuario;	
					$arrResultado["stsNroTelefonoUsuario"] = $stsNroTelefonoUsuario[0];	
					$stsLogin=explode("sicobim_",$stsNbBdUsuario[0]);
					$arrResultado["stsNbBdUsuario"] = $stsLogin[1];
					$arrResultado["stsTipoUsuario"] = $stsTipoUsuario[0];
					$arrResultado["error"] = 0;	
						
				}
				else
				{
					$arrResultado["error"] = 1;
	 				$arrResultado["msj"] = "UD. mismo no puede reiniciar su Clave, dirijase al Módulo Cambiar Clave";
				}
	 		}
	 		else
	 		{
	 			$arrResultado["error"] = 1;
	 			$arrResultado["msj"] = "No Existe el Usuario";
	 			
	 		}
	 		
			$arrResultado["vista"] = "usuario/reiniciarClave.php";
			echo json_encode( $arrResultado );
	break;
	/*REINICIAR CLAVE*/
	case 10:
			include_once( '../../modelo/usuarios/usuarios.Class.php' );	
			$objBaseDatos = new baseDatos();
	  		$objUsuario   = new usuarios( $objBaseDatos );
	  		$objUsuario->setStsNuCedulaUsuario($_POST['stsCedula']);
	 		$bolResultado=$objUsuario->validarUsuarioTabla();
	 		if ( $bolResultado==TRUE )
	 		{
	 			
	 			$stslogin=$_POST['stslogin'];
	 			$objUsuario->setStsNbBdUsuario("sicobim_".$stslogin);
	 			$objUsuario->setStsClave($stslogin);				
				$objUsuario->setBolInControl("FALSE"); 
				if ( $objUsuario->cambiarClave() ) 
				{
					$arrResultado['error'] = 1;
					$arrResultado['msj'] ="Clave Reiniciada Satisfactoriamente";
				}
	 			else
	 			{
					$arrResultado['error'] = 1;
					$arrResultado['msj'] ="Problemas al Reiniciar la Clave";
	 			}		
	 		}
	 		else
	 		{
	 			$arrResultado["error"] = 1;
	 			$arrResultado["msj"] = "No Existe el Usuario";
	 			
	 		}
			$arrResultado["vista"] = "../../vista/usuario/reiniciarClave.php";
			echo json_encode( $arrResultado );
	break;
	/*********CERRAR SESION*********/
	case 11:
		
		//session_destroy();
		echo $stsUrl="../../vista/principal.php"; 
		
	break;
	
}/*FIN DEL SWITCH*/
?>
