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
				<div class="row">
						<div class="search__wrapper">
						   <div class="search__wrapper-item">
								   <div class="search__wrapper-item-title">Grupa Wiekowa</div>
								   <div class="search__wrapper-item-subtitle">Juniorzy 13-16</div>
						   </div>
								<div class="search__wrapper-item">
										<div class="search__wrapper-item-title">Styl</div>
										<div class="search__wrapper-item-subtitle">Wybierz styl tańca</div>
								</div>
								<div class="search__wrapper-item">
										<div class="search__wrapper-item-title">Instruktor</div>
										<div class="search__wrapper-item-subtitle">Wybierz instruktora</div>
								</div>
								<div class="search__wrapper-item">
										<div class="search__wrapper-item-title">Poziom</div>
										<div class="search__wrapper-item-subtitle">Wybierz poziom uczestnika</div>
								</div>
								<div class="search__wrapper-item">
										<div class="search__wrapper-item-title">Dzień</div>
										<div class="search__wrapper-item-subtitle">Wybierz dzień/dni</div>
								</div>
								<div class="search__btn">
										<?php echo Like\get_svg(
											'loupe'
										); ?>
										SZUKAJ
								</div>
						</div>
				</div>
		</div>
</section>
