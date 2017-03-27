<?php
/*
Template Name: Accueil
*/

get_header(); ?>

<main>
	<section class="row header-accueil" style="background:url(<?php $imageData = wp_get_attachment_image_src(get_post_thumbnail_id ( 4 ), 'fp-xlarge'); echo $imageData[0];?>); background-size:cover; background-repeat:no-repeat;">
	<?php if ( have_posts() ) : ?>

		<?php /* Start the Loop */ ?>
		<?php while ( have_posts() ) : the_post(); ?>
			<?php get_template_part( 'template-parts/header-accueil', get_post_format() ); ?>
		<?php endwhile; ?>

		<?php else : ?>
			<?php get_template_part( 'template-parts/content', 'none' ); ?>

		<?php endif; // End have_posts() check. ?>

	</section>

</main>

<?php get_footer();
