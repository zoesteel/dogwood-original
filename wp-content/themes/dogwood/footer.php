<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Dogwood
 */

?>

</div><!-- #content -->



<footer id="colophon" class="site-footer container-fluid" role="contentinfo">
	<div class="row">

		<div class="site-info col-12 col-sm-7">
					
			<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'footer-menu', 'depth' => '1', 'menu_class' => 'footer-nav d-flex flex-column flex-sm-row justify-space-between' ) ); ?>
<!-- <div class="footer-menu">
	 			<a href="/">Home</a> <span>|</span>
	 			<a href="volunteer">Volunteer</a> <span>|</span>
	 			<a href="foster">Foster</a> <span>|</span>
	 			<a href="adopt">Adopt</a> <span>|</span>
	 			<a href="education-resources">Resources</a> <span>|</span>
	 			<a href="contact-us">Contact Us</a> <span></span>


	 		</div> --> <!-- footer-menu -->

			<!-- social media icons for responsive site -->
			<div class="social-footer">
					<a href="https://www.facebook.com/dogwoodrescuesociety" target="_new">
						<span class="fa-stack fa-sm">
						  <i class="fas fa-circle fa-stack-2x"></i>
						  <i class="fab fa-facebook-f fa-stack-1x" style="color: var(--dark-green)"></i>
						</span>
<!-- <img src="<?php bloginfo("template_url"); ?>/images/icons/fb.png" alt="Link to Dogwood Rescue on Facebook" class="fb"> --></a>
					<a href="https://www.instagram.com/dogwoodrescue" target="_new">
						<span class="fa-stack fa-sm">
						  <i class="fas fa-circle fa-stack-2x"></i>
						  <i class="fab fa-instagram fa-stack-1x" style="color: var(--dark-green)"></i>
						</span>
					</a>
					<a href="https://twitter.com/dogwoodrescue" target="_new">
						<span class="fa-stack fa-sm">
						  <i class="fas fa-circle fa-stack-2x"></i>
						  <i class="fab fa-twitter fa-stack-1x" style="color: var(--dark-green)"></i>
						</span></a>
			</div> <!-- .social-footer -->

 			<div class="designers"><p>Website by: <a href="http://ahon.htpwebdesign.ca" rel="designer" target="_new">Alex</a>, <a href="http://mshafiq.htpwebdesign.ca/" target="new" rel="designer">Maida</a>, and <a href="http://zoesteel.com" rel="designer" target="_new">Zoe</a></p>
			</div>

		</div><!-- .site-info -->

		<div class="divider"></div>
		
		<div class="footer-right col-12 col-md-5">

			<p>Many thanks to:</p>
			<div class="sponsors">
				<a href="http://www.tisol.ca" target="_blank"><img src="<?php bloginfo("template_url"); ?>/images/sponsors/tisol.jpg" alt="Link to Tisol, a Dogwood sponsor" class="col-2 sponsor img-fluid"></a>
				<a href="http://bravodog.ca" target="_blank"><img src="<?php bloginfo("template_url"); ?>/images/sponsors/bravodog.png" alt="Link to Bravo Dog, a Dogwood sponsor" class="col-2 sponsor img-fluid"></a>
				<a href="http://www.infofit.ca" target="_blank"><img src="<?php bloginfo("template_url"); ?>/images/sponsors/infofit.jpg" alt="Link to Infofit, a Dogwood sponsor" class="col-2 sponsor img-fluid"></a>
				<a href="http://bosleys.com" target="_blank"><img src="<?php bloginfo("template_url"); ?>/images/sponsors/bosley.jpg" alt="Link to Bosleys, a Dogwood sponsor" class="col-2 sponsor img-fluid"></a>
			</div>
		</div><!--  .footer-right -->
	</div><!-- end row -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
