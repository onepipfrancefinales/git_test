<?php
header('Cache-Control: no-cache');
$imgs = array(
                '/images/banniere_haut/stade1.jpg',
                '/images/banniere_haut/stade2.jpg',
                '/images/banniere_haut/stade3.jpg',
                '/images/banniere_haut/stade5.jpg',
				'/images/banniere_haut/stade4.jpg'
        );
$img_id = mt_rand(0,(count($imgs)-1));
header('Location: '.$imgs[$img_id]);
?>