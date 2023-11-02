 <html>
<head>

<?php
$sigle=$_GET['variable_1'];
echo $sigle;

?>
<title> Champions territoriaux <?php echo $sigle; ?></title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
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
<body>
<div id="Layer2" style="position:absolute; width:1020px; height:32px; z-index:2; left: 188px; top: 15px"> 
  <table width="100%" border="1">
    <tr> 
      <td width="16%" bgcolor="#006699"> 
        <div align="center"><font color="#FFFFFF"><b>HONNEUR</b></font></div>
      </td>
      <td width="17%" bgcolor="#006699"> 
        <div align="center"><font color="#FFFFFF"><b>PROMOTION</b></font></div>
      </td>
      <td width="17%" bgcolor="#006699"> 
        <div align="center"><font color="#FFFFFF"><b>1er SERIE</b></font></div>
      </td>
      <td width="17%" bgcolor="#006699"> 
        <div align="center"><font color="#FFFFFF"><b>2me SERIE</b></font></div>
      </td>
      <td width="16%" bgcolor="#006699"> 
        <div align="center"><font color="#FFFFFF"><b>3me SERIE</b></font></div>
      </td>
      <td width="17%" bgcolor="#006699"> 
        <div align="center"><font color="#FFFFFF"><b>4me SERIE</b></font></div>
      </td>
    </tr>
  </table>
</div>
<div id="Layer1" style="position:absolute; width:98px; height:41px; z-index:1; left: 89px; top: 47px"> 
  <p align="center"> 
    
	
	
	<?php
mysql_connect("sql.franceserv.fr", "onepip-france", "lavelan09"); // Connexion à MySQL
mysql_select_db("onepip-france-db1"); // Sélection de la base onepip
  $sigle=$_GET['variable_1'];

  
  $reponse = mysql_query("SELECT * FROM bdequipe1 WHERE comite1='$sigle' and division='honneur' and titre='Champion' and rang2='1' and categorie='A' order by saison desc limit 0,10"); // Requête SQL

 
// On fait une boucle pour lister tout ce que contient la table :
while ($donnees = mysql_fetch_array($reponse) )
{ 
?>
    <strong> </strong> 
  <table width="100%" border="1" bordercolor="#999999" cellspacing="0" cellpadding="0">
    <tr bgcolor="#FFFFFF"> 
      <td width="19%" height="12" bordercolor="#FFFFFF"> 
        <div align="center"> 
          <?php echo $donnees['saison']; ?>
        </div>
      </td>
    </tr>
  </table>
  
  <?php
 }
mysql_close(); // Déconnexion de MySQL
?>
  
</div>
<div id="Layer1" style="position:absolute; width:170px; height:50px; z-index:1; left: 187px; top: 47px; background-color: #FFFFFF; layer-background-color: #FFFFFF; border: 1px none #000000"> 
  <p align="center"> 
    <?php
mysql_connect("sql.franceserv.fr", "onepip-france", "lavelan09"); // Connexion à MySQL
mysql_select_db("onepip-france-db1"); // Sélection de la base onepip
 
$reponse = mysql_query("SELECT * FROM bdequipe1 WHERE comite1='$sigle' and division='honneur' and titre='Champion'  and rang2='1' and categorie='A' order by saison desc limit 0,10"); // Requête SQL

 
// On fait une boucle pour lister tout ce que contient la table :
while ($donnees = mysql_fetch_array($reponse) )
{ 
?>
    <strong> </strong> 
  <table width="100%" border="1" bordercolor="#999999" align="center" cellspacing="0" cellpadding="0">
    <tr bgcolor="#FFFFFF"> 
      <td width="19%" bgcolor="#FFFFFF" bordercolor="#FFFFFF"> 
        <div align="center"> 
          <?php echo $donnees['champion']; ?>
        </div>
      </td>
    </tr>
  </table>

  <?php
 }
mysql_close(); // Déconnexion de MySQL
?>
  
</div>
<div id="Layer1" style="position:absolute; width:170px; height:41px; z-index:1; left: 357px; top: 47px; background-color: #FFFFFF; layer-background-color: #FFFFFF; border: 1px none #000000; visibility: inherit"> 
  <p align="center"> 
    <?php
mysql_connect("onepip.sql.free.fr", "onepip", "lavelan"); // Connexion à MySQL
mysql_select_db("onepip"); // Sélection de la base onepip
 
$reponse = mysql_query("SELECT * FROM bdequipe1 WHERE comite1='$sigle' and division='promotion honneur' and titre='Champion' and rang2='1' and categorie='A' order by saison desc limit 0,10"); // Requête SQL

 
// On fait une boucle pour lister tout ce que contient la table :
while ($donnees = mysql_fetch_array($reponse) )
{ 
?>
    <strong> </strong> 
  <table width="100%" border="1" bordercolor="#999999" align="center" cellspacing="0" cellpadding="0">
    <tr bgcolor="#FFFFFF"> 
      <td width="19%" bordercolor="#FFFFFF" bgcolor="#FFFFFF" height="9"> 
        <div align="center"> 
          <?php echo $donnees['champion']; ?>
        </div>
      </td>
    </tr>
  </table>
   
  <?php
 }
mysql_close(); // Déconnexion de MySQL
?>

</div>
<div id="Layer1" style="position:absolute; width:170px; height:41px; z-index:1; left: 527px; top: 47px; background-color: #FFFFFF; layer-background-color: #FFFFFF; border: 1px none #000000"> 
  <p align="center"> 
    <?php
mysql_connect("sql.franceserv.fr", "onepip-france", "lavelan09"); // Connexion à MySQL
mysql_select_db("onepip-france-db1"); // Sélection de la base onepip
 
$reponse = mysql_query("SELECT * FROM bdequipe1 WHERE comite1='$sigle' and division='1re Serie' and titre='Champion' and rang2='1' and categorie='A' order by saison desc limit 0,10"); // Requête SQL

 
// On fait une boucle pour lister tout ce que contient la table :
while ($donnees = mysql_fetch_array($reponse) )
{ 
?>
    <strong> </strong> 
  <table width="100%" border="1" align="center" cellspacing="0" bordercolor="#999999" cellpadding="0">
    <tr bgcolor="#FFFFFF"> 
      <td width="19%" bgcolor="#FFFFFF" bordercolor="#FFFFFF" height="13"> 
        <div align="center"> 
          <?php echo $donnees['champion']; ?>
        </div>
       
      </td>
    </tr>
  </table>
 
  <?php
 }
mysql_close(); // Déconnexion de MySQL
?>
 
</div>
<div id="Layer1" style="position:absolute; width:170px; height:41px; z-index:1; left: 697px; top: 47px; background-color: #FFFFFF; layer-background-color: #FFFFFF; border: 1px none #000000"> 
  <p align="center"> 
    <?php
mysql_connect("onepip.sql.free.fr", "onepip", "lavelan"); // Connexion à MySQL
mysql_select_db("onepip"); // Sélection de la base onepip
 
$reponse = mysql_query("SELECT * FROM bdequipe1 WHERE comite1='$sigle'and division='2me Serie' and titre='Champion'  and rang2='1' and categorie='A' order by saison desc limit 0,10"); // Requête SQL

 
// On fait une boucle pour lister tout ce que contient la table :
while ($donnees = mysql_fetch_array($reponse) )
{ 
?>
    <strong> </strong> 
  <table width="100%" border="1" align="center" cellspacing="0" cellpadding="0" bordercolor="#999999">
    <tr bgcolor="#FFFFFF"> 
      <td width="19%" bgcolor="#FFFFFF" bordercolor="#FFFFFF"> 
        <div align="center"> 
          <?php echo $donnees['champion']; ?>
        </div>
      </td>
    </tr>
  </table>
   
  <?php
 }
mysql_close(); // Déconnexion de MySQL
?>

</div>
<div id="Layer1" style="position:absolute; width:170px; height:41px; z-index:1; left: 867px; top: 47px; background-color: #FFFFFF; layer-background-color: #FFFFFF; border: 1px none #000000"> 
  <p align="center"> 
    <?php
mysql_connect("sql.franceserv.fr", "onepip-france", "lavelan09"); // Connexion à MySQL
mysql_select_db("onepip-france-db1"); // Sélection de la base onepip
 
$reponse = mysql_query("SELECT * FROM bdequipe1 WHERE comite1='$sigle' and division='3me Serie' and titre='Champion'  and rang2='1' and categorie='A' order by saison desc limit 0,10"); // Requête SQL

 
// On fait une boucle pour lister tout ce que contient la table :
while ($donnees = mysql_fetch_array($reponse) )
{ 
?>
    <strong> </strong> 
  <table width="100%" border="1" align="center" bordercolor="#999999" cellspacing="0" cellpadding="0">
    <tr bgcolor="#FFFFFF"> 
      <td width="19%" bgcolor="#FFFFFF" bordercolor="#FFFFFF"> 
        <div align="center"> 
          <?php echo $donnees['champion']; ?>
        </div>
      </td>
    </tr>
  </table>
  
  <?php
 }
mysql_close(); // Déconnexion de MySQL
?>

</div>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp; 
<p>&nbsp; 
<p> <strong> </strong> 
<div id="Layer1" style="position:absolute; width:98px; height:41px; z-index:1; left: 89px; top: 302px"> 
  <p align="center"> 
    <?php
mysql_connect("sql.franceserv.fr", "onepip-france", "lavelan09"); // Connexion à MySQL
mysql_select_db("onepip-france-db1"); // Sélection de la base onepip
 
$reponse = mysql_query("SELECT * FROM bdequipe1 WHERE comite1='$sigle'and division='honneur' and titre='Champion' and rang2='1' and categorie='A' order by saison desc limit 10,10"); // Requête SQL

 
// On fait une boucle pour lister tout ce que contient la table :
while ($donnees = mysql_fetch_array($reponse) )
{ 
?>
    <strong> </strong> 
  <table width="100%" border="1" bordercolor="#999999" cellspacing="0" cellpadding="0">
    <tr bgcolor="#FFFFFF"> 
      <td width="19%" height="12" bordercolor="#FFFFFF" bgcolor="#CCCCCC"> 
        <div align="center"> 
          <?php echo $donnees['saison']; ?>
        </div>
      </td>
    </tr>
  </table>
  <?php
 }
mysql_close(); // Déconnexion de MySQL
?>
</div>
<div id="Layer1" style="position:absolute; width:170px; height:41px; z-index:1; left: 1037px; top: 47px; background-color: #FFFFFF; layer-background-color: #FFFFFF; border: 1px none #000000"> 
  <p align="center"> 
    <?php
mysql_connect("sql.franceserv.fr", "onepip-france", "lavelan09"); // Connexion à MySQL
mysql_select_db("onepip-france-db1"); // Sélection de la base onepip
 
$reponse = mysql_query("SELECT * FROM bdequipe1 WHERE comite1='$sigle' and division='4me Serie' and titre='Champion' and rang2='1' and categorie='A' order by saison desc limit 0,10"); // Requête SQL

 
// On fait une boucle pour lister tout ce que contient la table :
while ($donnees = mysql_fetch_array($reponse) )
{ 
?>
    <strong> </strong> 
  <table width="100%" border="1" align="center" bordercolor="#999999" cellspacing="0" cellpadding="0">
    <tr bgcolor="#FFFFFF"> 
      <td width="19%" bgcolor="#FFFFFF" bordercolor="#FFFFFF"> 
        <div align="center"> 
          <?php echo $donnees['champion']; ?>
        </div>
      </td>
    </tr>
  </table>
  <?php
 }
mysql_close(); // Déconnexion de MySQL
?>
</div>
<div id="Layer1" style="position:absolute; width:170px; height:50px; z-index:1; left: 187px; top: 302px; background-color: #FFFFFF; layer-background-color: #FFFFFF; border: 1px none #000000"> 
  <p align="center"> 
    <?php
mysql_connect("sql.franceserv.fr", "onepip-france", "lavelan09"); // Connexion à MySQL
mysql_select_db("onepip-france-db1"); // Sélection de la base onepip
 
$reponse = mysql_query("SELECT * FROM bdequipe1 WHERE comite1='$sigle' and division='honneur' and titre='Champion' and rang2='1' and categorie='A' order by saison desc limit 10,10"); // Requête SQL

 
// On fait une boucle pour lister tout ce que contient la table :
while ($donnees = mysql_fetch_array($reponse) )
{ 
?>
    <strong> </strong> 
  <table width="100%" border="1" bordercolor="#999999" align="center" cellspacing="0" cellpadding="0">
    <tr bgcolor="#FFFFFF"> 
      <td width="19%" bgcolor="#CCCCCC" bordercolor="#FFFFFF"> 
        <div align="center"> 
          <?php echo $donnees['champion']; ?>
        </div>
      </td>
    </tr>
  </table>
  <?php
 }
mysql_close(); // Déconnexion de MySQL
?>
</div>
<div id="Layer1" style="position:absolute; width:170px; height:41px; z-index:1; left: 357px; top: 302px; background-color: #FFFFFF; layer-background-color: #FFFFFF; border: 1px none #000000; visibility: inherit"> 
  <p align="center"> 
    <?php
mysql_connect("sql.franceserv.fr", "onepip-france", "lavelan09"); // Connexion à MySQL
mysql_select_db("onepip-france-db1"); // Sélection de la base onepip
 
$reponse = mysql_query("SELECT * FROM bdequipe1 WHERE comite1='$sigle'and division='promotion honneur' and titre='Champion' and rang2='1' and categorie='A' order by saison desc limit 10,10"); // Requête SQL

 
// On fait une boucle pour lister tout ce que contient la table :
while ($donnees = mysql_fetch_array($reponse) )
{ 
?>
    <strong> </strong> 
  <table width="100%" border="1" bordercolor="#999999" align="center" cellspacing="0" cellpadding="0">
    <tr bgcolor="#FFFFFF"> 
      <td width="19%" bordercolor="#FFFFFF" bgcolor="#CCCCCC" height="9"> 
        <div align="center"> 
          <?php echo $donnees['champion']; ?>
        </div>
      </td>
    </tr>
  </table>
  <?php
 }
mysql_close(); // Déconnexion de MySQL
?>
</div>
<div id="Layer1" style="position:absolute; width:170px; height:41px; z-index:1; left: 527px; top: 302px; background-color: #FFFFFF; layer-background-color: #FFFFFF; border: 1px none #000000"> 
  <p align="center"> 
    <?php
mysql_connect("sql.franceserv.fr", "onepip-france", "lavelan09"); // Connexion à MySQL
mysql_select_db("onepip-france-db1"); // Sélection de la base onepip
 
$reponse = mysql_query("SELECT * FROM bdequipe1 WHERE comite1='$sigle'and division='1re Serie' and titre='Champion'  and rang2='1' and categorie='A' order by saison desc limit 10,10"); // Requête SQL

 
// On fait une boucle pour lister tout ce que contient la table :
while ($donnees = mysql_fetch_array($reponse) )
{ 
?>
    <strong> </strong> 
  <table width="100%" border="1" align="center" cellspacing="0" bordercolor="#999999" cellpadding="0">
    <tr bgcolor="#FFFFFF"> 
      <td width="19%" bgcolor="#CCCCCC" bordercolor="#FFFFFF" height="13"> 
        <div align="center"> 
          <?php echo $donnees['champion']; ?>
        </div>
      </td>
    </tr>
  </table>
  <?php
 }
mysql_close(); // Déconnexion de MySQL
?>
</div>
<div id="Layer1" style="position:absolute; width:170px; height:41px; z-index:1; left: 697px; top: 302px; background-color: #FFFFFF; layer-background-color: #FFFFFF; border: 1px none #000000"> 
  <p align="center"> 
    <?php
mysql_connect("sql.franceserv.fr", "onepip-france", "lavelan09"); // Connexion à MySQL
mysql_select_db("onepip-france-db1"); // Sélection de la base onepip
 
$reponse = mysql_query("SELECT * FROM bdequipe1 WHERE comite1='$sigle' and division='2me Serie' and titre='Champion'  and rang2='1' and categorie='A' order by saison desc limit 10,10"); // Requête SQL

 
// On fait une boucle pour lister tout ce que contient la table :
while ($donnees = mysql_fetch_array($reponse) )
{ 
?>
    <strong> </strong> 
  <table width="100%" border="1" align="center" cellspacing="0" cellpadding="0" bordercolor="#999999">
    <tr bgcolor="#FFFFFF"> 
      <td width="19%" bgcolor="#CCCCCC" bordercolor="#FFFFFF"> 
        <div align="center"> 
          <?php echo $donnees['champion']; ?>
        </div>
      </td>
    </tr>
  </table>
  <?php
 }
mysql_close(); // Déconnexion de MySQL
?>
</div>
<div id="Layer1" style="position:absolute; width:170px; height:41px; z-index:1; left: 867px; top: 302px; background-color: #FFFFFF; layer-background-color: #FFFFFF; border: 1px none #000000"> 
  <p align="center"> 
    <?php
mysql_connect("sql.franceserv.fr", "onepip-france", "lavelan09"); // Connexion à MySQL
mysql_select_db("onepip-france-db1"); // Sélection de la base onepip
 
$reponse = mysql_query("SELECT * FROM bdequipe1 WHERE comite1='$sigle' and division='3me Serie' and titre='Champion'  and rang2='1' and categorie='A' order by saison desc limit 10,10"); // Requête SQL

 
// On fait une boucle pour lister tout ce que contient la table :
while ($donnees = mysql_fetch_array($reponse) )
{ 
?>
    <strong> </strong> 
  <table width="100%" border="1" align="center" bordercolor="#999999" cellspacing="0" cellpadding="0">
    <tr bgcolor="#FFFFFF"> 
      <td width="19%" bgcolor="#CCCCCC" bordercolor="#FFFFFF"> 
        <div align="center"> 
          <?php echo $donnees['champion']; ?>
        </div>
      </td>
    </tr>
  </table>
  <?php
 }
mysql_close(); // Déconnexion de MySQL
?>
</div>
<div id="Layer1" style="position:absolute; width:170px; height:41px; z-index:1; left: 1037px; top: 302px; background-color: #FFFFFF; layer-background-color: #FFFFFF; border: 1px none #000000"> 
  <p align="center"> 
    <?php
mysql_connect("sql.franceserv.fr", "onepip-france", "lavelan09"); // Connexion à MySQL
mysql_select_db("onepip-france-db1"); // Sélection de la base onepip
$reponse = mysql_query("SELECT * FROM bdequipe1 WHERE comite1='$sigle' and division='4me Serie' and titre='Champion' and rang2='1' and categorie='A' order by saison desc limit 10,10"); // Requête SQL

 
// On fait une boucle pour lister tout ce que contient la table :
while ($donnees = mysql_fetch_array($reponse) )
{ 
?>
    <strong> </strong> 
  <table width="100%" border="1" align="center" bordercolor="#999999" cellspacing="0" cellpadding="0">
    <tr bgcolor="#FFFFFF"> 
      <td width="19%" bgcolor="#CCCCCC" bordercolor="#FFFFFF"> 
        <div align="center"> 
          <?php echo $donnees['champion']; ?>
        </div>
      </td>
    </tr>
  </table>
  <?php
 }
mysql_close(); // Déconnexion de MySQL
?>
</div>
<div id="Layer1" style="position:absolute; width:98px; height:41px; z-index:1; left: 89px; top: 551px"> 
  <p align="center"> 
    <?php
mysql_connect("sql.franceserv.fr", "onepip-france", "lavelan09"); // Connexion à MySQL
mysql_select_db("onepip-france-db1"); // Sélection de la base onepip
 
$reponse = mysql_query("SELECT * FROM bdequipe1 WHERE comite1='$sigle' and division='honneur' and titre='Champion'  and rang2='1' and categorie='A' order by saison desc limit 20,10"); // Requête SQL

 
// On fait une boucle pour lister tout ce que contient la table :
while ($donnees = mysql_fetch_array($reponse) )
{ 
?>
    <strong> </strong> 
  <table width="100%" border="1" bordercolor="#999999" cellspacing="0" cellpadding="0">
    <tr bgcolor="#FFFFFF"> 
      <td width="19%" height="12" bordercolor="#FFFFFF" bgcolor="#FFFFFF"> 
        <div align="center"> 
          <?php echo $donnees['saison']; ?>
        </div>
      </td>
    </tr>
  </table>
  <?php
 }
mysql_close(); // Déconnexion de MySQL
?>
</div>
<div id="Layer1" style="position:absolute; width:170px; height:50px; z-index:1; left: 187px; top: 551px; background-color: #FFFFFF; layer-background-color: #FFFFFF; border: 1px none #000000"> 
  <p align="center"> 
    <?php
mysql_connect("sql.franceserv.fr", "onepip-france", "lavelan09"); // Connexion à MySQL
mysql_select_db("onepip-france-db1"); // Sélection de la base onepip
 
$reponse = mysql_query("SELECT * FROM bdequipe1 WHERE comite1='$sigle'and division='honneur' and titre='Champion' and rang2='1' and categorie='A' order by saison desc limit 20,10"); // Requête SQL

 
// On fait une boucle pour lister tout ce que contient la table :
while ($donnees = mysql_fetch_array($reponse) )
{ 
?>
    <strong> </strong> 
  <table width="100%" border="1" bordercolor="#999999" align="center" cellspacing="0" cellpadding="0">
    <tr bgcolor="#FFFFFF"> 
      <td width="19%" bgcolor="#FFFFFF" bordercolor="#FFFFFF"> 
        <div align="center"> 
          <?php echo $donnees['champion']; ?>
        </div>
      </td>
    </tr>
  </table>
  <?php
 }
mysql_close(); // Déconnexion de MySQL
?>
</div>
<div id="Layer1" style="position:absolute; width:170px; height:41px; z-index:1; left: 357px; top: 551px; background-color: #FFFFFF; layer-background-color: #FFFFFF; border: 1px none #000000; visibility: inherit"> 
  <p align="center"> 
    <?php
mysql_connect("sql.franceserv.fr", "onepip-france", "lavelan09"); // Connexion à MySQL
mysql_select_db("onepip-france-db1"); // Sélection de la base onepip
 
$reponse = mysql_query("SELECT * FROM bdequipe1 WHERE comite1='$sigle'and division='promotion honneur' and titre='Champion' and rang2='1' and categorie='A' order by saison desc limit 20,10"); // Requête SQL

 
// On fait une boucle pour lister tout ce que contient la table :
while ($donnees = mysql_fetch_array($reponse) )
{ 
?>
    <strong> </strong> 
  <table width="100%" border="1" bordercolor="#999999" align="center" cellspacing="0" cellpadding="0">
    <tr bgcolor="#FFFFFF"> 
      <td width="19%" bordercolor="#FFFFFF" bgcolor="#FFFFFF" height="9"> 
        <div align="center"> 
          <?php echo $donnees['champion']; ?>
        </div>
      </td>
    </tr>
  </table>
  <?php
 }
mysql_close(); // Déconnexion de MySQL
?>
</div>
<div id="Layer1" style="position:absolute; width:170px; height:41px; z-index:1; left: 527px; top: 551px; background-color: #FFFFFF; layer-background-color: #FFFFFF; border: 1px none #000000"> 
  <p align="center"> 
    <?php
mysql_connect("sql.franceserv.fr", "onepip-france", "lavelan09"); // Connexion à MySQL
mysql_select_db("onepip-france-db1"); // Sélection de la base onepip
 
$reponse = mysql_query("SELECT * FROM bdequipe1 WHERE comite1='$sigle'and division='1re Serie' and titre='Champion'  and rang2='1' and categorie='A' order by saison desc limit 20,10"); // Requête SQL

 
// On fait une boucle pour lister tout ce que contient la table :
while ($donnees = mysql_fetch_array($reponse) )
{ 
?>
    <strong> </strong> 
  <table width="100%" border="1" align="center" cellspacing="0" bordercolor="#999999" cellpadding="0">
    <tr bgcolor="#FFFFFF"> 
      <td width="19%" bgcolor="#FFFFFF" bordercolor="#FFFFFF" height="13"> 
        <div align="center"> 
          <?php echo $donnees['champion']; ?>
        </div>
      </td>
    </tr>
  </table>
  <?php
 }
mysql_close(); // Déconnexion de MySQL
?>
</div>
<div id="Layer1" style="position:absolute; width:170px; height:41px; z-index:1; left: 697px; top: 551px; background-color: #FFFFFF; layer-background-color: #FFFFFF; border: 1px none #000000"> 
  <p align="center"> 
    <?php
mysql_connect("sql.franceserv.fr", "onepip-france", "lavelan09"); // Connexion à MySQL
mysql_select_db("onepip-france-db1"); // Sélection de la base onepip
$reponse = mysql_query("SELECT * FROM bdequipe1 WHERE comite1='$sigle'and division='2me Serie' and titre='Champion' and rang2='1' and categorie='A' order by saison desc limit 20,10"); // Requête SQL

 
// On fait une boucle pour lister tout ce que contient la table :
while ($donnees = mysql_fetch_array($reponse) )
{ 
?>
    <strong> </strong> 
  <table width="100%" border="1" align="center" cellspacing="0" cellpadding="0" bordercolor="#999999">
    <tr bgcolor="#FFFFFF"> 
      <td width="19%" bgcolor="#FFFFFF" bordercolor="#FFFFFF"> 
        <div align="center"> 
          <?php echo $donnees['champion']; ?>
        </div>
      </td>
    </tr>
  </table>
  <?php
 }
mysql_close(); // Déconnexion de MySQL
?>
</div>
<div id="Layer1" style="position:absolute; width:170px; height:41px; z-index:1; left: 867px; top: 551px; background-color: #FFFFFF; layer-background-color: #FFFFFF; border: 1px none #000000"> 
  <p align="center"> 
    <?php
mysql_connect("sql.franceserv.fr", "onepip-france", "lavelan09"); // Connexion à MySQL
mysql_select_db("onepip-france-db1"); // Sélection de la base onepip
 
$reponse = mysql_query("SELECT * FROM bdequipe1 WHERE comite1='$sigle'and division='3me Serie' and titre='Champion'  and rang2='1' and categorie='A' order by saison desc limit 20,10"); // Requête SQL

 
// On fait une boucle pour lister tout ce que contient la table :
while ($donnees = mysql_fetch_array($reponse) )
{ 
?>
    <strong> </strong> 
  <table width="100%" border="1" align="center" bordercolor="#999999" cellspacing="0" cellpadding="0">
    <tr bgcolor="#FFFFFF"> 
      <td width="19%" bgcolor="#FFFFFF" bordercolor="#FFFFFF"> 
        <div align="center"> 
          <?php echo $donnees['champion']; ?>
        </div>
      </td>
    </tr>
  </table>
  <?php
 }
mysql_close(); // Déconnexion de MySQL
?>
</div>
<div id="Layer1" style="position:absolute; width:170px; height:41px; z-index:1; left: 1037px; top: 551px; background-color: #FFFFFF; layer-background-color: #FFFFFF; border: 1px none #000000"> 
  <p align="center"> 
    <?php
mysql_connect("sql.franceserv.fr", "onepip-france", "lavelan09"); // Connexion à MySQL
mysql_select_db("onepip-france-db1"); // Sélection de la base onepip 
$reponse = mysql_query("SELECT * FROM bdequipe1 WHERE comite1='$sigle'and division='4me Serie' and titre='Champion'  and rang2='1' and categorie='A' order by saison desc limit 20,10"); // Requête SQL

 
// On fait une boucle pour lister tout ce que contient la table :
while ($donnees = mysql_fetch_array($reponse) )
{ 
?>
    <strong> </strong> 
  <table width="100%" border="1" align="center" bordercolor="#999999" cellspacing="0" cellpadding="0">
    <tr bgcolor="#FFFFFF"> 
      <td width="19%" bgcolor="#FFFFFF" bordercolor="#FFFFFF"> 
        <div align="center"> 
          <?php echo $donnees['champion']; ?>
        </div>
      </td>
    </tr>
  </table>
  <?php
 }
mysql_close(); // Déconnexion de MySQL
?>
</div>
<p><strong> </strong></p>
</body>
</html>
