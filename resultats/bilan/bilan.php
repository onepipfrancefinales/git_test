<table width="600" class="marginAuto borderNone">
  <tr>
    <td width="572">&nbsp;</td>
    <td width="133" > </td>
  </tr>
  <tr>
    <td width="572">
      <h2>
        <?php echo $nom; ?>
      </h2>
    </td>
    <td rowspan="2" valign="middle" align="center">
      
        <?php
        $logoEquipe = substr($logoEquipe, -5); {
         print("<img class=\"width200 height200\" src=\"/images/blasons200_200/$logoEquipe.gif\" alt=\"blason du club\">");
       }
      ?>      
    </td>
  </tr>
  <tr>
    <td width="572" valign="middle">

    </td>
  </tr>
</table>


<h1>Saisons précédentes </h1>

<table width="550" class="marginAuto borderNone">
  <!-- Dernière saison : saison -1 ans -->
  <tr class="ligneGrise">
    <td class="saison">
      <?php echo $debutSaison - 1; ?> -
      <?php echo $finSaison - 1; ?>
    </td>
    <td class="division">
      <?php echo $terrMoins1; ?>
    </td>
  </tr>
  <tr class="ligneGrise">
    <td class="saison"> </td>
    <td class="division">
      <?php echo $franceMoins1; ?>
    </td>
  </tr>
  <!-- saison -2 ans -->
  <tr>
    <td class="saison">
      <?php echo $debutSaison - 2; ?> -
      <?php echo $finSaison - 2; ?>
    </td>
    <td class="division">
      <?php echo $terrMoins2; ?>
      </div>
    </td>
  </tr>
  <tr>
    <td class="saison"> </td>
    <td class="division">
      <?php echo $franceMoins2; ?>
    </td>
  </tr>

  <!-- saison -3 ans -->
  <tr class="ligneGrise">
    <td class="saison">
      <?php echo $debutSaison - 3; ?> -
      <?php echo $finSaison - 3; ?>
    </td>
    <td class="division">
      <?php echo $terrMoins3; ?>
    </td>
  </tr>
  <tr class="ligneGrise">
    <td class="saison"> </td>
    <td class="division">
      <?php echo $franceMoins3; ?>
    </td>
  </tr>
  <!-- saison -4 ans -->
  <tr>
    <td class="saison">
      <?php echo $debutSaison - 4; ?> -
      <?php echo $finSaison - 4; ?>
    </td>
    <td class="division">
      <?php echo $terrMoins4; ?>
      </div>
    </td>
  </tr>
  <tr>
    <td class="saison"> </td>
    <td class="division">
      <?php echo $franceMoins4; ?>
      </div>
    </td>
  </tr>
  <!-- saison -5 ans -->
  <tr class="ligneGrise">
    <td class="saison">
      <?php echo $debutSaison - 5; ?> -
      <?php echo $finSaison - 5; ?>
    </td>
    <td class="division">
      <?php echo $terrMoins5; ?>
    </td>
  </tr>
  <tr class="ligneGrise">
    <td class="saison"> </td>
    <td class="division">
      <?php echo $franceMoins5; ?>
    </td>
  </tr>
</table>
<br>
<hr>
<hr>

<h1>Saison
  <?php echo $debutSaison . " - " . $finSaison; ?>
</h1>
<!-- Dénomination de la compétition -->


<p class="titreRouge1">
  <?php
  //$comite= substr ($comite,0,3);
  echo "Championnat ";

  if ($phpComite == "phppro") {
    if (substr($champ, 3, 2) == 11)
      echo "Top 14";
    elseif (substr($champ, 3, 2) == 12)
      echo "Pro D2";
    elseif (substr($champ, 3, 2) == 13)
      echo "Nationale";
    elseif (substr($champ, 3, 2) == 14)
      echo "Fédérale 1";
    elseif (substr($champ, 3, 2) == 24)
      echo "Espoir Féd 1";
    elseif (substr($champ, 3, 2) == 15)
      echo "Fédérale 2";
    elseif (substr($champ, 3, 2) == 25)
      echo "Fédérale B";

  } elseif ($phpComite == "phpfed3NE") {
    if (substr($champ, 3, 2) == 16)
      echo "Fédérale 3";
    else
      echo "Excellence B";
  } else {
    echo "ligue " . $nomLigue;
  }

  ?>
</p>


<p class="titreRouge2">
  <?php echo $division; ?>
<div>
  </p>
  <br>
  <h4 >Classement général</h4>
  <!-- Classement général de la poule -->
<div  align="center" >
  <?php
  classementDetaille($champ, $bdd);
  ?>
</div>
  <!--
  <h3><font color="#000000" face="Arial, Helvetica, sans-serif"> Evolution du classement</font></h3>
  -->

  <?php
  //echo "prochainement";
  //require 'graphiqueTest2.php';
  //require 'graphiqueTest3.php';
  echo "<br>";
  echo "<br>";
  echo "<br>"; ?>

  <h4> Suivi des résultats des rencontres </h4>
  <?php
  require '../../connect/connexion6.php';
 evolutionResultatsSmart($equipe, $comite, $champ, $bdd);
  ?>
  <br><br>
  <h4> Journée(s) reportée(s)</h4>
  <br>
  <?php  journeesReportees($comite, $champ, $bdd); ?>
  <br><br>

  <p class=titreNoir2>Calendrier et résultats de<br>
    <?php echo $nom; ?>
  </p>

  <?php  oppositionsDetaillees($champ, $id_equipe, false, $bdd); ?>
  <hr>
  <hr><br>

  <h1> Quelques Stats</h1>

  <!-- font size="3" face="Arial, Helvetica, sans-serif" color="#FF0000">Victoires 
    consécutives</font>
  -->
  <table width="400" class="marginAuto borderWidth1">
    <tr>
      <td class="stats">Résultats à domicile</td>
      <td class="stats">Résultats à l'exterieur </td>
    </tr>
    <tr class="colorWhite">
      <td class="statsBlanc">Nbre de match :
        <?php echo $matchDomicile ?>
      </td>
      <td class="statsBlanc">Nbre de match :
        <?php echo $matchExterieur; ?>
      </td>
    <tr>
      <td height="37" width="200">
        <?php require 'graphDomicile.php'; ?>
      </td>
      <td height="37" width="200">
        <?php require 'graphExterieur.php'; ?>
      </td>
    </tr>
  </table>

  <h1>Moyennes</h1>
  <br>
  <table width="73%" class="marginAuto borderNone">
    <tr>
      <td class="moyPP" colspan="2"> Points marqués par match </td>
      <td class="moyPC" colspan="2"> Points encaisses par match </td>
    </tr>
    <tr>
      <td class="moyPP" colspan="2">
        <?php
        if ($joues > 0) {
          $moyenne = round($pointsMarques / $joues);
          echo $moyenne;
        } else {
          echo "0";
        } ?>
      </td>
      <td class="moyPC" colspan="2">
        <?php
        if ($joues > 0) {
          $moyenne = round($pointsPris / $joues);
          echo $moyenne;
        } else {
          echo "0";
        } ?>
      </td>
    </tr>
  </table>
  <br>
  <table width="73%" class="marginAuto borderWidth1">
    <tr>
      <td class="moyVert"> Moyenne à domicile </td>
      <td class="moyVert"> Moyenne à l'exterieur </td>
      <td class="moyRouge"> Moyenne à domicile </td>
      <td class="moyRouge"> Moyenne à l'exterieur </td>
    </tr>
    <tr>
      <td class="moyResultat">
        <?php
        if ($matchDomicile > 0)
          echo round($pointsMarquesDomicile / $matchDomicile);
        else
          echo "-"; ?>
      </td>
      <td class="moyResultat">
        <?php
        if ($matchExterieur > 0)
          echo round($pointsMarquesExterieur / $matchExterieur);
        else
          echo "-"; ?>
      </td>
      <td class="moyResultat">
        <?php
        if ($matchDomicile > 0)
          echo round($pointsPrisDomicile / $matchDomicile);
        else
          echo "-"; ?>
      </td>
      <td class="moyResultat">
        <?php
        if ($matchExterieur > 0)
          echo round($pointsPrisExterieur / $matchExterieur);
        else
          echo "-"; ?>
      </td>
    </tr>
  </table>
  <br>
  <hr>
  <br>
  <table width="72%" class="marginAuto borderNone">
    <tr>
      <td class="QLiens">Meilleure attaque de la poule :</td>
      <td class="QLiens">
        <?php echo $nomMeilleureAttaque; ?>
      </td>
      <td width="20%">
        <div class="titreNoir3">
          <?php echo round($moyenneMeilleureAttaque) . " points par match"; ?>
        </div>
      </td>
    </tr>
    <tr>
      <td class="QLiens">Meilleure défense de la poule : </td>
      <td class="QLiens">
        <?php echo $nomMeilleureDefense; ?>
      </td>
      <td width="20%">
        <div class="titreNoir3">
          <?php echo round($moyenneMeilleureDefense) . " points par match"; ?>
        </div>
      </td>
    </tr>
  </table>

  <hr>
  <div align="left"><a href="javascript:history.go(-1)">
      <font color="#000099"><i><b>&lt;---
            Retour résultats du comité</b></i></font>
    </a></div>
  <hr>
  <br>

  <p class="QLiens"> Calendrier et résulats des rencontres de la poule</p>

  <?php calendrier($champ, false, $bdd); ?>

  <hr>

  <p class="titreRouge1">Informations complémentaires concernant <br>
    <?php echo $nom; ?>

  <h3 class="QLiens" style="margin-left: 16%"><a href="/consultation/pageclub00.php?champion=<?php echo $equipe; ?>">
  
  <br>
  Infos du club,<br>
  Bureau, contacts,<br>
  Résultats des saisons précédentes,<br>
  Palmarès,<br>
  etc ...<br>
</h3>
  <hr>
  


  <br>
  <br>