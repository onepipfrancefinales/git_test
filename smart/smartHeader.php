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
        $titre = "Tous le rugby";
}


/*
if ($page == "actualites")
    $titre = "Actualités";
else if ($page == "champions")
    $titre = "Champions de l'année";
else if ($page == "palmaresRegions")
    $titre = "Ligues régionales de rugby <br> Palmarès";
else if ($page == "divisions")
    $titre = "Evolutions des divisions";
else if ($page == "scores")
    $titre = "Evolution des points";
else if ($page == "lexique")
    $titre = "Expressions dédiées au rugby";
else if ($page == "hymnes")
    $titre = "Hymnes du rugby";
else if ($page == "videos")
    $titre = "Vidéos";
else if ($page == "chansons")
    $titre = "Animation 3me mi-temps";
else
    $titre = "Tous le rugby";
*/
?>

<table width="98%" border="1">
    <tr>
        <td class="h22 width5PC"><a href="/smart/sommaire.php"><img src="../images/smart/flecheGauche.jpg" width="27" height="20" alt="fléche retour"></a></td>
        <td class="h22 width95PC"> France Finales Rugby </td>
    </tr>
    <tr>
        <td colspan="2" class="h12"><?php echo $titre; ?></td>
    </tr>
</table>