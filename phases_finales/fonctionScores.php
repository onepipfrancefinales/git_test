<?php

// $idAR == $id + 500 ou 





mysql_connect("sql.franceserv.fr", "onepip-france", "lavelan09"); 
mysql_select_db("onepip-france-db1"); 
?>


<?php 
// ---- 32me ----------------------

// ******************* Résultats rencontres ALLER *****************************

$queryA = "	SELECT id, 	A3201, A3202, A3203, A3204, A3205, A3206, A3207, A3208, A3209, A3210, A3211, A3212, A3213, A3214, A3215, A3216,
 	                 	A3217, A3218, A3219, A3220, A3221, A3222, A3223, A3224, A3225, A3226, A3227, A3228, A3229, A3230, A3231, A3232,
                     	A3233, A3234, A3235, A3236, A3237, A3238, A3239, A3240, A3241, A3242, A3243, A3244, A3245, A3246, A3247, A3248, 
					 	A3249, A3250, A3251, A3252, A3253, A3254, A3255, A3256, A3257, A3258, A3259, A3260, A3261, A3262, A3263, A3264 
			FROM  bdpfScoresA 
			WHERE id=$id and annee=$annee "; 
 	
	$resultA = mysql_query($queryA);
 	while ($row = mysql_fetch_array($resultA) )
	{ 
	$A3201 = $row[1];
	$A3202 = $row[2];
	$A3203 = $row[3];
	$A3204 = $row[4];
	$A3205 = $row[5];
	$A3206 = $row[6];
	$A3207 = $row[7];
	$A3208 = $row[8];
	$A3209 = $row[9];
	$A3210 = $row[10];
	$A3211 = $row[11];
	$A3212 = $row[12];
	$A3213 = $row[13];
	$A3214 = $row[14];
	$A3215 = $row[15];
	$A3216 = $row[16];
	$A3217 = $row[17];
	$A3218 = $row[18];
	$A3219 = $row[19];
	$A3220 = $row[20];
	$A3221 = $row[21];
	$A3222 = $row[22];
	$A3223 = $row[23];
	$A3224 = $row[24];
	$A3225 = $row[25];
	$A3226 = $row[26];
	$A3227 = $row[27];
	$A3228 = $row[28];
	$A3229 = $row[29];
	$A3230 = $row[30];
	$A3231 = $row[31];
	$A3232 = $row[32];
	
	$A3233 = $row[33];
	$A3234 = $row[34];
	$A3235 = $row[35];
	$A3236 = $row[36];
	$A3237 = $row[37];
	$A3238 = $row[38];
	$A3239 = $row[39];
	$A3240 = $row[40];
	$A3241 = $row[41];
	$A3242 = $row[42];
	$A3243 = $row[43];
	$A3244 = $row[44];
	$A3245 = $row[45];
	$A3246 = $row[46];
	$A3247 = $row[47];
	$A3248 = $row[48];
	$A3249 = $row[49];
	$A3250 = $row[50];
	$A3251 = $row[51];
	$A3252 = $row[52];
	$A3253 = $row[53];
	$A3254 = $row[54];
	$A3255 = $row[55];
	$A3256 = $row[56];
	$A3257 = $row[57];
	$A3258 = $row[58];
	$A3259 = $row[59];
	$A3260 = $row[60];
	$A3261 = $row[61];
	$A3262 = $row[62];
	$A3263 = $row[63];
	$A3264 = $row[64];
	
	}
//**************************** Résultats rencontres RETOUR *******************************
	
 $queryR = "	SELECT id, 	R3201, R3202, R3203, R3204, R3205, R3206, R3207, R3208, R3209, R3210, R3211, R3212, R3213, R3214, R3215, R3216,
 	                 	R3217, R3218, R3219, R3220, R3221, R3222, R3223, R3224, R3225, R3226, R3227, R3228, R3229, R3230, R3231, R3232,
                     	R3233, R3234, R3235, R3236, R3237, R3238, R3239, R3240, R3241, R3242, R3243, R3244, R3245, R3246, R3247, R3248, 
					 	R3249, R3250, R3251, R3252, R3253, R3254, R3255, R3256, R3257, R3258, R3259, R3260, R3261, R3262, R3263, R3264 
				FROM  bdpfScoresR 
				WHERE id=$id and annee=$annee "; 
 	
	$resultR = mysql_query($queryR);
 	while ($row = mysql_fetch_array($resultR) )
	{ 
	$R3201 = $row[1];
	$R3202 = $row[2];
	$R3203 = $row[3];
	$R3204 = $row[4];
	$R3205 = $row[5];
	$R3206 = $row[6];
	$R3207 = $row[7];
	$R3208 = $row[8];
	$R3209 = $row[9];
	$R3210 = $row[10];
	$R3211 = $row[11];
	$R3212 = $row[12];
	$R3213 = $row[13];
	$R3214 = $row[14];
	$R3215 = $row[15];
	$R3216 = $row[16];
	$R3217 = $row[17];
	$R3218 = $row[18];
	$R3219 = $row[19];
	$R3220 = $row[20];
	$R3221 = $row[21];
	$R3222 = $row[22];
	$R3223 = $row[23];
	$R3224 = $row[24];
	$R3225 = $row[25];
	$R3226 = $row[26];
	$R3227 = $row[27];
	$R3228 = $row[28];
	$R3229 = $row[29];
	$R3230 = $row[30];
	$R3231 = $row[31];
	$R3232 = $row[32];
	
	$R3233 = $row[33];
	$R3234 = $row[34];
	$R3235 = $row[35];
	$R3236 = $row[36];
	$R3237 = $row[37];
	$R3238 = $row[38];
	$R3239 = $row[39];
	$R3240 = $row[40];
	$R3241 = $row[41];
	$R3242 = $row[42];
	$R3243 = $row[43];
	$R3244 = $row[44];
	$R3245 = $row[45];
	$R3246 = $row[46];
	$R3247 = $row[47];
	$R3248 = $row[48];
	$R3249 = $row[49];
	$R3250 = $row[50];
	$R3251 = $row[51];
	$R3252 = $row[52];
	$R3253 = $row[53];
	$R3254 = $row[54];
	$R3255 = $row[55];
	$R3256 = $row[56];
	$R3257 = $row[57];
	$R3258 = $row[58];
	$R3259 = $row[59];
	$R3260 = $row[60];
	$R3261 = $row[61];
	$R3262 = $row[62];
	$R3263 = $row[63];
	$R3264 = $row[64];
	
	}
	
// ****** Sommes scores rencontres Aller Retour ********************

	$A3201 = $A3201 + $R3201;
	$A3202 = $A3202 + $R3202;
	$A3203 = $A3203 + $R3203;
	$A3204 = $A3204 + $R3204;
	$A3205 = $A3205 + $R3205;
	$A3206 = $A3206 + $R3206;
	$A3207 = $A3207 + $R3207;
	$A3208 = $A3208 + $R3208;
	$A3209 = $A3209 + $R3209;
	
	$A3210 = $A3210 + $R3210;
	$A3211 = $A3211 + $R3211;
	$A3212 = $A3212 + $R3212;
	$A3213 = $A3213 + $R3213;
	$A3214 = $A3214 + $R3214;
	$A3215 = $A3215 + $R3215;
	$A3216 = $A3216 + $R3216;
	$A3218 = $A3217 + $R3217;
	$A3218 = $A3218 + $R3218;
	$A3219 = $A3219 + $R3219;
	
	$A3220 = $A3220 + $R3220;
	$A3221 = $A3221 + $R3221;
	$A3222 = $A3222 + $R3222;
	$A3223 = $A3223 + $R3223;
	$A3224 = $A3224 + $R3224;
	$A3225 = $A3225 + $R3225;
	$A3226 = $A3226 + $R3226;
	$A3227 = $A3227 + $R3227;
	$A3228 = $A3228 + $R3228;
	$A3229 = $A3229 + $R3229;
	
	$A3230 = $A3230 + $R3230;
	$A3231 = $A3231 + $R3231;
	$A3232 = $A3232 + $R3232;
	$A3233 = $A3233 + $R3233;
	$A3234 = $A3234 + $R3234;
	$A3235 = $A3235 + $R3235;
	$A3236 = $A3236 + $R3236;
	$A3237 = $A3237 + $R3237;
	$A3238 = $A3238 + $R3238;
	$A3239 = $A3239 + $R3239;
	
	$A3240 = $A3240 + $R3240;
	$A3241 = $A3241 + $R3241;
	$A3242 = $A3242 + $R3242;
	$A3243 = $A3243 + $R3243;
	$A3244 = $A3244 + $R3244;
	$A3245 = $A3245 + $R3245;
	$A3246 = $A3246 + $R3246;
	$A3247 = $A3247 + $R3247;
	$A3248 = $A3248 + $R3248;
	$A3249 = $A3249 + $R3249;
	
	$A3250 = $A3250 + $R3250;
	$A3251 = $A3251 + $R3251;
	$A3252 = $A3252 + $R3252;
	$A3253 = $A3253 + $R3253;
	$A3254 = $A3254 + $R3254;
	$A3255 = $A3255 + $R3255;
	$A3256 = $A3256 + $R3256;
	$A3257 = $A3257 + $R3257;
	$A3258 = $A3258 + $R3258;
	$A3259 = $A3259 + $R3259;
	
	$A3260 = $A3260 + $R3260;
	$A3261 = $A3261 + $R3261;
	$A3262 = $A3262 + $R3262;
	$A3263 = $A3263 + $R3263;
	$A3264 = $A3264 + $R3264;



//**************************** Points terrain rencontres ALLER *******************************
$PTSA = $id + 500;
$queryPTSA = "	SELECT id, 	A3201, A3202, A3203, A3204, A3205, A3206, A3207, A3208, A3209, A3210, A3211, A3212, A3213, A3214, A3215, A3216,
 	                 	A3217, A3218, A3219, A3220, A3221, A3222, A3223, A3224, A3225, A3226, A3227, A3228, A3229, A3230, A3231, A3232,
                     	A3233, A3234, A3235, A3236, A3237, A3238, A3239, A3240, A3241, A3242, A3243, A3244, A3245, A3246, A3247, A3248, 
					 	A3249, A3250, A3251, A3252, A3253, A3254, A3255, A3256, A3257, A3258, A3259, A3260, A3261, A3262, A3263, A3264 
			FROM  bdpfScoresA 
			WHERE id=$PTSA and annee=$annee "; 
 	
	$resultPTSA = mysql_query($queryPTSA);
 	while ($row = mysql_fetch_array($resultPTSA) )
	{ 
	$PTSA3201 = $row[1];
	$PTSA3202 = $row[2];
	$PTSA3203 = $row[3];
	$PTSA3204 = $row[4];
	$PTSA3205 = $row[5];
	$PTSA3206 = $row[6];
	$PTSA3207 = $row[7];
	$PTSA3208 = $row[8];
	$PTSA3209 = $row[9];
	$PTSA3210 = $row[10];
	$PTSA3211 = $row[11];
	$PTSA3212 = $row[12];
	$PTSA3213 = $row[13];
	$PTSA3214 = $row[14];
	$PTSA3215 = $row[15];
	$PTSA3216 = $row[16];
	$PTSA3217 = $row[17];
	$PTSA3218 = $row[18];
	$PTSA3219 = $row[19];
	$PTSA3220 = $row[20];
	$PTSA3221 = $row[21];
	$PTSA3222 = $row[22];
	$PTSA3223 = $row[23];
	$PTSA3224 = $row[24];
	$PTSA3225 = $row[25];
	$PTSA3226 = $row[26];
	$PTSA3227 = $row[27];
	$PTSA3228 = $row[28];
	$PTSA3229 = $row[29];
	$PTSA3230 = $row[30];
	$PTSA3231 = $row[31];
	$PTSA3232 = $row[32];
	
	$PTSA3233 = $row[33];
	$PTSA3234 = $row[34];
	$PTSA3235 = $row[35];
	$PTSA3236 = $row[36];
	$PTSA3237 = $row[37];
	$PTSA3238 = $row[38];
	$PTSA3239 = $row[39];
	$PTSA3240 = $row[40];
	$PTSA3241 = $row[41];
	$PTSA3242 = $row[42];
	$PTSA3243 = $row[43];
	$PTSA3244 = $row[44];
	$PTSA3245 = $row[45];
	$PTSA3246 = $row[46];
	$PTSA3247 = $row[47];
	$PTSA3248 = $row[48];
	$PTSA3249 = $row[49];
	$PTSA3250 = $row[50];
	$PTSA3251 = $row[51];
	$PTSA3252 = $row[52];
	$PTSA3253 = $row[53];
	$PTSA3254 = $row[54];
	$PTSA3255 = $row[55];
	$PTSA3256 = $row[56];
	$PTSA3257 = $row[57];
	$PTSA3258 = $row[58];
	$PTSA3259 = $row[59];
	$PTSA3260 = $row[60];
	$PTSA3261 = $row[61];
	$PTSA3262 = $row[62];
	$PTSA3263 = $row[63];
	$PTSA3264 = $row[64];
	
	}



//**************************** Points terrain rencontres RETOUR *******************************
 $PTSR = $id + 500;
 $queryPTSR = "	SELECT id, 	R3201, R3202, R3203, R3204, R3205, R3206, R3207, R3208, R3209, R3210, R3211, R3212, R3213, R3214, R3215, R3216,
 	                 	R3217, R3218, R3219, R3220, R3221, R3222, R3223, R3224, R3225, R3226, R3227, R3228, R3229, R3230, R3231, R3232,
                     	R3233, R3234, R3235, R3236, R3237, R3238, R3239, R3240, R3241, R3242, R3243, R3244, R3245, R3246, R3247, R3248, 
					 	R3249, R3250, R3251, R3252, R3253, R3254, R3255, R3256, R3257, R3258, R3259, R3260, R3261, R3262, R3263, R3264 
				FROM  bdpfScoresR 
				WHERE id=$PTSR and annee=$annee "; 
 	
	$resultPTSR = mysql_query($queryPTSR);
 	while ($row = mysql_fetch_array($resultPTSR) )
	{ 
	$PTSR3201 = $row[1];
	$PTSR3202 = $row[2];
	$PTSR3203 = $row[3];
	$PTSR3204 = $row[4];
	$PTSR3205 = $row[5];
	$PTSR3206 = $row[6];
	$PTSR3207 = $row[7];
	$PTSR3208 = $row[8];
	$PTSR3209 = $row[9];
	$PTSR3210 = $row[10];
	$PTSR3211 = $row[11];
	$PTSR3212 = $row[12];
	$PTSR3213 = $row[13];
	$PTSR3214 = $row[14];
	$PTSR3215 = $row[15];
	$PTSR3216 = $row[16];
	$PTSR3217 = $row[17];
	$PTSR3218 = $row[18];
	$PTSR3219 = $row[19];
	$PTSR3220 = $row[20];
	$PTSR3221 = $row[21];
	$PTSR3222 = $row[22];
	$PTSR3223 = $row[23];
	$PTSR3224 = $row[24];
	$PTSR3225 = $row[25];
	$PTSR3226 = $row[26];
	$PTSR3227 = $row[27];
	$PTSR3228 = $row[28];
	$PTSR3229 = $row[29];
	$PTSR3230 = $row[30];
	$PTSR3231 = $row[31];
	$PTSR3232 = $row[32];
	
	$PTSR3233 = $row[33];
	$PTSR3234 = $row[34];
	$PTSR3235 = $row[35];
	$PTSR3236 = $row[36];
	$PTSR3237 = $row[37];
	$PTSR3238 = $row[38];
	$PTSR3239 = $row[39];
	$PTSR3240 = $row[40];
	$PTSR3241 = $row[41];
	$PTSR3242 = $row[42];
	$PTSR3243 = $row[43];
	$PTSR3244 = $row[44];
	$PTSR3245 = $row[45];
	$PTSR3246 = $row[46];
	$PTSR3247 = $row[47];
	$PTSR3248 = $row[48];
	$PTSR3249 = $row[49];
	$PTSR3250 = $row[50];
	$PTSR3251 = $row[51];
	$PTSR3252 = $row[52];
	$PTSR3253 = $row[53];
	$PTSR3254 = $row[54];
	$PTSR3255 = $row[55];
	$PTSR3256 = $row[56];
	$PTSR3257 = $row[57];
	$PTSR3258 = $row[58];
	$PTSR3259 = $row[59];
	$PTSR3260 = $row[60];
	$PTSR3261 = $row[61];
	$PTSR3262 = $row[62];
	$PTSR3263 = $row[63];
	$PTSR3264 = $row[64];
	
	}



// *************************** Sommes Points terrain rencontres Aller Retour ********************

	$PTSA3201 = $PTSA3201 + $PTSR3201;
	$PTSA3202 = $PTSA3202 + $PTSR3202;
	$PTSA3203 = $PTSA3203 + $PTSR3203;
	$PTSA3204 = $PTSA3204 + $PTSR3204;
	$PTSA3205 = $PTSA3205 + $PTSR3205;
	$PTSA3206 = $PTSA3206 + $PTSR3206;
	$PTSA3207 = $PTSA3207 + $PTSR3207;
	$PTSA3208 = $PTSA3208 + $PTSR3208;
	$PTSA3209 = $PTSA3209 + $PTSR3209;
	
	$PTSA3210 = $PTSA3210 + $PTSR3210;
	$PTSA3211 = $PTSA3211 + $PTSR3211;
	$PTSA3212 = $PTSA3212 + $PTSR3212;
	$PTSA3213 = $PTSA3213 + $PTSR3213;
	$PTSA3214 = $PTSA3214 + $PTSR3214;
	$PTSA3215 = $PTSA3215 + $PTSR3215;
	$PTSA3216 = $PTSA3216 + $PTSR3216;
	$PTSA3218 = $PTSA3217 + $PTSR3217;
	$PTSA3218 = $PTSA3218 + $PTSR3218;
	$PTSA3219 = $PTSA3219 + $PTSR3219;
	
	$PTSA3220 = $PTSA3220 + $PTSR3220;
	$PTSA3221 = $PTSA3221 + $PTSR3221;
	$PTSA3222 = $PTSA3222 + $PTSR3222;
	$PTSA3223 = $PTSA3223 + $PTSR3223;
	$PTSA3224 = $PTSA3224 + $PTSR3224;
	$PTSA3225 = $PTSA3225 + $PTSR3225;
	$PTSA3226 = $PTSA3226 + $PTSR3226;
	$PTSA3227 = $PTSA3227 + $PTSR3227;
	$PTSA3228 = $PTSA3228 + $PTSR3228;
	$PTSA3229 = $PTSA3229 + $PTSR3229;
	
	$PTSA3230 = $PTSA3230 + $PTSR3230;
	$PTSA3231 = $PTSA3231 + $PTSR3231;
	$PTSA3232 = $PTSA3232 + $PTSR3232;
	$PTSA3233 = $PTSA3233 + $PTSR3233;
	$PTSA3234 = $PTSA3234 + $PTSR3234;
	$PTSA3235 = $PTSA3235 + $PTSR3235;
	$PTSA3236 = $PTSA3236 + $PTSR3236;
	$PTSA3237 = $PTSA3237 + $PTSR3237;
	$PTSA3238 = $PTSA3238 + $PTSR3238;
	$PTSA3239 = $PTSA3239 + $PTSR3239;
	
	$PTSA3240 = $PTSA3240 + $PTSR3240;
	$PTSA3241 = $PTSA3241 + $PTSR3241;
	$PTSA3242 = $PTSA3242 + $PTSR3242;
	$PTSA3243 = $PTSA3243 + $PTSR3243;
	$PTSA3244 = $PTSA3244 + $PTSR3244;
	$PTSA3245 = $PTSA3245 + $PTSR3245;
	$PTSA3246 = $PTSA3246 + $PTSR3246;
	$PTSA3247 = $PTSA3247 + $PTSR3247;
	$PTSA3248 = $PTSA3248 + $PTSR3248;
	$PTSA3249 = $PTSA3249 + $PTSR3249;
	
	$PTSA3250 = $PTSA3250 + $PTSR3250;
	$PTSA3251 = $PTSA3251 + $PTSR3251;
	$PTSA3252 = $PTSA3252 + $PTSR3252;
	$PTSA3253 = $PTSA3253 + $PTSR3253;
	$PTSA3254 = $PTSA3254 + $PTSR3254;
	$PTSA3255 = $PTSA3255 + $PTSR3255;
	$PTSA3256 = $PTSA3256 + $PTSR3256;
	$PTSA3257 = $PTSA3257 + $PTSR3257;
	$PTSA3258 = $PTSA3258 + $PTSR3258;
	$PTSA3259 = $PTSA3259 + $PTSR3259;
	
	$PTSA3260 = $PTSA3260 + $PTSR3260;
	$PTSA3261 = $PTSA3261 + $PTSR3261;
	$PTSA3262 = $PTSA3262 + $PTSR3262;
	$PTSA3263 = $PTSA3263 + $PTSR3263;
	$PTSA3264 = $PTSA3264 + $PTSR3264;




?>


<?php 
// ----16me----------------------
$query = "SELECT id, A1601, A1602, A1603, A1604, A1605, A1606, A1607, A1608, A1609, A1610, A1611, A1612, A1613, A1614, A1615, A1616, 
					 A1617, A1618, A1619, A1620, A1621, A1622, A1623, A1624, A1625, A1626, A1627, A1628, A1629, A1630, A1631, A1632 
					 FROM bdpfScoresA 
					 WHERE id=$id and annee=$annee"; // Requête SQL
 $result = mysql_query($query);
 	while ($row = mysql_fetch_array($result) )
	{ 
	$A1601 = $row[1];
	$A1602 = $row[2];
	$A1603 = $row[3];
	$A1604 = $row[4];
	$A1605 = $row[5];
	$A1606 = $row[6];
	$A1607 = $row[7];
	$A1608 = $row[8];
	$A1609 = $row[9];
	$A1610 = $row[10];
	$A1611 = $row[11];
	$A1612 = $row[12];
	$A1613 = $row[13];
	$A1614 = $row[14];
	$A1615 = $row[15];
	$A1616 = $row[16];
	
	$A1617 = $row[17];
	$A1618 = $row[18];
	$A1619 = $row[19];
	$A1620 = $row[20];
	$A1621 = $row[21];
	$A1622 = $row[22];
	$A1623 = $row[23];
	$A1624 = $row[24];
	$A1625 = $row[25];
	$A1626 = $row[26];
	$A1627 = $row[27];
	$A1628 = $row[28];
	$A1629 = $row[29];
	$A1630 = $row[30];
	$A1631 = $row[31];
	$A1632 = $row[32];
	
	
	
	}
 
?>

<?php // ----8me-----Quarts----Demi------Finale-------
$query = "	SELECT id, A8001, A8002, A8003, A8004, A8005, A8006, A8007, A8008, A8009, A8010, A8011, A8012, A8013, A8014, A8015, A8016,
					   A4001, A4002, A4003, A4004, A4005, A4006, A4007, A4008,A2001, A2002, A2003, A2004, A1001, A1002 
			FROM bdpfScoresA 
			WHERE id=$id and annee=$annee "; 
			
 $result = mysql_query($query);
 	while ($row = mysql_fetch_array($result) )
	{ 
	$A8001 = $row[1];
	$A8002 = $row[2];
	$A8003 = $row[3];
	$A8004 = $row[4];
	$A8005 = $row[5];
	$A8006 = $row[6];
	$A8007 = $row[7];
	$A8008 = $row[8];
	$A8009 = $row[9];
	$A8010 = $row[10];
	$A8011 = $row[11];
	$A8012 = $row[12];
	$A8013 = $row[13];
	$A8014 = $row[14];
	$A8015 = $row[15];
	$A8016 = $row[16];
	
	
	$A4001 = $row[17];
	$A4002 = $row[18];
	$A4003 = $row[19];
	$A4004 = $row[20];
	$A4005 = $row[21];
	$A4006 = $row[22];
	$A4007 = $row[23];
	$A4008 = $row[24];
	
	$A2001 = $row[25];
	$A2002 = $row[26];
	$A2003 = $row[27];
	$A2004 = $row[28];
	
	$A1001 = $row[29];
	$A1002 = $row[30];
	
	
	}
 
	
mysql_close(); 


//*************mise à zero des scores**************************
//
//        ****** 32me de finale*********

if ($A3201+$A3202==0) {$A3201="-";	$A3202="-";   }
if ($A3203+$A3204==0) {$A3203="-";	$A3204="-";   }
if ($A3205+$A3206==0) {$A3205="-";	$A3206="-";   }
if ($A3207+$A3208==0) {$A3207="-";	$A3208="-";   }
if ($A3209+$A3210==0) {$A3209="-";	$A3210="-";   }
if ($A3211+$A3212==0) {$A3211="-";	$A3212="-";   }
if ($A3213+$A3214==0) {$A3213="-";	$A3214="-";   }
if ($A3215+$A3216==0) {$A3215="-";	$A3216="-";   }
if ($A3217+$A3218==0) {$A3217="-";	$A3218="-";   }
if ($A3219+$A3220==0) {$A3219="-";	$A3220="-";   }
if ($A3221+$A3222==0) {$A3221="-";	$A3222="-";   }
if ($A3223+$A3224==0) {$A3223="-";	$A3224="-";   }
if ($A3225+$A3226==0) {$A3225="-";	$A3226="-";   }
if ($A3227+$A3228==0) {$A3227="-";	$A3228="-";   }
if ($A3229+$A3230==0) {$A3229="-";	$A3230="-";   }
if ($A3231+$A3232==0) {$A3231="-";	$A3232="-";   }

if ($A3233+$A3234==0) {$A3233="-";	$A3234="-";   }
if ($A3235+$A3236==0) {$A3235="-";	$A3236="-";   }
if ($A3237+$A3238==0) {$A3237="-";	$A3238="-";   }
if ($A3239+$A3240==0) {$A3239="-";	$A3240="-";   }
if ($A3241+$A3242==0) {$A3241="-";	$A3242="-";   }
if ($A3243+$A3244==0) {$A3243="-";	$A3244="-";   }
if ($A3245+$A3246==0) {$A3245="-";	$A3246="-";   }
if ($A3247+$A3248==0) {$A3247="-";	$A3248="-";   }
if ($A3249+$A3250==0) {$A3249="-";	$A3250="-";   }
if ($A3251+$A3252==0) {$A3251="-";	$A3252="-";   }
if ($A3253+$A3254==0) {$A3253="-";	$A3254="-";   }
if ($A3255+$A3256==0) {$A3255="-";	$A3256="-";   }
if ($A3257+$A3258==0) {$A3257="-";	$A3258="-";   }
if ($A3259+$A3260==0) {$A3259="-";	$A3260="-";   }
if ($A3261+$A3262==0) {$A3261="-";	$A3262="-";   }
if ($A3263+$A3264==0) {$A3263="-";	$A3264="-";   }


//               ****** 16me de finale*********

if ($A1601+$A1602==0) {$A1601="-";	$A1602="-";  $pts3A1601="-";	$pts3A1602="-"; }
if ($A1603+$A1604==0) {$A1603="-";	$A1604="-";  $pts3A1603="-";	$pts3A1604="-"; }
if ($A1605+$A1606==0) {$A1605="-";	$A1606="-";  $pts3A1605="-";	$pts3A1606="-"; }
if ($A1607+$A1608==0) {$A1607="-";	$A1608="-";  $pts3A1607="-";	$pts3A1608="-"; }
if ($A1609+$A1610==0) {$A1609="-";	$A1610="-";  $pts3A1609="-";	$pts3A1610="-"; }
if ($A1611+$A1612==0) {$A1611="-";	$A1612="-";  $pts3A1611="-";	$pts3A1612="-"; }
if ($A1613+$A1614==0) {$A1613="-";	$A1614="-";  $pts3A1613="-";	$pts3A1614="-"; }
if ($A1615+$A1616==0) {$A1615="-";	$A1616="-";  $pts3A1615="-";	$pts3A1616="-"; }
if ($A1617+$A1618==0) {$A1617="-";	$A1618="-";  $pts3A1617="-";	$pts3A1618="-"; }
if ($A1619+$A1620==0) {$A1619="-";	$A1620="-";  $pts3A1619="-";	$pts3A1620="-"; }
if ($A1621+$A1622==0) {$A1621="-";	$A1622="-";  $pts3A1621="-";	$pts3A1622="-"; }
if ($A1623+$A1624==0) {$A1623="-";	$A1624="-";  $pts3A1623="-";	$pts3A1624="-"; }
if ($A1625+$A1626==0) {$A1625="-";	$A1626="-";  $pts3A1625="-";	$pts3A1626="-"; }
if ($A1627+$A1628==0) {$A1627="-";	$A1628="-";  $pts3A1627="-";	$pts3A1628="-"; }
if ($A1629+$A1630==0) {$A1629="-";	$A1630="-";  $pts3A1629="-";	$pts3A1630="-"; }
if ($A1631+$A1632==0) {$A1631="-";	$A1632="-";  $pts3A1631="-";	$pts3A1632="-"; }


//                           ****** 8me de finale  *****************

if ($A8001+$A8002==0) {$A8001="-";	$A8002="-";  $A8001="-";	$A8002="-"; }
if ($A8003+$A8004==0) {$A8003="-";	$A8004="-";  $A8003="-";	$A8004="-"; }
if ($A8005+$A8006==0) {$A8005="-";	$A8006="-";  $A8005="-";	$A8006="-"; }
if ($A8007+$A8008==0) {$A8007="-";	$A8008="-";  $A8007="-";	$A8008="-"; }
if ($A8001+$A8002==0) {$A8009="-";	$A8010="-";  $A8009="-";	$A8010="-"; }
if ($A8003+$A8004==0) {$A8011="-";	$A8012="-";  $A8011="-";	$A8012="-"; }
if ($A8005+$A8006==0) {$A8013="-";	$A8014="-";  $A8013="-";	$A8014="-"; }
if ($A8007+$A8008==0) {$A8015="-";	$A8016="-";  $A8015="-";	$A8016="-"; }

//                           ****** Quarts de finale  *****************

if ($A4001+$A4002==0) {$A4001="-"; 	$A4002="-"; }
if ($A4003+$A4004==0) {$A4003="-";	$A4004="-"; }
if ($A4005+$A4006==0) {$A4005="-"; 	$A4006="-"; }
if ($A4007+$A4008==0) {$A4007="-"; 	$A4008="-"; }
		
//                           ****** Demi de finale  *****************		

if ($A2001+$A2002==0) {$A2001="-";	$A2002="-"; }
if ($A2003+$A2004==0) {$A2003="-";	$A2004="-"; }

//                           ****** Finale  *****************

if ($A1001+$A1002==0) {$A1001="-";	$A1002="-"; $champion="-"; }
		 
						 
		
?>


 

<?php




		$clubA="-";
if ($type==32)
	{
	//------Trente deuxième--------	
	
	
		if (($PTSA3201 + $PTSA3202 > 6 ) OR ($PTSA3201 == $PTSA3202 AND $A3201 !== $A3202 ))  if (($PTSA3201 + $PTSA3202 > 6 AND $PTSA3201 > $PTSA3202) OR ($PTSA3201 == $PTSA3202 AND $A3201 > $A3202)) $clubA1601= $clubA3201; 	else 	$clubA1601= $clubA3202; else $clubA1601=$clubA;
		if (($PTSA3203 + $PTSA3204 > 6 ) OR ($PTSA3203 == $PTSA3204 AND $A3203 !== $A3204 ))  if (($PTSA3203 + $PTSA3204 > 6 AND $PTSA3203 > $PTSA3204) OR ($PTSA3203 == $PTSA3204 AND $A3203 > $A3204)) $clubA1602= $clubA3203; 	else 	$clubA1602= $clubA3204; else $clubA1602=$clubA;
   		if (($PTSA3205 + $PTSA3206 > 6 ) OR ($PTSA3205 == $PTSA3206 AND $A3205 !== $A3206 ))  if (($PTSA3205 + $PTSA3206 > 6 AND $PTSA3205 > $PTSA3206) OR ($PTSA3205 == $PTSA3206 AND $A3205 > $A3206)) $clubA1603= $clubA3205;	else 	$clubA1603= $clubA3206; else $clubA1603=$clubA;
   		if (($PTSA3207 + $PTSA3208 > 6 ) OR ($PTSA3207 == $PTSA3208 AND $A3207 !== $A3208 ))  if (($PTSA3207 + $PTSA3208 > 6 AND $PTSA3207 > $PTSA3208) OR ($PTSA3207 == $PTSA3208 AND $A3207 > $A3208)) $clubA1604= $clubA3207;	else 	$clubA1604= $clubA3208; else $clubA1604=$clubA;
	
		if (($PTSA3209 + $PTSA3210 > 6 ) OR ($PTSA3209 == $PTSA3210 AND $A3209 !== $A3210 ))  if (($PTSA3209 + $PTSA3210 > 6 AND $PTSA3209 > $PTSA3210) OR ($PTSA3209 == $PTSA3210 AND $A3209 > $A3210)) $clubA1605= $clubA3209;	else	$clubA1605= $clubA3210; else $clubA1605=$clubA;
   		if (($PTSA3211 + $PTSA3212 > 6 ) OR ($PTSA3211 == $PTSA3212 AND $A3211 !== $A3212 ))  if (($PTSA3211 + $PTSA3212 > 6 AND $PTSA3211 > $PTSA3212) OR ($PTSA3211 == $PTSA3212 AND $A3211 > $A3212)) $clubA1606= $clubA3211;	else	$clubA1606= $clubA3212; else $clubA1606=$clubA;
   		if (($PTSA3213 + $PTSA3214 > 6 ) OR ($PTSA3213 == $PTSA3214 AND $A3213 !== $A3214 ))  if (($PTSA3213 + $PTSA3214 > 6 AND $PTSA3213 > $PTSA3214) OR ($PTSA3213 == $PTSA3214 AND $A3213 > $A3214)) $clubA1607= $clubA3213;	else	$clubA1607= $clubA3214;	else $clubA1607=$clubA;
   		if (($PTSA3215 + $PTSA3216 > 6 ) OR ($PTSA3215 == $PTSA3216 AND $A3215 !== $A3216 ))  if (($PTSA3215 + $PTSA3216 > 6 AND $PTSA3215 > $PTSA3216) OR ($PTSA3215 == $PTSA3216 AND $A3215 > $A3216)) $clubA1608= $clubA3215;	else	$clubA1608= $clubA3216;	else $clubA1608=$clubA;

   		if (($PTSA3217 + $PTSA3218 > 6 ) OR ($PTSA3217 == $PTSA3218 AND $A3217 !== $A3218 ))  if (($PTSA3217 + $PTSA3218 > 6 AND $PTSA3217 > $PTSA3218) OR ($PTSA3217 == $PTSA3218 AND $A3217 > $A3218)) $clubA1609= $clubA3217;	else	$clubA1609= $clubA3218; else $clubA1609=$clubA;
   		if (($PTSA3219 + $PTSA3220 > 6 ) OR ($PTSA3219 == $PTSA3220 AND $A3219 !== $A3220 ))  if (($PTSA3219 + $PTSA3220 > 6 AND $PTSA3219 > $PTSA3220) OR ($PTSA3219 == $PTSA3220 AND $A3219 > $A3220)) $clubA1610= $clubA3219;	else	$clubA1610= $clubA3220; else $clubA1610=$clubA;
   		if (($PTSA3221 + $PTSA3222 > 6 ) OR ($PTSA3221 == $PTSA3222 AND $A3221 !== $A3222 ))  if (($PTSA3221 + $PTSA3222 > 6 AND $PTSA3221 > $PTSA3222) OR ($PTSA3221 == $PTSA3222 AND $A3221 > $A3222)) $clubA1611= $clubA3221;	else	$clubA1611= $clubA3222;	else $clubA1611=$clubA;
   		if (($PTSA3223 + $PTSA3224 > 6 ) OR ($PTSA3223 == $PTSA3224	AND $A3223 !== $A3224 ))  if (($PTSA3223 + $PTSA3224 > 6 AND $PTSA3223 > $PTSA3224) OR ($PTSA3223 == $PTSA3224 AND $A3223 > $A3224)) $clubA1612= $clubA3223;	else	$clubA1612= $clubA3224; else $clubA1612=$clubA;

   		if (($PTSA3225 + $PTSA3226 > 6 ) OR ($PTSA3225 == $PTSA3226 AND $A3225 !== $A3226 ))  if (($PTSA3225 + $PTSA3226 > 6 AND $PTSA3225 > $PTSA3226) OR ($PTSA3225 == $PTSA3226 AND $A3225 > $A3226)) $clubA1613= $clubA3225;	else	$clubA1613= $clubA3226; else $clubA1613=$clubA;
   		if (($PTSA3227 + $PTSA3228 > 6 ) OR ($PTSA3227 == $PTSA3228 AND $A3227 !== $A3228 ))  if (($PTSA3227 + $PTSA3228 > 6 AND $PTSA3227 > $PTSA3228) OR ($PTSA3227 == $PTSA3228 AND $A3227 > $A3228)) $clubA1614= $clubA3227;	else	$clubA1614= $clubA3228; else $clubA1614=$clubA;
   		if (($PTSA3229 + $PTSA3230 > 6 ) OR ($PTSA3229 == $PTSA3230 AND $A3229 !== $A3230 ))  if (($PTSA3229 + $PTSA3230 > 6 AND $PTSA3229 > $PTSA3230) OR ($PTSA3229 == $PTSA3230 AND $A3229 > $A3230)) $clubA1615= $clubA3229;	else	$clubA1615= $clubA3230;	else $clubA1615=$clubA;
   		if (($PTSA3231 + $PTSA3232 > 6 ) OR ($PTSA3231 == $PTSA3232 AND $A3231 !== $A3232 ))  if (($PTSA3231 + $PTSA3232 > 6 AND $PTSA3231 > $PTSA3232) OR ($PTSA3231 == $PTSA3232 AND $A3231 > $A3232)) $clubA1616= $clubA3231;	else	$clubA1616= $clubA3232;	else $clubA1616=$clubA;
		
		if (($PTSA3233 + $PTSA3234 > 6 ) OR ($PTSA3233 == $PTSA3234 AND $A3233 !== $A3234 ))  if (($PTSA3233 + $PTSA3234 > 6 AND $PTSA3233 > $PTSA3234) OR ($PTSA3233 == $PTSA3234 AND $A3233 > $A3234)) $clubA1617= $clubA3233;	else	$clubA1617= $clubA3234; else $clubA1617=$clubA;
   		if (($PTSA3235 + $PTSA3236 > 6 ) OR ($PTSA3235 == $PTSA3236 AND $A3235 !== $A3236 ))  if (($PTSA3235 + $PTSA3236 > 6 AND $PTSA3235 > $PTSA3236) OR ($PTSA3235 == $PTSA3236 AND $A3235 > $A3236)) $clubA1618= $clubA3235;	else	$clubA1618= $clubA3236; else $clubA1618=$clubA;
   		if (($PTSA3237 + $PTSA3238 > 6 ) OR ($PTSA3237 == $PTSA3238 AND $A3237 !== $A3238 ))  if (($PTSA3237 + $PTSA3238 > 6 AND $PTSA3237 > $PTSA3238) OR ($PTSA3237 == $PTSA3238 AND $A3237 > $A3238)) $clubA1619= $clubA3237;	else	$clubA1619= $clubA3238;	else $clubA1619=$clubA;
   		if (($PTSA3239 + $PTSA3240 > 6 ) OR ($PTSA3239 == $PTSA3240 AND $A3239 !== $A3240 ))  if (($PTSA3239 + $PTSA3240 > 6 AND $PTSA3239 > $PTSA3240) OR ($PTSA3239 == $PTSA3240 AND $A3239 > $A3240)) $clubA1620= $clubA3239;	else	$clubA1620= $clubA3240;	else $clubA1620=$clubA;
		
		if (($PTSA3241 + $PTSA3242 > 6 ) OR ($PTSA3241 == $PTSA3242 AND $A3241 !== $A3242 ))  if (($PTSA3241 + $PTSA3242 > 6 AND $PTSA3241 > $PTSA3242) OR ($PTSA3241 == $PTSA3242 AND $A3241 > $A3242)) $clubA1621= $clubA3241;	else	$clubA1621= $clubA3242; else $clubA1621=$clubA;
   		if (($PTSA3243 + $PTSA3244 > 6 ) OR ($PTSA3243 == $PTSA3244 AND $A3243 !== $A3244 ))  if (($PTSA3243 + $PTSA3244 > 6 AND $PTSA3243 > $PTSA3244) OR ($PTSA3243 == $PTSA3244 AND $A3243 > $A3244)) $clubA1622= $clubA3243;	else	$clubA1622= $clubA3244; else $clubA1622=$clubA;
   		if (($PTSA3245 + $PTSA3246 > 6 ) OR ($PTSA3245 == $PTSA3246 AND $A3245 !== $A3246 ))  if (($PTSA3245 + $PTSA3246 > 6 AND $PTSA3245 > $PTSA3246) OR ($PTSA3245 == $PTSA3246 AND $A3245 > $A3246)) $clubA1923= $clubA3245;	else	$clubA1623= $clubA3246;	else $clubA1623=$clubA;
   		if (($PTSA3247 + $PTSA3248 > 6 ) OR ($PTSA3247 == $PTSA3248 AND $A3247 !== $A3248 ))  if (($PTSA3247 + $PTSA3248 > 6 AND $PTSA3247 > $PTSA3248) OR ($PTSA3247 == $PTSA3248 AND $A3247 > $A3248)) $clubA1624= $clubA3247;	else	$clubA1624= $clubA3248;	else $clubA1624=$clubA;
   
		if (($PTSA3249 + $PTSA3250 > 6 ) OR ($PTSA3249 == $PTSA3250 AND $A3249 !== $A3250 ))  if (($PTSA3249 + $PTSA3250 > 6 AND $PTSA3249 > $PTSA3250) OR ($PTSA3249 == $PTSA3250 AND $A3249 > $A3250)) $clubA1625= $clubA3249;	else	$clubA1625= $clubA3250; else $clubA1625=$clubA;
   		if (($PTSA3251 + $PTSA3252 > 6 ) OR ($PTSA3251 == $PTSA3252 AND $A3251 !== $A3252 ))  if (($PTSA3251 + $PTSA3252 > 6 AND $PTSA3251 > $PTSA3252) OR ($PTSA3251 == $PTSA3252 AND $A3251 > $A3252)) $clubA1626= $clubA3251;	else	$clubA1626= $clubA3252; else $clubA1626=$clubA;
   		if (($PTSA3253 + $PTSA3254 > 6 ) OR ($PTSA3253 == $PTSA3254 AND $A3253 !== $A3254 ))  if (($PTSA3253 + $PTSA3254 > 6 AND $PTSA3254 > $PTSA3254) OR ($PTSA3253 == $PTSA3254 AND $A3253 > $A3254)) $clubA1627= $clubA3253;	else	$clubA1627= $clubA3254;	else $clubA1627=$clubA;
   		if (($PTSA3255 + $PTSA3256 > 6 ) OR ($PTSA3255 == $PTSA3256 AND $A3255 !== $A3256 ))  if (($PTSA3255 + $PTSA3256 > 6 AND $PTSA3255 > $PTSA3256) OR ($PTSA3255 == $PTSA3256 AND $A3255 > $A3256)) $clubA1628= $clubA3255;	else	$clubA1628= $clubA3256; else $clubA1628=$clubA;

   		if (($PTSA3257 + $PTSA3258 > 6 ) OR ($PTSA3257 == $PTSA3258 AND $A3257 !== $A3258 ))  if (($PTSA3257 + $PTSA3258 > 6 AND $PTSA3257 > $PTSA3258) OR ($PTSA3257 == $PTSA3258 AND $A3257 > $A3258)) $clubA1629= $clubA3257;	else	$clubA1629= $clubA3258; else $clubA1629=$clubA;
   		if (($PTSA3259 + $PTSA3260 > 6 ) OR ($PTSA3259 == $PTSA3260 AND $A3259 !== $A3260 ))  if (($PTSA3259 + $PTSA3260 > 6 AND $PTSA3259 > $PTSA3260) OR ($PTSA3259 == $PTSA3260 AND $A3259 > $A3260)) $clubA1630= $clubA3259;	else	$clubA1630= $clubA3260; else $clubA1630=$clubA;
   		if (($PTSA3261 + $PTSA3262 > 6 ) OR ($PTSA3261 == $PTSA3262 AND $A3261 !== $A3262 ))  if (($PTSA3261 + $PTSA3262 > 6 AND $PTSA3261 > $PTSA3262) OR ($PTSA3261 == $PTSA3262 AND $A3261 > $A3262)) $clubA1631= $clubA3261;	else	$clubA1631= $clubA3261;	else $clubA1631=$clubA;
   		if (($PTSA3263 + $PTSA3264 > 6 ) OR ($PTSA3263 == $PTSA3264 AND $A3263 !== $A3264 ))  if (($PTSA3263 + $PTSA3264 > 6 AND $PTSA3263 > $PTSA3264) OR ($PTSA3263 == $PTSA3264 AND $A3263 > $A3264)) $clubA1632= $clubA3263;	else	$clubA1632= $clubA3262;	else $clubA1632=$clubA;
	
	//------Seizième--------	
		
		if (($PTSA1601 + $PTSA1602 > 6 ) OR ($PTSA1601 == $PTSA1602 AND $A1601 !== $A1602 ))  if (($PTSA1601 + $PTSA1602 > 6 AND $PTSA1601 > $PTSA1602) OR ($PTSA1601 == $PTSA1602 AND $A1601 > $A1602)) $clubA8001= $clubA1601; 	else 	$clubA8001= $clubA1602; else $clubA8001=$clubA;
		if (($PTSA1603 + $PTSA1604 > 6 ) OR ($PTSA1603 == $PTSA1604 AND $A1603 !== $A1604 ))  if (($PTSA1603 + $PTSA1604 > 6 AND $PTSA1603 > $PTSA1604) OR ($PTSA1603 == $PTSA1604 AND $A1603 > $A1604)) $clubA8002= $clubA1603; 	else 	$clubA8002= $clubA1604; else $clubA8002=$clubA;
   		if (($PTSA1605 + $PTSA1606 > 6 ) OR ($PTSA1605 == $PTSA1606 AND $A1605 !== $A1606 ))  if (($PTSA1605 + $PTSA1606 > 6 AND $PTSA1605 > $PTSA1606) OR ($PTSA1605 == $PTSA1606 AND $A1605 > $A1606)) $clubA8003= $clubA1605;	else 	$clubA8003= $clubA1606; else $clubA8003=$clubA;
   		if (($PTSA1607 + $PTSA1608 > 6 ) OR ($PTSA1607 == $PTSA1608 AND $A1607 !== $A1608 ))  if (($PTSA1607 + $PTSA1608 > 6 AND $PTSA1607 > $PTSA1608) OR ($PTSA1607 == $PTSA1608 AND $A1607 > $A1608)) $clubA8004= $clubA1607;	else 	$clubA8004= $clubA1608; else $clubA8004=$clubA;
	
		if (($PTSA1609 + $PTSA1610 > 6 ) OR ($PTSA1609 == $PTSA1610 AND $A1609 !== $A1610 ))  if (($PTSA1609 + $PTSA1610 > 6 AND $PTSA1609 > $PTSA1610) OR ($PTSA1609 == $PTSA1610 AND $A1609 > $A1610)) $clubA8005= $clubA1609;	else	$clubA8005= $clubA1610; else $clubA8005=$clubA;
   		if (($PTSA1611 + $PTSA1612 > 6 ) OR ($PTSA1611 == $PTSA1612 AND $A1611 !== $A1612 ))  if (($PTSA1611 + $PTSA1612 > 6 AND $PTSA1611 > $PTSA1612) OR ($PTSA1611 == $PTSA1612 AND $A1611 > $A1612)) $clubA8006= $clubA1611;	else	$clubA8006= $clubA1612; else $clubA8006=$clubA;
   		if (($PTSA1613 + $PTSA1614 > 6 ) OR ($PTSA1613 == $PTSA1614 AND $A1613 !== $A1614 ))  if (($PTSA1613 + $PTSA1614 > 6 AND $PTSA1613 > $PTSA1614) OR ($PTSA1613 == $PTSA1614 AND $A1613 > $A1614)) $clubA8007= $clubA1613;	else	$clubA8007= $clubA1614;	else $clubA8007=$clubA;
   		if (($PTSA1615 + $PTSA1616 > 6 ) OR ($PTSA1615 == $PTSA1616 AND $A1615 !== $A1616 ))  if (($PTSA1615 + $PTSA1616 > 6 AND $PTSA1615 > $PTSA1616) OR ($PTSA1615 == $PTSA1616 AND $A1615 > $A1616)) $clubA8008= $clubA1615;	else	$clubA8008= $clubA1616;	else $clubA8008=$clubA;

   		if (($PTSA1617 + $PTSA1618 > 6 ) OR ($PTSA1617 == $PTSA1618 AND $A1617 !== $A1618 ))  if (($PTSA1617 + $PTSA1618 > 6 AND $PTSA1617 > $PTSA1618) OR ($PTSA1617 == $PTSA1618 AND $A1617 > $A1618)) $clubA8009= $clubA1617;	else	$clubA8009= $clubA1618; else $clubA8009=$clubA;
   		if (($PTSA1619 + $PTSA1620 > 6 ) OR ($PTSA1619 == $PTSA1620 AND $A1619 !== $A1620 ))  if (($PTSA1619 + $PTSA1620 > 6 AND $PTSA1619 > $PTSA1620) OR ($PTSA1619 == $PTSA1620 AND $A1619 > $A1620)) $clubA8010= $clubA1619;	else	$clubA8010= $clubA1620; else $clubA8010=$clubA;
   		if (($PTSA1621 + $PTSA1622 > 6 ) OR ($PTSA1621 == $PTSA1622 AND $A1621 !== $A1622 ))  if (($PTSA1621 + $PTSA1622 > 6 AND $PTSA1621 > $PTSA1622) OR ($PTSA1621 == $PTSA1622 AND $A1621 > $A1622)) $clubA8011= $clubA1621;	else	$clubA8011= $clubA1622;	else $clubA8011=$clubA;
   		if (($PTSA1623 + $PTSA1624 > 6 ) OR ($PTSA1623 == $PTSA1624	AND $A1623 !== $A1624 ))  if (($PTSA1623 + $PTSA1624 > 6 AND $PTSA1623 > $PTSA1624) OR ($PTSA1623 == $PTSA1624 AND $A1623 > $A1624)) $clubA8012= $clubA1623;	else	$clubA8012= $clubA1624; else $clubA8012=$clubA;

   		if (($PTSA1625 + $PTSA1626 > 6 ) OR ($PTSA1625 == $PTSA1626 AND $A1625 !== $A1626 ))  if (($PTSA1625 + $PTSA1626 > 6 AND $PTSA1625 > $PTSA1626) OR ($PTSA1625 == $PTSA1626 AND $A1625 > $A1626)) $clubA8013= $clubA1625;	else	$clubA8013= $clubA1626; else $clubA8013=$clubA;
   		if (($PTSA1627 + $PTSA1628 > 6 ) OR ($PTSA1627 == $PTSA1628 AND $A1627 !== $A1628 ))  if (($PTSA1627 + $PTSA1628 > 6 AND $PTSA1627 > $PTSA1628) OR ($PTSA1627 == $PTSA1628 AND $A1627 > $A1628)) $clubA8014= $clubA1627;	else	$clubA8014= $clubA1628; else $clubA8014=$clubA;
   		if (($PTSA1629 + $PTSA1630 > 6 ) OR ($PTSA1629 == $PTSA1630 AND $A1629 !== $A1630 ))  if (($PTSA1629 + $PTSA1630 > 6 AND $PTSA1629 > $PTSA1630) OR ($PTSA1629 == $PTSA1630 AND $A1629 > $A1630)) $clubA8015= $clubA1629;	else	$clubA8015= $clubA1630;	else $clubA8015=$clubA;
   		if (($PTSA1631 + $PTSA1632 > 6 ) OR ($PTSA1631 == $PTSA1632 AND $A1631 !== $A1632 ))  if (($PTSA1631 + $PTSA1632 > 6 AND $PTSA1631 > $PTSA1632) OR ($PTSA1631 == $PTSA1632 AND $A1631 > $A1632)) $clubA8016= $clubA1631;	else	$clubA8016= $clubA1632;	else $clubA8016=$clubA;
		
		
	
		
//  		if ($A1601+$A1602>0)  if ($A1601>$A1602) $clubA8001= $clubA1601;	else	$clubA8001= $clubA1602; else $clubA8001=$clubA;
//   		if ($A1603+$A1604>0)  if ($A1603>$A1604) $clubA8002= $clubA1603;	else	$clubA8002= $clubA1604; else $clubA8002=$clubA;
//   		if ($A1605+$A1606>0)  if ($A1605>$A1606) $clubA8003= $clubA1605;	else	$clubA8003= $clubA1606;	else $clubA8003=$clubA;
//   		if ($A1607+$A1608>0)  if ($A1607>$A1608) $clubA8004= $clubA1607;	else	$clubA8004= $clubA1608;	else $clubA8004=$clubA;

//   		if ($A1609+$A1610>0)  if ($A1609>$A1610) $clubA8005= $clubA1609;	else	$clubA8005= $clubA1610; else $clubA8005=$clubA;
//   		if ($A1611+$A1612>0)  if ($A1611>$A1612) $clubA8006= $clubA1611;	else	$clubA8006= $clubA1612; else $clubA8006=$clubA;
//   		if ($A1613+$A1614>0)  if ($A1613>$A1614) $clubA8007= $clubA1613;	else	$clubA8007= $clubA1614;	else $clubA8007=$clubA;
//  		if ($A1615+$A1616>0)  if ($A1615>$A1616) $clubA8008= $clubA1615;	else	$clubA8008= $clubA1616;	else $clubA8008=$clubA;

//   		if ($A1617+$A1618>0)  if ($A1617>$A1618) $clubA8009= $clubA1617;	else	$clubA8009= $clubA1618; else $clubA8009=$clubA;
//   		if ($A1619+$A1620>0)  if ($A1619>$A1620) $clubA8010= $clubA1619;	else	$clubA8010= $clubA1620; else $clubA8010=$clubA;
//   		if ($A1621+$A1622>0)  if ($A1621>$A1622) $clubA8011= $clubA1621;	else	$clubA8011= $clubA1622;	else $clubA8011=$clubA;
//   		if ($A1623+$A1624>0)  if ($A1623>$A1624) $clubA8012= $clubA1623;	else	$clubA8012= $clubA1624; else $clubA8012=$clubA;

//   		if ($A1625+$A1626>0)  if ($A1625>$A1626) $clubA8013= $clubA1625;	else	$clubA8013= $clubA1626; else $clubA8013=$clubA;
//   		if ($A1627+$A1628>0)  if ($A1627>$A1628) $clubA8014= $clubA1627;	else	$clubA8014= $clubA1628; else $clubA8014=$clubA;
//   		if ($A1629+$A1630>0)  if ($A1629>$A1630) $clubA8015= $clubA1629;	else	$clubA8015= $clubA1630;	else $clubA8015=$clubA;
//   		if ($A1631+$A1632>0)  if ($A1631>$A1632) $clubA8016= $clubA1631;	else	$clubA8016= $clubA1632;	else $clubA8016=$clubA;

//------Huitième--------
		if ($A8001+$A8002>0)  if ($A8001>$A8002)	$clubA4001= $clubA8001;	else	$clubA4001= $clubA8002;	 else $clubA4001=$clubA;
		if ($A8003+$A8004>0)  if ($A8003>$A8004)	$clubA4002= $clubA8003;	else	$clubA4002= $clubA8004;	 else $clubA4002=$clubA;
   		if ($A8005+$A8006>0)  if ($A8005>$A8006)	$clubA4003= $clubA8005;	else	$clubA4003= $clubA8006;	 else $clubA4003=$clubA;
		if ($A8007+$A8008>0)  if ($A8007>$A8008)	$clubA4004= $clubA8007;	else	$clubA4004= $clubA8008;	 else $clubA4004=$clubA;

	    if ($A8009+$A8010>0)  if ($A8009>$A8010)	$clubA4005= $clubA8009;	else	$clubA4005= $clubA8010;	 else $clubA4005=$clubA;
   		if ($A8011+$A8012>0)  if ($A8011>$A8012)	$clubA4006= $clubA8011;	else	$clubA4006= $clubA8012;	 else $clubA4006=$clubA;
   		if ($A8013+$A8014>0)  if ($A8013>$A8014)	$clubA4007= $clubA8013;	else	$clubA4007= $clubA8014;  else $clubA4007=$clubA;
		if ($A8015+$A8016>0)  if ($A8015>$A8016)	$clubA4008= $clubA8015;	else	$clubA4008= $clubA8016;	 else $clubA4008=$clubA;

	//------Quarts--------
        if ($A4001+$A4002>0)  if ($A4001>$A4002)	$clubA2001= $clubA4001;	else	$clubA2001= $clubA4002;  else $clubA2001=$clubA;
        if ($A4003+$A4004>0)  if ($A4003>$A4004)	$clubA2002= $clubA4003;	else	$clubA2002= $clubA4004;  else $clubA2002=$clubA;
		if ($A4005+$A4006>0)  if ($A4005>$A4006)	$clubA2003= $clubA4005;	else	$clubA2003= $clubA4006;  else $clubA2003=$clubA;								  
   		if ($A4007+$A4008>0)  if ($A4007>$A4008)	$clubA2004= $clubA4007;	else	$clubA2004= $clubA4008;  else $clubA2004=$clubA;
										  
	//------Demi--------	
		if ($A2001+$A2002>0)  if ($A2001>$A2002)	$clubA1001= $clubA2001;	else	$clubA1001= $clubA2002;  else $clubA1001=$clubA;
  		if ($A2003+$A2004>0)  if ($A2003>$A2004)	$clubA1002= $clubA2003;	else	$clubA1002= $clubA2004;  else $clubA1002=$clubA;

	//------Finale--------
        if ($A1001+$A1002>0)  if ($A1001>$A1002)	$clubA1000= $clubA1001;	else	$clubA1000= $clubA1002;  else $clubA1000=$clubA;
	
	//------Champion--------
	
	
	
	}
	
	
//************************************************************************		
if ($type==16)	
		{
	//------Seizième--------
	
   		if ($A1601+$A1602>0)  if ($A1601>$A1602) $clubA8001= $clubA1601;	else	$clubA8001= $clubA1602; else $clubA8001=$clubA;
   		if ($A1603+$A1604>0)  if ($A1603>$A1604) $clubA8002= $clubA1603;	else	$clubA8002= $clubA1604; else $clubA8002=$clubA;
   		if ($A1605+$A1606>0)  if ($A1605>$A1606) $clubA8003= $clubA1605;	else	$clubA8003= $clubA1606;	else $clubA8003=$clubA;
   		if ($A1607+$A1608>0)  if ($A1607>$A1608) $clubA8004= $clubA1607;	else	$clubA8004= $clubA1608;	else $clubA8004=$clubA;

   		if ($A1609+$A1610>0)  if ($A1609>$A1610) $clubA8005= $clubA1609;	else	$clubA8005= $clubA1610; else $clubA8005=$clubA;
   		if ($A1611+$A1612>0)  if ($A1611>$A1612) $clubA8006= $clubA1611;	else	$clubA8006= $clubA1612; else $clubA8006=$clubA;
   		if ($A1613+$A1614>0)  if ($A1613>$A1614) $clubA8007= $clubA1613;	else	$clubA8007= $clubA1614;	else $clubA8007=$clubA;
   		if ($A1615+$A1616>0)  if ($A1615>$A1616) $clubA8008= $clubA1615;	else	$clubA8008= $clubA1616;	else $clubA8008=$clubA;

   		if ($A1617+$A1618>0)  if ($A1617>$A1618) $clubA8009= $clubA1617;	else	$clubA8009= $clubA1618; else $clubA8009=$clubA;
   		if ($A1619+$A1620>0)  if ($A1619>$A1620) $clubA8010= $clubA1619;	else	$clubA8010= $clubA1620; else $clubA8010=$clubA;
   		if ($A1621+$A1622>0)  if ($A1621>$A1622) $clubA8011= $clubA1621;	else	$clubA8011= $clubA1622;	else $clubA8011=$clubA;
   		if ($A1623+$A1624>0)  if ($A1623>$A1624) $clubA8012= $clubA1623;	else	$clubA8012= $clubA1624; else $clubA8012=$clubA;

   		if ($A1625+$A1626>0)  if ($A1625>$A1626) $clubA8013= $clubA1625;	else	$clubA8013= $clubA1626; else $clubA8013=$clubA;
   		if ($A1627+$A1628>0)  if ($A1627>$A1628) $clubA8014= $clubA1627;	else	$clubA8014= $clubA1628; else $clubA8014=$clubA;
   		if ($A1629+$A1630>0)  if ($A1629>$A1630) $clubA8015= $clubA1629;	else	$clubA8015= $clubA1630;	else $clubA8015=$clubA;
   		if ($A1631+$A1632>0)  if ($A1631>$A1632) $clubA8016= $clubA1631;	else	$clubA8016= $clubA1632;	else $clubA8016=$clubA;

	//------Huitième--------
		if ($A8001+$A8002>0)  if ($A8001>$A8002)	$clubA4001= $clubA8001;	else	$clubA4001= $clubA8002;	 else $clubA4001=$clubA;
		if ($A8003+$A8004>0)  if ($A8003>$A8004)	$clubA4002= $clubA8003;	else	$clubA4002= $clubA8004;	 else $clubA4002=$clubA;
   		if ($A8005+$A8006>0)  if ($A8005>$A8006)	$clubA4003= $clubA8005;	else	$clubA4003= $clubA8006;	 else $clubA4003=$clubA;
		if ($A8007+$A8008>0)  if ($A8007>$A8008)	$clubA4004= $clubA8007;	else	$clubA4004= $clubA8008;	 else $clubA4004=$clubA;

	    if ($A8009+$A8010>0)  if ($A8009>$A8010)	$clubA4005= $clubA8009;	else	$clubA4005= $clubA8010;	 else $clubA4005=$clubA;
   		if ($A8011+$A8012>0)  if ($A8011>$A8012)	$clubA4006= $clubA8011;	else	$clubA4006= $clubA8012;	 else $clubA4006=$clubA;
   		if ($A8013+$A8014>0)  if ($A8013>$A8014)	$clubA4007= $clubA8013;	else	$clubA4007= $clubA8014;  else $clubA4007=$clubA;
		if ($A8015+$A8016>0)  if ($A8015>$A8016)	$clubA4008= $clubA8015;	else	$clubA4008= $clubA8016;	 else $clubA4008=$clubA;

	//------Quarts--------
        if ($A4001+$A4002>0)  if ($A4001>$A4002)	$clubA2001= $clubA4001;	else	$clubA2001= $clubA4002;  else $clubA2001=$clubA;
        if ($A4003+$A4004>0)  if ($A4003>$A4004)	$clubA2002= $clubA4003;	else	$clubA2002= $clubA4004;  else $clubA2002=$clubA;
		if ($A4005+$A4006>0)  if ($A4005>$A4006)	$clubA2003= $clubA4005;	else	$clubA2003= $clubA4006;  else $clubA2003=$clubA;								  
   		if ($A4007+$A4008>0)  if ($A4007>$A4008)	$clubA2004= $clubA4007;	else	$clubA2004= $clubA4008;  else $clubA2004=$clubA;
										  
	//------Demi--------	
		if ($A2001+$A2002>0)  if ($A2001>$A2002)	$clubA1001= $clubA2001;	else	$clubA1001= $clubA2002;  else $clubA1001=$clubA;
  		if ($A2003+$A2004>0)  if ($A2003>$A2004)	$clubA1002= $clubA2003;	else	$clubA1002= $clubA2004;  else $clubA1002=$clubA;

	//------Champion--------
        if ($A1001+$A1002>0)  if ($A1001>$A1002)	$clubA1000= $clubA1001;	else	$clubA1000= $clubA1002;  else $clubA1000=$clubA;

	}	
		
elseif ($type==8)	
		{
	//------Huitième--------
		if ($A8001+$A8002>0)  if ($A8001>$A8002)	$clubA4001= $clubA8001;	else	$clubA4001= $clubA8002;	 else $clubA4001=$clubA;
		if ($A8003+$A8004>0)  if ($A8003>$A8004)	$clubA4002= $clubA8003;	else	$clubA4002= $clubA8004;	 else $clubA4002=$clubA;
   		if ($A8005+$A8006>0)  if ($A8005>$A8006)	$clubA4003= $clubA8005;	else	$clubA4003= $clubA8006;	 else $clubA4003=$clubA;
		if ($A8007+$A8008>0)  if ($A8007>$A8008)	$clubA4004= $clubA8007;	else	$clubA4004= $clubA8008;	 else $clubA4004=$clubA;

	    if ($A8009+$A8010>0)  if ($A8009>$A8010)	$clubA4005= $clubA8009;	else	$clubA4005= $clubA8010;	 else $clubA4005=$clubA;
   		if ($A8011+$A8012>0)  if ($A8011>$A8012)	$clubA4006= $clubA8011;	else	$clubA4006= $clubA8012;	 else $clubA4006=$clubA;
   		if ($A8013+$A8014>0)  if ($A8013>$A8014)	$clubA4007= $clubA8013;	else	$clubA4007= $clubA8014;  else $clubA4007=$clubA;
		if ($A8015+$A8016>0)  if ($A8015>$A8016)	$clubA4008= $clubA8015;	else	$clubA4008= $clubA8016;	 else $clubA4008=$clubA;

	//------Quarts--------
        if ($A4001+$A4002>0)  if ($A4001>$A4002)	$clubA2001= $clubA4001;	else	$clubA2001= $clubA4002;  else $clubA2001=$clubA;
        if ($A4003+$A4004>0)  if ($A4003>$A4004)	$clubA2002= $clubA4003;	else	$clubA2002= $clubA4004;  else $clubA2002=$clubA;
		if ($A4005+$A4006>0)  if ($A4005>$A4006)	$clubA2003= $clubA4005;	else	$clubA2003= $clubA4006;  else $clubA2003=$clubA;								  
   		if ($A4007+$A4008>0)  if ($A4007>$A4008)	$clubA2004= $clubA4007;	else	$clubA2004= $clubA4008;  else $clubA2004=$clubA;
										  
	//------Demi--------	
		if ($A2001+$A2002>0)  if ($A2001>$A2002)	$clubA1001= $clubA2001;	else	$clubA1001= $clubA2002;  else $clubA1001=$clubA;
  		if ($A2003+$A2004>0)  if ($A2003>$A2004)	$clubA1002= $clubA2003;	else	$clubA1002= $clubA2004;  else $clubA1002=$clubA;

	//------Champion--------
        if ($A1001+$A1002>0)  if ($A1001>$A1002)	$clubA1000= $clubA1001;	else	$clubA1000= $clubA1002;  else $clubA1000=$clubA;

	}	

elseif ($type==4)	
		{
	//------Quarts--------
        if ($A4001+$A4002>0)  if ($A4001>$A4002)	$clubA2001= $clubA4001;	else	$clubA2001= $clubA4002;  else $clubA2001=$clubA;
        if ($A4003+$A4004>0)  if ($A4003>$A4004)	$clubA2002= $clubA4003;	else	$clubA2002= $clubA4004;  else $clubA2002=$clubA;
		if ($A4005+$A4006>0)  if ($A4005>$A4006)	$clubA2003= $clubA4005;	else	$clubA2003= $clubA4006;  else $clubA2003=$clubA;								  
   		if ($A4007+$A4008>0)  if ($A4007>$A4008)	$clubA2004= $clubA4007;	else	$clubA2004= $clubA4008;  else $clubA2004=$clubA;								  
		
	//------Demi--------	
		if ($A2001+$A2002>0)  if ($A2001>$A2002)	$clubA1001= $clubA2001;	else	$clubA1001= $clubA2002;  else $clubA1001=$clubA;
  		if ($A2003+$A2004>0)  if ($A2003>$A2004)	$clubA1002= $clubA2003;	else	$clubA1002= $clubA2004;  else $clubA1002=$clubA;

	//------Champion--------
        if ($A1001+$A1002>0)  if ($A1001>$A1002)	$clubA1000= $clubA1001;	else	$clubA1000= $clubA1002;  else $clubA1000=$clubA;

	}

elseif ($type==2)
	{				  
         if ($A2001+$A2002>0)  if ($A2001>$A2002)	$clubA1001= $clubA2001;	else	$clubA1001= $clubA2002;  else $clubA1001=$clubA;
  		 if ($A2003+$A2004>0)  if ($A2003>$A2004)	$clubA1002= $clubA2003;	else	$clubA1002= $clubA2004;  else $clubA1002=$clubA;

	//------Champion--------
        if ($A1001+$A1002>0)  if ($A1001>$A1002)	$clubA1000= $clubA1001;	else	$clubA1000= $clubA1002;  else $clubA1000=$clubA;

	}
?>