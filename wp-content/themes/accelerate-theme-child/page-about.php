<?php
/*
Template Name: About 
*/

get_header(); ?>
	
	<div id="primary" class="site-content" id="contact_form">
		<div id="content" role="main">
			<?php while ( have_posts() ) : the_post(); ?>
				<h2><?php the_title(); ?></h2>
				<?php the_content(); ?>
			<?php endwhile; // end of the loop. ?>

		</div><!-- #content -->
	</div><!-- #primary -->

<?php get_footer(); ?>