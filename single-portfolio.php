<?php
/**
 * The Template for displaying all single posts
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<div id="content" class="site-content" role="main">
			<?php
				// Start the Loop.
				while ( have_posts() ) : the_post(); ?>

				<section id="<?php echo $post->post_name; ?>" class="portfolioItem">
					<a href="<?php the_field('url'); ?>" target="_blank"><h3 class="portfolioTitle"><?php the_field('title'); ?> <span class="fa fa-external-link external"></span></h3></a>
					<div class="images">
					  <?php while( has_sub_field('images') ): ?>
					    <div class="image">
					      <?php $image = get_sub_field('image'); ?>
					      <img src="<?php echo $image['sizes']['medium'] ?>">
					    </div>
					  <?php endwhile; ?>
					</div>
					<p class="portfolioDesc"><?php the_field('description'); ?></p>
					<p class="portfolioClient"> <strong>Made for:</strong> <?php the_field('made_for'); ?></p>
					<p class="portfolioTags"><?php the_terms($post->ID, 'technologies', '<strong>Made with:</strong> ' ); ?></p>
					</a>
				</section>

				<?php endwhile; ?>
		</div><!-- #content -->
	</div><!-- #primary -->


<?php
get_footer();
