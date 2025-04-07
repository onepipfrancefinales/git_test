<html>

<head>
  <title>Untitled Document</title>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <link type="text/css" rel="stylesheet" href="suiviFinales.css" />
  <link rel="stylesheet" type="text/css" href="../../ligne1.css">
</head>

<?php
require('../../connect/connexion1.php');

//$division = "160";
$annee = 2024;

$pff32me = "32me de finale du champ de France";
$pff16me = "16me de finale du champ de France";
$pff08me = "8me de finale du champ de France";
$pff04me = "Quart de finale du champ de France";
$pff02me = "Demi finale du champ de France";
$pffVice = "Vice champion de France";
$pffCham = "Champion de France";

//***** SENIORS **********
//$tabDivision = array(110,120,130,140,150,160,170,180,190);
require("../../phases_finales2019/fonctionsChampFrance2019.php");
?>


<table width="500" border="1" class="marginAuto">
  <tr>
    <td colspan="2" class="size5 bold">
      Compétitions séniors
    </td>
  </tr>
</table>


<?php
$tabDivisions = array('110','120','130','135','140','150','160','170','180','190');
foreach ($tabDivisions as $division)
{

$tabEquipe = array();
$tabEquipeLigue = array();
$tab32me = array();
$tab32meElim = array();
$tab16me = array();
$tab16meElim = array();
$tab8me = array();
$tab8meElim = array();
$tab4me = array();
$tab4meElim = array();
$tab2me = array();
$tab2meElim = array();
$tabFinale = array();
$tabFinaleElim = array();
$tabFinaleChamp = array();


trenteDeuxieme2019($division, $annee, $bdd);

for ($i = 1; $i <= 64; $i++) {
  if ($i < 10)
    $equipe = "E0" . $i;
  else
    $equipe = "E" . $i;

  if (isset($equipe));
  else
    $equipe = 0;

  $reponse = $bdd->query("SELECT $equipe, type
								FROM bdpffrance
								WHERE id = $division 
                AND  saison = $annee ");

  while ($row = $reponse->fetch()) {
    $tabEquipe[] = $row[0];
    $type = $row[1];
  }
}




for ($i = 0; $i <= count($tabEquipe); $i++) {
  if ($tabEquipe[$i] > 1800000 and $tabEquipe[$i] < 1900000) {
    array_push($tabEquipeLigue, $tabEquipe[$i]);
  }
}

sort($tabEquipeLigue);

if (substr($type, 1, 2) == 64 or substr($type, 1, 2) == 32) {
  for ($i = 0; $i <= 63; $i++)
    array_push($tab32me, $tabEquipe[$i]);
} elseif (substr($type, 3, 2) == 32 or substr($type, 3, 2) == 16) {
  for ($i = 0; $i <= 31; $i++)
    array_push($tab16me, $tabEquipe[$i]);
} elseif (substr($type, 5, 2) == 16 or substr($type, 5, 2) == 8) {
  for ($i = 0; $i <= 15; $i++)
    array_push($tab8me, $tabEquipe[$i]);
} elseif (substr($type, 7, 2) == 8 or substr($type, 7, 2) == 4) {
  for ($i = 0; $i <= 7; $i++)
    array_push($tab4me, $tabEquipe[$i]);
} elseif (substr($type, 9, 2) == 4 or substr($type, 9, 2) == 2) {
  for ($i = 0; $i <= 3; $i++)
    array_push($tab2me, $tabEquipe[$i]);
}

for ($club32me = 3201; $club32me < 3265; $club32me++) {
  if (isset(${"clubA" . $club32me}));
  else
    ${"clubA" . $club32me} = 0;
}
// traitement des 32me de finale

for (
  $club32me = 3201, $club16me = 1601, $club1 = 0, $club2 = 1;
  $club32me < 3265, $club16me < 1633, $club1 < 65, $club2 < 65;
  $club32me = $club32me + 2, $club16me++, $club1 = $club1 + 2, $club2 = $club2 + 2
) {

  if (isset($tab32me[$club1]));
  else
    $tab32me[$club1] = 0;
  if (isset($tab32me[$club2]));
  else
    $tab32me[$club2] = 0;

  if (${"clubA" . $club32me} == ${"clubA" . $club16me}) {
    //echo $tabEquipe[$club2];
    array_push($tab32meElim, $tab32me[$club2]);
    array_push($tab16me, $tab32me[$club1]);
  } else {
    //echo $tabEquipe[$club1];
    array_push($tab32meElim, $tab32me[$club1]);
    array_push($tab16me, $tab32me[$club2]);
  }
}


// traitement des 16me de finale
for ($club16me = 1601, $club8me = 8001, $club1 = 0, $club2 = 1; $club16me < 1633, $club8me < 8017, $club1 < 33, $club2 < 33; $club16me = $club16me + 2, $club8me++, $club1 = $club1 + 2, $club2 = $club2 + 2) {

  if (isset($tab16me[$club1]));
  else
    $tab16me[$club1] = 0;
  if (isset($tab16me[$club2]));
  else
    $tab16me[$club2] = 0;

  if (${"clubA" . $club16me} == ${"clubA" . $club8me}) {
    //echo $tabEquipe[$club2];
    array_push($tab16meElim, $tab16me[$club2]);
    array_push($tab8me, $tab16me[$club1]);
  } else {
    //echo $tabEquipe[$club1];
    array_push($tab16meElim, $tab16me[$club1]);
    array_push($tab8me, $tab16me[$club2]);
  }
}

// traitement des 8me de finale
for ($club8me = 8001, $club4me = 4001, $club1 = 0, $club2 = 1; $club8me < 8017, $club4me < 4008, $club1 < 17, $club2 < 17; $club8me = $club8me + 2, $club4me++, $club1 = $club1 + 2, $club2 = $club2 + 2) {

  if (isset($tab8me[$club1]));
  else
    $tab8me[$club1] = 0;
  if (isset($tab8me[$club2]));
  else
    $tab8me[$club2] = 0;

  if (${"clubA" . $club8me} == ${"clubA" . $club4me}) {
    //echo $tabEquipe[$club2];
    array_push($tab8meElim, $tab8me[$club2]);
    array_push($tab4me, $tab8me[$club1]);
  } else {
    //echo $tabEquipe[$club1];
    array_push($tab8meElim, $tab8me[$club1]);
    array_push($tab4me, $tab8me[$club2]);
  }
}

// traitement des quarts de finale
for ($club4me = 4001, $club2me = 2001, $club1 = 0, $club2 = 1; $club4me < 4009, $club2me < 2005, $club1 < 9, $club2 < 9; $club4me = $club4me + 2, $club2me++, $club1 = $club1 + 2, $club2 = $club2 + 2) {
  if (${"clubA" . $club4me} == ${"clubA" . $club2me}) {
    //echo $tabEquipe[$club2];
    array_push($tab4meElim, $tab4me[$club2]);
    array_push($tab2me, $tab4me[$club1]);
  } else {
    //echo $tabEquipe[$club1];
    array_push($tab4meElim, $tab4me[$club1]);
    array_push($tab2me, $tab4me[$club2]);
  }
}

// traitement des demies
for ($club2me = 2001, $club1me = 1001, $club1 = 0, $club2 = 1; $club2me < 2005, $club1me < 1003, $club1 < 4, $club2 < 4; $club2me = $club2me + 2, $club1me++, $club1 = $club1 + 2, $club2 = $club2 + 2) {
  if (${"clubA" . $club2me} == ${"clubA" . $club1me}) {
    array_push($tab2meElim, $tab2me[$club2]);
    array_push($tabFinale, $tab2me[$club1]);
  } else {
    array_push($tab2meElim, $tab2me[$club1]);
    array_push($tabFinale, $tab2me[$club2]);
  }
}

// traitement du champion
if ($A1001 > $A1002) {
  $champion = $tabFinale[0];
  $viceChampion = $tabFinale[1];
  $score1 = $A1001;
  $score2 = $A1002;
  array_push($tabFinaleElim, $tabFinale[1]);
  array_push($tabFinaleChamp, $tabFinale[0]);
} else {
  $champion = $tabFinale[1];
  $viceChampion = $tabFinale[0];
  $score1 = $A1002;
  $score2 = $A1001;
  array_push($tabFinaleElim, $tabFinale[0]);
  array_push($tabFinaleChamp, $tabFinale[1]);
}


if (substr($type, 1, 2) == 32 or substr($type, 1, 2) == 64)
  $max = 64;
elseif (substr($type, 3, 2) == 16 or substr($type, 3, 2) == 32)
  $max = 32;
elseif (substr($type, 5, 2) == 8 or substr($type, 5, 2) == 16)
  $max = 16;
elseif (substr($type, 7, 2) == 4 or substr($type, 7, 2) == 8)
  $max = 8;
elseif (substr($type, 9, 2) == 2 or substr($type, 9, 2) == 4)
  $max = 4;
?>






  <table width="500" border="1" class="marginAuto">
  <tr>
    <td colspan="2" class="size5 bold">
      <?php intituleDivision($division,$bdd) ; ?>
    </td>
  </tr>
  <?php
  foreach ($tabEquipeLigue as $equipeLigue) {
  ?>
    <tr class="styleArial">
      <td width="250">

        <?php
        elimination($equipeLigue);
        ?>
      </td>
      <td width="250">
        <?php nomEquipe($equipeLigue,$bdd); ?>
      </td>
    </tr>
  <?php
  }
}

function nomEquipe($equipeLigue,$bdd) {
  $reponse = $bdd->query("SELECT nom_1
								FROM bdclubs
								WHERE id = $equipeLigue");
  while ($row = $reponse->fetch()) {
            echo $row[0];
  }
}
function intituleDivision($division,$bdd) {
  $reponse = $bdd->query("SELECT division
								FROM bddivisions
								WHERE id = $division AND actif= '1'");
  while ($row = $reponse->fetch()) {
            echo $row[0];
  }
}

function elimination($equipeLigue) {
  global $tab32meElim,$tab16meElim, $tab8meElim, $tab4meElim, $tab2meElim, $tabFinaleElim, $tabFinaleChamp;
  
  if (in_array($equipeLigue, $tab32meElim))
  echo "Eliminée en 32me de finale";
else if (in_array($equipeLigue, $tab16meElim))
  echo "Eliminée en 16me de finale";
else if (in_array($equipeLigue, $tab8meElim))
  echo "Eliminée en 8me de finale";
else if (in_array($equipeLigue, $tab4meElim))
  echo "Eliminée en quart de finale";
else if (in_array($equipeLigue, $tab2meElim))
  echo "Eliminée en demi finale";
else "echo ";

if (in_array($equipeLigue, $tabFinaleElim))
  echo "Vice champion de France";
if (in_array($equipeLigue, $tabFinaleChamp))
  echo "Champion de France";
}




  ?>
</table>




</body>

</html>