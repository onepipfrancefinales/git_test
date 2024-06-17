<?php

global $tableau110,$tableau141, $tableau151, $tableau151,$tableau1161,$tableau2161 ,$tableau280,
$tableauARA1, $tableauARA2, $tableauARA3,
$tableauNAQ1, $tableauNAQ2, $tableauNAQ1,
$tableauOCC1, $tableauOCC2, $tableauOCC3,

$tabId ;


/**** tableaux des poules par divisions *******/
//Pro
$tableau110 = array (990110, 990120, 990130, 990135, 990136);
//Fédérale 1
$tableauFed1 = array(990141, 990142, 990143, 990144);	
//Espoir Fédérale1
//$tableau241 = array(990141, 990242, 990243, 990244);	
//fédérale2
$tableauFed2 = array(990151, 990152, 990153, 990154,990155, 990156, 990157, 990158);	
//Fédérale B
//$tableau251 = array(990251, 990252, 990253, 990254,990255, 990256, 990257, 990258);	
//Fédérale 3 - Poule 1 à 10
$tableauFed3_1 = array(991161, 991162, 991163, 991164, 991165, 991166, 991167, 991168, 991169);
//Fédérale 3 - Poule 11 à 20
$tableauFed3_2 = array(992161, 992162, 992163, 992164, 992165, 992166, 992167, 992168, 992169);					 
//Excellence B - Poules 1 à 10
//$tableau1261 = array(991260, 991261, 991262, 991263, 991264, 991265, 991266, 991267, 991268, 991269,); 
//Excelence B - Poules 11 à 20
//$tableau2261 = array(992260, 992261, 992262, 992263, 992264, 992265, 992266, 992267, 992268, 992269);
//feminines
$tableauFem = array(816281, 816282, 816285, 816191,816192, 816193, 816194);	


//ARA
$tableauARA1 = array(100171, 100172, 100173, 100174 );
$tableauARA2 = array(100181, 100182, 100183, 100184);
$tableauARA3 = array(100191, 100192, 100193, 100194, 100195, 100196);

//NAQ
$tableauNAQ1 = array(190171, 190172, 190173, 190174, 190175);
$tableauNAQ2 = array(190181, 190182, 190183, 190184);
$tableauNAQ3 = array(190191, 190192, 190193, 190194);

//OCC
$tableauOCC1= array(200171, 200172, 200173, 200174);
$tableauOCC2= array(200181, 200182, 200183, 200184);
$tableauOCC3= array(200191, 200192, 200193, 200194);

//TABLE PL
//Bourgogne Franche Comté
$tableauBFC = array(110171, 110181, 110201, 110211, 110221, 110271);
//Bretagne
$tableauBRE = array(120171, 120181, 120191, 120192, 120211, 120271, 129212);
//Centre Val de Loire
$tableauCVL = array(130171, 130172, 130191, 130211, 130212, 130271, 130272);
//Hauts De France
$tableauHDF = array(160171, 160181, 160191, 160201, 160271, 169181);
//Pays De la Loire
$tableauPDL = array(210171, 210191, 210211, 210271);

//TABLE IDF
//Grand ESt
$tableauGES = array(150171, 150181, 150182, 150211, 150212, 150271);
//Ile De France
$tableauIDF = array(170171, 170172, 170181, 170182, 170191, 170192, 170201, 170202, 170211, 170212, 170213, 170271, 170272, 179181 ,179182);
// Normandi
$tableauNOR = array(180171, 180181, 180191, 180271, 189181);
// Provence alpes Cotes d'Azur
$tableauPAC = array(220171, 220172, 220173, 220174, 220175, 220176, 220177, 
		                   220191, 220192, 220193, 220194, 220195,
						   220271, 220272, 220273, 220274, 220275, 220276, 220277
						   );
   
/*

/*****  Mise à jour des bases de données ********/



// liste des lignes a rajouter aux tables bdpffrance, bdpffrance_2 et bdpffrance_dates
// pour chaque nouvelle saison.

$tabId = array(110, 115, 120, 130, 135, 140, 150, 160, 170, 180, 190,
								   240, 250, 260, 270,
									280, 285, 290);
									
?>