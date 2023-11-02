<html>
<head>
<title>Untitled Document</title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<link type="text/css" rel="stylesheet" href="test.css"/>
<script language="JavaScript">
<!--
function MM_reloadPage(init) {  //reloads the window if Nav4 resized
  if (init==true) with (navigator) {if ((appName=="Netscape")&&(parseInt(appVersion)==4)) {
    document.MM_pgW=innerWidth; document.MM_pgH=innerHeight; onresize=MM_reloadPage; }}
  else if (innerWidth!=document.MM_pgW || innerHeight!=document.MM_pgH) location.reload();
}
MM_reloadPage(true);
// -->
</script>
</head>
<?php require ("../../saison.php"); ?>
<?php $equipe = $_GET['equipe'];?>
<?php $code = $_GET['equipe'];?>
<?php $connect = $_GET['connect'];?>
<?php $nomLigue = $_GET['nomLigue'];?>
<?php $comite = $_GET['comite'];?>
<?php $sigle = $_GET['sigle'];?>
<?php $divisionNom = $_GET['divisionNom'];?>
<?php $divisionChiffre = $_GET['divisionChiffre'];?>

<?php
//echo $code;
//echo $equipe;
//echo $connect;
//echo $nomLigue;
//echo $comite;
//echo $divisionNom;
//echo $divisionChiffre;


require '../feuilleMatch/fonctions.php';

require '../../connect/connection1.php';

require 'fonctionsDonnees.php';


?>
<table width="593" border="0" align="left" height="398">
  <tr> 
    <td width="289"> 
      <div align="center"></div>
    </td>
    <td width="294" valign="middle"> 
      <div align="center"></div>
    </td>
  </tr>
  <tr> 
    <td width="289"> 
      <div align="center"></div>
    </td>
    <td width="294" valign="middle"> 
      <div align="center"></div>
    </td>
  </tr>
  <tr> 
    <td colspan="2"> 
      <div align="center"> 
        <table width="520" border="2" bordercolor="#000000" cellspacing="1" align="center">
          <tr> 
            <td bgcolor="#CCCCCC" align="left" height="35"> 
              <div align="center"><font face="Arial, Helvetica, sans-serif"><b><font size="5">Calendrier 
                <?php echo $annee-1; ?>
                - 
                <?php echo $annee; ?>
                </font></b></font></div>
            </td>
          </tr>
        </table>
      </div>
    </td>
  </tr>
  <tr> 
    <td colspan="2"> 
      <div > </div>
    </td>
  </tr>
  <tr> 
    <td colspan="2" height="48"> 
      <div align="center"> 
        <table width="520" border="1" align="center" cellspacing="0" bordercolor="#000000" cellpadding="0">
          <tr valign="top" bordercolor="#000000"> 
            <td height="20" width="70" bgcolor="#FFFFFF"> 
              <div align="center">Aller</div>
            </td>
            <td height="20" colspan="3" bgcolor="#FFFFFF"> 
              <div align="center"><b><font face="Arial, Helvetica, sans-serif"> 
                <?php	echo $divisionNom;?>
                </font></b></div>
            </td>
            <td height="20" width="70" bgcolor="#FFFFFF"> 
              <div align="center">Retour</div>
            </td>
          </tr>
          <tr valign="top" bordercolor="#000000"> 
            <td width="70" height="21"> 
              <p align="center"> <font face="Arial, Helvetica, sans-serif"> 
                <?php						
//******** Affichage des Dates aller  ***********
if ($comite=="f1" or $comite=="fed2" or $comite=="fed3GS" or $comite=="fed3NE" )
require '../../connect/connection3.php';
else
require '../../connect/connection2.php';

NbreDeJournee ($comite, $equipe, $bdd);

echo $nbreJourneeMax;
calendrier ($equipe, $comite, $divisionChiffre, $nbreJourneeMax, $bdd); 
  
  
 for ($i= 1; $i<= ($nbreJourneeMax/2); $i++)
 	{
	$moisJour = substr(${"dates".$i},5,-8);
	$mois = substr($moisJour,0,2);
	$jour = substr($moisJour,3,2);
	
	echo $dateA = $jour.'/'.$mois."<br />";
 	} 
 ?>
                </font> 
            </td>
            <td width="190" height="21"> 
              <div align="center"><font face="Arial, Helvetica, sans-serif"> 
                <?php
// **********Affichage Equipe Aller ****************				
 calendrier ($equipe, $comite, $divisionChiffre, $nbreJourneeMax, $bdd); 

 for ($i= 1; $i<= ($nbreJourneeMax/2); $i++)
		{
		echo ${"nomEquipe".$i}."<br />";
		} 

 ?>
                </font></div>
            </td>
            <td width="30" valign="middle" height="21"> 
              <div align="center"></div>
            </td>
            <td width="190" height="21"> 
              <div align="center"><font face="Arial, Helvetica, sans-serif"> 
                <?php				
  //******** Affichage Equipes Retour  ***********

 for ($i= ($nbreJourneeMax/2)+1; $i<= $nbreJourneeMax; $i++)
 	{
//	echo ${"numEquipe".$i}."<br />";
	echo ${"nomEquipe".$i}."<br />";
 	} 
	 ?>
                </font> </div>
            </td>
            <td width="70" height="21"> 
              <div align="center"><font face="Arial, Helvetica, sans-serif"> 
                <?php				
// ******* Affichege Dates Retour ***************

 for ($i = ($nbreJourneeMax/2)+1; $i<= $nbreJourneeMax; $i++)
 {
	$moisJour = substr(${"dates".$i},5,-8);
	$mois = substr($moisJour,0,2);
	$jour = substr($moisJour,3,2);
	echo $dateA = $jour.'/'.$mois."<br />";
 } 
 ?>
                </font></div>
            </td>
          </tr>
        </table>
      </div>
    </td>
  </tr>
</table>
<table width="593" border="0" align="left" height="398">
  <tr> 
    <td width="289"> 
      <div align="center"></div>
    </td>
    <td width="294" valign="middle"> 
      <div align="center"></div>
    </td>
  </tr>
  <tr> 
    <td width="289"> 
      <div align="center"></div>
    </td>
    <td width="294" valign="middle"> 
      <div align="center"></div>
    </td>
  </tr>
  <tr> 
    <td colspan="2"> 
      <div align="center"> 
        <table width="520" border="2" bordercolor="#000000" cellspacing="1" align="center">
          <tr> 
            <td bgcolor="#CCCCCC" align="left" height="35"> 
              <div align="center"><font face="Arial, Helvetica, sans-serif"><b><font size="5">Calendrier 
                <?php echo $annee-1; ?>
                - 
                <?php echo $annee; ?>
                </font></b></font></div>
            </td>
          </tr>
        </table>
      </div>
    </td>
  </tr>
  <tr> 
    <td colspan="2"> 
      <div > </div>
    </td>
  </tr>
  <tr> 
    <td colspan="2" height="48"> 
      <div align="center"> 
        <table width="520" border="1" align="center" cellspacing="0" bordercolor="#000000" cellpadding="0">
          <tr valign="top" bordercolor="#000000"> 
            <td height="20" width="70" bgcolor="#FFFFFF"> 
              <div align="center">Aller</div>
            </td>
            <td height="20" colspan="3" bgcolor="#FFFFFF"> 
              <div align="center"><b><font face="Arial, Helvetica, sans-serif"> 
                <?php	echo $divisionNom;?>
                </font></b></div>
            </td>
            <td height="20" width="70" bgcolor="#FFFFFF"> 
              <div align="center">Retour</div>
            </td>
          </tr>
          <tr valign="top" bordercolor="#000000"> 
            <td width="70" height="21"> 
              <p align="center"> <font face="Arial, Helvetica, sans-serif"> 
                <?php						
//******** Affichage des Dates aller  ***********
calendrier ($equipe, $comite, $divisionChiffre, $nbreJourneeMax, $bdd); 
  
  
 for ($i= 1; $i<= ($nbreJourneeMax/2); $i++)
 	{
	$moisJour = substr(${"dates".$i},5,-8);
	$mois = substr($moisJour,0,2);
	$jour = substr($moisJour,3,2);
	
	echo $dateA = $jour.'/'.$mois."<br />";
 	} 
 ?>
                </font> 
            </td>
            <td width="190" height="21"> 
              <div align="center"><font face="Arial, Helvetica, sans-serif"> 
                <?php
// **********Affichage Equipe Aller ****************				
 calendrier ($equipe, $comite, $divisionChiffre, $nbreJourneeMax, $bdd); 

 for ($i= 1; $i<= ($nbreJourneeMax/2); $i++)
		{
		echo ${"nomEquipe".$i}."<br />";
		} 

 ?>
                </font></div>
            </td>
            <td width="30" valign="middle" height="21"> 
              <div align="center"></div>
            </td>
            <td width="190" height="21"> 
              <div align="center"><font face="Arial, Helvetica, sans-serif"> 
                <?php				
  //******** Affichage Equipes Retour  ***********

 for ($i= ($nbreJourneeMax/2)+1; $i<= $nbreJourneeMax; $i++)
 	{
//	echo ${"numEquipe".$i}."<br />";
	echo ${"nomEquipe".$i}."<br />";
 	} 
	 ?>
                </font> </div>
            </td>
            <td width="70" height="21"> 
              <div align="center"><font face="Arial, Helvetica, sans-serif"> 
                <?php				
// ******* Affichege Dates Retour ***************

 for ($i = ($nbreJourneeMax/2)+1; $i<= $nbreJourneeMax; $i++)
 {
	$moisJour = substr(${"dates".$i},5,-8);
	$mois = substr($moisJour,0,2);
	$jour = substr($moisJour,3,2);
	echo $dateA = $jour.'/'.$mois."<br />";
 } 
 ?>
                </font></div>
            </td>
          </tr>
        </table>
      </div>
    </td>
  </tr>
</table>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<table width="593" border="0" align="left" height="398">
  <tr> 
    <td width="289"> 
      <div align="center"></div>
    </td>
    <td width="294" valign="middle"> 
      <div align="center"></div>
    </td>
  </tr>
  <tr> 
    <td width="289"> 
      <div align="center"></div>
    </td>
    <td width="294" valign="middle"> 
      <div align="center"></div>
    </td>
  </tr>
  <tr> 
    <td colspan="2"> 
      <div align="center"> 
        <table width="520" border="2" bordercolor="#000000" cellspacing="1" align="center">
          <tr> 
            <td bgcolor="#CCCCCC" align="left" height="35"> 
              <div align="center"><font face="Arial, Helvetica, sans-serif"><b><font size="5">Calendrier 
                <?php echo $annee-1; ?>
                - 
                <?php echo $annee; ?>
                </font></b></font></div>
            </td>
          </tr>
        </table>
      </div>
    </td>
  </tr>
  <tr> 
    <td colspan="2"> 
      <div > </div>
    </td>
  </tr>
  <tr> 
    <td colspan="2" height="48"> 
      <div align="center"> 
        <table width="520" border="1" align="center" cellspacing="0" bordercolor="#000000" cellpadding="0">
          <tr valign="top" bordercolor="#000000"> 
            <td height="20" width="70" bgcolor="#FFFFFF"> 
              <div align="center">Aller</div>
            </td>
            <td height="20" colspan="3" bgcolor="#FFFFFF"> 
              <div align="center"><b><font face="Arial, Helvetica, sans-serif"> 
                <?php	echo $divisionNom;?>
                </font></b></div>
            </td>
            <td height="20" width="70" bgcolor="#FFFFFF"> 
              <div align="center">Retour</div>
            </td>
          </tr>
          <tr valign="top" bordercolor="#000000"> 
            <td width="70" height="21"> 
              <p align="center"> <font face="Arial, Helvetica, sans-serif"> 
                <?php						
//******** Affichage des Dates aller  ***********
calendrier ($equipe, $comite, $divisionChiffre, $nbreJourneeMax, $bdd); 
  
  
 for ($i= 1; $i<= ($nbreJourneeMax/2); $i++)
 	{
	$moisJour = substr(${"dates".$i},5,-8);
	$mois = substr($moisJour,0,2);
	$jour = substr($moisJour,3,2);
	
	echo $dateA = $jour.'/'.$mois."<br />";
 	} 
 ?>
                </font> 
            </td>
            <td width="190" height="21"> 
              <div align="center"><font face="Arial, Helvetica, sans-serif"> 
                <?php
// **********Affichage Equipe Aller ****************				
 calendrier ($equipe, $comite, $divisionChiffre, $nbreJourneeMax, $bdd); 

 for ($i= 1; $i<= ($nbreJourneeMax/2); $i++)
		{
		echo ${"nomEquipe".$i}."<br />";
		} 

 ?>
                </font></div>
            </td>
            <td width="30" valign="middle" height="21"> 
              <div align="center"></div>
            </td>
            <td width="190" height="21"> 
              <div align="center"><font face="Arial, Helvetica, sans-serif"> 
                <?php				
  //******** Affichage Equipes Retour  ***********

 for ($i= ($nbreJourneeMax/2)+1; $i<= $nbreJourneeMax; $i++)
 	{
//	echo ${"numEquipe".$i}."<br />";
	echo ${"nomEquipe".$i}."<br />";
 	} 
	 ?>
                </font> </div>
            </td>
            <td width="70" height="21"> 
              <div align="center"><font face="Arial, Helvetica, sans-serif"> 
                <?php				
// ******* Affichege Dates Retour ***************

 for ($i = ($nbreJourneeMax/2)+1; $i<= $nbreJourneeMax; $i++)
 {
	$moisJour = substr(${"dates".$i},5,-8);
	$mois = substr($moisJour,0,2);
	$jour = substr($moisJour,3,2);
	echo $dateA = $jour.'/'.$mois."<br />";
 } 
 ?>
                </font></div>
            </td>
          </tr>
        </table>
      </div>
    </td>
  </tr>
</table>
<table width="593" border="0" align="left" height="398">
  <tr> 
    <td width="289"> 
      <div align="center"></div>
    </td>
    <td width="294" valign="middle"> 
      <div align="center"></div>
    </td>
  </tr>
  <tr> 
    <td width="289"> 
      <div align="center"></div>
    </td>
    <td width="294" valign="middle"> 
      <div align="center"></div>
    </td>
  </tr>
  <tr> 
    <td colspan="2"> 
      <div align="center"> 
        <table width="520" border="2" bordercolor="#000000" cellspacing="1" align="center">
          <tr> 
            <td bgcolor="#CCCCCC" align="left" height="35"> 
              <div align="center"><font face="Arial, Helvetica, sans-serif"><b><font size="5">Calendrier 
                <?php echo $annee-1; ?>
                - 
                <?php echo $annee; ?>
                </font></b></font></div>
            </td>
          </tr>
        </table>
      </div>
    </td>
  </tr>
  <tr> 
    <td colspan="2"> 
      <div > </div>
    </td>
  </tr>
  <tr> 
    <td colspan="2" height="48"> 
      <div align="center"> 
        <table width="520" border="1" align="center" cellspacing="0" bordercolor="#000000" cellpadding="0">
          <tr valign="top" bordercolor="#000000"> 
            <td height="20" width="70" bgcolor="#FFFFFF"> 
              <div align="center">Aller</div>
            </td>
            <td height="20" colspan="3" bgcolor="#FFFFFF"> 
              <div align="center"><b><font face="Arial, Helvetica, sans-serif"> 
                <?php	echo $divisionNom;?>
                </font></b></div>
            </td>
            <td height="20" width="70" bgcolor="#FFFFFF"> 
              <div align="center">Retour</div>
            </td>
          </tr>
          <tr valign="top" bordercolor="#000000"> 
            <td width="70" height="21"> 
              <p align="center"> <font face="Arial, Helvetica, sans-serif"> 
                <?php						
//******** Affichage des Dates aller  ***********
calendrier ($equipe, $comite, $divisionChiffre, $nbreJourneeMax, $bdd); 
  
  
 for ($i= 1; $i<= ($nbreJourneeMax/2); $i++)
 	{
	$moisJour = substr(${"dates".$i},5,-8);
	$mois = substr($moisJour,0,2);
	$jour = substr($moisJour,3,2);
	
	echo $dateA = $jour.'/'.$mois."<br />";
 	} 
 ?>
                </font> 
            </td>
            <td width="190" height="21"> 
              <div align="center"><font face="Arial, Helvetica, sans-serif"> 
                <?php
// **********Affichage Equipe Aller ****************				
 calendrier ($equipe, $comite, $divisionChiffre, $nbreJourneeMax, $bdd); 

 for ($i= 1; $i<= ($nbreJourneeMax/2); $i++)
		{
		echo ${"nomEquipe".$i}."<br />";
		} 

 ?>
                </font></div>
            </td>
            <td width="30" valign="middle" height="21"> 
              <div align="center"></div>
            </td>
            <td width="190" height="21"> 
              <div align="center"><font face="Arial, Helvetica, sans-serif"> 
                <?php				
  //******** Affichage Equipes Retour  ***********

 for ($i= ($nbreJourneeMax/2)+1; $i<= $nbreJourneeMax; $i++)
 	{
//	echo ${"numEquipe".$i}."<br />";
	echo ${"nomEquipe".$i}."<br />";
 	} 
	 ?>
                </font> </div>
            </td>
            <td width="70" height="21"> 
              <div align="center"><font face="Arial, Helvetica, sans-serif"> 
                <?php				
// ******* Affichege Dates Retour ***************

 for ($i = ($nbreJourneeMax/2)+1; $i<= $nbreJourneeMax; $i++)
 {
	$moisJour = substr(${"dates".$i},5,-8);
	$mois = substr($moisJour,0,2);
	$jour = substr($moisJour,3,2);
	echo $dateA = $jour.'/'.$mois."<br />";
 } 
 ?>
                </font></div>
            </td>
          </tr>
        </table>
      </div>
    </td>
  </tr>
</table>
<p>&nbsp; </p>
</html>