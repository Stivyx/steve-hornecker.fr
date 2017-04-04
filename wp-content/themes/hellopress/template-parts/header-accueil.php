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

<div id="post-<?php the_ID(); ?>" class="medium-12 text-center">
		<h1><?php the_title(); ?></h1>
		<hr class="separateur-titre" >
		<h2>
			<?php the_field("metier"); ?>
		</h2>
		<?php the_content( __( 'Continue reading...', 'foundationpress' ) ); ?>
</div>
