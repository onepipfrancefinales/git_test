<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN">
<html lang="fr">


<head>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="/RGAA/styleCss.css">
</head>



<body>
    <header>
        <h1>Accueil Balises ARIA : </h1>
        <?php require '../../onglets.php'; ?>
    </header>
    <main role="main" id="main" tabindex="-1">

        <h2> Définition ARIA </h2>
        <p>

            AAAccessible Rich Internet Applications (ARIA) (qu'on pourrait traduire par « applications internet riches et accessibles »)
            est un ensemble de rôles (en-US) et d'attributs d'attributs qui définissent comment rendre le contenu et
            les applications web accessibles (notamment ceux développés avec JavaScript) pour les personnes avec des handicaps.

            ARIA complète HTML afin que les éléments interactifs et les widgets puissent être utilisés par
            les outils d'assistance quand les fonctionnalités standard ne le permettent pas. Ainsi,
            ARIA permet de rendre accessible les widgets JavaScript, les indications dans les formulaires,
            les messages d'erreur et les mises à jour dynamiques du contenu, etc.

        </p>
        <br>


        <div class="center">
            <div class=container1>
                <div class="block1"><a href="aria-label.php" class="nav-link"> Attributs </a></div>
            </div>
            <div class=container2>
                <div class="block2">      les roles  </div>
            </div>
            <div class=container3>
                <div class="block3">zones</div>
            </div>
            <div class=container4>
                <div class="block4">autre 2</div>
            </div>
        </div>

        <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br>
        <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br>
        <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br>

        <h2> Les attributs </h2>

        <ul>
            <li>
            <li class="nav-item"><a href="aria-label.php" class="nav-link">aria-label</a></li>
            <li>
            <li class="nav-item"><a href="aria-labelledby.php" class="nav-link">aria-labelledby</a></li>
            <li>
            <li class="nav-item"><a href="aria-describe.php" class="nav-link">aria-describe</a></li>
            <li>
            <li class="nav-item"><a href="aria-expanded.php" class="nav-link">aria-expanded</a></li>
            <li>
            <li class="nav-item"><a href="aria-hidden.php" class="nav-link">aria-hidden</a></li>
            <li>
            <li class="nav-item"><a href="aria-required.php" class="nav-link">aria-required</a></li>
            <li>
            <li class="nav-item"><a href="aria-modal.php" class="nav-link">aria-modal</a></li>
            <li>
            <li class="nav-item"><a href="aria-autocomplete.php" class="nav-link">aria-autocomplete</a></li>


        </ul>

        <h2> 2/ Les roles </h2>


        banner (document <header>)
            complementary (<aside>)
                contentinfo (document <footer>)
                    form (<form>)
                        main (<main>)
                            navigation (<nav>)
                                region (<section>)
                                    search (<search>)




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

        <h3>1 Sans complément d'information</span></h3>
            <button type="button">test RGAA</button>
            <p aria-hidden="true"> Sortie pour un lecteur d'écran : Bouton "test RGAA"</p>
            <div>
            <div aria-hidden="true">
                <hr>
            </div>
            </div>
            <h3>2 Attribut aria-label : fournir de l'information supplémentaire</h3>
             <button type="button" aria-label="lecture des éléments présents dans la balise aria-label">test RGAA</button>
            <p aria-hidden="true"> Sortie pour un lecteur d'écran : "lecture des éléments présents dans la balise aria-label"</p>
             <div>
                <div aria-hidden="true">
                <hr>
         </div>
             </div>
             <h3>3 Attribut aria-labelledby</h3>
            <div id="titre">Code de la page HTML </div>
            <div>
                <button type="button" aria-label="accéder non pris compte" aria-labelledby="titre">test RGAA</buttton>
            </div>
            <div>
            <p class="surligner" aria-hidden="true"> Sortie pour un lecteur d'écran : Bouton "Code de la page HTML"</p>
            <div aria-hidden="true">
            <hr>
            </div>
            </div>

            <h3>4 Attribut aria-describedby</h3>
             <div>
         <div id="titre2">Code de la page de formulaire de connexion</div>
        </div>
        <div> <button type="button" aria-describedby="titre2">test RGAA</buttton>
        </div>
    <div>
        <p aria-hidden="true"> Sortie pour un lecteur d'écran : Bouton "Accéder au code HTML code de la page de formulaire de connexion"</p>
        </div>
        <div aria-hidden="true">
            <hr>
            </div>


        <h3>5 Attribut aria-describedby</h3>
        <div id="titre3">Code de la page de formulaire de connexion connexion</div>
        <div> <button type="button" aria-describedby="titre3">test RGAA</buttton>
        </div>
        <div>
        <p aria-hidden="true"> Sortie pour un lecteur d'écran : Bouton "accéder au code HTML code de la page de formulaire de connexion" </p>
                                        </div>




                        </main>
</body>
<footer role="contentinfo">

    <?php require '../../piedPage.php'; ?>

</footer>

</html>