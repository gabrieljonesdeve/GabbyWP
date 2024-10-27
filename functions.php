<?php
// Funzione per configurare il tema
function mio_tema_setup() {
    // Supporto per il titolo dinamico
    add_theme_support('title-tag');

    // Supporto per le immagini in evidenza
    add_theme_support('post-thumbnails');

    // Registrazione di un menu di navigazione
    register_nav_menus(array(
        'primary' => __('Menu Primario', 'mio-tema'),
    ));
}

// Azione per eseguire la funzione di setup
add_action('after_setup_theme', 'mio_tema_setup');

// Enqueue degli stili e degli script
function mio_tema_scripts() {
    // Enqueue del file CSS principale
    wp_enqueue_style('mio-tema-style', get_stylesheet_uri());

    // Enqueue di un file JavaScript (opzionale)
    // wp_enqueue_script('mio-tema-script', get_template_directory_uri() . '/assets/js/scripts.js', array('jquery'), null, true);
}

// Azione per caricare gli stili e gli script
add_action('wp_enqueue_scripts', 'mio_tema_scripts');
