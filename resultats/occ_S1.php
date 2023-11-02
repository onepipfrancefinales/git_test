
  
<td border color="#0000FF" align="center" bgcolor="#ffffff" width="650" height="2121" valign="top"> 
  <br>
    <h1> Comp&eacute;titions R&eacute;gionales</h1>
	<h2 class="titre">Ligue Occitanie </h2>
    <h2 class="commentaire">La ligue Occitanie est n&eacute;e de la fusion des comit&eacute;s territoriaux<br>
            du Languedoc, de l'Armagnac Bigorre, du pays Catalan et du comit&eacute;<br>
            Midi Pyr&eacute;n&eacute;es en janvier 2018.</h2>
			<br>
    
	<?php 
	 include("liensDivers.php");
     include("sommaire_occ.php"); 
	  
	?>
     
    <hr><hr>
	 <?php// require("comPerso.php"); ?> <br>
     <h5>1re S&eacute;rie - Poule 1<br><br></h5>
	 <?php $champ = 191; AffichageLogos($champ, $comite, false, $bdd);?>
      <table width="700" >
       <tr> 
        <td> 
         <?php  aff_journee($champ, $bdd);
				 clmnt($champ, false, $bdd);
				aff_journeeSupp($champ,  $bdd); ?>
        </td>
       </tr>           
      </table>
		<?php  journeesReporteesCovid($comite, 191, $bdd);  
          echo "<p class=\"ressource\">".$message."</p>"; 
	  
      include("../pub/pub_displayHorizontal.php");?>
          
      <h5>1re S&eacute;rie - Poule 2<br><br></h5>
      <?php $champ = 192; AffichageLogos($champ, $comite, false, $bdd);?>
      
      
    <table width="700" >
      <tr valign="top"> 
        <td> 
          <h3 align="center">Equipe I </h3>
          <?php  aff_journee($champ, $bdd);
				 clmnt($champ, false, $bdd);
				aff_journeeSupp($champ,  $bdd); ?>
        </td>
        <td> 
          <h3 align="center">Equipe II </h3>
          <?php 	$champ=9192 ;  	
				aff_journee($champ, $bdd);
				 clmnt($champ, false, $bdd);
				aff_journeeSupp($champ,  $bdd); ?>
        </td>
      </tr>
    </table>
	  
	  
    
    <?php  journeesReporteesCovid($comite, 192, $bdd);  
           echo "<p class=\"ressource\">".$message."</p>"; ?>
    
          
	  <h5>1re S&eacute;rie - Poule 3<br><br></h5>
      <?php $champ = 193;  AffichageLogos($champ, $comite, false, $bdd);?>
          
      
    <table width="700" >
      <tr valign="top"> 
        <td> 
          <h3 align="center">Equipe I </h3>
          <?php  aff_journee($champ, $bdd);
				 clmnt($champ, false, $bdd);
				aff_journeeSupp($champ,  $bdd);  ?>
        </td>
        <td> 
          <h3 align="center">Equipe II </h3>
          <?php 	$champ=9193 ;  
				aff_journee($champ, $bdd);
				 clmnt($champ, false, $bdd);
				aff_journeeSupp($champ,  $bdd);?>
        </td>
      </tr>
    </table>
		<?php  journeesReporteesCovid($comite, 193, $bdd);  
           echo "<p class=\"ressource\">".$message."</p>";
	  include("../pub/pub_displayHorizontal.php"); ?>
      <h5>1re S&eacute;rie - Poule 4<br><br></h5>
      <?php $champ = 194;  AffichageLogos($champ, $comite, false, $bdd);?>
          
      
    <table width="700" >
      <tr valign="top"> 
        <td> 
          <h3 align="center">Equipe I </h3>
          <?php  aff_journee($champ, $bdd);
				 clmnt($champ, false, $bdd);
				aff_journeeSupp($champ,  $bdd); ?>
        </td>
        <td> 
          <h3 align="center">Equipe II </h3>
          <?php 	$champ=9194 ;  
				aff_journee($champ, $bdd);
				 clmnt($champ, false, $bdd);
				aff_journeeSupp($champ,  $bdd); ?>
        </td>
      </tr>
    </table>
		<?php  journeesReporteesCovid($comite, 194, $bdd);  
           echo "<p class=\"ressource\">".$message."</p>"; ?>
	 
      
      <h5>1re S&eacute;rie - Poule 5<br> <br></h5>
      <?php $champ = 195;  AffichageLogos($champ, $comite, false, $bdd);?>
          
      
    <table width="700" >
      <tr valign="top"> 
        <td> 
          <h3 align="center">Equipe I </h3>
          <?php  aff_journee($champ, $bdd);
				  clmnt($champ, false, $bdd);
				 aff_journeeSupp($champ,  $bdd);?>
        </td>
        <td> 
          <h3 align="center">Equipe II </h3>
          <?php $champ =9195 ;  
				aff_journee($champ, $bdd);
				 clmnt($champ, false, $bdd);
				aff_journeeSupp($champ,  $bdd);?>
        </td>
      </tr>
    </table>
        <?php  journeesReporteesCovid($comite, 195, $bdd);  
           echo "<p class=\"ressource\">".$message."</p>"; ?>
         
         <hr><hr>
      <?php
		  
          include("sommaire_occ.php");
          include("liensDivers.php");
         include("../pub/pub_displayCarre.php");
	   ?> 
         
      </td>

