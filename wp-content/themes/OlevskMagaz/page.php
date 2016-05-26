<?php

/**

 * The template for displaying all pages

 *

 * This is the template that displays all pages by default.

 * Please note that this is the WordPress construct of pages and that other

 * 'pages' on your WordPress site will use a different template.

 *

 * @package WordPress

 * @subpackage delish

 * @since delish 1.0

 */



get_header(); ?>
<?php get_sidebar();?>
	<div class="page">
			<?php while ( have_posts() ) : the_post(); ?>

				<?php the_content();?>
			<?php endwhile; ?>
	</div>


<?php get_footer(); ?>