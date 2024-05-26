<?php $annee=$_GET['variable_1'];?>
 
<?php
if ($annee==2012)
{
$clubA2001 = 'Stade Toulousain (MPY)';
$clubA2003 = 'AS Montferrand (AU)';
$clubA4001 = 'Castres Olympique (MPY)';
$clubA4002 = 'Montpellier (LD)';
$clubA4003 = 'Racing Metro 92 (IDF)';
$clubA4004 = 'RC Toulon (CAZ)';
}

elseif ($annee==2011)
{
$clubA2001 = 'Stade Toulousain (MPY)';
$clubA2003 = 'ASM Clermont(AU)';
$clubA4001 = 'Biarritz Olympique (CBL)';
$clubA4002 = 'AS Montferrand (AU)';
$clubA4003 = 'Castres Olympique (MPY)';
$clubA4004 = 'Montpellier (LD)';
}
elseif ($annee==2010)
{
$clubA2001 = 'USA Perpignan';
$clubA2003 = 'RC Toulon	';
$clubA4001 = 'Stade Toulousain';
$clubA4002 = 'Castres Olympique';
$clubA4003 = 'ASM Clermont';
$clubA4004 = 'Racing Metro 92';
}
elseif ($annee==2009)
{
$clubA2001 = 'USAP Perpignan (R)';
$clubA2002 = 'Stade Francais (IDF)';
$clubA2003 = 'Stade Toulousain (MPY)';
$clubA2004 = 'ASM Clermont (AU)';
}
else
{
$clubA2001 = 'Premier';
$clubA2003 = 'Deuxi�me	';
$clubA4001 = 'Quatri�me';
$clubA4002 = 'Cinqui�me';
$clubA4003 = 'Troisi�me';
$clubA4004 = 'Sixi�me';
echo "<h3> <strong>D�sol�, aucune donn�es pour cette saison</h3> </strong>";
}
?>


<script language="JavaScript">
<!--
function MM_reloadPage(init) {  //reloads the window if Nav4 resized
  if (init==true) with (navigator) {if ((appName=="Netscape")&&(parseInt(appVersion)==4)) {
    document.MM_pgW=innerWidth; document.MM_pgH=innerHeight; onresize=MM_reloadPage; }}
  else if (innerWidth!=document.MM_pgW || innerHeight!=document.MM_pgH) location.reload();
}
MM_reloadPage(true);
// -->
</script>
<body link="#FFFFFF">
<div id="Layer1" style="position:absolute; width:200px; height:20px; z-index:3; left: 941px; top: 308px; background-image:  url(../unique3.jpg); layer-background-image:  url(../unique3.jpg); border: 1px none #000000"> 
  <div align="center"> 
    <div id="Layer10" style="position:absolute; width:30px; height:20px; z-index:3; left: 200px; top: 21px; background-image:  url(../result2.jpg); layer-background-image:  url(../result2.jpg); border: 1px none #000000"> 
      <div align="center"><font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="3"><b> 
        <?php
mysql_connect("sql.franceserv.fr", "onepip-france", "lavelan09");
mysql_select_db("onepip-france-db1");
$reponse = mysql_query("SELECT * FROM bdpf$annee WHERE id='110'");

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

	
	echo $clubA4004;
  ?>
		
		
        </b></font></div>
    </div>
    <div id="Layer10" style="position:absolute; width:30px; height:20px; z-index:3; left: 200px; top: 1px; background-image:  url(../result2.jpg); layer-background-image:  url(../result2.jpg); border: 1px none #000000"> 
      <div align="center"><font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="3"><b> 
        <?php
mysql_connect("sql.franceserv.fr", "onepip-france", "lavelan09");
mysql_select_db("onepip-france-db1");
$reponse = mysql_query("SELECT * FROM bdpf$annee WHERE id='110'");

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

	
	echo $clubA4003;
	mysql_close();
  ?>
	
	
	
    </b></font></div>
</div>
<div id="Layer1" style="position:absolute; width:200px; height:20px; z-index:3; left: 622px; top: 305px; background-image:  url(../unique3.jpg); layer-background-image:  url(../unique3.jpg); border: 1px none #000000"> 
  <div align="center"> 
    <div id="Layer10" style="position:absolute; width:30px; height:20px; z-index:3; left: 200px; top: 21px; background-image:  url(../result2.jpg); layer-background-image:  url(../result2.jpg); border: 1px none #000000"> 
      <div align="center"><font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="3"><b> 
        <?php
mysql_connect("sql.franceserv.fr", "onepip-france", "lavelan09");
mysql_select_db("onepip-france-db1");
$reponse = mysql_query("SELECT * FROM bdpf$annee WHERE id='110'");

while ($donnees = mysql_fetch_array($reponse) )
{ 
?>
        <?php $A4002=$donnees['A4002'];?>
        <?php echo $A4002;?>
        <?php
}
mysql_close();
?>
        </b></font></div>
    </div>
    <div id="Layer9" style="position:absolute; width:200px; height:20px; z-index:2; left: 0px; top: 20px; background-image:  url(../unique3.jpg); layer-background-image:  url(../unique3.jpg); border: 1px none #000000"> 
      <div align="center"><font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="2"><b>
        <?php 
	
	
	echo $clubA4002;
  ?>
        </b></font></div>
    </div>
    <div id="Layer10" style="position:absolute; width:30px; height:20px; z-index:3; left: 200px; top: 1px; background-image:  url(../result2.jpg); layer-background-image:  url(../result2.jpg); border: 1px none #000000"> 
      <div align="center"><font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="3"><b> 
        <?php
mysql_connect("sql.franceserv.fr", "onepip-france", "lavelan09");
mysql_select_db("onepip-france-db1");
$reponse = mysql_query("SELECT * FROM bdpf$annee WHERE id='110'");

while ($donnees = mysql_fetch_array($reponse) )
{ 
?>
        <?php $A4001= $donnees['A4001'];?>
        <?php echo $A4001;?>
        <?php
}
mysql_close();
?>
        </b></font></div>
    </div>
    <font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="2"><b> 
    <?php 
	
	
	echo $clubA4001;
  
  ?>
	
	
    </b></font></div>
</div>
<div id="Layer1" style="position:absolute; width:200px; height:20px; z-index:3; left: 620px; top: 440px; background-image:  url(../unique3.jpg); layer-background-image:  url(../unique3.jpg); border: 1px none #000000"> 
  <div align="center"> 
    <div id="Layer10" style="position:absolute; width:30px; height:20px; z-index:3; left: 200px; top: 21px; background-image:  url(../result2.jpg); layer-background-image:  url(../result2.jpg); border: 1px none #000000"> 
      <div align="center"><font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="3"><b> 
        <?php
mysql_connect("sql.franceserv.fr", "onepip-france", "lavelan09");
mysql_select_db("onepip-france-db1");
$reponse = mysql_query("SELECT * FROM bdpf$annee WHERE id='110'");

while ($donnees = mysql_fetch_array($reponse) )
{ 
?>
        <?php $A2002=$donnees['A2002'];?>
        <?php echo $A2002;?>
        <?php
}
mysql_close();
?>
        </b></font></div>
    </div>
    <div id="Layer9" style="position:absolute; width:200px; height:20px; z-index:2; left: 0px; top: 20px; background-image:  url(../unique3.jpg); layer-background-image:  url(../unique3.jpg); border: 1px none #000000"> 
      <div align="center"><font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="2"><b> 
        <?php 
if ($A4001+$A4002>0)
{	
	
	if ($A4001> $A4002)
	{
	$clubA2002=$clubA4001;
	}
	else
	{
	$clubA2002=$clubA4002;
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
$reponse = mysql_query("SELECT * FROM bdpf$annee WHERE id='110'");

while ($donnees = mysql_fetch_array($reponse) )
{ 
?>
        <?php $A2001= $donnees['A2001'];?>
        <?php echo $A2001;?>
        <?php
}
mysql_close();
?>
        </b></font></div>
    </div>
    <font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="2"><b> 
    <?php 
	echo $clubA2001;
  ?>
   
   
   
    </b></font></div>
</div>
<div id="Layer1" style="position:absolute; width:200px; height:20px; z-index:3; left: 620px; top: 553px; background-image:  url(../unique3.jpg); layer-background-image:  url(../unique3.jpg); border: 1px none #000000"> 
  <div align="center"> 
    <div id="Layer10" style="position:absolute; width:30px; height:20px; z-index:3; left: 200px; top: 21px; background-image:  url(../result2.jpg); layer-background-image:  url(../result2.jpg); border: 1px none #000000"> 
      <div align="center"><font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="3"><b> 
        <?php
mysql_connect("sql.franceserv.fr", "onepip-france", "lavelan09");
mysql_select_db("onepip-france-db1");
$reponse = mysql_query("SELECT * FROM bdpf$annee WHERE id='110'");

while ($donnees = mysql_fetch_array($reponse) )
{ 
?>
        <?php $A2004=$donnees['A2004'];?>
        <?php echo $A2004;?>
        <?php
}
mysql_close();
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
	$clubA2004=$clubA4003;
	}
	else
	{
	$clubA2004=$clubA4004;
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
$reponse = mysql_query("SELECT * FROM bdpf$annee WHERE id='110'");

while ($donnees = mysql_fetch_array($reponse) )
{ 
?>
        <?php $A2003= $donnees['A2003'];?>
        <?php echo $A2003;?>
        <?php
}
mysql_close();
?>
        </b></font></div>
    </div>
    <font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="2"><b> 
    
	 <?php 
	
	echo $clubA2003;
  ?> 
	
	
    </b></font></div>
</div>
<div id="Layer1" style="position:absolute; width:200px; height:20px; z-index:3; left: 900px; top: 480px; background-image:  url(../unique3.jpg); layer-background-image:  url(../unique3.jpg); border: 1px none #000000"> 
  <div align="center"> 
    <div id="Layer10" style="position:absolute; width:30px; height:20px; z-index:3; left: 200px; top: 21px; background-image:  url(../result2.jpg); layer-background-image:  url(../result2.jpg); border: 1px none #000000"> 
      <div align="center"><font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="3"><b> 
        <?php
mysql_connect("sql.franceserv.fr", "onepip-france", "lavelan09");
mysql_select_db("onepip-france-db1");
$reponse = mysql_query("SELECT * FROM bdpf$annee WHERE id='110'");

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
$reponse = mysql_query("SELECT * FROM bdpf$annee WHERE id='110'");

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
<div id="Layer11" style="position:absolute; width:320px; height:25px; z-index:7; left: 911px; top: 583px; background-color: #FFFF00; layer-background-color: #FFFF00; border: 1px none #000000"> 
  <div align="center"> 
    <h2><font color="#000000" face="Geneva, Arial, Helvetica, san-serif" size="2"><b><strong><br>
      </strong></b></font><font color="#000000" face="Geneva, Arial, Helvetica, san-serif"size="3"><b> 
      <font size="5" color="#FF0000"> 
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
      </font></b></font></h2>
  </div>
</div>
<div id="Layer4" style="position:absolute; width:2px; height:160px; z-index:6; left: 854px; top: 425px; background-color: #FF0000; layer-background-color: #FF0000; border: 1px none #000000"></div>
<div id="Layer3" style="position:absolute; width:160px; height:20px; z-index:5; left: 787px; top: 259px; background-image:  url(../titre.jpg); layer-background-image:  url(../titre.jpg); border: 1px none #000000"> 
  <div align="center"><font color="#FFFFFF"><b>Barrages</b></font></div>
</div>
<div id="Layer3" style="position:absolute; width:160px; height:20px; z-index:5; left: 939px; top: 399px; background-image:  url(../titre.jpg); layer-background-image:  url(../titre.jpg); border: 1px none #000000"> 
  <div align="center"><font color="#FFFFFF"><b>Finale</b></font></div>
</div>
<div id="Layer3" style="position:absolute; width:160px; height:20px; z-index:5; left: 660px; top: 397px; background-image:  url(../titre.jpg); layer-background-image:  url(../titre.jpg); border: 1px none #000000"> 
  <div align="center"><font color="#FFFFFF"><b>Demi finale</b></font></div>
</div>
<div id="Layer2" style="position:absolute; width:1200px; height:20px; z-index:4; left: -5px; top: 176px; background-color: #FFCC66; layer-background-color: #FFCC66; border: 1px none #000000"> 
  <div align="center"><i><b>Top 14 Top 14 Top 14 Top 14 Top 14 Top 14 Top 14 Top 
    14 Top 14 Top 14 Top 14 Top 14 Top 14 Top 14 Top 14 Top 14 Top 14 Top 14 Top 
    14 Top 14 Top 14 Top 14 </b></i></div>
</div>
<div id="Layer5" style="position:absolute; width:550px; height:293px; z-index:7; left: 21px; top: 282px"> 
  <?php 

{print("<img src=\"http://francefinalesrugby.franceserv.com/phases_finales/top14/classement/top14_$annee.jpg\" border=\"0\">");}
?>
</div>
<div id="Layer8" style="position:absolute; width:200px; height:25px; z-index:3; left: 645px; top: 219px"> 
  <div align="center"><font face="Lucida Handwriting" size="4"><b>PHASE FINALE</b></font> 
  </div>
</div>
<div id="Layer9" style="position:absolute; width:280px; height:26px; z-index:4; left: 161px; top: 216px"> 
  <div align="center"><font face="Lucida Handwriting" size="4"><b>SAISON REGULIERE 
    <?php $annee=$_GET['variable_1'];?>
    <?php echo $annee;?>
    </b></font></div>
</div>
<div id="Layer11" style="position:absolute; width:306px; height:33px; z-index:7; left: 911px; top: 545px; background-color: #EAECEB; layer-background-color: #EAECEB; border: 1px none #000000"> 
  <div align="center"> 
    <p><font size="4"><b><font size="5">Champion de France 
      <?php echo $annee;?>
      </font></b> </font></p>
  </div>
</div>
