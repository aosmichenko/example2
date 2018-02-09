<?php

$nobp = (get_sub_field('no_bottom_padding')) ? 'no-bp' : '';
echo '<section class="image-and-text '.$nobp.'" style="',(get_sub_field('background_color')) ? 'background:'.get_sub_field('background_color').'; ' : '', (get_sub_field('text_color')) ? 'color:'.get_sub_field('text_color').';' : '','">';
	echo '<div class="row no-gutter row-md-eq-height">';
	if(get_sub_field('image_on_the_right')) {
		?>
		<div class="col-md-6"><div class="inner-padding"><?php the_sub_field('text');?></div></div>
		<div class="col-md-6"><?php
			$gallery = get_sub_field('images');
			if(count($gallery) > 1) {
				echo '<div class="slider">';
				foreach ($gallery as $img) {
					echo wp_get_attachment_image($img['ID'], 'full');
				}
				echo '</div>';
			} else {
				echo wp_get_attachment_image($gallery[0]['ID'],'full', null, array('class' => 'image-fill'));
			}
			?>
		</div>
		<?php
	} else {
		?>
		<div class="col-md-6"><?php
			$gallery = get_sub_field('images');
			if(count($gallery) > 1) {
				echo '<div class="slider">';
				foreach ($gallery as $img) {
					echo wp_get_attachment_image($img['ID'], 'full');
				}
				echo '</div>';
			} else {
				echo wp_get_attachment_image($gallery[0]['ID'],'full', null, array('class' => 'image-fill'));
			}
			?>
		</div>
		<div class="col-md-6"><div class="inner-padding"><?php the_sub_field('text');?></div></div>
		<?php
	}
?>
<?php

	echo '</div>';
echo '</section>';