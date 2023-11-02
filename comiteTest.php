
<html>
<head>
<?php require ("saison.php") ; ?>    
<?php $sigle = $_GET['variable_1'];?>

<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
</head>
<body link="#000000" text="#000000" vlink="#000000" alink="#000000" bgcolor="#FFFFFF">

<?php
echo "<br/>";


?>
<?php
require ("connection.php") ;
 ?>
<?php $terr_annee =("terr_".''.$saison);?>
   <?php// echo $terr_annee;?>
<?php

$reponse = mysql_query("SELECT * FROM bdcomite 
						WHERE sigle='$sigle' "); 
while ($donnees = mysql_fetch_array($reponse) )
{ 
?>
<h1><strong>Comit&eacute; 
  <?php echo $donnees['nom'];?>
  </strong></h1>


<?php 

{print("<img src=\"http://francefinalesrugby.franceserv.com/images/comites/$sigle.jpg\" border=\"0\" target=_top>");}
?>



<br/><br/><br/>

<strong>Pr&eacute;sident :</strong> <?php
echo $donnees['president'].
'<br/><br/><strong> Adresse :</strong>'
.$donnees['batiment'].
'<br/>'
.$donnees['adresse'].'<br/>'
.$donnees['CP'].' '.$donnees['ville'];
 ?>
 
<div align="left"><font color="#000000" size="3"><b> Contacts</b></font>
<p align="center">

<?php echo '<strong> T&eacute; l :  </strong>'.' '.$donnees['tel'].
'<br/><strong> Fax :  </strong>'.' '.$donnees['fax'].
'<br/><strong> M&eacute;l :  </strong>'.' '.$donnees['contact'];
?>


<?php
  }
mysql_close(); // Déconnexion de MySQL
?>
</div>

<div align="center"><br/>
  <?php
echo "<strong> Site Internet :</strong>";
?>

<?php require ("connection.php") ; ?>
<?php
$query = "SELECT bdcomite.nom, sigle, site, contact FROM bdcomite WHERE bdcomite.sigle='$sigle'";
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
			{			  
			echo "</b> <a href=\"$row[2]\" target=_blank >$row[2]</a>";
			echo "<br>";
			echo "</b> <a href=\"$row[3]\">$row[3]</a>";
			echo "<br>"; 
			 }
mysql_close(); // Déconnexion de MySQL
?>


<?php require ("connection.php") ;?>
  
<?php

$reponse = mysql_query("SELECT * FROM bdcomite WHERE sigle='$sigle' "); // Requête SQL
while ($donnees = mysql_fetch_array($reponse) )
{ 
?>
  <br/>
  <br/>
  <?php

echo"<br/>";

?>
  <font color="#FF0000"><br>
  _______________________________________________________</font> </div>
<p align="center"> 
  <?php
    
   // include("pub2.php");
    echo"<br/>";
	?>
  <font color="#FF0000"> <br>
  _______________________________________________________</font> </p>
<div align="left"><h2><B> Pr&eacute;sentation du comit&eacute; :</B></h2></div><br>
Le comit&eacute;  se compose  des d&eacute;partements suivants<?php
echo $donnees['nbre_dep'].'<br/>'.$donnees['dep1'].'<br/>'. $donnees['dep2'].'<br/>'.$donnees['dep3'].'<br/>'.$donnees['dep4'].'<br/>'.$donnees['dep5'].'<br/>'. $donnees['dep6'].' '.$donnees['dep7'].' '.$donnees['dep8'].' '.$donnees['dep9'].' '. $donnees['dep10'].' '.$donnees['dep11'].' '.$donnees['dep12'];

echo"<br/>";
echo "----------------------------------------------------------";
echo"<br/>";
?>
<div align="left"> <B><br>
  Quelques chiffres :</B></div>

<?php 
 $nb_equipe_tt=mysql_query("SELECT SUM(Nbre) 
 							FROM bdsaisons 
							WHERE siglecomite='$sigle'"); 
 $nb_equipe_tt=mysql_fetch_array($nb_equipe_tt);
// echo "$nb_equipe_tt[0]"; 
?>

<?php


echo 
"<strong> Nbre de clubs : </strong>".' '.$nb_equipe_tt[0].'<br/><br/>'
.'<strong> Effectif s&eacute;nior : </strong>'.' '.$donnees['nbre_senior'].'<br/>'
.'<strong> Effectif F&eacute;minin : </strong>'.' '.$donnees['nbre_feminine'].'<br/>'
.'<strong> Effectif Jeune : </strong>'.' '.$donnees['nbre_jeune'].'<br/>'
.'<strong> Effectif dirigeant : </strong>'.' '.$donnees['nbre_dirigeant'].'<br/><br/>';

}
?>

<?php 
 $nb_equipe_pro=mysql_query("	SELECT SUM(Nbre) 
 								FROM bdsaisons 
								WHERE siglecomite='$sigle' and($terr_annee= 'Top 14'or $terr_annee= 'Pro D2')");
 $nb_equipe_pro=mysql_fetch_array($nb_equipe_pro);
// echo "$nb_equipe_pro[0]"; 
?>
<?php 
 $nb_equipe_fed1=mysql_query("SELECT SUM(Nbre) from bdsaisons where $terr_annee= 'Federale 1' and siglecomite='$sigle' and type = 'masc'"); 
 $nb_equipe_fed1=mysql_fetch_array($nb_equipe_fed1);
// echo "$nb_equipe_fed1[0]"; 
?>
<?php 
 $nb_equipe_fed2=mysql_query("SELECT SUM(Nbre) from bdsaisons where $terr_annee= 'Federale 2' and siglecomite='$sigle' and type = 'masc'"); 
 $nb_equipe_fed2=mysql_fetch_array($nb_equipe_fed2);
 //echo "$nb_equipe_fed2[0]"; 
?>
<?php 
 $nb_equipe_fed3=mysql_query("SELECT SUM(Nbre) from bdsaisons where $terr_annee= 'Federale 3' and siglecomite='$sigle' and type = 'masc'"); 
 $nb_equipe_fed3=mysql_fetch_array($nb_equipe_fed3);
 //echo "$nb_equipe_fed3[0]"; 
?>
<?php 
 $nb_equipe_fem=mysql_query("SELECT SUM(Nbre) from bdsaisons where  siglecomite='$sigle' and type = 'fem'"); 
 $nb_equipe_fem=mysql_fetch_array($nb_equipe_fem);
 //echo "$nb_equipe_fem[0]"; 
?>



<?php 
 $nb_equipe_terr=$nb_equipe_tt[0]-( $nb_equipe_fem[0]+$nb_equipe_fed3[0]+$nb_equipe_fed2[0]+$nb_equipe_fed1[0]+$nb_equipe_pro[0]);
?>


<?php 
echo
"<strong>Nbre de clubs professionnels :</strong> ".' '.$nb_equipe_pro[0].'<br/>'
.'<strong> Nbre de clubs en f&eacute;d&eacute;rale 1 :</strong>'.' '.$nb_equipe_fed1[0].'<br/>'
.'<strong> Nbre de clubs en f&eacute;d&eacute;rale 2 :</strong>'.' '.$nb_equipe_fed2[0].'<br/>'
.'<strong> Nbre de clubs en f&eacute;d&eacute;rale 3 :</strong>'.' '.$nb_equipe_fed3[0].'<br/>'
.'<strong> Nbre de clubs dans les comp&eacute;titions territoriales : </strong>'.' '. $nb_equipe_terr.'<br/>'.'<br/>'

.'<strong> Nbre de clubs f&eacute;minins: </strong>'.' '.$nb_equipe_fem[0].'<strong> dont </strong>'.'  '.$donnees['fem_elite'].' en &eacute;lite'.'<br/><br/>';
?>
<?php
echo"<br/>";
echo "----------------------------------------------------------";
echo"<br/>";

?>
<div align="left"><font color="#000000" size="5"><b>Palmar&egrave;s S&eacute;lections 
  territoriales</b></font><br>
  </div>

<?php
 


mysql_close(); // Déconnexion de MySQL
?>
<br>
<br>
<div align="center"><font color="#FF0000">_______________________________________________________</font> 
</div>
<p align="center"> 
  <?php    //include("pub2.php");
    echo"<br/>";
	?>
  <font color="#FF0000"> <br>
  _______________________________________________________</font> </p>
<br>

<br>
<div align="left"><font color="#000000" size="5"><b>Palmar&egrave;s national</b></font><br>
  (Les dix derniers titres)</div>
<?php
require ("connection.php") ;
 ?>
<?php

$reponse = mysql_query("SELECT saison,championnat, division, champion 
						FROM bdequipe1 
						WHERE comite1='$sigle'and titre='Champion' and  championnat='de France' 
						ORDER BY saison DESC limit 0,10"); 
echo"<br/>";
 
while ($donnees = mysql_fetch_array($reponse) )
{ ?>
<?php echo $donnees['saison'].' Champion '. $donnees['championnat'].' '.$donnees['division'].' : <strong> '.$donnees['champion'].'</strong>' ; ?>


<?php
 echo "<br />";
 }
mysql_close(); // Déconnexion de MySQL
?>

<?php   echo "<br />"; ?>
<table width="460" height="10" cellspacing="0" cellpadding="0" bordercolor="#000000" border="1" bgcolor="#CCCCCC">
  <tr> 
    <td bgcolor="#CCCCCC" align="center" valign="top" height="10"> <font color="#000000"link="#000000" text="#000000" vlink="#000000" alink="#000000"> 
      <?php

echo "<a href=page_palm_comite.php?variable_1=$sigle > Tous les champions nationaux du comite $sigle</a> ";
?>
      </font></td>
  </tr>
</table>
<p>&nbsp;</p>
<div align="left"><font color="#000000" size="5"><b>Palmar&egrave;s Territorial 
    <?php  $saison1=$saison-1;  ?>
   <?php echo "$saison1";  ?></b></font><br>
  </div>

 
<?php
require ("connection.php") ;
 ?>
<?php

$reponse = mysql_query("SELECT champion, championnat, division 
						FROM bdequipe1 
						WHERE comite1='$sigle' and titre='Champion' and rang <'225' and rang >'165' 
										and saison='$annee'-1 and rang2='1' 
										and categorie='A'
						ORDER BY rang "); 

while ($donnees = mysql_fetch_array($reponse) )
			{ 
			?>
			Champion 
			<?php echo $donnees['championnat'];  ?> <?php echo $donnees['division'];  ?>
			: <strong> 
			<?php echo $donnees['champion']; ?>
			</strong> 
			<?php
			 echo "<br/>";
			 }
			mysql_close(); // Déconnexion de MySQL
			?>
<strong> 
<?php
echo "<br/>";
echo "Equipe II";
echo "<br/>";
?>
</strong> 
<?php
require ("connection.php") ;
 ?>
<?php

 


$reponse = mysql_query("SELECT champion, championnat, division
						FROM bdequipe2 
						WHERE comite1='$sigle'and titre='Champion' and saison='$annee'-1 and categorie='B' 
						ORDER BY rang "); 
echo"<br />";
 

		while ($donnees = mysql_fetch_array($reponse) )
				{ 
				?>
				Champion 
				<?php echo $donnees['championnat'];  ?> <?php echo $donnees['division'];  ?>
				: <strong> 
				<?php echo $donnees['champion']; ?>
				</strong> 
				<?php
				 echo "<br/>";
				 }
				mysql_close(); // Déconnexion de MySQL
				?>
<?php
echo "<br/>";
?>
<table width="460" height="10" cellspacing="0" cellpadding="0" border="1" bordercolor="#000000">
  <tr>
    <td bgcolor="#CCCCCC" align="center" valign="top" height="10"> 
      <?php
echo "<a href=palm_terr2tableau.php?variable_1=$sigle target=_blank> Tous les champions territoriaux du comite $sigle</a> ";
?>
    </td>
  </tr>
</table>
<p align="center"><br>
  <font color="#FF0000"><br>
  <hr /></font> <br>
  <br>
  <?php  //  include("pub4.php");
    ?>
  <br>
<font color="#FF0000">_______________________________________________________</font> 
<p>&nbsp;</p>
<p><font color="#000000" size="5"><b>Clubs du comit&eacute;</b></font></p>
<p>&nbsp;</p>
 <p align="left"><font color="#FF0000" size="3"><b>Clubs professionnels</b></font><font color="#FF0000"><b> 
  (Top 14/ Pro D2)</b></font>
<p align="center"> <font color="#000000" link="#000000" vlink="#000000" alink="#000000">
  <?php require ("connection.php") ; ?>
  <?php
	$query = "	SELECT bdsaisons.id, bdclubs.nom_1, bdclubs.url, bdclubs.logo, bdclubs.url 
				FROM bdsaisons, bdclubs 
				WHERE bdsaisons.code_bdsaison=bdclubs.code and bdsaisons.siglecomite='$sigle' and ($terr_annee ='Top 14' or $terr_annee ='Pro D2')";
	$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {                 
                  echo "<img src=\"$row[4]\">";
				  echo "</b> <a href=\"$row[3]\">$row[1]</a>";
      			  echo "<br>";
		}
	mysql_close(); // Déconnexion de MySQL
?>
  </font><font color="#000000"> </font>
<p align="left"><font color="#000000" size="2"><b><font size="3" color="#FF0000">F&eacute;d&eacute;rale 
  1</font></b></font> 
<p align="center"><font color="#000000">
  <?php
require ("connection.php") ;
 ?>
  <?php

$query = "	SELECT bdsaisons.id, bdclubs.nom_1, bdclubs.url, bdclubs.logo, bdclubs.url 
			FROM bdsaisons, bdclubs 
			WHERE bdsaisons.code_bdsaison=bdclubs.code and bdsaisons.siglecomite='$sigle' and $terr_annee='Federale 1'";
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
      	 	{                        
			 	echo "<img src=\"$row[4]\">";
				echo "</b> <a href=\"$row[3]\">$row[1]</a>";
				echo "<br>";
 			}
mysql_close(); // Déconnexion de MySQL
?>
  </font>
<p align="left"><font color="#FF0000" size="3"><b>F&eacute;d&eacute;rale 2 </b></font> 
<p align="center"><font color="#000000">
  <?php
require ("connection.php") ;
 ?>
  <?php

$query = "	SELECT bdsaisons.id, bdclubs.nom_1, bdclubs.url, bdclubs.logo, bdclubs.url 
			FROM bdsaisons, bdclubs 
			WHERE bdsaisons.code_bdsaison=bdclubs.code and bdsaisons.siglecomite='$sigle' and $terr_annee='Federale 2'";
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
        	{                        
				echo "<img src=\"$row[4]\">";
				echo "  </b> <a href=\"$row[3]\">$row[1]</a>";
       			echo "<br>";
 
 			}
mysql_close(); // Déconnexion de MySQL
?>
  </font>
<p align="left"><font color="#000000" size="2"><b><font size="3" color="#FF0000">F&eacute;d&eacute;rale 
  3</font></b></font> 
<p align="center"><font color="#000000">
  <?php
require ("connection.php") ;
 ?>
  <?php

$query = "	SELECT bdsaisons.id, bdclubs.nom_1, bdclubs.url, bdclubs.logo, bdclubs.url 
			FROM bdsaisons, bdclubs 
			WHERE bdsaisons.code_bdsaison=bdclubs.code and bdsaisons.siglecomite='$sigle' and $terr_annee='Federale 3'";
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         	{                         
				echo "<img src=\"$row[4]\">";
				echo "  </b> <a href=\"$row[3]\">$row[1]</a>";
      			echo "<br>";
		
			 }
			 
mysql_close(); // Déconnexion de MySQL
?>
  </font>
<p>
<p align="left"><font color="#FF0000" size="3"><b>Honneur/ Promotion honneur</b></font> 
<p align="center"><font color="#000000">
  <?php
require ("connection.php") ;
 ?>
  <?php

$query = "SELECT bdsaisons.id, bdclubs.nom_1, bdclubs.url, bdclubs.logo, bdclubs.url FROM bdsaisons, bdclubs WHERE bdsaisons.code_bdsaison=bdclubs.code and bdsaisons.siglecomite='$sigle' and ($terr_annee='Honneur' or $terr_annee='Honneur Promotion Honneur' or  $terr_annee='Promotion Honneur' )";
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {                          
			echo "<img src=\"$row[4]\">";
			echo "  </b> <a href=\"$row[3]\">$row[1]</a>";
       		echo "<br>";
		 }
		 
mysql_close(); // Déconnexion de MySQL
?>
  </font><br>
  <br>
<b>
<p align="left"><font size="3" color="#FF0000">1re 2me S&eacute;rie</font> 
</b> 
<p align="center"><font color="#000000"> 
  <?php
require ("connection.php") ;
 ?>
  <?php

$query = "SELECT bdsaisons.id, bdclubs.nom_1, bdclubs.url, bdclubs.logo, bdclubs.url FROM bdsaisons, bdclubs WHERE bdsaisons.code_bdsaison=bdclubs.code and bdsaisons.siglecomite='$sigle' and ($terr_annee='Promotion 1re Serie' or $terr_annee='1re Serie' or $terr_annee='1re 2me Serie'or $terr_annee='2me Serie')";
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {                     
                 
			echo "<img src=\"$row[4]\">";
			echo "  </b> <a href=\"$row[3]\">$row[1]</a>";
        	echo "<br>";
		
		?>
  <?php
 
 }
mysql_close(); // Déconnexion de MySQL
?>
  </font> 
<p align="left"><font size="3" color="#FF0000"><b>3me 4me S&eacute;rie</b></font> 
<p align="center"><font color="#000000">
  <?php
require ("connection.php") ;
 ?>
  <?php

$query = "	SELECT bdsaisons.id, bdclubs.nom_1, bdclubs.url, bdclubs.logo, bdclubs.url 
			FROM bdsaisons, bdclubs 
			WHERE bdsaisons.code_bdsaison=bdclubs.code and bdsaisons.siglecomite='$sigle' and ($terr_annee='2me 3me 4me Serie' or $terr_annee='2me 3me Serie' or $terr_annee='3me Serie' or $terr_annee='3me 4me Serie' or $terr_annee='4me Serie')";
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {                 
                   
                 
			 echo "<img src=\"$row[4]\">";
			 echo "  </b> <a href=\"$row[3]\">$row[1]</a>";
       		 echo "<br>";
		
		?>
  <?php

 }
mysql_close(); // Déconnexion de MySQL
?>
  </font>
<p>&nbsp;</p>
<p align="left"><font color="#FF0000" size="3"><b>Equipes f&eacute;minines</b></font></p>
<p align="center">&nbsp;</p>
<p>&nbsp;</p>
<table width="460" height="10" cellspacing="0" cellpadding="0" border="1" bordercolor="#000000">
  <tr> 
    <td bgcolor="#006699" align="center" valign="top" height="10">&nbsp; </td>
  </tr>
</table>
<p><b>Clubs ayant fusionn&eacute;</b></p>
<p> <font color="#000000">
  <?php
require ("connection.php") ;
 ?>
  <?php

$query = "	SELECT bdsaisons.id, bdclubs.nom_1, bdclubs.url, bdclubs.logo, bdclubs.url, bdclubs.fusion 
			FROM bdsaisons, bdclubs 
			WHERE bdsaisons.code_bdsaison=bdclubs.code and bdsaisons.siglecomite='$sigle' and (terr_2014='F' )";
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {                                 
                 
				  echo "<img src=\"$row[4]\">";
				   echo "  </b> <a href=\"$row[3]\">$row[1]</a>    ($row[5])";
        echo "<br>";
		
		?>
  <?php
 
 }
mysql_close(); // Déconnexion de MySQL
?>
  <?php
echo "<br/>";
echo "<br/>";
?>
  </font></p>
<p><b>Clubs en sommeil</b></p>
<p><font color="#000000">


<?php require ("connection.php") ; ?>
<?php
// $query = "	SELECT bdsaisons.id, bdclubs.nom_1, bdclubs.url, bdclubs.logo, bdclubs.url 
// 			FROM bdsaisons, bdclubs 
//			WHERE bdsaisons.code_bdsaison=bdclubs.code and bdsaisons.siglecomite='$sigle' and (terr_2014='S' )";
// $result = mysql_query($query);
//         while($row = mysql_fetch_array($result))
        		//	{                  
				//   echo "  </b> <a href=\"$row[3]\">$row[1]</a>,";
				//	}
//	mysql_close(); ?>
 
<?php
// echo "<br/>";
// echo "<br/>";
// echo "<br/>";
// echo "<br/>";
?>
  </font></p>
<p> <font color="#000000">

<?php  //  include("pub_carre.php");  ?>
  </font></p>
	
	</body>
</html>