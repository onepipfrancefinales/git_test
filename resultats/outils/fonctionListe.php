 
<html>
<head>
<title>Untitled Document</title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
</head>

<body bgcolor="#FFFFFF" text="#000000">
<div align="center">
<div align="left"></div>
</div>
<div align="center"> </div>
<div align="center"></div>
<div align="center">
<table width="924" border="0" cellspacing="0">
    <tr> 
      <td colspan="4" height="17" > 
        <div align="left"><font size="4"><b>
          <?php

$phpcomite_matchs="php".$comite."_matchs";
$phpcomite_journees="php".$comite."_journees";
$phpcomite_divisions ="php".$comite."_divisions";




$query = "	SELECT j.id_champ, d.nom, j.date_prevue
			FROM  $phpcomite_journees j
			INNER JOIN $phpcomite_divisions d ON d.id=j.id_champ
			WHERE j.numero='1' 
			ORDER BY j.id";
			$result = 	mysql_query($query);
         		while($row = mysql_fetch_array($result))
						{    	
								
								$date = $row[2];
								echo $comite.' '.$row[0].' '.$row[1]."<br>";
						}
	echo "<br>";
?>



















      