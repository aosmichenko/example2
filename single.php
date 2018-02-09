<?php
/**
 * The template for displaying all single posts.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 * @package starter
 */

get_header();
the_post();
$thumb_id = get_post_thumbnail_id();
$img_url  = wp_get_attachment_url( $thumb_id );
$catID = '';
$cats = wp_get_post_categories(get_the_ID());
if(is_array($cats) && !empty($cats) && isset($cats[0])) {
	$catID = $cats[0];
}
?>
<section id="page-intro" style="background-image: url(<?php echo $img_url; ?>); ">
	<div class="container-fluid">
		<div class="row">
			<div class="col-sm-12">
				<p class="h1"><?php echo !empty($catID) ? get_cat_name($catID) : 'News'; ?></p>
			</div>
		</div>
	</div>
</section>
<section class="section">
	<div class="container-fluid">
		<div class="row">
			<div id="primary" class="content-area col-md-8">
				<main id="main" class="site-main" role="main">
					<time datetime="<?php the_time('c') ?>"><?php the_time('jS F Y'); ?></time>
					<h1><?php the_title(); ?></h1>
					<?php if(function_exists('sharing_display')) {
						echo '<div class="sharing-panel">';
						sharing_display('<span>Share </span>', true);
						echo '</div>';
					} ?>
					<div class="post-entry">
						<?php the_content();?>
					</div>
					<a href="<?php echo !empty($catID) ? get_category_link($catID) : ''; ?>" class="btn">Back to <?php echo !empty($catID) ? get_cat_name($catID) : 'News'; ?></a>
				</main><!-- #main -->
			</div><!-- #primary -->
		</div>
	</div>
</section>
<?php get_footer(); ?>
