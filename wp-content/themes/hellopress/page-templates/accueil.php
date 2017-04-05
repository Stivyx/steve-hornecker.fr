<?php
/*
Template Name: Accueil
*/

get_header(); ?>

<main>
	
	<?php get_template_part( 'template-parts/accueil/header-accueil'); ?>
		
	<?php get_template_part( 'template-parts/accueil/portfolio-accueil'); ?>

	<?php get_template_part( 'template-parts/accueil/competences-accueil'); ?>

</main>

<?php get_footer();
