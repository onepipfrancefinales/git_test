<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN">
<html lang="fr">


<head>
    <meta charset="utf-8" />
    <title>Référentiel Général d'Amèlioration de Accessililité</title>
    <link rel="stylesheet" href="styleCss.css"> 
</head>

<body>
    <header>


    </header>
    <main>

      
        
        <div>
            <h1>Référentiel Général d'Amèlioration de Accessililité</h1>
        </div>
        <div>
            
            <div>  <?php require 'onglets.php';?></div> 
            <div><a href="PageHtmlCss.php"> page test HtmlCss</a> </div>
        </div>

        <div class="js-page">
  <main class="js-document">
    <button type="button" aria-haspopup="dialog" aria-controls="dialog">Ouvrir ma fenêtre modale</button>
  </main>
  <div id="dialog" role="dialog" aria-labelledby="dialog-title" aria-describedby="dialog-desc" aria-modal="true" aria-hidden="true" tabindex="-1" class="c-dialog">
    <div role="document" class="c-dialog__box">
      <button type="button" aria-label="Fermer" title="Fermer cette fenêtre modale" data-dismiss="dialog">X</button>
      <h2 id="dialog-title">Ma fenêtre modale</h2>
      <p id="dialog-desc">Je suis une fenêtre modale accessible.</p>
      <form action="" method="post">
        <p>
          <label for="email">Email</label><br />
          <input type="email" id="email" />
        </p>
        <p>
          <label for="password">Mot de passe</label><br />
          <input type="password" id="password" />
        </p>
        <p>
          <button type="submit">Valider</button>
        </p>
      </form>
    </div>
  </div>
</div>


    </main>
    
</body>
<footer>
    <?php
require 'piedPage.php'; ?>
</footer>

</html>