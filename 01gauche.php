<!DOCTYPE html>
<html lang="fr">

<script language="JavaScript">

function MM_jumpMenu(targ,selObj,restore){ //v3.0
  eval(targ+".location='"+selObj.options[selObj.selectedIndex].value+"'");
  if (restore) selObj.selectedIndex=0;
}
//--> //0new2
</script>
 


<!-- Ecran de connexion -->

<table>
  <tr > 
    <td  > <br />
    <?php 
/*
	if (isset($_SESSION['login']))
	{
		echo "<br />";
		?>
		<fieldset class="fieldsetG"> 
		 <legend class="legendG"> Mon Compte </legend> 
		
		<?php echo "<br />";
		echo $_SESSION['login'];echo "<br />";echo "<br />";?>
		<a href="/personnalisation/admin/logout.php"><font color="#FFFFFF">D&eacute;connection</font></a>
		
	</fieldset >
	<?php
	}
     else
	 {
		require ("personnalisation/saisieIdentifiantDroite.php") ;
	 }
*/	 
?>



<!-- Menu déroulant Championnat de France -->

	<br />
    <br />
    <form action="/palmares/palmNational/pageannee.php" method="POST">
     
	  <fieldset class="fieldsetG"> 
	    <legend class="legendG"> 
	  	  Palmar&egrave;s par Ann&eacute;e
	    </legend> 
      <br />
	  <input class="inputG" type="text" name="saison" maxlength="4" size="8" >
      <br />
	  <input class="inputG" type="submit" value="par annee" name="submit33" >
      </fieldset > 
	   
    </form>
     <br>
      <br>
      

	  <fieldset class="fieldsetG"> 
	    <legend class="legendG"> 
		Palmar&egrave;s par divisions
		</legend> 
		<br />
        <select class="inputG" name="select4" onChange="MM_jumpMenu('parent',this,0)" size="14">
          <option selected>------------</option>
          <option value="/palmares/palmNational/pagePalmares.php?division=110">TOP 14</option>
          <option value="/palmares/palmNational/pagePalmares.php?division=120">Pro D2</option>
          <option value="/palmares/palmNational/pagePalmares.php?division=130">Nationale </option>
          <option value="/palmares/palmNational/pagePalmares.php?division=135">Nationale 2</option>
          <option value="/palmares/palmNational/pagePalmares.php?division=140">F&eacute;d&eacute;rale 1</option>
          <option value="/palmares/palmNational/pagePalmares.php?division=150">F&eacute;d&eacute;rale 2</option>
          <option value="/palmares/palmNational/pagePalmares.php?division=160">F&eacute;d&eacute;rale 3</option>
          <option value="/palmares/palmNational/pagePalmares.php?division=170">R&eacute;gionale 1</option>
          <option value="/palmares/palmNational/pagePalmares.php?division=170">Honneur</option>
          <option value="/palmares/palmNational/pagePalmares.php?division=180">R&eacute;gionale 2</option>
          <option value="/palmares/palmNational/pagePalmares.php?division=180">Promotion </option>
          <option value="/palmares/palmNational/pagePalmares.php?division=190">R&eacute;gionale 3</option>
          <option value="/palmares/palmNational/pagePalmares.php?division=190">1re S&eacute;rie</option>
          <option value="/palmares/palmNational/pagePalmares.php?division=200">2me S&eacute;rie</option>
          <option value="/palmares/palmNational/pagePalmares.php?division=210">3me S&eacute;rie</option>
          <option value="/palmares/palmNational/pagePalmares.php?division=220">4me S&eacute;rie</option>
          <option value="/palmares/palmNational/pageentreprise.php">Entreprise</option>
          <option value="/palmares/palmNational/pageentreprise.php">-------------------</option>
          <option> EQUIPES II </option>
          <option value="/palmares/palmNational/pageespoir.php">-------------------</option>
          <option value="/palmares/palmNational/pageespoir.php">Espoir</option>
          <option value="/palmares/palmNational/pagePalmares.php?division=240">Nationale 
          B</option>
          <option value="/palmares/palmNational/pagePalmares.php?division=250">F&eacute;d&eacute;rale 
          B</option>
          <option value="/palmares/palmNational/pagePalmares.php?division=260">Excellence 
          B</option>
          <option value="/palmares/palmNational/pagePalmares.php?division=270">R&eacute;serve</option>
          <option value="/palmares/palmNational/pagePalmares.php?division=270">--------------------</option>
          <option>FEMININES</option>
          <option value="/palmares/palmNational/pagePalmares.php?division=280">----------------------</option>
          <option value="/palmares/palmNational/pagePalmares.php?division=280">Elite 
          1 TOP 10</option>
          <option value="/palmares/palmNational/pagePalmares.php?division=285">Elite 
          2</option>
          <option value="/palmares/palmNational/pagePalmares.php?division=290">F&eacute;d&eacute;rale 
          1</option>
          <option value="/palmares/palmNational/pagePalmares.php?division=295">F&eacute;d&eacute;rale 
          2</option>
          <option value="/palmares/palmNational/pagePalmares.php?division=300">F&eacute;d&eacute;rale 
          3</option>
          <option value="/palmares/palmNational/pagePalmares.php?division=300">------------------</option>
          <option>REICHELS</option>
          <option>JUNIORS</option>
          <option value="/palmares/palmNational/pagereichelA.php">----------------------</option>
          <option value="/palmares/palmNational/pagePalmares.php?division=310">Reichel A</option>
          <option value="/palmares/palmNational/pagePalmares.php?division=320">Belascain(Ex 
          Reichel B)</option>
          <option value="/palmares/palmNational/pagePalmares.php?division=325">Crabos</option>
          <option value="/palmares/palmNational/pagePalmares.php?division=330">U18 (Ex Balandrade)</option>
          <option value="/palmares/palmNational/pagePalmares.php?division=340">Phliponeau</option>
          <option value="/palmares/palmNational/pagePalmares.php?division=350">Danet</option>
          <option value="/palmares/palmNational/pagePalmares.php?division=350">----------------</option>
          <option>CADETS</option>
          <option value="/palmares/palmNational/pagePalmares.php?division=360">-------------------</option>
          <option value="/palmares/palmNational/pagePalmares.php?division=360">Alamercery</option>
          <option value="/palmares/palmNational/pagePalmares.php?division=365">Gaudermen</option>
          <option value="/palmares/palmNational/pagePalmares.php?division=370">U16 (Ex Teuli&egrave;re)</option>
          <option value="/palmares/palmNational/pagePalmares.php?division=370">------------------</option>
          <option>CHALLENGES</option>
          <option value="/palmares/palmNational/pagePalmares.php?division=380">----------------</option>
          <option value="/palmares/palmNational/pagePalmares.php?division=380">Du 
          Manoir</option>
          <option value="/palmares/palmNational/pagePalmares.php?division=400">Esperance</option>
          <option value="/palmares/palmNational/pagePalmares.php?division=405">Amitie</option>
          <option value="/palmares/palmNational/pagePalmares.php?division=420">Essor</option>
          <option value="/palmares/palmNational/pagePalmares.php?division=440">Espoir</option>
          <option value="/palmares/palmNational/pagePalmares.php?division=390">Coupe 
          de France</option>
        </select>
        </fieldset > <br>
     
      <form action="palmares/palmNational/annee.php" method="POST">
      
     <br>
      
      
	  <fieldset class="fieldsetG"> <legend class="legendG"> Palmar&egrave;s 
        Europ&eacute;ens</legend> <br />
        <select class="inputG" name="select" onChange="MM_jumpMenu('parent',this,0)" size="4">
            <option selected>--------------------------------</option>
            <option value="/palmares/palmNational/pagehcup.php">Champions Cup 
            </option>
            <option value="/palmares/palmNational/pageamlincup.php">Challenge 
            Cup</option>
            <option>--------------------------------</option>
          </select>
        </fieldset > 
		
	
     </form>
        <br />
        <br />
         <?php // include("pub/pub10.php");?>
        <br>
        <br>
        ------- <br>
        <br>
         <?php // include("pub/pub6.php"); ?>
        <br>
    </td >
  </tr>
</table>


</html>


