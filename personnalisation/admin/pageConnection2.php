<?php 


 
if (isset ($_POST['creationMdp'])) $creationMdp =  $_POST['creationMdp']; else $creationMdp = "qq"; 
if (isset ($_POST['creationMdp2'])) $creationMdp2 = $_POST['creationMdp2'];else $creationMdp2 = "qq";
if (isset ($_POST['creationNom'])) $creationNom =  $_POST['creationNom'];else $creationNom = "qq";


echo $creationMdp;
echo $creationMdp2;
echo $creationNom;


?>

<!DOCTYPE html><head>
<meta name="description"

content="">
<meta name="keywords"
content="Presentation de la competititon et de tous les champions de France 1re Serie. Palmares complet de la 1re Serie.">
<meta name="classification" content="Sport,Rugby">
<meta name="resource-type" content="document">
<meta name="copyright" content="Comite Midi Pyrenees de Rugby">
<meta name="author" content="Equipe Onepip">
<meta name="robots" content="All">
<title>Champions de FRANCE </title>

<link type="text/css" rel="stylesheet" href="../perso.css"/> 
<link type="text/css" rel="stylesheet" href="../../ligne1.css"/>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/> 
</head>



  
<body  bgcolor="#000000">


<?php
include ("../../connect1/connection5.php");


$reponse = $bdd->query("	SELECT nom, id	
				FROM personnel
				WHERE nom='$creationNom' ");
 
						while ($row = $reponse->fetch() )
								{ 
								$nom = $row[0];
								$verifId = $row[1];
								}
							
	//echo 	$nom.$verifId;
	?>
<?php
//v�rification de la validit� du pseudo
if ( $verifId == "")
		{
		echo "pseudo valide";
		}
	else
		{
		// Le visiteur n'a pas �t� reconnu comme �tant membre de notre site. On utilise alors un petit javascript lui signalant ce fait
						echo '<body onLoad="alert(\'Pseudo invalide\')">';
						// puis on le redirige vers la page d'accueil
						echo '<meta http-equiv="refresh" content="0;URL=pageConnection.php">';
		}
	
	
	
// V�rification de la validit� du mot de passe
			if ($creationMdp == $creationMdp2)
					{
					$bdd = new mysqli("localhost", "root","" , "onepip-france_db5");
  					if ($bdd->connect_error)
					{
   				 die("Connection failed: " . $bdd->connect_error);
					} 
					
					
					
					
					
					$sql = "INSERT INTO personnel(nom,mdp,prenom	)
							
							
							
							
							VALUES ('$creationNom','$creationMdp','$creationMdp2')";
					
					
					
					if ($bdd->query($sql) === TRUE) 
					{
    				echo "New record created successfully";
						} 
					else 
					{
   					 echo "Error: " . $sql . "<br>" . $bdd->error;
					}
 
					$bdd->close(); 
					
					
					}
			else 	
					{
					// Le visiteur n'a pas �t� reconnu comme �tant membre de notre site. On utilise alors un petit javascript lui signalant ce fait
					echo '<body onLoad="alert(\'Les mots de passe ne sont pas identiques, r&eacute;-essayez\')">';
					// puis on le redirige vers la page d'accueil
					echo '<meta http-equiv="refresh" content="0;URL=pageConnection.php">';
					}



?>


<div align="center">
  <table width="1100" height="639">
    <tr valign="middle" align="center" bordercolor="#FFFFFF"> 
      <td colspan="3" height="120"> 
        <table width="100%" border="2" bordercolor="#000000" height="100%">
          <tr> 
            <td> 
              <div align="center"><font color="#FFFFFF"> 
                <?php    include("../../images/page_image_al.php");   ?>
                </font></div>
            </td>
          </tr>
        </table>
      </td>
    </tr>
    <tr valign="middle" align="center" bgcolor="#000000">
      	<td height="24" colspan="3">
			<font color="#FFFFFF">
				<?php    include("../../01ligne.php"); ?>
			</font>
		</td>
    </tr>
    <tr valign="middle" align="center" bgcolor="#FFFFFF"> 
      <td height="24" colspan="3"></td>
    </tr>
    <tr valign="middle" align="center" bgcolor="#000000"> 
      <td width="225" height="505" bgcolor="#006699" align="center" valign="top"> 
        <div align="center"> </div>
        <div align="center"> 
          <p align="center"> 
            <?php include("../../01gauche.php"); ?>
            <b><font size="5" color="#FFFFFF"> </font></b></p>
        </div>
      </td>
      <td bgcolor="#FFFFFF" height="505" valign="top" width="650"> 
        <div align="center"><br>
          <font color="#000000"><br>
          <font face="Arial, Helvetica, sans-serif" size="4"><b>Connectez vous 
          et faites votre s&eacute;lection</b></font><br>
          </font>
          <p><font color="#000000"><br>
            <br>
            <?php include("saisieIdentifiantDroite.php"); ?>
            </font></p>
          <p>&nbsp; </p>
        </div>
      </td>
      <td height="505" bgcolor="#006699" width="225" valign="top"> 
        <p> <br>
          <?php include("../../00droite.php"); ?>
        </p>
      </td>
    </tr>
    <tr bordercolor="#000000"> 
      <th bgcolor="#FFFFFF" colspan="3" valign="top" height="30"> 
        <div align="center"> 
          <table width="100%" border="1" bordercolor="#006699">
            <tr> 
              <td> 
                <div> 
                  <?php include("../../bas.php"); ?>
                 </div>
              </td>
            </tr>
          </table>
        </div>
      </th>
    </tr>
  </table>
</div>
<footer>
<div id="9129-5"><script src="//ads.themoneytizer.com/s/gen.js?type=5">
</script><script src="//ads.themoneytizer.com/s/requestform.js?siteId=9129&formatId=5" >
</script></div>
</footer>
</body>
</html>
