<?php
?>

<section class="search-bar">
		<div class="container">
				<div class="row">
						<div class="col-3">
								<div class="search-bar__logo">
										<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
												<img src="<?php echo get_template_directory_uri(); ?>/dist/images/eds-logo-color.png" alt="Logo">
										</a>
								</div>
						</div>
						<div class="col-6">
								<div class="search-bar__wrapper">
										<div class="search-bar__item">Grupa wiekowa</div>
										<div class="search-bar__item">Szkoła</div>
										<div class="search-bar__item">Styl</div>
										<div class="search-bar__icon">
												<?php echo TDS\get_svg('lupe'); ?>
										</div>
								</div>
						</div>
						<div class="col-3">
								<div class="search-bar__login">
										<?php echo TDS\get_svg('people-icon'); ?>
										Zaloguj się
								</div>
						</div>
				</div>
		</div>
</section>
