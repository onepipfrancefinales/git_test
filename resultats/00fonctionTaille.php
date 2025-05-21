

<?php
// function taille (fed2)
//{

	
mysql_connect("sql.franceserv.fr", "onepip-france", "lavelan09"); 
mysql_select_db("onepip-france_db5"); 
	
global $HP1;
global $HP2;
global $PHP1;
global $PHP2;
global $S1P1;
global $S1P2;
global $S2P1;
global $S2P2;
global $S3P1;
global $S3P2;
global $S4P1;
global $S4P2;	
	
	
	
	$query = "	SELECT HP1, HP2, PHP1,  PHP2, S1P1, S1P2, S2P1, S2P2, S3P1, S3P2, S4P1, S4P2
				FROM taille
				WHERE comite='fed2' ";
					$result = mysql_query($query);
						while ($row = mysql_fetch_array($result))
							{ 
							$HP1= $row[0];
							$HP2= $row[1];
							$PHP1= $row[2];
							$PHP2= $row[3];
							$S1P1= $row[4];
							$S1P2= $row[5];
							$S2P1= $row[6];
							$S2P2= $row[7];
							$S3P1= $row[8];
							$S3P2= $row[9];
							$S4P1= $row[10];
							$S4P2= $row[11];
							
							}
							
							echo $HP1; echo "<br/>";
							echo $HP2; echo "<br/>";
							
	//mysql_close();		

}

?>
