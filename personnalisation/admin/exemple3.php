

<?php
// On d�marre la session (ceci est indispensable dans toutes les pages de notre section membre)
session_start ();

// On r�cup�re nos variables de session
if (isset($_SESSION['login']) && isset($_SESSION['pwd']) && isset($_SESSION['id'])) {

	// On teste pour voir si nos variables ont bien �t� enregistr�es
	echo '<html>';
	echo '<head>';
	echo '<title>Page de notre section membre</title>';
	echo '</head>';

	echo '<body>';?>
<table width="500" border="0" bgcolor="#FFFFFF" align="center">
  <tr> 
    <td class="bienvenue" colspan="3"> 
      <?php echo "Administration du compte".' '. $_SESSION['login']; ?>
    </td>
  </tr>
  <tr> 
    <td class="user"> <a href="../affichage/pagePerso.php">Consulter 
      ma séléction</a> </td>
    <td class="user" width="294"> <a href="pageChoix.php#zone4">Modifier /supprimer</a> 
    </td>
    <td class="user"> 
      <?php
				// On affiche un lien pour fermer notre session
				echo '<a href="./logout.php">Déconnection</a>';
				}
				else {
					echo 'Les variables ne sont pas d�clar�es.';
				}
			?>
    </td>
  </tr>
</table>
