<?php
/**
 * The template for displaying the about page
 *
 *
 * @package WordPress
 * @subpackage Accelerate Marketing
 * @since Accelerate Marketing 2.0
 */

get_header(); ?>

<div class="intro">
  <?php the_content(); ?>
</div>

<div id="primary" class="site-content sidebar">
		<div class="main-content" role="main">
      <section class="service-wrap">
        <ul class="services">
          <?php query_posts('post_type=services'); ?>
					  <?php while ( have_posts() ) : the_post(); 
						  $image=get_field("image");
						  $size="medium";
					  ?>
              <li>
                <figure>
                  <?php echo wp_get_attachment_image($image, $size); ?>
                </figure>
                <div class="service-details">
                  <h4><?php the_title(); ?></h4>
                  <p><?php the_content(); ?></p>
                </div>
              </li>
            <?php endwhile; ?>
          <?php wp_reset_query(); ?>
        </ul>
      </section>
		</div><!-- .main-content -->
	

	</div><!-- #primary -->
	<nav id="navigation" class="container">
			<div class="contact-bar"><h2>Interested in working with us?</h2><a class="button" href="<?php echo site_url('/contact-us/') ?>">Contact Us</a></div>
		</nav>	
<?php get_footer(); ?>