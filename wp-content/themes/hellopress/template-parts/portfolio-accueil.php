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

<section class="row expanded travaux-accueil">

	<?php $loop = new WP_Query( array( 'post_type' => 'travaux', 'posts_per_page' => 5, 'paged' => $paged) ); ?>

	<?php while ( $loop->have_posts() ) : $loop->the_post(); ?>

	<div class="image-travaux medium-6 column text-center" style="background:<?php the_field("couleur"); ?>">
		<?php the_post_thumbnail( $size ); ?>
	</div>

	<div class="infos-travaux medium-6 column text-center">
		<h3>
			<?php the_title(); ?>
		</h3>

		<?php the_content() ; ?>
		
	</div>
			
	<?php endwhile ; ?>


</section>

