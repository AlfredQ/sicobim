<?php
function validarFrmRegistrarCEI( $intNroCentro,	
								 $stsNombreCentro,
								 $stsCdDeaCentro)
{
	include_once "../../../assets/funciones/funciones.php";
	
	if ( $intNroCentro == "" )
	{	
		$stsMensaje = "<li>Número del Centro Obligatorio</li>";
		
	}
	else
	{
		if ( numerico($intNroCentro)==FALSE)
		{
			if ( $stsMensaje == "" )
				{
					$stsMensaje = "<li>Nombre del Centro solo numérico</li>";
				}
			else
				{
					$stsMensaje = $stsMensaje . "<li>Nombre del Centro solo numérico</li>";
				}
			
		}
	}
	if ( $stsNombreCentro == "" )
	{	
		
		if ( $stsMensaje == "" )
			{
				$stsMensaje = "<li>Nombre del Centro Obligatorio</li>";
			}
		else
			{
				$stsMensaje = $stsMensaje . "<li>Nombre del Centro Obligatorio</li>";
			}	
	}
	if ( $stsCdDeaCentro == "" )
	{	
		if ( $stsMensaje == "" )
			{
				$stsMensaje = "<li>Código DEA Obligatorio</li>";
			}
		else
			{
				$stsMensaje = $stsMensaje . "<li>Código DEA Obligatorio</li>";
			}
	}
	else
	{
		if ( strlen($stsCdDeaCentro) < 10 )
		{	
			if ( $stsMensaje == "" )
				{
					$stsMensaje = "<li>Código DEA debe ser de 10 Caracteres</li>";
				}
			else
				{
					$stsMensaje = $stsMensaje . "<li>Código DEA debe ser de 10 Caracteres</li>";
				}
		}
		else
		{
			$msj=alfanumerico($stsCdDeaCentro);
			if ( $msj!= "" )
			{	
				if ( $stsMensaje == "" )
					{
						$stsMensaje = "<li>El Código DEA $msj</li>";
					}
				else
					{
						$stsMensaje = $stsMensaje . "<li>El Código DEA  $msj</li>";
					}
			}
		}
		
		
	}


	/*if ( $intCdAreaTelefonoLocalCentro != 0 )
	{	
		if ( $stsTelefonoLocalCentro == "" )
		{
			if ( $stsMensaje == "" )
				{
					$stsMensaje = "<li>Teléfono Local Obligatorio</li>";
				}
			else
				{
					$stsMensaje = $stsMensaje . "<li>Teléfono Local Obligatorio</li>";
				}
		}
	}
	if ( $stsTelefonoLocalCentro != "" )
	{                                 
		if ( $intCdAreaTelefonoLocalCentro == 0 )
		{	
			if ( $stsMensaje == "" )
				{
					$stsMensaje = "<li>Código de Área del Teléfono Local Obligatorio</li>";
				}
			else
				{
					$stsMensaje = $stsMensaje . "<li>Código de Área del Teléfono Local Obligatorio</li>";
				}
		}

		if ( !is_numeric($stsTelefonoLocalCentro) )
		{	
			if ( $stsMensaje == "" )
				{
					$stsMensaje = "<li>Teléfono Local Debe ser Numérico</li>";
				}
			else
				{
					$stsMensaje = $stsMensaje . "<li>Teléfono Local Debe ser Numérico</li>";
				}
		}
		if ( strlen($stsTelefonoLocalCentro) < 7 )
		{	
			if ( $stsMensaje == "" )
				{
					$stsMensaje = "<li>Teléfono Local Debe ser 7 Dígitos</li>";
				}
			else
				{
					$stsMensaje = $stsMensaje . "<li>Teléfono Local Debe ser 7 Dígitos</li>";
				}
		}
	}
	if ( $intCdAreaTelefonoCelularCentro != 0 )
	{	
		if ( $intTelefonoCelularCentro == "" )
		{
			if ( $stsMensaje == "" )
				{
					$stsMensaje = "<li>Teléfono Celular Obligatorio</li>";
				}
			else
				{
					$stsMensaje = $stsMensaje . "<li>Teléfono Celular Obligatorio</li>";
				}
		}
	}
	if ( $intTelefonoCelularCentro != "" )
	{	
		if ( $intCdAreaTelefonoCelularCentro == 0 )
		{	
			if ( $stsMensaje == "" )
				{
					$stsMensaje = "<li>Código de Área del Teléfono Celular Obligatorio</li>";
				}
			else
				{
					$stsMensaje = $stsMensaje . "<li>Código de Área del Teléfono Celular Obligatorio</li>";
				}
		}
		if ( !is_numeric($intTelefonoCelularCentro) )
		{	
			if ( $stsMensaje == "" )
				{
					$stsMensaje = "<li>Teléfono Celular Debe ser Numérico</li>";
				}
			else
				{
					$stsMensaje = $stsMensaje . "<li>Teléfono Celular Debe ser Numérico</li>";
				}
		}
		if ( strlen($intTelefonoCelularCentro) < 7  )
		{	
			if ( $stsMensaje == "" )
				{
					$stsMensaje = "<li>Teléfono Celular Debe ser 7 Dígitos</li>";
				}
			else
				{
					$stsMensaje = $stsMensaje . "<li>Teléfono Celular Debe ser 7 Dígitos</li>";
				}
		}
	}
	if ( $stsCorreoElectronicoCentro != "" )
	{	
		
		if ( !(check_email_address( $stsCorreoElectronicoCentro ) ) ) 
		{
			if ( $stsMensaje == "" )
				{
					$stsMensaje = "<li>Correo Electrónico No Válido</li>";
				}
			else
				{
					$stsMensaje = $stsMensaje . "<li>Correo Electrónico No Válido</li>";
				}
		}
	}
	if ( $intDistritoEscolar == 0 )
	{	
		if ( $stsMensaje == "" )
			{
				$stsMensaje = "<li>Distrito Escolar Obligatorio</li>";
			}
		else
			{
				$stsMensaje = $stsMensaje . "<li>Distrito Escolar Obligatorio</li>";
			}
	}
	if ( $intTipoInmuebleCentro == 0 )
	{	
		if ( $stsMensaje == "" )
			{
				$stsMensaje = "<li>Tipo de Inmueble Obligatorio</li>";
			}
		else
			{
				$stsMensaje = $stsMensaje . "<li>Tipo de Inmueble Obligatorio</li>";
			}
	}
	if ( $intTurnoCentro == 0 )
	{	
		if ( $stsMensaje == "" )
			{
				$stsMensaje = "<li>Turno Obligatorio</li>";
			}
		else
			{
				$stsMensaje = $stsMensaje . "<li>Turno Obligatorio</li>";
			}
	}
	
	if ( $intTenenciaLocalCentro == 0 )
	{	
		if ( $stsMensaje == "" )
			{
				$stsMensaje = "<li>Tenencia Local Obligatoria</li>";
			}
		else
			{
				$stsMensaje = $stsMensaje . "<li>Tenencia Local Obligatoria</li>";
			}
	}
	if ( empty($inTipoAtencionCentro) )
	{	
		if ( $stsMensaje == "" )
			{
				$stsMensaje = "<li>Tipo de Atención Obligatoria</li>";
			}
		else
			{
				$stsMensaje = $stsMensaje . "<li>Tipo de Atención Obligatoria</li>";
			}
	}
	if ( $inInscritoSSO == "" )
	{	
		if ( $stsMensaje == "" )
			{
				$stsMensaje = "<li>Inscrito en el SSO Obligatorio</li>";
			}
		else
			{
				$stsMensaje = $stsMensaje . "<li>Seleccione una Opción entre 'Av.,Calle o Vereda'</li>";
			}
	}
	if ( $inAvenidaCentro == "" )
	{	
		if ( $stsMensaje == "" )
			{
				$stsMensaje = "<li>Seleccione una Opción entre 'Av.,Calle o Vereda'</li>";
			}
		else
			{
				$stsMensaje = $stsMensaje . "<li>Seleccione una Opción entre 'Av.,Calle o Vereda'</li>";
			}
	}
	if ( $stsAvenidaCentro == "" )
	{	
		if ( $stsMensaje == "" )
			{
				$stsMensaje = "<li>Descripción de 'Av.,Calle o Vereda' Obliglatoria</li>";
			}
		else
			{
				$stsMensaje = $stsMensaje . "<li>Descripción de 'Av.,Calle o Vereda' Obliglatoria</li>";
			}
	}
	if ( $inZonaCentro == "" )
	{	
		if ( $stsMensaje == "" )
			{
				$stsMensaje = "<li>Seleccione una Opción entre 'Zona, Sector o Urbanización'</li>";
			}
		else
			{
				$stsMensaje = $stsMensaje . "<li>Seleccione una Opción entre 'Zona, Sector o Urbanización'</li>";
			}
	}
	if ( $stsZonaCentro == "" )
	{	
		if ( $stsMensaje == "" )
			{
				$stsMensaje = "<li>Descripción de 'Zona, Sector o Urbanización' Obliglatoria</li>";
			}
		else
			{
				$stsMensaje = $stsMensaje . "<li>Descripción de 'Zona, Sector o Urbanización' Obliglatoria</li>";
			}
	}
	if ( $inEdificioCentro == "" )
	{	
		if ( $stsMensaje == "" )
			{
				$stsMensaje = "<li>Seleccione una Opción entre 'Edif., Casa o Quinta'</li>";
			}
		else
			{
				$stsMensaje = $stsMensaje . "<li>Seleccione una Opción entre 'Edif., Casa o Quinta'</li>";
			}
	}
	
	if ( $stsEdificioCentro == "" )
	{	
		if ( $stsMensaje == "" )
			{
				$stsMensaje = "<li>Descripción de 'Edif., Casa o Quinta' Obliglatoria</li>";
			}
		else
			{
				$stsMensaje = $stsMensaje . "<li>Descripción de 'Edif., Casa o Quinta' Obliglatoria</li>";
			}
	}
	if ( $inNroEdificioCentro == "" )
	{	
		if ( $stsMensaje == "" )
			{
				$stsMensaje = "<li>Seleccione una Opción entre 'N° Apto., N° Casa o N° Quinta'</li>";
			}
		else
			{
				$stsMensaje = $stsMensaje . "<li>Seleccione una Opción entre'N° Apto., N° Casa o N° Quinta'</li>";
			}
	}
	if ( $intNroEdificioCentro == "" )
	{	
		if ( $stsMensaje == "" )
			{
				$stsMensaje = "<li>Descripción de 'N° Apto., N° Casa o N° Quinta' Obliglatoria</li>";
			}
		else
			{
				$stsMensaje = $stsMensaje . "<li>Descripción de 'N° Apto., N° Casa o N° Quinta' Obliglatoria</li>";
			}
	}
	if ( $intParroquiaCentro == 0 )
	{	
		if ( $stsMensaje == "" )
			{
				$stsMensaje = "<li>Parrqoquia Obligatoria</li>";
			}
		else
			{
				$stsMensaje = $stsMensaje . "<li>Parrqoquia Obligatoria</li>";
			}
	}*/
	if ($stsMensaje=="")
	{
		return 1;
	}
	else
	{
	    return $stsMensaje;
	}	
}

function validarFrmConsultarCEI( $intNroCentro,	
								 $stsCdDeaCentro)
{

	include_once "../../../assets/funciones/funciones.php";
	
	if ( $intNroCentro != "" )
	{	

		if ( numerico($intNroCentro)==FALSE)
		{
			if ( $stsMensaje == "" )
				{
					$stsMensaje = "<li>Nro. del Centro solo numérico</li>";
				}
			else
				{
					$stsMensaje = $stsMensaje . "<li>Nro. del Centro solo numérico</li>";
				}
			
		}
	}
	if ( $stsCdDeaCentro != "" )
	{	
		if ( strlen($stsCdDeaCentro) < 10 )
		{	
			if ( $stsMensaje == "" )
				{
					$stsMensaje = "<li>Código DEA debe ser de 10 Caracteres</li>";
				}
			else
				{
					$stsMensaje = $stsMensaje . "<li>Código DEA debe ser de 10 Caracteres</li>";
				}
		}
		else
		{
			$msj=alfanumerico($stsCdDeaCentro);
			if ( $msj!= "" )
			{	
				if ( $stsMensaje == "" )
					{
						$stsMensaje = "<li>El Código DEA $msj</li>";
					}
				else
					{
						$stsMensaje = $stsMensaje . "<li>El Código DEA  $msj</li>";
					}
			}
		}
	}
	if ($stsMensaje=="")
	{
		return 1;
	}
	else
	{
		return $stsMensaje;	
	}
}
function validarFrmRegistrarSede( $stsNombreSede)
{

	if ( $stsNombreSede == "" )
	{	
		$stsMensaje = $stsMensaje . "<li>Nombre de la Sede Obligatorio</li>";	
	}
	if ($stsMensaje=="")
	{
		return 1;
	}
	else
	{
		return $stsMensaje;	
	}
}
?>