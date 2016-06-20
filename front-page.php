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
			<div>
				<h2>Ik wil informatie over</h2>
					<ul class="textbox">
						<li>Inschrijvingen</li>
						 <li>De peuter- en kleuterschool</li>
						<li>De lagere school (1ste - 6de klas)</li>
						<li>De middelbare school (1ste graad: 7de en 8ste klas)</li>
						<li>De middelbare school (2de en 3de graad: 9de - 12de klas)</li>
						<li>Kinderopvang</li>
					</ul>
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
			
			<div>
				<h2>Contact</h2>
				<div class="textbox">
					<p>
						Vrije Rudolf Steinerschool Vlaanderen (basisonderwijs)<br>
						Middelbare Rudolf Steinerschool Vlaanderen<br>
						Kasteellaan 54<br>
						9000 Gent<br>
						Telefoon : 09 235 28 00<br>
						info@steinerschoolgent.be
					</p>
				</div>
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