<?php
 // ********  Sommaire féminines  *******
if ($cmt == "fem")
{
 ?>
<table class="sommaire" align="center">
  <tr>
    <td class="tab3" colspan="2"><a href="page_elite1.php#1">Elite 1</a></td>
    <td class="tab3" colspan="2"><a href="page_elite1.php#2">Elite 2 </a></td>
    <td class="tab3" colspan="2"><a href="page_federale.php">F&eacute;d&eacute;rale 1 </a></td>
  </tr>
  <tr>
    <td class="tab3" colspan="6"><a href="../../index.php">Comp&eacute;titions masculines</a></td>
   
  </tr>
  
</table>
<?php
}
 // ********  Sommaire Pro  *******
elseif ($cmt == "pro")
{
 ?>
<table class="sommaire" align="center">
  <tr>
    <td class="tab3"><a href="#1">Top 14 </a></td>
    <td class="tab3"><a href="#2">Pro D2 </a></td>
	<td class="tab3"><a href="#3">Nationale 1</a></td>
    <td class="tab3"><a href="#3">Nationale 2</a></td>
  </tr>
</table>
<?php
}
 // ********  Sommaire Fédérale 1  *******
elseif ($cmt == "f1")
{
 ?>
<table class="sommaire" align="center">
  <tr>
    <td class="tab3" colspan="2"><a href="#1">Poule 1 </a></td>
    <td class="tab3" colspan="2"><a href="#2">Poule 2 </a></td>
    <td class="tab3" colspan="2"><a href="#3">Poule 3 </a></td>
    <td class="tab3" colspan="2"><a href="#4">Poule 4 </a></td>
  </tr>
</table>
<?php
}
 //   ********  Sommaire Fédérale 2  ********
elseif ($cmt =="fed2")
{
 ?>
<table class="sommaire" align="center">
  <tr> 
    <td class="tab3"><a href="#1">Poule 1</a></td>
    <td class="tab3"><a href="#2">Poule 2</a></td>
    <td class="tab3"><a href="#3">Poule 3</a></td>
    <td class="tab3"><a href="#4">Poule 4</a></td>
  </tr>
  <tr> 
    <td class="tab3"><a href="#5">Poule 5</a></td>
    <td class="tab3"><a href="#6">Poule 6</a></td>
    <td class="tab3"><a href="#7">Poule 7</a></td>
    <td class="tab3"><a href="#8">Poule 8</a></td>
  </tr>
</table>

<?php
}

 //  ******  Sommaire Fédérale 3  ********
elseif ($cmt =="fed3NE" or $cmt =="fed3GS")
{
 ?>

<table class="sommaireFed3" align="center" >
  <tr> 
    <td class="tab3"><a href="page_fed3NE.php#1">Poule 1</a></td>
    <td class="tab3"><a href="page_fed3NE.php#2">Poule 2</a></td>
    <td class="tab3"><a href="page_fed3NE.php#3">Poule 3 </a></td>
    <td class="tab3"><a href="page_fed3NE.php#4">Poule 4 </a></td>
    <td class="tab3"><a href="page_fed3NE.php#5">Poule 5 </a></td>
    <td class="tab3"><a href="page_fed3NE.php#6">Poule 6 </a></td>
    <td class="tab3"><a href="page_fed3NE.php#7">Poule 7 </a></td>
    <td class="tab3"><a href="page_fed3NE.php#8">Poule 8 </a></td>
	<td class="tab3"><a href="page_fed3NE.php#9">Poule 9 </a></td>
	
  </tr>
  <tr> 
   <td class="tab3"><a href="page_fed3GS.php#10">Poule 10 </a></td>
  <td class="tab3"><a href="page_fed3GS.php#11">Poule 11</a></td>
    <td class="tab3"><a href="page_fed3GS.php#12">Poule 12</a></td>
    <td class="tab3"><a href="page_fed3GS.php#13">Poule 13 </a></td>
    <td class="tab3"><a href="page_fed3GS.php#14">Poule 14 </a></td>
    <td class="tab3"><a href="page_fed3GS.php#15">Poule 15 </a></td>
    <td class="tab3"><a href="page_fed3GS.php#16">Poule 16 </a></td>
    <td class="tab3"><a href="page_fed3GS.php#17">Poule 17 </a></td>
    <td class="tab3"><a href="page_fed3GS.php#18">Poule 18 </a></td>
	
  </tr>
  
  </table>

<?php
}
 // **** Sommaire ligues Nouvelle AQuitaine et Auvergne Rhône Alpes  *****
//elseif ($cmt =="au" OR $cmt =="ca" )
elseif ( $cmt =="au" or $cmt =="ab" or $cmt == "ca")
{
 if ($cmt == "au" ) $cmt2 = "ara"; 
 elseif ($cmt == "ab")  $cmt2 = "occ";
 elseif ($cmt == "ca")  $cmt2 = "naq";
 ?>
  <table class="sommaire" align="center" width="519" height="49">
    <tr> 
      <td class="tab3" width="157"><a href="page_<?php echo $cmt2;?>_reg1.php">R&eacute;gionale 1</a></td>
      <td class="tab3" colspan="2"><a href="page_<?php echo $cmt2;?>_reg2.php">R&eacute;gionale 2</a> </td>
      <td class="tab3" width="173"><a href="page_<?php echo $cmt2;?>_reg3.php">R&eacute;gionale 3 </a></td>
    </tr>
    <tr> 
      <td class="tab3" colspan="4"><a href="../feminine/index_fem.php">Comp&eacute;titions f&eacute;minines</a> </td>
    </tr>
  </table>
  <?php
}
/*
elseif ($cmt == "ab")
{
 ?>
  <table class="sommaire" align="center" width="519" height="49">
    <tr> 
      <td class="tab3" ><a href="page_occ_H.php#H">Honneur</a></td>
      <td class="tab3" ><a href="page_occ_PH.php#PH">Promotion</a> </td>
      <td class="tab3" ><a href="page_occ_S1.php#S1">1re S&eacute;rie</a></td>
	  <td class="tab3" ><a href="page_occ_S2.php#S2">2me S&eacute;rie</a></td>
    </tr>
    <tr> 
      <td  class="tab3" colspan="2"><a href="page_occ_S3S4.php">3me/ 4me S&eacute;rie </a></td>
      <td  class="tab3" colspan="2"><a href="../feminine/index_fem.php">Comp&eacute;titions f&eacute;minines</a> </td>
    </tr>
  </table>
  <?php
}
elseif ($cmt == "au")
{
  ?>
  <table class="sommaire" align="center"width="519" height="49">
    <tr> 
      <td class="tab3"><a href="page_ara_H.php">Honneur</a> </td>
   	  <td class="tab3"><a href="page_ara_PH.php">Promotion</a></td>
      <td class="tab3"><a href="page_ara_S1.php">1re S&eacute;rie</a></td>
      <td class="tab3"><a href="page_ara_S2.php">2me S&eacute;rie</a></td>
    </tr>
    <tr> 
      <td  class="tab3"  ><a href="page_ara_S3.php">3me S&eacute;rie</a></td>
      <td  class="tab3"  ><a href="page_ara_S4.php">4me S&eacute;rie </a></td>
      <td  class="tab3" colspan="2" > <a href="../feminine/index_fem.php">Comp&eacute;titions f&eacute;minines</a> </td>
    </tr>
  </table>
  <?php
}
*/
//   *******  Autres sommaires ********
else
{
  ?>
  <table class="sommaire" align="center"width="519" height="49">
    <tr> 
	  <td class="tab3"><a href="#R1">R&eacute;gionale 1</a> </td>
   	  <td class="tab3"><a href="#R2">R&eacute;gionale 2</a></td>
      <td class="tab3"><a href="#R3">R&eacute;gionale 3 </a></td>
    </tr>
    <tr> 
     <td class="tab3" colspan="3" > <a href="../feminine/index_fem.php">Comp&eacute;titions f&eacute;minines</a> </td>
    </tr>
  </table>
  <?php
}
?>