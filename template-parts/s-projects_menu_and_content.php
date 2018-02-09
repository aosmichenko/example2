<?php

$nobp = (get_sub_field('no_bottom_padding')) ? 'no-bp' : '';
echo '<section class="menu-and-content section '.$nobp.'" style="',(get_sub_field('background_color')) ? 'background:'.get_sub_field('background_color').'; ' : '', (get_sub_field('text_color')) ? 'color:'.get_sub_field('text_color').';' : '','">';
	echo '<div class="container-fluid"><div class="row">';
?>
	<div class="col-md-6">
		<h2 class="mb0">Projects</h2>
		<?php wp_nav_menu( array( 'theme_location' => 'project', 'menu_id' => 'project-menu', 'fallback_cb' => false ) ); ?>
	</div>
	<div class="col-md-6"><?php the_sub_field('right_column');?></div>
<?php

	echo '</div></div>';
echo '</section>';