<?php
/**
 * The template for displaying archive pages.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package starter
 */

get_header();
$thumb_id = get_field('intro_banner', 'category_'.get_query_var('cat'));
if($thumb_id) {
	$img_url = $thumb_id['url'];
} else {
	$img_url = "";
}
?>
<section id="page-intro" style="background-image: url(<?php echo $img_url; ?>); ">
	<div class="container-fluid">
		<div class="row">
			<div class="col-sm-12">
				<h1><?php echo single_cat_title( '', false );?></h1>
			</div>
		</div>
	</div>
</section>
<section class="section">
	<div id="primary" class="content-area container-fluid">
		<main id="main" class="site-main archive-container" role="main">
			<div class="row">
				<?php if ( have_posts() ) : ?>

					<?php /* Start the Loop */ ?><?php while ( have_posts() ) : the_post(); ?>

						<div class="col-md-4 col-sm-6">
							<article <?php post_class(); ?>>
								<a href="<?php the_permalink(); ?>" class="post-thumb-container">
									<?php the_post_thumbnail( 'post-thumb' ); ?>
								</a>
								<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
								<time datetime="<?php the_time('c') ?>" class="h3"><?php the_time( 'j F Y' ); ?></time>
								<?php the_excerpt(); ?>
								<a href="<?php the_permalink(); ?>" class="btn read-more">Read More</a>
							</article>
						</div>

					<?php endwhile; ?>

					<?php custom_pagination(); ?>

				<?php else : ?>

					<?php get_template_part( 'template-parts/content', 'none' ); ?>

				<?php endif; ?>
			</div>
		</main><!-- #main -->
	</div><!-- #primary -->
</section>

<?php get_footer(); ?>
