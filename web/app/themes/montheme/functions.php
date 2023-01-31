<?php

function montheme_supports()
{
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('menus');
    register_nav_menu('header', 'En tête du menu');
    
    register_nav_menu('front-page', 'Navigation aide');
    add_image_size('post-thumbnail',  350, 215, true);
}

function load_css()
{
    wp_enqueue_style('load_css', get_theme_file_uri('/style.css'));
    wp_enqueue_style('bootstrap-cdn-css', 'https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css');
    wp_enqueue_script('bootstrap-cdn-js', 'https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js', 'jquery', false, true);
    // wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
    // wp_enqueue_style( 'child-style', get_stylesheet_directory_uri() . '/style.css', array('parent-style') );
}

function montheme_title_separator()
{
    return '|';
}

function montheme_menu_class(array $classes): array
{
    $classes[] = 'nav-item';
    return $classes;
}

function montheme_menu_link_class($attrs)
{
    $attrs['class'] = 'nav-link';
    return $attrs;
}

function montheme_init()
{
    register_taxonomy('sport', 'post', [
        'labels' => [
            'name' => 'Sport',
            'singular_name'     => 'Sport',
            'plural_name'       => 'Sports',
            'search_items'      => 'Rechercher des sports',
            'all_items'         => 'Tous les sports',
            'edit_item'         => 'Editer le sport',
            'update_item'       => 'Mettre à jour le sport',
            'add_new_item'      => 'Ajouter un nouveau sport',
            'new_item_name'     => 'Ajouter un nouveau sport',
            'menu_name'         => 'Sport',
        ],
        'show_in_rest' => true,
        'hierarchical' => true,
        'show_admin_column' => true,
    ]);
}

add_action('init', 'montheme_init');
add_action('after_setup_theme', 'montheme_supports');
add_action('wp_enqueue_scripts', 'load_css');
add_filter('document_title_separator', '\montheme_title_separator');
add_filter('nav_menu_css_class', 'montheme_menu_class');
add_filter('nav_menu_link_attributes', 'montheme_menu_link_class');


// if (function_exists('acf_register_block_type')) {
// 	add_action('acf/init', function ()
// 	{
// 		acf_register_block_type([
// 			'name' => 'highlighted_posts',
// 			'title' => 'Articles mis en avant',
// 			'render_callback' => function() {
//                 echo '<div>' . get_field('titre-section3') . '</div>';
//             }
// 		]);
// 	});
// }