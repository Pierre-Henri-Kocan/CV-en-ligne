<?php

$name = $_POST['name'];
$to = $_POST['email'];
$subject = 'Accusé de réception : ' . $_POST['subject'];
$message = 'Merci ' . $name . ' pour votre message.' . PHP_EOL . 'Je reviens vers vous dans les meilleurs délais concernant votre demande : ' . PHP_EOL . PHP_EOL . $_POST['message'];
$headers = 'From: contact@pierre-henri-kocan.com' . "\r\n" . 'Bcc: contact@pierre-henri-kocan.com';

    if (isset($_POST['message'])) {
        $retour = mail($to, mb_encode_mimeheader($subject), $message, $headers);

        if($retour) {
            echo '<p class="alert alert-success" role="alert">Votre message a bien été envoyé.</p>';
        }
        else {
            echo '<p class="alert alert-danger" role="alert">Votre message n\'a pas pu être envoyé.</p>';
        }
    }
?> 

<p class="contact-me">N'hésitez pas à me contacter pour toute information complémentaire.</p>

<form class="contact" method="post">

    <div class="contact-name">    
        <label>Prénom et nom</label>
        <input class="contact-name-area" type="text" name="name" placeholder="Saisissez votre prénom et votre nom" required>
    </div>

    <div class="contact-email">    
        <label>Email</label>
        <input class="contact-email-area" type="email" name="email" placeholder="Saisissez votre adresse mail" required>
    </div>

    <div class="contact-subject">    
        <label>Sujet</label>
        <input class="contact-subject-area" type="text" name="subject" placeholder="Saisissez votre sujet" required>
    </div>

    <div class="contact-message">
        <label>Message</label>
        <textarea class="contact-message-area" name="message" placeholder="Saisissez votre message" required></textarea>
    </div>

    <div class="contact-submit">
        <input class="contact-submit-button" type="submit" name="submit" value ="Envoyer">
    </div>
</form>



