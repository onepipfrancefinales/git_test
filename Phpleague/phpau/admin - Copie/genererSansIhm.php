<?php 
require "../../Phpleague/phpab/config2.php";
require '../../Phpleague/phpab/admin/fonctions.php';
include("../../Phpleague/phpab/lang/lang_fr.php");
ouverture();

if ($champRecup == 100171)
	$tableau = array(100171, 100172, 100173, 100174);
elseif ($champRecup == 100181)
	$tableau = array( 100181, 100182, 100183 , 100184, 100185, 100186);
elseif ($champRecup == 100191)
	$tableau = array(100191, 100192, 100193, 100194, 100195, 100196, 100197, 100198, 100199, 100200 );
elseif ($champRecup == 100271)
	$tableau = array(100271, 100272, 100273, 100274);	
elseif ($champRecup == 109181)
	$tableau = array(109181, 109182, 109183 , 109184, 109185, 109186);


//for ($champDiv = $champRecup ; $champDiv < 220 ; $champDiv=$champDiv+10)
foreach ($tableau as $champ)
{	
	//echo $champDiv;echo "<br />";
	//for ($champ =$champDiv; $champ <$champDiv+8; $champ++)
	//{	
	//echo $champ;echo "<br />";
 affich_champ ($champ, $idconnect); 

	include ("tps1.php3"); 
	 
	$result1=$idconnect->query("	SELECT id 
								FROM phpab_equipes 
								WHERE id_champ='$champ'");

	while ($row1=mysqli_fetch_array($result1))
	{ 
	$query="DELETE FROM phpab_clmnt_graph 
		WHERE phpab_clmnt_graph.id_equipe='$row1[0]'" ;
        mysqli_query($idconnect, $query) or die (mysqli_error($idconnect));
	}
$debut=0;
$fin=1;
	 
  $result = $idconnect->query("
			SELECT accession, barrage, relegation 
			FROM phpab_parametres 
			WHERE id_champ='$champ'");
								
			while ($row=mysqli_fetch_array($result))
				{
				$accession = $row['accession'];
				$barrage = $row['barrage'] + $accession;
				//$relegation = nb_equipes($champ, $idconnect)- $row['relegation'];
				}
	
  $result=$idconnect->query("SELECT max(phpab_journees.numero) 
							 FROM phpab_journees, phpab_matchs 
							 WHERE phpab_journees.id=phpab_matchs.id_journee AND buts_dom is not NULL and phpab_journees.id_champ='$champ'");

$row=mysqli_fetch_array($result);
$max=$row[0];

while ($fin<=$max)
{                 
 @db_clmnt($champ, $debut, $fin, 0, $idconnect);
  
  $result = $idconnect->query("
			SELECT * 
			FROM phpab_clmnt 
			ORDER BY POINTS
			DESC, DIFF DESC, BUTSPOUR 
			DESC, BUTSCONTRE 
			ASC, NOM");
$pl=1;

      while ($row=mysqli_fetch_array($result))
		{   
         $x=0;
         $id_equipe=$row["ID_EQUIPE"];

         $query="INSERT INTO phpab_clmnt_graph (id_equipe, fin, classement) 
				 VALUES ('$id_equipe','$fin', '$pl')" ;
         mysqli_query($idconnect, $query);
         $pl++;                    
		}
 $fin++;
}     
 
  $result = $idconnect->query("
			SELECT phpab_clmnt_graph.id_equipe 
			FROM phpab_clmnt_graph, phpab_equipes 
			WHERE phpab_equipes.id=phpab_clmnt_graph.id_equipe
            AND phpab_equipes.id_champ=$champ");

			$nb_saving=mysqli_num_rows($result);
 
  $result=$idconnect->query("
		SELECT * 
		FROM phpab_equipes 
		WHERE id_champ=$champ");

		$nb_equipes=mysqli_num_rows($result);            

	@db_clmnt($champ, $debut, $fin, 1, $idconnect);

if ($nb_saving=$max*$nb_equipes)
	{
	 echo "<br/>";
	 //echo "division : ".$champ. " - ";
	 echo ADMIN_GRAPH; include ("tps2.php3");
	}
 else
	{
	 echo "division : ".$champ. " - ";	
	 echo ADMIN_GRAPH_4;
	 echo "<br/>";
	}
	//}
}
?>
<!--
</td></tr></table>
-->