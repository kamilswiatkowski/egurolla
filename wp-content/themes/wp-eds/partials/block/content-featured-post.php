<?php
		
		$title = get_field('title');
		$tags = get_tags();
		$posts = get_posts();
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
										<?php foreach ($posts as $post) { ?>
												<div class="featured__post">
														<?php Like\article_box($post->ID); ?>
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
								<div class="col-md-4 col-12">
										<?php Like\article_box($post->ID); ?>
								</div>
						<?php } ?>
				</div>
		</div>
</section>