<?php
?>
<header>
		<div class="container">
				<div class="menu">
						<?php
								wp_nav_menu([
									            'menu'        => 'primary',
									            'menu_class'  => 'menu',
									            'link_before' => '<span>',
									            'link_after'  => '</span>',
								            ]);
						?>
				</div>
		</div>
</header>