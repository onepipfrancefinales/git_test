
<?php $valeur = $_GET['valeur'];?>

        <?php $valeur5=substr($valeur,4,1);  ?>
        <?php //echo $valeur5 ; ?>

<?php if ($valeur5>0)
	{
	$equipe=$valeur;
	
	mysql_connect("sql.franceserv.fr", "onepip-france", "lavelan09"); // Connexion à MySQL
	mysql_select_db("onepip-france-db1"); // Sélection de la base onepip

	$reponse = mysql_query("SELECT idffr, comite, code FROM bdclubs WHERE code='$equipe'"); // Requête SQL 
	While ($donnees = mysql_fetch_array($reponse) )
		{ 
  		$id_equipe = $donnees['code'];
		}
	 //echo $id_equipe;
	}
else
	{
	$id_equipe=$valeur;
	mysql_connect("sql.franceserv.fr", "onepip-france", "lavelan09"); // Connexion à MySQL
	mysql_select_db("onepip-france-db1"); // Sélection de la base onepip

	$reponse = mysql_query("SELECT sigle,comite, code FROM bdclubs WHERE idffr='$id_equipe'"); // Requête SQL 
	While ($donnees = mysql_fetch_array($reponse) )
		{ 
  		$equipe = $donnees['code'];
		}
	// echo $equipe;
}
 ?>








<?php //$id_equipe = $_POST['id_equipe'];?>
<?php //echo $id_equipe ;?>







<?php
mysql_connect("sql.franceserv.fr", "onepip-france", "lavelan09"); // Connexion à MySQL
mysql_select_db("onepip-france-db3"); // Sélection de la base onepip
?>

<?php //recherche d'un club de federale 1

	$reponse = mysql_query("SELECT id_club FROM phpf1_equipes WHERE id_club='$equipe'"); // Requête SQL 
	While ($donnees = mysql_fetch_array($reponse) )
		{ 
	  	$equipefederale1 = $donnees['id_club'];
		}
	
?>
<?php //recherche d'un club de federale 2

	$reponse = mysql_query("SELECT id_club FROM phpfed2_equipes WHERE id_club='$equipe'"); // Requête SQL 
	While ($donnees = mysql_fetch_array($reponse) )
		{ 
	  	$equipefederale2 = $donnees['id_club'];
		}
	
?>
<?php //recherche d'un club de federale 3GS

	$reponse = mysql_query("SELECT id_club FROM phpfed3GS_equipes WHERE id_club='$equipe'"); // Requête SQL 
	While ($donnees = mysql_fetch_array($reponse) )
		{ 
	  	$equipefederale3GS = $donnees['id_club'];
		}
	
?>

<?php //recherche d'un club de federale 3NE

	$reponse = mysql_query("SELECT id_club FROM phpfed3NE_equipes WHERE id_club='$equipe'"); // Requête SQL 
	While ($donnees = mysql_fetch_array($reponse) )
		{ 
	  	$equipefederale3NE = $donnees['id_club'];
		}
	
?>



<?php
if ($equipe==$equipefederale)
 	{
 	$comite='pro';
 	$php='php';
 	$connect='connection3';
 	}


elseif ($equipe==$equipefederale1 )
 	{
 	$comite='f1';
 	$connect='connection3';
 	}
elseif($equipe==$equipefederale2)
 	{
 	$comite='fed2';
  	$connect='connection3';
 	}	
elseif($equipe==$equipefederale3NE)
 	{
 	$comite='fed3NE';
  	$connect='connection3';
 	}
	
elseif($equipe==$equipefederale3GS)
 	{
 	$comite='fed3GS';
  	$connect='connection3';
 	}		
	
	
elseif($equipe>35000)
 	{
 	$comite='r';
  	$connect='connection2';
 	}
elseif ($equipe>34000)
 	{
 	$comite='pr';
  	$connect='connection3';
 	}
elseif ($equipe>33000)
  	{
 	$comite='pch';
  	$connect='connection2';
 	}
elseif ($equipe>32000)
 	{
 	$comite='pa';
  	$connect='connection2';
 	}
elseif ($equipe>31000)
	{
	$comite='pl';
 	$connect='connection3';
 	}
elseif ($equipe>30000)
	{
 	$comite='n';
  	$connect='connection2';
 	}
elseif ($equipe>29000)
 	{
 	$comite='mpy';
 	$connect='connection';
 	}
elseif ($equipe>28000)
 	{
  	$comite='ly';
  	$connect='connection2';
 	}
elseif ($equipe>27000)
	{
	$comite='lm';
 	$connect='connection2';
 	}
 elseif ($equipe>26000)
	{
 	$comite='ld';
	$connect='connection2';
 	}
 elseif ($equipe>25000)
 	{
 	$comite='idf';
 	$connect='connection2';
 	}
 elseif ($equipe>24000)
 	{
 	$comite='bg';
 	$connect='connection2';
	 }
 elseif ($equipe>23000)
	{
	$comite='fl';
 	$connect='connection2';
 	}
 elseif ($equipe>22000)
 	{
 	$comite='ly';
 	$connect='connection2';
 	}
 elseif ($equipe>21000)
 	{
	$comite='pr';
 	$connect='connection3';
 	}
 elseif ($equipe>20000)
 	{
 	$comite='ca';
 	$connect='connection2';
 	}
 elseif ($equipe>19000)
 	{
 	$comite='cbl';
 	$connect='connection2';
 	}
 elseif ($equipe>18000)
  	{
	$comite='c';
 	$connect='connection3';
 	}
 elseif ($equipe>17000)
 	 {
	 $comite='ce';
 	$connect='connection2';
 	}
 elseif ($equipe>16000)
	{
 	$comite='br';
 	$php='php';
	$connect='connection3';
	}
 elseif ($equipe>15000)
 	{
 	$comite='bg';
 	$php='php';
 	$connect='connection2';
	 }
 elseif ($equipe>14000)
 	{
 	$comite='be';
	$php='php';
	$connect='connection2';
 	}
 elseif ($equipe>13000)
	 {
 	$comite='au';
 	$php='php';
 	$connect='connection2';
 	}
  elseif ($equipe>12000)
 	{
	 $comite='ab';
 	$php='php';
 	$connect='connection2';
 	}
 elseif ($equipe>11000)
 	{
 	$comite='al';
 	$php='php';
 	$connect='connection2';
	 }
 elseif ($equipe>10000)
	{
	$comite='ly';
 	$php='php';
	$connect='connection2';
	}
else 
 $comite='()';


?>

 <?php
     $bdmatchsdivisions=("php".''.$comite.''."_divisions");
	  $bdmatchsequipes=("php".''.$comite.''."_equipes");
      $bdmatchs=("php".''.$comite.''."_matchs");
      $bdmatchsidequipedom=("php".''.$comite.''."_matchs".''.".id_equipe_dom");
	  $bdmatchsidequipeext=("php".''.$comite.''."_matchs".''.".id_equipe_ext");
	  $bdmatchsidjournee=("php".''.$comite.''."_matchs".''.".id_journee");
	  $bdmatchsid=("php".''.$comite.''."_matchs".''.".id");
	  $bdmatchsdatereelle=("php".''.$comite.''."_matchs".''.".date_reelle");
	
 
	


 require ("../../$connect.php")
//mysql_connect("sql.franceserv.fr", "onepip-france", "lavelan09"); 
//mysql_select_db("onepip-france-db1"); 
?>
<?php

$query = "	SELECT id_champ 
			FROM $bdmatchsequipes 
			WHERE id_club=$equipe LIMIT 0,1";
					$result = mysql_query($query) or die (mysql_error ());
					while ($row = mysql_fetch_array($result) )
							{
							$division=$row[0];
							//echo $division ; 
							}	

$query = "	SELECT nom 
			FROM $bdmatchsdivisions 
			WHERE id=$division ";
					$result = mysql_query($query) or die (mysql_error ());
					while ($row = mysql_fetch_array($result) )
							{
							$divisiontexte=$row[0];
						   echo  "Championnat ";echo $divisiontexte ; 
							}	


$query = "	SELECT $bdmatchsid,  $bdmatchsidjournee, $bdmatchsidequipedom, $bdmatchsdatereelle, $bdmatchsidequipeext, bdclubs.code, bdclubs.nom_1 
			FROM bdclubs, $bdmatchs 
			WHERE $bdmatchsidequipedom=bdclubs.code  and ($bdmatchsidequipedom=$equipe or $bdmatchsidequipeext=$equipe) 
			ORDER BY  $bdmatchsidjournee 
			LIMIT 0,9";
						$result = mysql_query($query) or die (mysql_error ());
						while ($row = mysql_fetch_array($result) )
							{
							
							 	//$journee=$row[1]; 
							 	//$minijournee=substr($journee,3,2);  
							 	//echo $minijournee ;
							  	$date= $row[3];  
								$jour=substr($date,8,2);  
								$mois=substr($date,5,2);
									   
								echo $jour;echo " / ";
							 	echo $mois; 
								echo "<br/>";
												
							}
              

$query = "	SELECT $bdmatchsid, $bdmatchsidjournee, $bdmatchsidequipedom, $bdmatchsdatereelle, $bdmatchsidequipeext, bdclubs.code, bdclubs.nom_1 
			FROM bdclubs, $bdmatchs where $bdmatchsidequipedom=bdclubs.code  and ($bdmatchsidequipedom=$equipe or $bdmatchsidequipeext=$equipe) 
			ORDER BY $bdmatchsidjournee 
			LIMIT 0,9";
						$result = mysql_query($query);
						while ($row = mysql_fetch_array($result) )
									{
									$club= $row[6]; 
								  	$clubCourt=substr($club,0,18);
								    echo $clubCourt;
									echo "<br/>";
									}


$query = "	SELECT $bdmatchsid, $bdmatchsidjournee, $bdmatchsidequipedom, $bdmatchsdatereelle, $bdmatchsidequipeext, bdclubs.code, bdclubs.nom_1 
			FROM bdclubs, $bdmatchs 
			WHERE $bdmatchsidequipeext=bdclubs.code  and ($bdmatchsidequipedom=$equipe or $bdmatchsidequipeext=$equipe) 
			ORDER BY $bdmatchsidjournee 
			LIMIT 0,9";
						$result = mysql_query($query);
						while ($row = mysql_fetch_array($result) )
								{
								$club2= $row[6]; 
								  $clubCourt2=substr($club2,0,18);
								  echo $clubCourt2;
													
								}




$query = "SELECT $bdmatchsid,  $bdmatchsidjournee, $bdmatchsidequipedom, $bdmatchsdatereelle, $bdmatchsidequipeext, bdclubs.code, bdclubs.nom_1 FROM bdclubs, $bdmatchs where $bdmatchsidequipedom=bdclubs.code  and ($bdmatchsidequipedom=$equipe or $bdmatchsidequipeext=$equipe) order by  $bdmatchsidjournee LIMIT 9,18";
$result = mysql_query($query) or die (mysql_error ());
while ($row = mysql_fetch_array($result) )
{
?>
<?php //$journee=$row[1]; ?>
<?php //$minijournee=substr($journee,3,2);  ?>
<?php //echo $minijournee ; ?>
<?php  $date= $row[3]; 
           
		   $jour=substr($date,8,2);  
		   $mois=substr($date,5,2);
		   
		     echo $jour;echo " / ";
		   echo $mois; 
		  

}


$query = "SELECT id_champ FROM $bdmatchsequipes WHERE id_club=$equipe LIMIT 0,1";
$result = mysql_query($query) or die (mysql_error ());
while ($row = mysql_fetch_array($result) )
{
 $division=$row[0];
	
     //echo $division ; 
     
	}	
	  


$query = "SELECT nom FROM $bdmatchsdivisions WHERE id=$division ";
$result = mysql_query($query) or die (mysql_error ());
while ($row = mysql_fetch_array($result) )
{
 $divisiontexte=$row[0];
	
   echo  "Championnat ";echo $divisiontexte ; 
     
	}	
	  


$query = "SELECT $bdmatchsid,  $bdmatchsidjournee, $bdmatchsidequipedom, $bdmatchsdatereelle, $bdmatchsidequipeext, bdclubs.code, bdclubs.nom_1 FROM bdclubs, $bdmatchs where $bdmatchsidequipedom=bdclubs.code  and ($bdmatchsidequipedom=$equipe or $bdmatchsidequipeext=$equipe) order by  $bdmatchsidjournee LIMIT 0,9";
$result = mysql_query($query) or die (mysql_error ());
while ($row = mysql_fetch_array($result) )
{
?>
<?php //$journee=$row[1]; ?>
<?php //$minijournee=substr($journee,3,2);  ?>
<?php //echo $minijournee ; ?>
<?php  $date= $row[3]; 
           
		   $jour=substr($date,8,2);  
		   $mois=substr($date,5,2);
		   
		     echo $jour;echo " / ";
		   echo $mois; 
		  

}


p

$query = "SELECT $bdmatchsid, $bdmatchsidjournee, $bdmatchsidequipedom, $bdmatchsdatereelle, $bdmatchsidequipeext, bdclubs.code, bdclubs.nom_1 FROM bdclubs, $bdmatchs where $bdmatchsidequipedom=bdclubs.code  and ($bdmatchsidequipedom=$equipe or $bdmatchsidequipeext=$equipe) order by $bdmatchsidjournee LIMIT 0,9";
$result = mysql_query($query);
while ($row = mysql_fetch_array($result) )
{
?>
                    <?php $club= $row[6]; 
          $clubCourt=substr($club,0,18);
		  echo $clubCourt;
                 
}





$query = "SELECT $bdmatchsid, $bdmatchsidjournee, $bdmatchsidequipedom, $bdmatchsdatereelle, $bdmatchsidequipeext, bdclubs.code, bdclubs.nom_1 FROM bdclubs, $bdmatchs where $bdmatchsidequipeext=bdclubs.code  and ($bdmatchsidequipedom=$equipe or $bdmatchsidequipeext=$equipe) order by $bdmatchsidjournee LIMIT 0,9";
$result = mysql_query($query);
while ($row = mysql_fetch_array($result) )
{
?>
                    <?php $club2= $row[6]; 
          $clubCourt2=substr($club2,0,18);
		  echo $clubCourt2;
}

                    

$query = "SELECT $bdmatchsid,  $bdmatchsidjournee, $bdmatchsidequipedom, $bdmatchsdatereelle, $bdmatchsidequipeext, bdclubs.code, bdclubs.nom_1 FROM bdclubs, $bdmatchs where $bdmatchsidequipedom=bdclubs.code  and ($bdmatchsidequipedom=$equipe or $bdmatchsidequipeext=$equipe) order by  $bdmatchsidjournee LIMIT 9,18";
$result = mysql_query($query) or die (mysql_error ());
while ($row = mysql_fetch_array($result) )
{
?>
                    <?php //$journee=$row[1]; ?>
                    <?php //$minijournee=substr($journee,3,2);  ?>
                    <?php //echo $minijournee ; ?>
                    <?php  $date= $row[3]; 
           
		   $jour=substr($date,8,2);  
		   $mois=substr($date,5,2);
		   
		     echo $jour;echo " / ";
		   echo $mois; 
		  
			
}




$query = "SELECT id_champ FROM $bdmatchsequipes WHERE id_club=$equipe LIMIT 0,1";
$result = mysql_query($query) or die (mysql_error ());
while ($row = mysql_fetch_array($result) )
{
?>
<?php $division=$row[0];
	
     //echo $division ; 
     
	}	
	  


$query = "SELECT nom FROM $bdmatchsdivisions WHERE id=$division ";
$result = mysql_query($query) or die (mysql_error ());
while ($row = mysql_fetch_array($result) )
{
?>
<?php $divisiontexte=$row[0];
	
   echo  "Championnat ";echo $divisiontexte ; 
     
	}	
	  


$query = "SELECT $bdmatchsid,  $bdmatchsidjournee, $bdmatchsidequipedom, $bdmatchsdatereelle, $bdmatchsidequipeext, bdclubs.code, bdclubs.nom_1 FROM bdclubs, $bdmatchs where $bdmatchsidequipedom=bdclubs.code  and ($bdmatchsidequipedom=$equipe or $bdmatchsidequipeext=$equipe) order by  $bdmatchsidjournee LIMIT 0,9";
$result = mysql_query($query) or die (mysql_error ());
while ($row = mysql_fetch_array($result) )
{
?>
<?php //$journee=$row[1]; ?>
<?php //$minijournee=substr($journee,3,2);  ?>
<?php //echo $minijournee ; ?>
<?php  $date= $row[3]; 
           
		   $jour=substr($date,8,2);  
		   $mois=substr($date,5,2);
		   
		     echo $jour;echo " / ";
		   echo $mois; 
		  
			
}




$query = "SELECT $bdmatchsid, $bdmatchsidjournee, $bdmatchsidequipedom, $bdmatchsdatereelle, $bdmatchsidequipeext, bdclubs.code, bdclubs.nom_1 FROM bdclubs, $bdmatchs where $bdmatchsidequipedom=bdclubs.code  and ($bdmatchsidequipedom=$equipe or $bdmatchsidequipeext=$equipe) order by $bdmatchsidjournee LIMIT 0,9";
$result = mysql_query($query);
while ($row = mysql_fetch_array($result) )
{
			 $club= $row[6]; 
          $clubCourt=substr($club,0,18);
		  echo $clubCourt;
                    
}




$query = "SELECT $bdmatchsid, $bdmatchsidjournee, $bdmatchsidequipedom, $bdmatchsdatereelle, $bdmatchsidequipeext, bdclubs.code, bdclubs.nom_1 FROM bdclubs, $bdmatchs where $bdmatchsidequipeext=bdclubs.code  and ($bdmatchsidequipedom=$equipe or $bdmatchsidequipeext=$equipe) order by $bdmatchsidjournee LIMIT 0,9";
$result = mysql_query($query);
while ($row = mysql_fetch_array($result) )
{
?>
                    <?php $club2= $row[6]; 
          $clubCourt2=substr($club2,0,18);
		  echo $clubCourt2;
}



?>
                   
                    <?php

$query = "SELECT $bdmatchsid,  $bdmatchsidjournee, $bdmatchsidequipedom, $bdmatchsdatereelle, $bdmatchsidequipeext, bdclubs.code, bdclubs.nom_1 FROM bdclubs, $bdmatchs where $bdmatchsidequipedom=bdclubs.code  and ($bdmatchsidequipedom=$equipe or $bdmatchsidequipeext=$equipe) order by  $bdmatchsidjournee LIMIT 9,18";
$result = mysql_query($query) or die (mysql_error ());
while ($row = mysql_fetch_array($result) )
{
?>
                    <?php //$journee=$row[1]; ?>
                    <?php //$minijournee=substr($journee,3,2);  ?>
                    <?php //echo $minijournee ; ?>
                    <?php  $date= $row[3]; 
           
		   $jour=substr($date,8,2);  
		   $mois=substr($date,5,2);
		   
		     echo $jour;echo " / ";
		   echo $mois; 
		  
			
}






$query = "SELECT id_champ FROM $bdmatchsequipes WHERE id_club=$equipe LIMIT 0,1";
$result = mysql_query($query) or die (mysql_error ());
while ($row = mysql_fetch_array($result) )
{
?>


<?php $division=$row[0];

     //echo $division ; 
     
	}	
	  



$query = "SELECT nom FROM $bdmatchsdivisions WHERE id=$division ";
$result = mysql_query($query) or die (mysql_error ());
while ($row = mysql_fetch_array($result) )
{
?>
<?php $divisiontexte=$row[0];
	
   echo  "Championnat ";echo $divisiontexte ; 
     
	}	
	  


$query = "SELECT $bdmatchsid,  $bdmatchsidjournee, $bdmatchsidequipedom, $bdmatchsdatereelle, $bdmatchsidequipeext, bdclubs.code, bdclubs.nom_1 FROM bdclubs, $bdmatchs where $bdmatchsidequipedom=bdclubs.code  and ($bdmatchsidequipedom=$equipe or $bdmatchsidequipeext=$equipe) order by  $bdmatchsidjournee LIMIT 0,9";
$result = mysql_query($query) or die (mysql_error ());
while ($row = mysql_fetch_array($result) )
{
?>
<?php //$journee=$row[1]; ?>
<?php //$minijournee=substr($journee,3,2);  ?>
<?php //echo $minijournee ; ?>
<?php  $date= $row[3]; 
           
		   $jour=substr($date,8,2);  
		   $mois=substr($date,5,2);
		   
		     echo $jour;echo " / ";
		   echo $mois; 
		  
}





$query = "SELECT $bdmatchsid, $bdmatchsidjournee, $bdmatchsidequipedom, $bdmatchsdatereelle, $bdmatchsidequipeext, bdclubs.code, bdclubs.nom_1 FROM bdclubs, $bdmatchs where $bdmatchsidequipedom=bdclubs.code  and ($bdmatchsidequipedom=$equipe or $bdmatchsidequipeext=$equipe) order by $bdmatchsidjournee LIMIT 0,9";
$result = mysql_query($query);
while ($row = mysql_fetch_array($result) )
{
?>
                    <?php $club= $row[6]; 
          $clubCourt=substr($club,0,18);
		  echo $clubCourt;
}




$query = "SELECT $bdmatchsid, $bdmatchsidjournee, $bdmatchsidequipedom, $bdmatchsdatereelle, $bdmatchsidequipeext, bdclubs.code, bdclubs.nom_1 FROM bdclubs, $bdmatchs where $bdmatchsidequipeext=bdclubs.code  and ($bdmatchsidequipedom=$equipe or $bdmatchsidequipeext=$equipe) order by $bdmatchsidjournee LIMIT 0,9";
$result = mysql_query($query);
while ($row = mysql_fetch_array($result) )
{
?>
                    <?php $club2= $row[6]; 
          $clubCourt2=substr($club2,0,18);
		  echo $clubCourt2;
}





$query = "SELECT $bdmatchsid,  $bdmatchsidjournee, $bdmatchsidequipedom, $bdmatchsdatereelle, $bdmatchsidequipeext, bdclubs.code, bdclubs.nom_1 FROM bdclubs, $bdmatchs where $bdmatchsidequipedom=bdclubs.code  and ($bdmatchsidequipedom=$equipe or $bdmatchsidequipeext=$equipe) order by  $bdmatchsidjournee LIMIT 9,18";
$result = mysql_query($query) or die (mysql_error ());
while ($row = mysql_fetch_array($result) )
{
?>
                    <?php //$journee=$row[1]; ?>
                    <?php //$minijournee=substr($journee,3,2);  ?>
                    <?php //echo $minijournee ; ?>
                    <?php  $date= $row[3]; 
           
		   $jour=substr($date,8,2);  
		   $mois=substr($date,5,2);
		   
		     echo $jour;echo " / ";
		   echo $mois; 
		  
			
}

mysql_close(); 
?>
                   