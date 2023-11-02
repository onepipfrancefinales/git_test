<?php
try
{
	 $bdd = new PDO('mysql:host=sql.franceserv.fr;dbname=onepip-france-db2;charset=utf8', 'onepip-france', 'lavelan09');
}
catch (Exception $e)
{
        die('Erreur : ' . $e->getMessage());
}
?>

