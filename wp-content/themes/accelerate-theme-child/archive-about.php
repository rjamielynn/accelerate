<?php
/**
 * The template for the archive of about.
 *
 * This is the template that displays the archive of case studies.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */

get_header(); ?>
	<div id="primary" class="site-content">
		<div id="content" role="main">
			<h3>OUR SERVICES</h3>
			<p>We take pride in our clients and the conent we create for them. Here's a brief overview of our offered services.</p> 	
			<?php while ( have_posts() ) : the_post(); 
			$size = "thumbnail";
			$image = get_field('image');
			 ?>
			
			<article class="about">
				<div class="about-images">
					<a href="<?php the_permalink(); ?>">
					<?php if($image) { ?>
					<?php echo wp_get_attachment_image( $image, $size ); ?>
					<?php } ?>
					</a>
				</div>
				<aside>
   					<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
   					
   					<?php the_excerpt(); ?>
				</aside>
			</article>

		<?php endwhile; // end of the loop. ?>
			
			<section class="about_footer">
				<h4>Interested in working with us?</h4>
				<a class="button" href="#">Contact Us</a>
			</section>

		</div><!-- #content -->
	</div><!-- #primary -->


<?php get_footer(); ?>