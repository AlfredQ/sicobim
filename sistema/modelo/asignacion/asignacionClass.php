<?php
/*
 * Created 
 * <Nombre del archivo: > *
 * <Versión del archivo: 1.0>
 * <Autor del archivo:>
 * <Breve explicación del contenido de el archivo:
 * Modelo de Usuarios del sistema>
 */
session_start();

require_once('../../modelo/baseDatos.Class.php');
class asignacion
{ 
//Compras
private $Id_Acta;
private $Id_Orden;
private $Fecha_Orden;
private $Id_Factura;
private $Fecha_Factura;
private $Id_Rif;
private $Id_Depe;
private $Id_Direccion;
private $Id_Unidad;
private $Id_Coordinacion;
private $Id_Inve;
private $Id_SubGrupo;
private $Id_Seccion;
private $Id_Producto;
private $Precio;
private $Caracteristica;
private $Fecha;
private $Id_Usuario;
private $Radio;

private $ActaJusti;
private $RadioNP;

//arreglos conceptos
private $arrId_Acta= array();
private $arrId_Orden= array();
private $arrFecha_Orden= array();
private $arrId_Factura= array();
private $arrFecha_Factura= array();
private $arrId_Rif= array();
private $arrId_Depe= array();
private $arrId_Direccion= array();
private $arrId_Unidad= array();
private $arrId_Coordinacion= array();
private $arrId_Inve=array();
private $arrId_SubGrupo=array();
private $arrId_Seccion=array();
private $arrId_Producto=array();
private $arrPrecio=array();
private $arrCaracteristica=array();
private $arrFecha=array();
private $arrId_Usuario=array();
private $arrRadio=array();


protected $db;

public function __construct( Base $db )
{
	$this->db = $db;
}

/*********************SET ARRAY*********************/
public function setArrId_Acta($arrId_Acta)
{
	array_push($this->arrId_Acta,$arrId_Acta);
}

public function setArr($arrId_Orden) 
{
	array_push($this->arrId_Orden,$arrId_Orden);
}

public function setArrFechaOrden($arrFechaOrden)
{
	array_push($this->arrFecha_Orden,$arrFechaOrden);
}

public function setArrId_Factura($arrId_Factura) 
{
	array_push($this->arrId_Factura,$arrId_Factura);
}

public function setArrFecha_Factura($arrFecha_Factura) 
{
	array_push($this->arrFecha_Factura,$arrFecha_Factura);
}
public function setArrId_Rif($arrId_Rif) 
{
	array_push($this->arrId_Rif,$arrId_Rif);
}
public function setArrId_Depe($arrId_Depe) 
{
	array_push($this->arrId_Depe,$arrId_Depe);
}
public function setArrId_Direccion($arrId_Direccion) 
{
	array_push($this->arrId_Direccion,$arrId_Direccion);
}
public function setArrId_Unidad($arrId_Unidad) 
{
	array_push($this->arrId_Unidad,$arrId_Unidad);
}
public function setArrId_Coordinacion($arrId_Coordinacion) 
{
	array_push($this->arrId_Coordinacion,$arrId_Coordinacion);
}
public function setArrId_Inve($arrId_Inve) 
{
	array_push($this->arrId_Inve,$arrId_Inve);
}
public function setArrId_SubGrupo($arrId_SubGrupo) 
{
	array_push($this->arrId_SubGrupo,$arrId_SubGrupo);
}
public function setArrId_Seccion($arrId_Seccion) 
{
	array_push($this->arrId_Seccion,$arrId_Seccion);
}
public function setArrId_Producto($arrId_Producto) 
{
	array_push($this->arrId_Producto,$arrId_Producto);
}
public function setArrPrecio($arrPrecio) 
{
	array_push($this->arrPrecio,$arrPrecio);
}
public function setArrCaracteristica($arrCaracteristica) 
{
	array_push($this->arrCaracteristica,$arrCaracteristica);
}
public function setArrFecha($arrFecha) 
{
	array_push($this->arrFecha,$arrFecha);
}
public function setArrId_Usuario($arrId_Usuario) 
{
	array_push($this->arrId_Usuario,$arrId_Usuario);
}
public function setArrRadio($arrRadio) 
{
	array_push($this->arrRadio,$arrRadio);
}
/*********************GET ARRAY*********************/
public function getArrId_Acta() 
{
	return $this->arrId_Acta;
}
public function getArrId_Orden()
{
	return $this->arrId_Orden;
}
public function getArrFecha_Orden()
{
	return $this->arrFecha_Orden;
}
public function getArrId_Factura()
{
	return $this->arrId_Factura;
}
public function getArrFecha_Factura()
{
	return $this->arrFecha_Factura;
}
public function getArrId_Rif()
{
	return $this->arrId_Rif;
}
public function getArrId_Depe()
{
	return $this->arrId_Depe;
}
public function getArrId_Direccion()
{
	return $this->arrId_Direccion;
}
public function getArrId_Unidad()
{
	return $this->arrId_Unidad;
}
public function getArrId_Coordinacion()
{
	return $this->arrId_Coordinacion;
}
public function getArrId_Inve()
{
	return $this->arrId_Inve;
}
public function getArrId_SubGrupo()
{
	return $this->arrId_SubGrupo;
}
public function getArrId_Seccion()
{
	return $this->arrId_Seccion;
}
public function getArrId_Producto()
{
	return $this->arrId_Producto;
}
public function getArrPrecio()
{
	return $this->arrPrecio;
}
public function getArrCaracteristica()
{
	return $this->arrCaracteristica;
}
public function getArrFecha()
{
	return $this->arrFecha;
}
public function getArrId_Usuario()
{
	return $this->arrId_Usuario;
}
public function getArrRadio()
{
	return $this->arrRadio;
}
/*********************SET*********************/
public function setId_Acta($Id_Acta) 
{
	$this->Id_Acta = $Id_Acta;
}
public function setId_Orden($Id_Orden)
{
	$this->Id_Orden = $Id_Orden;
}
public function setFecha_Orden($Fecha_Orden)
{
	$this->Fecha_Orden = $Fecha_Orden;
}
public function setId_Factura($Id_Factura)
{
	$this->Id_Factura = $Id_Factura;
}
public function setFecha_Factura($Fecha_Factura)
{
	$this->Fecha_Factura = $Fecha_Factura;
}
public function setId_Rif($Id_Rif)
{
	$this->Id_Rif = $Id_Rif;
}
public function setId_Depe($Id_Depe)
{
	$this->Id_Depe = $Id_Depe;
}
public function setId_Direccion($Id_Direccion)
{
	$this->Id_Direccion = $Id_Direccion;
}
public function setId_Unidad($Id_Unidad)
{
	$this->Id_Unidad = $Id_Unidad;
}
public function setId_Coordinacion($Id_Coordinacion)
{
	$this->Id_Coordinacion = $Id_Coordinacion;
}
public function setId_Inve($Id_Inve)
{
	$this->Id_Inve = $Id_Inve;
}
public function setId_SubGrupo($Id_SubGrupo)
{
	$this->Id_SubGrupo = $Id_SubGrupo;
}
public function setId_Seccion($Id_Seccion)
{
	$this->Id_Seccion = $Id_Seccion;
}
public function setId_Producto($Id_Producto)
{
	$this->Id_Producto = $Id_Producto;
}
public function setPrecio($Precio)
{
	$this->Precio = $Precio;
}
public function setCaracteristica($Caracteristica)
{
	$this->Caracteristica = $Caracteristica;
}
public function setFecha($Fecha)
{
	$this->Fecha= $Fecha;
}
public function setId_Usuario($Id_Usuario)
{
	$this->Id_Usuario= $Id_Usuario;
}
public function setRadio($Radio)
{
	$this->Radio= $Radio;
}
public function setRadioNP($RadioNP)
{
	$this->RadioNP= $RadioNP;
}
public function setActaNP($ActaNP)
{
	$this->ActaNP= $ActaNP;
}
public function setActaJusti($ActaJusti)
{
	$this->ActaJusti= $ActaJusti;
}
/************Get***************/
public function getId_Acta() 
{
	return $this->Id_Acta;
}
public function getId_Orden() 
{
	return $this->Id_Orden;
}
public function getFecha_Orden() 
{
	return $this->Fecha_Orden;
}
public function getId_Factura() 
{
	return $this->Id_Factura;
}
public function getFecha_Factura() 
{
	return $this->Fecha_Factura;
}
public function getId_Rif() 
{
	return $this->Id_Rif;
}
public function getId_Depe() 
{
	return $this->Id_Depe;
}
public function getId_Direccion() 
{
	return $this->Id_Direccion;
}
public function getId_Unidad() 
{
	return $this->Id_Unidad;
}
public function getId_Coordinacion() 
{
	return $this->Id_Coordinacion;
}
public function getId_Inve() 
{
	return $this->Id_Inve;
}
public function getId_SubGrupo() 
{
	return $this->Id_SubGrupo;
}
public function getId_Seccion() 
{
	return $this->Id_Seccion;
}
public function getId_Producto() 
{
	return $this->Id_Producto;
}
public function getPrecio() 
{
	return $this->Precio;
}
public function getCaracteristica() 
{
	return $this->Caracteristica;
}
public function getFecha() 
{
	return $this->Fecha;
}
public function getId_Usuario() 
{
	return $this->Id_Usuario;
}
public function getRadio() 
{
	return $this->Radio;
}

public function getRadioNP() 
{
	return $this->RadioNP;
}
public function getActaJusti() 
{
	return $this->ActaJusti;
}






/********************************************/
/*               Funciones                  */
/********************************************/

/************Registro de compra************/
public function insertarCompra( $fechaF, $fechaO, $fechaRegistro, $ciusu)
{ 					
 echo "----FF".$fechaF."--FO".$fechaO."--FR".$fechaRegistro."--CI".$ciusu."----".$this->getId_Acta()."*******";
 
							 echo "fn_i_orden_compra('".$this->getId_Acta()."',
									 				  '".$this->getId_Orden()."',
													  '".$fechaO."',
													  '".$this->getId_Factura()."',
													  '".$fechaF."',
													  ".$this->getId_Rif().",
													  '".$ciusu."',
													  ".$this->getId_Coordinacion().",
													  ".$this->getId_Depe().",
													  ".$this->getId_Unidad().",
													  ".$this->getId_Direccion().",
													  '".$fechaRegistro."' )";

	$stsFuncion=$this->db->EjecutarVista("fn_i_orden_compra('".$this->getId_Acta()."',
									 				 		 '".$this->getId_Orden()."',
													  		 '".$fechaO."',
													  		 '".$this->getId_Factura()."',
														     '".$fechaF."',
														     ".$this->getId_Rif().",
														     '".$ciusu."',
														     ".$this->getId_Coordinacion().",
														     ".$this->getId_Depe().",
														     ".$this->getId_Unidad().",
														     ".$this->getId_Direccion().",
														     '".$fechaRegistro."' )");
	if ($stsFuncion->fields['fn_i_orden_compra']=="t")
	{//echo "Si se guarda el registro devuelve true";
		return TRUE;
	}
	else
	{
		return FALSE;
	}

}//Fin insertar unidades*/

public function insertarJustiprecio($fechaRegistro, $ciusu)
{ 					//   echo "insertarJustiprecio";
 //echo "--FR".$fechaRegistro."--CI".$ciusu."----";
 //id_actai, radioi, fechai, nu_cedula_usuarioi, id_coori, id_depei, id_unidi, id_direi
 
echo "fn_i_justiprecio('".$this->getId_Acta()."',
 				   	  
 				   	   '".$fechaRegistro."',
				 	   '".$ciusu."',
					   ".$this->getId_Coordinacion().",
				       ".$this->getId_Depe().",
				       ".$this->getId_Unidad().",
				       ".$this->getId_Direccion().")";

	$stsFuncion=$this->db->EjecutarVista("fn_i_justiprecio('".$this->getId_Acta()."',
									 				   	    '".$fechaRegistro."',
													 	   '".$ciusu."',
														   ".$this->getId_Coordinacion().",
													       ".$this->getId_Depe().",
													       ".$this->getId_Unidad().",
													       ".$this->getId_Direccion().")");
	if ($stsFuncion->fields['fn_i_justiprecio']=="t")
	{//echo "Si se guarda el registro devuelve true";
		return TRUE;
	}
	else
	{
		return FALSE;
	}

}//Fin insertar unidades*/


/*********Insertar bien*********/


public function insertar($acta, $numBien, $numSubg, $numSecc, $numProd, $bsf, $carac, $ciusu, $actaj)
{ 

	//echo '---'.$numBien.' '.$carac.' '.$bsf.' '.$ci.' '.$numProd.' '.$numSubg.' '.$numSecc.' '.$acta.' '.$ciusu.'gggg'.$actaj.'gggggg';
	//$ci='16589612';
	
//	(id_invi, descripcion, montobsf, nu_cedula_usuario, id_prod, id_subg, id_secc, id_acta, id_acta_justi)
if($actaj == ''){
	echo "fn_i_inventario(".$numBien.",
													  '".$carac."',
													  ".$bsf.",
									 				  '".$ciusu."',
									 				  ".$numProd.",
									 				  ".$numSubg.",
													  ".$numSecc.",
									 				  '".$acta."')";
$stsFuncion=$this->db->EjecutarVista("fn_i_inventario(".$numBien.",
													  '".$carac."',
													  ".$bsf.",
									 				  '".$ciusu."',
									 				  ".$numProd.",
									 				  ".$numSubg.",
													  ".$numSecc.",
									 				  '".$acta."')");

		
			if ($stsFuncion->fields['fn_i_inventario']=="t")
			{
				return TRUE;
				
			}
			else
			{
				return FALSE;
				
			}
	
}//FIN IF
	/*$arrResultado = $this->db->EjecutarQuery("INSERT INTO sch_sicobim.inventario(id_invi, 
														descripcion, montobsf, nu_cedula_usuario, 
														id_prod, id_subg, id_secc, id_acta, radio)
												    	 VALUES
														($numBien,'$carac',$bsf,'$ci',$numProd,$numSubg,
														$numSecc, '$acta','$radio')");*/

	
}


/*************Consultar coordinacion**********************/
public function consultarAsignacion( )
{ //echo"SELECT * FROM sch_sicobim.orden_compra WHERE id_ordc=='".$this->getId_Orden()."'";
	$arrResultado = $this->db->EjecutarQuery("SELECT * FROM sch_sicobim.orden_compra WHERE id_ordc='".$this->getId_Orden()."'");

		if ($arrResultado->EOF)
		{ 
			return FALSE;
		}
		else //if ($arrResultado->EOF)
		{
			while ( !$arrResultado->EOF )
			{
				$this->setArrId_Acta($arrResultado->fields['id_acta']);
				$this->setArrFechaOrden($arrResultado->fields['fecha_ordc']);
				$this->setArrId_Factura($arrResultado->fields['id_fact']);
				$this->setArrFecha_Factura($arrResultado->fields['fecha_fact']);
				$this->setArrId_Rif($arrResultado->fields['rifid']);
				$this->setArrId_Coordinacion($arrResultado->fields['id_coor']);
				$this->setArrId_Depe($arrResultado->fields['id_depe']);
				$this->setArrId_Unidad($arrResultado->fields['id_unid']);
				$this->setArrId_Direccion($arrResultado->fields['id_dire']);
				$arrResultado->MoveNext();
		
			}	//Fin de while ( !$arrResultado->EOF )
					
			//return TRUE;
		}	//Fin de if ($arrResultado->EOF)
	
	
}	//	fin de consultar Unidad




/*************Consultar coordinacion**********************/
public function consultarUsuarioSession( $usu )
{
	$arrResultado = $this->db->EjecutarQuery("SELECT * FROM sch_sicobim.usuario WHERE nb_bd_usuario='$usu'");

		if ($arrResultado->EOF)
		{
			return FALSE;
		}
		else //if ($arrResultado->EOF)
		{
			while ( !$arrResultado->EOF )
			{
				$this->setId_Usuario($arrResultado->fields['nu_cedula_usuario']);
			
				$arrResultado->MoveNext();
					
			}	//Fin de while ( !$arrResultado->EOF )
					
			//return TRUE;
		}	//Fin de if ($arrResultado->EOF)
	
	
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
 



}
?>
