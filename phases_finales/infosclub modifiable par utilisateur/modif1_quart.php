<html>
  <head>
<title>modification de donn�es en PHP :: partie 1</title>

</head>
<body>
 
<p align="center"><b><font color="#000000" size="4">Modifier la fiche du club 
  </font></b></p>
<?php
require ("connect.php") ;
 ?>
<?php  
   
 
    //ex�cution de la requ�te:
    $requete = mysql_query( "SELECT *  FROM infosclub " ) ;
 
    //affichage des donn�es:
    while( $result = mysql_fetch_object( $requete ) )
    {
       echo("<div align=\"center\"> ".$result->id." ".$result->siege." <a href=\"modif2_quart.php?nid=".$result->id."\">modifier</a><br>\n") ;
    }
  ?>
</body>
</html>