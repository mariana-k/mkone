<?php
/**
 * The template for displaying all single posts and attachments
 *
 * @package WordPress
 * @subpackage MKOne    
 * @since MKOne 1.0
 */
 
get_header(); ?>
 
    <div class="content-area">
        <main class="site-main" role="main">
 
        <?php
        // Start the loop.
        while ( have_posts() ) : the_post();

            get_template_part( 'template-parts/content/content-single' );
        // End the loop.
        endwhile;
        ?>
 
        </main><!-- .site-main -->
    </div><!-- .content-area -->
 
<?php get_footer(); ?>