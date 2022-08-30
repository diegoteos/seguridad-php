<?php
//$ip = $_SERVER['REMOTE_ADDR'];
$ips = '190.80.203.199';
//$ips = '185.107.56.80';
//$ips = '45.229.43.235';
//$ips = '156.146.54.85';
//echo $ip;
$dato = json_decode(file_get_contents("http://ip-api.com/json/" . $ips), true);
//var_dump($dato);

echo '<br>' . 'la IP es: ' . $ips;
echo '<br>' . 'El pais es: ' .$pais = $dato['country'];
echo '<br>' . 'La region aproximada es: ' . $region = $dato["regionName"];
echo '<br>' . 'La ciudad estimada: ' .$ciudad = $dato["city"];
echo '<br>' . 'El Proveedor de servicio es: ' .$ISP = $dato ["isp"];
echo '<br>' . 'Codigo del proveedor de servicio: ' .$as = $dato ["as"];
echo '<br>' . 'Organizacion: ' .$org = $dato ["org"];

