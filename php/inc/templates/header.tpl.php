<!DOCTYPE html>
<html lang="fr">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
        <meta content="pierre-henri kocan" name="description">
        <meta content="pierre-henri kocan" name="keywords">

		<link rel="stylesheet" href="php/public/css/reset.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
        <link rel="stylesheet" href="php/public/css/style.css">
		<link rel="shortcut icon" href="php/public/images/favicon.ico" type="image/x-icon">
        <script src="https://www.google.com/recaptcha/api.js"></script>

		<title>CV Pierre-Henri Kocan</title>
	</head>

	<body>
            <nav class="navbar navbar-expand-lg">
                <div class="container-fluid">
                    <a href="./"><img class="nav-avatar" src="php/public/images/avatar-navbar.png" alt="avatar-phk"></a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link <?= ( $pageToDisplay == 'home' ) ? 'active' : '' ; ?>" href="./">Accueil</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link <?= ( $pageToDisplay == 'experience' ) ? 'active' : '' ; ?>" href="index.php?page=experience">Expériences</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link <?= ( $pageToDisplay == 'formation' ) ? 'active' : '' ; ?>" href="index.php?page=formation">Formations</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link <?= ( $pageToDisplay == 'technology' ) ? 'active' : '' ; ?>" href="index.php?page=technology">Technologies</a>
                            </li><li class="nav-item">
                                <a class="nav-link <?= ( $pageToDisplay == 'realisation' ) ? 'active' : '' ; ?>" href="index.php?page=realisation">Réalisations</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link <?= ( $pageToDisplay == 'information' ) ? 'active' : '' ; ?>" href="index.php?page=information">Informations</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link <?= ( $pageToDisplay == 'contact' ) ? 'active' : '' ; ?>" href="index.php?page=contact">Contact</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>

            <div>
                <div class="wave"></div>
                <div class="wave"></div>
                <div class="wave"></div>
            </div>

            