<?php
get_header();

if (have_posts()) :
	while (have_posts()) : the_post(); ?>

		<article class="post page">
			<h4><?php the_title(); ?></h4>

			<?php the_content(); ?>

		</article>

	<?php endwhile;

else : 
	echo '<p>No Content Found</p>';

endif; ?>

	// News Loop
<div class="news-column clearfix">

	<div class="news-column">
	<?php	$newsPost = new WP_Query('cat=4&posts_per_page=2');

if ($newsPost->have_posts()) :
		
	while ($newsPost->have_posts()) : $newsPost->the_post(); ?>
			
		<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
		<?php the_excerpt();

	endwhile;

	else : 
		echo '<p>No Content Found</p>';

	endif; ?>
	</div>
<?php

	wp_reset_postdata();

get_footer();

?>