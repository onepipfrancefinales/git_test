<?php

switch ($page) {
    case "actualites":
        $titre = "Actualités";
        break;
    case "champions":
        $titre = "Champions de l'année";
        break;
    case "palmaresRegions":
        $titre = "Ligues régionales de rugby <br> Palmarès";
        break;
    case "divisions":
        $titre = "Evolutions des divisions";
        break;
    case "scores":
        $titre = "Evolution des points";
        break;
    case "lexique":
        $titre = "Expressions dédiées au rugby";
        break;
    case "hymnes":
        $titre = "Hymnes du rugby";
        break;
    case "videos":
        $titre = "Vidéos";
        break;
    case  "chansons":
        $titre = "Animation 3me mi-temps";
        break;
    default:
        $titre = "Tout sur le rugby";
}
?>

<table class="width98PC" border="1">
    <tr>
       
    <?php if ($titre=="Tout sur le rugby")
    { ?>
 
  <td class="h22 width100PC"> France Finales Rugby </td>

   <?php  }
    else
    { ?>
  <td class="h22 width5PC"><a href="/smart/sommaire.php"><img src="../images/smart/flecheGauche.jpg" width="27" height="20" alt="fléche retour"></a></td>
  <td class="h22 width95PC"> France Finales Rugby </td>
   <?php } ?>
    </tr>
    <tr>
        <td colspan="2" class="h12"><?php echo $titre; ?></td>
    </tr>
</table>
<br>