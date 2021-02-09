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
      <div class="left">
        <figure>
          <img src="img/taxi-photo.jpg" alt="dog in costume" />
        </figure>
      </div>
      <div>
			  <h1>Oh No!…</h1>
        <p>Sorry, this page no longer exists, never existed or has been moved. We feel like complete jerks for totally misleading you.</p>

        <p>Enjoy these photos of cute dogs or feel free to take a look around our <a class="new-link" href="<?php echo site_url('/blog/')?>">blog</a> or some of our featured <a class="new-link" href="<?php echo site_url('/case-studies/')?>">work</a>.</p>
      </div>  
    </div><!-- .main-content -->
	</div><!-- #primary -->

<?php get_footer(); ?>