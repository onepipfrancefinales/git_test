<?php $annee=$_GET['variable_1'];?>
<?php
if ($annee==2012)
{

$clubA2001 = 'AS Montferrand (AU)';
$clubA2002 = 'Montpellier (LD)';
$clubA2003 = 'USA Perpignan (R)';
$clubA2004 = 'RC Toulon (CAZ)';
}

else
{
echo "D�sol�, aucune donn�e pour cette saison";
}
?>  
<?php
if ($annee==2012)
{

$clubB2001 = 'Lyon OU (LY)';
$clubB2002 = 'Montpellier (LD)';
$clubB2003 = 'AS Bayonne (CBL)';
$clubB2004 = 'AS Montferrand (AU)';
}

else
{
echo "D�sol�, aucune donn�e pour cette saison";
}
?>  





 

<body bgcolor="#FFFFFF">
<div id="Layer2" style="position:absolute; width:1200px; height:20px; z-index:4; left: -2px; top: 192px; background-color: #FFCC66; layer-background-color: #FFCC66; border: 1px none #000000"> 
  <div align="center"><i><b>Espoir Espoir Espoir Espoir Espoir Espoir Espoir Espoir 
    Espoir Espoir Espoir Espoir Espoir Espoir Espoir Espoir Espoir Espoir Espoir 
    Espoir Espoir Espoir Espoir Espoir Espoir </b></i></div>
</div>
<div id="Layer1" style="position:absolute; width:200px; height:20px; z-index:3; left: 80px; top: 494px; background-image:  url(../unique3.jpg); layer-background-image:  url(../unique3.jpg); border: 1px none #000000"> 
  <div align="center"><font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif "size="2"><b> 
    <?php echo $clubA2003;
  ?>
    </b></font> 
    <div id="Layer9" style="position:absolute; width:200px; height:20px; z-index:2; left: 0px; top: 20px; background-image:  url(../unique3.jpg); layer-background-image:  url(../unique3.jpg); border: 1px none #000000"><font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif "size="2"><b> 
      </b></font> <font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif "size="2"><b> 
      <?php echo $clubA2004;
  ?>
      </b></font> 
      <div id="Layer3" style="position:absolute; width:30px; height:20px; z-index:1; left: 200px; top: 0px; background-image:  url(../result2.jpg); layer-background-image:  url(../result2.jpg); border: 1px none #000000"> 
        <font color="#FFCC00" face="Geneva, Arial, Helvetica, san-serif"size="3"><b> 
        <?php
mysql_connect("sql.franceserv.fr", "onepip-france", "lavelan09");
mysql_select_db("onepip-france-db1");
$reponse = mysql_query("SELECT * FROM bdpf$annee WHERE id='235'");

while ($donnees = mysql_fetch_array($reponse) )
{ 
?>
        <?php $A2004=$donnees['A2004'];?>
        <?php echo $A2004;?>
        <?php
}
?>
        </b> </font> </div>
      <font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif "size="2"><b> 
      </b></font> <font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif "size="2"><b> 
      </b></font> </div>
    <div id="Layer3" style="position:absolute; width:30px; height:20px; z-index:1; left: 200px; top: 0px; background-image:  url(../result2.jpg); layer-background-image:  url(../result2.jpg); border: 1px none #000000"> 
      <font color="#FFCC00" face="Geneva, Arial, Helvetica, san-serif"size="3"><b> 
      <?php
mysql_connect("sql.franceserv.fr", "onepip-france", "lavelan09");
mysql_select_db("onepip-france-db1");
$reponse = mysql_query("SELECT * FROM bdpf$annee WHERE id='235'");

while ($donnees = mysql_fetch_array($reponse) )
{ 
?>
      <?php $A2003=$donnees['A2003'];?>
      <?php echo $A2003;?>
      <?php
}
?>
      </b> </font> </div>
  </div>
</div>
<div id="Layer1" style="position:absolute; width:200px; height:20px; z-index:3; left: 86px; top: 359px; background-image:  url(../unique3.jpg); layer-background-image:  url(../unique3.jpg); border: 1px none #000000"> 
  <div align="center"><font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif "size="2"><b> 
    <?php echo $clubA2001;
  ?>
    </b></font> 
    <div id="Layer9" style="position:absolute; width:200px; height:20px; z-index:2; left: 0px; top: 20px; background-image:  url(../unique3.jpg); layer-background-image:  url(../unique3.jpg); border: 1px none #000000"><font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif "size="2"><b> 
      </b></font> <font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif "size="2"><b>
      <?php echo $clubA2002;
  ?>
      </b></font>
<div id="Layer3" style="position:absolute; width:30px; height:20px; z-index:1; left: 200px; top: 0px; background-image:  url(../result2.jpg); layer-background-image:  url(../result2.jpg); border: 1px none #000000"> 
        <font color="#FFCC00" face="Geneva, Arial, Helvetica, san-serif"size="3"><b> 
        <?php
mysql_connect("sql.franceserv.fr", "onepip-france", "lavelan09");
mysql_select_db("onepip-france-db1");
$reponse = mysql_query("SELECT * FROM bdpf$annee WHERE id='235'");

while ($donnees = mysql_fetch_array($reponse) )
{ 
?>
        <?php $A2002=$donnees['A2002'];?>
        <?php echo $A2002;?>
        <?php
}
?>
        </b> </font> </div>
      <font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif "size="2"><b> 
      </b></font> </div>
    <div id="Layer5" style="position:absolute; width:30px; height:20px; z-index:1; left: 200px; top: 0px; background-image:  url(../result2.jpg); layer-background-image:  url(../result2.jpg); border: 1px none #000000"> 
      <font color="#FFCC00" face="Geneva, Arial, Helvetica, san-serif"size="3"><b> 
      <?php
mysql_connect("sql.franceserv.fr", "onepip-france", "lavelan09");
mysql_select_db("onepip-france-db1");
$reponse = mysql_query("SELECT * FROM bdpf$annee WHERE id='235'");

while ($donnees = mysql_fetch_array($reponse) )
{ 
?>
      <?php $A2001=$donnees['A2001'];?>
      <?php echo $A2001;?>
      <?php
}
?>
      </b> </font> </div>
  </div>
</div>
<div id="Layer3" style="position:absolute; width:160px; height:20px; z-index:5; left: 110px; top: 239px; background-image:  url(../titre.jpg); layer-background-image:  url(../titre.jpg); border: 1px none #000000"> 
  <div align="center"><font color="#FFFFFF"><b>Demi finale</b></font></div>
</div>
<div id="Layer3" style="position:absolute; width:160px; height:20px; z-index:5; left: 442px; top: 236px; background-image:  url(../titre.jpg); layer-background-image:  url(../titre.jpg); border: 1px none #000000"> 
  <div align="center"><font color="#FFFFFF"><b>Finale</b></font></div>
</div>
<div id="Layer1" style="position:absolute; width:200px; height:20px; z-index:3; left: 399px; top: 420px; background-image:  url(../unique3.jpg); layer-background-image:  url(../unique3.jpg); border: 1px none #000000"> 
  <div align="center"><font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="2"><b>
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
    </b></font> 
    <div id="Layer10" style="position:absolute; width:30px; height:20px; z-index:3; left: 200px; top: 21px; background-image:  url(../result2.jpg); layer-background-image:  url(../result2.jpg); border: 1px none #000000"> 
      <div align="center"><font color="#FFCC00" face="Geneva, Arial, Helvetica, san-serif"size="3"><b> 
        <?php
mysql_connect("sql.franceserv.fr", "onepip-france", "lavelan09");
mysql_select_db("onepip-france-db1");
$reponse = mysql_query("SELECT * FROM bdpf$annee WHERE id='235'");

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
    <div id="Layer10" style="position:absolute; width:30px; height:20px; z-index:3; left: 200px; top: 1px; background-image:  url(../result2.jpg); layer-background-image:  url(../result2.jpg); border: 1px none #000000"> 
      <div align="center"><font color="#FFCC00" face="Geneva, Arial, Helvetica, san-serif"size="3"><b> 
        <?php
mysql_connect("sql.franceserv.fr", "onepip-france", "lavelan09");
mysql_select_db("onepip-france-db1");
$reponse = mysql_query("SELECT * FROM bdpf$annee WHERE id='235'");

while ($donnees = mysql_fetch_array($reponse) )
{ 
?>
        <?php $A1001= $donnees['A1001'];?>
        <?php echo $A1001;?>
        <?php
}
?>
        </b></font></div>
    </div>
    <div id="Layer9" style="position:absolute; width:200px; height:20px; z-index:2; left: 0px; top: 20px; background-image:  url(../unique3.jpg); layer-background-image:  url(../unique3.jpg); border: 1px none #000000"><font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="2"><b>
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
      </b></font> </div>
  </div>
</div>
<div id="Layer11" style="position:absolute; width:306px; height:59px; z-index:7; left: 705px; top: 439px; background-color: #FFFF00; layer-background-color: #FFFF00; border: 1px none #000000"> 
  <div align="center"> 
    <p><font size="5"><b>Champion de France<br>
      Espoir 
      <?php echo $annee;?>
      </b></font></p>
  </div>
</div>
<div id="Layer11" style="position:absolute; width:306px; height:33px; z-index:7; left: 706px; top: 512px; background-color: #FFFF00; layer-background-color: #FFFF00; border: 1px none #000000"> 
  <div align="center"> 
    <p><font color="#FF0000" face="Geneva, Arial, Helvetica, san-serif"size="5"><b>
      <?php 
if ($A1001+$A1002>0)
{	
	
	if ($A1001> $A1002)
	{
	$clubA1000=$clubA1001;
	}
	else
	{
	$clubA1000=$clubA1002;
	}
}
else
{
echo "";	
}	
	
	echo $clubA1000;
  ?>
      </b></font> <font size="5"><b> </b></font>
  </div>
</div>
