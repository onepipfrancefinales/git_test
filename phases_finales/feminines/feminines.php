<?php $annee=$_GET['variable_1'];?>
  
<?php
if ($annee==2011)
{
$clubA2001= ' Fonsorbes (MPY) ';
$clubA2002= ' Lille Metropole (FL)';
$clubA2003= ' Stade Bordelais (CA) ';
$clubA2004= ' AS Bayonne (CBL) ';
}
elseif ($annee==2010)
{
$clubA2001= ' Fonsorbes (MPY) ';
$clubA2002= ' Lille Metropole (FL)';
$clubA2003= ' Stade Bordelais (CA) ';
$clubA2004= ' AS Bayonne (CBL) ';
}
elseif ($annee==2009)
{
$clubA1601= ' Tours ';
$clubA1602= ' ACBB';
$clubA1603= ' Suresnes';
$clubA1604= ' MSLGP';

}
elseif ($annee==2008)
{
$clubA1601= ' RC Pays Fertais (IDF) ';
$clubA1602= ' Herbiers (PL)';
$clubA1603= ' Bain de Bretagne (BR)';
$clubA1604= ' CS Andelys (N)';
$clubA1605= ' Les Mureaux (IDF)';
$clubA1606= ' Villeneuve d Ascq (FL)';
$clubA1607= ' Auxonne (BG)';
$clubA1608= ' Selestat (AL)';
$clubA1609= ' Chateauneuf sur Loire (CE)';
$clubA1610= ' Villiers sur Marne (IDF)';
$clubA1611= ' Aigueperse (AU)';
$clubA1612= ' Mansac (LM)';
$clubA1613= 'Loudun (PCH) ';
$clubA1614= ' Sainte Eulalie en Born (CA)';
$clubA1615= ' Severac (MPY)';
$clubA1616= ' Cancon (PA)';
$clubA1617= ' Jurancon (BE)';
$clubA1618= ' Sauveterre de Bearn (CBL)';
$clubA1619= ' Montredon (MPY)';
$clubA1620= ' La Brede (CA)';
$clubA1621= ' Puylaurens (MPY)';
$clubA1622= ' US Gondrin (AB)';
$clubA1623= ' Montreal (LD) ';
$clubA1624= ' Brignemont (MPY)';
$clubA1625= ' Laroque des Alberes (R)';
$clubA1626= ' RC Pernois (PR)';
$clubA1627= ' Saint Donat (DA)';
$clubA1628= ' Succieu (LY)';
$clubA1629= ' Mourillon (CAZ)';
$clubA1630= ' Lucciana (C)';
$clubA1631= ' RC Meythet (AP)';
$clubA1632= ' Bugey (LY)';

}
elseif ($annee==2007)
{
$clubA1601 = '';
$clubA1602 = '';
$clubA1603 = '';
$clubA1604 = '';
$clubA1605 = '';
$clubA1606 = '';
$clubA1607 = '';
$clubA1608 = '';
$clubA1609 = '';
$clubA1610 = '';
$clubA1611 = '';
$clubA1612 = '';
$clubA1613 = '';
$clubA1614 = '';
$clubA1615 = '';
$clubA1616 = '';
$clubA1617 = '';
$clubA1618 = '';
$clubA1619 = '';
$clubA1620 = '';
$clubA1621 = '';
$clubA1622 = '';
$clubA1623 = '';
$clubA1624 = '';
$clubA1625 = '';
$clubA1626 = '';
$clubA1627 = '';
$clubA1628 = '';
$clubA1629 = '';
$clubA1630 = '';
$clubA1631 = '';
$clubA1632 = '';
}
else
{
echo "d�sol�, pas de donn�es pour cette saison";
}
?>

 

<body bgcolor="#FFFFFF">
<div id="Layer2" style="position:absolute; width:1800px; height:20px; z-index:4; left: 1px; top: 752px; background-color: #FFCC66; layer-background-color: #FFCC66; border: 1px none #000000"> 
  <p align="center"><a href="http://francefinalesrugby.franceserv.com/divisions/page1serie.php"></a> 
    <?php
    // On inclut le haut de la page
   include("bas.php");
    ?>
  </p>
</div>
<div id="Layer1" style="position:absolute; width:200px; height:20px; z-index:3; left: 87px; top: 582px; background-image:  url(../unique3.jpg); layer-background-image:  url(../unique3.jpg); border: 1px none #000000"> 
  <div align="center"><font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="2"><b> 
    <?php 
		echo $clubA2001;
  ?>
    </b></font> 
    <div id="Layer10" style="position:absolute; width:30px; height:20px; z-index:3; left: 200px; top: 21px; background-image:  url(../result2.jpg); layer-background-image:  url(../result2.jpg); border: 1px none #000000"> 
      <div align="center"><font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="3"><b> 
        </b></font></div>
    </div>
    <div id="Layer9" style="position:absolute; width:200px; height:20px; z-index:2; left: 0px; top: 20px; background-image:  url(../unique3.jpg); layer-background-image:  url(../unique3.jpg); border: 1px none #000000"> 
      <div align="center"><font color="#FFFFFF" face="Geneva, arial, Helvetica, san-serif"size="2"><b> 
        </b></font><font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="2"><b>
        <?php 
		echo $clubA2002;
  ?>
        </b></font></div>
    </div>
    <div id="Layer10" style="position:absolute; width:30px; height:20px; z-index:3; left: 200px; top: 1px; background-image:  url(../result2.jpg); layer-background-image:  url(../result2.jpg); border: 1px none #000000"> 
      <div align="center"><font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="3"><b>15	
        21 </b></font></div>
    </div>
    <font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="2"><b> 
    </b></font></div>
</div>
<div id="Layer1" style="position:absolute; width:200px; height:20px; z-index:3; left: 88px; top: 659px; background-image:  url(../unique3.jpg); layer-background-image:  url(../unique3.jpg); border: 1px none #000000"> 
  <div align="center"><font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="2"><b>
    <?php 
		echo $clubA2003;
  ?>
    </b></font><font color="#FFFFFF" face="Geneva, arial, Helvetica, san-serif"size="2"></font> 
    <div id="Layer10" style="position:absolute; width:30px; height:20px; z-index:3; left: 200px; top: 21px; background-image:  url(../result2.jpg); layer-background-image:  url(../result2.jpg); border: 1px none #000000"> 
      <div align="center"><font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="3"><b> 
        </b></font></div>
    </div>
    <div id="Layer9" style="position:absolute; width:200px; height:20px; z-index:2; left: 0px; top: 20px; background-image:  url(../unique3.jpg); layer-background-image:  url(../unique3.jpg); border: 1px none #000000"> 
      <div align="center"><font color="#FFFFFF" face="Geneva, arial, Helvetica, san-serif"size="2"></font><font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="2"><b>
        <?php 
		echo $clubA2004;
  ?>
        </b></font></div>
    </div>
    <div id="Layer10" style="position:absolute; width:30px; height:20px; z-index:3; left: 200px; top: 1px; background-image:  url(../result2.jpg); layer-background-image:  url(../result2.jpg); border: 1px none #000000"> 
      <div align="center"><font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="3"><b>15	
        10 </b></font></div>
    </div>
    <font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="2"><b> 
    </b></font></div>
</div>
<div id="Layer1" style="position:absolute; width:200px; height:20px; z-index:3; left: 404px; top: 609px; background-image:  url(../unique3.jpg); layer-background-image:  url(../unique3.jpg); border: 1px none #000000"> 
  <div align="center"><font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="2"><b>
    <?php 
		echo $clubA2002;
  ?>
    </b></font> 
    <div id="Layer10" style="position:absolute; width:30px; height:20px; z-index:3; left: 200px; top: 21px; background-image:    url(../../phases_finales/result2.jpg); layer-background-image:    url(../../phases_finales/result2.jpg); border: 1px none #000000"> 
      <div align="center"><font color="#FFFFFF" face="Geneva, arial, Helvetica, san-serif"size="3"><b>15 
        </b></font></div>
    </div>
    <div id="Layer9" style="position:absolute; width:200px; height:20px; z-index:2; left: 0px; top: 20px; background-image:    url(../../phases_finales/unique3.jpg); layer-background-image:    url(../../phases_finales/unique3.jpg); border: 1px none #000000"> 
      <div align="center"><font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="2"><b>
        <?php 
		echo $clubA2003;
  ?>
        </b></font><font color="#FFFFFF" face="Geneva, arial, Helvetica, san-serif"size="2"><b> 
        </b></font></div>
    </div>
    <div id="Layer10" style="position:absolute; width:30px; height:20px; z-index:3; left: 200px; top: 1px; background-image:    url(../../phases_finales/result2.jpg); layer-background-image:    url(../../phases_finales/result2.jpg); border: 1px none #000000"> 
      <div align="center"><font color="#FFFFFF" face="Geneva, arial, Helvetica, san-serif"size="3"><b>31 
        </b></font></div>
    </div>
    <font color="#FFFFFF" face="Geneva, arial, Helvetica, san-serif"size="2"><b> 
    </b></font></div>
</div>
<div id="Layer3" style="position:absolute; width:160px; height:20px; z-index:5; left: 445px; top: 493px; background-image:  url(../titre.jpg); layer-background-image:  url(../titre.jpg); border: 1px none #000000"> 
  <div align="center"><font color="#FFFFFF"><b>Finale</b></font></div>
</div>
<div id="Layer3" style="position:absolute; width:160px; height:20px; z-index:5; left: 114px; top: 491px; background-image:  url(../titre.jpg); layer-background-image:  url(../titre.jpg); border: 1px none #000000"> 
  <div align="center"><font color="#FFFFFF"><b>Demi finale</b></font></div>
</div>
<div id="Layer2" style="position:absolute; width:1600px; height:20px; z-index:4; left: -2px; top: 192px; background-color: #FFCC66; layer-background-color: #FFCC66; border: 1px none #000000"> 
  <div align="center"><i><b>1re Division Elite 1 TOP 10 1re Division Elite 1 TOP 
    10 1re Division Elite 1 TOP 10 1re Division Elite 1 TOP 10 1re Division Elite 
    1 TOP 10 1re Division Elite 1 TOP 10 Elite 1 </b></i></div>
</div>
<div id="Layer2" style="position:absolute; width:1600px; height:20px; z-index:4; left: -4px; top: 456px; background-color: #FFCC66; layer-background-color: #FFCC66; border: 1px none #000000"> 
  <div align="center"><i><b>1re Division Elite 2 Armelle Auclair 1re Division 
    Elite 2 Armelle Auclair 1re Division Elite 2 Armelle Auclair 1re Division 
    Elite 2 Armelle Auclair 1re Division Elite 2 Arme</b></i></div>
</div>
<div id="Layer1" style="position:absolute; width:200px; height:20px; z-index:3; left: 79px; top: 382px; background-image:  url(../unique3.jpg); layer-background-image:  url(../unique3.jpg); border: 1px none #000000"> 
  <div align="center"><font color="#FFFFFF" face="Geneva, arial, Helvetica, san-serif"size="2"></font> 
    <div id="Layer10" style="position:absolute; width:30px; height:20px; z-index:3; left: 200px; top: 21px; background-image:  url(../result2.jpg); layer-background-image:  url(../result2.jpg); border: 1px none #000000"> 
      <div align="center"><font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="3"><b>13 
        </b></font></div>
    </div>
    <div id="Layer9" style="position:absolute; width:200px; height:20px; z-index:2; left: 0px; top: 20px; background-image:  url(../unique3.jpg); layer-background-image:  url(../unique3.jpg); border: 1px none #000000"> 
      <div align="center"><font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="2"><b>Montpellier 
        RC </b></font></div>
    </div>
    <div id="Layer10" style="position:absolute; width:30px; height:20px; z-index:3; left: 200px; top: 1px; background-image:  url(../result2.jpg); layer-background-image:  url(../result2.jpg); border: 1px none #000000"> 
      <div align="center"><font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="3"><b>20 
        </b></font></div>
    </div>
    <font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="2"><b> 
    Rennes </b></font></div>
</div>
<div id="Layer1" style="position:absolute; width:200px; height:20px; z-index:3; left: 81px; top: 297px; background-image:  url(../unique3.jpg); layer-background-image:  url(../unique3.jpg); border: 1px none #000000"> 
  <div align="center"><font color="#FFFFFF" face="Geneva, arial, Helvetica, san-serif"size="2"></font> 
    <div id="Layer10" style="position:absolute; width:30px; height:20px; z-index:3; left: 200px; top: 21px; background-image:  url(../result2.jpg); layer-background-image:  url(../result2.jpg); border: 1px none #000000"> 
      <div align="center"><font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="3"><b>17 
        </b></font></div>
    </div>
    <div id="Layer9" style="position:absolute; width:200px; height:20px; z-index:2; left: 0px; top: 20px; background-image:  url(../unique3.jpg); layer-background-image:  url(../unique3.jpg); border: 1px none #000000"> 
      <div align="center"><font color="#FFFFFF" face="Geneva, arial, Helvetica, san-serif"size="2"><b> 
        </b></font><font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="2"><b>Bobigny 
        </b></font></div>
    </div>
    <div id="Layer10" style="position:absolute; width:30px; height:20px; z-index:3; left: 200px; top: 1px; background-image:  url(../result2.jpg); layer-background-image:  url(../result2.jpg); border: 1px none #000000"> 
      <div align="center"><font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="3"><b>22 
        </b></font></div>
    </div>
    <font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="2"><b> 
    USA Perpignan</b></font></div>
</div>
<div id="Layer3" style="position:absolute; width:160px; height:20px; z-index:5; left: 110px; top: 239px; background-image:  url(../titre.jpg); layer-background-image:  url(../titre.jpg); border: 1px none #000000"> 
  <div align="center"><font color="#FFFFFF"><b>Demi finale</b></font></div>
</div>
<div id="Layer3" style="position:absolute; width:160px; height:20px; z-index:5; left: 442px; top: 236px; background-image:  url(../titre.jpg); layer-background-image:  url(../titre.jpg); border: 1px none #000000"> 
  <div align="center"><font color="#FFFFFF"><b>Finale</b></font></div>
</div>
<div id="Layer1" style="position:absolute; width:200px; height:20px; z-index:3; left: 400px; top: 333px; background-image:  url(../unique3.jpg); layer-background-image:  url(../unique3.jpg); border: 1px none #000000"> 
  <div align="center"><font color="#FFFFFF" face="Geneva, arial, Helvetica, san-serif"size="2"></font> 
    <div id="Layer10" style="position:absolute; width:30px; height:20px; z-index:3; left: 200px; top: 21px; background-image:  url(../result2.jpg); layer-background-image:  url(../result2.jpg); border: 1px none #000000"> 
      <div align="center"><font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="3"><b>11 
        </b></font></div>
    </div>
    <div id="Layer9" style="position:absolute; width:200px; height:20px; z-index:2; left: 0px; top: 20px; background-image:  url(../unique3.jpg); layer-background-image:  url(../unique3.jpg); border: 1px none #000000"> 
      <div align="center"><font color="#FFFFFF" face="Geneva, arial, Helvetica, san-serif"size="2"><b> 
        </b></font><font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="2"><b>Rennes 
        </b></font></div>
    </div>
    <div id="Layer10" style="position:absolute; width:30px; height:20px; z-index:3; left: 200px; top: 1px; background-image:  url(../result2.jpg); layer-background-image:  url(../result2.jpg); border: 1px none #000000"> 
      <div align="center"><font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="3"><b>15</b></font></div>
    </div>
    <font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="2"><b> 
    USA Perpignan</b></font></div>
</div>
<div id="Layer11" style="position:absolute; width:306px; height:59px; z-index:7; left: 725px; top: 567px; background-color: #FFFF00; layer-background-color: #FFFF00; border: 1px none #000000"> 
  <div align="center"> <font size="5"><b>Championne de France<br>
    Elite 2 Armelle Auclair 2011 </b></font></div>
</div>
<div id="Layer11" style="position:absolute; width:306px; height:33px; z-index:7; left: 725px; top: 638px; background-color: #FFFF00; layer-background-color: #FFFF00; border: 1px none #000000"> 
  <div align="center"> <font color="#FF0000" face="Geneva, Arial, Helvetica, san-serif"size="5"><b> 
    <?php 

echo "Lille Metropole (FL)";	

  ?>
    </b></font></div>
</div>
<div id="Layer11" style="position:absolute; width:306px; height:59px; z-index:7; left: 707px; top: 318px; background-color: #FFFF00; layer-background-color: #FFFF00; border: 1px none #000000"> 
  <div align="center"> <font size="5"><b>Championne de France<br>
    Elite 1 Top 10 2011 </b></font></div>
</div>
<div id="Layer11" style="position:absolute; width:306px; height:33px; z-index:7; left: 708px; top: 391px; background-color: #FFFF00; layer-background-color: #FFFF00; border: 1px none #000000"> 
  <div align="center"> <font color="#FF0000" face="Geneva, Arial, Helvetica, san-serif"size="5"><b> 
    <?php 

echo "USA Perpignan (R)";	

  ?>
    </b></font></div>
</div>
