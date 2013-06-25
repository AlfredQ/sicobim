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

class coordinacion
{

    /* UNIDADES */
    private $intCdUnidad;
    private $stsNbUnidad;
    
    /* COORDINACION*/
    private $intCdCoordinacion;
    private $stsNbCoordinacion;
    
    /* ARREGLOS UNIDADES*/
    private $arrIntCdUnidad;
    private $arrStsNbUnidad;
    
    /* ARREGLOS COORDINACION*/
    private $arrIntCdCoordinacion;
    private $arrStsNbCoordinacion;
    
  
    
	protected $db;
	
	public function __construct( BaseDatos $db )
    { 
        $this->db = $db;
           
    }
	
	
	/* SET ARRAY UNIDADES */
    public function setArrStsNbUnidad($arrStsNbUnidad) 
    {
		array_push($this->arrStsNbUnidad,$arrStsNbUnidad);	
	}
	public function setArrIntCdUnidad($arrIntCdUnidad) 
	{
		array_push($this->arrIntCdUnidad,$arrIntCdUnidad);
	}
	
	/* SET ARRAY COORDINACION */
    public function setArrStsNbCoordinacion($arrStsNbCoordinacion) 
    {
		array_push($this->arrStsNbCoordinacion,$arrStsNbCoordinacion);	
	}
	public function setArrIntCdCoordinacion($arrIntCdCoordinacion) 
	{
		array_push($this->arrIntCdCoordinacion,$arrIntCdCoordinacion);
	}

	/* GET ARRAY UNIDAD*/
	public function getArrStsNbUnidad() 
	{
		return $this->arrStsNbUnidad;
	}
	public function getArrIntCdUnidad() 
	{
		return $this->arrIntCdUnidad;
	}

	/* GET ARRAY COORDINACION*/
	public function getArrStsNbCoordinacion() 
	{
		return $this->arrStsNbCoordinacion;
	}
	public function getArrIntCdCoordinacion() 
	{
		return $this->arrIntCdCoordinacion;
	}
	
		
	/* SET UNIDADES */
	public function setStsNbUnidad($stsNbUnidad) 
	{
		$this->stsNbUnidad = $stsNbUnidad;
	}
	public function setIntCdUnidad($intCdUnidad) 
	{
		$this->intCdUnidad = $intCdUnidad;
	}
	
	/* SET COORDINACION */
	public function setStsNbCoordinacion($stsNbCoordinacion) 
	{
		$this->stsNbCoordinacion = $stsNbCoordinacion;
	}
	public function setIntCdCoordinacion($intCdCoordinacion) 
	{
		$this->intCdCoordinacion = $intCdCoordinacion;
	}
		
	
	/* GET UNIDADES */
	public function getStsNbUnidad() 
	{
		return $this->stsNbUnidad;
	}
	public function getIntCdUnidad() 
	{
		return $this->intCdUnidad;
	}
	
	
	/* GET COORDINACION */
	public function getStsNbCoordinacion() 
	{
		return $this->stsNbCoordinacion;
	}
	public function getIntCdCoordinacion() 
	{
		return $this->intCdCoordinacion;
	}
	
	/***************************************** FUNCIONES *****************************************/
	
		
 	// FUNCIONES PARA UNIDADES
	public function consultarcoordinacion($intOpcion)
	{	echo "option: ".$intOpcion;
		if ($this->getIntCdUnidad() != "")
		{
			
			$stsWhere= "id_unid=".$this->getIntCdDireccion()."";  
		}
		if ($this->getIntCdUnidad()!= "")
		{
			if ( $stsWhere == "" )
			{
				$stsWhere= "id_coor=".$this->getIntCdCoordinacion()."";
			}  
			else
			{
				$stsWhere = $stsWhere. " and id_coor=".$this->getIntCdCoordinacion()."";
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
		//echo 	"where>".$stsWhere;
		$arrResultado=$this->db->EjecutarQuery("SELECT * FROM coordinaciones $stsWhere ");
		if ( $intOpcion == 0 )
		{
			return $arrResultado->RecordCount();
		}
		else
		{	
			while ( !$arrResultado->EOF )
			{	$this->setArrIntCdUnidad( $arrResultado->fields['id_unid'] );
				$this->setArrIntCdCoordinacion( $arrResultado->fields['id_coor'] );
			//	echo $arrResultado['id_unid'];
			    $this->setArrStsNbCoordinacion( $arrResultado->fields['descripcion'] );	
				$arrResultado->MoveNext ();
					
			}	//Fin de while ( !$arrResultado->EOF )
		}	
	}
 	
 	public function obtenerCoordinacion($valor)
 	{
 		if ($this->getIntCdUnidad() != "")
		{
			$stsWhere= "id_unid=".$this->getIntCdUnidad()."";  
		}
		if ($stsWhere == "")
		{
			$stsWhere="";
		}
		else
		{
			$stsWhere= "WHERE  $stsWhere" ;
		}

 		return $this->db->ListarVWCamposVarios("coordinaciones $stsWhere",'*','id_coor','descripcion',$valor);
 	}//FIN FUNCIONES PARA DEPENDENCIAS

 	
 	
}
?>
