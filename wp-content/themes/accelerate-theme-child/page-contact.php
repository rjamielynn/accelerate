<?php
/*
Template Name: Contact 
*/

get_header(); ?>
	
	<div id="primary" class="site-content">
		<div id="content" role="main">
			<?php while ( have_posts() ) : the_post(); ?>
				<div id="contact_form">
					<h2><?php the_title(); ?></h2>
					<?php the_content(); ?>
				</div>
			<?php endwhile; // end of the loop. ?>

		</div><!-- #content -->
	</div><!-- #primary -->

<?php get_footer(); ?>