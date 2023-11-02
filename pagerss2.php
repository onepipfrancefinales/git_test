

<table width="600" border="1" align="center" height="563" bgcolor="#999999">
  <tr bgcolor="#FFFFFF"> 
    <td colspan="3"> 
      <div align="center"><b><font color="#000000" size="5"><a name="0"></a>TOUTE 
        L'ACTU DU RUGBY</font></b></div>
    </td>
  </tr>
  <tr> 
    <td width="202" bgcolor="#999999"> 
      <div align="center"><a href="#1"><img src="images/LNR3.bmp" width="150" height="30" border="0"></a></div>
    </td>
    <td width="228"> 
      <div align="center"><a href="#5"><img src="images/rugbynistere.bmp" width="150" height="30" align="texttop" border="0"></a></div>
    </td>
    <td width="154"> 
      <div align="center"><a href="#3"><img src="images/rugbyrama.bmp" width="150" height="30" align="middle" border="0"></a></div>
    </td>
  </tr>
  <tr> 
    <td width="202"> 
      <div align="center"></div>
    </td>
    <td width="228"> 
      <div align="center"><a href="#2"><img src="images/boucherie2.bmp" width="150" height="30" border="0"></a></div>
    </td>
    <td width="154"> 
      <div align="center"><a href="#4"><img src="images/equipe.bmp" width="150" height="30" border="0"></a></div>
    </td>
  </tr>
  <tr bgcolor="#FFFFFF"> 
    <td colspan="3"> 
      <div align="center"><b><a name=""></a> 
        <?php
    // On inclut le haut de la page
    include("pub2.php");
    ?>
        </b></div>
    </td>
  </tr>
  <tr> 
    <td valign="top" bgcolor="#FFFFFF" colspan="3">&nbsp; </td>
  </tr>
  <tr bgcolor="#CCCCCC"> 
    <td valign="top" height="17" colspan="3"> 
      <div align="center"><b><font color="#000000">LNR</font></b></div>
    </td>
  </tr>
  <tr> 
    <td valign="top" bgcolor="#CCCCCC" height="2" colspan="3"> 
      <div align="center"><b><img src="images/LNR3.bmp" width="600" height="78"></b></div>
    </td>
  </tr>
  <tr> 
    <td valign="top" colspan="3"> 
      <?php  $member=""; //optionnel si vous etes inscrit sur la plateforme actifpub  le parametrage se fait dans votre espace membre 
 $fichier="http://feeds.feedburner.com/ligue_nationale_de_rugby"; 
 $limite="1";  // sujets compris entre 1 
 $limite1="10";   //  et plus  
  $aspect="0";  //  0 ou 1 (1 permet d'afficher lien + description, 0 que les liens)  
 $minute="1";  //  0 ou 1 (1 permet d'afficher date et heure, 0 pas de date et heure) 
 $sujet="1"; //  0 ou 1 (1 permet d'afficher le titre des sujets traités, 0 pas de titre )  
 $te="Geneva, Arial, sans-serif";  // Police de caractères (Verdana, arial etc...) 
 $fil_textsize="11"; // taille des liens et description 
 $title_textcolor="000000"; // couleur des liens (000000 donne noir)  
 $tlien="none"; // style du lien none ou underline  
 $text_textcolor="000000";  // couleur description (000000 donne noir) 
 $frame_color="00CCFF"; // couleur arrière plan (FFFFFF donne blanc) 
 $content="0"; // 0 ou 1 comme paramètre optionnel, 1  format html,  0  format texte 
 $extract="";  // laisser vide ou indiquez le nombre de caractères que vous souhaitez garder dans le corps du flux 
 $cache="15"; // gestion du cache exprimée en minutes - en fonction de la fréquence de mise à jour 
  $fichier="http://www.actifpub.com/rss.php?fichier_AP_=$fichier&limite_AP_=$limite&limite1_AP_=$limite1&fil_textsize_AP_=$fil_textsize&text_textcolor_AP_=$text_textcolor&title_textcolor_AP_=$title_textcolor&frame_color_AP_=$frame_color&te_AP_=$te&aspect_AP_=$aspect&minute_AP_=$minute&sujet_AP_=$sujet&content_AP_=$content&tlien_AP_=$tlien&cache_AP_=$cache&extract_AP_=$extract&member_AP_=$member";  
 
 $fichier=str_replace(" ","+",$fichier); 
  $ch = curl_init();  
 curl_setopt ($ch, CURLOPT_URL, "$fichier"); 
 curl_setopt($ch, CURLOPT_HEADER, 0); 
 curl_setopt($ch, CURLOPT_USERAGENT, $useragent); 
 curl_setopt ($ch, CURLOPT_CONNECTTIMEOUT,7); 
 curl_setopt ($ch, CURLOPT_TIMEOUT,25); 
 curl_setopt($ch, CURLOPT_RETURNTRANSFER,1); 
 $affiche_contenu=curl_exec($ch); 
 curl_close ($ch); 
 echo  $affiche_contenu;   ?>
      <b><a name="2"></a></b> </td>
  </tr>
  <tr bgcolor="#FFFFFF"> 
    <td height="23" colspan="3"> 
      <div align="right"><font size="1"><a href="#0">Retour haut de page</a></font></div>
    </td>
  </tr>
  <tr bgcolor="#999999"> 
    <td colspan="3" height="29"> 
      <div align="center"><b><font color="#000000">BOUCHERIE OVALIE</font></b></div>
    </td>
  </tr>
  <tr bgcolor="#00CCFF"> 
    <td bgcolor="#CCCCCC" colspan="3"> 
      <div align="center"><b><img src="images/boucherie2.bmp" width="600" height="78"></b></div>
    </td>
  </tr>
  <tr> 
    <td valign="top" height="4" colspan="3"> 
      <?php
 $member=""; //optionnel si vous etes inscrit sur la plateforme actifpub  le parametrage se fait dans votre espace membre 
 $fichier="http://boucherie-ovalie.org/feed/"; 
 $limite="1";  // sujets compris entre 1 
 $limite1="5";   //  et plus  
  $aspect="1";  //  0 ou 1 (1 permet d'afficher lien + description, 0 que les liens)  
 $minute="1";  //  0 ou 1 (1 permet d'afficher date et heure, 0 pas de date et heure) 
 $sujet="1"; //  0 ou 1 (1 permet d'afficher le titre des sujets traités, 0 pas de titre )  
 $te="Geneva, Arial, sans-serif";  // Police de caractères (Verdana, arial etc...) 
 $fil_textsize="12"; // taille des liens et description 
 $title_textcolor="1F70B4"; // couleur des liens (000000 donne noir)  
 $tlien="none"; // style du lien none ou underline  
 $text_textcolor="000000";  // couleur description (000000 donne noir) 
 $frame_color="FFFFFF"; // couleur arrière plan (FFFFFF donne blanc) 
 $content="1"; // 0 ou 1 comme paramètre optionnel, 1  format html,  0  format texte 
 $extract="100";  // laisser vide ou indiquez le nombre de caractères que vous souhaitez garder dans le corps du flux 
 $cache="15"; // gestion du cache exprimée en minutes - en fonction de la fréquence de mise à jour 
  $fichier="http://www.actifpub.com/rss.php?fichier_AP_=$fichier&limite_AP_=$limite&limite1_AP_=$limite1&fil_textsize_AP_=$fil_textsize&text_textcolor_AP_=$text_textcolor&title_textcolor_AP_=$title_textcolor&frame_color_AP_=$frame_color&te_AP_=$te&aspect_AP_=$aspect&minute_AP_=$minute&sujet_AP_=$sujet&content_AP_=$content&tlien_AP_=$tlien&cache_AP_=$cache&extract_AP_=$extract&member_AP_=$member";  
 
 $fichier=str_replace(" ","+",$fichier); 
  $ch = curl_init();  
 curl_setopt ($ch, CURLOPT_URL, "$fichier"); 
 curl_setopt($ch, CURLOPT_HEADER, 0); 
 curl_setopt($ch, CURLOPT_USERAGENT, $useragent); 
 curl_setopt ($ch, CURLOPT_CONNECTTIMEOUT,7); 
 curl_setopt ($ch, CURLOPT_TIMEOUT,25); 
 curl_setopt($ch, CURLOPT_RETURNTRANSFER,1); 
 $affiche_contenu=curl_exec($ch); 
 curl_close ($ch); 
 echo  $affiche_contenu;   
 ?>
      <b><a name="3"></a></b> </td>
  </tr>
  <tr bgcolor="#FFFFFF"> 
    <td valign="top" height="4" colspan="3"> 
      <div align="right"><font size="1"><a href="#0">Retour haut de page</a></font> 
      </div>
    </td>
  </tr>
  <tr bgcolor="#999999"> 
    <td valign="top" height="4" colspan="3"> 
      <div align="center"><b><font color="#000000">RUGBYRAMA</font></b></div>
    </td>
  </tr>
  <tr> 
    <td valign="top" height="4" bgcolor="#CCCCCC" colspan="3"> 
      <div align="center"><b><img src="images/rugbyrama.bmp" width="600" height="78"></b></div>
    </td>
  </tr>
  <tr> 
    <td valign="top" height="4" colspan="3"> 
      <?php $member=""; //optionnel si vous etes inscrit sur la plateforme actifpub  le parametrage se fait dans votre espace membre 
 $fichier="http://www.rugbyrama.fr/rugby/rss.xml"; 
 $limite="1";  // sujets compris entre 1 
 $limite1="5";   //  et plus  
  $aspect="1";  //  0 ou 1 (1 permet d'afficher lien + description, 0 que les liens)  
 $minute="1";  //  0 ou 1 (1 permet d'afficher date et heure, 0 pas de date et heure) 
 $sujet="1"; //  0 ou 1 (1 permet d'afficher le titre des sujets traités, 0 pas de titre )  
 $te="Geneva, Arial, sans-serif";  // Police de caractères (Verdana, arial etc...) 
 $fil_textsize="12"; // taille des liens et description 
 $title_textcolor="1F70B4"; // couleur des liens (000000 donne noir)  
 $tlien="none"; // style du lien none ou underline  
 $text_textcolor="000000";  // couleur description (000000 donne noir) 
 $frame_color="FED6DC"; // couleur arrière plan (FFFFFF donne blanc) 
 $content="1"; // 0 ou 1 comme paramètre optionnel, 1  format html,  0  format texte 
 $extract="";  // laisser vide ou indiquez le nombre de caractères que vous souhaitez garder dans le corps du flux 
 $cache="15"; // gestion du cache exprimée en minutes - en fonction de la fréquence de mise à jour 
  $fichier="http://www.actifpub.com/rss.php?fichier_AP_=$fichier&limite_AP_=$limite&limite1_AP_=$limite1&fil_textsize_AP_=$fil_textsize&text_textcolor_AP_=$text_textcolor&title_textcolor_AP_=$title_textcolor&frame_color_AP_=$frame_color&te_AP_=$te&aspect_AP_=$aspect&minute_AP_=$minute&sujet_AP_=$sujet&content_AP_=$content&tlien_AP_=$tlien&cache_AP_=$cache&extract_AP_=$extract&member_AP_=$member";  
 
 $fichier=str_replace(" ","+",$fichier); 
  $ch = curl_init();  
 curl_setopt ($ch, CURLOPT_URL, "$fichier"); 
 curl_setopt($ch, CURLOPT_HEADER, 0); 
 curl_setopt($ch, CURLOPT_USERAGENT, $useragent); 
 curl_setopt ($ch, CURLOPT_CONNECTTIMEOUT,7); 
 curl_setopt ($ch, CURLOPT_TIMEOUT,25); 
 curl_setopt($ch, CURLOPT_RETURNTRANSFER,1); 
 $affiche_contenu=curl_exec($ch); 
 curl_close ($ch); 
 echo  $affiche_contenu;  ?>
      <b><a name="4"></a></b> </td>
  </tr>
  <tr bgcolor="#FFFFFF"> 
    <td valign="top" height="4" colspan="3">
      <div align="right"><font size="1"><a href="#0">Retour haut de page</a></font> 
      </div>
    </td>
  </tr>
  <tr bgcolor="#999999"> 
    <td valign="top" height="8" colspan="3"> 
      <div align="center"><b><font color="#000000">L 'EQUIPE</font></b></div>
    </td>
  </tr>
  <tr> 
    <td valign="top" bgcolor="#CCCCCC" height="2" colspan="3"> 
      <div align="center"><b><img src="images/equipe.bmp" width="600" height="78"></b></div>
    </td>
  </tr>
  <tr> 
    <td valign="top" height="2" colspan="3"> 
      <p> 
        <?php   $member=""; //optionnel si vous etes inscrit sur la plateforme actifpub  le parametrage se fait dans votre espace membre 
 $fichier="http://www.lequipe.fr/rss/actu_rss_Rugby.xml"; 
 $limite="1";  // sujets compris entre 1 
 $limite1="5";   //  et plus  
  $aspect="0";  //  0 ou 1 (1 permet d'afficher lien + description, 0 que les liens)  
 $minute="1";  //  0 ou 1 (1 permet d'afficher date et heure, 0 pas de date et heure) 
 $sujet="1"; //  0 ou 1 (1 permet d'afficher le titre des sujets traités, 0 pas de titre )  
 $te="Geneva, Arial, sans-serif";  // Police de caractères (Verdana, arial etc...) 
 $fil_textsize="11"; // taille des liens et description 
 $title_textcolor="1F70B4"; // couleur des liens (000000 donne noir)  
 $tlien="none"; // style du lien none ou underline  
 $text_textcolor="000000";  // couleur description (000000 donne noir) 
 $frame_color="FFFFFF"; // couleur arrière plan (FFFFFF donne blanc) 
 $content="0"; // 0 ou 1 comme paramètre optionnel, 1  format html,  0  format texte 
 $extract="";  // laisser vide ou indiquez le nombre de caractères que vous souhaitez garder dans le corps du flux 
 $cache="15"; // gestion du cache exprimée en minutes - en fonction de la fréquence de mise à jour 
  $fichier="http://www.actifpub.com/rss.php?fichier_AP_=$fichier&limite_AP_=$limite&limite1_AP_=$limite1&fil_textsize_AP_=$fil_textsize&text_textcolor_AP_=$text_textcolor&title_textcolor_AP_=$title_textcolor&frame_color_AP_=$frame_color&te_AP_=$te&aspect_AP_=$aspect&minute_AP_=$minute&sujet_AP_=$sujet&content_AP_=$content&tlien_AP_=$tlien&cache_AP_=$cache&extract_AP_=$extract&member_AP_=$member";  
 
 $fichier=str_replace(" ","+",$fichier); 
  $ch = curl_init();  
 curl_setopt ($ch, CURLOPT_URL, "$fichier"); 
 curl_setopt($ch, CURLOPT_HEADER, 0); 
 curl_setopt($ch, CURLOPT_USERAGENT, $useragent); 
 curl_setopt ($ch, CURLOPT_CONNECTTIMEOUT,7); 
 curl_setopt ($ch, CURLOPT_TIMEOUT,25); 
 curl_setopt($ch, CURLOPT_RETURNTRANSFER,1); 
 $affiche_contenu=curl_exec($ch); 
 curl_close ($ch); 
 echo  $affiche_contenu;    ?>
    </td>
  </tr>
  <tr>
    <td valign="top" bgcolor="#FFFFFF" colspan="3">
      <div align="right"><font size="1"><a href="#0">Retour haut de page</a></font></div>
    </td>
  </tr>
  <tr> 
    <td valign="top" bgcolor="#FFFFFF" colspan="3"> 
      <?php
    // On inclut le haut de la page
    include("pub2.php");
    ?>
      <b><a name="5"></a></b></td>
  </tr>
  <tr> 
    <td valign="top" colspan="3" height="19">
      <div align="center"><b><font color="#000000">LE RUGBYNISTERE</font></b></div>
    </td>
  </tr>
  <tr> 
    <td height="2" bgcolor="#CCCCCC" colspan="3"> 
      <div align="center"><b><img src="images/rugbynistere.bmp" width="600" height="78"></b></div>
    </td>
  </tr>
  <tr> 
    <td height="16" colspan="3"> 
      <?php $member=""; //optionnel si vous etes inscrit sur la plateforme actifpub  le parametrage se fait dans votre espace membre 
 $fichier="http://www.lerugbynistere.fr/rss.php"; 
 $limite="1";  // sujets compris entre 1 
 $limite1="2";   //  et plus  
  $aspect="1";  //  0 ou 1 (1 permet d'afficher lien + description, 0 que les liens)  
 $minute="1";  //  0 ou 1 (1 permet d'afficher date et heure, 0 pas de date et heure) 
 $sujet="1"; //  0 ou 1 (1 permet d'afficher le titre des sujets traités, 0 pas de titre )  
 $te="Geneva, Arial, sans-serif";  // Police de caractères (Verdana, arial etc...) 
 $fil_textsize="12"; // taille des liens et description 
 $title_textcolor="0066FF"; // couleur des liens (000000 donne noir)  
 $tlien="0066FF"; // style du lien none ou underline  
 $text_textcolor="000000";  // couleur description (000000 donne noir) 
 $frame_color="CC99FF"; // couleur arrière plan (FFFFFF donne blanc) 
 $content="1"; // 0 ou 1 comme paramètre optionnel, 1  format html,  0  format texte 
 $extract="10";  // laisser vide ou indiquez le nombre de caractères que vous souhaitez garder dans le corps du flux 
 $cache="15"; // gestion du cache exprimée en minutes - en fonction de la fréquence de mise à jour 
  $fichier="http://www.actifpub.com/rss.php?fichier_AP_=$fichier&limite_AP_=$limite&limite1_AP_=$limite1&fil_textsize_AP_=$fil_textsize&text_textcolor_AP_=$text_textcolor&title_textcolor_AP_=$title_textcolor&frame_color_AP_=$frame_color&te_AP_=$te&aspect_AP_=$aspect&minute_AP_=$minute&sujet_AP_=$sujet&content_AP_=$content&tlien_AP_=$tlien&cache_AP_=$cache&extract_AP_=$extract&member_AP_=$member";  
 
 $fichier=str_replace(" ","+",$fichier); 
  $ch = curl_init();  
 curl_setopt ($ch, CURLOPT_URL, "$fichier"); 
 curl_setopt($ch, CURLOPT_HEADER, 0); 
 curl_setopt($ch, CURLOPT_USERAGENT, $useragent); 
 curl_setopt ($ch, CURLOPT_CONNECTTIMEOUT,7); 
 curl_setopt ($ch, CURLOPT_TIMEOUT,25); 
 curl_setopt($ch, CURLOPT_RETURNTRANSFER,1); 
 $affiche_contenu=curl_exec($ch); 
 curl_close ($ch); 
 echo  $affiche_contenu;  ?>
    </td>
  </tr>
  <tr bgcolor="#FFFFFF"> 
    <td height="23" colspan="3"> 
      <div align="right"><font size="1"><a href="#0">Retour haut de page</a></font> 
      </div>
    </td>
  </tr>
  <tr bgcolor="#00CCFF"> 
    <td bgcolor="#CCCCCC" colspan="3" height="29">&nbsp;</td>
  </tr>
  <tr> 
    <td valign="top" colspan="3">&nbsp;</td>
  </tr>
  <tr> 
    <td valign="top" colspan="3">&nbsp;</td>
  </tr>
  <tr> 
    <td valign="top" colspan="3">&nbsp;</td>
  </tr>
</table>
 
 