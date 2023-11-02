<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr-FR" lang="fr-FR">
<head>
<!-- chargement des images en rollover-->
 
<SCRIPT LANGUAGE="JavaScript"> 
if(document.images)
{
menu_tab_1 = new Image;
menu_tab_1 = "/images/menu_tab_1_over.gif";
menu_tab_2 = new Image;
menu_tab_2 = "/images/menu_tab_2_over.gif";
menu_tab_3 = new Image;
menu_tab_3 = "/images/menu_tab_3_over.gif";
menu_tab_4 = new Image;
menu_tab_4 = "/images/menu_tab_4_over.gif";
menu_tab_5 = new Image;
menu_tab_5 = "/images/menu_tab_5_over.gif";
menu_tab_6 = new Image;
menu_tab_6 = "/images/menu_tab_6_over.gif";
menu_tab_7 = new Image;
menu_tab_7 = "/images/menu_tab_7_over.gif";
menu_tab_8 = new Image;
menu_tab_8 = "/images/menu_tab_8_over.gif";
perso_0 = new Image;
perso_0 = "/images/cbperso0.gif";
perso_1 = new Image;
perso_1 = "/images/cbperso1.gif";
 
wait = new Image;
wait = "/images/wait.gif";
 
function favoris() {
       if ( navigator.appName != 'Microsoft Internet Explorer' ){
           window.sidebar.addPanel(document.title, location.href,"");
       }
       else {
           window.external.AddFavorite(location.href, document.title);
       }
 }
}
 
function chgRB(){
  CHKB = document.getElementById('newRB').getElementsByTagName('input');
  for(i=0; i < CHKB.length; i++){
    if(CHKB[i].type == "radio"){
      IMG = document.createElement('img');
      CHKB[i].parentNode.insertBefore(IMG, CHKB[i]);
      IMG.src = "/images/cbperso0.gif";
 
      IMG.id = 'img'+CHKB[i].id;
      IMG.relation = CHKB[i].name;
 
      if(CHKB[i].checked  == true) IMG.src = "/images/cbperso1.gif";
      if(CHKB[i].disabled == true) IMG.src = "/images/cbperso2.gif";
      else{ // Les comportements de changement d'état ne sont appliqués que si la checkbox est cliquable !
        CHKB[i].onchange = function(){
 
          IMG = document.getElementById('newRB').getElementsByTagName('img');
          for(i=0; i < IMG.length; i++){
            if(IMG[i].relation != this.name) continue;
            if(IMG[i].src.indexOf('/images/cbperso2.gif') != -1) continue;
            if(IMG[i].id == 'img'+this.id) IMG[i].src = '/images/cbperso1.gif';
            else IMG[i].src = '/images/cbperso0.gif'
          }
 
        }
        if(!window.sidebar){
          CHKB[i].parentNode.onclick = function(){
            CHK = this.getElementsByTagName('input')[0];
            CHK.checked = (CHK.checked == true) ? false : true;
            CHK.onchange()
          }
        }
      }
      CHKB[i].style.visibility = "hidden";
      CHKB[i].style.position   = "absolute";
    }
  }
}
 
</SCRIPT>
<script language="javascript"> 


<script language="javascript"> 
//=============================================================================================
//	FONCTION	:	display
//	DATE		: 	15/10/2007
//	OBJET		: 	Affiche du calque du lien direct
//=============================================================================================
function display(calque)
{
document.getElementById(calque).style.visibility=document.getElementById(calque).style.visibility=="hidden"?"visible":"hidden";
 
} 
 
</script>

 

                            
    <title>FFR / onepip / Compétitions - FF - Rugby</title>
 
 
 
</head>
 
<body>
<div style="display:none;"></div>
<div id="allcontent">
  <div id="columns">
    <div class="maincontent">
      <div id="leftmenu" class="zone_no_print" style="margin-right:6px;">
        <div id="leftmenu-design">
          <div style="width:170px !important;display:block;">
            <div style="margin-left:-14px;"></div>
	        <div style="margin-top:18px;"></div>
          </div>
          <div style="clear:both;margin-top:-18px;vertical-align:top;">
            <div class="recherche_compet">
              <div id="text_recherche"> </div>
		</div>
	
</div>
 
 
 
 
 
 
</div>
</div>
		    		    		   
		    				<div style="display:block;width:705px;float:left;margin-left:8px;_margin-left:-15px;">
		    		
		    
		    
		    
		    
						<div style="float:left;">
 
        
 </div>				    
 
				
		   	
						<div style="margin-left:15px;_margin-left:25px;clear:none;" class="zone_print">
			<div class="zone_print_soap">
						<div style="float:left; margin:0px 0px 0px -10px;"><form name="ffr" method="POST" action="/aaaphp/espace%20test/page%20comite.php"><input type="hidden" name="ID_COMITE_T" value="2299"><input type="hidden" name="ID_PHASE" value="20177"><input type="hidden" name="NOM_COMPETITION" value="HOT - HONNEUR - Championnat Territorial"><input type="hidden" name="ID_JOURNEE" value=""><input type="hidden" name="ID_POULE" value="24654"><input type="hidden" name="ID_CLUB" value="777"><input type="hidden" name="ID_RENCONTRE"><input type="hidden" name="ID_EQUIPE" value="94726"><input type="hidden" name="NOM_EQUIPE" value="U S PORTESIENNE"><input type="hidden" name="flag_retour"><input type="hidden" name="text_joueur" value=""><input type="hidden" name="text_joueur_prenom" value=""><input type="hidden" name="ID_CLUB_O" value=""><input type="hidden" name="text_club" value=""><input type="hidden" name="NOM_CLUB" value=""><input type="hidden" name="sans_liens" value=""><input type="hidden" name="flag_not_recherche" value="1">
                <table width="693" border="0" cellspacing="0" cellpadding="0">
                  <tr> 
                    <td style="padding:15px 3px 0px 3px;" height="89"> 
                      <table width="100%" border="0" cellspacing="0" cellpadding="0">
                        <tr height="20" bgcolor="#FFFFFF" class="text_ffr_gris"> 
                          <td class="gege" width="93%" colspan="3">&nbsp;&nbsp;<span class="lien_ffr_gris"><a href="javascript:document.ffr.ID_CLUB.value=543;document.ffr.ID_EQUIPE.value='94723';document.ffr.submit();">COQUELICOTS 
                            MONTECHOIS RUGBY</a></span></td>
                        </tr>
                        <tr height="20" bgcolor="#F4F4F4" class="text_ffr_gris"> 
                          <td class="gege" width="93%" colspan="3">&nbsp;&nbsp;<span class="lien_ffr_gris"><a href="javascript:document.ffr.ID_CLUB.value='361';document.ffr.ID_EQUIPE.value='94719';document.ffr.submit();">S 
                            A AUTERIVAIN</a></span></td>
                        </tr>
                      </table>
                    </td>
                  </tr>
                  <input name="n_poule" value="1" type="hidden">
                  <tr> 
                    <td style="padding:15px 3px 0px 3px;" height="248"> 
                      <table width="100%" border="0" cellspacing="0" cellpadding="0" height="102">
                        <tr height="20" bgcolor="#F4F4F4" class="text_ffr_gris">	
                          <td class="gege" width="0%" height="30">&nbsp;</td>
                          <td class="gege" height="30">&nbsp;&nbsp; <span class="lien_ffr_gris"><a href="javascript:document.ffr.ID_EQUIPE.value='94719';document.ffr.NOM_EQUIPE.value='S A AUTERIVAIN';document.ffr.submit();">S 
                            A AUTERIVAIN</a></span></td>
                        </tr>
                        <tr height="20" bgcolor="#FFFFFF" class="text_ffr_gris">	
                          <td class="gege" width="0%" height="23">&nbsp;</td>
                        </tr>
                        <tr height="20" bgcolor="#F4F4F4" class="text_ffr_gris">	
                          <td class="gege" width="0%" height="35">&nbsp;</td>
                        </tr>
                        <tr height="20" bgcolor="#FFFFFF" class="text_ffr_gris">	
                          <td class="gege" width="0%">&nbsp;</td>
                        </tr>
                        <tr height="20" bgcolor="#FFFFFF" class="text_ffr_gris">	
                          <td class="gege" height="2" width="0%">&nbsp;</td>
                        </tr>
                        <tr height="20" bgcolor="#F4F4F4" class="text_ffr_gris">	
                          <td class="gege" width="0%">&nbsp;</td>
                          <td class="gege">&nbsp;&nbsp; <span class="lien_ffr_gris"><a href="javascript:document.ffr.ID_EQUIPE.value='94723';document.ffr.NOM_EQUIPE.value='COQUELICOTS MONTECHOIS RUGBY';document.ffr.submit();">COQUELICOTS 
                            MONTECHOIS RUGBY</a></span></td>
                        </tr>
                      </table>
                    </td>
                  </tr>
                  <tr> 
                    <td style="padding-top:10px;">&nbsp; </td>
                  </tr>
                </table>
              </form>
            </div>
          </div>
			</div>
						   
			
			 
	
	
			
	
			<div style="clear:both;margin-left:5px;_margin-left:0px;">
			   			   
   
        
       			  	       
			
			        			        	<div style="margin-left:2px;_margin-left:0px;">
 
 
                            
                
                                                 
              	
                                            
 
              
            <div class="content-view-children">
    
                
 
 
 
 
 
            </div> 
			        			
			</div>
		</div>
		
		</div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</div>  
 
        
  </div>
</div>
 
 
  
 <hr class="hide" />
<div id="toolbar-bottom" class="zone_no_print">
  <div class="toolbar-design"></div>
</div>
 
 
 
</body>
</html>

