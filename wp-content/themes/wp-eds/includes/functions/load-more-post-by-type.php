<?php
		
		namespace Like;
		
		use function Like\showTeams;
		
		function loadMorePosts($data)
		{
				ob_start();
				$teams = get_posts([
					                   'post_type'   => $_POST['type'],
					                   'numberposts' => 6,
					                   'paged'       => $_POST['page'],
				                   ]);
				if($_POST['type'] === 'teams') {
						$teams = showTeams($teams);
						$teams = ob_get_clean();
						echo json_encode([
							                 'posts' => $teams,
						                 ]);
				} elseif($_POST['type'] === 'post') {
						$posts = '';
						foreach ($teams as $post) {
								$posts .=	article_box($post->ID);
						}
						$posts = ob_get_clean();
						echo json_encode([
							                 'posts' => $posts,
						                 ]);
				}
				wp_die();
				
		}
		
		add_action('wp_ajax_loadMorePosts', 'Like\loadMorePosts');
		add_action('wp_ajax_nopriv_loadMorePosts', 'Like\loadMorePosts');
		
		function loadMorePostsByFilter()
		{
				ob_start();
				$filters = json_decode(stripslashes($_POST['filter']));
				
				$posts = get_posts([
					                   'post_type'   => $_POST['type'],
					                   'numberposts' => 6,
					                   'paged'       => $_POST['page'],
					                   'tax_query'   => [
						                   [
							                   'taxonomy' => 'teams-cat',
							                   'field'    => 'term_id',
							                   'terms'    => $filters,
							                   'operator' => 'AND',
						                   ],
					                   ],
				                   ]);
				$posts = showTeams($posts);
				$posts = ob_get_clean();
				echo json_encode([
					                 'posts' => $posts,
				                 ]);
				wp_die();
		}
		
		add_action('wp_ajax_loadMorePostsByFilter', 'Like\loadMorePostsByFilter');
		add_action('wp_ajax_nopriv_loadMorePostsByFilter', 'Like\loadMorePostsByFilter');
