<?php
/**
 *
 * Template Name: Gallery
 *
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
<section class="section">
	<div class="container-fluid archive-container">
		<div class="row">
			<?php
			$args = array(
					'post_type' => 'gallery-post',
			        'paged' => get_query_var('paged', 1)
			);
			$galleries = new WP_Query($args); ?>
			<?php if($galleries->have_posts()) :
				while($galleries->have_posts()):
					$galleries->the_post();
					?>
					<div class="col-md-4 col-sm-6 gallery-post">
						<article <?php post_class('post'); ?>>
							<a href="<?php the_permalink(); ?>" class="post-thumb-container">
								<?php the_post_thumbnail( 'post_thumb' ); ?>
							</a>
							<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
							<time datetime="<?php the_time('c') ?>" class="h3"><?php the_time( 'j F Y' ); ?></time>
							<a href="<?php the_permalink(); ?>" class="btn read-more">View Gallery</a>
						</article>
					</div>
					<?php
				endwhile;
			endif; ?>
		</div>
	</div>
</section>
<?php get_footer();
