<?php
echo "mail";
$to = 'onepip@free.fr';
$subject = 'Lorem Ipsum';
$from = 'francefinalesrugby@free.fr';

// Pour envoyer du courrier HTML, l'en-tête Content-type doit être défini.
$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

// Créer les en-têtes de courriel
$headers .= 'From: '.$from."\r\n".
    'Reply-To: '.$from."\r\n" .
    'X-Mailer: PHP/' . phpversion();

// Composer un simple message électronique HTML
$message = '<html><body>';
$message .= '<h1>Salut John!</h1>';
$message .= '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin efficitur, velit quis eleifend fringilla, urna lectus finibus est, ut aliquam nulla tellus vel ipsum. Pellentesque in vulputate leo, sit amet mattis sem. Sed id gravida turpis, et luctus augue. Ut vitae ipsum volutpat, cursus dui sit amet, egestas mi. Etiam bibendum, dolor in sollicitudin facilisis, diam odio ultricies ligula, sit amet rutrum diam justo at eros. Nam mollis efficitur vestibulum. Aenean mi enim, tempus et ornare et, convallis vitae odio. Aliquam tincidunt, massa hendrerit volutpat faucibus, nulla erat lobortis nulla, vitae egestas lectus est sit amet nibh. Ut pretium ligula non risus sollicitudin, porta laoreet sem viverra. Praesent vulputate purus massa, vitae luctus nunc rutrum quis. Vestibulum dignissim semper urna, in rhoncus tortor. Quisque volutpat massa nisl, sit amet elementum nibh lobortis id. Vestibulum mollis leo ex, non aliquam risus lobortis a.</p>';
$message .= '</body></html>';

// Envoi d'email
if(mail($to, $subject, $message, $headers)){
    echo 'Votre message a été envoyé avec succès.';
} else{
    echo 'Impossible d\'envoyer des courriels. Veuillez réessayer.';
}
?>