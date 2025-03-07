   
   <?php if ($mode =="smart")  
     $adresseLettres="../smart/smartPage.php";
   else
   $adresseLettres="page_recherche_comite2.php";
   ?>

   
   
   
   <table width="90%" class="marginAuto">
      <tr> 
        <td  class="backgroundCCCCCC"> 
          <div class="center size6">Autre recherche <br>
            <select name="select3" onChange="MM_jumpMenu('parent',this,0)" size="1">
              <option selected>Alphabétique</option>
              <option value="<?php echo $adresseLettres; ?>?variableLettre=A&mode=smart&page=lettres">A</option>
              <option value="<?php echo $adresseLettres; ?>?variableLettre=B&mode=smart&page=lettres">B</option>
              <option value="<?php echo $adresseLettres; ?>?variableLettre=C&mode=smart&page=lettres">C</option>
              <option value="<?php echo $adresseLettres; ?>?variableLettre=D&mode=smart&page=lettres">D</option>
              <option value="<?php echo $adresseLettres; ?>?variableLettre=E&mode=smart&page=lettres">E</option>
              <option value="<?php echo $adresseLettres; ?>?variableLettre=F&mode=smart&page=lettres">F</option>
              <option value="<?php echo $adresseLettres; ?>?variableLettre=G&mode=smart&page=lettres">G</option>
              <option value="<?php echo $adresseLettres; ?>?variableLettre=H&mode=smart&page=lettres">H</option>
              <option value="<?php echo $adresseLettres; ?>?variableLettre=I&mode=smart&page=lettres">I</option>
              <option value="<?php echo $adresseLettres; ?>?variableLettre=J&mode=smart&page=lettres">J</option>
              <option value="<?php echo $adresseLettres; ?>?variableLettre=K&mode=smart&page=lettres">K</option>
              <option value="<?php echo $adresseLettres; ?>?variableLettre=L&mode=smart&page=lettres">L</option>
              <option value="<?php echo $adresseLettres; ?>?variableLettre=M&mode=smart&page=lettres">M</option>
              <option value="<?php echo $adresseLettres; ?>?variableLettre=N&mode=smart&page=lettres">N</option>
              <option value="<?php echo $adresseLettres; ?>?variableLettre=O&mode=smart&page=lettres">O</option>
              <option value="<?php echo $adresseLettres; ?>?variableLettre=P&mode=smart&page=lettres">P</option>
              <option value="<?php echo $adresseLettres; ?>?variableLettre=Q&mode=smart&page=lettres">Q</option>
              <option value="<?php echo $adresseLettres; ?>?variableLettre=R&mode=smart&page=lettres">R</option>
              <option value="<?php echo $adresseLettres; ?>?variableLettre=S&mode=smart&page=lettres">S</option>
              <option value="<?php echo $adresseLettres; ?>?variableLettre=T&mode=smart&page=lettres">T</option>
              <option value="<?php echo $adresseLettres; ?>?variableLettre=U&mode=smart&page=lettres">U</option>
              <option value="<?php echo $adresseLettres; ?>?variableLettre=V&mode=smart&page=lettres">V</option>
              <option value="<?php echo $adresseLettres; ?>?variableLettre=W&mode=smart&page=lettres">W</option>
              <option value="<?php echo $adresseLettres; ?>?variableLettre=X&mode=smart&page=lettres">X</option>
              <option value="<?php echo $adresseLettres; ?>?variableLettre=Y&mode=smart&page=lettres">Y</option>
              <option value="<?php echo $adresseLettres; ?>?variableLettre=Z&mode=smart&page=lettres">Z</option>
            </select>
          </div>
        </td>

<?php if ($mode !="smart") { ?>

        <td width="50%" class="backgroundCCCCCC"> 
          <div class="center size6">Recherche par comité<br>
            <select id="inputG" name="select3" onChange="MM_jumpMenu('parent',this,0)" size="1">
              <option selected>Par comité</option>
              <option value="/consultation/page_recherche_comite2.php?variable_1=(AP)">Alpes</option>
              <option value="/consultation/page_recherche_comite2.php?variable_1=(AL)">Alsace Lorraine</option>
              <option value="/consultation/page_recherche_comite2.php?variable_1=(AB)">Armagnac Bigorre</option>
              <option value="/consultation/page_recherche_comite2.php?variable_1=(AU)">Auvergne</option>
              <option value="/consultation/page_recherche_comite2.php?variable_1=(BE)">Béarn</option>
              <option value="/consultation/page_recherche_comite2.php?variable_1=(BG)">Bourgogne</option>
              <option value="/consultation/page_recherche_comite2.php?variable_1=(BR)">Bretagne</option>
              <option value="/consultation/page_recherche_comite2.php?variable_1=(CE)">Centre</option>
              <option value="/consultation/page_recherche_comite2.php?variable_1=(C)">Corse</option>
              <option value="/consultation/page_recherche_comite2.php?variable_1=(CBL)">Côte Basque Landes</option>
              <option value="/consultation/page_recherche_comite2.php?variable_1=(CA)">Côte d'Argent</option>
              <option value="/consultation/page_recherche_comite2.php?variable_1=(CAZ)">Côte d'Azur</option>
              <option value="/consultation/page_recherche_comite2.php?variable_1=(DA)">Drôme Ardèche</option>
              <option value="/consultation/page_recherche_comite2.php?variable_1=(FL)">Flandres</option>
              <option value="/consultation/page_recherche_comite2.php?variable_1=(FC)">Franche Comté</option>
              <option value="/consultation/page_recherche_comite2.php?variable_1=(IDF)">Ile de France</option>
              <option value="/consultation/page_recherche_comite2.php?variable_1=(LD)">Languedoc</option>
              <option value="/consultation/page_recherche_comite2.php?variable_1=(LM)">Limousin</option>
              <option value="/consultation/page_recherche_comite2.php?variable_1=(LY)">Lyonnais</option>
              <option value="/consultation/page_recherche_comite2.php?variable_1=(MPY)">Midi Pyrénées</option>
              <option value="/consultation/page_recherche_comite2.php?variable_1=(N)">Normandie</option>
              <option value="/consultation/page_recherche_comite2.php?variable_1=(PL)">Pays de Loire</option>
              <option value="/consultation/page_recherche_comite2.php?variable_1=(PA)">Périgord Agenais</option>
              <option value="/consultation/page_recherche_comite2.php?variable_1=(PCH)">Poitou Charente</option>
              <option value="/consultation/page_recherche_comite2.php?variable_1=(PR)">Provence</option>
              <option value="/consultation/page_recherche_comite2.php?variable_1=(PC)">Pays Catalan</option>
            </select>
             </div>
        </td>

        <?php
        }
        ?>
      </tr>
    </table>
  </div>
 
      <HR/>
   
  
    <?php $sigle = $_GET['variableLettre'];?>
   
<h1 class="titrePage">Tous les Clubs <br>
      commençant par <?php echo $sigle ;?>
  </h1>

<p> 
  <?php
require ("../connect/connexion1.php") ;

// $NbrCol : le nombre de colonnes
// $NbrLigne : calcul automatique a la FIN
// --------------------------------
// (exemple)
$NbreData =array();
//echo "sigle : ".$sigle;
$NbrCol = 4;
// La requete (exemple) : toutes les "CHOSE" commen�ant par un "b", class�es par ordre alphab�tique.

$requete = $bdd->query("SELECT COUNT(id)
						FROM bdclubs 
						WHERE nom_1 LIKE '$sigle%'");
		  
	$NbreData = $requete->fetch();					
	//echo " - data : ".$NbreData[0];	  


// --------------------------------
// nombre de cellules a remplir
//$NbreData = $query->num_rows;
// --------------------------------
// affichage
$NbrLigne = 0;
if ($NbreData != 0) {
	$j = 1;
?>
</p>
<table class= "marginAuto  width95PC">
   
    <?php
	
	
if (strlen($sigle) == 1) {


	$query =$bdd->query("SELECT *
						 FROM bdclubs 
						 WHERE nom_1 LIKE '$sigle%'  
						 AND siglecomite !=''
						 ORDER BY  nom_1 ASC");
}
else {

  $query =$bdd->query("SELECT *
  FROM bdclubs 
  WHERE siglecomite = '$sigle'  
  ORDER BY  nom_1 ASC");

}
	
	
	while ($val = $query->fetch()) 
	{
		if ($j%$NbrCol == 1) {
			$NbrLigne++;
			$fintr = 0;
?>
    <tr> 
      <?php		}
?>
      <td class="width25PC"> 
        <div id="affichage" class="center"> 
          <?php			// -------------------------
				// DONNEES A AFFICHER dans la cellule
		$valReduit[0]=substr($val[0],-5);
		echo "<a href=\"../consultation/pageclub00.php?champion=$val[1]\"><img src=\"../images/blasons200_200/$valReduit[0].gif\" height=\"100\" width=\"100\"></a>";
	//	echo $val[13];
		
		echo '<br/>';
		echo "  </b> <a href=\"../consultation/pageclub00.php?champion=$val[0]\">$val[1]</a>";
		echo '<hr />';
			// -------------------------
?>
        </div>
      </td>
      <?php		if ($j%$NbrCol == 0) {
			$fintr = 1;
?>
    </tr>
    <?php		}
		$j++;
	}
  



	if ($fintr!=1) {
?>
    <?php	} ?>
   
  </table>
  
<?php
} else 
{ 
 echo "Aucun club en ". $sigle ; 
}

?>
