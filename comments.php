<?php
/**
 * The template for displaying comments.
 *
 * The area of the page that contains both current comments
 * and the comment form.
 *
 */

/*
 * If the current post is protected by a password and
 * the visitor has not yet entered the password we will
 * return early without loading the comments.
 */
if (true) {

<div id="fb-root"></div>
		<script>(function(d, s, id) {
		var js, fjs = d.getElementsByTagName(s)[0];
		if (d.getElementById(id)) return;
		js = d.createElement(s); js.id = id;
		js.src = "//connect.facebook.net/es_LA/all.js#xfbml=1";
		fjs.parentNode.insertBefore(js, fjs);
		}(document, 'script', 'facebook-jssdk'));</script>
<div class="fb-comments" data-href="<?php the_permalink(); ?>" data-num-posts="10" data-width="465"></div>

} else {

if ( post_password_required() ) {
	return;
}
?>

<div id="comments" class="comments-area">
	<div class="post-wrap">
		<?php // You can start editing here -- including this comment! ?>

        <?php if ( have_comments() ) : ?>
            <div class="comments-title-block">
                <h2 class="comments-title">
                    <?php
                        printf( _nx( 'One thought on &ldquo;%2$s&rdquo;', '%1$s thoughts on &ldquo;%2$s&rdquo;', get_comments_number(), 'comments title', 'eryn' ),
                            number_format_i18n( get_comments_number() ), '<span>' . get_the_title() . '</span>' );
                    ?>
                </h2>
            </div>
            <?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : // are there comments to navigate through ?>
                <nav id="comment-nav-above" class="comment-navigation" role="navigation">
                    <h1 class="screen-reader-text"><?php _e( 'Comment navigation', 'eryn' ); ?></h1>
                    <div class="nav-previous"><?php previous_comments_link( __( '&larr; Older Comments', 'eryn' ) ); ?></div>
                    <div class="nav-next"><?php next_comments_link( __( 'Newer Comments &rarr;', 'eryn' ) ); ?></div>
                </nav><!-- #comment-nav-above -->
            <?php endif; // check for comment navigation ?>

            <ol class="comment-list">
                <?php
                    wp_list_comments( array(
                        'style'      => 'ol',
                        'short_ping' => true,
                    ) );
                ?>
            </ol><!-- .comment-list -->

            <?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : // are there comments to navigate through ?>
            <nav id="comment-nav-below" class="comment-navigation" role="navigation">
                <h1 class="screen-reader-text"><?php _e( 'Comment navigation', 'eryn' ); ?></h1>
                <div class="nav-previous"><?php previous_comments_link( __( '&larr; Older Comments', 'eryn' ) ); ?></div>
                <div class="nav-next"><?php next_comments_link( __( 'Newer Comments &rarr;', 'eryn' ) ); ?></div>
            </nav><!-- #comment-nav-below -->
            <?php endif; // check for comment navigation ?>

        <?php endif; // have_comments() ?>

        <?php
            // If comments are closed and there are comments, let's leave a little note, shall we?
            if ( ! comments_open() && '0' != get_comments_number() && post_type_supports( get_post_type(), 'comments' ) ) :
        ?>
            <p class="no-comments"><?php _e( 'Comments are closed.', 'eryn' ); ?></p>
        <?php endif; ?>

        <?php comment_form(); ?>
	</div>
</div><!-- #comments -->

<<?php } ?>
