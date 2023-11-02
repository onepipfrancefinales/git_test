<?php
header('Cache-Control: no-cache');
$imgs = array(
                'http://francefinalesrugby.franceserv.com/images/banniere_haut/stade1.jpg',
                'http://francefinalesrugby.franceserv.com/images/banniere_haut/stade2.jpg',
                'http://francefinalesrugby.franceserv.com/images/banniere_haut/stade5.jpg',
				'http://francefinalesrugby.franceserv.com/images/banniere_haut/stade6.jpg',
				'http://francefinalesrugby.franceserv.com/images/banniere_haut/stade7.jpg',
				'http://francefinalesrugby.franceserv.com/images/banniere_haut/stade8.jpg',
				'http://francefinalesrugby.franceserv.com/images/banniere_haut/stade9.jpg',
				'http://francefinalesrugby.franceserv.com/images/banniere_haut/stade12.jpg',
				'http://francefinalesrugby.franceserv.com/images/banniere_haut/stade13.jpg',
				'http://francefinalesrugby.franceserv.com/images/banniere_haut/stade14.jpg',
	    );
$img_id = mt_rand(0,(count($imgs)-1));
header('Location: '.$imgs[$img_id]);
?>