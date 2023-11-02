
<head>
<title>Untitled Document</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
</head>
<body>
<div align="left"><font color="#666666"></font> <font face="Arial, Helvetica, sans-serif"><b> 
  <?php   $member=""; //optionnel si vous etes inscrit sur la plateforme actifpub  le parametrage se fait dans votre espace membre 
 $fichier="http://www.midilibre.fr/sport/rugby/rss.xml"; 
 $limite="1";  // sujets compris entre 1 
 $limite1="15";   //  et plus  
 $aspect="0";  //  0 ou 1 (1 permet d'afficher lien + description, 0 que les liens)  
 $minute="1";  //  0 ou 1 (1 permet d'afficher date et heure, 0 pas de date et heure) 
 $sujet="1"; //  0 ou 1 (1 permet d'afficher le titre des sujets traités, 0 pas de titre )  
 $te="Arial, Helvetica, sans-serif";  // Police de caractères (Verdana, arial etc...) 
 $fil_textsize="15"; // taille des liens et description 
 $title_textcolor="FF6600"; // couleur des liens (000000 donne noir)  
 $tlien="none"; // style du lien none ou underline  
 $text_textcolor="006699";  // couleur description (000000 donne noir) 
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
  </b></font> </div>
</body>