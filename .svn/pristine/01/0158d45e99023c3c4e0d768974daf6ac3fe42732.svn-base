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

class unidad
{
	
    /* DIRECCIONES */
    private $intCdDireccion;
    private $stsNbDireccion;
    
    /* UNIDADES */
    private $intCdUnidad;
    private $stsNbUnidad;
    
   
    
    /* ARREGLOS DIRECCIONES */
    private $arrIntCdDireccion; 
    private $arrStsNbDireccioN;
    
    /* ARREGLOS UNIDADES*/
    private $arrIntCdUnidad;
    private $arrStsNbUnidad;
    
  
	protected $db;
	
	public function __construct( BaseDatos $db )
    { 
        $this->db = $db;
           
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
	
	/* SET ARRAY UNIDADES */
    public function setArrStsNbUnidad($arrStsNbUnidad) 
    {
		array_push($this->arrStsNbUnidad,$arrStsNbUnidad);	
	}
	public function setArrIntCdUnidad($arrIntCdUnidad) 
	{
		array_push($this->arrIntCdUnidad,$arrIntCdUnidad);
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
	
	/* GET ARRAY UNIDAD*/
	public function getArrStsNbUnidad() 
	{
		return $this->arrStsNbUnidad;
	}
	public function getArrIntCdUnidad() 
	{
		return $this->arrIntCdUnidad;
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
	
	/* SET UNIDADES */
	public function setStsNbUnidad($stsNbUnidad) 
	{
		$this->stsNbUnidad = $stsNbUnidad;
	}
	public function setIntCdUnidad($intCdUnidad) 
	{
		$this->intCdUnidad = $intCdUnidad;
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

	/* GET UNIDADES */
	public function getStsNbUnidad() 
	{
		return $this->stsNbUnidad;
	}
	public function getIntCdUnidad() 
	{
		return $this->intCdUnidad;
	}
	
	
	/***************************************** FUNCIONES *****************************************/
	
 	// FUNCIONES PARA UNIDADES
	public function consultarunidad($intOpcion)
	{	echo "option: ".$intOpcion;
		if ($this->getIntCdDireccion() != "")
		{
			
			$stsWhere= "id_dire=".$this->getIntCdDireccion()."";  
		}
		if ($this->getIntCdUnidad()!= "")
		{
			if ( $stsWhere == "" )
			{
				$stsWhere= "id_unid=".$this->getIntCdUnidad()."";
			}  
			else
			{
				$stsWhere = $stsWhere. " and id_unid=".$this->getIntCdUnidad()."";
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
		$arrResultado=$this->db->EjecutarQuery("SELECT * FROM unidades $stsWhere ");
		if ( $intOpcion == 0 )
		{
			return $arrResultado->RecordCount();
		}
		else
		{	
			while ( !$arrResultado->EOF )
			{	$this->setArrIntCdDireccion( $arrResultado->fields['id_dire'] );
				$this->setArrIntCdUnidad( $arrResultado->fields['id_unid'] );
			//	echo $arrResultado['id_unid'];
			    $this->setArrStsNbUnidad( $arrResultado->fields['descripcion'] );	
				$arrResultado->MoveNext ();
					
			}	//Fin de while ( !$arrResultado->EOF )
		}	
	}
 	
 	public function obtenerUnidad($valor)
 	{
 		if ($this->getIntCdDireccion() != "")
		{
			$stsWhere= "id_dire=".$this->getIntCdDireccion()."";  
		}
		if ($stsWhere == "")
		{
			$stsWhere="";
		}
		else
		{
			$stsWhere= "WHERE  $stsWhere" ;
		}

 		return $this->db->ListarVWCamposVarios("unidades $stsWhere",'*','id_unid','descripcion',$valor);
 	}//FIN FUNCIONES PARA UNIDADES
 	
}
?>
