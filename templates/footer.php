<footer class="content-info">
	<div class="footer-divider">
		<img src="/kfg/wp-content/themes/kfs/dist/images/footer-divider.jpg" />
	</div>
	<div class="col-lg-5 col-md-12 col-sm-12">
		<div class="footer-call">
			To Request an Appointment<br>
			<strong>Call (718) 340-3611</strong>
		</div>
		<div class="footer-logo">
			<img src="/kfg/wp-content/themes/kfs/dist/images/kfg-footer-logo.png" />
		</div><br>
		<div class="footer-copyright">
			©<?php echo date('Y'); ?> Kofinas Fertility Group. All rights reserved.
		</div>
	</div>
	<div class="col-lg-7 col-md-12 col-sm-12">
		<div class="footer-locations">
			<h2>Locations</h2>
			<div class="footer-location">
				506 6th Street<br>
				Brooklyn, NY 11215<br>
				Inside New York Methodist<br>
				Hospital, 4th Floor<br>
				Phone: 718-243-1600<br>
				<a href="#">Google Maps</a>
			</div>
			<div class="footer-location">
				4855 Hylan Blvd.<br>
				Staten Island, NY 10312<br>
				Phone: 718-356-4000<br>
				<a href="#">Google Maps</a>
			</div>
			<div class="footer-location">
				55 Central Park West<br>
				New York, NY 10023<br>
				Phone: 000-000-00000<br>
				<a href="#">Google Maps</a>
			</div>
		</div>
		<div class="footer-nav">
			<h2>Navigation</h2>
			<?php
			if (has_nav_menu('footer_navigation')) :
				wp_nav_menu(['theme_location' => 'footer_navigation', 'menu_class' => 'footer-nav']);
			endif;
			?>
			<div id="find-us-online">
				<h2>Find Us Online</h2>
				<div id="footer-social">
				<a id="facebook" href="#" title="Connect with us on Facebook" target="_blank">Facebook</a> <a id="twitter" href="#" title="Follow us on Twitter" target="_blank">Twitter</a>
				<a id="youtube" href="#" title="Visit our Youtube channel">Youtube</a>
				<a id="googleplus" href="#" title="Connect with us on Google+" target="_blank">Google+</a><a id="linkedin" href="#" title="Find us on LinkedIn" target="_blank">LinkedIn</a>
			</div>
		</div>
	</div>
</footer>
