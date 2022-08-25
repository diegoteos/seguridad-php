<?php

echo '<br>' . hash_file('md5', 'pago.php');
echo '<br>' . hash_file('sha256', 'pago.php');
echo '<br>' . hash_file('sha512', 'pago.php');
echo  '<br><br>';
//echo '<br>' . hash_file('md5', 'F:\MATERIAL.PROYECTO\EVIDENCIAS\Disk.Partition.Raw.Image');
echo '<br> Obtener el valor hash de una imagen iso detallando unicamente el tipo de hash, su ruta y nombre: <br>' . hash_file('md5', 'E:\Users\Diego\Desktop\UMG\forense\proyectofinal\EmailHeaders.docx');