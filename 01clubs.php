<html>
<head>
<title>Untitled Document</title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
</head>


<?php
$champion = $_POST['champion']; 
//echo $champion;
?>
<?php require ("connection.php") ; ?>
<?php
$reponse = mysql_query("SELECT nom_1, code 
						FROM bdclubs 
						WHERE id='$champion' or idffr='$champion' "); 
								While ($donnees = mysql_fetch_array($reponse) )
									{ 
									 $champion=$donnees['nom_1'];
									}
//echo $champion;
?>

<?php
$chaine = $champion; //transforme en minuscule
$chaine = strtolower($chaine);

echo "<br/>";
?>

<?php //echo $chaine;?>

		<?php require ("connection.php") ; ?>


<?php
$requete = "SELECT sigle, comite, code 
			FROM bdclubs  
			WHERE id='$chaine' or nom_1='$chaine'or nom_2='$chaine'or sigle='$chaine' or nom_3='$chaine' or nom_4='$chaine' or idffr='$chaine'"; // Requ�te SQL 
					$reponse=mysql_query ($requete);
					While ($row = mysql_fetch_array($reponse) )
							{ 
								 $sigle=$row[0];
								 $comite=$row[1];
								 $code=$row[2];
								 
							//}	
					?>	
			<?php //echo $code;?>
			
			
<?php  	
	 if ($code ==0 ) 
	 include("02clubs.php");
	 else
	 {	
?>		
			
			
			
			
				
				<h1><strong><?php echo $sigle;?></strong></h1>
				<br/>
				<h2><strong>
  				<?php echo $comite;?>
 	 	 		</strong></h2>
				<?php $element1= $code;?>
				<?php// echo $element1;?>
				<?php
				$logo = substr($element1,-5); 
				{print("<img src=\"http://francefinalesrugby.franceserv.com/images/blasons200_200/$logo.gif\" >");}
				?>
				<strong>
				<?php $id=$element1;?>
				<?php //echo $id;?>

			


		</strong><br>
		<br>
<table border="1" align="center" cellspacing="0" cellpadding="2" width="500" bordercolor="#999999">
  <tr align="center" bordercolor="#FFFFFF"> 
    <td colspan="2"><font color="#000000">Cr&eacute;ation du club : </font></td>
    <td width="360"> <strong> <b><font color="#000000"><font color="#000000" size="4"> 
     
      </font><font size="4"> 
     
	 
	  <?php
$reponse = mysql_query("SELECT * FROM infosclub WHERE id='$id'"); // Requ�te SQL 
While ($donnees = mysql_fetch_array($reponse) )
	{ 
		?>
     	</font></font></b><font color="#000000"> 
      	<?php echo $donnees['A1624'];?>
      	</font><b><font color="#000000"><font size="4"> </font></font></b> </strong></td>
  </tr>
</table>
<br>
<table border="1" align="center" cellspacing="0" cellpadding="0" width="500" bordercolor="#999999">
  <tr align="center" bordercolor="#FFFFFF"> 
    <td colspan="2"><b><font color="#FF0000" size="3">Bureau</font></b></td>
  </tr>
  <tr align="center" bordercolor="#FFFFFF" bgcolor="#FFFFFF"> 
    <td width="110"> 
      <div align="right"><b><font color="#000000">Pr&eacute;sident :</font> </b></div>
    </td>
    <td width="384"><strong><font color="#000000"> 
      <?php echo $donnees['A1601'];?>
      </font> </strong></td>
  </tr>
  <tr align="center" bordercolor="#FFFFFF" bgcolor="#FFFFFF"> 
    <td width="110"> 
      <div align="right"><b><font color="#000000">Tr&eacute;sorier : </font></b></div>
    </td>
    <td width="384"><strong><font color="#000000"> 
      <?php echo $donnees['A1630'];?>
      </font> </strong></td>
  </tr>
  <tr align="center" bordercolor="#FFFFFF" bgcolor="#FFFFFF"> 
    <td width="110" height="27"> 
      <div align="right"><b><font color="#000000">Secretaire :</font></b></div>
    </td>
    <td width="384" height="27"><strong><font color="#000000"> 
      <?php echo $donnees['A1602'];?>
      </font></strong></td>
  </tr>
  <tr align="center" bordercolor="#FFFFFF"> 
    <td width="110"> 
      <div align="right"><b><font color="#000000">Contact : </font></b></div>
    </td>
    <td width="384"><strong><font color="#000000"> 
      <?php echo $donnees['A1603'];?>
      </font> </strong></td>
  </tr>
</table>
<br>
<table border="1" align="center" cellspacing="0" cellpadding="0" width="500" bordercolor="#999999">
  <tr align="center" bordercolor="#FFFFFF"> 
    <td colspan="2"><font color="#FF0000"><b>Si&egrave;ge</b></font></td>
  </tr>
  <tr align="center" bordercolor="#FFFFFF"> 
    <td colspan="2"> 
      <div align="center"><strong><font color="#000000"> 
        <?php echo $donnees['A1604'];?>
        </font> </strong></div>
    </td>
  </tr>
  <tr align="center" bordercolor="#FFFFFF"> 
    <td colspan="2"><font color="#000000"> 
      <?php echo $donnees['A1605'];?>
      </font> </td>
  </tr>
  <tr align="center" bordercolor="#FFFFFF"> 
    <td colspan="2" height="23" valign="top"><font color="#000000"> 
      <?php echo $donnees['A1606'];?>
      <?php echo $donnees['A1607'];?>
      </font> </td>
  </tr>
  <tr align="center" bordercolor="#FFFFFF"> 
    <td width="69"> 
      <div align="right"><font color="#000000">T&egrave;l :</font></div>
    </td>
    <td><font color="#000000"> 
      <?php echo $donnees['A1608'];?>
      </font> </td>
  </tr>
</table>
<br>
<table border="1" align="center" cellspacing="0" cellpadding="0" width="500" bordercolor="#999999">
  <tr align="center" bordercolor="#FFFFFF"> 
    <td colspan="2" height="23"><b><font color="#FF0000">Stade</font></b></td>
  </tr>
  <tr align="center" bordercolor="#FFFFFF"> 
    <td colspan="2" height="41"><strong><font color="#000000"> 
      <?php echo $donnees['A1609'];?>
      </font> </strong> </td>
  </tr>
  <tr align="center" bordercolor="#FFFFFF"> 
    <td colspan="2"> <font color="#000000"> 
      <?php echo $donnees['A1610'];?>
      </font> </td>
  </tr>
  <tr align="center" bordercolor="#FFFFFF"> 
    <td colspan="2" height="14" valign="top"><font color="#000000"> 
      <?php echo $donnees['A1611'];?>
      <?php echo $donnees['A1612'];?>
      </font> </td>
  </tr>
  <tr align="center" bordercolor="#FFFFFF"> 
    <td width="117" height="24"> 
      <div align="right"><font color="#000000">T&egrave;l : </font></div>
    </td>
    <td height="24"> 
      <div align="center"><b><font color="#000000"> 
        <?php echo $donnees['A1613'];?>
        </font></b> </div>
    </td>
  </tr>
  <tr align="center" bordercolor="#FFFFFF"> 
    <td width="117"> 
      <div align="right"><font color="#000000">capacit&eacute; :</font></div>
    </td>
    <td> 
      <div align="center"><font color="#000000"> 
        <?php echo $donnees['A1614'];?>
        </font> </div>
    </td>
  </tr>
</table>
<br>
<table border="1" align="center" cellspacing="0" cellpadding="0" width="500" bordercolor="#999999">
  <tr align="center" bordercolor="#FFFFFF"> 
    <td colspan="3" height="25"> 
      <div align="center"><b><font color="#FF0000">Contact</font></b> </div>
    </td>
  </tr>
  <tr align="center" bordercolor="#FFFFFF"> 
    <td width="121"> 
      <div align="right"><font color="#000000">Site Internet :</font></div>
    </td>
    <td colspan="2"><strong><font color="#000000"> 
      <p>
      <p align="center"><a href=" <?php echo $donnees['A1620'];?>" target="_blank"><font color="#000000" size="3"> 
        <?php echo $donnees['A1620'];?>
        </font></a></p>
      </font></strong> </td>
  </tr>
  <tr align="center" bordercolor="#FFFFFF"> 
    <td width="121"> 
      <div align="right"><font color="#000000">Courriel :</font> </div>
    </td>
    <td colspan="2"><strong> <a href="mailto:<?php echo $donnees['A1616'];?>" oldref=""> 
      <font color="#000000" size="3"> 
      <?php echo $donnees['A1616'];?>
      </font></a></strong></td>
  </tr>
  <tr align="center" bordercolor="#FFFFFF"> 
    <td width="121"> 
      <div align="right"><font color="#000000">Correspondant : </font></div>
    </td>
    <td colspan="2"><strong><font color="#000000"> 
      <?php echo $donnees['A1617'];?>
      </font> </strong> </td>
  </tr>
  <tr align="center" bordercolor="#FFFFFF"> 
    <td colspan="3" height="20"> 
      <p>&nbsp;</p>
    </td>
  </tr>
  <tr align="center" bordercolor="#FFFFFF"> 
    <td width="121"> 
      <div align="right"><font color="#000000">Sigle : </font></div>
    </td>
    <td colspan="2"><strong><font color="#000000"> 
      <?php echo $donnees['A1618'];?>
      </font> </strong> </td>
  </tr>
  <tr align="center" bordercolor="#FFFFFF"> 
    <td width="121"> 
      <div align="right"><font color="#000000">couleurs : </font></div>
    </td>
    <td colspan="2"><strong><font color="#000000"> 
      <?php echo $donnees['A1619'];?>
      </font> </strong> </td>
  </tr>
  <tr align="center" bordercolor="#FFFFFF"> 
    <td colspan="3">&nbsp; </td>
  </tr>
</table>
<br>
<table width="500" border="1" align="center" cellspacing="0" cellpadding="0" bordercolor="#999999">
  <tr align="center" bordercolor="#FFFFFF"> 
    <td colspan="2"> 
      <div align="center"><font color="#FF0000"><b>Section f&eacute;minine :</b></font></div>
    </td>
  </tr>
  <tr align="center" bordercolor="#FFFFFF"> 
    <td width="120"> 
      <div align="right"><font color="#000000">Nom/ Entente : </font></div>
    </td>
    <td width="374"><strong><font color="#000000"> 
      <?php echo $donnees['A1631'];?>
      </font></strong></td>
  </tr>
  <tr align="center" bordercolor="#FFFFFF"> 
    <td width="120"> 
      <div align="right"><font color="#000000">Niveau : </font></div>
    </td>
    <td width="374"> 
      <div align="center"><font color="#000000"><b> <strong><font color="#000000"> 
        <?php echo $donnees['A1632'];?>
        </font></strong></b></font></div>
    </td>
  </tr>
</table>
<br>
<table border="1" align="center" cellspacing="0" cellpadding="0" width="500" bordercolor="#999999">
  <tr align="center" bordercolor="#FFFFFF"> 
    <td height="25"> 
      <div align="center"><b><font color="#FF0000">Dates importantes</font></b></div>
    </td>
  </tr>
  <tr align="center" bordercolor="#FFFFFF"> 
    <td> 
      <div align="left"><font color="#000000"> 
        <?php echo $donnees['A1621'];?>
        </font></div>
    </td>
  </tr>
  <tr align="center" bordercolor="#FFFFFF"> 
    <td> 
      <div align="left"><font color="#000000"> 
        <?php echo $donnees['A1622'];?>
        </font></div>
    </td>
  </tr>
  <tr align="center" bordercolor="#FFFFFF"> 
    <td> 
      <div align="left"><font color="#000000"> 
        <?php echo $donnees['A1623'];?>
        </font></div>
    </td>
  </tr>
  <tr align="center" bordercolor="#FFFFFF">
    <td>
      <div align="left"><font color="#000000"> 
        <?php echo $donnees['A1626'];?>
        </font></div>
    </td>
  </tr>
  <tr align="center" bordercolor="#FFFFFF"> 
    <td> 
      <div align="left"><font color="#000000"> 
        <?php echo $donnees['A1627'];?>
        </font></div>
    </td>
  </tr>
</table>
<strong><b> 
<?php
 }
mysql_close(); // D�connexion de MySQL
?>
</b></strong><br>
<table border="1" align="center" cellspacing="0" cellpadding="0" width="540" bordercolor="#999999">
  <tr align="center" bordercolor="#FFFFFF"> 
    <td colspan="6" height="25" bordercolor="#000000" bgcolor="#FF0000"> 
      <div align="center"><b><font color="#000000" link="#000000"> 
        <?php
		  echo "<a href=http://francefinalesrugby.franceserv.com/mise_a_jour/infosclub/modif2_16me.php?idPersonne=$id target=_blank>Modifier la fiche du club</a> ";
		  ?>
        </font></b></div>
    </td>
  </tr>
</table>
<p><font color="#FF0000">_______________________________________________________</font></p>
<p>
  <?php include("pub2.php");   ?>
</p>
<p><font color="#FF0000">_______________________________________________________</font></p>
<p align="center"><b><font color="#FF0000"size="+2">Palmar&egrave;s</font></b></p>


<?php require ("connection.php") ; ?>

<?php //Affichage  de la categorie eu

 	$reponse = mysql_query("SELECT * FROM bdeurope WHERE champion='$chaine' and categorie='eu'  LIMIT 0,1");
	while ($donnees = mysql_fetch_array($reponse) )
	{ 
		 if ($chaine = $donnees['champion'] )
		{
 		echo "<p><h3><strong> Titres Europ&eacute;ens </strong></h3>";
		}
		?>
	
		<?php //Palmares eu
	$reponse = mysql_query("SELECT * FROM bdeurope WHERE champion='$chaine' and categorie='eu'  order by saison desc");
	while ($donnees = mysql_fetch_array($reponse) )
		{ 
		?>
			<?php echo $donnees['saison'].' '.$donnees['titre'].' '.$donnees['championnat'].' '.$donnees['division'].' '.$donnees['champion_entente'];?>
			<br/>
   		<?php
		}
		
 	}
?>


 
<?php  //Affichage  de la categorie A

	$reponse = mysql_query("SELECT * FROM bdequipe1 WHERE entente='$chaine' and categorie='a'  LIMIT 0,1");
	while ($donnees = mysql_fetch_array($reponse) )
		{ 
 			if ($chaine = $donnees['entente'] )
			{
 			echo "<p><h3><strong> Equipe Une </strong></h3>";
			}
			?>

		<?php //Palmares A
		$reponse = mysql_query("SELECT * FROM bdequipe1 WHERE entente='$chaine' and categorie='a'  order by saison desc");
		while ($donnees = mysql_fetch_array($reponse) )
			{ 
			?>
			<?php echo $donnees['saison'].' '.$donnees['titre'].' '.$donnees['championnat'].' '.$donnees['division'].' '. $donnees['champion_entente'];?>
			<br/>
  			<?php
			}
			?>

		<?php
 	}

?>


<?php   //Affichage  de la categorie B
	$reponse = mysql_query("SELECT * FROM bdequipe2 WHERE entente='$chaine' and categorie='B'  LIMIT 0,1");
	while ($donnees = mysql_fetch_array($reponse) )
	{ 
 		if ($element = $donnees['entente'] )
		{
 		echo "<p><h3><strong> Equipe II </strong></h3>";
		}
		?>

		<?php //Palmares B
		$reponse = mysql_query("SELECT * FROM bdequipe2 WHERE entente='$chaine' and categorie='B'  order by saison desc");
		while ($donnees = mysql_fetch_array($reponse) )
		{ 
		?>
		<?php echo $donnees['saison'].' '.$donnees['titre'].' '.$donnees['championnat'].' '.$donnees['division'].' '.$donnees['champion_entente'];?>
		<br/>
		<?php
		}
		?>
		<?php
 	}

?>


 
<?php   //Affichage  de la categorie C
	$reponse = mysql_query("SELECT * FROM bdchallenges WHERE entente='$chaine' and categorie='C'  LIMIT 0,1");
	while ($donnees = mysql_fetch_array($reponse) )
	{ 
 		if ($chaine = $donnees['entente'] )
		{
 		echo "<p><h3><strong> Challenges Nationaux </strong></h3>";
		}
		?>
		<?php //Palmares C
		$reponse = mysql_query("SELECT * FROM bdchallenges WHERE entente='$chaine' and categorie='C'  order by saison desc");
		while ($donnees = mysql_fetch_array($reponse) )
		{ 
		?>
		<?php echo $donnees['saison'].' '.$donnees['titre'].' '.$donnees['championnat'].' '.$donnees['champion_entente'];?>
		<br/>
  		<?php
		}
?>

<?php
 	}

?>
 
 

<?php  //Affichage  de la categorie D
$reponse = mysql_query("SELECT * FROM bdjeunes WHERE entente='$chaine' and categorie='D'  LIMIT 0,1");
while ($donnees = mysql_fetch_array($reponse) )
	{ 
 	if ($chaine = $donnees['entente'] )
		{
 		echo "<p><h3><strong> Reichels & Juniors </strong></h3>";
		}
		?>
		<?php //Palmares D
		$reponse = mysql_query("SELECT * FROM bdjeunes WHERE entente='$chaine' and categorie='D'  order by saison desc");
		while ($donnees = mysql_fetch_array($reponse) )
		{ 
		?>
		<?php echo $donnees['saison'].' '.$donnees['titre'].' '.$donnees['championnat'].' '.$donnees['division'].' '. $donnees['champion_entente'];?>
		<br/>
   		 <?php
		}
		?>
		<?php
 	}

?> 


 <?php  //Affichage  de la categorie E
$reponse = mysql_query("SELECT * 
						FROM bdjeunes 
						WHERE entente='$chaine' and categorie='E'  
						LIMIT 0,1");
while ($donnees = mysql_fetch_array($reponse) )
	{ 
	 	if ($chaine = $donnees['entente'] )
		{
 		echo "<p><h3><strong> Cadets </strong></h3>";
		}
		?>
		<?php //Palmares E
		$reponse = mysql_query("SELECT * 
								FROM bdjeunes 
								WHERE entente='$chaine' and categorie='E'  
								ORDER BY saison DESC");
		while ($donnees = mysql_fetch_array($reponse) )
			{ 
			?>
			<?php echo $donnees['saison'].' '.$donnees['titre'].' '.$donnees['championnat'].' '.$donnees['division'].' '. $donnees['champion_entente'];?>
			<br/>
   		 	<?php
			}
			?>
			<?php
 	}

?> 


<p><font color="#FF0000">_______________________________________________________</font></p>
<p align="center">&nbsp;</p>
<p align="center">
  	<?php	require ("connection.php") ; ?>
  
	  <?php  
	  $codeComite=substr($element1,-5);
$reponse = mysql_query("SELECT * 
						FROM bdsaisons
						WHERE code_bdsaison='$codeComite'");
								while ($donnees = mysql_fetch_array($reponse) )
									{
			?>
 		 	<?php echo "<p><h3><strong>Saison 2016/2017 : </p></h3></strong>";?>
  			<?php echo $donnees['terr_2017']; ?>
 			 <?php echo "<br/>";?>

				</p>
			
<p align="center"><b><font color="#FF0000"size="+2">Saisons pr&eacute;c&eacute;dentess</font></b></p>
			<p>&nbsp; 
			
<table width="450" bordercolor="#CCCCCC" border="0" cellpadding="0" cellspacing="0" align="center">
  <tr bgcolor="#FFFFFF"> 
    <td width="29%"><font color="#000000">Saison 2015/2016</font></td>
    <td width="71%"><font color="#000000"> 
      <?php echo $donnees['terr_2016']; ?>
      </font></td>
  </tr>
  <tr bgcolor="#FFFFFF"> 
    <td width="29%">&nbsp;</td>
    <td width="71%"><font color="#000000"> 
      <?php echo $donnees['france_2016']; ?>
      </font></td>
  </tr>
  <tr bgcolor="#FFFFFF"> 
    <td width="29%">&nbsp;</td>
    <td width="71%" bordercolor="#CCCCCC">&nbsp;</td>
  </tr>
  <tr bgcolor="#CCCCCC"> 
    <td width="29%"><font color="#000000">Saison 2014/2015</font></td>
    <td width="71%" bordercolor="#CCCCCC"><font color="#000000"> 
      <?php echo $donnees['terr_2015']; ?>
      </font></td>
  </tr>
  <tr bgcolor="#CCCCCC"> 
    <td width="29%">&nbsp;</td>
    <td width="71%" bordercolor="#CCCCCC"><font color="#000000"> 
      <?php echo $donnees['france_2015']; ?>
      </font></td>
  </tr>
  <tr bgcolor="#CCCCCC"> 
    <td width="29%">&nbsp;</td>
    <td width="71%" bordercolor="#CCCCCC">&nbsp;</td>
  </tr>
  <tr bgcolor="#FFFFFF"> 
    <td width="29%"><font color="#000000">Saison 2013/2014</font></td>
    <td width="71%" bordercolor="#CCCCCC"><font color="#000000"> 
      <?php echo $donnees['terr_2014']; ?>
      </font></td>
  </tr>
  <tr bgcolor="#FFFFFF"> 
    <td width="29%">&nbsp;</td>
    <td width="71%" bordercolor="#CCCCCC"><font color="#000000"> 
      <?php echo $donnees['france_2014']; ?>
      </font></td>
  </tr>
  <tr bgcolor="#FFFFFF"> 
    <td width="29%">&nbsp;</td>
    <td width="71%" bordercolor="#CCCCCC">&nbsp;</td>
  </tr>
  <tr bgcolor="#CCCCCC"> 
    <td width="29%"><font color="#000000">Saison 2012/2013 :</font></td>
    <td width="71%" bordercolor="#CCCCCC"><font color="#000000"> 
      <?php echo $donnees['terr_2013']; ?>
      </font></td>
  </tr>
  <tr bgcolor="#CCCCCC"> 
    <td width="29%">&nbsp;</td>
    <td width="71%" bordercolor="#CCCCCC"><font color="#000000"> 
      <?php echo $donnees['france_2013']; ?>
      </font></td>
  </tr>
  <tr bgcolor="#CCCCCC"> 
    <td width="29%">&nbsp;</td>
    <td width="71%" bordercolor="#CCCCCC">&nbsp;</td>
  </tr>
  <tr bgcolor="#FFFFFF"> 
    <td width="29%"><font color="#000000">Saison 2011/2012 : </font></td>
    <td width="71%" bordercolor="#CCCCCC"><font color="#000000"> 
      <?php echo $donnees['terr_2012']; ?>
      </font></td>
  </tr>
  <tr bgcolor="#FFFFFF"> 
    <td width="29%">&nbsp;</td>
    <td width="71%" bordercolor="#CCCCCC"><font color="#000000"> 
      <?php echo $donnees['france_2012']; ?>
      </font></td>
  </tr>
  <tr bgcolor="#FFFFFF"> 
    <td width="29%">&nbsp;</td>
    <td width="71%" bordercolor="#CCCCCC">&nbsp;</td>
  </tr>
  <tr bgcolor="#CCCCCC"> 
    <td width="29%"><font color="#000000">Saison 2010/2011 :</font></td>
    <td width="71%" bgcolor="#CCCCCC" bordercolor="#CCCCCC"><font color="#000000"> 
      <?php echo $donnees['terr_2011']; ?>
      </font></td>
  </tr>
  <tr bgcolor="#CCCCCC"> 
    <td width="29%"><font color="#CCCCCC">--</font></td>
    <td width="71%" bgcolor="#CCCCCC" bordercolor="#CCCCCC"><font color="#000000"> 
      <?php echo $donnees['france_2011']; ?>
      </font></td>
  </tr>
  <tr bgcolor="#CCCCCC"> 
    <td width="29%"> 
      <div align="center"><font color="#CCCCCC">--</font></div>
    </td>
    <td width="71%" bgcolor="#CCCCCC" bordercolor="#CCCCCC">&nbsp;</td>
  </tr>
  <tr bgcolor="#FFFFFF"> 
    <td width="29%"> 
      <div align="center"><font color="#000000">Saison 2009/2010 : </font></div>
    </td>
    <td width="71%" bordercolor="#CCCCCC"> 
      <div align="left"><font color="#000000"> 
        <?php echo $donnees['terr_2010']; ?>
        </font></div>
    </td>
  </tr>
  <tr bgcolor="#FFFFFF"> 
    <td width="29%"><font color="#FFFFFF">--</font></td>
    <td width="71%" bordercolor="#CCCCCC"><font color="#000000"> 
      <?php echo $donnees['france_2010']; ?>
      </font></td>
  </tr>
  <tr bgcolor="#FFFFFF"> 
    <td width="29%"> 
      <div align="center"><font color="#FFFFFF">--</font></div>
    </td>
    <td width="71%" bordercolor="#CCCCCC">&nbsp; </td>
  </tr>
  <tr bgcolor="#CCCCCC"> 
    <td width="29%"> 
      <div align="center"><font color="#000000">Saison 2008/2009 :</font></div>
    </td>
    <td width="71%" bordercolor="#CCCCCC"> <font color="#000000"> 
      <?php echo $donnees['terr_2009']; ?>
      </font></td>
  </tr>
  <tr bgcolor="#CCCCCC"> 
    <td width="29%"><font color="#CCCCCC">--</font></td>
    <td width="71%" bordercolor="#CCCCCC"><font color="#000000"> 
      <?php echo $donnees['france_2009']; ?>
      </font></td>
  </tr>
  <tr bgcolor="#CCCCCC"> 
    <td width="29%"> 
      <div align="center"><font color="#CCCCCC">--</font></div>
    </td>
    <td width="71%" bordercolor="#CCCCCC">&nbsp; </td>
  </tr>
  <tr bgcolor="#FFFFFF"> 
    <td width="29%"> 
      <div align="center"><font color="#000000">Saison 2007/2008 :</font></div>
    </td>
    <td width="71%" bordercolor="#CCCCCC"> <font color="#000000"> 
      <?php echo $donnees['terr_2008']; ?>
      </font></td>
  </tr>
  <tr bgcolor="#FFFFFF"> 
    <td width="29%"><font color="#FFFFFF">--</font></td>
    <td width="71%" bordercolor="#CCCCCC"><font color="#000000"> 
      <?php echo $donnees['france_2008']; ?>
      </font></td>
  </tr>
  <tr bgcolor="#FFFFFF"> 
    <td width="29%"> 
      <div align="center"><font color="#FFFFFF">--</font></div>
    </td>
    <td width="71%" bordercolor="#CCCCCC">&nbsp; </td>
  </tr>
  <tr bgcolor="#CCCCCC"> 
    <td width="29%"> 
      <div align="center"><font color="#000000">Saison 2006/2007 :</font></div>
    </td>
    <td width="71%" bordercolor="#CCCCCC"> <font color="#000000"> 
      <?php echo $donnees['terr_2007']; ?>
      </font></td>
  </tr>
  <tr bgcolor="#CCCCCC"> 
    <td width="29%"> 
      <div align="center"><font color="#CCCCCC">22--</font></div>
    </td>
    <td width="71%" bordercolor="#CCCCCC"> <font color="#000000"> 
      <?php echo $donnees['france_2007']; ?>
      </font></td>
  </tr>
</table>
	<p>
  	<?php
 	}
 	?>
<?php
}

?>
</p>
<p><font color="#FF0000">_______________________________________________________</font></p>
<p> 
  <?php
    // On inclut le haut de la page
    include("pub4.php");
    ?>
</p>

<?php
}
mysql_close(); // D�connexion de MySQL
?>
</html>