<?php

add_action('wp_enqueue_scripts', 'theme_enqueue_styles');

function theme_enqueue_styles()
{
    wp_enqueue_style('parent-style', get_template_directory_uri() . 'style.css');
    wp_enqueue_style('theme-style', get_stylesheet_directory_uri() . 'style.css', array(), filemtime(get_stylesheet_directory() . '/style.css'));
}


// Edit main top menu
add_filter( 'wp_nav_menu_items', 'add_extra_item_to_nav_menu', 10, 2);
function add_extra_item_to_nav_menu( $items, $args ) {   
    
    if(!is_super_admin()) return $items; // On retourne les éléments du menu si le visiteur n'est pas Admin

    if($args->menu->term_id != 7) return $items; // On retourne les éléments du menu si on est dans un menu qui n'est pas le menu du haut (le menu 7)

    $ex = explode("<li" , $items); // On éclate le tableau pour séparer chaque <li>"

    $last_li = $ex[sizeof($ex)-1]; // On définit le dernier <li> en récupérant le dernier <li> et en enlevant 1

    $last_li = "<li".$last_li; // on met en forme le dernier <li> en lui rajoutant la balise <li> ouvrante

    $admin_link = '<li class="menu-item"><a href="/wp-admin/" title="Admin">Admin</a></li>'; // On prépare le contenu du lien d'admin

    $items = str_replace($last_li , $admin_link.$last_li , $items); // On remplace le dernier <li> par deux nouveaux <li> => le <li> de l'admin et le <li> qui était déjà le dernier

    return($items); // On retourne le menu complet
    
}


// Add footer menu
function register_my_menu() 
{
    register_nav_menu('footer-menu',__( 'Footer menu' ));
}
add_action( 'init', 'register_my_menu' );




// la ligne 7 permet d'ajouter nouvelles css. Changer "theme-style" par un nom unique pour chaque css. 
// Dupliquer la ligne pour chaque css en changeant nom. 