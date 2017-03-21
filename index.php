<?php get_header(); ?>
        <!--Début Accueil-->
        <section id="accueil">
            <div class="container">
                <h2>Accueil</h2>
                <cite><?php echo get_field('citation'); ?></cite>
                <a href="#presentation">Me découvrir</a>
            </div>
        </section>
        <!--Fin Accueil-->
        <!--Début Présentation-->
        <section id="presentation">
            <div class="container">
                <ul>
                    <li><a href="#">A propos</a></li>
                    <li><a href="#">Formations</a></li>
                    <li><a href="#">Expériences</a></li>
                    <li><a href="#">Loisirs</a></li>
                </ul>
                <a href="<?php echo get_field('fichier_cv'); ?>" id="dl-cv" title="Télécharger mon CV" download>Télécharger mon CV</a>
                <h2><?php echo get_field('titre_section_a_propos'); ?></h2>
                
                <!--Présentation-->
                <div id="description">
                    <?php echo get_field('description'); ?>
                </div>
                <!--Présentation-->
                <!--Début Formations-->
                <div id="formations">
                    <?php
                    $args = array(
                        'post_type' => 'formations'
                    );
                    $formations_query = new WP_Query($args);
                    if ( $formations_query->have_posts() ) :
                        while ( $formations_query->have_posts() ) : $formations_query->the_post(); ?>
                        <div>
                            <h3>
                                <span><?php echo get_field('date_de_debut'); ?></span> - 
                                <?php echo get_field('titre_de_la_formation'); ?>
                            </h3>
                            <h4><?php echo get_field('sous-titre_de_la_formation'); ?></h4>
                        </div>
                    <?php endwhile; endif; ?>
                </div>
                <!--Fin Formations-->
                <!--Début Expériences-->
                <div id="exp">
                    <?php
                    $args = array(
                        'post_type' => 'experiences'
                    );
                    $exp_query = new WP_Query($args);
                    if ( $exp_query->have_posts() ) :
                        while ( $exp_query->have_posts() ) : $exp_query->the_post(); ?>
                        <div>
                            <h3>
                                <span><?php echo get_field('date_de_debut'); ?> - 
                                <?php echo get_field('date_de_fin'); ?></span>
                                <?php echo get_field('poste_occupe'); ?> - 
                                <span><?php echo get_field('entreprise'); ?></span>
                            </h3>
                            <?php echo get_field('missions'); ?>
                        </div>
                    <?php endwhile; endif; ?>
                </div>
                <!--Fin Expériences-->
                <!--Début Loisirs-->
                <div id="loisirs">
                    <?php
                    $args = array(
                        'post_type' => 'loisirs'
                    );
                    $loisirs_query = new WP_Query($args);
                    if ( $loisirs_query->have_posts() ) :
                        while ( $loisirs_query->have_posts() ) : $loisirs_query->the_post(); ?>
                        <div>
                            <h3><?php echo get_field('categorie_de_loisir'); ?></h3>
                            <h4><?php echo get_field('loisir'); ?></h4>
                        </div>
                    <?php endwhile; endif; ?>
                </div>
                <!--Fin Loisirs-->

            </div>
        </section>
        <!--Fin Présentation-->
        <!--Début Compétences-->
        <section id="competences">
            <div class="container">
                <h2>Compétences</h2>
                <ul>
                    <?php
                        $args = array(
                            'post_type' => 'competences'
                        );
                        $competences_query = new WP_Query($args);
                        if ( $competences_query->have_posts() ) :
                            while ( $competences_query->have_posts() ) : $competences_query->the_post(); ?>
                        <li>
                            <?php echo get_field('icon'); ?>
                            <h3><?php echo get_field('domaine'); ?></h3>
                            <a href="#">En savoir +</a>
                        </li>
                        <?php endwhile; endif; ?>
                </ul>
                <?php
                    $args = array(
                        'post_type' => 'competences'
                    );
                    $competences_query = new WP_Query($args);
                    if ( $competences_query->have_posts() ) :
                        while ( $competences_query->have_posts() ) : $competences_query->the_post(); ?>
                    <div>
                        <?php echo get_field('details'); ?>
                    </div>
                    <?php endwhile; endif; ?>
            </div>
        </section>
        <!--Fin Compétences-->
        <!--Début Réalisations-->
        <section id="realisations">
            <div class="container">
                <h2>Réalisations</h2>
                <ul>
                    <?php wp_list_categories($args = array(
                    'hide_empty' => '0')); ?>
                </ul>
                <div class="rea-containt">
                    <div class="rea-row">
                        <div class="rea-cell">
                            <img src="<?php bloginfo('template_url'); ?>/img/proj_direct_energie.jpg" alt="">
                            <p><i class="fa fa-search-plus" aria-hidden="true"></i></p>
                        </div>
                        <div class="rea-cell">
                            <img src="<?php bloginfo('template_url'); ?>/img/proj_resonances.jpg" alt="">
                            <p><i class="fa fa-search-plus" aria-hidden="true"></i></p>
                        </div>
                        <div class="rea-cell">
                            <img src="<?php bloginfo('template_url'); ?>/img/proj_dab.jpg" alt="">
                            <p><i class="fa fa-search-plus" aria-hidden="true"></i></p>
                        </div>
                    </div>
                    <div class="rea-row">
                        <div class="rea-cell">
                            <img src="<?php bloginfo('template_url'); ?>/img/proj_ampoule.jpg" alt="">
                            <p><i class="fa fa-search-plus" aria-hidden="true"></i></p>
                        </div>
                        <div class="rea-cell">
                            <img src="<?php bloginfo('template_url'); ?>/img/proj_slide.jpg" alt="">
                            <p><i class="fa fa-search-plus" aria-hidden="true"></i></p>
                        </div>
                        <div class="rea-cell">
                            <img src="<?php bloginfo('template_url'); ?>/img/" alt="">
                            <p><i class="fa fa-search-plus" aria-hidden="true"></i></p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--Fin Réalisations-->
        <!--Début Contact-->
        <section id="contact">
            <div class="container">
                <h2>Contact</h2>
                <form action="">
                    <input type="text" name="nom" placeholder="Nom">
                    <input type="text" name="prenom" placeholder="Prénom">
                    <input type="email" name="email" placeholder="Email">
                    <input type="text" name="objet" placeholder="Objet">
                    <textarea name="msg" placeholder="Message"></textarea>
                    <input type="submit" value="Envoyer">
                </form>
            </div>
        </section>
        <!--Fin Contact-->
<?php get_footer(); ?>