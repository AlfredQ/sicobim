<?php
/*
 * Created on 15/06/2012
 * <Nombre del archivo: trazaUsuario.Class.php>
 * <Fecha de creación del archivo: 15/06/2012> 
 * <Versión del archivo: 1.0>
 * <Autor del archivo: ....>
 * <Breve explicación del contenido de el archivo: Modelo de Datos asociados a la tabla traza>
*/
require_once "../../modelo/baseDatos.Class.php";

class trazaUsuario
{
	private $intId;
  	private $stsIpTraza;
   	private $stsTipoMovimientoTraza;
   	private $stsNbTablaTraza;
   	private $intIdRegistroTraza;
   	private $fecHrTraza;
   	private $stsNbBdUsuario;
   	private $stsNbEsquema;
   	private $total;

    /* ARREGLOS */
   	private $arrIntId = array();
  	private $arrStsIpTraza = array();
   	private $arrStsTipoMovimientoTraza = array();
   	private $arrStsNbTablaTraza = array();
   	private $arrIntIdRegistroTraza = array();
   	private $arrFecHrTraza = array();
   	private $arrStsNbBdUsuario = array();
   	private $arrStsNbEsquema = array();

	protected $db;
	
 	public function __construct( Base $db )
    {
        $this->db = $db;
    }
    
    
    //GET
	/**
	 * @param $intId the $intId to set
	 */
	public function getIntId($intId)
	{
		return $this->intId;	
	}

	/**
	 * @param $stsIpTraza the $stsIpTraza to set
	 */
	public function getStsIpTraza($stsIpTraza)
	{
		return $this->stsIpTraza;
	}
	
	/**
	 * @param $stsTipoMovimientoTraza the $stsTipoMovimientoTraza to set
	 */
	public function getStsTipoMovimientoTraza()
	{
		return $this->stsTipoMovimientoTraza;
	}
	
	/**
	 * @param $stsNbTablaTraza the $stsNbTablaTraza to set
	 */
	public function getStsNbTablaTraza()
	{
		return $this->stsNbTablaTraza;
	}
	
	/**
	 * @param $intIdRegistroTraza the $intIdRegistroTraza to set
	 */
	public function getIntIdRegistroTraza()
	{
		return $this->intIdRegistroTraza;
	}
	
	/**
	 * @param $fecHrTraza the $fecHrTraza to set
	 */
	public function getFecHrTraza()
	{
		return $this->fecHrTraza;
	}
	
	/**
	 * @param $stsNbBdUsuario the $stsNbBdUsuario to set
	 */
	public function getStsNbBdUsuario()
	{
		return $this->stsNbBdUsuario;
	}
	
	/**
	 * @param $stsNbEsquema the $stsNbEsquema to set
	 */
	public function getStsNbEsquema()
	{
		return $this->stsNbEsquema;
	}
	
	/**
	 * @param $total the $total to set
	 */
	public function getTotal()
	{
		return $this->total;
	}
	
	/**
	 * @param $arrIntId the $arrIntId to set
	 */
	public function getArrIntId()
	{
		return $this->arrIntId;
	}
	
	/**
	 * @param $arrStsIpTraza the $arrStsIpTraza to set
	 */
	public function getArrStsIpTraza()
	{
		return $this->arrStsIpTraza;
	}
	
	/**
	 * @param $arrStsTipoMovimientoTraza the $arrStsTipoMovimientoTraza to set
	 */
	public function getArrStsTipoMovimientoTraza()
	{
		return $this->arrStsTipoMovimientoTraza;
	}
	
	/**
	 * @param $arrStsNbTablaTraza the $arrStsNbTablaTraza to set
	 */
	public function getArrStsNbTablaTraza()
	{
		return $this->arrStsNbTablaTraza;
	}
	
	/**
	 * @param $arrIntIdRegistroTraza the $arrIntIdRegistroTraza to set
	 */
	public function getArrIntIdRegistroTraza()
	{
		return $this->arrIntIdRegistroTraza;
	}
	
	/**
	 * @param $arrFecHrTraza the $arrFecHrTraza to set
	 */
	public function getArrFecHrTraza()
	{
		return $this->arrFecHrTraza;
	}

	/**
	 * @param $arrStsNbBdUsuario the $arrStsNbBdUsuario to set
	 */
	public function getArrStsNbBdUsuario()
	{
		return $this->arrStsNbBdUsuario;
	}
	
	/**
	 * @param $arrStsNbEsquema the $arrStsNbEsquema to set
	 */
	public function getArrStsNbEsquema()
	{
		return $this->arrStsNbEsquema;
	}
	
	
	//SET
	/**
	 * @return the $intId
	 */
	
	public function setIntId($intId)
	{
		$this->intId = $intId;
	}
	
	/**
	 * @return the $stsIpTraza
	 */
	public function setStsIpTraza($stsIpTraza)
	{
		$this->StsIpTraza = $stsIpTraza;
	}
	
	/**
	 * @return the $stsTipoMovimientoTraza
	 */
	public function setStsTipoMovimientoTraza($stsTipoMovimientoTraza)
	{
		$this->stsTipoMovimientoTraza = $stsTipoMovimientoTraza;
	}
	
	/**
	 * @return the $stsNbTablaTraza
	 */
	public function setStsNbTablaTraza($stsNbTablaTraza)
	{
		$this->stsNbTablaTraza = $stsNbTablaTraza;
	}
	
	/**
	 * @return the $intIdRegistroTraza
	 */
	public function setIntIdRegistroTraza($intIdRegistroTraza)
	{
		$this->intIdRegistroTraza = $intIdRegistroTraza;
	}
	
	/**
	 * @return the $fecHrTraza
	 */
	public function setFecHrTraza($fecHrTraza)
	{
		$this->fecHrTraza = $fecHrTraza;
	}
	
	/**
	 * @return the $stsNbBdUsuario
	 */
	public function setStsNbBdUsuario($stsNbBdUsuario)
	{
		$this->stsNbBdUsuario = $stsNbBdUsuario;
	}
	
	/**
	 * @return the $StsNbEsquema
	 */
	public function setStsNbEsquema($stsNbEsquema)
	{
		$this->stsNbEsquema = $stsNbEsquema;
	}
	
	/**
	 * @return the $total
	 */
	public function setTotal($total)
	{
		$this->total = $total;
	}
	

	/**
	 * @param $arrIntId the $arrIntId to set
	 */
	public function setArrIntId($arrIntId) {
		array_push($this->arrIntId, $arrIntId);	
	}

	/**
	 * @param $arrStsIpTraza the $arrStsIpTraza to set
	 */
	public function setArrStsIpTraza($arrStsIpTraza)
	{
		array_push($this->arrStsIpTraza, $arrStsIpTraza);	
	}
	
	/**
	 * @param $arrStsTipoMovimientoTraza the $arrStsTipoMovimientoTraza to set
	 */
	public function setArrStsTipoMovimientoTraza($arrStsTipoMovimientoTraza)
	{
		array_push($this->arrStsTipoMovimientoTraza, $arrStsTipoMovimientoTraza);	
	}
	
	/**
	 * @param $arrStsNbTablaTraza the $arrStsNbTablaTraza to set
	 */
	public function setArrStsNbTablaTraza($arrStsNbTablaTraza)
	{
		array_push($this->arrStsNbTablaTraza, $arrStsNbTablaTraza);	
	}
	
	/**
	 * @param $arrIntIdRegistroTraza the $arrIntIdRegistroTraza to set
	 */
	public function setArrIntIdRegistroTraza($arrIntIdRegistroTraza)
	{
		array_push($this->arrIntIdRegistroTraza, $arrIntIdRegistroTraza);	
	}
	
	/**
	 * @param $arrFecHrTraza the $arrFecHrTraza to set
	 */
	public function setArrFecHrTraza($arrFecHrTraza)
	{
		array_push($this->arrFecHrTraza, $arrFecHrTraza);	
	}
	
	/**
	 * @param $arrStsNbBdUsuario the $arrStsNbBdUsuario to set
	 */
	public function setArrStsNbBdUsuario($arrStsNbBdUsuario)
	{
		array_push($this->arrStsNbBdUsuario, $arrStsNbBdUsuario);	
	}
	
	/**
	 * @param $arrStsNbEsquema the $arrStsNbEsquema to set
	 */
	public function setArrStsNbEsquema($arrStsNbEsquema)
	{
		array_push($this->arrStsNbEsquema, $arrStsNbEsquema);	
	}

    ////////////
	//FUNCIONES
	////////////
	public function consultarTrazaUsuarioTotal()
	{
		$stsWhere = '';
		$condi = '';
		
			if ($this->getStsNbBdUsuario() != "")
			{
				$stsWhere = "nb_bd_usuario = '".$this->getStsNbBdUsuario()."'";  
			}
			
			if ($this->getFecHrTraza()!= "")
			{
				if ($stsWhere == "")
				{
					//cast(fe_hr_traza as date) between '2012-06-14' and '2012-06-14'
					//$stsWhere= "fe_hr_traza LIKE ".$this->getFecHrTraza()."";
					$stsWhere = "CAST(fe_hr_traza AS DATE) BETWEEN '".$this->getFecHrTraza()."' AND '".$this->getFecHrTraza()."'";
				}  
				else
				{
					$stsWhere = $stsWhere. " AND CAST(fe_hr_traza AS DATE) BETWEEN '".$this->getFecHrTraza()."' AND '".$this->getFecHrTraza()."'";
				}	
			}
			
			if ($this->getStsNbTablaTraza()!= "")
			{
				if ($stsWhere == "")
				{
					$stsWhere= "nb_tabla_traza = '".$this->getStsNbTablaTraza()."'";
				}  
				else
				{
					$stsWhere = $stsWhere. " AND nb_tabla_traza = '".$this->getStsNbTablaTraza()."'";
				}	
			}
			
			if ($this->getStsTipoMovimientoTraza()!= "")
			{
				if ($stsWhere == "")
				{
					$stsWhere= "in_tipo_movimiento_traza = '".$this->getStsTipoMovimientoTraza()."'";
				}  
				else
				{
					$stsWhere = $stsWhere. " AND in_tipo_movimiento_traza = '".$this->getStsTipoMovimientoTraza()."'";
				}	
			}
			
			if ($stsWhere != '')
				$condi = "WHERE ".$stsWhere;
		
		$arrResultado = $this->db->EjecutarQuery("SELECT COUNT(id) AS total FROM sch_sicobim.traza ".$condi);
		
		$this->setTotal($arrResultado->fields['total']);
	}
	
	public function consultarTrazaUsuario($intOpcion, $desde, $hasta)
	{
		$stsWhere = '';
		$condi = '';
		$condi2 = '';
		
			if ($this->getStsNbBdUsuario() != "")
			{
				$stsWhere = "nb_bd_usuario = '".$this->getStsNbBdUsuario()."'";  
			}
			
			if ($this->getFecHrTraza()!= "")
			{
				if ($stsWhere == "")
				{
					$stsWhere = "CAST(fe_hr_traza AS DATE) BETWEEN '".$this->getFecHrTraza()."' AND '".$this->getFecHrTraza()."'";
				}  
				else
				{
					$stsWhere = $stsWhere. " AND CAST(fe_hr_traza AS DATE) BETWEEN '".$this->getFecHrTraza()."' AND '".$this->getFecHrTraza()."'";
				}	
			}
			
			if ($this->getStsNbTablaTraza()!= "")
			{
				if ($stsWhere == "")
				{
					$stsWhere= "nb_tabla_traza = '".$this->getStsNbTablaTraza()."'";
				}  
				else
				{
					$stsWhere = $stsWhere. " AND nb_tabla_traza = '".$this->getStsNbTablaTraza()."'";
				}	
			}
			
			if ($this->getStsTipoMovimientoTraza()!= "")
			{
				if ($stsWhere == "")
				{
					$stsWhere= "in_tipo_movimiento_traza = '".$this->getStsTipoMovimientoTraza()."'";
				}  
				else
				{
					$stsWhere = $stsWhere. " AND in_tipo_movimiento_traza = '".$this->getStsTipoMovimientoTraza()."'";
				}	
			}
			
			if ($stsWhere != '')
				$condi = "WHERE ".$stsWhere;
				
			//if (($desde != '') && ($hasta != ''))
				$condi2 = ' LIMIT '.$hasta.' offset '.$desde;
				
		//echo $desde.".....".$hasta;exit;
		//echo $condi2;
		$arrResultado = $this->db->EjecutarQuery("SELECT * FROM sch_sicobim.traza ".$condi.$condi2);
		
			if ($intOpcion == 0)
			{
				return $arrResultado->RecordCount();
			}
			else
			{
				if ($intOpcion == 1)
				{
					while (!$arrResultado->EOF)
					{
				     	$this->setArrIntId($arrResultado->fields['id']);
					  	$this->setArrStsIpTraza($arrResultado->fields['ip_traza']);
					  	$this->setArrStsTipoMovimientoTraza($arrResultado->fields['in_tipo_movimiento_traza']);
					  	$this->setArrStsNbTablaTraza($arrResultado->fields['nb_tabla_traza']);
					  	$this->setArrIntIdRegistroTraza($arrResultado->fields['id_registro_traza']);
					  	$this->setArrFecHrTraza($arrResultado->fields['fe_hr_traza']);
					  	$this->setArrStsNbBdUsuario($arrResultado->fields['nb_bd_usuario']);
					  	$this->setArrStsNbEsquema($arrResultado->fields['nb_esquema']);
					    
					    $arrResultado->MoveNext ();
					}	//Fin de while ( !$arrResultado->EOF )
				}
			}
	}
	
	public function consultarNombreUsuario($intOpcion)
	{
		$vista = "usuario";
		$campos = "nb_bd_usuario";
		$valor = "nb_bd_usuario";
		$descripcion = "nb_bd_usuario";
		$comboAEvaluar = "";
		
		return $this->db->ListarVWxCampos($vista, $campos, $valor, $descripcion, $comboAEvaluar);
	}
}
?>