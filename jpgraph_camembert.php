<?php
require_once("include_path_inc.php");

require_once("jpgraph.php");
require_once("jpgraph_pie.php");

$donnees = array(2,1);

$largeur = 200;
$hauteur = 200;

// Initialisation du graphique
$graphe = new PieGraph($largeur, $hauteur);

// Creation du camembert
$camembert = new PiePlot($donnees);
// Ajout du camembert au graphique
$graphe->add($camembert);

// Ajout du titre du graphique
$graphe->title->set("Résultats à domicile");

// Affichage du graphique
$graphe->stroke();
?>