 

<body bgcolor="#FFFFFF" text="#000000">

<div align="left">


          <?php

$phpcomite_journees="php".$comite."_journees";
$phpcomite_divisions ="php".$comite."_divisions";




$query = "	SELECT j.id_champ, d.nom, j.date_prevue, j.numero
			FROM  $phpcomite_journees j
			INNER JOIN $phpcomite_divisions d ON d.id=j.id_champ
			WHERE j.numero > 0
			ORDER BY j.id";
			$result = 	mysql_query($query);
         		while($row = mysql_fetch_array($result))
						{    	
								$date = substr($row[2], 0,10);
								if ($date == $dateDeLaCompet )
									{
									echo $comite.' '.$row[0].' '.$row[1].' '.$date.''." Journée ".''.$row[3]. "<br>";
									}
								
						}
	echo "<br>";
?>
</div>


















      