<?php
/**
 * Block Name: Custom Image Block.
 *
 * This is the template that displays the custom image block.
 *
 * @package geoffcordner
 */

	$img = get_field( 'image' );
if ( ! empty( $img ) ) {
	$img_url          = $img['url'];
	$img_id           = $img['id'];
	$alt              = $img['alt'];
	$url              = get_field( 'url' );
	$block_caption    = get_field( 'caption' );
	$block_title      = get_field( 'title' );
	$block_content    = get_field( 'details' );
	$block_technology = get_field( 'technologies' );
}
?>


<div class = "work-block__container">
<figure id="attachment_<?php echo esc_html( $img_id ); ?>" class="wp-caption aligncenter img-<?php echo esc_html( $orientation ); ?>">
<img loading="lazy" class="size-full wp-image-<?php echo esc_html( $img_id ); ?>" src="<?php echo esc_html( $img_url ); ?>" alt="<?php echo esc_html( $alt ); ?>">

</figure> 
<div class="work-block__title">
<p><?php if ( ! empty( $url ) ) : ?>
<a href="<?php echo wp_kses_post( $url ); ?>" target="_blank" rel="nofollow"> 
	<?php echo wp_kses_post( $block_title ); ?></a>
<?php else : ?>
	<?php echo wp_kses_post( $block_title ); ?>
<?php endif; ?></p>
</div>
<div class="work-block__content">
<?php echo wp_kses_post( $block_content ); ?>
</div>

<?php
if ( ! empty( $block_technology ) ) :
	?>
<div class="work-block__technology"></p>
	<?php
	echo wp_kses_post( $block_technology );
	?>
</p></div>
<?php endif; ?>

</div>
<!-- END CUSTOM IMAGE BLOCK -->


	<!-- <figure id="attachment_27" aria-describedby="caption-attachment-27" style="width: 798px" class="wp-caption aligncenter">
<img loading="lazy" class="size-full wp-image-27 portrait" src="http://www.geoffcordner.com/wp-content/uploads/2019/10/harry-dean-stanton.jpg" alt="Harry Dean Stanton" width="798" height="1136">
<figcaption id="caption-attachment-27" class="wp-caption-text">Harry Dean Stanton, Hollywood Hills Gothic, Los Angeles 1994</figcaption>
</figure> -->

