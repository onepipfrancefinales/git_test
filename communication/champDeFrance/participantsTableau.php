<html>
<head>
<title>Untitled Document</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>

<body bgcolor="#FFFFFF" text="#000000">

<?php
require '../../connect/connection1.php';
require '../../phases_finales2019/fonctionsChampFrance2019.php';
//$division =170;
$annee = 2019;

/*
for ($division=160; $division< 210; $division=$division+10)
{
require '../../connect/connection1.php';
trenteDeuxieme2019 ($division, $annee);
echo $division;
	echo "<br />";
	for ($i=3201; $i< 3233; $i++)
	{
	
	echo ${"clubA".($i)};
	echo "<br />";
	}
echo "<br />";	
echo "<br />";
}

*/ 

//----------  trente deuxième  ----------
require '../../connect/connection1.php';
$division = 370;
trenteDeuxieme2019 ($division, $annee);
echo $division;
	echo "<br />";
	for ($i=0; $i<= 9; $i++)
	{
	echo $tabNomEquipes1[$i];echo $tabNomLigue1[$i];
	echo "<br />";
	}
	echo "-----------";
	echo "-----------";
	echo "<br />";
	
	
	
	
	//$clubs = array (${"clubA".($i)});
	$clubs = array ($clubA3201,$clubA3202,$clubA3203,$clubA3204);
	//echo $clubs[2];
	
	echo $tabNomEquipes1[2];
	echo "-----------";
	echo "-----------";
	//sort($tabNomLigue1);
	//print_r($tabNomLigue1);
	
	
	echo $tabNomLigue1[0];
	echo $tabNomEquipes1[0];
	
echo "-----------";	
	echo "-----------";	echo "<br />";	echo "<br />";
	
	
 
$personne = array( 
"prenom" => "Jessy", 
"nom" => "Brown", 
"telephone" => "000011111",
);

//affichage de l'élément nom
echo $personne['nom'];
echo "<br />";
$club =array(
"nom" => $tabNomLigue1,
"ligue" => $tabNomLigue1,
);

echo $club['nom'];
	
	
	echo "<br />";		
echo "-----------";	echo "<br />";
	
$personnes = array(
1 => array('prenom' => 'Jessy', 'nom' => 'Brown', 'telephone' => '00001111'),
2 => array('prenom' => 'Sharon', 'nom' => 'Dain', 'telephone' => '00221111'),
3 => array('prenom' => 'Marta', 'nom' => 'Blanca', 'telephone' => '003311111')
);

foreach($personnes as $cle1 => $valeur1)
{
  echo "personne n°:" . $cle1 . "<br />";

    foreach ($valeur1 as $cle2=>$valeur2)

    {
      echo "Clé : ".$cle2 .", Valeur: " . $valeur2 . "<br />\n";
	 
    }
}


$club = array(
1 => array('ligue' =>  $tabNomLigue1[0], 'nom' => $tabNomEquipes1[0]),
2 => array('ligue' =>  $tabNomLigue1[3], 'nom' => $tabNomEquipes1[3]),
);


foreach($club as $cle1 => $valeur1)
{
  echo "club n°:" . $cle1 . "<br />";

    foreach ($valeur1 as $cle2=>$valeur2)

    {
      echo "Clé : ".$cle2 .", Valeur: " . $valeur2 . "<br />\n";
		sort($tabNomLigue1);
		
	   
    }
}
	
	echo "<br />";		
echo "-----------";	echo "<br />";
	sort($club);
	
	
	
	foreach($club as $cle1 => $valeur1)
{
  echo "club n°:" . $cle1 . "<br />";

    foreach ($valeur1 as $cle2=>$valeur2)

    {
      echo "Clé : ".$cle2 .", Valeur: " . $valeur2 . "<br />\n";
		
		
	   
    }
		
	   
 }
	
	
	
	


?>
	
	

</html>
