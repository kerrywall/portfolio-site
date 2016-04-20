<?php

get_header();

$onePageQuery = new WP_Query( 
	array( 
		'posts_per_page' => -1,
		'post_type' => 'page',
		'orderby' => 'menu_order',
		'order' => 'ASC',
		'post__not_in' => array( 42 ) // if you wanted to exclude a page with the ID of 42
		) 
); ?>

<?php if(have_posts()) while(have_posts()): the_post(); ?>
dfsd
	<article>
		<header class="major">
			<h2><?php the_title(); ?></h2>
		</header>
		<?php the_content(); ?>
		<?php the_field('description'); ?>
		<p>jkl</p>
	</article>
<?php endwhile; ?>