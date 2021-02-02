<?php
/**
 * The template for displaying the about page
 *
 Template Name: About
 *
 * @package WordPress
 * @subpackage Accelerate Marketing
 * @since Accelerate Marketing 2.0
 */

get_header(); ?>

<div class="overview">
  <?php the_content(); ?>
</div>

<div id="primary" class="site-content sidebar">
		<div class="main-content" role="main">
			<?php while ( have_posts() ) : the_post(); 
        $service_1 = get_field('service_1');
        $service_2 = get_field('service_2');
        $service_3 = get_field('service_3');
        $service_4 = get_field('service_4');
        $service_desc_1 = get_field('service_desc_1');
        $service_desc_2 = get_field('service_desc_2');
        $service_desc_3 = get_field('service_desc_3');
        $service_desc_4 = get_field('service_desc_4');
				$image_1 = get_field('image_1');
				$image_2 = get_field('image_2');
        $image_3 = get_field('image_3');
        $image_4 = get_field('image_4');
				$size = "medium"; ?>

				<article class="services">
 					<div class="services-one">
						<h4><?php if ($service_1) {
              echo $service_1;
            } ?></h4>
            <p><?php if($service_desc_1) {
              echo $service_desc_1;
            } ?></p>
            <?php if ($image_1) {  
							echo wp_get_attachment_image($image_1, $size);
						 } ?>
          </div>
          
          <div class="services-two">
            <h4><?php if ($service_2) {
              echo $service_2;
            } ?></h4>
            <p><?php if($service_desc_2) {
              echo $service_desc_2;
            } ?></p>
            <?php if ($image_2) { 
							echo wp_get_attachment_image($image_2, $size);
						} ?>
          </div>

          <div class="services-three">
            <h4><?php if ($service_3) {
              echo $service_3;
            } ?></h4>
            <p><?php if($service_desc_3) {
              echo $service_desc_3;
            } ?></p>
            <?php if ($image_3) { 
							echo wp_get_attachment_image($image_3, $size);
						} ?>
          </div>

          <div class="services-four">
            <h4><?php if ($service_4) {
              echo $service_4;
            } ?></h4>
            <p><?php if($service_desc_4) {
              echo $service_desc_4;
            } ?></p>
            <?php if ($image_4) { 
							echo wp_get_attachment_image($image_4, $size);
						} ?>
					</div>

				</article>
				
			<?php endwhile; // end of the loop. ?>
		</div><!-- .main-content -->
	

	</div><!-- #primary -->
	<nav id="navigation" class="container">
			<div class="left"><a class="button" href="<?php echo site_url('/contact-us/') ?>">Contact Us</a></div>
		</nav>	
<?php get_footer(); ?>