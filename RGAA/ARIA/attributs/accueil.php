<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN">
<html lang="fr">


<head>
<meta charset="utf-8" />
<link rel="stylesheet" href="/RGAA/styleCss.css"> 
</head>



<body>
    <header>
        <h1>Accueil Balises ARIA :  </h1>
        <?php require '../../onglets.php'; ?>
    </header>
    <main role="main" id="main" tabindex="-1">
1/ balises

    <ul>
<li> <li class="nav-item"><a href="aria-label.php" class="nav-link">aria-label</a></li>
<li> <li class="nav-item"><a href="aria-labelledby.php" class="nav-link">aria-labelledby</a></li>
<li> <li class="nav-item"><a href="aria-describe.php" class="nav-link">aria-describe</a></li>

 </ul>

2/ role



        <h2>1 - Définition</h2>
    <!-- 
        <p> aria-label, aria-labelledby permettent de donner un nom accessible à un élément ,  est destiné à être utilisé sur des éléments interactifs</p>

        <p>L'attribut <b>aria-label</b> doit etre utilisé pour fournir une alternative textuelle à un
            élément qui n'a pas de texte visible à l'écran. </p>

        <p>
            les bonnes pratiques demandent que si l'interface est telle qu'il n'est pas possible d'avoir une étiquette
            textuelle visible à l'écran, il est préférable d'utiliser aria-label plutôt que aria-labelledby.

            Lorsque les deux attributs aria-labelledby et aria-label sont utilisés, les agents utilisateurs donnent la
            priorité (et donc sera le seul contenu restitué) à aria-labelledby lors du calcul de la propriété de nom
            accessible.

            Quant à lui, aria-describedby va rajouter au nom accessible de l'élément, une description accessible, plus
            longue ou plus complète, logiquement, que le nom accessible.
        </p>
    -->
        <h2>2 - Exemples</h2>

        <h3>2-1  Sans complément d'information</span></h3>
        <button type="button">test RGAA</button>
        <p aria-hidden="true"> Sortie pour un lecteur d'écran : Bouton "test html"</p>

        <h3>2-2 Attribut aria-label : fournir de l'information supplémentaire</h3>
        <button  type="button" aria-label="lecture des éléments présents dans la balise aria-label">test RGAA</button>
        <p aria-hidden="true"> Sortie pour un lecteur d'écran : "lecture des éléments présents dans la balise aria-label"</p>

        <h3>2-3 Attribut aria-label et aria-labelledby : cohabitation des 2 attributs</h3>
        <h5 id="titre">Code de la page HTML</h5>
        <div><button type="button" aria-label="accéder non pris compte" aria-labelledby="titre">test RGAA</buttton></div>
        <div><p aria-hidden="true"> Sortie pour un lecteur d'écran : Bouton "Code de la page HTML"</p></div>

        <h3>2-4 Attribut aria-describedby</h3>
        <div><p id="titre">Code de la page de formulaire de connexion</p> </div>
        <div> <button type="button"  aria-describedby="blabla bla titre">test RGAA</buttton></div>
        <div><p aria-hidden="true"> Sortie pour un lecteur d'écran : Bouton "Accéder au code HTML code de la page de formulaire de connexion"</p></div>

        <h3>2-5 Attribut aria-describedby et aria-label</h3>
        <p id="titre">Code de la page de formulaire de connexion</p>
        <div> <button type="button" id="code" aria-describedby="titre">test RGAA</buttton></div>
        <div><p aria-hidden="true"> Sortie pour un lecteur d'écran : Bouton "accéder au code HTML code de la page de formulaire de connexion" </p></div>

        




        <!--
   <div> <bouton> envoyer </bouton>
   // nom accessible : envoyer</div>
  
  <div><bouton aria-label = " envoyer un email " > envoyer </bouton> 
   // nom accessible : envoyer un email</div>   
  -->
        <!--
        <h3>Fieldset</h3>
        <form>
            <fieldset>
                <legend>Vos coordonnées</legend>

                <input type="text" id="name" name="name" autocomplete="family-name">
                <label for="name">Nom</label>

                <input type="email" id="email" name="email" autocomplete="email">
                <label for="email">Email</label>
            </fieldset>
        </form>


        <h3>Lier correctement un champ à son étiquette</h3>

        <form>

            <label for="city">Ville</label>
            <input type="text" id="city" name="ville_personne">

        </form>


        <h3>Mention obligatoire</h3>
        <form>
        -->
        <!-- mention obligatoire dans chaque étiquette -->
        <!-- 
          
            <label for="name">Nom (obligatoire)</label>
            <input type="text" id="name" name="name" required>
        </form>

        <form>
        -->
        <!-- indication qui est explicitée en début de formulaire 
            <p>Les champs signalés par l'indication (*) sont obligatoires</p>
            <label for="name">Nom (*)</label>
            <input type="text" id="name" name="name" required>
        </form>
        <h3>Aide à la saisie</h3>
        <form>
        -->
        <!-- Indication dans l'étiquette -->
        <!--
            <label for="name">E-mail (format attendu : john@example.org)</label>
            <input type="text" id="name" name="name">
          -->
        <!-- Indication dans la description du champ -->

        <!--
            <label for="name">E-mail</label>
            <input type="text" id="name" name="name" aria-describedby="format-email">
            <p id="format-email">format attendu : john@example.org</p>
        </form>

      
        <h3>Erreur de saisie</h3>
        <label for="name">E-mail (format attendu : john@example.org)</label>
        <input type="text" id="name" name="name" aria-invalid="true" aria-labelledby="erreur-email">
        <p id="erreur-email">Le format attendu n'est pas correct.</p>
    -->
        <div><a href="../accueil.php">revenir à la page d'accueil</a> </div>
        <p>Lecteur d'é;cran : "visitez lien revenir à la page d'accueil" </p>

    </main>
</body>
<footer role="contentinfo">
<?php require '../piedPage.php'; ?>
</footer>

</html>