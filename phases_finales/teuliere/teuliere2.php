<?php $annee=$_GET['variable_1'];?>
   
<?php
if ($annee>0)
{
$clubA3201= ' Flandres 1';
$clubA3202= ' Alsace Lorraine 2 ';

$clubA3203= ' Bourgogne 1';
$clubA3204= ' Ile-de-France 3 ';

$clubA3205= ' Alsace Lorraine 2 ';
$clubA3206= '  Vainqueur BG 4 contre IDF 6';

$clubA3207= ' Auvergne 2 ';
$clubA3208= ' Alpes 2';

$clubA3209= ' Alpes 1 ';
$clubA3210= ' Bourgogne 3 ';

$clubA3211= ' Ile-de-France 1 ';
$clubA3212= ' Centre 2';

$clubA3213= ' Bourgogne 2 ';
$clubA3214= ' Vainqueur AU 3 contre LY 3';

$clubA3215= ' Flandres 2';
$clubA3216= ' Ile de France 4 ';

$clubA3217= ' Normandie 1';
$clubA3218= ' Flandres 3 ';

$clubA3219= ' Ile de France 2 ';
$clubA3220= ' Pays de Loire 2';

$clubA3221= ' Normandie 2 ';
$clubA3222= ' Ile de France 5';

$clubA3223= ' Poitou Charente 1';
$clubA3224= ' Bretagne 2';

$clubA3225= ' Bretagne 1';
$clubA3226= ' Normandie 3 ';

$clubA3227= ' Pays de Loire 1';
$clubA3228= ' Poitou Charente 2';

$clubA3229= ' Centre 1 ';
$clubA3230= ' Bretagne 3 ';

$clubA3231= ' Auvergne 1 ';
$clubA3232= ' Vainqueur PCH 3 contre PA 4';

$clubA3233= ' Limousin 1';
$clubA3234= ' Midi-Pyr�n�es 6 ';

$clubA3235= ' C�te d Argent 1 ';
$clubA3236= ' C�te Basque Landes 2';

$clubA3237= ' Midi-Pyr�n�es 4 ';
$clubA3238= ' P�rigord Agenais 2 ';

$clubA3239= ' Armagnac Bigorre 2 ';
$clubA3240= ' Limousin 2';

$clubA3241= ' C�te d Argent 2';
$clubA3242= ' Midi-Pyr�n�es 5 ';

$clubA3243= ' C�te Basque Landes 1';
$clubA3244= ' P�rigord Agenais 3';

$clubA3245= ' Armagnac Bigorre 1 ';
$clubA3246= ' Midi-Pyr�n�es 3';

$clubA3247= ' P�rigord Agenais 1 ';
$clubA3248= ' Limousin 3 ';

$clubA3249= ' Bearn 1';
$clubA3250= ' Vainqueur CBL 3 contre MPY 7';

$clubA3251= ' Languedoc 1';
$clubA3252= ' Provence 2';

$clubA3253= ' Midi-Pyr�n�es 1 ';
$clubA3254= ' Languedoc 3 ';

$clubA3255= ' Drome Ardeche 1';
$clubA3256= ' Lyonnais 2';

$clubA3257= ' Midi-Pyr�n�es 2 ';
$clubA3258= ' Poitou Charente 1 '; 

$clubA3259= ' Provence 1 ';
$clubA3260= ' Vainqueur CAZ 2 contre LD 4';

$clubA3261= ' Lyonnais 1';
$clubA3262= ' Languedoc 2';

$clubA3263= ' C�te d Azur 1 ';
$clubA3264= ' Vainqueur DA 2 contre AP 3'; 
}

else
{
}
?>

<body bgcolor="#FFFFFF">
<div id="Layer2" style="position:absolute; width:1600px; height:20px; z-index:4; left: 1px; top: 900px; background-color: #FFCC66; layer-background-color: #FFCC66; border: 1px none #000000"> 
  <p align="center"><a href="http://francefinalesrugby.franceserv.com/divisions/page1serie.php"></a> 
    <?php
    // On inclut le haut de la page
   include("bas.php");
    ?>
  </p>
</div>
<div id="Layer5" style="position:absolute; width:350px; height:20px; z-index:7; left: 20px; top: 240px; background-image: url(../unique32.jpg); layer-background-image: url(../unique32.jpg); border: 1px none #000000"> 
  <div align="center"> 
    <div id="Layer6" style="position:absolute; width:350px; height:20px; z-index:8; left: 0px; top: 20px; background-image: url(../unique32.jpg); layer-background-image: url(../unique32.jpg); border: 1px none #000000"><font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="2"><b> 
      </b></font> <font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="2"><b> 
      <?php echo $clubA3203;
  ?>
      - 
      <?php echo $clubA3204;
  ?>
      </b></font> 
      <div id="Layer7" style="position:absolute; width:55px; height:20px; z-index:8; background-image: url(../resultdouble.jpg); layer-background-image: url(../resultdouble.jpg); border: 1px none #000000; left: 350px; top: 0px"> 
        <div align="center"><font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="3"><b> 
          - </b></font></div>
      </div>
      
    </div>
    <font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="2"><b> 
    <?php echo $clubA3201;
  ?>
    - 
    <?php echo $clubA3202;
  ?>
    </b></font> 
    <div id="Layer7" style="position:absolute; width:55px; height:20px; z-index:8; background-image: url(../resultdouble.jpg); layer-background-image: url(../resultdouble.jpg); border: 1px none #000000; left: 350px; top: 0px"> 
      <div align="center"><font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="3"><b> 
        - </b></font></div>
    </div>
    
  </div>
</div>
<div id="Layer5" style="position:absolute; width:350px; height:20px; z-index:7; left: 20px; top: 280px; background-image: url(../unique32.jpg); layer-background-image: url(../unique32.jpg); border: 1px none #000000"> 
  <div align="center"> 
    <div id="Layer6" style="position:absolute; width:350px; height:20px; z-index:8; left: 0px; top: 20px; background-image: url(../unique32.jpg); layer-background-image: url(../unique32.jpg); border: 1px none #000000"><font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="2"><b> 
      </b></font> <font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="2"><b> 
      <?php echo $clubA3207;
  ?>
      - 
      <?php echo $clubA3208;
  ?>
      </b></font> 
      <div id="Layer7" style="position:absolute; width:55px; height:20px; z-index:8; background-image: url(../resultdouble.jpg); layer-background-image: url(../resultdouble.jpg); border: 1px none #000000; left: 350px; top: 0px"> 
        <div align="center"><font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="3"><b> 
          - </b></font></div>
      </div>
      
    </div>
    <font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="2"><b> 
    <?php echo $clubA3205;
  ?>
    - 
    <?php echo $clubA3206;
  ?>
    </b></font> 
    <div id="Layer7" style="position:absolute; width:55px; height:20px; z-index:8; background-image: url(../resultdouble.jpg); layer-background-image: url(../resultdouble.jpg); border: 1px none #000000; left: 350px; top: 0px"> 
      <div align="center"><font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="3"><b> 
        - </b></font></div>
    </div>
    
  </div>
</div>
<div id="Layer5" style="position:absolute; width:350px; height:20px; z-index:7; left: 20px; top: 320px; background-image: url(../unique32B.jpg); layer-background-image: url(../unique32B.jpg); border: 1px none #000000"> 
  <div align="center"> 
    <div id="Layer6" style="position:absolute; width:350px; height:20px; z-index:8; left: 0px; top: 20px; background-image: url(../unique32B.jpg); layer-background-image: url(../unique32B.jpg); border: 1px none #000000"><font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="2"><b> 
      </b></font> <font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="2"><b> 
      <?php echo $clubA3211;
  ?>
      - 
      <?php echo $clubA3212;
  ?>
      </b></font> 
      <div id="Layer7" style="position:absolute; width:55px; height:20px; z-index:8; background-image: url(../resultdoubleB.jpg); layer-background-image: url(../resultdoubleB.jpg); border: 1px none #000000; left: 350px; top: 0px"> 
        <div align="center"><font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="3"><b> 
          - </b></font></div>
      </div>
      
    </div>
    <font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="2"><b> 
    <?php echo $clubA3209;
  ?>
    - 
    <?php echo $clubA3210;
  ?>
    </b></font> 
    <div id="Layer7" style="position:absolute; width:55px; height:20px; z-index:8; background-image: url(../resultdoubleB.jpg); layer-background-image: url(../resultdoubleB.jpg); border: 1px none #000000; left: 350px; top: 0px"> 
      <div align="center"><font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="3"><b> 
        - </b></font></div>
    </div>
    
  </div>
</div>
<div id="Layer5" style="position:absolute; width:350px; height:20px; z-index:7; left: 20px; top: 360px; background-image: url(../unique32B.jpg); layer-background-image: url(../unique32B.jpg); border: 1px none #000000"> 
  <div align="center"> 
    <div id="Layer6" style="position:absolute; width:350px; height:20px; z-index:8; left: 0px; top: 20px; background-image: url(../unique32B.jpg); layer-background-image: url(../unique32B.jpg); border: 1px none #000000"><font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="2"><b> 
      </b></font> <font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="2"><b> 
      <?php echo $clubA3215;
  ?>
      - 
      <?php echo $clubA3216;
  ?>
      </b></font> 
      <div id="Layer7" style="position:absolute; width:55px; height:20px; z-index:8; background-image: url(../resultdoubleB.jpg); layer-background-image: url(../resultdoubleB.jpg); border: 1px none #000000; left: 350px; top: 0px"> 
        <div align="center"><font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="3"><b> 
          - </b></font></div>
      </div>
      
    </div>
    <font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="2"><b> 
    <?php echo $clubA3213;
  ?>
    - 
    <?php echo $clubA3214;
  ?>
    </b></font> 
    <div id="Layer7" style="position:absolute; width:55px; height:20px; z-index:8; background-image: url(../resultdoubleB.jpg); layer-background-image: url(../resultdoubleB.jpg); border: 1px none #000000; left: 350px; top: 0px"> 
      <div align="center"><font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="3"><b> 
        - </b></font></div>
    </div>
    
  </div>
</div>
<div id="Layer5" style="position:absolute; width:350px; height:20px; z-index:7; left: 20px; top: 400px; background-image: url(../unique32.jpg); layer-background-image: url(../unique32.jpg); border: 1px none #000000"> 
  <div align="center"> 
    <div id="Layer6" style="position:absolute; width:350px; height:20px; z-index:8; left: 0px; top: 20px; background-image: url(../unique32.jpg); layer-background-image: url(../unique32.jpg); border: 1px none #000000"><font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="2"><b> 
      </b></font> <font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="2"><b> 
      <?php echo $clubA3219;
  ?>
      - 
      <?php echo $clubA3220;
  ?>
      </b></font> 
      <div id="Layer7" style="position:absolute; width:55px; height:20px; z-index:8; background-image: url(../resultdouble.jpg); layer-background-image: url(../resultdouble.jpg); border: 1px none #000000; left: 350px; top: 0px"> 
        <div align="center"><font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="3"><b> 
          - </b></font></div>
      </div>
      
    </div>
    <font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="2"><b> 
    <?php echo $clubA3217;
  ?>
    - 
    <?php echo $clubA3218;
  ?>
    </b></font> 
    <div id="Layer7" style="position:absolute; width:55px; height:20px; z-index:8; background-image: url(../resultdouble.jpg); layer-background-image: url(../resultdouble.jpg); border: 1px none #000000; left: 350px; top: 0px"> 
      <div align="center"><font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="3"><b> 
        - </b></font></div>
    </div>
    
  </div>
</div>
<div id="Layer5" style="position:absolute; width:350px; height:20px; z-index:7; left: 20px; top: 440px; background-image: url(../unique32.jpg); layer-background-image: url(../unique32.jpg); border: 1px none #000000"> 
  <div align="center"> 
    <div id="Layer6" style="position:absolute; width:350px; height:20px; z-index:8; left: 0px; top: 20px; background-image: url(../unique32.jpg); layer-background-image: url(../unique32.jpg); border: 1px none #000000"><font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="2"><b> 
      </b></font> <font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="2"><b> 
      <?php echo $clubA3223;
  ?>
      - 
      <?php echo $clubA3224;
  ?>
      </b></font> 
      <div id="Layer7" style="position:absolute; width:55px; height:20px; z-index:8; background-image: url(../resultdouble.jpg); layer-background-image: url(../resultdouble.jpg); border: 1px none #000000; left: 350px; top: 0px"> 
        <div align="center"><font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="3"><b> 
          - </b></font></div>
      </div>
      
    </div>
    <font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="2"><b> 
    <?php echo $clubA3221;
  ?>
    - 
    <?php echo $clubA3222;
  ?>
    </b></font> 
    <div id="Layer7" style="position:absolute; width:55px; height:20px; z-index:8; background-image: url(../resultdouble.jpg); layer-background-image: url(../resultdouble.jpg); border: 1px none #000000; left: 350px; top: 0px"> 
      <div align="center"><font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="3"><b> 
        - </b></font></div>
    </div>
    
  </div>
</div>
<div id="Layer5" style="position:absolute; width:350px; height:20px; z-index:7; left: 20px; top: 480px; background-image: url(../unique32B.jpg); layer-background-image: url(../unique32B.jpg); border: 1px none #000000"> 
  <div align="center"> 
    <div id="Layer6" style="position:absolute; width:350px; height:20px; z-index:8; left: 0px; top: 20px; background-image: url(../unique32B.jpg); layer-background-image: url(../unique32B.jpg); border: 1px none #000000"><font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="2"><b> 
      </b></font> <font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="2"><b> 
      <?php echo $clubA3227;
  ?>
      - 
      <?php echo $clubA3228;
  ?>
      </b></font> 
      <div id="Layer7" style="position:absolute; width:55px; height:20px; z-index:8; background-image: url(../resultdoubleB.jpg); layer-background-image: url(../resultdoubleB.jpg); border: 1px none #000000; left: 350px; top: 0px"> 
        <div align="center"><font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="3"><b> 
          - </b></font></div>
      </div>
      
    </div>
    <font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="2"><b> 
    <?php echo $clubA3225;
  ?>
    - 
    <?php echo $clubA3226;
  ?>
    </b></font> 
    <div id="Layer7" style="position:absolute; width:55px; height:20px; z-index:8; background-image: url(../resultdoubleB.jpg); layer-background-image: url(../resultdoubleB.jpg); border: 1px none #000000; left: 350px; top: 0px"> 
      <div align="center"><font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="3"><b> 
        - </b></font></div>
    </div>
    
  </div>
</div>
<div id="Layer5" style="position:absolute; width:350px; height:20px; z-index:7; left: 20px; top: 520px; background-image: url(../unique32B.jpg); layer-background-image: url(../unique32B.jpg); border: 1px none #000000"> 
  <div align="center"> 
    <div id="Layer6" style="position:absolute; width:350px; height:20px; z-index:8; left: 0px; top: 20px; background-image: url(../unique32B.jpg); layer-background-image: url(../unique32B.jpg); border: 1px none #000000"><font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="2"><b> 
      </b></font> <font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="2"><b> 
      <?php echo $clubA3231;
  ?>
      - 
      <?php echo $clubA3232;
  ?>
      </b></font> 
      <div id="Layer7" style="position:absolute; width:55px; height:20px; z-index:8; background-image: url(../resultdoubleB.jpg); layer-background-image: url(../resultdoubleB.jpg); border: 1px none #000000; left: 350px; top: 0px"> 
        <div align="center"><font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="3"><b> 
          - </b></font></div>
      </div>
      
    </div>
    <font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="2"><b> 
    <?php echo $clubA3229;
  ?>
    - 
    <?php echo $clubA3230;
  ?>
    </b></font> 
    <div id="Layer7" style="position:absolute; width:55px; height:20px; z-index:8; background-image: url(../resultdoubleB.jpg); layer-background-image: url(../resultdoubleB.jpg); border: 1px none #000000; left: 350px; top: 0px"> 
      <div align="center"><font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="3"><b> 
        - </b></font></div>
    </div>
    
  </div>
</div>
<div id="Layer5" style="position:absolute; width:350px; height:20px; z-index:7; left: 20px; top: 560px; background-image: url(../unique32.jpg); layer-background-image: url(../unique32.jpg); border: 1px none #000000"> 
  <div align="center"> 
    <div id="Layer6" style="position:absolute; width:350px; height:20px; z-index:8; left: 0px; top: 20px; background-image: url(../unique32.jpg); layer-background-image: url(../unique32.jpg); border: 1px none #000000"><font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="2"><b> 
      </b></font> <font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="2"><b> 
      <?php echo $clubA3235;
  ?>
      - 
      <?php echo $clubA3236;
  ?>
      </b></font> 
      <div id="Layer7" style="position:absolute; width:55px; height:20px; z-index:8; background-image: url(../resultdouble.jpg); layer-background-image: url(../resultdouble.jpg); border: 1px none #000000; left: 350px; top: 0px"> 
        <div align="center"><font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="3"><b> 
          - </b></font></div>
      </div>
      
    </div>
    <font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="2"><b> 
    <?php echo $clubA3233;
  ?>
    - 
    <?php echo $clubA3234;
  ?>
    </b></font> 
    <div id="Layer7" style="position:absolute; width:55px; height:20px; z-index:8; background-image: url(../resultdouble.jpg); layer-background-image: url(../resultdouble.jpg); border: 1px none #000000; left: 350px; top: 0px"> 
      <div align="center"><font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="3"><b> 
        - </b></font></div>
    </div>
    
  </div>
</div>
<div id="Layer5" style="position:absolute; width:350px; height:20px; z-index:7; left: 20px; top: 600px; background-image: url(../unique32.jpg); layer-background-image: url(../unique32.jpg); border: 1px none #000000"> 
  <div align="center"> 
    <div id="Layer6" style="position:absolute; width:350px; height:20px; z-index:8; left: 0px; top: 20px; background-image: url(../unique32.jpg); layer-background-image: url(../unique32.jpg); border: 1px none #000000"><font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="2"><b> 
      </b></font> <font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="2"><b> 
      <?php echo $clubA3239;
  ?>
      - 
      <?php echo $clubA3240;
  ?>
      </b></font> 
      <div id="Layer7" style="position:absolute; width:55px; height:20px; z-index:8; background-image: url(../resultdouble.jpg); layer-background-image: url(../resultdouble.jpg); border: 1px none #000000; left: 350px; top: 0px"> 
        <div align="center"><font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="3"><b> 
          - </b></font></div>
      </div>
      
    </div>
    <font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="2"><b> 
    <?php echo $clubA3237;
  ?>
    - 
    <?php echo $clubA3238;
  ?>
    </b></font> 
    <div id="Layer7" style="position:absolute; width:55px; height:20px; z-index:8; background-image: url(../resultdouble.jpg); layer-background-image: url(../resultdouble.jpg); border: 1px none #000000; left: 350px; top: 0px"> 
      <div align="center"><font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="3"><b> 
        - </b></font></div>
    </div>
    
  </div>
</div>
<div id="Layer5" style="position:absolute; width:350px; height:20px; z-index:7; left: 20px; top: 640px; background-image: url(../unique32B.jpg); layer-background-image: url(../unique32B.jpg); border: 1px none #000000"> 
  <div align="center"> 
    <div id="Layer6" style="position:absolute; width:350px; height:20px; z-index:8; left: 0px; top: 20px; background-image: url(../unique32B.jpg); layer-background-image: url(../unique32B.jpg); border: 1px none #000000"><font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="2"><b> 
      </b></font> <font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="2"><b> 
      <?php echo $clubA3243;
  ?>
      - 
      <?php echo $clubA3244;
  ?>
      </b></font> 
      <div id="Layer7" style="position:absolute; width:55px; height:20px; z-index:8; background-image: url(../resultdoubleB.jpg); layer-background-image: url(../resultdoubleB.jpg); border: 1px none #000000; left: 350px; top: 0px"> 
        <div align="center"><font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="3"><b> 
          - </b></font></div>
      </div>
      
    </div>
    <font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="2"><b> 
    <?php echo $clubA3241;
  ?>
    - 
    <?php echo $clubA3242;
  ?>
    </b></font> 
    <div id="Layer7" style="position:absolute; width:55px; height:20px; z-index:8; background-image: url(../resultdoubleB.jpg); layer-background-image: url(../resultdoubleB.jpg); border: 1px none #000000; left: 350px; top: 0px"> 
      <div align="center"><font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="3"><b> 
        - </b></font></div>
    </div>
    
  </div>
</div>
<div id="Layer5" style="position:absolute; width:350px; height:20px; z-index:7; left: 20px; top: 680px; background-image: url(../unique32B.jpg); layer-background-image: url(../unique32B.jpg); border: 1px none #000000"> 
  <div align="center"> 
    <div id="Layer6" style="position:absolute; width:350px; height:20px; z-index:8; left: 0px; top: 20px; background-image: url(../unique32B.jpg); layer-background-image: url(../unique32B.jpg); border: 1px none #000000"><font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="2"><b> 
      </b></font> <font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="2"><b> 
      <?php echo $clubA3247;
  ?>
      - 
      <?php echo $clubA3248;
  ?>
      </b></font> 
      <div id="Layer7" style="position:absolute; width:55px; height:20px; z-index:8; background-image: url(../resultdoubleB.jpg); layer-background-image: url(../resultdoubleB.jpg); border: 1px none #000000; left: 350px; top: 0px"> 
        <div align="center"><font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="3"><b> 
          - </b></font></div>
      </div>
      
    </div>
    <font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="2"><b> 
    <?php echo $clubA3245;
  ?>
    - 
    <?php echo $clubA3246;
  ?>
    </b></font> 
    <div id="Layer7" style="position:absolute; width:55px; height:20px; z-index:8; background-image: url(../resultdoubleB.jpg); layer-background-image: url(../resultdoubleB.jpg); border: 1px none #000000; left: 350px; top: 0px"> 
      <div align="center"><font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="3"><b> 
        - </b></font></div>
    </div>
    
  </div>
</div>
<div id="Layer5" style="position:absolute; width:350px; height:20px; z-index:7; left: 20px; top: 720px; background-image: url(../unique32.jpg); layer-background-image: url(../unique32.jpg); border: 1px none #000000"> 
  <div align="center"> 
    <div id="Layer6" style="position:absolute; width:350px; height:20px; z-index:8; left: 0px; top: 20px; background-image: url(../unique32.jpg); layer-background-image: url(../unique32.jpg); border: 1px none #000000"><font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="2"><b> 
      </b></font> <font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="2"><b> 
      <?php echo $clubA3251;
  ?>
      - 
      <?php echo $clubA3252;
  ?>
      </b></font> 
      <div id="Layer7" style="position:absolute; width:55px; height:20px; z-index:8; background-image: url(../resultdouble.jpg); layer-background-image: url(../resultdouble.jpg); border: 1px none #000000; left: 350px; top: 0px"> 
        <div align="center"><font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="3"><b> 
          - </b></font></div>
      </div>
      
    </div>
    <font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="2"><b> 
    <?php echo $clubA3249;
  ?>
    - 
    <?php echo $clubA3250;
  ?>
    </b></font> 
    <div id="Layer7" style="position:absolute; width:55px; height:20px; z-index:8; background-image: url(../resultdouble.jpg); layer-background-image: url(../resultdouble.jpg); border: 1px none #000000; left: 350px; top: 0px"> 
      <div align="center"><font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="3"><b> 
        - </b></font></div>
    </div>
    
  </div>
</div>
<div id="Layer5" style="position:absolute; width:350px; height:20px; z-index:7; left: 20px; top: 760px; background-image: url(../unique32.jpg); layer-background-image: url(../unique32.jpg); border: 1px none #000000"> 
  <div align="center"> 
    <div id="Layer6" style="position:absolute; width:350px; height:20px; z-index:8; left: 0px; top: 20px; background-image: url(../unique32.jpg); layer-background-image: url(../unique32.jpg); border: 1px none #000000"><font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="2"><b> 
      </b></font> <font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="2"><b> 
      <?php echo $clubA3255;
  ?>
      - 
      <?php echo $clubA3256;
  ?>
      </b></font> 
      <div id="Layer7" style="position:absolute; width:55px; height:20px; z-index:8; background-image: url(../resultdouble.jpg); layer-background-image: url(../resultdouble.jpg); border: 1px none #000000; left: 350px; top: 0px"> 
        <div align="center"><font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="3"><b> 
          - </b></font></div>
      </div>
      
    </div>
    <font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="2"><b> 
    <?php echo $clubA3253;
  ?>
    - 
    <?php echo $clubA3254;
  ?>
    </b></font> 
    <div id="Layer7" style="position:absolute; width:55px; height:20px; z-index:8; background-image: url(../resultdouble.jpg); layer-background-image: url(../resultdouble.jpg); border: 1px none #000000; left: 350px; top: 0px"> 
      <div align="center"><font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="3"><b> 
        </b></font></div>
    </div>
    
  </div>
</div>
<div id="Layer5" style="position:absolute; width:350px; height:20px; z-index:7; left: 20px; top: 800px; background-image: url(../unique32B.jpg); layer-background-image: url(../unique32B.jpg); border: 1px none #000000"> 
  <div align="center"> 
    <div id="Layer6" style="position:absolute; width:350px; height:20px; z-index:8; left: 0px; top: 20px; background-image: url(../unique32B.jpg); layer-background-image: url(../unique32B.jpg); border: 1px none #000000"><font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="2"><b> 
      </b></font> <font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="2"><b> 
      <?php echo $clubA3259;
  ?>
      - 
      <?php echo $clubA3260;
  ?>
      </b></font> 
      <div id="Layer7" style="position:absolute; width:55px; height:20px; z-index:8; background-image: url(../resultdoubleB.jpg); layer-background-image: url(../resultdoubleB.jpg); border: 1px none #000000; left: 350px; top: 0px"> 
        <div align="center"><font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="3"><b> 
          - </b></font></div>
      </div>
      
    </div>
    <font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="2"><b> 
    <?php echo $clubA3257;
  ?>
    - 
    <?php echo $clubA3258;
  ?>
    </b></font> 
    <div id="Layer7" style="position:absolute; width:55px; height:20px; z-index:8; background-image: url(../resultdoubleB.jpg); layer-background-image: url(../resultdoubleB.jpg); border: 1px none #000000; left: 350px; top: 0px"> 
      <div align="center"><font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="3"><b> 
        - </b></font></div>
    </div>
    
  </div>
</div>
<div id="Layer5" style="position:absolute; width:350px; height:20px; z-index:7; left: 19px; top: 842px; background-image: url(../unique32B.jpg); layer-background-image: url(../unique32B.jpg); border: 1px none #000000"> 
  <div align="center"> 
    <div id="Layer6" style="position:absolute; width:350px; height:20px; z-index:8; left: 0px; top: 20px; background-image: url(../unique32B.jpg); layer-background-image: url(../unique32B.jpg); border: 1px none #000000"><font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="2"><b> 
      </b></font> <font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="2"><b> 
      <?php echo $clubA3263;
  ?>
      - 
      <?php echo $clubA3264;
  ?>
      </b></font> 
      <div id="Layer7" style="position:absolute; width:55px; height:20px; z-index:8; background-image: url(../resultdoubleB.jpg); layer-background-image: url(../resultdoubleB.jpg); border: 1px none #000000; left: 350px; top: 0px"> 
        <div align="center"><font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="3"><b> 
          - </b></font></div>
      </div>
      
    </div>
    <font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="2"><b> 
    <?php echo $clubA3261;
  ?>
    - 
    <?php echo $clubA3262;
  ?>
    </b></font> 
    <div id="Layer7" style="position:absolute; width:55px; height:20px; z-index:8; background-image: url(../resultdoubleB.jpg); layer-background-image: url(../resultdoubleB.jpg); border: 1px none #000000; left: 350px; top: 0px"> 
      <div align="center"><font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="3"><b> 
        - </b></font></div>
    </div>
    
  </div>
</div>
<div id="Layer1" style="position:absolute; width:200px; height:20px; z-index:3; left: 460px; top: 240px; background-image:  url(../unique3.jpg); layer-background-image:  url(../unique3.jpg); border: 1px none #000000"> 
  <div align="center"> 
    <div id="Layer10" style="position:absolute; width:30px; height:20px; z-index:3; left: 200px; top: 21px; background-image:  url(../result2.jpg); layer-background-image:  url(../result2.jpg); border: 1px none #000000"> 
      <div align="center"><font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="3"><b> 
        </b></font></div>
    </div>
    <div id="Layer9" style="position:absolute; width:200px; height:20px; z-index:2; left: 0px; top: 20px; background-image:  url(../unique3.jpg); layer-background-image:  url(../unique3.jpg); border: 1px none #000000"> 
      <div align="center"><font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="2"><b> 
        </b></font></div>
    </div>
    <div id="Layer10" style="position:absolute; width:30px; height:20px; z-index:3; left: 200px; top: 1px; background-image:  url(../result2.jpg); layer-background-image:  url(../result2.jpg); border: 1px none #000000"> 
      <div align="center"><font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="3"><b> 
        </b></font></div>
    </div>
    <font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="2"><b> 
    </b></font></div>
</div>
<div id="Layer1" style="position:absolute; width:200px; height:20px; z-index:3; left: 460px; top: 280px; background-image:  url(../unique3.jpg); layer-background-image:  url(../unique3.jpg); border: 1px none #000000"> 
  <div align="center"> 
    <div id="Layer10" style="position:absolute; width:30px; height:20px; z-index:3; left: 200px; top: 21px; background-image:  url(../result2.jpg); layer-background-image:  url(../result2.jpg); border: 1px none #000000"> 
      <div align="center"><font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="3"><b> 
        </b></font></div>
    </div>
    <div id="Layer9" style="position:absolute; width:200px; height:20px; z-index:2; left: 0px; top: 20px; background-image:  url(../unique3.jpg); layer-background-image:  url(../unique3.jpg); border: 1px none #000000"> 
      <div align="center"><font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="2"><b> 
        </b></font></div>
    </div>
    <div id="Layer10" style="position:absolute; width:30px; height:20px; z-index:3; left: 202px; top: 1px; background-image:  url(../result2.jpg); layer-background-image:  url(../result2.jpg); border: 1px none #000000"> 
      <div align="center"><font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="3"><b> 
        </b></font></div>
    </div>
    <font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="2"><b> 
    </b></font></div>
</div>
<div id="Layer1" style="position:absolute; width:200px; height:20px; z-index:3; left: 460px; top: 320px; background-image:  url(../unique4.jpg); layer-background-image:  url(../unique4.jpg); border: 1px none #000000"> 
  <div align="center"> 
    <div id="Layer10" style="position:absolute; width:30px; height:20px; z-index:3; left: 200px; top: 21px; background-image:  url(../result22.jpg); layer-background-image:  url(../result22.jpg); border: 1px none #000000"> 
      <div align="center"><font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="3"><b> 
        </b></font></div>
    </div>
    <div id="Layer9" style="position:absolute; width:200px; height:20px; z-index:2; left: 0px; top: 20px; background-image:  url(../unique4.jpg); layer-background-image:  url(../unique4.jpg); border: 1px none #000000"> 
      <div align="center"><font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="2"><b> 
        </b></font></div>
    </div>
    <div id="Layer10" style="position:absolute; width:30px; height:20px; z-index:3; left: 200px; top: 1px; background-image:  url(../result22.jpg); layer-background-image:  url(../result22.jpg); border: 1px none #000000"> 
      <div align="center"><font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="3"><b> 
        </b></font></div>
    </div>
    <font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="2"><b> 
    </b></font></div>
</div>
<div id="Layer1" style="position:absolute; width:200px; height:20px; z-index:3; left: 460px; top: 360px; background-image:  url(../unique4.jpg); layer-background-image:  url(../unique4.jpg); border: 1px none #000000"> 
  <div align="center"> 
    <div id="Layer10" style="position:absolute; width:30px; height:20px; z-index:3; left: 200px; top: 21px; background-image:  url(../result22.jpg); layer-background-image:  url(../result22.jpg); border: 1px none #000000"> 
      <div align="center"><font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="3"><b> 
        </b></font></div>
    </div>
    <div id="Layer9" style="position:absolute; width:200px; height:20px; z-index:2; left: 0px; top: 20px; background-image:  url(../unique4.jpg); layer-background-image:  url(../unique4.jpg); border: 1px none #000000"> 
      <div align="center"><font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="2"><b> 
        </b></font></div>
    </div>
    <div id="Layer10" style="position:absolute; width:30px; height:20px; z-index:3; left: 200px; top: 1px; background-image:  url(../result22.jpg); layer-background-image:  url(../result22.jpg); border: 1px none #000000"> 
      <div align="center"><font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="3"><b> 
        </b></font></div>
    </div>
    <font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="2"><b> 
    </b></font></div>
</div>
<div id="Layer1" style="position:absolute; width:200px; height:20px; z-index:3; left: 459px; top: 400px; background-image:  url(../unique3.jpg); layer-background-image:  url(../unique3.jpg); border: 1px none #000000"> 
  <div align="center"> 
    <div id="Layer10" style="position:absolute; width:30px; height:20px; z-index:3; left: 200px; top: 21px; background-image:  url(../result2.jpg); layer-background-image:  url(../result2.jpg); border: 1px none #000000"> 
      <div align="center"><font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="3"><b> 
        </b></font></div>
    </div>
    <div id="Layer9" style="position:absolute; width:200px; height:20px; z-index:2; left: 0px; top: 20px; background-image:  url(../unique3.jpg); layer-background-image:  url(../unique3.jpg); border: 1px none #000000"> 
      <div align="center"><font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="2"><b> 
        </b></font></div>
    </div>
    <div id="Layer10" style="position:absolute; width:30px; height:20px; z-index:3; left: 200px; top: 1px; background-image:  url(../result2.jpg); layer-background-image:  url(../result2.jpg); border: 1px none #000000"> 
      <div align="center"><font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="3"><b> 
        </b></font></div>
    </div>
    <font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="2"><b> 
    </b></font></div>
</div>
<div id="Layer1" style="position:absolute; width:200px; height:20px; z-index:3; left: 460px; top: 440px; background-image:  url(../unique3.jpg); layer-background-image:  url(../unique3.jpg); border: 1px none #000000"> 
  <div align="center"> 
    <div id="Layer10" style="position:absolute; width:30px; height:20px; z-index:3; left: 200px; top: 21px; background-image:  url(../result2.jpg); layer-background-image:  url(../result2.jpg); border: 1px none #000000"> 
      <div align="center"><font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="3"><b> 
        </b></font></div>
    </div>
    <div id="Layer9" style="position:absolute; width:200px; height:20px; z-index:2; left: 0px; top: 20px; background-image:  url(../unique3.jpg); layer-background-image:  url(../unique3.jpg); border: 1px none #000000"> 
      <div align="center"><font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="2"><b> 
        </b></font></div>
    </div>
    <div id="Layer10" style="position:absolute; width:30px; height:20px; z-index:3; left: 200px; top: 1px; background-image:  url(../result2.jpg); layer-background-image:  url(../result2.jpg); border: 1px none #000000"> 
      <div align="center"><font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="3"><b> 
        </b></font></div>
    </div>
    <font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="2"><b> 
    </b></font></div>
</div>
<div id="Layer1" style="position:absolute; width:200px; height:20px; z-index:3; left: 460px; top: 480px; background-image:  url(../unique4.jpg); layer-background-image:  url(../unique4.jpg); border: 1px none #000000"> 
  <div align="center"> 
    <div id="Layer10" style="position:absolute; width:30px; height:20px; z-index:3; left: 200px; top: 21px; background-image:  url(../result22.jpg); layer-background-image:  url(../result22.jpg); border: 1px none #000000"> 
      <div align="center"><font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="3"><b> 
        </b></font></div>
    </div>
    <div id="Layer9" style="position:absolute; width:200px; height:20px; z-index:2; left: 0px; top: 20px; background-image:  url(../unique4.jpg); layer-background-image:  url(../unique4.jpg); border: 1px none #000000"> 
      <div align="center"><font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="2"><b> 
        </b></font></div>
    </div>
    <div id="Layer10" style="position:absolute; width:30px; height:20px; z-index:3; left: 200px; top: 1px; background-image:  url(../result22.jpg); layer-background-image:  url(../result22.jpg); border: 1px none #000000"> 
      <div align="center"><font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="3"><b> 
        </b></font></div>
    </div>
    <font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="2"><b> 
    </b></font></div>
</div>
<div id="Layer1" style="position:absolute; width:200px; height:20px; z-index:3; left: 460px; top: 520px; background-image:  url(../unique4.jpg); layer-background-image:  url(../unique4.jpg); border: 1px none #000000"> 
  <div align="center"> 
    <div id="Layer10" style="position:absolute; width:30px; height:20px; z-index:3; left: 200px; top: 21px; background-image:  url(../result22.jpg); layer-background-image:  url(../result22.jpg); border: 1px none #000000"> 
      <div align="center"><font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="3"><b> 
        </b></font></div>
    </div>
    <div id="Layer9" style="position:absolute; width:200px; height:20px; z-index:2; left: 0px; top: 20px; background-image:  url(../unique4.jpg); layer-background-image:  url(../unique4.jpg); border: 1px none #000000"> 
      <div align="center"> <font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="2"><b> 
        </b></font></div>
    </div>
    <div id="Layer10" style="position:absolute; width:30px; height:20px; z-index:3; left: 200px; top: 1px; background-image:  url(../result22.jpg); layer-background-image:  url(../result22.jpg); border: 1px none #000000"> 
      <div align="center"><font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="3"><b> 
        </b></font></div>
    </div>
    <font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="2"><b> 
    </b></font></div>
</div>
<div id="Layer1" style="position:absolute; width:200px; height:20px; z-index:3; left: 460px; top: 560px; background-image:  url(../unique3.jpg); layer-background-image:  url(../unique3.jpg); border: 1px none #000000"> 
  <div align="center"> 
    <div id="Layer10" style="position:absolute; width:30px; height:20px; z-index:3; left: 200px; top: 21px; background-image:  url(../result2.jpg); layer-background-image:  url(../result2.jpg); border: 1px none #000000"> 
      <div align="center"><font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="3"><b> 
        </b></font></div>
    </div>
    <div id="Layer9" style="position:absolute; width:200px; height:20px; z-index:2; left: 0px; top: 20px; background-image:  url(../unique3.jpg); layer-background-image:  url(../unique3.jpg); border: 1px none #000000"> 
      <div align="center"><font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="2"><b> 
        </b></font></div>
    </div>
    <div id="Layer10" style="position:absolute; width:30px; height:20px; z-index:3; left: 200px; top: 1px; background-image:  url(../result2.jpg); layer-background-image:  url(../result2.jpg); border: 1px none #000000"> 
      <div align="center"><font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="3"><b> 
        </b></font></div>
    </div>
    <font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="2"><b> 
    </b></font></div>
</div>
<div id="Layer1" style="position:absolute; width:200px; height:20px; z-index:3; left: 459px; top: 600px; background-image:  url(../unique3.jpg); layer-background-image:  url(../unique3.jpg); border: 1px none #000000"> 
  <div align="center"> 
    <div id="Layer10" style="position:absolute; width:30px; height:20px; z-index:3; left: 200px; top: 21px; background-image:  url(../result2.jpg); layer-background-image:  url(../result2.jpg); border: 1px none #000000"> 
      <div align="center"><font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="3"><b> 
        </b></font></div>
    </div>
    <div id="Layer9" style="position:absolute; width:200px; height:20px; z-index:2; left: 0px; top: 20px; background-image:  url(../unique3.jpg); layer-background-image:  url(../unique3.jpg); border: 1px none #000000"> 
      <div align="center"><font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="2"><b> 
        </b></font></div>
    </div>
    <div id="Layer10" style="position:absolute; width:30px; height:20px; z-index:3; left: 200px; top: 1px; background-image:  url(../result2.jpg); layer-background-image:  url(../result2.jpg); border: 1px none #000000"> 
      <div align="center"><font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="3"><b> 
        </b></font></div>
    </div>
    <font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="2"><b> 
    </b></font></div>
</div>
<div id="Layer1" style="position:absolute; width:200px; height:20px; z-index:3; left: 460px; top: 640px; background-image:  url(../unique4.jpg); layer-background-image:  url(../unique4.jpg); border: 1px none #000000"> 
  <div align="center"> 
    <div id="Layer10" style="position:absolute; width:30px; height:20px; z-index:3; left: 200px; top: 21px; background-image:  url(../result22.jpg); layer-background-image:  url(../result22.jpg); border: 1px none #000000"> 
      <div align="center"><font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="3"><b> 
        </b></font></div>
    </div>
    <div id="Layer9" style="position:absolute; width:200px; height:20px; z-index:2; left: 0px; top: 20px; background-image:  url(../unique4.jpg); layer-background-image:  url(../unique4.jpg); border: 1px none #000000"> 
      <div align="center"><font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="2"><b> 
        </b></font></div>
    </div>
    <div id="Layer10" style="position:absolute; width:30px; height:20px; z-index:3; left: 200px; top: 1px; background-image:  url(../result22.jpg); layer-background-image:  url(../result22.jpg); border: 1px none #000000"> 
      <div align="center"><font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="3"><b> 
        </b></font></div>
    </div>
    <font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="2"><b> 
    </b></font></div>
</div>
<div id="Layer1" style="position:absolute; width:200px; height:20px; z-index:3; left: 460px; top: 760px; background-image:  url(../unique3.jpg); layer-background-image:  url(../unique3.jpg); border: 1px none #000000"> 
  <div align="center"> 
    <div id="Layer10" style="position:absolute; width:30px; height:20px; z-index:3; left: 200px; top: 21px; background-image:  url(../result2.jpg); layer-background-image:  url(../result2.jpg); border: 1px none #000000"> 
      <div align="center"><font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="3"><b> 
        </b></font></div>
    </div>
    <div id="Layer9" style="position:absolute; width:200px; height:20px; z-index:2; left: 0px; top: 20px; background-image:  url(../unique3.jpg); layer-background-image:  url(../unique3.jpg); border: 1px none #000000"> 
      <div align="center"><font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="2"><b> 
        </b></font></div>
    </div>
    <div id="Layer10" style="position:absolute; width:30px; height:20px; z-index:3; left: 200px; top: 1px; background-image:  url(../result2.jpg); layer-background-image:  url(../result2.jpg); border: 1px none #000000"> 
      <div align="center"><font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="3"><b> 
        </b></font></div>
    </div>
    <font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="2"><b> 
    </b></font></div>
</div>
<div id="Layer1" style="position:absolute; width:200px; height:20px; z-index:3; left: 460px; top: 720px; background-image:  url(../unique3.jpg); layer-background-image:  url(../unique3.jpg); border: 1px none #000000"> 
  <div align="center"> 
    <div id="Layer10" style="position:absolute; width:30px; height:20px; z-index:3; left: 200px; top: 21px; background-image:  url(../result2.jpg); layer-background-image:  url(../result2.jpg); border: 1px none #000000"> 
      <div align="center"><font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="3"><b> 
        </b></font></div>
    </div>
    <div id="Layer9" style="position:absolute; width:200px; height:20px; z-index:2; left: 0px; top: 20px; background-image:  url(../unique3.jpg); layer-background-image:  url(../unique3.jpg); border: 1px none #000000"> 
      <div align="center"><font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="2"><b> 
        </b></font></div>
    </div>
    <div id="Layer10" style="position:absolute; width:30px; height:20px; z-index:3; left: 200px; top: 1px; background-image:  url(../result2.jpg); layer-background-image:  url(../result2.jpg); border: 1px none #000000"> 
      <div align="center"><font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="3"><b> 
        </b></font></div>
    </div>
    <font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="2"><b> 
    </b></font></div>
</div>
<div id="Layer1" style="position:absolute; width:200px; height:20px; z-index:3; left: 460px; top: 680px; background-image:  url(../unique4.jpg); layer-background-image:  url(../unique4.jpg); border: 1px none #000000"> 
  <div align="center"> 
    <div id="Layer10" style="position:absolute; width:30px; height:20px; z-index:3; left: 200px; top: 21px; background-image:  url(../result22.jpg); layer-background-image:  url(../result22.jpg); border: 1px none #000000"> 
      <div align="center"><font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="3"><b> 
        </b></font></div>
    </div>
    <div id="Layer9" style="position:absolute; width:200px; height:20px; z-index:2; left: 0px; top: 20px; background-image:  url(../unique4.jpg); layer-background-image:  url(../unique4.jpg); border: 1px none #000000"> 
      <div align="center"><font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="2"><b> 
        </b></font></div>
    </div>
    <div id="Layer10" style="position:absolute; width:30px; height:20px; z-index:3; left: 200px; top: 1px; background-image:  url(../result22.jpg); layer-background-image:  url(../result22.jpg); border: 1px none #000000"> 
      <div align="center"><font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="3"><b> 
        </b></font></div>
    </div>
    <font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="2"><b> 
    </b></font></div>
</div>
<div id="Layer1" style="position:absolute; width:200px; height:20px; z-index:3; left: 460px; top: 840px; background-image:  url(../unique4.jpg); layer-background-image:  url(../unique4.jpg); border: 1px none #000000"> 
  <div align="center"> 
    <div id="Layer10" style="position:absolute; width:30px; height:20px; z-index:3; left: 200px; top: 21px; background-image:  url(../result22.jpg); layer-background-image:  url(../result22.jpg); border: 1px none #000000"> 
      <div align="center"><font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="3"><b> 
        </b></font></div>
    </div>
    <div id="Layer9" style="position:absolute; width:200px; height:20px; z-index:2; left: 0px; top: 20px; background-image:  url(../unique4.jpg); layer-background-image:  url(../unique4.jpg); border: 1px none #000000"> 
      <div align="center"><font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="2"><b> 
        </b></font></div>
    </div>
    <div id="Layer10" style="position:absolute; width:30px; height:20px; z-index:3; left: 200px; top: 1px; background-image:  url(../result22.jpg); layer-background-image:  url(../result22.jpg); border: 1px none #000000"> 
      <div align="center"><font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="3"><b> 
        </b></font></div>
    </div>
    <font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="2"><b> 
    </b></font></div>
</div>
<div id="Layer1" style="position:absolute; width:200px; height:20px; z-index:3; left: 460px; top: 800px; background-image:  url(../unique4.jpg); layer-background-image:  url(../unique4.jpg); border: 1px none #000000"> 
  <div align="center"> 
    <div id="Layer10" style="position:absolute; width:30px; height:20px; z-index:3; left: 200px; top: 21px; background-image:  url(../result22.jpg); layer-background-image:  url(../result22.jpg); border: 1px none #000000"> 
      <div align="center"><font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="3"><b> 
        </b></font></div>
    </div>
    <div id="Layer9" style="position:absolute; width:200px; height:20px; z-index:2; left: 0px; top: 20px; background-image:  url(../unique4.jpg); layer-background-image:  url(../unique4.jpg); border: 1px none #000000"> 
      <div align="center"><font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="2"><b> 
        </b></font></div>
    </div>
    <div id="Layer10" style="position:absolute; width:30px; height:20px; z-index:3; left: 200px; top: 1px; background-image:  url(../result22.jpg); layer-background-image:  url(../result22.jpg); border: 1px none #000000"> 
      <div align="center"><font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="3"><b> 
        </b></font></div>
    </div>
    <font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="2"><b> 
    </b></font></div>
</div>
<div id="Layer1" style="position:absolute; width:200px; height:20px; z-index:3; left: 720px; top: 260px; background-image:  url(../unique3.jpg); layer-background-image:  url(../unique3.jpg); border: 1px none #000000"> 
  <div align="center"> 
    <div id="Layer10" style="position:absolute; width:30px; height:20px; z-index:3; left: 200px; top: 21px; background-image:  url(../result2.jpg); layer-background-image:  url(../result2.jpg); border: 1px none #000000"> 
      <div align="center"><font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="3"><b> 
        </b></font></div>
    </div>
    <div id="Layer9" style="position:absolute; width:200px; height:20px; z-index:2; left: 0px; top: 20px; background-image:  url(../unique3.jpg); layer-background-image:  url(../unique3.jpg); border: 1px none #000000"> 
      <div align="center"><font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="2"></font></div>
    </div>
    <div id="Layer10" style="position:absolute; width:30px; height:20px; z-index:3; left: 200px; top: 1px; background-image:  url(../result2.jpg); layer-background-image:  url(../result2.jpg); border: 1px none #000000"> 
      <div align="center"><font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="3"><b> 
        </b></font></div>
    </div>
    <font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="2"><b> 
    </b></font></div>
</div>
<div id="Layer1" style="position:absolute; width:200px; height:20px; z-index:3; left: 720px; top: 340px; background-image:  url(../unique3.jpg); layer-background-image:  url(../unique3.jpg); border: 1px none #000000"> 
  <div align="center"> 
    <div id="Layer10" style="position:absolute; width:30px; height:20px; z-index:3; left: 200px; top: 21px; background-image:  url(../result2.jpg); layer-background-image:  url(../result2.jpg); border: 1px none #000000"> 
      <div align="center"><font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="3"><b> 
        </b></font></div>
    </div>
    <div id="Layer9" style="position:absolute; width:200px; height:20px; z-index:2; left: 0px; top: 20px; background-image:  url(../unique3.jpg); layer-background-image:  url(../unique3.jpg); border: 1px none #000000"> 
      <div align="center"><font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="2"><b> 
        </b></font></div>
    </div>
    <div id="Layer10" style="position:absolute; width:30px; height:20px; z-index:3; left: 200px; top: 1px; background-image:  url(../result2.jpg); layer-background-image:  url(../result2.jpg); border: 1px none #000000"> 
      <div align="center"><font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="3"><b> 
        </b></font></div>
    </div>
    <font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="2"><b> 
    </b></font></div>
</div>
<div id="Layer1" style="position:absolute; width:200px; height:20px; z-index:3; left: 720px; top: 420px; background-image:  url(../unique3.jpg); layer-background-image:  url(../unique3.jpg); border: 1px none #000000"> 
  <div align="center"> 
    <div id="Layer10" style="position:absolute; width:30px; height:20px; z-index:3; left: 200px; top: 21px; background-image:  url(../result2.jpg); layer-background-image:  url(../result2.jpg); border: 1px none #000000"> 
      <div align="center"><font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="3"><b> 
        </b></font></div>
    </div>
    <div id="Layer9" style="position:absolute; width:200px; height:20px; z-index:2; left: 0px; top: 20px; background-image:  url(../unique3.jpg); layer-background-image:  url(../unique3.jpg); border: 1px none #000000"> 
      <div align="center"><font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="2"><b> 
        </b></font></div>
    </div>
    <div id="Layer10" style="position:absolute; width:30px; height:20px; z-index:3; left: 200px; top: 1px; background-image:  url(../result2.jpg); layer-background-image:  url(../result2.jpg); border: 1px none #000000"> 
      <div align="center"><font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="3"><b> 
        </b></font></div>
    </div>
    <font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="2"><b> 
    </b></font></div>
</div>
<div id="Layer1" style="position:absolute; width:200px; height:20px; z-index:3; left: 720px; top: 500px; background-image:  url(../unique3.jpg); layer-background-image:  url(../unique3.jpg); border: 1px none #000000"> 
  <div align="center"> 
    <div id="Layer10" style="position:absolute; width:30px; height:20px; z-index:3; left: 200px; top: 21px; background-image:  url(../result2.jpg); layer-background-image:  url(../result2.jpg); border: 1px none #000000"> 
      <div align="center"><font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="3"><b> 
        </b></font></div>
    </div>
    <div id="Layer9" style="position:absolute; width:200px; height:20px; z-index:2; left: 0px; top: 20px; background-image:  url(../unique3.jpg); layer-background-image:  url(../unique3.jpg); border: 1px none #000000"> 
      <div align="center"><font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="2"><b> 
        </b></font></div>
    </div>
    <div id="Layer10" style="position:absolute; width:30px; height:20px; z-index:3; left: 200px; top: 1px; background-image:  url(../result2.jpg); layer-background-image:  url(../result2.jpg); border: 1px none #000000"> 
      <div align="center"><font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="3"><b> 
        </b></font></div>
    </div>
    <font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="2"><b> 
    </b></font></div>
</div>
<div id="Layer1" style="position:absolute; width:200px; height:20px; z-index:3; left: 720px; top: 580px; background-image:  url(../unique3.jpg); layer-background-image:  url(../unique3.jpg); border: 1px none #000000"> 
  <div align="center"> 
    <div id="Layer10" style="position:absolute; width:30px; height:20px; z-index:3; left: 200px; top: 21px; background-image:  url(../result2.jpg); layer-background-image:  url(../result2.jpg); border: 1px none #000000"> 
      <div align="center"><font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="3"><b> 
        </b></font></div>
    </div>
    <div id="Layer9" style="position:absolute; width:200px; height:20px; z-index:2; left: 0px; top: 20px; background-image:  url(../unique3.jpg); layer-background-image:  url(../unique3.jpg); border: 1px none #000000"> 
      <div align="center"><font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="2"><b> 
        </b></font></div>
    </div>
    <div id="Layer10" style="position:absolute; width:30px; height:20px; z-index:3; left: 200px; top: 1px; background-image:  url(../result2.jpg); layer-background-image:  url(../result2.jpg); border: 1px none #000000"> 
      <div align="center"><font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="3"><b> 
        </b></font></div>
    </div>
    <font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="2"><b> 
    </b></font></div>
</div>
<div id="Layer1" style="position:absolute; width:200px; height:20px; z-index:3; left: 720px; top: 660px; background-image:  url(../unique3.jpg); layer-background-image:  url(../unique3.jpg); border: 1px none #000000"> 
  <div align="center"> 
    <div id="Layer10" style="position:absolute; width:30px; height:20px; z-index:3; left: 200px; top: 21px; background-image:  url(../result2.jpg); layer-background-image:  url(../result2.jpg); border: 1px none #000000"> 
      <div align="center"><font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="3"><b> 
        </b></font></div>
    </div>
    <div id="Layer9" style="position:absolute; width:200px; height:20px; z-index:2; left: 0px; top: 20px; background-image:  url(../unique3.jpg); layer-background-image:  url(../unique3.jpg); border: 1px none #000000"> 
      <div align="center"><font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="2"><b> 
        </b></font></div>
    </div>
    <div id="Layer10" style="position:absolute; width:30px; height:20px; z-index:3; left: 200px; top: 1px; background-image:  url(../result2.jpg); layer-background-image:  url(../result2.jpg); border: 1px none #000000"> 
      <div align="center"><font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="3"><b> 
        </b></font></div>
    </div>
    <font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="2"><b> 
    </b></font></div>
</div>
<div id="Layer1" style="position:absolute; width:200px; height:20px; z-index:3; left: 720px; top: 740px; background-image:  url(../unique3.jpg); layer-background-image:  url(../unique3.jpg); border: 1px none #000000"> 
  <div align="center"> 
    <div id="Layer10" style="position:absolute; width:30px; height:20px; z-index:3; left: 200px; top: 21px; background-image:  url(../result2.jpg); layer-background-image:  url(../result2.jpg); border: 1px none #000000"> 
      <div align="center"><font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="3"><b> 
        </b></font></div>
    </div>
    <div id="Layer9" style="position:absolute; width:200px; height:20px; z-index:2; left: 0px; top: 20px; background-image:  url(../unique3.jpg); layer-background-image:  url(../unique3.jpg); border: 1px none #000000"> 
      <div align="center"><font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="2"><b> 
        </b></font></div>
    </div>
    <div id="Layer10" style="position:absolute; width:30px; height:20px; z-index:3; left: 200px; top: 1px; background-image:  url(../result2.jpg); layer-background-image:  url(../result2.jpg); border: 1px none #000000"> 
      <div align="center"><font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="3"><b> 
        </b></font></div>
    </div>
    <font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="2"><b> 
    </b></font></div>
</div>
<div id="Layer1" style="position:absolute; width:200px; height:20px; z-index:3; left: 720px; top: 820px; background-image:  url(../unique3.jpg); layer-background-image:  url(../unique3.jpg); border: 1px none #000000"> 
  <div align="center"> 
    <div id="Layer10" style="position:absolute; width:30px; height:20px; z-index:3; left: 200px; top: 21px; background-image:  url(../result2.jpg); layer-background-image:  url(../result2.jpg); border: 1px none #000000"> 
      <div align="center"><font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="3"><b> 
        </b></font></div>
    </div>
    <div id="Layer9" style="position:absolute; width:200px; height:20px; z-index:2; left: 0px; top: 20px; background-image:  url(../unique3.jpg); layer-background-image:  url(../unique3.jpg); border: 1px none #000000"> 
      <div align="center"><font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="2"><b> 
        </b></font></div>
    </div>
    <div id="Layer10" style="position:absolute; width:30px; height:20px; z-index:3; left: 200px; top: 1px; background-image:  url(../result2.jpg); layer-background-image:  url(../result2.jpg); border: 1px none #000000"> 
      <div align="center"><font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="3"><b> 
        </b></font></div>
    </div>
    <font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="2"><b> 
    </b></font></div>
</div>
<div id="Layer1" style="position:absolute; width:200px; height:20px; z-index:3; left: 980px; top: 300px; background-image:  url(../unique3.jpg); layer-background-image:  url(../unique3.jpg); border: 1px none #000000"> 
  <div align="center"> 
    <div id="Layer10" style="position:absolute; width:30px; height:20px; z-index:3; left: 200px; top: 21px; background-image:  url(../result2.jpg); layer-background-image:  url(../result2.jpg); border: 1px none #000000"> 
      <div align="center"><font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="3"><b> 
        </b></font></div>
    </div>
    <div id="Layer9" style="position:absolute; width:200px; height:20px; z-index:2; left: 0px; top: 20px; background-image:  url(../unique3.jpg); layer-background-image:  url(../unique3.jpg); border: 1px none #000000"> 
      <div align="center"><font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="2"><b> 
        </b></font></div>
    </div>
    <div id="Layer10" style="position:absolute; width:30px; height:20px; z-index:3; left: 200px; top: 1px; background-image:  url(../result2.jpg); layer-background-image:  url(../result2.jpg); border: 1px none #000000"> 
      <div align="center"><font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="3"><b> 
        </b></font></div>
    </div>
    <font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="2"><b> 
    </b></font></div>
</div>
<div id="Layer1" style="position:absolute; width:200px; height:20px; z-index:3; left: 980px; top: 460px; background-image:  url(../unique3.jpg); layer-background-image:  url(../unique3.jpg); border: 1px none #000000"> 
  <div align="center"> 
    <div id="Layer10" style="position:absolute; width:30px; height:20px; z-index:3; left: 200px; top: 21px; background-image:  url(../result2.jpg); layer-background-image:  url(../result2.jpg); border: 1px none #000000"> 
      <div align="center"><font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="3"><b> 
        </b></font></div>
    </div>
    <div id="Layer9" style="position:absolute; width:200px; height:20px; z-index:2; left: 0px; top: 20px; background-image:  url(../unique3.jpg); layer-background-image:  url(../unique3.jpg); border: 1px none #000000"> 
      <div align="center"><font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="2"><b> 
        </b></font></div>
    </div>
    <div id="Layer10" style="position:absolute; width:30px; height:20px; z-index:3; left: 200px; top: 1px; background-image:  url(../result2.jpg); layer-background-image:  url(../result2.jpg); border: 1px none #000000"> 
      <div align="center"><font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="3"><b> 
        </b></font></div>
    </div>
    <font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="2"><b> 
    </b></font></div>
</div>
<div id="Layer1" style="position:absolute; width:200px; height:20px; z-index:3; left: 980px; top: 620px; background-image:  url(../unique3.jpg); layer-background-image:  url(../unique3.jpg); border: 1px none #000000"> 
  <div align="center"> 
    <div id="Layer10" style="position:absolute; width:30px; height:20px; z-index:3; left: 200px; top: 21px; background-image:  url(../result2.jpg); layer-background-image:  url(../result2.jpg); border: 1px none #000000"> 
      <div align="center"><font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="3"><b> 
        </b></font></div>
    </div>
    <div id="Layer9" style="position:absolute; width:200px; height:20px; z-index:2; left: 0px; top: 20px; background-image:  url(../unique3.jpg); layer-background-image:  url(../unique3.jpg); border: 1px none #000000"> 
      <div align="center"><font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="2"><b> 
        </b></font></div>
    </div>
    <div id="Layer10" style="position:absolute; width:30px; height:20px; z-index:3; left: 200px; top: 1px; background-image:  url(../result2.jpg); layer-background-image:  url(../result2.jpg); border: 1px none #000000"> 
      <div align="center"><font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="3"><b> 
        </b></font></div>
    </div>
    <font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="2"><b> 
    </b></font></div>
</div>
<div id="Layer1" style="position:absolute; width:200px; height:20px; z-index:3; left: 980px; top: 780px; background-image:  url(../unique3.jpg); layer-background-image:  url(../unique3.jpg); border: 1px none #000000"> 
  <div align="center"> 
    <div id="Layer10" style="position:absolute; width:30px; height:20px; z-index:3; left: 200px; top: 21px; background-image:  url(../result2.jpg); layer-background-image:  url(../result2.jpg); border: 1px none #000000"> 
      <div align="center"><font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="3"><b> 
        </b></font></div>
    </div>
    <div id="Layer9" style="position:absolute; width:200px; height:20px; z-index:2; left: 0px; top: 20px; background-image:  url(../unique3.jpg); layer-background-image:  url(../unique3.jpg); border: 1px none #000000"> 
      <div align="center"><font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="2"><b> 
        </b></font></div>
    </div>
    <div id="Layer10" style="position:absolute; width:30px; height:20px; z-index:3; left: 200px; top: 1px; background-image:  url(../result2.jpg); layer-background-image:  url(../result2.jpg); border: 1px none #000000"> 
      <div align="center"><font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="3"><b> 
        </b></font></div>
    </div>
    <font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="2"><b> 
    </b></font></div>
</div>
<div id="Layer1" style="position:absolute; width:200px; height:20px; z-index:3; left: 1240px; top: 380px; background-image:  url(../unique3.jpg); layer-background-image:  url(../unique3.jpg); border: 1px none #000000"> 
  <div align="center"> 
    <div id="Layer10" style="position:absolute; width:30px; height:20px; z-index:3; left: 200px; top: 21px; background-image:  url(../result2.jpg); layer-background-image:  url(../result2.jpg); border: 1px none #000000"> 
      <div align="center"><font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="3"><b> 
        </b></font></div>
    </div>
    <div id="Layer9" style="position:absolute; width:200px; height:20px; z-index:2; left: 0px; top: 20px; background-image:  url(../unique3.jpg); layer-background-image:  url(../unique3.jpg); border: 1px none #000000"> 
      <div align="center"><font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="2"><b> 
        </b></font></div>
    </div>
    <div id="Layer10" style="position:absolute; width:30px; height:20px; z-index:3; left: 200px; top: 1px; background-image:  url(../result2.jpg); layer-background-image:  url(../result2.jpg); border: 1px none #000000"> 
      <div align="center"><font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="3"><b> 
        </b></font></div>
    </div>
    <font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="2"><b> 
    </b></font></div>
</div>
<div id="Layer1" style="position:absolute; width:200px; height:20px; z-index:3; left: 1239px; top: 700px; background-image:  url(../unique3.jpg); layer-background-image:  url(../unique3.jpg); border: 1px none #000000"> 
  <div align="center"> 
    <div id="Layer10" style="position:absolute; width:30px; height:20px; z-index:3; left: 200px; top: 21px; background-image:  url(../result2.jpg); layer-background-image:  url(../result2.jpg); border: 1px none #000000"> 
      <div align="center"><font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="3"><b> 
        </b></font></div>
    </div>
    <div id="Layer9" style="position:absolute; width:200px; height:20px; z-index:2; left: 0px; top: 20px; background-image:  url(../unique3.jpg); layer-background-image:  url(../unique3.jpg); border: 1px none #000000"> 
      <div align="center"><font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="2"><b> 
        </b></font></div>
    </div>
    <div id="Layer10" style="position:absolute; width:30px; height:20px; z-index:3; left: 200px; top: 1px; background-image:  url(../result2.jpg); layer-background-image:  url(../result2.jpg); border: 1px none #000000"> 
      <div align="center"><font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="3"><b> 
        </b></font></div>
    </div>
    <font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="2"><b> 
    </b></font></div>
</div>
<div id="Layer1" style="position:absolute; width:200px; height:20px; z-index:3; left: 1500px; top: 540px; background-image:  url(../unique3.jpg); layer-background-image:  url(../unique3.jpg); border: 1px none #000000"> 
  <div align="center"> 
    <div id="Layer9" style="position:absolute; width:200px; height:20px; z-index:2; left: 0px; top: 20px; background-image:  url(../unique3.jpg); layer-background-image:  url(../unique3.jpg); border: 1px none #000000"> 
      <div align="center"><font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="2"><b> 
        </b></font></div>
    </div>
    <div id="Layer10" style="position:absolute; width:30px; height:20px; z-index:3; left: 200px; top: 1px; background-image:  url(../result2.jpg); layer-background-image:  url(../result2.jpg); border: 1px none #000000"> 
      <div align="center"><font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="3"><b> 
        </b></font></div>
    </div>
    <div id="Layer10" style="position:absolute; width:30px; height:20px; z-index:3; left: 200px; top: 21px; background-image:  url(../result2.jpg); layer-background-image:  url(../result2.jpg); border: 1px none #000000"> 
      <div align="center"><font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="3"><b> 
        </b></font></div>
    </div>
    <font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="2"><b> 
    </b></font></div>
</div>
<div id="Layer4" style="position:absolute; width:2px; height:160px; z-index:6; left: 1214px; top: 320px; background-color: #FF0000; layer-background-color: #FF0000; border: 1px none #000000"></div>
<div id="Layer4" style="position:absolute; width:2px; height:40px; z-index:6; left: 694px; top: 580px; background-color: #FF0000; layer-background-color: #FF0000; border: 1px none #000000"></div>
<div id="Layer4" style="position:absolute; width:2px; height:320px; z-index:6; left: 1474px; top: 400px; background-color: #FF0000; layer-background-color: #FF0000; border: 1px none #000000"></div>
<div id="Layer4" style="position:absolute; width:2px; height:40px; z-index:6; left: 694px; top: 742px; background-color: #FF0000; layer-background-color: #FF0000; border: 1px none #000000"></div>
<div id="Layer4" style="position:absolute; width:2px; height:40px; z-index:6; left: 694px; top: 500px; background-color: #FF0000; layer-background-color: #FF0000; border: 1px none #000000"></div>
<div id="Layer4" style="position:absolute; width:2px; height:40px; z-index:6; left: 694px; top: 343px; background-color: #FF0000; layer-background-color: #FF0000; border: 1px none #000000"></div>
<div id="Layer4" style="position:absolute; width:2px; height:80px; z-index:6; left: 954px; top: 600px; background-color: #FF0000; layer-background-color: #FF0000; border: 1px none #000000"></div>
<div id="Layer3" style="position:absolute; width:160px; height:20px; z-index:5; left: 1020px; top: 200px; background-image:  url(../titre.jpg); layer-background-image:  url(../titre.jpg); border: 1px none #000000"> 
  <div align="center"><font color="#FFFFFF"><b>Quarts de finale</b></font></div>
</div>
<div id="Layer3" style="position:absolute; width:160px; height:20px; z-index:5; left: 760px; top: 200px; background-image:  url(../titre.jpg); layer-background-image:  url(../titre.jpg); border: 1px none #000000"> 
  <div align="center"><font color="#FFFFFF"><b>8me de finale</b></font></div>
</div>
<div id="Layer3" style="position:absolute; width:160px; height:20px; z-index:5; left: 1520px; top: 200px; background-image:  url(../titre.jpg); layer-background-image:  url(../titre.jpg); border: 1px none #000000"> 
  <div align="center"><font color="#FFFFFF"><b>Finale</b></font></div>
</div>
<div id="Layer4" style="position:absolute; width:2px; height:40px; z-index:6; left: 694px; top: 660px; background-color: #FF0000; layer-background-color: #FF0000; border: 1px none #000000"></div>
<div id="Layer3" style="position:absolute; width:160px; height:20px; z-index:5; left: 160px; top: 200px; background-image:  url(../titre.jpg); layer-background-image:  url(../titre.jpg); border: 1px none #000000"> 
  <div align="center"><font color="#FFFFFF"><b>32me de finale</b></font></div>
</div>
<div id="Layer3" style="position:absolute; width:160px; height:20px; z-index:5; left: 1280px; top: 200px; background-image:  url(../titre.jpg); layer-background-image:  url(../titre.jpg); border: 1px none #000000"> 
  <div align="center"><font color="#FFFFFF"><b>Demi finale</b></font></div>
</div>
<div id="Layer4" style="position:absolute; width:2px; height:80px; z-index:6; left: 954px; top: 280px; background-color: #FF0000; layer-background-color: #FF0000; border: 1px none #000000"></div>
<div id="Layer4" style="position:absolute; width:2px; height:160px; z-index:6; left: 1214px; top: 642px; background-color: #FF0000; layer-background-color: #FF0000; border: 1px none #000000"></div>
<div id="Layer4" style="position:absolute; width:2px; height:40px; z-index:6; left: 694px; top: 264px; background-color: #FF0000; layer-background-color: #FF0000; border: 1px none #000000"></div>
<div id="Layer3" style="position:absolute; width:160px; height:20px; z-index:5; left: 500px; top: 202px; background-image:  url(../titre.jpg); layer-background-image:  url(../titre.jpg); border: 1px none #000000"> 
  <div align="center"><font color="#FFFFFF"><b>16me de finale</b></font></div>
</div>
<div id="Layer4" style="position:absolute; width:2px; height:80px; z-index:6; left: 954px; top: 440px; background-color: #FF0000; layer-background-color: #FF0000; border: 1px none #000000"></div>
<div id="Layer4" style="position:absolute; width:2px; height:80px; z-index:6; left: 954px; top: 760px; background-color: #FF0000; layer-background-color: #FF0000; border: 1px none #000000"></div>
<div id="Layer4" style="position:absolute; width:2px; height:40px; z-index:6; left: 694px; top: 423px; background-color: #FF0000; layer-background-color: #FF0000; border: 1px none #000000"></div>
<div id="Layer4" style="position:absolute; width:2px; height:40px; z-index:6; left: 694px; top: 820px; background-color: #FF0000; layer-background-color: #FF0000; border: 1px none #000000"></div>
<div id="Layer11" style="position:absolute; width:306px; height:33px; z-index:7; left: 1494px; top: 688px; background-color: #FFFF00; layer-background-color: #FFFF00; border: 1px none #000000"> 
  <div align="center">
    <p>&nbsp;</p>
  </div>
</div>
<div id="Layer2" style="position:absolute; width:1600px; height:20px; z-index:4; left: -2px; top: 175px; background-color: #FFCC66; layer-background-color: #FFCC66; border: 1px none #000000"> 
  <div align="center"><i><b>Cadets Jean TEULIERE (-16 ans) Cadets Jean TEULIERE 
    (-16 ans) Cadets Jean TEULIERE (-16 ans) Cadets Jean TEULIERE (-16 ans) Cadets 
    Jean TEULIERE (-16 ans) Cadets Jean TEULIERE (-16 ans) Cadets Jean TEULIERE 
    </b></i></div>
</div>
<div id="Layer11" style="position:absolute; width:306px; height:59px; z-index:7; left: 1495px; top: 615px; background-color: #FFFF00; layer-background-color: #FFFF00; border: 1px none #000000"> 
  <div align="center"> 
    <p><font size="5"><b>Champion de France <br>
      1re S&eacute;rie 
      <?php echo $annee;?>
      </b></font><font color="#FF0000" face="Geneva, Arial, Helvetica, san-serif"size="5"><b> 
      </b></font></p>
  </div>
</div>