<?php
$nid = $_GET['nid'];
echo $nid;
echo $nid;echo $nid;
?> 
  
 <?php
require ("connect.php") ;
 ?> 
 <?php
  //r�cup�ration des valeurs des champs:
$president = $_POST["president"];
$secretariat = $_POST["secretariat"];
$contact = $_POST["contact"];
$siege = $_POST["siege"];

  //r�cup�ration de l'identifiant de la personne:
  $nid         = $_POST["nid"] ;
 echo $nid;

 
  
 
  //cr�ation de la requ�te SQL:


  
  
  $sql = "UPDATE infosclub
            SET siege='$siege',
			    president='$president',
				secretaire='$secretaire',
				contact='$contact'
				
							
		           WHERE id = '$nid' " ;
 
 //ex�cution de la requ�te SQL:
 $requete = mysql_query ($sql);
 
  //affichage des r�sultats, pour savoir si la modification a march�e:
  if($requete)
  {
    echo("La modification � �t� correctement effectu�e") ;
	

  }
  else
  {
    echo("La modification � �chou�e") ;
  }
?>
<a href="modif1_quart.php">Retour mise � jour</a> </html>

<?php echo $nid;?>

<?php echo $president;?>
<?php echo $secretaire;?>
<?php echo $contact;?>