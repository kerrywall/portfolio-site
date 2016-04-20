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

				<article>
				      <header class="major">
				        <h2><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
				        <h5 class="byline">Posted by <?php the_author_posts_link(); ?></a> on <?php the_date(); ?></h5>
				      </header>

				      <?php the_content(); ?>

				      <?php previous_post_link('<strong>%link</strong>'); ?> 
				    </article>
				  <?php endwhile; ?>


		</div><!-- #content -->
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
