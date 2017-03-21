<!--Début Footer-->
<footer>
    <div class="container">
        <h3>Arigna <span>Phengphong</span><span>Developpeur Web Front</span></h3>
        <ul>
            <li>
                <h5>Plan du site</h5>
                <ul>
                    <li><a href="#accueil">Accueil</a></li>
                    <li>
                        <a href="#presentation">Présentation</a>
                        <ul>
                            <li>Formations</li>
                            <li>Expériences</li>
                            <li>Loisirs</li>
                        </ul>
                    </li>
                    <li>
                        <a href="#competences">Compétences</a>
                        <ul>
                            <li>Techniques</li>
                        </ul>
                    </li>
                    <li>
                        <a href="#realisations">Réalisations</a>
                        <!--<ul>
                            <li>Recommandations</li> (Quand il y en aura lol!)
                        </ul>-->
                    </li>
                    <li><a href="#contact">Contact</a></li>
                </ul>
            </li>
            <li>
                <h5>Réseaux sociaux</h5>
                <?php
                    $args = array(
                        'post_type' => 'reseauxsociaux'
                    );
                    $rsociaux_query = new WP_Query($args);
                    if ( $rsociaux_query->have_posts() ) :
                        while ( $rsociaux_query->have_posts() ) : $rsociaux_query->the_post(); ?>
                        <?php echo get_field('icon'); ?>
                <?php endwhile; endif; ?>
            </li>
            <li>
                <h5>Divers</h5>
            </li>
        </ul>
    </div>
    <p>&copy; 2017 - Design &amp; Dev : Arigna Phengphong</p>
</footer>
        <!--Fin Footer-->

        <!--Script JS/jQuery-->
        <script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>
        <script src="<?php bloginfo('template_url'); ?>/js/script.js"></script>
        <?php wp_footer(); ?>
    </body>
</html>