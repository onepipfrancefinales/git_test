<div text="#000000" link="#000000" vlink="#000000" alink="#000000">
  <?php
  if (isset($_GET['seniors'])) $seniors = $_GET['seniors'];
  else $seniors = "equipeUne";
  if (isset($_GET['mode']))  $mode = $_GET['mode'];
  else $mode = "noSmart";
  $chaine = $_POST['champion'];
  if ($mode != "smart") {
    $width = 100;
    $widthComite = 80;
    $height = 100;
  } else {
    $width = 50;
    $height = 50;
    $widthComite = 35;
  }





  if ($mode != "smart")  echo "<h1>";
  else echo "<h3 class=\"center\">"; ?>
  <br>
  <br>
  Votre recherche <div class="colorBlack"><?php echo $chaine; ?></div> n'a pu aboutir.....
  <?php if ($mode != "smart")  echo "</h1>";
  else echo "</h3>"; ?>
  <br>
  <?php
  if ($mode != "smart")  echo "<h1>";
  else echo "<h3 class=\"center\">"; ?>
  <b>
    Tentez une recherche alphabétique
  </b>
  <?php if ($mode != "smart")  echo "</h1>";
  else echo "</h3>"; ?>

  <table class="marginAuto width90PC borderWidth1">

    <tr>
      <td class="size5 borderWidth1"><a class="decorationNone" href="/consultation/page_recherche_comite2.php?variable_1=A">A</a></td>
      <td class="size5 borderWidth1"><a class="decorationNone" href="/consultation/page_recherche_comite2.php?variable_1=B">B</a></td>
      <td class="size5 borderWidth1"><a class="decorationNone" href="/consultation/page_recherche_comite2.php?variable_1=C">C </a></td>
      <td class="size5 borderWidth1"><a class="decorationNone" href="/consultation/page_recherche_comite2.php?variable_1=D">
          D</a>
      </td>
      <td class="size5 borderWidth1"> <a class="decorationNone" href="/consultation/page_recherche_comite2.php?variable_1=E">
          E</a>
      </td>
      <td class="size5 borderWidth1"> <a class="decorationNone" href="/consultation/page_recherche_comite2.php?variable_1=F">
          F</a>
      </td>
      <td class="size5 borderWidth1"> <a class="decorationNone" href="/consultation/page_recherche_comite2.php?variable_1=G">
          G</a>
      </td>
      <td class="size5 borderWidth1"> <a class="decorationNone" href="/consultation/page_recherche_comite2.php?variable_1=H">
          H</a>
      </td>
      <td class="size5 borderWidth1"> <a class="decorationNone" href="/consultation/page_recherche_comite2.php?variable_1=I">
          I</a>
      </td>
      <td class="size5 borderWidth1"> <a class="decorationNone" href="/consultation/page_recherche_comite2.php?variable_1=J">
          J</a>
      </td>
      <td class="size5 borderWidth1"> <a class="decorationNone" href="/consultation/page_recherche_comite2.php?variable_1=K">
          K</a>
      </td>
      <td class="size5 borderWidth1"> <a class="decorationNone" href="/consultation/page_recherche_comite2.php?variable_1=L">
          L</a>
      </td>
      <td class="size5 borderWidth1"> <a class="decorationNone" href="/consultation/page_recherche_comite2.php?variable_1=M">
          M</a>
      </td>
    </tr>
    <td class="size5 borderWidth1"> <a class="decorationNone" href="/consultation/page_recherche_comite2.php?variable_1=N">
        N</a>
    </td>


    <td class="size5 borderWidth1"> <a class="decorationNone" href="/consultation/page_recherche_comite2.php?variable_1=O">
        O</a>
    </td>
    <td class="size5 borderWidth1"> <a class="decorationNone" href="/consultation/page_recherche_comite2.php?variable_1=P">
        P</a>
    </td>
    <td class="size5 borderWidth1"> <a class="decorationNone" href="/consultation/page_recherche_comite2.php?variable_1=Q">
        Q</a>
    </td>
    <td class="size5 borderWidth1"> <a class="decorationNone" href="/consultation/page_recherche_comite2.php?variable_1=R">
        R</a>
    </td>
    <td class="size5 borderWidth1"> <a class="decorationNone" href="/consultation/page_recherche_comite2.php?variable_1=S">
        S</a>
    </td>
    <td class="size5 borderWidth1"> <a class="decorationNone" href="/consultation/page_recherche_comite2.php?variable_1=T">
        T</a>
    </td>
    <td class="size5 borderWidth1"> <a class="decorationNone" href="/consultation/page_recherche_comite2.php?variable_1=U">
        U</a>
    </td>
    <td class="size5 borderWidth1"> <a class="decorationNone" href="/consultation/page_recherche_comite2.php?variable_1=V">
        V</a>
    </td>
    <td class="size5 borderWidth1"> <a class="decorationNone" href="/consultation/page_recherche_comite2.php?variable_1=W">
        W</a>
    </td>
    <td class="size5 borderWidth1"> <a class="decorationNone" href="/consultation/page_recherche_comite2.php?variable_1=X">
        X</a>
    </td>
    <td class="size5 borderWidth1"> <a class="decorationNone" href="/consultation/page_recherche_comite2.php?variable_1=Y">
        Y</a>
    </td>
    <td class="size5 borderWidth1"> <a class="decorationNone" href="/consultation/page_recherche_comite2.php?variable_1=Z">
        Z</a>
    </td>
    </tr>
  </table>

  <br>

  <?php
  if ($mode != "smart")  echo "<h1>";
  else echo "<h3 class=\"center\">"; ?>
  ou une recherche par ligues ou par les anciens comités
  <br>
  <?php if ($mode != "smart")  echo "</h1>";
  else echo "</h3>"; ?>
  <br>

  <?php if ($mode != "smart") $styleCSS = "style size5 bold";
  else $styleCSS = "bold size3"; ?>

  <table cellspacing="1" cellpadding="0" class="marginAuto width95PC">
    <tr>
      <td colspan="4" class="background666666"></td>
    </tr>
    <tr>

      <td class="backgroundCCCCCC borderWidth1">
        <div class="center"><img src="/images/ligues/ARA.jpg" width="<?php echo $width; ?>" height="<?php echo $height; ?>"></div>
      </td>
      <td colspan="3" class="backgroundCCCCCC borderWidth1">
        <div class="<?php echo $styleCSS; ?>"><a href="/consultation/page_ligue.php?idLigue=10">Ligue Auvergne Rhône Alpes</a></div>
      </td>
    </tr>
    <tr>
      <td colspan="4">
        <br>
      </td>
    </tr>
    <tr>
      <td class="width25PC">
        <div class="colorBlack size3 center"><a href="/consultation/page_comite.php?variable_1=(AP)" target="_top">Ex comité<br>Alpes</a></div>
      </td>
      <td class="width25PC">
        <div class="colorBlack size3 center"><a href="/consultation/page_comite.php?variable_1=(AU)" target="_top">Ex comité<br>Auvergne</a></div>
      </td>
      <td class="width25PC">
        <div class="colorBlack size3 center"><a href="/consultation/page_comite.php?variable_1=(DA)" target="_top">Ex comité<br>Drome Ardèche</a></div>
      </td>
      <td class="width25PC">
        <div class="colorBlack size3 center"><a href="/consultation/page_comite.php?variable_1=(LY)" target="_top">Ex comité<br>Lyonnais</a></div>
      </td>
    </tr>
    <tr>
      <td class="width25PC">
        <div class="center"><a href="page_comite.php?variable_1=(AP)" target="_top"><img src="/images/comites/(AP).jpg" width="<?php echo $widthComite; ?>" height="<?php echo $height; ?>"></a></div>
      </td>
      <td class="width25PC">
        <div class="center"><a href="page_comite.php?variable_1=(AU)" target="_top"><img src="/images/comites/(AU).jpg" width="<?php echo $widthComite; ?>" height="<?php echo $height; ?>"></a></div>
      </td>
      <td class="width25PC">
        <div class="center"><a href="page_comite.php?variable_1=(DA)" target="_top"><img src="/images/comites/(DA).jpg" width="<?php echo $widthComite; ?>" height="<?php echo $height; ?>"></a></div>
      </td>
      <td class="width25PC">
        <div class="center"><a href="page_comite.php?variable_1=(LY)" target="_top"><img src="/images/comites/(LY).jpg" width="<?php echo $widthComite; ?>" height="<?php echo $height; ?>"></a></div>
      </td>
    </tr>


    <tr>
      <td colspan="4">
        <hr><br>
      </td>
    </tr>





    <tr>
      <td colspan="4" class="background666666"></td>
      <td colspan="3"></td>
    </tr>
    <tr>
      <td class="backgroundCCCCCC borderWidth1">
        <div class="center"><img src="/images/ligues/BFC.jpg" width="<?php echo $width; ?>" height="<?php echo $height; ?>"></div>
      </td>
      <td colspan="3" class="backgroundCCCCCC borderWidth1">
        <div class="<?php echo $styleCSS; ?>"> <b><a href="/consultation/page_ligue.php?idLigue=11">Ligue Bourgogne France Comté</a></b></div>
      </td>
    </tr>
    <tr>
      <td colspan="4">
        <br>
      </td>
    </tr>
    <tr>
      <td></td>
      <td width="129">
        <div class="colorBlack size3 center"><a href="/consultation/page_comite.php?variable_1=(BG)" target="_top">Ex comité<br>Bourgogne</a></div>
      </td>
      <td width="129" height="44" bordercolor="#999999">
        <div class="colorBlack size3 center"><a href="/consultation/page_comite.php?variable_1=(FC)" target="_top">Ex comité<br>Franche Comté</a></div>
      </td>
    </tr>
    <tr>
      <td></td>
      <td>
        <div class="center"><img src="/images/comites/(BG).jpg" width="$widthComite" height="<?php echo $height; ?>"></div>
      </td>
      <td width="129">
        <div class="center"><img src="/images/comites/(FC).jpg" width="$widthComite" height="<?php echo $height; ?>"></div>
      </td>
      <td ></td>
    </tr>
    <tr>
      <td colspan="4">
        <hr><br>
      </td>
    </tr>
    <tr>
      <td colspan="4" class="" class="background666666"></td>
    </tr>
    <tr>
      <td class="backgroundCCCCCC borderWidth1">
        <div class="center"><img src="/images/ligues/BRE.jpg" width="<?php echo $width; ?>" height="<?php echo $height; ?>"></div>
      </td>
      <td colspan="3" class="backgroundCCCCCC borderWidth1">
        <div class="<?php echo $styleCSS; ?>"><b><a href="/consultation/page_ligue.php?idLigue=12">Ligue Bretagne</a></b></div>
      </td>
    </tr>
    <tr>
      <td colspan="4">
        <br>
      </td>
    </tr>
    <tr>

      <td colspan="4">
        <div class="center"><a href="page_comite.php?variable_1=(BR)" target="_top">Ex comité<br>Bretagne</a></div>
      </td>
    </tr>
    <tr>
      <td colspan="4">
        <div class="center"><a href="/consultation/page_comite.php?variable_1=(BR)" target="_top"><img src="/images/comites/(BR).jpg" width="$widthComite" height="<?php echo $height; ?>"></a></div>
      </td>
      <td></td>
    </tr>
    <tr>
      <td colspan="4">
        <hr><br>
      </td>
    </tr>
    <tr>
      <td colspan="4" class="background666666"></td>
    </tr>
    <tr>
      <td class="backgroundCCCCCC borderWidth1">
        <div class="center"><img src="/images/ligues/CVL.jpg" width="<?php echo $width; ?>" height="<?php echo $height; ?>"></div>
      </td>
      <td colspan="3" class="backgroundCCCCCC borderWidth1">
        <div class="<?php echo $styleCSS; ?>"><b><a href="/consultation/page_ligue.php?idLigue=13">Ligue Centre Val de Loire</a></b></div>
      </td>
    </tr>
    <tr>
      <td colspan="4">
        <br>
      </td>
    </tr>
    <tr>

      <td colspan="4">
        <div class="center"><a href="/consultation/page_comite.php?variable_1=(CE)" target="_top">Ex comité<br>Centre</a></div>
      </td>
    </tr>
    <tr>
    <td colspan="4">
        <div class="center"><a href="/consultation/page_comite.php?variable_1=(CE)" target="_top"><img src="/images/comites/(CE).jpg" width="$widthComite" height="<?php echo $height; ?>"></a></div>
      </td>
    </tr>
    <tr>
      <td colspan="4">
        <hr><br>
      </td>
    </tr>
    <tr>
      <td colspan="4" class="background666666"></td>
    </tr>
    <tr>
      <td class="backgroundCCCCCC borderWidth1">
        <div class="center"><img src="/images/ligues/COR.jpg" width="<?php echo $width; ?>" height="<?php echo $height; ?>"></div>
      </td>
      <td colspan="3" class="backgroundCCCCCC borderWidth1">
        <div class="<?php echo $styleCSS; ?>"><b><a href="page_ligue.php?idLigue=14">Ligue Corse</a></b></div>
      </td>
    </tr>
    <tr>
      <td colspan="4">
        <br>
      </td>
    </tr>
    <tr>
     
      <td colspan="4">
        <div class="center"><a href="/consultation/page_comite.php?variable_1=(CE)" target="_top"></a></div>
      </td>
      
    </tr>
    <tr>
    <td colspan="4">
    </tr>
    <tr>
      <td colspan="4">
        <hr><br>
      </td>
    </tr>
    <tr>
      <td colspan="4" class="background666666"></td>
    </tr>
    <tr>
      <td class="backgroundCCCCCC borderWidth1">
        <div class="center"><img src="/images/ligues/GES.jpg" width="<?php echo $width; ?>" height="<?php echo $height; ?>"></div>
      </td>
      <td colspan="3" class="backgroundCCCCCC borderWidth1">
        <div class="<?php echo $styleCSS; ?>"><b><a href="/consultation/page_ligue.php?idLigue=15">Ligue Grand Est</a></b></div>
      </td>
    </tr>
    <tr>
      <td colspan="4">
        <br>
      </td>
    </tr>
    <tr>
      <td colspan="4">
        <div class="center"><b><a href="/consultation/page_comite.php?variable_1=(AL)" target="_top">Ex comité<br>Alsace Lorraine</a></b></div>
      </td>
    </tr>
    <tr>
    <td colspan="4">
        <div class="center"><a href="/consultation/page_comite.php?variable_1=(AL)" target="_top"><img src="/images/comites/(AL).jpg" width="<?php echo $widthComite; ?>" height="<?php echo $height; ?>"></a></div>
      </td>
    </tr>
    <tr>
      <td colspan="4">
        <hr><br>
      </td>
    </tr>
    <tr>
      <td colspan="4" class="background666666"></td>
    </tr>
    <tr>
      <td class="backgroundCCCCCC borderWidth1">
        <div class="center"><img src="/images/ligues/HDF.jpg" width="<?php echo $width; ?>" height="<?php echo $height; ?>"></div>
      </td>
      <td colspan="3" class="backgroundCCCCCC borderWidth1">
        <div class="<?php echo $styleCSS; ?>"><a href="/consultation/page_ligue.php?idLigue=16">Ligue Hauts de France</a></div>
      </td>
    </tr>
    <tr>
      <td colspan="4" height="14" bordercolor="#999999">
        <br>
      </td>
    </tr>
    <tr>
    <td colspan="4">
        <div class="center"><a href="/consultation/page_comite.php?variable_1=(FL)" target="_top">Ex comité<br>Flandres</a></div>
      </td>
      
    </tr>
    <tr>
      <td colspan="4">
        <div class="center"><a href="/consultation/page_comite.php?variable_1=(FL)" target="_top"><img src="/images/comites/(FL).jpg" width="$widthComite" height="<?php echo $height; ?>"></a></div>
      </td>
    </tr>
    <tr>
      <td colspan="4">
        <hr><br>
      </td>
    </tr>
    <tr>
      <td colspan="4" class="background666666"></td>
    </tr>
    <tr>
      <td class="backgroundCCCCCC borderWidth1">
        <div class="center"><img src="/images/ligues/IDF.jpg" width="<?php echo $width; ?>" height="<?php echo $height; ?>"></div>
      </td>
      <td colspan="4" class="backgroundCCCCCC borderWidth1">
        <div class="<?php echo $styleCSS; ?>"><a href="page_ligue.php?idLigue=17">Ligue Ile de France</a></div>

      </td>
    </tr>
    <tr>
      <td colspan="4" height="19" bordercolor="#999999">
        <br>
      </td>
    </tr>
    <tr>
      <td colspan="4">
        <div class="center"><a href="/consultation/page_comite.php?variable_1=(IDF)" target="_top">Ex comité<br>Ile de France</a></div>
      </td>
    </tr>
    <tr>
    <td colspan="4">
        <div class="center"><a href="/consultation/page_comite.php?variable_1=(IDF)" target="_top"><img src="/images/comites/(IDF).jpg" width="$widthComite" height="<?php echo $height; ?>"></a></div>
      </td>
    </tr>
    <tr>
      <td colspan="4">
        <hr><br>
      </td>
    </tr>
    <tr>
      <td colspan="4" class="background666666"></td>
    </tr>
    <tr>
      <td class="backgroundCCCCCC borderWidth1">
        <div class="center"><img src="/images/ligues/NOR.jpg" width="<?php echo $width; ?>" height="<?php echo $height; ?>"></div>
      </td>
      <td colspan="3" class="backgroundCCCCCC borderWidth1">
        <div class="<?php echo $styleCSS; ?>"><a href="/consultation/page_ligue.php?idLigue=18">Ligue Normandie</a></div>
      </td>
    </tr>
    <tr>
      <td colspan="4" height="18" bordercolor="#999999">
        <br>
      </td>
    </tr>
    <tr>
      <td colspan="4">
        <div class="colorBlack size3 center"><a href="/consultation/page_comite.php?variable_1=(N)" target="_top">Ex comité<br>Normandie</a></div>
      </td>
    </tr>
    <tr>
      <td colspan="4">
        <div class="center"><img src="/images/comites/(N).jpg" width="<?php echo $widthComite; ?>" height="<?php echo $height; ?>"></div>
      </td>
    </tr>
    <tr>
      <td colspan="4">
        <hr><br>
      </td>
    </tr>
    <tr>
      <td colspan="4" class="background666666"></td>
    </tr>
    <tr>
      <td class="backgroundCCCCCC borderWidth1">
        <div class="center"><img src="/images/ligues/NAQ.jpg" width="<?php echo $width; ?>" height="<?php echo $height; ?>"></div>
      </td>
      <td colspan="3" class="backgroundCCCCCC borderWidth1">
        <div class="<?php echo $styleCSS; ?>"><b><a href="/consultation/page_ligue.php?idLigue=19">Ligue Nouvelle Aquitaine</a></b></div>
      </td>
    </tr>
    <tr>
      <td colspan="4">
        <br>
      </td>
    </tr>
    <tr>
      <td>
        <div class="colorBlack size3 center"><a href="/consultation/page_comite.php?variable_1=(BE)" target="_top">Ex comité<br>Béarn</a></div>
      </td>
      <td width="145" bordercolor="#999999">
        <div class="colorBlack size3 center"><a href="/consultation/page_comite.php?variable_1=(CBL)" target="_top">Ex comité<br>Côte Basque Landes</a></div>
      </td>
      <td>
        <div class="colorBlack size3 center"><a href="/consultation/page_comite.php?variable_1=(CA)" target="_top">Ex comité<br>Côte d'Argent</a></div>
      </td>
      <td>
        <div class="colorBlack size3 center"><a href="/consultation/page_comite.php?variable_1=(LM)" target="_top">Ex comité <br>Limousin</a></div>
      </td>
    </tr>
    
    <tr>
      <td >
        <div class="center"><a href="/consultation/page_comite.php?variable_1=(BE)" target="_top"><img src="/images/comites/(BE).jpg" width="<?php echo $widthComite; ?>" height="<?php echo $height; ?>"></a></div>
      </td>
      <td bordercolor="#999999">
        <div class="center"><img src="/images/comites/(CBL).jpg" width="<?php echo $widthComite; ?>" height="<?php echo $height; ?>"></div>
      </td>
      <td>
        <div class="center"><img src="/images/comites/(CA).jpg" width="<?php echo $widthComite; ?>" height="<?php echo $height; ?>"></div>
      </td>
      <td>
        <div class="center"><a href="/consultation/page_comite.php?variable_1=(LM)" target="_top"><img src="/images/comites/(LM).jpg" width="<?php echo $widthComite; ?>" height="<?php echo $height; ?>"></a></div>
      </td>
    </tr>
    <tr>
      <td colspan="4" ><br></td>
    </tr>
    <tr>
      <td></td>
      <td>
        <div class="colorBlack size3 center"><a href="/consultation/page_comite.php?variable_1=(PCH)" target="_top">Ex comité<br>Poitou Charente</a></b></div>
      </td>
      <td width="129">
        <div class="colorBlack size3 center"><a href="/consultation/page_comite.php?variable_1=(PA)" target="_top">Ex comité<br>Périgord Agenais</a></b></div>
      </td>
      <td bordercolor="#999999">

      </td>
    </tr>
    <tr>
      <td></td>
      <td>
        <div class="center"><img src="/images/comites/(PCH).jpg" width="$widthComite" height="<?php echo $height; ?>"></div>
      </td>
      <td>
        <div class="center"><a href="/consultation/page_comite.php?variable_1=(PA)" target="_top"><img src="/images/comites/(PA).jpg" width="<?php echo $widthComite; ?>" height="<?php echo $height; ?>"></a></div>
      </td>
      <td bordercolor="#999999">
        <div class="center"></div>
      </td>
    </tr>
    <tr>
      <td colspan="4">
        <hr><br>
      </td>
    </tr>
    <tr>
      <td colspan="4" class="background666666"></td>
    </tr>
    <tr>
      <td class="backgroundCCCCCC borderWidth1">
        <div class="center"><img src="/images/ligues/OCC.jpg" width="<?php echo $width; ?>" height="<?php echo $height; ?>"></div>
      </td>
      <td colspan="3" class="backgroundCCCCCC borderWidth1">
        <div class="<?php echo $styleCSS; ?>"><b><a href="/consultation/page_ligue.php?idLigue=20">Ligue Occitanie</a></b></div>
      </td>
    </tr>
    <tr>
      <td colspan="4">
        <br>
      </td>
    </tr>
    <tr>
      <td>
        <div class="center"><a href="page_comite.php?variable_1=(AB)" target="_top">Ex comité <br> Armagnac Bigorre </a></div>
      </td>
      <td bordercolor="#999999">
        <div class="center"><a href="/consultation/page_comite.php?variable_1=(LD)" target="_top">Ex comité<br>Languedoc</a></div>
      </td>
      <td width="145">
        <div class="center"><a href="/consultation/page_comite.php?variable_1=(MPY)" target="_top">Ex comité<br>Midi Pyrénées</a></div>
      </td>
      <td>
        <div class="center"><a href="/consultation/page_comite.php?variable_1=(PC)" target="_top">Ex comité<br>Pays Catalan</a></div>
      </td>
    </tr>
    <tr>
      <td>
        <div class="center"><a href="/consultation/page_comite.php?variable_1=(AB)" target="_top"><img src="/images/comites/(AB).jpg" width="<?php echo $widthComite; ?>" height="<?php echo $height; ?>"></a></div>
      </td>
      <td bordercolor="#999999">
        <div class="center"><a href="/consultation/page_comite.php?variable_1=(LD)" target="_top"><img src="/images/comites/(LD).jpg" width="<?php echo $widthComite; ?>" height="<?php echo $height; ?>"></a></div>
      </td>
      <td width="145">
        <div class="center"><a href="/consultation/page_comite.php?variable_1=(MPY)" target="_top"><img src="/images/comites/(MPY).jpg" width="<?php echo $widthComite; ?>" height="<?php echo $height; ?>"></a></div>
      </td>
      <td>
        <div class="center"><img src="/images/comites/(PC).jpg" width="<?php echo $widthComite; ?>" height="<?php echo $height; ?>"></div>
      </td>
    </tr>
    <tr>
      <td colspan="4">
        <hr><br>
      </td>
    </tr>
    <tr >
      <td colspan="4" class="background666666"></td>
    </tr>
    <tr class="borderWidth1 borderColorBlue">
      <td class="backgroundCCCCCC borderWidth1 ">
        <div class="center"><img src="/images/ligues/PDL.jpg" width="<?php echo $width; ?>" height="<?php echo $height; ?>"></div>
      </td>
      <td colspan="3" class="backgroundCCCCCC borderWidth1">
        <div class="<?php echo $styleCSS; ?>"><b><a href="/consultation/page_ligue.php?idLigue=21">Ligue Pays de la Loire</a></b></div>
      </td>
    </tr>
    <tr>
      <td colspan="4" bordercolor="#999999">
       <br>
      </td>
    </tr>
    <tr>
   
      <td colspan="4">
        <div class="center"><a href="/consultation/page_comite.php?variable_1=(PL)" target="_top">Ex comité<br>Pays de Loire</a></div>
      </td>
    </tr>
    <tr>  
      <td colspan="4">
        <div class="center"><img src="/images/comites/(PL).jpg" width="<?php echo $widthComite; ?>" height="<?php echo $height; ?>"></div>
      </td>
    </tr>
    <tr>
      <td colspan="4">
        <hr><br>
      </td>
    </tr>
    <tr>
      <td colspan="4" class="background666666"></td>
    </tr>
    <tr class="backgroundCCCCCC borderWidth1">
      <td width="132">
        <div class="center"><img src="/images/ligues/PCA.jpg" width="<?php echo $width; ?>" height="<?php echo $height; ?>"></div>
      </td>
      <td colspan="3">
        <div class="<?php echo $styleCSS; ?>"><b><a href="/consultation/page_ligue.php?idLigue=22">Ligue Provence Alpes Côte d'Azur</a></b></div>
      </td>
    </tr>
    <tr>
      <td colspan="4">
        <hr><br>
      </td>
    </tr>
    <tr>
      <td width="132"></td>
      <td>
        <div class="center"><a href="/consultation/page_comite.php?variable_1=(CAZ)" target="_top">Ex comité<br> Côte d'Azur</a></div>
      </td>
      <td width="146">
        <div class="center"><a href="/consultation/page_comite.php?variable_1=(PR)" target="_top">Ex comité<br>Provence</a></div>
      </td>
      <td width="120"></td>
    </tr>
    <tr>
      <td width="132"></td>
      <td>
        <div class="center"><img src="/images/comites/(CAZ).jpg" width="$widthComite" height="<?php echo $height; ?>"></div>
      </td>
      <td width="146">
        <div class="center"><img src="/images/comites/(PR).jpg" width="$widthComite" height="<?php echo $height; ?>"></div>
      </td>
      <td width="120"></td>
    </tr>
    <tr>
      <td colspan="4">
        <hr><br>
      </td>
    </tr>
</table>


</div>