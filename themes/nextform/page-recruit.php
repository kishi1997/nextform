<?php get_header(); ?>

<!-- ========== HERO ========== -->
<section class="ab-hero ab-hero--recruit">
    <div class="ab-hero-inner">
        <p class="ab-hero-en">RECRUIT</p>
        <h2 class="ab-hero-title">採用情報</h2>
    </div>
</section>
<!-- primary -->
<main id="page-main" class="page-main">
    <div class="">

        <!-- breadcrumb -->
        <?php get_template_part( 'template-parts/breadcrumb', null, [
            'items' => [
                [ 'label' => 'TOP',   'url' => home_url( '/' ) ],
                [ 'label' => '採用情報', 'url' => home_url( '/recruit/' ) ],
            ],
        ] ); ?>

        <div class="page-body page-recruit">

            <div class="catch low-container">
                <h4 class="catch-title">あなたの「やってみたい」<br class="catch-br">を応援します。</h4>
                <p class="catch-text">
                    障がいのある利用者さんの生活に寄り添うお仕事です。nextformでは、「その人らしく、住み続けられる福祉の追求」を理念に、一人ひとりに向き合ったサービスを提供しています。その想いをともに実現してくださる方を募集しています。<br>年齢・性別不問。人と関わることが好きな方、福祉が未経験の方もベテランスタッフがしっかりサポートします。ぜひ一緒に働きましょう。
                </p>
            </div>

            <div class="job low-container">
                <h3 class="title-low title-low-job">募集要項</h3>
                <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                    <div class="page-content">
                        <?php the_content(); ?>
                    </div>
                <?php endwhile; endif; ?>
            </div>

            <div class="flow">
                <div class="flow-inner">
                    <h3 class="title-low title-low-flow">採用の流れ</h3>
                    <div class="flow-wrap">
                        <div class="flow-item flow-item01">
                            <h5 class="flow-title">エントリー</h5>
                            <p class="flow-text">まずはお問い合わせフォームより、ご応募ください。</p>
                        </div>
                        <div class="flow-item flow-item02">
                            <h5 class="flow-title">面接</h5>
                            <p class="flow-text">人柄を重視しておりますので、書類選考は行わず、面接をさせていただきます。</p>
                        </div>
                        <div class="flow-item flow-item03">
                            <h5 class="flow-title">内定</h5>
                            <p class="flow-text">私たちと一緒に、その人らしく住み続けられる福祉をつくっていきましょう。</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="apply">
                <a href="<?php echo esc_url( home_url( '/contact' ) ); ?>" class="apply-btn">ENTRY</a>
            </div>

        </div>

    </div>
</main><!-- /primary -->
<?php get_footer(); ?>