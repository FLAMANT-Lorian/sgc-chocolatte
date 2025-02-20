<<?php
/*date_default_timezone_set('Europe/Brussels'); // Voir avoir la time zone Belge cra de base c'est le UTC 0, par rapport a Greenwich.
$today = date('d/m/Y H:i:s'); // Voir les formats dans la documentation de PHP (datetime) sur internet.
$title = 'Chocolatté ('.$today.')'; // Ne pas oublier les points des 2 côtés de la variables. Concaténation de chaine de caractères et de variables PHP

// single-line comment
/*
commentaire
multilignes
*/

?>!doctype html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="description" content="">
    <meta name="author" content="">

    <!--<title><?php /*echo $title; */ ?></title>-->
    <title><?= $title; ?></title>


    <!-- CSS FILES -->
    <link rel="preconnect" href="https://fonts.googleapis.com">

    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:ital,wght@0,200;0,400;0,600;0,700;1,200;1,700&display=swap"
          rel="stylesheet">

    <link href="css/bootstrap.min.css" rel="stylesheet">

    <link href="css/bootstrap-icons.css" rel="stylesheet">

    <link href="css/vegas.min.css" rel="stylesheet">

    <link href="css/tooplate-barista.css" rel="stylesheet">

    <!--

    Tooplate 2137 Barista Cafe

    https://www.tooplate.com/view/2137-barista-cafe

    Bootstrap 5 HTML CSS Template

    -->
</head>

<body>

<main>
    <nav class="navbar navbar-expand-lg">
        <!--<h2 class="hidden" style=" visibility: hidden; position: absolute; width: 0; height: 0; overflow: hidden"><?php /*= $navifation->title; */ ?></h2>-->
        <div class="container">
            <a class="navbar-brand d-flex align-items-center" href="index.html">
                <img src="images/coffee-beans.png" class="navbar-brand-image img-fluid" alt="Barista Cafe Template">
                Barista
            </a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-lg-auto">
                    <li>
                        <?php foreach ($page->navigation->links as $link): ?>
                            <?php if ($link->target): ?>
                                <a class="btn custom-btn custom-border-btn" href="<?= $link->url; ?>"
                                   target="_blank" <?= $link->title ? 'title="' . $link->title . '"' : ''; ?>>
                                    <?= $link->label; ?>
                                    <i class="bi-arrow-up-right ms-2"></i>
                                </a>
                            <?php else: ?>
                                <a class="nav-link click-scroll"
                                   title="<?= $link->title ? 'title:"' . $link->title . '"' : '' ?>"
                                   href="<?= $link->url; ?>">
                                    <?= $link->label; ?>
                                </a>
                            <?php endif; ?>
                        <?php endforeach; ?>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <?php foreach ($page->sections as $index => $section): ?>
        <?php include('./views/sections/' . $section->type . '.php') ?>
    <?php endforeach; ?>


    <footer class="site-footer">
        <div class="container">
            <div class="row">

                <div class="col-lg-4 col-12 me-auto">
                    <em class="text-white d-block mb-4">Where to find us?</em>

                    <strong class="text-white">
                        <i class="bi-geo-alt me-2"></i>
                        Bandra West, Mumbai, Maharashtra 400050, India
                    </strong>

                    <ul class="social-icon mt-4">
                        <li class="social-icon-item">
                            <a href="#" class="social-icon-link bi-facebook">
                            </a>
                        </li>

                        <li class="social-icon-item">
                            <a href="https://x.com/minthu" target="_new" class="social-icon-link bi-twitter">
                            </a>
                        </li>

                        <li class="social-icon-item">
                            <a href="#" class="social-icon-link bi-whatsapp">
                            </a>
                        </li>
                    </ul>
                </div>

                <div class="col-lg-3 col-12 mt-4 mb-3 mt-lg-0 mb-lg-0">
                    <em class="text-white d-block mb-4">Contact</em>

                    <p class="d-flex mb-1">
                        <strong class="me-2">Phone:</strong>
                        <a href="tel: 305-240-9671" class="site-footer-link">
                            (65)
                            305 2409 671
                        </a>
                    </p>

                    <p class="d-flex">
                        <strong class="me-2">Email:</strong>

                        <a href="mailto:info@yourgmail.com" class="site-footer-link">
                            hello@barista.co
                        </a>
                    </p>
                </div>


                <div class="col-lg-5 col-12">
                    <em class="text-white d-block mb-4">Opening Hours.</em>

                    <ul class="opening-hours-list">
                        <li class="d-flex">
                            Monday - Friday
                            <span class="underline"></span>

                            <strong>9:00 - 18:00</strong>
                        </li>

                        <li class="d-flex">
                            Saturday
                            <span class="underline"></span>

                            <strong>11:00 - 16:30</strong>
                        </li>

                        <li class="d-flex">
                            Sunday
                            <span class="underline"></span>

                            <strong>Closed</strong>
                        </li>
                    </ul>
                </div>

                <div class="col-lg-8 col-12 mt-4">
                    <p class="copyright-text mb-0">Copyright © Barista Cafe 2048
                        - Design: <a rel="sponsored" href="https://www.tooplate.com" target="_blank">Tooplate</a></p>
                </div>
            </div>
    </footer>
</main>

<!-- JAVASCRIPT FILES -->
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.sticky.js"></script>
<script src="js/click-scroll.js"></script>
<script src="js/vegas.min.js"></script>
<script src="js/custom.js"></script>

</body>
</html>