<?php
		
		function showSearchBar()
		{
				?>
				<div class="search-bar__wrapper">
						<div class="search-bar__item">Grupa wiekowa</div>
						<div class="search-bar__item">Szkoła</div>
						<div class="search-bar__item">Styl</div>
						<div class="search-bar__icon">
								<?php echo Like\get_svg('lupe'); ?>
						</div>
				</div>
				<?php
		}