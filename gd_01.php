<?php
  // Ce qui suit est le code d'une image PNG
  header("Content-type: image/png");

  // L'image fait 200x100
  $largeur = 200;
  $hauteur = 100;
  $img = imageCreate($largeur, $hauteur);

  // La première couleur de la palette
  // qui constitue la couleur de fond
  // sera le rouge
  $rouge = imageColorAllocate($img, 255, 0, 0);

  // Que l'on peut rendre transparent
  imagecolortransparent($im,$rouge);

  // Envoyons le code de l'image 
  imagePNG($img);

  // Et liberons les ressources
  imageDestroy($img);  
?> 
<body bgcolor="#FFFFFF">