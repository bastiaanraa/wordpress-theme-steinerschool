<?php get_header(); ?>

<div id="content"> 
	<div class="row">
		<div class="col-md-12" style="margin: 15px 0px;">

			<?php if ( have_posts() ) : ?>
				<?php while ( have_posts() ) : the_post(); ?>
					<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
						<div class="entry clear">
							<?php the_content(); ?>
						</div><!--. entry-->
					</div><!-- .post-->
				<?php endwhile; /* rewind or continue if all posts have been fetched */ ?>
					
				<?php else : ?>
			<?php endif; ?>
		</div>
	</div>
	<div class="row">
		<div class="col-md-6">
			<div> <!-- Ik wil -->
				<?php $recent = new WP_Query("pagename=frontpage-ik-wil"); while($recent->have_posts()) : $recent->the_post();?>
				<?php the_content(); ?>
				<?php endwhile; ?>
			</div>
			<div>
				<h2>Activiteiten</h2>
				 <?php $latest = new WP_Query('showposts=5'); ?>
				<?php while( $latest->have_posts() ) : $latest->the_post(); ?>
				<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
				
				<?php the_content(); ?>
				<?php endwhile; ?>
			</div>
			
		</div>
		<div class="col-md-6">
			
			<div> <!-- Contact -->
				<?php $recent = new WP_Query("pagename=frontpage-contact"); while($recent->have_posts()) : $recent->the_post();?>
				<?php the_content(); ?>
				<?php endwhile; ?>
			</div>
			<div> <!-- link to Facebook -->
				<?php $recent = new WP_Query("page_id=182"); while($recent->have_posts()) : $recent->the_post();?>
				<?php the_content(); ?>
				<?php endwhile; ?>
			</div>
		</div>
	</div><!--.row-->
</div><!--#content-->

<?php get_footer(); ?>