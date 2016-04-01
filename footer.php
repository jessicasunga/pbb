<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the "off-canvas-wrap" div and all content after.
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

?>
		</section>
		<div id="footer-container">
			<footer id="footer">
				<div class="row">
					<div class="medium-8 large-9 columns">
						<a href="#" class="footer-button button bold">Sponsor a Puppy</a>
						<a href="#" class="footer-button button bold">Make a Donation</a>
					</div>
					<div class="medium-4 large-3 columns hide-for-small-only">
						<div class="social-media">
							<p class="bold">Get in touch with us:</p>
							<a href="#"><i class="fa fa-facebook-official"></i></a>
							<a href="#"><i class="fa fa-twitter-square"></i></a>
							<a href="#"><i class="fa fa-rss-square"></i></a>
							<a href="#"><i class="fa fa-instagram"></i></a>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="medium-8 large-9 columns">
						<div class="row">
							<div class="small-12 medium-4 columns">
								<ul>
									<li class="bold"><a href="#">Contact</a></li>
									<li><a href="#">Mailing List</a></li>
									<li><a href="#">Volunteer</a></li>
								</ul>
								<ul>
									<li class="bold"><a href="#">Apply</a></li>
									<li><a href="#">Apply for a Service Dog</a></li>
									<li><a href="#">Apply for a Released Dog</a></li>
								</ul>
							</div>
							<div class="small-12 medium-4 columns">
								<ul>
									<li class="bold"><a href="#">About Us</a></li>
									<li><a href="#">FAQ</a></li>
									<li><a href="#">Puppy Placement</a></li>
								</ul>
								<ul>
									<li class="bold"><a href="#">Awards &#38; Publications</a></li>
									<li><a href="#">PBB &#38; C2W Awards</a></li>
									<li><a href="#">Publications</a></li>
								</ul>
							</div>
							<div class="small-12 medium-4 columns">
								<ul>
									<li class="bold"><a href="#">Photos &#38; Videos</a></li>
									<li><a href="#">Holiday Cards &#38; Calendars</a></li>
									<li><a href="#">Videos</a></li>
								</ul>
							</div>
						</div>
					</div>
					<div class="medium-4 large-3 columns">
						<div class="social-media show-for-small-only">
							<p class="bold">Get in touch with us:</p>
							<a href="#"><i class="fa fa-facebook-official"></i></a>
							<a href="#"><i class="fa fa-twitter-square"></i></a>
							<a href="#"><i class="fa fa-rss-square"></i></a>
							<a href="#"><i class="fa fa-instagram"></i></a>
						</div>
						<p class="footer-contact">263 West 38th Street, 4th Floor.<br>
						   New York, NY 10018<br>
						   Tel. 212.680.9562<br>
						   Fax 212.689.9330<br>
						   programs@puppiesbehindbars.com
						</p>	
					</div>
				</div>
				<?php do_action( 'foundationpress_before_footer' ); ?>
				<?php dynamic_sidebar( 'footer-widgets' ); ?>
				<?php do_action( 'foundationpress_after_footer' ); ?>
			</footer>
		</div>
		<div class="row" id="copyright">
			<div class="small-12 columns text-center">
				<p>Puppies Behind Bars 2016.</p>
			</div>
		</div>
		<?php do_action( 'foundationpress_layout_end' ); ?>

<?php if ( get_theme_mod( 'wpt_mobile_menu_layout' ) == 'offcanvas' ) : ?>
		</div><!-- Close off-canvas wrapper inner -->
	</div><!-- Close off-canvas wrapper -->
</div><!-- Close off-canvas content wrapper -->
<?php endif; ?>


<?php wp_footer(); ?>
<?php do_action( 'foundationpress_before_closing_body' ); ?>
</body>
</html>
