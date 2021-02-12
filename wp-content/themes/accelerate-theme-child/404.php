<?php
/**
 * The template for displaying the 404 page
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package WordPress
 * @subpackage Accelerate Marketing
 * @since Accelerate Marketing 2.0
 */

get_header(); ?>


	<div id="primary" class="site-content sidebar">
		<div class="main-content" role="main">
      <div class="p404-wrapper">
        <div class="p404-main-img">
         <figure>
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/pretty_blue_pit.jpg"/>
            <figcaption>Photo by Zachary Casler on Unsplash</figcaption>
          </figure>
        </div>
        <div class="p404-content">
			    <h1>Oh No!…</h1>
          <p>Sorry, this page no longer exists, never existed or has been moved. We feel like complete jerks for totally misleading you.</p>

          <p>Enjoy these photos of cute dogs or feel free to take a look around our <a class="new-link" href="<?php echo site_url('/blog/')?>">blog</a> or some of our featured <a class="new-link" href="<?php echo site_url('/case-studies/')?>">work</a>.</p>
        </div> 
        <div class="p404-img-right">
          <figure>
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/dog_in_costume.jpg"/>
            <figcaption>Photo by Karsten Winegeart on Unsplash</figcaption>
          </figure>
      </div> 
      <div class="p404-img-full">
        <figure>
          <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/two_happy_dogs.jpg"/>
          <figcaption>Photo by Mia Anderson on Unsplash</figcaption>
        </figure>
      </div>
    </div><!-- .main-content -->
	</div><!-- #primary -->

<?php get_footer(); ?>