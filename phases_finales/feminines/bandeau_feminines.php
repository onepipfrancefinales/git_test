<html>
<head>
<meta name="description"
content="Le site non officiel du Comit� Midi Pyr�n�es de rugby : Histoire, clubs, calendrier des matches, comp�titions, r�sultats, la Coupe du Monde � Toulouse, jeux, les liens vers les sites officiels, news, interviews, French teams, competitions, history, organisations and institutions, Rugby world Cup in Toulouse, games and links to other official sites.">
<meta name="keywords"
content="Comite Midi Pyrenees de Rugby, Comite Midi Pyrenees Rugby,Stade toulousain,Colomiers,FFR,Rugby,Federation,Fran�aise,Rugbyman,Rugbymen,Sport,Ballon,Ovale,Equipe,France,Chelem,V,Nations,Webb Ellis, Brennus,Passe,Rives,Blanco,Sella,Ibanez,Transformation,Essai,M�l�e,Touche,P�nalit�,En-Avant,Terrain,Mi-temps,Stade,Maillot,XV,Quinze,Jeu,Buteur,Pilier,Talonneur,Calendrier,Match,Elite,Professionnel,Poule,Saison,Championnat,Tournoi,Coupe du Monde,Tri-Series,Arbitre,Comp�tition,Tri-Nations,Comit�s,Spanghero,Federation,Union,French,Rugby player,players,Sport,Ball,Oval,Team,Slam,Pass,Conversion,Try,Scrum,Touch,Penalty,Knock-on,Pitch,Half-time,Stadium,Jersey,XV,Fifteen,Game,Goal,kicker,Prop,forward,Hooker,Calendar,Professional,PoolSeason,Championship,Tournament,World Cup,Tri-Series,Referee,Competition,Committees,Matches">
<meta name="classification" content="Sport,Rugby">
<meta name="resource-type" content="document">
<meta name="copyright" content="Comite Midi Pyrenees de Rugby">
<meta name="author" content="Equipe Onepip">
<meta name="robots" content="All">
<title>Onepip.free.fr</title>
<script language="JavaScript">
<!--
function MM_reloadPage(init) {  //reloads the window if Nav4 resized
  if (init==true) with (navigator) {if ((appName=="Netscape")&&(parseInt(appVersion)==4)) {
    document.MM_pgW=innerWidth; document.MM_pgH=innerHeight; onresize=MM_reloadPage; }}
  else if (innerWidth!=document.MM_pgW || innerHeight!=document.MM_pgH) location.reload();
}
MM_reloadPage(true);
// -->
</script>
<?php $annee=$_GET['variable_1'];?>
   
</head>
<body link="#FFFFFF" text="#FFFFFF" VLINK="#FFFFFF" ALINK="#FFFFFF">
<div id="Layer1" style="position:absolute; width:1600px; height:73px; z-index:1; top: 88px; left: 0px"> 
  <table width="100%" border="0" height="90">
    <tr valign="top" align="center"> 
      <td colspan="16" bgcolor="006699" height="36"><font size="5" color="#FFCC00"><b> 
        </b></font><font size="5"><b><font color="#FFCC00">
        <? echo "Championnat de France";?>
        : 
        <? echo "Elite Feminine "; echo $annee;?>
        </font></b></font></td>
    </tr>
    <tr valign="top" align="center"> 
      <td bgcolor="#EAECEB" height="28" width="9%"> 
        <div align="left"><font size="5"><b><font size="2" color="#FF0000"> 
          <?php
    // On inclut le habt de la page
    
	include("../pub1.php"); ?>
          </font></b></font></div>
      </td>
      <td bgcolor="#EAECEB" height="28" valign="middle" align="center" width="34%">
        <div align="right"><font size="5"><font size="5"><b><font size="5"><b><b><font color="#FF0000" size="2"> 
          <?php $anneemoins = $annee-1;?>
          </font></b></b></font></b><font size="5"><font color="#FF0000" size="2"> 
          <?php $anneeplus = $annee+1;?>
          </font><font size="5"><font size="5"><font size="5"><font color="#FF0000" size="2"> 
          <font color="#000000">( 
          <?php echo $anneemoins;?>
          )</font></font></font></font></font></font><b><font size="5"><b><b><font size="5"><b><font size="5"><b><font color="#FF0000" size="2"> 
          </font></b></font></b> </font></b></b></font></b></font></font></div>
      </td>
      <td bgcolor="#EAECEB" height="28" valign="middle" align="center" width="19%"><font size="5"><font size="5"><b><font size="5"><b><font size="5"><b><font color="#FF0000" size="2"> 
        </font></b></font><font color="#ff0000" size="2"><a href="http://francefinalesrugby.franceserv.com/phases_finales/feminines/pagefeminines.php?variable_1=<?php echo $anneemoins;?>" target="_top"><font size="6" color="#FF0000">&lt;&lt;</font></a></font></b></font></b></font><font size="5" color="#EAECEB">nnnnne</font> 
        </font><font size="5"><b><font size="5"><a href="http://francefinalesrugby.franceserv.com/phases_finales/feminines/pagefeminines.php?variable_1=<?php echo $anneeplus;?>"target="_top"><font color="#FF0000" size="6">&gt;&gt;</font></a></font></b></font><font color="#FF0000" size="6"></font></td>
      <td bgcolor="#EAECEB" height="28" valign="middle" align="center" width="28%">
        <div align="left"><font size="5"><font size="5"><font size="2" color="#000000">( 
          <?php echo $anneeplus; ?>
          ) </font></font></font></div>
      </td>
      <td colspan="12" bgcolor="#EAECEB" height="28" valign="top" width="10%"> 
        <div align="right"><font size="5"><b> 
          <?php
    // On inclut le habt de la page
    
	include("../pub2.php"); ?>
          </b></font><font size="5"><b> </b></font></div>
      </td>
    </tr>
  </table>
</div>
<p>&nbsp;</p>

 
</body>
</html>
