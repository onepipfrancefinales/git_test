<html>
  <head>
<title>modification de donn�es en PHP :: partie 1</title>

</head>


<body>


<p align="center"><b><font color="#000000" size="4">CHAMPIONNAT DE FRANCE : 16me 
  de finale</font></b></p>
<?php
require ("connect.php") ;
 ?>
<?php  
 
    //ex�cution de la requ�te:
    $requete = mysql_query( "SELECT *  FROM bdpf ORDER BY id" ) ;
 
    //affichage des donn�es:
    while( $result = mysql_fetch_object( $requete ) )
    {
       echo("<div align=\"center\">".$result->id." <a href=\"modif2_16me.php?idPersonne=".$result->id."&annee=$annee\">modifier</a><br>\n") ;
    }
  ?>
   <?php
 }
mysql_close(); // D�connexion de MySQL
?>
</body>
</html>