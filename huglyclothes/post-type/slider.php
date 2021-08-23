<?php
add_action('init', function() {
    // Déclaration du CPT pour gérer les Sliders
    register_post_type('slider', [
        'labels' => [
            'name' => _x('Sliders', 'Post type general name', 'hugly-clothes'),
            'singular_name' => _x('Slider', 'Post type singular name', 'hugly-clothes'),
            'menu_name' => _x('Sliders', 'Admin Menu text', 'hugly-clothes'),
            'name_admin_bar' => _x('Slider', 'Add New on Toolbar', 'hugly-clothes'),
            'add_new' => __('Ajouter Nouveau', 'hugly-clothes'),
            'add_new_item' => __('Ajouter Nouveau Slider', 'hugly-clothes'),
            'new_item' => __('Nouveau Slider', 'hugly-clothes'),
            'edit_item' => __('Modifier Slider', 'hugly-clothes'),
            'view_item' => __('Voir Slider', 'hugly-clothes'),
            'all_items' => __('Tous les Sliders', 'hugly-clothes'),
            'search_items' => __('Recherché Sliders', 'hugly-clothes'),
            'parent_item_colon' => __('Sliders Parent :', 'hugly-clothes'),
            'not_found' => __('Sliders introuvable.', 'hugly-clothes'),
            'not_found_in_trash' => __('Sliders introuvables dans la corbeille.', 'hugly-clothes'),
            'featured_image' => _x('Photo de l\'Slider', 'Overrides the "Featured Image" phrase for this post type. Added in 4.3', 'hugly-clothes'),
            'set_featured_image' => _x('Ajouter une photo', 'Overrides the "Set featured image" phrase for this post type. Added in 4.3', 'hugly-clothes'),
            'remove_featured_image' => _x('Supprimer l\'image mise en avant', 'Overrides the "Remove featured image" phrase for this post type. Added in 4.3', 'hugly-clothes'),
            'use_featured_image' => _x('Utiliser comme image mise en avant', 'Overrides the "Use as featured image" phrase for this post type. Added in 4.3', 'hugly-clothes'),
            'archives' => _x('Slider archives', 'The post type archive label used in nav menus. Default "Post Archives". Added in 4.4', 'hugly-clothes'),
            'insert_into_item' => _x('Insérer dans Slider', 'Overrides the "Insert into post"/"Insert into page" phrase (used when inserting media into a post). Added in 4.4', 'hugly-clothes'),
            'uploaded_to_this_item' => _x('Uploadé à cet Slider', 'Overrides the "Uploaded to this post"/"Uploaded to this page" phrase (used when viewing media attached to a post). Added in 4.4', 'hugly-clothes'),
            'filter_items_list' => _x('Filtrer la liste des Sliders', 'Screen reader text for the filter links heading on the post type listing screen. Default "Filter posts list"/"Filter pages list". Added in 4.4', 'hugly-clothes'),
            'items_list_navigation' => _x('Sliders navigation', 'Screen reader text for the pagination heading on the post type listing screen. Default "Posts list navigation"/"Pages list navigation". Added in 4.4', 'hugly-clothes'),
            'items_list' => _x('Sliders liste', 'Screen reader text for the items list heading on the post type listing screen. Default "Posts list"/"Pages list". Added in 4.4', 'hugly-clothes'),
        ],
        'public' => true,
        'rewrite' => ['slug' => 'slider'],
        'menu_icon' => 'dashicons-images-alt2',
        'supports' => ['title', 'editor', 'thumbnail']
    ]);
});