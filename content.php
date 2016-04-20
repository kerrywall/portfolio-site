<?php
/**
 * @package Wall Enterprises
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(" clearfix"); ?>>
	<header class="entry-header">
		<?php the_title( sprintf( '<h1 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h1>' ); ?>

		<?php if ( 'post' == get_post_type() ) : ?>
		<div class="entry-meta">
			<h5 class="byline">Posted by <?php the_author(); ?> on <?php the_date(); ?></h5> 
		</div><!-- .entry-meta -->
		<?php elseif ( 'portfolio' == get_post_type() ) : ?>
		<?php endif; ?>
	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php if ('post' == get_post_type() ) : ?>
		<?php the_content( __( 'Continue reading <span class="meta-nav">&rarr;</span>', 'wall-enterprises' ) ); ?>
		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . __( 'Pages:', 'wall-enterprises' ),
				'after'  => '</div>',
			) );
		?>
	<?php elseif ('portfolio' == get_post_type() ) : ?>
		<?php while( has_sub_field('images') ): ?>
		  <div class="taggedImage">
		    <?php $image = get_sub_field('image'); ?>
		    <a href=" <?php the_permalink(); ?> "><img src="<?php echo $image['sizes']['medium'] ?>" class="archive"></a>
		  </div>
		<?php endwhile; ?>
		<div class="taggedInfo clearfix">
			<p><?php the_field('description'); ?></p>
			<p><strong>Also uses:</strong> <?php the_terms($post->ID, 'technologies'); ?></p>
			<?php
				wp_link_pages( array(
					'before' => '<div class="page-links">' . __( 'Pages:', 'wall-enterprises' ),
					'after'  => '</div>',
				) );
			?>
		</div>
	<?php endif ?>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<?php if ( 'post' == get_post_type() ) : // Hide category and tag text for pages on Search ?>
			<?php
				/* translators: used between list items, there is a space after the comma */
				$categories_list = get_the_category_list( __( ', ', 'wall-enterprises' ) );
				if ( $categories_list && twentyfourteen_categorized_blog() ) :
			?>
			<span class="cat-links">
				<?php printf( __( 'Posted in %1$s', 'wall-enterprises' ), $categories_list ); ?>
			</span>
		<?php elseif ('portfolio' == get_post_type() ) : ?>

			<?php endif; // End if categories ?>

			<?php
				/* translators: used between list items, there is a space after the comma */
				$tags_list = get_the_tag_list( '', __( ', ', 'wall-enterprises' ) );
				if ( $tags_list ) :
			?>
			<span class="tags-links">
				<?php printf( __( '<strong>Tagged with:</strong> %1$s', 'wall-enterprises' ), $tags_list ); ?>
			</span>
			<?php endif; // End if $tags_list ?>
		<?php endif; // End if 'post' == get_post_type() ?>

		

		<?php edit_post_link( __( 'Edit', 'wall-enterprises' ), '<span class="edit-link clearfix">', '</span>' ); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->