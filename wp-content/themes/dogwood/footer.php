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



<footer id="colophon" class="site-footer" role="contentinfo">

	<div class="site-info">
				
		<div class="footer-menu">
 			<a href="/">Home <span>|</span></a>
 			<a href="volunteer">Volunteer <span>|</span></a>
 			<a href="foster">Foster <span>|</span></a>
 			<a href="adopt/">Adopt <span>|</span></a>
 			<a href="education-resources/">Resources <span>|</span></a>
 			<a href="contact-us/">Contact Us <span></span></a>
 		</div> <!-- footer-menu -->

		<!-- social media icons for responsive site -->
		<div class="social-res">
				<a href="https://www.facebook.com/dogwoodrescuesociety" target="_new"><img src="<?php bloginfo("template_url"); ?>/images/icons/fb.png" alt="Link to Dogwood Rescue on Facebook" class="fb"></a>
				<a href="https://www.instagram.com/dogwoodrescue" target="_new"><img src="<?php bloginfo("template_url"); ?>/images/icons/ig.png" alt="Link to Dogwood Rescue on Instagram" class="insta"></a>
				<a href="https://twitter.com/dogwoodrescue" target="_new"><img src="<?php bloginfo("template_url"); ?>/images/icons/twitter.png" alt="Link to Dogwood Rescue on Twitter" class="twitter"></a>
		</div> <!-- .social-res -->

 			<div class="designers"><p>Website by: <a href="http://ahon.htpwebdesign.ca" rel="designer" target="_new">Alex</a>, <a href="http://mshafiq.htpwebdesign.ca/" target="new" rel="designer">Maida</a>, and <a href="http://zoesteel.com" rel="designer" target="_new">Zoe</a></p>
			</div>
 			<a href="#0" class="cd-top">Top</a>

	</div><!-- .site-info -->

	<div class="divider"></div>
	<div class="footer-right">
		<p>Many thanks to:</p><br>
		<div class="">
			<a href="http://www.tisol.ca" target="_blank"><img src="<?php bloginfo("template_url"); ?>/images/sponsors/tisol.jpg" alt="Link to Tisol, a Dogwood sponsor" class="sponsor"></a>
			<a href="http://bravodog.ca" target="_blank"><img src="<?php bloginfo("template_url"); ?>/images/sponsors/bravodog.png" alt="Link to Bravo Dog, a Dogwood sponsor" class="sponsor"></a>
			<a href="http://www.infofit.ca" target="_blank"><img src="<?php bloginfo("template_url"); ?>/images/sponsors/infofit.jpg" alt="Link to Infofit, a Dogwood sponsor" class="sponsor"></a>
			<a href="http://bosleys.com" target="_blank"><img src="<?php bloginfo("template_url"); ?>/images/sponsors/bosley.jpg" alt="Link to Bosleys, a Dogwood sponsor" class="sponsor"></a>
		</div>
	</div><!--  .footer-right -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
