<?php

echo '<section class="timeline section">';
	echo '<div class="container-fluid"><div class="row">';
?>
	<div class="col-sm-12">
		<h2><?php the_sub_field('title') ?></h2>
		<p><?php the_sub_field('subtitle') ?></p>
	</div>
	<div class="col-sm-12">
			<div class="timeline-row">
				<?php
				$items = get_sub_field('items');
				$total = count($items);
				$space = round(100/($total-1), 5);
				$w = round(100/($total), 5);
				$i = 1;
				$line_length = $w*($total-1)
				?>
				<div class="timeline-line" style="width: <?php echo $line_length; ?>%; left: <?php echo $w/2 ?>%"></div>
				<?php foreach($items as $item): ?>
					<?php
					$l = 0;
					if($i > 1) {
						$l = round($space * ($i - 1), 5);
					}
					$i++;
					?>
					<div class="timeline-item <?php echo ($item['done']) ? 'done' : ''; ?>" style="width: <?php echo $w; ?>%;">
						<p class="timeline-item-title"><?php esc_html_e($item['title']);?></p>
						<span class="check-circ"></span>
						<p class="timeline-item-date"><?php esc_html_e($item['date']);?></p>
					</div>

				<?php endforeach; ?>
			</div>
	</div>
<?php

	echo '</div></div>';
echo '</section>';