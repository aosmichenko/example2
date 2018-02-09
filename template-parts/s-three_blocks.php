<?php

$nobp = (get_sub_field('no_bottom_padding')) ? 'no-bp' : '';
echo '<section class="three-blocks section '.$nobp.'" style="',(get_sub_field('background_color')) ? 'background:'.get_sub_field('background_color').'; ' : '','">';
echo '<div class="container-fluid"><div class="row">';
?>
		<?php foreach(get_sub_field('blocks') as $b): ?>
			<div class="col-md-4 mb3 col-sm-12 three-blocks__item">
				<?php _e($b['content']); ?>
				<?php if($b['button_url']):?>
					<a href="<?php echo esc_url($b['button_url']); ?>" class="btn">Learn More</a>
				<?php endif; ?>
			</div>
		<?php endforeach; ?>
<?php

echo '</div></div>';
echo '</section>';