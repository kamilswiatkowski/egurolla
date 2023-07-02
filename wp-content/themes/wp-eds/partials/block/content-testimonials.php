<?php
		
		$title = get_field('title');
		$sub_title = get_field('subtitle');
		$opinions = get_field('opinions');
?>

<section class="testimonials">
		<div class="container">
				<div class="row">
						<div class="col-12">
								<div class="red-title-italic">
										<?php echo $title; ?>
								</div>
								<div class="red-subtitle">
										<?php echo $sub_title; ?>
								</div>
						</div>
				</div>
				<div class="row testimonials__slider">
						<?php foreach ($opinions as $opinion) { ?>
								<div class="col-12">
										<div class="testimonials__testimonial">
												<div class="testimonials__content">
														<?php echo $opinion['opinion']; ?>
												</div>
												<div class="testimonials__author">
														<?php echo $opinion['author']; ?>
												</div>
												<div class="testimonials__source">
														<?php echo $opinion['source']; ?>
												</div>
										</div>
								</div>
						<?php } ?>
				</div>
		</div>
</section>
