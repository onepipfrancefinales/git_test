<?php
//***********************************************************************/
// phpfed3NEeague : gestionnaire de championnat                              */
// ============================================                         */
//                                                                      */
// Version : 0.82                                                       */
// Copyright (c) 2004    Alexis MANGIN                                  */
// http://phpfed3NEeague.univert.org                                         */
//                                                                      */
// This program is free software. You can redistribute it and/or modify */
// it under the terms of the GNU General Public License as published by */
// the Free Software Foundation; either version 2 of the License.       */
//                                                                      */
//***********************************************************************/
// Support technique : http://phpfed3NEeague.univert.org/forum               */
//                                                                      */
//***********************************************************************/
?>
<html>
<head>
<meta http-equiv="Content-Language" content="fr">
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta name="GENERATOR" content="Microsoft FrontPage 4.0">
<meta name="ProgId" content="FrontPage.Editor.Document">
<title>phpfed3NEeague - Administration</title>
<link rel="stylesheet" type="text/css" href="style.css">

</head>

<body topmargin="0" leftmargin="0" class="phpfed3NE">

<?php
$championnat = $_GET['champ'];
echo "championnat -> champ : ".$championnat;
require ("../config.php") ;
require ("fonctions.php");
ouverture ();
?>

<div align="center">
  <center>
  <!--
  <table cellspacing="0" width="100%" height="100%" cellpadding="0">
    <tr>
      <td colspan="1" align="center" height="100"  bgcolor="#C0C0C0"></td>
        <td colspan="1" background="haut.gif" valign="middle" align="center" style="border-bottom-style: dashed;border-bottom-width : 1px; border-color:#3b487f"><font class="phpfed3NE">Comité 
          F�d�rale 3 - Excellence B</font></td>
      <td bgcolor="#C0C0C0" style="border-bottom-style: dashed;border-bottom-width : 1px; border-color:#3b487f"></td>
    </tr>
    <tr>
      <td class="phpfed3NE3" width="12%" valign="top" style="border-right-style: dashed;border-right-width : 1px; border-color:#3b487f">
      <a href="?page=championnat"><?php // echo LEAGUE; ?></a><br /><br />
      
     
    -->  
     
      
      <a href="logout.php"><?php // echo "Logout"; ?></a><br />
      </td>
      <td valign="top" colspan="2"><div align="center">

     <?php
     if (isset($_COOKIE['user'])) {$user_pseudo=$_COOKIE['user'];} else {$user_pseudo='';}
     if (isset($_COOKIE['mot_de_passe'])) {$user_mdp=$_COOKIE['mot_de_passe'];} else {$user_mdp='';}
     if (isset($_GET['identification'])) {$identification=$_GET['identification'];} else {$identification='';}
     if (isset($_POST['action'])) {$action=$_POST['action'];} else {$action='';}
     if (isset($_GET['action'])) {$action=$_GET['action'];} else {$action='';}
     if (isset($_REQUEST['actionc'])) {$actionc=$_REQUEST['actionc'];} else {$actionc='';}
     if (isset($_REQUEST['go'])) {$go=$_REQUEST['go'];} else {$go='';}
     if (isset($_REQUEST['ga'])) {$ga=$_REQUEST['ga'];} else {$ga='';}
     if (isset($_REQUEST['id'])) {$id=$_REQUEST['id'];} else {$id='';}
     if (isset($_GET['page'])) {$page=$_GET['page'];} else {$page='';}


     if (isset($_GET['page'])){$page=$_GET['page'];}
     else {$page="accueil";}


     if (VerifSession ($user_pseudo,$user_mdp, $idconnect)=="1")
                {
       if ($page=="championnat") {include ("championnat5.php");}
       elseif ($page=="mini_classement") {include ("mini_classement.php");}
       elseif ($page=="membres") {include ("membres.php");}
        elseif ($page=="accueil") {include ("accueil.htm");}
       else {include ("accueil.htm");}
                }
     //  elseif ($identification == "non") {echo "Veuillez renseigner tous les champs !";}
     //  elseif ($identification == "non2") {echo "Identifiants erron�s !";}
     //  else {echo "<br /><br /><br /><br />";include ("menu.non-identifie.htm");}
      else
    		 {
    			if ($page=="championnat") {include ("championnat5.php");}
    			elseif ($page=="mini_classement") {include ("mini_classement.php");}
    			elseif ($page=="membres") {include ("membres.php");}
    			elseif ($page=="accueil") {include ("accueil.htm");}
    			else {include ("accueil.htm");}
              }
     ?>
<!--     
	 </div></td>
      <td  width="1%" style="border-left-style: dashed;border-left-width : 1px; border-color:#3b487f">&nbsp;</td>
    </tr>
    <tr>
    <td bgcolor="C0C0C0"></td>
      <td width="100%" colspan="2" height="10" style="border-top-style: dashed;border-top-width : 1px; border-color:#3b487f">&nbsp;</td>
      <td></td>
    </tr>
    <tr>
      <td class="phpfed3NE" height="10" colspan="1"><img border="0" src="bouton.gif" width="111" height="25">
        </td>
     
    </tr>
  </table>
  -->
  </center>
</div>
<?php 


////echo "championnat :".$championnat;echo "<br>";
//echo substr($championnat,2,1);echo "<br>";


if  (substr($championnat,2,1)== 1)
$poule = substr($championnat,-1);
else
$poule= substr($championnat,-1)+8;

//echo "<br>";

//echo "poule : ".$poule;
?>

            

<meta http-equiv="refresh" content="0;URL=../../../smart/171.php?comite=fed3NE&bddComite=fed3NE&champ=991161&comite2=fed3GS&poule=<?php echo $poule;?>">
                   
</body>

</html>
