<?php
//***********************************************************************/
// phpabeague : gestionnaire de championnat                              */
// ============================================                         */
//                                                                      */
// Version : 0.82                                                       */
// Copyright (c) 2004    Alexis MANGIN                                  */
// http://phpabeague.univert.org                                         */
//                                                                      */
// This program is free software. You can redistribute it and/or modify */
// it under the terms of the GNU General Public License as published by */
// the Free Software Foundation; either version 2 of the License.       */
//                                                                      */
//***********************************************************************/
// Support technique : http://phpabeague.univert.org/forum               */
//                                                                      */
//***********************************************************************/
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">

</head>
<body>
<?php

print ("<SCRIPT type=\"text/javascript\">\n");
print ("<!--\n");
print ("function demander_confirmation()\n");
print ("{\n");
print ("var champ_select = document.getElementById('data');\n");
$message=ADMIN_SECURITE_CLASSE;
print ("var message = \"$message \";\n");
print ("message = message + champ_select.options[champ_select.options.selectedIndex].text + \" ?\"; \n");

// confirm() fait apparaitre la boite de dialogue
print ("if (confirm(message))\n");
print ("{\n");
// action � faire si OK (soumettre le formulaire)
print ("return true;\n");
print ("}\n");
print ("else\n");
print ("{\n");
// action � faire si 'Annuler' (ici, rien)
print ("return false;\n");
print ("}\n");
print ("}\n");

print ("//-->\n");
print ("</SCRIPT>\n");


echo "<font class=phpab>".ADMIN_CLASSE_TITRE."</font><br /><br /><br />";

if (isset($_POST['data'])) {$data=$_POST['data'];} else {$data='';}
if (isset($_POST['rang'])) {$rang=$_POST['rang'];} else {$rang='';}


// SUPPRESSION
switch($go)
{
 	 case "suppclasse" :
 	 {
     
	 $nb_classe=nb_classe($data, $idconnect);
	   if($nb_classe==0)
	  {
    mysql_query ("DELETE FROM phpab_classe WHERE id='$data' ") or die ("probleme " .mysql_error());
    ?>
    <table class=phpab width="80%">
            <tr>
              <td class=phpab2 align="center" colspan="2"><?php echo ADMIN_CLASSE_5; ?></td>
            </tr>
            <tr>
              <td align="center"  colspan="2"><b><?php echo ADMIN_CLUB_SUPP2; ?></b></td></tr></table><br />
              
              <?php
	         }
	         else
	         {
            ?>
            <table class=phpab width="80%">
            <tr>
              <td class=phpab2 align="center" colspan="2"><?php echo ADMIN_CLASSE_5; ?></td>
            </tr>
            <tr>
              <td align="center"  colspan="2"><?php echo ADMIN_CLASSE_3." $nb_classe ".ADMIN_CLASSE_4; ?></td></tr></table><br />
                 <?php
	          }
	 continue;
	 }
	 case "creclasse":
	 {    
	 $data1=addslashes($data);
	 mysql_query ("INSERT INTO phpab_classe (nom) values ('$data1')") or die ("probleme " .mysql_error());
	 
         ?>
    <table class=phpab width="80%">
            <tr>
              <td class=phpab2 align="center" colspan="2"><?php echo ADMIN_CLASSE_5; ?></td>
            </tr>
            <tr>
              <td align="center"  colspan="2"><b><?php echo ADMIN_CLUB_CREA2; ?></b></td></tr></table><br />

              <?php
	 
 	 continue;
	 }
	 default:
	 {}
}

if ($actionc=="1")
  {
    
    reset ($rang);
    reset ($id);
	 while ( list ($cle, $val)= each ($rang) and list ($cle, $val2)= each ($id))
         {
                // $nb_classe2=nb_classe2($idconnect);
                // $x=0;
                //while($x <= $nb_classe2)
               // {
               mysql_query ("UPDATE phpab_classe SET rang='$val' WHERE id='$val2'") or die ("probleme " .mysql_error());
               //$x++;
                }
                ?>
    <table class=phpab width="80%">
            <tr>
              <td class=phpab2 align="center" colspan="2"><?php echo ADMIN_CLASSE_5; ?></td>
            </tr>
            <tr>
              <td align="center" colspan="2"><b><?php echo ADMIN_CLASSE_2; ?></b></td></tr></table><br />

              <?php
               echo "</form>";                 
    }

?>
<table class=phpab width="80%">
            <tr>
              <td class=phpab2 align="center" colspan="2"><?php echo ADMIN_CLASSE_TITRE; ?></td>
            </tr>
            <tr>
              <td align="center"  colspan="2"><b><?php echo ADMIN_RENS_8; ?></b></td></tr>
<?php 
echo "<tr><td class=phpab6><form method=\"post\" action=\"\">";
echo ADMIN_CLASSE_SUPP1." ";
echo "<select name=\"data\">";
echo "<option value=\"0\"> </option>";
$result = mysql_query("SELECT id, nom FROM phpab_classe ORDER BY nom");
while($row = mysql_fetch_array($result)) 
	{$a=$row[1]+1;
	 $classe_nom=stripslashes($row[1]);
	echo (" <option value=\"$row[0]\">$classe_nom");
	echo ("</option>\n");
	}
	echo "</select>";
$button=ADMIN_CLASSE_BUTTON_SUPP;
echo "</td><td align=right><input type=\"submit\" value=\"$button\" onclick=\"return demander_confirmation()\">";

echo "<input type=\"hidden\" name=\"go\" value=\"suppclasse\">
      <input type=\"hidden\" name=\"page\" value=\"fiches_clubs\">
      <input type=\"hidden\" name=\"action\" value=\"classes\">
</form></td></tr>";

echo "<tr><td align=\"center\" colspan=\"2\"><b>".ADMIN_RENS_7."</b></td></tr>";



echo "<tr><td><form method=\"post\" action=\"\">";
echo ADMIN_CLASSE_NOM." ";
echo "<input type=\"text\" name=\"data\" maxlength=255>";

echo "<input type=\"hidden\" name=\"go\" value=\"creclasse\">
      <input type=\"hidden\" name=\"page\" value=\"fiches_clubs\">
      <input type=\"hidden\" name=\"action\" value=\"classes\">";

$button=ADMIN_CLASSE_BUTTON_CREA;
echo "</td><td align=right><input type=\"submit\" value=$button></form></td></tr></table>";




$query = "SELECT id, nom, rang FROM phpab_classe ORDER by rang";
echo "<form method=\"post\" action=\"\">";
$result = mysql_query($query);
             while($row = mysql_fetch_array($result))
             {
$classe_nom=stripslashes($row["nom"]);
echo "<table class=phpab border=\"0\" cellpadding=\"2\" cellspacing=\"0\" valign=\"bottom\" align=\"center\" width=\"80%\"><tr class=phpab3>";
echo "<td class=\"phpab2\" align=\"center\"><input type=\"text\" name=\"rang[]\" value=\"$row[2]\" size=1 maxlength=1><b> $classe_nom</b></td>";
echo "<input type=\"hidden\" name=\"id[]\" value=\"$row[0]\"></tr>";
$query2 = "SELECT id, nom, rang, id_classe FROM phpab_rens WHERE id_classe='$row[0]' ORDER BY rang";
$result2 = mysql_query($query2);
             while($row = mysql_fetch_array($result2))
             {
$rens_nom = stripslashes ($row[1]);
echo "<tr><td align=\"left\">$rens_nom</td></tr>";

             }  
             echo "<br /></table>";
             }
   echo"<br /><input type=\"hidden\" name=\"actionc\" value=\"1\">
           <input type=\"hidden\" name=\"page\" value=\"fiches_clubs\">
           <input type=\"hidden\" name=\"action\" value=\"classes\"><center><input type=\"submit\" value=".ENVOI."><br /><br />";
   echo "</center>";
?>
</body>
</html>
