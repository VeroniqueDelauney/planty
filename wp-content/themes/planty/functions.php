<?php

add_action('wp_enqueue_scripts', 'theme_enqueue_styles');

function theme_enqueue_styles()
{
    wp_enqueue_style('parent-style', get_template_directory_uri() . 'style.css');
    wp_enqueue_style('theme-style', get_stylesheet_directory_uri() . 'style.css', array(), filemtime(get_stylesheet_directory() . '/style.css'));
}


// function planty_supports()
// {
//     add_theme_support('menus');
//     register_nav_menu('footer', 'Bas de page');
// }


// la ligne 7 permet d'ajouter nouvelles css. Changer "theme-style" par un nom unique pour chaque css. Dupliquer la ligne pour chaque css en changeant nom. 