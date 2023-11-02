<?php
  // On pourra supposer que les données sont lues
  // dans une base de données mais dans l'immédiat
  // a titre d'exemple elles sont simplement codées "en dur"
  $valeurs = array(12,23,9,58,23,26,57,48,12);

  header("Content-type: image/png");
  
  $largeur = 250;
  $hauteur = 200;
  $img = imageCreate($largeur, $hauteur);
  $rouge         = imageColorAllocate($img, 200, 100, 100);
  $noir          = imageColorAllocate($img,   0,   0,   0);
  $fond          = imageColorAllocate($img, 240, 240, 240);
  $barreCouleur  = imageColorAllocate($img,   0, 255,   0);
  //imagecolortransparent($im,$rouge);
  
  $titre       = "Histogramme";
  $titrePolice = 5;
  imageString($img, $titrePolice,
              ($largeur-ImageFontWidth($titrePolice)*strlen($titre))/2,
              0, $titre, $noir);
  //imageTTFText($im, 15, 90, $largeur-10, $hauteur-10, $noir, "Gigi.ttf",
  //           "Copyright PHP Facile !");

  // Tracé du fond de l'histogramme
  imageFilledRectangle($img, 10, 20, $largeur-25, $hauteur-10, $fond);

  // Connaissant le nombre de barres = sizeOf($valeurs) 
  // et la largeur de l'image (en tenant compte des bords)
  // il est possible de déterminer la largeur d'une barre
  $barreLargeur = (int)(($largeur-35)/(1.5*sizeOf($valeurs)+0.5));

  // Pour ajuster l'échelle (en hauteur) il faut déterminer
  // la plus grande valeur du tableau
  $max = 0;
  for ($i=0; $i<sizeOf($valeurs); $i++) {
    if ($valeurs[$i]>$max) $max = $valeurs[$i];
  }
  
  // Nous avons toutes les informations nécessaire
  // il est alors possible de tracer toutes les barres
  for ($i=0; $i<sizeOf($valeurs); $i++) {
    $x = 10+(int)($barreLargeur*(0.5+$i*1.5));
    $barreHauteur = (int)(($valeurs[$i]*($hauteur-40))/$max);  

    imageFilledRectangle($img, $x, 
                         $hauteur-15-$barreHauteur,
                         $x+$barreLargeur,
                         $hauteur-15,
                         $barreCouleur);
  }
  
  imagePNG($img);
  imageDestroy($img);  
?> 
