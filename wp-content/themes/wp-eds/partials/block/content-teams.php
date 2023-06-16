<?php
		
		$teams = get_posts([
			                   'post_type' => 'teams',
			                   'numberposts' => -1,
		                   ]);
		
?>
<section class="teams">
		<div class="container">
				<div class="row">
						<div class="col-12">
								<div class="teams__filters">
										<div class="teams__filters-text">
												Filtruj po:
										</div>
										<div class="teams__filters-wrapper flex-center">
												<div class="teams__filters-item">Lokalizacja <?php echo Like\get_svg(
															'arrow-red-bottom'
														); ?></div>
												<div class="teams__filters-item">Grupa wiekowa <?php echo Like\get_svg(
															'arrow-red-bottom'
														); ?></div>
												<div class="teams__filters-item">Styl taneczny <?php echo Like\get_svg(
															'arrow-red-bottom'
														); ?></div>
												<div class="teams__filters-item">Casting <?php echo Like\get_svg('arrow-red-bottom'); ?></div>
												<div class="teams__filters-clear">Wyczyść wszystko</div>
										</div>
								</div>
						</div>
				</div>
				<div class="row">
						<?php foreach ($teams as $team) {
								$categories = get_the_category($team->ID);
								?>
								<div class="col-lg-4 col-12">
										<div class="teams__team">
												<div class="teams__team-content" style="background: url('<?php echo get_the_post_thumbnail_url($team->ID); ?>') center center no-repeat">
														<div class="teams__team-overlay">
																<div class="teams__team-btn">DOWIEDZ SIĘ WIĘCEJ</div>
														</div>
														<?php ?>
														<div class="teams__team-casting">
																Otwarty Casting
														</div>
														<div class="teams__team-categories">
																<?php foreach ($categories as $category) {?>
																		<div class="teams__team-category">
																				<?php echo $category->name; ?>
																		</div>
																<?php } ?>
														</div>
												</div>
												<div class="teams__team-title"><?php echo $team->post_title; ?></div>
										</div>
								</div>
						<?php } ?>
				</div>
		</div>
</section>