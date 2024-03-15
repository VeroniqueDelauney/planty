<?php 

/**
 * Template Name: Bas rose
 */


get_header(); ?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
<header class="header">
<!-- <h1 class="entry-title" itemprop="name"><?php the_title(); ?></h1> <?php edit_post_link(); ?> -->
</header>


<div class="entry-content" itemprop="mainContentOfPage">
<!-- <?php if ( has_post_thumbnail() ) { the_post_thumbnail( 'full', array( 'itemprop' => 'image' ) ); } ?> -->
<?php the_content(); ?>
<div class="entry-links"><?php wp_link_pages(); ?></div>
</div>


</article>
<?php if ( comments_open() && !post_password_required() ) { comments_template( '', true ); } ?>
<?php endwhile; endif; ?>

<div class="ligneCanettes" style="background:#ECE2DA">
    <?php
    $iterations = 1;
    for($iterations = 1; $iterations <= 20; $iterations++) {
        for ($i = 1; $i <= 4; $i++) {
            echo '<img src="http://planty.local/wp-content/uploads/2024/02/small_canette.png" alt="Canette Planty" class="top'. $i .'">';
        }
    }
    ?>
</div>
<?php get_footer(); ?>