<?php 
require ("saison.php");
$champion = $_GET['champion']; 
//echo $champion;

$chaine = $champion; //transforme en minuscule
$chaine = strtoupper(substr($chaine, 0, 1)).strtolower(substr($chaine,1));
//echo  "chaine : ".''.$chaine;

?>

<br />
		

<?php
if ($chaine>0)
{
require ("connect1/connection1.php") ;
$requete =$bdd->query( "SELECT sigle, comite, id, nom_1 , ligue
			FROM bdclubs  
			WHERE id='$chaine' OR code='$chaine' OR idffr='$chaine'");  
				//$reponse=mysql_query ($requete);
				While ($row = $requete->fetch() )
						{ 
						$sigle=$row[0];
						$comite=$row[1];
						$code=$row[2];
						$champion=$row[3];
						$numLigue=$row[4];	 
						}	

}
else
{
require ("connect/connection1.php") ;
$requete =$bdd->query( "SELECT sigle, comite, id, nom_1 , ligue
			FROM bdclubs  
			WHERE nom_1='$chaine' OR nom_2='$chaine' OR sigle='$chaine' OR nom_3='$chaine' OR nom_4='$chaine' OR idffr='$chaine'");  
				//$reponse=mysql_query ($requete);
				While ($row = $requete->fetch() )
						{ 
						$sigle=$row[0];
						$comite=$row[1];
						$code=$row[2];
						$champion=$row[3];
						$numLigue=$row[4];	 
						}	

}





$requete =$bdd->query( "SELECT nom
						FROM bdligue
						WHERE id=$numLigue");
			//$reponse=mysql_query ($requete);
				While ($row = $requete->fetch() )
						{ 
						$nomLigue=$row[0];
	 
						}
?>	
			
			
				
				
<h2><font size="6" color="#FF0000">
  <?php echo $sigle;?>
  </font></h2>
				<br/>
				
<h2><font size="6">
  <?php echo "Ligue".' '.$nomLigue;?>
  </font></h2>
				
<h2> <font color="#000000" size="4"><b>
  <?php echo "( Ex".' '.$comite.''." )";?>
  </b></font></h2>
				<?php $element1= $code;?>
	<?php// echo $element1;?>
	
				<?php
				$logo=substr($element1, -5);
				 {print("<img src=\"http://francefinalesrugby.franceserv.com/images/blasons200_200/$logo.gif\" >");}	?>
				<?php $id=$logo;?>
	<?php// echo $id;?>

			


		<br>
		<br>
<?php
//*************************            informations du club          ****************************************
$reponse = $bdd->query("SELECT * 
						FROM infosclub
						WHERE id= '$id' "); 
							While ($donnees = $reponse->fetch() )
								{ 
								$dateCreation=$donnees['A1624'];		$president=	$donnees['A1601'];
								$tresorier=	$donnees['A1630'];			$secretaire=$donnees['A1602'];
								$contact=$donnees['A1603'];				$siege=$donnees['A1604'];
								$adresse=$donnees['A1605'];				$cp=$donnees['A1606'];
								$ville=$donnees['A1607'];				$tel=$donnees['A1608'];
								$nomStade=$donnees['A1609'];			$adresseStade=$donnees['A1610'];
								$cpStade=$donnees['A1611'];				$villeStade=$donnees['A1612'];
								$telStade=$donnees['A1613'];			$capacite=$donnees['A1614'];
								
								$site=$donnees['A1620'];				$courriel=$donnees['A1616'];
								$correspondant=$donnees['A1617'];		$sigle=$donnees['A1618'];
								$couleurs=$donnees['A1619'];			$comite=$donnees['A1615'];
								$nomEntente=$donnees['A1631'];			$niveau=$donnees['A1632'];
								$info1=$donnees['A1621'];				$info2=$donnees['A1622'];
								$info3=$donnees['A1623'];				$info4=$donnees['A1626'];
								$info5=$donnees['A1627'];
								}
	//mysql_close(); 
?>	
<table border="1" align="center" cellspacing="0" cellpadding="2" width="500" bordercolor="#999999">
  <tr > 
    <td class="titreGauche" colspan="2">Cr&eacute;ation du club : </td>
    <td class="saisieGras" width="360">
      <?php echo $dateCreation;?>
    </td>
  </tr>
</table>
<br>
<table border="1" align="center" cellspacing="0" cellpadding="0" width="500" >
  <tr  > 
    <td class="titre" colspan="2"> Bureau </td>
  </tr>
  <tr> 
    <td class="titreGauche" width="110"> 
      Pr&eacute;sident :
    </td>
    <td class="saisieGras" width="384"> 
      <?php echo $president;?>
    </td>
  </tr>
  <tr   > 
    <td class="titreGauche" width="110"> 
      Tr&eacute;sorier : 
    </td>
    <td class="saisieGras" width="384">
      <?php echo $tresorier;?>
     </td>
  </tr>
  <tr > 
    <td class="titreGauche" width="110" > 
      Secretaire :
    </td>
    <td class="saisieGras" width="384" >
      <?php echo $secretaire;?>
     </td>
  </tr>
  <tr > 
    <td class="titreGauche" width="110"> 
     Contact : 
    </td>
    <td class="saisie" width="384">
      <?php echo $contact;?>
      </td>
  </tr>
</table>
<br>
<table border="1" align="center" cellspacing="0" cellpadding="0" width="500" >
  <tr align="center" bordercolor="#FFFFFF"> 
		<td class="titre" colspan="2">
			Si&egrave;ge
		</td>
  </tr>
  <tr > 
    <td class="saisieGras" colspan="2"> 
      <?php echo $siege;?>
       </td>
  </tr>
  <tr > 
    <td class="saisie" colspan="2">
      <?php echo $adresse;?>
      </td>
  </tr>
  <tr > 
    <td class="saisie" colspan="2" valign="top">
      <?php echo $cp;?>
      <?php echo $ville;?>
       </td>
  </tr>
  <tr > 
    <td width="110"> T&egrave;l : </td>
    <td class="saisie" width="384"> 
      <?php echo $tel;?>
    </td>
  </tr>
</table>
<br>
<table border="1" align="center" cellspacing="0" cellpadding="0" width="500" bordercolor="#999999">
  <tr > 
   
  </tr>
  <tr > 
    <td class="titre" colspan="2" >
		Stade 
    </td>
  </tr>
  <tr >
    <td class="saisieGras" colspan="2" >
      <?php echo $nomStade;?>
     </td>
  </tr>
  <tr > 
    <td class="saisie" colspan="2"> 
      <?php echo $adresseStade;?>
       </td>
  </tr>
  <tr > 
    <td class="saisie" colspan="2"  valign="top">
      <?php echo $cpStade;?>
      <?php echo $villeStade;?>
       </td>
  </tr>
  <tr > 
    <td class="titreGauche" width="117" > T&egrave;l : </td>
    <td class="saisie" > 
        <?php echo $telStade;?>     
    </td>
  </tr>
  <tr > 
    <td  class="titreGauche" width="117"> 
		capacit&eacute; : 
	</td>
    <td class="saisiee">     
        <?php echo $capacite;?>   
    </td>
  </tr>
</table>
<br>
<table border="1" align="center" cellspacing="0" cellpadding="0" width="500" >
  <tr > 
    <td class="titre" colspan="3" > 
    Contact
    </td>
  </tr>
  <tr> 
    <td class="titreGauche" width="121"> 
      Site Internet :
    </td>
    <td class="saisieGras" colspan="2">
           <a href=" http://<?php echo $site;?>" target="_blank">  <?php echo $site;?>  </a>
    </td>
  </tr>
  <tr  > 
    <td class="titreGauche" width="121"> 
      Courriel :
    </td>
    <td class="saisieGras" colspan="2"> <a href="mailto:<?php echo $donnees['A1616'];?>" oldref=""> 
      
      <?php echo $courriel;?>
      </a>
	 </td>
  </tr>
  <tr > 
    <td class="titreGauche" width="121"> 
     Correspondant : 
    </td>
    <td class="saisieGras" colspan="2">
      <?php echo $correspondant;?>
      </td>
  </tr>
  <tr > 
    <td colspan="3" > 
      <p>&nbsp;</p>
    </td>
  </tr>
  <tr > 
    <td class="titreGauche" width="121"> 
      Sigle : 
    </td>
    <td class="saisie" colspan="2">
      <?php echo $sigle;?>
      </td>
  </tr>
  <tr > 
    <td class="titreGauche" width="121"> 
      couleurs : 
    </td>
    <td class="saisie" colspan="2">
      <?php echo $couleurs;?>
      </td>
  </tr>
  <tr > 
    <td colspan="3">&nbsp; </td>
  </tr>
</table>
<br>
<table width="500" border="1" align="center" cellspacing="0" cellpadding="0" >
  <tr > 
    <td class="titre" colspan="2"> 
  Section f&eacute;minine :
    </td>
  </tr>
  <tr > 
    <td class="titreGauche" width="120"> 
      Nom/ Entente : 
    </td>
    <td  class="saisie" width="374">
      <?php echo $nomEntente;?>
      </td>
  </tr>
  <tr > 
    <td  class="titreGauche" width="120"> 
      Niveau : 
    </td>
    <td class="saisie" width="374"> 
        <?php echo $niveau;?>  
    </td>
  </tr>
</table>
<br>
<table border="1" align="center" cellspacing="0" cellpadding="0" width="500" >
  <tr > 
    <td class="titre"> 
      Dates importantes
    </td>
  </tr>
  <tr > 
    <td class="info"> 
        <?php echo $info1;?>
    </td>
  </tr>
  <tr > 
    <td class="info"> 
        <?php echo $info2;?>    
    </td>
  </tr>
  <tr > 
    <td class="info"> 
        <?php echo $info3;?>      
    </td>
  </tr>
  <tr >
    <td class="info">
        <?php echo $info4;?>     
    </td>
  </tr>
  <tr > 
    <td class="info"> 
        <?php echo $info5;?>    
    </td>
  </tr>
</table>
<br>
<table border="1" align="center" cellspacing="0" cellpadding="0" width="540" bordercolor="#999999">
  <tr > 
    <td colspan="6" height="25" bordercolor="#000000" bgcolor="#FF0000"> 
      <div align="center"><b><font color="#000000" link="#000000"> 
        <?php
		  echo "<a href=http://francefinalesrugby.franceserv.com/mise_a_jour/infosclub/modif2.php?idPersonne=$id target=_blank>Modifier la fiche du club</a> ";
		  ?>
        </font></b></div>
    </td>
  </tr>
</table>
<br />
<hr />
<p>  <?php //include("pub2.php");  ?></p>
<hr />
<h1>Palmar&egrave;s</h1>


<font color="#000000"><b>
<?php require ("connect1/connection1.php") ; 

//**********************/Affichage  de la categorie eu  *******************************

 	$reponse = $bdd->query("SELECT *
							FROM bdeurope 
							WHERE champion='$champion' and categorie='eu'  
							LIMIT 0,1");
	
								while ($donnees = $reponse->fetch() )
								{ 
									 if ($champion = $donnees['champion'] )
											{
											echo "<h2> Titres Europ&eacute;ens </h2>";
											}
 
 //**************************************             Palmares EU        *******************************************

											$reponse = $bdd->query("SELECT *
															FROM bdeurope 
															WHERE champion='$champion' and categorie='eu'  
															ORDER BY saison DESC");
									
																		while ($donnees = $reponse->fetch() )
																			{ 
																			?>
</b></font> 
<div id="palmares">	<?php echo $donnees['saison'].' '.$donnees['titre'].' '.$donnees['championnat'].' '.$donnees['division'].' '.$donnees['champion_entente'];?>
</div>
																				
<font color="#000000"> 
<?php
																			}
		
								}
?>
<b>
<?php  //****************        Affichage  de la categorie A            *******************************

		$reponse = $bdd->query("SELECT *
							FROM bdequipe1 
							WHERE entente='$champion' and categorie='a'  
							LIMIT 0,1");
	
				while ($donnees = $reponse->fetch() )
					{ 
					if ($champion = $donnees['entente'] )
						{
						echo "<h2> Equipe Une </h2>";
						}
						?>
</b></font> 
<?php //*************************        Palmares A            *****************************************

		$reponse = $bdd->query("SELECT *
								FROM bdequipe1 
								WHERE entente='$champion' and categorie='a'  
								ORDER BY saison desc");
		
					while ($donnees =$reponse->fetch() )
						{ 
							?>
<div id="palmares"><?php echo $donnees['saison'].' '.$donnees['titre'].' '.$donnees['championnat'].' '.$donnees['division'].' '. $donnees['champion_entente'];?></div>
							
							<?php
						}
						?>

		<?php
					}

?>


<?php   //***************        Affichage  de la categorie B         *******************************
	$reponse = $bdd->query("SELECT * 
							FROM bdequipe2 
							WHERE entente='$champion' and categorie='B'  
							LIMIT 0,1");
	while ($donnees = $reponse->fetch() )
	{ 
 		if ($champion = $donnees['entente'] )
			{
			echo "<h2> Equipe II </h2>";
			}
		?>

		<?php //***************************     Palmares B            ************************************
		$reponse = $bdd->query("SELECT *
								FROM bdequipe2 
								WHERE entente='$champion' and categorie='B'  
								ORDER BY saison desc");
		while ($donnees = $reponse->fetch() )
			{ 
			?>
			<div id="palmares"><?php echo $donnees['saison'].' '.$donnees['titre'].' '.$donnees['championnat'].' '.$donnees['division'].' '.$donnees['champion_entente'];?></div>
			
			<?php
			}
			?>
		<?php
 	}

?>


 
<?php   //*********************            Affichage  de la categorie C      **************************************
	$reponse = $bdd->query("SELECT *
							FROM bdchallenges 
							WHERE entente='$champion' and categorie='C'  
							LIMIT 0,1");
	while ($donnees = $reponse->fetch() )
	{ 
 		if ($champion = $donnees['entente'] )
		{
 		echo "<h2> Challenges Nationaux</h2>";
		}
		?>
		<?php //Palmares C
		$reponse = $bdd->query("SELECT *
								FROM bdchallenges 
								WHERE entente='$champion' and categorie='C'  
								ORDER BY saison DESC");
		while ($donnees = $reponse->fetch() )
		{ 
		?>
		<div id="palmares">	<?php echo $donnees['saison'].' '.$donnees['titre'].' '.$donnees['championnat'].' '.$donnees['champion_entente'];?></div>
			
			<?php
		}
 	}

?>
 
 

<?php  //***********     Affichage  de la categorie D    *****************************
$reponse = $bdd->query("SELECT * 
						FROM bdjeunes 
						WHERE entente='$champion' and categorie='D'  
						LIMIT 0,1");
while ($donnees = $reponse->fetch())
	{ 
 	if ($champion = $donnees['entente'] )
		{
 		echo "<h2> Reichels & Juniors</h2>";
		}
		?>
		<?php //*******************     Palmares D     *********************************
		$reponse = $bdd->query("SELECT * 
								FROM bdjeunes 
								WHERE entente='$champion' and categorie='D'  
								ORDER BY saison desc");
		while ($donnees = $reponse->fetch())
		{ 
		?>
		<div id="palmares"><?php echo $donnees['saison'].' '.$donnees['titre'].' '.$donnees['championnat'].' '.$donnees['division'].' '. $donnees['champion_entente'];?></div>
		
   		 <?php
		}
 	}
?> 


 <?php  //**********************      Affichage  de la categorie E           *******************
$reponse = $bdd->query("SELECT * 
						FROM bdjeunes 
						WHERE entente='$champion' and categorie='E'  
						LIMIT 0,1");
while ($donnees = $reponse->fetch())
	{ 
	 	if ($champion = $donnees['entente'] )
			{
			echo "<h2> Cadets</h2>";
			}
		?>
<?php //*******************         Palmares E      *******************************************
		$reponse = $bdd->query("SELECT * 
								FROM bdjeunes 
								WHERE entente='$champion' and categorie='E'  
								ORDER BY saison DESC");
		while ($donnees = $reponse->fetch())
			{ 
			?>
			<div id="palmares"><?php echo $donnees['saison'].' '.$donnees['titre'].' '.$donnees['championnat'].' '.$donnees['division'].' '. $donnees['champion_entente'];?></div>
			
   		 	
<?php
			}
 	}
?>
<br>

<hr />

<p align="center">&nbsp;</p>
<p align="center">
 <?php
	
	require ("connect1/connection1.php") ; ?>
  
	  <?php  
	   $codeComite=substr($element1,-5);
$reponse = $bdd->query("SELECT * 
						FROM bdsaisons 
						WHERE code_bdsaison='$codeComite'");
	while ($donnees = $reponse->fetch())
	{
				?>
 		 
<h1>Saison 
  <?php echo $saison-1; ?>
  - 
  <?php echo $saison; ?>
</h1>
  <div id="saisonEnCours">	<?php echo "-"; ?>	<?php echo $donnees['terr_2020']; ?></div>
 		<br />

<hr />				

<h1>Saisons pr&eacute;c&eacute;dentes</h1>
			<p>&nbsp; 
			
<table width="550" bordercolor="#CCCCCC" border="0" cellpadding="0" cellspacing="0" align="center">
  <tr > 
    <td class="saisonImpaire" width="30%" valign="top"> Saison 
      <?php echo $saison-2; ?>
      - 
      <?php echo $saison-1; ?>
      : </td>
    <td class="saisonImpaireNG" width="70%" > 
      <?php echo $donnees['terr_2019']; ?>
    </td>
  </tr>
  <tr > 
    <td class="saisonImpaire" width="30%" valign="top">&nbsp;</td>
    <td class="saisonImpaireNG" width="70%" > 
      <?php echo $donnees['france_2019']; ?>
    </td>
  </tr>
  <tr class="saisonImpaire"> 
    <td width="30%" valign="top">&nbsp;</td>
    <td width="70%">&nbsp;</td>
  </tr>
  <tr > 
    <td class="saisonPaire"  width="30%" valign="top"> Saison 
      <?php echo $saison-3; ?>
      - 
      <?php echo $saison-2; ?>
      : </td>
    <td class="saisonPaireNG"  width="70%" > 
      <?php echo $donnees['terr_2018']; ?>
    </td>
  </tr>
  <tr > 
    <td width="30%" valign="top">&nbsp;</td>
    <td class="saisonPaireNG"  width="70%" > 
      <?php echo $donnees['france_2018']; ?>
    </td>
  </tr>
  <tr > 
    <td width="30%" valign="top">&nbsp;</td>
    <td width="70%" >&nbsp;</td>
  </tr>
  <tr > 
    <td class="saisonImpaire" width="30%" valign="top"> Saison 
      <?php echo $saison-4; ?>
      - 
      <?php echo $saison-3; ?>
      : </td>
    <td class="saisonImpaireNG" width="70%" > 
      <?php echo $donnees['terr_2017']; ?>
    </td>
  </tr>
  <tr > 
    <td class="saisonImpaire" width="30%" valign="top"></td>
    <td class="saisonImpaireNG" width="70%" > 
      <?php echo $donnees['france_2017']; ?>
    </td>
  </tr>
  <tr class="saisonImpaire"> 
    <td width="30%" valign="top">&nbsp;</td>
    <td width="70%">&nbsp;</td>
  </tr>
  <tr  > 
    <td  class="saisonPaire" width="30%" valign="top"> Saison 
      <?php echo $saison-5; ?>
      - 
      <?php echo $saison-4; ?>
      : </td>
    <td class="saisonPaireNG" width="70%" > 
      <?php echo $donnees['terr_2016']; ?>
    </td>
  </tr>
  <tr > 
    <td width="30%" valign="top">&nbsp;</td>
    <td class="saisonPaireNG"width="70%" > 
      <?php echo $donnees['france_2016']; ?>
    </td>
  </tr>
  <tr > 
    <td width="30%" valign="top">&nbsp;</td>
    <td width="70%" >&nbsp;</td>
  </tr>
  <tr > 
    <td class="saisonImpaire" width="30%" valign="top"> Saison 
      <?php echo $saison-6; ?>
      - 
      <?php echo $saison-5; ?>
      : </td>
    <td class="saisonImpaireNG" width="70%" > 
      <?php echo $donnees['terr_2015']; ?>
    </td>
  </tr>
  <tr > 
    <td class="saisonImpaire" width="30%" valign="top">&nbsp;</td>
    <td class="saisonImpaireNG" width="70%" > 
      <?php echo $donnees['france_2015']; ?>
    </td>
  </tr>
  <tr > 
    <td class="saisonImpaire" width="30%" valign="top">&nbsp;</td>
    <td class="saisonImpaire" width="70%" >&nbsp;</td>
  </tr>
  <tr  > 
    <td class="saisonPaire" width="30%" valign="top"> Saison 
      <?php echo $saison-7; ?>
      - 
      <?php echo $saison-6; ?>
      : </td>
    <td class="saisonPaireNG" width="70%" > 
      <?php echo $donnees['terr_2014']; ?>
    </td>
  </tr>
  <tr > 
    <td width="30%" valign="top">&nbsp;</td>
    <td class="saisonPaireNG "width="70%" > 
      <?php echo $donnees['france_2014']; ?>
    </td>
  </tr>
  <tr > 
    <td width="30%" valign="top">&nbsp;</td>
    <td width="70%">&nbsp;</td>
  </tr>
  <tr > 
    <td class="saisonImpaire" width="30%" valign="top"> Saison 
      <?php echo $saison-8; ?>
      - 
      <?php echo $saison-7; ?>
      : </td>
    <td class="saisonImpaireNG"  width="70%" > 
      <?php echo $donnees['terr_2013']; ?>
    </td>
  </tr>
  <tr > 
    <td class="saisonImpaire" width="30%" valign="top">&nbsp; </td>
    <td class="saisonImpaireNG" width="70%" > 
      <?php echo $donnees['france_2013']; ?>
    </td>
  </tr>
  <tr > 
    <td class="saisonImpaire" width="30%" valign="top">&nbsp; </td>
    <td class="saisonImpaire" width="70%" >&nbsp;</td>
  </tr>
  <tr  > 
    <td class="saisonPaire" width="30%" valign="top"> Saison 
      <?php echo $saison-9; ?>
      - 
      <?php echo $saison-8; ?>
      : </td>
    <td class="saisonPaireNG" width="70%" > 
      <?php echo $donnees['terr_2012']; ?>
    </td>
  </tr>
  <tr > 
    <td width="30%" valign="top">&nbsp;</td>
    <td class="saisonPaireNG" width="70%" > 
      <?php echo $donnees['france_2012']; ?>
    </td>
  </tr>
  <tr > 
    <td width="30%" valign="top"> </td>
    <td width="70%" > </td>
  </tr>
  <tr class="saisonpaire"> 
    <td width="30%" valign="top">&nbsp;</td>
    <td class="saisonPaire" width="70%" >&nbsp;</td>
  </tr>
  <tr > 
    <td class="saisonImpaire" width="30%" valign="top"> Saison 
      <?php echo $saison-10; ?>
      - 
      <?php echo $saison-9; ?>
      : </td>
    <td class="saisonImpaireNG" width="70%" > 
      <?php echo $donnees['terr_2011']; ?>
    </td>
  </tr>
  <tr > 
    <td class="saisonImpaire" width="30%" valign="top">&nbsp; </td>
    <td class="saisonImpaireNG" width="70%" > 
      <?php echo $donnees['france_2011']; ?>
    </td>
  </tr>
  <tr > 
    <td class="saisonImpaire" width="30%" valign="top">&nbsp; </td>
    <td class="saisonImpaire" width="70%" ></td>
  </tr>
  <tr > 
    <td class="saisonPaire" width="30%" valign="top"> Saison 
      <?php echo $saison-11; ?>
      - 
      <?php echo $saison-10; ?>
      : </td>
    <td class="saisonPaireNG" width="70%" > 
      <?php echo $donnees['terr_2010']; ?>
  </tr>
  <tr > 
    <td class="saisonPaire" width="30%" height="20" valign="top">&nbsp;</td>
    <td class="saisonPaireNG"  width="70%" height="20" > 
      <?php echo $donnees['france_2010']; ?>
  </tr>
  <tr > 
    <td class="saisonPaire" width="30%" valign="top"> </td>
    <td width="70%">&nbsp; </td>
  </tr>
  <tr > 
    <td class="saisonImpaire" width="30%" valign="top"> Saison 
      <?php echo $saison-12; ?>
      - 
      <?php echo $saison-11; ?>
      : </td>
    <td class="saisonImpaireNG" width="70%" > 
      <?php echo $donnees['terr_2009']; ?>
    </td>
  </tr>
  <tr > 
    <td class="saisonImpaire" width="30%" valign="top"> </td>
    <td class="saisonImpaireNG" width="70%" > 
      <?php echo $donnees['france_2009']; ?>
    </td>
  </tr>
  <tr > 
    <td class="saisonPaire" width="30%" valign="top"> </td>
    <td width="70%">&nbsp; </td>
  </tr>
  <tr > 
    <td class="saisonImpaire" width="30%" valign="top"> Saison 
      <?php echo $saison-13; ?>
      - 
      <?php echo $saison-12; ?>
      : </td>
    <td class="saisonImpaireNG" width="70%" > 
      <?php echo $donnees['terr_2008']; ?>
    </td>
  </tr>
  <tr > 
    <td class="saisonImpaire" width="30%" valign="top" height="17"> </td>
    <td class="saisonImpaireNG" width="70%" height="17" > 
      <?php echo $donnees['france_2008']; ?>
    </td>
  </tr>
  <tr > 
    <td class="saisonPaire" width="30%" valign="top"> </td>
    <td width="70%">&nbsp; </td>
  </tr>
  <tr > 
    <td class="saisonImpaire" width="30%" valign="top"> Saison 
      <?php echo $saison-14; ?>
      - 
      <?php echo $saison-13; ?>
      : </td>
    <td class="saisonImpaireNG" width="70%" > 
      <?php echo $donnees['terr_2007']; ?>
    </td>
  </tr>
  <tr > 
    <td class="saisonImpaire" width="30%" valign="top"> </td>
    <td class="saisonImpaireNG" width="70%" > 
      <?php echo $donnees['france_2007']; ?>
    </td>
  </tr>
  <tr > 
    <td class="saisonImpaire" width="30%" valign="top"></td>
    <td class="saisonImpaireNG" width="70%" >&nbsp;</td>
  </tr>
</table>
	<p>
  	<?php
 	}
 

?>
</p>
<hr />
<p> 
  <?php include("pub/pub4.php"); ?>
</p>

<?php

//mysql_close(); 
?>
</html>









