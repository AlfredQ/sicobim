<?php session_start();

abstract class Base
{
	//Conexion para la Base De Datos
	abstract public function Conexion();
	abstract public function Desconexion();
	/**
	 * 
	 * Gestiona registros en la base de datos haciendo uso de Procediminetos Almacenados en PostgreSQL
	 * @PARAM $SP -> Inidica el Stored Procedure (Procedimineto Almacenado) a utilizar
	 * @PARAM $Destino -> Inidica el sitio (p�gina) a donde resulta ubicado el usuario luego de que se ejecuta la funcion
	 *
	 **/
	
	///EL RESULTADO LO EVALUA COMO UN BOOLEAN
	abstract public function EjecutarProcedure($sp);
	/**
	 * 
	 * Ejecuta una vista de PostgreSQL que devuelve los campos necesarios para mostrar por pantalla
	 * @PARAM $VW -> Inidica la vista a invocar
	 * @PARAM $CampoID -> Indica el campo por el que se quiere filtrar
	 * @PARAM $ID -> Indica el valor por el que se esta filtrando
	 * @RETURN $resultado -> Recordset de todo lo que coincide con la condicion anterior
	 *
	 **/
	abstract public function EjecutarQuery($vista);
	/**
	 * 
	 * Ejecuta una vista de PostgreSQL que devuelve los campos necesarios para mostrar por pantalla
	 * @PARAM $VW -> Inidica la vista a invocar
	 * @PARAM $CampoID -> Indica el campo por el que se quiere filtrar
	 * @PARAM $ID -> Indica el valor por el que se esta filtrando
	 * @RETURN $resultado -> Recordset de todo lo que coincide con la condicion anterior
	 *
	 **/
	abstract public function EjecutarVista($vista);	
	abstract public function EjecutarVistaXCampos($vista, $campos);
	abstract public function ListarVW($vista, $valor, $campo);
	abstract public function ListarVWCamposVarios($vista, $campos, $valor, $descripcion,$valorSelected);
	abstract public function ListarVWVarios($vista, $valor, $campo1, $campo2);	
	/* ESTA FUNCION LISTA POR CAMPOS ESPECIFICOS DE UNA VISTA DE BASE DE DATOS, ADEMAS MUESTRA UNA UNICA DESCRIPCION
	** Y EVALUA SI UNA OPCION DEL COMBO BOX FUE SELECCIONADA PARA MOSTRAR EL VALOR QUE EL USUARIO ESCOJIO
	** POR EJEMPLO, ESTA FUNCION ES UTILIZADA EN LA CONSULTA DE MOVIMIENTO DE MEDIDORES
	*/
	abstract public function ListarVWxCampos($vista, $campos, $valor, $descripcion,$comboAEvaluar);
	abstract public function ListarVWxId($vista, $campos, $valor, $descripcion, $comoAEvaluar);
	abstract public function ListarVWSelectedMultiples($listado, $valor, $campo, $selecciones);

}

include_once("../../../assets/adodb5/adodb.inc.php");

class BaseDatos extends Base{
	
	private $vIdBaseDatos;
	private $vNomBaseDatos;
	private $vUsuario;
	private $vClave;
	private $vServidor;
	private $vDsn;
	private $vDb;
	private $vEsquema;
	private $vEstatusBaseDatos; //{Activo: TRUE, Inactivo: FALSE}
	

	//CONTRUCTOR
	

	public function __construct()
	 {
		$this->SetIdBaseDatos ( "" );
		$this->SetServidor ( "172.51.1.18" ); //Produccion: metcam41.pdvsa.com  Desarrollo: metltq82bdd.met.pdvsa.com
			if ($this->GetServidor () == "172.51.1.18")
			{
				$this->SetUsuario ( $_SESSION['stsLoginUsuario_sicobim'] );
				$this->SetClave ( $_SESSION['stsClave_sicobim'] );
				//echo($_SESSION['stsClave_sicobim']);
				//echo ($_SESSION['stsLoginUsuario_sicobim']);
			
			} 
			$this->SetNomBaseDatos ( "sicobim" );
			$this->SetEsquema ( "sch_sicobim" );
			$this->SetEstatusBaseDatos ( "true" );

			$this->Conexion();
			
			
	}

	//FUNCIONES SETTERS Y GETTERS
	

	//Setter's
	public function SetIdBaseDatos($idBaseD) {
		$this->vIdBaseDatos = $idBaseD;
	}
	public function SetEsquema($esquema) {
		$this->vEsquema = $esquema;
	}
	public function SetServidor($server) {
		$this->vServidor = $server;
	}
	public function SetUsuario($user) {
		$this->vUsuario = $user;
	}
	public function SetClave($password) {
		$this->vClave = $password;
	}
	public function SetNomBaseDatos($dbname) {
		$this->vNomBaseDatos = $dbname;
	}
	public function SetDsn($dsn) {
		$this->vDsn = $dsn;
	}
	public function SetDB($bd) {
		$this->vDb = $bd;
		echo $db;
	}
	public function SetEstatusBaseDatos($statusBD) {
		$this->vEstatusBaseDatos = $statusBD;
	}
	//Getter's
	public function GetIdBaseDatos() {
		return $this->vIdBaseDatos;
	}
	public function GetServidor() {
		return $this->vServidor;
	}
	public function GetUsuario() {
		return $this->vUsuario;
	}
	public function GetClave() {
		return $this->vClave;
	}
	public function GetNomBaseDatos() {
		return $this->vNomBaseDatos;
	}
	public function GetDsn() {
		return $this->vDsn;
	}
	public function GetDB() {
		return $this->vDb;
	}
	public function GetEstatusBaseDatos() {
		return $this->vEstatusBaseDatos;
	}
	public function GetEsquema() {
		return $this->vEsquema;
	}
	//Conexion para la Base De Datos
	public function Conexion() {
	
		$usuario =  $this->GetUsuario();
		$clave = $this->GetClave();
		$servidor = $this->GetServidor();
		$nomBD = $this->GetNomBaseDatos();	

		$this->SetDsn ( "postgres8://$usuario:$clave@$servidor/$nomBD" );//postgres8!=mysql
	
		$this->SetDB ( NewADOConnection ( $this->GetDsn () ) );
		
		if (! $this->GetDB ()) {
			
			$this->SetEstatusBaseDatos("FALSE");
			//die ( "<b>ERROR FATAL:</b> FALLO LA CONEXION A LA BASE DE DATOS" );
		}
		else
		{
			$this->SetEstatusBaseDatos("TRUE");
		}
		$this->GetDB ()->debug = false; //True para ver las sentencias (SQL) del código mientras se ejecutan y FAlSE no las muestra
		$this->GetDB ()->port = 5432;//postgres5432  mysql 3366
		return $this->GetDB ();
	}
	public function Desconexion() {
		
		if ($this->GetDB ()->IsConnected () == true) {
			$this->GetDB ()->Close ();
		} else {
			echo '<script>
					alert("ERROR: No se pudo cerrar la Conexion de la Base de Datos");
			      </script>';
		}
	
	}
	
	/**
	 * 
	 * Gestiona registros en la base de datos haciendo uso de Procediminetos Almacenados en PostgreSQL
	 * @PARAM $SP -> Inidica el Stored Procedure (Procedimineto Almacenado) a utilizar
	 * @PARAM $Destino -> Inidica el sitio (p�gina) a donde resulta ubicado el usuario luego de que se ejecuta la funcion
	 *
	 **/
	
	///EL RESULTADO LO EVALUA COMO UN BOOLEAN
	public function EjecutarProcedure($sp) 
	{
		//echo ( "SELECT * FROM " .$this->GetEsquema().'.'.$sp );
		//die(ss);
		$db = $this->Conexion ();
     //echo "SELECT * FROM $sp ";
		try 
		{
			
			$db->StartTrans ();			
			$resultado = $db->GetOne ( "SELECT * FROM " .$this->GetEsquema().'.'.$sp );
			 
			$db->CompleteTrans ();

			if ($db->HasFailedTrans ()) 
			{
				$salida = "Fallo en la Transaccion " . $db->ErrorMsg ();
			}
		} 
		catch ( Exception $db ) 
		{
			$salida = "Fallo en la Transaccion " . $db->ErrorMsg ();
		}
		
		if ($resultado == false) 
		{
			$salida = "Fallo en la Transaccion " . $db->ErrorMsg ();
			$salida = FALSE;
			
		} 
		else 
		{
			$salida = "Operacion ejecutada con Exito";
		
			$salida = TRUE;
			//$this->Desconexion ();
		}
		return $salida;
	}
	
	/**
	 * 
	 * Ejecuta una vista de PostgreSQL que devuelve los campos necesarios para mostrar por pantalla
	 * @PARAM $VW -> Inidica la vista a invocar
	 * @PARAM $CampoID -> Indica el campo por el que se quiere filtrar
	 * @PARAM $ID -> Indica el valor por el que se esta filtrando
	 * @RETURN $resultado -> Recordset de todo lo que coincide con la condicion anterior
	 *
	 **/
	public function EjecutarQuery($vista) {
		//echo ("$vista");
		$resultado = $this->GetDB ()->Execute ( $vista );
		if ($resultado == false) {
			die ( "ERROR: Fallo de Ejecucion" . $this->GetDB ()->ErrorMsg () );
		}
		return $resultado;
		//$this->Desconexion ();
	}
	/**
	 * 
	 * Ejecuta una vista de PostgreSQL que devuelve los campos necesarios para mostrar por pantalla
	 * @PARAM $VW -> Inidica la vista a invocar
	 * @PARAM $CampoID -> Indica el campo por el que se quiere filtrar
	 * @PARAM $ID -> Indica el valor por el que se esta filtrando
	 * @RETURN $resultado -> Recordset de todo lo que coincide con la condicion anterior
	 *
	 **/
	public function EjecutarVista($vista) {
		//echo "SELECT * FROM " .$this->GetEsquema().'.'.$vista . ";";
		$resultado = $this->GetDB ()->Execute ( "SELECT * FROM " .$this->GetEsquema().'.'.$vista . ";" );
		//echo "SELECT * FROM " .$this->GetEsquema().'.'.$vista . ";";
		
		if ($resultado == false) {
			//die("SELECT * FROM $vista malo");
			die ( "ERROR: Fallo de Ejecucion" . $this->GetDB ()->ErrorMsg () );
		}
		return $resultado;
		//$this->Desconexion ();
	}	
	public function EjecutarVistaXCampos($vista, $campos) {
		//echo "<script>alert(esta es la vista buena 22 :  SELECT $campos FROM ".$vista.")</script>";

		$resultado = $this->GetDB ()->Execute ( "SELECT $campos FROM " .$this->GetEsquema().'.'.$vista . ";" );
		if ($resultado == false) {
			//echo "<script>alert(esta es la vista mala 22:  SELECT * FROM ".$vista.")</script>";
			die ( "ERROR: Fallo de Ejecucion" . $this->GetDB ()->ErrorMsg ());
		}
		
		//$this->Desconexion ();
		return $resultado;
	
	}
	
	public function ListarVW($vista, $valor, $campo) {
		$db = $this->Conexion ();
		$resultado = $db->Execute ( "SELECT * FROM " .$this->GetEsquema().'.'.$vista );
		if ($resultado->EOF) {
			echo "<option value='00'>No hay registros en el sistema</option>";
		} else {
			while ( ! $resultado->EOF ) {
				echo "<option value='" . $resultado->fields [$valor] . "'>" . $resultado->fields [$campo] . "</option>";
				$resultado->MoveNext ();
			}
		}
		//$this->Desconexion ();
	}
	
	/*public function ListarVWCamposVarios($vista, $campos, $valor, $descripcion) {
		$db = $this->Conexion ();
		//echo "SELECT $campos FROM ".$vista;die;
		$resultado = $db->Execute ( "SELECT $campos FROM " .$this->GetEsquema().'.'.$vista );
		if ($resultado->EOF) {
			echo "<option value='00'>No hay registros en el sistema</option>";
		} else {
			while ( ! $resultado->EOF ) {
				echo "<option value='" . $resultado->fields [$valor] . "'>" . $resultado->fields [$descripcion] . "</option>";
				$resultado->MoveNext ();
			}
		}
		//$this->Desconexion ();
	}*/
	public function ListarVWCamposVarios($vista, $campos, $valor, $descripcion,$valorSelected) {
               $db = $this->Conexion ();
              // $selec=0;
               //echo "SELECT $campos FROM ".$vista;
               $resultado = $db->Execute ( "SELECT $campos FROM " .$this->GetEsquema().'.'.$vista );
               if ($resultado->EOF) {
                       echo "<option value='00'>No hay registros en el sistema</option>";
               } else {
                       if($valorSelected=='')
                       {
                               echo "<option value='' selected=selected> Seleccione</option>";
                               
                       }
                    
                       while ( ! $resultado->EOF ) {
                           
                                $selected='';
                                if ($valorSelected == $resultado->fields [$valor] )
                                    $selected='selected';
                                
                               echo "<option ".$selected." value='" . $resultado->fields [$valor] . "'>" . $resultado->fields [$descripcion] . "</option>";
                               $resultado->MoveNext ();
                       }
               }
               //$this->Desconexion ();
       }
 
	
	
	public function ListarVWVarios($vista, $valor, $campo1, $campo2) {
		$db = $this->Conexion ();
		
		//echo "SELECT * FROM $vista"; die;
		$resultado = $db->Execute ( "SELECT * FROM " .$this->GetEsquema().'.'.$vista );
		if ($resultado->EOF) {
			echo "<option value='00'>No hay registros en el sistema</option>";
		} else {
			while ( ! $resultado->EOF ) {
				echo "<option value='" . $resultado->fields [$valor] . "'>" . $resultado->fields [$campo1] . " : " . $resultado->fields [$campo2] . "</option>";
				$resultado->MoveNext ();
			}
		}
		//$this->Desconexion ();
	}
	
	/* ESTA FUNCION LISTA POR CAMPOS ESPECIFICOS DE UNA VISTA DE BASE DE DATOS, ADEMAS MUESTRA UNA UNICA DESCRIPCION
	** Y EVALUA SI UNA OPCION DEL COMBO BOX FUE SELECCIONADA PARA MOSTRAR EL VALOR QUE EL USUARIO ESCOJIO
	** POR EJEMPLO, ESTA FUNCION ES UTILIZADA EN LA CONSULTA DE MOVIMIENTO DE MEDIDORES
	*/

	/*public function ListarVWxCampos($vista, $campos, $valor, $descripcion, $comboAEvaluar) {
		$db = $this->Conexion ();
		//echo "SELECT $campos FROM ".$this->GetEsquema().'.'."$vista";
		$selec=0;
		$resultado = $db->Execute ( "SELECT $campos FROM " . $vista );
		if ($resultado->EOF) {
			echo "<option value='00'>No hay registros en el sistema</option>";
		} else {
			while ( ! $resultado->EOF ) {
				
				if($selec==0)
				{
				echo "<option value='' selected=selected> Seleccione</option>";	
				$selec=1;
				}
				if ($comboAEvaluar == $resultado->fields [$valor]) {
					echo "<option value='" . $resultado->fields [$valor] . "' selected>" . $resultado->fields [$descripcion] . "</option>";
				} else {
					echo "<option value='" . $resultado->fields [$valor] . "'>" . $resultado->fields [$descripcion] . "</option>";
				}
				$resultado->MoveNext ();
			}
		}
		$this->Desconexion ();
	}
*/
	

	public function ListarVWxCampos($vista, $campos, $valor, $descripcion, $comboAEvaluar) {
		$db = $this->Conexion ();
		//echo "SELECT $campos FROM ".$this->GetEsquema().'.'."$vista";
		$selec=0;
		$resultado = $db->Execute ( "SELECT $campos FROM " . $vista );
		if ($resultado->EOF) {
			echo "<option value='00'>No hay registros en el sistema</option>";
		} else {
			while ( ! $resultado->EOF ) {
				
				if($selec==0)
				{
				echo "<option value='' selected=selected> Seleccione</option>";	
				$selec=1;
				}
				if ($comboAEvaluar == $resultado->fields [$valor]) {
					echo "<option value='" . $resultado->fields [$valor] . "' selected>" . $resultado->fields [$descripcion] . "</option>";
				} else {
					echo "<option value='" . $resultado->fields [$valor] . "'>" . $resultado->fields [$descripcion] . "</option>";
				}
				$resultado->MoveNext ();
			}
		}
		$this->Desconexion ();
	}
	
	
	
	public function ListarVWxId($vista, $campos, $valor, $descripcion, $comoAEvaluar) {
		$db = $this->Conexion ();
		
		$resultado = $db->Execute ( "SELECT $campos FROM ".$this->GetEsquema().'.'."$vista" );
		//		echo "SELECT $campos FROM $vista"; die;
		if ($resultado->EOF) {
			echo "<option value='00'>No hay registros en el sistema</option>";
		} else {
			while ( ! $resultado->EOF ) {
				if ($comoAEvaluar == $resultado->fields [$valor]) {
					echo "<option value='" . $resultado->fields [$valor] . "' selected='Selected'>" . $resultado->fields [$descripcion] . "</option>";
					$idValor = $resultado->fields [$valor];
				} else {
					echo "<option value='" . $resultado->fields [$valor] . "'>" . $resultado->fields [$descripcion] . "</option>";
				}
				$resultado->MoveNext ();
			}
		}
		//$this->Desconexion ();
		return $idValor;
	}
	
	public function ListarVWSelectedMultiples($listado, $valor, $campo, $selecciones) {
		$db = $this->Conexion ();
		$aux = "";
		$i = 1;
		$resultado = $db->Execute ( "SELECT * FROM " .$this->GetEsquema().'.'.$listado );
		$row = $selecciones->RecordCount ();
		
		if ($resultado->EOF) {
			echo "<option value='0'>No hay registros en el sistema</option>";
		
		} else {
			
			while ( ! $resultado->EOF ) {
				$aux = "<option value='" . $resultado->fields [$valor] . "' ";
				$j = 0;
				while ( $j < $row ) {
					if ($resultado->fields [$valor] == $selecciones->fields [$j]) {
						$aux .= " selected='selected'";
						$selecciones->MoveNext ();
					}
					$j ++;
				}
				$aux .= ">" . $resultado->fields [$campo] . "</option>";
				echo $aux;
				
				$resultado->MoveNext ();
			}
		}
		//$this->Desconexion ();
	}
	

}
?>
