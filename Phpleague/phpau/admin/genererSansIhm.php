<?php 
require "../../Phpleague/phpau/config2.php";
require '../../Phpleague/phpau/admin/fonctions.php';
include("../../Phpleague/phpau/lang/lang_fr.php");
ouverture();

if ($champRecup == 100171)
	$tableau =$tableauARA1;	
elseif ($champRecup == 100181)
	$tableau = $tableauARA2;	
elseif ($champRecup == 100191)
	$tableau = $tableauARA3;	
elseif ($champRecup == 100271)
	$tableau = $tableauRES_ARA1;		
elseif ($champRecup == 109181)
	$tableau = $tableauRES_ARA2;	


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
								FROM phpau_equipes 
								WHERE id_champ='$champ'");

	while ($row1=mysqli_fetch_array($result1))
	{ 
	$query="DELETE FROM phpau_clmnt_graph 
		WHERE phpau_clmnt_graph.id_equipe='$row1[0]'" ;
        mysqli_query($idconnect, $query) or die (mysqli_error($idconnect));
	}
$debut=0;
$fin=1;
	 
  $result = $idconnect->query("
			SELECT accession, barrage, relegation 
			FROM phpau_parametres 
			WHERE id_champ='$champ'");
								
			while ($row=mysqli_fetch_array($result))
				{
				$accession = $row['accession'];
				$barrage = $row['barrage'] + $accession;
				//$relegation = nb_equipes($champ, $idconnect)- $row['relegation'];
				}
	
  $result=$idconnect->query("SELECT max(phpau_journees.numero) 
							 FROM phpau_journees, phpau_matchs 
							 WHERE phpau_journees.id=phpau_matchs.id_journee AND buts_dom is not NULL and phpau_journees.id_champ='$champ'");

$row=mysqli_fetch_array($result);
$max=$row[0];

while ($fin<=$max)
{                 
 @db_clmnt($champ, $debut, $fin, 0, $idconnect);
  
  $result = $idconnect->query("
			SELECT * 
			FROM phpau_clmnt 
			ORDER BY POINTS
			DESC, DIFF DESC, BUTSPOUR 
			DESC, BUTSCONTRE 
			ASC, NOM");
$pl=1;

      while ($row=mysqli_fetch_array($result))
		{   
         $x=0;
         $id_equipe=$row["ID_EQUIPE"];

         $query="INSERT INTO phpau_clmnt_graph (id_equipe, fin, classement) 
				 VALUES ('$id_equipe','$fin', '$pl')" ;
         mysqli_query($idconnect, $query);
         $pl++;                    
		}
 $fin++;
}     
 
  $result = $idconnect->query("
			SELECT phpau_clmnt_graph.id_equipe 
			FROM phpau_clmnt_graph, phpau_equipes 
			WHERE phpau_equipes.id=phpau_clmnt_graph.id_equipe
            AND phpau_equipes.id_champ=$champ");

			$nb_saving=mysqli_num_rows($result);
 
  $result=$idconnect->query("
		SELECT * 
		FROM phpau_equipes 
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