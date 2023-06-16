<?php
		
		$title = get_field('title');
		$subtitle = get_field('subtitle');
		$background = get_field('background_image');
		$show_search = get_field('show_search');
?>

<section class="home-hero" style="background: url('<?php echo $background['url']; ?>') center center no-repeat;">
		<div class="container">
				<div class="row">
						<div class="col-12">
								<div class="home-hero__wrapper">
										<div class="home-hero__title">
												<h1><?php echo $title; ?></h1>
										</div>
										<div class="home-hero__subtitle">
												<?php echo $subtitle; ?>
										</div>
										<?php if($show_search) { ?>
												<div class="home-hero__search-bar">
														<?php showSearchBar(); ?>
												</div>
										<?php } ?>
								</div>
						</div>
				</div>
		</div>
</section>
