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
												<div class="experience__filter experience__filter-active red-button-white-text">
														Zdjęcia
												</div>
												<div class="experience__filter red-button-white-text">
														Filmy
												</div>
										</div>
								</div>
						</div>
				</div>
				<div class="row">
						<div class="col-12">
								<div class="experience__slider">
										<?php foreach ($images as $img){ ?>
												<img class="experience__img" src="<?php echo $img['image']['url']; ?>" alt="">
										<?php } ?>
								</div>
						</div>
				</div>
		</div>
</section>
