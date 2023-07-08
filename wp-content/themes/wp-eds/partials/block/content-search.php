<?php
		
		$title = get_field('title');
		$sub_title = get_field('subtitle');
?>

<section class="search">
		<div class="container">
				<div class="row">
						<div class="col-12">
								<div class="search__top">
										<div class="search__top-left">
												<div class="red-title-italic">
														<?php echo $title; ?>
												</div>
												<div class="red-subtitle">
														<?php echo $sub_title; ?>
												</div>
										</div>
										<div class="search__top-right flex-center">
												<div class="search__top-right-text">
														TWOJA LOKALIZACJA:
												</div>
												<div class="teams__filters-item has_children">
														<div class="teams__filters-item-wrapper">
																<span class="team__filters-name" data-main-category="1">Warszawa</span>
																<?php echo Like\get_svg(
																	'arrow-red-bottom'
																); ?>
																<div class="teams__dropdown" data-current-filter>
																		<div class="teams__dropdown-item" data-filter="zxc">
																				Kraków
																		</div>
																		<div class="teams__dropdown-item" data-filter="qwe">
																				Łódź
																		</div>
																		<div class="teams__dropdown-item" data-filter="sdf">
																				Bydgoszcz
																		</div>
																
																</div>
														</div>
												</div>
										</div>
								</div>
						
						</div>
				</div>
		</div>
</section>
