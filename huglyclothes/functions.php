<?php

use Carbon_Fields\Container;
use Carbon_Fields\Field;

add_action( 'after_setup_theme', 'crb_load' );
function crb_load() {
    require_once( 'vendor/autoload.php' );
    \Carbon_Fields\Carbon_Fields::boot();
}

//ajout d'une feuille de style ou de script
add_action('wp_enqueue_scripts', 'my_theme_enqueue_styles');
function my_theme_enqueue_styles() {
    wp_enqueue_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css', [], wp_get_theme()->get('Version'));
    wp_enqueue_style('theme-style', get_template_directory_uri() . '/style.css', ['bootstrap'], wp_get_theme()->get('Version'));
    wp_enqueue_script('slick', get_template_directory_uri() . '/node_modules/slick-carousel/slick/slick.min.js', ['jquery'], true);
    wp_enqueue_script('script', get_template_directory_uri() . '/js/script.js', ['slick'], true);
}

add_action( 'after_setup_theme', 'huglyclothes_after_setup_theme' );
function huglyclothes_after_setup_theme()
{
//    import du fichier navwalker pour la navbar
    require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';

    // Support de HTML5
    add_theme_support('html5');

    // Balise title dans le head
    add_theme_support('title_tag');

    // Image mise en avant
    add_theme_support('post-thumbnails');

    // logo dans identité du site
    add_theme_support('custom-logo', array(
            'height'      => 100,
            'width'       => 100,
            'flex-width'  => true,
            'flex-height' => true,
        )
    );

    // Declaration des menus (pour l'administration)
    register_nav_menu('menu-header', 'Menu en haut de page');
    register_nav_menu('menu-footer', 'Menu en pied de page');
}

//création du widget dans le footer
add_action('widgets_init', 'huglyclothes_widgets_init');
    function huglyclothes_widgets_init() {
        register_sidebar( [
            'id' =>'footer-center',
            'name' => "Centre du footer",
            'before_widget' => '<div id="%1$s" class="widget %2$s">',
            'before_title'  => '<h5>',
            'after_title'   => '</h5><div>',
            'after_widget'  => '</div></div>'
        ]);
    }

//    création du CF contact dans le footer
add_action( 'carbon_fields_register_fields', 'crb_attach_theme_options' );
function crb_attach_theme_options() {
    Container::make( 'theme_options', __( 'Options' ) )
        ->add_fields( array(
            Field::make('text','adress','Adresse'),
            Field::make('text', 'phone', 'Téléphone'),
            Field::make('text', 'email', 'Email'),
        ) );

//    création du CF pour les titres de section
    Container::make( 'theme_options', __( 'Accueil' ) )
        ->add_fields( array(
            Field::make('text','title-actu','Actualités'),
            Field::make('text', 'title-projet', 'Projets'),
        ) );
}

//imports des fichiers magasin.php et slider.php
require_once __DIR__ . '/post-type/magasin.php';
require_once __DIR__ . '/post-type/slider.php';


function wpc_mime_types($mimes) {
    $mimes['svg'] = 'image/svg+xml';
    // $mimes['webp'] = 'image/webp';
    return $mimes;
}
add_filter('upload_mimes', 'wpc_mime_types');