<?php get_header(); ?>

<main class="contact-neo">
    <section class="contact-neo-hero">
        <span class="contact-neo-blob contact-neo-blob-a" aria-hidden="true"></span>
        <span class="contact-neo-blob contact-neo-blob-b" aria-hidden="true"></span>
        <span class="contact-neo-curve" aria-hidden="true"></span>

        <div class="contact-neo-shell">
            <div class="contact-neo-hero-inner">
                <p class="contact-neo-eyebrow">CONTACT</p>
                <h1 class="contact-neo-hero-title">
                    まずはお気軽に、<br>
                    <span>お問い合わせ</span>ください。
                </h1>
                <p class="contact-neo-hero-text">
                    施設見学や入居・サービスについてのご相談、採用に関するお問い合わせなど、内容を問わずご連絡いただけます。担当者より2〜3営業日以内にお返事いたします。
                </p>
            </div>
        </div>
    </section>

    <?php get_template_part( 'template-parts/breadcrumb', null, [
        'items' => [
            [ 'label' => 'TOP',         'url' => home_url( '/' ) ],
            [ 'label' => 'お問い合わせ', 'url' => home_url( '/contact/' ) ],
        ],
    ] ); ?>

    <section class="contact-neo-form-section">
        <div class="contact-neo-shell">
            <div class="contact-neo-form-wrap">
                <p class="contact-neo-form-lead">
                    施設見学や入居についてのご相談など、<br class="contact-neo-br">まずはお気軽にお問い合わせください。
                </p>
                <div class="contact-neo-form">
                    <?php echo do_shortcode( '[contact-form-7 id="2814afe" title="コンタクトフォーム"]' ); ?>
                </div>
            </div>

            <aside class="contact-neo-direct">
                <p class="contact-neo-direct-label">お電話でのお問い合わせ</p>
                <a href="tel:047-314-1520" class="contact-neo-direct-tel">047-314-1520</a>
                <p class="contact-neo-direct-note">受付時間：平日 9:00–18:00</p>
            </aside>
        </div>
    </section>
</main>

<?php get_footer(); ?>
