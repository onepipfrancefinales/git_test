<html>
<head>
<title>FranceFinalesRugby</title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<link type="text/css" rel="stylesheet" href="../feuilledestyle.css"/>
</head>

<body>
<?php

if (isset ($equipeFeminine)) $equipeFeminine = $equipeFeminine; else $equipeFeminine='0';
if (isset ($equipePro)) $equipePro = equipePro; else $equipePro='0';
if (isset ($equipeFederale1)) $equipeFederale1 = $equipeFederale1; else $equipeFederale1='0';
if (isset ($equipeFederale2)) $equipeFederale2 = $equipeFederale2; else $equipeFederale2='0';
if (isset ($equipeFederale3GS)) $equipeFederale3GS = $equipeFederale3GS; else $equipeFederale3GS='0';
if (isset ($equipeFederale3NE)) $equipeFederale3NE = $equipeFederale3NE; else $equipeFederale3NE='0';
if (isset ($connect)) $connect = connect; else $connect='';


if (isset ($equipe)) $equipe = $equipe; else $equipe='0';
if (isset ($nomClub)) $nomClub = $nomClub; else $nomClub='0';
if (isset ($comiteLong)) $comiteLong = $comiteLong; else $comiteLong='0';
if (isset ($numeroLigue)) $numeroLigue = $numeroLigue; else $numeroLigue='0';
if (isset ($siglecomite)) $siglecomite = $siglecomite; else $siglecomite='';


$id_equipe = $_POST['id_equipe'];
//echo "id_equipe : ".$id_equipe;echo "<br />";

//********************************************************************
//        R�cup�ration de l'identifiant "Onepip", du nom etc ....
//                 a partir de l'identifiant FFR
//********************************************************************

require   "../../../connect1/connection1.php";

$reponse = $bdd->query("SELECT id, sigle,comite, code, siglecomite, ligue
						FROM bdclubs 
						WHERE idffr='$id_equipe' or id='$id_equipe'"); 
								while ($donnees = $reponse->fetch() )
									{ 
								  	$equipe = $donnees['id'];
									$comiteLong = $donnees['comite'];
									$nomClub = $donnees['sigle'];
									$siglecomite = $donnees['siglecomite'];
									$numeroLigue = $donnees['ligue'];
									}


if ($numeroLigue == 10)
	{
	$comite = "au";
	$ligue="Auvergne Rh�ne Alpes";
	}	
elseif ($numeroLigue == 11)
{
	$comite = "bg";
	$ligue="Auvergne Rh�ne Alpes";
	}
elseif ($numeroLigue == 12)
	{	
	$comite = "br";
	$ligue="Bretagne";
	}
elseif ($numeroLigue == 13)
	{
	$comite = "ce";
	$ligue="Centre Val de Loire";
	}
elseif ($numeroLigue == 14)
	{
	$comite = "-";
	$ligue="Corse";
	}
elseif ($numeroLigue == 15)
	{
	$comite = "al";
	$ligue="Grand Est";
	}
elseif ($numeroLigue == 16)
	{
	$comite = "fl";
	$ligue="Hauts de France";
	}
elseif ($numeroLigue == 17)
	{
	$comite = "idf";
	$ligue="Ile de France";
	}
elseif ($numeroLigue == 18)
	{
	$comite = "n";
	$ligue="Normandie";
	}
elseif ($numeroLigue == 19)
	{
	$comite = "ca";
	$ligue="Nouvelle Aquitaine";
	}
elseif ($numeroLigue == 20)
	{
	$comite = "ab";
	$ligue="Occitanie";
	}
elseif ($numeroLigue == 21)

	{
	$comite = "pl";
	$ligue="Pays de la Loire";
	}
elseif ($numeroLigue == 22)
	{
	$comite = "pr";
	$ligue="Provence Alpes C�te d'Azur";
	}
		


//echo $equipe; echo "<br />";
//echo $nomClub; echo "<br />";
//echo $comiteLong; echo "<br />";
//echo $numeroLigue; echo "<br />";
//echo $siglecomite; echo "<br />";
//echo $comite; echo "<br />";

 $reserve=90000000+$equipe;

?>

<?php





/*
require   "../../../connect1/connection3.php";

 
//  *********   recherche d'un club f�minin  ************
	$reponse = $bdd->query("SELECT id_club 
							FROM phpfem_equipes
							WHERE id_club='$equipe'"); 
									While ($donnees = mysql_fetch_array($reponse) )
										{ 
										$equipefFeminine = $row[0];
										}

*/



require   "../../../connect1/connection3.php";
 
//  *********   recherche d'un club professionnel  ************
	$reponse = $bdd->query("SELECT COUNT(id_club) 
							FROM phppro_equipes
							WHERE id_club='$equipe'"); 
									while ($row = $reponse->fetch() )
										{ 
										$equipePro = $row[0];;
										}
	
// **************   recherche d'un club de federale 1   ****************************

	$reponse = $bdd->query("SELECT COUNT(id_club) 
							FROM phpf1_equipes 
							WHERE id_club='$equipe'"); 
									while ($row = $reponse->fetch() )
										{ 
										$equipeFederale1 = $row[0];
										}
									
 
// **************    recherche d'un club de federale 2    ****************

	$reponse = $bdd->query("SELECT COUNT(id_club) 
							FROM phpfed2_equipes 
							WHERE id_club='$equipe'"); 
									while ($row = $reponse->fetch() )
										{ 
										$equipeFederale2 = $row[0];
										}
	

// *********************   recherche d'un club de federale 3GS   *********************

	$reponse = $bdd->query("SELECT COUNT(id_club) 
							FROM phpfed3GS_equipes 
							WHERE id_club='$equipe'"); 
									while ($row = $reponse->fetch() )
										{ 
										$equipeFederale3GS = $row[0];
										}
	

//  ******************   recherche d'un club de federale 3NE  *****************************

	$reponse = $bdd->query("SELECT COUNT(id_club) 
							FROM phpfed3NE_equipes 
							WHERE id_club='$equipe'"); 
									while ($row = $reponse->fetch() )
										{ 
										$equipeFederale3NE = $row[0];
										}
	


//mysql_close();

 // D�finition des parametres de la connexion � la BD



if ($equipePro > '0' OR $equipeFederale1 >'0' OR $equipeFederale2 > '0' OR $equipeFederale3NE > '0' OR $equipeFederale3GS > '0')
	{
	$connect = "connection3";
	if  ($equipeFederale1 > 0) 
		$comite = "f1";
	elseif ($equipeFederale2 > 0) 
		$comite = "fed2";
	elseif ($equipeFederale3GS > 0) 
		$comite = "fed3GS";
	elseif ($equipeFederale3NE > 0) 	
		$comite = "fed3NE";
	}
	else
	$connect = "connection2";
	
echo "<br />";
//echo $connect;echo "<br />";
//echo $comite;echo "<br />";

//echo $comite; echo "<br />";
?>
<p align="center"> 

<?php 

$logo=substr($equipe, -5); 
//echo "logo : ".$logo;
?>
	<h2 align="center"><strong> 
										  <?php echo "Ligue ".$ligue;?>
										  </strong></h2>
										
<div align="center"><strong> 
  <?php echo "( Ex ".$comiteLong." )";?>
  </strong></div>
<h1 align="center"><strong>
										  <?php echo $nomClub;?>
										  </strong></h1>
										
<div align="center"> 
  <p><br/>
    <?php	
	{print("<img src=/images/blasons200_200/$logo.gif>");}


?>
    <br>
    <font size="3"> <br>
    <br>
    <br>
    <font face="Arial, Helvetica, sans-serif" size="4">A la premi&egrave;re connection 
    le mot de passe est identique &agrave; l'identifiant</font></font></p>
  <form name="form1" method="POST" action="page_liste_competMDP.php?id_equipe=<?php echo $id_equipe;?>&type=S1&equipe=<?php echo $equipe;?>&login=<?php echo $id_equipe;?>&comite=<?php echo $comite; ?>&connect=<?php echo $connect; ?>&reserve=<?php echo $reserve; ?> ">
    <table width="932" border="0" bordercolor="#000000" cellspacing="0" cellpadding="1">
      <tr bgcolor="#CCCCCC"> 
        <td colspan="6" height="32"> 
          <div align="center">
<div class=""></div>
            </div>
        </td>
        <td width="189" height="32">&nbsp;</td>
        <td width="267" height="32">&nbsp;</td>
        <td width="250" height="32">&nbsp;</td>
      </tr>
      <tr bgcolor="#CCCCCC"> 
        <td colspan="6"> 
        
        </td>
        <td width="189"> 
          <div class="label">Identifiant :  </div></td>
        <td width="267"> 
          <input type="text" name="login" value="<?php echo $id_equipe ;?>" "size="2" >
        </td>
        <td width="250">&nbsp;</td>
      </tr>
      <tr bgcolor="#CCCCCC"> 
        <td colspan="6">&nbsp;</td>
        <td width="189">&nbsp;</td>
        <td width="267">&nbsp;</td>
        <td width="250">&nbsp;</td>
      </tr>
      <tr bgcolor="#CCCCCC"> 
        <td colspan="6">&nbsp;</td>
        <td width="189"> 
          <div class="label">Mot de passe : </div></td>
        <td width="267"> 
          <input type="text" name="MDP">
        </td>
        <td width="250">&nbsp;</td>
      </tr>
      <tr bgcolor="#CCCCCC"> 
        <td colspan="6">&nbsp;</td>
        <td width="189">&nbsp;</td>
        <td width="267">&nbsp;</td>
        <td width="250">&nbsp;</td>
      </tr>
      <tr bgcolor="#CCCCCC"> 
        <td colspan="6">&nbsp; </td>
        <td width="189">&nbsp;</td>
        <td width="267"> 
          <input type="submit" value="Valider" name="submit" />
        </td>
        <td width="250">&nbsp;</td>
      </tr>
      <tr bgcolor="#CCCCCC"> 
        <td colspan="6">&nbsp;</td>
        <td width="189">&nbsp;</td>
        <td width="267">&nbsp;</td>
        <td width="250">&nbsp;</td>
      </tr>
    </table>
    <br>
  </form>
  
 <br><br>
  <p><b><font face="Arial, Helvetica, sans-serif" color="#FF0000" size="4">Pour 
    r&eacute;initialiser votre mot de passe , contactez nous par courriel <br>
    en pr&eacute;cisant le code FFR de votre club</font></b></p>
  <p><b><font face="Arial, Helvetica, sans-serif" color="#FF0000" size="4"><br>
    Sur la page suivante doit appa&icirc;tre le calendrier <br>
    avec les diff&eacute;rentes oppositions de votre club.</font></b></p>
  <p><b><font face="Arial, Helvetica, sans-serif" size="4" color="#FF0000">Si 
    ce n'est pas le cas, contactez nous par courriel en pr&eacute;cisant le code 
    FFR de votreclub.</font></b></p>
</div>

	</body>
</html>