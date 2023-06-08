<?php
namespace TDS;
function show_content($content){ //TODO: Fill in
    foreach ( $content as $layout ) {
        switch($layout['acf_fc_layout']) {
            case 'slider':
                include(get_partial('modules/slider'));
            break;
            case 'module_section':
                include(get_partial('modules/post-boxes'));
            break;
            case 'subscribe':
                include(get_stylesheet_directory() . '/partials/subscribe.php');
            break;
            case 'rb_studio':
                include(get_partial('modules/rb-studio'));
            break;
	        case 'library':
		        include(get_partial('modules/library'));
		        break;
        }
    }
}
