
<?php
if (isset($_GET['page'])) $page = $_GET['page']; else $page ="Non renseigne";
if (isset($_POST['type'])) $type = $_POST['type']; else $type ="Non renseigne";
if (isset($_GET['division'])) $division = $_GET['division']; else $division ="Non renseigne";
if (isset($_GET['annee'])) $annee = $_GET['annee']; else $annee ="Non renseigne";

if (isset ($_POST['D64ME'])) $D64ME = $_POST['D64ME']; else $D64ME="-";
if (isset ($_POST['D32ME'])) $D32ME = $_POST['D32ME']; else $D32ME="-";
if (isset ($_POST['D16ME'])) $D16ME = $_POST['D16ME']; else $D16ME="-";
if (isset ($_POST['D8ME']))  $D8ME = $_POST['D8ME']; else $D8ME="-";
if (isset ($_POST['D4ME']))  $D4ME = $_POST['D4ME']; else $D4ME="-";
if (isset ($_POST['D2ME']))  $D2ME = $_POST['D2ME']; else $D2ME="-";
if (isset ($_POST['D1ME']))  $D1ME = $_POST['D1ME']; else $D1ME="-";
if (isset ($_POST['D0ME']))  $D0ME = $_POST['D0ME']; else $D0ME="-";

echo "annee : ".$annee;echo "<br>";
echo "division : ".$division;echo "<br>";
echo "page : ".$page;echo "<br>";

echo "64 : ".$D64ME ;echo "<br />";
echo "32 : ".$D32ME;echo "<br />";
echo "16 : ".$D16ME ;echo "<br />";
echo "8 : ".$D8ME;echo "<br />";
echo "4 : ".$D4ME ;echo "<br />";
echo "2 : ".$D2ME ;echo "<br />";
echo "1 : ".$D1ME;echo "<br />";
echo "0 : ".$D0ME;echo "<br />";

require '../../../connect/connexion1.php';
if ($page == "dates")
	{		
		
	 $requete=$bdd->exec("	UPDATE bdpffrance_date
            		SET   D64ME='$D64ME', D32ME='$D32ME', D16ME='$D16ME', D8ME='$D8ME',
							D4ME='$D4ME', D2ME='$D2ME', D1ME='$D1ME', D0ME='$D0ME'
					WHERE id = '$division' AND saison='$annee'"  )   ;
					  
	 if($requete)
		{
		echo "<br />";
		echo("La modification(".$division.") a été correctement effectuée");
		echo "<br />";
		}
	 else
		{
		echo "<br />";
		echo("La modification (".$division.") a échoué") ;
		echo "<br />";
		}
	}
			
?>
	
<p>&nbsp;</p>
<p><a href="../accueilMAJ.php?annee=2022">retour page accueil</a> </p>		
					
					