<?php 
require '../../Phpleague/phppl/config2.php';
require '../../Phpleague/phppl/admin/fonctions.php';
include '../../Phpleague/phppl/lang/lang_fr.php';
include '../../fichierConfig.php';
ouverture();

echo "<br />";
echo "champRecup : ".$champRecup;
echo "<br />";
echo "<hr />";

	if ($champRecup == 110171) {$tableau = $tableauBFC;	}	
elseif ($champRecup == 110271) { $tableau = array(120271, 129181);}
elseif ($champRecup == 120171) { $tableau = $tableauBRE;	}
elseif ($champRecup == 120271) { $tableau = array(120271, 129181);}
elseif ($champRecup == 130171) { $tableau = array(130171, 130181, 130191, 130192, 130271);	}
//elseif ($champRecup == 130271) { $tableau = array(130271, 130272);}		
elseif ($champRecup == 160171) { $tableau = $tableauHDF;	}	
elseif ($champRecup == 160271) { $tableau = array(160271, 169181);}	
elseif ($champRecup == 210171) { $tableau = $tableauPDL;	}
elseif ($champRecup == 210271) { $tableau = array(210271);}



//for ($champ =$champRecup; $champ <$champRecup+8; $champ++)
foreach ($tableau as $champ)
{

 affich_champ ($champ, $idconnect); 

	include ("tps1.php3"); 
	 
	$result1=$idconnect->query("	SELECT id 
								FROM phppl_equipes 
								WHERE id_champ='$champ'");

	while ($row1=mysqli_fetch_array($result1))
	{ 
	$query="DELETE FROM phppl_clmnt_graph 
		WHERE phppl_clmnt_graph.id_equipe='$row1[0]'" ;
        mysqli_query($idconnect, $query) or die (mysqli_error($idconnect));
	}
$debut=0;
$fin=1;
	 
  $result = $idconnect->query("
			SELECT accession, barrage, relegation 
			FROM phppl_parametres 
			WHERE id_champ='$champ'");
								
			while ($row=mysqli_fetch_array($result))
				{
				$accession = $row['accession'];
				$barrage = $row['barrage'] + $accession;
				//$relegation = nb_equipes($champ, $idconnect)- $row['relegation'];
				}
	
  $result=$idconnect->query("SELECT max(phppl_journees.numero) 
							 FROM phppl_journees, phppl_matchs 
							 WHERE phppl_journees.id=phppl_matchs.id_journee AND buts_dom is not NULL and phppl_journees.id_champ='$champ'");

$row=mysqli_fetch_array($result);
$max=$row[0];

while ($fin<=$max)
{                 
 @db_clmnt($champ, $debut, $fin, 0, $idconnect);
  
  $result = $idconnect->query("
			SELECT * 
			FROM phppl_clmnt 
			ORDER BY POINTS
			DESC, DIFF DESC, BUTSPOUR 
			DESC, BUTSCONTRE 
			ASC, NOM");
$pl=1;

      while ($row=mysqli_fetch_array($result))
		{   
         $x=0;
         $id_equipe=$row["ID_EQUIPE"];

         $query="INSERT INTO phppl_clmnt_graph (id_equipe, fin, classement) 
				 VALUES ('$id_equipe','$fin', '$pl')" ;
         mysqli_query($idconnect, $query);
         $pl++;                    
		}
 $fin++;
}     
 
  $result = $idconnect->query("
			SELECT phppl_clmnt_graph.id_equipe 
			FROM phppl_clmnt_graph, phppl_equipes 
			WHERE phppl_equipes.id=phppl_clmnt_graph.id_equipe
            AND phppl_equipes.id_champ=$champ");

			$nb_saving=mysqli_num_rows($result);
 
  $result=$idconnect->query("
		SELECT * 
		FROM phppl_equipes 
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

?>
<!--
</td></tr></table>
-->