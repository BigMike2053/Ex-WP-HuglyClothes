<?php
add_action('init', function() {
    // Déclaration du CPT pour gérer les Magasins
    register_post_type('store', [
        'labels' => [
            'name' => _x('Magasins', 'Post type general name', 'bike-shop'),
            'singular_name' => _x('Magasin', 'Post type singular name', 'bike-shop'),
            'menu_name' => _x('Magasins', 'Admin Menu text', 'bike-shop'),
            'name_admin_bar' => _x('Magasin', 'Add New on Toolbar', 'bike-shop'),
            'add_new' => __('Ajouter Nouveau', 'bike-shop'),
            'add_new_item' => __('Ajouter Nouveau Magasin', 'bike-shop'),
            'new_item' => __('Nouveau Magasin', 'bike-shop'),
            'edit_item' => __('Modifier Magasin', 'bike-shop'),
            'view_item' => __('Voir Magasin', 'bike-shop'),
            'all_items' => __('Tous les Magasins', 'bike-shop'),
            'search_items' => __('Recherché Magasins', 'bike-shop'),
            'parent_item_colon' => __('Magasins Parent :', 'bike-shop'),
            'not_found' => __('Magasins introuvable.', 'bike-shop'),
            'not_found_in_trash' => __('Magasins introuvables dans la corbeille.', 'bike-shop'),
            'featured_image' => _x('Photo de l\'Magasin', 'Overrides the "Featured Image" phrase for this post type. Added in 4.3', 'bike-shop'),
            'set_featured_image' => _x('Ajouter une photo', 'Overrides the "Set featured image" phrase for this post type. Added in 4.3', 'bike-shop'),
            'remove_featured_image' => _x('Supprimer l\'image mise en avant', 'Overrides the "Remove featured image" phrase for this post type. Added in 4.3', 'bike-shop'),
            'use_featured_image' => _x('Utiliser comme image mise en avant', 'Overrides the "Use as featured image" phrase for this post type. Added in 4.3', 'bike-shop'),
            'archives' => _x('Magasin archives', 'The post type archive label used in nav menus. Default "Post Archives". Added in 4.4', 'bike-shop'),
            'insert_into_item' => _x('Insérer dans Magasin', 'Overrides the "Insert into post"/"Insert into page" phrase (used when inserting media into a post). Added in 4.4', 'bike-shop'),
            'uploaded_to_this_item' => _x('Uploadé à cet Magasin', 'Overrides the "Uploaded to this post"/"Uploaded to this page" phrase (used when viewing media attached to a post). Added in 4.4', 'bike-shop'),
            'filter_items_list' => _x('Filtrer la liste des Magasins', 'Screen reader text for the filter links heading on the post type listing screen. Default "Filter posts list"/"Filter pages list". Added in 4.4', 'bike-shop'),
            'items_list_navigation' => _x('Magasins navigation', 'Screen reader text for the pagination heading on the post type listing screen. Default "Posts list navigation"/"Pages list navigation". Added in 4.4', 'bike-shop'),
            'items_list' => _x('Magasins liste', 'Screen reader text for the items list heading on the post type listing screen. Default "Posts list"/"Pages list". Added in 4.4', 'bike-shop'),
        ],
        'public' => true,
        'has_archive ' => true,
        'rewrite' => ['slug' => 'store'],
        'menu_icon' => 'dashicons-store',
        'supports' => ['title', 'editor', 'thumbnail']
    ]);

    // Déclaration de la taxonomie "ville" associée au CPT des magasins
    register_taxonomy('city', ['store'], [
        'labels' => [
            'name'              => _x( 'Villes', 'taxonomy general name', 'bike-shop' ),
            'singular_name'     => _x( 'Ville', 'taxonomy singular name', 'bike-shop' ),
            'search_items'      => __( 'Rechercher Villes', 'bike-shop' ),
            'all_items'         => __( 'Tous les Villes', 'bike-shop' ),
            'parent_item'       => __( 'Ville Parent', 'bike-shop' ),
            'parent_item_colon' => __( 'Ville Parent :', 'bike-shop' ),
            'edit_item'         => __( 'Modifier Ville', 'bike-shop' ),
            'update_item'       => __( 'Mettre à jour Ville', 'bike-shop' ),
            'add_new_item'      => __( 'Ajouter Nouveau Ville', 'bike-shop' ),
            'new_item_name'     => __( 'Nom du nouveau Ville', 'bike-shop' ),
            'menu_name'         => __( 'Ville', 'bike-shop' ),
        ],
        'rewrite' => ['slug' => 'Ville']
    ]);
    
});
