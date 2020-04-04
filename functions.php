<?php
function habakiri_child_theme_setup() {
	class Habakiri extends Habakiri_Base_Functions {
		public function wp_enqueue_scripts() {
			wp_enqueue_style(
				get_template(),
				get_template_directory_uri() . '/style.min.css'
			);
			parent::wp_enqueue_scripts();
		}
	}
}
add_action( 'after_setup_theme', 'habakiri_child_theme_setup' );


add_filter( 'jetpack_implode_frontend_css', '__return_false' );
add_action( 'wp_enqueue_scripts', 'dequeue_devicepx', 20 );
function dequeue_devicepx() {
wp_dequeue_script( 'devicepx' );
}

add_shortcode('recent_posts', 'my_recent_posts');

function my_recent_posts($atts) {
  // デフォルトテンプレート
  $template = '<div style="border-bottom:dotted 1px #aaaaaa;margin-bottom:20px;font-size:14px">
  <div class="title"><a href="%s" target="_top">%s</a></div>
  <div class="day" style="font-size:12px;color:#999999">%s</div>
</div>
';
 
  // 引数の処理
  extract(shortcode_atts(array(
    'template' => $template,
    'args'     => 'post_type=post&posts_per_page=10',
    ), $atts));
 
  $the_list = '';
 
  // 最新のポスト取得
  $posts = get_posts($args);
  foreach ($posts as $post) {
    $the_list .= sprintf(
      $template,
      esc_attr(get_permalink($post->ID)),
      esc_html($post->post_title),
      mysql2date("Y年m月j日", $post->post_date)
      );
  }
 
  return $the_list;
}

/*
if ( !(is_admin() ) ) {
    function replace_scripttag ( $tag ) {
        if ( !preg_match( '/\b(defer|async)\b/', $tag ) ) {
            return str_replace( "type='text/javascript'", 'async', $tag );
        }
        return $tag;
    }
    add_filter( 'script_loader_tag', 'replace_scripttag' );
}

if ( !(is_admin() ) ) {
    #CSSの先読み非同期処理
    function my_style_loader_tag_function($tag){
        $match = preg_match("/style\.css\?ver=20200303051814/", $tag);
        if (!$match) {
            $tag = preg_replace( '/stylesheet/' , 'preload', $tag );
            $tag = preg_replace( '/ />/' , ' as="style" onload="this.onload=null;this.rel='stylesheet'" />', $tag );
        }
        return $tag;
    }
    add_filter('style_loader_tag', 'my_style_loader_tag_function');

    #header内JS非同期読み込みasync/defer
    function replace_scripttag ( $tag ) {
        if ( !preg_match( '/b(defer|async)b/', $tag ) ) {
            return str_replace( "type='text/javascript'", 'defer', $tag );
        }
        return $tag;
    }
    add_filter( 'script_loader_tag', 'replace_scripttag' );
}

function my_scripts_method() {
	wp_enqueue_script(
		'custom_script',
		get_template_directory_uri() . '/js/jquery.matchHeight.js',
	);
}
add_action('wp_enqueue_scripts', 'my_scripts_method');

function remove_cssjs_ver2( $src ) {
    if ( strpos( $src, 'ver=' ) )
        $src = remove_query_arg( 'ver', $src );
    return $src;
}
add_filter( 'style_loader_src', 'remove_cssjs_ver2', 9999 );
add_filter( 'script_loader_src', 'remove_cssjs_ver2', 9999 );
*/