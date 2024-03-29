<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package Maker Camp Theme
 */
?>

<!-- /container -->

<footer id="footer" class="uni-footer">
	<div class="container">
		<div class="row social-foot-desktop hidden-xs">
			<div class="col-sm-6 col-md-3">
				<a href="/"><img class="footer_logo" src="<?php echo get_template_directory_uri() . '/assets/img/makercamp-logo.png' ?>"  alt="Maker Camp projects, making, building, tickering for kids"></a>
				<ul class="list-unstyled">
					<li><a href="//makezine.com/projects?utm_source=makercamp.com&utm_medium=footer">Make: Projects</a></li>
					<li><a href="//makezine.com/category/workshop/3d-printing-workshop/?post_type=projects?utm_source=makercamp.com&utm_medium=footer">3D Printing Projects</a></li>
					<li><a href="//makezine.com/category/technology/arduino/?post_type=projects?utm_source=makercamp.com&utm_medium=footer">Arduino Projects</a></li>
					<li><a href="//makezine.com/category/technology/raspberry-pi/?post_type=projects?utm_source=makercamp.com&utm_medium=footer">Raspberry Pi Projects</a></li>
					<li><a href="//help.makercamp.com/hc/en-us" target="_blank">Maker Camp Help Page</a></li>
				</ul>
			</div>

			<div class="col-sm-6 col-md-3">
				<h4>Explore Making</h4>
				<ul class="list-unstyled">
          <li><a href="//makezine.com/blog?utm_source=makercamp.com&utm_medium=footer" target="_blank">Make: News &amp; Projects</a></li>
					<li><a href="//makerfaire.com?utm_source=makercamp.com&utm_medium=footer" target="_blank">Maker Faire</a></li>
					<li><a href="//makershare.com?utm_source=makercamp.com&utm_medium=footer" target="_blank">Maker Share</a></li>
          <li><a href="//www.makershed.com?utm_source=makercamp.com&utm_medium=footer" target="_blank">Maker Shed</a></li>
					<li><a href="https://readerservices.makezine.com/mk/default.aspx?utm_source=makercamp.com&utm_medium=brand+bar&utm_campaign=explore+all+of+make&pc=MK&pk=M5BMCP" target="_blank">Get the magazine</a></li>									
				</ul>
			</div>
			<div class="col-sm-6 col-md-3">
				<h4>Our Company</h4>
				<ul class="list-unstyled">
					<li><a href="//makermedia.com" target="_blank">About Us</a></li>
					<li><a href="//makermedia.com/work-with-us/advertising" target="_blank">Advertise with Us</a></li>
					<li><a href="//makermedia.com/work-with-us/job-openings" target="_blank">Careers</a></li>
					<li><a href="//help.makermedia.com/hc/en-us" target="_blank">Help</a></li>
					<li><a href="//makermedia.com/privacy" target="_blank">Privacy</a></li>
          <li><a href="http://makezine.com/join/?utm_source=makercamp.com&utm_medium=footer" target="_blank">Newsletters</a></li>
				</ul>
			</div>

			<div class="col-sm-6 col-md-3 social-foot-col">
				<h4 class="stay-connected">Follow Us</h4>
        <div class="social-network-container">
          <ul class="social-network social-circle">
              <li><a href="https://www.facebook.com/makemagazine?_rdr" class="icoFacebook" title="Facebook" target="_blank"><i class="fa fa-facebook"></i></a></li>
              <li><a href="https://twitter.com/make" class="icoTwitter" title="Twitter"><i class="fa fa-twitter" target="_blank"></i></a></li>
              <li><a href="https://instagram.com/makemagazine/" class="icoInstagram" title="Instagram"><i class="fa fa-instagram" target="_blank"></i></a></li>
              <li><a href="https://plus.google.com/communities/107377046073638428310" class="icoGoogle-plus" title="Google+"><i class="fa fa-google-plus" target="_blank"></i></a></li>
          </ul>    
        </div>
        <div class="clearfix"></div>

        <div class="mz-footer-subscribe"> 
					<?php
						$isSecure = "http://";
						if (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] == 'on') {
							$isSecure = "https://";
						}
					?>
					<h4>Sign Up</h4>
					<p>Stay inspired and get fresh updates</p>
          <form class="sub-form whatcounts-signup1f" action="https://secure.whatcounts.com/bin/listctrl" method="POST">
            <input type="hidden" name="slid" value="6B5869DC547D3D4658DF84D7F99DCB43" /><!-- Maker Camp -->
            <input type="hidden" name="cmd" value="subscribe" />
            <input type="hidden" name="custom_source" value="camp footer" />
            <input type="hidden" name="custom_incentive" value="none" />
            <input type="hidden" name="custom_url" value="<?php echo $_SERVER["HTTP_HOST"] . $_SERVER["REQUEST_URI"]; ?>" />
            <input type="hidden" id="format_mime" name="format" value="mime" />
            <input type="hidden" name="custom_host" value="<?php echo $_SERVER["HTTP_HOST"]; ?>" />
            <div id="recapcha-footer-desktop" class="g-recaptcha" data-size="invisible"></div>
            <div class="mz-form-horizontal">
              <input id="wc-email-f" name="email" placeholder="Enter your Email" required type="email"><br>
              <input value="GO" class="btn-cyan" type="submit">
            </div>
					</form>
				</div>
			</div>
		</div>
		<!-- END desktop row -->
		<!-- Add back in when the site is responsive -->
		<div class="row social-foot-mobile visible-xs-block">
			<div class="col-xs-12 social-foot-col">
				<h4 class="stay-connected">Follow Us</h4>
        <div class="social-network-container">
          <ul class="social-network social-circle">
              <li><a href="https://www.facebook.com/makemagazine?_rdr" class="icoFacebook" title="Facebook" target="_blank"><i class="fa fa-facebook"></i></a></li>
              <li><a href="https://twitter.com/make" class="icoTwitter" title="Twitter"><i class="fa fa-twitter" target="_blank"></i></a></li>
              <li><a href="https://instagram.com/makemagazine/" class="icoInstagram" title="Instagram"><i class="fa fa-instagram" target="_blank"></i></a></li>
              <li><a href="https://plus.google.com/communities/107377046073638428310" class="icoGoogle-plus" title="Google+"><i class="fa fa-google-plus" target="_blank"></i></a></li>
          </ul>    
        </div>
        <div class="clearfix"></div>
        <div class="mz-footer-subscribe"> 
					<?php
						$isSecure = "http://";
						if (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] == 'on') {
							$isSecure = "https://";
						}
					?>
					<h4>Sign Up</h4>
					<p>Stay inspired and get fresh updates</p>
          <form class="sub-form whatcounts-signup1m" action="https://secure.whatcounts.com/bin/listctrl" method="POST">
            <input type="hidden" name="slid" value="6B5869DC547D3D4658DF84D7F99DCB43" /><!-- Maker Camp -->
            <input type="hidden" name="cmd" value="subscribe" />
            <input type="hidden" name="custom_source" value="camp footer" />
            <input type="hidden" name="custom_incentive" value="none" />
            <input type="hidden" name="custom_url" value="<?php echo $_SERVER["HTTP_HOST"] . $_SERVER["REQUEST_URI"]; ?>" />
            <input type="hidden" id="format_mime" name="format" value="mime" />
            <input type="hidden" name="custom_host" value="<?php echo $_SERVER["HTTP_HOST"]; ?>" />
            <div id="recapcha-footer-mobile" class="g-recaptcha" data-size="invisible"></div>
            <div class="mz-form-horizontal">
              <input id="wc-email-m" name="email" placeholder="Enter your Email" required type="email"><br>
              <input value="GO" class="btn-cyan" type="submit">
            </div>
          </form>
				</div>
			</div>
			<div class="col-xs-12 panel-group" id="accordion" role="tablist" aria-multiselectable="true">
				<div class="panel panel-default">
					<div class="panel-heading" role="tab" id="heading1">
						<a data-toggle="collapse" data-parent="#accordion" href="#collapse1" aria-expanded="false"
							   aria-controls="collapse1">
							<h4 class="panel-title text-center">Make:</h4>
						</a>
					</div>
					<div id="collapse1" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading1">
						<div class="panel-body">
							<ul class="nav nav-pills nav-stacked">
                <li><a href="//makezine.com/projects?utm_source=makercamp.com&utm_medium=footer">Make: Projects</a></li>
                <li><a href="//makezine.com/category/workshop/3d-printing-workshop/?post_type=projects?utm_source=makercamp.com&utm_medium=footer">3D Printing Projects</a></li>
                <li><a href="//makezine.com/category/technology/arduino/?post_type=projects?utm_source=makercamp.com&utm_medium=footer">Arduino Projects</a></li>
                <li><a href="//makezine.com/category/technology/raspberry-pi/?post_type=projects?utm_source=makercamp.com&utm_medium=footer">Raspberry Pi Projects</a></li>
                <li><a href="//help.makercamp.com/hc/en-us" target="_blank">Maker Camp Help Page</a></li>
							</ul>
						</div>
					</div>
				</div>
				<div class="panel panel-default">
					<div class="panel-heading" role="tab" id="heading2">
						<a data-toggle="collapse" data-parent="#accordion" href="#collapse2" aria-expanded="false"
							   aria-controls="collapse2">
							<h4 class="panel-title text-center">Explore Making</h4>
						</a>
					</div>
					<div id="collapse2" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading2">
						<div class="panel-body">
							<ul class="nav nav-pills nav-stacked">
                <li><a href="//makezine.com/blog?utm_source=makercamp.com&utm_medium=footer" target="_blank">Make: News &amp; Projects</a></li>
                <li><a href="//makerfaire.com?utm_source=makercamp.com&utm_medium=footer" target="_blank">Maker Faire</a></li>
                <li><a href="//makershare.com?utm_source=makercamp.com&utm_medium=footer" target="_blank">Maker Share</a></li>
                <li><a href="//www.makershed.com?utm_source=makercamp.com&utm_medium=footer" target="_blank">Maker Shed</a></li>
                <li><a href="https://readerservices.makezine.com/mk/default.aspx?utm_source=makercamp.com&utm_medium=brand+bar&utm_campaign=explore+all+of+make&pc=MK&pk=M5BMCP" target="_blank">Get the magazine</a></li>
							</ul>
						</div>
					</div>
				</div>
				<div class="panel panel-default">
					<div class="panel-heading" role="tab" id="heading3">
						<a data-toggle="collapse" data-parent="#accordion" href="#collapse3" aria-expanded="false"
							   aria-controls="collapse3">
							<h4 class="panel-title text-center">Our Company</h4>
						</a>
					</div>
					<div id="collapse3" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading3">
						<div class="panel-body">
							<ul class="nav nav-pills nav-stacked">
								<li><a href="//makermedia.com" target="_blank">About Us</a></li>
								<li><a href="//makermedia.com/work-with-us/advertising" target="_blank">Advertise with Us</a></li>
								<li><a href="//makermedia.com/work-with-us/job-openings" target="_blank">Careers</a></li>
								<li><a href="//help.makermedia.com/hc/en-us" target="_blank">Help</a></li>
								<li><a href="//makermedia.com/privacy" target="_blank">Privacy</a></li>
                <li><a href="http://makezine.com/join/?utm_source=makercamp.com&utm_medium=footer" target="_blank">Newsletters</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- End social-foot-mobile -->
	</div>
	<!-- END container -->
  <div class="copyright">
    <p>Make: is a registered trademark and the Maker Camp logo and the Makey robot are trademarks of Maker Media | <a href="//makermedia.com/privacy/">Privacy</a> | <a href="//makermedia.com/terms/">Terms</a></p>
    <p>Copyright &copy; 2004-<?php echo date('Y'); ?> Maker Media, Inc. All rights reserved</p>
  </div>
</footer>
<!-- END new-footer -->

</div> <!-- /container -->

<div class="nl-modal-error" style="display:none;">
  <div class="col-xs-12 nl-modal padtop">
    <p class="lead">The reCAPTCHA box was not checked. Please try again.</p>
  </div>
  <div class="clearfix"></div>
</div>

<?php wp_footer(); ?>

<!-- Subscribe return path overlay -->
<?php echo subscribe_return_path_overlay(); ?>

<!-- Email newsletter subscribe modal -->
<?php echo display_thank_you_modal_if_signed_up(); ?>

<script>
	(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
		(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	})(window,document,'script','//www.google-analytics.com/analytics.js','ga');

	ga('create', 'UA-51157-25', 'auto');
	ga('require', 'displayfeatures');
	ga('send', 'pageview', {
		'page': location.pathname + location.search + location.hash
	});
</script>
<script>
	var _prum = [['id', '53fcea2fabe53d341d4ae0eb'],
		['mark', 'firstbyte', (new Date()).getTime()]];
	(function() {
		var s = document.getElementsByTagName('script')[0]
			, p = document.createElement('script');
		p.async = 'async';
		p.src = '//rum-static.pingdom.net/prum.min.js';
		s.parentNode.insertBefore(p, s);
	})();
</script>
<script src="https://www.google.com/recaptcha/api.js?onload=onloadCallback&render=explicit" async defer></script>
</body>
</html>