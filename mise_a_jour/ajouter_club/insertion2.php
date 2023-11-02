<b></b><?php
  //connection au serveur
  $cnx = mysql_connect( "sql.franceserv.fr", "onepip-france", "lavelan09" ) ;
 
  //sélection de la base de données:
  $db  = mysql_select_db( "onepip-france-db1" ) ;
 
  //récupération des valeurs des champs:
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
 
 
 
  //création de la requête SQL:
  $sql = "INSERT  INTO bdclubs (id, nom_1, sigle, siglecomite, comite, code, logo, url, url100_100, url200_200)
            VALUES ( '$id', '$nom', '$club_complet', '$comite', '$siglecomite', '$id', '$logo', '$small','$medium', '$large') " ;
 
  
  //exécution de la requête SQL:
  $requete = mysql_query($sql, $cnx) or die( mysql_error() ) ;
  

  //affichage des résultats, pour savoir si l'insertion a marchée:
  if($requete)
  {
    echo("L'insertion dans <strong> bdclubs </strong>a été correctement effectuée <br/>") ;
	echo "$id.gif";

  }
  else
  {
    echo("L'insertion dans</strong> bdclubs</strong> à échouée<br/>") ;
  }
?>





<?php
  //connection au serveur
  $cnx = mysql_connect( "sql.franceserv.fr", "onepip-france", "lavelan09" ) ;
 
  //sélection de la base de données:
  $db  = mysql_select_db( "onepip-france-db1" ) ;
 
  //récupération des valeurs des champs:
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
 
 
 

//création de la requête SQL:
  $sql = "INSERT  INTO bdsaisons (id, nom_1, code_bdsaison, siglecomite, terr_2013)      
            VALUES ( '$id','$nom', '$id', '$siglecomite', '$division')  " ;            

 


//exécution de la requête SQL:
  $requete = mysql_query($sql, $cnx) or die( mysql_error() ) ;
  
  

  
  
  //affichage des résultats, pour savoir si l'insertion a marchée:
  if($requete)
  {
    echo("L'insertion dans<strong> bdsaisons</strong> a été correctement effectuée <br/>") ;
  }
  else
  {
    echo("L'insertion dans<strong> bdsaisons</strong> à échouée <br/> ") ;
  }
?>







<?php
  //connection au serveur
  $cnx = mysql_connect( "sql.franceserv.fr", "onepip-france", "lavelan09" ) ;
 
  //sélection de la base de données:
  $db  = mysql_select_db( "onepip-france-db1" ) ;
 
  //récupération des valeurs des champs:
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
 
 
 

//création de la requête SQL:
  $sql = "INSERT  INTO infosclub (id, club, club2, A1615)      
            VALUES ( '$id','$nom', '$club_complet', '$comite')  " ;            

//exécution de la requête SQL:
  $requete = mysql_query($sql, $cnx) or die( mysql_error() ) ;
  
  
  
  
  
  //affichage des résultats, pour savoir si l'insertion a marchée:
  if($requete)
  {
    echo("L'insertion dans<strong> infosclub </strong>a été correctement effectuée <br/> ") ;
  }
  else
  {
    echo("L'insertion dans<strong> infosclub</strong> à échouée <br/> ") ;
  }
?>