<?php
/**
 * The Template for displaying all single posts.
 *
 * @package Church
 */

get_header(); ?>

	<div id="primary" class="content-area row">
		<main id="main" class="site-main large-12 columns" role="main">

		<?php while ( have_posts() ) : the_post(); ?>





				<?php get_template_part( 'content', get_post_format() ); ?>



				<?php
					// If comments are open or we have at least one comment, load up the comment template
					if ( comments_open() || '0' != get_comments_number() ) {
						comments_template();
					}
				?>

	
		<?php endwhile; // end of the loop. ?>
		</main><!-- #main -->
<div class="large-12 columns"><?php get_sidebar(); ?>	</div>
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
