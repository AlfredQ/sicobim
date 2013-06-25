<?php
function validarFrmUsuario($stsUsuario,$stsClave,$stsCaptcha)
{
	if (trim($stsUsuario)=="")
	$stsMensaje="<li>Usuario Obligatorio</li>";
		
	if (trim($stsClave)=="")
	{	
		if ($stsMensaje=="")
			{
				$stsMensaje="<li>Clave Obligatoria</li>";
			}
		else
			{
				$stsMensaje= $stsMensaje . "<li>Clave Obligatoria</li>";
			}
	}
	if (trim($stsCaptcha)=="")
	{	
		if ($stsMensaje=="")
			{
				$stsMensaje="<li>Caracteres Obligatorios</li>";
			}
		else
			{
				$stsMensaje= $stsMensaje . "<li>Caracteres Obligatorios</li>";
			}
	}
	else
	{
		require_once("../../../assets/captcha/securimage.php");
  		
  		$objCaptcha = new Securimage();
 		$bolResultado = $objCaptcha->check($stsCaptcha);
 		if($bolResultado == "")
  		{
	  		if ($stsMensaje=="")
				{
					$stsMensaje="<li>Caracteres Incorrectos</li>";
				}
			else
				{
					$stsMensaje= $stsMensaje . "<li>Caracteres Incorrectos</li>";
				}	
  		}
	}	
	if ($stsMensaje=="")
	 	return 1;
	else
	    return "$$".$stsMensaje;	
}

?>
