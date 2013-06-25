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

class dependencia
{
	 
    /* DEPENDENCIA */
    private $intCdDependencia;
    private $stsNbDependencia;
    
    /* ARREGLOS DEPENDENCIA */
    private $arrIntCdDependencia; 
    private $arrStsNbDependencia;
    
	
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
	
	/* GET ARRAY DEPENDENCIA */
	public function getArrStsNbDependencia() 
	{
		return $this->arrStsNbDependencia;
	}
	public function getArrIntCdDependencia() 
	{
		return $this->arrIntCdDependencia;
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

	/* GET DEPENDENCIA */
	public function getStsNbDependencia() 
	{
		return $this->stsNbDependencia;
	}
	public function getIntCdDependencia() 
	{
		return $this->intCdDependencia;
	}
	
	/*           Funciones                  */
	

	
 	// FUNCIONES PARA DEPENDENCIA
	public function consultarDependencia($intOpcion)
	{	echo "option: ".$intOpcion;
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
		//echo 	"where>".$stsWhere;
		$arrResultado=$this->db->EjecutarQuery("SELECT id_depe, descripcion FROM sch_sicobim.dependencias $stsWhere ");
		if ( $intOpcion == 0 )
		{
			return $arrResultado->RecordCount();
		}
		else
		{	
			while ( !$arrResultado->EOF )
			{	
				$this->setArrIntCdDependencia( $arrResultado->fields['id_depe'] );
				echo $arrResultado['id_depe'];
			    $this->setArrStsNbDependencia( $arrResultado->fields['descripcion'] );	
				$arrResultado->MoveNext ();
					
			}	//Fin de while ( !$arrResultado->EOF )
		}	
	}
	public function obtenerDependencia($valor)
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

 		return $this->db->ListarVWCamposVarios("dependencias $stsWhere",'*','id_depe','descripcion',$valor);
 	}//FIN FUNCIONES PARA DEPENDENCIAS

}
?>
