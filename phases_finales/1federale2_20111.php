<?php $annee=$_GET['variable_1'];?>
  
<?php
if ($annee==2011)
{
$clubA1601 = 'Arras (FL)';
$clubA1602 = 'Vichy  (AU)';
$clubA1603 = 'Rennes (BR)';
$clubA1604 = 'Compiegne (IDF)';
$clubA1605 = 'Clermont Cournon (AU)';
$clubA1606 = 'Boulogne Billancourt (IDF)';
$clubA1607 = 'Beaune (BG)';
$clubA1608 = 'Gennevilliers (IDF)';
$clubA1609 = 'Chambery (AP)';
$clubA1610 = 'Montelimar (DA)';
$clubA1611 = 'Beaurepaire (LY)';
$clubA1612 = 'La Voulte (DA)';
$clubA1613 = 'Marseille Vitrolles (PR)';
$clubA1614 = 'Montmelian (AP)';
$clubA1615 = 'Saint Rafael Frejus (CAZ)';
$clubA1616 = 'Vienne (LY)';
$clubA1617 = 'Nimes (PR)';
$clubA1618 = 'Castelsarrasin (MPY)';
$clubA1619 = 'Lombez Samatan (AB)';
$clubA1620 = 'Decazeville (MPY)';
$clubA1621 = 'Rodez (MPY)';
$clubA1622 = 'ES Catalane (R)';
$clubA1623 = 'Vallee de Girou (MPY)';
$clubA1624 = 'Agde (LD)';
$clubA1625 = 'Hagetmau (CBL)';
$clubA1626 = 'Cognac (PCH)';
$clubA1627 = 'Bizanos (BE)';
$clubA1628 = 'Belves (PA)';
$clubA1629 = 'St Jean d Angely (PCH)';
$clubA1630 = 'Hendaye (CBL)';
$clubA1631 = 'Rochefort (PCH)';
$clubA1632 = 'Bagneres (AB)';




}
else
{
$clubA1601 = '1er poule 1';
$clubA1602 = '4me poule 2';
$clubA1603 = '2me poule 1';
$clubA1604 = '3me poule 2';
$clubA1605 = '3me poule 1';
$clubA1606 = '2me poule 2';
$clubA1607 = '4me poule 1';
$clubA1608 = '1er poule 2';
$clubA1609 = '1er poule 3';
$clubA1610 = '4me poule 4';
$clubA1611 = '2me poule 3';
$clubA1612 = '3me poule 4';
$clubA1613 = '3me poule 3';
$clubA1614 = '2me poule 4';
$clubA1615 = '4me poule 3';
$clubA1616 = '1er poule 4';
$clubA1617 = '1er poule 5';
$clubA1618 = '4me poule 6';
$clubA1619 = '2me poule 5';
$clubA1620 = '3me poule 6';
$clubA1621 = '3me poule 5';
$clubA1622 = '2me poule 6';
$clubA1623 = '4me poule 5';
$clubA1624 = '1er poule 6';
$clubA1625 = '1er poule 7';
$clubA1626 = '4me poule 8';
$clubA1627 = '2me poule 7';
$clubA1628 = '3me poule 8';
$clubA1629 = '3me poule 7';
$clubA1630 = '2me poule 8';
$clubA1631 = '4me poule 7';
$clubA1632 = '1er poule 8';
}

?>

 

<body bgcolor="#FFFFFF">
<div id="Layer1" style="position:absolute; width:200px; height:20px; z-index:3; left: 20px; top: 240px; background-image:  url(../unique3.jpg); layer-background-image:  url(../unique3.jpg); border: 1px none #000000"> 
  <div align="center"> 
    <div id="Layer9" style="position:absolute; width:200px; height:20px; z-index:2; left: 0px; top: 20px; background-image:  url(../unique3.jpg); layer-background-image:  url(../unique3.jpg); border: 1px none #000000"> 
      <div align="center"><font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="2"><b> 
        <?php 

	
	echo $clubA1602;
  ?>
        </b></font></div>
    </div>
    <div id="Layer10" style="position:absolute; width:30px; height:20px; z-index:3; left: 200px; top: 1px; background-image:  url(../result2.jpg); layer-background-image:  url(../result2.jpg); border: 1px none #000000"> 
      <div align="center"><font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="3"><b> 
        <?php
mysql_connect("sql.franceserv.fr", "onepip-france", "lavelan09");
mysql_select_db("onepip-france-db1");
$reponse = mysql_query("SELECT * FROM bdpf$annee WHERE id='150'");

while ($donnees = mysql_fetch_array($reponse) )
{ 
?>
        <?php  $A1601=$donnees['A1601'];?>
        <?php echo $A1601;?>
        <?php
}
?>
        </b></font></div>
    </div>
    <div id="Layer10" style="position:absolute; width:30px; height:20px; z-index:3; left: 200px; top: 21px; background-image:  url(../result2.jpg); layer-background-image:  url(../result2.jpg); border: 1px none #000000"> 
      <div align="center"><font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="3"><b> 
        <?php
mysql_connect("sql.franceserv.fr", "onepip-france", "lavelan09");
mysql_select_db("onepip-france-db1");
$reponse = mysql_query("SELECT * FROM bdpf$annee WHERE id='150'");

while ($donnees = mysql_fetch_array($reponse) )
{ 
?>
        <?php $A1602=$donnees['A1602'];?>
        <?php echo $A1602;?>
        <?php
}
?>
        </b></font></div>
    </div>
    <font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="2"><b> 
    <?php 

	
	echo $clubA1601;
  ?>
    </b></font>
    <div id="Layer10" style="position:absolute; width:30px; height:20px; z-index:3; left: 230px; top: 1px; background-image:  url(../result2.jpg); layer-background-image:  url(../result2.jpg); border: 1px none #000000"> 
      <div align="center"><font color="#FFCC00" face="Geneva, Arial, Helvetica, san-serif"size="3"><b> 
        <?php
mysql_connect("sql.franceserv.fr", "onepip-france", "lavelan09");
mysql_select_db("onepip-france-db1");
$reponse = mysql_query("SELECT * FROM bdpf$annee WHERE id='130'");

while ($donnees = mysql_fetch_array($reponse) )
{ 
?>
        <?php $R1601= $donnees['R1601'];?>
        <?php echo $R1601;?>
        <?php
}
?>
        </b></font></div>
    </div>
    <font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="2"><b> 
    </b></font> 
    <div id="Layer10" style="position:absolute; width:30px; height:20px; z-index:3; left: 230px; top: 21px; background-image:  url(../result2.jpg); layer-background-image:  url(../result2.jpg); border: 1px none #000000"> 
      <div align="center"><font color="#FFCC00" face="Geneva, Arial, Helvetica, san-serif"size="3"><b> 
        <?php
mysql_connect("sql.franceserv.fr", "onepip-france", "lavelan09");
mysql_select_db("onepip-france-db1");
$reponse = mysql_query("SELECT * FROM bdpf$annee WHERE id='130'");

while ($donnees = mysql_fetch_array($reponse) )
{ 
?>
        <?php $R1602=$donnees['R1602'];?>
        <?php echo $R1602;?>
        <?php
}
?>
        </b></font></div>
    </div>
    <font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="2"><b> 
    </b></font></div>
</div>
<div id="Layer1" style="position:absolute; width:200px; height:20px; z-index:3; left: 20px; top: 280px; background-image:  url(../unique3.jpg); layer-background-image:  url(../unique3.jpg); border: 1px none #000000"> 
  <div align="center"> 
    <div id="Layer10" style="position:absolute; width:30px; height:20px; z-index:3; left: 200px; top: 1px; background-image:  url(../result2.jpg); layer-background-image:  url(../result2.jpg); border: 1px none #000000"> 
      <div align="center"><font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="3"><b> 
        <?php
mysql_connect("sql.franceserv.fr", "onepip-france", "lavelan09");
mysql_select_db("onepip-france-db1");
$reponse = mysql_query("SELECT * FROM bdpf$annee WHERE id='150'");

while ($donnees = mysql_fetch_array($reponse) )
{ 
?>
        <?php  $A1603=$donnees['A1603'];?>
        <?php echo $A1603;?>
        <?php
}
?>
        </b></font></div>
    </div>
    <div id="Layer10" style="position:absolute; width:30px; height:20px; z-index:3; left: 200px; top: 21px; background-image:  url(../result2.jpg); layer-background-image:  url(../result2.jpg); border: 1px none #000000"> 
      <div align="center"><font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="3"><b> 
        <?php
mysql_connect("sql.franceserv.fr", "onepip-france", "lavelan09");
mysql_select_db("onepip-france-db1");
$reponse = mysql_query("SELECT * FROM bdpf$annee WHERE id='150'");

while ($donnees = mysql_fetch_array($reponse) )
{ 
?>
        <?php $A1604=$donnees['A1604'];?>
        <?php echo $A1604;?>
        <?php
}
?>
        </b></font></div>
    </div>
    <div id="Layer9" style="position:absolute; width:200px; height:20px; z-index:2; left: 0px; top: 20px; background-image:  url(../unique3.jpg); layer-background-image:  url(../unique3.jpg); border: 1px none #000000"> 
      <div align="center"><font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="2"><b> 
        <?php 

	
	echo $clubA1604;
  ?>
        </b></font></div>
    </div>
    <font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="2"><b> 
    <?php 

	
	echo $clubA1603;
  ?>
    </b></font>
    <div id="Layer10" style="position:absolute; width:30px; height:20px; z-index:3; left: 230px; top: 1px; background-image:  url(../result2.jpg); layer-background-image:  url(../result2.jpg); border: 1px none #000000"> 
      <div align="center"><font color="#FFCC00" face="Geneva, Arial, Helvetica, san-serif"size="3"><b> 
        <?php
mysql_connect("sql.franceserv.fr", "onepip-france", "lavelan09");
mysql_select_db("onepip-france-db1");
$reponse = mysql_query("SELECT * FROM bdpf$annee WHERE id='130'");

while ($donnees = mysql_fetch_array($reponse) )
{ 
?>
        <?php $R1603= $donnees['R1603'];?>
        <?php echo $R1603;?>
        <?php
}
?>
        </b></font></div>
    </div>
    <font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="2"><b> 
    </b></font> 
    <div id="Layer10" style="position:absolute; width:30px; height:20px; z-index:3; left: 230px; top: 21px; background-image:  url(../result2.jpg); layer-background-image:  url(../result2.jpg); border: 1px none #000000"> 
      <div align="center"><font color="#FFCC00" face="Geneva, Arial, Helvetica, san-serif"size="3"><b> 
        <?php
mysql_connect("sql.franceserv.fr", "onepip-france", "lavelan09");
mysql_select_db("onepip-france-db1");
$reponse = mysql_query("SELECT * FROM bdpf$annee WHERE id='130'");

while ($donnees = mysql_fetch_array($reponse) )
{ 
?>
        <?php $A1604=$donnees['R1604'];?>
        <?php echo $R1604;?>
        <?php
}
?>
        </b></font></div>
    </div>
    <font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="2"><b> 
    </b></font><font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="2"><b> 
    </b></font></div>
</div>
<div id="Layer1" style="position:absolute; width:200px; height:20px; z-index:3; left: 20px; top: 320px; background-image:  url(../unique4.jpg); layer-background-image:  url(../unique4.jpg); border: 1px none #000000"> 
  <div align="center"> 
    <div id="Layer10" style="position:absolute; width:30px; height:20px; z-index:3; left: 200px; top: 1px; background-image:  url(../result22.jpg); layer-background-image:  url(../result22.jpg); border: 1px none #000000"> 
      <div align="center"><font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="3"><b> 
        <?php
mysql_connect("sql.franceserv.fr", "onepip-france", "lavelan09");
mysql_select_db("onepip-france-db1");
$reponse = mysql_query("SELECT * FROM bdpf$annee WHERE id='150'");

while ($donnees = mysql_fetch_array($reponse) )
{ 
?>
        <?php  $A1605=$donnees['A1605'];?>
        <?php echo $A1605;?>
        <?php
}
?>
        </b></font></div>
    </div>
    <div id="Layer10" style="position:absolute; width:30px; height:20px; z-index:3; left: 200px; top: 21px; background-image:  url(../result22.jpg); layer-background-image:  url(../result22.jpg); border: 1px none #000000"> 
      <div align="center"><font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="3"><b> 
        <?php
mysql_connect("sql.franceserv.fr", "onepip-france", "lavelan09");
mysql_select_db("onepip-france-db1");
$reponse = mysql_query("SELECT * FROM bdpf$annee WHERE id='150'");

while ($donnees = mysql_fetch_array($reponse) )
{ 
?>
        <?php $A1606=$donnees['A1606'];?>
        <?php echo $A1606;?>
        <?php
}
?>
        </b></font></div>
    </div>
    <div id="Layer9" style="position:absolute; width:200px; height:20px; z-index:2; left: 0px; top: 20px; background-image:  url(../unique4.jpg); layer-background-image:  url(../unique4.jpg); border: 1px none #000000"> 
      <div align="center"><font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="2"><b> 
        <?php 

	
	echo $clubA1606;
  ?>
        </b></font></div>
    </div>
    <font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="2"><b> 
    <?php 

	
	echo $clubA1605;
  ?>
    </b></font>
    <div id="Layer10" style="position:absolute; width:30px; height:20px; z-index:3; left: 231px; top: 1px; background-image:  url(../result22.jpg); layer-background-image:  url(../result22.jpg); border: 1px none #000000"> 
      <div align="center"><font color="#FFCC00" face="Geneva, Arial, Helvetica, san-serif"size="3"><b> 
        <?php
mysql_connect("sql.franceserv.fr", "onepip-france", "lavelan09");
mysql_select_db("onepip-france-db1");
$reponse = mysql_query("SELECT * FROM bdpf$annee WHERE id='130'");

while ($donnees = mysql_fetch_array($reponse) )
{ 
?>
        <?php  $R1605=$donnees['R1605'];?>
        <?php echo $R1605;?>
        <?php
}
?>
        </b></font></div>
    </div>
    <font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="2"><b> 
    </b></font> 
    <div id="Layer10" style="position:absolute; width:30px; height:20px; z-index:3; left: 231px; top: 21px; background-image:  url(../result22.jpg); layer-background-image:  url(../result22.jpg); border: 1px none #000000"> 
      <div align="center"><font color="#FFCC00" face="Geneva, Arial, Helvetica, san-serif"size="3"><b> 
        <?php
mysql_connect("sql.franceserv.fr", "onepip-france", "lavelan09");
mysql_select_db("onepip-france-db1");
$reponse = mysql_query("SELECT * FROM bdpf$annee WHERE id='130'");

while ($donnees = mysql_fetch_array($reponse) )
{ 
?>
        <?php $R1606=$donnees['R1606'];?>
        <?php echo $R1606;?>
        <?php
}
?>
        </b></font></div>
    </div>
    <font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="2"><b> 
    </b></font><font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="2"><b> 
    </b></font><font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="2"><b> 
    </b></font></div>
</div>
<div id="Layer1" style="position:absolute; width:200px; height:20px; z-index:3; left: 20px; top: 360px; background-image:  url(../unique4.jpg); layer-background-image:  url(../unique4.jpg); border: 1px none #000000"> 
  <div align="center"> 
    <div id="Layer10" style="position:absolute; width:30px; height:20px; z-index:3; left: 200px; top: 1px; background-image:  url(../result22.jpg); layer-background-image:  url(../result22.jpg); border: 1px none #000000"> 
      <div align="center"><font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="3"><b> 
        <?php
mysql_connect("sql.franceserv.fr", "onepip-france", "lavelan09");
mysql_select_db("onepip-france-db1");
$reponse = mysql_query("SELECT * FROM bdpf$annee WHERE id='150'");

while ($donnees = mysql_fetch_array($reponse) )
{ 
?>
        <?php  $A1607=$donnees['A1607'];?>
        <?php echo $A1607;?>
        <?php
}
?>
        </b></font></div>
    </div>
    <div id="Layer10" style="position:absolute; width:30px; height:20px; z-index:3; left: 200px; top: 21px; background-image:  url(../result22.jpg); layer-background-image:  url(../result22.jpg); border: 1px none #000000"> 
      <div align="center"><font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="3"><b> 
        <?php
mysql_connect("sql.franceserv.fr", "onepip-france", "lavelan09");
mysql_select_db("onepip-france-db1");
$reponse = mysql_query("SELECT * FROM bdpf$annee WHERE id='150'");

while ($donnees = mysql_fetch_array($reponse) )
{ 
?>
        <?php $A1608=$donnees['A1608'];?>
        <?php echo $A1608;?>
        <?php
}
?>
        </b></font></div>
    </div>
    <div id="Layer9" style="position:absolute; width:200px; height:20px; z-index:2; left: 0px; top: 20px; background-image:  url(../unique4.jpg); layer-background-image:  url(../unique4.jpg); border: 1px none #000000"> 
      <div align="center"><font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="2"><b> 
        <?php 

	
	echo $clubA1608;
  ?>
        </b></font></div>
    </div>
    <font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="2"><b> 
    <?php 

	
	echo $clubA1607;
  ?>
    </b></font> 
    <div id="Layer10" style="position:absolute; width:30px; height:20px; z-index:3; left: 231px; top: 1px; background-image:  url(../result22.jpg); layer-background-image:  url(../result22.jpg); border: 1px none #000000"> 
      <div align="center"><font color="#FFCC00" face="Geneva, Arial, Helvetica, san-serif"size="3"><b> 
        <?php
mysql_connect("sql.franceserv.fr", "onepip-france", "lavelan09");
mysql_select_db("onepip-france-db1");
$reponse = mysql_query("SELECT * FROM bdpf$annee WHERE id='130'");

while ($donnees = mysql_fetch_array($reponse) )
{ 
?>
        <?php  $R1607=$donnees['R1607'];?>
        <?php echo $R1607;?>
        <?php
}
?>
        </b></font></div>
    </div>
    <font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="2"><b> 
    </b></font> 
    <div id="Layer10" style="position:absolute; width:30px; height:20px; z-index:3; left: 231px; top: 21px; background-image:  url(../result22.jpg); layer-background-image:  url(../result22.jpg); border: 1px none #000000"> 
      <div align="center"><font color="#FFCC00" face="Geneva, Arial, Helvetica, san-serif"size="3"><b> 
        <?php
mysql_connect("sql.franceserv.fr", "onepip-france", "lavelan09");
mysql_select_db("onepip-france-db1");
$reponse = mysql_query("SELECT * FROM bdpf$annee WHERE id='130'");

while ($donnees = mysql_fetch_array($reponse) )
{ 
?>
        <?php $R1608=$donnees['R1608'];?>
        <?php echo $R1608;?>
        <?php
}
?>
        </b></font></div>
    </div>
    <font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="2"><b> 
    </b></font><font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="2"><b> 
    </b></font><font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="2"><b> 
    </b></font></div>
</div>
<div id="Layer1" style="position:absolute; width:200px; height:20px; z-index:3; left: 20px; top: 400px; background-image:  url(../unique3.jpg); layer-background-image:  url(../unique3.jpg); border: 1px none #000000"> 
  <div align="center">
    <div id="Layer10" style="position:absolute; width:30px; height:20px; z-index:3; left: 200px; top: 1px; background-image:  url(../result2.jpg); layer-background-image:  url(../result2.jpg); border: 1px none #000000"> 
      <div align="center"><font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="3"><b> 
        <?php
mysql_connect("sql.franceserv.fr", "onepip-france", "lavelan09");
mysql_select_db("onepip-france-db1");
$reponse = mysql_query("SELECT * FROM bdpf$annee WHERE id='150'");

while ($donnees = mysql_fetch_array($reponse) )
{ 
?>
        <?php  $A1609=$donnees['A1609'];?>
        <?php echo $A1609;?>
        <?php
}
?>
        </b></font></div>
    </div>
    <div id="Layer10" style="position:absolute; width:30px; height:20px; z-index:3; left: 200px; top: 21px; background-image:  url(../result2.jpg); layer-background-image:  url(../result2.jpg); border: 1px none #000000"> 
      <div align="center"><font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="3"><b> 
        <?php
mysql_connect("sql.franceserv.fr", "onepip-france", "lavelan09");
mysql_select_db("onepip-france-db1");
$reponse = mysql_query("SELECT * FROM bdpf$annee WHERE id='150'");

while ($donnees = mysql_fetch_array($reponse) )
{ 
?>
        <?php $A1610=$donnees['A1610'];?>
        <?php echo $A1610;?>
        <?php
}
?>
        </b></font></div>
    </div>
    <div id="Layer9" style="position:absolute; width:200px; height:20px; z-index:2; left: 0px; top: 20px; background-image:  url(../unique3.jpg); layer-background-image:  url(../unique3.jpg); border: 1px none #000000"> 
      <div align="center"><font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="2"><b> 
        <?php 

	
	echo $clubA1610;
  ?>
        </b></font></div>
    </div>
    <font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="2"><b> 
    <?php 

	
	echo $clubA1609;
  ?>
    </b></font> 
    <div id="Layer10" style="position:absolute; width:30px; height:20px; z-index:3; left: 230px; top: 1px; background-image:  url(../result2.jpg); layer-background-image:  url(../result2.jpg); border: 1px none #000000"> 
      <div align="center"><font color="#FFCC00" face="Geneva, Arial, Helvetica, san-serif"size="3"><b> 
        <?php
mysql_connect("sql.franceserv.fr", "onepip-france", "lavelan09");
mysql_select_db("onepip-france-db1");
$reponse = mysql_query("SELECT * FROM bdpf$annee WHERE id='130'");

while ($donnees = mysql_fetch_array($reponse) )
{ 
?>
        <?php $R1609= $donnees['R1609'];?>
        <?php echo $R1609;?>
        <?php
}
?>
        </b></font></div>
    </div>
    <font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="2"><b> 
    </b></font> 
    <div id="Layer10" style="position:absolute; width:30px; height:20px; z-index:3; left: 230px; top: 21px; background-image:  url(../result2.jpg); layer-background-image:  url(../result2.jpg); border: 1px none #000000"> 
      <div align="center"><font color="#FFCC00" face="Geneva, Arial, Helvetica, san-serif"size="3"><b> 
        <?php
mysql_connect("sql.franceserv.fr", "onepip-france", "lavelan09");
mysql_select_db("onepip-france-db1");
$reponse = mysql_query("SELECT * FROM bdpf$annee WHERE id='130'");

while ($donnees = mysql_fetch_array($reponse) )
{ 
?>
        <?php $A1610=$donnees['R1610'];?>
        <?php echo $R1610;?>
        <?php
}
?>
        </b></font></div>
    </div>
    <font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="2"><b> 
    </b></font><font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="2"><b> 
    </b></font></div>
</div>
<div id="Layer1" style="position:absolute; width:200px; height:20px; z-index:3; left: 20px; top: 440px; background-image:  url(../unique3.jpg); layer-background-image:  url(../unique3.jpg); border: 1px none #000000"> 
  <div align="center"> 
    <div id="Layer10" style="position:absolute; width:30px; height:20px; z-index:3; left: 200px; top: 1px; background-image:  url(../result2.jpg); layer-background-image:  url(../result2.jpg); border: 1px none #000000"> 
      <div align="center"><font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="3"><b> 
        <?php
mysql_connect("sql.franceserv.fr", "onepip-france", "lavelan09");
mysql_select_db("onepip-france-db1");
$reponse = mysql_query("SELECT * FROM bdpf$annee WHERE id='150'");

while ($donnees = mysql_fetch_array($reponse) )
{ 
?>
        <?php  $A1611=$donnees['A1611'];?>
        <?php echo $A1611;?>
        <?php
}
?>
        </b></font></div>
    </div>
    <div id="Layer10" style="position:absolute; width:30px; height:20px; z-index:3; left: 200px; top: 21px; background-image:  url(../result2.jpg); layer-background-image:  url(../result2.jpg); border: 1px none #000000"> 
      <div align="center"><font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="3"><b> 
        <?php
mysql_connect("sql.franceserv.fr", "onepip-france", "lavelan09");
mysql_select_db("onepip-france-db1");
$reponse = mysql_query("SELECT * FROM bdpf$annee WHERE id='150'");

while ($donnees = mysql_fetch_array($reponse) )
{ 
?>
        <?php $A1612=$donnees['A1612'];?>
        <?php echo $A1612;?>
        <?php
}
?>
        </b></font></div>
    </div>
    <div id="Layer9" style="position:absolute; width:200px; height:20px; z-index:2; left: 0px; top: 20px; background-image:  url(../unique3.jpg); layer-background-image:  url(../unique3.jpg); border: 1px none #000000"> 
      <div align="center"><font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="2"><b> 
        <?php 

	
	echo $clubA1612;
  ?>
        </b></font></div>
    </div>
    <font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="2"><b> 
    <?php 

	
	echo $clubA1611;
  ?>
    </b></font> 
    <div id="Layer10" style="position:absolute; width:30px; height:20px; z-index:3; left: 230px; top: 1px; background-image:  url(../result2.jpg); layer-background-image:  url(../result2.jpg); border: 1px none #000000"> 
      <div align="center"><font color="#FFCC00" face="Geneva, Arial, Helvetica, san-serif"size="3"><b> 
        <?php
mysql_connect("sql.franceserv.fr", "onepip-france", "lavelan09");
mysql_select_db("onepip-france-db1");
$reponse = mysql_query("SELECT * FROM bdpf$annee WHERE id='130'");

while ($donnees = mysql_fetch_array($reponse) )
{ 
?>
        <?php $R1611= $donnees['R1611'];?>
        <?php echo $R1611;?>
        <?php
}
?>
        </b></font></div>
    </div>
    <font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="2"><b> 
    </b></font> 
    <div id="Layer10" style="position:absolute; width:30px; height:20px; z-index:3; left: 230px; top: 21px; background-image:  url(../result2.jpg); layer-background-image:  url(../result2.jpg); border: 1px none #000000"> 
      <div align="center"><font color="#FFCC00" face="Geneva, Arial, Helvetica, san-serif"size="3"><b> 
        <?php
mysql_connect("sql.franceserv.fr", "onepip-france", "lavelan09");
mysql_select_db("onepip-france-db1");
$reponse = mysql_query("SELECT * FROM bdpf$annee WHERE id='130'");

while ($donnees = mysql_fetch_array($reponse) )
{ 
?>
        <?php $A1612=$donnees['R1612'];?>
        <?php echo $R1612;?>
        <?php
}
?>
        </b></font></div>
    </div>
    <font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="2"><b> 
    </b></font><font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="2"><b> 
    </b></font></div>
</div>
<div id="Layer1" style="position:absolute; width:200px; height:20px; z-index:3; left: 20px; top: 480px; background-image:  url(../unique4.jpg); layer-background-image:  url(../unique4.jpg); border: 1px none #000000"> 
  <div align="center"> 
    <div id="Layer10" style="position:absolute; width:30px; height:20px; z-index:3; left: 200px; top: 1px; background-image:  url(../result22.jpg); layer-background-image:  url(../result22.jpg); border: 1px none #000000"> 
      <div align="center"><font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="3"><b> 
        <?php
mysql_connect("sql.franceserv.fr", "onepip-france", "lavelan09");
mysql_select_db("onepip-france-db1");
$reponse = mysql_query("SELECT * FROM bdpf$annee WHERE id='150'");

while ($donnees = mysql_fetch_array($reponse) )
{ 
?>
        <?php  $A1613=$donnees['A1613'];?>
        <?php echo $A1613;?>
        <?php
}
?>
        </b></font></div>
    </div>
    <div id="Layer10" style="position:absolute; width:30px; height:20px; z-index:3; left: 200px; top: 21px; background-image:  url(../result22.jpg); layer-background-image:  url(../result22.jpg); border: 1px none #000000"> 
      <div align="center"><font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="3"><b> 
        <?php
mysql_connect("sql.franceserv.fr", "onepip-france", "lavelan09");
mysql_select_db("onepip-france-db1");
$reponse = mysql_query("SELECT * FROM bdpf$annee WHERE id='150'");

while ($donnees = mysql_fetch_array($reponse) )
{ 
?>
        <?php $A1614=$donnees['A1614'];?>
        <?php echo $A1614;?>
        <?php
}
?>
        </b></font></div>
    </div>
    <div id="Layer9" style="position:absolute; width:200px; height:20px; z-index:2; left: 0px; top: 20px; background-image:  url(../unique4.jpg); layer-background-image:  url(../unique4.jpg); border: 1px none #000000"> 
      <div align="center"><font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="2"><b> 
        <?php 

	
	echo $clubA1614;
  ?>
        </b></font></div>
    </div>
    <font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="2"><b> 
    <?php 

	
	echo $clubA1613;
  ?>
    </b></font> 
    <div id="Layer10" style="position:absolute; width:30px; height:20px; z-index:3; left: 231px; top: 1px; background-image:  url(../result22.jpg); layer-background-image:  url(../result22.jpg); border: 1px none #000000"> 
      <div align="center"><font color="#FFCC00" face="Geneva, Arial, Helvetica, san-serif"size="3"><b> 
        <?php
mysql_connect("sql.franceserv.fr", "onepip-france", "lavelan09");
mysql_select_db("onepip-france-db1");
$reponse = mysql_query("SELECT * FROM bdpf$annee WHERE id='130'");

while ($donnees = mysql_fetch_array($reponse) )
{ 
?>
        <?php  $R1613=$donnees['R1613'];?>
        <?php echo $R1613;?>
        <?php
}
?>
        </b></font></div>
    </div>
    <font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="2"><b> 
    </b></font> 
    <div id="Layer10" style="position:absolute; width:30px; height:20px; z-index:3; left: 231px; top: 21px; background-image:  url(../result22.jpg); layer-background-image:  url(../result22.jpg); border: 1px none #000000"> 
      <div align="center"><font color="#FFCC00" face="Geneva, Arial, Helvetica, san-serif"size="3"><b> 
        <?php
mysql_connect("sql.franceserv.fr", "onepip-france", "lavelan09");
mysql_select_db("onepip-france-db1");
$reponse = mysql_query("SELECT * FROM bdpf$annee WHERE id='130'");

while ($donnees = mysql_fetch_array($reponse) )
{ 
?>
        <?php $R1614=$donnees['R1614'];?>
        <?php echo $R1614;?>
        <?php
}
?>
        </b></font></div>
    </div>
    <font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="2"><b> 
    </b></font><font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="2"><b> 
    </b></font><font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="2"><b> 
    </b></font></div>
</div>
<div id="Layer1" style="position:absolute; width:200px; height:20px; z-index:3; left: 20px; top: 520px; background-image:  url(../unique4.jpg); layer-background-image:  url(../unique4.jpg); border: 1px none #000000"> 
  <div align="center"> 
    <div id="Layer10" style="position:absolute; width:30px; height:20px; z-index:3; left: 200px; top: 1px; background-image:  url(../result22.jpg); layer-background-image:  url(../result22.jpg); border: 1px none #000000"> 
      <div align="center"><font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="3"><b> 
        <?php
mysql_connect("sql.franceserv.fr", "onepip-france", "lavelan09");
mysql_select_db("onepip-france-db1");
$reponse = mysql_query("SELECT * FROM bdpf$annee WHERE id='150'");

while ($donnees = mysql_fetch_array($reponse) )
{ 
?>
        <?php  $A1615=$donnees['A1615'];?>
        <?php echo $A1615;?>
        <?php
}
?>
        </b></font></div>
    </div>
    <div id="Layer10" style="position:absolute; width:30px; height:20px; z-index:3; left: 200px; top: 21px; background-image:  url(../result22.jpg); layer-background-image:  url(../result22.jpg); border: 1px none #000000"> 
      <div align="center"><font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="3"><b> 
        <?php
mysql_connect("sql.franceserv.fr", "onepip-france", "lavelan09");
mysql_select_db("onepip-france-db1");
$reponse = mysql_query("SELECT * FROM bdpf$annee WHERE id='150'");

while ($donnees = mysql_fetch_array($reponse) )
{ 
?>
        <?php $A1616=$donnees['A1616'];?>
        <?php echo $A1616;?>
        <?php
}
?>
        </b></font></div>
    </div>
    <div id="Layer9" style="position:absolute; width:200px; height:20px; z-index:2; left: 0px; top: 20px; background-image:  url(../unique4.jpg); layer-background-image:  url(../unique4.jpg); border: 1px none #000000"> 
      <div align="center"> <font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="2"><b> 
        <?php 

	
	echo $clubA1616;
  ?>
        </b></font></div>
    </div>
    <font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="2"><b> 
    <?php 

	
	echo $clubA1615;
  ?>
    </b></font> 
    <div id="Layer10" style="position:absolute; width:30px; height:20px; z-index:3; left: 231px; top: 1px; background-image:  url(../result22.jpg); layer-background-image:  url(../result22.jpg); border: 1px none #000000"> 
      <div align="center"><font color="#FFCC00" face="Geneva, Arial, Helvetica, san-serif"size="3"><b> 
        <?php
mysql_connect("sql.franceserv.fr", "onepip-france", "lavelan09");
mysql_select_db("onepip-france-db1");
$reponse = mysql_query("SELECT * FROM bdpf$annee WHERE id='130'");

while ($donnees = mysql_fetch_array($reponse) )
{ 
?>
        <?php  $R1615=$donnees['R1615'];?>
        <?php echo $R1615;?>
        <?php
}
?>
        </b></font></div>
    </div>
    <font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="2"><b> 
    </b></font> 
    <div id="Layer10" style="position:absolute; width:30px; height:20px; z-index:3; left: 231px; top: 21px; background-image:  url(../result22.jpg); layer-background-image:  url(../result22.jpg); border: 1px none #000000"> 
      <div align="center"><font color="#FFCC00" face="Geneva, Arial, Helvetica, san-serif"size="3"><b> 
        <?php
mysql_connect("sql.franceserv.fr", "onepip-france", "lavelan09");
mysql_select_db("onepip-france-db1");
$reponse = mysql_query("SELECT * FROM bdpf$annee WHERE id='130'");

while ($donnees = mysql_fetch_array($reponse) )
{ 
?>
        <?php $R1616=$donnees['R1616'];?>
        <?php echo $R1616;?>
        <?php
}
?>
        </b></font></div>
    </div>
    <font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="2"><b> 
    </b></font></div>
</div>
<div id="Layer1" style="position:absolute; width:200px; height:20px; z-index:3; left: 20px; top: 560px; background-image:  url(../unique3.jpg); layer-background-image:  url(../unique3.jpg); border: 1px none #000000"> 
  <div align="center"> 
    <div id="Layer10" style="position:absolute; width:30px; height:20px; z-index:3; left: 200px; top: 1px; background-image:  url(../result2.jpg); layer-background-image:  url(../result2.jpg); border: 1px none #000000"> 
      <div align="center"><font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="3"><b> 
        <?php
mysql_connect("sql.franceserv.fr", "onepip-france", "lavelan09");
mysql_select_db("onepip-france-db1");
$reponse = mysql_query("SELECT * FROM bdpf$annee WHERE id='150'");

while ($donnees = mysql_fetch_array($reponse) )
{ 
?>
        <?php  $A1617=$donnees['A1617'];?>
        <?php echo $A1617;?>
        <?php
}
?>
        </b></font></div>
    </div>
    <div id="Layer10" style="position:absolute; width:30px; height:20px; z-index:3; left: 200px; top: 21px; background-image:  url(../result2.jpg); layer-background-image:  url(../result2.jpg); border: 1px none #000000"> 
      <div align="center"><font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="3"><b> 
        <?php
mysql_connect("sql.franceserv.fr", "onepip-france", "lavelan09");
mysql_select_db("onepip-france-db1");
$reponse = mysql_query("SELECT * FROM bdpf$annee WHERE id='150'");

while ($donnees = mysql_fetch_array($reponse) )
{ 
?>
        <?php $A1618=$donnees['A1618'];?>
        <?php echo $A1618;?>
        <?php
}
?>
        </b></font></div>
    </div>
    <div id="Layer9" style="position:absolute; width:200px; height:20px; z-index:2; left: 0px; top: 20px; background-image:  url(../unique3.jpg); layer-background-image:  url(../unique3.jpg); border: 1px none #000000"> 
      <div align="center"><font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="2"><b> 
        <?php 

	
	echo $clubA1618;
  ?>
        </b></font></div>
    </div>
    <font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="2"><b> 
    <?php 

	
	echo $clubA1617;
  ?>
    </b></font> 
    <div id="Layer10" style="position:absolute; width:30px; height:20px; z-index:3; left: 230px; top: 1px; background-image:  url(../result2.jpg); layer-background-image:  url(../result2.jpg); border: 1px none #000000"> 
      <div align="center"><font color="#FFCC00" face="Geneva, Arial, Helvetica, san-serif"size="3"><b> 
        <?php
mysql_connect("sql.franceserv.fr", "onepip-france", "lavelan09");
mysql_select_db("onepip-france-db1");
$reponse = mysql_query("SELECT * FROM bdpf$annee WHERE id='130'");

while ($donnees = mysql_fetch_array($reponse) )
{ 
?>
        <?php $R1617= $donnees['R1617'];?>
        <?php echo $R1617;?>
        <?php
}
?>
        </b></font></div>
    </div>
    <font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="2"><b> 
    </b></font> 
    <div id="Layer10" style="position:absolute; width:30px; height:20px; z-index:3; left: 230px; top: 21px; background-image:  url(../result2.jpg); layer-background-image:  url(../result2.jpg); border: 1px none #000000"> 
      <div align="center"><font color="#FFCC00" face="Geneva, Arial, Helvetica, san-serif"size="3"><b> 
        <?php
mysql_connect("sql.franceserv.fr", "onepip-france", "lavelan09");
mysql_select_db("onepip-france-db1");
$reponse = mysql_query("SELECT * FROM bdpf$annee WHERE id='130'");

while ($donnees = mysql_fetch_array($reponse) )
{ 
?>
        <?php $A1618=$donnees['R1618'];?>
        <?php echo $R1618;?>
        <?php
}
?>
        </b></font></div>
    </div>
    <font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="2"><b> 
    </b></font><font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="2"><b> 
    </b></font></div>
</div>
<div id="Layer1" style="position:absolute; width:200px; height:20px; z-index:3; left: 20px; top: 600px; background-image:  url(../unique3.jpg); layer-background-image:  url(../unique3.jpg); border: 1px none #000000"> 
  <div align="center"> 
    <div id="Layer10" style="position:absolute; width:30px; height:20px; z-index:3; left: 200px; top: 1px; background-image:  url(../result2.jpg); layer-background-image:  url(../result2.jpg); border: 1px none #000000"> 
      <div align="center"><font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="3"><b> 
        <?php
mysql_connect("sql.franceserv.fr", "onepip-france", "lavelan09");
mysql_select_db("onepip-france-db1");
$reponse = mysql_query("SELECT * FROM bdpf$annee WHERE id='150'");

while ($donnees = mysql_fetch_array($reponse) )
{ 
?>
        <?php  $A1619=$donnees['A1619'];?>
        <?php echo $A1619;?>
        <?php
}
?>
        </b></font></div>
    </div>
    <div id="Layer10" style="position:absolute; width:30px; height:20px; z-index:3; left: 200px; top: 21px; background-image:  url(../result2.jpg); layer-background-image:  url(../result2.jpg); border: 1px none #000000"> 
      <div align="center"><font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="3"><b> 
        <?php
mysql_connect("sql.franceserv.fr", "onepip-france", "lavelan09");
mysql_select_db("onepip-france-db1");
$reponse = mysql_query("SELECT * FROM bdpf$annee WHERE id='150'");

while ($donnees = mysql_fetch_array($reponse) )
{ 
?>
        <?php $A1620=$donnees['A1620'];?>
        <?php echo $A1620;?>
        <?php
}
?>
        </b></font></div>
    </div>
    <div id="Layer9" style="position:absolute; width:200px; height:20px; z-index:2; left: 0px; top: 20px; background-image:  url(../unique3.jpg); layer-background-image:  url(../unique3.jpg); border: 1px none #000000"> 
      <div align="center"><font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="2"><b>
        <?php 

	
	echo $clubA1620;
  ?>
        </b></font></div>
    </div>
    <font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="2"><b> 
    <?php 

	
	echo $clubA1619;
  ?>
    </b></font> <font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="2"><b> 
    </b></font> <font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="2"><b> 
    </b></font>
    <div id="Layer10" style="position:absolute; width:30px; height:20px; z-index:3; left: 231px; top: 1px; background-image:  url(../result22.jpg); layer-background-image:  url(../result22.jpg); border: 1px none #000000"> 
      <div align="center"><font color="#FFCC00" face="Geneva, Arial, Helvetica, san-serif"size="3"><b> 
        <?php
mysql_connect("sql.franceserv.fr", "onepip-france", "lavelan09");
mysql_select_db("onepip-france-db1");
$reponse = mysql_query("SELECT * FROM bdpf$annee WHERE id='130'");

while ($donnees = mysql_fetch_array($reponse) )
{ 
?>
        <?php  $R1619=$donnees['R1619'];?>
        <?php echo $R1619;?>
        <?php
}
?>
        </b></font></div>
    </div>
    <font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="2"><b> 
    </b></font> 
    <div id="Layer10" style="position:absolute; width:30px; height:20px; z-index:3; left: 231px; top: 21px; background-image:  url(../result22.jpg); layer-background-image:  url(../result22.jpg); border: 1px none #000000"> 
      <div align="center"><font color="#FFCC00" face="Geneva, Arial, Helvetica, san-serif"size="3"><b> 
        <?php
mysql_connect("sql.franceserv.fr", "onepip-france", "lavelan09");
mysql_select_db("onepip-france-db1");
$reponse = mysql_query("SELECT * FROM bdpf$annee WHERE id='130'");

while ($donnees = mysql_fetch_array($reponse) )
{ 
?>
        <?php $R1620=$donnees['R1620'];?>
        <?php echo $R1620;?>
        <?php
}
?>
        </b></font></div>
    </div>
    <font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="2"><b> 
    </b></font></div>
</div>
<div id="Layer1" style="position:absolute; width:200px; height:20px; z-index:3; left: 20px; top: 640px; background-image:  url(../unique4.jpg); layer-background-image:  url(../unique4.jpg); border: 1px none #000000"> 
  <div align="center"> 
    <div id="Layer10" style="position:absolute; width:30px; height:20px; z-index:3; left: 200px; top: 1px; background-image:  url(../result22.jpg); layer-background-image:  url(../result22.jpg); border: 1px none #000000"> 
      <div align="center"><font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="3"><b> 
        <?php
mysql_connect("sql.franceserv.fr", "onepip-france", "lavelan09");
mysql_select_db("onepip-france-db1");
$reponse = mysql_query("SELECT * FROM bdpf$annee WHERE id='150'");

while ($donnees = mysql_fetch_array($reponse) )
{ 
?>
        <?php  $A1621=$donnees['A1621'];?>
        <?php echo $A1621;?>
        <?php
}
?>
        </b></font></div>
    </div>
    <div id="Layer10" style="position:absolute; width:30px; height:20px; z-index:3; left: 200px; top: 21px; background-image:  url(../result22.jpg); layer-background-image:  url(../result22.jpg); border: 1px none #000000"> 
      <div align="center"><font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="3"><b> 
        <?php
mysql_connect("sql.franceserv.fr", "onepip-france", "lavelan09");
mysql_select_db("onepip-france-db1");
$reponse = mysql_query("SELECT * FROM bdpf$annee WHERE id='150'");

while ($donnees = mysql_fetch_array($reponse) )
{ 
?>
        <?php $A1622=$donnees['A1622'];?>
        <?php echo $A1622;?>
        <?php
}
?>
        </b></font></div>
    </div>
    <div id="Layer9" style="position:absolute; width:200px; height:20px; z-index:2; left: 0px; top: 20px; background-image:  url(../unique4.jpg); layer-background-image:  url(../unique4.jpg); border: 1px none #000000"> 
      <div align="center"><font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="2"><b>
        <?php 

	
	echo $clubA1622;
  ?>
        </b></font></div>
    </div>
    <font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="2"><b> 
    <?php 

	
	echo $clubA1621;
  ?>
    </b></font> 
    <div id="Layer10" style="position:absolute; width:30px; height:20px; z-index:3; left: 231px; top: 1px; background-image:  url(../result22.jpg); layer-background-image:  url(../result22.jpg); border: 1px none #000000"> 
      <div align="center"><font color="#FFCC00" face="Geneva, Arial, Helvetica, san-serif"size="3"><b> 
        <?php
mysql_connect("sql.franceserv.fr", "onepip-france", "lavelan09");
mysql_select_db("onepip-france-db1");
$reponse = mysql_query("SELECT * FROM bdpf$annee WHERE id='130'");

while ($donnees = mysql_fetch_array($reponse) )
{ 
?>
        <?php  $R1621=$donnees['R1621'];?>
        <?php echo $R1621;?>
        <?php
}
?>
        </b></font></div>
    </div>
    <font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="2"><b> 
    </b></font> 
    <div id="Layer10" style="position:absolute; width:30px; height:20px; z-index:3; left: 231px; top: 21px; background-image:  url(../result22.jpg); layer-background-image:  url(../result22.jpg); border: 1px none #000000"> 
      <div align="center"><font color="#FFCC00" face="Geneva, Arial, Helvetica, san-serif"size="3"><b> 
        <?php
mysql_connect("sql.franceserv.fr", "onepip-france", "lavelan09");
mysql_select_db("onepip-france-db1");
$reponse = mysql_query("SELECT * FROM bdpf$annee WHERE id='130'");

while ($donnees = mysql_fetch_array($reponse) )
{ 
?>
        <?php $R1622=$donnees['R1622'];?>
        <?php echo $R1622;?>
        <?php
}
?>
        </b></font></div>
    </div>
    <font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="2"><b> 
    </b></font></div>
</div>
<div id="Layer1" style="position:absolute; width:200px; height:20px; z-index:3; left: 20px; top: 760px; background-image:  url(../unique3.jpg); layer-background-image:  url(../unique3.jpg); border: 1px none #000000"> 
  <div align="center"> 
    <div id="Layer10" style="position:absolute; width:30px; height:20px; z-index:3; left: 200px; top: 1px; background-image:  url(../result2.jpg); layer-background-image:  url(../result2.jpg); border: 1px none #000000"> 
      <div align="center"><font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="3"><b> 
        <?php
mysql_connect("sql.franceserv.fr", "onepip-france", "lavelan09");
mysql_select_db("onepip-france-db1");
$reponse = mysql_query("SELECT * FROM bdpf$annee WHERE id='150'");

while ($donnees = mysql_fetch_array($reponse) )
{ 
?>
        <?php $A1627=$donnees['A1627'];?>
        <?php echo $A1627;?>
        <?php
}
?>
        </b></font></div>
    </div>
    <div id="Layer10" style="position:absolute; width:30px; height:20px; z-index:3; left: 200px; top: 21px; background-image:  url(../result2.jpg); layer-background-image:  url(../result2.jpg); border: 1px none #000000"> 
      <div align="center"><font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="3"><b> 
        <?php
mysql_connect("sql.franceserv.fr", "onepip-france", "lavelan09");
mysql_select_db("onepip-france-db1");
$reponse = mysql_query("SELECT * FROM bdpf$annee WHERE id='150'");

while ($donnees = mysql_fetch_array($reponse) )
{ 
?>
        <?php $A1628=$donnees['A1628'];?>
        <?php echo $A1628;?>
        <?php
}
?>
        </b></font></div>
    </div>
    <div id="Layer9" style="position:absolute; width:200px; height:20px; z-index:2; left: 0px; top: 20px; background-image:  url(../unique3.jpg); layer-background-image:  url(../unique3.jpg); border: 1px none #000000"> 
      <div align="center"><font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="2"><b>
        <?php 

	
	echo $clubA1628;
  ?>
        </b></font></div>
    </div>
    <font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="2"><b> 
    <?php 

	
	echo $clubA1627;
  ?>
    </b></font> 
    <div id="Layer10" style="position:absolute; width:30px; height:20px; z-index:3; left: 230px; top: 1px; background-image:  url(../result2.jpg); layer-background-image:  url(../result2.jpg); border: 1px none #000000"> 
      <div align="center"><font color="#FFCC00" face="Geneva, Arial, Helvetica, san-serif"size="3"><b> 
        <?php
mysql_connect("sql.franceserv.fr", "onepip-france", "lavelan09");
mysql_select_db("onepip-france-db1");
$reponse = mysql_query("SELECT * FROM bdpf$annee WHERE id='130'");

while ($donnees = mysql_fetch_array($reponse) )
{ 
?>
        <?php $R1627= $donnees['R1627'];?>
        <?php echo $R1627;?>
        <?php
}
?>
        </b></font></div>
    </div>
    <font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="2"><b> 
    </b></font> 
    <div id="Layer10" style="position:absolute; width:30px; height:20px; z-index:3; left: 230px; top: 21px; background-image:  url(../result2.jpg); layer-background-image:  url(../result2.jpg); border: 1px none #000000"> 
      <div align="center"><font color="#FFCC00" face="Geneva, Arial, Helvetica, san-serif"size="3"><b> 
        <?php
mysql_connect("sql.franceserv.fr", "onepip-france", "lavelan09");
mysql_select_db("onepip-france-db1");
$reponse = mysql_query("SELECT * FROM bdpf$annee WHERE id='130'");

while ($donnees = mysql_fetch_array($reponse) )
{ 
?>
        <?php $A1628=$donnees['R1628'];?>
        <?php echo $R1628;?>
        <?php
}
?>
        </b></font></div>
    </div>
    <font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="2"><b> 
    </b></font><font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="2"><b> 
    </b></font></div>
</div>
<div id="Layer1" style="position:absolute; width:200px; height:20px; z-index:3; left: 20px; top: 720px; background-image:  url(../unique3.jpg); layer-background-image:  url(../unique3.jpg); border: 1px none #000000"> 
  <div align="center"> 
    <div id="Layer10" style="position:absolute; width:30px; height:20px; z-index:3; left: 200px; top: 1px; background-image:  url(../result2.jpg); layer-background-image:  url(../result2.jpg); border: 1px none #000000"> 
      <div align="center"><font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="3"><b> 
        <?php
mysql_connect("sql.franceserv.fr", "onepip-france", "lavelan09");
mysql_select_db("onepip-france-db1");
$reponse = mysql_query("SELECT * FROM bdpf$annee WHERE id='150'");

while ($donnees = mysql_fetch_array($reponse) )
{ 
?>
        <?php $A1625= $donnees['A1625'];?>
        <?php echo $A1625;?>
        <?php
}
?>
        </b></font></div>
    </div>
    <div id="Layer10" style="position:absolute; width:30px; height:20px; z-index:3; left: 200px; top: 21px; background-image:  url(../result2.jpg); layer-background-image:  url(../result2.jpg); border: 1px none #000000"> 
      <div align="center"><font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="3"><b> 
        <?php
mysql_connect("sql.franceserv.fr", "onepip-france", "lavelan09");
mysql_select_db("onepip-france-db1");
$reponse = mysql_query("SELECT * FROM bdpf$annee WHERE id='150'");

while ($donnees = mysql_fetch_array($reponse) )
{ 
?>
        <?php $A1626=$donnees['A1626'];?>
        <?php echo $A1626;?>
        <?php
}
?>
        </b></font></div>
    </div>
    <div id="Layer9" style="position:absolute; width:200px; height:20px; z-index:2; left: 0px; top: 20px; background-image:  url(../unique3.jpg); layer-background-image:  url(../unique3.jpg); border: 1px none #000000"> 
      <div align="center"><font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="2"><b>
        <?php 

	
	echo $clubA1626;
  ?>
        </b></font></div>
    </div>
    <font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="2"><b> 
    <?php 

	
	echo $clubA1625;
  ?>
    </b></font> </div>
</div>
<div id="Layer1" style="position:absolute; width:200px; height:20px; z-index:3; left: 20px; top: 680px; background-image:  url(../unique4.jpg); layer-background-image:  url(../unique4.jpg); border: 1px none #000000"> 
  <div align="center"> 
    <div id="Layer10" style="position:absolute; width:30px; height:20px; z-index:3; left: 200px; top: 1px; background-image:  url(../result22.jpg); layer-background-image:  url(../result22.jpg); border: 1px none #000000"> 
      <div align="center"><font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="3"><b> 
        <?php
mysql_connect("sql.franceserv.fr", "onepip-france", "lavelan09");
mysql_select_db("onepip-france-db1");
$reponse = mysql_query("SELECT * FROM bdpf$annee WHERE id='150'");

while ($donnees = mysql_fetch_array($reponse) )
{ 
?>
        <?php $A1623=$donnees['A1623'];?>
        <?php echo $A1623;?>
        <?php
}
?>
        </b></font></div>
    </div>
    <div id="Layer10" style="position:absolute; width:30px; height:20px; z-index:3; left: 200px; top: 21px; background-image:  url(../result22.jpg); layer-background-image:  url(../result22.jpg); border: 1px none #000000"> 
      <div align="center"><font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="3"><b> 
        <?php
mysql_connect("sql.franceserv.fr", "onepip-france", "lavelan09");
mysql_select_db("onepip-france-db1");
$reponse = mysql_query("SELECT * FROM bdpf$annee WHERE id='150'");

while ($donnees = mysql_fetch_array($reponse) )
{ 
?>
        <?php $A1624=$donnees['A1624'];?>
        <?php echo $A1624;?>
        <?php
}
?>
        </b></font></div>
    </div>
    <div id="Layer9" style="position:absolute; width:200px; height:20px; z-index:2; left: 0px; top: 20px; background-image:  url(../unique4.jpg); layer-background-image:  url(../unique4.jpg); border: 1px none #000000"> 
      <div align="center"><font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="2"><b>
        <?php 

	
	echo $clubA1624;
  ?>
        </b></font></div>
    </div>
    <font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="2"><b> 
    <?php 

	
	echo $clubA1623;
  ?>
    </b></font>
    <div id="Layer10" style="position:absolute; width:30px; height:20px; z-index:3; left: 230px; top: 1px; background-image:  url(../result2.jpg); layer-background-image:  url(../result2.jpg); border: 1px none #000000"> 
      <div align="center"><font color="#FFCC00" face="Geneva, Arial, Helvetica, san-serif"size="3"><b> 
        <?php
mysql_connect("sql.franceserv.fr", "onepip-france", "lavelan09");
mysql_select_db("onepip-france-db1");
$reponse = mysql_query("SELECT * FROM bdpf$annee WHERE id='130'");

while ($donnees = mysql_fetch_array($reponse) )
{ 
?>
        <?php $R1625= $donnees['R1625'];?>
        <?php echo $R1625;?>
        <?php
}
?>
        </b></font></div>
    </div>
    <font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="2"><b> 
    </b></font> 
    <div id="Layer10" style="position:absolute; width:30px; height:20px; z-index:3; left: 230px; top: 21px; background-image:  url(../result2.jpg); layer-background-image:  url(../result2.jpg); border: 1px none #000000"> 
      <div align="center"><font color="#FFCC00" face="Geneva, Arial, Helvetica, san-serif"size="3"><b> 
        <?php
mysql_connect("sql.franceserv.fr", "onepip-france", "lavelan09");
mysql_select_db("onepip-france-db1");
$reponse = mysql_query("SELECT * FROM bdpf$annee WHERE id='130'");

while ($donnees = mysql_fetch_array($reponse) )
{ 
?>
        <?php $A1626=$donnees['R1626'];?>
        <?php echo $R1626;?>
        <?php
}
?>
        </b></font></div>
    </div>
    <font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="2"><b> 
    </b></font><font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="2"><b> 
    </b></font><font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="2"><b> 
    </b></font> <font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="2"><b> 
    </b></font><font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="2"><b> 
    </b></font></div>
</div>
<div id="Layer1" style="position:absolute; width:200px; height:20px; z-index:3; left: 20px; top: 840px; background-image:  url(../unique4.jpg); layer-background-image:  url(../unique4.jpg); border: 1px none #000000"> 
  <div align="center"> 
    <div id="Layer10" style="position:absolute; width:30px; height:20px; z-index:3; left: 200px; top: 1px; background-image:  url(../result22.jpg); layer-background-image:  url(../result22.jpg); border: 1px none #000000"> 
      <div align="center"><font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="3"><b> 
        <?php
mysql_connect("sql.franceserv.fr", "onepip-france", "lavelan09");
mysql_select_db("onepip-france-db1");
$reponse = mysql_query("SELECT * FROM bdpf$annee WHERE id='150'");

while ($donnees = mysql_fetch_array($reponse) )
{ 
?>
        <?php $A1631=$donnees['A1631'];?>
        <?php echo $A1631;?>
        <?php
}
?>
        </b></font></div>
    </div>
    <div id="Layer10" style="position:absolute; width:30px; height:20px; z-index:3; left: 200px; top: 21px; background-image:  url(../result22.jpg); layer-background-image:  url(../result22.jpg); border: 1px none #000000"> 
      <div align="center"><font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="3"><b> 
        <?php
mysql_connect("sql.franceserv.fr", "onepip-france", "lavelan09");
mysql_select_db("onepip-france-db1");
$reponse = mysql_query("SELECT * FROM bdpf$annee WHERE id='150'");

while ($donnees = mysql_fetch_array($reponse) )
{ 
?>
        <?php $A1632=$donnees['A1632'];?>
        <?php echo $A1632;?>
        <?php
}
?>
        </b></font></div>
    </div>
    <div id="Layer9" style="position:absolute; width:200px; height:20px; z-index:2; left: 0px; top: 20px; background-image:  url(../unique4.jpg); layer-background-image:  url(../unique4.jpg); border: 1px none #000000"> 
      <div align="center"><font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="2"><b> 
        <?php 

	
	echo $clubA1632;
  ?>
        </b></font></div>
    </div>
    <font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="2"><b> 
    <?php 

	
	echo $clubA1631;
  ?>
    </b></font> 
    <div id="Layer10" style="position:absolute; width:30px; height:20px; z-index:3; left: 231px; top: 1px; background-image:  url(../result22.jpg); layer-background-image:  url(../result22.jpg); border: 1px none #000000"> 
      <div align="center"><font color="#FFCC00" face="Geneva, Arial, Helvetica, san-serif"size="3"><b> 
        <?php
mysql_connect("sql.franceserv.fr", "onepip-france", "lavelan09");
mysql_select_db("onepip-france-db1");
$reponse = mysql_query("SELECT * FROM bdpf$annee WHERE id='130'");

while ($donnees = mysql_fetch_array($reponse) )
{ 
?>
        <?php  $R1631=$donnees['R1631'];?>
        <?php echo $R1631;?>
        <?php
}
?>
        </b></font></div>
    </div>
    <font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="2"><b> 
    </b></font> 
    <div id="Layer10" style="position:absolute; width:30px; height:20px; z-index:3; left: 231px; top: 21px; background-image:  url(../result22.jpg); layer-background-image:  url(../result22.jpg); border: 1px none #000000"> 
      <div align="center"><font color="#FFCC00" face="Geneva, Arial, Helvetica, san-serif"size="3"><b> 
        <?php
mysql_connect("sql.franceserv.fr", "onepip-france", "lavelan09");
mysql_select_db("onepip-france-db1");
$reponse = mysql_query("SELECT * FROM bdpf$annee WHERE id='130'");

while ($donnees = mysql_fetch_array($reponse) )
{ 
?>
        <?php $R1632=$donnees['R1632'];?>
        <?php echo $R1632;?>
        <?php
}
?>
        </b></font></div>
    </div>
    <font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="2"><b> 
    </b></font> <font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="2"><b> 
    </b></font><font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="2"><b> 
    </b></font><font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="2"><b> 
    </b></font></div>
</div>
<div id="Layer1" style="position:absolute; width:200px; height:20px; z-index:3; left: 20px; top: 800px; background-image:  url(../unique4.jpg); layer-background-image:  url(../unique4.jpg); border: 1px none #000000"> 
  <div align="center"> 
    <div id="Layer10" style="position:absolute; width:30px; height:20px; z-index:3; left: 200px; top: 1px; background-image:  url(../result22.jpg); layer-background-image:  url(../result22.jpg); border: 1px none #000000"> 
      <div align="center"><font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="3"><b> 
        <?php
mysql_connect("sql.franceserv.fr", "onepip-france", "lavelan09");
mysql_select_db("onepip-france-db1");
$reponse = mysql_query("SELECT * FROM bdpf$annee WHERE id='150'");

while ($donnees = mysql_fetch_array($reponse) )
{ 
?>
        <?php $A1629= $donnees['A1629'];?>
        <?php echo $A1629;?>
        <?php
}
?>
        </b></font></div>
    </div>
    <div id="Layer10" style="position:absolute; width:30px; height:20px; z-index:3; left: 200px; top: 21px; background-image:  url(../result22.jpg); layer-background-image:  url(../result22.jpg); border: 1px none #000000"> 
      <div align="center"><font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="3"><b> 
        <?php
mysql_connect("sql.franceserv.fr", "onepip-france", "lavelan09");
mysql_select_db("onepip-france-db1");
$reponse = mysql_query("SELECT * FROM bdpf$annee WHERE id='150'");

while ($donnees = mysql_fetch_array($reponse) )
{ 
?>
        <?php $A1630=$donnees['A1630'];?>
        <?php echo $A1630?>
        <?php
}
?>
        </b></font></div>
    </div>
    <div id="Layer9" style="position:absolute; width:200px; height:20px; z-index:2; left: 0px; top: 20px; background-image:  url(../unique4.jpg); layer-background-image:  url(../unique4.jpg); border: 1px none #000000"> 
      <div align="center"><font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="2"><b>
        <?php 

	
	echo $clubA1630;
  ?>
        </b></font></div>
    </div>
    <font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="2"><b> 
    <?php 

	
	echo $clubA1629;
  ?>
    </b></font> 
    <div id="Layer10" style="position:absolute; width:30px; height:20px; z-index:3; left: 231px; top: 1px; background-image:  url(../result22.jpg); layer-background-image:  url(../result22.jpg); border: 1px none #000000"> 
      <div align="center"><font color="#FFCC00" face="Geneva, Arial, Helvetica, san-serif"size="3"><b> 
        <?php
mysql_connect("sql.franceserv.fr", "onepip-france", "lavelan09");
mysql_select_db("onepip-france-db1");
$reponse = mysql_query("SELECT * FROM bdpf$annee WHERE id='130'");

while ($donnees = mysql_fetch_array($reponse) )
{ 
?>
        <?php  $R1629=$donnees['R1629'];?>
        <?php echo $R1629;?>
        <?php
}
?>
        </b></font></div>
    </div>
    <font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="2"><b> 
    </b></font> 
    <div id="Layer10" style="position:absolute; width:30px; height:20px; z-index:3; left: 231px; top: 21px; background-image:  url(../result22.jpg); layer-background-image:  url(../result22.jpg); border: 1px none #000000"> 
      <div align="center"><font color="#FFCC00" face="Geneva, Arial, Helvetica, san-serif"size="3"><b> 
        <?php
mysql_connect("sql.franceserv.fr", "onepip-france", "lavelan09");
mysql_select_db("onepip-france-db1");
$reponse = mysql_query("SELECT * FROM bdpf$annee WHERE id='130'");

while ($donnees = mysql_fetch_array($reponse) )
{ 
?>
        <?php $R1630=$donnees['R1630'];?>
        <?php echo $R1630;?>
        <?php
}
?>
        </b></font></div>
    </div>
    <font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="2"><b> 
    </b></font><font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="2"><b> 
    </b></font><font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="2"><b> 
    </b></font></div>
</div>
<div id="Layer1" style="position:absolute; width:200px; height:20px; z-index:3; left: 301px; top: 260px; background-image:  url(../unique3.jpg); layer-background-image:  url(../unique3.jpg); border: 1px none #000000"> 
  <div align="center">
    <div id="Layer10" style="position:absolute; width:30px; height:20px; z-index:3; left: 200px; top: 21px; background-image:  url(../result2.jpg); layer-background-image:  url(../result2.jpg); border: 1px none #000000"> 
      <div align="center"><font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="3"><b> 
        <?php
mysql_connect("sql.franceserv.fr", "onepip-france", "lavelan09");
mysql_select_db("onepip-france-db1");
$reponse = mysql_query("SELECT * FROM bdpf$annee WHERE id='150'");

while ($donnees = mysql_fetch_array($reponse) )
{ 
?>
        <?php $A8002=$donnees['A8002'];?>
        <?php echo $A8002;?>
        <?php
}
?>
        </b></font></div>
    </div>
    <div id="Layer9" style="position:absolute; width:200px; height:20px; z-index:2; left: 0px; top: 20px; background-image:  url(../unique3.jpg); layer-background-image:  url(../unique3.jpg); border: 1px none #000000"> 
      <div align="center"><font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="2"><b> 
        <?php 
if ($A1603+$A1604>0)
{		
	
		if ($A1603> $A1604)
	{
	$clubA8002=$clubA1603;
	}
	else
	{
	$clubA8002=$clubA1604;
	}
}
else
{
echo "";	
}		
		
		
		echo $clubA8002;
  ?>
        </b></font></div>
    </div>
    <div id="Layer10" style="position:absolute; width:30px; height:20px; z-index:3; left: 200px; top: 1px; background-image:  url(../result2.jpg); layer-background-image:  url(../result2.jpg); border: 1px none #000000"> 
      <div align="center"><font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="3"><b> 
        <?php
mysql_connect("sql.franceserv.fr", "onepip-france", "lavelan09");
mysql_select_db("onepip-france-db1");
$reponse = mysql_query("SELECT * FROM bdpf$annee WHERE id='150'");

while ($donnees = mysql_fetch_array($reponse) )
{ 
?>
        <?php $A8001= $donnees['A8001'];?>
        <?php echo $A8001;?>
        <?php
}
?>
        </b></font></div>
    </div>
    <font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="2"><b> 
    <?php 
if ($A1601+$A1602>0)
{
		if ($A1601 > $A1602)
		{
		$clubA8001=$clubA1601;
		}
		else
		{
		$clubA8001=$clubA1602;
		}
}
else
{
echo "";	
}
	
	echo $clubA8001;?>
    </b></font> 
    <div id="Layer10" style="position:absolute; width:30px; height:20px; z-index:3; left: 230px; top: 1px; background-image:  url(../result2.jpg); layer-background-image:  url(../result2.jpg); border: 1px none #000000"> 
      <div align="center"><font color="#FFCC00" face="Geneva, Arial, Helvetica, san-serif"size="3"><b> 
        <?php
mysql_connect("sql.franceserv.fr", "onepip-france", "lavelan09");
mysql_select_db("onepip-france-db1");
$reponse = mysql_query("SELECT * FROM bdpf$annee WHERE id='130'");

while ($donnees = mysql_fetch_array($reponse) )
{ 
?>
        <?php $R8001= $donnees['R8001'];?>
        <?php echo $R8001;?>
        <?php
}
?>
        </b></font></div>
    </div>
    <font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="2"><b> 
    </b></font> 
    <div id="Layer10" style="position:absolute; width:30px; height:20px; z-index:3; left: 230px; top: 21px; background-image:  url(../result2.jpg); layer-background-image:  url(../result2.jpg); border: 1px none #000000"> 
      <div align="center"><font color="#FFCC00" face="Geneva, Arial, Helvetica, san-serif"size="3"><b> 
        <?php
mysql_connect("sql.franceserv.fr", "onepip-france", "lavelan09");
mysql_select_db("onepip-france-db1");
$reponse = mysql_query("SELECT * FROM bdpf$annee WHERE id='130'");

while ($donnees = mysql_fetch_array($reponse) )
{ 
?>
        <?php $R8002=$donnees['R8002'];?>
        <?php echo $R8002;?>
        <?php
}
?>
        </b></font></div>
    </div>
    <font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="2"><b> 
    </b></font></div>
</div>
<div id="Layer1" style="position:absolute; width:200px; height:20px; z-index:3; left: 300px; top: 340px; background-image:  url(../unique3.jpg); layer-background-image:  url(../unique3.jpg); border: 1px none #000000"> 
  <div align="center"> 
    <div id="Layer9" style="position:absolute; width:200px; height:20px; z-index:2; left: 0px; top: 20px; background-image:  url(../unique3.jpg); layer-background-image:  url(../unique3.jpg); border: 1px none #000000"> 
      <div align="center"><font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="2"><b> 
        <?php
if ($A1607+$A1608>0)
{		
		
		 if ($A1607> $A1608)
	{
	$clubA8004=$clubA1607;
	}
	else
	{
	$clubA8004=$clubA1608;
	}
}
else
{
echo "";	
}		
		echo $clubA8004;
  ?>
        </b></font> </div>
    </div>
    <div id="Layer10" style="position:absolute; width:30px; height:20px; z-index:3; left: 200px; top: 1px; background-image:  url(../result2.jpg); layer-background-image:  url(../result2.jpg); border: 1px none #000000"> 
      <div align="center"><font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="3"><b> 
        <?php
mysql_connect("sql.franceserv.fr", "onepip-france", "lavelan09");
mysql_select_db("onepip-france-db1");
$reponse = mysql_query("SELECT * FROM bdpf$annee WHERE id='150'");

while ($donnees = mysql_fetch_array($reponse) )
{ 
?>
        <?php $A8003= $donnees['A8003'];?>
        <?php echo $A8003;?>
        <?php
}
?>
        </b></font></div>
    </div>
    <div id="Layer10" style="position:absolute; width:30px; height:20px; z-index:3; left: 200px; top: 21px; background-image:  url(../result2.jpg); layer-background-image:  url(../result2.jpg); border: 1px none #000000"> 
      <div align="center"><font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="3"><b> 
        <?php
mysql_connect("sql.franceserv.fr", "onepip-france", "lavelan09");
mysql_select_db("onepip-france-db1");
$reponse = mysql_query("SELECT * FROM bdpf$annee WHERE id='150'");

while ($donnees = mysql_fetch_array($reponse) )
{ 
?>
        <?php $A8004=$donnees['A8004'];?>
        <?php echo $A8004;?>
        <?php
}
?>
        </b></font></div>
    </div>
    <font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="2"><b> 
    <?php 
if ($A1605+$A1606>0)
{	
	
	if ($A1605> $A1606)
	{
	$clubA8003=$clubA1605;
	}
	else
	{
	$clubA8003=$clubA1606;
	}
}
else
{
echo "";	
}	
	echo $clubA8003;?>
    </b></font> 
    <div id="Layer10" style="position:absolute; width:30px; height:20px; z-index:3; left: 230px; top: 1px; background-image:  url(../result2.jpg); layer-background-image:  url(../result2.jpg); border: 1px none #000000"> 
      <div align="center"><font color="#FFCC00" face="Geneva, Arial, Helvetica, san-serif"size="3"><b> 
        <?php
mysql_connect("sql.franceserv.fr", "onepip-france", "lavelan09");
mysql_select_db("onepip-france-db1");
$reponse = mysql_query("SELECT * FROM bdpf$annee WHERE id='130'");

while ($donnees = mysql_fetch_array($reponse) )
{ 
?>
        <?php $R8003= $donnees['R8003'];?>
        <?php echo $R8003;?>
        <?php
}
?>
        </b></font></div>
    </div>
    <font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="2"><b> 
    </b></font> 
    <div id="Layer10" style="position:absolute; width:30px; height:20px; z-index:3; left: 230px; top: 21px; background-image:  url(../result2.jpg); layer-background-image:  url(../result2.jpg); border: 1px none #000000"> 
      <div align="center"><font color="#FFCC00" face="Geneva, Arial, Helvetica, san-serif"size="3"><b> 
        <?php
mysql_connect("sql.franceserv.fr", "onepip-france", "lavelan09");
mysql_select_db("onepip-france-db1");
$reponse = mysql_query("SELECT * FROM bdpf$annee WHERE id='130'");

while ($donnees = mysql_fetch_array($reponse) )
{ 
?>
        <?php $R8004=$donnees['R8004'];?>
        <?php echo $R8004;?>
        <?php
}
?>
        </b></font></div>
    </div>
    <font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="2"><b> 
    </b></font><font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="2"><b> 
    </b></font></div>
</div>
<div id="Layer1" style="position:absolute; width:200px; height:20px; z-index:3; left: 301px; top: 420px; background-image:  url(../unique3.jpg); layer-background-image:  url(../unique3.jpg); border: 1px none #000000"> 
  <div align="center"> 
    <div id="Layer9" style="position:absolute; width:200px; height:20px; z-index:2; left: 0px; top: 20px; background-image:  url(../unique3.jpg); layer-background-image:  url(../unique3.jpg); border: 1px none #000000"> 
      <div align="center"><font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="2"><b> 
        <?php 
if ($A1611+$A1612>0)
{
		if ($A1611 > $A1612)
		{
		$clubA8006=$clubA1611;
		}
		else
		{
		$clubA8006=$clubA1612;
		}
}
else
{
echo "";	
}
	
	echo $clubA8006;?> 
        </b></font></div>
    </div>
    <div id="Layer10" style="position:absolute; width:30px; height:20px; z-index:3; left: 200px; top: 1px; background-image:  url(../result2.jpg); layer-background-image:  url(../result2.jpg); border: 1px none #000000"> 
      <div align="center"><font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="3"><b> 
        <?php
mysql_connect("sql.franceserv.fr", "onepip-france", "lavelan09");
mysql_select_db("onepip-france-db1");
$reponse = mysql_query("SELECT * FROM bdpf$annee WHERE id='150'");

while ($donnees = mysql_fetch_array($reponse) )
{ 
?>
        <?php $A8005= $donnees['A8005'];?>
        <?php echo $A8005;?>
        <?php
}
?>
        </b></font></div>
    </div>
    <div id="Layer10" style="position:absolute; width:30px; height:20px; z-index:3; left: 200px; top: 21px; background-image:  url(../result2.jpg); layer-background-image:  url(../result2.jpg); border: 1px none #000000"> 
      <div align="center"><font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="3"><b> 
        <?php
mysql_connect("sql.franceserv.fr", "onepip-france", "lavelan09");
mysql_select_db("onepip-france-db1");
$reponse = mysql_query("SELECT * FROM bdpf$annee WHERE id='150'");

while ($donnees = mysql_fetch_array($reponse) )
{ 
?>
        <?php $A8006=$donnees['A8006'];?>
        <?php echo $A8006;?>
        <?php
}
?>
        </b></font></div>
    </div>
    <font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="2"><b> 
    <?php 
if ($A1609+$A1610>0)
{
		if ($A1609 > $A1610)
		{
		$clubA8005=$clubA1609;
		}
		else
		{
		$clubA8005=$clubA1610;
		}
}
else
{
echo "";	
}
	
	echo $clubA8005;?>
    </b></font> 
    <div id="Layer10" style="position:absolute; width:30px; height:20px; z-index:3; left: 230px; top: 1px; background-image:  url(../result2.jpg); layer-background-image:  url(../result2.jpg); border: 1px none #000000"> 
      <div align="center"><font color="#FFCC00" face="Geneva, Arial, Helvetica, san-serif"size="3"><b> 
        <?php
mysql_connect("sql.franceserv.fr", "onepip-france", "lavelan09");
mysql_select_db("onepip-france-db1");
$reponse = mysql_query("SELECT * FROM bdpf$annee WHERE id='130'");

while ($donnees = mysql_fetch_array($reponse) )
{ 
?>
        <?php $R8005= $donnees['R8005'];?>
        <?php echo $R8005;?>
        <?php
}
?>
        </b></font></div>
    </div>
    <font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="2"><b> 
    </b></font> 
    <div id="Layer10" style="position:absolute; width:30px; height:20px; z-index:3; left: 230px; top: 21px; background-image:  url(../result2.jpg); layer-background-image:  url(../result2.jpg); border: 1px none #000000"> 
      <div align="center"><font color="#FFCC00" face="Geneva, Arial, Helvetica, san-serif"size="3"><b> 
        <?php
mysql_connect("sql.franceserv.fr", "onepip-france", "lavelan09");
mysql_select_db("onepip-france-db1");
$reponse = mysql_query("SELECT * FROM bdpf$annee WHERE id='130'");

while ($donnees = mysql_fetch_array($reponse) )
{ 
?>
        <?php $R8006=$donnees['R8006'];?>
        <?php echo $R8006;?>
        <?php
}
?>
        </b></font></div>
    </div>
    <font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="2"><b> 
    </b></font><font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="2"><b> 
    </b></font></div>
</div>
<div id="Layer1" style="position:absolute; width:200px; height:20px; z-index:3; left: 301px; top: 500px; background-image:  url(../unique3.jpg); layer-background-image:  url(../unique3.jpg); border: 1px none #000000"> 
  <div align="center"> 
    <div id="Layer9" style="position:absolute; width:200px; height:20px; z-index:2; left: 0px; top: 20px; background-image:  url(../unique3.jpg); layer-background-image:  url(../unique3.jpg); border: 1px none #000000"> 
      <div align="center"><font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="2"><b> 
        <?php 
if ($A1615+$A1616>0)
{
		if ($A1615 > $A1616)
		{
		$clubA8008=$clubA1615;
		}
		else
		{
		$clubA8008=$clubA1616;
		}
}
else
{
echo "";	
}
	
	echo $clubA8008;?> 
	    
        </b></font></div>
    </div>
    <div id="Layer10" style="position:absolute; width:30px; height:20px; z-index:3; left: 200px; top: 1px; background-image:  url(../result2.jpg); layer-background-image:  url(../result2.jpg); border: 1px none #000000"> 
      <div align="center"><font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="3"><b> 
        <?php
mysql_connect("sql.franceserv.fr", "onepip-france", "lavelan09");
mysql_select_db("onepip-france-db1");
$reponse = mysql_query("SELECT * FROM bdpf$annee WHERE id='150'");

while ($donnees = mysql_fetch_array($reponse) )
{ 
?>
        <?php $A8007= $donnees['A8007'];?>
        <?php echo $A8007;?>
        <?php
}
?>
        </b></font></div>
    </div>
    <div id="Layer10" style="position:absolute; width:30px; height:20px; z-index:3; left: 200px; top: 21px; background-image:  url(../result2.jpg); layer-background-image:  url(../result2.jpg); border: 1px none #000000"> 
      <div align="center"><font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="3"><b> 
        <?php
mysql_connect("sql.franceserv.fr", "onepip-france", "lavelan09");
mysql_select_db("onepip-france-db1");
$reponse = mysql_query("SELECT * FROM bdpf$annee WHERE id='150'");

while ($donnees = mysql_fetch_array($reponse) )
{ 
?>
        <?php $A8008=$donnees['A8008'];?>
        <?php echo $A8008;?>
        <?php
}
?>
        </b></font></div>
    </div>
    <font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="2"><b> 
    <?php 
if ($A1613+$A1614>0)
{
		if ($A1613 > $A1614)
		{
		$clubA8007=$clubA1613;
		}
		else
		{
		$clubA8007=$clubA1614;
		}
}
else
{
echo "";	
}
	
	echo $clubA8007;?>
    </b></font> 
    <div id="Layer10" style="position:absolute; width:30px; height:20px; z-index:3; left: 230px; top: 1px; background-image:  url(../result2.jpg); layer-background-image:  url(../result2.jpg); border: 1px none #000000"> 
      <div align="center"><font color="#FFCC00" face="Geneva, Arial, Helvetica, san-serif"size="3"><b> 
        <?php
mysql_connect("sql.franceserv.fr", "onepip-france", "lavelan09");
mysql_select_db("onepip-france-db1");
$reponse = mysql_query("SELECT * FROM bdpf$annee WHERE id='130'");

while ($donnees = mysql_fetch_array($reponse) )
{ 
?>
        <?php $R8007= $donnees['R8007'];?>
        <?php echo $R8007;?>
        <?php
}
?>
        </b></font></div>
    </div>
    <font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="2"><b> 
    </b></font> 
    <div id="Layer10" style="position:absolute; width:30px; height:20px; z-index:3; left: 230px; top: 21px; background-image:  url(../result2.jpg); layer-background-image:  url(../result2.jpg); border: 1px none #000000"> 
      <div align="center"><font color="#FFCC00" face="Geneva, Arial, Helvetica, san-serif"size="3"><b> 
        <?php
mysql_connect("sql.franceserv.fr", "onepip-france", "lavelan09");
mysql_select_db("onepip-france-db1");
$reponse = mysql_query("SELECT * FROM bdpf$annee WHERE id='130'");

while ($donnees = mysql_fetch_array($reponse) )
{ 
?>
        <?php $R8008=$donnees['R8008'];?>
        <?php echo $R8008;?>
        <?php
}
?>
        </b></font></div>
    </div>
    <font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="2"><b> 
    </b></font><font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="2"><b>	
    </b></font></div>
</div>
<div id="Layer1" style="position:absolute; width:200px; height:20px; z-index:3; left: 301px; top: 582px; background-image:  url(../unique3.jpg); layer-background-image:  url(../unique3.jpg); border: 1px none #000000"> 
  <div align="center"> 
    <div id="Layer9" style="position:absolute; width:200px; height:20px; z-index:2; left: 0px; top: 20px; background-image:  url(../unique3.jpg); layer-background-image:  url(../unique3.jpg); border: 1px none #000000"> 
      <div align="center"><font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="2"><b> 
      <?php 
if ($A1619+$A1620>0)
{
		if ($A1619 > $A1620)
		{
		$clubA8010=$clubA1619;
		}
		else
		{
		$clubA8010=$clubA1620;
		}
}
else
{
echo "";	
}
	
	echo $clubA8010;?>    
		
		
        </b></font></div>
    </div>
    <div id="Layer10" style="position:absolute; width:30px; height:20px; z-index:3; left: 200px; top: 1px; background-image:  url(../result2.jpg); layer-background-image:  url(../result2.jpg); border: 1px none #000000"> 
      <div align="center"><font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="3"><b> 
        <?php
mysql_connect("sql.franceserv.fr", "onepip-france", "lavelan09");
mysql_select_db("onepip-france-db1");
$reponse = mysql_query("SELECT * FROM bdpf$annee WHERE id='150'");

while ($donnees = mysql_fetch_array($reponse) )
{ 
?>
        <?php $A8009= $donnees['A8009'];?>
        <?php echo $A8009;?>
        <?php
}
?>
        </b></font></div>
    </div>
    <div id="Layer10" style="position:absolute; width:30px; height:20px; z-index:3; left: 200px; top: 21px; background-image:  url(../result2.jpg); layer-background-image:  url(../result2.jpg); border: 1px none #000000"> 
      <div align="center"><font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="3"><b> 
        <?php
mysql_connect("sql.franceserv.fr", "onepip-france", "lavelan09");
mysql_select_db("onepip-france-db1");
$reponse = mysql_query("SELECT * FROM bdpf$annee WHERE id='150'");

while ($donnees = mysql_fetch_array($reponse) )
{ 
?>
        <?php $A8010=$donnees['A8010'];?>
        <?php echo $A8010;?>
        <?php
}
?>
        </b></font></div>
    </div>
    <font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="2"><b> 
    <?php 
if ($A1617+$A1618>0)
{
		if ($A1617 > $A1618)
		{
		$clubA8009=$clubA1617;
		}
		else
		{
		$clubA8009=$clubA1618;
		}
}
else
{
echo "";	
}
	
	echo $clubA8009;?>
    </b></font> 
    <div id="Layer10" style="position:absolute; width:30px; height:20px; z-index:3; left: 230px; top: 1px; background-image:  url(../result2.jpg); layer-background-image:  url(../result2.jpg); border: 1px none #000000"> 
      <div align="center"><font color="#FFCC00" face="Geneva, Arial, Helvetica, san-serif"size="3"><b> 
        <?php
mysql_connect("sql.franceserv.fr", "onepip-france", "lavelan09");
mysql_select_db("onepip-france-db1");
$reponse = mysql_query("SELECT * FROM bdpf$annee WHERE id='130'");

while ($donnees = mysql_fetch_array($reponse) )
{ 
?>
        <?php $R8009= $donnees['R8009'];?>
        <?php echo $R8009;?>
        <?php
}
?>
        </b></font></div>
    </div>
    <font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="2"><b> 
    </b></font> 
    <div id="Layer10" style="position:absolute; width:30px; height:20px; z-index:3; left: 230px; top: 21px; background-image:  url(../result2.jpg); layer-background-image:  url(../result2.jpg); border: 1px none #000000"> 
      <div align="center"><font color="#FFCC00" face="Geneva, Arial, Helvetica, san-serif"size="3"><b> 
        <?php
mysql_connect("sql.franceserv.fr", "onepip-france", "lavelan09");
mysql_select_db("onepip-france-db1");
$reponse = mysql_query("SELECT * FROM bdpf$annee WHERE id='130'");

while ($donnees = mysql_fetch_array($reponse) )
{ 
?>
        <?php $R8010=$donnees['R8010'];?>
        <?php echo $R8010;?>
        <?php
}
?>
        </b></font></div>
    </div>
    <font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="2"><b> 
    </b></font><font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="2"><b>	
    </b></font></div>
</div>
<div id="Layer1" style="position:absolute; width:200px; height:20px; z-index:3; left: 301px; top: 660px; background-image:  url(../unique3.jpg); layer-background-image:  url(../unique3.jpg); border: 1px none #000000"> 
  <div align="center"> 
    <div id="Layer9" style="position:absolute; width:200px; height:20px; z-index:2; left: 0px; top: 20px; background-image:  url(../unique3.jpg); layer-background-image:  url(../unique3.jpg); border: 1px none #000000"> 
      <div align="center"><font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="2"><b> 
        <?php 
if ($A1623+$A1624>0)
{
		if ($A1623 > $A1624)
		{
		$clubA8012=$clubA1623;
		}
		else
		{
		$clubA8012=$clubA1624;
		}
}
else
{
echo "";	
}
	
	echo $clubA8012;?>  
  
  
        </b></font></div>
    </div>
    <div id="Layer10" style="position:absolute; width:30px; height:20px; z-index:3; left: 200px; top: 1px; background-image:  url(../result2.jpg); layer-background-image:  url(../result2.jpg); border: 1px none #000000"> 
      <div align="center"><font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="3"><b> 
        <?php
mysql_connect("sql.franceserv.fr", "onepip-france", "lavelan09");
mysql_select_db("onepip-france-db1");
$reponse = mysql_query("SELECT * FROM bdpf$annee WHERE id='150'");

while ($donnees = mysql_fetch_array($reponse) )
{ 
?>
        <?php $A8011= $donnees['A8011'];?>
        <?php echo $A8011;?>
        <?php
}
?>
        </b></font></div>
    </div>
    <div id="Layer10" style="position:absolute; width:30px; height:20px; z-index:3; left: 200px; top: 21px; background-image:  url(../result2.jpg); layer-background-image:  url(../result2.jpg); border: 1px none #000000"> 
      <div align="center"><font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="3"><b> 
        <?php
mysql_connect("sql.franceserv.fr", "onepip-france", "lavelan09");
mysql_select_db("onepip-france-db1");
$reponse = mysql_query("SELECT * FROM bdpf$annee WHERE id='150'");

while ($donnees = mysql_fetch_array($reponse) )
{ 
?>
        <?php $A8012=$donnees['A8012'];?>
        <?php echo $A8012;?>
        <?php
}
?>
        </b></font></div>
    </div>
    <font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="2"><b> 
    <?php 
if ($A1621+$A1622>0)
{
		if ($A1621 > $A1622)
		{
		$clubA8011=$clubA1621;
		}
		else
		{
		$clubA8011=$clubA1622;
		}
}
else
{
echo "";	
}
	
	echo $clubA8011;?>
    </b></font> 
    <div id="Layer10" style="position:absolute; width:30px; height:20px; z-index:3; left: 230px; top: 1px; background-image:  url(../result2.jpg); layer-background-image:  url(../result2.jpg); border: 1px none #000000"> 
      <div align="center"><font color="#FFCC00" face="Geneva, Arial, Helvetica, san-serif"size="3"><b> 
        <?php
mysql_connect("sql.franceserv.fr", "onepip-france", "lavelan09");
mysql_select_db("onepip-france-db1");
$reponse = mysql_query("SELECT * FROM bdpf$annee WHERE id='130'");

while ($donnees = mysql_fetch_array($reponse) )
{ 
?>
        <?php $R8011= $donnees['R8011'];?>
        <?php echo $R8011;?>
        <?php
}
?>
        </b></font></div>
    </div>
    <font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="2"><b> 
    </b></font> 
    <div id="Layer10" style="position:absolute; width:30px; height:20px; z-index:3; left: 230px; top: 21px; background-image:  url(../result2.jpg); layer-background-image:  url(../result2.jpg); border: 1px none #000000"> 
      <div align="center"><font color="#FFCC00" face="Geneva, Arial, Helvetica, san-serif"size="3"><b> 
        <?php
mysql_connect("sql.franceserv.fr", "onepip-france", "lavelan09");
mysql_select_db("onepip-france-db1");
$reponse = mysql_query("SELECT * FROM bdpf$annee WHERE id='130'");

while ($donnees = mysql_fetch_array($reponse) )
{ 
?>
        <?php $R8012=$donnees['R8012'];?>
        <?php echo $R8012;?>
        <?php
}
?>
        </b></font></div>
    </div>
    <font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="2"><b> 
    </b></font></div>
</div>
<div id="Layer1" style="position:absolute; width:200px; height:20px; z-index:3; left: 300px; top: 740px; background-image:  url(../unique3.jpg); layer-background-image:  url(../unique3.jpg); border: 1px none #000000"> 
  <div align="center"> 
    <div id="Layer9" style="position:absolute; width:200px; height:20px; z-index:2; left: 0px; top: 20px; background-image:  url(../unique3.jpg); layer-background-image:  url(../unique3.jpg); border: 1px none #000000"> 
      <div align="center"><font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="2"><b> 
          <?php 
if ($A1627+$A1628>0)
{
		if ($A1627 > $A1628)
		{
		$clubA8014=$clubA1627;
		}
		else
		{
		$clubA8014=$clubA1628;
		}
}
else
{
echo "";	
}
	
	echo $clubA8014;?>
		
		
        </b></font></div>
    </div>
    <div id="Layer10" style="position:absolute; width:30px; height:20px; z-index:3; left: 200px; top: 1px; background-image:  url(../result2.jpg); layer-background-image:  url(../result2.jpg); border: 1px none #000000"> 
      <div align="center"><font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="3"><b> 
        <?php
mysql_connect("sql.franceserv.fr", "onepip-france", "lavelan09");
mysql_select_db("onepip-france-db1");
$reponse = mysql_query("SELECT * FROM bdpf$annee WHERE id='150'");

while ($donnees = mysql_fetch_array($reponse) )
{ 
?>
        <?php $A8013= $donnees['A8013'];?>
        <?php echo $A8013;?>
        <?php
}
?>
        </b></font></div>
    </div>
    <div id="Layer10" style="position:absolute; width:30px; height:20px; z-index:3; left: 200px; top: 21px; background-image:  url(../result2.jpg); layer-background-image:  url(../result2.jpg); border: 1px none #000000"> 
      <div align="center"><font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="3"><b> 
        <?php
mysql_connect("sql.franceserv.fr", "onepip-france", "lavelan09");
mysql_select_db("onepip-france-db1");
$reponse = mysql_query("SELECT * FROM bdpf$annee WHERE id='150'");

while ($donnees = mysql_fetch_array($reponse) )
{ 
?>
        <?php $A8014=$donnees['A8014'];?>
        <?php echo $A8014;?>
        <?php
}
?>
        </b></font></div>
    </div>
    <font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="2"><b> 
    <?php 
if ($A1625+$A1626>0)
{
		if ($A1625 > $A1626)
		{
		$clubA8013=$clubA1625;
		}
		else
		{
		$clubA8013=$clubA1626;
		}
}
else
{
echo "";	
}
	
	echo $clubA8013;?>
    </b></font> 
    <div id="Layer10" style="position:absolute; width:30px; height:20px; z-index:3; left: 230px; top: 1px; background-image:  url(../result2.jpg); layer-background-image:  url(../result2.jpg); border: 1px none #000000"> 
      <div align="center"><font color="#FFCC00" face="Geneva, Arial, Helvetica, san-serif"size="3"><b> 
        <?php
mysql_connect("sql.franceserv.fr", "onepip-france", "lavelan09");
mysql_select_db("onepip-france-db1");
$reponse = mysql_query("SELECT * FROM bdpf$annee WHERE id='130'");

while ($donnees = mysql_fetch_array($reponse) )
{ 
?>
        <?php $R8013= $donnees['R8013'];?>
        <?php echo $R8013;?>
        <?php
}
?>
        </b></font></div>
    </div>
    <font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="2"><b> 
    </b></font> 
    <div id="Layer10" style="position:absolute; width:30px; height:20px; z-index:3; left: 230px; top: 21px; background-image:  url(../result2.jpg); layer-background-image:  url(../result2.jpg); border: 1px none #000000"> 
      <div align="center"><font color="#FFCC00" face="Geneva, Arial, Helvetica, san-serif"size="3"><b> 
        <?php
mysql_connect("sql.franceserv.fr", "onepip-france", "lavelan09");
mysql_select_db("onepip-france-db1");
$reponse = mysql_query("SELECT * FROM bdpf$annee WHERE id='130'");

while ($donnees = mysql_fetch_array($reponse) )
{ 
?>
        <?php $R8014=$donnees['R8014'];?>
        <?php echo $R8014;?>
        <?php
}
?>
        </b></font></div>
    </div>
    <font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="2"><b> 
    </b></font><font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="2"><b>	
    </b></font></div>
</div>
<div id="Layer1" style="position:absolute; width:200px; height:20px; z-index:3; left: 300px; top: 822px; background-image:  url(../unique3.jpg); layer-background-image:  url(../unique3.jpg); border: 1px none #000000"> 
  <div align="center"> 
    <div id="Layer9" style="position:absolute; width:200px; height:20px; z-index:2; left: 0px; top: 20px; background-image:  url(../unique3.jpg); layer-background-image:  url(../unique3.jpg); border: 1px none #000000"> 
      <div align="center"><font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="2"><b> 
         <?php 
if ($A1631+$A1632>0)
{
		if ($A1631 > $A1632)
		{
		$clubA8016=$clubA1631;
		}
		else
		{
		$clubA8016=$clubA1632;
		}
}
else
{
echo "";	
}
	
	echo $clubA8016;?>
  
  
        </b></font></div>
    </div>
    <div id="Layer10" style="position:absolute; width:30px; height:20px; z-index:3; left: 200px; top: 1px; background-image:  url(../result2.jpg); layer-background-image:  url(../result2.jpg); border: 1px none #000000"> 
      <div align="center"><font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="3"><b> 
        <?php
mysql_connect("sql.franceserv.fr", "onepip-france", "lavelan09");
mysql_select_db("onepip-france-db1");
$reponse = mysql_query("SELECT * FROM bdpf$annee WHERE id='150'");

while ($donnees = mysql_fetch_array($reponse) )
{ 
?>
        <?php $A8015= $donnees['A8015'];?>
        <?php echo $A8015;?>
        <?php
}
?>
        </b></font></div>
    </div>
    <div id="Layer10" style="position:absolute; width:30px; height:20px; z-index:3; left: 200px; top: 21px; background-image:  url(../result2.jpg); layer-background-image:  url(../result2.jpg); border: 1px none #000000"> 
      <div align="center"><font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="3"><b> 
        <?php
mysql_connect("sql.franceserv.fr", "onepip-france", "lavelan09");
mysql_select_db("onepip-france-db1");
$reponse = mysql_query("SELECT * FROM bdpf$annee WHERE id='150'");

while ($donnees = mysql_fetch_array($reponse) )
{ 
?>
        <?php $A8016=$donnees['A8016'];?>
        <?php echo $A8016;?>
        <?php
}
?>
        </b></font></div>
    </div>
    <font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="2"><b> 
    <?php 
if ($A1629+$A1630>0)
{
		if ($A1629 > $A1630)
		{
		$clubA8015=$clubA1629;
		}
		else
		{
		$clubA8015=$clubA1630;
		}
}
else
{
echo "";	
}
	
	echo $clubA8015;?>
    </b></font> 
    <div id="Layer10" style="position:absolute; width:30px; height:20px; z-index:3; left: 230px; top: 1px; background-image:  url(../result2.jpg); layer-background-image:  url(../result2.jpg); border: 1px none #000000"> 
      <div align="center"><font color="#FFCC00" face="Geneva, Arial, Helvetica, san-serif"size="3"><b> 
        <?php
mysql_connect("sql.franceserv.fr", "onepip-france", "lavelan09");
mysql_select_db("onepip-france-db1");
$reponse = mysql_query("SELECT * FROM bdpf$annee WHERE id='130'");

while ($donnees = mysql_fetch_array($reponse) )
{ 
?>
        <?php $R8015= $donnees['R8015'];?>
        <?php echo $R8015;?>
        <?php
}
?>
        </b></font></div>
    </div>
    <font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="2"><b> 
    </b></font> 
    <div id="Layer10" style="position:absolute; width:30px; height:20px; z-index:3; left: 230px; top: 21px; background-image:  url(../result2.jpg); layer-background-image:  url(../result2.jpg); border: 1px none #000000"> 
      <div align="center"><font color="#FFCC00" face="Geneva, Arial, Helvetica, san-serif"size="3"><b> 
        <?php
mysql_connect("sql.franceserv.fr", "onepip-france", "lavelan09");
mysql_select_db("onepip-france-db1");
$reponse = mysql_query("SELECT * FROM bdpf$annee WHERE id='130'");

while ($donnees = mysql_fetch_array($reponse) )
{ 
?>
        <?php $R8016=$donnees['R8016'];?>
        <?php echo $R8016;?>
        <?php
}
?>
        </b></font></div>
    </div>
    <font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="2"><b> 
    </b></font><font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="2"><b>	
    </b></font></div>
</div>
<div id="Layer1" style="position:absolute; width:200px; height:20px; z-index:3; left: 573px; top: 300px; background-image:  url(../unique3.jpg); layer-background-image:  url(../unique3.jpg); border: 1px none #000000"> 
  <div align="center"> 
    <div id="Layer10" style="position:absolute; width:30px; height:20px; z-index:3; left: 200px; top: 21px; background-image:  url(../result2.jpg); layer-background-image:  url(../result2.jpg); border: 1px none #000000"> 
      <div align="center"><font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="3"><b> 
        <?php
mysql_connect("sql.franceserv.fr", "onepip-france", "lavelan09");
mysql_select_db("onepip-france-db1");
$reponse = mysql_query("SELECT * FROM bdpf$annee WHERE id='150'");

while ($donnees = mysql_fetch_array($reponse) )
{ 
?>
        <?php $A4002=$donnees['A4002'];?>
        <?php echo $A4002;?>
        <?php
}
?>
        </b></font></div>
    </div>
    <div id="Layer9" style="position:absolute; width:200px; height:20px; z-index:2; left: 0px; top: 20px; background-image:  url(../unique3.jpg); layer-background-image:  url(../unique3.jpg); border: 1px none #000000"> 
      <div align="center"><font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="2"><b> 
         <?php 
if ($A8003+$A8004>0)
{	
	
	if ($A8003> $A8004)
	{
	$clubA4002=$clubA8003;
	}
	else
	{
	$clubA4002=$clubA8004;
	}
}
else
{
echo "";	
}	
	
	echo $clubA4002;
  ?>
		
		
        </b></font></div>
    </div>
    <div id="Layer10" style="position:absolute; width:30px; height:20px; z-index:3; left: 200px; top: 1px; background-image:  url(../result2.jpg); layer-background-image:  url(../result2.jpg); border: 1px none #000000"> 
      <div align="center"><font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="3"><b> 
        <?php
mysql_connect("sql.franceserv.fr", "onepip-france", "lavelan09");
mysql_select_db("onepip-france-db1");
$reponse = mysql_query("SELECT * FROM bdpf$annee WHERE id='150'");

while ($donnees = mysql_fetch_array($reponse) )
{ 
?>
        <?php $A4001= $donnees['A4001'];?>
        <?php echo $A4001;?>
        <?php
}
?>
        </b></font></div>
    </div>
    <font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="2"><b> 
    <?php 
if ($A8001+$A8002>0)
{	
	
	if ($A8001> $A8002)
	{
	$clubA4001=$clubA8001;
	}
	else
	{
	$clubA4001=$clubA8002;
	}
}
else
{
echo "";	
}	
	
	echo $clubA4001;
  ?>
    </b></font>
    <div id="Layer10" style="position:absolute; width:30px; height:20px; z-index:3; left: 230px; top: 1px; background-image:  url(../result2.jpg); layer-background-image:  url(../result2.jpg); border: 1px none #000000"> 
      <div align="center"><font color="#FFCC00" face="Geneva, Arial, Helvetica, san-serif"size="3"><b> 
        <?php
mysql_connect("sql.franceserv.fr", "onepip-france", "lavelan09");
mysql_select_db("onepip-france-db1");
$reponse = mysql_query("SELECT * FROM bdpf$annee WHERE id='130'");

while ($donnees = mysql_fetch_array($reponse) )
{ 
?>
        <?php $A4001= $donnees['A4001'];?>
        <?php echo $A4001;?>
        <?php
}
?>
        </b></font></div>
    </div>
    <font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="2"><b> 
    </b></font> 
    <div id="Layer10" style="position:absolute; width:30px; height:20px; z-index:3; left: 230px; top: 21px; background-image:  url(../result2.jpg); layer-background-image:  url(../result2.jpg); border: 1px none #000000"> 
      <div align="center"><font color="#FFCC00" face="Geneva, Arial, Helvetica, san-serif"size="3"><b> 
        <?php
mysql_connect("sql.franceserv.fr", "onepip-france", "lavelan09");
mysql_select_db("onepip-france-db1");
$reponse = mysql_query("SELECT * FROM bdpf$annee WHERE id='130'");

while ($donnees = mysql_fetch_array($reponse) )
{ 
?>
        <?php $A4002=$donnees['A4002'];?>
        <?php echo $A4002;?>
        <?php
}
?>
        </b></font></div>
    </div>
    <font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="2"><b> 
    </b></font><font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="2"><b>	
    </b></font></div>
</div>
<div id="Layer1" style="position:absolute; width:200px; height:20px; z-index:3; left: 573px; top: 460px; background-image:  url(../unique3.jpg); layer-background-image:  url(../unique3.jpg); border: 1px none #000000"> 
  <div align="center"> 
    <div id="Layer10" style="position:absolute; width:30px; height:20px; z-index:3; left: 200px; top: 21px; background-image:  url(../result2.jpg); layer-background-image:  url(../result2.jpg); border: 1px none #000000"> 
      <div align="center"><font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="3"><b> 
        <?php
mysql_connect("sql.franceserv.fr", "onepip-france", "lavelan09");
mysql_select_db("onepip-france-db1");
$reponse = mysql_query("SELECT * FROM bdpf$annee WHERE id='150'");

while ($donnees = mysql_fetch_array($reponse) )
{ 
?>
        <?php $A4004=$donnees['A4004'];?>
        <?php echo $A4004;?>
        <?php
}
?>
        </b></font></div>
    </div>
    <div id="Layer9" style="position:absolute; width:200px; height:20px; z-index:2; left: 0px; top: 20px; background-image:  url(../unique3.jpg); layer-background-image:  url(../unique3.jpg); border: 1px none #000000"> 
      <div align="center"><font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="2"><b> 
       <?php 
if ($A8007+$A8008>0)
{	
	
	if ($A8007> $A8008)
	{
	$clubA4004=$clubA8007;
	}
	else
	{
	$clubA4004=$clubA8008;
	}
}
else
{
echo "";	
}	
	
	echo $clubA4004;
  ?> 
	   
        </b></font></div>
    </div>
    <div id="Layer10" style="position:absolute; width:30px; height:20px; z-index:3; left: 200px; top: 1px; background-image:  url(../result2.jpg); layer-background-image:  url(../result2.jpg); border: 1px none #000000"> 
      <div align="center"><font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="3"><b> 
        <?php
mysql_connect("sql.franceserv.fr", "onepip-france", "lavelan09");
mysql_select_db("onepip-france-db1");
$reponse = mysql_query("SELECT * FROM bdpf$annee WHERE id='150'");

while ($donnees = mysql_fetch_array($reponse) )
{ 
?>
        <?php $A4003= $donnees['A4003'];?>
        <?php echo $A4003;?>
        <?php
}
?>
        </b></font></div>
    </div>
    <font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="2"><b> 
    <?php 
if ($A8005+$A8006>0)
{	
	
	if ($A8005> $A8006)
	{
	$clubA4003=$clubA8005;
	}
	else
	{
	$clubA4003=$clubA8006;
	}
}
else
{
echo "";	
}	
	
	echo $clubA4003;
  ?>
    </b></font>
    <div id="Layer10" style="position:absolute; width:30px; height:20px; z-index:3; left: 230px; top: 1px; background-image:  url(../result2.jpg); layer-background-image:  url(../result2.jpg); border: 1px none #000000"> 
      <div align="center"><font color="#FFCC00" face="Geneva, Arial, Helvetica, san-serif"size="3"><b> 
        <?php
mysql_connect("sql.franceserv.fr", "onepip-france", "lavelan09");
mysql_select_db("onepip-france-db1");
$reponse = mysql_query("SELECT * FROM bdpf$annee WHERE id='130'");

while ($donnees = mysql_fetch_array($reponse) )
{ 
?>
        <?php $A4001= $donnees['A4001'];?>
        <?php echo $A4001;?>
        <?php
}
?>
        </b></font></div>
    </div>
    <font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="2"><b> 
    </b></font> 
    <div id="Layer10" style="position:absolute; width:30px; height:20px; z-index:3; left: 230px; top: 21px; background-image:  url(../result2.jpg); layer-background-image:  url(../result2.jpg); border: 1px none #000000"> 
      <div align="center"><font color="#FFCC00" face="Geneva, Arial, Helvetica, san-serif"size="3"><b> 
        <?php
mysql_connect("sql.franceserv.fr", "onepip-france", "lavelan09");
mysql_select_db("onepip-france-db1");
$reponse = mysql_query("SELECT * FROM bdpf$annee WHERE id='130'");

while ($donnees = mysql_fetch_array($reponse) )
{ 
?>
        <?php $A4002=$donnees['A4002'];?>
        <?php echo $A4002;?>
        <?php
}
?>
        </b></font></div>
    </div>
    <font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="2"><b> 
    </b></font><font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="2"><b>	
    </b></font></div>
</div>
<div id="Layer1" style="position:absolute; width:200px; height:20px; z-index:3; left: 572px; top: 622px; background-image:  url(../unique3.jpg); layer-background-image:  url(../unique3.jpg); border: 1px none #000000"> 
  <div align="center"> 
    <div id="Layer10" style="position:absolute; width:30px; height:20px; z-index:3; left: 200px; top: 21px; background-image:  url(../result2.jpg); layer-background-image:  url(../result2.jpg); border: 1px none #000000"> 
      <div align="center"><font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="3"><b> 
        <?php
mysql_connect("sql.franceserv.fr", "onepip-france", "lavelan09");
mysql_select_db("onepip-france-db1");
$reponse = mysql_query("SELECT * FROM bdpf$annee WHERE id='150'");

while ($donnees = mysql_fetch_array($reponse) )
{ 
?>
        <?php $A4006=$donnees['A4006'];?>
        <?php echo $A4006;?>
        <?php
}
?>
        </b></font></div>
    </div>
    <div id="Layer9" style="position:absolute; width:200px; height:20px; z-index:2; left: 0px; top: 20px; background-image:  url(../unique3.jpg); layer-background-image:  url(../unique3.jpg); border: 1px none #000000"> 
      <div align="center"><font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="2"><b> 
        <?php 
if ($A8011+$A8012>0)
{	
	
	if ($A8011> $A8012)
	{
	$clubA4006=$clubA8011;
	}
	else
	{
	$clubA4006=$clubA8012;
	}
}
else
{
echo "";	
}	
	
	echo $clubA4006;
  ?> 
		
		
        </b></font></div>
    </div>
    <div id="Layer10" style="position:absolute; width:30px; height:20px; z-index:3; left: 200px; top: 1px; background-image:  url(../result2.jpg); layer-background-image:  url(../result2.jpg); border: 1px none #000000"> 
      <div align="center"><font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="3"><b> 
        <?php
mysql_connect("sql.franceserv.fr", "onepip-france", "lavelan09");
mysql_select_db("onepip-france-db1");
$reponse = mysql_query("SELECT * FROM bdpf$annee WHERE id='150'");

while ($donnees = mysql_fetch_array($reponse) )
{ 
?>
        <?php $A4005= $donnees['A4005'];?>
        <?php echo $A4005;?>
        <?php
}
?>
        </b></font></div>
    </div>
    <font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="2"><b> 
    <?php 
if ($A8009+$A8010>0)
{	
	
	if ($A8009> $A8010)
	{
	$clubA4005=$clubA8009;
	}
	else
	{
	$clubA4005=$clubA8010;
	}
}
else
{
echo "";	
}	
	
	echo $clubA4005;
  ?>
    </b></font>
    <div id="Layer10" style="position:absolute; width:30px; height:20px; z-index:3; left: 230px; top: 1px; background-image:  url(../result2.jpg); layer-background-image:  url(../result2.jpg); border: 1px none #000000"> 
      <div align="center"><font color="#FFCC00" face="Geneva, Arial, Helvetica, san-serif"size="3"><b> 
        <?php
mysql_connect("sql.franceserv.fr", "onepip-france", "lavelan09");
mysql_select_db("onepip-france-db1");
$reponse = mysql_query("SELECT * FROM bdpf$annee WHERE id='130'");

while ($donnees = mysql_fetch_array($reponse) )
{ 
?>
        <?php $A4001= $donnees['A4001'];?>
        <?php echo $A4001;?>
        <?php
}
?>
        </b></font></div>
    </div>
    <font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="2"><b> 
    </b></font> 
    <div id="Layer10" style="position:absolute; width:30px; height:20px; z-index:3; left: 230px; top: 21px; background-image:  url(../result2.jpg); layer-background-image:  url(../result2.jpg); border: 1px none #000000"> 
      <div align="center"><font color="#FFCC00" face="Geneva, Arial, Helvetica, san-serif"size="3"><b> 
        <?php
mysql_connect("sql.franceserv.fr", "onepip-france", "lavelan09");
mysql_select_db("onepip-france-db1");
$reponse = mysql_query("SELECT * FROM bdpf$annee WHERE id='130'");

while ($donnees = mysql_fetch_array($reponse) )
{ 
?>
        <?php $A4002=$donnees['A4002'];?>
        <?php echo $A4002;?>
        <?php
}
?>
        </b></font></div>
    </div>
    <font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="2"><b> 
    </b></font><font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="2"><b> 
    </b></font></div>
</div>
<div id="Layer1" style="position:absolute; width:200px; height:20px; z-index:3; left: 572px; top: 782px; background-image:  url(../unique3.jpg); layer-background-image:  url(../unique3.jpg); border: 1px none #000000"> 
  <div align="center"> 
    <div id="Layer10" style="position:absolute; width:30px; height:20px; z-index:3; left: 200px; top: 21px; background-image:  url(../result2.jpg); layer-background-image:  url(../result2.jpg); border: 1px none #000000"> 
      <div align="center"><font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="3"><b> 
        <?php
mysql_connect("sql.franceserv.fr", "onepip-france", "lavelan09");
mysql_select_db("onepip-france-db1");
$reponse = mysql_query("SELECT * FROM bdpf$annee WHERE id='150'");

while ($donnees = mysql_fetch_array($reponse) )
{ 
?>
        <?php $A4008=$donnees['A4008'];?>
        <?php echo $A4008;?>
        <?php
}
?>
        </b></font></div>
    </div>
    <div id="Layer9" style="position:absolute; width:200px; height:20px; z-index:2; left: 0px; top: 20px; background-image:  url(../unique3.jpg); layer-background-image:  url(../unique3.jpg); border: 1px none #000000"> 
      <div align="center"><font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="2"><b> 
         <?php 
if ($A8015+$A8016>0)
{	
	
	if ($A8015> $A8016)
	{
	$clubA4008=$clubA8015;
	}
	else
	{
	$clubA4008=$clubA8016;
	}
}
else
{
echo "";	
}	
	
	echo $clubA4008;
  ?>
  
  
        </b></font></div>
    </div>
    <div id="Layer10" style="position:absolute; width:30px; height:20px; z-index:3; left: 200px; top: 1px; background-image:  url(../result2.jpg); layer-background-image:  url(../result2.jpg); border: 1px none #000000"> 
      <div align="center"><font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="3"><b> 
        <?php
mysql_connect("sql.franceserv.fr", "onepip-france", "lavelan09");
mysql_select_db("onepip-france-db1");
$reponse = mysql_query("SELECT * FROM bdpf$annee WHERE id='150'");

while ($donnees = mysql_fetch_array($reponse) )
{ 
?>
        <?php $A4007= $donnees['A4007'];?>
        <?php echo $A4007;?>
        <?php
}
?>
        </b></font></div>
    </div>
    <font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="2"><b> 
    <?php 
if ($A8013+$A8014>0)
{	
	
	if ($A8013> $A8014)
	{
	$clubA4007=$clubA8013;
	}
	else
	{
	$clubA4007=$clubA8014;
	}
}
else
{
echo "";	
}	
	
	echo $clubA4007;
  ?>
    </b></font>
    <div id="Layer10" style="position:absolute; width:30px; height:20px; z-index:3; left: 230px; top: 1px; background-image:  url(../result2.jpg); layer-background-image:  url(../result2.jpg); border: 1px none #000000"> 
      <div align="center"><font color="#FFCC00" face="Geneva, Arial, Helvetica, san-serif"size="3"><b> 
        <?php
mysql_connect("sql.franceserv.fr", "onepip-france", "lavelan09");
mysql_select_db("onepip-france-db1");
$reponse = mysql_query("SELECT * FROM bdpf$annee WHERE id='130'");

while ($donnees = mysql_fetch_array($reponse) )
{ 
?>
        <?php $A4001= $donnees['A4001'];?>
        <?php echo $A4001;?>
        <?php
}
?>
        </b></font></div>
    </div>
    <font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="2"><b> 
    </b></font> 
    <div id="Layer10" style="position:absolute; width:30px; height:20px; z-index:3; left: 230px; top: 21px; background-image:  url(../result2.jpg); layer-background-image:  url(../result2.jpg); border: 1px none #000000"> 
      <div align="center"><font color="#FFCC00" face="Geneva, Arial, Helvetica, san-serif"size="3"><b> 
        <?php
mysql_connect("sql.franceserv.fr", "onepip-france", "lavelan09");
mysql_select_db("onepip-france-db1");
$reponse = mysql_query("SELECT * FROM bdpf$annee WHERE id='130'");

while ($donnees = mysql_fetch_array($reponse) )
{ 
?>
        <?php $A4002=$donnees['A4002'];?>
        <?php echo $A4002;?>
        <?php
}
?>
        </b></font></div>
    </div>
    <font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="2"><b> 
    </b></font><font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="2"><b>	
    </b></font></div>
</div>
<div id="Layer1" style="position:absolute; width:200px; height:20px; z-index:3; left: 843px; top: 382px; background-image:  url(../unique3.jpg); layer-background-image:  url(../unique3.jpg); border: 1px none #000000"> 
  <div align="center"> 
    <div id="Layer10" style="position:absolute; width:30px; height:20px; z-index:3; left: 200px; top: 21px; background-image:  url(../result2.jpg); layer-background-image:  url(../result2.jpg); border: 1px none #000000"> 
      <div align="center"><font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="3"><b> 
        <?php
mysql_connect("sql.franceserv.fr", "onepip-france", "lavelan09");
mysql_select_db("onepip-france-db1");
$reponse = mysql_query("SELECT * FROM bdpf$annee WHERE id='150'");

while ($donnees = mysql_fetch_array($reponse) )
{ 
?>
        <?php $A2002=$donnees['A2002'];?>
        <?php echo $A2002;?>
        <?php
}
?>
        </b></font></div>
    </div>
    <div id="Layer9" style="position:absolute; width:200px; height:20px; z-index:2; left: 0px; top: 20px; background-image:  url(../unique3.jpg); layer-background-image:  url(../unique3.jpg); border: 1px none #000000"> 
      <div align="center"><font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="2"><b> 
        <?php 
if ($A4003+$A4004>0)
{	
	
	if ($A4003> $A4004)
	{
	$clubA2002=$clubA4003;
	}
	else
	{
	$clubA2002=$clubA4004;
	}
}
else
{
echo "";	
}	
	
	echo $clubA2002;
  ?> 
        </b></font></div>
    </div>
    <div id="Layer10" style="position:absolute; width:30px; height:20px; z-index:3; left: 200px; top: 1px; background-image:  url(../result2.jpg); layer-background-image:  url(../result2.jpg); border: 1px none #000000"> 
      <div align="center"><font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="3"><b> 
        <?php
mysql_connect("sql.franceserv.fr", "onepip-france", "lavelan09");
mysql_select_db("onepip-france-db1");
$reponse = mysql_query("SELECT * FROM bdpf$annee WHERE id='150'");

while ($donnees = mysql_fetch_array($reponse) )
{ 
?>
        <?php $A2001= $donnees['A2001'];?>
        <?php echo $A2001;?>
        <?php
}
?>
        </b></font></div>
    </div>
    <font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="2"><b> 
    <?php 
if ($A4001+$A4002>0)
{	
	
	if ($A4001> $A4002)
	{
	$clubA2001=$clubA4001;
	}
	else
	{
	$clubA2001=$clubA4002;
	}
}
else
{
echo "";	
}	
	
	echo $clubA2001;
  ?>
   
   
   
    </b></font></div>
</div>
<div id="Layer1" style="position:absolute; width:200px; height:20px; z-index:3; left: 843px; top: 702px; background-image:  url(../unique3.jpg); layer-background-image:  url(../unique3.jpg); border: 1px none #000000"> 
  <div align="center"> 
    <div id="Layer10" style="position:absolute; width:30px; height:20px; z-index:3; left: 200px; top: 21px; background-image:  url(../result2.jpg); layer-background-image:  url(../result2.jpg); border: 1px none #000000"> 
      <div align="center"><font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="3"><b> 
        <?php
mysql_connect("sql.franceserv.fr", "onepip-france", "lavelan09");
mysql_select_db("onepip-france-db1");
$reponse = mysql_query("SELECT * FROM bdpf$annee WHERE id='150'");

while ($donnees = mysql_fetch_array($reponse) )
{ 
?>
        <?php $A2004=$donnees['A2004'];?>
        <?php echo $A2004;?>
        <?php
}
?>
        </b></font></div>
    </div>
    <div id="Layer9" style="position:absolute; width:200px; height:20px; z-index:2; left: 0px; top: 20px; background-image:  url(../unique3.jpg); layer-background-image:  url(../unique3.jpg); border: 1px none #000000"> 
      <div align="center"><font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="2"><b> 
        
		 <?php 
if ($A4007+$A4008>0)
{	
	
	if ($A4007> $A4008)
	{
	$clubA2004=$clubA4007;
	}
	else
	{
	$clubA2004=$clubA4008;
	}
}
else
{
echo "";	
}	
	
	echo $clubA2004;
  ?> 
		
        </b></font></div>
    </div>
    <div id="Layer10" style="position:absolute; width:30px; height:20px; z-index:3; left: 200px; top: 1px; background-image:  url(../result2.jpg); layer-background-image:  url(../result2.jpg); border: 1px none #000000"> 
      <div align="center"><font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="3"><b> 
        <?php
mysql_connect("sql.franceserv.fr", "onepip-france", "lavelan09");
mysql_select_db("onepip-france-db1");
$reponse = mysql_query("SELECT * FROM bdpf$annee WHERE id='150'");

while ($donnees = mysql_fetch_array($reponse) )
{ 
?>
        <?php $A2003= $donnees['A2003'];?>
        <?php echo $A2003;?>
        <?php
}
?>
        </b></font></div>
    </div>
    <font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="2"><b> 
    
	 <?php 
if ($A4005+$A4006>0)
{	
	
	if ($A4005> $A4006)
	{
	$clubA2003=$clubA4005;
	}
	else
	{
	$clubA2003=$clubA4006;
	}
}
else
{
echo "";	
}	
	
	echo $clubA2003;
  ?> 
	
	
    </b></font></div>
</div>
<div id="Layer1" style="position:absolute; width:200px; height:20px; z-index:3; left: 1084px; top: 542px; background-image:  url(../unique3.jpg); layer-background-image:  url(../unique3.jpg); border: 1px none #000000"> 
  <div align="center"> 
    <div id="Layer10" style="position:absolute; width:30px; height:20px; z-index:3; left: 200px; top: 21px; background-image:  url(../result2.jpg); layer-background-image:  url(../result2.jpg); border: 1px none #000000"> 
      <div align="center"><font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="3"><b> 
        <?php
mysql_connect("sql.franceserv.fr", "onepip-france", "lavelan09");
mysql_select_db("onepip-france-db1");
$reponse = mysql_query("SELECT * FROM bdpf$annee WHERE id='150'");

while ($donnees = mysql_fetch_array($reponse) )
{ 
?>
        <?php $A1002=$donnees['A1002'];?>
        <?php echo $A1002;?>
        <?php
}
?>
        </b></font></div>
    </div>
    <div id="Layer9" style="position:absolute; width:200px; height:20px; z-index:2; left: 0px; top: 20px; background-image:  url(../unique3.jpg); layer-background-image:  url(../unique3.jpg); border: 1px none #000000"> 
      <div align="center"><font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="2"><b> 
         <?php 
if ($A2003+$A2004>0)
{	
	
	if ($A2003> $A2004)
	{
	$clubA1002=$clubA2003;
	}
	else
	{
	$clubA1002=$clubA2004;
	}
}
else
{
echo "";	
}	
	
	echo $clubA1002;
  ?> 
		
		
        </b></font></div>
    </div>
    <div id="Layer10" style="position:absolute; width:30px; height:20px; z-index:3; left: 200px; top: 1px; background-image:  url(../result2.jpg); layer-background-image:  url(../result2.jpg); border: 1px none #000000"> 
      <div align="center"><font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="3"><b> 
        <?php
mysql_connect("sql.franceserv.fr", "onepip-france", "lavelan09");
mysql_select_db("onepip-france-db1");
$reponse = mysql_query("SELECT * FROM bdpf$annee WHERE id='150'");

while ($donnees = mysql_fetch_array($reponse) )
{ 
?>
        <?php $A8001= $donnees['A1001'];?>
        <?php echo $A8001;?>
        <?php
}
?>
        </b></font></div>
    </div>
    <font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="2"><b> 
     <?php 
if ($A2001+$A2002>0)
{	
	
	if ($A2001> $A2002)
	{
	$clubA1001=$clubA2001;
	}
	else
	{
	$clubA1001=$clubA2002;
	}
}
else
{
echo "";	
}	
	
	echo $clubA1001;
  ?> 
	
	
    </b></font></div>
</div>
<div id="Layer4" style="position:absolute; width:2px; height:160px; z-index:6; left: 839px; top: 322px; background-color: #FF0000; layer-background-color: #FF0000; border: 1px none #000000"></div>
<div id="Layer4" style="position:absolute; width:2px; height:40px; z-index:6; left: 286px; top: 582px; background-color: #FF0000; layer-background-color: #FF0000; border: 1px none #000000"></div>
<div id="Layer4" style="position:absolute; width:2px; height:320px; z-index:6; left: 1079px; top: 400px; background-color: #FF0000; layer-background-color: #FF0000; border: 1px none #000000"></div>
<div id="Layer4" style="position:absolute; width:2px; height:40px; z-index:6; left: 285px; top: 740px; background-color: #FF0000; layer-background-color: #FF0000; border: 1px none #000000"></div>
<div id="Layer4" style="position:absolute; width:2px; height:40px; z-index:6; left: 285px; top: 500px; background-color: #FF0000; layer-background-color: #FF0000; border: 1px none #000000"></div>
<div id="Layer4" style="position:absolute; width:2px; height:40px; z-index:6; left: 287px; top: 340px; background-color: #FF0000; layer-background-color: #FF0000; border: 1px none #000000"></div>
<div id="Layer4" style="position:absolute; width:2px; height:80px; z-index:6; left: 567px; top: 600px; background-color: #FF0000; layer-background-color: #FF0000; border: 1px none #000000"></div>
<div id="Layer3" style="position:absolute; width:160px; height:20px; z-index:5; left: 609px; top: 200px; background-image:  url(../titre.jpg); layer-background-image:  url(../titre.jpg); border: 1px none #000000"> 
  <div align="center"><font color="#FFFFFF"><b>Quarts de finale</b></font></div>
</div>
<div id="Layer3" style="position:absolute; width:160px; height:20px; z-index:5; left: 347px; top: 200px; background-image:  url(../titre.jpg); layer-background-image:  url(../titre.jpg); border: 1px none #000000"> 
  <div align="center"><font color="#FFFFFF"><b>8me de finale</b></font></div>
</div>
<div id="Layer3" style="position:absolute; width:160px; height:20px; z-index:5; left: 1117px; top: 202px; background-image:  url(../titre.jpg); layer-background-image:  url(../titre.jpg); border: 1px none #000000"> 
  <div align="center"><font color="#FFFFFF"><b>Finale</b></font></div>
</div>
<div id="Layer4" style="position:absolute; width:2px; height:40px; z-index:6; left: 285px; top: 660px; background-color: #FF0000; layer-background-color: #FF0000; border: 1px none #000000"></div>
<div id="Layer3" style="position:absolute; width:160px; height:20px; z-index:5; left: 874px; top: 202px; background-image:  url(../titre.jpg); layer-background-image:  url(../titre.jpg); border: 1px none #000000"> 
  <div align="center"><font color="#FFFFFF"><b>Demi finale</b></font></div>
</div>
<div id="Layer4" style="position:absolute; width:2px; height:80px; z-index:6; left: 567px; top: 282px; background-color: #FF0000; layer-background-color: #FF0000; border: 1px none #000000"></div>
<div id="Layer4" style="position:absolute; width:2px; height:160px; z-index:6; left: 838px; top: 640px; background-color: #FF0000; layer-background-color: #FF0000; border: 1px none #000000"></div>
<div id="Layer4" style="position:absolute; width:2px; height:40px; z-index:6; left: 287px; top: 260px; background-color: #FF0000; layer-background-color: #FF0000; border: 1px none #000000"></div>
<div id="Layer3" style="position:absolute; width:160px; height:20px; z-index:5; left: 76px; top: 200px; background-image:  url(../titre.jpg); layer-background-image:  url(../titre.jpg); border: 1px none #000000"> 
  <div align="center"><font color="#FFFFFF"><b>16me de finale</b></font></div>
</div>
<div id="Layer4" style="position:absolute; width:2px; height:80px; z-index:6; left: 567px; top: 440px; background-color: #FF0000; layer-background-color: #FF0000; border: 1px none #000000"></div>
<div id="Layer4" style="position:absolute; width:2px; height:80px; z-index:6; left: 566px; top: 760px; background-color: #FF0000; layer-background-color: #FF0000; border: 1px none #000000"></div>
<div id="Layer4" style="position:absolute; width:2px; height:40px; z-index:6; left: 285px; top: 420px; background-color: #FF0000; layer-background-color: #FF0000; border: 1px none #000000"></div>
<div id="Layer4" style="position:absolute; width:2px; height:40px; z-index:6; left: 286px; top: 819px; background-color: #FF0000; layer-background-color: #FF0000; border: 1px none #000000"></div>
<div id="Layer2" style="position:absolute; width:1200px; height:20px; z-index:4; left: -2px; top: 151px; background-color: #FFCC66; layer-background-color: #FFCC66; border: 1px none #000000"><i><b>F&eacute;d&eacute;rale 
  2 F&eacute;d&eacute;rale 2 F&eacute;d&eacute;rale 2 F&eacute;d&eacute;rale 2 
  F&eacute;d&eacute;rale 2 F&eacute;d&eacute;rale 2 F&eacute;d&eacute;rale 2 F&eacute;d&eacute;rale 
  2 F&eacute;d&eacute;rale 2 F&eacute;d&eacute;rale 2 F&eacute;d&eacute;rale 2 
  F&eacute;d&eacute;rale 2 F&eacute;d&eacute;rale 2 F&eacute;d&eacute;rale 2 F&eacute;d&eacute;rale 
  2 F&eacute;d&eacute;rale 2 </b></i></div>
