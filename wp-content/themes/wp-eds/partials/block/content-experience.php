<?php
		$title = get_field('title');
		$sub_title = get_field('subtitle');
		$images = get_field('images');
		$movies = get_field('movies');
?>

<section class="experience">
		<div class="container">
				<div class="row">
						<div class="col-12">
								<div class="experience__top">
										<div class="experience__descriptions">
												<div class="red-title-italic">
														<?php echo $title; ?>
												</div>
												<div class="red-subtitle">
														<?php echo $sub_title; ?>
												</div>
										</div>
										<div class="experience__filters flex-center">
												<div class="experience__filters-text">
														Filtruj po:
												</div>
												<div class="experience__filter experience__filter--active experience__filter-active red-button-white-text" data-img-toggler>
														Zdjęcia
												</div>
												<div class="experience__filter red-button-white-text" data-movie-toggler>
														Filmy
												</div>
										</div>
								</div>
						</div>
				</div>
				<div class="row">
						<div class="col-12">
								<div class="experience__slider" data-image-slider>
										<?php foreach ($images as $img){ ?>
												<img class="experience__img" src="<?php echo $img['image']['url']; ?>" alt="">
										<?php } ?>
								</div>
								<div class="experience__slider hide-slider" data-movie-slider>
										<?php foreach ($images as $img){ ?>
												<iframe src="https://www.youtube.com/embed/oBYbxw8f5OI?modestbranding=1&autohide=1&showinfo=0&controls=0&rel=0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay;" allowfullscreen></iframe>
										<?php } ?>
								</div>
						</div>
				</div>
		</div>
</section>
