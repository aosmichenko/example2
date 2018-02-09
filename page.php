<?php
/**
 * The template for displaying all pages.
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 * @package starter
 */

get_header();
the_post();
$thumb_id = get_post_thumbnail_id();
$img_url = wp_get_attachment_url($thumb_id);
?>
<section id="page-intro" style="background-image: url(<?php echo $img_url; ?>); ">
	<div class="container-fluid">
		<div class="row">
			<div class="col-sm-12">
				<h1><?php the_title(); ?></h1>
			</div>
		</div>
	</div>
</section>
<?php
if ( have_rows( 'page_builder' ) ):
	while ( have_rows( 'page_builder' ) ) : the_row();

		get_template_part( 'template-parts/s', get_row_layout() );

	endwhile;

else :

	echo '<h1>Coming Soon.</h1>';

endif;

get_footer();
