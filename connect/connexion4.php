<?php
require "../saison.php.php";

if ($localHost == true) {

        try {
                $bdd = new PDO('mysql:host=127.0.0.1;dbname=onepip-france-db4;charset=utf8', 'root', '');
        } catch (Exception $e) {
                die('Erreur : ' . $e->getMessage());
        }
} else {
try
{
	$bdd = new PDO('mysql:host=sql.franceserv.fr;dbname=onepip-france_db4;charset=utf8', 'onepip-france', 'lavelan09');
}
catch (Exception $e)
{
        die('Erreur : ' . $e->getMessage());
}
}
