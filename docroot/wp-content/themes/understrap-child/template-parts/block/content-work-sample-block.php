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
	$img_url	   = $img['url'];
	$img_id        = $img['id'];
	$alt           = $img['alt'];
	$caption       = $img['caption'];
	$url		   = get_field( 'url' );
	$block_caption = get_field( 'caption' );
}
?>


<!-- CUSTOM IMAGE BLOCK -->
<figure id="attachment_<?php echo esc_html( $img_id ); ?>" aria-describedby="caption-attachment-<?php echo esc_html( $img_id ); ?>" class="wp-caption aligncenter img-<?php echo esc_html( $orientation ); ?>">
<img loading="lazy" class="size-full wp-image-<?php echo esc_html( $img_id ); ?>" src="<?php echo esc_html( $img_url ); ?>" alt="<?php echo esc_html( $alt ); ?>">
<figcaption id="caption-attachment-<?php echo esc_html( $img_id ); ?>" class="wp-caption-text">
<?php
if ( ! empty( $url ) ) {
	echo wp_kses_post( $url );
} 
?>
</figcaption>
</figure> 



<!-- END CUSTOM IMAGE BLOCK -->


	<!-- <figure id="attachment_27" aria-describedby="caption-attachment-27" style="width: 798px" class="wp-caption aligncenter">
<img loading="lazy" class="size-full wp-image-27 portrait" src="http://www.geoffcordner.com/wp-content/uploads/2019/10/harry-dean-stanton.jpg" alt="Harry Dean Stanton" width="798" height="1136">
<figcaption id="caption-attachment-27" class="wp-caption-text">Harry Dean Stanton, Hollywood Hills Gothic, Los Angeles 1994</figcaption>
</figure> -->

