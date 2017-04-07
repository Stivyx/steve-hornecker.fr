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

<section class="section-contact-accueil" style="background:url(<?php the_field("image_background_contact"); ?>); background-repeat:no-repeat; background-position: 50% 50%;">

	<h2 class="text-center" >Contact</h2>

	<?php the_field("formulaire_de_contact"); ?>

</section>


