<?php
		namespace Like;
		function showTeams(array $teams){
				foreach ($teams as $team) {
						$categories = get_the_category($team->ID);
						?>
						<div class="col-lg-4 col-12">
								<div class="teams__team">
										<div class="teams__team-content" style="background: url('<?php echo get_the_post_thumbnail_url(
											$team->ID
										); ?>') center center no-repeat">
												<div class="teams__team-overlay">
														<div class="teams__team-btn">DOWIEDZ SIĘ WIĘCEJ</div>
												</div>
												<?php ?>
												<div class="teams__team-casting">
														Otwarty Casting
												</div>
												<div class="teams__team-categories">
														<?php foreach ($categories as $category) { ?>
																<div class="teams__team-category">
																		<?php echo $category->name; ?>
																</div>
														<?php } ?>
												</div>
										</div>
										<div class="teams__team-title"><?php echo $team->post_title; ?></div>
								</div>
						</div>
				<?php }
}