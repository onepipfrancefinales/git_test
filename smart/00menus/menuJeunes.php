<?php 
					
	if ($comite=="fem" OR $comite=="bal" OR $comite=="teu" OR $comite=="phl" )
				require ("../../connection4.php");	
	elseif ($comite=="pl" OR $comite=="mpy" OR $comite=="pr" OR $comite=="br")
				require ("../../connection3.php");	
	else
				require ("../../connection2.php");
				
				
					$query = "	SELECT id, nom
								FROM $phpcomite_divisions
								WHERE id < 9300  
								ORDER BY id";

?>
<table width="100%" align="center">
  <tr> 
    <td width="33%"> 	
        <ul class="menu-demo2" >
          <li><a href="#"><b> - Juniors - </b></a> 
			 <ul>
				
				<li>Balandrade</li>
				<li><a href="../bal/171.php?champ=33001">GO - Poule 1</a></li>
				<li><a href="../bal/171.php?champ=33002">GO - Poule 2</a></li>
				<li>Phliponeau A</li>
				<li><a href="../phl/171.php?champ=34001">GO - poule </a></li>
				<li><a href="../phl/171.php?champ=34002">GO - poule </a></li>
				<li>Phliponeau B</li>
				<li><a href="../phl/151.php?champ=34101">GO - poule </a></li>
				<li><a href="../phl/151.php?champ=34101">GO - poule </a></li>
			  </ul>
			</li>
        </ul>
    </td>
   
   <td   width="33%" height="28"> 
	  <ul class="menu-demo2">
          <li><a href="#"><b> - Cadets - </b></a> 
			  <ul>
				
				<li>Teuliere A</li>
				<li><a href="../teu/171.php?champ=37001">GO - Poule 1</a></li>
				<li><a href="../teu/171.php?champ=37002">GO - Poule 2</a></li>
				<li><a href="../teu/171.php?champ=37003">GO - Poule 3</a></li>
				<li><a href="../teu/171.php?champ=37005">GO - Poule 5</a></li>
				<li>Teuliere B</li>
				<li><a href="../teu/171.php?champ=37101">GO - Poule 1</a></li>
				<li><a href="../teu/171.php?champ=37101">GO - Poule 1</a></li>
				<li><a href="../teu/171.php?champ=37101">GO - Poule 1</a></li>
				 
				 
			  </ul>
          </li>
        </ul>
    </td>
    
	<td   width="33%" height="28" valign="top"> 
      <ul class="menu-demo2">
         <li><a href="#"><b>-  Autres  -</b></a> 
          <ul>
            <li><a href="../pro/110.php">Top 14</a></li>
            <li><a href="../pro/120.php">Pro D2</a></li>
            <li><font color="#000000">  - </font></li>
            <li><a href="../sommaire.php">Autres<br />
              ligues</a></li>
            <li><font color="#000000">  -</font> </li>
            <li><a href="fem/171.php?champ=280">Top 8</a></li>
            <li><a href="fem/171.php?champ=285">Elite 2</a></li>
            <li><a href="fem/171.php?champ=291">F&eacute;d 1</a> </li>
          </ul>
        </li>
      </ul>
    </td>
  </tr>
</table>
