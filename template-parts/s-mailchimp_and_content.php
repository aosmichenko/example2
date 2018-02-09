<?php

echo '<section class="mailchimp-and-content section"  style="',(get_sub_field('background_color')) ? 'background:'.get_sub_field('background_color').'; ' : '', (get_sub_field('text_color')) ? 'color:'.get_sub_field('text_color').';' : '','">';
echo '<div class="container-fluid"><div class="row">';
if ( get_sub_field( 'mailchimp_on_the_left' ) ) {
	?>
	<div class="col-md-6 mailchimp-half">
		<p></p>
		<p>Subscribe here to receive updates about the Asian Renewable Energy Hub</p>
		<!-- Begin MailChimp Signup Form -->
		<div id="mc_embed_signup">
			<form action="https://sapphirewindfarm.us15.list-manage.com/subscribe/post?u=970fea4603ae9d6ea1f7fbbbd&amp;id=147812e29b" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate wpcf7-form" target="_blank" novalidate>
				<div id="mc_embed_signup_scroll">
					<div class="mc-field-group">
						<input type="text" value="" name="FNAME" class="" id="mce-FNAME" placeholder="Name">
					</div>
					<div class="mc-field-group">
						<input type="email" value="" name="EMAIL" class="required email" id="mce-EMAIL" placeholder="Email">
					</div>
					<div id="mce-responses" class="clear">
						<div class="response" id="mce-error-response" style="display:none"></div>
						<div class="response" id="mce-success-response" style="display:none"></div>
					</div>    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
					<div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_970fea4603ae9d6ea1f7fbbbd_147812e29b" tabindex="-1" value=""></div>
					<div class="clear"><button type="submit" value="Submit" name="subscribe" id="mc-embedded-subscribe" class="button wpcf7-form-control wpcf7-submit"><span>Submit</span></button></div>
				</div>
			</form>
		</div>
		<script type='text/javascript' src='//s3.amazonaws.com/downloads.mailchimp.com/js/mc-validate.js'></script><script type='text/javascript'>(function($) {window.fnames = new Array(); window.ftypes = new Array();fnames[0]='EMAIL';ftypes[0]='email';fnames[1]='FNAME';ftypes[1]='text';fnames[2]='LNAME';ftypes[2]='text';}(jQuery));var $mcj = jQuery.noConflict(true);</script>

		<!--End mc_embed_signup-->
	</div>
	<div class="col-md-6 content-column"><?php the_sub_field( 'content' ); ?></div>

<?php } else { ?>
	<div class="col-md-6 content-column"><?php the_sub_field( 'content' ); ?></div>
	<div class="col-md-6 mailchimp-half">
		<p></p>
		<p>Subscribe here to receive updates about the Sapphire Wind Farm</p>
		<!-- Begin MailChimp Signup Form -->
		<div id="mc_embed_signup">
			<form action="https://sapphirewindfarm.us15.list-manage.com/subscribe/post?u=970fea4603ae9d6ea1f7fbbbd&amp;id=147812e29b" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate wpcf7-form" target="_blank" novalidate>
				<div id="mc_embed_signup_scroll">
					<div class="mc-field-group">
						<input type="text" value="" name="FNAME" class="" id="mce-FNAME" placeholder="Name">
					</div>
					<div class="mc-field-group">
						<input type="email" value="" name="EMAIL" class="required email" id="mce-EMAIL" placeholder="Email">
					</div>
					<div id="mce-responses" class="clear">
						<div class="response" id="mce-error-response" style="display:none"></div>
						<div class="response" id="mce-success-response" style="display:none"></div>
					</div>    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
					<div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_970fea4603ae9d6ea1f7fbbbd_147812e29b" tabindex="-1" value=""></div>
					<div class="clear"><button type="submit" value="Submit" name="subscribe" id="mc-embedded-subscribe" class="button wpcf7-form-control wpcf7-submit"><span>Submit</span></button></div>
				</div>
			</form>
		</div>
		<script type='text/javascript' src='//s3.amazonaws.com/downloads.mailchimp.com/js/mc-validate.js'></script><script type='text/javascript'>(function($) {window.fnames = new Array(); window.ftypes = new Array();fnames[0]='EMAIL';ftypes[0]='email';fnames[1]='FNAME';ftypes[1]='text';fnames[2]='LNAME';ftypes[2]='text';}(jQuery));var $mcj = jQuery.noConflict(true);</script>

		<!--End mc_embed_signup-->
	</div>
<?php }
echo '</div>';
echo '</div>';
echo '</section>';