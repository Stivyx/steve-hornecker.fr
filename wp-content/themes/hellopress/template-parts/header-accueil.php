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

<div id="post-<?php the_ID(); ?>" class="header-accueil medium-12 text-center" >
		<h1><?php the_title(); ?></h1>
		<hr class="separateur-titre" >
		<?php the_content( __( 'Continue reading...', 'foundationpress' ) ); ?>
	<hr />
</div>