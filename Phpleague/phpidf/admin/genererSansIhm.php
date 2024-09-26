<?php 
require "../../Phpleague/phpidf/config2.php";
require '../../Phpleague/phpidf/admin/fonctions.php';
include "../../Phpleague/phpidf/lang/lang_fr.php";
include "../../fichierConfig.php";

ouverture();

echo "<br />";
echo $champRecup;
echo "<br />";
echo "<hr />";
if (isset($champRecup)) $champRecup=$champRecup; else $champRecup=0;

if ($champRecup == 150171)
$tableau = $tableauGES;	
	//$tableau = array(150171, 150181, 150182, 150201, 150202,  150203);	
elseif ($champRecup == 150271)
	$tableau = array(150271);	
	
elseif ($champRecup == 170171)
$tableau = $tableauBFC;	
	///$tableau = array(170171, 170172, 170181, 170182, 170183, 170191, 170192, 170201, 170202, 170211, 170212);	
elseif ($champRecup == 170271)
	$tableau = array(170271, 170272, 179181, 179182, 179183);	
		
elseif ($champRecup == 180171)
//$tableau = $tableauNOR;	
	$tableau = array(180171, 180181, 180201, 180202, 180203);	
elseif ($champRecup == 180271)
	$tableau = array(180271, 189181);	


elseif ($champRecup == 220171)
$tableau = $tableauPCA;	
	//$tableau = array(220171, 220181, 220182, 220191, 220192);
elseif ($champRecup == 220271)
	$tableau = array(220271);






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
								FROM phpidf_equipes 
								WHERE id_champ='$champ'");

	while ($row1=mysqli_fetch_array($result1))
	{ 
	$query="DELETE FROM phpidf_clmnt_graph 
		WHERE phpidf_clmnt_graph.id_equipe='$row1[0]'" ;
        mysqli_query($idconnect, $query) or die (mysqli_error($idconnect));
	}
	$debut=0;
	$fin=1;
	 
  $result = $idconnect->query("
			SELECT accession, barrage, relegation 
			FROM phpidf_parametres 
			WHERE id_champ='$champ'");
								
			while ($row=mysqli_fetch_array($result))
				{
				$accession = $row['accession'];
				$barrage = $row['barrage'] + $accession;
				//$relegation = nb_equipes($champ, $idconnect)- $row['relegation'];
				}
	
	$result=$idconnect->query("SELECT max(phpidf_journees.numero) 
							 FROM phpidf_journees, phpidf_matchs 
							 WHERE phpidf_journees.id=phpidf_matchs.id_journee AND buts_dom is not NULL and phpidf_journees.id_champ='$champ'");

	$row=mysqli_fetch_array($result);
	$max=$row[0];

	while ($fin<=$max)
	{                 
	 @db_clmnt($champ, $debut, $fin, 0, $idconnect);
  
	 $result = $idconnect->query("
			SELECT * 
			FROM phpidf_clmnt 
			ORDER BY POINTS
			DESC, DIFF DESC, BUTSPOUR 
			DESC, BUTSCONTRE 
			ASC, NOM");
	 $pl=1;

      while ($row=mysqli_fetch_array($result))
		{   
         $x=0;
         $id_equipe=$row["ID_EQUIPE"];

         $query="INSERT INTO phpidf_clmnt_graph (id_equipe, fin, classement) 
				 VALUES ('$id_equipe','$fin', '$pl')" ;
         mysqli_query($idconnect, $query);
         $pl++;                    
		}
	 $fin++;
	}     
 
	$result = $idconnect->query("
			SELECT phpidf_clmnt_graph.id_equipe 
			FROM phpidf_clmnt_graph, phpidf_equipes 
			WHERE phpidf_equipes.id=phpidf_clmnt_graph.id_equipe
            AND phpidf_equipes.id_champ=$champ");

			$nb_saving=mysqli_num_rows($result);
 
	$result=$idconnect->query("
		SELECT * 
		FROM phpidf_equipes 
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