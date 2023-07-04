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
				$teams = showTeams($teams);
				$teams = ob_get_clean();
				echo json_encode([
					                 'teams' => $teams,
				                 ]);
				wp_die();
		}
		
		add_action('wp_ajax_loadMorePosts', 'Like\loadMorePosts');
		add_action('wp_ajax_nopriv_loadMorePosts', 'Like\loadMorePosts');
		
		function loadMorePostssByFilter()
		{
				ob_start();
				$filters = json_decode(stripslashes($_POST['filter']));
				
				$teams = get_posts([
					                   'post_type'   => $_POST['post_type'],
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
				$teams = showTeams($teams);
				$teams = ob_get_clean();
				echo json_encode([
					                 'teams' => $teams,
				                 ]);
				wp_die();
		}
		
		add_action('wp_ajax_loadMorePostssByFilter', 'Like\loadMorePostssByFilter');
		add_action('wp_ajax_nopriv_loadMorePostssByFilter', 'Like\loadMorePostssByFilter');
