<?php
if ($comite=="phpfem" OR $comite=="phpbal" OR $comite=="phpteu" OR $comite=="phpphl" )
				require ("connection4.php");	
	elseif ($comite=="phppl" OR $comite=="phppmpy" OR $comite=="phppr" OR $comite=="phpbr")
				require ("connection3.php");	
	else
				require ("connection2.php");
?>