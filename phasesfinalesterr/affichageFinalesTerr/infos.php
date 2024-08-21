<br> <font color="#000000" size="5">Nous de disposons pas des phases finales antèrieure 
&agrave; la saison 2010, en revanche vous pouvez consulter les différents 
champions du comité 
<?php echo $comiteNom;

$sigle = "(".strtoupper($comite).")";
//echo $sigle;

require '../../connect1/connection1.php';


nomComite ($sigle, 0, $bdd);
//echo $idComite;
?>
</font>.<br>
<a href="../../palmares/palmTerritorial/tableauPalmTerr.php?paramIdComite=<?php echo $idComite; ?>"><br>
<font size="5" face="Arial, Helvetica, sans-serif"><b><font color="#FF0000">Palmarès 
du comité</font></b></font></a><br>
<br>

<br>
<br>
<br>
<hr />

<p>
	<?php require("../../pub/pub1.php"); ?>
</p>

