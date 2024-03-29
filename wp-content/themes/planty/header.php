<!DOCTYPE html>
<html <?php language_attributes(); ?> <?php blankslate_schema_type(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?> >
<?php wp_body_open(); ?>
<div id="wrapper" class="hfeed">
    
    <header id="header" role="banner">
    <div id="branding">
        <div class="logo">
            <a href="/" title="Accueil">
                <img src="http://planty.local/wp-content/uploads/2024/02/Logo_planty.png" alt="Planty" title="Planty">
            </a>
        </div>
    
<div id="site-title" itemprop="publisher" itemscope itemtype="https://schema.org/Organization">
</div>
<div id="site-description"<?php if ( !is_single() ) { echo ' itemprop="description"'; } ?>><?php bloginfo( 'description' ); ?></div>
</div>
<nav id="menu" role="navigation" itemscope itemtype="https://schema.org/SiteNavigationElement">

<?php wp_nav_menu( array( 'theme_location' => 'main-menu', 
    'container' => false, 
    'menu_class' => 'navbar-nav',
    'link_before' => '<span itemprop="name">', 
    'link_after' => '</span>' ) ); ?>
</nav>

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Syne:wght@400..800&display=swap" rel="stylesheet">

</header>
<div id="container">
<main id="content" role="main">