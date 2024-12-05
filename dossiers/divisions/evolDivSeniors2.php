  
  <p><b>
      <font size="4" face="Arial, Helvetica, sans-serif">I - Compétitions Séniors  II</font>
    </b></p>
 

  <!------ Division 1 ---1894 - 1896--->

  <table class="styleArial mb-10 marginAuto" width="750">
    <tr>
      <td colspan="2" class="bgCCCCCC">
        <span class="colorRed bold">Création d'un premier niveau </span>
        <br> Arrivée de la division : 1re Série équipe seconde
      </td>
    </tr>

    <?php for ($i = 1894; $i <= 1896; $i++) { ?>
      <tr>
        <td class="bgCCCCCC bold" width="35"> <?php echo $i; ?> </td>
        <td class="bgFF0000">1re Série équipe seconde</td>
      </tr>
    <?php }
    ?>
  </table>

<!--- Division 2 --- 1897-1905   ---->

  <table class="styleArial mb-10 marginAuto" width="750">
    <tr>
      <td colspan="3" class="bgCCCCCC">
        <span class="colorRed bold">Création d'un niveau (2me)</span>
        <br> Création de la division : 1ère série équipe 3me
      </td>
    </tr>

    <?php for ($i = 1897; $i <= 1905; $i++) { ?>
      <tr>
        <td class="bgCCCCCC bold" width="35"> <?php echo $i; ?> </td>
        <td class="bgFF0000">1re Série équipe seconde</td>
        <td class="bgFF6666">1er Série équipe 3me</td>
      </tr>
    <?php }
    ?>
  </table>

<!--- Division 2 --- 1906-1931   ---->

<table class="styleArial mb-10 marginAuto" width="750">
    <tr>
      <td colspan="4" class="bgCCCCCC">
        <span class="colorRed bold">Création d'un niveau (3me) </span>
        <br>Création de la division : 1ère série équipe 4me
      </td>
    </tr>

    <?php
    
    $tabPeriode = ["1906", "1907","...","1930","1931"];

    foreach ($tabPeriode as $i)
    
   // for ($i = 1906; $i <= 1931; $i++) 
   { ?>
      <tr>
        <td class="bgCCCCCC bold" width="35"> <?php echo $i; ?> </td>
        <td class="bgFF0000">1re Série équipe seconde</td>
        <td class="bgFF6666">1er Série équipe 3me</td>
        <td class="bgFF9999">1er Série équipe 4me</td>
      </tr>
    <?php }
    ?>
  </table>



  <!--- Division 2 --- 1932-1975   ---->

  <table class="styleArial mb-10 marginAuto" width="750">
    <tr>
      <td colspan="3" class="bgCCCCCC">
        <span class="colorRed bold"> Changement de nom</span>
        <br>Les divisions de 1ère serie sont fusionnées <br>
        dans une nouvelle compétition nommée<br>
         Réserve de 1re division
      </td>
    </tr>

    <?php 
$tabPeriode = ["1932", "1933","...","1971","1972"];

    foreach ($tabPeriode as $i)
    
   // for ($i = 1932; $i <= 1972; $i++)
     { ?>
      <tr>
        <td class="bgCCCCCC bold" width="35"> <?php echo $i; ?></td>
        <td class="bgFF0000">Réserve 1re division</td>
      </tr>
    <?php }
    ?>

  </table>

  <!--- Division 3 --- 1973-1975   ---->

  <table class="styleArial mb-10 marginAuto" width="750">
    <tr>
      <td colspan="4" class="bgCCCCCC">
        <span class="colorRed bold "> Création de 2 niveaux (3me)</span>
        <br> Création de la nationale B1 et Nationale B2.
      </td>
    </tr>
    <?php for ($i = 1973; $i <= 1975; $i++) { ?>
      <tr>
        <td class="bgCCCCCC bold" width="35"> <?php echo $i; ?></td>
        <td class ="bgFF0000 ">Réserve 1re division</td>
        <td class="bgFF9966">Nationale B1  </td>
        <td class="bgFF9900">Nationale B2  </td>
      </tr>
    <?php }
    ?>
  </table>



  <!--- Division 3 --- 1976-1994   ---->

  <table class="styleArial mb-10 marginAuto" width="750">
    <tr>
      <td colspan="6" class="bgCCCCCC">
        <span class="colorRed bold "> Création de 2 niveaux (5me)</span>
        <br> Arrivée de la Fédérale B (Equipe II de la division Féderale 2) <br>
        Excellence B (Equipe II de la division Fédérale 3).
      </td>
    </tr>
    <?php for ($i = 1976; $i <= 1994; $i++) { ?>
      <tr>
        <td class="bgCCCCCC bold" width="35"> <?php echo $i; ?></td>
        <td class ="bgFF0000 ">Réserve 1re division</td>
        <td class="bgFF9966">Nationale B1  </td>
        <td class="bgFF9900">Nationale B2  </td>
        <td class="bgFF9966">Fédérale B  </td>
        <td class="bgFF9900">Excellence B  </td>
      </tr>
    <?php }
    ?>
  </table>


<!--- Division 3 --- 1995-1996   ---->

<table class="styleArial mb-10 marginAuto" width="750">
    <tr>
      <td colspan="7" class="bgCCCCCC">
        <span class="colorRed bold "> Création de 2 niveaux (3me)</span>
        <br> Arrivée de la Fédérale B (Equipe II de la division Féderale 2) <br>
        Excellence B (Equipe II de la division Fédérale 3).
      </td>
    </tr>
    <?php for ($i = 1995; $i <= 1996; $i++) { ?>
      <tr>
        <td class="bgCCCCCC bold" width="35"> <?php echo $i; ?></td>
        <td class ="bgFF0000 ">Réserve 1re division</td>
        <td class="bgFF9966">Nationale B1  </td>
        <td class="bgFF9900">Nationale B2  </td>
        <td class="bgFF9966">Fédérale B  </td>
        <td class="bgFF9900">Excellence B  </td>
        <td class="bgFF9900">Réserve  </td>
      </tr>
    <?php }
    ?>
  </table>



 <!--- Division 3 --- 1997- encours   ---->

 <table class="styleArial mb-10 marginAuto" width="750">
    <tr>
      <td colspan="5" class="bgCCCCCC">
        <span class="colorRed bold "> Création de 2 niveaux (3me)</span>
        <br> Arrivée de la Fédérale B (Equipe II de la division Féderale 2) <br>
        Excellence B (Equipe II de la division Fédérale 3).
      </td>
    </tr>
    <?php for ($i = 1997; $i <= $annee; $i++) { ?>
      <tr>
        <td class="bgCCCCCC bold" width="35"> <?php echo $i; ?></td>
        <td class ="bgFF0000 ">Réserve 1re division</td>
        <td class="bgFF9966">Nationale B  </td>
        <td class="bgFF9966">Fédérale B  </td>
        <td class="bgFF9900">Excellence B  </td>
        <td class="bgFF9900">Réserve  </td>
      </tr>
    <?php }
    ?>
  </table>









 <!--- Division 4 -- 2021- année en cours   ---->

 <table class="styleArial mb-10 marginAuto" width="750">
    <tr>
      <td colspan="7" height="24" class="bgCCCCCC">
        <span class="colorRed bold"> Création d'un niveau (4me)</span>
        <br> Arrivée de la Réserve (Equipe II de la division honneur)
    </tr>

    <?php for ($i = 2021; $i <= $annee; $i++) { ?>

      <tr>
      <td class="bgCCCCCC bold " width="35"> <?php echo $i; ?></td>
      <td class="bgFF0000">Reichel Espoirs Elite</td>
      <td class="bgFF9966">Espoirs Nationaux</td>
      <td class="bgFF9966">Espoirs Fédéraux</td>
      <td class="bgFF9966">Fédérale B</td>
        <td class="bgFF9900">Excellence B  </td>
        <td class="bgFFFF00">Réserve</td>
      </tr>

    <?php
    } ?>
  </table>