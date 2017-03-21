$(function(){ //Fonction d'attente du chargement du DOM
    // ---------------------------------------------------------------------------
    // Fonctions générales de la page :

    // Début fonction style header lors du scroll
    $(window).on('scroll', function(){
        var scroll = $(this).scrollTop();

        if (scroll > 100) {
            $('header').addClass('header-scroll');
        } else {
            $('header').removeClass('header-scroll');
        };
    });
    // Fin fonction style header lors du scroll
    // ---------------------------------------------------------------------------
    // Header :

    // Reload page lors du clic sur le logo (h1)
    $('h1').on('click', function(){
        location.reload();
    });
    // ---------------------------------------------------------------------------
    // Début fonction pour la navigation :
    // Annuler le comportement naturel des liens du <nav> :
    $('nav a, a[href="#presentation"]').on('click', function(evt){
        evt.preventDefault();
    });
    // Accueil :
    $('[href="#accueil"]').parent().on('click', function(){
        $('html,body').animate({scrollTop: $("#accueil").offset().top}, 'slow');
    });
    // Présentation :
    $('[href="#presentation"]').parent().on('click', function(){
        $('html,body').animate({scrollTop: $("#presentation").offset().top}, 'slow');
    });
    // Compétences :
    $('[href="#competences"]').parent().on('click', function(){
        $('html,body').animate({scrollTop: $("#competences").offset().top}, 'slow');
    });
    // Réalisations :
    $('[href="#realisations"]').parent().on('click', function(){
        $('html,body').animate({scrollTop: $("#realisations").offset().top}, 'slow');
    });
    // Contact :
    $('[href="#contact"]').parent().on('click', function(){
        $('html,body').animate({scrollTop: $("#contact").offset().top}, 'slow');
    });
    // Fin fonction pour la navigation
    // ---------------------------------------------------------------------------
    // Section Présentation :

    // Le menu :
    // Annuler le comportement naturel des liens :
    $('#presentation .container>ul>li>a').on('click', function(evt){
        evt.preventDefault();
    });
    // A Propos :
    $('#presentation .container>ul>li').eq(0).on('click', function(){
        $('#description').slideDown();
        $('#formations, #exp, #loisirs').slideUp();
        $('#presentation h2').text('Présentation');
        $('#presentation .container>ul>li').removeClass('prez-active');
        $(this).addClass('prez-active');
    });
    // Formations :
    $('#presentation .container>ul>li').eq(1).on('click', function(){
        $('#formations').slideDown();
        $('#description, #exp, #loisirs').slideUp();
        $('#presentation h2').text('Formations');
        $('#presentation .container>ul>li').removeClass('prez-active');
        $(this).addClass('prez-active');
    });
    // Expériences :
    $('#presentation .container>ul>li').eq(2).on('click', function(){
        $('#exp').slideDown();
        $('#formations, #description, #loisirs').slideUp();
        $('#presentation h2').text('Expériences');
        $('#presentation .container>ul>li').removeClass('prez-active');
        $(this).addClass('prez-active');
    });
    // Loisirs :
    $('#presentation .container>ul>li').eq(3).on('click', function(){
        $('#loisirs').slideDown();
        $('#formations, #exp, #description').slideUp();
        $('#presentation h2').text('Loisirs');
        $('#presentation .container>ul>li').removeClass('prez-active');
        $(this).addClass('prez-active');
    });
    // ---------------------------------------------------------------------------
    // Section Compétences :
    // Annuler le comportement naturel des liens :
    $('#competences .container>ul>li>a').on('click', function(evt){
        evt.preventDefault();
    });
    // Compétence #1 (Développement Web) :
    $('#competences .container>ul>li').eq(0).on('click', function(){
        $('#competences .container>div').eq(0).slideToggle();
        $('#competences .container>div').eq(1).slideUp();
        $('#competences .container>div').eq(2).slideUp();
        $('#competences .container>ul>li').removeClass('comp-active');
        $(this).addClass('comp-active');
    });
    // Compétence #2 (Informatique) :
    $('#competences .container>ul>li').eq(1).on('click', function(){
        $('#competences .container>div').eq(1).slideToggle();
        $('#competences .container>div').eq(0).slideUp();
        $('#competences .container>div').eq(2).slideUp();
        $('#competences .container>ul>li').removeClass('comp-active');
        $(this).addClass('comp-active');
    });
    // Compétence #3 (Commerce) :
    $('#competences .container>ul>li').eq(2).on('click', function(){
        $('#competences .container>div').eq(2).slideToggle();
        $('#competences .container>div').eq(1).slideUp();
        $('#competences .container>div').eq(0).slideUp();
        $('#competences .container>ul>li').removeClass('comp-active');
        $(this).addClass('comp-active');
    });

}); //Fin fonction d'attente du chargement du DOM