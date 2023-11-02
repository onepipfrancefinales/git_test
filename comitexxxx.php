
<html>
<head>
<title>Vérification des clubs</title>
<link type= "text/css" href="../league.css"/>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>
<body link="#FF0000" text="#006600">
<tr>
    <td>
     

<?php
mysql_connect("onepip.sql.free.fr", "onepip", "lavelan"); // Connexion à MySQL
mysql_select_db("onepip"); // Sélection de la base onepip
?> 
 
	 

    
<?php	// 
$query = "SELECT bdsaison.id, nom_1, terr_2010, code  FROM bdsaison WHERE terr_2010='Top 14' or terr_2010='Pro D2'";
$result = mysql_query($query);
     while ($row = mysql_fetch_array($result))
     {
     $id=$row[0];
    
	echo "$row[1]"; echo "$row[2]";
  echo "<br>"; echo "<br>";
	
}

?>






<?php // faire un lien
mysql_connect("onepip.sql.free.fr", "onepip", "lavelan"); // Connexion à MySQL
mysql_select_db("onepip"); // Sélection de la base onepip
?>
 <?php
$query = "SELECT bdcomite.id, president, site  FROM bdcomite WHERE sigle='(MPY)'";
$result = mysql_query($query);
  while($row = mysql_fetch_array($result))
   {      
  echo "  </b> <a href=\"$row[2]\">$row[2]</a><br>";
  }
 
?>


<?php // insertion blason
mysql_connect("onepip.sql.free.fr", "onepip", "lavelan"); // Connexion à MySQL
mysql_select_db("onepip"); // Sélection de la base onepip
?>
 <?php

$query1 = "SELECT phpl_clubs.id, nom FROM phpl_clubs, phpl_equipes WHERE phpl_clubs.id=id_club";
$result1 = mysql_query($query1);
     while ($row = mysql_fetch_array($result1))
     {
     $id=$row[0];
    echo "</p>$row[1]";
     
	//logo 
	 
	$query="SELECT phpl_clubs.id, url FROM phpl_clubs, phpl_logo where phpl_clubs.id='$id' and id_club='$id'";
     $result = mysql_query($query);
     while($row = mysql_fetch_array($result))
	 {
	 echo "<img src=\"$row[1]\"><br><br>";
	 
	 } 
	 echo "</p>$row[1]";   
}
?>



 
<?php

$query = "SELECT bdsaison.id, code, logo, nom_1 FROM bdsaison WHERE bdsaison.id=id and terr_2010='Top 14'or terr_2010='Pro D2'";
$result = mysql_query($query);
while($row = mysql_fetch_array($result))
         {                 
                  echo "<img src=\"$row[2]\">"; 
                  echo "  </b> <a href=\"$row[3]\">$row[3]</a>";echo "$row[1]";
				 
        echo "<br>";
		}
		?><p>&nbsp;</p>