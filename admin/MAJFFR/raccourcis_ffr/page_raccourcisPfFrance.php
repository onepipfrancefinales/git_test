<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
  "http://www.w3.org/TR/html4/loose.dtd">
<html lang="fr">
<head>
</head>
<body>
<?php
//mysql_connect("sql.franceserv.fr", "onepip-france", "lavelan09"); // Connexion à MySQL
//mysql_select_db("onepip-france-db1"); // Sélection de la base onepip

require '../../../connect/connection1.php';





$requete = "SELECT H, ResH
			FROM accesFFR
			WHERE sigle = 'FED1'";
				$result =mysql_query ($requete);
				while ($row = mysql_fetch_array($result))
					{
					$FED1H = $row[0];
					$FED1ResH = $row[1];
					}

$requete = "SELECT H, ResH
			FROM accesFFR
			WHERE sigle = 'FED2'";
				$result =mysql_query ($requete);
				while ($row = mysql_fetch_array($result))
					{
					$FED2H = $row[0];
					$FED2ResH = $row[1];
					}
					
$requete = "SELECT H, ResH
			FROM accesFFR
			WHERE sigle = 'FED3'";
				$result =mysql_query ($requete);
				while ($row = mysql_fetch_array($result))
					{
					$FED3H = $row[0];
					$FED3ResH = $row[1];
					}					

$requete = "SELECT H, PH, S1, S2, S3, S4
			FROM accesFFR
			WHERE sigle = 'FEM'";
				$result =mysql_query ($requete);
				while ($row = mysql_fetch_array($result))
					{
					$FEMH = $row[0];
					$FEMPH = $row[1];
					$FEMS1 = $row[2];
					$FEMS2 = $row[3];
					$FEMS3 = $row[4];
					$FEMS4 = $row[5];
					

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
<table border="1" width="750">
  <tr> 
    <td colspan="13" height="25"> 
      <div align="center"><font face="Verdana, Arial, Helvetica, sans-serif"><b><font size="5"> 
        PHASES FINALES CHAMP DE FRANCE</font></b></font></div>
    </td>
  </tr>
  <tr> 
    <td width="7%" height="25">&nbsp;</td>
    <td width="5%" height="25">&nbsp;</td>
    <td width="8%" height="25">&nbsp; </td>
    <td width="9%" height="25">&nbsp;</td>
    <td bordercolor="#FFFFCC" width="6%" height="25">&nbsp;</td>
    <td width="5%" height="25">&nbsp;</td>
    <td bordercolor="#FFFFCC" width="9%" height="25">&nbsp;</td>
    <td width="3%" height="25" bgcolor="#000000">&nbsp;</td>
    <td width="8%" height="25">&nbsp;</td>
    <td width="7%" height="25">&nbsp;</td>
    <td width="8%" height="25">&nbsp;</td>
    <td width="6%" height="25">&nbsp;</td>
    <td width="19%" height="25">&nbsp;</td>
  </tr>
  <tbody> 
  <tr> 
    <td width="7%"> 
      <div align="center"><font color="#000000" face="Arial, Helvetica, sans-serif"><b>Fed 
        1</b></font></div>
    </td>
    <td width="5%"> 
      <div align="center"><font face="Arial, Helvetica, sans-serif"><a href="FED1H.php?codeFFR=<?php echo $FED1H; ?>" target="_blank"> 
        <?php echo $ARAH; ?>
        </a></font><font color="#000000" face="Arial, Helvetica, sans-serif"></font></div>
    </td>
    <td width="8%"> 
      <div align="center"><font color="#000000"><b><font face="Arial, Helvetica, sans-serif"></font></b></font></div>
    </td>
    <td width="9%"> 
      <div align="center"><font color="#000000"><b><font face="Arial, Helvetica, sans-serif"></font></b></font></div>
    </td>
    <td bordercolor="#FFFFCC" width="6%"><font face="Arial, Helvetica, sans-serif"></font></td>
    <td colspan="2"> 
      <div align="center"><font color="#000000"><font face="Arial, Helvetica, sans-serif"></font></font></div>
      <div align="center"><font color="#000000" face="Arial, Helvetica, sans-serif"><b>Nat 
        B</b></font></div>
    </td>
    <td width="3%" bgcolor="#000000">&nbsp;</td>
    <td width="8%"><font face="Arial, Helvetica, sans-serif"><a href="FED1RH.php?codeFFR=<?php echo $FED1RH; ?>" target="_blank"> 
      <?php echo $FED1RH; ?>
      </a></font></td>
    <td width="7%"><font face="Arial, Helvetica, sans-serif"></font></td>
    <td width="8%"><font face="Arial, Helvetica, sans-serif">Elite 1</font></td>
    <td width="6%"><font face="Arial, Helvetica, sans-serif"></font></td>
    <td width="19%"> 
      <div align="center"><font color="#000000" face="Arial, Helvetica, sans-serif"><b><a href="../majCodeFFR.php?ligue=FED1">Fed1</a></b></font></div>
    </td>
  </tr>
  <tr> 
    <td height="30" width="7%" bgcolor="#9999FF"> 
      <div align="center"><font color="#000000" face="Arial, Helvetica, sans-serif"><b>Fed 
        2</b></font></div>
    </td>
    <td height="30" width="5%" bgcolor="#9999FF"> 
      <div align="center"><font face="Arial, Helvetica, sans-serif"><a href="ARAH.php?codeFFR=<?php echo $ARAH; ?>" target="_blank"> 
        <?php echo $ARAH; ?>
        </a></font></div>
    </td>
    <td height="30" width="8%" bgcolor="#9999FF"> 
      <div align="center"><font face="Arial, Helvetica, sans-serif"></font></div>
    </td>
    <td height="30" width="9%" bgcolor="#9999FF"> 
      <div align="center"><font face="Arial, Helvetica, sans-serif"></font></div>
    </td>
    <td height="30" width="6%" bgcolor="#9999FF"><font face="Arial, Helvetica, sans-serif"></font></td>
    <td height="30" colspan="2" bgcolor="#9999FF"><font face="Arial, Helvetica, sans-serif"></font> 
      <div align="center"><font color="#000000" face="Arial, Helvetica, sans-serif"><b>Fed 
        B</b></font></div>
    </td>
    <td height="30" width="3%" bgcolor="#000000">&nbsp;</td>
    <td height="30" width="8%" bgcolor="#9999FF"> 
      <div align="center"><font face="Arial, Helvetica, sans-serif"><a href="ARAH.php?codeFFR=<?php echo $ARAH; ?>" target="_blank"> 
        <?php echo $ARAH; ?>
        </a></font></div>
    </td>
    <td height="30" width="7%" bgcolor="#9999FF"><font face="Arial, Helvetica, sans-serif"></font></td>
    <td height="30" width="8%" bgcolor="#9999FF"><font face="Arial, Helvetica, sans-serif">Elite 
      2 </font></td>
    <td height="30" width="6%" bgcolor="#9999FF"><font face="Arial, Helvetica, sans-serif"></font></td>
    <td height="30" width="19%" bgcolor="#9999FF"> 
      <div align="center"><font color="#000000" face="Arial, Helvetica, sans-serif"><b><a href="../majCodeFFR.php?ligue=FED2">Fed2</a></b></font></div>
    </td>
  </tr>
  <tr> 
    <td height="28" width="7%"> 
      <div align="center"><font color="#000000" face="Arial, Helvetica, sans-serif"><b>Fed 
        3 </b></font></div>
    </td>
    <td height="28" width="5%"> 
      <div align="center"><font face="Arial, Helvetica, sans-serif"><a href="ARAH.php?codeFFR=<?php echo $ARAH; ?>" target="_blank"> 
        <?php echo $ARAH; ?>
        </a></font></div>
    </td>
    <td height="28" width="8%"> 
      <div align="center"><font face="Arial, Helvetica, sans-serif"></font></div>
    </td>
    <td height="28" width="9%"> 
      <div align="center"><font face="Arial, Helvetica, sans-serif"></font></div>
    </td>
    <td height="28" width="6%"><font face="Arial, Helvetica, sans-serif"></font></td>
    <td height="28" colspan="2"><font face="Arial, Helvetica, sans-serif"></font> 
      <div align="center"><font color="#000000" face="Arial, Helvetica, sans-serif"><b>Exc 
        B </b></font></div>
    </td>
    <td height="28" width="3%" bgcolor="#000000">&nbsp;</td>
    <td height="28" width="8%"> 
      <div align="center"><font face="Arial, Helvetica, sans-serif"><a href="ARAH.php?codeFFR=<?php echo $ARAH; ?>" target="_blank"> 
        <?php echo $ARAH; ?>
        </a></font></div>
    </td>
    <td height="28" width="7%"><font face="Arial, Helvetica, sans-serif"></font></td>
    <td height="28" width="8%"><font face="Arial, Helvetica, sans-serif">Fed 1</font></td>
    <td height="28" width="6%"><font face="Arial, Helvetica, sans-serif"></font></td>
    <td height="28" width="19%"> 
      <div align="center"><font color="#000000" face="Arial, Helvetica, sans-serif"><b><a href="../majCodeFFR.php?ligue=FED3">Fed3</a></b></font></div>
    </td>
  </tr>
  <tr> 
    <td height="29" width="7%" bgcolor="#9999CC">&nbsp;</td>
    <td height="29" width="5%" bgcolor="#9999CC">&nbsp;</td>
    <td height="29" width="8%" bgcolor="#9999CC">&nbsp;</td>
    <td height="29" width="9%" bgcolor="#9999CC">&nbsp;</td>
    <td height="29" width="6%" bgcolor="#9999CC">&nbsp;</td>
    <td height="29" width="5%" bgcolor="#9999CC">&nbsp;</td>
    <td height="29" width="9%" bgcolor="#9999CC">&nbsp;</td>
    <td height="29" width="3%" bgcolor="#000000">&nbsp;</td>
    <td height="29" width="8%" bgcolor="#9999CC">&nbsp;</td>
    <td height="29" width="7%" bgcolor="#9999CC">&nbsp;</td>
    <td height="29" width="8%" bgcolor="#9999CC">Fed2</td>
    <td height="29" width="6%" bgcolor="#9999CC">&nbsp;</td>
    <td height="29" width="19%" bgcolor="#9999CC">&nbsp;</td>
  </tr>
  <tr> 
    <td height="29" width="7%" bgcolor="#9999CC"> 
      <div align="center"><font color="#000000" face="Arial, Helvetica, sans-serif"><b>Fém</b></font></div>
    </td>
    <td height="29" width="5%" bgcolor="#9999CC"> 
      <div align="center"><font face="Arial, Helvetica, sans-serif"><a href="FEMH.php?codeFFR=<?php echo $FEMH; ?>" target="_blank"> 
        <?php echo $FEMH; ?>
        </a></font></div>
    </td>
    <td height="29" width="8%" bgcolor="#9999CC"> 
      <div align="center"><font face="Arial, Helvetica, sans-serif"><a href="FEMPH.php?codeFFR=<?php echo $FEMPH; ?>" target="_blank"> 
        <?php echo $FEMPH; ?>
        </a></font></div>
    </td>
    <td height="29" width="9%" bgcolor="#9999CC"> 
      <div align="center"><font face="Arial, Helvetica, sans-serif"><a href="FEMS1.php?codeFFR=<?php echo $FEMS1; ?>" target="_blank"> 
        <?php echo $FEMS1; ?>
        </a></font></div>
    </td>
    <td height="29" width="6%" bgcolor="#9999CC"><font face="Arial, Helvetica, sans-serif"><a href="FEMS2.php?codeFFR=<?php echo $FEMS2; ?>" target="_blank"> 
      <?php echo $FEMS2; ?>
      </a></font></td>
    <td height="29" width="5%" bgcolor="#9999CC"><font face="Arial, Helvetica, sans-serif"></font></td>
    <td height="29" width="9%" bgcolor="#9999CC"><font face="Arial, Helvetica, sans-serif"></font></td>
    <td height="29" width="3%" bgcolor="#000000">&nbsp;</td>
    <td height="29" width="8%" bgcolor="#9999CC"><font face="Arial, Helvetica, sans-serif"></font></td>
    <td height="29" width="7%" bgcolor="#9999CC"><font face="Arial, Helvetica, sans-serif"></font></td>
    <td height="29" width="8%" bgcolor="#9999CC"><font face="Arial, Helvetica, sans-serif"></font></td>
    <td height="29" width="6%" bgcolor="#9999CC"><font face="Arial, Helvetica, sans-serif"></font></td>
    <td height="29" width="19%" bgcolor="#9999CC"> 
      <div align="center"><font color="#000000" face="Arial, Helvetica, sans-serif"><b><a href="../majCodeFFR.php?ligue=FEM">Fem</a></b></font></div>
    </td>
  </tr>
  <tr> 
    <td height="29" width="7%">&nbsp;</td>
    <td height="29" width="5%">&nbsp;</td>
    <td height="29" width="8%">&nbsp;</td>
    <td height="29" width="9%">&nbsp;</td>
    <td height="29" width="6%">&nbsp;</td>
    <td height="29" width="5%">&nbsp;</td>
    <td height="29" width="9%">&nbsp;</td>
    <td height="29" width="3%" bgcolor="#000000">&nbsp;</td>
    <td height="29" width="8%">&nbsp;</td>
    <td height="29" width="7%">&nbsp;</td>
    <td height="29" width="8%">&nbsp;</td>
    <td height="29" width="6%">&nbsp;</td>
    <td height="29" width="19%">&nbsp;</td>
  </tr>
  <tr bgcolor="#FF9933"> 
    <td height="31" width="7%">&nbsp;</td>
    <td height="31" width="5%"> 
      <div align="center"><b><font face="Arial, Helvetica, sans-serif">H</font></b></div>
    </td>
    <td height="31" width="8%"> 
      <div align="center"><b><font face="Arial, Helvetica, sans-serif">PH</font></b></div>
    </td>
    <td height="31" width="9%"> 
      <div align="center"><b><font face="Arial, Helvetica, sans-serif">1</font></b></div>
    </td>
    <td height="31" width="6%"> 
      <div align="center"><b><font face="Arial, Helvetica, sans-serif">2</font></b></div>
    </td>
    <td height="31" width="5%"> 
      <div align="center"><b><font face="Arial, Helvetica, sans-serif">3</font></b></div>
    </td>
    <td height="31" width="9%"> 
      <div align="center"><b><font face="Arial, Helvetica, sans-serif">4</font></b></div>
    </td>
    <td height="31" width="3%">&nbsp;</td>
    <td height="31" width="8%"> 
      <div align="center"><b><font face="Arial, Helvetica, sans-serif">Res</font></b></div>
    </td>
    <td height="31" width="7%">&nbsp;</td>
    <td height="31" width="8%">&nbsp;</td>
    <td height="31" width="6%">&nbsp;</td>
    <td height="31" width="19%">&nbsp;</td>
  </tr>
  <tr> 
    <td height="24" width="7%" bgcolor="#ff6666"> 
      <div align="center"><font color="#000000" face="Arial, Helvetica, sans-serif"><b>ARA</b></font></div>
    </td>
    <td height="24" width="5%" bgcolor="#ff6666"> 
      <div align="center"><font face="Arial, Helvetica, sans-serif"><a href="ARAH.php?codeFFR=<?php echo $ARAH; ?>" target="_blank"> 
        <?php echo $ARAH; ?>
        </a></font><font color="#000000" face="Arial, Helvetica, sans-serif"></font></div>
    </td>
    <td height="24" bgcolor="#ff6666" width="8%"> 
      <div align="center"><font face="Arial, Helvetica, sans-serif"><a href="ARAPH.php?codeFFR=<?php echo $ARAPH; ?>" target="_blank"> 
        <?php echo $ARAPH; ?>
        </a></font><font color="#000000" face="Arial, Helvetica, sans-serif"></font> 
      </div>
    </td>
    <td height="24" bgcolor="#ff6666" width="9%"> 
      <div align="center"><font face="Arial, Helvetica, sans-serif"><a href="ARAS1.php?codeFFR=<?php echo $ARAS1; ?>" target="_blank"> 
        <?php echo $ARAS1; ?>
        </a></font></div>
    </td>
    <td height="24" bgcolor="#ff6666" width="6%"> 
      <div align="center"><font face="Arial, Helvetica, sans-serif"><a href="ARAS2.php?codeFFR=<?php echo $ARAS2; ?>" target="_blank"> 
        <?php echo $ARAS2; ?>
        </a></font></div>
    </td>
    <td height="24" bgcolor="#ff6666" width="5%"> 
      <div align="center"><font color="#000000" face="Arial, Helvetica, sans-serif"> 
        </font><font face="Arial, Helvetica, sans-serif"><a href="ARAS3.php?codeFFR=<?php echo $ARAS3; ?>" target="_blank"> 
        <?php echo $ARAS3; ?>
        </a></font></div>
    </td>
    <td height="24" bgcolor="#ff6666" width="9%"> 
      <div align="center"><font color="#000000" face="Arial, Helvetica, sans-serif"> 
        </font><font face="Arial, Helvetica, sans-serif"><a href="ARAS4.php?codeFFR=<?php echo $ARAS4; ?>" target="_blank"> 
        <?php echo $ARAS4; ?>
        </a></font><font color="#000000" face="Arial, Helvetica, sans-serif"> 
        </font></div>
    </td>
    <td height="24" width="3%" bgcolor="#000000">&nbsp;</td>
    <td height="24" width="8%" bgcolor="#ff6666"> 
      <div align="center"><font face="Arial, Helvetica, sans-serif"><a href="ARAResH.php?codeFFR=<?php echo $ARAResH; ?>" target="_blank"> 
        <?php echo $ARAResH; ?>
        </a></font></div>
    </td>
    <td height="24" bgcolor="#ff6666" width="7%"> 
      <div align="center"><font face="Arial, Helvetica, sans-serif"><a href="ARAResPH.php?codeFFR=<?php echo $ARAResPH; ?>" target="_blank"> 
        <?php echo $ARAResPH; ?>
        </a></font></div>
    </td>
    <td height="24" bgcolor="#ff6666" width="8%"> 
      <div align="center"><font face="Arial, Helvetica, sans-serif"><a href="ARAResS1.php?codeFFR=<?php echo $ARAResS1; ?>" target="_blank"> 
        <?php echo $ARAResS1; ?>
        </a></font></div>
    </td>
    <td height="24" width="6%" bgcolor="#ff6666"> 
      <div align="center"><b><font face="Arial, Helvetica, sans-serif"><a href="ARAResS2.php?codeFFR=<?php echo $ARAResS2; ?>" target="_blank"> 
        <?php echo $HARAResS2; ?>
        </a></font></b></div>
    </td>
    <td height="24" width="19%" bgcolor="#ff6666"> 
      <div align="center"><font color="#000000" face="Arial, Helvetica, sans-serif"><b><a href="../majCodeFFR.php?ligue=ARA">ARA</a></b></font></div>
    </td>
  </tr>
  <tr> 
    <td width="7%"> 
      <div align="center"><font color="#000000" face="Arial, Helvetica, sans-serif"><b>BFC</b></font></div>
    </td>
    <td height="24" width="5%"> 
      <div align="center"><font face="Arial, Helvetica, sans-serif"><a href="BFCSH.php?codeFFR=<?php echo $BFCH; ?>" target="_blank"> 
        <?php echo $BFCH; ?>
        </a></font><font color="#000000" face="Arial, Helvetica, sans-serif"></font></div>
    </td>
    <td height="24" width="8%"> 
      <div align="center"><font face="Arial, Helvetica, sans-serif"><a href="BFCPH.php?codeFFR=<?php echo $BFCPH; ?>" target="_blank"> 
        <?php echo $BFCPH; ?>
        </a></font><font color="#000000" face="Arial, Helvetica, sans-serif"></font> 
      </div>
    </td>
    <td height="24" width="9%"> 
      <div align="center"><font face="Arial, Helvetica, sans-serif"><a href="BFCS1.php?codeFFR=<?php echo $BFCS1; ?>" target="_blank"> 
        <?php echo $BFCS1; ?>
        </a></font></div>
    </td>
    <td height="24" width="6%"> 
      <div align="center"><font face="Arial, Helvetica, sans-serif"><a href="BFCS2.php?codeFFR=<?php echo $BFCS2; ?>" target="_blank"> 
        <?php echo $BFCS2; ?>
        </a></font></div>
    </td>
    <td height="24" width="5%"> 
      <div align="center"><font color="#000000" face="Arial, Helvetica, sans-serif"> 
        </font><font face="Arial, Helvetica, sans-serif"><a href="BFCS3.php?codeFFR=<?php echo $BFCS3; ?>" target="_blank"> 
        <?php echo $BFCS3; ?>
        </a></font></div>
    </td>
    <td height="24" width="9%"> 
      <div align="center"><font color="#000000" face="Arial, Helvetica, sans-serif"> 
        </font><font face="Arial, Helvetica, sans-serif"><a href="BFCS4.php?codeFFR=<?php echo $BFCS4; ?>" target="_blank"> 
        <?php echo $BFCS4; ?>
        </a></font><font color="#000000" face="Arial, Helvetica, sans-serif"> 
        </font></div>
    </td>
    <td height="24" width="3%" bgcolor="#000000">&nbsp;</td>
    <td height="24" width="8%"> 
      <div align="center"><font face="Arial, Helvetica, sans-serif"><a href="BFCResH.php?codeFFR=<?php echo $BFCResH; ?>" target="_blank"> 
        <?php echo $BFCResH; ?>
        </a></font></div>
    </td>
    <td height="24" width="7%"> 
      <div align="center"><font face="Arial, Helvetica, sans-serif"><a href="BFCResPH.php?codeFFR=<?php echo $BFCResPH; ?>" target="_blank"> 
        <?php echo $BFCResPH; ?>
        </a></font></div>
    </td>
    <td height="24" width="8%"> 
      <div align="center"><font face="Arial, Helvetica, sans-serif"><a href="BFCResS1.php?codeFFR=<?php echo $BFCResS1; ?>" target="_blank"> 
        <?php echo $BFCResS1; ?>
        </a></font></div>
    </td>
    <td height="24" width="6%"> 
      <div align="center"><b><font face="Arial, Helvetica, sans-serif"><a href="BFCResS2.php?codeFFR=<?php echo $BFCResS2; ?>" target="_blank"> 
        <?php echo $BFCResS2; ?>
        </a></font></b></div>
    </td>
    <td width="19%"> 
      <div align="center"><font color="#000000" face="Arial, Helvetica, sans-serif"><b><a href="../majCodeFFR.php?ligue=BFC">BFC</a></b></font></div>
    </td>
  </tr>
  <tr> 
    <td height="22" width="7%" bgcolor="#ff6666"> 
      <div align="center"><b><font face="Arial, Helvetica, sans-serif">BRE</font></b></div>
    </td>
    <td height="24" width="5%" bgcolor="#ff6666"> 
      <div align="center"><font face="Arial, Helvetica, sans-serif"><a href="BRESH.php?codeFFR=<?php echo $BFCH; ?>" target="_blank"> 
        <?php echo $BREH; ?>
        </a></font><font color="#000000" face="Arial, Helvetica, sans-serif"></font></div>
    </td>
    <td height="24" bgcolor="#ff6666" width="8%"> 
      <div align="center"><font face="Arial, Helvetica, sans-serif"><a href="BREPH.php?codeFFR=<?php echo $BFCPH; ?>" target="_blank"> 
        <?php echo $BREPH; ?>
        </a></font><font color="#000000" face="Arial, Helvetica, sans-serif"></font> 
      </div>
    </td>
    <td height="24" bgcolor="#ff6666" width="9%"> 
      <div align="center"><font face="Arial, Helvetica, sans-serif"><a href="BRES1.php?codeFFR=<?php echo $BFCS1; ?>" target="_blank"> 
        <?php echo $BRES1; ?>
        </a></font></div>
    </td>
    <td height="24" bgcolor="#ff6666" width="6%"> 
      <div align="center"><font face="Arial, Helvetica, sans-serif"><a href="BRES2.php?codeFFR=<?php echo $BFCS2; ?>" target="_blank"> 
        <?php echo $BRES2; ?>
        </a></font></div>
    </td>
    <td height="24" bgcolor="#ff6666" width="5%"> 
      <div align="center"><font color="#000000" face="Arial, Helvetica, sans-serif"> 
        </font><font face="Arial, Helvetica, sans-serif"><a href="BRES3.php?codeFFR=<?php echo $BFCS3; ?>" target="_blank"> 
        <?php echo $BRES3; ?>
        </a></font></div>
    </td>
    <td height="24" bgcolor="#ff6666" width="9%"> 
      <div align="center"><font color="#000000" face="Arial, Helvetica, sans-serif"> 
        </font><font face="Arial, Helvetica, sans-serif"><a href="BRES4.php?codeFFR=<?php echo $BFCS4; ?>" target="_blank"> 
        <?php echo $BRES4; ?>
        </a></font><font color="#000000" face="Arial, Helvetica, sans-serif"> 
        </font></div>
    </td>
    <td height="24" width="3%" bgcolor="#000000">&nbsp;</td>
    <td height="24" width="8%" bgcolor="#ff6666"> 
      <div align="center"><font face="Arial, Helvetica, sans-serif"><a href="BREResH.php?codeFFR=<?php echo $BFCResH; ?>" target="_blank"> 
        <?php echo $BREResH; ?>
        </a></font></div>
    </td>
    <td height="24" bgcolor="#ff6666" width="7%"> 
      <div align="center"><font face="Arial, Helvetica, sans-serif"><a href="BREResPH.php?codeFFR=<?php echo $BFCResPH; ?>" target="_blank"> 
        <?php echo $BREResPH; ?>
        </a></font></div>
    </td>
    <td height="24" bgcolor="#ff6666" width="8%"> 
      <div align="center"><font face="Arial, Helvetica, sans-serif"><a href="BREResS1.php?codeFFR=<?php echo $BFCResS1; ?>" target="_blank"> 
        <?php echo $BREResS1; ?>
        </a></font></div>
    </td>
    <td height="24" width="6%" bgcolor="#ff6666"> 
      <div align="center"><b><font face="Arial, Helvetica, sans-serif"><a href="BREResS2.php?codeFFR=<?php echo $BFCResS2; ?>" target="_blank"> 
        <?php echo $BREResS2; ?>
        </a></font></b></div>
    </td>
    <td height="22" width="19%" bgcolor="#ff6666"> 
      <div align="center"><b><font color="#000000" face="Arial, Helvetica, sans-serif"><b><a href="../majCodeFFR.php?ligue=BRE">BRE</a></b></font></b></div>
    </td>
  </tr>
  </tbody> 
</table>
<p>&nbsp;</p>
<p>&nbsp;</p>
</body>
</html>
