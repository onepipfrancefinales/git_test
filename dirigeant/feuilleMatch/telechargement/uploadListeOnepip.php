<?php

//$dossier = '/dirigeant/feuilleMatch/telechargement/joueurs/listeJoueursOnepip.csv';
//echo "dossier :".$dossier;

$cheminn=dirname(__FILE__)."/joueurs/listeJoueursOnepip.csv";
/*
echo "chemin : ".$cheminn;
echo "<br/>";
/*
$fichier=$_FILES['fichier']['name'];

$fichierChemin = $_FILES['fichier']['tmp_name'];
*/

//**********   Recherche du  caractËre de sÈparation  **********************
/*
$fichierA = fopen($fichierChemin, 'r+');
echo "fichier :".$fichierA;
//Recuperation de la 1re ligne du fichier
$fichierLigne = fgets($fichierA, 4096); 


//recherche des caractere mentionne dans la premiËre ligne
if (preg_match('#;#', $fichierLigne))
{
//echo "Caractere de separation reconnu (;) ";
$caratereSeparation =",";

} 
elseif (preg_match('#,#', $fichierLigne))
{
//echo "Caractere de separation reconnu (,) ";
$caratereSeparation =",";
}
else
echo "aucun caractere de separation reconnu";

*/



//************************************

echo "<br/>";
echo "<br/>";





//ici
/*
$taille_maxi = 100000;
$taille = filesize($_FILES['fichier']['tmp_name']);
$extensions = array('.doc', '.ods', '.csv', '.txt');
$extension = strrchr($_FILES['fichier']['name'], '.'); 
*/



//DÈbut des vÈrifications de sÈcuritÈ...

/*
if(!in_array($extension, $extensions)) //Si l'extension n'est pas dans le tableau
{
     $erreur = 'Vous devez uploader un fichier de type png, gif, jpg, jpeg, txt ou doc...';
}
if($taille>$taille_maxi)
{
     $erreur = 'Le fichier est trop gros...';
}
*/
/*
if(!isset($erreur)) //S'il n'y a pas d'erreur, on upload
{
     //On formate le nom du fichier ici...
     $fichier = strtr($fichier, 
          '¿¡¬√ƒ≈«»… ÀÃÕŒœ“”‘’÷Ÿ⁄€‹›‡·‚„‰ÂÁËÈÍÎÏÌÓÔÚÛÙıˆ˘˙˚¸˝ˇ', 
          'AAAAAACEEEEIIIIOOOOOUUUUYaaaaaaceeeeiiiioooooouuuuyy');
     $fichier = preg_replace('/([^.a-z0-9]+)/i', '-', $fichier);
   
	if(is_dir('joueurs/')) 
	{
   // echo 'Le dossier existe';
	} 
	else
	{
   // echo 'Le dossier n\'existe pas';
	}
	echo "<br/>";

	
	 if(move_uploaded_file($_FILES['fichier']['tmp_name'], $cheminn.$fichier)) //Si la fonction renvoie TRUE, c'est que Áa a fonctionnÈ...
     {
          echo 'Transfert des licences effectu&eacute; avec succ&egrave;s !';echo "<br/>";
     }
     else //Sinon (la fonction renvoie FALSE).
     {
          echo 'Echec de l\'upload !';echo "<br/>";
     }

}
else
{
     echo $erreur;
}
*/


//constantes

$naissance = 2019;
$prem_ligne =" ";
$comite= 1;

$id_perso = 1;

echo "fonction :".$fonction;
if ($fonction == 1 )
	{
	$id = ($club*1000) + $id_perso;
	$type = "JOU";
	}
else
	{
	$id = ($club*1000) + 500 + $id_perso;
	$type = "DIR";
	}


// ****** Connection ‡ la base ******
 
if ($connect == "connection2")
require '../../../connect/connection2.php';
else
require '../../../connect/connection3.php';



//  ****  Vidage de la table  *****

$table = "php".$ligueComite."_joueurs";
if ($fonction == 1 )
	{
	$query="DELETE FROM $table
		WHERE id_perso BETWEEN 1 AND 500 and club='$club' and fonction ='1'";
	$result= MYSQL_QUERY($query); 
	}
else
	{
	$query="DELETE FROM $table
		WHERE fonction='$fonction' and comite ='1' and club='$club'";
	$result= MYSQL_QUERY($query); 
	}





// ***** Traitement du fichier *******;



	$fp = fopen("$cheminn", "r"); 
	
	$nbreDeLigne = count(file("$cheminn"));
	echo "Nombre de licence intÈgrÈ : ".$nbreDeLigne;
	echo "<br/>";
	echo "<br/>";
   $caratereSeparation =",";
   while (!feof($fp)) 
    { 
	 $cpte = 0;
	 $ligne = fgets($fp,4096); 
	
     $liste = explode( $caratereSeparation,$ligne);  
    
      
	 if (isset($liste[0]))   $nom = $liste[0]; 
	 if (isset($liste[1]))   $prenom = $liste[1]; 
	 if (isset($liste[2]))	 $licence = $liste[2]; 
	   
		 
     
	 if ($nbreDeLigne >= $id_perso)
	 
		{
			$query = "INSERT INTO $table VALUES('$nom','$nom','$prenom','$naissance', '$licence','$type','$prem_ligne','$comite','$club','$fonction','$id_perso','$id')"; 
			$result= MYSQL_QUERY($query); 
		}  
	 
	 $cpte = $cpte + 1;  
	 $id = $id + 1;
	 $id_perso = $id_perso + 1;
		
	
	
	} 
     
 
       
   
     fclose($fp); 
     MYSQL_CLOSE();  



?>
