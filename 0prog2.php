<?php
function afficherPourcentage ($nb1, $nb2)
{
    $resultat = $nb1/$nb2*100; 
    // "/" est l'opérateur de division en PHP
    // "*" est l'opérateur de multiplication en PHP
    echo $resultat."%";
}
afficherPourcentage (12, 24);
echo "<br />";
afficherPourcentage (7, 70);
?>


<?php
mysql_connect("sql.franceserv.fr", "onepip-france", "lavelan09"); // Connexion à MySQL
mysql_select_db("onepip-france-db4"); // Sélection de la base onepip

?>

<br/>
test 1 function
<?php
function test($a)
{
$cat=$a*2;
echo "je coute $cat";




?>
<br/>
<?php
echo "$cat";
?>
<br/>
<?php
$m=25;
echo "eeeee $m";
?>
<br/>
<?php
if ( $cat==802) 
{
echo"vrai";
}
else
{
echo "faux";
}

	?>
<br/>	
<?php
echo "ettte'$cat'";

}
?>


<?php
test(23);

?>
<br/>
<?php
echo "apres '$cat'";

?>
