<?php
mysql_connect("sql.franceserv.fr", "onepip-france", "lavelan09"); 
mysql_select_db("onepip-france-db1"); 

$id=110;
?>


<?php 
// ----  32me ALLER - Goal average ----------------------
$tabScoreA = array();
for ($i=3200; $i<3264 ; $i++)
	{
	$scoreA= "A".''.$i;
	//echo $scoreA;
		$query = "	SELECT $scoreA				 
					FROM  bdpfScoresA 
					WHERE id=$id "; 
						 $result = mysql_query($query);
						 while ($row = mysql_fetch_array($result) )
							{ 
							$tabScoreA[] = $row[0];
							}						
	}
?>

<?php 
// ----  32me RETOUR - Goal average ----------------------
$tabScoreR = array();
for ($i=3200; $i<3264 ; $i++)
	{
	$scoreR= "R".''.$i;
		$query = "	SELECT $scoreR				 
					FROM  bdpfScoresR 
					WHERE id=$id "; 
						 $result = mysql_query($query);
						 while ($row = mysql_fetch_array($result) )
							{ 
							$tabScoreR[] = $row[0];
							}						
	}

$A3201 = $tabScoreA[1] + $tabScoreR[1];
$A3202 = $tabScoreA[2] + $tabScoreR[2];
$A3203 = $tabScoreA[3] + $tabScoreR[3];
$A3204 = $tabScoreA[4] + $tabScoreR[4];
$A3205 = $tabScoreA[5] + $tabScoreR[5];
$A3206 = $tabScoreA[6] + $tabScoreR[6];
$A3207 = $tabScoreA[7] + $tabScoreR[7];
$A3208 = $tabScoreA[8] + $tabScoreR[8];

$A3209 = $tabScoreA[9] + $tabScoreR[9];
$A3210 = $tabScoreA[10] + $tabScoreR[10];
$A3211 = $tabScoreA[11] + $tabScoreR[11];
$A3212 = $tabScoreA[12] + $tabScoreR[12];
$A3213 = $tabScoreA[13] + $tabScoreR[13];
$A3214 = $tabScoreA[14] + $tabScoreR[14];
$A3215 = $tabScoreA[15] + $tabScoreR[15];
$A3216 = $tabScoreA[16] + $tabScoreR[16];

$A3217 = $tabScoreA[17] + $tabScoreR[17];
$A3218 = $tabScoreA[18] + $tabScoreR[18];
$A3219 = $tabScoreA[19] + $tabScoreR[19];
$A3220 = $tabScoreA[20] + $tabScoreR[20];
$A3221 = $tabScoreA[21] + $tabScoreR[21];
$A3222 = $tabScoreA[22] + $tabScoreR[22];
$A3223 = $tabScoreA[23] + $tabScoreR[23];
$A3224 = $tabScoreA[24] + $tabScoreR[24];

$A3225 = $tabScoreA[25] + $tabScoreR[25];
$A3226 = $tabScoreA[26] + $tabScoreR[26];
$A3227 = $tabScoreA[27] + $tabScoreR[27];
$A3228 = $tabScoreA[28] + $tabScoreR[28];
$A3229 = $tabScoreA[29] + $tabScoreR[29];
$A3230 = $tabScoreA[30] + $tabScoreR[30];
$A3231 = $tabScoreA[31] + $tabScoreR[31];
$A3232 = $tabScoreA[32] + $tabScoreR[32];

$A3233 = $tabScoreA[33] + $tabScoreR[33];
$A3234 = $tabScoreA[34] + $tabScoreR[34];
$A3235 = $tabScoreA[35] + $tabScoreR[35];
$A3236 = $tabScoreA[36] + $tabScoreR[36];
$A3237 = $tabScoreA[37] + $tabScoreR[37];
$A3238 = $tabScoreA[38] + $tabScoreR[38];
$A3239 = $tabScoreA[39] + $tabScoreR[39];
$A3240 = $tabScoreA[40] + $tabScoreR[40];

$A3242 = $tabScoreA[41] + $tabScoreR[41];
$A3242 = $tabScoreA[42] + $tabScoreR[42];
$A3243 = $tabScoreA[43] + $tabScoreR[43];
$A3244 = $tabScoreA[44] + $tabScoreR[44];
$A3245 = $tabScoreA[45] + $tabScoreR[45];
$A3246 = $tabScoreA[46] + $tabScoreR[46];
$A3247 = $tabScoreA[47] + $tabScoreR[47];
$A3248 = $tabScoreA[48] + $tabScoreR[48];

$A3249 = $tabScoreA[49] + $tabScoreR[49];
$A3250 = $tabScoreA[50] + $tabScoreR[50];
$A3251 = $tabScoreA[51] + $tabScoreR[51];
$A3252 = $tabScoreA[52] + $tabScoreR[52];
$A3253 = $tabScoreA[53] + $tabScoreR[53];
$A3254 = $tabScoreA[54] + $tabScoreR[54];
$A3255 = $tabScoreA[55] + $tabScoreR[55];
$A3256 = $tabScoreA[56] + $tabScoreR[56];

$A3257 = $tabScoreA[57] + $tabScoreR[57];
$A3258 = $tabScoreA[58] + $tabScoreR[58];
$A3259 = $tabScoreA[59] + $tabScoreR[59];
$A3260 = $tabScoreA[60] + $tabScoreR[60];
$A3261 = $tabScoreA[61] + $tabScoreR[61];
$A3262 = $tabScoreA[62] + $tabScoreR[62];
$A3263 = $tabScoreA[63] + $tabScoreR[63];
$A3264 = $tabScoreA[64] + $tabScoreR[64];

?>

<?php 
// ----  32me ALLER - Points Terrain ----------------------
$tabPtsA = array();
for ($i=3200; $i<3264 ; $i++)
	{
	$ptsA= "A".''.$i;
			$query = "	SELECT $scoreA				 
					FROM  bdpfScoresA 
					WHERE id=$id + 500 "; 
						 $result = mysql_query($query);
						 while ($row = mysql_fetch_array($result) )
							{ 
							$tabPtsA[] = $row[0];
							}						
	}
?>

<?php 
// ----  32me RETOUR - Points terrain ----------------------
$tabPtsR = array();
for ($i=3200; $i<3264 ; $i++)
	{
	$ptsR= "R".''.$i;
		$query = "	SELECT $scoreR				 
					FROM  bdpfScoresR 
					WHERE id=$id + 500 "; 
						 $result = mysql_query($query);
						 while ($row = mysql_fetch_array($result) )
							{ 
							$tabPtsR[] = $row[0];
							}						
	}

$pts3201 = $tabPtsA[1] + $tabPtsR[1];
$pts3202 = $tabPtsA[2] + $tabPtsR[2];
$pts3203 = $tabPtsA[3] + $tabPtsR[3];
$pts3204 = $tabPtsA[4] + $tabPtsR[4];
$pts3205 = $tabPtsA[5] + $tabPtsR[5];
$pts3206 = $tabPtsA[6] + $tabPtsR[6];
$pts3207 = $tabPtsA[7] + $tabPtsR[7];
$pts3208 = $tabPtsA[8] + $tabPtsR[8];

$pts3209 = $tabPtsA[9] + $tabPtsR[9];
$pts3210 = $tabPtsA[10] + $tabPtsR[10];
$pts3211 = $tabPtsA[11] + $tabPtsR[11];
$pts3212 = $tabPtsA[12] + $tabPtsR[12];
$pts3213 = $tabPtsA[13] + $tabPtsR[13];
$pts3214 = $tabPtsA[14] + $tabPtsR[14];
$pts3215 = $tabPtsA[15] + $tabPtsR[15];
$pts3216 = $tabPtsA[16] + $tabPtsR[16];

$pts3217 = $tabPtsA[17] + $tabPtsR[17];
$pts3218 = $tabPtsA[18] + $tabPtsR[18];
$pts3219 = $tabPtsA[19] + $tabPtsR[19];
$pts3220 = $tabPtsA[20] + $tabPtsR[20];
$pts3221 = $tabPtsA[21] + $tabPtsR[21];
$pts3222 = $tabPtsA[22] + $tabPtsR[22];
$pts3223 = $tabPtsA[23] + $tabPtsR[23];
$pts3224 = $tabPtsA[24] + $tabPtsR[24];

$pts3225 = $tabPtsA[25] + $tabPtsR[25];
$pts3226 = $tabPtsA[26] + $tabPtsR[26];
$pts3227 = $tabPtsA[27] + $tabPtsR[27];
$pts3228 = $tabPtsA[28] + $tabPtsR[28];
$pts3229 = $tabPtsA[29] + $tabPtsR[29];
$pts3230 = $tabPtsA[30] + $tabPtsR[30];
$pts3231 = $tabPtsA[31] + $tabPtsR[31];
$pts3232 = $tabPtsA[32] + $tabPtsR[32];

$pts3233 = $tabPtsA[33] + $tabPtsR[33];
$pts3234 = $tabPtsA[34] + $tabPtsR[34];
$pts3235 = $tabPtsA[35] + $tabPtsR[35];
$pts3236 = $tabPtsA[36] + $tabPtsR[36];
$pts3237 = $tabPtsA[37] + $tabPtsR[37];
$pts3238 = $tabPtsA[38] + $tabPtsR[38];
$pts3239 = $tabPtsA[39] + $tabPtsR[39];
$pts3240 = $tabPtsA[40] + $tabPtsR[40];

$pts3242 = $tabPtsA[41] + $tabPtsR[41];
$pts3242 = $tabPtsA[42] + $tabPtsR[42];
$pts3243 = $tabPtsA[43] + $tabPtsR[43];
$pts3244 = $tabPtsA[44] + $tabPtsR[44];
$pts3245 = $tabPtsA[45] + $tabPtsR[45];
$pts3246 = $tabPtsA[46] + $tabPtsR[46];
$pts3247 = $tabPtsA[47] + $tabPtsR[47];
$pts3248 = $tabPtsA[48] + $tabPtsR[48];

$pts3249 = $tabPtsA[49] + $tabPtsR[49];
$pts3250 = $tabPtsA[50] + $tabPtsR[50];
$pts3251 = $tabPtsA[51] + $tabPtsR[51];
$pts3252 = $tabPtsA[52] + $tabPtsR[52];
$pts3253 = $tabPtsA[53] + $tabPtsR[53];
$pts3254 = $tabPtsA[54] + $tabPtsR[54];
$pts3255 = $tabPtsA[55] + $tabPtsR[55];
$pts3256 = $tabPtsA[56] + $tabPtsR[56];

$pts3257 = $tabPtsA[57] + $tabPtsR[57];
$pts3258 = $tabPtsA[58] + $tabPtsR[58];
$pts3259 = $tabPtsA[59] + $tabPtsR[59];
$pts3260 = $tabPtsA[60] + $tabPtsR[60];
$pts3261 = $tabPtsA[61] + $tabPtsR[61];
$pts3262 = $tabPtsA[62] + $tabPtsR[62];
$pts3263 = $tabPtsA[63] + $tabPtsR[63];
$pts3264 = $tabPtsA[64] + $tabPtsR[64];

?>

<?php 
// ----  16me ALLER - Goal average ----------------------
$tabScoreA = array();
for ($i=1600; $i<1632 ; $i++)
	{
	$scoreA= "A".''.$i;
	//echo $scoreA;
		$query = "	SELECT $scoreA				 
					FROM  bdpfScoresA 
					WHERE id=$id "; 
						 $result = mysql_query($query);
						 while ($row = mysql_fetch_array($result) )
							{ 
							$tabScoreA[] = $row[0];
							}						
	}
?>

<?php 
// ----  16me RETOUR - Goal average ----------------------
$tabScoreR = array();
for ($i=3200; $i<1632 ; $i++)
	{
	$scoreR= "R".''.$i;
		$query = "	SELECT $scoreR				 
					FROM  bdpfScoresR 
					WHERE id=$id "; 
						 $result = mysql_query($query);
						 while ($row = mysql_fetch_array($result) )
							{ 
							$tabScoreR[] = $row[0];
							}						
	}

$A1601 = $tabScoreA[1] + $tabScoreR[1];
$A1602 = $tabScoreA[2] + $tabScoreR[2];
$A1603 = $tabScoreA[3] + $tabScoreR[3];
$A1604 = $tabScoreA[4] + $tabScoreR[4];
$A1605 = $tabScoreA[5] + $tabScoreR[5];
$A1606 = $tabScoreA[6] + $tabScoreR[6];
$A1607 = $tabScoreA[7] + $tabScoreR[7];
$A1608 = $tabScoreA[8] + $tabScoreR[8];

$A1609 = $tabScoreA[9] + $tabScoreR[9];
$A1610 = $tabScoreA[10] + $tabScoreR[10];
$A1611 = $tabScoreA[11] + $tabScoreR[11];
$A1612 = $tabScoreA[12] + $tabScoreR[12];
$A1613 = $tabScoreA[13] + $tabScoreR[13];
$A1614 = $tabScoreA[14] + $tabScoreR[14];
$A1615 = $tabScoreA[15] + $tabScoreR[15];
$A1616 = $tabScoreA[16] + $tabScoreR[16];

$A1617 = $tabScoreA[17] + $tabScoreR[17];
$A1618 = $tabScoreA[18] + $tabScoreR[18];
$A1619 = $tabScoreA[19] + $tabScoreR[19];
$A1620 = $tabScoreA[20] + $tabScoreR[20];
$A1621 = $tabScoreA[21] + $tabScoreR[21];
$A1622 = $tabScoreA[22] + $tabScoreR[22];
$A1623 = $tabScoreA[23] + $tabScoreR[23];
$A1624 = $tabScoreA[24] + $tabScoreR[24];

$A1625 = $tabScoreA[25] + $tabScoreR[25];
$A1626 = $tabScoreA[26] + $tabScoreR[26];
$A1627 = $tabScoreA[27] + $tabScoreR[27];
$A1628 = $tabScoreA[28] + $tabScoreR[28];
$A1629 = $tabScoreA[29] + $tabScoreR[29];
$A1630 = $tabScoreA[30] + $tabScoreR[30];
$A1631 = $tabScoreA[31] + $tabScoreR[31];
$A1632 = $tabScoreA[32] + $tabScoreR[32];


?>

<?php 
// ----  16me ALLER - Points Terrain ----------------------
$tabPtsA = array();
for ($i=1600; $i<1664 ; $i++)
	{
	$ptsA= "A".''.$i;
			$query = "	SELECT $scoreA				 
					FROM  bdpfScoresA 
					WHERE id=$id + 500 "; 
						 $result = mysql_query($query);
						 while ($row = mysql_fetch_array($result) )
							{ 
							$tabPtsA[] = $row[0];
							}						
	}
?>

<?php 
// ----  16me RETOUR - Points terrain ----------------------
$tabPtsR = array();
for ($i=1600; $i<1664 ; $i++)
	{
	$ptsR= "R".''.$i;
		$query = "	SELECT $scoreR				 
					FROM  bdpfScoresR 
					WHERE id=$id + 500 "; 
						 $result = mysql_query($query);
						 while ($row = mysql_fetch_array($result) )
							{ 
							$tabPtsR[] = $row[0];
							}						
	}

$pts1601 = $tabPtsA[1] + $tabPtsR[1];
$pts1602 = $tabPtsA[2] + $tabPtsR[2];
$pts1603 = $tabPtsA[3] + $tabPtsR[3];
$pts1604 = $tabPtsA[4] + $tabPtsR[4];
$pts1605 = $tabPtsA[5] + $tabPtsR[5];
$pts1606 = $tabPtsA[6] + $tabPtsR[6];
$pts1607 = $tabPtsA[7] + $tabPtsR[7];
$pts1608 = $tabPtsA[8] + $tabPtsR[8];

$pts1609 = $tabPtsA[9] + $tabPtsR[9];
$pts1610 = $tabPtsA[10] + $tabPtsR[10];
$pts1611 = $tabPtsA[11] + $tabPtsR[11];
$pts1612 = $tabPtsA[12] + $tabPtsR[12];
$pts1613 = $tabPtsA[13] + $tabPtsR[13];
$pts1614 = $tabPtsA[14] + $tabPtsR[14];
$pts1615 = $tabPtsA[15] + $tabPtsR[15];
$pts1616 = $tabPtsA[16] + $tabPtsR[16];

$pts1617 = $tabPtsA[17] + $tabPtsR[17];
$pts1618 = $tabPtsA[18] + $tabPtsR[18];
$pts1619 = $tabPtsA[19] + $tabPtsR[19];
$pts1620 = $tabPtsA[20] + $tabPtsR[20];
$pts1621 = $tabPtsA[21] + $tabPtsR[21];
$pts1622 = $tabPtsA[22] + $tabPtsR[22];
$pts1623 = $tabPtsA[23] + $tabPtsR[23];
$pts1624 = $tabPtsA[24] + $tabPtsR[24];

$pts1625 = $tabPtsA[25] + $tabPtsR[25];
$pts1626 = $tabPtsA[26] + $tabPtsR[26];
$pts1627 = $tabPtsA[27] + $tabPtsR[27];
$pts1628 = $tabPtsA[28] + $tabPtsR[28];
$pts1629 = $tabPtsA[29] + $tabPtsR[29];
$pts1630 = $tabPtsA[30] + $tabPtsR[30];
$pts1631 = $tabPtsA[31] + $tabPtsR[31];
$pts1632 = $tabPtsA[32] + $tabPtsR[32];



?>