<script language="JavaScript">
<!--
<!--
function MM_reloadPage(init) {  //reloads the window if Nav4 resized
  if (init==true) with (navigator) {if ((appName=="Netscape")&&(parseInt(appVersion)==4)) {
    document.MM_pgW=innerWidth; document.MM_pgH=innerHeight; onresize=MM_reloadPage; }}
  else if (innerWidth!=document.MM_pgW || innerHeight!=document.MM_pgH) location.reload();
}
MM_reloadPage(true);
// -->

function MM_jumpMenu(targ,selObj,restore){ //v3.0
  eval(targ+".location='"+selObj.options[selObj.selectedIndex].value+"'");
  if (restore) selObj.selectedIndex=0;
}
//-->
</script>
<?php

//if (isset($_GET['page'])) $page = $_GET['page']; else $page ="-";
//echo $page;


if ($page == "equipes")
	$ad = "../../Maj_champ_france/majClubs/saisieEquipe.php" ;
elseif ($page == "scores")
	$ad = "../../Maj_champ_france/majScores/saisieScore.php" ;
elseif ($page == "dates" )
	$ad = "../../Maj_champ_france/majDates/saisieDate.php" ;
	
?>


 
      
<p align="center"><font color="#FFFFFF" face="Arial, Helvetica, sans-serif"><b><font size="3">Division 
  :</font> </b></font> 
  <select name="select2" onChange="MM_jumpMenu('parent',this,0)" size="1">
    <option selected></option>
   <option value=""><b>--------------</b></option>
	<option value="<?php echo $ad ;?>?division=7150&type=<?php echo $type ;?>&annee=<?php echo $annee ;?>"><b>barrages F&eacute;d 2</b></option>
    <option value="<?php echo $ad ;?>?division=7160&type=<?php echo $type ;?>&annee=<?php echo $annee ;?>"><b>barrages F&eacute;d 3 </b></option>

<option value=""><b>--------------</b></option>
    <option value="<?php echo $ad ;?>?division=110&type=<?php echo $type ;?>&annee=<?php echo $annee ;?>"><b>Top14</b></option>
    <option value="<?php echo $ad ;?>?division=120&type=<?php echo $type ;?>&annee=<?php echo $annee ;?>"><b>Pro D2 </b></option>
	<option value="<?php echo $ad ;?>?division=115&type=<?php echo $type ;?>&annee=<?php echo $annee ;?>"><b>Accession Pro D2 Top14 </b></option>
    <option value="<?php echo $ad ;?>?division=130&type=<?php echo $type ;?>&annee=<?php echo $annee ;?>"><b>Nationale 1 </b></option>
	<option value="<?php echo $ad ;?>?division=135&type=<?php echo $type ;?>&annee=<?php echo $annee ;?>"><b>Nationale 2 </b></option>
	
	<option value="<?php echo $ad ;?>?division=140&type=<?php echo $type ;?>&annee=<?php echo $annee ;?>"><b>F&eacute;d&eacute;rale 1 J Prat </b></option>
    <option value="<?php echo $ad ;?>?division=150&type=<?php echo $type ;?>&annee=<?php echo $annee ;?>"><b>F&eacute;d&eacute;rale 2</b></option>
    <option value="<?php echo $ad ;?>?division=160&type=<?php echo $type ;?>&annee=<?php echo $annee ;?>"><b>F&eacute;d&eacute;rale 3 </b></option>

	<option value=""><b>--------------</b></option>
   
    <option value="<?php echo $ad ;?>?division=170&type=<?php echo $type ;?>&annee=<?php echo $annee ;?>"><b>Honneur</b></option>
    <option value="<?php echo $ad ;?>?division=180&type=<?php echo $type ;?>&annee=<?php echo $annee ;?>"><b>Promotion </b></option>
    <option value="<?php echo $ad ;?>?division=190&type=<?php echo $type ;?>&annee=<?php echo $annee ;?>"><b>1re s&eacute;rie </b></option>
    <option value="<?php echo $ad ;?>?division=200&type=<?php echo $type ;?>&annee=<?php echo $annee ;?>"><b>2me s&eacute;rie </b></option>
    <option value="<?php echo $ad ;?>?division=210&type=<?php echo $type ;?>&annee=<?php echo $annee ;?>"><b>3me s&eacute;rie</b></option>
    <option value="<?php echo $ad ;?>?division=220&type=<?php echo $type ;?>&annee=<?php echo $annee ;?>"><b>4me s&eacute;rie</b></option>
	
	<option value=""><b>--------------</b></option>
	
	<option value="<?php echo $ad ;?>?division=235&type=<?php echo $type ;?>&annee=<?php echo $annee ;?>"><b>Espoir Elite</b></option>
	<option value="<?php echo $ad ;?>?division=240&type=<?php echo $type ;?>&annee=<?php echo $annee ;?>"><b>Espoir  Fed1</b></option>
    <option value="<?php echo $ad ;?>?division=250&type=<?php echo $type ;?>&annee=<?php echo $annee ;?>"><b>F&eacute;d&eacute;rale B</b></option>
    <option value="<?php echo $ad ;?>?division=260&type=<?php echo $type ;?>&annee=<?php echo $annee ;?>"><b>Excellence B</b></option>
    <option value="<?php echo $ad ;?>?division=270&type=<?php echo $type ;?>&annee=<?php echo $annee ;?>"><b>R&eacute;s Honneur</b></option>
	<option value="<?php echo $ad ;?>?division=990&type=<?php echo $type ;?>&annee=<?php echo $annee ;?>"><b>Barrages H/PH/S1</b></option>
	<option value="<?php echo $ad ;?>?division=995&type=<?php echo $type ;?>&annee=<?php echo $annee ;?>"><b>Barrages S2/S3/S4</b></option>
    <option value="<?php echo $ad ;?>?division=370&type=<?php echo $type ;?>&annee=<?php echo $annee ;?>"><b>370</b></option>
    <option value="<?php echo $ad ;?>?division=380&type=<?php echo $type ;?>&annee=<?php echo $annee ;?>"><b>380</b></option>
    <option value="<?php echo $ad ;?>?division=390&type=<?php echo $type ;?>&annee=<?php echo $annee ;?>"><b>390</b></option>
    <option value="<?php echo $ad ;?>?division=400&type=<?php echo $type ;?>&annee=<?php echo $annee ;?>"><b>400</b></option>
    <option value="<?php echo $ad ;?>?division=410&type=<?php echo $type ;?>&annee=<?php echo $annee ;?>"><b>410</b></option>
	<option value="<?php echo $ad ;?>?division=420&type=<?php echo $type ;?>&annee=<?php echo $annee ;?>"><b>420</b></option>
  
  	<option value=""><b>--------------</b></option>
  
    <option value="<?php echo $ad ;?>?division=280&type=<?php echo $type ;?>&annee=<?php echo $annee ;?>"><b>Elite 1</b></option>
    <option value="<?php echo $ad ;?>?division=285&type=<?php echo $type ;?>&annee=<?php echo $annee ;?>"><b>Elite 2</b></option>
    <option value="<?php echo $ad ;?>?division=290&type=<?php echo $type ;?>&annee=<?php echo $annee ;?>"><b>F&eacute;d&eacute;rale 1</b></option>
	<option value="<?php echo $ad ;?>?division=295&type=<?php echo $type ;?>&annee=<?php echo $annee ;?>"><b>F&eacute;d&eacute;rale 2</b></option>
  
    <option value=""><b>--------------</b></option>
	
    <option value="<?php echo $ad ;?>?division=325&type=<?php echo $type ;?>&annee=<?php echo $annee ;?>"><b>Crabos</b></option>
    <option value="<?php echo $ad ;?>?division=330&type=<?php echo $type ;?>&annee=<?php echo $annee ;?>"><b>Balandrade U18</b></option>
	<option value="<?php echo $ad ;?>?division=360&type=<?php echo $type ;?>&annee=<?php echo $annee ;?>"><b>Alamercery</b></option>
	<option value="<?php echo $ad ;?>?division=365&type=<?php echo $type ;?>&annee=<?php echo $annee ;?>"><b>Gaudermen</b></option>
	<option value="<?php echo $ad ;?>?division=370&type=<?php echo $type ;?>&annee=<?php echo $annee ;?>"><b>Teuliere U16</b></option>
  
  </select>
  <br>
