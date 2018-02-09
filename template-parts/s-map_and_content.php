<?php

echo '<section class="map-and-content">';
	echo '<div class="row no-gutter row-md-eq-height">';
?>
	<div class="col-md-6"><div class="responsive-map"><?php the_sub_field('map');?></div></div>
	<div class="col-md-6 content-column"><?php the_sub_field('content');?></div>
<?php

	echo '</div>';
echo '</section>';