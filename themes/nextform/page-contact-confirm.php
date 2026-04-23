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
    <main id="page-main" class="page-main confirm-page">

        <?php get_template_part( 'template-parts/breadcrumb', null, [
            'items' => [
                [ 'label' => 'TOP',         'url' => home_url( '/' ) ],
                [ 'label' => 'お問い合わせ', 'url' => home_url( '/contact/' ) ],
            ],
        ] ); ?>

        <div class="contact-body">
            <div class="contact-text">お問い合わせ内容をご確認ください。</div>
            <?php echo do_shortcode('[contact-form-7 id="5f16d01" title="確認画面"]'); ?>
        </div>

    </main>
</div><!-- /container -->
<?php get_footer(); ?>