<!DOCTYPE html>
<html lang="fr">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="shortcut icon" href="public/images/favicon.ico" type="image/x-icon">

		<title>CV Kocan</title>
	</head>

<body>
    <div>
        <div class="wave"></div>
        <div class="wave"></div>
        <div class="wave"></div>
    </div>

    <form class="contact" method="post">
        <div class="contact-email">    
            <label>Votre email</label>
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
</body>

<?php

$to = $_POST['email'];
$subject = 'Accusé de réception : ' . $_POST['subject'];
$message = 'Merci pour votre message.' . PHP_EOL . 'Je reviens vers vous dans les meilleurs délais concernant votre message : ' . PHP_EOL . PHP_EOL . $_POST['message'];
$headers = 'From: contact@pierre-henri-kocan.com' . "\r\n" . 'Bcc: contact@pierre-henri-kocan.com';

    if (isset($_POST['message'])) {
        $retour = mail($to, mb_encode_mimeheader($subject), $message, $headers);

        if($retour) {
            echo '<p>Votre message a bien été envoyé.</p>';
        }
        else {
            echo '<p>Votre message n\'a pas pu être envoyé.</p>';
        }
    }
?> 

<style>

body {
  display: flex;
  flex-direction: column;
  align-items: center;
  margin: auto;
  overflow: auto;
  background: linear-gradient(315deg, rgba(101,0,94,1) 3%, rgba(60,132,206,1) 38%, rgba(48,238,226,1) 68%, rgb(191, 117, 255) 98%);
  animation: gradient 15s ease infinite;
  background-size: 400% 400%;
  background-attachment: fixed;
  width: auto;
  font-family: 'Quicksand', sans-serif;
}

.navbar {
    background-color: rgba(229, 229, 229, 0.4);
    padding: 0;
    width: 100%;
}

.nav-avatar {
    width: 5rem;
    margin-right: 1rem;
}

.navbar-collapse {
    justify-content: space-around;
}

.nav-link {
    color: #fff;
    font-size: 1.2rem;
    margin: 0 2rem;
}

.navbar-nav .nav-link.active {
    color: #fff;
    text-decoration: underline;
}

.nav-link:hover{
    color: #fff;
    text-decoration: underline;
}

.nav-link-home {
    color: #fff;
    font-size: 1.2rem;
    text-decoration: none;
}

@keyframes gradient {
  0% {
      background-position: 0% 0%;
  }
  50% {
      background-position: 100% 100%;
  }
  100% {
      background-position: 0% 0%;
  }
}

.wave {
  background: rgb(255 255 255 / 25%);
  border-radius: 1000% 1000% 0 0;
  position: fixed;
  width: 200%;
  height: 12em;
  animation: wave 10s -3s linear infinite;
  transform: translate3d(0, 0, 0);
  opacity: 0.8;
  bottom: 0;
  left: 0;
  z-index: -1;
}
  
.wave:nth-of-type(2) {
  bottom: -1.25em;
  animation: wave 18s linear reverse infinite;
  opacity: 0.8;
}

.wave:nth-of-type(3) {
  bottom: -2.5em;
  animation: wave 20s -1s reverse infinite;
  opacity: 0.9;
}

@keyframes wave {
  2% {
      transform: translateX(1);
  }

  25% {
      transform: translateX(-25%);
  }

  50% {
      transform: translateX(-50%);
  }

  75% {
      transform: translateX(-25%);
  }

  100% {
      transform: translateX(1);
  }
}

.contact {
  display: flex;
  width: 50%;
  margin: 2rem auto;
  flex-direction: column;
  flex-wrap: wrap;
  align-content: center;
  align-items: center;
}

.contact-email, .contact-message, .contact-subject {
  display: flex;
  width: 100%;
  flex-direction: column;
  align-items: center;
}

.contact-email-area {
  width: 50%;
  margin: 1rem auto 3rem auto;
  padding: 1rem;
  font-size: 1.5rem;
  border-radius: 0.6rem;
  border: 1px solid rgba(0, 0, 0, 0.5);
  background-color: #fff;
  box-shadow: 0 0 1.5rem 0 rgba(20,27,202,.17)
}

.contact-subject-area {
  width: 50%;
  margin: 1rem auto 3rem auto;
  padding: 1rem;
  font-size: 1.5rem;
  border-radius: 0.6rem;
  border: 1px solid rgba(0, 0, 0, 0.5);
  background-color: #fff;
  box-shadow: 0 0 1.5rem 0 rgba(20,27,202,.17)
}

.contact-message-area {
  width: 90%;
  height: 15rem;
  margin: 1rem auto;
  padding: 1rem;
  font-size: 1.5rem;
  border-radius: 0.6rem;
  border: 1px solid rgba(0, 0, 0, 0.5);
  background-color: #fff;
  box-shadow: 0 0 1.5rem 0 rgba(20,27,202,.17)
}

.contact-message-area:hover, .contact-email-area:hover {
  border: none;
}

.contact-email label, .contact-message label, .contact-subject label {
  font-size: 2rem;
  font-weight: 600;
  color: #fff;
}

.contact-submit-button {
  margin: 1rem;
  padding: 0.5rem 2rem;
  border-radius: 0.6rem;
  font-size: 1.5rem;
  border: 1px solid rgba(3, 81, 22, 0.3);
  background: linear-gradient(-45deg, #27b88d 0%, #22dd73 100%);
  box-shadow: 0 0 1.5rem 0 rgba(20,27,202,.17);
  color: #fff;
  font-weight: 600;
}

.contact-submit-button:hover {
  border: none;
}
</style>