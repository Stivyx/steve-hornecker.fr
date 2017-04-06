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
<?php if ( have_posts() ) : ?>
<?php while ( have_posts() ) : the_post(); ?>

<section class="row section-propos-accueil">

	<h2 class="text-center" >À propos </h2>

	<div class="large-3 column text-center large-push-8">
		<img src='<?php the_field("image_propos"); ?>' alt="">
	</div>

	<div class="large-6 column large-pull-5">
		<?php the_field('texte_propos'); ?>
	</div>
	

<?php endwhile; ?>
<?php endif; ?>

</section>


