<?php

echo ("entrée (menu.inc.php)");echo "<br>";

if (isset($_COOKIE['user'])) {$user_pseudo=$_COOKIE['user'];} else {$user_pseudo='';}
if (isset($_COOKIE['mot_de_passe'])) {$user_mdp=$_COOKIE['mot_de_passe'];} else {$user_mdp='';}

echo ("test1 (menu.inc.php)");echo "<br>";
VerifSession ($user_pseudo,$user_mdp, $idconnect);

if (VerifSession ($user_pseudo,$user_mdp, $idconnect)=="1")
                {
                  echo ("test_OK"); echo "<br>";
                  /*
                $result=$idconnect->query("	SELECT pseudo, id_prono 
											FROM phpab_membres 
											WHERE pseudo = '$user_pseudo'");
                
                $row = mysqli_fetch_array($result);
                $user_pseudo=$row[0];
                $user_id=$row[1];
                */
                $connecte="oui";
              
                
                include ("menu.identifie.htm");
                 echo ("test_OK2"); echo "<br>";
                }
else
 { 
  echo ("test_KO");
  
   include ("menu.non-identifie.htm");
   $connecte="non";
   
 }
   
?>
