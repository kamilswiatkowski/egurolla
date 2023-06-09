<?php
		
		$template_dir = get_template_directory();
		require "kint.phar";
		require_once "$template_dir/includes/functions/local-debug.php";
		foreach (glob("$template_dir/includes/*.php") as $filename) {
				require_once $filename;
		}
		
		$all = glob("$template_dir/includes/**/*.php");
		$ignore = glob("$template_dir/includes/acf-*/**");
		foreach (array_diff($all, $ignore) as $filename) {
				require_once $filename;
		}
		
		function cc_mime_types($mimes) {
				$mimes['svg'] = 'image/svg+xml';
				return $mimes;
		}
		add_filter('upload_mimes', 'cc_mime_types');