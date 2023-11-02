<html>
  <head>
<title>modification de données en PHP :: partie 1</title>
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
<?PHP
$annee = $_GET['annee'];
echo $annee;
?>

<body>
<p align="center"><b><font color="#000000" size="4">CHAMPIONNAT DE FRANCE : 16me 
  de finale</font></b></p>
<?php
require ("connect.php") ;
 ?>
<?php  
 
    //exécution de la requête:
    $requete = mysql_query( "SELECT *  FROM bdpf$annee ORDER BY id" ) ;
 
    //affichage des données:
    while( $result = mysql_fetch_object( $requete ) )
    {
       echo("<div align=\"center\">".$result->id." <a href=\"modif2_16me.php?idPersonne=".$result->id."&annee=$annee\">modifier</a><br>\n") ;
    }
  ?>
</body>
</html>