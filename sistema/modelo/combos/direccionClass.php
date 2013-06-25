<?php 
/*
 * Created on 30/05/2012
 * <Nombre del archivo: subGrupo.Class.php>
 * <Fecha de creación del archivo: 30/05/2012> 
 * <Versión del archivo: 1.0>
 * <Autor del archivo: ....>
 * <Breve explicación del contenido de el archivo: Modelo de Datos asociados a la tabla Edificios>
*/
//echo "ok";
//die();
require_once('../../modelo/baseDatos.Class.php');

class direccion
{
	
    /* DEPENDENCIA */
    private $intCdDependencia;
    private $stsNbDependencia;
    
    /* DIRECCIONES */
    private $intCdDireccion;
    private $stsNbDireccion;
    
   
    /* ARREGLOS DEPENDENCIA */
    private $arrIntCdDependencia; 
    private $arrStsNbDependencia;
    
    /* ARREGLOS DIRECCIONES */
    private $arrIntCdDireccion; 
    private $arrStsNbDireccioN;
    
   
    
	protected $db;
	
	public function __construct( BaseDatos $db )
    { 
        $this->db = $db;
           
    }

	
	/* SET ARRAY DEPENDENCIA */
    public function setArrStsNbDependencia($arrStsNbDependencia) 
    {
		array_push($this->arrStsNbDependencia,$arrStsNbDependencia);	
	}
	public function setArrIntCdDependencia($arrIntCdDependencia) 
	{
		array_push($this->arrIntCdDependencia,$arrIntCdDependencia);
	}
	
	/* SET ARRAY DIRECCIONES */
    public function setArrStsNbDireccion($arrStsNbDireccion) 
    {
		array_push($this->arrStsNbDireccion,$arrStsNbDireccion);	
	}
	public function setArrIntCdDireccion($arrIntCdDireccion) 
	{
		array_push($this->arrIntCdDireccion,$arrIntCdDireccion);
	}
	
	
	/* GET ARRAY DEPENDENCIA */
	public function getArrStsNbDependencia() 
	{
		return $this->arrStsNbDependencia;
	}
	public function getArrIntCdDependencia() 
	{
		return $this->arrIntCdDependencia;
	}
	
	/* GET ARRAY DIRECCIONES*/
	public function getArrStsNbDireccion() 
	{
		return $this->arrStsNbDireccion;
	}
	public function getArrIntCdDireccion() 
	{
		return $this->arrIntCdDireccion;
	}
	
	
	/* SET DEPENDENCIA */
	public function setStsNbDependencia($stsNbDependencia) 
	{
		$this->stsNbDependencia = $stsNbDependencia;
	}
	public function setIntCdDependencia($intCdDependencia) 
	{
		$this->intCdDependencia = $intCdDependencia;
	}

	/* SET DIRECCIONES */
	public function setStsNbDireccion($stsNbDireccion) 
	{
		$this->stsNbDireccion = $stsNbDireccion;
	}
	public function setIntCdDireccion($intCdDireccion) 
	{
		$this->intCdDirecciones = $intCdDireccion;
	}
	
	
	
	/* GET DEPENDENCIA */
	public function getStsNbDependencia() 
	{
		return $this->stsNbDependencia;
	}
	public function getIntCdDependencia() 
	{
		return $this->intCdDependencia;
	}
	
	/* GET DIRECCIONES */
	public function getStsNbDireccion() 
	{
		return $this->stsNbDireccion;
	}
	public function getIntCdDireccion() 
	{
		return $this->intCdDireccion;
	}

	
	
	/***************************************** FUNCIONES *****************************************/
	
 	
 	
	// FUNCIONES PARA DIRECCIONES
	
	public function consultarDireccion($intOpcion)
	{			
		if ($this->getIntCdDependencia() != "")
		{
			$stsWhere= "id_depe=".$this->getIntCdDependencia()."";  
		}
		if ($this->getIntCdDireccion()!= "")
		{
			if ( $stsWhere == "" )
			{
				$stsWhere= "id_dire=".$this->getIntCdDireccion()."";
			}  
			else
			{
				$stsWhere = $stsWhere. " and id_dire=".$this->getIntCdDireccion()."";
			}	
		}
		
		if ($stsWhere == "")
		{
			$stsWhere="";
		}
		else
		{
			$stsWhere= "WHERE  $stsWhere" ;
		}
		//echo $stsWhere;
		$arrResultado=$this->db->EjecutarQuery("SELECT * FROM direcciones $stsWhere ");
		if ( $intOpcion == 0 )
		{
			return $arrResultado->RecordCount();
		}
		else
		{	
			while ( !$arrResultado->EOF )
			{	$this->setArrIntCdDependencia( $arrResultado->fields['id_depe'] );
				$this->setArrIntCdDireccion( $arrResultado->fields['id_dire'] );
				//echo $arrResultado['id_dire'];
			    $this->setArrStsNbDireccion( $arrResultado->fields['descripcion'] );	
				$arrResultado->MoveNext ();
					
			}	//Fin de while ( !$arrResultado->EOF )
		}	
	}
	
	public function obtenerDireccion($valor)
 	{
 		if ($this->getIntCdDependencia() != "")
		{
			$stsWhere= "id_depe=".$this->getIntCdDependencia()."";  
		}
		if ($stsWhere == "")
		{
			$stsWhere="";
		}
		else
		{
			$stsWhere= "WHERE  $stsWhere" ;
		}

 		return $this->db->ListarVWCamposVarios("direcciones $stsWhere",'*','id_dire','descripcion',$valor);
 	}//FIN FUNCIONES PARA DIRECCIONES
 	
}
?>
