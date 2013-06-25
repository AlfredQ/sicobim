<?php
session_start();
//echo "sesion".$_SESSION["stsLoginUsuario_sicobim"];
   if (!isset($_SESSION['stsLoginUsuario_sicobim']))
    {  
    	session_destroy();
		header("Location: http://localhost/sicobim/index.php");
		exit();
	}
	else
	{   
	    $stsUsuario=$_SESSION["stsLoginUsuario_sicobim"];
	    $fechaGuardada =$_SESSION["ultimoAcceso_sicobim"];
	    $ahora = date("Y-n-j H:i:s");
	    $ahora2 = date("H:i:s a");
	    //compara el tiempo transcurrido
	    $tiempo_transcurrido = (strtotime($ahora)-strtotime($fechaGuardada));
	    // $tiempo_transcurrido;
	    if($tiempo_transcurrido>1200) //30 min 1800seg  // 1200seg  20 min // 60seg  1 min //300seg 5 min
 	       { 
	       		session_destroy();
	         	header("Location: http://localhost/sicobim/index.php");
	        	exit();
	       }
	    else 
	       {
	         $_SESSION["ultimoAcceso_sicobim"] = $ahora;
	         $_SESSION["ultimoAccesoformato2"]= $ahora2;
	        // echo $ahora;
	       	}
	}  	           			
   if((isset($_GET['salir'])) && ($_GET['salir'] == 'cerrar')){
	    session_destroy();
	    header("Location: http://localhost/sicobim/index.php");
	} 
?>

