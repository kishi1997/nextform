<?php get_header(); ?>

<main class="contact-neo contact-neo--confirm">
    <section class="contact-neo-hero">
        <span class="contact-neo-blob contact-neo-blob-a" aria-hidden="true"></span>
        <span class="contact-neo-blob contact-neo-blob-b" aria-hidden="true"></span>
        <span class="contact-neo-curve" aria-hidden="true"></span>

        <div class="contact-neo-shell">
            <div class="contact-neo-hero-inner">
                <p class="contact-neo-eyebrow">CONFIRM</p>
                <h1 class="contact-neo-hero-title">
                    入力内容のご確認
                </h1>
                <p class="contact-neo-hero-text">
                    以下の内容で送信します。修正がある場合は「戻る」ボタンより前の画面に戻って編集してください。
                </p>
            </div>
        </div>
    </section>

    <?php get_template_part( 'template-parts/breadcrumb', null, [
        'items' => [
            [ 'label' => 'TOP',         'url' => home_url( '/' ) ],
            [ 'label' => 'お問い合わせ', 'url' => home_url( '/contact/' ) ],
            [ 'label' => '入力内容の確認', 'url' => home_url( '/contact/confirm/' ) ],
        ],
    ] ); ?>

    <section class="contact-neo-form-section">
        <div class="contact-neo-shell">
            <div class="contact-neo-form-wrap confirm-page-content">
                <p class="contact-neo-form-lead">お問い合わせ内容をご確認ください。</p>
                <div class="contact-neo-form">
                    <?php echo do_shortcode( '[contact-form-7 id="5f16d01" title="確認画面"]' ); ?>
                </div>
            </div>
        </div>
    </section>
</main>

<?php get_footer(); ?>
