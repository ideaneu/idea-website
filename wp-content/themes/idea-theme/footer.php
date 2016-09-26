<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package Scout-Base
 */
?>

</div><!-- #content -->

<div id="colophon" class="site-footer" role="contentinfo">
	<div class="container">
		<div class="row">
			
			<!-- COLUMN 3 -->
			<div class="col-sm-4 col-lg-push-9 col-sm-push-8 footer-add-pad">
				
				<!-- Button trigger modal -->
				<button class="btn btn-primary btn-lg site-footer-button" data-toggle="modal" data-target="#myModal">
					SIGN UP NOW
				</button>

				<!-- Modal -->
				<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
					<div class="modal-dialog">
						<div class="modal-content">
							<div class="modal-header">
								<button type="button" class="close modal-close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>			      </div>
								<iframe class="modal-iframe" src="http://eepurl.com/bsBPvf"></iframe>
								<div class="modal-body">
								</div>
							</div>
						</div>
					</div>
					<p>Join our mailing list!</p>
				</div>

				<!-- COLUMN 2 -->				
				<div class="col-sm-4 col-lg-push-1 footer-add-pad">
					<div class="footer-get-involved">
						<a href="http://www.tfaforms.com/365595" target="_blank"><button class="btn btn-lg site-footer-button" type="button">start a venture</button></a>
						<p>Are you working on a concept or early-stage venture that you want to enroll with IDEA? Click here to RSVP to New Venture Orientation.</p>
					</div>
				</div>
				<!-- COLUMN 1 -->
				<div class="col-sm-4 col-sm-pull-8 footer-add-pad">
					<div class="footer-social-media"><p>
						<a href="https://www.facebook.com/IDEA.NEU" target="_blank"><img src="<?php bloginfo('url'); ?>/wp-content/themes/idea-theme/images/icons/facebook.png"></a>
						<a href="https://www.twitter.com/IDEANEU" target="_blank"><img src="<?php bloginfo('url'); ?>/wp-content/themes/idea-theme/images/icons/twitter.png"></a>
						<a href="https://www.linkedin.com/company/idea-northeastern's-venture-accelerator" target="_blank"><img src="<?php bloginfo('url'); ?>/wp-content/themes/idea-theme/images/icons/linkedin.png"></a>
						<strong><a href="mailto:idea@neu.edu" class="footer-email"> | idea@neu.edu</a></strong></p>
					</div>
					<div class="footer-neu-logo">
						<img src="<?php bloginfo('url'); ?>/wp-content/themes/idea-theme/images/logos/northeastern-logo.png" height="100%" width="100%">
					</div>
				</div> 
			</div><!-- .row -->
		</div><!-- .container -->
		</div>
			<footer class="footer-scoutBanner">
				<p>Built by <a href="http://neu.edu/scout" id="footer-scoutBanner--logo">Scout</a> © 2015</p>
	</footer><!-- #colophon -->
</div><!-- #page -->



<?php wp_footer(); ?>



</body>
</html>