


 
  

 <?php
mysql_connect("sql.franceserv.fr", "onepip-france", "lavelan09"); // Connexion à MySQL
mysql_select_db("onepip-france_db3"); // Sélection de la base onepip
?> 

	
   <?php      
// RESULTATS EXTERIEURS :
// victoires exterieur
$query="SELECT ext.id, count(ext.id), phptest_clubs.nom, sum(buts_ext), sum(buts_dom) FROM phptest_equipes as ext, phptest_clubs, phptest_matchs, phptest_journees, phptest_championnats
WHERE ext.id_champ='$champ'
      AND ext.id_club=phptest_clubs.id
      AND ext.id=phptest_matchs.id_equipe_ext
      AND buts_ext > buts_dom
      AND phptest_championnats.id=phptest_journees.id_champ
      AND phptest_journees.id=phptest_matchs.id_journee
      AND phptest_journees.numero>='$debut'
      AND phptest_journees.numero<='$fin'
      GROUP by phptest_clubs.nom ";

$dom = mysql_query($query) or die (mysql_error());;


     while($row= mysql_fetch_array($dom))
     {
     $clmnt[$row[2]]['GEXT']=$row[1];
      if (!isset($clmnt[$row[2]]['BUTSEXTPOUR'])) {$clmnt[$row[2]]['BUTSEXTPOUR']=$row[3];}
      else{$clmnt[$row[2]]['BUTSEXTPOUR']+=$row[3];}
      if (!isset($clmnt[$row[2]]['BUTSEXTCONTRE'])) {$clmnt[$row[2]]['BUTSEXTCONTRE']=$row[4];}
      else{$clmnt[$row[2]]['BUTSEXTCONTRE']+=$row[4];}

     }
?>
<?php
 
mysql_close(); // Déconnexion de MySQL
?>