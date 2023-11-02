<?php
try
{
	$bdd = new PDO('mysql:host=sql.franceserv.fr;dbname=onepip-france_db4;charset=utf8', 'onepip-france', 'lavelan09');
}
catch (Exception $e)
{
        die('Erreur : ' . $e->getMessage());
}
?>
