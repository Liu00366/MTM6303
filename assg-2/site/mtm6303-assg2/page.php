<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage MTM6303_assg2
 * @since MT6303 Assignment 1.0
 * @version MT6303 Assignment 1.0
 */

get_header(); ?>

<div class="container">
	<div class="row">
		<img class="img-responsive" src="<?php echo get_stylesheet_directory_uri()
		?>/assets/images/page.jpg">

	</div>
	<?php
			while ( have_posts() ) : the_post();

				get_template_part( 'template-parts/page/content', 'page' );

			endwhile; // End of the loop.
			?>
	</div>

</div>
<?php get_footer();