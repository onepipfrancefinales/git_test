<?php

 if (isset ($_GET['division'])) $division = $_GET['division']; else $division = "Variable Division non d�clar�e";
 if (isset ($_GET['comite'])) $comite = $_GET['comite']; else $comite = "Variable comite non d�clar�e";
 ?>
 <!--
 <head>
<link rel="stylesheet" type="text/css" href="qualification.css">
</head>

-->
<?php
//$bdcomiteClub = $comite.''."_clubs";
require ("fonction_Qualification.php");
classementParPoints5poules($comite, $division);

?> 

 

 
 
 
 
<table width="192" border="0" align="left" height="500" cellspacing="0">
  <tr> 
    <th colspan="2" height="13">Qualifi&eacute;s en 16me</th>
  </tr>
  <tr> 
    <td width="38" height="13">&nbsp;</td>
    <td width="262" height="13">&nbsp;</td>
  </tr>
  <tr> 
    <td width="38" height="13"> 
      <div class="rangTitre" >Rang </div>
    </td>
    <td width="262" height="13"><div class="rangTitre" >Equipe (Pts)</div></td>
  </tr>
  <tr> 
    <td colspan="2" height="13">Classement des 1er de poule</td>
  </tr>
  <tr> 
    <td width="38" height="13"> 
      <div class="rang" >1</div>
    </td>
    <td width="262" height="13"> 
      <div class="equipeQ" > 
        <?php	echo $club1; ?>
      </div>
    </td>
  </tr>
  <tr> 
    <td width="38"> 
      <div class="rang" >2 </div>
    </td>
    <td width="262"> 
      <div class="equipeQ" > 
        <?php	echo $club2; ?>
      </div>
    </td>
  </tr>
  <tr> 
    <td width="38" height="16"> 
      <div class="rang" >3 </div>
    </td>
    <td width="262" height="16"> 
      <div class="equipeQ" > 
        <?php	echo $club3; ?>
      </div>
    </td>
  </tr>
  <tr> 
    <td width="38" height="9"> 
      <div class="rang" >4 </div>
    </td>
    <td width="262" height="9"> 
      <div class="equipeQ" > 
        <?php	echo $club4; ?>
      </div>
    </td>
  </tr>
  <tr> 
    <td width="38"> 
      <div class="rang" >5 </div>
    </td>
    <td width="262"> 
      <div class="equipeQ" > 
        <?php	echo $club5; ?>
      </div>
    </td>
  </tr>
  <tr> 
    <td colspan="2" height="24">Classement des 2me de poule</td>
  </tr>
  <tr> 
    <td width="38" height="24"> 
      <div class="rang" >6 </div>
    </td>
    <td width="262" height="24"> 
      <div class="equipeQ" > 
        <?php	echo $club6; ?>
      </div>
    </td>
  </tr>
  <tr> 
    <td width="38" height="11"> 
      <div class="rang" >7 </div>
    </td>
    <td width="262" height="11"> 
      <div class="equipeQ" > 
        <?php	echo $club7; ?>
      </div>
    </td>
  </tr>
  <tr> 
    <td width="38"> 
      <div class="rang" >8</div>
    </td>
    <td width="262"> 
      <div class="equipeQ" > 
        <?php	echo $club8; ?>
      </div>
    </td>
  </tr>
  <tr> 
    <td width="38" height="23"> 
      <div class="rang" >9</div>
    </td>
    <td width="262" height="23"> 
      <div class="equipeQ" > 
        <?php	echo $club9; ?>
      </div>
    </td>
  </tr>
  <tr> 
    <td width="38" height="22"> 
      <div class="rang" >10</div>
    </td>
    <td width="262" height="22"> 
      <div class="equipeQ" > 
        <?php	echo $club10; ?>
      </div>
    </td>
  </tr>
  <tr> 
    <td colspan="2" height="25">Classement des 3me de poule</td>
  </tr>
  <tr> 
    <td width="38" height="25"> 
      <div class="rang" >11</div>
    </td>
    <td width="262" height="25"> 
      <div class="equipeQ" > 
        <?php	echo $club11; ?>
      </div>
    </td>
  </tr>
  <tr> 
    <td width="38" height="22"> 
      <div class="rang" >12</div>
    </td>
    <td width="262" height="22"> 
      <div class="equipeQ" > 
        <?php	echo $club12; ?>
      </div>
    </td>
  </tr>
  <tr> 
    <td width="38"> 
      <div class="rang" >13</div>
    </td>
    <td width="262"> 
      <div class="equipeQ" > 
        <?php	echo $club13; ?>
      </div>
    </td>
  </tr>
  <tr> 
    <td width="38"> 
      <div class="rang" >14</div>
    </td>
    <td width="262"> 
      <div class="equipeQ" > 
        <?php	echo $club14; ?>
      </div>
    </td>
  </tr>
  <tr> 
    <td width="38" height="14"> 
      <div class="rang" >15</div>
    </td>
    <td width="262" height="14"> 
      <div class="equipeQ" > 
        <?php	echo $club15; ?>
      </div>
    </td>
  </tr>
  <tr> 
    <td colspan="2" height="20">Classement des 4me de poule</td>
  </tr>
  <tr> 
    <td width="38" height="20"> 
      <div class="rang" >16</div>
    </td>
    <td width="262" height="20"> 
      <div class="equipeQ" > 
        <?php	echo $club16; ?>
      </div>
    </td>
  </tr>
  <tr> 
    <td width="38" height="20"> 
      <div class="rang" >17</div>
    </td>
    <td width="262" height="20"> 
      <div class="equipeQ" > 
        <?php	echo $club17; ?>
      </div>
    </td>
  </tr>
  <tr> 
    <td width="38" height="20"> 
      <div class="rang" >18</div>
    </td>
    <td width="262" height="20"> 
      <div class="equipeQ" > 
        <?php	echo $club18; ?>
      </div>
    </td>
  </tr>
  <tr> 
    <td width="38" height="20"> 
      <div class="rang" >19</div>
    </td>
    <td width="262" height="20"> 
      <div class="equipeQ" > 
        <?php	echo $club19; ?>
      </div>
    </td>
  </tr>
  <tr> 
    <td width="38" height="20"> 
      <div class="rang" >20</div>
    </td>
    <td width="262" height="20"> 
      <div class="equipeQ" > 
        <?php	echo $club20; ?>
      </div>
    </td>
  </tr>
  <tr> 
    <td colspan="2" height="17">Classement des 5me de poule</td>
  </tr>
  <tr> 
    <td width="38" height="20"> 
      <div class="rang" >21</div>
    </td>
    <td width="262" height="20"> 
      <div class="equipeQ" > 
        <?php	echo $club21; ?>
      </div>
    </td>
  </tr>
  <tr> 
    <td width="38" height="20"> 
      <div class="rang" >22</div>
    </td>
    <td width="262" height="20"> 
      <div class="equipeQ" > 
        <?php	echo $club22; ?>
      </div>
    </td>
  </tr>
  <tr> 
    <td width="38" height="20"> 
      <div class="rang" >23</div>
    </td>
    <td width="262" height="20"> 
      <div class="equipeQ" > 
        <?php	echo $club23; ?>
      </div>
    </td>
  </tr>
  <tr> 
    <td width="38" height="20"> 
      <div class="rang" >24</div>
    </td>
    <td width="262" height="20"> 
      <div class="equipeQ" > 
        <?php	echo $club24; ?>
      </div>
    </td>
  </tr>
  <tr> 
    <td width="38" height="20"> 
      <div class="rang" >25</div>
    </td>
    <td width="262" height="20"> 
      <div class="equipeQ" > 
        <?php	echo $club25; ?>
      </div>
    </td>
  </tr>
  <tr> 
    <td colspan="2" height="17">Classement des 6me de poule</td>
  </tr>
  <tr> 
    <td width="38" height="20"> 
      <div class="rang" >26</div>
    </td>
    <td width="262" height="20"> 
      <div class="equipeQ" > 
        <?php	echo $club26; ?>
      </div>
    </td>
  </tr>
  <tr> 
    <td width="38" height="20"> 
      <div class="rang" >27</div>
    </td>
    <td width="262" height="20"> 
      <div class="equipeQ" > 
        <?php	echo $club27; ?>
      </div>
    </td>
  </tr>
  <tr> 
    <td width="38" height="20"> 
      <div class="rang" >28</div>
    </td>
    <td width="262" height="20"> 
      <div class="equipeQ" > 
        <?php	echo $club28; ?>
      </div>
    </td>
  </tr>
  <tr> 
    <td width="38" height="20"> 
      <div class="rang" >29</div>
    </td>
    <td width="262" height="20"> 
      <div class="equipeQ" > 
        <?php	echo $club29; ?>
      </div>
    </td>
  </tr>
  <tr> 
    <td width="38" height="20"> 
      <div class="rang" >NQ</div>
    </td>
    <td width="262" height="20"> 
      <div class="equipeNQ" > 
        <?php	echo $club30; ?>
      </div>
    </td>
  </tr>
  <tr> 
    <td colspan="2" height="17">Classement des 7me de poule</td>
  </tr>
  <tr> 
    <td width="38" height="20"> 
      <div class="rang" >30</div>
    </td>
    <td width="262" height="20"> 
      <div class="equipeQ" > 
        <?php	echo $club31; ?>
      </div>
    </td>
  </tr>
  <tr> 
    <td width="38" height="20"> 
      <div class="rang" >31</div>
    </td>
    <td width="262" height="20"> 
      <div class="equipeQ" > 
        <?php	echo $club32; ?>
      </div>
    </td>
  </tr>
  <tr> 
    <td width="38" height="20"> 
      <div class="rang" >32</div>
    </td>
    <td width="262" height="20"> 
      <div class="equipeQ" > 
        <?php	echo $club33; ?>
      </div>
    </td>
  </tr>
  <tr> 
    <td width="38" height="20"> 
      <div class="rang" >NQ</div>
    </td>
    <td width="262" height="20"> 
      <div class="equipeNQ" > 
        <?php	echo $club34; ?>
      </div>
    </td>
  </tr>
  <tr> 
    <td width="38" height="20"> 
      <div class="rang" >NQ</div>
    </td>
    <td width="262" height="20"> 
      <div class="equipeNQ" > 
        <?php	echo $club35; ?>
      </div>
    </td>
  </tr>
  <tr> 
    <td width="38" height="17">&nbsp;</td>
    <td width="262" height="17">&nbsp;</td>
  </tr>
</table>
