<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages and that
 * other 'pages' on your WordPress site will use a different template.
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */

get_header(); ?>



<div id="content" class='container'>
	<div class="row">
		<div class="col-sm-3 col-md-2 sidebar">
			<ul class="nav nav-sidebar" id="subnav">
			  <?php
				  if($post->post_parent)
				  	$children = wp_list_pages("title_li=&child_of=".$post->post_parent."&echo=0");
				  else
				  	$children = wp_list_pages("title_li=&child_of=".$post->ID."&echo=0");
				  if ($children) { ?>
					  <ul>
					  <?php echo $children; ?>
					  </ul>
				  <?php } ?>
			</ul>
		</div>
		<div class="col-sm-9 col-md-10 main">
			<div id="primary" class="content-area">
				<div id="content" class="site-content" role="main">

					<?php
						// Start the Loop.
						while ( have_posts() ) : the_post();

							// Include the page content template.
							get_template_part( 'content', 'page' );

							// If comments are open or we have at least one comment, load up the comment template.
							if ( comments_open() || get_comments_number() ) {
								comments_template();
							}
						endwhile;
					?>

				</div><!-- #content -->
			</div><!-- #primary -->		
		</div>
	</div> <!-- .row -->
</div><!-- #content -->

<?php

get_footer();
