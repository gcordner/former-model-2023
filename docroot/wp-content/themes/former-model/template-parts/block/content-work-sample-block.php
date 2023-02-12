<?php
/**
 * Block Name: Custom Image Block.
 *
 * This is the template that displays the custom image block.
 *
 * @package former-model
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


<div class = "work-block__container card">
<figure id="attachment_<?php echo esc_html( $img_id ); ?>" class="wp-caption aligncenter img-<?php echo esc_html( $orientation ); ?>">
<img loading="lazy" class="size-full wp-image-<?php echo esc_html( $img_id ); ?>" src="<?php echo esc_html( $img_url ); ?>" alt="<?php echo esc_html( $alt ); ?>">

</figure> 
<div class="card-body">
<div class="work-block__title text-center">
<h3><?php if ( ! empty( $url ) ) : ?>
<a href="<?php echo wp_kses_post( $url ); ?>" target="_blank" rel="nofollow"> 
	<?php echo wp_kses_post( $block_title ); ?></a>
<?php else : ?>
	<?php echo wp_kses_post( $block_title ); ?>
<?php endif; ?></h3>
</div>
<div class="work-block__content">
<?php echo wp_kses_post( $block_content ); ?>
</div>

<?php
if ( ! empty( $block_technology ) ) :
	?>
<div class="work-block__technology"><p>
	<strong>Technologies: </strong>
	<?php
	echo wp_kses_post( $block_technology );
	?>
</p></div>
<?php endif; ?>
</div>
</div>


