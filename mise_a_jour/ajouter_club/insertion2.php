<b></b><?php
  //connection au serveur
  $cnx = mysql_connect( "sql.franceserv.fr", "onepip-france", "lavelan09" ) ;
 
  //s�lection de la base de donn�es:
  $db  = mysql_select_db( "onepip-france-db1" ) ;
 
  //r�cup�ration des valeurs des champs:
  //id:
  $id     = $_POST["id"] ;
  //nom:
  $nom = $_POST["nom_1"] ;
  //club:
  $club_complet = $_POST["sigle"] ;
  //comite:
  $comite        = $_POST["comite"] ;
  //siglecomite:
  $siglecomite       = $_POST["siglecomite"] ;
 //divisiion
  $division       = $_POST["division"] ;
 	//logo
 	 $logo    =  ' http://francefinalesrugby.franceserv.com/pageclub00.php?champion=';
	//image_25_25
	$small = 'http://francefinalesrugby.franceserv.com/images/blasons25_25/.gif';
	//image_100_100
	$medium = ' http://francefinalesrugby.franceserv.com/images/blasons100_100/echo "$id.gif"';
	 //image_200_200
	$large =' http://francefinalesrugby.franceserv.com/images/blasons200_200/$id.gif';
 
 
 
  //cr�ation de la requ�te SQL:
  $sql = "INSERT  INTO bdclubs (id, nom_1, sigle, siglecomite, comite, code, logo, url, url100_100, url200_200)
            VALUES ( '$id', '$nom', '$club_complet', '$comite', '$siglecomite', '$id', '$logo', '$small','$medium', '$large') " ;
 
  
  //ex�cution de la requ�te SQL:
  $requete = mysql_query($sql, $cnx) or die( mysql_error() ) ;
  

  //affichage des r�sultats, pour savoir si l'insertion a march�e:
  if($requete)
  {
    echo("L'insertion dans <strong> bdclubs </strong>a �t� correctement effectu�e <br/>") ;
	echo "$id.gif";

  }
  else
  {
    echo("L'insertion dans</strong> bdclubs</strong> � �chou�e<br/>") ;
  }
?>





<?php
  //connection au serveur
  $cnx = mysql_connect( "sql.franceserv.fr", "onepip-france", "lavelan09" ) ;
 
  //s�lection de la base de donn�es:
  $db  = mysql_select_db( "onepip-france-db1" ) ;
 
  //r�cup�ration des valeurs des champs:
  //id:
  $id    		 = $_POST["id"] ;
  //nom:
  $nom 	  	 	= $_POST["nom_1"] ;
  //club:
  $club_complet  = $_POST["sigle"] ;
  //comite:
  $comite        = $_POST["comite"] ;
  //siglecomite:
  $siglecomite   = $_POST["siglecomite"] ;
 //division
  $division      = $_POST["division"] ;
 
 
 

//cr�ation de la requ�te SQL:
  $sql = "INSERT  INTO bdsaisons (id, nom_1, code_bdsaison, siglecomite, terr_2013)      
            VALUES ( '$id','$nom', '$id', '$siglecomite', '$division')  " ;            

 


//ex�cution de la requ�te SQL:
  $requete = mysql_query($sql, $cnx) or die( mysql_error() ) ;
  
  

  
  
  //affichage des r�sultats, pour savoir si l'insertion a march�e:
  if($requete)
  {
    echo("L'insertion dans<strong> bdsaisons</strong> a �t� correctement effectu�e <br/>") ;
  }
  else
  {
    echo("L'insertion dans<strong> bdsaisons</strong> � �chou�e <br/> ") ;
  }
?>







<?php
  //connection au serveur
  $cnx = mysql_connect( "sql.franceserv.fr", "onepip-france", "lavelan09" ) ;
 
  //s�lection de la base de donn�es:
  $db  = mysql_select_db( "onepip-france-db1" ) ;
 
  //r�cup�ration des valeurs des champs:
  //id:
  $id    		 = $_POST["id"] ;
  //nom:
  $nom 	  	 	= $_POST["nom_1"] ;
  //club:
  $club_complet  = $_POST["sigle"] ;
  //comite:
  $comite        = $_POST["comite"] ;
  //siglecomite:
  $siglecomite   = $_POST["siglecomite"] ;
 //division
  $division      = $_POST["division"] ;
 
 
 

//cr�ation de la requ�te SQL:
  $sql = "INSERT  INTO infosclub (id, club, club2, A1615)      
            VALUES ( '$id','$nom', '$club_complet', '$comite')  " ;            

//ex�cution de la requ�te SQL:
  $requete = mysql_query($sql, $cnx) or die( mysql_error() ) ;
  
  
  
  
  
  //affichage des r�sultats, pour savoir si l'insertion a march�e:
  if($requete)
  {
    echo("L'insertion dans<strong> infosclub </strong>a �t� correctement effectu�e <br/> ") ;
  }
  else
  {
    echo("L'insertion dans<strong> infosclub</strong> � �chou�e <br/> ") ;
  }
?>