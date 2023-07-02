<?php
		
		$title = get_field('title');
		$subtitle = get_field('subtitle');
		$sections = get_field('sections');
		$direction = get_field('direction');
?>
<section class="event-desc">
		<div class="container">
				<div class="row">
						<div class="col-12">
								<div class="red-title-italic">
										<?php echo $title; ?>
								</div>
								<div class="red-subtitle event-desc__subtitle">
										<?php echo $subtitle; ?>
								</div>
						</div>
				</div>
				<?php foreach ($sections as $key => $section) {
						$odd = $key % 2 == 0 ? 'odd' : 'even';
						if($direction) $odd = $direction ? 'even' : 'odd';
						?>
						<div class="row <?php echo $odd; ?>">
								<div class="col-lg-6 col-12 event-desc__col">
										<div class="event-desc__content">
												<div class="event-desc__content-title">
														<?php echo $section['title']; ?>
												</div>
												<div class="event-desc__content-desc">
														<?php echo $section['description']; ?>
												</div>
										</div>
								</div>
								<div class="col-lg-6 col-12 event-desc__col">
										<div class="event-desc__img">
												<img src="<?php echo $section['image']['url']; ?>" alt="">
										</div>
								</div>
						</div>
				<?php } ?>
		</div>
</section>
