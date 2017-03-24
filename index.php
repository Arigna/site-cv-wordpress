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
                    <li class="prez-active"><a href="#">A propos</a></li>
                    <li><a href="#">Formations</a></li>
                    <li><a href="#">Expériences</a></li>
                    <li><a href="#">Loisirs</a></li>
                </ul>
                <a href="<?php echo get_field('fichier_cv'); ?>" id="dl-cv" title="Télécharger mon CV" download>Télécharger mon CV</a>
                <h2>Présentation</h2>
                
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
                        <h4><?php echo get_field('domaine'); ?></h4>
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
                    <?php
                        $args = array(
                            'post_type' => 'post'
                        );
                        $rea_query = new WP_Query($args);
                        if ( $rea_query->have_posts() ) :
                            while ( $rea_query->have_posts() ) : $rea_query->the_post(); ?>
                            <div class="rea-cell">
                                <img src="<?php echo get_field('image'); ?>" alt="<?php echo get_field('nom_du_projet'); ?>">
                                <a href="<?php echo get_field('lien'); ?>" target="_blank">
                                    <p>
                                        <i class="fa fa-search-plus" aria-hidden="true"></i>
                                        <span><?php echo get_field('nom_du_projet'); ?></span>
                                    </p>
                                </a>
                            </div>
                    <?php endwhile; endif; ?>
                </div>
            </div>
        </section>
        <!--Fin Réalisations-->
        <!--Début Contact-->
        <section id="contact">
            <div class="container">
                <h2>Contact</h2>
                <?php
                    $args = array(
                        'post_type' => 'contact'
                    );
                    $contact_query = new WP_Query($args);
                    if ( $contact_query->have_posts() ) :
                        while ( $contact_query->have_posts() ) : $contact_query->the_post(); ?>
                        <?php echo the_content(); ?>
                <?php endwhile; endif; ?>
            </div>
        </section>
        <!--Fin Contact-->
<?php get_footer(); ?>