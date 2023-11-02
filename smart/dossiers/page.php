
<?php
if (isset($_GET['choix'])) $choix = $_GET['choix'];
if (isset($_GET['page'])) $page = $_GET['page'];
if (isset($_GET['lettre'])) $lettre = $_GET['lettre'];
//echo $choix;
//echo $page; 
//echo $lettre;
if ($page == 'score')
$titre='Evolution des scores';
elseif ($page == 'division')
$titre='Evolution des divisions';
elseif ($page == 'video')
$titre='Quelques vidéos';
elseif ($page == 'lexique')
$titre='Mots et bons mots';
elseif ($page == 'brennus')
$titre='Histoire du Brennus';


?>
<html>
<head>
<title>Untitled Document</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link rel="stylesheet" type="text/css" href="../menu_smart2.css">  
<link type="text/css" rel="stylesheet" href="../10.css"> 
<link type="text/css" rel="stylesheet" href="../../dossiers/dossiers.css">
<!--<link type="text/css" rel="stylesheet" href="../paramTiroir.css">-->
<meta name=viewport content="width=device-width, initial-scale=1">
</head>

<body bgcolor="#CCCCCC">
	  <table width="99%" border="1">
		<tr> 
	      <td width= "5%"class="h22" height="20"><a href="sommaire.php"><img src="../../images/smart/flecheGauche.jpg" width="27" height="20"></a></td>
	      <td width= "95%"class="h22" height="20"> France Finales Rugby </td>
		</tr>
		
	</table>
	<p>
      <?php
if ($page=="video")
   {
	require 'video/sommaire.php';
	if ($choix == "pla")
		require '../../dossiers/video/plaquages.php';
	elseif ($choix == "ess")
		require '../../dossiers/video/essais.php';
	elseif ($choix == "bag")
		require '../../dossiers/video/bagarres.php';
	elseif ($choix == "ins")
		require '../../dossiers/video/insolites.php';
	elseif ($choix == "cau")
		require '../../dossiers/video/causeries.php';
   }
elseif ($page=="score")
{
	require '../../dossiers/scores/evolutionScores.php';
}
elseif ($page=="division")
{
	require '../../dossiers/divisions/evolutionDivisions.php';
}
//****** histoire Brennus *******
elseif ($page=="brennus")
{
	require 'brennus/haut.php';
	require '../../dossiers/brennus/lebouclier.php';
	
}
//****** Lexique *******
elseif ($page=="lexique1")
{
	
	require 'lexique/sommaire.php';
	require 'lexique/tabDesLettres.php';

    if ($lettre==1)
   	{
    include("../../dossiers/lexique/a.htm");
	}
	elseif ($lettre==2)
	{
	include("../../dossiers/lexique/b.htm");
    }
	elseif ($lettre==3)
	{
	include("../../dossiers/lexique/c.htm");
    }
	elseif ($lettre==4)
	{
	include("../../dossiers/lexique/d.htm");
    }
	elseif ($lettre==5)
	{
	include("../../dossiers/lexique/e.htm");
    }
	elseif ($lettre==6)
	{
	include("../../dossiers/lexique/f.htm");
    }
	elseif ($lettre==7)
	{
	include("../../dossiers/lexique/g.htm");
    }
	elseif ($lettre==8)
	{
	include("../../dossiers/lexique/h.htm");
    }
	elseif ($lettre==9)	
		{
	include("../../dossiers/lexique/i.htm");
    }
	elseif ($lettre==10)
	{
	include("../../dossiers/lexique/j.htm");
    }
	elseif ($lettre==11)
	{
	include("../../dossiers/lexique/k.htm");
    }
	elseif ($lettre==12)
	{
	include("../../dossiers/lexique/l.htm");
    }
	elseif ($lettre==13)
	{
	include("../../dossiers/lexique/m.htm");
    }
	elseif ($lettre==14)
	{
	include("../../dossiers/lexique/n.htm");
    }
	elseif ($lettre==15)
	{
	include("../../dossiers/lexique/o.htm");
    }
	elseif ($lettre==16)
	{
	include("../../dossiers/lexique/p.htm");
    }
	elseif ($lettre==17)
	{
	include("../../dossiers/lexique/q.htm");
    }
	elseif ($lettre==18)
	{
	include("r.htm");
    }
	elseif ($lettre==19)
	{
	include("../../dossiers/lexique/s.htm");
    }
	elseif ($lettre==20)
	{
	include("../../dossiers/lexique/t.htm");
    }
	elseif ($lettre==21)
	{
	include("../../dossiers/lexique/u.htm");
    }
	elseif ($lettre==22)
	{
	include("../../dossiers/lexique/v.htm");
    }
	elseif ($lettre==23)
	{
	include("../../dossiers/lexique/w.htm");
    }
	elseif ($lettre==24)
	{
	include("../../dossiers/lexique/xyz.htm");
    }
	else
	{
	include("../../dossiers/lexique/0.htm");
    }
}	
//****** Lexique2 => Phrase célèbres *******
elseif ($page=="lexique2")
{
	
	require 'lexique/sommaire.php';
	include("../../dossiers/lexique/phrases_celebres.htm");
}
//****** Lexique3 => Citations *******
elseif ($page=="lexique3")
{
	
	require 'lexique/sommaire.php';
	include("../../dossiers/lexique/citation.htm");
}
//****** Lexique4 => Expressions *******
elseif ($page=="lexique4")
{
	
	require 'lexique/sommaire.php';
	include("../../dossiers/lexique/expr_mediatiques.htm");
}
//****** Lexique5 => chansons*******
elseif ($page=="lexique5")
{
	
	require 'lexique/sommaire.php';
	include("../../dossiers/lexique/chansons.htm");
}
//****** Lexique6 => Hymnes *******
elseif ($page=="lexique6")
{
	
	require 'lexique/sommaire.php';
include("../../dossiers/lexique/hymnes.htm");
}
	
require '../../smart/bas.php';	
	
	
	?>
    </p>



</body>
</html>
