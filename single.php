<?php
/**
 * The template for displaying all single posts.
 *
 * @package eryn
 */

get_header(); ?>

    <?php while ( have_posts() ) : the_post(); ?>
        <?php get_template_part( 'content' ); ?>

<div id="fb-root"></div>
<script>(function(d, s, id) {
		var js, fjs = d.getElementsByTagName(s)[0];
		if (d.getElementById(id)) return;
		js = d.createElement(s); js.id = id;
		js.src = "//connect.facebook.net/es_LA/all.js#xfbml=1";
		fjs.parentNode.insertBefore(js, fjs);
		}(document, 'script', 'facebook-jssdk'));</script>
<div class="fb-comments" data-href="<?php the_permalink(); ?>" data-num-posts="10" data-width="100%"></div>

        <?php
            // If comments are open or we have at least one comment, load up the comment template
            // if ( comments_open() || '0' != get_comments_number() ) :
            //    comments_template();
            // endif;
        ?>
    <?php endwhile; // end of the loop. ?>

	<?php 
		if(get_theme_mod('eryn_global_sidebar_posts')):
			get_sidebar(); 
		endif;
	?>
<?php get_footer(); ?>
