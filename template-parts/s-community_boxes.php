<?php

echo '<section class="community-boxes section">';
	echo '<div class="container-fluid"><div class="row">';
?>
	<div class="col-md-8"><?php the_sub_field('intro_content');?></div>
	<div class="clb community-section">
	<?php foreach(get_sub_field('boxes') as $b): ?>
		<div class="col-md-3 col-sm-6 mb3 community-box ">
			<?php echo wp_get_attachment_image($b['image'], 'full'); ?><br>
			<strong class="community-box__title"><?php esc_html_e($b['title']);?></strong>
			<p class="community-box__content"><?php esc_html_e($b['content']);?></p>
			<?php if($b['button_url']):?>
				<a href="<?php echo esc_url($b['button_url']); ?>" class="btn">Learn More</a>
		   <?php endif; ?>
		</div>
	<?php endforeach; ?>
	</div>
<?php

	echo '</div></div>';
echo '</section>';