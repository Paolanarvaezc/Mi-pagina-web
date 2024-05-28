<?php 
require_once("");
session_start();
session_destroy();
header("Location:".Conectar::ruta()."index.php");
exit();
?>