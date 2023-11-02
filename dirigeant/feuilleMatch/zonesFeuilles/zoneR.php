<html>
<head>
<title>Untitled Document</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link type="text/css" rel="stylesheet" href="../feuille_matchA/feuilledestyle2.css"/>
</head>
<?php //$code_match = $_GET['code_match'];?>

<?php $connect = $_GET['connect'];?>
<?php $comite = $_GET['comite'];?>
<?php $equipeA = $_GET['equipeA'];?>
<?php $equipeB = $_GET['equipeB'];?>
<?php// $bdfeuilleA = $_GET['bdfeuilleA'];?>
<?php //$bdfeuilleB = $_GET['bdfeuilleA'];?>
 
<?php //$equipe_dom = $equipeA;?>

<?php $bdcomite=("php".''.$comite.''."_joueurs");?>



<?php
 require ("../../../$connect.php")
//mysql_connect("sql.franceserv.fr", "onepip-france", "lavelan09"); // Connexion à MySQL
//mysql_select_db("onepip-france-db1"); // Sélection de la base onepip
?>


<?php $bdcomite=("php".''.$comite.''."_joueurs");?>
<?php $bdfeuilleA=("php".''.$comite.''."_feuilleA");?>
<?php $bdfeuilleB=("php".''.$comite.''."_feuilleB");?>




<?php $feuilleA=("php".''.$comite.''."_feuilleA");?>
<?php// echo $feuilleA ; ?>
<?php// echo $id ; ?>
<?php $feuilleB=("php".''.$comite.''."_feuilleB");?>

<div align="center">
  <table width="898" border="0" align="left" height="170">
    <tr> 
      <td width="301" height="170" valign="top"> 
        <table width="300" border="1" bordercolor="#000000" cellspacing="0" cellpadding="0" align="left" height="179">
          <tr align="left" bordercolor="#000000" valign="middle"> 
            <td colspan="4"> 
              <div align="center"><b><font face="Arial, Helvetica, sans-serif" size="4"><b><font face="Arial, Helvetica, sans-serif"> 
                <?php
mysql_connect("sql.franceserv.fr", "onepip-france", "lavelan09"); // Connexion à MySQL
mysql_select_db("onepip-france-db1"); // Sélection de la base onepip

$reponse = mysql_query("SELECT sigle,comite, code FROM bdclubs WHERE code='$equipeA'"); // Requête SQL 
While ($donnees = mysql_fetch_array($reponse) )
{ 
?>
                <?php echo $donnees['sigle'];?>
                <?php
 }
mysql_close(); // Déconnexion de MySQL
?>
                </font><font face="Arial, Helvetica, sans-serif" size="4"><b><font face="Arial, Helvetica, sans-serif"> 
                <?php
	 require ("../../../$connect.php")			
//mysql_connect("sql.franceserv.fr", "onepip-france", "lavelan09"); // Connexion à MySQL
//mysql_select_db("onepip-france-db1"); // Sélection de la base onepip
?>
                <?php
$requete = "SELECT essai, transf, penalite, drop1  FROM $bdfeuilleA WHERE id='$code_match'"; // Requête SQL 
$result = mysql_query($requete)or die (mysql_error ()) ;
While ($row = mysql_fetch_array($result) )
{ 
		 $essaiA=$row[0];
         $transfA=$row[1];
		 $penaliteA=$row[2];
		 $dropA=$row[3]; 
		     
 }
mysql_close(); // Déconnexion de MySQL
?>
                <b><font size="4"> 
                <?php $totalA=($essaiA*5+$transfA*2+$penaliteA*3+$dropA*3); ?>
                </font><font face="Arial, Helvetica, sans-serif" size="4"><b><font face="Arial, Helvetica, sans-serif" size="4"><b><font face="Arial, Helvetica, sans-serif"> 
                </font><font face="Arial, Helvetica, sans-serif" size="4"><b><font face="Arial, Helvetica, sans-serif"> 
                <?php
	 require ("../../$connect.php")			
//mysql_connect("sql.franceserv.fr", "onepip-france", "lavelan09"); // Connexion à MySQL
//mysql_select_db("onepip-france-db1"); // Sélection de la base onepip
?>
                <?php
$requete = "SELECT essai, transf, penalite, drop1  FROM $bdfeuilleB WHERE id='$code_match'"; // Requête SQL 
$result = mysql_query($requete)or die (mysql_error ()) ;
While ($row = mysql_fetch_array($result) )
{ 
		 $essaiB=$row[0];
         $transfB=$row[1];
		 $penaliteB=$row[2];
		 $dropB=$row[3]; 
		     
 }
mysql_close(); // Déconnexion de MySQL
?>
                <b><font size="4"> 
                <?php $totalB=($essaiB*5+$transfB*2+$penaliteB*3+$dropB*3); ?>
                </font></b></font></b></font></b></font></b></font></b> </font></b></font><font face="Arial, Helvetica, sans-serif"> 
                </font></b></font></b></div>
            </td>
          </tr>
          <tr bordercolor="#000000"> 
            <td> 
              <div align="center">El&eacute;ments du score</div>
            </td>
            <td width="54" height="25" align="center" valign="top">Nbre</td>
            <td width="53" height="25" align="center" valign="top">Val</td>
            <td width="57" height="25" align="center" valign="top">Points</td>
          </tr>
          <tr bordercolor="#000000"> 
            <td> 
              <div align="center">Essai</div>
            </td>
            <td width="54"> 
              <div align="center"><b><font face="Arial, Helvetica, sans-serif" size="4"><b><font face="Arial, Helvetica, sans-serif" size="4"><b><font face="Arial, Helvetica, sans-serif" size="4"><b><font face="Arial, Helvetica, sans-serif" size="4"><b><font face="Arial, Helvetica, sans-serif" size="4"><b><font face="Arial, Helvetica, sans-serif"> 
                <?php echo $essaiA;?>
                </font></b></font></b></font></b></font></b></font><font face="Arial, Helvetica, sans-serif"> 
                </font></b></font></b></div>
            </td>
            <td width="53" height="24" align="center" valign="middle"><font face="Arial, Helvetica, sans-serif">5</font></td>
            <td width="57"> 
              <div align="center"> <font face="Arial, Helvetica, sans-serif"><b><font size="4"> 
                <?php echo 5*$essaiA; ?>
                </font></b></font></div>
            </td>
          </tr>
          <tr bordercolor="#000000"> 
            <td height="24"> 
              <div align="center">But apr&egrave;s essai</div>
            </td>
            <td width="54" height="24"> 
              <div align="center"><b><font face="Arial, Helvetica, sans-serif" size="4"><b><font face="Arial, Helvetica, sans-serif" size="4"><b><font face="Arial, Helvetica, sans-serif"> 
                </font><font face="Arial, Helvetica, sans-serif" size="4"><b><font face="Arial, Helvetica, sans-serif" size="4"><b><font face="Arial, Helvetica, sans-serif"> 
                <?php echo $transfA;?>
                </font></b></font></b></font></b></font><font face="Arial, Helvetica, sans-serif"> 
                </font></b></font></b></div>
            </td>
            <td width="53" height="24" align="center" valign="middle"><font face="Arial, Helvetica, sans-serif">2</font></td>
            <td width="57" height="24"> 
              <div align="center"> <font face="Arial, Helvetica, sans-serif"><b><font size="4"> 
                <?php echo 2*$transfA; ?>
                </font></b></font></div>
            </td>
          </tr>
          <tr bordercolor="#000000"> 
            <td> 
              <div align="center">But de p&eacute;nalit&eacute;</div>
            </td>
            <td width="54"> 
              <div align="center"><b><font face="Arial, Helvetica, sans-serif" size="4"><b><font face="Arial, Helvetica, sans-serif"> 
                <?php echo $penaliteA;?>
                </font></b></font></b></div>
            </td>
            <td width="53" height="12" align="center" valign="middle"><font face="Arial, Helvetica, sans-serif">3</font></td>
            <td width="57"> 
              <div align="center"> <font face="Arial, Helvetica, sans-serif"><b><font size="4"> 
                <?php echo 3*$penaliteA; ?>
                </font></b></font></div>
            </td>
          </tr>
          <tr bordercolor="#000000"> 
            <td> 
              <div align="center">Drop-goal</div>
            </td>
            <td width="54"> 
              <div align="center"><b><font face="Arial, Helvetica, sans-serif" size="4"><b><font face="Arial, Helvetica, sans-serif" size="4"><b><font face="Arial, Helvetica, sans-serif"> 
                <?php echo $dropA;?>
                </font></b></font><font face="Arial, Helvetica, sans-serif"> </font></b></font></b></div>
            </td>
            <td width="53" height="2" align="center" valign="middle"><font face="Arial, Helvetica, sans-serif">3</font></td>
            <td width="57"> 
              <div align="center"> <font face="Arial, Helvetica, sans-serif"><b><font size="4"> 
                <?php echo 3*$dropA; ?>
                </font></b></font></div>
            </td>
          </tr>
          <tr bordercolor="#000000"> 
            <td colspan="3" height="24"> 
              <div align="right"></div>
              <div align="right">Total : </div>
            </td>
            <td width="57" height="24" valign="middle"> 
              <div align="center"> <font face="Arial, Helvetica, sans-serif"><b><font size="4"> 
                <?php  echo $totalA;?>
                </font></b></font></div>
            </td>
          </tr>
        </table>
      </td>
      <td width="284" height="170" valign="top"> 
        <table width="300" border="1" cellspacing="0" cellpadding="0" bordercolor="#000000">
          <tr> 
            <td bordercolor="#000000" height="22" valign="top"> 
              <div align="center"><font face="Arial, Helvetica, sans-serif" size="4"><b><font color="#000000" size="3">RESULTAT 
                DU MATCH</font></b></font></div>
            </td>
          </tr>
        </table>
        <table width="300" border="1" height="140" cellspacing="0" cellpadding="0" bordercolor="#000000">
          <tr> 
            <td height="153" valign="top"> 
              <div align="center"><font size="3" face="Arial, Helvetica, sans-serif"><br>
                L'&eacute;quipe</font><font size="3"> <b><font face="Arial, Helvetica, sans-serif"> 
                <?php
mysql_connect("sql.franceserv.fr", "onepip-france", "lavelan09"); // Connexion à MySQL
mysql_select_db("onepip-france-db1"); // Sélection de la base onepip
?>
                <?php
$reponse = mysql_query("SELECT sigle,comite, code FROM bdclubs WHERE code='$equipeA'"); // Requête SQL 
While ($donnees = mysql_fetch_array($reponse) )
{ 
       $clubA=$donnees['sigle'];
}
?>
                <?php
$reponse = mysql_query("SELECT sigle,comite, code FROM bdclubs WHERE code='$equipeB'"); // Requête SQL 
While ($donnees = mysql_fetch_array($reponse) )
{ 
 $clubB= $donnees['sigle'];
               
 }
 ?>
                <?php
mysql_close(); // Déconnexion de MySQL
?>
                <?php if ( $totalA> $totalB)
	   echo $clubA;
	   else
	   echo $clubB;?>
                <br>
                </font></b><font face="Arial, Helvetica, sans-serif" size="1" color="#FFFFFF">f</font><font face="Arial, Helvetica, sans-serif"><br>
                a battu<br>
                </font><b><font size="3"><font face="Arial, Helvetica, sans-serif" size="1" color="#FFFFFF">f</font></font><font face="Arial, Helvetica, sans-serif"><br>
                </font></b><font face="Arial, Helvetica, sans-serif">l'&eacute;quipe</font><b><font face="Arial, Helvetica, sans-serif"> 
                <b><font face="Arial, Helvetica, sans-serif"> </font><font size="3"><b><font face="Arial, Helvetica, sans-serif"> 
                <?php if ( $totalA< $totalB)
	   echo $clubA;
	   else
	   echo $clubB;?>
                </font></b></font><font face="Arial, Helvetica, sans-serif"><br>
                </font></b><font face="Arial, Helvetica, sans-serif"><br>
                par<font size="4"> 
                <?php  if ( $totalA> $totalB)
				echo $totalA;
				else
				echo $totalB;
				?>
                &agrave; </font><font size="3"><b><font face="Arial, Helvetica, sans-serif"><font face="Arial, Helvetica, sans-serif"><font size="4"> 
                </font><font size="3"><b><font face="Arial, Helvetica, sans-serif"><font face="Arial, Helvetica, sans-serif"><font size="4"> 
                <?php  if ( $totalA< $totalB)
				echo $totalA;
				else
				echo $totalB;
				?>
                </font></font></font></b></font></font></font></b></font></font> 
                </font></b></font></div>
            </td>
          </tr>
        </table>
      </td>
      <td width="301" height="170" valign="top"> 
        <table width="300" border="1" bordercolor="#000000" cellspacing="0" cellpadding="0" height="179">
          <tr align="left" bordercolor="#000000" valign="middle"> 
            <td colspan="4" valign="top"> 
              <div align="center"><b><font face="Arial, Helvetica, sans-serif" size="4"><b><font face="Arial, Helvetica, sans-serif" size="4"><b><font face="Arial, Helvetica, sans-serif"> 
                <?php
mysql_connect("sql.franceserv.fr", "onepip-france", "lavelan09"); // Connexion à MySQL
mysql_select_db("onepip-france-db1"); // Sélection de la base onepip
$reponse = mysql_query("SELECT sigle,comite, code FROM bdclubs WHERE code='$equipeB'"); // Requête SQL 
While ($donnees = mysql_fetch_array($reponse) )
{ 
?>
                <?php echo $donnees['sigle'];?>
                <?php
 }
mysql_close(); // Déconnexion de MySQL
?>
                </font><font face="Arial, Helvetica, sans-serif" size="4"><b><font face="Arial, Helvetica, sans-serif"> 
                <b><font size="4"> </font></b></font></b></font></b></font></b></font></b></div>
            </td>
          </tr>
          <tr bordercolor="#000000"> 
            <td valign="top"> 
              <div align="center">El&eacute;ments du score</div>
            </td>
            <td width="54" height="25" align="center" valign="top">Nbre</td>
            <td width="53" height="25" align="center" valign="top">Val</td>
            <td width="57" height="25" align="center" valign="top">Points</td>
          </tr>
          <tr bordercolor="#000000"> 
            <td valign="top"> 
              <div align="center">Essai</div>
            </td>
            <td width="54"> 
              <div align="center"><b><font face="Arial, Helvetica, sans-serif" size="4"><b><font face="Arial, Helvetica, sans-serif" size="4"><b><font face="Arial, Helvetica, sans-serif" size="4"><b><font face="Arial, Helvetica, sans-serif" size="4"><b><font face="Arial, Helvetica, sans-serif" size="4"><b><font face="Arial, Helvetica, sans-serif"> 
                <?php echo $essaiB;?>
                </font></b></font></b></font></b></font></b></font></b></font></b></div>
            </td>
            <td width="53" height="24" align="center" valign="middle"><font face="Arial, Helvetica, sans-serif">5</font></td>
            <td width="57"> 
              <div align="center"><font face="Arial, Helvetica, sans-serif"><b><font size="4"> 
                <?php echo 5*$essaiB; ?>
                </font></b></font></div>
            </td>
          </tr>
          <tr bordercolor="#000000"> 
            <td valign="top"> 
              <div align="center">But apr&egrave;s essai</div>
            </td>
            <td width="54"> 
              <div align="center"><b><font face="Arial, Helvetica, sans-serif" size="4"><b><font face="Arial, Helvetica, sans-serif" size="4"><b><font face="Arial, Helvetica, sans-serif" size="4"><b><font face="Arial, Helvetica, sans-serif" size="4"><b><font face="Arial, Helvetica, sans-serif"> 
                <?php echo $transfB;?>
                </font></b></font></b></font></b></font></b></font></b></div>
            </td>
            <td width="53" height="24" align="center" valign="middle"><font face="Arial, Helvetica, sans-serif">2</font></td>
            <td width="57"> 
              <div align="center"><font face="Arial, Helvetica, sans-serif"><b><font size="4"> 
                <?php echo 2*$transfB; ?>
                </font></b></font></div>
            </td>
          </tr>
          <tr bordercolor="#000000"> 
            <td valign="top"> 
              <div align="center">But de p&eacute;nalit&eacute;</div>
            </td>
            <td width="54"> 
              <div align="center"><b><font face="Arial, Helvetica, sans-serif" size="4"><b><font face="Arial, Helvetica, sans-serif"> 
                <?php echo $penaliteB;?>
                </font></b></font></b></div>
            </td>
            <td width="53" height="12" align="center" valign="middle"><font face="Arial, Helvetica, sans-serif">3</font></td>
            <td width="57"> 
              <div align="center"><font face="Arial, Helvetica, sans-serif"><b><font size="4"> 
                <?php echo 3*$penaliteB; ?>
                </font></b></font></div>
            </td>
          </tr>
          <tr bordercolor="#000000"> 
            <td valign="top"> 
              <div align="center">Drop-goal</div>
            </td>
            <td width="54"> 
              <div align="center"><b><font face="Arial, Helvetica, sans-serif" size="4"><b><font face="Arial, Helvetica, sans-serif" size="4"><b><font face="Arial, Helvetica, sans-serif"> 
                <?php echo $dropB;?>
                </font></b></font></b></font></b></div>
            </td>
            <td width="53" height="2" align="center" valign="middle"><font face="Arial, Helvetica, sans-serif">3</font></td>
            <td width="57"> 
              <div align="center"><font face="Arial, Helvetica, sans-serif"><b><font size="4"> 
                <?php echo 3*$dropB; ?>
                </font></b></font></div>
            </td>
          </tr>
          <tr bordercolor="#000000"> 
            <td colspan="3" height="4" valign="top"> 
              <div align="right"></div>
              <div align="right">Total : </div>
            </td>
            <td width="57" height="4"> 
              <div align="center"><font face="Arial, Helvetica, sans-serif"><b><font size="4"> 
                <?php  echo $totalB;?>
                </font></b></font></div>
            </td>
          </tr>
        </table>
      </td>
    </tr>
  </table>
  <p align="left">&nbsp;</p>
</div>

</body>
</html>
