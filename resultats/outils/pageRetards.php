<?php
mysql_connect("sql.franceserv.fr", "onepip-france", "lavelan09"); 
mysql_select_db("onepip-france_db5");
?>
<?php
$query = "	SELECT comite
			FROM  comite			
			
			ORDER BY id";			
				
				$result = 	mysql_query($query);
				while($row = mysql_fetch_array($result))
					{    		
					echo $row[0];				
					$comite=$row[0];
					    include ("testA.php");	
					//	$i=$i+1;
					//	echo $i;
				   require ("fonctionRencontresSansResultat.php");
					echo $comite;
					ECHO "fin".''.$i;
					}
	
?>