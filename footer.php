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
				<div class="row display">
					<div class="medium-9 columns">
						<a href="#" class="button">Sponsor a Puppy</a>
						<a href="#" class="button">Make a Donation</a>
					</div>
					<div class="medium-3 columns hide-for-small-only">
						<div class="social-media">
							<p class="bold">Get in touch with us:</p>
							<i class="fa fa-facebook-official"></i>
							<i class="fa fa-twitter-square"></i>
							<i class="fa fa-rss-square"></i>
							<i class="fa fa-instagram"></i>
						</div>
					</div>
				</div>
				<div class="row display">
					<div class="small-9 columns">
						<div class="row display">
							<div class="small-12 medium-4 columns">
								<ul>
									<li class="bold">Contact</li>
									<li>Mailing List</li>
									<li>Volunteer</li>
								</ul>
								<ul>
									<li class="bold">Apply</li>
									<li>Apply for a Service Dog</li>
									<li>Apply for a Released Dog</li>
								</ul>
							</div>
							<div class="small-12 medium-4 columns">
								<ul>
									<li class="bold">About Us</li>
									<li>FAQ</li>
									<li>Puppy Placement</li>
								</ul>
								<ul>
									<li class="bold">Awards &#38; Publications</li>
									<li>PBB &#38; C2W Awards</li>
									<li>Publications</li>
								</ul>
							</div>
							<div class="small-12 medium-4 columns">
								<ul>
									<li class="bold">Photos &#38; Videos</li>
									<li>Holiday Cards &#38; Calendars</li>
									<li>Vidoeos</li>
								</ul>
							</div>
						</div>
					</div>
					<div class="small-12 medium-3 columns">
						<div class="social-media show-for-small-only">
							<p class="bold">Get in touch with us:</p>
							<i class="fa fa-facebook-official"></i>
							<i class="fa fa-twitter-square"></i>
							<i class="fa fa-rss-square"></i>
							<i class="fa fa-instagram"></i>
						</div>
						<p>263 West 38th Street, 4th Floor.<br>
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
		<div class="row display" id="copyright">
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
