
<?php $saison = 171;?>
<?php
function afficherPourcentage ($nb1, $nb2)
{
    $resultat = $nb1/$nb2*100; 
    // "/" est l'opérateur de division en PHP
    // "*" est l'opérateur de multiplication en PHP
    echo $resultat."%";
}
afficherPourcentage (12, 24);
echo "<br />";
afficherPourcentage (7, 70);
?>
<?php
mysql_connect("sql.franceserv.fr", "onepip-france", "lavelan09"); // Connexion à MySQL
mysql_select_db("onepip-france-db3"); // Sélection de la base onepip

?>

<?php
$reponse = mysql_query("SELECT * FROM phptest_championnats WHERE id='171'"); // Requête SQL
 
// On fait une boucle pour lister tout ce que contient la table :
while ($donnees = mysql_fetch_array($reponse) )
{ 
?>
  <?php echo $donnees['id']; ?>
  <?php echo $donnees['id_division'];  ?>
  <?php echo $donnees['id_saison']; ?>
  <br/>
  <?php
 }
mysql_close(); // Déconnexion de MySQL
?>

<?php
mysql_connect("sql.franceserv.fr", "onepip-france", "lavelan09"); // Connexion à MySQL
mysql_select_db("onepip-france-db3"); // Sélection de la base onepip

?>

<?php
function test($id)
{
$requete="SELECT id_saison FROM phptest_championnats WHERE id='$id'";
$resultats = mysql_query($requete);

while ($row=mysql_fetch_array($resultats))
{
$saison=$row[1]+10;
echo "$row[0]";
}

echo "l id est egal à $saison";
echo "l id est egal à '$saison'";
echo "l id est egal à $saison";
}
?>

<?php
test(171);
echo "<br />";
test(181);
echo "<br />";
echo "<br />";
?>

<?php
function affich_champ ($champ)
{
    $requete="SELECT phptest_divisions.nom, phptest_saisons.annee 
              FROM phptest_championnats, phptest_divisions, phptest_saisons
              WHERE phptest_championnats.id_division=phptest_divisions.id 
              AND phptest_championnats.id_saison=phptest_saisons.id 
              AND phptest_championnats.id='$champ' ORDER by annee desc";
    $resultats=mysql_query($requete) or die (mysql_error());

    
    while ($row = mysql_fetch_array($resultats))
      {
        $saison=$row[1]+1;
        echo "$row[0] $row[1]/$saison";
      echo "$row[0] $row[1]/$saison";
	  echo "$row[0] $row[1]/$saison";echo "$row[0] $row[1]/$saison";
	  
	  }
}

?>
<?php
affich_champ (181)

?>

<?php

echo "<br />";
echo "<br />";
?>


<?php
function affich_champ2 ($champ)
{
    $resultats="SELECT id_saison, id_division 
              FROM phptest_championnats
              WHERE id='$champ' ";
    $resultats=mysql_query($resultats) or die (mysql_error());
   
    while ($row = mysql_fetch_array($resultats))
      {
       
        echo 'le code est'."$row[0]" ;
		echo "<br />";
		$resultat23=($row[0]+19);
		echo 'le code est'. "$resultat23";
		echo "<br />";
      }
echo "<br />";	  
echo 'le code est eeeeeeee'. "$resultat23";
echo "<br />";
echo "$champ";
echo "<br />";
$modif="UPDATE phptest_championnats
		SET id_saison='$resultat23'
		WHERE id='$champ' ";
		mysql_query ($modif);
		
$ajout="INSERT INTO phptest_championnats
		VALUES ('',12,'$resultat23')";
		mysql_query ($ajout);


echo "<br />";
echo "$champ";
echo "<br />";
}		
?>

<?php
affich_champ2 (171)
?>




