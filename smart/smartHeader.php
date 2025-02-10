<?php
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
?>

<table width="100%" border="1">
    <tr>
        <td class="h22">France Finales Rugby</td>
    </tr>
    <tr>
        <td class="h12"><?php echo $titre; ?></td>
    </tr>
</table>