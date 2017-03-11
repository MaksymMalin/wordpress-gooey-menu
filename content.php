<?php
/**
 * @package Church
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	
		<?php church_post_thumbnail(); ?><!-- post image -->

	<header class="entry-header ">
		<?php if ( is_single() ) : ?>
			<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
		<?php else : ?>
			<?php the_title( '<h1 class="entry-title"><a href=" ' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h1>' ); ?></a>
		<?php endif; ?>
	</header><!-- .entry-header -->

	<div class="entry-body">

		<?php if ( 'post' == get_post_type() ) : ?>
		<div class="entry-meta">
			<?php church_entry_meta(); ?>
		</div><!-- .entry-meta -->
		<?php endif; ?>

		<?php if ( is_search() ) : // Only display Excerpts for Search ?>
		<div class="entry-summary">
			<?php the_excerpt(); ?>
		</div><!-- .entry-summary -->
		<?php else : ?>
		<div class="entry-content">
			<?php the_content( __( 'Continue reading <span class="meta-nav">&rarr;</span>', 'Church' ) ); ?>
			<?php
				wp_link_pages( array(
					'before' => '<div class="page-links">' . __( 'Pages:', 'Church' ),
					'after'  => '</div>',
				) );
			?>
		</div><!-- .entry-content -->
		<?php endif; ?>

		<?php if ( is_single() && 'post' == get_post_type() ) : ?>
		<footer class="entry-meta">
			<?php church_footer_entry_meta(); ?>
		</footer><!-- .entry-meta -->
		<?php endif; ?>
	</div><!-- .entry-body -->

</article><!-- #post-## -->
