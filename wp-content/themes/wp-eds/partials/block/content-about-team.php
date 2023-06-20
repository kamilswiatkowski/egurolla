<?php
		
		$image = get_field('image');
		$title = get_field('title');
		$categories = get_field('categories');
		$about = get_field('about');
		$facebook = get_field('facebook');
		$instagram = get_field('instagram');
		$button = get_field('button');
?>

<section class="about-team">
		<div class="container">
				<div class="row">
						<div class="col-lg-6 col-12">
								<div class="red-title-italic show-mobile-block"><?php echo $title; ?></div>
								<?php if(is_array($categories)) { ?>
										<div class="about-team__categories show-mobile-flex">
												<?php foreach ($categories as $category) { ?>
														<div class="about-team__category">
																<?php echo $category->name; ?>
														</div>
												<?php } ?>
										</div>
								<?php } ?>
								<div class="about-team__img">
										<img src="<?php echo $image['url']; ?>" alt="">
								</div>
						</div>
						<div class="col-lg-6 col-12">
								<div class="about-team__content">
										<div class="red-title-italic show-desktop-block"><?php echo $title; ?></div>
										<?php if(is_array($categories)) { ?>
												<div class="about-team__categories show-desktop-flex">
														<?php foreach ($categories as $category) { ?>
																<div class="about-team__category">
																		<?php echo $category->name; ?>
																</div>
														<?php } ?>
												</div>
										<?php } ?>
										<div class="about-team__about">
												<?php echo $about; ?>
										</div>
										<?php if(is_array($button)) { ?>
												<a class="red-button-white-text about-team__btn" href="<?php echo $button['url'] ?>">
														<?php echo $button['title']; ?>
												</a>
										<?php } ?>
										<?php if($facebook || $instagram) { ?>
												<div class="about-team__socials">
														<a href="<?php echo $facebook; ?>">
																<div class="socials__icon-wrapper">
																		<?php echo Like\get_svg('icon-fb'); ?>
																</div>
																<span class="socials__name">FACEBOOK</span>
														</a>
														<a href="<?php echo $instagram; ?>">
																<div class="socials__icon-wrapper">
																		<?php echo Like\get_svg('icon-ig'); ?>
																</div>
																<span class="socials__name">INSTAGRAM</span>
														</a>
												</div>
										<?php } ?>
								</div>
						</div>
				</div>
		</div>
</section>
