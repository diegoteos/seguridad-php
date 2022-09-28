<?php

include_once 'error-reporting.php';
$ip = $ip_add = $_SERVER['REMOTE_ADDR'];
date_default_timezone_set('America/Guatemala');
$fecha = date("d-m-Y H:i:s");

$user_agent = $_SERVER['HTTP_USER_AGENT'];


function getPlatform($user_agent) {
   $plataformas = array(
      'Windows 11' => 'Windows NT 10.5+',
      'Windows 10' => 'Windows NT 10.0+',
      'Windows 8.1' => 'Windows NT 6.3+',
      'Windows 8' => 'Windows NT 6.2+',
      'Windows 7' => 'Windows NT 6.1+',
      'Windows Vista' => 'Windows NT 6.0+',
      'Windows XP' => 'Windows NT 5.1+',
      'Windows 2003' => 'Windows NT 5.2+',
      'Windows' => 'Windows otros',
      'iPhone' => 'iPhone',
      'iPad' => 'iPad',
      'Mac OS X' => '(Mac OS X+)|(CFNetwork+)',
      'Mac otros' => 'Macintosh',
      'Android' => 'Android',
      'BlackBerry' => 'BlackBerry',
      'Linux' => 'Linux',
   );
   foreach($plataformas as $plataforma=>$pattern){
      if (preg_match('/(?i)'.$pattern.'/', $user_agent))
         return $plataforma;
   }
   return 'Otras';
}




$SO = getPlatform($user_agent);


function getBrowser($user_agent){

    if(strpos($user_agent, 'MSIE') !== FALSE)
       return 'Internet explorer';
     elseif(strpos($user_agent, 'Edge') !== FALSE) //Microsoft Edge
       return 'Microsoft Edge';
     elseif(strpos($user_agent, 'Trident') !== FALSE) //IE 11
        return 'Internet explorer';
     elseif(strpos($user_agent, 'Opera Mini') !== FALSE)
       return "Opera Mini";
     elseif(strpos($user_agent, 'Opera') || strpos($user_agent, 'OPR') !== FALSE)
       return "Opera";
     elseif(strpos($user_agent, 'Firefox') !== FALSE)
       return 'Mozilla Firefox';
     elseif(strpos($user_agent, 'Chrome') !== FALSE)
       return 'Google Chrome';
     elseif(strpos($user_agent, 'Safari') !== FALSE)
       return "Safari";
     else
       return 'No hemos podido detectar su navegador';
    
    
    }
    
    
    $nav = getBrowser($user_agent);




$para      = 'correo@hotmail.com';
$titulo    = 'Visita a la pagina principal';
$mensaje   = "Visita  desde la IP: $ip Hoy: $fecha del dispositivo con sistema operativo: $SO con navegador: $nav";
$cabeceras = 'From: sistema' . "\r\n" .
    'Reply-To: prueba@ejemplo.com' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

mail($para, $titulo, $mensaje, $cabeceras);

//header('Location: https://youtu.be/kBmIY7x_UyE?t=14946/');
?>
