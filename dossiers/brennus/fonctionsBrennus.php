<?php


function champFrance($bdd)
{
    global
    $nbreLigne,
    $id,
        $edition,
        $saison,
        $nomDiv,
        $dateMatch,
        $champion,
        $comite1,
        $finaliste,
        $comite2,
        $score1,
        $score2,
        $scoreplus,
        $stade,
        $ville,
        $public,
        $com;

    $id = array();
    $edition = array();
    $saison = array();
    $nomDiv = array();
    $dateMatch = array();
    $champion = array();
    $comite1 =  array();
    $finaliste = array();
    $comite2 = array();
    $score1 =  array();
    $score2 = array();
    $scoreplus =  array();
    $stade = array();
    $ville = array();
    $public = array();
    $com = array();


    require "../../connect/connexion1.php";

    // nombre de lignes
    $reponse = $bdd->query("SELECT count(id) 
                        FROM brennus");
    while ($row = $reponse->fetch()) {
        $nbreLigne = $row[0];
    };


  //  echo "<br>";
 //   echo "nombre de ligne : ", $nbreLigne;

    $requete = $bdd->query("SELECT *
		                    FROM brennus 
		                   WHERE id < '$nbreLigne'
                       ORDER BY id DESC ");

    while ($row = $requete->fetch()) {
        $id[]  = $row[0];
        $edition[]  = $row[1];
        $saison[] = $row[2];
        $nomDiv[] = $row[3];
        $dateMatch[] = $row[4];
        $champion[] = $row[5];
        $comite1[] = $row[6];
        $finaliste[] = $row[7];
        $comite2[] = $row[8];
        $score1[] = $row[9];
        $score2[] = $row[10];
        $scoreplus[] = $row[11];
        $stade[] = $row[12];
        $ville[] = $row[13];
        $public[] = $row[14];
        $com[] = $row[15];
    }
}



//********************** */


//nombre d'édition 

function nbreEdition($bdd)
{
    global $nbreEdition;
    $reponse = $bdd->query("SELECT max(edition) 
                        FROM brennus");
    while ($row = $reponse->fetch()) {
        $nbreEdition = $row[0];
    };
}


function villes($bdd)
{

    global $countVilles, $tabVilles;

    //count Villes
    $reponse = $bdd->query("SELECT count(Distinct ville)
                        FROM brennus");
    while ($row = $reponse->fetch()) {
        $countVilles  = $row[0];
    };




    //liste des villes
    $tabVilles = array();
    $reponse = $bdd->query("SELECT Distinct ville
                        FROM brennus
                        WHERE ville !='NULL'
                        ");
    while ($row = $reponse->fetch()) {
        $tabVilles[] = $row[0];
    };

    
    //***************************** */
    //***************************** */
 $nomVille = array();
 $countVille = array();

foreach ($tabVilles as $ville) {
 
$reponse = $bdd->query("SELECT ville, count(ville) 
FROM brennus
WHERE ville = '$ville'");

        while ($row = $reponse->fetch()) {
            $nomVille[] = $row[0];
            $countVille[] = $row[1];
           
        }
    }  
    
 
  
  
  
    //  rsort($countVille). $nomVille;
    
   for ($j=0; $j<=$countVilles; $j++)
        {     
            global ${"ville".($j)},  ${"countVille".($j)} ;
        if (isset ($nomVille[$j])) ${"ville".$j} = $nomVille[$j]; else ${"ville".$j}='-';  

        }
   
        for ($i=0; $i<=$countVilles; $i++) {
         //  echo $nomVille[$i].$countVille[$i];echo "<br>";
      ${"ville".$i} =$nomVille[$i];
      ${"countVille".$i} = $countVille[$i];
// $tableau1 = array ($countVille1, $countVille2, $countVille3);

// array_push($tableau1, array($ville1, $ville2, $ville3));
// echo $tableau1[1];

   //   echo ${"countVille".$i}.${"ville".$i};echo "<br>";
    }

/******************************* */
$test =array ($ville0 => $countVille0, $ville1 => $countVille1, $ville2 => $countVille2,
$ville3 => $countVille3,$ville4 => $countVille4,$ville5 => $countVille5,$ville6 => $countVille6,$ville7 => $countVille7,);
asort($test);
foreach ($test as $key => $val) {
//    echo "$key , $val<br>";
    }
//echo "<br>";
/*********************************** */
//echo $ville0;
$tabAnnee = array();

$reponse = $bdd->query("SELECT saison 
FROM brennus
WHERE ville = '$ville0'");

        while ($row = $reponse->fetch()) {
            $tabAnnee[] = $row[0];     
        }

for ($i=0; $i<$countVille0; $i++)
{
 //   echo $tabAnnee[$i]."<br>";
}
}
/************************************************* */

//liste des stades
function stades($bdd)
{


    global $countStades, $tabStades;
    //count Stades
    $reponse = $bdd->query("SELECT count(Distinct stade)
                        FROM brennus");
    while ($row = $reponse->fetch()) {
        $countStades  = $row[0];
    };

    //liste des stades
    $tabStades = array();
    $reponse = $bdd->query("SELECT Distinct stade
                        FROM brennus");
    while ($row = $reponse->fetch()) {
        $tabStades[] = $row[0];
    };




}
