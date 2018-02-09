<?php

get_header();
the_post();
$slider = get_field('slider');
if($slider) {
	?>
	<div id="hp-slider-wrap">
		<div id="hp-slider">
			<?php foreach ($slider as $s): ?>
				<div class="hp-slide">
					<div class="slide-media">
						<?php if($s['image']) {
							echo wp_get_attachment_image($s['image'], 'full');
						} elseif ($s['vimeo_embed']) {
							?>
							<div class="videobg">
								<div class="videobg-width">
									<div class="videobg-aspect">
										<div class="videobg-make-height">
											<?php echo $s['vimeo_embed']; ?>
										</div>
									</div>
								</div>
							</div>
							<?php
						} elseif ($s['youtube_embed']) {
							echo $s['youtube_embed'];
						}?>
					</div>
					<div class="slide-blurb">
						<div class="container-fluid">
							<div class="row">
								<div class="col-sm-9">
									<p class="slide-title"><?php esc_html_e($s['title']);?></p>
									<p class="slide-subtitle"><?php esc_html_e($s['subtitle']);?></p>
								</div>
							</div>
						</div>
					</div>
					<div class="slide-button">
						<div class="container-fluid">
							<div class="row">
								<div class="col-xs-7">
									<a href="<?php echo esc_url($s['button_url']);?>" class="btn btn-white">Learn More</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			<?php endforeach; ?>
		</div>
		<div class="slider-nav">
			<div class="tar">
				<span class="slider-prev slider-btn"></span>
				<span class="slider-next slider-btn"></span>
			</div>
		</div>
		<div class="scroll-downs">
			<div class="mousey">
				<div class="scroller"></div>
			</div>
		</div>
	</div>
	<div id="scroll2"></div>
	<?php
}
if ( have_rows( 'page_builder' ) ):
	while ( have_rows( 'page_builder' ) ) : the_row();

		get_template_part( 'template-parts/s', get_row_layout() );

	endwhile;

else :

	echo '<h1>Build your page first...</h1>';

endif;

get_footer();
