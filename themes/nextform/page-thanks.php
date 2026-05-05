<?php
/*
Template Name: Thanks Page
*/
?>

<?php get_header(); ?>

<main class="contact-neo contact-neo--thanks">
    <section class="contact-neo-hero">
        <span class="contact-neo-blob contact-neo-blob-a" aria-hidden="true"></span>
        <span class="contact-neo-blob contact-neo-blob-b" aria-hidden="true"></span>
        <span class="contact-neo-curve" aria-hidden="true"></span>

        <div class="contact-neo-shell">
            <div class="contact-neo-hero-inner">
                <p class="contact-neo-eyebrow">THANK YOU</p>
                <h1 class="contact-neo-hero-title">
                    お問い合わせ<br>
                    <span>ありがとうございました</span>
                </h1>
                <p class="contact-neo-hero-text">
                    内容を確認のうえ、担当者よりご連絡いたします。<br />お急ぎの場合はお電話でもお問い合わせいただけます。
                </p>
            </div>
        </div>
    </section>

    <section class="contact-neo-thanks-section">
        <div class="contact-neo-shell">
            <article class="contact-neo-thanks-card">
                <span class="contact-neo-thanks-icon" aria-hidden="true">
                    <svg viewBox="0 0 48 48" xmlns="http://www.w3.org/2000/svg">
                        <circle cx="24" cy="24" r="22" fill="none" stroke="currentColor" stroke-width="2.4" />
                        <path d="M14 24.5l7 7 13-15" fill="none" stroke="currentColor" stroke-width="3"
                            stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                </span>
                <h2 class="contact-neo-thanks-title">送信を受け付けました</h2>
                <p class="contact-neo-thanks-text">
                    内容を送信しました。<br>通常、2〜3営業日以内にご連絡いたします。
                </p>
                <div class="contact-neo-thanks-actions">
                    <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="contact-neo-thanks-btn">トップへ戻る</a>
                </div>
            </article>
        </div>
    </section>
</main>

<?php get_footer(); ?>