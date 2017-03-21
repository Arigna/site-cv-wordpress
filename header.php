<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title><?php echo bloginfo('name'); ?></title>
        <link rel="icon" href="img/icon_ap.png">
        <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/style.css">
        <?php wp_head(); ?>
    </head>
    <body <?php body_class(); ?>>
        <!--Début Header-->
        <header>
            <div class="container">
                <h1>Arigna <span>Phengphong</span><span>Developpeur Web Front</span></h1>
                <i class="fa fa-bars" aria-hidden="true"></i> <!--Burger pour Responsive-->
                <nav>
                    <ul>
                        <li><a href="#accueil">Accueil</a></li>
                        <li><a href="#presentation">Présentation</a></li>
                        <li><a href="#competences">Compétences</a></li>
                        <li><a href="#realisations">Réalisations</a></li>
                        <li><a href="#contact">Contact</a></li>
                    </ul>
                </nav>
            </div>
        </header>
        <!--Fin Header-->