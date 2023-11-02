<?php
participation($bdd);

 echo "nombre de finalistes : ".$nbreParticipation;
 echo "<br />";
 echo "nbre de champions : ".$nbreChampion;
 echo "<br />";
echo "*************";
	//affichage ordre alphabétique
	for ($i=0; $i < $nbreParticipation; $i++)
	{	
	//echo $tabNomEquipe[$i].' : '.$tabNbre[$i]." participations"."<br />";
	}
	
//	affichage nbre de titre decroissant

echo "<br />";


/*
for ($i=0;$i<$nbreParticipation-1;$i++)
{
	//affichage nbre participation
	if($tabNbreTrier[$i]>$tabNbreTrier[$i+1]and $tabNbreTrier[$i]>1)
	{
		echo "<br />"."<b>".$tabNbreTrier[$i]." participations"."</b>";
		echo "<br />"."<br />";
	
	 //affichage des équipes
	 for ($j=0;$j<$nbreParticipation-1;$j++)
		{
		 if ($tabNbreTrier[$i]==$tabNbre[$j] and $tabNbreTrier[$i]>1)
			{echo $tabNomEquipe[$j].$tabNbre[$j]."<br />";}
		}	
	}
}
*/
/*
echo "<br />";
echo "<b>"."1 participation"."</b>"."<br />";
echo "<br />";
for ($i=0;$i<$nbreParticipation-1;$i++)
{
if ( $tabNbre[$i] == '1' )
	{echo $tabNomEquipe[$i].$tabNbre[$i]."<br />"; }
}
*/
echo "<br />";
echo "*******************************";
echo "<br />";
echo "*******************************";
echo "<br />";
//**************************************
//****  victoires consécutives *********
for($y = 0 ; $y < $cpteMonTableau; $y++)
{
 for ($i=0;$i<$nbreParticipation-1;$i++)
 {
  if ($tabNbre[$i]==$monTableau[$y])
  {//echo $tabNomEquipe[$i].$tabNbre[$i]." : ";
  $nbre=$tabNbre[$i];
  $equipe=$tabNomEquipe[$i];
	titresConsecutifs4($equipe, $nbre, $bdd);
// 	titresConsecutifs3($equipe, $nbre, $bdd);
// 	titresConsecutifs2($equipe, $nbre, $bdd);
  }
 }
}


echo "<br />";
echo "<br />";
for($y = 0 ; $y < $cpteMonTableau; $y++)
{
 for ($i=0;$i<$nbreParticipation-1;$i++)
 {
  if ($tabNbre[$i]==$monTableau[$y])
  {//echo $tabNomEquipe[$i].$tabNbre[$i]." : ";
  $nbre=$tabNbre[$i];
  $equipe=$tabNomEquipe[$i];
//	titresConsecutifs4($equipe, $nbre, $bdd);
	titresConsecutifs3($equipe, $nbre, $bdd);
// 	titresConsecutifs2($equipe, $nbre, $bdd);
  }
 }
}
echo "<br />";
echo "<br />";


echo "<br />";
for($y = 0 ; $y < $cpteMonTableau; $y++)
{
	echo $monTableau[$y];
}
echo "<br />";
for($y = 0 ; $y < $cpteMonTableau; $y++)
{
	
 for ($i=0;$i<$nbreParticipation-1;$i++)
 {
  if ($tabNbre[$i]==$monTableau[$y])
  {//echo $tabNomEquipe[$i].$tabNbre[$i]." : ";
  $nbre=$tabNbre[$i];
  $equipe=$tabNomEquipe[$i];
//  titresConsecutifs4($equipe, $nbre, $bdd);
// 	titresConsecutifs3($equipe, $nbre, $bdd);
	titresConsecutifs2($equipe, $nbre, $bdd);
  }
 }
}

echo "*******************************";
echo "<br />";
echo "*******************************";
//*****************************************************
/*
tousLesChampions($bdd);
echo "<br />";
//echo 'nbre Edition : '.$nbreEdition;echo "<br />";
echo "<br />";
//affichage de toutes les éditions
for ($i=0; $i<$nbreEdition; $i++)
{
if (isset($tabSaison[$i])) $saison[$i] = $tabSaison[$i];
if (isset($tabChampion[$i])) $champion[$i] = $tabChampion[$i];
echo $saison[$i].' '.$champion[$i]."<br />";
}
*/
?>
<hr />

<p align="center"><b><font size="5" face="Verdana, Arial, Helvetica, sans-serif">- 
  Nombre de participations &agrave; une finale du champ de france -</font></b></p>
<p>&nbsp;</p>
<p><font face="Arial, Helvetica, sans-serif" size="3">stade toulousain : 27 finales 
  / 20 victoires</font></p>
<p><font face="Arial, Helvetica, sans-serif" size="3">stade francais : 23 finales 
  / 14 victoires</font></p>
<p>&nbsp;</p>
<p><font face="Arial, Helvetica, sans-serif" size="3">USA Perpignan : 16 finales 
  / 7 victoires</font></p>
<p><font face="Arial, Helvetica, sans-serif" size="3">AS B&eacute;ziers :15 finales 
  / 11 victoures</font></p>
<p><font face="Arial, Helvetica, sans-serif" size="3">Agen : 14 finales / 8 victoires</font></p>
<p><font face="Arial, Helvetica, sans-serif" size="3">AS Montfrrand : 14 finales 
  / 2 victoires</font></p>
<p><font face="Arial, Helvetica, sans-serif" size="3">Records de finale perdues<br>
  l'ASM Clermont Auvergne, se distingue par le fait d'avoir perdu 12 finales (1936, 
  1937, 1970, 1978, 1994, 1999, 2001, 2007, 2008, 2009, 2015, 2019).</font></p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p><font face="Arial, Helvetica, sans-serif" size="3"><br>
  <br>
  <br>
  <br>
  Racing 92 (racing club de France jusqu'en 2001) : 13 finales / 6 victoires</font></p>
<p><font face="Arial, Helvetica, sans-serif" size="3">RC Toulon : 13 finales / 
  4victoires </font></p>
<p><font face="Arial, Helvetica, sans-serif" size="3">Stade bordelais :12 finales 
  / 7victoires</font></p>
<p><font face="Arial, Helvetica, sans-serif" size="3">Stade bordelais 12 finales 
  7 victoires</font></p>
<p><font face="Arial, Helvetica, sans-serif" size="3">FC Lourdes : 11 finales 
  / 8 victoires</font></p>
<p>&nbsp;</p>
<p><font face="Arial, Helvetica, sans-serif" size="3">Biarritz : 8 finales / 5 
  victoires</font></p>
<p><font face="Arial, Helvetica, sans-serif" size="3">Narbonne :5 finales / 2 
  victoires</font></p>
<p><font face="Arial, Helvetica, sans-serif" size="3"><br>
  </font><font face="Arial, Helvetica, sans-serif" size="3"><br>
  </font></p>
<p><font face="Arial, Helvetica, sans-serif" size="3">Castres olympique : 7 finales 
  / 5 victoires<br>
  <br>
  Aviron bayonnais : 7 finales / 3 victoires<br>
  <br>
  <br>
  <br>
  <br>
  <br>
  Lyon OU : 3 finales / 2 victoires<br>
  <br>
  </font></p>
<p>5 participations</p>
<p><font face="Arial, Helvetica, sans-serif" size="3">Stadoceste tarbais : 5 finales 
  / 2 victoires</font></p>
<p><font face="Arial, Helvetica, sans-serif" size="3">US Dax 5 finales / 0 victoire<br>
  </font></p>
<p>&nbsp;</p>
<p>4 participations</p>
<p>&nbsp;</p>
<p><font face="Arial, Helvetica, sans-serif" size="3">Stade montois 4finales / 
  1 victoire</font></p>
<p><font face="Arial, Helvetica, sans-serif" size="3">CA Brive 4 finales / 0 victoire</font></p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>3 participations</p>
<p><font face="Arial, Helvetica, sans-serif" size="3">CA B&egrave;gles 3 finales 
  /2 victoires</font></p>
<p><font face="Arial, Helvetica, sans-serif" size="3">Olympique 3 finales / 1 
  victoire<br>
  US Quillan 3 finales /1 victoire<br>
  <br>
  Section paloise 3 finales / 0 victoire</font></p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>2 Participations</p>
<p><font face="Arial, Helvetica, sans-serif" size="3">FC Grenoble :2 finales / 
  1 victoire<br>
  </font></p>
<p><font face="Arial, Helvetica, sans-serif" size="3">SCUF 2 finales / 0 victoire<br>
  Stade bagn&eacute;rais 2 finales / 0 victoire<br>
  </font><font face="Arial, Helvetica, sans-serif" size="3">Montpellier HR : 2 
  finales / 0 victoire</font></p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>1 Participation</p>
<p><font face="Arial, Helvetica, sans-serif" size="3">FC Lyon 1 finale /1 victoire<br>
  CS Vienne 1 finale /1 victoire<br>
  US Carmaux 1 finale /1 victoire<br>
  US Montauban 1 final e/1 victoire<br>
  La Voulte sportif 1 finale /1 victoire<br>
  </font></p>
<p><font face="Arial, Helvetica, sans-serif" size="3">US Carcassonne : 1 finale 
  / 0 victoire<br>
  FC L&eacute;zignan : 1finale / 0 victoire<br>
  US Cognac : 1 finale/ 0 victoire<br>
  SC Mazamet : 1 finale/ 0 victoire<br>
  Nice UR : 1 finale/ victoire<br>
  CS Bourgoin-Jallieu :1 finale/ / 0 victoire<br>
  US Colomiers :1 finale/ 0 victoire</font></p>
<p>&nbsp;</p>
<p>&nbsp;</p>
</body>
</html>




<p><b><font size="6" face="Verdana, Arial, Helvetica, sans-serif"><br>
  - Meilleure s&eacute;rie pour un club -</font></b><br>
</p>
<p align="center">&nbsp;</p>
<p align="center"><b><font face="Arial, Helvetica, sans-serif" size="4">4 titres 
  cons&eacute;cutifs</font></b></p>
<p> <font face="Arial, Helvetica, sans-serif" size="3">SBUC 1904 &agrave; 1907</font></p>
<p><font face="Arial, Helvetica, sans-serif" size="3"> Stade Toulousain 1994 &agrave; 
  1997 </font></p>
<p>&nbsp; </p>
<p><b><font size="4" face="Arial, Helvetica, sans-serif">3 titres consecutifs</font></b></p>
<p><font size="3" face="Arial, Helvetica, sans-serif">FC Lourdes 1956 &agrave; 
  1958</font></p>
<p><font face="Arial, Helvetica, sans-serif" size="3">Stade Toulousain 1922 &agrave; 
  1924</font></p>
<p><font size="3" face="Arial, Helvetica, sans-serif">Stade Fran&ccedil;ais 1893 
  &agrave; 1896</font></p>
<p>&nbsp;</p>
<p><b><font size="4" face="Arial, Helvetica, sans-serif">2 titres consecutifs</font></b></p>
<p></p>
<p><font face="Arial, Helvetica, sans-serif" size="3">AS B&eacute;ziers (1983-1984) 
  (1980-1981) (1977-1978) (1974-1975) (1971-1972)</font></p>
<p><font size="3" face="Arial, Helvetica, sans-serif">Stade Toulousain (1985-1986) 
  (1926-1927) (2011-2012)</font></p>
<p><font face="Arial, Helvetica, sans-serif" size="3">Stade Fran&ccedil;ais (2003-2004) 
  (1897-1898)</font></p>
<p><font face="Arial, Helvetica, sans-serif" size="3">Lourdes (1952-1953)</font></p>
<p><font face="Arial, Helvetica, sans-serif" size="3">Biarritz (2005-2006)</font></p>
<p><font face="Arial, Helvetica, sans-serif" size="3">Lyon OU(1932-1933)<br>
  </font></p>
<p><b><font size="6" face="Verdana, Arial, Helvetica, sans-serif"><br>
  <br>
  - Meilleure s&eacute;rie pour des joueurs </font></b></p>
<p><b><font face="Arial, Helvetica, sans-serif" size="4">4 titres cons&eacute;cutifs</font></b></p>
<p></p>
<p></p>
<p></p>
<p></p>
<p></p>
<p align="left"><b><font size="3" face="Arial, Helvetica, sans-serif">5 joueurs 
  du SBUC, de 1904 &agrave; 1907</font></b><font size="3" face="Arial, Helvetica, sans-serif">: 
  Bruneau - Dufourcq Lacassagne (2 fois ouvreur - 2 fois &frac12;-de-m&ecirc;l&eacute;e) 
  - Laporte - Tilh</font></p>
<p align="left"><font size="3" face="Arial, Helvetica, sans-serif"><b>8 joueurs 
  du Stade Toulousain, en 1994-1997 a verifier</b> </font></p>
<p align="left"><font size="3" face="Arial, Helvetica, sans-serif">Belot - Berty 
  - Califano - Castaign&egrave;de - Cazalbou - Deylaud - Miorin - Soula </font></p>
<p align="left"><font size="3" face="Arial, Helvetica, sans-serif"><b>Beno&icirc;t 
  August</b>, champion quatre fois cons&eacute;cutivement<br>
  en 2003, 2004 avec le Stade Fran&ccedil;ais et en 2005, 2006 avec le Biarritz 
  Olympique. </font></p>
<p>&nbsp;</p>
<p>&nbsp;</p>
</body>
</html>
