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

<section class="section-competences-accueil">

<div class="competences-accueil text-center row small-up-2 large-up-4">
	<h2 >
	Compétences
	</h2>

	<?php $loop = new WP_Query( array( 'post_type' => 'competences', 'posts_per_page' => 8, 'order' => "ASC") ); ?>

	<?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
		<figure class="column">
				
				<div class="image-competences" >
					<?php the_post_thumbnail( "competences" ); ?>
				</div>

				<figcaption>
					<h3>
						<?php the_title(); ?>
					</h3>
				</figcaption>

				
		</figure>
	<?php endwhile ; ?>
</div>

	
</section>


