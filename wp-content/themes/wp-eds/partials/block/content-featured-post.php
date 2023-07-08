<?php
		
		$title = get_field('title');
		$tags = get_tags();
		$featured = get_field('posts');
		$featured_ids = [];
		foreach ($featured as $post) {
				$featured_ids[] = $post->ID;
		}
		$posts = get_posts(
			[
				'post__not_in' => $featured_ids,
				'posts_per_page' => 9,
			]
		);
?>
<section class="featured">
		<div class="container">
				<div class="row">
						<div class="col-12">
								<div class="red-title-italic featured__title"><?php echo $title; ?></div>
						</div>
				</div>
				<div class="row">
						<div class="col-12">
								<div class="featured__categories">
										<div class="featured__category">
												#wszystko
										</div>
										<?php foreach ($tags as $tag) {
												?>
												<div class="featured__category" data-tag="<?php echo $tag->term_id; ?>" data-current-filter>
														#<?php echo $tag->name; ?>
												</div>
										<?php } ?>
								</div>
						</div>
				</div>
				<div class="row">
						<div class="col-12">
								<div class="featured__posts">
										<?php foreach ($featured as $post) { ?>
												<div class="featured__post">
														<?php Like\article_box($post->ID, false); ?>
												</div>
										<?php } ?>
								</div>
						</div>
				</div>

		</div>
</section>
<section class="posts">
		<div class="container">
				<div class="row posts__container">
						<?php foreach ($posts as $post) { ?>
										<?php Like\article_box($post->ID,); ?>
						<?php } ?>
				</div>
				<div class="row">
						<div class="col-12">
								<div class="teams__load-more" data-load-more="">
										ZAŁADUJ WIĘCEJ
								</div>
						</div>
				</div>
		</div>
</section>