<?php
/**
 * The template for displaying all single posts.
 *
 * @package eryn
 */

get_header(); ?>


    <?php while ( have_posts() ) : the_post(); ?>
        <?php get_template_part( 'content' ); ?>	
        <?php
            // If comments are open or we have at least one comment, load up the comment template
            if ( comments_open() || '0' != get_comments_number() ) :
                comments_template();
            endif;
        ?>
    <?php endwhile; // end of the loop. ?>


	<?php 
		if(get_theme_mod('eryn_global_sidebar_posts')):
			get_sidebar(); 
		endif;
	?>
<?php get_footer(); ?>