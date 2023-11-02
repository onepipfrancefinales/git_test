<?php
if ($comite=="fem" OR $comite=="bal" OR $comite=="teu" OR $comite=="phl" )
				{
				mysql_connect("sql.franceserv.fr", "onepip-france", "lavelan09"); 
				mysql_select_db("onepip-france_db4"); 
				}	
	elseif ($comite=="pl" OR $comite=="mpy" OR $comite=="pr" OR $comite=="br" 
			OR $comite=="f1" OR $comite=="fed2" OR $comite=="fed3NE" OR $comite=="fed3GS")
				{
				mysql_connect("sql.franceserv.fr", "onepip-france", "lavelan09"); 
				mysql_select_db("onepip-france-db3"); 
				}	
	else
				{
				mysql_connect("sql.franceserv.fr", "onepip-france", "lavelan09");
				mysql_select_db("onepip-france-db2"); 
				}
?>