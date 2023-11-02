<html>
<head>
<title>Untitled Document</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name=viewport content="width=device-width, initial-scale=1">
</head>

<?php
$annee=2019;
if (isset ($_GET['comite'])) $comite = $_GET['comite']; else $comite='-';
if (isset ($_GET['division'])) $division = $_GET['division']; else $division='-';
if (isset ($_GET['annee'])) $annee = $_GET['annee']; else $annee='-';
echo $division;
$page="saisieLieux";

 ?>

<br>
<table width="62%" border="0" height="66">
  <tr bgcolor="#FFFFFF"> 
    <td colspan="2" valign="top" height="18"> 
      <div align="center"><font face="Arial, Helvetica, sans-serif" color="#FF0000" size="4"><b>Saisie 
        des lieux et dates</b></font></div>
    </td>
  </tr>
  <tr bgcolor="#006699"> 
    <td width="17%" valign="top" height="18" bgcolor="#000000"> 
      <div align="center"><font color="#FFFFFF" size="6" face="Arial, Helvetica, sans-serif"><b>3</b></font></div>
    </td>
    <td width="83%" valign="middle" height="18"> 
      <?php include ("../choixComite.php");?>
    </td>
  </tr>
  <tr bgcolor="#006699"> 
    <td width="17%" valign="top" height="5" bgcolor="#000000"> 
      <div align="center"><font color="#FFFFFF" size="6" face="Arial, Helvetica, sans-serif"><b>4</b></font></div>
    </td>
    <td width="83%" valign="middle" height="5"> 
      <?php include ("../choixDivision.php");?>
    </td>
  </tr>
  <tr> 
    <td bgcolor="#000000" width="37"> 
      <div align="center"><font size="6"><b><font color="#FFFFFF" face="Arial, Helvetica, sans-serif">5</font></b></font></div>
    </td>
    <td width="303" bgcolor="#006699"> 
      <?php// include ("choixType.php");?>
    </td>
  </tr>
  <tr> 
    <td colspan="2" valign="top" height="20" bgcolor="#006699">&nbsp; </td>
  </tr>
  <tr> 
    <td valign="top" height="18" width="17%"> 
      <div align="center">Base</div>
    </td>
    <td width="83%" valign="top" height="18" bgcolor="#339900"> 
      <div align="center"> </div>
    </td>
  </tr>
  <tr> 
    <td valign="top" height="25" width="17%"> 
      <div align="center"><b>Ann&eacute;e</b></div>
    </td>
    <td width="83%" valign="top" height="25" bgcolor="#000000"> 
      <div align="center"><font color="#FF0000"><b><font size="5" face="Arial, Helvetica, sans-serif"> 
        <?php echo $annee; ?>
        </font></b></font></div>
    </td>
  </tr>
  <tr> 
    <td valign="top" height="21" width="17%"> 
      <div align="center">Comit&eacute;</div>
    </td>
    <td width="83%" valign="top" height="21" bgcolor="#009900"> 
      <div align="center"> <font color="#000000">
        <?php echo $comite;?>
        </font></div>
    </td>
  </tr>
  <tr> 
    <td valign="top" height="13" width="17%"> 
      <div align="center">Division</div>
    </td>
    <td width="83%" valign="top" height="13" bgcolor="#009900"> 
      <div align="center"> <font color="#000000"> 
        <?php echo $division; ?>
        </font></div>
    </td>
  </tr>
  <tr> 
    <td valign="top" height="13" width="17%"> 
      <div align="center">Type</div>
    </td>
    <td width="83%" valign="top" height="13" bgcolor="#009900"> <font color="#009900"> 
      <?php// echo $type; ?>
      </font></td>
  </tr>
  <tr> 
    <td valign="top" height="13" width="17%"> 
      <div align="center"></div>
    </td>
    <td width="83%" valign="top" height="13" bgcolor="#009900"> 
      <div align="center"><font color="#009900"></font> </div>
    </td>
  </tr>
</table>
<p>&nbsp;<br>
<?php
require 'dateLieux.php';


/* 
if ($type==1)
	require ("finale.php");
elseif ($type==2)
	require ("demi.php");
elseif ($type==3)
	require ("demiAR.php");
elseif ($type==14)
	require ("quarts.php");
elseif ( $type==15)
	require ("quartsAR.php");
elseif ($type==13)
	require ("quarts8barrages.php");
elseif ($type==18)
	require ("8me.php");
elseif ($type==17)
	require ("8meBarrages.php");
elseif ($type==16)
	require ("16me.php");
elseif ($type==19)
	require ("8meAR.php");	

	
else
	echo "il faut selectionner un type  de finale";
	*/
?>
	</body>
	
</html>
