<html>
<head>
<title>Untitled Document</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
</head>

<body bgcolor="#FFFFFF" text="#000000">


<?php 
$comite = $_GET['comiteResultat'];
echo $comite;

$phpcomite_divisions = "php".''.$comite.''."_divisions";
echo $phpcomite_divisions;
?>


<?php 	
	if ($comite=="fem" OR $comite=="bal" OR $comite=="teu" OR $comite=="phl" )
				require ("../../connect/connection4.php");	
	elseif ($comite=="pl" OR $comite=="mpy" OR $comite=="pr" OR $comite=="br")
				require ("../../connect/connection3.php");	
	else
				require ("../../connect/connection2.php");

?>

<?php 
$query = "	SELECT id, nom, codeFFR
			FROM $phpcomite_divisions
			WHERE id < 9300  
			ORDER BY id";
?>
<table width="100%" align="center">
  <tr> 
    <td width="33%"> 	
        <ul class="menu-demo2" >
          <li><a href="#"><b>Territoriales</b></a> 
			<ul> 					 
<?php					 
		$result = mysql_query($query) or die (mysql_error());
		while($row = mysql_fetch_array($result))
			{                             
			$id=$row[0];
			$nom=$row[1];
			$codeFFR=$row[2];
?>			
				<li>
				<a href="resultat.php?codeFFR=<?php echo $codeFFR; ?>" target="_blank"><?php echo $nom; ?></a>
				</li>
<?php	
			}
?>
				
				</ul>
			</li>
        </ul>
	</td>
</table>

</body>
</html>
