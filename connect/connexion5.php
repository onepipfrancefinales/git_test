<?php
//require "../saison.php";
/*
if ($localHost == true) {

        try {
                $bdd = new PDO('mysql:host=localhost;dbname=onepip-france_db6;charset=utf8', 'root', '');
        } catch (Exception $e) {
                die('Erreur : ' . $e->getMessage());
        }
} else {
*/
        try {
                $bdd = new PDO('mysql:host=sql.franceserv.fr;dbname=onepip-france_db5;charset=utf8', 'onepip-france', 'lavelan09');
        } catch (Exception $e) {
                die('Erreur : ' . $e->getMessage());
        }
        /*
}
*/
?>