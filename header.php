<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title><?php echo bloginfo('name'); ?></title>
        <link rel="icon" href="<?php bloginfo('template_url'); ?>/img/icon_ap.png">
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
        <?php
            $args = array(
                'post_type' => 'page'
            );
            $header_query = new WP_Query($args);
            if ( $header_query->have_posts() ) :
                while ( $header_query->have_posts() ) : $header_query->the_post(); ?>
        <style>
            #accueil {
                background: -webkit-linear-gradient(to bottom, rgba(6, 15, 46, 0.6) 0%, rgba(6, 15, 46, 0.6) 100%), url(<?php echo get_field('bg_header'); ?>) no-repeat center center;
                background: linear-gradient(to bottom, rgba(6, 15, 46, 0.6) 0%, rgba(6, 15, 46, 0.6) 100%), url(<?php echo get_field('bg_header'); ?>) no-repeat center center;
                background-attachment: fixed;
                -webkit-background-size: cover;
                background-size: cover;
                height: 100%;
                position: relative;
            }
            #competences {
                background: -webkit-linear-gradient(to bottom, rgba(6, 15, 46, 0.9) 0%, rgba(6, 15, 46, 0.9) 100%), url(<?php echo get_field('bg_competences'); ?>) no-repeat center center;
                background: linear-gradient(to bottom, rgba(6, 15, 46, 0.9) 0%, rgba(6, 15, 46, 0.9) 100%), url(<?php echo get_field('bg_competences'); ?>) no-repeat center center;
                background-attachment: fixed;
                -webkit-background-size: cover;
                background-size: cover;
                color: #fafafa;
            }
            #contact {
                background: -webkit-linear-gradient(top, rgba(193, 175, 153, 0.5) 0%, rgba(193, 175, 153, 0.5) 100%), url(<?php echo get_field('bg_contact'); ?>) no-repeat center center;
                background: linear-gradient(to bottom, rgba(193, 175, 153, 0.5) 0%, rgba(193, 175, 153, 0.5) 100%), url(<?php echo get_field('bg_contact'); ?>) no-repeat center center;
                -webkit-background-size: cover;
                background-size: cover;
            }
        </style>
        <?php endwhile; endif; ?>