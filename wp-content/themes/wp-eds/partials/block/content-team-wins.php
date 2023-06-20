<?php
		$title = get_field('title');
		$subtitle = get_field('subtitle');
		$wins = get_field("wins");
?>
<section class="team-wins">
		<div class="container">
				<div class="row">
						<div class="col-12">
								<div class="red-title-italic">
										<?php echo $title; ?>
								</div>
								<div class="red-subtitle">
										<?php echo $subtitle; ?>
								</div>
						</div>
				</div>
				<div class="row">
						<div class="col-12">
								<div class="team-wins__slider">
										<?php foreach ($wins as $win) { ?>
											<div class="team-wins__item">
													<div class="team-wins-img">
															<img src="<?php echo $win['image']['url']; ?>" alt="">
													</div>
													<div class="team-wins-title">
															<?php echo $win['main_title']; ?>
													</div>
													<div class="team-wins-subtitle">
															<?php echo $win['subtitle']; ?>
													</div>
											</div>
										<?php } ?>
								</div>
						</div>
				</div>
		</div>
</section>
