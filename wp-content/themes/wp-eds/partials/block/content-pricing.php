<?php
		
		$title = get_field('title');
		$subtitle = get_field('subtitle');

?>

<section class="pricing">
		<div class="container">
				<div class="row">
						<div class="col-12">
								<div class="pricing__top">
										<div class="pricing__left">
												<div class="red-title-italic"><?php echo $title; ?></div>
												<div class="red-subtitle">
														<?php echo $subtitle; ?>
												</div>
										</div>
										<div class="pricing__right">
												<div class="pricing__right-text">
														Wybierz czas trwania zajęć
												</div>
												<div class="teams__filters-item-wrapper">
														<span class="team__filters-name">60 minut</span>
														<?php echo Like\get_svg(
															'arrow-red-bottom'
														); ?>
														<div class="teams__dropdown" data-current-filter>
														
														</div>
												</div>
										</div>
								</div>
						</div>
				</div>
				<div class="row">
						<div class="col-12">
								<div class="divTable" style="width: 1000px;" >
										<div class="divTableBody">
												<div class="divTableRow pricing__head">
														<div class="divTableCell">&nbsp;</div>
														<div class="divTableCell">&nbsp;</div>
														<div class="divTableCell">&nbsp;</div>
												</div>
												<div class="divTableRow pricing__even">
														<div class="divTableCell">&nbsp;</div>
														<div class="divTableCell">&nbsp;</div>
														<div class="divTableCell">&nbsp;</div>
												</div>
												<div class="divTableRow pricing__odd">
														<div class="divTableCell">&nbsp;</div>
														<div class="divTableCell">&nbsp;</div>
														<div class="divTableCell">&nbsp;</div>
												</div>
												<div class="divTableRow pricing__even">
														<div class="divTableCell">&nbsp;</div>
														<div class="divTableCell">&nbsp;</div>
														<div class="divTableCell">&nbsp;</div>
												</div>
										</div>
								</div>
						</div>
				</div>
		</div>
</section>
