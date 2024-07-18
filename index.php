<?php
    $to = "roby.messina02@gmail.com";
    $subject = "Nouvelle visite sur votre site web";
    $message = "Un visiteur vient d'accéder à votre site web.";
    $headers = "From: webmaster@votresite.com" . "\r\n" .
        "Reply-To: webmaster@robertomessina.github.io" . "\r\n" .
        "X-Mailer: PHP/" . phpversion();
    mail($to, $subject, $message, $headers);
?>