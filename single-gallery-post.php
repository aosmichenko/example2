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
?>
<section id="page-intro" style="background-image: url(<?php echo $img_url; ?>); ">
	<div class="container-fluid">
		<div class="row">
			<div class="col-sm-12">
				<p class="h1">Gallery</p>
			</div>
		</div>
	</div>
</section>
<section class="section">
	<div class="container-fluid">
		<div class="row">
			<div id="primary" class="content-area col-sm-12">
				<main id="main" class="site-main" role="main">
					<h1><?php the_title(); ?></h1>
					<time datetime="<?php the_time('c') ?>"><?php the_time('jS F Y'); ?></time>
					<div class="post-entry popup-gallery">
						<div class="row">
						<?php
							$images = get_field('gallery');
							if($images){
								foreach ($images as $img) {
									echo '<div class="col-md-4 col-sm-6"><a rel="lightbox" class="lightbox" href="'.esc_url($img['url']).'" style="background-image: url('.$img['sizes']['post-thumb'].');"></a></div>';
								}
							}
						?>
						</div>
					</div>
					<a href="<?php echo home_url('/gallery/'); ?>" class="btn">Back to Gallery</a>
				</main><!-- #main -->
			</div><!-- #primary -->
		</div>
	</div>
</section>
<?php get_footer(); ?>
