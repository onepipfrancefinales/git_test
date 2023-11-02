<?php
$bdcomiteClub = $comite.''."_clubs";
require ("../../phasesfinalesterr2019/fonctionspfterrESDL.php");
huitiemeAR($bdcomiteClub, $division, $annee);

?>


<body bgcolor="#EAECEB">
<table width="1000" border="0" align="left" height="500" cellspacing="0">
  <tr> 
    <td height="13" colspan="15"> 
      <div class="bandeau2" > 
        <?php affichage($division);?>
      </div>
    </td>
  </tr>
  <tr> 
    <td width="160" height="13">&nbsp;</td>
    <td width="30" height="18">&nbsp;</td>
    <td width="32" height="18">&nbsp;</td>
    <td width="32" height="18">&nbsp;</td>
    <td width="160" height="18">&nbsp;</td>
    <td width="30" height="18">&nbsp;</td>
    <td width="21" height="18">&nbsp;</td>
    <td width="160" height="18" align="left">&nbsp;</td>
    <td width="30" height="18">&nbsp;</td>
    <td width="22" height="18">&nbsp;</td>
    <td width="160" height="18">&nbsp;</td>
    <td width="30" height="18">&nbsp;</td>
    <td width="21" height="18">&nbsp;</td>
    <td width="21" height="18">&nbsp;</td>
    <td height="167" rowspan="27" valign="top"> 
      <?php  
	   
		     include("../../phasesfinalesterr2019/qualification/Qph.php");  
		   
		    ?>
    </td>
  </tr>
  <tr> 
    <td colspan="2" height="13"> 
      <div class="affichageTitre" >8me de finale AR</div>
    </td>
    <td width="32" height="18">&nbsp;</td>
    <td width="32" height="18">&nbsp;</td>
    <td width="160" height="18"> 
      <div class="affichageTitre" >Quarts de finale</div>
    </td>
    <td width="30" height="18">&nbsp;</td>
    <td width="21" height="18">&nbsp;</td>
    <td width="160" height="18" align="left"> 
      <div class="affichageTitre" >Demi finale</div>
    </td>
    <td width="30" height="18">&nbsp;</td>
    <td width="22" height="18">&nbsp;</td>
    <td width="160" height="18"> 
      <div class="affichageTitre" >Finale</div>
    </td>
    <td width="30" height="18">&nbsp;</td>
    <td width="21" height="18">&nbsp;</td>
    <td width="21" height="18">&nbsp;</td>
  </tr>
  <tr> 
    <td width="160" height="13">&nbsp;</td>
    <td width="30" height="18">&nbsp;</td>
    <td width="32" height="18">&nbsp;</td>
    <td width="32" height="18">&nbsp;</td>
    <td width="160" height="18">&nbsp;</td>
    <td width="30" height="18">&nbsp;</td>
    <td width="21" height="18">&nbsp;</td>
    <td width="160" height="18" align="left">&nbsp;</td>
    <td width="30" height="18">&nbsp;</td>
    <td width="22" height="18">&nbsp;</td>
    <td width="160" height="18">&nbsp;</td>
    <td width="30" height="18">&nbsp;</td>
    <td width="21" height="18">&nbsp;</td>
    <td width="21" height="18">&nbsp;</td>
  </tr>
  <tr> 
    <td width="160" height="13">&nbsp;</td>
    <td width="30" height="18"> 
      <div class="affichagePts" >Pts</div>
    </td>
    <td width="32" height="18"> 
      <div class="affichageGA" > GA</div>
    </td>
    <td width="32" height="18">&nbsp;</td>
    <td width="160" height="18">&nbsp;</td>
    <td width="30" height="18">&nbsp;</td>
    <td width="21" height="18">&nbsp;</td>
    <td width="160" height="18" align="left">&nbsp;</td>
    <td width="30" height="18">&nbsp;</td>
    <td width="22" height="18">&nbsp;</td>
    <td width="160" height="18">&nbsp;</td>
    <td width="30" height="18">&nbsp;</td>
    <td width="21" height="18">&nbsp;</td>
    <td width="21" height="18">&nbsp;</td>
  </tr>
  <tr> 
    <td width="160" height="13"> 
      <div class="affichageEquipe" > 
        <?php	 echo $clubA8001; ?>
      </div>
    </td>
    <td width="30" height="18"> 
      <div class="affichagePts" > 
        <?php echo $A8001; ?>
      </div>
    </td>
    <td width="32" height="18"> 
      <div class="affichageGA" > 
        <?php echo $A1601; ?>
      </div>
    </td>
    <td width="32" height="18">&nbsp;</td>
    <td width="160" height="18"> <font size="2" face="Arial, Helvetica, sans-serif"><b><i> 
      <strong> 
      <?php//	 echo $quart1; ?>
      </strong></i></b></font> </td>
    <td width="30" height="18">&nbsp;</td>
    <td width="21" height="18">&nbsp;</td>
    <td width="160" height="18" align="left">&nbsp;</td>
    <td width="30" height="18">&nbsp;</td>
    <td width="22" height="18">&nbsp;</td>
    <td width="160" height="18">&nbsp;</td>
    <td width="30" height="18">&nbsp;</td>
    <td width="21" height="18">&nbsp;</td>
    <td width="21" height="18">&nbsp;</td>
  </tr>
  <tr> 
    <td width="160"> 
      <div class="affichageEquipe" > 
        <?php	 echo $clubA8002; ?>
      </div>
    </td>
    <td width="30"> 
      <div class="affichagePts" > 
        <?php	 echo $A8002; ?>
      </div>
    </td>
    <td width="32"> 
      <div class="affichageGA" > 
        <?php echo $A1602; ?>
      </div>
    </td>
    <td width="32">&nbsp;</td>
    <td width="160"> 
      <div class="affichageEquipe" > 
        <?php echo $clubA4001; ?>
      </div>
    </td>
    <td width="30"> 
      <div class="affichageGA" > 
        <?php 	echo $A4001; ?>
      </div>
    </td>
    <td width="21">&nbsp;</td>
    <td width="160" align="left">&nbsp;</td>
    <td width="30">&nbsp;</td>
    <td width="22">&nbsp;</td>
    <td width="160">&nbsp;</td>
    <td width="30">&nbsp;</td>
    <td width="21">&nbsp;</td>
    <td width="21">&nbsp;</td>
  </tr>
  <tr> 
    <td width="160" height="15"></td>
    <td width="30" height="15"></td>
    <td width="32" height="15"></td>
    <td width="32" height="15"></td>
    <td width="160" height="15"> 
      <div class="affichageEquipe" > 
        <?php echo $clubA4002;  ?>
      </div>
    </td>
    <td width="30" height="15"> 
      <div class="affichageGA" > 
        <?php echo $A4002;  ?>
      </div>
    </td>
    <td width="21" height="15">&nbsp;</td>
    <td width="160" align="left" height="15"></td>
    <td width="30" height="15">&nbsp;</td>
    <td width="22" height="15">&nbsp;</td>
    <td width="160" height="15">&nbsp;</td>
    <td width="30" height="15">&nbsp;</td>
    <td width="21" height="15">&nbsp;</td>
    <td width="21" height="15">&nbsp;</td>
  </tr>
  <tr> 
    <td width="160"> 
      <div class="affichageEquipe" > 
        <?php echo $clubA8003; ?>
      </div>
    </td>
    <td width="30"> 
      <div class="affichagePts" > 
        <?php echo $A8003; ?>
      </div>
    </td>
    <td width="32"> 
      <div class="affichageGA" > 
        <?php echo $A1603; ?>
      </div>
    </td>
    <td width="32">&nbsp;</td>
    <td width="160">&nbsp;</td>
    <td width="30">&nbsp;</td>
    <td width="21">&nbsp;</td>
    <td width="160" align="left"><font size="2" face="Arial, Helvetica, sans-serif"><b><i><strong> 
      <?php//	 echo $demi1; ?>
      </strong></i></b></font> </td>
    <td width="30"> </td>
    <td width="22">&nbsp;</td>
    <td width="160">&nbsp;</td>
    <td width="30">&nbsp;</td>
    <td width="21">&nbsp;</td>
    <td width="21">&nbsp;</td>
  </tr>
  <tr> 
    <td width="160"> 
      <div class="affichageEquipe" > 
        <?php echo $clubA8004; ?>
      </div>
    </td>
    <td width="30"> 
      <div class="affichagePts" > 
        <?php echo $A8004; ?>
      </div>
    </td>
    <td width="32"> 
      <div class="affichageGA" > 
        <?php echo $A1604; ?>
      </div>
    </td>
    <td width="32">&nbsp;</td>
    <td width="160"></td>
    <td width="30">&nbsp;</td>
    <td width="21">&nbsp;</td>
    <td width="160"> 
      <div class="affichageEquipe" > 
        <?php echo $clubA2001; ?>
      </div>
    </td>
    <td width="30"> 
      <div class="affichageGA" > 
        <?php echo $A2001; ?>
      </div>
    </td>
    <td width="22">&nbsp;</td>
    <td width="160">&nbsp;</td>
    <td width="30">&nbsp;</td>
    <td width="21">&nbsp;</td>
    <td width="21">&nbsp;</td>
  </tr>
  <tr> 
    <td width="160" height="22"></td>
    <td width="30" height="22"></td>
    <td width="32" height="22">&nbsp;</td>
    <td width="32" height="22">&nbsp;</td>
    <td width="160" height="22">&nbsp;</td>
    <td width="30" height="22">&nbsp;</td>
    <td width="21" height="22">&nbsp;</td>
    <td width="160" align="left" height="22"> 
      <div class="affichageEquipe" > 
        <?php echo $clubA2002; ?>
      </div>
    </td>
    <td width="30" height="22"> 
      <div class="affichageGA" > 
        <?php echo $A2002; ?>
      </div>
    </td>
    <td width="22" height="22">&nbsp;</td>
    <td height="22">&nbsp;</td>
    <td height="22">&nbsp;</td>
    <td height="22">&nbsp;</td>
    <td height="22">&nbsp;</td>
  </tr>
  <tr> 
    <td width="160" height="22"> 
      <div class="affichageEquipe" > 
        <?php echo $clubA8005; ?>
      </div>
    </td>
    <td width="30" height="22"> 
      <div class="affichagePts" > 
        <?php echo $A8005; ?>
      </div>
    </td>
    <td width="32" height="22"> 
      <div class="affichageGA" > 
        <?php echo $A1605; ?>
      </div>
    </td>
    <td width="32" height="22">&nbsp;</td>
    <td width="160" height="22"><font size="2" face="Arial, Helvetica, sans-serif"><b><i><strong> 
      <?php//	 echo $quart2; ?>
      </strong></i></b></font></td>
    <td width="30" height="22">&nbsp;</td>
    <td width="21" height="22">&nbsp;</td>
    <td width="160" align="left" height="22">&nbsp;</td>
    <td width="30" height="22">&nbsp;</td>
    <td width="22" height="22">&nbsp;</td>
    <td height="22">&nbsp;</td>
    <td height="22">&nbsp;</td>
    <td height="22">&nbsp;</td>
    <td height="22">&nbsp;</td>
  </tr>
  <tr> 
    <td width="160" height="22"> 
      <div class="affichageEquipe" > 
        <?php echo $clubA8006; ?>
      </div>
    </td>
    <td width="30" height="22"> 
      <div class="affichagePts" > 
        <?php echo $A8006; ?>
      </div>
    </td>
    <td width="32" height="22"> 
      <div class="affichageGA" > 
        <?php echo $A1606; ?>
      </div>
    </td>
    <td width="32" height="22">&nbsp;</td>
    <td width="160" height="22"> 
      <div class="affichageEquipe" > 
        <?php echo $clubA4003;  ?>
      </div>
    </td>
    <td width="30" height="22"> 
      <div class="affichageGA" > 
        <?php echo $A4003;  ?>
      </div>
    </td>
    <td width="21" height="22">&nbsp;</td>
    <td width="160" align="left" height="22">&nbsp;</td>
    <td width="30" height="22">&nbsp;</td>
    <td width="22" height="22">&nbsp;</td>
    <td height="22"></td>
    <td height="22"></td>
    <td height="22"></td>
    <td height="22"></td>
  </tr>
  <tr> 
    <td width="160" height="11"> </td>
    <td width="30" height="11"> </td>
    <td width="32">&nbsp;</td>
    <td width="32">&nbsp;</td>
    <td width="160"> 
      <div class="affichageEquipe" > 
        <?php 	echo $clubA4004;  ?>
      </div>
    </td>
    <td width="30"> 
      <div class="affichageGA" > 
        <?php 	echo $A4004;  ?>
      </div>
    </td>
    <td width="21">&nbsp;</td>
    <td width="160" align="left">&nbsp;</td>
    <td width="30">&nbsp;</td>
    <td width="22">&nbsp;</td>
    <td width="160"><font size="2" face="Arial, Helvetica, sans-serif"><b><i><strong> 
      <?php// echo $finale; ?>
      </strong></i></b></font> </td>
    <td width="30"> </td>
    <td width="21">&nbsp;</td>
    <td width="21">&nbsp;</td>
  </tr>
  <tr> 
    <td width="160" height="11"> 
      <div class="affichageEquipe" > 
        <?php echo $clubA8007; ?>
      </div>
    </td>
    <td width="30" height="11"> 
      <div class="affichagePts" > 
        <?php echo $A8007; ?>
      </div>
    </td>
    <td width="32" height="11"> 
      <div class="affichageGA" > 
        <?php echo $A1607; ?>
      </div>
    </td>
    <td width="32" height="11">&nbsp;</td>
    <td width="160" height="11">&nbsp;</td>
    <td width="30" height="11">&nbsp;</td>
    <td width="21" height="11">&nbsp;</td>
    <td width="160" height="11" align="left">&nbsp;</td>
    <td width="30" height="11">&nbsp;</td>
    <td width="22" height="11">&nbsp;</td>
    <td width="160" height="11"> 
      <div class="affichageEquipe" > 
        <?php echo $clubA1001;  ?>
      </div>
    </td>
    <td width="30" height="11"> 
      <div class="affichageGA" > 
        <?php echo $A1001; ?>
      </div>
    </td>
    <td width="21" height="11">&nbsp;</td>
    <td width="21" height="11">&nbsp;</td>
  </tr>
  <tr> 
    <td width="160" height="16"> 
      <div class="affichageEquipe" > 
        <?php echo $clubA8008; ?>
      </div>
    </td>
    <td width="30" height="16"> 
      <div class="affichagePts" > 
        <?php echo $A8008; ?>
      </div>
    </td>
    <td width="32" height="16"> 
      <div class="affichageGA" > 
        <?php echo $A1608; ?>
      </div>
    </td>
    <td width="32" height="16">&nbsp;</td>
    <td width="160" height="16">&nbsp;</td>
    <td width="30" height="16">&nbsp;</td>
    <td width="21" height="16">&nbsp;</td>
    <td width="160" align="left" height="16">&nbsp;</td>
    <td width="30" height="16">&nbsp;</td>
    <td height="16">&nbsp; </td>
    <td height="16"> 
      <div class="affichageEquipe" > 
        <?php echo $clubA1002;  ?>
      </div>
    </td>
    <td height="16"> 
      <div class="affichageGA" > 
        <?php echo $A1002;  ?>
      </div>
    </td>
    <td height="16">eerer</td>
    <td height="16">erere</td>
  </tr>
  <tr> 
    <td width="160" height="27"> </td>
    <td width="30" height="27">&nbsp; </td>
    <td width="32" height="27">&nbsp;</td>
    <td width="32" height="27">&nbsp;</td>
    <td width="160" height="27">&nbsp;</td>
    <td width="30" height="27">&nbsp;</td>
    <td width="21" height="27">&nbsp;</td>
    <td width="160" align="left" height="27">&nbsp;</td>
    <td width="30" height="27">&nbsp;</td>
    <td height="27"> </td>
    <td height="27"></td>
    <td height="27"></td>
    <td height="27"></td>
    <td height="27"></td>
  </tr>
  <tr valign="top"> 
    <td width="160" height="14"> 
      <div class="affichageEquipe" > 
        <?php echo $clubA8009; ?>
      </div>
    </td>
    <td width="30" height="14"> 
      <div class="affichagePts" > 
        <?php echo $A8009; ?>
      </div>
    </td>
    <td width="32" height="14"> 
      <div class="affichageGA" > 
        <?php echo $A1609; ?>
      </div>
    </td>
    <td width="32" height="14">&nbsp;</td>
    <td width="160" height="14">&nbsp;</td>
    <td width="30" height="14">&nbsp;</td>
    <td width="21" height="14">&nbsp;</td>
    <td width="160" height="14" align="left"></td>
    <td width="30" height="14">&nbsp;</td>
    <td height="14">&nbsp;</td>
    <td height="14">&nbsp;</td>
    <td height="14">&nbsp;</td>
    <td height="14">&nbsp;</td>
    <td height="14">&nbsp;</td>
  </tr>
  <tr valign="top"> 
    <td width="160" height="6"> 
      <div class="affichageEquipe" > 
        <?php echo $clubA8010; ?>
      </div>
    </td>
    <td width="30" height="6"> 
      <div class="affichagePts" > 
        <?php echo $A8010; ?>
      </div>
    </td>
    <td width="32" height="6"> 
      <div class="affichageGA" > 
        <?php echo $A1610; ?>
      </div>
    </td>
    <td width="32" height="6">&nbsp;</td>
    <td width="160" height="6"><font size="2" face="Arial, Helvetica, sans-serif"> 
      <b><i><strong> 
      <?php//	 echo $quart3; ?>
      </strong></i></b><strong> </strong> </font></td>
    <td width="30" height="6">&nbsp;</td>
    <td width="21" height="6">&nbsp;</td>
    <td width="160" height="6" align="left"></td>
    <td width="30" height="6">&nbsp;</td>
    <td>&nbsp; </td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr> 
    <td width="160" height="25"> </td>
    <td width="30" height="25"> </td>
    <td width="32" height="25">&nbsp;</td>
    <td width="32" height="25">&nbsp;</td>
    <td width="160" height="25"> 
      <div class="affichageEquipe" > 
        <?php echo $clubA4005;?>
      </div>
    </td>
    <td width="30" height="25"> 
      <div class="affichageGA" > 
        <?php echo $A4005;  ?>
      </div>
    </td>
    <td width="21" height="25">&nbsp;</td>
    <td width="160" align="left" height="25">&nbsp;</td>
    <td width="30" height="25">&nbsp;</td>
    <td height="25">&nbsp;</td>
    <td height="25">&nbsp;</td>
    <td height="25">&nbsp;</td>
    <td height="25">&nbsp;</td>
    <td height="25">&nbsp;</td>
  </tr>
  <tr> 
    <td width="160" height="20"> 
      <div class="affichageEquipe" > 
        <?php	 echo $clubA8011; ?>
      </div>
    </td>
    <td width="30" height="20"> 
      <div class="affichagePts" > 
        <?php	 echo $A8011; ?>
      </div>
    </td>
    <td width="32" height="20"> 
      <div class="affichageGA" > 
        <?php echo $A1611; ?>
      </div>
    </td>
    <td width="32" height="20">&nbsp;</td>
    <td width="160" height="20"> 
      <div class="affichageEquipe" > 
        <?php	 echo $clubA4006; ?>
      </div>
    </td>
    <td width="30" height="20"> 
      <div class="affichageGA" > 
        <?php 	echo $A4006; ?>
      </div>
    </td>
    <td width="21" height="20">&nbsp;</td>
    <td width="160" align="left" height="20"></td>
    <td width="30" height="20">&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr> 
    <td width="160" height="18"> 
      <div class="affichageEquipe" > 
        <?php echo $clubA8012; ?>
      </div>
    </td>
    <td width="30" height="18"> 
      <div class="affichagePts" > 
        <?php echo $A8012; ?>
      </div>
    </td>
    <td width="32" height="18"> 
      <div class="affichageGA" > 
        <?php echo $A1612; ?>
      </div>
    </td>
    <td width="32" height="18">&nbsp;</td>
    <td width="160" height="18">&nbsp;</td>
    <td width="30" height="18">&nbsp;</td>
    <td width="21" height="18">&nbsp;</td>
    <td width="160" align="left" height="18"><font size="2" face="Arial, Helvetica, sans-serif"><b><i><strong> 
      <?php// echo $demi2; ?>
      </strong></i></b></font></td>
    <td width="30" height="18">&nbsp;</td>
    <td height="18"> 
      <div align="center"> </div>
    </td>
    <td height="18">&nbsp;</td>
    <td height="18">&nbsp;</td>
    <td height="18">&nbsp;</td>
    <td height="18">&nbsp;</td>
  </tr>
  <tr> 
    <td width="160">&nbsp;</td>
    <td width="30">&nbsp;</td>
    <td width="32">&nbsp;</td>
    <td width="32">&nbsp;</td>
    <td width="160">&nbsp;</td>
    <td width="30">&nbsp;</td>
    <td width="21">&nbsp;</td>
    <td width="160" align="left"> 
      <div class="affichageEquipe" > 
        <?php echo $clubA2003; ?>
      </div>
    </td>
    <td width="30"> 
      <div class="affichageGA" > 
        <?php echo $A2003; ?>
      </div>
    </td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr> 
    <td width="160"> 
      <div class="affichageEquipe" > 
        <?php echo $clubA8013; ?>
      </div>
    </td>
    <td width="30"> 
      <div class="affichagePts" > 
        <?php echo $A8013; ?>
      </div>
    </td>
    <td width="32"> 
      <div class="affichageGA" > 
        <?php echo $A1613; ?>
      </div>
    </td>
    <td width="32">&nbsp;</td>
    <td width="160">&nbsp;</td>
    <td width="30">&nbsp;</td>
    <td width="21">&nbsp;</td>
    <td width="160" align="left"> 
      <div class="affichageEquipe" > 
        <?php echo $clubA2004; ?>
      </div>
    </td>
    <td width="30"> 
      <div class="affichageGA" > 
        <?php echo $A2004; ?>
      </div>
    </td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr> 
    <td width="160"> 
      <div class="affichageEquipe" > 
        <?php echo $clubA8014; ?>
      </div>
    </td>
    <td width="30"> 
      <div class="affichagePts" > 
        <?php echo $A8014; ?>
      </div>
    </td>
    <td width="32"> 
      <div class="affichageGA" > 
        <?php echo $A1614; ?>
      </div>
    </td>
    <td width="32">&nbsp;</td>
    <td width="160"> <strong><font size="2" face="Arial, Helvetica, sans-serif"><b><i><strong> 
      <?php//	 echo $quart4; ?>
      </strong></i></b></font> </strong></td>
    <td width="30">&nbsp;</td>
    <td width="21">&nbsp;</td>
    <td width="160" align="left"> </td>
    <td width="30"> </td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr> 
    <td width="160"> </td>
    <td width="30">&nbsp; </td>
    <td width="32">&nbsp;</td>
    <td width="32">&nbsp;</td>
    <td width="160"> 
      <div class="affichageEquipe" > 
        <?php echo $clubA4007; ?>
      </div>
    </td>
    <td width="30"> 
      <div class="affichageGA" > 
        <?php echo $A4007;  ?>
      </div>
    </td>
    <td width="21">&nbsp;</td>
    <td width="160" align="left">&nbsp;</td>
    <td width="30">&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr> 
    <td width="160" height="20"> 
      <div class="affichageEquipe" > 
        <?php echo $clubA8015; ?>
      </div>
    </td>
    <td width="30" height="20"> 
      <div class="affichagePts" > 
        <?php echo $A8015; ?>
      </div>
    </td>
    <td width="32" height="20"> 
      <div class="affichageGA" > 
        <?php echo $A1615; ?>
      </div>
    </td>
    <td width="32" height="20">&nbsp;</td>
    <td width="160" height="20"> 
      <div class="affichageEquipe" > 
        <?php echo $clubA4008; ?>
      </div>
    </td>
    <td width="30" height="20"> 
      <div class="affichageGA" > 
        <?php echo $A4008; ?>
      </div>
    </td>
    <td width="21" height="20">&nbsp;</td>
    <td width="160" align="left" height="20">&nbsp;</td>
    <td width="30" height="20">&nbsp;</td>
    <td height="20">&nbsp;</td>
    <td height="20">&nbsp;</td>
    <td height="20">&nbsp;</td>
    <td height="20">&nbsp;</td>
    <td height="20">&nbsp;</td>
  </tr>
  <tr> 
    <td width="160" height="20"> 
      <div class="affichageEquipe" > 
        <?php echo $clubA8016; ?>
      </div>
    </td>
    <td width="30" height="20"> 
      <div class="affichagePts" > 
        <?php echo $A8016; ?>
      </div>
    </td>
    <td width="32" height="20"> 
      <div class="affichageGA" > 
        <?php echo $A1616; ?>
      </div>
    </td>
    <td width="32" height="20">&nbsp;</td>
    <td width="160" height="20">&nbsp;</td>
    <td width="30" height="20">&nbsp;</td>
    <td width="21" height="20">&nbsp;</td>
    <td width="160" align="left" height="20">&nbsp;</td>
    <td width="30" height="20">&nbsp;</td>
    <td height="20">&nbsp;</td>
    <td height="20">&nbsp;</td>
    <td height="20">&nbsp;</td>
    <td height="20">&nbsp;</td>
    <td height="20">&nbsp;</td>
  </tr>
  <tr> 
    <td colspan="15">&nbsp; </td>
  </tr>
  <tr> 
    <td colspan="15" height="22"> 
      <div align="center"> 
        <?php require("../../pub/pub1.php"); ?>
      </div>
    </td>
  </tr>
</table>
