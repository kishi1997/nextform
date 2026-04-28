<!DOCTYPE html>
<html <?php language_attributes(); ?> prefix="og: http://ogp.me/ns#">

<head prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb# article: http://ogp.me/ns/article#">
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <?php wp_head(); ?>
</head>

<body <?php body_class( array_filter( [ 'drawer', 'drawer--top', get_post_field( 'post_name', get_queried_object_id() ) ] ) ); ?>>
    <!-- body Start -->

    <!-- l-header -->
    <header id="js-header" class="header-a <?php echo is_front_page() ? 'header-a-top' : 'header-a-low'; ?>">
        <div class="header-a-inner">
            <h1 class="header-a-logo">
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
                    <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/logo_pc.png"
                        alt="<?php bloginfo( 'name' ); ?>">
                </a>
            </h1>
            <button type="button" class="drawer-toggle drawer-hamburger">
                <span class="sr-only">toggle navigation</span>
                <span class="drawer-hamburger-icon"></span>
            </button>
            <nav class="drawer-nav header-a-nav">
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="drawer-logo">
                    <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/logo_sp.png"
                        alt="<?php bloginfo( 'name' ); ?>">
                </a>
                <ul class="drawer-menu header-a-nav-list">
                    <li class="header-a-nav-item"><a class="header-a-nav-item-link"
                            href="<?php echo esc_url( home_url( '/about' ) ); ?>">nextformについて</a></li>
                    <li class="header-a-nav-item"><a class="header-a-nav-item-link"
                            href="<?php echo esc_url( home_url( '/homecare' ) ); ?>">訪問看護について</a></li>
                    <li class="header-a-nav-item"><a class="header-a-nav-item-link"
                            href="<?php echo esc_url( home_url( '/recruit' ) ); ?>">採用情報</a></li>
                </ul>
                <ul class="drawer-menu header-a-nav-list drawer-menu-sp">
                    <div class="drawer-menu-sp-container">
                        <p class="drawer-menu-text drawer-sp">訪問看護やサービスについてのご相談など、<br>こちらからお気軽にご連絡ください。</p>
                        <li class="header-a-tel">
                            <a class="header-a-tel-link" href="tel:080-2559-3297">
                                <span class="header-a-tel-icon01">080–2559–3297</span>
                            </a>
                        </li>
                        <li class="header-a-contact">
                            <a class="header-a-contact-link" href="<?php echo esc_url( home_url( '/contact' ) ); ?>">
                                <span class="header-a-contact-icon02">お問い合わせ</span>
                            </a>
                        </li>
                    </div>
                </ul>
            </nav>
        </div>
    </header>
    <!-- /l-header -->