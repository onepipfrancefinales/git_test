<h3 class="center colorBlack style">Répartition des clubs par divisions et par ligues</h3>
        <table class="width95PC marginAuto" style="border: 3px  solid purple;  border-collapse: collapse">
          
          <tr class="border">
            <td class="border bold style"></td>
            <?php foreach ($tabTrigrammeLigue as $trigrammeLigue) {
               if (cssColonne($trigrammeLigue)== true)
            { echo "<td class=\"border bold style \">"  .$trigrammeLigue."</td>";}
            else
            { echo "<td class=\"border backgroundColonne bold style\">"  .$trigrammeLigue ."</td>";}
            } ?>
            <td class="border bold backgroundGrey style">TOTAUX</td>
          </tr>
        
        
          <tr style="border: 1px  solid purple">
            <td class="border bold style">Top 14</td>
            <?php foreach ($tabTrigrammeLigue as $trigrammeLigue) {
               if (cssColonne($trigrammeLigue))
            { echo "<td class=\"border\">"  .${$trigrammeLigue."110"} ."</td>";}
            else
            { echo "<td class=\"border backgroundColonne\">"  .${$trigrammeLigue."110"} ."</td>";}
            } ?>
            <td class="border backgroundGrey bold"><?php echo $TOP14; ?></td>
          </tr>
          <tr>
            <td class="border bold style">Pro D2</td>
            <?php foreach ($tabTrigrammeLigue as $trigrammeLigue) {
               if (cssColonne($trigrammeLigue))
            { echo "<td class=\"border\">"  .${$trigrammeLigue."120"} ."</td>";}
            else
            { echo "<td class=\"border backgroundColonne\">"  .${$trigrammeLigue."120"} ."</td>";}
            } ?>
            <td class="border backgroundGrey  bold"><?php echo $PROD2; ?></td>
          </tr>
          <tr>
            <td class="border bold style">Nationale 1</td>
            <?php foreach ($tabTrigrammeLigue as $trigrammeLigue) {
               if (cssColonne($trigrammeLigue))
            { echo "<td class=\"border\">"  .${$trigrammeLigue."130"} ."</td>";}
            else
            { echo "<td class=\"border backgroundColonne\">"  .${$trigrammeLigue."130"} ."</td>";}
            } ?>
            <td class="border backgroundGrey  bold"><?php echo $NAT1; ?></td>
          </tr>
          <tr>
            <td class="border bold style">Nationale 2</td>
            <?php foreach ($tabTrigrammeLigue as $trigrammeLigue) {
               if (cssColonne($trigrammeLigue))
            { echo "<td class=\"border\">"  .${$trigrammeLigue."135"} ."</td>";}
            else
            { echo "<td class=\"border backgroundColonne\">"  .${$trigrammeLigue."135"} ."</td>";}
            } ?>
            <td class="border backgroundGrey  bold"><?php echo $NAT2; ?></td>
          </tr>
          <tr>
            <td class="border bold style">Fédérale 1</td>
            <?php foreach ($tabTrigrammeLigue as $trigrammeLigue) {
               if (cssColonne($trigrammeLigue))
            { echo "<td class=\"border\">"  .${$trigrammeLigue."140"} ."</td>";}
            else
            { echo "<td class=\"border backgroundColonne\">"  .${$trigrammeLigue."140"} ."</td>";}
            } ?>
            <td class="border backgroundGrey  bold"><?php echo $FED1; ?></td>
          </tr>
          <tr>
            <td class="border bold style">Fédérale 2</td>
            <?php foreach ($tabTrigrammeLigue as $trigrammeLigue) {
               if (cssColonne($trigrammeLigue))
            { echo "<td class=\"border\">"  .${$trigrammeLigue."150"} ."</td>";}
            else
            { echo "<td class=\"border backgroundColonne\">"  .${$trigrammeLigue."150"} ."</td>";}
            } ?>
            <td class="border backgroundGrey  bold"><?php echo $FED2; ?></td>
          </tr>
          <tr>
            <td class="border bold style ">Fédérale 3</td>
            <?php foreach ($tabTrigrammeLigue as $trigrammeLigue) {
               if (cssColonne($trigrammeLigue))
            { echo "<td class=\"border\">"  .${$trigrammeLigue."160"} ."</td>";}
            else
            { echo "<td class=\"border backgroundColonne\">"  .${$trigrammeLigue."160"} ."</td>";}
            } ?>
            <td class="border backgroundGrey  bold"><?php echo $FED3; ?></td>
          </tr>
          <tr>
            <td class="border bold style">Régionale 1</td>
            <?php foreach ($tabTrigrammeLigue as $trigrammeLigue) {
               if (cssColonne($trigrammeLigue))
            { echo "<td class=\"border\">"  .${$trigrammeLigue."170"} ."</td>";}
            else
            { echo "<td class=\"border backgroundColonne\">"  .${$trigrammeLigue."170"} ."</td>";}
            } ?>
            <td class="border backgroundGrey  bold"><?php echo $REG1; ?></td>
          </tr>
          <tr>
            <td class="border bold style">Régionale 2</td>
            <?php foreach ($tabTrigrammeLigue as $trigrammeLigue) {
               if (cssColonne($trigrammeLigue))
            { echo "<td class=\"border\">"  .${$trigrammeLigue."180"} ."</td>";}
            else
            { echo "<td class=\"border backgroundColonne\">"  .${$trigrammeLigue."180"} ."</td>";}
            } ?>
            <td class="border backgroundGrey  bold"><?php echo $REG2; ?></td>
          </tr>
          <tr>
            <td class="border bold style">Régionale 3</td>
          
          <?php foreach ($tabTrigrammeLigue as $trigrammeLigue) {
               if (cssColonne($trigrammeLigue))
            { echo "<td class=\"border\">"  .${$trigrammeLigue."190"} ."</td>";}
            else
            { echo "<td class=\"border backgroundColonne\">"  .${$trigrammeLigue."190"} ."</td>";}
            } ?>
         
         <td class="border backgroundGrey  bold"><?php echo $REG3; ?></td>
            </tr>

          <tr class="backgroundGrey">
            <td class="border style bold">Totaux</td>
            <?php foreach ($tabTrigrammeLigue as $trigrammeLigue) {
           echo "<td class=\"border bold\">".${"totaux".$trigrammeLigue}."</td>";
            }
            ?>
               <td class="border backgroundGrey bold"><?php echo $TT; ?></td>
          </tr>
          
        </table>