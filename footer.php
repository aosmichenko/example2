<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package starter
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer container-fluid" role="contentinfo">
		<div class="row">
			<div class="col-md-4 col-sm-4  footer-block">
				<?php the_field('footer_left_col', 'option'); ?>
			</div>
			<div class="col-md-4 col-sm-4  footer-block">
				<?php the_field('footer_mid_col', 'option'); ?>
			</div>
			<div class="col-md-4 col-sm-4 footer-block">
				<?php the_field('footer_right_col', 'option'); ?>
			</div>
		</div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
