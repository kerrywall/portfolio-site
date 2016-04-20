<?php

// get the header
get_header();

// query the pages
$onePageQuery = new WP_Query( 
	array( 
		'posts_per_page' => -1,
		'post_type' => 'page', 
		'orderby' => 'menu_order',
		'order' => 'ASC'
		) 
);

// query the portfolio items
$portfolioQuery = new WP_Query(
	array(
		'posts_per_page' => -1,
		'post_type' => 'portfolio',
		'order_by' => 'title',
		'order' => 'DSC'
		)
	);

 ?>

<!-- call in the pages -->
<?php if ( $onePageQuery->have_posts() ) : ?>

	<?php while ($onePageQuery->have_posts()) : $onePageQuery->the_post(); ?>

		<section id="<?php echo $post->post_name; ?>" class="divider clearfix <?php echo $post->post_name; ?>">
			<div class="content">
				<div class="logo">
					<span class="fa fa-<?php the_field('font_awesome_logo'); ?>"></span>
				</div>
				<h2><?php the_title(); ?></h2>
			<?php the_content(); ?>
			</div>
			
		</section>
	<?php endwhile; ?>
	
	<?php wp_reset_postdata(); ?>

<?php elseif ( $portfolioQuery->have_posts() ) : ?>
	
<?php else:  ?>
	[stuff that happens if there aren't any posts]
<?php endif; ?>
<!-- end call in the pages -->

<!-- call in the portfolio items -->
<?php if ( $portfolioQuery->have_posts() ) : ?>

	<section id="portfolio" class="divider clearfix portfolio">
		<div class="content">
			<div class="logo">
				<span class="fa fa-briefcase"></span>
			</div>
			<h2>Portfolio</h2>

			<?php while ($portfolioQuery->have_posts()) : $portfolioQuery->the_post(); ?>
				<div class="thing">
					<section id="<?php echo $post->post_name; ?>" class="item">
						<div class="images">
						  <a href="<?php echo get_permalink(); ?>">
						  <h5 class="title"></span> <?php the_field('title'); ?></h5>
						  <?php while( has_sub_field('images') ): ?>
						    <div class="image">
						      <?php $image = get_sub_field('image'); ?>
						      <img src="<?php echo $image['sizes']['large'] ?>">
						    </div>
						  <?php endwhile; ?>
						  <div class="infoBox">
						  	<div class="info">
						  		<p class="tags"><strong>Made with:</strong>	<?php the_terms($post->ID, 'technologies'); ?></p>
						  		<p class="link"><a href="<?php the_field('url') ?>" target="_blank">View original <span class="fa fa-external-link"></span></a></p>
						  		<p class="client"><?php the_field('made_for'); ?></p>
						  	</div>
						  </div>
							  
						</div>
						</a>
					</section>
				</div>
			<?php endwhile; ?>

			</section>
		</div>
	
	<?php wp_reset_postdata(); ?>
	
<?php else:  ?>
	[stuff that happens if there aren't any posts]
<?php endif; ?>
<!-- end calling in the portfolio items -->

<!-- get the footer -->
<?php get_footer(); ?>