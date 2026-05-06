<?php

//////////////////////////////////////////////////
// JS読み込み（wp_footer 削除不可）
//////////////////////////////////////////////////
function nextform_footer_scripts() {
	echo'<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>'."\n";
	echo '<script src="https://cdnjs.cloudflare.com/ajax/libs/iScroll/5.2.0/iscroll.min.js"></script>' . "\n";
	echo '<script src="' . get_template_directory_uri() . '/js/drawer.min.js"></script>' . "\n";
	echo '<script src="' . get_template_directory_uri() . '/js/script.js"></script>' . "\n";
}
add_action( 'wp_footer', 'nextform_footer_scripts', 999 );


//////////////////////////////////////////////////
// CSS・メタタグ読み込み（wp_head 削除不可）
//////////////////////////////////////////////////
function nextform_head() {
	// CSS
	echo '<link rel="stylesheet" href="'.get_stylesheet_uri().'">'."\n";
	echo '<link rel="stylesheet" href="' . get_template_directory_uri() . '/css/reset.css">' . "\n";
	echo '<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">' . "\n";
	echo '<link rel="stylesheet" href="' . get_template_directory_uri() . '/css/drawer.min.css" media="screen and (max-width: 1095px)">' . "\n";
	echo '<link rel="stylesheet" href="' . get_template_directory_uri() . '/css/style.css">' . "\n";

	// Google Fonts
	echo '<link rel="preconnect" href="https://fonts.googleapis.com">' . "\n";
	echo '<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>' . "\n";
	echo '<link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@100..900&family=Roboto:wght@600&family=Zen+Kaku+Gothic+New:wght@400;700&display=swap" rel="stylesheet">'."\n";

	// Favicon
	echo '<link rel="icon" href="' . get_template_directory_uri() . '/favicon.ico">' . "\n";

	// Meta
	echo '<meta http-equiv="X-UA-Compatible" content="IE=edge">' . "\n";
	echo '<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">' . "\n";

	// DNS prefetch
	echo '<link rel="dns-prefetch" href="//fonts.googleapis.com">' . "\n";
	echo '<link rel="dns-prefetch" href="//fonts.gstatic.com">' . "\n";
}
add_action( 'wp_head', 'nextform_head' );


//////////////////////////////////////////////////
// wp_head 不要タグ削除（削除不可）
//////////////////////////////////////////////////
remove_action( 'wp_head', 'wp_generator' );
remove_action( 'wp_head', 'rsd_link' );
remove_action( 'wp_head', 'wlwmanifest_link' );
remove_action( 'wp_head', 'index_rel_link' );
remove_action( 'wp_head', 'wp_shortlink_wp_head', 10, 0 );
remove_action( 'wp_head', 'parent_post_rel_link', 10, 0 );
remove_action( 'wp_head', 'start_post_rel_link', 10, 0 );
remove_action( 'wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0 );
remove_action( 'wp_head', 'feed_links', 2 );
remove_action( 'wp_head', 'feed_links_extra', 3 );
remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
remove_action( 'wp_print_styles', 'print_emoji_styles' );
remove_action( 'admin_print_styles', 'print_emoji_styles' );
add_filter( 'emoji_svg_url', '__return_false' );

function nextform_remove_recent_comments_style() {
	global $wp_widget_factory;
	if ( isset( $wp_widget_factory->widgets['WP_Widget_Recent_Comments'] ) ) {
		remove_action( 'wp_head', array( $wp_widget_factory->widgets['WP_Widget_Recent_Comments'], 'recent_comments_style' ) );
	}
}
add_action( 'widgets_init', 'nextform_remove_recent_comments_style' );


//////////////////////////////////////////////////
// テーマ基本設定（削除不可）
//////////////////////////////////////////////////
function nextform_setup_theme() {
	add_theme_support( 'title-tag' );
	add_theme_support( 'post-thumbnails' );
	add_image_size( 'icatch', 730, 410, true );
}
add_action( 'after_setup_theme', 'nextform_setup_theme' );

// タイトル区切り文字
function nextform_title_separator() {
	return '｜';
}
add_filter( 'document_title_separator', 'nextform_title_separator' );

function nextform_get_meta_description() {
	if ( is_front_page() ) {
		return 'nextformは、精神科訪問看護と生活支援を通じて、若い世代のこころの回復と自分らしい暮らしを支える福祉サービスです。';
	}

	if ( is_page( 'about' ) ) {
		return 'nextformの理念、代表メッセージ、会社概要をご紹介します。地域で暮らす一人ひとりの選択に寄り添い、医療と生活支援を横断して伴走します。';
	}

	if ( is_page( 'homecare' ) ) {
		return 'nextformの訪問看護サービスについて、対象となる方、サービス内容、ご利用の流れを紹介します。看護師やリハビリ専門職がご自宅での療養を支えます。';
	}

	if ( is_page( 'recruit' ) ) {
		return 'nextformの採用情報です。訪問看護・通所サービスを通じて、利用者さまの暮らしに寄り添う仲間を募集しています。';
	}

	if ( is_page( 'contact' ) ) {
		return 'nextformへのお問い合わせページです。訪問看護やサービスについてのご相談はこちらからご連絡ください。';
	}

	if ( is_singular() ) {
		$excerpt = get_the_excerpt();
		if ( $excerpt ) {
			return wp_trim_words( wp_strip_all_tags( $excerpt ), 80, '' );
		}
	}

	return get_bloginfo( 'description' );
}

function nextform_seo_meta() {
	$description = nextform_get_meta_description();
	if ( $description ) {
		echo '<meta name="description" content="' . esc_attr( $description ) . '">' . "\n";
	}

	if ( is_page( array( 'contact-confirm', 'thanks' ) ) ) {
		echo '<meta name="robots" content="noindex, nofollow">' . "\n";
	}

	if ( is_singular() || is_front_page() ) {
		$canonical = is_front_page() ? home_url( '/' ) : get_permalink();
		echo '<link rel="canonical" href="' . esc_url( $canonical ) . '">' . "\n";
	}
}
add_action( 'wp_head', 'nextform_seo_meta', 5 );


//////////////////////////////////////////////////
// カスタムメニュー（削除不可）
//////////////////////////////////////////////////
register_nav_menus( array(
	'header_menu' => 'ヘッダーメニュー',
	'footer_menu' => 'フッターメニュー',
) );


//////////////////////////////////////////////////
// content_width（削除不可）
//////////////////////////////////////////////////
if ( ! isset( $content_width ) ) {
	$content_width = 1200;
}


//////////////////////////////////////////////////
// 添付ファイルページを404扱いにする（削除不可）
//////////////////////////////////////////////////
function nextform_handle_404() {
	if ( is_attachment() ) {
		global $wp_query;
		$wp_query->set_404();
		status_header( 404 );
		nocache_headers();
	}
}
add_action( 'template_redirect', 'nextform_handle_404' );


//////////////////////////////////////////////////
// 画像srcset無効化（削除不可）
//////////////////////////////////////////////////
add_filter( 'wp_calculate_image_srcset', '__return_false' );


//////////////////////////////////////////////////
// 投稿スラッグ自動生成（日本語スラッグ対策）
//////////////////////////////////////////////////
function nextform_auto_post_slug( $slug, $post_ID, $post_status, $post_type ) {
	if ( preg_match( '/(%[0-9a-f]{2})+/', $slug ) ) {
		$slug = utf8_uri_encode( $post_type ) . '-' . $post_ID;
	}
	return $slug;
}
add_filter( 'wp_unique_post_slug', 'nextform_auto_post_slug', 10, 4 );


//////////////////////////////////////////////////
// OGP設定（削除不可）
//////////////////////////////////////////////////
function nextform_ogp() {
	if ( is_singular() ) {
		global $post;
		setup_postdata( $post );

		// OGP画像
		if ( has_post_thumbnail() ) {
			$ogp_image = get_the_post_thumbnail_url( get_the_ID(), 'large' );
		} else {
			$ogp_image = get_template_directory_uri() . '/img/logo-footer.png';
		}

		// OGP説明文
		$ogp_desc = nextform_get_meta_description();

		echo '<meta property="og:title" content="' . esc_attr( get_the_title() ) . '">' . "\n";
		echo '<meta property="og:type" content="' . ( is_page() ? 'website' : 'article' ) . '">' . "\n";
		echo '<meta property="og:url" content="' . esc_url( get_permalink() ) . '">' . "\n";
		echo '<meta property="og:image" content="' . esc_url( $ogp_image ) . '">' . "\n";
		if ( $ogp_desc ) {
			echo '<meta property="og:description" content="' . esc_attr( $ogp_desc ) . '">' . "\n";
		}
		echo '<meta property="og:site_name" content="' . esc_attr( get_bloginfo( 'name' ) ) . '">' . "\n";
		echo '<meta name="twitter:card" content="summary_large_image">' . "\n";

		wp_reset_postdata();
	} else {
		// トップページ・アーカイブ等
		$ogp_image = get_template_directory_uri() . '/img/logo-footer.png';
		echo '<meta property="og:title" content="' . esc_attr( get_bloginfo( 'name' ) ) . '">' . "\n";
		echo '<meta property="og:type" content="website">' . "\n";
		echo '<meta property="og:url" content="' . esc_url( home_url( '/' ) ) . '">' . "\n";
		echo '<meta property="og:image" content="' . esc_url( $ogp_image ) . '">' . "\n";
		echo '<meta property="og:description" content="' . esc_attr( nextform_get_meta_description() ) . '">' . "\n";
		echo '<meta property="og:site_name" content="' . esc_attr( get_bloginfo( 'name' ) ) . '">' . "\n";
		echo '<meta name="twitter:card" content="summary_large_image">' . "\n";
	}
}
add_action( 'wp_head', 'nextform_ogp' );


//////////////////////////////////////////////////
// イメージURLから画像IDを取得（削除不可）
//////////////////////////////////////////////////
function nextform_get_image_id( $image_src ) {
	global $wpdb;
	$query = $wpdb->prepare( "SELECT ID FROM {$wpdb->posts} WHERE guid = %s", $image_src );
	return $wpdb->get_var( $query );
}


//////////////////////////////////////////////////
// ページネーション（削除不可）
//////////////////////////////////////////////////
function nextform_posts_pagination( $args = array() ) {
	$navigation = '';

	if ( $GLOBALS['wp_query']->max_num_pages > 1 ) {
		$args = wp_parse_args( $args, array(
			'mid_size'           => 2,
			'prev_next'          => true,
			'prev_text'          => '&laquo;',
			'next_text'          => '&raquo;',
			'screen_reader_text' => __( 'Posts navigation' ),
		) );

		$links = paginate_links( $args );

		if ( $links ) {
			$navigation = '<nav class="pager" role="navigation">'
				. '<ul class="pager__list">'
				. preg_replace(
					array(
						'/class="page-numbers/',
						'/aria-current="page">/',
					),
					array(
						'class="pager__item',
						'aria-current="page" class="pager__item is-current">',
					),
					$links
				)
				. '</ul></nav>';
		}
	}

	return $navigation;
}


//////////////////////////////////////////////////
// 管理画面の投稿・固定ページ一覧にIDを表示（削除不可）
//////////////////////////////////////////////////
function nextform_add_column_id( $columns ) {
	$columns['post_id'] = 'ID';
	return $columns;
}

function nextform_show_column_id( $column_name, $post_id ) {
	if ( $column_name === 'post_id' ) {
		echo esc_html( $post_id );
	}
}

add_filter( 'manage_posts_columns', 'nextform_add_column_id', 5 );
add_action( 'manage_posts_custom_column', 'nextform_show_column_id', 5, 2 );
add_filter( 'manage_pages_columns', 'nextform_add_column_id', 5 );
add_action( 'manage_pages_custom_column', 'nextform_show_column_id', 5, 2 );


//////////////////////////////////////////////////
// カスタムフィールドのmeta_keyをクエリで使えるようにする
//////////////////////////////////////////////////
function nextform_add_meta_query_vars( $public_query_vars ) {
	$public_query_vars[] = 'meta_key';
	$public_query_vars[] = 'meta_value_num';
	return $public_query_vars;
}
add_filter( 'query_vars', 'nextform_add_meta_query_vars' );
