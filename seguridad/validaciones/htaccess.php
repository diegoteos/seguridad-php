<?php
echo 'Restringimos el acceso desde htacces a un archivo llamado .htacces';
echo '<br>';
echo 'es posible bloquear el acceso a cualquier archivo detallando el nombre del mismo';

echo '  
<Files .htaccess>
Order allow,deny
Deny from all
</Files>
';