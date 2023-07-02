<?php
?>
<header>
		<div class="container">
				<div class="menu d-md-flex d-none">
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
						<div class="menu-mobile__burger">
								<?php echo Like\get_svg('burger-mobile'); ?>
						</div>
						<div class="menu-mobile__container">
								<?php
										wp_nav_menu([
											            'menu'        => 'primary',
											            'menu_class'  => 'menu-mobile',
											            'link_before' => '<span>',
											            'link_after'  => '</span>',
										            ]);
								?>
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