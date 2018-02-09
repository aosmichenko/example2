<?php

echo '<section class="quick-facts section">';
	echo '<div class="container-fluid"><div class="row">';
?>
	<div class="col-md-6"><h2>Quick facts</h2></div>
	<div class="col-md-6"><?php the_sub_field('content');?></div>
	<div class="col-md-12">
		<?php echo wp_get_attachment_image(get_sub_field('image_desktop'), 'full', null, array('class' => 'show-sm')); ?>
		<?php echo wp_get_attachment_image(get_sub_field('image_mobile'), 'full', null, array('class' => 'hide-sm')); ?>
	</div>
<?php

	echo '</div></div>';
echo '</section>';