
  <?php
  //mettre les equipes déjà qualifiées en fédérale 3 pour la saison suivante à True
  if ($annee == 2023 and $division == 170) {
      $qualif3201 = true;//castelnau magnoac
      $qualif3203 = false;
      $qualif3205 = false;
      $qualif3207 = true;// la reole
      $qualif3209 = false;
      $qualif3211 = true;//NSL rugby
      $qualif3213 = false;
      $qualif3215 = true;//vierzon
      $qualif3217 = true;//saint herblain
      $qualif3219 = true;//concarbeau
      $qualif3221 = true;//mont saint aignan
      $qualif3223 = true;//chevreuse
      $qualif3225 = true;//vitry sur seine
      $qualif3227 = true;//saint andre les vergers
      $qualif3229 = false;
      $qualif3231 = true;// Bethune
      $qualif3233 = true;//arcangues
      $qualif3235 = false;
      $qualif3237 = false;
      $qualif3239 = true;//tarascon
      $qualif3241 = false;
      $qualif3243 = true;//trebes
      $qualif3245 = false;
      $qualif3247 = false;
      $qualif3249 = true;//Stade phoceen
      $qualif3251 = true;//guiherand grange (crussol)
      $qualif3253 = false;
      $qualif3255 = false;
      $qualif3257 = false;
      $qualif3259 = true;//montceau les mines
      $qualif3261 = true;//viriat
      $qualif3263 = false;
 
    //16me de finale
      for ($i = 1601; $i < 1633; $i++) {
          ${"qualif" . ($i)} = false; }

      for ($i = 3201, $j= 1601 ; $i < 3265, $j < 1633 ; $i=$i+2, $j++ ) 
      {
        if (${"qualif".($i)} == true and ${"A".($i)} > ${"A".($i+1)})
              ${"qualif" .($j)} = true;
      } 

    //8me de finale
      for ($i = 8001; $i < 8017; $i++) {
          ${"qualif" . ($i)} = false; }

      for($i=1601, $j=8001; $i<1634, $j<8017; $i=$i+2, $j++)
        {
            if (${"qualif" . $i} == true and ${"A" . $i} > ${"A" . ($i + 1)})
                ${"qualif".$j} = true;
            if (${"qualif".($i+1)} == true AND ${"A" . $i} < ${"A" . ($i + 1)})
                ${"qualif".$j} = true;
        }

   //Quarts de finale
      for ($i = 4001; $i < 4009; $i++) {
          ${"qualif" . ($i)} = false; }

      for($i=8001, $j=4001; $i<8017, $j<4009; $i=$i+2, $j++)
        {
            if (${"qualif" . $i} == true and ${"A" . $i} > ${"A" . ($i + 1)})
                ${"qualif".$j} = true;
            if (${"qualif".($i+1)} == true AND ${"A" . $i} < ${"A" . ($i + 1)})
                ${"qualif".$j} = true;
        }

    //Demi finale
    for ($i = 2001; $i < 2005; $i++) {
          ${"qualif" . ($i)} = false; }

    for($i=4001, $j=2001; $i<4009, $j<2005; $i=$i+2, $j++)
        {
            if (${"qualif" . $i} == true and ${"A" . $i} > ${"A" . ($i + 1)})
                ${"qualif".$j} = true;
            if (${"qualif".($i+1)} == true AND ${"A" . $i} < ${"A" . ($i + 1)})
                ${"qualif".$j} = true;
        }

    // Finale

    for ($i = 1001; $i < 1003; $i++) {
          ${"qualif" . ($i)} = false; }

    for($i=2001, $j=1001; $i<2005, $j<1003; $i=$i+2, $j++)
        {
            if (${"qualif" . $i} == true and ${"A" . $i} > ${"A" . ($i + 1)})
                ${"qualif".$j} = true;
            if (${"qualif".($i+1)} == true AND ${"A" . $i} < ${"A" . ($i + 1)})
                ${"qualif".$j} = true;
        }    
  }
  else{
      for ($i = 201; $i < 264; $i =$i+2)
      { ${"qualif3".$i}=false; }
      /*
      $qualif3201 = false;
      $qualif3203 = false;
      $qualif3205 = false;
      $qualif3207 = false;
      $qualif3209 = false;
      $qualif3211 = false;
      $qualif3213 = false;
      $qualif3215 = false;
      $qualif3217 = false;
      $qualif3219 = false;
      $qualif3221 = false;
      $qualif3223 = false;
      $qualif3225 = false;
      $qualif3227 = false;
      $qualif3229 = false;
      $qualif3231 = false;
      $qualif3233 = false;
      $qualif3235 = false;
      $qualif3237 = false;
      $qualif3239 = false;
      $qualif3241 = false;
      $qualif3243 = false;
      $qualif3245 = false;
      $qualif3247 = false;
      $qualif3249 = false;
      $qualif3251 = false;
      $qualif3253 = false;
      $qualif3255 = false;
      $qualif3257 = false;
      $qualif3259 = false;
      $qualif3261 = false;
      $qualif3263 = false;
      */

  }
   ?>
  