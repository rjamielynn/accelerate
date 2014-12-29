<?php
/**
 * The template for displaying about
 *
 *
 * @package WordPress
 * @subpackage Accelerate_Theme
 * @since Accelerate Theme 1.1
 */

get_header(); ?>
	<div id="primary" class="site-content">
		<div id="content" role="main">
			
		<?php while ( have_posts() ) : the_post(); 
			$size = "thumbnail";
			$services = get_field('services');
			$image = get_field('image'); ?>

			<article class="about">
				<div class="about_images">
					<?php if($image) { ?>
					<?php echo wp_get_attachment_image( $image, $size ); ?>
					<?php } ?>
				</div>
				
				<aside class="about_sidebar">
   					<h2><?php the_title(); ?></h2>
   					<?php the_content(); ?>
				</aside>
			</article>


		<?php endwhile; // end of the loop. ?>

		</div><!-- #content -->
	</div><!-- #primary -->
<?php get_footer(); ?>





