<?php
$bdcomiteClub = $comite.''."_clubs";
require ("../../phasesfinalesterr2019/fonctionspfterrESDL2019.php");
seizieme2019($bdcomiteClub, $division, $annee);

?><head>
<link rel="stylesheet" type="text/css" href="../../phasesfinalesterr2019/qualification/qualification.css">
<link rel="stylesheet" type="text/css" href="../champTerr.css">
<link rel="stylesheet" type="text/css" href="/phasesFinalesTerr/champTerr.css">
<link rel="stylesheet" type="text/css" href="../champTerr.css">
<link rel="stylesheet" type="text/css" href="../../phasesFinalesTerr/champTerr.css">
<link rel="stylesheet" type="text/css" href="../../phasesfinalesterr2019/qualification/qualification.css">
</head>


<table width="1500" border="0" align="left" height="500" cellspacing="0">
  <tr> 
    <td height="25" width="317"> </td>
    <td height="25" width="14"></td>
    <td height="25" width="78"></td>
    <td height="25" width="34"></td>
    <td height="25" width="156"></td>
    <td height="25" width="8"></td>
    <td height="25" width="158"></td>
    <td height="25" width="25"></td>
    <td height="25" width="77"></td>
    <td height="25" width="10"></td>
    <td height="25" width="183"></td>
    <td height="25" width="12"></td>
    <td height="25" width="122"></td>
    <td height="25" width="80"></td>
    <td height="25" width="23"></td>
    <td height="25" width="158"></td>
  </tr>
  <tr> 
    <td width="317" height="13">&nbsp;</td>
    <td width="14" height="13">&nbsp;</td>
    <td width="78" height="13">&nbsp;</td>
    <td width="34" height="13">&nbsp;</td>
    <td width="156" height="13">&nbsp;</td>
    <td width="8" height="13">&nbsp;</td>
    <td width="158" height="13">&nbsp;</td>
    <td width="25" height="13">&nbsp;</td>
    <td width="77" height="13">&nbsp;</td>
    <td width="10" align="left" height="13">&nbsp;</td>
    <td width="183" height="13">&nbsp;</td>
    <td width="12" height="13">&nbsp;</td>
    <td width="122" height="13">&nbsp;</td>
    <td width="80" height="13">&nbsp;</td>
    <td width="23" height="13">&nbsp;</td>
    <td height="1" valign="top" width="158"> 
      <?php  
	   	if ($division==270)
		     include("../../phasesfinalesterr2019/qualification/QreserveH.php");  
		elseif ($division==220)
		   include("../../phasesfinalesterr2019/qualification/Q4me.php"); 
		    ?>
    </td>
  </tr>
  <tr> 
    <td width="317" height="13"> 
      <div class="affichageTitre" >16me de finale</div>
    </td>
    <td width="14" height="13">&nbsp;</td>
    <td colspan="3" height="13"> 
      <div class="affichageTitre" >8me de finale</div>
    </td>
    <td width="8" height="13">&nbsp;</td>
    <td colspan="3" height="13"> 
      <div class="affichageTitre" >Quarts de finale</div>
    </td>
    <td width="10" align="left" height="13"> 
      <div class="affichageTitre" >Demi finale</div>
    </td>
    <td width="183" height="13">&nbsp;</td>
    <td width="12" height="13">&nbsp;</td>
    <td width="122" height="13"> 
      <div class="affichageTitre" >Finale</div>
    </td>
    <td width="80" height="13">&nbsp;</td>
    <td width="23" height="13">&nbsp;</td>
    <td height="0" valign="top" width="158">&nbsp;</td>
  </tr>
  <tr> 
    <td width="317" height="13"> 
      <div align="center">31 Mars</div>
    </td>
    <td width="14" height="13"> 
      <div align="center"><i></i></div>
    </td>
    <td colspan="2" height="13"> 
      <div align="center"><i></i><i>le 07 Mars</i></div>
    </td>
    <td width="156" height="13"> 
      <div align="center"><i></i></div>
    </td>
    <td colspan="3" height="13"> 
      <div align="center"><i></i><i>14 Avril</i><i></i></div>
    </td>
    <td width="77" height="13"> 
      <div align="center"></div>
    </td>
    <td width="10" align="left" height="13"> 
      <div align="center"><i>21 Avril</i></div>
    </td>
    <td width="183" height="13">&nbsp;</td>
    <td width="12" height="13">&nbsp;</td>
    <td width="122" height="13"> 
      <div align="center"><i>28 Avril</i></div>
    </td>
    <td width="80" height="13">&nbsp;</td>
    <td width="23" height="13">&nbsp;</td>
    <td height="0" valign="top" width="158">&nbsp;</td>
  </tr>
  <tr> 
    <td width="317" height="13">&nbsp;</td>
    <td height="7" width="14">&nbsp;</td>
    <td width="78" height="13">&nbsp;</td>
    <td width="34" height="13">&nbsp;</td>
    <td width="156" height="13">&nbsp;</td>
    <td width="8" height="13">&nbsp;</td>
    <td width="158" height="13">&nbsp;</td>
    <td width="25" height="13">&nbsp;</td>
    <td width="77" height="13">&nbsp;</td>
    <td width="10" align="left" height="13">&nbsp;</td>
    <td width="183" height="13">&nbsp;</td>
    <td width="12" height="13">&nbsp;</td>
    <td width="122" height="13">&nbsp;</td>
    <td width="80" height="13">&nbsp;</td>
    <td width="23" height="13">&nbsp;</td>
    <td height="0" valign="top" width="158">&nbsp;</td>
  </tr>
  <tr> 
    <td width="317" height="13" rowspan="6"> 
      <div class="affichageEquipeTab"> 
        <?php	echo $clubA1601; ?>
      </div>
      <div class="affichageGATab"  > 
        <?php	echo $A1601; ?>
      </div>
      <div class="affichageEquipeTab" > 
        <?php	echo $clubA1602; ?>
      </div>
      <div class="affichageGATab" > 
        <?php	echo $A1602; ?>
      </div>
      <div class="affichageEquipeTab" > 
        <?php	echo $clubA1603;?>
      </div>
      <div class="affichageGATab" > 
        <?php	echo $A1603; ?>
      </div>
      <div class="affichageEquipeTab" > 
        <?php	echo $clubA1604;?>
      </div>
      <div class="affichageGATab" > 
        <?php	echo $A1604; ?>
      </div>
    </td>
    <td height="7" width="14" rowspan="6"> 
      <div align="left"><img src="../../images/accolade.png" width="8" height="60"></div>
    </td>
    <td colspan="3" height="13" rowspan="6"> 
      <div align="center"> 
        <div class="affichageEquipeTab" > 
          <?php	echo $clubA8001; ?>
        </div>
        <div class="affichageGATab" > 
          <?php	echo $A8001; ?>
        </div>
        <div class="affichageEquipeTab" > 
          <?php	echo $clubA8002; ?>
        </div>
        <div class="affichageGATab" > 
          <?php	echo $A8002; ?>
        </div>
      </div>
      <div align="center"></div>
      <div align="center"></div>
    </td>
    <td rowspan="13" height="48" width="8"><img src="../../images/accolade.png" width="8" height="166"></td>
    <td height="13" colspan="3"> 
      <div align="center"></div>
      <div align="center"></div>
      <div align="center"></div>
    </td>
    <td width="10" align="left" height="13" rowspan="6"> 
      <div align="center"></div>
    </td>
    <td width="183" height="13" rowspan="6">&nbsp;</td>
    <td width="12" height="13" rowspan="6">&nbsp;</td>
    <td width="122" height="13" rowspan="6">&nbsp;</td>
    <td width="80" height="13" rowspan="6">&nbsp;</td>
    <td width="23" height="13" rowspan="6">&nbsp;</td>
    <td height="0" valign="top" width="158" rowspan="6">&nbsp;</td>
  </tr>
  <tr> 
    <td height="14" colspan="3">&nbsp;</td>
  </tr>
  <tr> 
    <td height="27" colspan="3">&nbsp;</td>
  </tr>
  <tr> 
    <td height="27" colspan="3">&nbsp;</td>
  </tr>
  <tr> 
    <td height="13" colspan="3">&nbsp;</td>
  </tr>
  <tr> 
    <td height="39" colspan="3" rowspan="3"> 
      <div class="affichageEquipeTab" > 
        <?php	echo $clubA8001; ?>
      </div>
      <div class="affichageGATab" > 
        <?php	echo $A8001; ?>
      </div>
      <div class="affichageEquipeTab" > 
        <?php	echo $clubA8002; ?>
      </div>
      <div class="affichageGATab" > 
        <?php	echo $A8002; ?>
      </div>
    </td>
  </tr>
  <tr> 
    <td width="317" rowspan="7"> 
      <div class="affichageEquipeTab" > 
        <?php	echo $clubA1609; ?>
      </div>
      <div class="affichageGATab" > 
        <?php	echo $A1609; ?>
      </div>
      <div class="affichageEquipeTab" > 
        <?php	echo $clubA1610; ?>
      </div>
      <div class="affichageGATab" > 
        <?php	echo $A1610; ?>
      </div>
      <div class="affichageEquipeTab" > 
        <?php	echo $clubA1611; ?>
      </div>
      <div class="affichageGATab" > 
        <?php	echo $A1611; ?>
      </div>
      <div class="affichageEquipeTab" > 
        <?php	echo $clubA1612; ?>
      </div>
      <div class="affichageGATab" > 
        <?php	echo $A1612; ?>
      </div>
    </td>
    <td rowspan="7" width="14"> 
      <div align="left"><img src="../../images/accolade.png" width="8" height="60"></div>
    </td>
    <td colspan="3" rowspan="7"> 
      <div class="affichageEquipeTab" > 
        <?php	echo $clubA8001; ?>
      </div>
      <div class="affichageGATab" > 
        <?php	echo $A8001; ?>
      </div>
      <div class="affichageEquipeTab" > 
        <?php	echo $clubA8002; ?>
      </div>
      <div class="affichageGATab" > 
        <?php	echo $A8002; ?>
      </div>
    </td>
    <td width="10" align="left">&nbsp;</td>
    <td width="183">&nbsp;</td>
    <td width="12">&nbsp;</td>
    <td width="122">&nbsp;</td>
    <td width="80">&nbsp;</td>
    <td width="23">&nbsp;</td>
    <td height="0" valign="top" width="158">&nbsp;</td>
  </tr>
  <tr> 
    <td width="10" align="left" height="24">&nbsp;</td>
    <td width="183" height="24">&nbsp;</td>
    <td width="12" height="24">&nbsp;</td>
    <td width="122" height="24">&nbsp;</td>
    <td width="80" height="24">&nbsp;</td>
    <td width="23" height="24">&nbsp;</td>
    <td height="0" valign="top" width="158">&nbsp;</td>
  </tr>
  <tr> 
    <td height="0" width="158">&nbsp;</td>
    <td width="25" height="11">&nbsp;</td>
    <td height="3" width="77">&nbsp;</td>
    <td width="10" height="11" align="left">&nbsp;</td>
    <td width="183" height="11">&nbsp;</td>
    <td width="12" height="11">&nbsp;</td>
    <td width="122" height="11">&nbsp;</td>
    <td width="80" height="11">&nbsp;</td>
    <td width="23" height="11">&nbsp;</td>
    <td height="0" valign="top" width="158">&nbsp;</td>
  </tr>
  <tr> 
    <td height="24" width="158" rowspan="4">&nbsp;</td>
    <td width="25" height="24" rowspan="4">&nbsp;</td>
    <td height="24" width="77" rowspan="4">&nbsp;</td>
    <td width="10" align="left" height="12">&nbsp;</td>
    <td width="183" height="13">&nbsp;</td>
    <td width="12" height="13">&nbsp;</td>
    <td width="122" height="13">&nbsp;</td>
    <td width="80" height="24" rowspan="4">&nbsp;</td>
    <td width="23" height="24" rowspan="4">&nbsp;</td>
    <td height="24" valign="top" width="158" rowspan="4">&nbsp;</td>
  </tr>
  <tr> 
    <td width="10" align="left" height="6">&nbsp;</td>
    <td width="183" height="6">&nbsp;</td>
    <td width="12" height="6">&nbsp;</td>
    <td width="122" height="6">&nbsp;</td>
  </tr>
  <tr> 
    <td width="10" align="left" height="3">&nbsp;</td>
    <td width="183" height="3">&nbsp;</td>
    <td width="12" height="3">&nbsp;</td>
    <td width="122" height="3">&nbsp;</td>
  </tr>
  <tr> 
    <td width="10" align="left" height="2">&nbsp;</td>
    <td colspan="3" height="2" rowspan="2"> 
      <div class="affichageEquipeTab" > 
        <?php	echo $clubA8001; ?>
      </div>
      <div class="affichageGATab" > 
        <?php	echo $A8001; ?>
      </div>
      <div class="affichageEquipeTab" > 
        <?php	echo $clubA8002; ?>
      </div>
      <div class="affichageGATab" > 
        <?php	echo $A8002; ?>
      </div>
    </td>
  </tr>
  <tr> 
    <td width="317" rowspan="7"> 
      <div class="affichageEquipeTab" > 
        <?php	echo $clubA1609; ?>
      </div>
      <div class="affichageGATab" > 
        <?php	echo $A1609; ?>
      </div>
      <div class="affichageEquipeTab" > 
        <?php	echo $clubA1610; ?>
      </div>
      <div class="affichageGATab" > 
        <?php	echo $A1610; ?>
      </div>
      <div class="affichageEquipeTab" > 
        <?php	echo $clubA1611; ?>
      </div>
      <div class="affichageGATab" > 
        <?php	echo $A1611; ?>
      </div>
      <div class="affichageEquipeTab" > 
        <?php	echo $clubA1612; ?>
      </div>
      <div class="affichageGATab" > 
        <?php	echo $A1612; ?>
      </div>
    </td>
    <td width="14" rowspan="7"> 
      <div align="left"><img src="../../images/accolade.png" width="8" height="60"></div>
    </td>
    <td colspan="3" rowspan="7"> 
      <div class="affichageEquipeTab" > 
        <?php	echo $clubA8001; ?>
      </div>
      <div class="affichageGATab" > 
        <?php	echo $A8001; ?>
      </div>
      <div class="affichageEquipeTab" > 
        <?php	echo $clubA8002; ?>
      </div>
      <div class="affichageGATab" > 
        <?php	echo $A8002; ?>
      </div>
    </td>
    <td width="8">&nbsp;</td>
    <td height="0" colspan="3">&nbsp;</td>
    <td width="10">&nbsp;</td>
    <td width="80" rowspan="7">&nbsp;</td>
    <td width="23" rowspan="7">&nbsp;</td>
    <td height="0" valign="top" width="158" rowspan="7">&nbsp;</td>
  </tr>
  <tr> 
    <td height="2" width="8">&nbsp;</td>
    <td height="2" colspan="3">&nbsp;</td>
    <td width="10" height="2">&nbsp;</td>
    <td width="183">&nbsp;</td>
    <td width="12">&nbsp;</td>
    <td width="122">&nbsp;</td>
  </tr>
  <tr> 
    <td rowspan="9" width="8"><img src="../../images/accolade.png" width="8" height="166"></td>
    <td height="0" colspan="3">&nbsp;</td>
    <td width="10">&nbsp;</td>
    <td width="183">&nbsp;</td>
    <td width="12">&nbsp;</td>
    <td width="122">&nbsp;</td>
  </tr>
  <tr> 
    <td height="0" colspan="3">&nbsp;</td>
    <td width="10">&nbsp;</td>
    <td width="183">&nbsp;</td>
    <td width="12">&nbsp;</td>
    <td width="122">&nbsp;</td>
  </tr>
  <tr> 
    <td height="0" colspan="3">&nbsp;</td>
    <td width="10">&nbsp;</td>
    <td width="183">&nbsp;</td>
    <td width="12">&nbsp;</td>
    <td width="122">&nbsp;</td>
  </tr>
  <tr> 
    <td height="0" colspan="3" rowspan="4"> 
      <div class="affichageEquipeTab" > 
        <?php	echo $clubA8001; ?>
      </div>
      <div class="affichageGATab" > 
        <?php	echo $A8001; ?>
      </div>
      <div class="affichageEquipeTab" > 
        <?php	echo $clubA8002; ?>
      </div>
      <div class="affichageGATab" > 
        <?php	echo $A8002; ?>
      </div>
    </td>
    <td width="10">&nbsp;</td>
    <td width="183">&nbsp;</td>
    <td width="12">&nbsp;</td>
    <td width="122">&nbsp;</td>
  </tr>
  <tr> 
    <td width="10">&nbsp;</td>
    <td width="183">&nbsp;</td>
    <td width="12">&nbsp;</td>
    <td width="122">&nbsp;</td>
  </tr>
  <tr> 
    <td width="317" rowspan="7"> 
      <div class="affichageEquipeTab" > 
        <?php	echo $clubA1609; ?>
      </div>
      <div class="affichageGATab" > 
        <?php	echo $A1609; ?>
      </div>
      <div class="affichageEquipeTab" > 
        <?php	echo $clubA1610; ?>
      </div>
      <div class="affichageGATab" > 
        <?php	echo $A1610; ?>
      </div>
      <div class="affichageEquipeTab" > 
        <?php	echo $clubA1611; ?>
      </div>
      <div class="affichageGATab" > 
        <?php	echo $A1611; ?>
      </div>
      <div class="affichageEquipeTab" > 
        <?php	echo $clubA1612; ?>
      </div>
      <div class="affichageGATab" > 
        <?php	echo $A1612; ?>
      </div>
    </td>
    <td rowspan="7" width="14"> 
      <div align="left"><img src="../../images/accolade.png" width="8" height="60"></div>
    </td>
    <td colspan="3" rowspan="7"> 
      <div class="affichageEquipeTab" > 
        <?php	echo $clubA8001; ?>
      </div>
      <div class="affichageGATab" > 
        <?php	echo $A8001; ?>
      </div>
      <div class="affichageEquipeTab" > 
        <?php	echo $clubA8002; ?>
      </div>
      <div class="affichageGATab" > 
        <?php	echo $A8002; ?>
      </div>
    </td>
    <td width="10" align="left">&nbsp;</td>
    <td width="183">&nbsp;</td>
    <td width="12">&nbsp;</td>
    <td width="122">&nbsp;</td>
    <td width="80">&nbsp;</td>
    <td width="23">&nbsp;</td>
    <td height="0" valign="top" width="158">&nbsp;</td>
  </tr>
  <tr> 
    <td width="10" align="left" height="3">&nbsp;</td>
    <td width="183" height="3">&nbsp;</td>
    <td width="12" height="3">&nbsp;</td>
    <td width="122" height="3">&nbsp;</td>
    <td width="80" height="3">&nbsp;</td>
    <td width="23" height="3">&nbsp;</td>
    <td height="3" valign="top" width="158">&nbsp;</td>
  </tr>
  <tr> 
    <td height="0" width="158">&nbsp;</td>
    <td width="25" height="18">&nbsp;</td>
    <td width="77" height="18">&nbsp;</td>
    <td width="10" align="left" height="18">&nbsp;</td>
    <td width="183" height="18">&nbsp;</td>
    <td width="12" height="18">&nbsp;</td>
    <td width="122" height="18">&nbsp;</td>
    <td width="80" height="18">&nbsp;</td>
    <td width="23" height="18">&nbsp;</td>
    <td height="18" valign="top" width="158">&nbsp;</td>
  </tr>
  <tr> 
    <td height="0" width="158">&nbsp;</td>
    <td width="25" height="11">&nbsp;</td>
    <td height="4" width="77"> 
      <div align="center"></div>
    </td>
    <td height="4" width="10">&nbsp;</td>
    <td width="183" height="11">&nbsp;</td>
    <td width="12">&nbsp;</td>
    <td width="122" height="11">&nbsp;</td>
    <td width="80" height="11">&nbsp;</td>
    <td width="23" height="11">&nbsp;</td>
    <td height="0" valign="top" width="158">&nbsp;</td>
  </tr>
  <tr> 
    <td width="8">&nbsp;</td>
    <td height="1" width="158" rowspan="3">&nbsp;</td>
    <td width="25" height="20" rowspan="3">&nbsp;</td>
    <td height="4" width="77" rowspan="3">&nbsp;</td>
    <td height="2" width="10">&nbsp;</td>
    <td width="183" height="18">&nbsp;</td>
    <td width="12">&nbsp;</td>
    <td width="122" height="18">&nbsp;</td>
    <td width="80" height="18">&nbsp;</td>
    <td width="23" height="18">&nbsp;</td>
    <td height="0" valign="top" width="158">&nbsp;</td>
  </tr>
  <tr> 
    <td width="8" rowspan="2">&nbsp;</td>
    <td height="1" width="10">&nbsp;</td>
    <td width="183" height="1">&nbsp;</td>
    <td width="12">&nbsp;</td>
    <td width="122" height="1">&nbsp;</td>
    <td width="80" height="1">&nbsp;</td>
    <td width="23" height="1">&nbsp;</td>
    <td height="0" valign="top" width="158">&nbsp;</td>
  </tr>
  <tr> 
    <td height="1" width="10">&nbsp;</td>
    <td colspan="3" height="0">&nbsp;</td>
    <td width="80" height="1">&nbsp;</td>
    <td colspan="2" height="1" rowspan="2"> 
      <div class="affichageEquipeTab" > 
        <?php	echo $clubA8001; ?>
      </div>
      <div class="affichageGATab" > 
        <?php	echo $A8001; ?>
      </div>
      <div class="affichageEquipeTab" > 
        <?php	echo $clubA8002; ?>
      </div>
      <div class="affichageGATab" > 
        <?php	echo $A8002; ?>
      </div>
    </td>
  </tr>
  <tr> 
    <td width="317" rowspan="6"> 
      <div class="affichageEquipeTab" > 
        <?php	echo $clubA1609; ?>
      </div>
      <div class="affichageGATab" > 
        <?php	echo $A1609; ?>
      </div>
      <div class="affichageEquipeTab" > 
        <?php	echo $clubA1610; ?>
      </div>
      <div class="affichageGATab" > 
        <?php	echo $A1610; ?>
      </div>
      <div class="affichageEquipeTab" > 
        <?php	echo $clubA1611; ?>
      </div>
      <div class="affichageGATab" > 
        <?php	echo $A1611; ?>
      </div>
      <div class="affichageEquipeTab" > 
        <?php	echo $clubA1612; ?>
      </div>
      <div class="affichageGATab" > 
        <?php	echo $A1612; ?>
      </div>
    </td>
    <td width="14" rowspan="6"> 
      <div align="left"><img src="../../images/accolade.png" width="8" height="60"></div>
    </td>
    <td colspan="3" rowspan="6"> 
      <div class="affichageEquipeTab" > 
        <?php	echo $clubA8001; ?>
      </div>
      <div class="affichageGATab" > 
        <?php	echo $A8001; ?>
      </div>
      <div class="affichageEquipeTab" > 
        <?php	echo $clubA8002; ?>
      </div>
      <div class="affichageGATab" > 
        <?php	echo $A8002; ?>
      </div>
    </td>
    <td width="8">&nbsp;</td>
    <td height="1" colspan="3">&nbsp;</td>
    <td height="0" width="10">&nbsp;</td>
    <td colspan="3" height="1">&nbsp;</td>
    <td width="80">&nbsp;</td>
  </tr>
  <tr> 
    <td width="8">&nbsp;</td>
    <td height="1" colspan="3">&nbsp;</td>
    <td height="0" width="10">&nbsp;</td>
    <td width="183">&nbsp;</td>
    <td width="12">&nbsp;</td>
    <td width="122">&nbsp;</td>
    <td width="80">&nbsp;</td>
    <td width="23">&nbsp;</td>
    <td height="0" valign="top" width="158">&nbsp;</td>
  </tr>
  <tr> 
    <td rowspan="8" width="8"><img src="../../images/accolade.png" width="8" height="166"></td>
    <td height="2" colspan="3">&nbsp;</td>
    <td height="0" width="10">&nbsp;</td>
    <td width="183">&nbsp;</td>
    <td width="12">&nbsp;</td>
    <td width="122">&nbsp;</td>
    <td width="80">&nbsp;</td>
    <td width="23">&nbsp;</td>
    <td height="0" valign="top" width="158">&nbsp;</td>
  </tr>
  <tr> 
    <td height="2" colspan="3">&nbsp;</td>
    <td height="2" width="10">&nbsp;</td>
    <td width="183">&nbsp;</td>
    <td width="12">&nbsp;</td>
    <td width="122">&nbsp;</td>
    <td width="80">&nbsp;</td>
    <td width="23">&nbsp;</td>
    <td height="0" valign="top" width="158">&nbsp;</td>
  </tr>
  <tr> 
    <td height="2" colspan="3">&nbsp;</td>
    <td height="2" width="10">&nbsp;</td>
    <td width="183">&nbsp;</td>
    <td width="12">&nbsp;</td>
    <td width="122">&nbsp;</td>
    <td width="80">&nbsp;</td>
    <td width="23">&nbsp;</td>
    <td height="0" valign="top" width="158">&nbsp;</td>
  </tr>
  <tr> 
    <td height="36" colspan="3" rowspan="2"> 
      <div class="affichageEquipeTab" > 
        <?php	echo $clubA8001; ?>
      </div>
      <div class="affichageGATab" > 
        <?php	echo $A8001; ?>
      </div>
      <div class="affichageEquipeTab" > 
        <?php	echo $clubA8002; ?>
      </div>
      <div class="affichageGATab" > 
        <?php	echo $A8002; ?>
      </div>
    </td>
    <td height="7" width="10">&nbsp;</td>
    <td width="183" height="7">&nbsp;</td>
    <td width="12">&nbsp;</td>
    <td width="122" height="7">&nbsp;</td>
    <td width="80">&nbsp;</td>
    <td width="23">&nbsp;</td>
    <td height="0" valign="top" width="158">&nbsp;</td>
  </tr>
  <tr> 
    <td width="317" height="21" rowspan="6"> 
      <div class="affichageEquipeTab" > 
        <?php	echo $clubA1609; ?>
      </div>
      <div class="affichageGATab" > 
        <?php	echo $A1609; ?>
      </div>
      <div class="affichageEquipeTab" > 
        <?php	echo $clubA1610; ?>
      </div>
      <div class="affichageGATab" > 
        <?php	echo $A1610; ?>
      </div>
      <div class="affichageEquipeTab" > 
        <?php	echo $clubA1611; ?>
      </div>
      <div class="affichageGATab" > 
        <?php	echo $A1611; ?>
      </div>
      <div class="affichageEquipeTab" > 
        <?php	echo $clubA1612; ?>
      </div>
      <div class="affichageGATab" > 
        <?php	echo $A1612; ?>
      </div>
    </td>
    <td rowspan="6" height="28" width="14"> 
      <div align="left"><img src="../../images/accolade.png" width="8" height="60"></div>
    </td>
    <td colspan="3" height="21" rowspan="6"> 
      <div class="affichageEquipeTab" > 
        <?php	echo $clubA8001; ?>
      </div>
      <div class="affichageGATab" > 
        <?php	echo $A8001; ?>
      </div>
      <div class="affichageEquipeTab" > 
        <?php	echo $clubA8002; ?>
      </div>
      <div class="affichageGATab" > 
        <?php	echo $A8002; ?>
      </div>
    </td>
    <td align="left" height="0" width="10">&nbsp; </td>
    <td width="183" height="17">&nbsp;</td>
    <td width="12">&nbsp;</td>
    <td width="122">&nbsp;</td>
    <td width="80">&nbsp;</td>
    <td width="23">&nbsp;</td>
    <td height="0" valign="top" width="158">&nbsp;</td>
  </tr>
  <tr> 
    <td height="0" width="158">&nbsp;</td>
    <td width="25">&nbsp;</td>
    <td width="77">&nbsp;</td>
    <td align="left" height="0" width="10">&nbsp;</td>
    <td width="183">&nbsp;</td>
    <td width="12">&nbsp;</td>
    <td width="122">&nbsp;</td>
    <td width="80">&nbsp;</td>
    <td width="23">&nbsp;</td>
    <td height="0" valign="top" width="158">&nbsp;</td>
  </tr>
  <tr> 
    <td height="2" width="158">&nbsp;</td>
    <td width="25" height="2">&nbsp;</td>
    <td width="77">&nbsp;</td>
    <td align="left" height="0" width="10">&nbsp;</td>
    <td width="183" height="2">&nbsp;</td>
    <td width="12">&nbsp;</td>
    <td height="2" width="122">&nbsp;</td>
    <td height="2" width="80">&nbsp;</td>
    <td height="2" width="23">&nbsp;</td>
    <td height="0" valign="top" width="158">&nbsp;</td>
  </tr>
  <tr> 
    <td height="1" width="158" rowspan="3">&nbsp;</td>
    <td width="25" rowspan="3">&nbsp;</td>
    <td width="77" rowspan="3">&nbsp;</td>
    <td align="left" height="0" width="10">&nbsp;</td>
    <td width="183">&nbsp;</td>
    <td width="12">&nbsp;</td>
    <td width="122">&nbsp;</td>
    <td width="80" rowspan="3">&nbsp;</td>
    <td width="23" rowspan="3">&nbsp;</td>
    <td height="1" valign="top" width="158" rowspan="3">&nbsp;</td>
  </tr>
  <tr> 
    <td width="8" rowspan="2">&nbsp;</td>
    <td align="left" height="0" width="10" rowspan="2">&nbsp;</td>
    <td width="183">&nbsp;</td>
    <td width="12">&nbsp;</td>
    <td width="122">&nbsp;</td>
  </tr>
  <tr> 
    <td colspan="3" rowspan="2"> 
      <div class="affichageEquipeTab" > 
        <?php	echo $clubA8001; ?>
      </div>
      <div class="affichageGATab" > 
        <?php	echo $A8001; ?>
      </div>
      <div class="affichageEquipeTab" > 
        <?php	echo $clubA8002; ?>
      </div>
      <div class="affichageGATab" > 
        <?php	echo $A8002; ?>
      </div>
    </td>
  </tr>
  <tr> 
    <td width="317" height="89" rowspan="5"> 
      <div class="affichageEquipeTab" > 
        <?php	echo $clubA1609; ?>
      </div>
      <div class="affichageGATab" > 
        <?php	echo $A1609; ?>
      </div>
      <div class="affichageEquipeTab" > 
        <?php	echo $clubA1610; ?>
      </div>
      <div class="affichageGATab" > 
        <?php	echo $A1610; ?>
      </div>
      <div class="affichageEquipeTab" > 
        <?php	echo $clubA1611; ?>
      </div>
      <div class="affichageGATab" > 
        <?php	echo $A1611; ?>
      </div>
      <div class="affichageEquipeTab" > 
        <?php	echo $clubA1612; ?>
      </div>
      <div class="affichageGATab" > 
        <?php	echo $A1612; ?>
      </div>
    </td>
    <td width="14" height="89" rowspan="5"> 
      <div align="left"><img src="../../images/accolade.png" width="8" height="60"></div>
    </td>
    <td colspan="3" height="89" rowspan="5"> 
      <div class="affichageEquipeTab" > 
        <?php	echo $clubA8001; ?>
      </div>
      <div class="affichageGATab" > 
        <?php	echo $A8001; ?>
      </div>
      <div class="affichageEquipeTab" > 
        <?php	echo $clubA8002; ?>
      </div>
      <div class="affichageGATab" > 
        <?php	echo $A8002; ?>
      </div>
    </td>
    <td height="0" width="8">&nbsp;</td>
    <td height="16" colspan="3">&nbsp;</td>
    <td align="left" height="0" width="10">&nbsp;</td>
    <td width="80" height="89" rowspan="5">&nbsp;</td>
    <td width="23" height="89" rowspan="5">&nbsp;</td>
    <td height="89" valign="top" width="158" rowspan="5">&nbsp;</td>
  </tr>
  <tr> 
    <td height="3" width="8">&nbsp;</td>
    <td height="3" colspan="3">&nbsp;</td>
    <td align="left" height="3" width="10">&nbsp;</td>
    <td width="183" height="3">&nbsp;</td>
    <td width="12" height="3">&nbsp;</td>
    <td width="122" height="3">&nbsp;</td>
  </tr>
  <tr> 
    <td rowspan="6" height="136" width="8"><img src="../../images/accolade.png" width="8" height="166"></td>
    <td height="45" colspan="3">&nbsp;</td>
    <td align="left" height="45" width="10">&nbsp;</td>
    <td width="183" height="45">&nbsp;</td>
    <td width="12" height="45">&nbsp;</td>
    <td width="122" height="45">&nbsp;</td>
  </tr>
  <tr> 
    <td height="9" colspan="3">&nbsp;</td>
    <td align="left" height="9" width="10">&nbsp;</td>
    <td width="183" height="9">&nbsp;</td>
    <td width="12" height="9">&nbsp;</td>
    <td width="122" height="9">&nbsp;</td>
  </tr>
  <tr> 
    <td height="44" colspan="3" rowspan="2"> 
      <div class="affichageEquipeTab" > 
        <?php	echo $clubA8001; ?>
      </div>
      <div class="affichageGATab" > 
        <?php	echo $A8001; ?>
      </div>
      <div class="affichageEquipeTab" > 
        <?php	echo $clubA8002; ?>
      </div>
      <div class="affichageGATab" > 
        <?php	echo $A8002; ?>
      </div>
    </td>
    <td align="left" height="2" width="10">&nbsp;</td>
    <td width="183" height="2">&nbsp;</td>
    <td width="12" height="2">&nbsp;</td>
    <td width="122" height="2">&nbsp;</td>
  </tr>
  <tr> 
    <td width="317" rowspan="4"> 
      <div class="affichageEquipeTab" > 
        <?php	echo $clubA1609; ?>
      </div>
      <div class="affichageGATab" > 
        <?php	echo $A1609; ?>
      </div>
      <div class="affichageEquipeTab" > 
        <?php	echo $clubA1610; ?>
      </div>
      <div class="affichageGATab" > 
        <?php	echo $A1610; ?>
      </div>
      <div class="affichageEquipeTab" > 
        <?php	echo $clubA1611; ?>
      </div>
      <div class="affichageGATab" > 
        <?php	echo $A1611; ?>
      </div>
      <div class="affichageEquipeTab" > 
        <?php	echo $clubA1612; ?>
      </div>
      <div class="affichageGATab" > 
        <?php	echo $A1612; ?>
      </div>
    </td>
    <td rowspan="4" width="14"> 
      <div align="left"><img src="../../images/accolade.png" width="8" height="60"></div>
    </td>
    <td colspan="3" rowspan="4"> 
      <div class="affichageEquipeTab" > 
        <?php	echo $clubA8001; ?>
      </div>
      <div class="affichageGATab" > 
        <?php	echo $A8001; ?>
      </div>
      <div class="affichageEquipeTab" > 
        <?php	echo $clubA8002; ?>
      </div>
      <div class="affichageGATab" > 
        <?php	echo $A8002; ?>
      </div>
    </td>
    <td width="10" align="left">&nbsp;</td>
    <td width="183">&nbsp; </td>
    <td width="12">&nbsp;</td>
    <td width="122">&nbsp;</td>
    <td width="80">&nbsp;</td>
    <td width="23">&nbsp;</td>
    <td height="31" valign="top" width="158">&nbsp;</td>
  </tr>
  <tr> 
    <td height="61" width="158">&nbsp;</td>
    <td width="25">&nbsp;</td>
    <td width="77">&nbsp;</td>
    <td width="10" align="left">&nbsp;</td>
    <td width="183">&nbsp;</td>
    <td width="12">&nbsp;</td>
    <td width="122">&nbsp;</td>
    <td width="80">&nbsp;</td>
    <td width="23">&nbsp;</td>
    <td height="61" valign="top" width="158">&nbsp;</td>
  </tr>
  <tr> 
    <td height="11" width="158">&nbsp;</td>
    <td width="25" height="11">&nbsp;</td>
    <td width="77" height="11">&nbsp;</td>
    <td width="10" height="11" align="left">&nbsp;</td>
    <td width="183" height="11">&nbsp;</td>
    <td width="12" height="11">&nbsp;</td>
    <td width="122" height="11">&nbsp;</td>
    <td width="80" height="11">&nbsp;</td>
    <td width="23" height="11">&nbsp;</td>
    <td height="11" valign="top" width="158">&nbsp;</td>
  </tr>
  <tr> 
    <td height="2" width="8">&nbsp;</td>
    <td height="2" width="158">&nbsp;</td>
    <td width="25" height="2">&nbsp;</td>
    <td width="77" height="2">&nbsp;</td>
    <td width="10" align="left" height="2">&nbsp;</td>
    <td width="183" height="2">&nbsp;</td>
    <td width="12" height="2">&nbsp;</td>
    <td width="122" height="2">&nbsp;</td>
    <td width="80" height="2">&nbsp;</td>
    <td width="23" height="2">&nbsp;</td>
    <td height="2" valign="top" width="158">&nbsp;</td>
  </tr>
  <tr> 
    <td bgcolor="#FFCC66" width="317">&nbsp;</td>
    <td bgcolor="#FFCC66" width="14">&nbsp;</td>
    <td bgcolor="#FFCC66" width="78">&nbsp;</td>
    <td bgcolor="#FFCC66" width="34">&nbsp;</td>
    <td bgcolor="#FFCC66" width="156">&nbsp;</td>
    <td bgcolor="#FFCC66" width="8">&nbsp;</td>
    <td bgcolor="#FFCC66" width="158">&nbsp;</td>
    <td bgcolor="#FFCC66" width="25">&nbsp;</td>
    <td bgcolor="#FFCC66" width="77">&nbsp;</td>
    <td bgcolor="#FFCC66" width="10">&nbsp;</td>
    <td bgcolor="#FFCC66" width="183">&nbsp;</td>
    <td bgcolor="#FFCC66" width="12">&nbsp;</td>
    <td bgcolor="#FFCC66" width="122">&nbsp;</td>
    <td bgcolor="#FFCC66" width="80">&nbsp;</td>
    <td bgcolor="#FFCC66" width="23">&nbsp;</td>
    <td bgcolor="#FFCC66" width="158">&nbsp;</td>
  </tr>
  <tr> 
    <td width="317" height="2"> 
      <div align="center"> </div>
    </td>
    <td width="14" height="2">&nbsp;</td>
    <td width="78" height="2">&nbsp;</td>
    <td width="34" height="2">&nbsp;</td>
    <td width="156" height="2">&nbsp;</td>
    <td height="2" width="8">&nbsp;</td>
    <td width="158" height="2">&nbsp;</td>
    <td width="25" height="2">&nbsp;</td>
    <td width="77" height="2">&nbsp;</td>
    <td width="10" height="2">&nbsp;</td>
    <td width="183" height="2">&nbsp;</td>
    <td width="12" height="2">&nbsp;</td>
    <td width="122" height="2">&nbsp;</td>
    <td width="80" height="2">&nbsp;</td>
    <td width="23" height="2">&nbsp;</td>
    <td width="158" height="2">&nbsp;</td>
  </tr>
</table>
<?php   include("../../pub/pub1.php");   ?>
