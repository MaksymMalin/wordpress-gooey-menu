<?php
/**
 * The template used for displaying testimonials.
 *
 * @package Sela
 */
?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

		<div class="testimonial-thumbnail">
			<?php the_post_thumbnail($size = 'post-thumbnail', $attr = '' ); ?>
		</div>


	<div class="entry-content">
		<?php the_content(); ?>
	</div>
	<header class="entry-header">
		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
	</header>
	<?php edit_post_link( __( 'Edit', 'sela' ), '<footer class="entry-meta"><span class="edit-link">', '</span></footer>' ); ?>
</article><!-- #post-## -->
