<?php

echo '<section class="testimonial-and-content">';
echo '<div class="row no-gutter row-md-eq-height">';
if ( get_sub_field( 'testimonial_on_the_left' ) ) {
	?>
	<div class="col-md-6 testimonial-half"><div class="inner-padding"><?php the_sub_field( 'testimonial' ); ?></div></div>
	<div class="col-md-6 content-column"><?php $img = get_sub_field( 'image' ); echo wp_get_attachment_image($img['ID'],'full', null, array('class' => 'image-fill')); ?></div>

<?php } else { ?>
	<div class="col-md-6 content-column"><?php $img = get_sub_field( 'image' ); echo wp_get_attachment_image($img['ID'],'full', null, array('class' => 'image-fill')); ?></div>
	<div class="col-md-6 testimonial-half"><div class="inner-padding"><?php the_sub_field( 'testimonial' ); ?></div></div>
<?php }
echo '</div>';
echo '</section>';