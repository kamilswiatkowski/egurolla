<?php
		
		namespace Like;
		
		function article_box(int $id, bool $is_column = true)
		{
				$post_thumb = get_the_post_thumbnail_url($id);
				$post_link = get_the_permalink($id);
				$post_title = get_the_title($id);
				$excerpt = get_the_excerpt($id);
				$date = get_the_date('d.m.Y', $id);
				$categories = wp_get_post_categories($id);
				?>
				<?php if($is_column) { ?>
				<div class="col-12 col-md-4">
		<?php } ?>
				
				<article class="article-box">
						<div class="article-box__thumb" style="background-image: url(<?php echo $post_thumb; ?>);"></div>
						<div class="article-box__info">
								<span class="article-box__date"><?php echo $date; ?></span>
								<a href="<?php echo $post_link; ?>" class="article-box__link">
										<h3 class="article-box__title"><?php echo $post_title; ?></h3>
								</a>
								<?php if($categories) { ?>
										<ul class="article-box__categories">
												<?php foreach ($categories as $category) { ?>
														<li>
																<a href="<?php echo get_category_link($category); ?>">
																		<?php echo get_cat_name($category); ?>
																</a>
														</li>
												<?php } ?>
										</ul>
								<?php } ?>
								<p class="article-box__excerpt"><?php echo $excerpt; ?></p>
								<a href="<?php echo $post_link; ?>" class="article-box__read-more">Przeczytaj artykuł</a>
						</div>
				</article>
				<?php if($is_column) { ?>
				</div>
		<?php } ?>
		
		<?php }