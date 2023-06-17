<?php
		
		$teams = get_posts([
			                   'post_type'   => 'teams',
			                   'numberposts' => 6,
		                   ]);
		$teams_count = wp_count_posts('teams')->publish;
		$terms = get_terms([
			                        
			                        'taxonomy'   => 'teams-cat',
			                        'hide_empty' => false,
			                        'post_type'  => 'teams',
		                        
		                        ]);
		function sortTermsByParent($terms)
		{
				$sorted_terms = [];
				foreach ($terms as $term) {
						if($term->parent === 0) {
								if( ! array_key_exists($term->term_id, $sorted_terms)) {
										$sorted_terms[$term->term_id] = [];
								}
						} else {
								if( ! array_key_exists($term->parent, $sorted_terms)) {
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
														$main_term = get_term_by('id', $key, 'teams-cat');
														?>
														<div class="teams__filters-item <?php echo $children; ?>">
																<div class="teams__filters-item-wrapper">
																		<span class="team__filters-name" data-main-category="<?php echo $main_term->name; ?>"><?php echo $main_term->name; ?></span>
																		<?php echo Like\get_svg(
																			'arrow-red-bottom'
																		); ?>
																		<?php if(count($term) !== 0) { ?>
																				<div class="teams__dropdown" data-current-filter>
																						<?php foreach ($term as $child_term) { ?>
																								<div class="teams__dropdown-item" data-filter="<?php echo $child_term->term_id; ?>"><?php echo $child_term->name; ?></div>
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
				<div class="row teams__container" data-max-posts="<?php echo $teams_count; ?>">
						<?php Like\showTeams($teams); ?>
				</div>
				<div class="row">
						<div class="col-12">
								<div class="teams__load-more">
										ZAŁADUJ WIĘCEJ
								</div>
						</div>
				</div>
		</div>
</section>
