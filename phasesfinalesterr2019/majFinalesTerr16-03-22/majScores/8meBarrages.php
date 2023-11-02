


<?php 


 $division=$_GET['division']; 
 $comite=$_GET['comite']; 
 $annee=$_GET['annee']; 
 $type=$_GET['type'];

 $phpbd_pfterr_e=$comite.''."_pfterr_e"; 
 $phpbd_pfterr_r=$comite.''."_pfterr_r";


require ("../../fonctionspfterrESDL2019.php");   
huitiemeEtBarrages2019 ($comite, $division, $annee) ;


?>


<form name="insertion" action="saisieScore2.php?division=<?php echo $division ;?>&type=<?php echo $type ;?>&annee=<?php echo $annee ;?>&comite=<?php echo $comite ;?>" method="POST">
  <b><font size="4"> 


  </font></b> <b><font size="4"> 
  <?php
 $phpbd_pfterr=$comite.''."_pfterr_r";
 $phpcomite_clubs =$comite.''."_clubs";
 

										
									
//***************  Scores  ****************************
									$bdcomite_pfterr_r="php".''.$bdcomite_pfterr_r;			 
							
												
			$requete = mysql_query( "SELECT division ,  A1601, A1602, A1603, A1604,	A1605, A1606, A1607, A1608,
														A8001, A8002, A8003, A8004,	A8005, A8006, A8007, A8008,	
														A8009, A8010, A8011, A8012,	A8013, A8014, A8015, A8016,
														A4001, A4002, A4003, A4004,	A4005, A4006, A4007, A4008,
														A2001, A2002, A2003, A2004,
													   	A1001, A1002
    					   			  FROM $bdcomite_pfterr_r
									  WHERE  annee= $annee AND division =$division" ) ;			

												  if( $result = mysql_fetch_object( $requete ) )
												  {
												  ?>
												  <?php
												 }
												mysql_close(); // Déconnexion de MySQL
												?>
  </font></b> 
  <input type="hidden" name="division" value="<?php echo($division) ;?>">
  <table border="0" cellspacing="0" cellpadding="10" width="400">
    <tr align="center"> 
      <td colspan="4"> </td>
    </tr>
    <tr align="center" bgcolor="#0099FF"> 
      <td colspan="4"><b><font face="Arial, Helvetica, sans-serif" size="4">BARRAGES</font></b></td>
    </tr>
    <tr align="center"> 
      <td width="10">1</td>
      <td width="167"><font face="Arial, Helvetica, sans-serif"> 
        <?php	echo $clubA1601; ?>
        <br>
        <br>
        <input type="text" name="A1601" value="<?php echo($result->A1601) ;?>" size="3">
        </font></td>
      <td width="5">&nbsp;</td>
      <td width="138"><font face="Arial, Helvetica, sans-serif"> 
        <?php	echo $clubA1602; ?>
        <br>
        <br>
        <input type="text" name="A1602" value="<?php echo($result->A1602) ;?>" size="3">
        </font></td>
    </tr>
    <tr align="center"> 
      <td width="10">2</td>
      <td width="167"><font face="Arial, Helvetica, sans-serif"> 
        <?php	echo $clubA1603; ?>
        <br>
        <br>
        <input type="text" name="A1603" value="<?php echo($result->A1603) ;?>" size="3">
        </font></td>
      <td width="5">&nbsp;</td>
      <td width="138"><font face="Arial, Helvetica, sans-serif"> 
        <?php	echo $clubA1604; ?>
        <br>
        <br>
        <input type="text" name="A1604" value="<?php echo($result->A1604) ;?>" size="3">
        </font></td>
    </tr>
    <tr align="center"> 
      <td width="10">3</td>
      <td width="167"><font face="Arial, Helvetica, sans-serif"> 
        <?php	echo $clubA1605; ?>
        <br>
        <br>
        <input type="text" name="A1605" value="<?php echo($result->A1605) ;?>" size="3">
        </font></td>
      <td width="5">&nbsp;</td>
      <td width="138"><font face="Arial, Helvetica, sans-serif"> 
        <?php	echo $clubA1606; ?>
        <br>
        <br>
        <input type="text" name="A1606" value="<?php echo($result->A1606) ;?>" size="3">
        </font></td>
    </tr>
    <tr align="center"> 
      <td width="10">4</td>
      <td width="167"><font face="Arial, Helvetica, sans-serif"> 
        <?php	echo $clubA1607; ?>
        <br>
        <br>
        <input type="text" name="A1607" value="<?php echo($result->A1607) ;?>" size="3">
        </font></td>
      <td width="5">&nbsp;</td>
      <td width="138"><font face="Arial, Helvetica, sans-serif"> 
        <?php	echo $clubA1608; ?>
        <br>
        <br>
        <input type="text" name="A1608" value="<?php echo($result->A1608) ;?>" size="3">
        </font></td>
    </tr>
    <tr align="center"> 
      <td colspan="4" bgcolor="#FF0000"><font face="Arial, Helvetica, sans-serif"><b>HUITIEME 
        DE FINALE<font size="4" face="Arial, Helvetica, sans-serif"> 
        <?php echo $division; ?>
        ( 
        <?php echo $id; ?>
        ) 
        <?php echo $annee; ?>
        </font></b></font></td>
    </tr>
    <tr align="center"> 
      <td width="10">&nbsp;</td>
      <td width="167"><font face="Arial, Helvetica, sans-serif"> 
        <?php	echo $clubA8001; ?>
        <br>
        <br>
        <input type="text" name="A8001" value="<?php echo($result->A8001) ;?>" size="3">
        </font></td>
      <td width="5">&nbsp;</td>
      <td width="138"><font face="Arial, Helvetica, sans-serif"> 
        <?php	echo $clubA8002; ?>
        <br>
        <br>
        <input type="text" name="A8002" value="<?php echo($result->A8002) ;?>" size="3">
        </font></td>
    </tr>
    <tr align="center"> 
      <td width="10">&nbsp;</td>
      <td width="167"><font face="Arial, Helvetica, sans-serif"> 
        <?php	echo $clubA8003; ?>
        <br>
        <br>
        <input type="text" name="A8003" value="<?php echo($result->A8003) ;?>" size="3">
        </font></td>
      <td width="5">&nbsp;</td>
      <td width="138"><font face="Arial, Helvetica, sans-serif"> 
        <?php	echo $clubA8004; ?>
        <br>
        <br>
        <input type="text" name="A8004" value="<?php echo($result->A8004) ;?>" size="3">
        </font></td>
    </tr>
    <tr align="center"> 
      <td width="10">&nbsp;</td>
      <td width="167"><font face="Arial, Helvetica, sans-serif"> 
        <?php	echo $clubA8005; ?>
        <br>
        <br>
        <input type="text" name="A8005" value="<?php echo($result->A8005) ;?>" size="3">
        </font></td>
      <td width="5">&nbsp;</td>
      <td width="138"><font face="Arial, Helvetica, sans-serif"> 
        <?php	echo $clubA8006; ?>
        <br>
        <br>
        <input type="text" name="A8006" value="<?php echo($result->A8006) ;?>" size="3">
        </font></td>
    </tr>
    <tr align="center"> 
      <td width="10">&nbsp;</td>
      <td width="167"><font face="Arial, Helvetica, sans-serif"> 
        <?php	echo $clubA8007; ?>
        <br>
        <br>
        <input type="text" name="A8007" value="<?php echo($result->A8007) ;?>" size="3">
        </font></td>
      <td width="5">&nbsp;</td>
      <td width="138"><font face="Arial, Helvetica, sans-serif"> 
        <?php	echo $clubA8008; ?>
        <br>
        <br>
        <input type="text" name="A8008" value="<?php echo($result->A8008) ;?>" size="3">
        </font></td>
    </tr>
    <tr align="center"> 
      <td width="10">&nbsp;</td>
      <td width="167"> 
        <p><font face="Arial, Helvetica, sans-serif"> 
          <?php	echo $clubA8009; ?>
          </font></p>
        <p><font face="Arial, Helvetica, sans-serif"> 
          <input type="text" name="A8009" value="<?php echo($result->A8009) ;?>" size="3">
          </font></p>
      </td>
      <td width="5">&nbsp;</td>
      <td width="138"><font face="Arial, Helvetica, sans-serif"> 
        <?php	echo $clubA8010; ?>
        <br>
        <br>
        <input type="text" name="A8010" value="<?php echo($result->A8010) ;?>" size="3">
        </font></td>
    </tr>
    <tr align="center"> 
      <td width="10">&nbsp;</td>
      <td width="167"><font face="Arial, Helvetica, sans-serif"> 
        <?php	echo $clubA8011; ?>
        <br>
        <br>
        <input type="text" name="A8011" value="<?php echo($result->A8011) ;?>" size="3">
        </font></td>
      <td width="5">&nbsp;</td>
      <td width="138"><font face="Arial, Helvetica, sans-serif"> 
        <?php	echo $clubA8012; ?>
        <br>
        <br>
        <input type="text" name="A8012" value="<?php echo($result->A8012) ;?>" size="3">
        </font></td>
    </tr>
    <tr align="center"> 
      <td width="10">&nbsp;</td>
      <td width="167"><font face="Arial, Helvetica, sans-serif"> 
        <?php	echo $clubA8013; ?>
        <br>
        <br>
        <input type="text" name="A8013" value="<?php echo($result->A8013) ;?>" size="3">
        </font></td>
      <td width="5"><font face="Arial, Helvetica, sans-serif"> </font></td>
      <td width="138"><font face="Arial, Helvetica, sans-serif"> 
        <?php	echo $clubA8014; ?>
        <br>
        <br>
        <input type="text" name="A8014" value="<?php echo($result->A8014) ;?>" size="3">
        </font></td>
    </tr>
    <tr align="center"> 
      <td width="10">&nbsp;</td>
      <td width="167"><font face="Arial, Helvetica, sans-serif"> 
        <?php	echo $clubA8016; ?>
        <br>
        <br>
        <input type="text" name="A8015" value="<?php echo($result->A8015) ;?>" size="3">
        </font></td>
      <td width="5">&nbsp;</td>
      <td width="138"><font face="Arial, Helvetica, sans-serif"> 
        <?php	echo $clubA8016; ?>
        <br>
        <br>
        <input type="text" name="A8016" value="<?php echo($result->A8016) ;?>" size="3">
        </font></td>
    </tr>
    <tr align="center"> 
      <td width="10" bgcolor="#00CCFF">&nbsp;</td>
      <td width="167" bgcolor="#00CCFF"><font face="Arial, Helvetica, sans-serif"><b>QUARTS 
        DE FINALE<font size="4" face="Arial, Helvetica, sans-serif"> </font></b></font></td>
      <td width="5" bgcolor="#00CCFF">&nbsp;</td>
      <td width="138" bgcolor="#00CCFF">&nbsp;</td>
    </tr>
    <tr align="center"> 
      <td width="10">1</td>
      <td width="167"><font face="Arial, Helvetica, sans-serif"> 
        <?php	echo $clubA4001; ?>
        <br>
        <br>
        <input type="text" name="A4001" value="<?php echo($result->A4001) ;?>" size="3">
        </font></td>
      <td width="5">&nbsp;</td>
      <td width="138"><font face="Arial, Helvetica, sans-serif"> 
        <?php	echo $clubA4002; ?>
        <br>
        <br>
        <input type="text" name="A4002" value="<?php echo($result->A4002) ;?>" size="3">
        </font></td>
    </tr>
    <tr align="center"> 
      <td width="10">2</td>
      <td width="167"><font face="Arial, Helvetica, sans-serif"> 
        <?php	echo $clubA4003; ?>
        <br>
        <br>
        <input type="text" name="A4003" value="<?php echo($result->A4003) ;?>" size="3">
        </font></td>
      <td width="5">&nbsp;</td>
      <td width="138"><font face="Arial, Helvetica, sans-serif"> 
        <?php	echo $clubA4004; ?>
        <br>
        <br>
        <input type="text" name="A4004" value="<?php echo($result->A4004) ;?>" size="3">
        </font></td>
    </tr>
    <tr align="center"> 
      <td width="10">3</td>
      <td width="167"><font face="Arial, Helvetica, sans-serif"> 
        <?php	echo $clubA4005; ?>
        <br>
        <br>
        <input type="text" name="A4005" value="<?php echo($result->A4005) ;?>" size="3">
        </font></td>
      <td width="5">&nbsp;</td>
      <td width="138"><font face="Arial, Helvetica, sans-serif"> 
        <?php	echo $clubA4006; ?>
        <br>
        <br>
        <input type="text" name="A4006" value="<?php echo($result->A4006) ;?>" size="3">
        </font></td>
    </tr>
    <tr align="center"> 
      <td width="10">4</td>
      <td width="167"><font face="Arial, Helvetica, sans-serif"> 
        <?php	echo $clubA4007; ?>
        <br>
        <br>
        <input type="text" name="A4007" value="<?php echo($result->A4007) ;?>" size="3">
        </font></td>
      <td width="5">&nbsp;</td>
      <td width="138"><font face="Arial, Helvetica, sans-serif"> 
        <?php	echo $clubA4008; ?>
        <br>
        <br>
        <input type="text" name="A4008" value="<?php echo($result->A4008) ;?>" size="3">
        </font></td>
    </tr>
    <tr align="center"> 
      <td width="10" bgcolor="#CCCC00">&nbsp;</td>
      <td width="167" bgcolor="#CCCC00"><font face="Arial, Helvetica, sans-serif"><b>DEMI</b></font></td>
      <td width="5" bgcolor="#CCCC00">&nbsp;</td>
      <td width="138" bgcolor="#CCCC00">&nbsp;</td>
    </tr>
    <tr align="center"> 
      <td width="10"><font face="Arial, Helvetica, sans-serif">1</font></td>
      <td width="167"> <font face="Arial, Helvetica, sans-serif"> 
        <?php	echo $clubA2001; ?>
        <br>
        <br>
        <input type="text" name="A2001" value="<?php echo($result->A2001) ;?>" size="3">
        </font></td>
      <td width="5"><font face="Arial, Helvetica, sans-serif">-</font></td>
      <td width="138"> <font face="Arial, Helvetica, sans-serif"> 
        <?php	echo $clubA2002; ?>
        <br>
        <br>
        <input type="text" name="A2002" value="<?php echo($result->A2002) ;?>" size="3">
        </font></td>
    </tr>
    <tr align="center"> 
      <td width="10"><font face="Arial, Helvetica, sans-serif">2</font></td>
      <td width="167"> <font face="Arial, Helvetica, sans-serif"> 
        <?php	echo $clubA2003; ?>
        <br>
        <br>
        <input type="text" name="A2003" value="<?php echo($result->A2003) ;?>" size="3">
        </font></td>
      <td width="5"><font face="Arial, Helvetica, sans-serif">-</font></td>
      <td width="138"> <font face="Arial, Helvetica, sans-serif"> 
        <?php	echo $clubA2004; ?>
        <br>
        <br>
        <input type="text" name="A2004" value="<?php echo($result->A2004) ;?>" size="3">
        </font></td>
    </tr>
    <tr align="center" valign="top"> 
      <td colspan="4" bgcolor="#FF9900"><font face="Arial, Helvetica, sans-serif"><b>FINALE</b></font></td>
    </tr>
    <tr align="center" valign="top"> 
      <td valign="middle">1</td>
      <td><font face="Arial, Helvetica, sans-serif"> 
        <?php	echo $clubA1001; ?>
        <br>
        <br>
        <input type="text" name="A1001" value="<?php echo($result->A1001) ;?>" size="3">
        </font></td>
      <td>&nbsp;</td>
      <td><font face="Arial, Helvetica, sans-serif"> 
        <?php	echo $clubA1002; ?>
        <br>
        <br>
        <input type="text" name="A1002" value="<?php echo($result->A1002) ;?>" size="3">
        </font></td>
    </tr>
    <tr align="center" valign="top"> 
      <td colspan="4" bgcolor="#FF9900"> 
        <input type="submit" value="modifier" name="submit">
      </td>
    </tr>
    <tr align="center" valign="top"> 
      <td colspan="4"></td>
    </tr>
  </table>
</form>



