<?php

echo '<br>' . hash_file('md5', 'pago.php');
echo '<br>' . hash_file('sha256', 'pago.php');
echo '<br>' . hash_file('sha512', 'pago.php');
//echo '<br>' . hash_file('sha512', 'E:\Users\Diego\Desktop\Windows.iso');
echo '<br> Obtener el valor hash de la imagen iso es detallando su ruta: <br>' . hash_file('sha512', 'E:/Users/Diego/Desktop/Windows.iso');