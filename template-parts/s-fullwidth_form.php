<?php

echo '<section class="fullwidth-form section"><div class="container-fluid"><div class="row"><div class="col-sm-12">';
the_sub_field('content');
echo '</div>';
echo '<div class="col-sm-12">'.do_shortcode(get_sub_field('form_shortcode')).'</div>';
echo '</div></div></section>';