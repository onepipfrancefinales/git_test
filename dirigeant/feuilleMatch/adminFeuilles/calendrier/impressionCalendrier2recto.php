<html>
<head>
<title>Untitled Document</title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
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
</head>
<?php $equipe = $_GET['equipe'];?>
<?php $connect = $_GET['connect'];?>
<?php $nomLigue = $_GET['nomLigue'];?>
<?php $comite = $_GET['comite'];?>
<?php //$nomDivision = $_GET['nomDivision'];
 $nom1 = $_GET['sigle'];
 $sigle = $_GET['sigle'];

echo $equipe;
echo $connect;
echo $nomLigue;
echo $comite;
//echo $nomDivision;
echo $sigle;
echo $nom1;

 echo $equipe;?>
<table width="1065" border="0">
  <tr>
    <td height="368" width="534"> 
      <table width="520" border="0" align="left" height="393">
        <tr> 
          <td height="360" width="260" valign="top"> 
            <div align="center"> 
              <table width="250" border="1" bordercolor="#000000" cellspacing="1">
                <tr> 
                  <td bgcolor="#CCCCCC"> 
                    <div align="center"><b><font size="5">Saisons pr&eacute;c&eacute;dentes</font></b></div>
                  </td>
                </tr>
              </table>
              <p><b><font size="5"> <strong> <font size="6"> </font></strong></font></b></p>
              <br>
              <table width="250" border="1" bordercolor="#000000" cellspacing="1">
                <tr>
                  <td bgcolor="#CCCCCC"> 
                    <div align="center"><b><font size="5">Palmarès</font></b></div>
                  </td>
                </tr>
              </table>
              <p><b><font face="Arial, Helvetica, sans-serif" size="2">Equipe 
                Fanion</font></b><br>
                <font face="Times New Roman, Times, serif" size="3"> <font size="2" face="Arial, Helvetica, sans-serif"> 
                </font></font></p>
              <p><b><font face="Arial, Helvetica, sans-serif" size="2">Equipe 
                II</font></b><br>
                <font size="3" face="Arial, Helvetica, sans-serif"> <font face="Times New Roman, Times, serif"> 
                <font face="Arial, Helvetica, sans-serif" size="2"> <br>
                <br>
                </font></font></font></p>
              
            </div>
          </td>
          <td height="360" width="260" valign="top"> 
            <div align="center"> 
              <table width="250" border="1" bordercolor="#000000" height="357">
                <tr> 
                  <td height="328"> 
                    <p align="center"><strong> 
					<?php echo "Ligue r&eacute;gionale"."<br />".$nomLigue;?>
					
                      </strong></p>
                    <p align="center"><strong> <font size="6"> 
                      <?php echo $sigle;?>
                      </font></strong> </p>
                    <p align="center"><strong><font size="6"> 
                      <?php 
					  $logo = substr ($equipe, -5);
{print("<img src=\"/images/blasons200_200/$logo.gif\" >");}
?>
                      </font></strong></p>
                    </td>
                </tr>
              </table>
            </div>
          </td>
        </tr>
      </table>
    </td>
    <td height="368" width="634"> 
      <table width="520" border="0" align="left" height="393">
        <tr> 
          <td height="370" width="260" valign="top"> 
            <div align="center"> 
              <table width="250" border="1" bordercolor="#000000" cellspacing="1">
                <tr> 
                  <td bgcolor="#CCCCCC"> 
                    <div align="center"><b><font size="5">Saisons pr&eacute;c&eacute;dentes</font></b></div>
                  </td>
                </tr>
              </table>
              <p><b><font size="5"><br>
                </font></b></p>
              <table width="250" border="1" bordercolor="#000000" cellspacing="1">
                <tr> 
                  <td bgcolor="#CCCCCC"> 
                    <div align="center"><b><font size="5">Palmarès</font></b></div>
                  </td>
                </tr>
              </table>
              <p><b><font face="Arial, Helvetica, sans-serif" size="2">Equipe 
                Fanion</font></b><br>
                <font face="Times New Roman, Times, serif" size="3"> <font size="2" face="Arial, Helvetica, sans-serif"> 
                </font><font face="Times New Roman, Times, serif" size="3"><font size="2" face="Arial, Helvetica, sans-serif"> 
                </font><font face="Times New Roman, Times, serif" size="3"><font size="2" face="Arial, Helvetica, sans-serif"> 
                </font></font></font></font></p>
              <p><b><font face="Arial, Helvetica, sans-serif" size="2">Equipe 
                II</font></b><br>
                <font size="3" face="Arial, Helvetica, sans-serif"> <font face="Times New Roman, Times, serif"> 
                <font face="Arial, Helvetica, sans-serif" size="2"> <br>
                <br>
                </font></font></font></p>
              
            </div>
          </td>
          <td height="370" width="260" valign="top"> 
            <div align="center"> 
              <table width="250" border="1" bordercolor="#000000" height="357">
                <tr> 
                  <td height="328"> 
                    <p align="center"><strong> 
                      <?php echo "Ligue r&eacute;gionale"."<br />".$nomLigue;?>
                      </strong>
                    <p align="center"><strong> <font size="6"> 
                      <?php echo $sigle;?>
                      </font></strong> </p>
                    <p align="center"><strong><font size="6"> 
                      <?php 
					  $logo = substr ($equipe, -5);
{print("<img src=\"/images/blasons200_200/$logo.gif\" >");}
?>
                      </font></strong></p>
                    </td>
                </tr>
              </table>
            </div>
          </td>
        </tr>
      </table>
    </td>
  </tr>
  <tr>
    <td width="534" height="370"> 
      <table width="520" border="0" align="left" height="393">
        <tr> 
          <td height="375" width="260" valign="top"> 
            <div align="center"> 
              <table width="250" border="1" bordercolor="#000000" cellspacing="1">
                <tr> 
                  <td bgcolor="#CCCCCC"> 
                    <div align="center"><b><font size="5">Saisons pr&eacute;c&eacute;dentes</font></b></div>
                  </td>
                </tr>
              </table>
              <p><b><font size="5"> </font><br>
                </b></p>
              <table width="250" border="1" bordercolor="#000000" cellspacing="1">
                <tr> 
                  <td bgcolor="#CCCCCC"> 
                    <div align="center"><b><font size="5">Palmarès</font></b></div>
                  </td>
                </tr>
              </table>
              <p><b><font face="Arial, Helvetica, sans-serif" size="2">Equipe 
                Fanion</font></b><br>
                <font face="Times New Roman, Times, serif" size="3"> <font size="2" face="Arial, Helvetica, sans-serif"> 
                </font></font></p>
              <p><b><font face="Arial, Helvetica, sans-serif" size="2">Equipe 
                II</font></b><br>
                <font size="3" face="Arial, Helvetica, sans-serif"> <font face="Times New Roman, Times, serif"> 
                <font face="Arial, Helvetica, sans-serif" size="2"> <br>
                <br>
                </font></font></font></p>
              
            </div>
          </td>
          <td height="375" width="260" valign="top"> 
            <div align="center"> 
              <table width="250" border="1" bordercolor="#000000" height="357">
                <tr> 
                  <td height="328"> 
                    <p align="center"><strong> 
                      <?php echo "Ligue r&eacute;gionale"."<br />".$nomLigue;?>
                      </strong></p>
                    <p align="center"><strong> <font size="6"> 
                      <?php echo $sigle;?>
                      </font></strong> </p>
                    <p align="center"><strong><font size="6"> 
                      <?php 
					  $logo = substr ($equipe, -5);
{print("<img src=\"/images/blasons200_200/$logo.gif\" >");}
?>
                      </font></strong></p>
                    <p align="center"><strong> <font size="6"> 
                      
                      </font></strong></p>
                  </td>
                </tr>
              </table>
            </div>
          </td>
        </tr>
      </table>
      <font color="#FFFFFF">ll44l</font> </td>
    <td width="634" height="370"> 
      <table width="520" border="0" align="left" height="393">
        <tr> 
          <td height="388" width="260" valign="top"> 
            <div align="center"> 
              <table width="250" border="1" bordercolor="#000000" cellspacing="1">
                <tr> 
                  <td bgcolor="#CCCCCC"> 
                    <div align="center"><b><font size="5">Saisons pr&eacute;c&eacute;dentes</font></b></div>
                  </td>
                </tr>
              </table>
              <p><b><font size="5"> <br>
                </font></b></p>
              <table width="250" border="1" bordercolor="#000000" cellspacing="1">
                <tr> 
                  <td bgcolor="#CCCCCC"> 
                    <div align="center"><b><font size="5">Palmarès</font></b></div>
                  </td>
                </tr>
              </table>
              <p><b><font face="Arial, Helvetica, sans-serif" size="2">Equipe 
                Fanion</font></b><br>
                <font face="Times New Roman, Times, serif" size="3"> <font size="2" face="Arial, Helvetica, sans-serif"> 
                </font></font></p>
              <p><b><font face="Arial, Helvetica, sans-serif" size="2">Equipe 
                II</font></b><br>
                <font size="3" face="Arial, Helvetica, sans-serif"> <font face="Times New Roman, Times, serif"> 
                <font face="Arial, Helvetica, sans-serif" size="2"> <br>
                <br>
                </font></font></font></p>
              
            </div>
          </td>
          <td height="388" width="260" valign="top"> 
            <div align="center"> 
              <table width="250" border="1" bordercolor="#000000" height="357">
                <tr> 
                  <td height="328">
<p align="center"><strong>
                      <?php echo "Ligue r&eacute;gionale"."<br />".$nomLigue;?>
                      </strong></p>
                    <p align="center"><strong> <font size="6"> 
                      <?php echo $sigle;?>
                      </font></strong> </p>
                    <p align="center"><strong><font size="6"> 
                      <?php 
					  $logo = substr ($equipe, -5);
{print("<img src=\"/images/blasons200_200/$logo.gif\" >");}
?>
                      </font></strong></p>
                    </td>
                </tr>
              </table>
            </div>
          </td>
        </tr>
      </table>
    </td>
  </tr>
</table>
<p>&nbsp;</p>
<p><br>
  <br>
  <br>
</p>
</html>