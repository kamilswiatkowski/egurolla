<?php
		$title = get_field('title');
		$blocks = get_field('blocks');
?>
<section class="important">
		<div class="container">
				<div class="row">
						<div class="col-12">
								<div class="important__title">
										<?php echo $title; ?>
								</div>
						</div>
				</div>
				<div class="row">
						<?php foreach ($blocks as $block) { ?>
						<div class="col-md-6 col-12">
								<div class="important__box">
										<div class="important__box-top">
												<div class="important__box-icon">
														<img src="<?php echo $block['icon']['url']; ?>" alt="">
												</div>
												<div class="important__box-title">
														<?php echo $block['title']; ?>
												</div>
										</div>
										<div class="important__box-content">
												<?php echo $block['content']; ?>
										</div>
										<?php if($block['files']) { ?>
										<?php foreach ($block['files'] as $file) { ?>
										<div class="important__box-download">
												<a href="<?php echo $file['file']['url']; ?>" target="_blank">
														<?php echo Like\get_svg(
															'download'
														); ?>
														<?php echo $file['file']['title']; ?>
												</a>
										</div>
										<?php } }?>
								</div>
						</div>
						<?php } ?>
				</div>
		</div>
</section>
