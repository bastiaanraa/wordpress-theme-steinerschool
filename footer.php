<footer class="footer" id="footer">
	<div class="container">
		<div class="row">
			<div class="col-xs-12">
				<?php wp_nav_menu( array( 'menu' => 'footer-menu', 'depth' => 2 ) ); ?>
			</div>
		</div>
		
		<!--
		<div class="footerfourcolumn">
			<h2>Voor ouders</h2>
			<ul class="front"><li><a href="/mijn-gegevens">Mijn gegevens</a></li></li></ul>
		</div>
		-->
		<div class="footerend">
			<br />
			Iets niet juist op deze pagina? 
			<a href="#" style="cursor:hand;font-size: 8pt;text-align: center;" >Laat het ons weten!</a><br />
			Vrije Rudolf Steinerschool Gent - Kasteellaan 54 - 9000 Gent - 09/235.28.00 - 
			<a style="font-size: 8pt;text-align: center;" href="mailto:info@steinerschoolgent.be?subject=Informatie over de school via www.steinerschoolgent.be">info@steinerschoolgent.be</a>
			 - <a style="font-size: 8pt;text-align: center;" href="http://feeds.feedburner.com/VrijeRudolfSteinerschoolGent">RSS</a>
		</div>
	
	</div>
</footer>
</div> <!-- wrap -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<link rel="stylesheet" src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js">
<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/steinerschool.js"></script>
<?php wp_footer(); ?>
</body></html>
