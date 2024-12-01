<?php 
add_action( 'wp_enqueue_scripts', function() {
    wp_enqueue_style( 'fonts', 'https://fonts.googleapis.com/css2?family=Bona+Nova+SC:wght@400;700&family=Comfortaa:wght@300..700&display=swap' );
    wp_enqueue_style( 'fonts-gstatic', 'https://fonts.gstatic.com' );
    wp_enqueue_style( 'slick', get_template_directory_uri() . '/assets/slick/slick.css' );
    wp_enqueue_style( 'slick-them', get_template_directory_uri() . '/assets/slick/slick-theme.css' );
    wp_enqueue_style( 'bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css' );
    wp_enqueue_style( 'style', get_template_directory_uri() . '/assets/css/index.css' );


    wp_enqueue_script( 'jquery', get_template_directory_uri() . '/assets/js/jquery.min.js');
    wp_enqueue_script( 'slick-js', get_template_directory_uri() . '/assets/slick/slick.js', array('jquery'),'null', true);
    wp_enqueue_script( 'main', get_template_directory_uri() . '/assets/js/index.js', array('jquery'),'null', true);
    wp_enqueue_script( 'bootstrap-js', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js','null',true);
});

add_theme_support('post-thumbnails');
add_theme_support('title-tag');
add_theme_support('custom-logo');



add_filter( 'upload_mimes', 'svg_upload_allow' );
function svg_upload_allow( $mimes ) {
	$mimes['svg']  = 'image/svg+xml';

	return $mimes;
}


add_filter( 'wp_check_filetype_and_ext', 'fix_svg_mime_type', 10, 5 );

# Исправление MIME типа для SVG файлов.
function fix_svg_mime_type( $data, $file, $filename, $mimes, $real_mime = '' ){

	// WP 5.1 +
	if( version_compare( $GLOBALS['wp_version'], '5.1.0', '>=' ) ){
		$dosvg = in_array( $real_mime, [ 'image/svg', 'image/svg+xml' ] );
	}
	else {
		$dosvg = ( '.svg' === strtolower( substr( $filename, -4 ) ) );
	}

	// mime тип был обнулен, поправим его
	// а также проверим право пользователя
	if( $dosvg ){

		// разрешим
		if( current_user_can('manage_options') ){

			$data['ext']  = 'svg';
			$data['type'] = 'image/svg+xml';
		}
		// запретим
		else {
			$data['ext']  = false;
			$data['type'] = false;
		}

	}

	return $data;
}

?>