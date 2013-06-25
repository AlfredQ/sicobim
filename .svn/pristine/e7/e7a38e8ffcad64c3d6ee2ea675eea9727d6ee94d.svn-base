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

class combos
{
	/* SUBGRUPO */
    private $intCdSubGrupo;
    private $stsNbSubGrupo; 
    
   /* SECCION */
    private $intCdSeccion;
    private $stsNbSeccion; 
    
    /* DEPENDENCIA */
    private $intCdDependencia;
    private $stsNbDependencia;
    
    /* DIRECCIONES */
    private $intCdDireccion;
    private $stsNbDireccion;
    
    /* UNIDADES */
    private $intCdUnidad;
    private $stsNbUnidad;
    
    /* PROVEEDOR */
    private $idRif;
    private $nombreProveedor;
    
    /* PRODUCTOS*/
    private $idProductos;
    private $nombreProductos;
        
    /* ARREGLOS SUBGRUPO */
    private $arrIntCdSubGrupo; 
    private $arrStsNbSubGrupo;
    
     /* ARREGLOS SECCION */
    private $arrIntCdSeccion; 
    private $arrStsNbSeccion;

    /* ARREGLOS DEPENDENCIA */
    private $arrIntCdDependencia; 
    private $arrStsNbDependencia;
    
    /* ARREGLOS DIRECCIONES */
    private $arrIntCdDireccion; 
    private $arrStsNbDireccioN;
    
    /* ARREGLOS UNIDADES*/
    private $arrIntCdUnidad;
    private $arrStsNbUnidad;
    
      /* PROVEEDOR */
    private $arrIdRif;
    private $arrNombreProveedor;
    
    /* ARREGLOSPRODUCTOS*/
    private $arrIdProductos;
    private $arrNombreProductos;
    
	protected $db;
	
	public function __construct( BaseDatos $db )
    { 
        $this->db = $db;
           
    }
//Set array
	/* SET ARRAY SUBGRUPO */
    public function setArrStsNbSubGrupo($arrStsNbSubGrupo) 
    {
		array_push($this->arrStsNbSubGrupo,$arrStsNbSubGrupo);	
	}
	public function setArrIntCdSubGrupo($arrIntCdSubGrupo) 
	{
		array_push($this->arrIntCdSubGrupo,$arrIntCdSubGrupo);
	}
	/* SET ARRAY SECCION*/
	 public function setArrStsNbSeccion($arrStsNbSeccion) 
    {
		array_push($this->arrStsNbSeccion,$arrStsNbSeccion);	
	}
	public function setArrIntCdSeccion($arrIntCdSeccion) 
	{
		array_push($this->arrIntCdSeccion,$arrIntCdSeccion);
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
	
	/* SET ARRAY UNIDADES */
    public function setArrStsNbUnidad($arrStsNbUnidad) 
    {
		array_push($this->arrStsNbUnidad,$arrStsNbUnidad);	
	}
	public function setArrIntCdUnidad($arrIntCdUnidad) 
	{
		array_push($this->arrIntCdUnidad,$arrIntCdUnidad);
	}
	
	/* SET ARRAY PROVEEDOR */
    public function setArrIdRif($arrIdRif) 
    {
		array_push($this->arrIdRif,$arrIdRif);	
	}
	public function setArrNombreProveedor($arrNombreProveedor) 
	{
		array_push($this->arrNombreProveedor,$arrNombreProveedor);
	}
	
	/* SET ARRAY PRODUCTOS */
    public function setArrIdProductos($arrIdProductos) 
    {
		array_push($this->arrIdProductos,$arrIdProductos);	
	}
	public function setArrNombreProductos($arrNombreProductos) 
	{
		array_push($this->arrNombreProductos,$arrNombreProductos);
	}
	
//Get array	
	/* GET ARRAY SUBGRUPO */
	public function getArrStsNbSubGrupo() 
	{
		return $this->arrStsNbSubGrupo;
	}
	public function getArrIntCdSubGrupo() 
	{
		return $this->arrIntCdSubGrupo;
	}
	
	/* GET ARRAY SECCION */
	public function getArrStsNbSeccion() 
	{
		return $this->arrStsNbSeccion;
	}
	public function getArrIntCdSeccion() 
	{
		return $this->arrIntCdSeccion;
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
	
	/* GET ARRAY UNIDAD*/
	public function getArrStsNbUnidad() 
	{
		return $this->arrStsNbUnidad;
	}
	public function getArrIntCdUnidad() 
	{
		return $this->arrIntCdUnidad;
	}

	/* GET ARRAY PROVEEDOR*/
	public function getArrIdRif() 
	{
		return $this->arrIdRif;
	}
	public function getArrNombreProveedor() 
	{
		return $this->arrNombreProveedor;
	}
	
	/* GET ARRAY PRODUCTOS*/
	public function getArrIdProductos() 
	{
		return $this->arrIdProductos;
	}
	public function getArrNombreProductos() 
	{
		return $this->arrNombreProductos;
	}
	
	//set 
	/* SET SUBGRUPO */
	public function setStsNbSubGrupo($stsNbSubGrupo) 
	{
		$this->stsNbSubGrupo = $stsNbSubGrupo;
	}
	public function setIntCdSubGrupo($intCdSubGrupo) 
	{
		$this->intCdSubGrupo = $intCdSubGrupo;
	}
	
	/* SET SECCION */
	public function setStsNbSeccion($stsNbSeccion) 
	{
		$this->stsNbSeccion = $stsNbSeccion;
	}
	public function setIntCdSeccion($intCdSeccion) 
	{
		$this->intCdSeccion = $intCdSeccion;
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
	
	/* SET UNIDADES */
	public function setStsNbUnidad($stsNbUnidad) 
	{
		$this->stsNbUnidad = $stsNbUnidad;
	}
	public function setIntCdUnidad($intCdUnidad) 
	{
		$this->intCdUnidad = $intCdUnidad;
	}
	
	/* SET PROVEEDOR */
	public function setIdRif($idRif) 
	{
		$this->idRif = $idRif;
	}
	public function setNombreProveedor($NombreProveedor) 
	{
		$this->NombreProveedor = $NombreProveedor;
	}
	
	/* SET PRODUCTOS */
	public function setIdProductos($idProductos) 
	{
		$this->idProductos = $idProductos;
	}
	public function setNombreProductos($NombreProductos) 
	{
		$this->NombreProductos = $NombreProductos;
	}
	
//get	
	/* GET SUBGRUPO */
	public function getStsNbSubGrupo() 
	{
		return $this->stsNbSubGrupo;
	}
	public function getIntCdSubGrupo() 
	{
		return $this->intCdSubGrupo;
	}
	
	/* GET SECCION */
	public function getStsNbSeccion() 
	{
		return $this->stsNbSeccion;
	}
	public function getIntCdSeccion() 
	{
		return $this->intCdSeccion;
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

	/* GET UNIDADES */
	public function getStsNbUnidad() 
	{
		return $this->stsNbUnidad;
	}
	public function getIntCdUnidad() 
	{
		return $this->intCdUnidad;
	}
	
	/* GET PROVEEDOR */
	public function getIdRif() 
	{
		return $this->idRif;
	}
	public function getNombreProveedor() 
	{
		return $this->nombreProveedor;
	}
	
	/* GET PRODUCTOS*/
	public function getIdProductos() 
	{
		return $this->idProductos;
	}
	public function getNombreProductos() 
	{
		return $this->nombreProductos;
	}	
	
	/***************************************** FUNCIONES *****************************************/
	/* FUNCIONES PARA SUBGRUPO */
	public function consultarSubGrupo($intOpcion)
	{	//echo "option: ".$intOpcion;
		if ($this->getIntCdSubGrupo() != "")
		{
			
			$stsWhere= "id_subg=".$this->getIntCdSubGrupo()."";  
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
		$arrResultado=$this->db->EjecutarQuery("SELECT id_subg, descripcion FROM sch_sicobim.sub_grupo $stsWhere ");
		if ( $intOpcion == 0 )
		{
			return $arrResultado->RecordCount();
		}
		else
		{	
			while ( !$arrResultado->EOF )
			{	
				$this->setArrIntCdSubGrupo( $arrResultado->fields['id_subg'] );
				echo $arrResultado['id_subg'];
			    $this->setArrStsNbSubGrupo( $arrResultado->fields['descripcion'] );	
				$arrResultado->MoveNext ();
					
			}	//Fin de while ( !$arrResultado->EOF )
		}	
	}
	public function obtenerSubGrupo($valor)
 	{
 		 
 		if ($this->getIntCdSubGrupo() != "")
		{
			$stsWhere= "id_subg=".$this->getIntCdSubGrupo()."";  
		}
		if ($stsWhere == "")
		{
			$stsWhere="";
		}
		else
		{
			$stsWhere= "WHERE  $stsWhere" ;
		}

 		return $this->db->ListarVWCamposVarios("sub_grupo $stsWhere",'*','id_subg','descripcion',$valor);
 	}// FIN FUNCIONES PARA SUBGRUPO
 	
 		/* FUNCIONES PARA SECCION */
	public function consultarSeccion($intOpcion)
	{	//echo "option: ".$intOpcion;
		if ($this->getIntCdSeccion() != "")
		{
			
			$stsWhere= "id_secc=".$this->getIntCdSeccion()."";  
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
		$arrResultado=$this->db->EjecutarQuery("SELECT id_secc, descripcion FROM sch_sicobim.seccion $stsWhere ");
		if ( $intOpcion == 0 )
		{
			return $arrResultado->RecordCount();
		}
		else
		{	
			while ( !$arrResultado->EOF )
			{	
				$this->setArrIntCdSeccion( $arrResultado->fields['id_secc'] );
				echo $arrResultado['id_secc'];
			    $this->setArrStsNbSeccion( $arrResultado->fields['descripcion'] );	
				$arrResultado->MoveNext ();
					
			}	//Fin de while ( !$arrResultado->EOF )
		}	
	}
	public function obtenerSeccion($valor)
 	{
 		 
 		if ($this->getIntCdSeccion() != "")
		{
			$stsWhere= "id_secc=".$this->getIntCdSeccion()."";  
		}
		if ($stsWhere == "")
		{
			$stsWhere="";
		}
		else
		{
			$stsWhere= "WHERE  $stsWhere" ;
		}

 		return $this->db->ListarVWCamposVarios("seccion $stsWhere",'*','id_secc','descripcion',$valor);
 	}// FIN FUNCIONES PARA SECCION
	
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
 	}//FIN FUNCIONES PARA DEPENDENCIAS

 	
 	// FUNCIONES PARA PROVEEDOR
	public function consultar ($intOpcion)
	{	echo "option: ".$intOpcion;
		if ($this->getIdRif() != "")
		{
			
			$stsWhere= "rifid=".$this->getIdRif()."";  
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
		$arrResultado=$this->db->EjecutarQuery("SELECT rifid, nombre FROM sch_sicobim.proveedores $stsWhere ");
		if ( $intOpcion == 0 )
		{
			return $arrResultado->RecordCount();
		}
		else
		{	
			while ( !$arrResultado->EOF )
			{	
				$this->setArrIdRif( $arrResultado->fields['rifid'] );
				echo $arrResultado['rifid'];
			    $this->setArrNombreProveedor( $arrResultado->fields['nombre'] );	
				$arrResultado->MoveNext ();
					
			}	//Fin de while ( !$arrResultado->EOF )
		}	
	}
 	
 	public function obtenerProveedor($valor)
 	{
 		if ($this->getIdRif() != "")
		{
			$stsWhere= "rifid=".$this->getIdRif()."";  
		}
		if ($stsWhere == "")
		{
			$stsWhere="";
		}
		else
		{
			$stsWhere= "WHERE  $stsWhere" ;
		}

 		return $this->db->ListarVWCamposVarios("proveedores $stsWhere",'*','rifid','nombre',$valor);
 	}//FIN FUNCIONES PARA PROVEEDOR
 	
	// FUNCIONES PARA PRODUCTOS
	public function consultarProductos ($intOpcion)
	{	echo "option: ".$intOpcion;
		if ($this->getIdProductos() != "")
		{
			
			$stsWhere= "id_prod=".$this->getIdProductos()."";  
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
		echo "SELECT id_prod, nombre FROM sch_sicobim.productos $stsWhere ";
		$arrResultado=$this->db->EjecutarQuery("SELECT id_prod, nombre FROM sch_sicobim.productos $stsWhere ");
		if ( $intOpcion == 0 )
		{
			return $arrResultado->RecordCount();
		}
		else
		{	
			while ( !$arrResultado->EOF )
			{	
				$this->setArrIdProductos( $arrResultado->fields['id_prod'] );
				echo $arrResultado['id_prod'];
			    $this->setArrNombreProductos( $arrResultado->fields['nombre'] );	
				$arrResultado->MoveNext ();
					
			}	//Fin de while ( !$arrResultado->EOF )
		}	
	}
 	
 	/* FUNCION PARA RODUCTOS */
 	public function obtenerProductos($valor)
 	{
 		if ($this->getIdProductos() != "")
		{
			$stsWhere= "id_prod=".$this->getIdProductos()."";  
		}
		if ($stsWhere == "")
		{
			$stsWhere="";
		}
		else
		{
			$stsWhere= "WHERE  $stsWhere" ;
		}

 		return $this->db->ListarVWCamposVarios("productos $stsWhere",'*','id_prod','nombre',$valor);
 	}//FIN FUNCIONES PARA PRODUCTOS
}
?>
