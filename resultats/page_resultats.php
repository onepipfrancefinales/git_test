<?php require ("../saison.php");

require ("../saison.php");
require ("../consultation/fonctions.php");
require ("../connect/connexion1.php") ; 

		$tabLigue= 	array(10,11,12,13,14,15,16,17,18,19,20,21,22);
		
		foreach ($tabLigue as $idLigue)
		{
		if ($idLigue == 10)
			$sigleLigue = "ara";
		elseif ($idLigue == 11)
			$sigleLigue = "bre";
		elseif ($idLigue == 12)
			$sigleLigue = "bfc";
		elseif ($idLigue == 13)
			$sigleLigue = "cvl";
		elseif ($idLigue == 14)
			$sigleLigue = "cor";	
		elseif ($idLigue == 15)
			$sigleLigue = "ges";
		elseif ($idLigue == 16)
			$sigleLigue = "hdf";
		elseif ($idLigue == 17)
			$sigleLigue = "idf";
		elseif ($idLigue == 18)
			$sigleLigue = "nor";
		elseif ($idLigue == 19)
			$sigleLigue = "naq";
		elseif ($idLigue == 20)
			$sigleLigue = "occ";
		elseif ($idLigue == 21)
			$sigleLigue = "pdl";
		elseif ($idLigue == 22)
			$sigleLigue = "pca";
			
		//echo $sigleLigue."PRO";echo "<br />";
			
		structureLigue($idLigue, $bdd); 
		${$sigleLigue."PRO1"} = ($d110); 
		${$sigleLigue."PRO2"} = ($d120); 
		${$sigleLigue."NAT1"} = ($d130);
		${$sigleLigue."NAT2"} = ($d135);
		${$sigleLigue."FED1"} = ($d140); 
		${$sigleLigue."FED2"} = ($d150); 
		${$sigleLigue."FED3"} = ($d160); 
		${$sigleLigue."REG1"} = ($d171); 
		${$sigleLigue."REG2"} = ($d181);
		${$sigleLigue."REG3"} = ($d191);
		//$araFEM = ($d281 + $d285+ $d291 + $d301);
		${"clubs".$sigleLigue} = ${$sigleLigue."PRO1"} + ${$sigleLigue."PRO2"} + ${$sigleLigue."FED1"} + ${$sigleLigue."FED2"} + ${$sigleLigue."FED3"} +	${$sigleLigue."REG1"} + ${$sigleLigue."REG2"} + ${$sigleLigue."REG3"};
		}

$pro1 = $araPRO1 + $brePRO1 + $bfcPRO1 + $cvlPRO1 + $corPRO1 + $gesPRO1 + $hdfPRO1 + $idfPRO1 + $norPRO1 + $naqPRO1 + $occPRO1 + $pdlPRO1 + $pcaPRO1;
$pro2 = $araPRO2 + $brePRO2 + $bfcPRO2 + $cvlPRO2 + $corPRO2 + $gesPRO2 + $hdfPRO2 + $idfPRO2 + $norPRO2 + $naqPRO2 + $occPRO2 + $pdlPRO2 + $pcaPRO2;
$nat1 = $araNAT1 + $breNAT1 + $bfcNAT1 + $cvlNAT1 + $corNAT1 + $gesNAT1 + $hdfNAT1 + $idfNAT1 + $norNAT1 + $naqNAT1 + $occNAT1 + $pdlNAT1 + $pcaNAT1;
$nat2 = $araNAT2 + $breNAT2 + $bfcNAT2 + $cvlNAT2 + $corNAT2 + $gesNAT2 + $hdfNAT2 + $idfNAT2 + $norNAT2 + $naqNAT2 + $occNAT2 + $pdlNAT2 + $pcaNAT2;
$fed1 = $araFED1 + $breFED1 + $bfcFED1 + $cvlFED1 + $corFED1 + $gesFED1 + $hdfFED1 + $idfFED1 + $norFED1 + $naqFED1 + $occFED1 + $pdlFED1 + $pcaFED1;
$fed2 = $araFED2 + $breFED2 + $bfcFED2 + $cvlFED2 + $corFED2 + $gesFED2 + $hdfFED2 + $idfFED2 + $norFED2 + $naqFED2 + $occFED2 + $pdlFED2 + $pcaFED2;
$fed3 = $araFED3 + $breFED3 + $bfcFED3 + $cvlFED3 + $corFED3 + $gesFED3 + $hdfFED3 + $idfFED3 + $norFED3 + $naqFED3 + $occFED3 + $pdlFED3 + $pcaFED3;
$reg1 = $araREG1 + $breREG1 + $bfcREG1 + $cvlREG1 + $corREG1 + $gesREG1 + $hdfREG1 + $idfREG1 + $norREG1 + $naqREG1 + $occREG1 + $pdlREG1 + $pcaREG1;
$reg2 = $araREG2 + $breREG2 + $bfcREG2 + $cvlREG2 + $corREG2 + $gesREG2 + $hdfREG2 + $idfREG2 + $norREG2 + $naqREG2 + $occREG2 + $pdlREG2 + $pcaREG2;
$reg3 = $araREG3 + $breREG3 + $bfcREG3 + $cvlREG3 + $corREG3 + $gesREG3 + $hdfREG3 + $idfREG3 + $norREG3 + $naqREG3 + $occREG3 + $pdlREG3 + $pcaREG3;

?>
<!DOCTYPE html>
<head>
	<meta name="description"
	content="Tout sur le comité territorial <?php echo $titre;?> : Présentation du comité (Bureau; adresse; contact mel; contact site officiel du comité); les effectifs; les palmarès nationaux; les palmares territoriaux et l'ensemble des clubs composant le comité avec un lien pour acceder aux différents clubs.">
	<meta name="keywords"
	content="comité Bourgogne,Comite Midi Pyrenees de Rugby,Comite Midi Pyrenees Rugby,Stade toulousain,Colomiers,FFR,Rugby,Federation,Francaise,Rugbyman,Rugbymen,Sport,Ballon,Ovale,">
	<meta name="classification" content="Sport,Rugby">
	<meta name="resource-type" content="document">
	<meta name="copyright" content="Comite Midi Pyrenees de Rugby">
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta name="author" content="Equipe Onepip">
	<meta name="robots" content="All">
	<link type="text/css" rel="stylesheet" href="../formulaireDG.css">
	<link type="text/css" rel="stylesheet" href="../ligne1.css"/>
	<link type="text/css" rel="stylesheet" href="../lienNoir.css"/>
	
	
	<title>Comit&eacute; territoriaux   </title>
</head>


<body>
  <table width="1250" align="center" height="639">
    <tr valign="middle" align="center" ><td colspan="3" height="74"><font color="#FFFFFF"> <?php include("../images/page_image_al.php");?>
        </font> </td>
    </tr>
    <tr valign="middle" align="center" bgcolor="#000000"><td height="26" colspan="3"><font color="#FFFFFF"><?php include("../01ligne.php");   ?> </font></td>
    </tr>
    <tr valign="middle" align="center" bgcolor="#FFFFFF"> 
       <td colspan="3" height="26"><table width="1200" border="0" align="center"></td>
     <tr> 
        <td><?php include("../pub/pub_displayHorizontal.php");?></td>
    </tr>
  </table>
	  
    </tr>
    <tr valign="middle" align="center" bgcolor="#000000"> 
      <td width="225" height="1703" bgcolor="#006699" align="center" valign="top"> 
        <div align="center"><?php    include("../01gauche.php");  ?></div></td>
      <td bgcolor="#ffffff" height="1703" valign="top" width="800"> 
        <div align="center"> 
          <p>&nbsp;</p>
          <p><font color="#000000" size="5"><b><font face="Arial, Helvetica, sans-serif">RESULTATS &amp; CLASSEMENTS<br>
            <br>
            <?php echo $saison; ?> - <?php echo $saison+1; ?></font></b></font></p>
          <p>&nbsp;</p>
          <table width="550" border="0" cellspacing="0" cellpadding="0">
            <tr bgcolor="#000000"> 
              <td colspan="7"> 
                <div align="center"><b><font color="#FFFFFF" size="6">Comp&eacute;titions 
                  f&eacute;d&eacute;rales</font></b></div>
              </td>
            </tr>
          </table>
          <p>&nbsp;</p>
        
        <p class="terr3">Top 14 - Pro D2 <br />
			<a href="page_pro.php">poule unique (<?php echo ($pro1 + $pro2)." clubs";?>)</a></p>

        <p class="terr3">Nationale<br />
			<a href="page_pro.php">poule unique (<?php echo $nat1." clubs";?>)</a></p>

		<p class="terr3">Nationale 2 <br />
			<a href="page_pro.php">2 poules de 12 (<?php echo $nat2." clubs";?>)</a></p>
			
		<p class="terr3">F&eacute;d&eacute;rale 1 - Nationale B <br />
            <a href="page_fed1.php">4 poules de 12(<?php echo $fed1." clubs";?>)</a></p>

		<p class="terr3">F&eacute;d&eacute;rale 2 - F&eacute;d&eacute;rale B <br />
            <a href="page_fed2.php">8 poules de 12 (<?php echo $fed2." clubs";?>)</a></p>
          
        <p class="terr3"> F&eacute;d&eacute;rale 3 - Excellence B <br />
            <a href="page_fed3NE.php">20 poules de 10 (<?php echo $fed3." clubs";?>)</a></p>
          <br><br>
            <?php    include("../pub/pub4.php");    ?>
           <br>
            <br>
            <br>
            <br>
           
          <table width="550" border="0" cellspacing="0" cellpadding="0">
            <tr bgcolor="#000000"> 
              <td colspan="7"><div align="center"><b><font color="#FFFFFF" size="6">Comp&eacute;titions f&eacute;minines </font></b></div></td>
            </tr>
          </table>
          <p>&nbsp;</p>
          <p class="terr4">Elite 1 - Elite 2<br />
            <a href="../feminine/page_elite1.php">(23 clubs)</a></p>

          <p class="terr4">F&eacute;d&eacute;rale 1<br />
            <a href="../feminine/page_federale.php">(32 clubs)</a></p>
          <br>
		<!--	  <p class="terr4">F&eacute;d&eacute;rale 2<br />
            <a href="../feminine/page_federale2.php">(30 clubs)</a></p>
 -->

		  <br>
          <br>
          
          <br>
          <br>
          <br>
          <br>
          <table width="550" border="0" cellspacing="0" cellpadding="0">
            <tr bgcolor="#000000"> 
              <td colspan="7"><div align="center"><b><font color="#FFFFFF" size="6">Comp&eacute;titions r&eacute;gionales</font></b></div></td>
            </tr>
          </table>
          <p></p>
		  
		  
          <p class="terr2">LIGUE AUVERGNE RHONE ALPES (<?php echo $clubsara." clubs";?>)<br>
            <a href="resultats/page_ara_reg1.php"> R&eacute;gionale 1 (<?php echo $araREG1;?>) - R&eacute;gionale 2 (<?php echo $araREG2;?>) - R&eacute;gionale 3 (<?php echo $araREG3;?>) </a> </p>
            
          <p class="terr2">LIGUE BOURGOGNE et FRANCHE COMTE (<?php echo $clubsbfc." clubs";?>)<br>
            <a href="page_bfc.php"> R&eacute;gionale 1 (<?php echo $bfcREG1;?>) - R&eacute;gionale 2 (<?php echo $bfcREG2;?>) - R&eacute;gionale 3 (<?php echo $bfcREG3;?>) </a> </p>
              
          <p class="terr2">LIGUE BRETAGNE (<?php echo $clubsbre." clubs";?>)<br>
            <a href="page_bre.php"> R&eacute;gionale 1 (<?php echo $breREG1;?>) - R&eacute;gionale 2 (<?php echo $breREG2;?>) - R&eacute;gionale 3 (<?php echo $breREG3;?>) </a> </p>
            
          <p class="terr2">LIGUE CENTRE VAL DE LOIRE (<?php echo $clubscvl." clubs";?>)<br>
            <a href="page_cvl.php"> R&eacute;gionale 1 (<?php echo $cvlREG1;?>) - R&eacute;gionale 2 (<?php echo $cvlREG2;?>) - R&eacute;gionale 3 (<?php echo $cvlREG3;?>) </a> </p>
            
          <p class="terr2">LIGUE CORSE (<?php echo $clubsara." clubs";?>)<br>
            <a href="page_cor.php">Aucune comp&eacute;tition propos&eacute;e</a></p>
            
          <p class="terr2">LIGUE GRAND EST (<?php echo $clubsges." clubs";?>)<br>
            <a href="page_ges.php"> R&eacute;gionale 1(<?php echo $gesREG1;?>) - R&eacute;gionale 2(<?php echo $gesREG2;?>) - R&eacute;gionale 3 (<?php echo $gesREG3;?>) </a> </p>
            
         
          <p class="terr2">LIGUE HAUTS DE FRANCE (<?php echo $clubshdf." clubs";?>)<br>
            <a href="page_hdf.php"> R&eacute;gionale 1 (<?php echo $hdfREG1;?>) - R&eacute;gionale 2 (<?php echo $hdfREG2;?>) - R&eacute;gionale 3 (<?php echo $hdfREG3;?>) </a> </p>
            
              <?php require '../pub/pub_displayCarre.php';?>   
          <br>
          <br>
          <p class="terr2">LIGUE ILE DE FRANCE (<?php echo $clubsidf." clubs";?>)<br>
            <a href="page_idf.php"> R&eacute;gionale 1 (<?php echo $idfREG1;?>) - R&eacute;gionale 2 (<?php echo $idfREG2;?>) - R&eacute;gionale 3 (<?php echo $idfREG3;?>) </a> </p>
            
          <p class="terr2">LIGUE NORMANDIE (<?php echo $clubsnor." clubs";?>)<br>
            <a href="page_nor.php"> R&eacute;gionale 1 (<?php echo $norREG1;?>) - R&eacute;gionale 2(<?php echo $norREG2;?>) - R&eacute;gionale 3 (<?php echo $norREG3;?>) </a> </p>
            
          <p class="terr2">LIGUE NOUVELLE AQUITAINE (<?php echo $clubsnaq." clubs";?>)<br>
            <a href="page_naq_reg1.php"> R&eacute;gionale 1 (<?php echo $naqREG1;?>) - R&eacute;gionale 2 (<?php echo $naqREG2;?>) - R&eacute;gionale 3 (<?php echo $naqREG3;?>) </a> </p>
            
          <p class="terr2">LIGUE OCCITANIE (<?php echo $clubsocc." clubs";?>)<br>
            <a href="page_occ_reg1.php"> R&eacute;gionale 1 (<?php echo $occREG1;?>) - R&eacute;gionale 2 (<?php echo $occREG2;?>) - R&eacute;gionale 3 (<?php echo $occREG3;?>) </a> </p>
            
          <p class="terr2">LIGUE PAYS DE LA LOIRE (<?php echo $clubspdl." clubs";?>)<br>
            <a href="page_pdl.php"> R&eacute;gionale 1 (<?php echo $pdlREG1;?>) - R&eacute;gionale 2 ((<?php echo $pdlREG2;?>)) - R&eacute;gionale 3 ((<?php echo $pdlREG3;?>)) </a> </p>
            
          <p class="terr2">LIGUE PROVENCE ALPES COTE D'AZUR (<?php echo $clubspca." clubs";?>)<br>
            <a href="page_pca.php"> R&eacute;gionale 1 (<?php echo $pcaREG1;?>) - R&eacute;gionale 2 (<?php echo $pcaREG2;?>) - R&eacute;gionale 3 (<?php echo $pcaREG3;?>) </a> </p>
            
            <br>
          <br>
          <font color="#000000"> 
          <?php
    
 //   include("../pub/pub4.php");
    ?>
          <br>
          <br>
          </font></div>
      </td>
      <td height="1703" bgcolor="#006699" width="225" valign="top"> 
        <p> 
          <?php
    // On inclut le haut de la page
    include("../00droite.php");
    ?>
        </p>
      </td>
    </tr>
    <tr bordercolor="#000000"> 
      <th bgcolor="#FFFFFF" colspan="3" valign="top" height="30"> 
        <div align="center"> 
          <table width="1100" border="1">
            <tr> 
              <td><div align="center"><font color="#000000"><?php include("../comitebas.php"); ?></font></div></td>
            </tr>
            <tr> 
              <td><div align="center"><font color="#000000"><?php require 'cadrePubHorizontal600.php';?></font></div></td>
            </tr>
            <tr> 
              <td><div align="center"><font color="#000000"><?php include("../bas.php");?></font></div></td>
            </tr>
          </table>
        </div>
      </th>
    </tr>
  </table>
</body>
</html>
