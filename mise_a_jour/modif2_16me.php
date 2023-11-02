<html>
  <head>
<title>modification de données en PHP :: partie2</title>
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
<body>
<b> <font size="4"> </font></b> 
<div id="Layer1" style="position:absolute; width:200px; height:323px; z-index:1; left: 703px; top: 284px"> 
  <div align="center">
    <p><b><font color="#FF0000" size="3">ATTENTION : </font></b></p>
    <p><b><font size="3" color="#FF0000">Impossibilit&eacute; d'utiliser les caract&egrave;res 
      accentu&eacute;s tel que :</font></b></p>
    <p><b><font size="3" color="#FF0000">&eacute; &egrave; &ugrave; &agrave; &ecirc; 
      </font></b></p>
    <p><b><font size="3" color="#FF0000">et l'apostrophes</font></b></p>
    <p><b><font size="3" color="#FF0000">'</font></b></p>
    <p><b><font size="3" color="#FF0000">En cas d'utilisation de ces caract&egrave;res 
      aucune modification n'est prise en compte.</font></b></p>
    <p><b><font size="3" color="#FF0000"><br>
      <font color="#000000">********** </font></font></b></p>
    <p><b><font size="3" color="#FF0000">Pour toutes modifications, &eacute;volutions 
      ou difficult&eacute;s prendre contact &agrave; l'adresse suivante:<br>
      <a href="mailto:francefinalesrugby@free.fr">francefinalesrugby@free.fr</a></font></b></p>
    </div>
</div>
<form name="insertion" action="modif3_16me.php?" method="POST">
  <b><font size="4"> 
  <?php
require ("connect.php") ;
 ?>
  </font></b> <b><font size="4">
  <?php
  
  $id  = $_GET["idPersonne"] ;

  //requête SQL:
  
 
  //exécution de la requête:
  $requete = mysql_query( "SELECT * FROM infosclub WHERE id = ".$id ) ;
 
  //affichage des données:
  if( $result = mysql_fetch_object( $requete ) )
  {
  ?>
   <?php
 }
mysql_close(); // Déconnexion de MySQL
?>
  </font></b>
<input type="hidden" name="id" value="<?php echo($id) ;?>">
  <table border="0" cellspacing="2" cellpadding="2" width="654">
    <tr align="center"> 
      <td colspan="4"> </td>
    </tr>
    <tr align="center"> 
      <td colspan="4" height="32"> 
       
	    <?php
require ("connect.php") ;
 ?>
	   
	    <?php
$reponse = mysql_query("SELECT * FROM infosclub WHERE id='$id'"); // Requête SQL 
While ($donnees = mysql_fetch_array($reponse) )
{ 
?>
        <h1><strong> 
          <?php echo $donnees['club'];?>
          </strong></h1>
        <?php
 }

mysql_close(); // Déconnexion de MySQL
?>
      </td>
    </tr>
    <tr align="center"> 
      <td width="1">&nbsp;</td>
      <td width="91">&nbsp;</td>
      <td width="1033">&nbsp;</td>
      <td width="36">&nbsp;</td>
    </tr>
    <tr align="center"> 
      <td width="1">&nbsp;</td>
      <td width="91">cr&eacute;ation du club :</td>
      <td width="1033"> 
        <div align="left"> 
          <input type="text" name="A1624" value="<?php echo($result->A1624) ;?>" size="6">
        </div>
      </td>
      <td width="36">1624</td>
    </tr>
    <tr align="center" bgcolor="#FF0000" valign="middle"> 
      <td colspan="4"><b></b><b></b><b>BUREAU</b></td>
    </tr>
    <tr align="center"> 
      <td width="1">&nbsp;</td>
      <td width="91">Pr&eacute;sident </td>
      <td width="1033"> 
        <div align="left"> 
          <input type="text" name="A1601" value="<?php echo($result->A1601) ;?>" size="50">
        </div>
      </td>
      <td width="36">1601 </td>
    </tr>
    <tr align="center"> 
      <td width="1">&nbsp;</td>
      <td width="91">Secretaire </td>
      <td width="1033"> 
        <div align="left"> 
          <input type="text" name="A1602" value="<?php echo($result->A1602) ;?>" size="25">
        </div>
      </td>
      <td width="36">1602</td>
    </tr>
    <tr align="center"> 
      <td width="1">&nbsp;</td>
      <td width="91">Contact</td>
      <td width="1033"> 
        <div align="left"> 
          <input type="text" name="A1603" value="<?php echo($result->A1603) ;?>" size="15">
        </div>
      </td>
      <td width="36">1603 </td>
    </tr>
    <tr align="center" bgcolor="#FF0000" valign="top"> 
      <td colspan="4" height="14"><b><font color="#000000">SIEGE</font></b></td>
    </tr>
    <tr align="center"> 
      <td width="1">&nbsp;</td>
      <td width="91">Siege </td>
      <td width="1033"> 
        <div align="left"> 
          <input type="text" name="A1604" value="<?php echo($result->A1604) ;?>" size="25">
        </div>
      </td>
      <td width="36">1604</td>
    </tr>
    <tr align="center"> 
      <td width="1">&nbsp;</td>
      <td width="91">Adresse </td>
      <td width="1033"> 
        <div align="left"> 
          <input type="text" name="A1605" value="<?php echo($result->A1605) ;?>" size="25">
        </div>
      </td>
      <td width="36">1605</td>
    </tr>
    <tr align="center"> 
      <td width="1">&nbsp;</td>
      <td width="91">CP</td>
      <td width="1033"> 
        <div align="left"> 
          <input type="text" name="A1606" value="<?php echo($result->A1606) ;?>" size="5">
        </div>
      </td>
      <td width="36">1606</td>
    </tr>
    <tr align="center"> 
      <td width="1">&nbsp;</td>
      <td width="91">Ville</td>
      <td width="1033"> 
        <div align="left"> 
          <input type="text" name="A1607" value="<?php echo($result->A1607) ;?>" size="25">
        </div>
      </td>
      <td width="36">1607</td>
    </tr>
    <tr align="center"> 
      <td width="1">&nbsp;</td>
      <td width="91">T&eacute;l</td>
      <td width="1033"> 
        <div align="left"> 
          <input type="text" name="A1608" value="<?php echo($result->A1608) ;?>" size="15">
        </div>
      </td>
      <td width="36">1608</td>
    </tr>
    <tr align="center" bgcolor="#FF0000"> 
      <td colspan="4"><b></b><b></b><b>STADE</b></td>
    </tr>
    <tr align="center"> 
      <td width="1" height="24">&nbsp;</td>
      <td width="91" height="24">Nom du stade</td>
      <td width="1033" height="24"> 
        <div align="left"> 
          <input type="text" name="A1609" value="<?php echo($result->A1609) ;?>" size="25">
        </div>
      </td>
      <td width="36" height="24">1609</td>
    </tr>
    <tr align="center"> 
      <td width="1">&nbsp;</td>
      <td width="91">Adresse</td>
      <td width="1033"> 
        <div align="left"> 
          <input type="text" name="A1610" value="<?php echo($result->A1610) ;?>" size="25">
        </div>
      </td>
      <td width="36">1610</td>
    </tr>
    <tr align="center"> 
      <td width="1">&nbsp;</td>
      <td width="91">CP</td>
      <td width="1033"> 
        <div align="left"> 
          <input type="text" name="A1611" value="<?php echo($result->A1611) ;?>" size="5">
        </div>
      </td>
      <td width="36">1611 </td>
    </tr>
    <tr align="center"> 
      <td width="1">&nbsp;</td>
      <td width="91">Ville</td>
      <td width="1033"> 
        <div align="left"> 
          <input type="text" name="A1612" value="<?php echo($result->A1612) ;?>" size="25">
        </div>
      </td>
      <td width="36">1612</td>
    </tr>
    <tr align="center"> 
      <td width="1">&nbsp;</td>
      <td width="91">tel</td>
      <td width="1033"> 
        <div align="left"> 
          <input type="text" name="A1613" value="<?php echo($result->A1613) ;?>" size="15">
        </div>
      </td>
      <td width="36">1613</td>
    </tr>
    <tr align="center"> 
      <td width="1">&nbsp;</td>
      <td width="91">capacit&eacute;</td>
      <td width="1033"> 
        <div align="left"> 
          <input type="text" name="A1614" value="<?php echo($result->A1614) ;?>" size="6">
        </div>
      </td>
      <td width="36">1614</td>
    </tr>
    <tr align="center" bgcolor="#FF0000" valign="top"> 
      <td colspan="4" height="18"><b></b><b></b><b>CONTACT</b></td>
    </tr>
    <tr align="center"> 
      <td width="1">&nbsp;</td>
      <td width="91">Site Internet</td>
      <td width="1033"> 
        <div align="left"> 
          <input type="text" name="A1620" value="<?php echo($result->A1620) ;?>" size="75">
        </div>
      </td>
      <td width="36">1620</td>
    </tr>
    <tr align="center"> 
      <td width="1">&nbsp;</td>
      <td width="91">Mel</td>
      <td width="1033"> 
        <div align="left"> 
          <input type="text" name="A1616" value="<?php echo($result->A1616) ;?>" size="50">
        </div>
      </td>
      <td width="36">1616</td>
    </tr>
    <tr align="center"> 
      <td width="1">&nbsp;</td>
      <td width="91">Correspondant</td>
      <td width="1033"> 
        <div align="left"> 
          <input type="text" name="A1617" value="<?php echo($result->A1617) ;?>" size="15">
        </div>
      </td>
      <td width="36">1617</td>
    </tr>
    <tr align="center"> 
      <td width="1">&nbsp;</td>
      <td width="91"><b></b></td>
      <td width="1033"> 
        <div align="left"></div>
      </td>
      <td width="36">&nbsp;</td>
    </tr>
    <tr align="center"> 
      <td width="1">&nbsp;</td>
      <td width="91">Sigle</td>
      <td width="1033"> 
        <div align="left"> 
          <input type="text" name="A1618" value="<?php echo($result->A1618) ;?>" size="8">
        </div>
      </td>
      <td width="36">1618</td>
    </tr>
    <tr align="center"> 
      <td width="1">&nbsp;</td>
      <td width="91">couleurs</td>
      <td width="1033"> 
        <div align="left"> 
          <input type="text" name="A1619" value="<?php echo($result->A1619) ;?>" size="30">
        </div>
      </td>
      <td width="36">1619</td>
    </tr>
    <tr align="center"> 
      <td width="1">&nbsp;</td>
      <td width="91">comite</td>
      <td width="1033"> 
        <div align="left"> 
          <input type="text" name="A1615" value="<?php echo($result->A1615) ;?>" size="50">
        </div>
      </td>
      <td width="36">1615</td>
    </tr>
    <tr align="center" bgcolor="#FF0000"> 
      <td width="1">&nbsp;</td>
      <td width="91">&nbsp;</td>
      <td width="1033"> 
        <div align="center"><b>DATES IMPORTANTES</b></div>
      </td>
      <td width="36">&nbsp;</td>
    </tr>
    <tr align="center" valign="top"> 
      <td height="142" width="1">&nbsp;</td>
      <td height="142" width="91">&nbsp;</td>
      <td height="142" width="1033"> 
        <div align="left"> 
          <p><b> 
            <textarea name="A1621" cols="100" rows="7"><?php echo($result->A1621) ;?></textarea>
            <br>
            </b><b> </b></p>
        </div>
      </td>
      <td height="142" width="36"> 
        <p>1621</p>
        <p>&nbsp;</p>
      </td>
    </tr>
    <tr align="center" valign="top"> 
      <td> 
        <p>&nbsp; </p>
      </td>
      <td>&nbsp;</td>
      <td> 
        <div align="left"><b> 
          <textarea name="A1622" cols="75" rows="7"><?php echo($result->A1622) ;?></textarea>
          </b></div>
      </td>
      <td>1622</td>
    </tr>
    <tr align="center" valign="top"> 
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td> 
        <div align="left"><b> 
          <textarea name="A1623" cols="75" rows="7"><?php echo($result->A1623) ;?></textarea>
          </b></div>
      </td>
      <td>1623</td>
    </tr>
    <tr align="center" valign="top"> 
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td> 
        <div align="left"><b> 
          <textarea name="A1626" cols="75" rows="7"><?php echo($result->A1626) ;?></textarea>
          </b></div>
      </td>
      <td>1626</td>
    </tr>
    <tr align="center" valign="top"> 
      <td><b> </b></td>
      <td>&nbsp;</td>
      <td>
        <div align="left"><b> 
          <textarea name="1627" cols="75" rows="7"><?php echo($result->A1627) ;?></textarea>
          </b></div>
      </td>
      <td>1627</td>
    </tr>
    <tr align="center" valign="top"> 
      <td colspan="4"> 
        <input type="submit" value="modifier" name="submit">
      </td>
    </tr>
  </table>
</form>
 
