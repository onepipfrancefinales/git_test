
<html lang="fr">
<head>
</head>
<body>
<?php
//mysql_connect("sql.franceserv.fr", "onepip-france", "lavelan09"); // Connexion à MySQL
//mysql_select_db("onepip-france-db1"); // Sélection de la base onepip

require '../../../connect1/connection1.php';



//  champ fédéral

$requete = "SELECT H  as fed1, PH as fed2, S1 as fed3, S3 AS fedb , S4 as excel
			FROM accesFFR
			WHERE sigle = 'FED'";
				$result =mysql_query ($requete);
				while ($row = mysql_fetch_array($result))
					{
					$fed1 = $row[0];
					$fed2 = $row[1];
					$fed3 = $row[2];
					$fedb =  $row[3];
					$excel = $row[4];
					}
					
					
//  champ terr
$requete = "SELECT H  as fraH, PH as fraPH, S1 as fraS1, S2 AS fraS2, S3 AS fraS3 , S4 as fraS4, ResH as frares
			FROM accesFFR
			WHERE sigle = 'TERR'";
				$result =mysql_query ($requete);
				while ($row = mysql_fetch_array($result))
					{
					$fraH = $row[0];
					$fraPH = $row[1];
					$fraS1 = $row[2];
					$fraS2= $row[3];
					$fraS3= $row[4];
					$fraS4= $row[5];
					$fraRes= $row[0];
					
					}
					
					
// champ féminines

					
$requete = "SELECT H as elite1 , PH as elite2 , S1 as femFed1, S2 as femFed2
			FROM accesFFR
			WHERE sigle = 'FEM'";
				$result =mysql_query ($requete);
				while ($row = mysql_fetch_array($result))
					{
					$fraelite1 = $row[0];
					$fraelite2 = $row[1];
					$frafemFed1 = $row[2];
					$frafemFed2 = $row[3];
					}
					
//  champ jeunes										

$requete = "SELECT H as frafra , PH fraEspoirFed1 , S1 as fraCra, S2 as fraAla , S3 as fraGau , S4 as fraU16 , resH as fraU18 
			FROM accesFFR
			WHERE sigle = 'JEUNE'";
				$result =mysql_query ($requete);
				while ($row = mysql_fetch_array($result))
					{
					$frafra = $row[0];
					$fraEspoirFed1 = $row[1];
					$fraCra = $row[2];
					$fraAla = $row[3];
					$fraGau = $row[4];
					$fraU18 = $row[5];
					$fraU16 = $row[6];
					
					}


$requete = "SELECT H, PH, S1, S2, S3, S4, ResH, ResPH, ResS1, ResS2 
			FROM accesFFR
			WHERE sigle = 'ARA'";
				$result =mysql_query ($requete);
				while ($row = mysql_fetch_array($result))
					{
					$ARAH = $row[0];
					$ARAPH = $row[1];
					$ARAS1 = $row[2];
					$ARAS2 = $row[3];
					$ARAS3 = $row[4];
					$ARAS4 = $row[5];
					$ARAResH = $row[6];
					$ARAResPH = $row[7];
					$ARAResS1 = $row[8];
					$ARAResS2 = $row[9];

					}
					
					
	$requete = "SELECT H, PH, S1, S2, S3, S4, ResH, ResPH, ResS1, ResS2 
			FROM accesFFR
			WHERE sigle = 'BRE'";
				$result =mysql_query ($requete);
				while ($row = mysql_fetch_array($result))
					{
					$BREH = $row[0];
					$BREPH = $row[1];
					$BRES1 = $row[2];
					$BRES2 = $row[3];
					$BRES3 = $row[4];
					$BRES4 = $row[5];
					$BREResH = $row[6];
					$BREResPH = $row[7];
					$BREResS1 = $row[8];
					$BREResS2 = $row[9];

					}				
					
					
					
					
					
$requete = "SELECT H, PH, S1, S2, S3, S4, ResH, ResPH, ResS1, ResS2 
			FROM accesFFR
			WHERE sigle = 'BFC'";
				$result =mysql_query ($requete);
				while ($row = mysql_fetch_array($result))
					{
					$BFCH = $row[0];
					$BFCPH = $row[1];
					$BFCS1 = $row[2];
					$BFCS2 = $row[3];
					$BFCS3 = $row[4];
					$BFCS4 = $row[5];
					$BFCResH = $row[6];
					$BFCResPH = $row[7];
					$BFCResS1 = $row[8];
					$BFCResS2 = $row[9];

					}
					
$requete = "SELECT H, PH, S1, S2, S3, S4, ResH, ResPH, ResS1, ResS2 
			FROM accesFFR
			WHERE sigle = 'CVL'";
				$result =mysql_query ($requete);
				while ($row = mysql_fetch_array($result))
					{
					$CVLH = $row[0];
					$CVLPH = $row[1];
					$CVLS1 = $row[2];
					$CVLS2 = $row[3];
					$CVLS3 = $row[4];
					$CVLS4 = $row[5];
					$CVLResH = $row[6];
					$CVLResPH = $row[7];
					$CVLResS1 = $row[8];
					$CVLResS2 = $row[9];

					}					
										
$requete = "SELECT H, PH, S1, S2, S3, S4, ResH, ResPH, ResS1, ResS2 
			FROM accesFFR
			WHERE sigle = 'GES'";
				$result =mysql_query ($requete);
				while ($row = mysql_fetch_array($result))
					{
					$GESH = $row[0];
					$GESPH = $row[1];
					$GESS1 = $row[2];
					$GESS2 = $row[3];
					$GESS3 = $row[4];
					$GESS4 = $row[5];
					$GESResH = $row[6];
					$GESResPH = $row[7];
					$GESResS1 = $row[8];
					$GESResS2 = $row[9];

					}
					
		$requete = "SELECT H, PH, S1, S2, S3, S4, ResH, ResPH, ResS1, ResS2 
			FROM accesFFR
			WHERE sigle = 'HDF'";
				$result =mysql_query ($requete);
				while ($row = mysql_fetch_array($result))
					{
					$HDFH = $row[0];
					$HDFPH = $row[1];
					$HDFS1 = $row[2];
					$HDFS2 = $row[3];
					$HDFS3 = $row[4];
					$HDFS4 = $row[5];
					$HDFResH = $row[6];
					$HDFResPH = $row[7];
					$HDFResS1 = $row[8];
					$HDFResS2 = $row[9];

					}			
										
			$requete = "SELECT H, PH, S1, S2, S3, S4, ResH, ResPH, ResS1, ResS2 
			FROM accesFFR
			WHERE sigle = 'IDF'";
				$result =mysql_query ($requete);
				while ($row = mysql_fetch_array($result))
					{
					$IDFH = $row[0];
					$IDFPH = $row[1];
					$IDFS1 = $row[2];
					$IDFS2 = $row[3];
					$IDFS3 = $row[4];
					$IDFS4 = $row[5];
					$IDFResH = $row[6];
					$IDFResPH = $row[7];
					$IDFResS1 = $row[8];
					$IDFResS2 = $row[9];

					}
					
			$requete = "SELECT H, PH, S1, S2, S3, S4, ResH, ResPH, ResS1, ResS2 
			FROM accesFFR
			WHERE sigle = 'NOR'";
				$result =mysql_query ($requete);
				while ($row = mysql_fetch_array($result))
					{
					$NORH = $row[0];
					$NORPH = $row[1];
					$NORS1 = $row[2];
					$NORS2 = $row[3];
					$NORS3 = $row[4];
					$NORS4 = $row[5];
					$NORResH = $row[6];
					$NORResPH = $row[7];
					$NORResS1 = $row[8];
					$NORResS2 = $row[9];

					}		
						

$requete = "SELECT H, PH, S1, S2, S3, S4, ResH, ResPH, ResS1, ResS2 
			FROM accesFFR
			WHERE sigle = 'NAQ'";
				$result =mysql_query ($requete);
				while ($row = mysql_fetch_array($result))
					{
					$NAQH = $row[0];
					$NAQPH = $row[1];
					$NAQS1 = $row[2];
					$NAQS2 = $row[3];
					$NAQS3 = $row[4];
					$NAQS4 = $row[5];
					$NAQResH = $row[6];
					$NAQResPH = $row[7];
					$NAQResS1 = $row[8];
					$NAQResS2 = $row[9];
					
					
					
					}
					
		$requete = "SELECT H, PH, S1, S2, S3, S4, ResH, ResPH, ResS1, ResS2 
			FROM accesFFR
			WHERE sigle = 'OCC'";
				$result =mysql_query ($requete);
				while ($row = mysql_fetch_array($result))
					{
					$OCCH = $row[0];
					$OCCPH = $row[1];
					$OCCS1 = $row[2];
					$OCCS2 = $row[3];
					$OCCS3 = $row[4];
					$OCCS4 = $row[5];
					$OCCResH = $row[6];
					$OCCResPH = $row[7];
					$OCCResS1 = $row[8];
					$OCCResS2 = $row[9];
					}			
		
					
		$requete = "SELECT H, PH, S1, S2, S3, S4, ResH, ResPH, ResS1, ResS2 
			FROM accesFFR
			WHERE sigle = 'PDL'";
				$result =mysql_query ($requete);
				while ($row = mysql_fetch_array($result))
					{
					$PDLH = $row[0];
					$PDLPH = $row[1];
					$PDLS1 = $row[2];
					$PDLS2 = $row[3];
					$PDLS3 = $row[4];
					$PDLS4 = $row[5];
					$PDLResH = $row[6];
					$PDLResPH = $row[7];
					$PDLResS1 = $row[8];
					$PDLResS2 = $row[9];
					}			
				$requete = "SELECT H, PH, S1, S2, S3, S4, ResH, ResPH, ResS1, ResS2 
			FROM accesFFR
			WHERE sigle = 'PCA'";
				$result =mysql_query ($requete);
				while ($row = mysql_fetch_array($result))
					{
					$PCAH = $row[0];
					$PCAPH = $row[1];
					$PCAS1 = $row[2];
					$PCAS2 = $row[3];
					$PCAS3 = $row[4];
					$PCAS4 = $row[5];
					$PCAResH = $row[6];
					$PCAResPH = $row[7];
					$PCAResS1 = $row[8];
					$PCAResS2 = $row[9];
					}					
										
					
				
				
?>
<table border="1" width="817">
  <tr> 
    <td colspan="9" height="25"> 
      <div align="center"><b><font size="5">Phases finales championnat de france</font></b></div>
    </td>
  </tr>
  <tr> 
    <td colspan="9" height="25">&nbsp;</td>
  </tr>
  <tr> 
    <td bgcolor="#000000" height="25"> 
      <div align="center"><font color="#FFFFFF"><b><font face="Arial, Helvetica, sans-serif" size="3">1</font></b></font></div>
    </td>
    <td colspan="8" height="25"><font face="Arial, Helvetica, sans-serif">Se connecter 
      &agrave; la FFR</font></td>
  </tr>
  <tr> 
    <td height="25">&nbsp;</td>
    <td height="25">&nbsp;</td>
    <td height="25"> 
      <div align="center"><a href="https://ovale2.ffr.fr/Identity/Login?ReturnUrl=%2FAffilies%2FDemandeAffiliation%2FIndex%2F863399" target="_blank"><b><font face="Arial, Helvetica, sans-serif">cliquer 
        ici</font></b></a></div>
    </td>
    <td colspan="6" height="25"> <b><font face="Arial, Helvetica, sans-serif">et 
      se connecter au bas de la page</font></b></td>
  </tr>
  <tr> 
    <td bgcolor="#000000" height="25"> 
      <div align="center"><b><font color="#FFFFFF" face="Arial, Helvetica, sans-serif" size="3">2</font></b></div>
    </td>
    <td colspan="8" height="25"> <font face="Arial, Helvetica, sans-serif">Choisir 
      une comp&eacute;tition</font></td>
  </tr>
  <tr> 
    <td colspan="8" height="25"> 
      <div align="center"><font face="Verdana, Arial, Helvetica, sans-serif"><b><font size="5"> 
        </font></b></font></div>
    </td>
    <td width="18%" height="25"> 
      <div align="center"><b>Mise &agrave; jour</b></div>
    </td>
  </tr>
  <tbody> 
  <tr> 
    <td height="29" width="6%" bgcolor="#FF9900">&nbsp;</td>
    <td height="29" width="10%" bgcolor="#FF9900"> 
      <div align="center"><font color="#000000" face="Arial, Helvetica, sans-serif" size="2"><b>F&eacute;d&eacute;rale 
        1</b></font></div>
    </td>
    <td height="29" width="11%" bgcolor="#FF9900"> 
      <div align="center"><font color="#000000" face="Arial, Helvetica, sans-serif" size="2"><b>F&eacute;d&eacute;rale 
        2</b></font></div>
    </td>
    <td height="29" width="10%" bgcolor="#FF9900"> 
      <div align="center"><font color="#000000" face="Arial, Helvetica, sans-serif" size="2"><b>F&eacute;d&eacute;rale 
        3</b></font></div>
    </td>
    <td height="29" width="10%"> 
      <div align="center"><font size="2"></font></div>
    </td>
    <td height="29" width="10%" bgcolor="#FF9900"> 
      <div align="center"><font color="#000000" face="Arial, Helvetica, sans-serif" size="2"><b>F&eacute;d&eacute;rale 
        B</b></font></div>
    </td>
    <td height="29" width="13%" bgcolor="#FF9900"> 
      <div align="center"><font color="#000000" face="Arial, Helvetica, sans-serif" size="2"><b>Excellence 
        B </b></font></div>
    </td>
    <td height="29" width="12%">&nbsp;</td>
    <td height="29" width="18%"> 
      <div align="center"><font color="#000000" face="Arial, Helvetica, sans-serif"><b><a href="../majCodeFFR.php?ligue=FED">Fed</a></b></font></div>
    </td>
  </tr>
  <tr> 
    <td height="29" width="6%"> 
      <div align="center"><b></b></div>
    </td>
    <td height="24" width="10%"> 
      <div align="center"><font face="Arial, Helvetica, sans-serif"><a href="fed1.php?codeFFR=<?php echo $fed1; ?>" target="_blank"> 
        <?php echo $fed1; ?>
        </a></font><font color="#000000" face="Arial, Helvetica, sans-serif"></font></div>
    </td>
    <td height="24" width="11%"> 
      <div align="center"><font face="Arial, Helvetica, sans-serif"><a href="fed2.php?codeFFR=<?php echo $fed2; ?>" target="_blank"> 
        <?php echo $fed2; ?>
        </a></font><font color="#000000" face="Arial, Helvetica, sans-serif"></font> 
      </div>
    </td>
    <td height="24" width="10%"> 
      <div align="center"><font face="Arial, Helvetica, sans-serif"><a href="fed3.php?codeFFR=<?php echo $fed3; ?>" target="_blank"> 
        <?php echo $fed3; ?>
        </a></font></div>
    </td>
    <td height="24" width="10%"> 
      <div align="center"><font face="Arial, Helvetica, sans-serif"><a href="ARAS2.php?codeFFR=<?php echo $ARAS2; ?>" target="_blank"> 
        </a></font></div>
    </td>
    <td height="24" width="10%"> 
      <div align="center"><font color="#000000" face="Arial, Helvetica, sans-serif"> 
        </font><font face="Arial, Helvetica, sans-serif"><a href="fedb.php?codeFFR=<?php echo $fedb; ?>" target="_blank"> 
        <?php echo $fedb; ?>
        </a></font></div>
    </td>
    <td height="24" width="13%"> 
      <div align="center"><font color="#000000" face="Arial, Helvetica, sans-serif"> 
        </font><font face="Arial, Helvetica, sans-serif"><a href="excel.php?codeFFR=<?php echo $excel; ?>" target="_blank"> 
        <?php echo $excel; ?>
        </a></font><font color="#000000" face="Arial, Helvetica, sans-serif"> 
        </font></div>
    </td>
    <td height="29" width="12%">&nbsp;</td>
    <td height="29" width="18%"> 
      <div align="center"></div>
    </td>
  </tr>
  <tr> 
    <td height="31" width="6%" bgcolor="#FF9933">&nbsp;</td>
    <td height="31" width="10%" bgcolor="#FF9933"> 
      <div align="center"><font size="2"><b><font face="Arial, Helvetica, sans-serif">Honneur</font></b></font></div>
    </td>
    <td height="31" width="11%" bgcolor="#FF9933"> 
      <div align="center"><font size="2"><b><font face="Arial, Helvetica, sans-serif">Promotion</font></b></font></div>
    </td>
    <td height="31" width="10%" bgcolor="#FF9933"> 
      <div align="center"><font size="2"><b><font face="Arial, Helvetica, sans-serif">1re 
        S&eacute;rie</font></b></font></div>
    </td>
    <td height="31" width="10%" bgcolor="#FF9933"> 
      <div align="center"><font size="2"><b><font face="Arial, Helvetica, sans-serif">2me 
        S&eacute;rie</font></b></font></div>
    </td>
    <td height="31" width="10%" bgcolor="#FF9933"> 
      <div align="center"><font size="2"><b><font face="Arial, Helvetica, sans-serif">3me 
        S&eacute;rie</font></b></font></div>
    </td>
    <td height="31" width="13%" bgcolor="#FF9933"> 
      <div align="center"><font size="2"><b><font face="Arial, Helvetica, sans-serif">4me 
        S&eacute;rie</font></b></font></div>
    </td>
    <td height="31" width="12%" bgcolor="#FF9933"> 
      <div align="center"><font size="2"><b><font face="Arial, Helvetica, sans-serif">R&eacute;serve</font></b></font></div>
    </td>
    <td height="31" width="18%"> 
      <div align="center"><font color="#000000" face="Arial, Helvetica, sans-serif"><b><a href="../majCodeFFR.php?ligue=TERR">Terr</a></b></font></div>
    </td>
  </tr>
  <tr> 
    <td height="24" width="6%"> 
      <div align="center"><font color="#000000" face="Arial, Helvetica, sans-serif"></font></div>
    </td>
    <td height="24" width="10%"> 
      <div align="center"><font face="Arial, Helvetica, sans-serif"><a href="fraH.php?codeFFR=<?php echo $fraH; ?>" target="_blank"> 
        <?php echo $fraH; ?>
        </a></font><font color="#000000" face="Arial, Helvetica, sans-serif"></font></div>
    </td>
    <td height="24" width="11%"> 
      <div align="center"><font face="Arial, Helvetica, sans-serif"><a href="fraPH.php?codeFFR=<?php echo $fraPH; ?>" target="_blank"> 
        <?php echo $fraPH; ?>
        </a></font><font color="#000000" face="Arial, Helvetica, sans-serif"></font> 
      </div>
    </td>
    <td height="24" width="10%"> 
      <div align="center"><font face="Arial, Helvetica, sans-serif"><a href="fraS1.php?codeFFR=<?php echo $fraS1; ?>" target="_blank"> 
        <?php echo $fraS1; ?>
        </a></font></div>
    </td>
    <td height="24" width="10%"> 
      <div align="center"><font face="Arial, Helvetica, sans-serif"><a href="fraS2.php?codeFFR=<?php echo $fraS2; ?>" target="_blank"> 
        <?php echo $fraS2; ?>
        </a></font></div>
    </td>
    <td height="24" width="10%"> 
      <div align="center"><font color="#000000" face="Arial, Helvetica, sans-serif"> 
        </font><font face="Arial, Helvetica, sans-serif"><a href="fraS3.php?codeFFR=<?php echo $fraS3; ?>" target="_blank"> 
        <?php echo $fraS3; ?>
        </a></font></div>
    </td>
    <td height="24" width="13%"> 
      <div align="center"><font color="#000000" face="Arial, Helvetica, sans-serif"> 
        </font><font face="Arial, Helvetica, sans-serif"><a href="fraS4.php?codeFFR=<?php echo $fraS4; ?>" target="_blank"> 
        <?php echo $fraS4; ?>
        </a></font><font color="#000000" face="Arial, Helvetica, sans-serif"> 
        </font></div>
    </td>
    <td height="24" width="12%"> 
      <div align="center"><font face="Arial, Helvetica, sans-serif"><a href="fraRes.php?codeFFR=<?php echo $fraRes; ?>" target="_blank"> 
        <?php echo $fraRes; ?>
        </a></font></div>
    </td>
    <td height="24" width="18%"> 
      <div align="center"><font color="#000000" face="Arial, Helvetica, sans-serif"></font></div>
    </td>
  </tr>
  <tr> 
    <td width="6%" bgcolor="#FFCC33"> 
      <div align="center"><font color="#000000" face="Arial, Helvetica, sans-serif"></font></div>
    </td>
    <td height="24" width="10%" bgcolor="#FFCC33"> 
      <div align="center"><b><font color="#000000" face="Arial, Helvetica, sans-serif" size="2">Elite 
        1 </font></b></div>
    </td>
    <td height="24" width="11%" bgcolor="#FFCC33"> 
      <div align="center"><b><font color="#000000" face="Arial, Helvetica, sans-serif" size="2">Elite 
        2</font> </b></div>
    </td>
    <td height="29" width="10%" bgcolor="#FFCC33"> 
      <div align="center"><b><font color="#000000" face="Arial, Helvetica, sans-serif" size="2">F&eacute;d&eacute;rale 
        1</font></b></div>
    </td>
    <td height="29" width="10%" bgcolor="#FFCC33"> 
      <div align="center"><b><font color="#000000" face="Arial, Helvetica, sans-serif" size="2">F&eacute;d&eacute;rale 
        2</font></b></div>
    </td>
    <td height="24" width="10%"> 
      <div align="center"><font color="#000000" face="Arial, Helvetica, sans-serif"> 
        </font><font face="Arial, Helvetica, sans-serif"><a href="BFCS3.php?codeFFR=<?php echo $BFCS3; ?>" target="_blank"> 
        </a></font></div>
    </td>
    <td height="24" width="13%"> 
      <div align="center"><font color="#000000" face="Arial, Helvetica, sans-serif"> 
        </font><font face="Arial, Helvetica, sans-serif"><a href="BFCS4.php?codeFFR=<?php echo $BFCS4; ?>" target="_blank"> 
        </a></font><font color="#000000" face="Arial, Helvetica, sans-serif"> 
        </font></div>
    </td>
    <td height="24" width="12%"> 
      <div align="center"><font face="Arial, Helvetica, sans-serif"><a href="BFCResH.php?codeFFR=<?php echo $BFCResH; ?>" target="_blank"> 
        </a></font></div>
    </td>
    <td width="18%"> 
      <div align="center"><font color="#000000" face="Arial, Helvetica, sans-serif"><b><font color="#000000" face="Arial, Helvetica, sans-serif"><b><a href="../majCodeFFR.php?ligue=FEM">Fem</a></b></font></b></font></div>
    </td>
  </tr>
  <tr> 
    <td height="22" width="6%"> 
      <div align="center"><b></b></div>
    </td>
    <td height="24" width="10%"> 
      <div align="center"><font face="Arial, Helvetica, sans-serif"><a href="fraelite1.php?codeFFR=<?php echo $fraelite1; ?>" target="_blank"> 
        <?php echo $fraelite1; ?>
        </a></font><font color="#000000" face="Arial, Helvetica, sans-serif"></font></div>
    </td>
    <td height="24" width="11%"> 
      <div align="center"><font face="Arial, Helvetica, sans-serif"><a href="fraelite2.php?codeFFR=<?php echo $fraelite2; ?>" target="_blank"> 
        <?php echo $fraelite2; ?>
        </a></font><font color="#000000" face="Arial, Helvetica, sans-serif"></font> 
      </div>
    </td>
    <td height="24" width="10%"> 
      <div align="center"><font face="Arial, Helvetica, sans-serif"><a href="frafemFed1.php?codeFFR=<?php echo $frafemFed1; ?>" target="_blank"> 
        <?php echo $frafemFed1; ?>
        </a></font></div>
    </td>
    <td height="24" width="10%"> 
      <div align="center"><font face="Arial, Helvetica, sans-serif"><a href="frafemFed2.php?codeFFR=<?php echo $frafemFed2; ?>" target="_blank"> 
        <?php echo $frafemFed2; ?>
        </a></font></div>
    </td>
    <td height="24" width="10%"> 
      <div align="center"><font color="#000000" face="Arial, Helvetica, sans-serif"> 
        </font><font face="Arial, Helvetica, sans-serif"><a href="BRES3.php?codeFFR=<?php echo $BFCS3; ?>" target="_blank"> 
        </a></font></div>
    </td>
    <td height="24" width="13%"> 
      <div align="center"><font color="#000000" face="Arial, Helvetica, sans-serif"> 
        </font><font face="Arial, Helvetica, sans-serif"><a href="BRES4.php?codeFFR=<?php echo $BFCS4; ?>" target="_blank"> 
        </a></font><font color="#000000" face="Arial, Helvetica, sans-serif"> 
        </font></div>
    </td>
    <td height="24" width="12%"> 
      <div align="center"><font face="Arial, Helvetica, sans-serif"><a href="BREResH.php?codeFFR=<?php echo $BFCResH; ?>" target="_blank"> 
        </a></font></div>
    </td>
    <td height="22" width="18%"> 
      <div align="center"><b><font color="#000000" face="Arial, Helvetica, sans-serif"></font></b></div>
    </td>
  </tr>
  <tr> 
    <td height="22" width="6%" bgcolor="#FFCC33"> 
      <div align="center"><font color="#000000" face="Arial, Helvetica, sans-serif"><b></b></font></div>
    </td>
    <td height="24" width="10%" bgcolor="#FFCC33"> 
      <div align="center"><font face="Arial, Helvetica, sans-serif" size="2"><b>Espoir 
        Elite</b></font></div>
    </td>
    <td height="24" width="11%" bgcolor="#FFCC33"> 
      <div align="center"><b><font size="2" face="Arial, Helvetica, sans-serif">Espoir 
        Fed1</font></b></div>
    </td>
    <td height="24" width="10%" bgcolor="#FFCC33"> 
      <div align="center"><b><font face="Arial, Helvetica, sans-serif" size="2">Crabos</font></b></div>
    </td>
    <td height="24" width="10%" bgcolor="#FFCC33"> 
      <div align="center"><b><font face="Arial, Helvetica, sans-serif" size="2">Alamercery</font></b></div>
    </td>
    <td height="24" width="10%" bgcolor="#FFCC33"> 
      <div align="center"><b><font face="Arial, Helvetica, sans-serif" size="2">Gaudermen</font></b></div>
    </td>
    <td height="24" width="13%" bgcolor="#FFCC33"> 
      <div align="center"><font face="Arial, Helvetica, sans-serif"><b><font color="#000000" face="Arial, Helvetica, sans-serif" size="2">U18</font> 
        <font size="2">(Bal) </font></b></font></div>
    </td>
    <td height="24" width="12%" bgcolor="#FFCC33"> 
      <div align="center"><font face="Arial, Helvetica, sans-serif"><a href="CVLResH.php?codeFFR=<?php echo $CVLResH; ?>" target="_blank"> 
        </a><b><font color="#000000" face="Arial, Helvetica, sans-serif" size="2">U16 
        (Teu) </font></b></font><font color="#000000" face="Arial, Helvetica, sans-serif"> 
        </font></div>
    </td>
    <td height="22" width="18%"> 
      <div align="center"><font color="#000000" face="Arial, Helvetica, sans-serif"><b><a href="../majCodeFFR.php?ligue=JEUNE">Jeunes</a></b></font></div>
    </td>
  </tr>
  <tr> 
    <td height="15" width="6%"> 
      <div align="center"><font color="#000000" face="Arial, Helvetica, sans-serif"><b></b></font></div>
    </td>
    <td height="24" width="10%"> 
      <div align="center"><font face="Arial, Helvetica, sans-serif"><a href="fraEspoirElite.php?codeFFR=<?php echo $fraEspoirElite; ?>" target="_blank"> 
        <?php echo $fraEspoirElite; ?>
        </a></font></div>
    
    </td>
    <td height="24" width="11%"> 
      <div align="center"><font face="Arial, Helvetica, sans-serif"><a href="fraEspoirFed1.php?codeFFR=<?php echo $fraEspoirFed1; ?>" target="_blank"> 
        <?php echo $fraEspoirFed1; ?>
        </a></font></div>
     
    </td>
    <td height="24" width="10%"> 
      <div align="center"><font face="Arial, Helvetica, sans-serif"><a href="fraCra.php?codeFFR=<?php echo $fraCra; ?>" target="_blank"> 
        <?php echo $fraCra; ?>
        </a></font></div>
    </td>
    <td height="24" width="10%"> 
      <div align="center"><font face="Arial, Helvetica, sans-serif"> <a href="fraAla.php?codeFFR=<?php echo $fraAla; ?>" target="_blank"> 
        <?php echo $fraAla; ?>
        </a></font></div>
    </td>
    <td height="24" width="10%"> 
      <div align="center"><font color="#000000" face="Arial, Helvetica, sans-serif"> 
        </font><font face="Arial, Helvetica, sans-serif"> <a href="fraGau.php?codeFFR=<?php echo $fraGau; ?>" target="_blank"> 
        <?php echo $fraGau; ?>
        </a></font></div>
    </td>
    <td height="24" width="13%"> 
      <div align="center"><font color="#000000" face="Arial, Helvetica, sans-serif"> 
        </font><font face="Arial, Helvetica, sans-serif"><a href="fraU18.php?codeFFR=<?php echo $fraU18; ?>" target="_blank"> 
        <?php echo $fraU18; ?>
        </a></font><font color="#000000" face="Arial, Helvetica, sans-serif"> 
        </font></div>
    </td>
    <td height="24" width="12%"> 
      <div align="center"><font face="Arial, Helvetica, sans-serif"><a href="fraU16.php?codeFFR=<?php echo $fraU16; ?>" target="_blank"> 
         <?php echo $fraU16; ?>
        </a></font></div>
    </td>
    <td height="15" width="18%"> 
      <div align="center"><font color="#000000" face="Arial, Helvetica, sans-serif"></font></div>
    </td>
  </tr>
  </tbody> 
</table>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
</body>
</html>
