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

<section class="portfolio">


<?php $loop = new WP_Query( array( 'post_type' => 'travaux', 'posts_per_page' => 5, 'paged' => $paged) ); ?>

<?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
	<article class="travaux-accueil">
		<div class="image-travaux text-center" style="background:<?php the_field("couleur"); ?>">
			<?php the_post_thumbnail( $size ); ?>
		</div>

		<div class="infos-travaux text-center">
			<h3>
				<?php the_title(); ?>
			</h3>

			<hr class="separator" style="background:<?php the_field("couleur"); ?>">

			<?php the_content() ; ?>

			<?php 
			// get raw date
			$date = get_field('date', false, false);

			// make date object
			$date = new DateTime($date);
			?>

			<p class="details-projet"><span>Date :</span> <?php echo $date->format('d/m/Y'); ?> <span>- Type de projet :</span> <?php the_field("type"); ?></p>
			
		</div>
	</article>
<?php endwhile ; ?>

	
</section>


