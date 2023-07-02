<?php
$text = get_field('top_bar_text', 'option');
$link = get_field('top_bar_link', 'option');
?>
<section class="top-bar">
		<div class="container">
				<div class="row">
						<div class="col-12">
							<div class="top-bar__content flex-center">
									<img class="top-bar__img" src="<?php echo get_template_directory_uri(); ?>/dist/images/shout-red.svg" alt="logo">
									<div class="top-bar__text">
											<?php echo $text; ?>
									</div>
									<a href="<?php echo $link['url']; ?>" class="top-bar__link"><?php echo $link['title']; ?></a>
							</div>
						</div>
				</div>
		</div>
</section>
