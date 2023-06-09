<?php
		
		namespace Like;
		
		use function Like\showTeams;
		
		function loadMoreTeams($data)
		{
				ob_start();
				$teams = get_posts([
					                   'post_type'   => 'teams',
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
		
		add_action('wp_ajax_loadMoreTeams', 'Like\loadMoreTeams');
		add_action('wp_ajax_nopriv_loadMoreTeams', 'Like\loadMoreTeams');
		
		function loadMoreTeamsByFilter()
		{
				ob_start();
				$filters = json_decode(stripslashes($_POST['filter']));
				
				$teams = get_posts([
					                   'post_type'   => 'teams',
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
		
		add_action('wp_ajax_loadMoreTeamsByFilter', 'Like\loadMoreTeamsByFilter');
		add_action('wp_ajax_nopriv_loadMoreTeamsByFilter', 'Like\loadMoreTeamsByFilter');
