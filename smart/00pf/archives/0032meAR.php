<?php 
$annee=$_GET['annee'];
$annee2 ="bdpf".''.$annee.''."_2";

$champ = $_GET['champ']; 
$champ = 160; 

if ($champ==160)
		{
		$id2=130;
		$id=160;
	//	require ("fonctions_phases_finalesAR.php");
		require ("../../phases_finales/fonctions_phases_finalesAR.php");
		}
?>

<head>
<link rel="stylesheet" type="text/css" href="AA2.css">
<link type="text/css" rel="stylesheet" href="../10.css">
<meta name="description"
content="tous les champions de france de rugby, ffr,FFR, presentation de tous les clubs de rugby francais, Champions des differents comités territoriaux, Tous les championnats de rugby, fédérale 2, fédérale 3, fédérale 1, top 14.">
<meta name="keywords"
content="Brennus,Comite Midi Pyrenees de Rugby,ffr,FFR,Comite territoriaux de rugby,Stade toulousain,Bourgogne,FanceFinalesRugby,Rugby,championnat de france de rugby,Française,honneur,promotion honneur,Sport,Ballon,Ovale,">
<meta name="classification" content="Sport,Rugby">
<meta name="resource-type" content="document">
<meta name="copyright" content="Comite Midi Pyrenees de Rugby">
<meta name="author" content="Equipe Onepip">
<meta name="robots" content="All">
<title>1re Série</title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta name=viewport content="width=device-width, initial-scale=1">
</head>

<body bgcolor="#CCCCCC">
<table width="100%" border="1">
  <tr> 
    <td bgcolor="#006699" colspan="2"> 
      <div id="titre-haut"><b><font size="5" face="Arial, Helvetica, sans-serif" color="#FFFFFF">France 
        Finales Rugby</font></b></div>
    </td>
  </tr>
  <tr> 
    <td bgcolor="#FFFFFF" colspan="2" height="90"> 
      <div id="titre"> 
       Champ de France<br>
         
          <?php	
		  if($champ==160)
		  {
		  echo "F&eacute;d&eacute;rale 3"; 
		  }
		  ?>
		  <br> 32me de finale </div>
    </td>
  </tr>
</table>
<div align="center"> 
 <?php	
 	include("texte_defilant.htm"); ?>
  <br>
  <?php
  	include("liensdiv.php"); ?>
  <br>
  <?php	include ("../../pub/pub20.php"); ?>
</div>

<table width="90%" border="0" align="center">
  <tr> 
    <td width="3%" bgcolor="#E4EFFF"> 
      <div id="coin3"> 1</div>
    </td>
    <td width="76%"> 
      <div id="coin4" > 
        <?php	echo $clubA3201; ?>
        </div>
    </td>
    <td width="21%"> 
      <div id="coin4" > <font color="#FF0000" size="3"> 
        <?php if( $pts3A3201+ $pts3A3202>0)
		{
		echo $pts3A3201; ?>
        </font><font size="2">( 
        <?php
		echo $A3201;  
        ?>
        )</font> 
        <?php  
		}
		else
		echo "-";
		?>
      </div>
    </td>
  </tr>
  <tr> 
    <td width="3%" bgcolor="#E4EFFF" height="7"> 
      <div id="coin3"> 2</div>
    </td>
    <td width="76%" height="7"> 
      <div id="coin4" > 
        <?php	echo $clubA3202; ?>
       </div>
    </td>
    <td width="21%" height="7"> 
      <div id="coin4" > <font color="#FF0000" size="3"> 
        <?php if( $pts3A3201+ $pts3A3202>0)
		{
		echo $pts3A3202; ?>
        </font><font size="2">( 
        <?php
		echo $A3202;  
        ?>
        )</font> 
        <?php  
		}
		else
		echo "-";
		?>
      </div>
    </td>
  </tr>
  <tr> 
    <td width="3%" bgcolor="#E4EFFF" height="25"> 
      <div id="coin5"> 3</div>
    </td>
    <td width="76%" height="25"> 
      <div id="coin5" > 
        <?php	echo $clubA3203; ?>
        </div>
    </td>
    <td width="21%" height="25"> 
      <div id="coin5" > <font color="#FF0000" size="3"> 
        <?php if( $pts3A3203+ $pts3A3204>0)
		{
		echo $pts3A3203; ?>
        </font><font size="2">( 
        <?php
		echo $A3203;  
        ?>
        )</font> 
        <?php  
		}
		else
		echo "-";
		?>
      </div>
    </td>
  </tr>
  <tr> 
    <td width="3%" bgcolor="#E4EFFF"> 
      <div id="coin5"> 4</div>
    </td>
    <td width="76%"> 
      <div id="coin5"> 
        <?php	echo $clubA3204; ?>
        </div>
    </td>
    <td width="21%"> 
      <div id="coin5" > <font color="#FF0000" size="3"> 
        <?php if( $pts3A3203+ $pts3A3204>0)
		{
		echo $pts3A3204; ?>
        </font><font size="2">( 
        <?php
		echo $A3204;  
        ?>
        )</font> 
        <?php  
		}
		else
		echo "-";
		?>
      </div>
    </td>
  </tr>
  <tr> 
    <td width="3%" bgcolor="#9FC6FF" height="10"> 
      <div id="coin4"> 5</div>
    </td>
    <td width="76%" height="10"> 
      <div id="coin4" > 
        <?php	echo $clubA3205; ?>
        </div>
    </td>
    <td width="21%" height="10"> 
      <div id="coin4" > <font color="#FF0000" size="3"> 
        <?php if( $pts3A3205+ $pts3A3206>0)
		{
		echo $pts3A3205; ?>
        </font><font size="2">( 
        <?php
		echo $A3205;  
        ?>
        )</font> 
        <?php  
		}
		else
		echo "-";
		?>
      </div>
    </td>
  </tr>
  <tr> 
    <td width="3%" bgcolor="#9FC6FF" height="16"> 
      <div id="coin4"> 6</div>
    </td>
    <td width="76%" height="16"> 
      <div id="coin4" > 
        <?php	echo $clubA3206; ?>
        </div>
    </td>
    <td width="21%" height="16"> 
      <div id="coin4" > <font color="#FF0000" size="3"> 
        <?php if( $pts3A3205+ $pts3A3206>0)
		{
		echo $pts3A3206; ?>
        </font><font size="2">( 
        <?php
		echo $A3206;  
        ?>
        )</font> 
        <?php  
		}
		else
		echo "-";
		?>
      </div>
    </td>
  </tr>
  <tr> 
    <td width="3%" bgcolor="#9FC6FF" height="11"> 
       
      <div id="coin3"> 7</div>
    </td>
    <td width="76%" height="11"> 
      <div id="coin5" > 
        <?php	echo $clubA3207; ?>
        </div>
    </td>
    <td width="21%" height="11"> 
      <div id="coin5" > <font color="#FF0000" size="3"> 
        <?php if( $pts3A3207+ $pts3A3208>0)
		{
		echo $pts3A3207; ?>
        </font><font size="2">( 
        <?php
		echo $A3207;  
        ?>
        )</font> 
        <?php  
		}
		else
		echo "-";
		?>
      </div>
    </td>
  </tr>
  <tr> 
    <td width="3%" bgcolor="#9FC6FF"> 
      <div id="coin3"> 8</div>
    </td>
    <td width="76%"> 
      <div id="coin5" > 
        <?php	echo $clubA3208; ?>
        </div>
    </td>
    <td width="21%"> 
      <div id="coin5"> <font color="#FF0000" size="3"> 
        <?php if( $pts3A3207+ $pts3A3208>0)
		{
		echo $pts3A3208; ?>
        </font><font size="2" color="#000000">( 
        <?php
		echo $A3208;  
        ?>
        )</font> 
        <?php  
		}
		else
		echo "-";
		?>
      </div>
    </td>
  </tr>
</table>
<table width="90%" border="0" align="center">
  <tr> 
    <td colspan="2" height="21"> 
       
        
      <div id="gauche"></div>
     
    </td>
    <td height="21" width="46%"> 
       
      <div id="liensDroit"><a href="16meAR.php?champ=<?php echo $champ ?>&annee=<?php echo $annee; ?>"><font color="#FF0000">16me 
        &gt;&gt;</font></a></div>
    </td>
  </tr>
</table>
<table width="90%" border="0" align="center">
  <tr> 
    <td width="3%" height="24" bgcolor="#E4EFFF" bordercolor="#0066FF"> 
      <div id="coin3"> 9</div>
    </td>
    <td width="76%" height="24"> 
      <div id="coin4" > 
        <?php	echo $clubA3209; ?>
        </div>
    </td>
    <td width="21%" height="24"> 
      <div id="coin4" > <font color="#FF0000" size="3"> 
        <?php if( $pts3A3209+ $pts3A3210>0)
		{
		echo $pts3A3209; ?>
        </font><font size="2">( 
        <?php
		echo $A3209;  
        ?>
        )</font> 
        <?php  
		}
		else
		echo "-";
		?>
      </div>
    </td>
  </tr>
  <tr> 
    <td width="3%" bgcolor="#E4EFFF" bordercolor="#0066FF"> 
        
      <div id="coin3"> 10</div>
    </td>
    <td width="76%"> 
      <div id="coin4" > 
        <?php	echo $clubA3210; ?>
       </div>
    </td>
    <td width="21%"> 
      <div id="coin4"><font color="#FF0000" size="3"> 
        <?php if( $pts3A3209+ $pts3A3210>0)
		{
		echo $pts3A3210; ?>
        </font><font size="2">( 
        <?php
		echo $A3210;  
        ?>
        )</font> 
        <?php  
		}
		else
		echo "-";
		?>
      </div>
    </td>
  </tr>
  <tr> 
    <td width="3%" bgcolor="#E4EFFF" bordercolor="#0066FF"> 
       
      <div id="coin5"> 11</div>
    </td>
    <td width="76%"> 
      <div id="coin5" > 
        <?php	echo $clubA3211; ?>
        </div>
    </td>
    <td width="21%"> 
      <div id="coin5" > <font color="#FF0000" size="3"> 
        <?php if( $pts3A3211+ $pts3A3212>0)
		{
		echo $pts3A3211; ?>
        </font><font size="2">( 
        <?php
		echo $A3211;  
        ?>
        ) </font>
        <?php  
		}
		else
		echo "-";
		?>
      </div>
    </td>
  </tr>
  <tr> 
    <td width="3%" bgcolor="#E4EFFF" bordercolor="#0066FF"> 
       
      <div id="coin5"> 12</div>
    </td>
    <td width="76%"> 
      <div id="coin5" > 
        <?php	echo $clubA3212; ?>
        </div>
    </td>
    <td width="21%"> 
      <div id="coin5" > <font color="#FF0000" size="3"> 
        <?php if( $pts3A3211+ $pts3A3212>0)
		{
		echo $pts3A3212; ?>
        </font><font size="2">( 
        <?php
		echo $A3212;  
        ?>
        )</font> 
        <?php  
		}
		else
		echo "-";
		?>
      </div>
    </td>
  </tr>
  <tr> 
    <td width="3%" bgcolor="#9FC6FF" bordercolor="#0066FF"> 
        
      <div id="coin4"> 13</div>
    </td>
    <td width="76%"> 
      <div id="coin4" > 
        <?php	echo $clubA3213; ?>
        </div>
    </td>
    <td width="21%"> 
      <div id="coin4" > <font color="#FF0000" size="3"> 
        <?php if( $pts3A3213+ $pts3A3214>0)
		{
		echo $pts3A3213; ?>
        </font><font size="2">( 
        <?php
		echo $A3213;  
        ?>
        )</font> 
        <?php  
		}
		else
		echo "-";
		?>
      </div>
    </td>
  </tr>
  <tr> 
    <td width="3%" bgcolor="#9FC6FF" bordercolor="#0066FF"> 
       
      <div id="coin4"> 14</div>
    </td>
    <td width="76%"> 
      <div id="coin4" > 
        <?php	echo $clubA3214; ?>
       </div>
    </td>
    <td width="21%"> 
      <div id="coin4" align="center"> <font color="#FF0000" size="3"> 
        <?php if( $pts3A3213+ $pts3A3214>0)
		{
		echo $pts3A3214; ?>
        </font><font size="2">( 
        <?php
		echo $A3214;  
        ?>
        )</font> 
        <?php  
		}
		else
		echo "-";
		?>
      </div>
    </td>
  </tr>
  <tr> 
    <td width="3%" bgcolor="#9FC6FF" bordercolor="#0066FF" height="20"> 
      <div id="coin3"> 15</div>
    </td>
    <td width="76%" height="20"> 
      <div id="coin5" > 
        <?php	echo $clubA3215; ?>
        </div>
    </td>
    <td width="21%" height="20"> 
      <div id="coin5" align="center"> <font color="#FF0000" size="3"> 
        <?php if( $pts3A3215+ $pts3A3216>0)
		{
		echo $pts3A3215; ?>
        </font><font size="2">( 
        <?php
		echo $A3215;  
        ?>
        )</font> 
        <?php  
		}
		else
		echo "-";
		?>
      </div>
    </td>
  </tr>
  <tr> 
    <td width="3%" bgcolor="#9FC6FF" bordercolor="#0066FF"> 
        
      <div id="coin3"> 16</div>
    </td>
    <td width="76%"> 
      <div id="coin5" > 
        <?php	echo $clubA3216; ?>
        </div>
    </td>
    <td width="21%"> 
      <div id="coin5" ><font color="#FF0000" size="3"> 
        <?php if( $pts3A3215+ $pts3A3216>0)
		{
		echo $pts3A3216; ?>
        </font><font size="2">( 
        <?php
		echo $A3216;  
        ?>
        )</font> 
        <?php  
		}
		else
		echo "-";
		?>
      </div>
    </td>
  </tr>
</table>
<p align="center"><font size="3" face="Arial, Helvetica, sans-serif" color="#000000"><b> 
  <?php	require "../../pub/pub20.php"; ?>
  </b></font></p>
<table width="90%" border="0" align="center">
  <tr> 
    <td width="3%" bgcolor="#E4EFFF"> 
       
      <div id="coin3"> 17</div>
    </td>
    <td width="76%"> 
      <div id="coin4" > 
        <?php	echo $clubA3217; ?>
       </div>
    </td>
    <td width="21%" height="9"> 
      <div id="coin4" ><font color="#FF0000" size="3"> 
        <?php if( $pts3A3217+ $pts3A3218>0)
		{
		echo $pts3A3217; ?>
        </font><font size="2">( 
        <?php
		echo $A3217;  
        ?>
        )</font> 
        <?php  
		}
		else
		echo "-";
		?>
      </div>
    </td>
  </tr>
  <tr> 
    <td width="3%" bgcolor="#E4EFFF" height="24"> 
      <div id="coin3"> 18</div>
    </td>
    <td width="76%" height="24"> 
      <div id="coin4" > 
        <?php	echo $clubA3218; ?>
        </div>
    </td>
    <td width="21%" height="24"> 
      <div id="coin4" ><font color="#FF0000" size="3"> 
        <?php if( $pts3A3217+ $pts3A3218>0)
		{
		echo $pts3A3218; ?>
        </font> <font size="2">( 
        <?php
		echo $A3218;  
        ?>
        )</font> 
        <?php  
		}
		else
		echo "-";
		?>
      </div>
    </td>
  </tr>
  <tr> 
    <td width="3%" bgcolor="#E4EFFF" height="25"> 
        
      <div id="coin5"> 19</div>
    </td>
    <td width="76%" height="25"> 
      <div id="coin5" > 
        <?php	echo $clubA3219; ?>
        </div>
    </td>
    <td width="21%"> 
      <div id="coin5" > <font color="#FF0000" size="3"> 
        <?php if( $pts3A3219+ $pts3A3220>0)
		{
		echo $pts3A3219; ?>
        </font><font size="2">( 
        <?php
		echo $A3219;  
        ?>
        )</font> 
        <?php  
		}
		else
		echo "-";
		?>
      </div>
    </td>
  </tr>
  <tr> 
    <td width="3%" bgcolor="#E4EFFF" height="25"> 
      <div id="coin5"> 20</div>
    </td>
    <td width="76%" height="25"> 
      <div id="coin5" >     <?php	echo $clubA3220; ?>      </div>
    </td>
    <td width="21%" height="25"> 
      <div id="coin5" ><font color="#FF0000" size="3"> 
        <?php if( $pts3A3219+ $pts3A3220>0)
		{
		echo $pts3A3220; ?>
        </font><font size="2">( 
        <?php
		echo $A3220;  
        ?>
        )</font> 
        <?php  
		}
		else
		echo "-";
		?>
      </div>
    </td>
  </tr>
  <tr> 
    <td width="3%" bgcolor="#9FC6FF" height="22"> 
      <div id="coin4"> 21</div>
    </td>
    <td width="76%" height="22"> 
      <div id="coin4" > 
        <?php	echo $clubA3221; ?>
        </div>
    </td>
    <td width="21%" height="22"> 
      <div id="coin4"><font color="#FF0000" size="3"> 
        <?php if( $pts3A3221+ $pts3A3222>0)
		{
		echo $pts3A3221; ?>
        </font><font size="2">( 
        <?php
		echo $A3221;  
        ?>
        )</font> 
        <?php  
		}
		else
		echo "-";
		?>
      </div>
    </td>
  </tr>
  <tr> 
    <td width="3%" bgcolor="#9FC6FF"> 
        
      <div id="coin4"> 22</div>
    </td>
    <td width="76%"> 
      <div id="coin4" > 
        <?php	echo $clubA3222; ?>
        </div>
    </td>
    <td width="21%"> 
      <div id="coin4" > <font color="#FF0000" size="3"> 
        <?php if( $pts3A3221+ $pts3A3222>0)
		{
		echo $pts3A3222; ?>
        </font> <font size="2">( 
        <?php
		echo $A3222;  
        ?>
        ) </font>
        <?php  
		}
		else
		echo "-";
		?>
      </div>
    </td>
  </tr>
  <tr> 
    <td width="3%" bgcolor="#9FC6FF" height="11"> 
       
      <div id="coin3"> 23</div>
    </td>
    <td width="76%" height="11"> 
      <div id="coin5" > 
        <?php	echo $clubA3223; ?>
        </div>
    </td>
    <td width="21%"> 
      <div id="coin5" ><font color="#FF0000" size="3"> 
        <?php if( $pts3A3223+ $pts3A3224>0)
		{
		echo $pts3A3223; ?>
        </font><font size="2">( 
        <?php
		echo $A3223;  
        ?>
        )</font> 
        <?php  
		}
		else
		echo "-";
		?>
      </div>
    </td>
  </tr>
  <tr> 
    <td width="3%" bgcolor="#9FC6FF"> 
        
      <div id="coin3"> 24</div>
    </td>
    <td width="76%"> 
      <div id="coin5" > 
        <?php	echo $clubA3224; ?>
        </div>
    </td>
    <td width="21%"> 
      <div id="coin5" ><font color="#FF0000" size="3"> 
        <?php if( $pts3A3223+ $pts3A3224>0)
		{
		echo $pts3A3224; ?>
        </font><font size="2">( 
        <?php
		echo $A3224;  
        ?>
        )</font> 
        <?php  
		}
		else
		echo "-";
		?>
      </div>
    </td>
  </tr>
</table>
<table width="90%" border="0" align="center">
  <tr> 
    <td colspan="2" height="9"> 
      <div align="left"> 
        <div align="left"></div>
      </div>
    </td>
    <td height="9" width="47%"> 
       
      <div id="liensDroit"><a href="16meAR.php?champ=<?php echo $champ ?>&annee=<?php echo $annee; ?>"><font color="#FF0000">16me 
        &gt;&gt;</font></a></div>
    </td>
  </tr>
</table>
<table width="90%" border="0" align="center">
  <tr> 
    <td width="3%" height="9" bgcolor="#E4EFFF" bordercolor="#0066FF"> 
        
      <div id="coin3"> 25</div>
    </td>
    <td width="76%" height="9"> 
      <div id="coin4" > 
        <?php	echo $clubA3225; ?>
       </div>
    </td>
    <td width="21%" height="9"> 
      <div id="coin4" ><font color="#FF0000" size="3"> 
        <?php if( $pts3A3225+ $pts3A3226>0)
		{
		echo $pts3A3225; ?>
        </font><font size="2">( 
        <?php
		echo $A3225;  
        ?>
        )</font> 
        <?php  
		}
		else
		echo "-";
		?>
      </div>
    </td>
  </tr>
  <tr> 
    <td width="3%" bgcolor="#E4EFFF" bordercolor="#0066FF" height="23"> 
        
      <div id="coin3"> 26</div>
    </td>
    <td width="76%" height="23"> 
      <div id="coin4" > 
        <?php	echo $clubA3226; ?>
        </div>
    </td>
    <td width="21%"> 
      <div id="coin4" > <font color="#FF0000" size="3"> 
        <?php if( $pts3A3225+ $pts3A3226>0)
		{
		echo $pts3A3226; ?>
        </font> <font size="2">( 
        <?php
		echo $A3226;  
        ?>
        )</font> 
        <?php  
		}
		else
		echo "-";
		?>
      </div>
    </td>
  </tr>
  <tr> 
    <td width="3%" bgcolor="#E4EFFF" bordercolor="#0066FF"> 
        
      <div id="coin5"> 27</div>
    </td>
    <td width="76%"> 
      <div id="coin5" > 
        <?php	echo $clubA3227; ?>
        </div>
    </td>
    <td width="21%"> 
      <div id="coin5" ><font color="#FF0000" size="3"> 
        <?php if( $pts3A3227+ $pts3A3228>0)
		{
		echo $pts3A3227; ?>
        </font><font size="2">( 
        <?php
		echo $A3227;  
        ?>
        )</font> 
        <?php  
		}
		else
		echo "-";
		?>
      </div>
    </td>
  </tr>
  <tr> 
    <td width="3%" bgcolor="#E4EFFF" bordercolor="#0066FF"> 
       
      <div id="coin5"> 28</div>
    </td>
    <td width="76%"> 
      <div id="coin5"> 
        <?php	echo $clubA3228; ?>
       </div>
    </td>
    <td width="21%"> 
      <div id="coin5" ><font color="#FF0000" size="3"> 
        <?php if( $pts3A3227+ $pts3A3228>0)
		{
		echo $pts3A3228; ?>
        </font> <font size="2">( 
        <?php
		echo $A3228;  
        ?>
        )</font> 
        <?php  
		}
		else
		echo "-";
		?>
      </div>
    </td>
  </tr>
  <tr> 
    <td width="3%" bgcolor="#9FC6FF" bordercolor="#0066FF" height="3"> 
      <div id="coin4"> 29</div>
    </td>
    <td width="76%" height="3"> 
      <div id="coin4" > 
        <?php	echo $clubA3229; ?>
        </div>
    </td>
    <td width="21%" height="3"> 
      <div id="coin4" ><font color="#FF0000" size="3"> 
        <?php if( $pts3A3229+ $pts3A3230>0)
		{
		echo $pts3A3229; ?>
        </font><font size="2">( 
        <?php
		echo $A3229;  
        ?>
        ) </font>
        <?php  
		}
		else
		echo "-";
		?>
      </div>
    </td>
  </tr>
  <tr> 
    <td width="3%" bgcolor="#9FC6FF" bordercolor="#0066FF"> 
       
      <div id="coin4"> 30</div>
    </td>
    <td width="76%"> 
      <div id="coin4" > 
        <?php	echo $clubA3230; ?>
        </div>
    </td>
    <td width="21%"> 
      <div id="coin4" align="center"><font color="#FF0000" size="3"> 
        <?php if( $pts3A3229+ $pts3A3230>0)
		{
		echo $pts3A3230; ?>
        </font><font size="2">( 
        <?php
		echo $A3230;  
        ?>
        </font>) 
        <?php  
		}
		else
		echo "-";
		?>
      </div>
    </td>
  </tr>
  <tr> 
    <td width="3%" bgcolor="#9FC6FF" bordercolor="#0066FF"> 
       
      <div id="coin5"> 31</div>
    </td>
    <td width="76%"> 
      <div id="coin5" > 
        <?php	echo $clubA3231; ?>
       </div>
    </td>
    <td width="21%"> 
      <div id="coin5" ><font color="#FF0000" size="3"> 
        <?php if( $pts3A3231+ $pts3A3232>0)
		{
		echo $pts3A3231; ?>
        </font><font size="2">( 
        <?php
		echo $A3231;  
        ?>
        )</font> 
        <?php  
		}
		else
		echo "-";
		?>
      </div>
    </td>
  </tr>
  <tr> 
    <td width="3%" bgcolor="#9FC6FF" bordercolor="#0066FF"> 
        
      <div id="coin5"> 32</div>
    </td>
    <td width="76%"> 
      <div id="coin5" > 
        <?php	echo $clubA3232; ?>
       </div>
    </td>
    <td width="21%"> 
      <div id="coin5" ><font color="#FF0000" size="3">
        <?php if( $pts3A3231+ $pts3A3232>0)
		{
		echo $pts3A3232; ?>
        </font><font size="2">( 
        <?php
		echo $A3232;  
        ?>
        ) </font>
        <?php  
		}
		else
		echo "-";
		?>
      </div>
    </td>
  </tr>
</table>
<p align="center"><font size="3" face="Arial, Helvetica, sans-serif" color="#000000"><b> 
  <?php	require "../../pub/pub20.php"; ?>
  </b></font></p>
<table width="90%" border="0" align="center">
  <tr> 
    <td width="3%" bgcolor="#E4EFFF"> 
      <div id="coin3"> 33</div>
    </td>
    <td width="76%"> 
      <div id="coin4" > 
        <?php	echo $clubA3233; ?>
       </div>
    </td>
    <td width="21%" height="9"> 
      <div id="coin4" ><font color="#FF0000" size="3"> 
        <?php if( $pts3A3233+ $pts3A3234>0)
		{
		echo $pts3A3233; ?>
        </font><font size="2">( 
        <?php
		echo $A3233;  
        ?>
        ) </font>
        <?php  
		}
		else
		echo "-";
		?>
      </div>
    </td>
  </tr>
  <tr> 
    <td width="3%" bgcolor="#E4EFFF"> 
       
      <div id="coin3"> 34</div>
    </td>
    <td width="76%"> 
      <div id="coin4" > 
        <?php	echo $clubA3234; ?>
        </div>
    </td>
    <td width="21%"> 
      <div id="coin4" ><font color="#FF0000" size="3"> 
        <?php if( $pts3A3233+ $pts3A3234>0)
		{
		echo $pts3A3234; ?>
        </font><font size="2">( 
        <?php
		echo $A3234;  
        ?>
        )</font> 
        <?php  
		}
		else
		echo "-";
		?>
      </div>
    </td>
  </tr>
  <tr> 
    <td width="3%" bgcolor="#E4EFFF" height="27"> 
       
      <div id="coin5"> 35</div>
    </td>
    <td width="76%" height="27"> 
      <div id="coin5" > 
        <?php	echo $clubA3235; ?>
       </div>
    </td>
    <td width="21%"> 
      <div id="coin5" ><font color="#FF0000" size="3"> 
        <?php if( $pts3A3235+ $pts3A3236>0)
		{
		echo $pts3A3235; ?>
        </font><font size="2">( 
        <?php
		echo $A3235;  
        ?>
        )</font> 
        <?php  
		}
		else
		echo "-";
		?>
      </div>
    </td>
  </tr>
  <tr> 
    <td width="3%" bgcolor="#E4EFFF"> 
        
      <div id="coin5"> 36</div>
    <td width="76%"> 
      <div id="coin5" > 
        <?php	echo $clubA3236; ?>
        </div>
    </td>
    <td width="21%"> 
      <div id="coin5" ><font color="#FF0000" size="3"> 
        <?php if( $pts3A3235+ $pts3A3236>0)
		{
		echo $pts3A3236; ?>
        </font><font size="2">( 
        <?php
		echo $A3236;  
        ?>
        ) </font>
        <?php  
		}
		else
		echo "-";
		?>
      </div>
    </td>
  </tr>
  <tr> 
    <td width="3%" bgcolor="#9FC6FF"> 
      <div id="coin4"> 37</div>
    </td>
    <td width="76%"> 
      <div id="coin4" > 
        <?php	echo $clubA3237; ?>
        </div>
    </td>
    <td width="21%"> 
      <div id="coin4" ><font color="#FF0000" size="3"> 
        <?php if( $pts3A3237+ $pts3A3238>0)
		{
		echo $pts3A3237; ?>
        </font><font size="2">( 
        <?php
		echo $A3237;  
        ?>
        )</font> 
        <?php  
		}
		else
		echo "-";
		?>
      </div>
    </td>
  </tr>
  <tr> 
    <td width="3%" bgcolor="#9FC6FF"> 
        
      <div id="coin4"> 38</div>
    </td>
    <td width="76%"> 
      <div id="coin4" > 
        <?php	echo $clubA3238; ?>
        </div>
    </td>
    <td width="21%"> 
      <div id="coin4" ><font color="#FF0000" size="3"> 
        <?php if( $pts3A3237+ $pts3A3238>0)
		{
		echo $pts3A3238; ?>
        </font><font size="2">( 
        <?php
		echo $A3238;  
        ?>
        )</font> 
        <?php  
		}
		else
		echo "-";
		?>
      </div>
    </td>
  </tr>
  <tr> 
    <td width="3%" bgcolor="#9FC6FF" height="11"> 
        
      <div id="coin3"> 39</div>
    </td>
    <td width="76%" height="11"> 
      <div id="coin5" > 
        <?php	echo $clubA3239; ?>
       </div>
    </td>
    <td width="21%"> 
      <div id="coin5" ><font color="#FF0000" size="3"> 
        <?php if( $pts3A3239+ $pts3A3240>0)
		{
		echo $pts3A3239; ?>
        </font><font size="2">( 
        <?php
		echo $A3239;  
        ?>
        ) </font>
        <?php  
		}
		else
		echo "-";
		?>
      </div>
    </td>
  </tr>
  <tr> 
    <td width="3%" bgcolor="#9FC6FF"> 
       
      <div id="coin3"> 40</div>
    </td>
    <td width="76%"> 
      <div id="coin5" > 
        <?php	echo $clubA3240; ?>
      </div>
    </td>
    <td width="21%"> 
      <div id="coin5"><font color="#FF0000" size="3"> 
        <?php if( $pts3A3239+ $pts3A3240>0)
		{
		echo $pts3A3240; ?>
        </font><font size="2">( 
        <?php
		echo $A3240;  
        ?>
        )</font> 
        <?php  
		}
		else
		echo "-";
		?>
      </div>
    </td>
  </tr>
</table>
<table width="90%" border="0" align="center">
  <tr> 
    <td colspan="2" height="21"> 
      <div id="gauche"> </div>

    </td>
    <td height="21" width="49%"> 
      <div id="liensDroit"><a href="16meAR.php?champ=<?php echo $champ ?>&annee=<?php echo $annee; ?>"><font color="#FF0000">16me 
        &gt;&gt;</font></a></div>
    </td>
  </tr>
</table>
<table width="90%" border="0" align="center">
  <tr> 
    <td width="3%" height="9" bgcolor="#E4EFFF" bordercolor="#0066FF"> 
        
      <div id="coin3"> 41</div>
    </td>
    <td width="76%" height="9"> 
      <div id="coin4" > 
        <?php	echo $clubA3241; ?>
        </div>
    </td>
    <td width="21%" height="9"> 
      <div id="coin4" ><font color="#FF0000" size="3"> 
        <?php if( $pts3A3241+ $pts3A3242>0)
		{
		echo $pts3A3241; ?>
        </font><font size="2">( 
        <?php
		echo $A3241;  
        ?>
        )</font> 
        <?php  
		}
		else
		echo "-";
		?>
      </div>
    </td>
  </tr>
  <tr> 
    <td width="3%" bgcolor="#E4EFFF" bordercolor="#0066FF"> 
       
      <div id="coin3"> 42</div>
    </td>
    <td width="76%"> 
      <div id="coin4" > 
        <?php	echo $clubA3242; ?>
       </div>
    </td>
    <td width="21%"> 
      <div id="coin4" ><font color="#FF0000" size="3"> 
        <?php if( $pts3A3241+ $pts3A3242>0)
		{
		echo $pts3A3242; ?>
        </font><font size="2">( 
        <?php
		echo $A3242;  
        ?>
        )</font> 
        <?php  
		}
		else
		echo "-";
		?>
      </div>
    </td>
  </tr>
  <tr> 
    <td width="3%" bgcolor="#E4EFFF" bordercolor="#0066FF"> 
        
      <div id="coin5"> 43</div>
    </td>
    <td width="76%"> 
      <div id="coin5" > 
        <?php	echo $clubA3243; ?>
       </div>
    </td>
    <td width="21%"> 
      <div id="coin5" ><font color="#FF0000" size="3"> 
        <?php if( $pts3A3243+ $pts3A3244>0)
		{
		echo $pts3A3243; ?>
        </font><font size="2">( 
        <?php
		echo $A3243;  
        ?>
        )</font> 
        <?php  
		}
		else
		echo "-";
		?>
      </div>
    </td>
  </tr>
  <tr> 
    <td width="3%" bgcolor="#E4EFFF" bordercolor="#0066FF"> 
        
      <div id="coin5"> 44</div>
    </td>
    <td width="76%"> 
      <div id="coin5" > 
        <?php	echo $clubA3244; ?>
        </div>
    </td>
    <td width="21%"> 
      <div id="coin5" ><font color="#FF0000" size="3"> 
        <?php if( $pts3A3243+ $pts3A3244>0)
		{
		echo $pts3A3244; ?>
        </font><font size="2">( 
        <?php
		echo $A3244;  
        ?>
        )</font> 
        <?php  
		}
		else
		echo "-";
		?>
      </div>
    </td>
  </tr>
  <tr> 
    <td width="3%" bgcolor="#9FC6FF" bordercolor="#0066FF" height="22"> 
      <div id="coin4"> 45</div>
    </td>
    <td width="76%" height="22"> 
      <div id="coin4" b> 
        <?php	echo $clubA3245; ?>
        </div>
    </td>
    <td width="21%" height="22"> 
      <div id="coin4" ><font color="#FF0000" size="3"> 
        <?php if( $pts3A3245+ $pts3A3246>0)
		{
		echo $pts3A3245; ?>
        </font><font size="2">( 
        <?php
		echo $A3245;  
        ?>
        )</font> 
        <?php  
		}
		else
		echo "-";
		?>
      </div>
    </td>
  </tr>
  <tr> 
    <td width="3%" bgcolor="#9FC6FF" bordercolor="#0066FF"> 
        
      <div id="coin4"> 46</div>
    </td>
    <td width="76%"> 
      <div id="coin4" > 
        <?php	echo $clubA3246; ?>
       </div>
    </td>
    <td width="21%"> 
      <div id="coin4" ><font color="#FF0000" size="3">
        <?php if( $pts3A3245+ $pts3A3246>0)
		{
		echo $pts3A3246; ?>
        </font><font size="2">( 
        <?php
		echo $A3246;  
        ?>
        )</font> 
        <?php  
		}
		else
		echo "-";
		?>
      </div>
    </td>
  </tr>
  <tr> 
    <td width="3%" bgcolor="#9FC6FF" bordercolor="#0066FF"> 
       
      <div id="coin3"> 47</div>
    </td>
    <td width="76%"> 
      <div id="coin5" > 
        <?php	echo $clubA3247; ?>
        </div>
    </td>
    <td width="21%"> 
      <div id="coin5" ><font color="#FF0000" size="3"> 
        <?php if( $pts3A3247+ $pts3A3248>0)
		{
		echo $pts3A3247; ?>
        </font><font size="2">( 
        <?php
		echo $A3247;  
        ?>
        )</font> 
        <?php  
		}
		else
		echo "-";
		?>
      </div>
    </td>
  </tr>
  <tr> 
    <td width="3%" bgcolor="#9FC6FF" bordercolor="#0066FF"> 
        
      <div id="coin3"> 48</div>
    </td>
    <td width="76%"> 
      <div id="coin5" > 
        <?php	echo $clubA3248; ?>
        </div>
    </td>
    <td width="21%"> 
      <div id="coin5" ><font color="#FF0000" size="3"> 
        <?php if( $pts3A3247+ $pts3A3248>0)
		{
		echo $pts3A3248; ?>
        </font><font size="2">( 
        <?php
		echo $A3248;  
        ?>
        )</font> 
        <?php  
		}
		else
		echo "-";
		?>
      </div>
    </td>
  </tr>
</table>
<p align="center"><font size="3" face="Arial, Helvetica, sans-serif" color="#000000"><b> 
  <?php	require "../../pub/pub20.php"; ?>
  </b></font></p>
<table width="90%" border="0" align="center">
  <tr> 
    <td width="3%" bgcolor="#E4EFFF"> 
        
      <div id="coin3"> 49</div>
    </td>
    <td width="76%"> 
      <div id="coin4" > 
        <?php	echo $clubA3249; ?>
       </div>
    </td>
    <td width="21%" height="9"> 
      <div id="coin4"><font color="#FF0000" size="3"> 
        <?php if( $pts3A3249+ $pts3A3250>0)
		{
		echo $pts3A3249; ?>
        </font><font color="#000000" size="2">( 
        <?php
		echo $A3249;  
        ?>
        )</font> 
        <?php  
		}
		else
		echo "-";
		?>
      </div>
    </td>
  </tr>
  <tr> 
    <td width="3%" bgcolor="#E4EFFF"> 
       
      <div id="coin3"> 50</div>
    </td>
    <td width="76%"> 
      <div id="coin4" > 
        <?php	echo $clubA3250; ?>
        </div>
    </td>
    <td width="21%"> 
      <div id="coin4" ><font color="#FF0000" size="3">
        <?php if( $pts3A3249+ $pts3A3250>0)
		{
		echo $pts3A3250; ?>
        </font><font size="2">( 
        <?php
		echo $A3250;  
        ?>
        )</font> 
        <?php  
		}
		else
		echo "-";
		?>
      </div>
    </td>
  </tr>
  <tr> 
    <td width="3%" bgcolor="#E4EFFF" height="26"> 
      <div id="coin5"> 51</div>
    </td>
    <td width="76%" height="26"> 
      <div id="coin5" > 
        <?php	echo $clubA3251; ?>
       </div>
    </td>
    <td width="21%" height="26"> 
      <div id="coin5" ><font color="#FF0000" size="3"> 
        <?php if( $pts3A3251+ $pts3A3252>0)
		{
		echo $pts3A3251; ?>
        </font><font size="2">( 
        <?php
		echo $A3251;  
        ?>
        )</font> 
        <?php  
		}
		else
		echo "-";
		?>
      </div>
    </td>
  </tr>
  <tr> 
    <td width="3%" bgcolor="#E4EFFF"> 
        
      <div id="coin5"> 52</div>
    </td>
    <td width="76%"> 
      <div id="coin5" > 
        <?php	echo $clubA3252; ?>
       </div>
    </td>
    <td width="21%"> 
      <div id="coin5" align="center"><font color="#FF0000" size="3"> 
        <?php if( $pts3A3251+ $pts3A3252>0)
		{
		echo $pts3A3252; ?>
        </font><font size="2">( 
        <?php
		echo $A3252;  
        ?>
        )</font> 
        <?php  
		}
		else
		echo "-";
		?>
      </div>
    </td>
  </tr>
  <tr> 
    <td width="3%" bgcolor="#9FC6FF"> 
        
      <div id="coin4"> 53</div>
    </td>
    <td width="76%"> 
      <div id="coin4" > 
        <?php	echo $clubA3253; ?>
        </div>
    </td>
    <td width="21%"> 
      <div id="coin4" ><font color="#FF0000" size="3"> 
        <?php if( $pts3A3253+ $pts3A3254>0)
		{
		echo $pts3A3253; ?>
        </font><font size="2">( 
        <?php
		echo $A3253;  
        ?>
        )</font> 
        <?php  
		}
		else
		echo "-";
		?>
      </div>
    </td>
  </tr>
  <tr> 
    <td width="3%" bgcolor="#9FC6FF"> 
        
      <div id="coin4"> 54</div>
    </td>
    <td width="76%"> 
      <div id="coin4" > 
        <?php	echo $clubA3254; ?>
        </div>
    </td>
    <td width="21%"> 
      <div id="coin4" ><font color="#FF0000" size="3"> 
        <?php if( $pts3A3253+ $pts3A3254>0)
		{
		echo $pts3A3254; ?>
        </font><font size="2">( 
        <?php
		echo $A3254;  
        ?>
        )</font> 
        <?php  
		}
		else
		echo "-";
		?>
      </div>
    </td>
  </tr>
  <tr> 
    <td width="3%" bgcolor="#9FC6FF" height="11"> 
       
      <div id="coin3"> 55</div>
    </td>
    <td width="76%" height="11"> 
      <div id="coin5" > 
        <?php	echo $clubA3255; ?>
       </div>
    </td>
    <td width="21%"> 
      <div id="coin5" ><font color="#FF0000" size="3"> 
        <?php if( $pts3A3255+ $pts3A3256>0)
		{
		echo $pts3A3255; ?>
        </font><font size="2">( 
        <?php
		echo $A3255;  
        ?>
        )</font> 
        <?php  
		}
		else
		echo "-";
		?>
      </div>
    </td>
  </tr>
  <tr> 
    <td width="3%" bgcolor="#9FC6FF"> 
      <div id="coin3"> 56</div>
    </td>
    <td width="76%"> 
      <div id="coin5" > 
        <?php	echo $clubA3256; ?>
        </div>
    </td>
    <td width="21%"> 
      <div id="coin5" ><font color="#FF0000" size="3"> 
        <?php if( $pts3A3255+ $pts3A3256>0)
		{
		echo $pts3A3256; ?>
        </font><font size="2">( 
        <?php
		echo $A3256;  
        ?>
        )</font> 
        <?php  
		}
		else
		echo "-";
		?>
      </div>
    </td>
  </tr>
</table>
<table width="90%" border="0" align="center">
  <tr> 
    <td colspan="2" height="24"> 
     
        
     
    </td>
    <td height="24"> 
      <div id="liensDroit"><a href="16meAR.php?champ=<?php echo $champ ?>&annee=<?php echo $annee; ?>"><font color="#FF0000">16me 
        &gt;&gt;</font></a></div>
    </td>
  </tr>
</table>
<table width="90%" border="0" align="center">
  <tr> 
    <td width="3%" height="9" bgcolor="#E4EFFF" bordercolor="#0066FF"> 
       
      <div id="coin3"> 57</div>
    </td>
    <td width="76%" height="9"> 
      <div id="coin4" > 
        <?php	echo $clubA3257; ?>
       </div>
    </td>
    <td width="21%" height="9"> 
      <div id="coin4" ><font color="#FF0000" size="3"> 
        <?php if( $pts3A3257+ $pts3A3258>0)
		{
		echo $pts3A3257; ?>
        </font><font size="2">( 
        <?php
		echo $A3257;  
        ?>
        )</font> 
        <?php  
		}
		else
		echo "-";
		?>
      </div>
    </td>
  </tr>
  <tr> 
    <td width="3%" bgcolor="#E4EFFF" bordercolor="#0066FF"> 
        
      <div id="coin3"> 58</div>
    </td>
    <td width="76%"> 
      <div id="coin4" > 
        <?php	echo $clubA3258; ?>
       </div>
    </td>
    <td width="21%"> 
      <div id="coin4"  ><font color="#FF0000" size="3"> 
        <?php if( $pts3A3257+ $pts3A3258>0)
		{
		echo $pts3A3258; ?>
        </font><font size="2">( 
        <?php
		echo $A3258;  
        ?>
        )</font> 
        <?php  
		}
		else
		echo "-";
		?>
      </div>
    </td>
  </tr>
  <tr> 
    <td width="3%" bgcolor="#E4EFFF" bordercolor="#0066FF" height="20"> 
      <div id="coin5"> 59</div>
    </td>
    <td width="76%" height="20"> 
      <div id="coin5" > 
        <?php	echo $clubA3259; ?>
       </div>
    </td>
    <td width="21%" height="20"> 
      <div id="coin5" ><font color="#FF0000" size="3"> 
        <?php if( $pts3A3259+ $pts3A3260>0)
		{
		echo $pts3A3259; ?>
        </font><font size="2">( 
        <?php
		echo $A3259;  
        ?>
        )</font> 
        <?php  
		}
		else
		echo "-";
		?>
      </div>
    </td>
  </tr>
  <tr> 
    <td width="3%" bgcolor="#E4EFFF" bordercolor="#0066FF"> 
       
      <div id="coin5"> 60</div>
    </td>
    <td width="76%"> 
      <div id="coin5" > 
        <?php	echo $clubA3260; ?>
        </div>
    </td>
    <td width="21%"> 
      <div id="coin5" align="center"><font color="#FF0000" size="3"> 
        <?php if( $pts3A3259+ $pts3A3260>0)
		{
		echo $pts3A3260; ?>
        </font><font size="2">( 
        <?php
		echo $A3260;  
        ?>
        )</font> 
        <?php  
		}
		else
		echo "-";
		?>
      </div>
    </td>
  </tr>
  <tr> 
    <td width="3%" bgcolor="#9FC6FF" bordercolor="#0066FF"> 
      <div id="coin4"> 61</div>
    </td>
    <td width="76%"> 
      <div id="coin4" > 
        <?php	echo $clubA3261; ?>
       </div>
    </td>
    <td width="21%"> 
      <div id="coin4" ><font color="#FF0000" size="3"> 
        <?php if( $pts3A3261+ $pts3A3262>0)
		{
		echo $pts3A3261; ?>
        </font><font size="2">( 
        <?php
		echo $A3261;  
        ?>
        )</font> 
        <?php  
		}
		else
		echo "-";
		?>
      </div>
    </td>
  </tr>
  <tr> 
    <td width="3%" bgcolor="#9FC6FF" bordercolor="#0066FF"> 
        
      <div id="coin4"> 62</div>
    </td>
    <td width="76%"> 
      <div id="coin4" > 
        <?php	echo $clubA3262; ?>
        </div>
    </td>
    <td width="21%"> 
      <div id="coin4" a><font color="#FF0000" size="3"> 
        <?php if( $pts3A3261+ $pts3A3262>0)
		{
		echo $pts3A3262; ?>
        </font><font size="2">( 
        <?php
		echo $A3262;  
        ?>
        )</font> 
        <?php  
		}
		else
		echo "-";
		?>
      </div>
    </td>
  </tr>
  <tr> 
    <td width="3%" bgcolor="#9FC6FF" bordercolor="#0066FF"> 
       
      <div id="coin3"> 63</div>
    </td>
    <td width="76%"> 
      <div id="coin5" > 
        <?php	echo $clubA3263; ?>
        </div>
    </td>
    <td width="21%"> 
      <div id="coin5" ><font color="#FF0000" size="3"> 
        <?php if( $pts3A3263+ $pts3A3264>0)
		{
		echo $pts3A3263; ?>
        </font><font size="2">( 
        <?php
		echo $A3263;  
        ?>
        )</font> 
        <?php  
		}
		else
		echo "-";
		?>
      </div>
    </td>
  </tr>
  <tr> 
    <td width="3%" bgcolor="#9FC6FF" bordercolor="#0066FF"> 
      <div id="coin3"> 64</div>
    </td>
    <td width="76%"> 
      <div id="coin5" > 
        <?php	echo $clubA3264; ?>
        </div>
    </td>
    <td width="21%"> 
      <div id="coin5" ><font color="#FF0000" size="3">
        <?php if( $pts3A3263+ $pts3A3264>0)
		{
		echo $pts3A3264; ?>
        </font><font size="2">( 
        <?php
		echo $A3264;  
        ?>
        )</font> 
        <?php  
		}
		else
		echo "-";
		?>
      </div>
    </td>
  </tr>
</table>
<p align="center"><font size="3" face="Arial, Helvetica, sans-serif" color="#000000"><b> 
  <?php	require "../../pub/pub20.php"; ?>
  </b></font></p>
<p align="center"><font size="3" face="Arial, Helvetica, sans-serif" color="#000000"><b> 
  <?php	require "../bas2.php"; ?>
  </b></font></p>

</body>

</html>