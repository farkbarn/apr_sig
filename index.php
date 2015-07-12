<?php
/**
 * The main template file.
 */
get_header(); ?>

    <?php 
        while ( have_posts() ) : the_post();
            if(is_front_page()):
                get_template_part( 'content', 'home' );
            else:
                get_template_part('content');
            endif;
        endwhile; 
    ?> 
    <div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/es_LA/sdk.js#xfbml=1";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<div class="fb-comments" data-href="http://developers.facebook.com/docs/plugins/comments/" data-width="100%" data-numposts="10"></div>

    <?php eryn_paging_nav(); ?>

<?php get_footer(); ?>
