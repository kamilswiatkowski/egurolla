<?php
		
		$title = get_field('title');
		$subtitle = get_field('subtitle');
		$blocks = get_field('blocks');
		$button = get_field('button');

?>
<section class="why-us">
		<div class="container">
				<div class="row">
						<div class="col-12">
								<div class="red-title-italic red-title-italic--white"><?php echo $title; ?></div>
								<div class="red-subtitle red-subtitle--white"><?php echo $subtitle; ?></div>
						</div>
				</div>
				<div class="row why-us__wrapper">
						<div class="col-12 col-md-6">
								<?php foreach ($blocks as $key => $block) {
										if($key % 2 === 0 || $key === 0) { ?>
												<div class="why-us__accordion">
														<div class="why-us__top" data-accordion>
																<div class="plus">+</div><?php echo $block['main_text']; ?><?php echo Like\get_svg(
																	'arrow-red-bottom'
																); ?></div>
														<div class="why-us__bottom"><?php echo $block['content']; ?></div>
												</div>
										<?php } }?>
						</div>
						<div class="col-12 col-md-6">
								<?php foreach ($blocks as $key => $block) {
										if($key % 2 !== 0) { ?>
												<div class="why-us__accordion">
														<div class="why-us__top" data-accordion>
																<div class="plus">+</div><?php echo $block['main_text']; ?><?php echo Like\get_svg(
																	'arrow-red-bottom'
																); ?></div>
														<div class="why-us__bottom"><?php echo $block['content']; ?></div>
												</div>
										<?php }
								} ?>
						</div>
				</div>
				<div class="row">
						<div class="col-12">
								<div class="why-us__btn">
										<a href="<?php echo $button['url']; ?>" class="btn btn--red btn--white-bg"><?php echo $button['title']; ?></a>
								</div>
						</div>
				</div>
</section>
