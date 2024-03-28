<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN">
<html lang="fr">


<head>
<meta charset="utf-8" />    
<title>Attribut ARIA : aria-labelledby</title>
<link rel="stylesheet" href="/RGAA/styleCss.css"> 
</head>

<body>
    <header>
    <?php require '../../onglets.php'; ?>
    </header>
    <main>
    <div class="main">
    <div class="menu">
    <?php require 'nav_attributs.php'; ?>
               
            </div>
            <div class="contenu">
<h1>aria-labelledby</h1>

<h2>Définition</h2>
La propriété aria-labelledby permet aux auteurs de référencer d'autres éléments sur la page pour définir un nom accessible.
     Ceci est utile lors de l'utilisation d'éléments qui ne disposent pas d'un support natif pour associer des éléments afin de fournir 
     un nom accessible.

<h2>Exemples</h2>

<span
  role="checkbox"
  aria-checked="false"
  tabindex="0"
  aria-labelledby="tac"></span>
<span id="tac">J'accepte les conditions.</span>
</div></div>
   
    </main>
  
</body>
<footer>
    <?php require '../../piedPage.php'; ?>
</footer>

</html>