<?php
$nobp = (get_sub_field('no_bottom_padding')) ? 'no-bp' : '';
echo '<section class="full-width section '.$nobp.'"><div class="container-fluid">
<div class="row"><div class="col-sm-12">';
the_sub_field('content');
echo '</div></div>
</div></section>';