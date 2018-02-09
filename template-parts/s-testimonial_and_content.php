<?php

echo '<section class="testimonial-and-content">';
echo '<div class="row no-gutter">';
if ( get_sub_field( 'testimonial_on_the_left' ) ) {
	?>
	<div class="col-md-6 testimonial-half"><div class="inner-padding"><?php the_sub_field( 'testimonial' ); ?></div></div>
	<div class="col-md-6 content-column"><div class="inner-padding"><?php the_sub_field( 'content' ); ?></div></div>

<?php } else { ?>
	<div class="col-md-6 content-column"><div class="inner-padding"><?php the_sub_field( 'content' ); ?></div></div>
	<div class="col-md-6 testimonial-half"><div class="inner-padding"><?php the_sub_field( 'testimonial' ); ?></div></div>
<?php }
echo '</div>';
echo '</section>';