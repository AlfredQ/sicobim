<?php
/*
	 * Created on 3/11/2011
	 * <Nombre del archivo: usuariosModelo.php> * 
	 * <Versión del archivo: 1.0>
	 * <Autor del archivo: Virginia Naassaneh>
	 * <Breve explicación del contenido de el archivo: 
	 * Modelo de Usuarios del sistema>
*/

require_once('../../modelo/baseDatos.Class.php');
class usuarios 
{	
	private $intId;
	private $stsNuCedulaUsuario;
  	private $stsNbUsuario;
  	private $stsNbBdUsuario;
  	private $bolStUsuario;
  	private $stsInTipoUsuario;
  	private $stsNuTelefono;
  	private $stsNbOrga;
  	private $stsClave;
  	private $bolInControl;
  	/*arreglos*/
  	
  	private $arrIntId= array();
	private $arrStsNuCedulaUsuario= array();
  	private $arrStsNbUsuario= array();
  	private $arrStsNbBdUsuario= array();
  	private $arrBolStUsuario= array();
  	private $arrStsInTipoUsuario= array();
  	private $arrStsNuTelefono= array();
  	private $arrStsNbOrga= array();
  	private $arrBolInControl= array();
  	
  	private $arrLogin= array();
  	private $arrEstatusUsuario= array();
  	private $arrTipoUsuario= array();
  	
  	
 	protected $db;

    public function __construct( Base $db )
    {
        $this->db = $db;
    }
	/**
	 * @param $arrBolInControl the $arrBolInControl to set
	 */
	public function setArrBolInControl($arrBolInControl) {
		array_push($this->arrBolInControl,$arrBolInControl);	
	}

/**
	 * @param $arrStsNbOrga the $arrStsNbOrga to set
	 */
	public function setArrStsNbOrga($arrStsNbOrga) {
		array_push($this->arrStsNbOrga,$arrStsNbOrga);	
	}
	/**
	 * @return the $arrBolInControl
	 */
	public function getArrBolInControl() {
		return $this->arrBolInControl;
	}

	/**
	 * @param $bolInControl the $bolInControl to set
	 */
	public function setBolInControl($bolInControl) {
		$this->bolInControl = $bolInControl;
	}

	/**
	 * @return the $bolInControl
	 */
	public function getBolInControl() {
		return $this->bolInControl;
	}

	/**
	 * @param $arrTipoUsuario the $arrTipoUsuario to set
	 */
	public function setArrTipoUsuario($arrTipoUsuario) {
		array_push($this->arrTipoUsuario,$arrTipoUsuario);	
	}

	/**
	 * @param $arrEstatusUsuario the $arrEstatusUsuario to set
	 */
	public function setArrEstatusUsuario($arrEstatusUsuario) {
		array_push($this->arrEstatusUsuario,$arrEstatusUsuario);	
	}

	/**
	 * @param $arrLogin the $arrLogin to set
	 */
	public function setArrLogin($arrLogin) {
		array_push($this->arrLogin,$arrLogin);	
	}

	/**
	 * @return the $arrTipoUsuario
	 */
	public function getArrTipoUsuario() {
		return $this->arrTipoUsuario;
	}

	/**
	 * @return the $arrEstatusUsuario
	 */
	public function getArrEstatusUsuario() {
		return $this->arrEstatusUsuario;
	}

/**
	 * @return the $arrStsNbOrga
	 */
	public function getArrStsNbOrga() {
		return $this->arrStsNbOrga;
	}
	
	/**
	 * @return the $arrLogin
	 */
	public function getArrLogin() {
		return $this->arrLogin;
	}

	/**
	 * @param $stsClave the $stsClave to set
	 */
	public function setStsClave($stsClave) {
		$this->stsClave = $stsClave;
	}

	/**
	 * @return the $stsClave
	 */
	public function getStsClave() {
		return $this->stsClave;
	}

	/**
	 * @param $arrStsNuTelefono the $arrStsNuTelefono to set
	 */
	public function setArrStsNuTelefono($arrStsNuTelefono) {
		array_push($this->arrStsNuTelefono,$arrStsNuTelefono);	
	}

	/**
	 * @param $arrStsInTipoUsuario the $arrStsInTipoUsuario to set
	 */
	public function setArrStsInTipoUsuario($arrStsInTipoUsuario) {
		array_push($this->arrStsInTipoUsuario,$arrStsInTipoUsuario);	
	}

	/**
	 * @param $arrBolStUsuario the $arrBolStUsuario to set
	 */
	public function setArrBolStUsuario($arrBolStUsuario) {
		array_push($this->arrBolStUsuario,$arrBolStUsuario);	
	}

	/**
	 * @param $arrStsNbBdUsuario the $arrStsNbBdUsuario to set
	 */
	public function setArrStsNbBdUsuario($arrStsNbBdUsuario) {
		array_push($this->arrStsNbBdUsuario,$arrStsNbBdUsuario);	
	}

	/**
	 * @param $arrStsNbUsuario the $arrStsNbUsuario to set
	 */
	public function setArrStsNbUsuario($arrStsNbUsuario) {
		array_push($this->arrStsNbUsuario,$arrStsNbUsuario);
	}

	/**
	 * @param $arrStsNuCedulaUsuario the $arrStsNuCedulaUsuario to set
	 */
	public function setArrStsNuCedulaUsuario($arrStsNuCedulaUsuario) {
		array_push($this->arrStsNuCedulaUsuario,$arrStsNuCedulaUsuario);
	}

	/**
	 * @param $arrIntId the $arrIntId to set
	 */
	public function setArrIntId($arrIntId) {
		array_push($this->arrIntId,$arrIntId);
	}

	/**
	 * @return the $arrStsNuTelefono
	 */
	public function getArrStsNuTelefono() {
		return $this->arrStsNuTelefono;
	}

	/**
	 * @return the $arrStsInTipoUsuario
	 */
	public function getArrStsInTipoUsuario() {
		return $this->arrStsInTipoUsuario;
	}

	/**
	 * @return the $arrBolStUsuario
	 */
	public function getArrBolStUsuario() {
		return $this->arrBolStUsuario;
	}

	/**
	 * @return the $arrStsNbBdUsuario
	 */
	public function getArrStsNbBdUsuario() {
		return $this->arrStsNbBdUsuario;
	}

	/**
	 * @return the $arrStsNbUsuario
	 */
	public function getArrStsNbUsuario() {
		return $this->arrStsNbUsuario;
	}

	/**
	 * @return the $arrStsNuCedulaUsuario
	 */
	public function getArrStsNuCedulaUsuario() {
		return $this->arrStsNuCedulaUsuario;
	}

	/**
	 * @return the $arrIntId
	 */
	public function getArrIntId() {
		return $this->arrIntId;
	}

	/**
	 * @param $stsNuTelefono the $stsNuTelefono to set
	 */
	public function setStsNuTelefono($stsNuTelefono) {
		$this->stsNuTelefono = $stsNuTelefono;
	}
	
/**
	 * @param $stsNbOrga the $stsNbOrga to set
	 */
	public function setStsNbOrga($stsNbOrga) {
		$this->stsNbOrga = $stsNbOrga;
	}

	/**
	 * @param $stsInTipoUsuario the $stsInTipoUsuario to set
	 */
	public function setStsInTipoUsuario($stsInTipoUsuario) {
		$this->stsInTipoUsuario = $stsInTipoUsuario;
	}

	/**
	 * @param $bolStUsuario the $bolStUsuario to set
	 */
	public function setBolStUsuario($bolStUsuario) {
		$this->bolStUsuario = $bolStUsuario;
	}

	/**
	 * @param $stsNbBdUsuario the $stsNbBdUsuario to set
	 */
	public function setStsNbBdUsuario($stsNbBdUsuario) {
		$this->stsNbBdUsuario = $stsNbBdUsuario;
	}

	/**
	 * @param $stsNbUsuario the $stsNbUsuario to set
	 */
	public function setStsNbUsuario($stsNbUsuario) {
		$this->stsNbUsuario = $stsNbUsuario;
	}

	/**
	 * @param $stsNuCedulaUsuario the $stsNuCedulaUsuario to set
	 */
	public function setStsNuCedulaUsuario($stsNuCedulaUsuario) {
		$this->stsNuCedulaUsuario = $stsNuCedulaUsuario;
	}

	/**
	 * @param $intId the $intId to set
	 */
	public function setIntId($intId) {
		$this->intId = $intId;
	}

	/**
	 * @return the $stsNuTelefono
	 */
	public function getStsNuTelefono() {
		return $this->stsNuTelefono;
	}

/**
	 * @return the $stsNbOrga
	 */
	public function getStsNbOrga() {
		return $this->stsNbOrga;
	}
	/**
	 * @return the $stsInTipoUsuario
	 */
	public function getStsInTipoUsuario() {
		return $this->stsInTipoUsuario;
	}

	/**
	 * @return the $bolStUsuario
	 */
	public function getBolStUsuario() {
		return $this->bolStUsuario;
	}

	/**
	 * @return the $stsNbBdUsuario
	 */
	public function getStsNbBdUsuario() {
		return $this->stsNbBdUsuario;
	}

	/**
	 * @return the $stsNbUsuario
	 */
	public function getStsNbUsuario() {
		return $this->stsNbUsuario;
	}

	/**
	 * @return the $stsNuCedulaUsuario
	 */
	public function getStsNuCedulaUsuario() {
		return $this->stsNuCedulaUsuario;
	}

	/**
	 * @return the $intId
	 */
	public function getIntId() {
		return $this->intId;
	}

	
	/* FUNCION QUE VALIDA SI EXISTE EN LA TABLA 
	 * DE USUARIOS DE LA BD 
	 * */
	public function validarUsuario()
	{ //echo "funcion de validacion";
		//$objBaseDatos= new BaseDatos();	
		if ( $this->db->GetEstatusBaseDatos()=="TRUE" )
		{
			$arrResultado=$this->db->EjecutarVista("fn_validar_usuario('".$this->getStsNbBdUsuario()."')");
			if ($arrResultado->fields['fn_validar_usuario']=="t")
				return TRUE;
			else
				return FALSE;
		}
		else
		{
			if ( $this->db->GetEstatusBaseDatos()=="FALSE" )
			{
				return FALSE;
			}
		}
	}
	
	public function validarUsuarioTabla()
	{

		if ($this->getStsNuCedulaUsuario()!="")
		{
			$stsWhere= "nu_cedula_usuario='".$this->getStsNuCedulaUsuario()."'";  
		}

		if ($this->getStsNbBdUsuario()!= "")
		{
			if ( $stsWhere == "" )
			{
				$stsWhere= "nb_bd_usuario='".$this->getStsNbBdUsuario()."'";  
			}  
			else
			{
				$stsWhere = $stsWhere. " and nb_bd_usuario='".$this->getStsNbBdUsuario()."'";
			}		
		}
		if ($stsWhere != "")
		{
			$stsWhere= "WHERE ".$stsWhere;
		} 
	//die("fff");
		$arrResultado=$this->db->EjecutarQuery("SELECT * FROM sch_sicobim.usuario $stsWhere");
		//echo $arrResultado->fields['nu_cedula_usuario'];
	
	//echo "SELECT * FROM sch_sicobim.usuario $stsWhere"; 
		if ($arrResultado->fields['nu_cedula_usuario']!="")
		{
			while ( !$arrResultado->EOF )
			{	
				
								
				//$this->setArrIntId($arrResultado->fields['id_registro']);
				$this->setArrStsNuCedulaUsuario($arrResultado->fields['nu_cedula_usuario']);
			  	$this->setArrStsNbUsuario($arrResultado->fields['nb_usuario']);
			  	$this->setArrStsNbBdUsuario($arrResultado->fields['nb_bd_usuario']);
			  	$this->setArrBolStUsuario($arrResultado->fields['st_usuario']);
			  	$this->setArrStsInTipoUsuario($arrResultado->fields['in_tipo_usuario']);
			  	$this->setArrStsNuTelefono($arrResultado->fields['nu_telefono']);
			  	$this->setArrBolInControl($arrResultado->fields['in_control']);
			  	$this->setArrStsNbOrga($arrResultado->fields['id_orga']);
			  	
			    $stsLogin=explode('_',$arrResultado->fields['nb_bd_usuario']);
				$this->setArrLogin($stsLogin[2]);
			

			  	if ($arrResultado->fields['in_tipo_usuario']=="S")
			  		$stsTipoUsuario="Administrador";
			  	if ($arrResultado->fields['in_tipo_usuario']=="A")
			  		$stsTipoUsuario="Analista";
			 	if ($arrResultado->fields['in_tipo_usuario']=="J")
			  		$stsTipoUsuario="Jefe de Unidad";
			  	if ($arrResultado->fields['in_tipo_usuario']=="R")
			  		$stsTipoUsuario="Registrador";
			  		
			  	$this->setArrTipoUsuario($stsTipoUsuario);
			  
			  	if ($arrResultado->fields['st_usuario']=='t')
			  		$estatusUsuario="Activo";
			
			  	if ($arrResultado->fields['st_usuario']=='f')
			  		$estatusUsuario="Inactivo";
			  		
			  	$this->setArrEstatusUsuario($estatusUsuario);
				
				$arrResultado->MoveNext ();	
			}
			  	return TRUE;
		
		}
		else
		{
			return FALSE;
		}
	}	
	
	public function validarUsuarioTablaConsulta($desde, $hasta)
	{
			if ($this->getStsNuCedulaUsuario() != "")
			{
				$stsWhere= "nu_cedula_usuario='".$this->getStsNuCedulaUsuario()."'";
			}

			if ($stsWhere != "")
			{
				$stsWhere= "WHERE ".$stsWhere;
			}
			
	//	$condi2 = ' LIMIT '.$hasta.' offset '.$desde;
		//echo ("SELECT * FROM sicobim.usuario ".$stsWhere.$condi2);
		$arrResultado = $this->db->EjecutarQuery("SELECT * FROM sch_sicobim.usuario ".$stsWhere/*.$condi2*/);
		
			if ($arrResultado->fields['nu_cedula_usuario'] != "")
			{
					while (!$arrResultado->EOF)
					{
						//$this->setArrIntId($arrResultado->fields['id_registro']);
						$this->setArrStsNuCedulaUsuario($arrResultado->fields['nu_cedula_usuario']);
						$this->setArrStsNbUsuario($arrResultado->fields['nb_usuario']);
						$this->setArrStsNbBdUsuario($arrResultado->fields['nb_bd_usuario']);
						$this->setArrBolStUsuario($arrResultado->fields['st_usuario']);
						$this->setArrStsInTipoUsuario($arrResultado->fields['in_tipo_usuario']);
						$this->setArrStsNuTelefono($arrResultado->fields['nu_telefono']);
						$this->setArrBolInControl($arrResultado->fields['in_control']);
						//$this->setArrStsNbOrga($arrResultado->fields['id_orga']);
						$stsLogin = explode('_', $arrResultado->fields['nb_bd_usuario']);
						$this->setArrLogin($stsLogin[2]);

						if ($arrResultado->fields['in_tipo_usuario'] == "S")
							$stsTipoUsuario = "Administrador";
						if ($arrResultado->fields['in_tipo_usuario'] == "A")
							$stsTipoUsuario = "Analista";
						if ($arrResultado->fields['in_tipo_usuario'] == "J")
							$stsTipoUsuario = "Jefe de Unidad";
						if ($arrResultado->fields['in_tipo_usuario'] == "R")
							$stsTipoUsuario = "Registrador";

						$this->setArrTipoUsuario($stsTipoUsuario);
						
						if ($arrResultado->fields['st_usuario'] == 't')
							$estatusUsuario = "Activo";
					
						if ($arrResultado->fields['st_usuario'] == 'f')
							$estatusUsuario = "Inactivo";
							
						$this->setArrEstatusUsuario($estatusUsuario);
						
						$arrResultado->MoveNext();	
					}
					
				return TRUE;
			}
			else
			{
				return FALSE;
			}
	}
	
	
	public function guardarRegistroBD() 
		{
			// die("dd");
	   		if ($this->getStsInTipoUsuario()!="sicobim_administrador")
	   		{
				$stsFuncion="fn_i_usuariobd(
									'".$this->getStsNbBdUsuario()."', 
									'".$this->getStsClave()."', 
									'".$this->getStsInTipoUsuario()."' 
									)";
	 			
				$arrResultado=$this->db->EjecutarVista($stsFuncion);
        		if ( $arrResultado ) 
				{
					return TRUE;
				
				}
				else		//if ( $intResultado )
				{
					return FALSE;
				}			//Fin de if ( $intResultado )
				
	   		}
	   		else
	   		{
	   			$stsFuncion="fn_i_usuario_supervisor_usuario(
									'".$this->getStsNbBdUsuario()."', 
									'".$this->getStsClave()."', 
									'".$this->getStsInTipoUsuario()."' 
									)";
	 			
				$arrResultado=$this->db->EjecutarVista($stsFuncion);	
			
				if ( $arrResultado ) 
				{
					return TRUE;
				
				}
				else		//if ( $intResultado )
				{
					return FALSE;
				}			//Fin de if ( $intResultado )
	   		}	   				

		   		
		}//public function guardarUsuarioBD($stsNbRol) 
		
	public function GuardarRegistro( )
		{			
			
			$stsFuncion="INSERT INTO sch_sicobim.usuario(nu_cedula_usuario, nb_usuario, nb_bd_usuario, st_usuario, 
				            in_tipo_usuario, nu_telefono, in_control, id_orga)
				    VALUES ('".$this->getStsNuCedulaUsuario()."','".$this->getStsNbUsuario()."',
				    		'".$this->getStsNbBdUsuario()."','".$this->getBolStUsuario()."',
				    		'".$this->getStsInTipoUsuario()."','".$this->getStsNuTelefono()."','".$this->getBolInControl()."','".$this->getStsNbOrga()."' )";
			
			$intResultado=$this->db->EjecutarQuery($stsFuncion);	

		
			if ( $intResultado ) 
			{	
				return TRUE;
			
			}
			else		//if ( $intResultado )
			{	
				return FALSE;
			}			//Fin de if ( $intResultado )
				
		}	//	fin de 'GuardarRegistro'
	public function modificarUsuario($intControlCambioTipoUsuario,$stsRolActual,$stsRolNuevo)
		{	
		/*	echo	"UPDATE sch_sicobim.usuario
					   SET nb_usuario='".$this->getStsNbUsuario()."', st_usuario='".$this->getBolStUsuario()."', 
					   in_tipo_usuario='".$this->getStsInTipoUsuario()."', nu_telefono='".$this->getStsNuTelefono()."'
					   WHERE nu_cedula_usuario='".$this->getStsNuCedulaUsuario()."'";	*/
			$stsFuncion="UPDATE sch_sicobim.usuario
					   SET nb_usuario='".$this->getStsNbUsuario()."', st_usuario='".$this->getBolStUsuario()."', 
					   in_tipo_usuario='".$this->getStsInTipoUsuario()."', nu_telefono='".$this->getStsNuTelefono()."'
					   WHERE nu_cedula_usuario='".$this->getStsNuCedulaUsuario()."'";
			$intResultado=$this->db->EjecutarQuery($stsFuncion);	
			if ($intControlCambioTipoUsuario==1)	
			{
				$stsFuncion="funcion_m_tipo_usuario('".$this->getStsNbBdUsuario()."','".$stsRolActual."','".$stsRolNuevo."')";
				$intResultado=$this->db->EjecutarProcedure($stsFuncion);
			}
			if ( $intResultado ) 
			{
				return TRUE;
			}
			else 
			{
				return FALSE;
			}
				
		}	//	fin de 'GuardarRegistro'
		
		
	public function cambiarClave() 
		{ 
			
			
			
			$stsFuncion="UPDATE sch_sicobim.usuario
					   SET in_control='".$this->getBolInControl()."'
					   WHERE nu_cedula_usuario='".$this->getStsNuCedulaUsuario()."'";
			$intResultado=$this->db->EjecutarQuery($stsFuncion);	
			
			$stsFuncion="fn_cambiar_clave('".$this->getStsNbBdUsuario()."','".$this->getStsClave()."')";
			$intResultado=$this->db->EjecutarProcedure($stsFuncion);	
			if ( $intResultado ) 
			{
				return TRUE;
			}
			else 
			{
				return FALSE;
			}

		}	
}
?>
