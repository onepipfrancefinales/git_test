<?php

$anneeplus = $annee +1;
$anneemoins = $annee -1;
?>

<nav>
  <div class="lien">
        <?php require("../../pub/pub7.php"); ?> 
    
      	<a href="/phasesfinalesterr/affichageFinalesTerr/pageAffichage.php?page=<?php echo $page; ?>&comite=<?php echo $comite; ?>&annee=<?php echo $anneemoins;?>&division=<?php echo $division;?>" target="_top">&lt;&lt;</a>nnnne
        <a href="/phasesfinalesterr/affichageFinalesTerr/pageAffichage.php?page=<?php echo $page; ?>&comite=<?php echo $comite; ?>&annee=<?php echo $anneeplus;?>&division=<?php echo $division;?>"target="_top">&gt;&gt;</a>
		
	<?php require("../../pub/pub8.php"); ?>
</div>

</nav>
