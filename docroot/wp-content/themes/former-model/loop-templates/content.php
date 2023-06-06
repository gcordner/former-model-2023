<?php
/**
 * Post rendering content according to caller of get_template_part
 *
 * @package Understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;
?>
<div class="col-sm-12 col-md-6 mb-5" style="border:1 px solid red;">
<article <?php post_class( 'archive__article' ); ?> id="post-<?php the_ID(); ?>">
<?php echo get_the_post_thumbnail( $post->ID, 'large' ); ?>

<div class="article__content">	
<header class="entry-header">

		<?php
		the_title(
			sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ),
			'</a></h2>'
		);
		?>

		<?php if ( 'post' === get_post_type() ) : ?> 

			<div class="entry-meta">
				<?php understrap_posted_on(); ?>
			</div><!-- .entry-meta -->

		<?php endif; ?>

	</header>
		<!-- .entry-header -->

	

	<div class="entry-content">

		<?php
		the_excerpt();
		understrap_link_pages();
		?>

	</div><!-- .entry-content -->

	<footer class="entry-footer">

		<?php understrap_entry_footer(); ?>

	</footer><!-- .entry-footer -->
		</div>
</article><!-- #post-<?php the_ID(); ?> -->
		</div>
