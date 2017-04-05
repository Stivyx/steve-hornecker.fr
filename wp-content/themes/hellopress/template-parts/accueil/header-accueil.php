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
<section class="row expanded header-accueil" style="background:url(<?php $imageData = wp_get_attachment_image_src(get_post_thumbnail_id ( 4 ), 'fp-xlarge'); echo $imageData[0];?>); background-size:cover; background-repeat:no-repeat; background-position: 50% 50%;">

	<?php if ( have_posts() ) : ?>

	<?php /* Start the Loop */ ?>
	<?php while ( have_posts() ) : the_post(); ?>
		<div id="post-<?php the_ID(); ?>" class="medium-12 text-center">
			<h1><?php the_title(); ?></h1>
			<hr class="separateur-titre" >
			<h2>
				<?php the_field("metier"); ?>
			</h2>
			<?php the_content( __( 'Continue reading...', 'foundationpress' ) ); ?>
		</div>

	<?php endwhile; ?>
			
	<?php endif; // End have_posts() check. ?>

</section>