<?php
/*
 * Created on 3/11/2011
 * <Nombre del archivo: usuariosModelo.php> *
 * <Versión del archivo: 1.0>
 * <Autor del archivo: Virginia Naassaneh>
 * <Breve explicación del contenido de el archivo:
 * Modelo de Usuarios del sistema>
 */
session_start();

require_once('../../modelo/baseDatos.Class.php');
class mantenimiento
{ //Concepto
private $Concepto;
private $Denominacion;
private $TipoConcepto;

//Dependencias
private $Id_Depe;
private $Descripcion;
private $Status;
private $Id_Orga;
private $Direccion;
private $Tlf;
private $usu;

//Direcciones
private $Id_Dire;
private $DescripcionDire;

//Unidades
private $Id_Unidad;
private $DescripcionUnidad;

//Coordniacion
private $Id_Coor;
private $DescripcionCoor;

//producto
private $Id_Prod;
private $NombreProd;
private $DescripcionProd;

//proveedor
private $RifTipo;
private $RifId;
private $DenominacionPro;
private $DireccionPro;
private $tlfPro;
private $statusPro;

//Subgrupo
private $CodigoSubGrupo;
private $NombreSubGrupo;
private $CodigoGrupo;

// VARIABLES MANTENIMIENTO - CLASIFICACION DE BIENES - SECCION //
private $CodigoSeccion;
private $NombreSeccion;
 

/*arreglos*/
//arrglos conceptos
private $arrConcepto= array();
private $arrDenominacion= array();
private $arrTipoConcepto= array();

//arreglos Dependencias
private $arrId_Depe= array();
private $arrDescripcion= array();
private $arrStatus= array();
private $arrId_Orga= array();
private $arrDireccion= array();
private $arrTlf= array();
private $arrUsu= array();


//arreglos Direcciones
private $arrId_Dire= array();
private $arrDescripcionDire= array();

//arreglos Unidades
private $arrId_Unidad= array();
private $arrDescripcionUnidad= array();

//arreglos Coordiacion
private $arrId_Prod= array();
private $arrNombreProd= array();
private $arrDescripcionProd= array();

//arreglos Activos reales
private $arrId_Coor= array();
private $arrDescripcionCoor= array();

//arreglos Proveedor
private $arrRifTipo= array();
private $arrRifId= array();
private $arrDenominacionPro= array();
private $arrDireccionPro= array();
private $arrTlfPro= array();
private $arrStatusPro= array();

/* ARREGLOS DE SUBGRUPOS */
private $arrCodigoSubGrupo = array();
private $arrNombreSubGrupo = array();
private $arrCodigoGrupo = array();
private $arrResultadoSubGrupo = array();
/* FIN ARREGLOS DE SUBGRUPOS */

/* ARREGLOS DE SECCION */
private $arrCodigoSeccion= array();
private $arrNombreSeccion = array();
 
protected $db;

public function __construct( Base $db )
{
	$this->db = $db;
}

/*********************SET ARRAY*********************/
public function setArrConcepto($arrConcepto)
{
	array_push($this->arrConcepto,$arrConcepto);
}

public function setArrDenominacion($arrDenominacion) 
{
	array_push($this->arrDenominacion,$arrDenominacion);
}

public function setArrTipoConcepto($arrTipoConcepto)
{
	array_push($this->arrTipoConcepto,$arrTipoConcepto);
}
/* SET ARRAY DEPENDENCIA */
public function setArrId_Depe($arrId_Depe) 
{
	array_push($this->arrId_Depe,$arrId_Depe);
}
public function setArrDescripcion($arrDescripcion)
{
	array_push($this->arrDescripcion,$arrDescripcion);
}
public function setArrStatus($arrStatus)
{
	array_push($this->arrStatus,$arrStatus);
}
public function setArrId_Orga($arrId_Orga) 
{
	array_push($this->arrId_Orga,$arrId_Orga);
}

/* METODOS SET ARRAY DIRECCION */
public function setArrId_Dire($arrId_Dire) 
{
	array_push($this->arrId_Dire,$arrId_Dire);
}
public function setArrDescripcionDire($arrDescripcionDire) 
{
	array_push($this->arrDescripcionDire,$arrDescripcionDire);
}/* FIN METODOS SET ARRAY DIRECCION */

/* METODOS SET ARRAY UNIDADES */
public function setArrId_Unidad($arrId_Unidad) 
{
	array_push($this->arrId_Unidad,$arrId_Unidad);
}
public function setArrDescripcionUnidad($arrDescripcionUnidad) 
{
	array_push($this->arrDescripcionUnidad,$arrDescripcionUnidad);
}/* FIN METODOS SET ARRAY UNIDADES */


/* METODOS SET ARRAY COORDINACIONES */
public function setArrId_Coor($arrId_Coor) 
{
	array_push($this->arrId_Coor,$arrId_Coor);
}
public function setArrDescripcionCoor($arrDescripcionCoor) 
{
	array_push($this->arrDescripcionCoor,$arrDescripcionCoor);
}/* FIN METODOS SET ARRAY COORDINACIONES */


/* METODOS SET ARRAY Producto */
public function setArrId_Prod($arrId_Prod) 
{
	array_push($this->arrId_Prod,$arrId_Prod);
}
public function setArrNombreProd($arrNombreProd) 
{
	array_push($this->arrNombreProd,$arrNombreProd);
}
public function setArrDescripcionProd($arrDescripcionProd) 
{
	array_push($this->arrDescripcionProd,$arrDescripcionProd);
}/* FIN METODOS SET ARRAY Producto */

/* METODOS SET ARRAY Proveedor */
public function setArrRifTipo($arrRifTipo) 
{
	array_push($this->arrRifTipo,$arrRifTipo);
}
public function setArrRifId($arrRifId)
{
	array_push($this->arrRifId,$arrRifId);
}
public function setArrDenominacionPro($arrDenominacionPro) 
{
	array_push($this->arrDenominacionPro,$arrDenominacionPro);
}
public function setArrDireccionPro($arrDireccionPro) 
{
	array_push($this->arrDireccionPro,$arrDireccionPro);
}
public function setArrTlfPro($arrTlfPro) 
{
	array_push($this->arrTlfPro,$arrTlfPro);
}
public function setArrStatusPro($arrStatusPro) 
{
	array_push($this->arrStatusPro,$arrStatusPro);
}/* FIN METODOS SET ARRAY Proveedor */


/* METODOS SET ARRAY SUBGRUPO */
public function setArrCodigoSubGrupo($arrCodigoSubGrupo) 
{
	array_push($this->arrCodigoSubGrupo,$arrCodigoSubGrupo);
}

public function setArrNombreSubGrupo($arrNombreSubGrupo) 
{
	array_push($this->arrNombreSubGrupo,$arrNombreSubGrupo);
}

public function setArrCodigoGrupo($arrCodigoGrupo) 
{
	array_push($this->arrCodigoGrupo,$arrCodigoGrupo);
}

public function setArrResultadoSubGrupo($arrResultadoSubGrupo) 
{
	array_push($this->arrResultadoSubGrupo,$arrResultadoSubGrupo);
}/* FIN METODOS SET SUBGRUPO */


/* METODOS SET ARRAY SECCION */
public function setArrCodigoSeccion($arrCodigoSeccion) 
{
	array_push($this->arrCodigoSeccion,$arrCodigoSeccion);
}

public function setArrNombreSeccion($arrNombreSeccion) 
{
	array_push($this->arrNombreSeccion,$arrNombreSeccion);
}/* FIN METODOS SET ARRAY SECCION */

/*********************GET ARRAY*********************/
public function getArrConcepto() {
	return $this->arrConcepto;
}
public function getArrDenominacion() {
	return $this->arrDenominacion;
}

public function getArrTipoConcepto() {
	return $this->arrTipoConcepto;
}

public function getArrId_Depe() {
	return $this->arrId_Depe;
}

public function getArrDescripcion() {
	return $this->arrDescripcion;
}

public function getArrStatus() {
	return $this->arrStatus;
}

public function getArrId_Orga() {
	return $this->arrId_Orga;
}

public function getArrDireccion() {
	return $this->arrDireccion;
}

public function getArrTlf() {
	return $this->arrTlf;
}

//Metodos get array direccion
public function getArrId_Dire()
{
	return $this->arrId_Dire;
}
public function getArrDescripcionDire()
{
	return $this->arrDescripcionDire;
}

//Metodos get array Unidad
public function getArrId_Unidad()
{
	return $this->arrId_Unidad;
}
public function getArrDescripcionUnidad()
{
	return $this->arrDescripcionUnidad;
}

//Metodos get array Coordinacion
public function getArrId_Coor()
{
	return $this->arrId_Coor;
}
public function getArrDescripcionCoor()
{
	return $this->arrDescripcionCoor;
}

//Metodos get array Producto
public function getArrId_Prod()
{
	return $this->arrId_Prod;
}
public function getArrNombreProd()
{
	return $this->arrNombreProd;
}
public function getArrDescripcionProd()
{
	return $this->arrDescripcionProd;
}

//Metodos get array Proveedor
public function getArrRifTipo()
{
	return $this->arrRifTipo;
}
public function getArrRifId()
{
	return $this->arrRifId;
}
public function getArrDenominacionPro()
{
	return $this->arrDenominacionPro;
}
public function getArrDireccionPro()
{
	return $this->arrDireccionPro;
}
public function getArrTlfPro()
{
	return $this->arrTlfPro;
}
public function getArrStatusPro()
{
	return $this->arrStatusPro;
}

/* METODOS GET ARRAY SUBGRUPO */
public function getArrCodigoSubGrupo() 
{
	return $this->arrCodigoSubGrupo;
}

public function getArrNombreSubGrupo() 
{
	return $this->arrNombreSubGrupo;
}

public function getArrResultadoSubGrupo() 
{
	return $this->arrResultadoSubGrupo;
}
/* FIN METODOS GET ARRAY SUBGRUPO */

/* METODOS GET ARRAY SECCION */
public function getArrCodigoSeccion() 
{
	return $this->arrCodigoSeccion;
}

public function getArrNombreSeccion() 
{
	return $this->arrNombreSeccion;
}/* FIN METODOS GET ARRAY SECCION */

/*********************SET*********************/
public function setConcepto($Concepto) 
{
	$this->Concepto = $Concepto;
}

public function setDenominacion($Denominacion)
{
	$this->Denominacion = $Denominacion;
}

public function setTipoConcepto($TipoConcepto) 
{
	$this->TipoConcepto = $TipoConcepto;
}

/* METODOS SET DE VARIABLES DEPENDENCIA */

public function setId_Depe ($Id_Depe)
{
	$this->Id_Depe  = $Id_Depe;
}

public function setDescripcion($Descripcion)
{
	$this->Descripcion = $Descripcion;
}

public function setStatus($Status)
{
	$this->Status = $Status;
}


public function setId_Orga($Id_Orga)
{
	$this->Id_Orga = $Id_Orga;
}

public function setDireccion($Direccion)
{
	$this->Direccion = $Direccion;
}

public function setTlf($Tlf)
{
	$this->Tlf= $Tlf;
}

public function  setusuario($usuario)
{
    $this->usu=$usuario;
}
/* FIN METODOS SET VARIABLE DEPENDECIAS*/

/* METODOS SET VARIABLE DIRECCION */
public function setId_Dire($Id_Dire) 
{
	$this->Id_Dire = $Id_Dire;
}
public function setDescripcionDire($DescripcionDire) 
{
	$this->DescripcionDire= $DescripcionDire;
}/* FIN METODOS SET VARIABLE DIRECCION */


/* METODOS SET VARIABLE UNIDAD */
public function setId_Unidad($Id_Unidad) 
{
	$this->Id_Unidad = $Id_Unidad;
}
public function setDescripcionUnidad($DescripcionUnidad) 
{
	$this->DescripcionUnidad= $DescripcionUnidad;
}/* FIN METODOS SET VARIABLE UNIDADES */



/* METODOS SET VARIABLE COORDINACION */
public function setId_Coor($Id_Coor) 
{
	$this->Id_Coor = $Id_Coor;
}
public function setDescripcionCoor($DescripcionCoor) 
{
	$this->DescripcionCoor= $DescripcionCoor;
}/* FIN METODOS SET VARIABLE COORDINACION  */


/* METODOS SET VARIABLE Producto */
public function setId_Prod($Id_Prod) 
{
	$this->Id_Prod = $Id_Prod;
}
public function setNombreProd($NombreProd) 
{
	$this->NombreProd= $NombreProd;
}
public function setDescripcionProd($DescripcionProd) 
{
	$this->DescripcionProd= $DescripcionProd;
}/* FIN METODOS SET VARIABLE Producto  */

/* METODOS SET VARIABLE Proveedor */
public function setRifTipo($RifTipo) 
{
	$this->RifTipo = $RifTipo;
}
public function setRifId($RifId) 
{
	$this->RifId= $RifId;
}
public function setDenominacionPro($DenominacionPro) 
{
	$this->DenominacionPro= $DenominacionPro;
}
public function setDireccionPro($DireccionPro) 
{
	$this->DireccionPro= $DireccionPro;
}
public function setTlfPro($TlfPro) 
{
	$this->TlfPro= $TlfPro;
}
public function setStatusPro($StatusPro) 
{
	$this->StatusPro= $StatusPro;
}/* FIN METODOS SET VARIABLE Proveedor  */

/* METODOS SET VARIABLE SUBGRUPO */
public function setCodigoSubGrupo($CodigoSubGrupo) 
{
	$this->CodigoSubGrupo= $CodigoSubGrupo;
}
public function setNombreSubGrupo($NombreSubGrupo) 
{
	$this->NombreSubGrupo= $NombreSubGrupo;
}
public function setCodigoGrupo($CodigoGrupo) 
{
	$this->CodigoGrupo= $CodigoGrupo;
}

/* FIN METODOS SET VARIABLE SUBGRUPO */


/* METODOS SET VARIABLE SECCION */
public function setCodigoSeccion($CodigoSeccion) 
{
	$this->CodigoSeccion = $CodigoSeccion;
}
public function setNombreSeccion($NombreSeccion) 
{
	$this->NombreSeccion= $NombreSeccion;
}/* FIN METODOS SET VARIABLE SECCION */



/************Get***************/
public function getConcepto() {
	return $this->Concepto;
}

public function getDenominacion() {
	return $this->Denominacion;
}

public function getTipoConcepto() {
	return $this->TipoConcepto;
}

/* METODOS GET DE VARIABLES DEPENDENCIA */
public function getId_Depe()
{
	return $this->Id_Depe;
}

public function getDescripcion()
{
	return $this->Descripcion;
}

public function getStatus()
{
	return $this->Status;
}
public function getId_Orga()
{
	return $this->Id_Orga;
}

public function getDireccion()
{
	return $this->Direccion;
}

public function getTlf()
{
	return $this->Tlf;
}
public function getUsu()
{
	return $this->usu;
}

/* FIN METODOS GET DE VARIABLES DEPENDENCIA */


//Metodos Get direcciones
public function getId_Dire() 
{
	return $this->Id_Dire;
}
public function getDescripcionDire() 
{
	return $this->DescripcionDire;
}

//Metodos Get Unidad
public function getId_Unidad() 
{
	return $this->Id_Unidad;
}
public function getDescripcionUnidad() 
{
	return $this->DescripcionUnidad;
}

//Metodos Get coordinacion
public function getId_Coor() 
{
	return $this->Id_Coor;
}
public function getDescripcionCoor() 
{
	return $this->DescripcionCoor;
}

//Metodos Get Producto
public function getId_Prod() 
{
	return $this->Id_Prod;
}
public function getNombreProd() 
{
	return $this->NombreProd;
}
public function getDescripcionProd() 
{
	return $this->DescripcionProd;
}

//Metodos Get proveedor
public function getRifTipo() 
{
	return $this->RifTipo;
}
public function getRifId() 
{
	return $this->RifId;
}
public function getDenominacionPro() 
{
	return $this->DenominacionPro;
}
public function getDireccionPro() 
{
	return $this->DireccionPro;
}
public function getTlfPro() 
{
	return $this->TlfPro;
}
public function getStatusPro() 
{
	return $this->StatusPro;
}
/* METODOS GET DE VARIABLES SUBGRUPO */
public function getCodigoSubGrupo() 
{
	return $this->CodigoSubGrupo;
}
public function getNombreSubgrupo() 
{
	return $this->NombreSubGrupo;
}
public function getCodigoGrupo() 
{
	return $this->CodigoGrupo;
}/* FIN METODOS GET DE VARIABLES SUBGRUPO */

/* METODOS GET DE VARIABLES SECCION */
public function getCodigoSeccion() 
{
	return $this->CodigoSeccion;
}
public function getNombreSeccion()
 {
	return $this->NombreSeccion;
}/* FIN METODOS GET DE VARIABLES SECCION */


/********************************************/
/*               Funciones                  */
/********************************************/

/************Registro de concepto************/



/************Registro de Dependencia************/

public function consultarOrga() {

        $stsFuncion = $this->db->EjecutarVista("fn_i_dependencia('" . $this->getId_depe() . "',
															   '" . $this->getDescripcion() . "',
															   " . $this->getStatus() . "')");
        if ($stsFuncion->fields['fn_i_dependencia'] == "t") {//Si se guarda el registro devuelve true
            return TRUE;
        } else {
            return FALSE;
        }
    }

//Fin insertar concepto

public function insertarTipoConcepto( )
{
	$stsFuncion=$this->db->EjecutarVista("fn_i_tipo_conceptos(".$this->getConcepto().",
															 '".$this->getDenominacion()."',
															 ".$this->getTipoConcepto().")");

	if ($stsFuncion->fields['fn_i_tipo_conceptos']=="t")
	{//Si se guarda el registro devuelve true
		return TRUE;
	}
	else
	{
		return FALSE;
	}
}//Fin insertar concepto




/************Registro de Dependencia************/

public function insertarDependencia( )
{
	$stsFuncion=$this->db->EjecutarVista("fn_i_dependencia(".$this->getId_depe().",
							       '".$this->getDescripcion()."',
							       ".$this->getStatus().",
							       ".$this->getId_Orga().")");
	if ($stsFuncion->fields['fn_i_dependencia']=="t")
	{//Si se guarda el registro devuelve true
		return TRUE;
	}
	else
	{
		return FALSE;
	}

}//Fin insertar dependencias


/************Registro de Direccion************/
public function insertarDireccion( )
{
	
	$stsFuncion=$this->db->EjecutarVista("fn_i_direcciones(".$this->getId_Dire().",
														   '".$this->getDescripcionDire()."',
														   ".$this->getStatus().",
														   ".$this->getId_Depe().",
														   ".$this->getId_Orga().")");
	if ($stsFuncion->fields['fn_i_direcciones']=="t")
	{//Si se guarda el registro devuelve true
		return TRUE;
	}
	else
	{
		return FALSE;
	}
}//Fin insertar direcciones

/************Registro de Unidad************/
public function insertarUnidad( )
{
	
														   
	$stsFuncion=$this->db->EjecutarVista("fn_i_unidades(".$this->getId_Unidad().",
														'".$this->getDescripcionUnidad()."',
														".$this->getStatus().",
														".$this->getId_Dire().",
														".$this->getId_Depe().",
														".$this->getId_Orga().")");
	if ($stsFuncion->fields['fn_i_unidades']=="t")
	{//Si se guarda el registro devuelve true
		return TRUE;
	}
	else
	{
		return FALSE;
	}

}//Fin insertar unidades


/************Registro de Coordinaciones************/
public function insertarCoordinacion( )
{  						   
	$stsFuncion=$this->db->EjecutarVista("fn_i_coordinaciones(".$this->getId_Coor().",
															 '".$this->getDescripcionCoor()."',
														     ".$this->getId_Unidad().",
														     ".$this->getId_Orga().",
															 ".$this->getId_Depe().",
															 ".$this->getId_Dire().",
															 ".$this->getStatus().")");
	if ($stsFuncion->fields['fn_i_coordinaciones']=="t")
	{//Si se guarda el registro devuelve true
		return TRUE;
	}
	else
	{
		return FALSE;
	}

}//Fin insertar unidades


/************Registro de Subgrupo************/

public function insertarSubgrupo( )
{
	$stsFuncion=$this->db->EjecutarVista("fn_i_subgrupo(".$this->getCodigoSubGrupo().",
															'".$this->getNombreSubGrupo()."',
															".$this->getCodigoGrupo().")");


	if ($stsFuncion->fields['fn_i_subgrupo']=="t")
	{//Si se guarda el registro devuelve true
		return TRUE;
	}
	else
	{
		return FALSE;
	}
}/* FIN insertar Subgrupo */


/* FUNCION insertarSeccion */
public function insertarSeccion( )
{
	$stsFuncion=$this->db->EjecutarVista("fn_i_seccion(".$this->getCodigoSeccion().",
                                                       '".$this->getNombreSeccion()."',
                                                       ".$this->getCodigoSubGrupo().")");


	if ($stsFuncion->fields['fn_i_seccion']=="t")
	{//Si se guarda el registro devuelve true
		return TRUE;
	
	}
	else
	{
		return FALSE;

	}
}/* FIN insertarSeccion */


/*  insertar Producto */
public function insertarProducto( )
{	$stsFuncion=$this->db->EjecutarVista("fn_i_producto('".$this->getNombreProd()."',
                                                       '".$this->getDescripcionProd()."',
                                                       ".$this->getCodigoSubGrupo().",
													   ".$this->getCodigoSeccion().")");


	if ($stsFuncion->fields['fn_i_producto']=="t")
	{//Si se guarda el registro devuelve true
		return TRUE;
		
	}
	else
	{
		return FALSE;
		
	}
}/* FIN insertarSeccion */

/*  insertar Proveedor */
public function insertarProveedor( )
{	
$stsFuncion=$this->db->EjecutarVista("fn_i_proveedor('".$this->getRifTipo()."',
                                                         ".$this->getRifId().",
                                                         '".$this->getDenominacionPro()."',
													     '".$this->getDireccionPro()."',
													     '".$this->getTlfPro()."',
													     ".$this->getStatusPro().",
													     ".$this->getId_Orga().")");


	if ($stsFuncion->fields['fn_i_proveedor']=="t")
	{//Si se guarda el registro devuelve true
		return TRUE;
		
	}
	else
	{
		return FALSE;
		
	}
}/* FIN insertarSeccion */


/************Consulta de tipo de concepto************/

public function ConsultarTipoConcepto( $intOpcion )
{
	if ($this->getConcepto()!="")
	{
		$stsWhere= "id_conc=".$this->getConcepto()."";
	}

	if ($stsWhere != "")
	{
		$stsWhere= "WHERE ".$stsWhere;
	}
	else
	{
		$stsWhere= "";
	}

	$arrResultado = $this->db->EjecutarQuery("SELECT * FROM sch_sicobim.vista_conceptos ".$stsWhere);

	if ($intOpcion==0)
	{
		if ($arrResultado->EOF)
		{
			return FALSE;
		}
		else //if ($arrResultado->EOF)
		{
			while ( !$arrResultado->EOF )
			{
				$this->setArrConcepto($arrResultado->fields['id_conc']);
				$this->setArrDescripcion($arrResultado->fields['descripcion']);
				$this->setArrTipoConcepto($arrResultado->fields['nombre']);
				$arrResultado->MoveNext();
					
			}	//Fin de while ( !$arrResultado->EOF )

			return TRUE;
		}	//Fin de if ($arrResultado->EOF)
	}
	else
	{
		return $arrResultado->RecordCount();
	}


}	//	fin de consultar tipo de movimiento


/************Consulta Sub Grupo************/

public function ConsultarSubGrupo( $intOpcion )
{
		
	$arrResultado = $this->db->EjecutarQuery("SELECT * FROM sch_sicobim.vista_subgrupo ");

	if ($intOpcion==0)
	{
		if ($arrResultado->EOF)
		{
			return FALSE;
		}
		else //if ($arrResultado->EOF)
		{
			while ( !$arrResultado->EOF )
			{
				$this->setArrCodigoSubGrupo($arrResultado->fields['id_subg']);
				$this->setArrNombreSubGrupo($arrResultado->fields['descripcion']);
				$this->setArrCodigoGrupo($arrResultado->fields['id_grup']);
				$arrResultado->MoveNext();
					
			}	//Fin de while ( !$arrResultado->EOF )

			//return TRUE;
		}	//Fin de if ($arrResultado->EOF)
	}
	else
	{
		return $arrResultado->RecordCount();
	}


}	//	fin de consultar tipo de movimiento



/************Consulta Seccion************/

public function consultarSeccion( $intOpcion )
{
		
	$arrResultado = $this->db->EjecutarQuery("SELECT * FROM sch_sicobim.vista_seccion");

	if ($intOpcion==0)
	{
		if ($arrResultado->EOF)
		{
			return FALSE;
		}
		else //if ($arrResultado->EOF)
		{
			while ( !$arrResultado->EOF )
			{
				$this->setArrCodigoSeccion($arrResultado->fields['id_secc']);
				$this->setArrNombreSeccion($arrResultado->fields['descripcion']);
				$this->setArrNombreSubGrupo($arrResultado->fields['nombre']);
                                $this->setArrCodigoSubGrupo($arrResultado->fields['id_subg']);
				$arrResultado->MoveNext();
					
			}	//Fin de while ( !$arrResultado->EOF )

			//return TRUE;
		}	//Fin de if ($arrResultado->EOF)
	}
	else
	{
		return $arrResultado->RecordCount();
	}


}	//	fin de consultar tipo de movimiento


/************Consulta Producto************/

public function consultarProducto( $intOpcion )
{
		
	$arrResultado = $this->db->EjecutarQuery("SELECT * FROM sch_sicobim.vista_productos");

	if ($intOpcion==0)
	{
		if ($arrResultado->EOF)
		{
			return FALSE;
		}
		else //if ($arrResultado->EOF)
		{
			while ( !$arrResultado->EOF )
			{
				$this->setArrId_Prod($arrResultado->fields['id_prod']);
				$this->setArrNombreProd($arrResultado->fields['nombre']);
				$this->setArrDescripcionProd($arrResultado->fields['descripcion']);
				$this->setArrCodigoSubGrupo($arrResultado->fields['id_subg']);
                                $this->setArrNombreSubGrupo($arrResultado->fields['subgrupo']);
                                $this->setArrCodigoSeccion($arrResultado->fields['id_secc']);
                                $this->setArrNombreSeccion($arrResultado->fields['seccion']);
				$arrResultado->MoveNext();
					
			}	//Fin de while ( !$arrResultado->EOF )

			//return TRUE;
		}	//Fin de if ($arrResultado->EOF)
	}
	else
	{
		return $arrResultado->RecordCount();
	}


}	//	fin de consultar Producto


/************Consulta Proveedor************/
public function consultarProveedor( $intOpcion, $usu )
{ 
	$arrResultado = $this->db->EjecutarQuery("SELECT * FROM sch_sicobim.vista_proveedor where nb_usuario = '$usu'");

	if ($intOpcion==0)
	{
		if ($arrResultado->EOF)
		{
			return FALSE;
		}
		else //if ($arrResultado->EOF)
		{
			while ( !$arrResultado->EOF )
			{
				$this->setArrRifTipo($arrResultado->fields['riftipo']);
				$this->setArrRifId($arrResultado->fields['rifid']);
				$this->setArrDenominacionPro($arrResultado->fields['nombre']);
				$this->setArrDireccionPro($arrResultado->fields['direccion']);
              $this->setArrTlfPro($arrResultado->fields['tlf']);
				$arrResultado->MoveNext();
					
			}	//Fin de while ( !$arrResultado->EOF )

			//return TRUE;
		}	//Fin de if ($arrResultado->EOF)
	}
	else
	{
		return $arrResultado->RecordCount();
	}


}	//	fin de consultar Producto



 public function ConsultarOrgUsu($usuario)
     {
        $arrResultado = $this->db->EjecutarQuery("SELECT id_orga FROM sch_sicobim.usuario where nb_bd_usuario ='$usuario'");

        if ($arrResultado) {
            //$this->setArrId_Orga($arrResultado->fields['id_orga']);
            return $arrResultado;
        } //Fin de while ( !$arrResultado->EOF )
        else {
            return $ERROR;
        } //Fin de if ($arrResultado->EOF)
    }

/************Consulta de dependencia************/
      public function ConsultarDependendiaId($id) {
               $intResultado = $this->db->EjecutarQuery("SELECT id_depe FROM sch_sicobim.dependencias where id_depe = '$id'");
               if ($intResultado->EOF)
               {
                       return FALSE;
               }else{
               while (!$intResultado->EOF )
                       {
               
                               $this->setArrId_Depe($intResultado->fields['id_depe']);
                               $intResultado->MoveNext();
                       }
                       //return TRUE;
               }
               
             //return $arrResultado->RecordCount();  
           }
 
 


public function ConsultarDependencia( $intOpcion , $usu )
{
  	$arrResultado = $this->db->EjecutarQuery("SELECT * FROM sch_sicobim.vista_prueba where nb_usuario = '$usu' ");
      
       	if ($intOpcion==0)
	{
		if ($arrResultado->EOF)
		{
			return FALSE;
		}
		else //if ($arrResultado->EOF)
		{
			while ( !$arrResultado->EOF )
			{
				$this->setArrId_Depe($arrResultado->fields['id_depe']);
				$this->setArrDescripcion($arrResultado->fields['descripcion']);
				$this->setArrId_Orga($arrResultado->fields['id_orga']);
				$arrResultado->MoveNext();
					
			}	//Fin de while ( !$arrResultado->EOF )

			return TRUE;
		}	//Fin de if ($arrResultado->EOF)
	}
	else
	{
		return $arrResultado->RecordCount();
	}


}	//	fin de consultar tipo de movimiento


/***************Consulta Direccion*****************/
 public function ConsultarDireccionId($id) {
               $intResultado = $this->db->EjecutarQuery("SELECT id_dire FROM sch_sicobim.direcciones where id_dire = '$id'");
               if ($intResultado->EOF)
               {
                       return FALSE;
               }else{
               while (!$intResultado->EOF )
                       {
               
                               $this->setArrId_Dire($intResultado->fields['id_dire']);
                               $intResultado->MoveNext();
                       }
                       //return TRUE;
               }
               
             //return $arrResultado->RecordCount();  
           }
 


public function ConsultarDireccion( $intOpcion, $usu)
{ 
	$arrResultado = $this->db->EjecutarQuery("SELECT * FROM sch_sicobim.vs_direccion where nb_usuario = '$usu'");
       
	if ($intOpcion==0)
	{
		if ($arrResultado->EOF)
		{
			return FALSE;
		}
		else //if ($arrResultado->EOF)
		{
			while ( !$arrResultado->EOF )
			{
				$this->setArrId_Dire($arrResultado->fields['id_dire']);
				$this->setArrDescripcionDire($arrResultado->fields['descripcion']);
				$this->setArrDescripcion($arrResultado->fields['nombredepe']);
				$this->setArrId_Depe($arrResultado->fields['id_depe']);
				$arrResultado->MoveNext();
					
			}	//Fin de while ( !$arrResultado->EOF )

			//return TRUE;
		}	//Fin de if ($arrResultado->EOF)
	}
	else
	{
		return $arrResultado->RecordCount();
	}
}	//	fin de consultar Direccion

/***************Consulta Unidad*****************/

public function ConsultarUnidadId($id) {
               $intResultado = $this->db->EjecutarQuery("SELECT id_unid FROM sch_sicobim.unidades where id_unid = '$id'");
               if ($intResultado->EOF)
               {
                       return FALSE;
               }else{
               while (!$intResultado->EOF )
                       {
               
                               $this->setArrId_Unidad($intResultado->fields['id_unid']);
                               $intResultado->MoveNext();
                       }
                       //return TRUE;
               }
               
             //return $arrResultado->RecordCount();  
           }



public function ConsultarUnidad( $intOpcion, $usu )
{
	
	$arrResultado = $this->db->EjecutarQuery("SELECT * FROM sch_sicobim.vs_unidad where nb_usuario = '$usu'");

	if ($intOpcion==0)
	{
		
            
            if ($arrResultado->EOF)
		{
			return FALSE;
		}
		else //if ($arrResultado->EOF)
		{
			while ( !$arrResultado->EOF )
			{
				$this->setArrId_Unidad($arrResultado->fields['id_unid']);
				$this->setArrDescripcionUnidad($arrResultado->fields['descripcion']);
				$this->setArrDescripcionDire($arrResultado->fields['nombredire']);
				$this->setArrDescripcion($arrResultado->fields['nombredepe']);
				$this->setArrId_Dire($arrResultado->fields['id_dire']);
				$this->setArrId_Depe($arrResultado->fields['id_depe']);
				$arrResultado->MoveNext();
					
			}	//Fin de while ( !$arrResultado->EOF )
					
			//return TRUE;
		}	//Fin de if ($arrResultado->EOF)
	}
	else
	{
		return $arrResultado->RecordCount();
	}
}	//	fin de consultar Unidad


/*************Consultar coordinacion**********************/
public function ConsultarCoordinacionId($id) {
    
               $intResultado = $this->db->EjecutarQuery("SELECT id_coor FROM sch_sicobim.coordinaciones where id_coor = '$id'");
               if ($intResultado->EOF)
               {
                       return FALSE;
               }else{
               while (!$intResultado->EOF )
                       {
               
                               $this->setArrId_Coor($intResultado->fields['id_coor']);
                               $intResultado->MoveNext();
                       }
                       //return TRUE;
               }
               
             //return $arrResultado->RecordCount();  
           }


public function ConsultarCoordinacion( $intOpcion, $usu )
{
	$arrResultado = $this->db->EjecutarQuery("SELECT * FROM sch_sicobim.vs_coordinacion where nb_usuario = '$usu'");

	if ($intOpcion==0)
	{
		if ($arrResultado->EOF)
		{
			return FALSE;
		}
		else //if ($arrResultado->EOF)
		{
			while ( !$arrResultado->EOF )
			{
				$this->setArrId_Coor($arrResultado->fields['id_coor']);
				$this->setArrDescripcionCoor($arrResultado->fields['descripcion']);
				$this->setArrId_Depe($arrResultado->fields['id_depe']);
				$this->setArrDescripcion($arrResultado->fields['nombredepe']);
				$this->setArrId_Dire($arrResultado->fields['id_dire']);
				$this->setArrDescripcionDire($arrResultado->fields['nombredire']);
				$this->setArrId_Unidad($arrResultado->fields['id_unid']);
				$this->setArrDescripcionUnidad($arrResultado->fields['nombreunid']);
				$arrResultado->MoveNext();
					
			}	//Fin de while ( !$arrResultado->EOF )
					
			//return TRUE;
		}	//Fin de if ($arrResultado->EOF)
	}
	else
	{
		return $arrResultado->RecordCount();
	}
}	//	fin de consultar Unidad



/************Modificar de tipo de concepto************/
public function modificarConceptos()
{
	$stsFuncion = "fn_m_conceptos('".$this->getConcepto()."',
										   '".$this->getDenominacion()."' ,
										   '".$this->getTipoConcepto()."')";

	$intResultado=$this->db->EjecutarProcedure($stsFuncion);

	if ( $intResultado )
	{
		return true;

	}
	else		//if ( $intResultado )
	{
		return false;
	}			//Fin de if ( $intResultado )


}
 
/************Modificar de SubGrupo************/
public function modificarSubGrupo()
{    // 	print_r(".$this->getCodigoSubGrupo().");
    $stsFuncion = "fn_m_sub_grupo(".$this->getCodigoSubGrupo().",
    '".$this->getNombreSubGrupo()."')";
	
$intResultado=$this->db->EjecutarProcedure($stsFuncion);

if ( $intResultado )
{
	return true;
		
}
else		//if ( $intResultado )
{
	return false;
}			//Fin de if ( $intResultado )
}


	/***********Modificar seccion****************/

public function modificarSeccion()
{ 
	$stsFuncion = "fn_m_seccion('".$this->getCodigoSeccion()."',
								  '".$this->getNombreSeccion()."' ,
								  '".$this->getCodigoSubGrupo()."')";

	$intResultado=$this->db->EjecutarProcedure($stsFuncion);

	if ( $intResultado )
	{
		return true;

	}
	else		//if ( $intResultado )
	{
		return false;
	}			//Fin de if ( $intResultado )


}

	/***********Modificar Producto****************/

public function modificarProducto()
{
	$stsFuncion = "fn_m_producto(".$this->getId_Prod().",
								'".$this->getNombreProd()."' ,
								'".$this->getDescripcionProd()."' ,
								".$this->getCodigoSubGrupo().",
								".$this->getCodigoSeccion().")";

	$intResultado=$this->db->EjecutarProcedure($stsFuncion);

	if ( $intResultado )
	{
		return true;

	}
	else		//if ( $intResultado )
	{
		return false;
	}			//Fin de if ( $intResultado )


}
	/***********Modificar Proveedor****************/

public function modificarProveedor()
{	$stsFuncion = "fn_m_proveedor(".$this->getRifId().",
								  '".$this->getDenominacionPro()."' ,
								  '".$this->getDireccionPro()."' ,
								  '".$this->getTlfPro()."')";

	$intResultado=$this->db->EjecutarProcedure($stsFuncion);

	if ( $intResultado )
	{
		return true;

	}
	else		//if ( $intResultado )
	{
		return false;
	}			//Fin de if ( $intResultado )


}

/************Modificar Dependencia************/
public function modificarDependencia()
	{    
	    $stsFuncion = "fn_m_dependencia(".$this->getId_Depe().",
	                                  '".$this->getDescripcion()."')";
		
	$intResultado=$this->db->EjecutarProcedure($stsFuncion);
	
	if ( $intResultado )
	{
		return true;
			
	}
	else		//if ( $intResultado )
	{
		return false;
	}			//Fin de if ( $intResultado )
}


/************Modificar Direccion************/
public function modificarDireccion()
{ 
	$stsFuncion = "fn_m_direcciones('".$this->getId_Dire()."',
								  '".$this->getDescripcionDire()."' ,
								  '".$this->getId_Depe()."')";

	$intResultado=$this->db->EjecutarProcedure($stsFuncion);

	if ( $intResultado )
	{
		return true;

	}
	else		//if ( $intResultado )
	{
		return false;
	}			//Fin de if ( $intResultado )
}

/************Modificar Direccion************/
public function modificarUnidad()
{ 	$stsFuncion = "fn_m_unidades('".$this->getId_Unidad()."',
								  '".$this->getDescripcionUnidad()."' ,
								  '".$this->getId_Depe()."',
								  '".$this->getId_Dire()."')";

	$intResultado=$this->db->EjecutarProcedure($stsFuncion);

	if ( $intResultado )
	{
		return true;

	}
	else		//if ( $intResultado )
	{
		return false;
	}			//Fin de if ( $intResultado )
}
/*****************Modificar coordinaciones**********************/
public function modificarCoordinacion()
{ 	
	$stsFuncion = "fn_m_coordinaciones('".$this->getId_Coor()."',
								 	  '".$this->getDescripcionCoor()."' ,
								 	  '".$this->getId_Depe()."',
								 	  '".$this->getId_Unidad()."',
								  	  '".$this->getId_Dire()."')";

	$intResultado=$this->db->EjecutarProcedure($stsFuncion);

	if ( $intResultado )
	{
		return true;

	}
	else		//if ( $intResultado )
	{
		return false;
	}			//Fin de if ( $intResultado )
}


public function eliminarProveedor()
   	{   $stsFuncion="fn_e_proveedor(".$this->getRifId().")";
   	  	   	  	
   	  	$intResultado=$this->db->EjecutarProcedure($stsFuncion);

   	  	if ($intResultado==TRUE)
   	  		return TRUE;
   	  	else
   	  		return FALSE;
   	  		
   	}
   	
	public function eliminarCoordinacion()
   	{ 
   		$stsFuncion="fn_e_coordinacion(".$this->getId_Coor().")";
   	  	   	  	
   	  	$intResultado=$this->db->EjecutarProcedure($stsFuncion);

   	  	if ($intResultado==TRUE)
   	  		return TRUE;
   	  	else
   	  		return FALSE;
   	  		
   	}
			
public function validarMovimientoTablaConsulta($desde, $hasta)
{
	if ($this->getConcepto() != "")
	{
		$stsWhere= "id_conc='".$this->getConcepto()."'";
	}

	if ($stsWhere != "")
	{
		$stsWhere= "WHERE ".$stsWhere;
	}
		
	$condi2 = ' LIMIT '.$hasta.' offset '.$desde;
		
	//echo ("SELECT * FROM sicobim.usuario ".$stsWhere.$condi2);
	$arrResultado = $this->db->EjecutarQuery("SELECT * FROM sch_sicobim.conceptos ".$stsWhere.$condi2);

	if ($arrResultado->fields['id_conc'] != "")
	{
		while (!$arrResultado->EOF)
		{
			$this->setArrConcepto($arrResultado->fields['id_conc']);
			$this->setArrDenominacion($arrResultado->fields['descripcion']);
			$this->setArrTipoConcepto($arrResultado->fields['id_ti']);
			$arrResultado->MoveNext();
		}
			
		return TRUE;
	}
	else
	{
		return FALSE;
	}
	
	
}// fin validarMovimientoTablaConsulta

   


}
?>
