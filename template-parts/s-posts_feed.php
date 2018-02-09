<?php

$nobp = (get_sub_field('no_bottom_padding')) ? 'no-bp' : '';
$style = (get_sub_field('background_color')) ? 'background:'.get_sub_field('background_color').'; ' : '';
$args = array(
		'cat' => get_sub_field('category'),
		'posts_per_page' => 3
);
$posts_feed = new WP_Query($args);
if($posts_feed->have_posts()):
echo '<section class="three-blocks section '.$nobp.'" style="'.$style.'">';
echo '<div class="container-fluid"><div class="row">';
?>
		<?php while($posts_feed->have_posts()): $posts_feed->the_post(); ?>
			<div class="col-md-4 mb3 col-sm-12 three-blocks__item">
				<h3><a href="<?php the_permalink();?>"><?php the_title();?></a></h3>
				<?php the_excerpt(); ?>
				<a href="<?php the_permalink();?>" class="btn">Learn More</a>
			</div>
		<?php endwhile; ?>
<?php

echo '</div></div>';
echo '</section>';
endif;
wp_reset_query();
wp_reset_postdata();
