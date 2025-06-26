<html>
<body>
    <table width="100%" border="0" align="center">
      <tr>
        <td colspan="2" align="center">
            <?php include("haut.inc.php3"); ?>  
          </td>
      </tr>
      <tr>
        <td width="22%" align="center" valign="top"  height="70">
          <font face="Verdana" size="2" color="#3b487f"><b>PHPleague</b></font>
        </td>
        <td width="77%" align="center" valign="top">
          <?php include("pronos.inc.htm"); ?>
        </td>
      </tr>
      <tr>
        <td width="22%" rowspan="3" align="center" valign="top">
            <?php include("menu.inc.php3"); ?>
         </td>
         <td align="center" valign="top" height="100%">
          <?php
if (!$t=="1") echo "<font face=\"Verdana\" color=\"#3b487f\" size=\"1\"><b>Veuillez renseigner tous les champs</b></font>";
if ($t=="1") echo "<font face=\"Verdana\" color=\"#3b487f\" size=\"1\"><b>Identifiants erron�s</b></font>";
echo "<br /></td></tr></table>";
include("bas.inc.php3");
?>
</body>
</html>
