
<?php
mysql_connect("sql.franceserv.fr", "onepip-france", "lavelan09"); // Connexion � MySQL
mysql_select_db("onepip-france_db5"); // S�lection de la base onepip

$query = " 	SELECT division
			FROM divisions
			WHERE id=$id ";
			
			$result=mysql_query($query);
			while ($row=mysql_fetch_array($result))
				{
				$nomDivision=$row[0];
				}

?>

<table width="1460" border="0" height="22" align="left">
  <tr> 
    <td width="730" height="15">
      <div align="center"><b><a href="http://francefinalesrugby.franceserv.com/divisions/pagePalmares.php?division=<?php echo $id;?>" target="_top"><font size="5" color="#000000">Palmarès 
        champions de France <?php echo $nomDivision ;?></font></a></b></div>
    </td>
    <td width="730" height="15" valign="top">
      <div align="center"><b><a href="http://francefinalesrugby.franceserv.com/divisions/pagePalmares.php?division=<?php echo $id;?>" target="_top"><font size="5" color="#000000">Palmarès 
        champions de France <?php echo $nomDivision ;?>
        </font></a></b></div>
    </td>
  </tr>
  <tr> 
    <td width="730" height="15"> 
              <?php require("../../resultats/pub12.php"); ?>
           </td>
    <td width="730" height="15" valign="top"> 
             <?php   require ("../../resultats/pub5.php");   ?>
         </td>
  </tr>
</table>
</body>
</html>
