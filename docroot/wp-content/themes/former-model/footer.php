<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after
 *
 * @package former-model
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$container = get_theme_mod( 'understrap_container_type' );
?>

<?php get_template_part( 'sidebar-templates/sidebar', 'footerfull' ); ?>

<div class="wrapper footer" id="wrapper-footer">

	<div class="<?php echo esc_attr( $container ); ?>">

		<div class="row">

			<div class="col-md-12">

				<footer class="site-footer" id="colophon">

					<div class="site-info">

                    <p class="copyright__text">&copy; <?php echo esc_html( gmdate( 'Y' ) ); ?> <?php bloginfo( 'name' ); ?></p>

					</div><!-- .site-info -->

				</footer><!-- #colophon -->

			</div><!-- col -->

		</div><!-- .row -->

	</div><!-- .container(-fluid) -->

</div><!-- #wrapper-footer -->

<?php // Closing div#page from header.php. ?>
</div><!-- #page -->

<?php wp_footer(); ?>
<script>
window.addEventListener("scroll", function() {    
  let scroll = window.pageYOffset || document.documentElement.scrollTop;
  let navbar = document.querySelector('#main-nav')
  if (scroll >= 1) {
    navbar.classList.add("header__main-nav__scrolled");
    navbar.classList.remove("p-3");
  } else {
    navbar.classList.remove("header__main-nav__scrolled");
    navbar.classList.add("p-3");
  }
});
</script>

</body>

</html>

