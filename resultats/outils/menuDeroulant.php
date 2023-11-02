<html>
<head>
<title>Untitled Document</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
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
</head>

<?php $type=$_POST['type']; ?>
<?php $annee=$_GET['annee']; ?>
<?php

$type=$_GET['type'];
//$type = 0 ;

if ( $type == 1)
	$ad = MajPhaseFinaleTerr1 ;
elseif ($type == 2)
	 $ad = MajPhaseFinaleTerr2 ;
elseif ($type == 3)
	 $ad = MajPhaseFinaleTerr3 ;
?>

<body bgcolor="#FFFFFF" text="#000000" link="#000000">
<table width="171" height="58">
  <tr valign="middle" align="center" bgcolor="#000000"> 
    <td height="51" bgcolor="#006699" width="163" valign="top"> 
      <p> 
        <select name="select2" onChange="MM_jumpMenu('parent',this,0)" size="1">
          <option selected>Par comit&eacute;</option>
          <option value="http://francefinalesrugby.franceserv.com/phasesfinalesterr/<?php echo $ad ;?>.php?var=phplyap&type=<?php echo $type ; ?>&annee=<?php echo $annee ;?>"><b>Alpes</b></option>
          <option value="http://francefinalesrugby.franceserv.com/phasesfinalesterr/<?php echo $ad ;?>.php?var=phpal&type=<?php echo $type ; ?>&annee=<?php echo $annee ;?>"><b>Alsace 
          Lorraine</b></option>
          <option value="http://francefinalesrugby.franceserv.com/phasesfinalesterr/<?php echo $ad ;?>.php?var=phpab&type=<?php echo $type ; ?>&annee=<?php echo $annee ;?>"><b>Armagnac 
          Bigorre</b></option>
          <option value="http://francefinalesrugby.franceserv.com/phasesfinalesterr/<?php echo $ad ;?>.php?var=phpau&type=<?php echo $type ; ?>&annee=<?php echo $annee ;?>"><b>Auvergne</b></option>
          <option value="http://francefinalesrugby.franceserv.com/phasesfinalesterr/<?php echo $ad ;?>.php?var=phpbe&type=<?php echo $type ; ?>&annee=<?php echo $annee ;?>"><b>Bearn</b></option>
          <option value="http://francefinalesrugby.franceserv.com/phasesfinalesterr/<?php echo $ad ;?>.php?var=phpbg&type=<?php echo $type ; ?>&annee=<?php echo $annee ;?>"><b>Bourgogne</b></option>
          <option value="http://francefinalesrugby.franceserv.com/phasesfinalesterr/<?php echo $ad ;?>.php?var=phpbr&type=<?php echo $type ; ?>&annee=<?php echo $annee ;?>"><b>Bretagne</b></option>
          <option value="http://francefinalesrugby.franceserv.com/phasesfinalesterr/<?php echo $ad ;?>.php?var=phpce&type=<?php echo $type ; ?>&annee=<?php echo $annee ;?>"><b>Centre</b></option>
          <option value="http://francefinalesrugby.franceserv.com/phasesfinalesterr/<?php echo $ad ;?>.php?var=phpcbl&type=<?php echo $type ; ?>&annee=<?php echo $annee ;?>"><b>Cote 
          Basque Landes</b></option>
          <option value="http://francefinalesrugby.franceserv.com/phasesfinalesterr/<?php echo $ad ;?>.php?var=phpca&type=<?php echo $type ; ?>&annee=<?php echo $annee ;?>"><b>Cote 
          d'Argent</b></option>
          <option value="http://francefinalesrugby.franceserv.com/phasesfinalesterr/<?php echo $ad ;?>.php?var=phplyda&type=<?php echo $type ; ?>&annee=<?php echo $annee ;?>"><b>Drome 
          Ardeche</b></option>
          <option value="http://francefinalesrugby.franceserv.com/phasesfinalesterr/<?php echo $ad ;?>.php?var=phpfl&type=<?php echo $type ; ?>&annee=<?php echo $annee ;?>"><b>Flandres</b></option>
          <option value="http://francefinalesrugby.franceserv.com/phasesfinalesterr/<?php echo $ad ;?>.php?var=phpidf&type=<?php echo $type ; ?>&annee=<?php echo $annee ;?>"><b>Ile 
          de France</b></option>
          <option value="http://francefinalesrugby.franceserv.com/phasesfinalesterr/<?php echo $ad ;?>.php?var=phpld&type=<?php echo $type ; ?>&annee=<?php echo $annee ;?>"><b>Languedoc</b></option>
          <option value="http://francefinalesrugby.franceserv.com/phasesfinalesterr/<?php echo $ad ;?>.php?var=phplm&type=<?php echo $type ; ?>&annee=<?php echo $annee ;?>"><b>Limousin</b></option>
          <option value="http://francefinalesrugby.franceserv.com/phasesfinalesterr/<?php echo $ad ;?>.php?var=phply&type=<?php echo $type ; ?>&annee=<?php echo $annee ;?>"><b>Lyonnais</b></option>
          <option value="http://francefinalesrugby.franceserv.com/phasesfinalesterr/<?php echo $ad ;?>.php?var=Phpmpy&type=<?php echo $type ; ?>&annee=<?php echo $annee ;?>"><b>Midi 
          Pyr&eacute;n&eacute;es</b></option>
          <option value="http://francefinalesrugby.franceserv.com/phasesfinalesterr/<?php echo $ad ;?>.php?var=phpn&type=<?php echo $type ; ?>&annee=<?php echo $annee ;?>"><b>Normandie</b></option>
          <option value="http://francefinalesrugby.franceserv.com/phasesfinalesterr/<?php echo $ad ;?>.php?var=phpr&type=<?php echo $type ; ?>&annee=<?php echo $annee ;?>"><b>Pays 
          Catalan</b></option>
          <option value="http://francefinalesrugby.franceserv.com/phasesfinalesterr/<?php echo $ad ;?>.php?var=phppl&type=<?php echo $type ; ?>&annee=<?php echo $annee ;?>"><b>Pays 
          de Loire</b></option>
          <option value="http://francefinalesrugby.franceserv.com/phasesfinalesterr/<?php echo $ad ;?>.php?var=phppa&type=<?php echo $type ; ?>&annee=<?php echo $annee ;?>"><b>Périgord 
          Agenais</b></option>
          <option value="http://francefinalesrugby.franceserv.com/phasesfinalesterr/<?php echo $ad ;?>.php?var=phppch&type=<?php echo $type ; ?>&annee=<?php echo $annee ;?>"><b>Poitou 
          Charente</b></option>
          <option value="http://francefinalesrugby.franceserv.com/phasesfinalesterr/<?php echo $ad ;?>.php?var=phppr&type=<?php echo $type ; ?>&annee=<?php echo $annee ;?>"><b>Provence</b></option>
        </select>
        <br>
      </p>
      <p><font color="#FFFFFF"><b>Choix d'un comit&eacute;</b></font></p>
      </td>
  </tr>
  <tr valign="middle" align="center" bgcolor="#000000">
    <td height="45" bgcolor="#000000" width="163" valign="top"><font size="6"><b><font color="#FFFFFF" face="Arial, Helvetica, sans-serif">3</font></b></font></td>
  </tr>
</table>
</body>
</html>





