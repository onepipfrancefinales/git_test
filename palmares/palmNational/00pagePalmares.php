<?php 
if (isset ($_GET['division'])) $division = $_GET['division']; else $division='+';
if (isset ($nomDivision)) $nomDivision = $nomDivision; else $nomDivision='*';
if (isset ($base)) $base = $base; else $base='-';

?>
<!DOCTYPE html>  
<head>
<meta name="description"
content="">
<meta name="keywords"
content="Presentation de la competititon et de tous les champions de France 1re Serie. Palmares complet de la 1re Serie.">
<meta name="classification" content="Sport,Rugby">
<meta name="resource-type" content="document">
<meta name="copyright" content="Comite Midi Pyrenees de Rugby">
<meta name="author" content="Equipe Onepip">
<meta name="robots" content="All">
<title>Champions de FRANCE </title>

<link type="text/css" rel="stylesheet" href="palmares.css"/> 
<link type="text/css" rel="stylesheet" href="../../ligne1.css"/>
<link type="text/css" rel="stylesheet" href="../../formulaireDG.css"/>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/> 
</head>

<body>
<table align="center">
  <tr bordercolor="#FFFFFF"> 
      <td colspan="3" > 
        <table width="1100" border="2" bordercolor="#000000" >
          <tr> 
          	<td > 
				<div >
					<?php  
					if($division==110)
					{
					?>
					<img src="../../images/brennusGrand.jpg" width="1100" height="150">
					<?php
					}
					else
					{
					include("../../images/page_image_al.php");
					}
					?>
				</div>
            </td>
          </tr>
        </table>
      </td>
    </tr>
    <tr  bgcolor="#000000">
      	<td colspan="3"><font color="#FFFFFF">
			<?php   include("../../01ligne.php");  ?>
			</font>
		</td>
    </tr>
    <tr  bgcolor="#FFFFFF"> 
      <td colspan="3">
        <?php //   include("../../pub/pub12.php"); ?>
       </td>
    </tr>
    <tr  bgcolor="#000000"> 
      
    <td width="225" bgcolor="#006699" text="#ffffff" valign="top"  > 
      <?php  include("../../01gauche.php"); ?>
      </td>
      	
    <td bgcolor="#FFFFFF"  width="650" valign="top"> 
      <?php  
	  if ($division==110)
	  	require ("top14.php");
	  
	
	  else
	   	require("palmares.php");?>
    </td>
      <td bgcolor="#006699" width="225" valign="top"> 
        <p> 
          <?php include("../../00droite.php"); ?>
        </p>
      </td>
    </tr>
    <tr > 
      <th bgcolor="#FFFFFF" colspan="3"  > 
         <table width=100% border="1" bordercolor="#006699" >
            <tr> 
              <td>                
                <?php  include("../../comitebas.php");?>               
              </td>
            </tr>
            <tr> 
              <td> 
                <?php  include("../../pub/pub1.php");?>
              </td>
            </tr>
            <tr> 
              <td> 
                  <?php  include("../../bas.php");?>
              </td>
            </tr>
         </table>
  </table>

		<footer>
			<div id="9129-5"><script src="//ads.themoneytizer.com/s/gen.js?type=5">
			</script><script src="//ads.themoneytizer.com/s/requestform.js?siteId=9129&formatId=5" >
			</script></div>
		</footer>
	</body>
</html>