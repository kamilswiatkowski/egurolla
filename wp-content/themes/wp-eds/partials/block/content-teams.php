<?php
		
		$teams = get_posts([
			                   'post_type'   => 'teams',
			                   'numberposts' => -1,
		                   ]);
		$terms = get_categories([
			                        
			                        'taxonomy'   => 'category',
			                        'hide_empty' => false,
			                        'post_type'  => 'teams',
		                        
		                        ]);
		function sortTermsByParent($terms)
		{
				$sorted_terms = [];
				foreach ($terms as $term) {
						if($term->parent === 0) {
								if(!array_key_exists($term->term_id, $sorted_terms)) {
										$sorted_terms[$term->term_id] = [];
								}
						} else {
								if(!array_key_exists($term->parent, $sorted_terms)){
										$sorted_terms[$term->parent] = [];
								}
								$sorted_terms[$term->parent][] = $term;
						}
				}
				
				return $sorted_terms;
		}
		

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
												<?php foreach (sortTermsByParent($terms) as $key => $term) {
														$children = count($term) === 0 ? 'no_children' : 'has_children';
														$main_term = get_term_by('id', $key, 'category');
														?>
														<div class="teams__filters-item <?php echo $children; ?>">
																<div class="teams__filters-item-wrapper">
																		<?php echo $main_term->name; ?> <?php echo Like\get_svg(
																			'arrow-red-bottom'
																		); ?>
																		<?php if(count($term) !== 0) { ?>
																				<div class="teams__dropdown">
																						<?php foreach ($term as $child_term) { ?>
																								<div class="teams__dropdown-item"><?php echo $child_term->name; ?></div>
																						<?php } ?>
																				</div>
																		<?php } ?>
																</div>
														</div>
												<?php } ?>
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
						<?php } ?>
				</div>
		</div>
</section>
