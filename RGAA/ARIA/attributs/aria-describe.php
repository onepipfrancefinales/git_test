<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN">
<html lang="fr">


<head>
<meta charset="utf-8" />
<title>Attribut ARIA : aria-describe</title>
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
    <h1>aria-describedby</h1> 
    
    <h2>Définition</h2>
    L'attribut aria-describedby répertorie les ids des éléments qui décrivent l'objet. 
    Il est utilisé pour établir une relation entre des widgets ou des groupes et le texte qui les décrit.

L' aria-describedbyattribut n'est pas limité aux contrôles de formulaire.
 Il peut également être utilisé pour associer du texte statique à des widgets, des groupes d'éléments, des régions comportant un en-tête, des définitions, etc. L' aria-describedbyattribut peut être utilisé avec des éléments HTML sémantiques et avec des éléments dotés d'un ARIA role.

L' aria-describedbyattribut est très similaire à aria-labelledbyl'attribut. 
Tandis que aria-labelledbyrépertorie les ids des étiquettes ou des éléments qui décrivent l'essence d'un objet, aria-describedbyrépertorie les ids des descriptions ou des éléments fournissant plus d'informations dont l'utilisateur pourrait avoir besoin. Les deux aria-labelledbyet aria-describedbyfont référence à d'autres éléments pour calculer une alternative textuelle, mais une étiquette doit être concise, tandis qu'une description est destinée à fournir des informations plus détaillées ; une étiquette décrit l'essence d'un objet, tandis qu'une description fournit plus d'informations dont l'utilisateur pourrait avoir besoin.
  

<h2>Exemples</h2>



</div>
        </div>


    </main>
   
</body>
<footer>
    <?php require '../../piedPage.php'; ?>
</footer>

</html>