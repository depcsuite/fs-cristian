<?php
$expira = time() - 3600;
setcookie("usuario", " ", $expira);
echo time();
?>