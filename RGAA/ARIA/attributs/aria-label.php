<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN">
<html lang="fr">


<head>
<meta charset="utf-8" />
<link rel="stylesheet" href="/RGAA/styleCss.css"> 
</head>

<body>
    <header>
    <?php require '../../onglets.php'; ?>
    </header>
    <main>
    <h1>aria-label</h1>


    <h2>Définition</h2>



  <p>  L' aria-labelattribut définit une valeur de chaîne qui étiquette un élément interactif.</p>
   <p>
   Parfois, le nom accessible par défaut d'un élément est manquant ou ne décrit pas avec précision son contenu, et aucun contenu visible dans le DOM ne peut être associé à l'objet pour lui donner une signification. Un exemple courant est un bouton contenant une police SVG ou une icône (que vous ne devriez pas utiliser) sans aucun texte.
Dans les cas où un élément interactif n'a pas de nom accessible, ou un nom accessible qui n'est pas précis, et qu'il n'y a aucun contenu visible dans le DOM pouvant être référencé via l' aria-labelledbyattribut, l' aria-labelattribut peut être utilisé pour définir une chaîne qui étiquette l'élément interactif. élément interactif sur lequel il est posé. 
Cela fournit à l'élément son nom accessible.
   </p>
   
   <h2>Exemples</h2>
    </main>
  
</body>
<footer>
    <?php require '../../piedPage.php'; ?>
</footer>

</html>