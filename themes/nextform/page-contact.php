<?php get_header(); ?>

<!-- ========== HERO ========== -->
<section class="ab-hero ab-hero--contact">
    <div class="ab-hero-inner">
        <p class="ab-hero-en">CONTACT</p>
        <h2 class="ab-hero-title">お問い合わせ</h2>
    </div>
</section>

<div class="container4 low-contact">
    <!-- primary -->
    <main id="page-main" class="page-main">

        <?php get_template_part( 'template-parts/breadcrumb', null, [
            'items' => [
                [ 'label' => 'TOP',         'url' => home_url( '/' ) ],
                [ 'label' => 'お問い合わせ', 'url' => home_url( '/contact/' ) ],
            ],
        ] ); ?>

        <div class="contact-body">

            <div class="contact-text">施設見学や入居についてのご相談など、<br class="contact-br">まずはお気軽にお問い合わせください。</div>
            <?php echo do_shortcode('[contact-form-7 id="2814afe" title="コンタクトフォーム"]'); ?>
        </div>

    </main>
</div><!-- /container -->
<?php get_footer(); ?>