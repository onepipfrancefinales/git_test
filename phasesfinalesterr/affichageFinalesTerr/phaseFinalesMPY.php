<?php
//if ($comite=="mpy" )
//	{
	 $phpmpy_pfterr = "phpmpy_pf".''.$annee;
				
	 include ("hautindexPage.php");
						
	 $reponse  = $bdd->query("
				SELECT type
				FROM $phpmpy_pfterr
				WHERE  division=$division");
				
	 while ($row = $reponse->fetch())
					{
					 $type=$row[0];
					}
			//echo "type : ".''.$type;				
			//$type=15;
								
								//********   Quarts Demi Finale  *******
									if ($type==14)
										{
										 include ("quarts.php");
										}
										
								//********   Quarts(AR) Demi(AR) Finale  *******	
									elseif ($type==15)
										{
										 include ("quartDemiAR.php");
										}
								
								//********   Barrage(8 barragistes) Quarts demi finale *******		
									elseif ($type==13)
										{
										 include ("barrages8Quarts.php");
										}
										
								//********   Barrage(12 barragistes) Quarts demi finale *******		
									elseif ($type==16)
										{
										 include ("barrages12Quarts.php");
										}
								
								//********  huitiemes Quarts demi finale *******			
									elseif ($type==17)
										{
										 include ("barrages8Quarts.php");
										}
//	}
?>