<html>
<head>

<link type="text/css" rel="stylesheet" href="sommaire.css">
</head>
<body>

<script type="text/javascript" language="javascript">
		 function twFermer() {
		 window.close();
		 }
  </script>     
     <div align = "center">
            <input type="button" onClick="twFermer()" value="Fermer" name="button2">
       </div>
	  <hr/>

<?php

$cmt = $_GET['cmt'];

//*******************************************************************
//*                                                                 *
//*                       Réglement féderale 1                      *
//*                                                                 *
//*******************************************************************
if ($cmt == 'f1' or $cmt==990140)
{
?>
<p class="reg_nomDivision">F&eacute;d&eacute;rale 1 </p>

<p class="reg_titre">1.Phase finale </p>
<p class="reg_sousTitre">1.1 Les qualifi&eacute;s (16)</p>
<p class="reg_texte">
Sont qualifi&eacute;s directement pour les 1/8&egrave;me de finale du championnat de France, les 1er, 2e de chaque poules <br><br>
Sont qualifi&eacute;s pour les barrages les équipes classées 3me, 4me, 5me et 6me.
Les vainqueurs de ces barrages participeront aux 1/8&egrave;me du champ de France.<p>
    
<p class="reg_sousTitre">1.2 Modalit&eacute;s des  rencontres</p>
<p class="reg_texte">  Les 1/8&egrave;mes , les quarts se jouent en rencontres Aller 
  Retour ( les rencontres Aller auront lieu sur les terrains des &eacute;quipes 
  les moins bien class&eacute;es) .<br>
  les demi-finales et la finale se jouent sur une rencontre et sur terrain neutre.  </p>
  
<p class="reg_titre">2.Accession à la division Nationale 2</p>
<p class="reg_texte">	
  Les équipes qualifiées en demi-finales seront promues en Nationale 2</p>
  
  
<p class="reg_titre">3.Rel&egrave;gation en F&eacute;d&eacute;rale 2</p>
<p class="reg_texte">Les équipes classées 11me et 12me seront relèguées en f&eacute;d&eacute;rale 2.</p>

<p class="reg_titre">4.Calendrier</p>
<p class="reg_texte">
  Barrages : le 28 avril 2024.<br/>
  Huitième A/R : les 05 et 12 mai 2024.<br/>
  Quarts A/R : les 19 et 26 mai 2024.<br/>
  Demi : le 09 juin 2024.<br/>
  Finale : le 16 juin 2024<br/></p>
<?php
}
//*******************************************************************
//*                                                                 *
//*           Réglement fédérale 2 / fédérale B                     *
//*                                                                 *
//*******************************************************************
elseif ($cmt == 'fed2' or $cmt==990150)
{
?>
<p class="reg_nomDivision">F&eacute;d&eacute;rale 2 </p>

<p class="reg_titre">1.Phase finale </p>
<p class="reg_sousTitre">1.1 les qualifi&eacute;s (32)</p>
<p class="reg_texte">
Sont qualifi&eacute;s directement pour les 1/16&egrave;me A/R du championnat de France, les 1er et 2e de chaque poule <br><br>
Sont qualifi&eacute;s pour les barrages les équipes classées 3me, 4me, 5me et 6me.
Les vainqueurs de ces barrages participeront aux 16&egrave;me A/R du champ de France.</p>
   
 
<p class="reg_sousTitre">1.2 Modalit&eacute;s des rencontres</p>
<p class="reg_texte">
  Les 1/16&egrave;mes et 1/8&egrave;mes de finale se jouent en rencontres Aller 
  Retour ( Les rencontres Aller auront lieu sur les terrains des &eacute;quipes 
  les moins bien class&eacute;es).<br>
  Les quarts, demi-finales et la finale se jouent sur une rencontre sur terrain neutre. </p>
  
<p class="reg_titre">2.Accession en F&eacute;d&eacute;rale 1 </p>
<p class="reg_texte">	
 Les 8 &eacute;quipes qualifi&eacute;es en quarts de finale seront promues en F&eacute;d&eacute;rale 1 la saison suivante. 24 equipes pourront acceder à la fédérale 1</p>
 
<p class="reg_titre">3.Rel&egrave;gation en F&eacute;d&eacute;rale 3</p>
<p class="reg_texte">Les équipes classées 11me et 12 me de chaque poule seront relèguées en  F&eacute;d&eacute;rale 3 la saison suivante.</p>
    
<p class="reg_titre">4.Calendrier </p>
 <p class="reg_texte">
  Barrages : le 05 mai 2024.<br/>
  Seizième A/R : les 12 et 19 mai 2024.<br/>
  Huitième A/R : les 26 et 02 juin 2024.<br/>
  Quarts : le 16 juin mai 2024.<br/>
  Demi : le 23 juin 2024.<br/>
  Finale : le 30 juin 2024.<br/></p>
  
  
<p class="reg_nomDivision">F&eacute;d&eacute;rale B </p>
 

<p class="reg_titre">1.Phase finale </p>
<p class="reg_sousTitre">1.1 les qualifi&eacute;s (32)</p>
<p class="reg_texte">
Sont qualifi&eacute;s directement pour les 1/16&egrave;me du championnat de France, les 1er et 2e de chaque poules <br><br>
Sont qualifi&eacute;s pour les barrages les équipes classées 3me, 4me, 5me et 6me.
Les vainqueurs de ces barrages participeront aux 16&egrave;me du champ de France.</p>
   
<p class="reg_sousTitre">1.2 Modalit&eacute;s des rencontres</u><br>
<p class="reg_texte">
  Toutes les confrontations ont lieu sur une seule rencontre. </p>

<p class="reg_titre">2.Calendrier </p>
<p class="reg_texte">
  Barrages : le 05 mai 2024.<br/>
  Seizième : le 12 mai 2024.<br/>
  Huitième : le 19 mai 2024.<br/>
  Quarts : le 02 juin 2024.<br/>
  Demi-finale : le 09 juin 2024.<br/>
  Finale : le 23 juin 2024.<br/></p>


<?php
}

//*******************************************************************
//*                                                                 *
//*           Réglement fédérale 3 / Excellence B                   *
//*                                                                 *
//*******************************************************************
elseif ($cmt == 'fed3GS' or $cmt == 'fed3NE' or $cmt == '991161' or $cmt == '991261' or $cmt == '992161' or $cmt == '992261')
{
?>

<p class="reg_nomDivision">F&eacute;d&eacute;rale 3 </p>

<p class="reg_titre">1.Phase finale </p>
<p class="reg_sousTitre">1.1 Les qualifi&eacute;s (64)</p>
<p class="reg_texte">
Sont qualifi&eacute;s directement pour les 1/32&egrave;me A/R du championnat de France, les 1er, 2&egrave;me et 3&egrave;me de chaque poule <br><br>
Sont qualifi&eacute;s pour les barrages les équipes classées 4&egrave;me de chaque poule et les 2 meilleurs 5&egrave;me.
Les vainqueurs de ces barrages participeront aux 1/32&egrave;me A/R du champ de France.</p>
   
<p class="reg_sousTitre">1.2 Modalit&eacute;s des rencontres</p>
<p class="reg_texte">
  Les 1/32&egrave;mes et 1/16&egrave;mes de finale se jouent en rencontres Aller 
  Retour ( Les rencontres Aller auront lieux sur les terrains des &eacute;quipes 
  les moins bien class&eacute;es).<br>
  Les huitièmes, les quarts, demi-finales et la finale se jouent sur une rencontre sur terrain neutre. 
</p> 
  
<p class="reg_titre">2.Accession en F&eacute;d&eacute;rale 2 </p>
<p class="reg_texte">	
  Les 16 &eacute;quipes qualifi&eacute;es en 1/8&egrave;me de finale seront promues en F&eacute;d&eacute;rale 2 la saison suivante.</p>


<p class="reg_titre">3.Rel&egrave;gation </p>
<p class="reg_texte">
Les équipes classées 9&egrave;me et 10&egrave;me de chaque poule seront relèguées en régionale 1 la saison prochaine.</p>

 <p class="reg_titre">4.Calendrier</p>
 <p class="reg_texte"> 
  Barrages : le 21 Avril 2024.<br/>
  Trente huitième A/R : les 28 avril et 05 Mai 2024.<br/>
  Seizième A/R : les 19 et 26 mai 2024.<br/>
  Huitième : le 02 juin 2024.<br/>
  Quarts : le 16 juin mai 2024.<br/>
  Demi : le 23 juin 2024.<br/>
  Finale : le 30 juin 2024<br/>
  </p>
  

<p class="reg_nomDivision">Excellence B</p>

<p class="reg_titre">1.Phase finale </p>
<p class="reg_sousTitre">1.1 Les qualifi&eacute;s (64)</p>
<p class="reg_texte">
Sont qualifi&eacute;s directement pour les 1/32&egrave;me du championnat de France, les 1er, 2&egrave;me et 3&egrave;me de chaque poule <br><br>
Sont qualifi&eacute;s pour les barrages les équipes classées 4&egrave;me de chaque poule et les 2 meilleurs 5&egrave;me.
Les vainqueurs de ces barrages participeront aux 1/32&egrave;me du champ de France.</p>
 
<p class="reg_sousTitre">1.2 Modalit&eacute;s des rencontres</p>
<p class="reg_texte">  Toutes les confrontations ont lieu sur une seule rencontre. </p> 

<p class="reg_titre">2.Calendrier</p>
<p class="reg_texte"> 
  Barrages : le 21 Avril 2024.<br/>
  Trente huitième : le 28 Avril 2024.<br/>
  Seizième : le 12 mai 2024.<br/>
  Huitième : le 19 mai 2024.<br/>
  Quarts : le 02 juin mai 2024.<br/>
  Demi : le 09 juin 2024.<br/>
  Finale : le 23 juin 2024.<br/>
  </p>

<?php
}
 
//*******************************************************************
//*                                                                 *
//*                       Réglement Elite 1                         *
//*                                                                 *
//*******************************************************************



elseif ($cmt == 'elite1' or $cmt == '880280')
{
?>

<p class="reg_nomDivision">Elite 1 </p>

<p class="reg_titre">1.Phase finale </p>
<p class="reg_sousTitre">1.1 Les qualifi&eacute;s (8)</p>
<p class="reg_texte">
Sont qualifi&eacute;s directement pour les quarts du championnat de France, les 1er 2&egrave;me, 3&egrave;me et 4&egrave;me de chaque poule </p>

<p class="reg_sousTexte">1.2 Modalit&eacute;s des rencontres</p>
<p class="reg_texte">
 Les quarts de finale se jouent sur le terrain de l'équipe la mieux mieux classée.
Les demi-finales et la finale se jouent sur terrain neutre.</p> 
 
<p class="reg_titre">2.Rel&egrave;gation en Elite 2 </p>
<p class="reg_texte">
Des rencontres croiséés opposeront les 5&egrave;me et 6&egrave;me de chaque poule.
Les perdants de ces confrontations se rencontreront en match A/R. Le perdant de ce match sera relègue en Elite 2.</p>

<p class="reg_titre">3.Calendriers</p>
<p class="reg_sousTitre">3.1 Pour le titre</p> 
<p class="reg_texte">
  Quarts : le 21 mai 2023.<br/>
  Demi : le 03 juin 2023.<br/>
  Finale : le 11 juin 2023<br/></p>
  
  <p class="reg_sousTitre">3.2 Pour le maintien </p>
  <p class="reg_texte">
  Premier tour de maintien : le 21 mai 2023.<br/>
  Match de maintien A/R : les 04 et 11 juin 2023.<br/>
</p>

<?php
}
 
//*******************************************************************
//*                                                                 *
//*                       Réglement Elite 2                         *
//*                                                                 *
//*******************************************************************
elseif ($cmt == 'elite2' or $cmt == '880285')
{
?>

<p class="reg_texte">Elite 2 </p>

<p class="reg_titre">1.Phase finale </p>
<p class="reg_sousTexte">1.1 les qualifi&eacute;s (4)</p>
<p class="reg_texte">
Sont qualifi&eacute;s en demi finale du championnat de France, les 1er, 2me, 3me et 4me de chaque poules </p>

<p class="reg_sousTitre">1.2 Modalit&eacute;s des rencontres</u><br>
<p class="reg_texte">
    Les demies finale se jouent sur le terrain de l'équipe la mieux mieux classée et la finale se jouent sur terrain neutre. </p> 
  
<p class="reg_titre">2.Accession en Elite 2 </p>
<p class="reg_texte">
Les 8 &eacute;quipes qualifi&eacute;es en 8me de finale seront promues en F&eacute;d&eacute;rale 2 la saison suivante.</p>

<p class="reg_titre">3.Rel&egrave;gation en Fédérale 1 </p>
<p class="reg_texte">
Les équipes classées 10me et 11me seront relègués en Fédérale 1 la saison suivante.</p>

<p class="reg_titre"> 4.Calendrier  </p>
<p class="reg_texte">
Demi : le 04 juin 2023.<br/>
Finale : le 11 juin 2023<br/>
  </p>
 

<?php
}
  

//*******************************************************************
//*                                                                 *
//*                       Réglement fédérale 1    (féminini)        *
//*                                                                 *
//*******************************************************************
elseif ($cmt == 'fem'  or $cmt == '880190')
{
?>

<p class="reg_nomDivision">F&eacute;d&eacute;rale 1 </p>

<p class="reg_titre">1.Phase finale </p>
<p class="reg_sousTitre">1.1 les qualifi&eacute;s (8)</p>
<p class="reg_texte">
Sont qualifi&eacute;s directement pour les quarts de finale du championnat de France, les 1er et 2e de chaque poules </p>

 
<p class="reg_sousTitre">1.2 Modalit&eacute;s des   rencontres</p>
<p class="reg_texte">
  Les quarts de finale se jouent sur le terrain de l'équipe la mieux mieux classée.
  Les demies finale et la finale se jouent sur terrain neutre. </p> 
  
<p class="reg_titre">2.Accession en Elite 2 </p>
<p class="reg_texte">	
  L'équipe championne de France sera promu en Elite 2 la saison suivante.</p>
 
<p class="reg_titre">3.Rel&egrave;gation en Fédérale 2 
<p class="reg_texte">
Les équipes classées 8me de chaque poule seront relèguées en fédérale 2 la saison prochaine.</p>

<p class="reg_titre">  4.Calendrier</p>
<p class="reg_texte">
  Quarts : le 21 mai 2023.<br/>
  Demi : le 28 mai 2023.<br/>
  Finale : le 11 juin 2023<br/></p>
 

<?php
}
?>  

	<hr/><br/>
 
     <div align = "center">
            <input type="button" onClick="twFermer()" value="Fermer" name="button2">
     </div>

</body>
</html>