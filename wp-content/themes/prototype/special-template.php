<?php
get_header();
/*
Template Name: Special Layout
*/

if (have_posts()) :
	while (have_posts()) : the_post(); ?>

	<article class="post page">
		<h2><?php the_title(); ?></h2>

		<!-- Info Box -->
		<div class="info-box">
			<h4>Disclaimer Title</h4>
			<p> This is a short article fordisclamer info</p>
		</div> <!-- /Info Box-->

		<?php the_content(); ?>
		


	</article>

	<?php endwhile;

	else : 
		echo '<p>No Content Found</p>';

	endif;

get_footer();

?>