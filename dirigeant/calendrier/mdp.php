
<div id="centre"> </div>
 
<?php
//Connexion � MySQL 
$bd=mysql_connect("sql.franceserv.fr", "onepip-france", "Lavelan1969&"); 
mysql_connect("sql.franceserv.fr", "onepip-france", "Lavelan1969&"); // Connexion � MySQL 
mysql_select_db("onepip-france-db1"); 
 // ------- 
 // ETAPE 1 : on v�rifie si l'IP se trouve d�j� dans la table 
// Pour faire �a, on n'a qu'� compter le nombre d'entr�es dont le champ "ip" est l'adresse ip du visiteur 
$retour = mysql_query('SELECT COUNT(*) AS nbre_entrees FROM connectes WHERE ip=\'' . $_SERVER['REMOTE_ADDR'] . '\''); 
$donnees = mysql_fetch_array($retour); 

if ($donnees['nbre_entrees'] == 0) // L'ip ne se trouve pas dans la table, on va l'ajouter 
{ 
 mysql_query('INSERT INTO connectes VALUES(\'' . $_SERVER['REMOTE_ADDR'] . '\', ' . time() . ')'); 
} 
else // L'ip se trouve d�j� dans la table, on met juste � jour le timestamp 
{ 
 mysql_query('UPDATE connectes SET timestamp=' . time() . ' WHERE ip=\'' 
. $_SERVER['REMOTE_ADDR'] . '\''); 
} 
// ------- 
// ETAPE 2 : on supprime toutes les entr�es dont le timestamp est plus vieux que 5 minutes 
// 
// On stocke dans une variable le timestamp qu'il �tait il y a 5 minutes : 
$timestamp_5min = time() - (60 * 5); // 60 * 5 = nombre de secondes �coul�es en 5 minutes //mysql_query('DELETE FROM connectes WHERE timestamp < ' . $timestamp_5min); 

// ------- 
// ETAPE 3 : 
//on compte le nombre d'ip stock�es dans la table. C'est le nombre de visiteurs connect�s 
$retour = mysql_query('SELECT COUNT(*) AS nbre_entrees FROM connectes'); 
$donnees = mysql_fetch_array($retour); 

// Ouf ! On n'a plus qu'� afficher le nombre de connect�s ! 
echo ' <p>Il y a ' . $donnees['nbre_entrees'] . ' connect�s</p>';

mysql_close ($bd);
mysql_close (mysql_connect("sql.franceserv.fr", "onepip-france", "Lavelan1969&"));
?>
<br>
<?php
// Puis on inclut le menu
include("sadmin.php");
?>
