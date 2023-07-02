<?php
?>
<header>
		<div class="container">
				<div class="menu menu-desktop d-md-flex d-none">
						<?php
								wp_nav_menu([
									            'menu'        => 'primary',
									            'menu_class'  => 'menu',
									            'link_before' => '<span>',
									            'link_after'  => '</span>',
								            ]);
						?>
				</div>
				<div class="menu-mobile-wrapper d-md-none d-flex">
						<div class="menu-mobile__burger" data-toggle-menu>
								<?php echo Like\get_svg('burger-mobile'); ?>
						</div>
						<div class="menu-mobile__close d-none">
								<?php echo Like\get_svg('red-close'); ?>
						</div>
						<div class="menu-mobile__container" data-mobile-menu>
								<?php
										wp_nav_menu([
											            'menu'        => 'primary',
											            'menu_class'  => 'menu-mobile',
											            'link_before' => '<span>',
											            'link_after'  => '</span>',
										            ]);
								?>
										<div class="btn btn--white-text">
												ZNAJDŹ SZKOŁĘ
										</div>
								<div class="menu-mobile__contact">
										<div class="menu-mobile__mail">
												<?php echo Like\get_svg('mail'); ?>
												studio@egurrola.pl
										</div>
										<div class="menu-mobile__phone">
												<?php echo Like\get_svg('phone'); ?>
												601 20 20 20
										</div>
								</div>
								<?php include(Like\get_partial('socials')); ?>
						</div>
						<div class="search-bar__logo">
								<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
										<img src="<?php echo get_template_directory_uri(); ?>/dist/images/eds-logo-color.png" alt="Logo">
								</a>
						</div>
						<div class="menu-mobile__login">
								<?php echo Like\get_svg('people-icon'); ?>
						</div>
				</div>
		</div>
</header>