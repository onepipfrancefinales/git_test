<?php 
require "../../Phpleague/phppr/config2.php";
require '../../Phpleague/phppr/admin/fonctions.php';
include("../../Phpleague/phppr/lang/lang_fr.php");
ouverture();

for ($champDiv = $champRecup ; $champDiv < 220 ; $champDiv=$champDiv+10)
{	
	//echo $champDiv;echo "<br />";
	for ($champ =$champDiv; $champ <$champDiv+8; $champ++)
	{	
	//echo $champ;echo "<br />";
 affich_champ ($champ, $idconnect); 

	include ("tps1.php3"); 
	 
	$result1=$idconnect->query("	SELECT id 
								FROM phppr_equipes 
								WHERE id_champ='$champ'");

	while ($row1=mysqli_fetch_array($result1))
	{ 
	$query="DELETE FROM phppr_clmnt_graph 
		WHERE phppr_clmnt_graph.id_equipe='$row1[0]'" ;
        mysqli_query($idconnect, $query) or die (mysqli_error($idconnect));
	}
$debut=0;
$fin=1;
	 
  $result = $idconnect->query("
			SELECT accession, barrage, relegation 
			FROM phppr_parametres 
			WHERE id_champ='$champ'");
								
			while ($row=mysqli_fetch_array($result))
				{
				$accession = $row['accession'];
				$barrage = $row['barrage'] + $accession;
				//$relegation = nb_equipes($champ, $idconnect)- $row['relegation'];
				}
	
  $result=$idconnect->query("SELECT max(phppr_journees.numero) 
							 FROM phppr_journees, phppr_matchs 
							 WHERE phppr_journees.id=phppr_matchs.id_journee AND buts_dom is not NULL and phppr_journees.id_champ='$champ'");

$row=mysqli_fetch_array($result);
$max=$row[0];

while ($fin<=$max)
{                 
 @db_clmnt($champ, $debut, $fin, 0, $idconnect);
  
  $result = $idconnect->query("
			SELECT * 
			FROM phppr_clmnt 
			ORDER BY POINTS
			DESC, DIFF DESC, BUTSPOUR 
			DESC, BUTSCONTRE 
			ASC, NOM");
$pl=1;

      while ($row=mysqli_fetch_array($result))
		{   
         $x=0;
         $id_equipe=$row["ID_EQUIPE"];

         $query="INSERT INTO phppr_clmnt_graph (id_equipe, fin, classement) 
				 VALUES ('$id_equipe','$fin', '$pl')" ;
         mysqli_query($idconnect, $query);
         $pl++;                    
		}
 $fin++;
}     
 
  $result = $idconnect->query("
			SELECT phppr_clmnt_graph.id_equipe 
			FROM phppr_clmnt_graph, phppr_equipes 
			WHERE phppr_equipes.id=phppr_clmnt_graph.id_equipe
            AND phppr_equipes.id_champ=$champ");

			$nb_saving=mysqli_num_rows($result);
 
  $result=$idconnect->query("
		SELECT * 
		FROM phppr_equipes 
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
}
}
?>
<!--
</td></tr></table>
-->