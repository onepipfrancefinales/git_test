<?php
require ("../config.php");;
ouverture();
session_start();
//session_unregister("user");
//session_unregister("id_prono");
session_unset(); 
session_destroy(); 
$expire = 365*24*3600; 
setcookie("user","",time()-$expire,"/","");
setcookie("mot_de_passe","",time()-$expire,"/","");
include ("deconnexion.htm");
?>

<META HTTP-EQUIV="refresh"; CONTENT="0; URL=../prono/index.php">


