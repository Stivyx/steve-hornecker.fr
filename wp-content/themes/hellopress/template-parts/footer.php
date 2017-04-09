<?php
/**
 * The default template for displaying content
 *
 * Used for both single and index/archive/search.
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

?>
<section class="row text-center section-footer" >



	<div class="medium-5 column col-gauche">
		COPYRIGHT © <?php echo date('Y'); ?>
	</div>
	<div class="medium-2 column">
		
		<?php 

		$image = get_field('Logo_footer');
		$size = 'logo-footer'; // (thumbnail, medium, large, full or custom size)

		if( $image ) {
			echo wp_get_attachment_image( $image, $size );
		}
		?>
		
	</div>
	<div class="medium-5 column">
		TOUS DROITS RÉSERVÉS
	</div>



</section>