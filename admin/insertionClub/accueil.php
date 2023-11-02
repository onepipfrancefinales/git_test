<html>
<head>
<title>Untitled Document</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<script language="JavaScript">
<!--
function MM_jumpMenu(targ,selObj,restore){ //v3.0
  eval(targ+".location='"+selObj.options[selObj.selectedIndex].value+"'");
  if (restore) selObj.selectedIndex=0;
}
//-->
</script>
</head>

<body bgcolor="#FFFFFF" text="#000000">
<p><font size="5"><b>Insertion d'un nouveau club dans les tables</b></font></p>
<p><font size="4" face="Arial, Helvetica, sans-serif">bdclubs (Identifiants du club)<br>
  infosClub (infos sur le clubs)<br>
  bdsaisons (historique des saisons pr&eacute;c&eacute;dentes)</font></p>
  <hr />
<form name="form1" method="POST" action="retour.php">
  <p></p>
  <p><font size="4" face="Arial, Helvetica, sans-serif">Nom Usuel : 
    <input type="text" name="nom">
    </font></p>
  <p><font size="4" face="Arial, Helvetica, sans-serif">Nom complet : 
    <input type="text" name="nomComplet">
    </font></p>
	 <p><font size="4" face="Arial, Helvetica, sans-serif">Saison : 
    <input type="text" name="saison">
    </font></p>
  <p><font size="4" face="Arial, Helvetica, sans-serif">Pour saisir l'id consulter 
    la liste des clubs par Id (<a href="../consultation/listeClubsParNom.php" target="_blank">liste 
    par ID</a>)</font></p>
  <p><font size="4" face="Arial, Helvetica, sans-serif">Id (2029076): 
    <input type="text" name="id">
    </font></p>
  <p><font size="4" face="Arial, Helvetica, sans-serif">IdFFR (1234M): 
    <input type="text" name="idffr">
    </font></p>
  <p><font size="4" face="Arial, Helvetica, sans-serif">type d'&eacute;quipe : 
    <select name="type" size="1">
      <option selected>Type d'&eacutequipe</option>
      <option value="F">Equipe f&eacuteminine</option>
      <option value="M">Equipe Masculine</option>
    </select>
    </font></p>
  <p><font size="4" face="Arial, Helvetica, sans-serif">Comite : 
    <select name="comite" size="1">
      <option selected>Comit&eacute;</option>
      <option value="(AP)">Alpes</option>
      <option value="(AL)">Alsace Lorraine</option>
      <option value="(AB)">Armagnac Bigorre</option>
      <option value="(AU)">Auvergne</option>
      <option value="(BE)">B&eacute;arn</option>
      <option value="(BG)">Bourgogne</option>
      <option value="(BR)">Bretagne</option>
      <option value="(CE)">Centre</option>
      <option value="(C)">Corse</option>
      <option value="(CBL)">C&ocirc;te Basque Landes</option>
      <option value="(CA)">C&ocirc;te d'Argent</option>
      <option value="(CAZ)">C&ocirc;te d'Azur</option>
      <option value="(DA)">Dr&ocirc;me Ard&egrave;che</option>
      <option value="(FL)">Flandres</option>
      <option value="(FC)">Franche Comt&eacute;</option>
      <option value="(IDF)">Ile de France</option>
      <option value="(LD)">Languedoc</option>
      <option value="(LM)">Limousin</option>
      <option value="(LY)">Lyonnais</option>
      <option value="(MPY)">Midi Pyr&eacute;n&eacute;es</option>
      <option value="(N)">Normandie</option>
      <option value="(PL)">Pays de Loire</option>
      <option value="(PA)">P&eacute;rigord Agenais</option>
      <option value="(PCH)">Poitou Charente</option>
      <option value="(PR)">Provence</option>
      <option value="(PC)">Pays Catalan</option>
    </select>
    </font></p>
  <p><font size="4" face="Arial, Helvetica, sans-serif">Ligue : 
    <select name="ligue"  size="1">
      <option selected>Ligue</option>
      <option value="10">Auvergne Rhone Alpes</option>
      <option value="11">Bourgogne Franche Comte</option>
      <option value="12">Bretagne</option>
      <option value="13">Centre Val de Loire</option>
      <option value="14">Corse</option>
      <option value="15">Grand Est</option>
      <option value="16">Hauts de France</option>
      <option value="17">Ile de France</option>
      <option value="18">Normandie</option>
      <option value="19">Nouvelle Aquitaine</option>
      <option value="20">Occitanie</option>
      <option value="21">Pays de la Loire</option>
      <option value="22">Provence Alpes Cote d'Azur</option>
    </select>
    </font> </p>
  <p>&nbsp;</p>
  <p>
    <input type="submit" name="Submit" value="Valider">
  </p>
</form>
</body>
</html>
