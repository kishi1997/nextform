<?php get_header(); ?>

<!-- ========== HERO ========== -->
<section class="ab-hero"
    style="background: url('<?php echo esc_url( get_template_directory_uri() ); ?>/img/cmn/kv_low.png') center/cover no-repeat;">
    <div class="ab-hero-inner">
        <p class="ab-hero-en">ABOUT</p>
        <h2 class="ab-hero-title">nextformについて</h2>
    </div>
</section>

<main id="page-main" class="page-main">

    <!-- Breadcrumb -->
    <?php get_template_part( 'template-parts/breadcrumb', null, [
        'items' => [
            [ 'label' => 'TOP',            'url' => home_url( '/' ) ],
            [ 'label' => 'nextformについて', 'url' => home_url( '/about/' ) ],
        ],
    ] ); ?>

    <!-- ========== nextformの想い ========== -->
    <div class="about low-container">
        <h3 class="title-low title-low-about">nextformの想い</h3>
        <div class="about-img">
            <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/about/about.png" alt="nextformの想い">
        </div>
        <div class="about-text">自分らしく、この場所で。<br />未来へつながる福祉のかたち</div>
    </div>

    <!-- ========== 代表あいさつ ========== -->
    <section class="message">
        <h3 class="title-low title-low-message">代表あいさつ</h3>
        <div class="low-container">
            <div class="ab-message-inner ab-fade">
                <p class="ab-message-quote">
                    自分らしい明日を、一緒につくる<br>nextformは、あなたの隣に立ち続けます
                </p>
                <p class="ab-message-body">
                    株式会社nextformは、私たちが共に「明日（next）」を「かたちにする（form）」という思いを込めて立ち上げた会社です。<br>
                    <br>
                    障がいのある方々やそのご家族、そして私たちのサービスに関わるすべての人が、自分の意思で未来を選び、一歩ずつ前へ進んでいけるよう、日々の支援を通じてお手伝いしていきます。<br>
                    <br>
                    「その人らしく、住み続けられる福祉の追求」を法人理念に掲げ、障がいという個性を持ちながらも、住み慣れた地域で自分らしく暮らせる環境づくりに取り組んでいます。<br>
                    <br>
                    既存の制度やグループホームの枠組みにとらわれることなく、利用者の方お一人おひとりのニーズに向き合いながら、地域福祉のさらなる充実を目指してまいります。
                </p>
                <p class="ab-message-name">代表取締役　小宮 夏</p>
            </div>
        </div>
    </section>

    <!-- ========== 会社概要 ========== -->
    <section class="ab-section ab-section--white">
        <div class="ab-container">
            <p class="ab-label ab-fade">COMPANY</p>
            <h3 class="ab-h2 ab-fade ab-fade-d1">会社概要</h3>
            <div class="ab-company-body ab-fade ab-fade-d2">
                <div class="ab-company-row">
                    <div class="ab-company-th">法人名</div>
                    <div class="ab-company-td">株式会社nextform</div>
                </div>
                <div class="ab-company-row">
                    <div class="ab-company-th">代表者</div>
                    <div class="ab-company-td">小宮 夏</div>
                </div>
                <div class="ab-company-row">
                    <div class="ab-company-th">所在地</div>
                    <div class="ab-company-td">〒179-0083 東京都練馬区平和台3-30-19</div>
                </div>
                <div class="ab-company-row">
                    <div class="ab-company-th">電話番号</div>
                    <div class="ab-company-td">047-314-1520</div>
                </div>
                <div class="ab-company-row">
                    <div class="ab-company-th">メール</div>
                    <div class="ab-company-td">nekusutoform2025@gmail.com</div>
                </div>
                <div class="ab-company-row">
                    <div class="ab-company-th">設立</div>
                    <div class="ab-company-td">2021年5月</div>
                </div>
                <div class="ab-company-row">
                    <div class="ab-company-th">事業内容</div>
                    <div class="ab-company-td">障がい者グループホームの運営(精神障害‧知的障害)</div>
                </div>
                <div class="ab-company-row">
                    <div class="ab-company-th">関連企業</div>
                    <div class="ab-company-td">
                        <a href="https://kamesan-houkan.com/" target="_blank" rel="noopener noreferrer"
                            class="ab-company-link">かめさん訪問看護リハビリステーション</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

</main><!-- /primary -->

<!-- ========== CTA ========== -->
<section class="cta-c">
    <div class="down-to-top">
        <div class="cta-c-title">
            <h2 class="top-title top-title-contact">お問い合わせ</h2>
        </div>
        <div class="cta-c-container">
            <div class="cta-c-text">
                <p>施設見学や入居についてのご相談など、<br>こちらからお気軽にご連絡ください。</p>
            </div>
            <div class="cta-c-btn-wrapper">
                <a href="tel:080-2559-3297" class="cta-c-btn -a">
                    <p class="cta-c-btn-text cta-c-btn-text-tel">080-2559-3297</p>
                </a>
                <a href="<?php echo esc_url( home_url( '/contact' ) ); ?>" class="cta-c-btn -b">
                    <p class="cta-c-btn-text cta-c-btn-text-mail">お問い合わせ</p>
                </a>
            </div>
            <div class="cta-c-content">
                <span class="cta-c-content-border">zoomによるオンライン見学も実施中！</span><br>ご希望の方はお問い合わせフォームよりご連絡ください。
            </div>
        </div>
    </div>
</section>

<script>
(function() {
    var els = document.querySelectorAll('.ab-fade');
    if (!('IntersectionObserver' in window)) {
        els.forEach(function(el) {
            el.classList.add('is-visible');
        });
        return;
    }
    var io = new IntersectionObserver(function(entries) {
        entries.forEach(function(e) {
            if (e.isIntersecting) {
                e.target.classList.add('is-visible');
                io.unobserve(e.target);
            }
        });
    }, {
        threshold: 0.12
    });
    els.forEach(function(el) {
        io.observe(el);
    });
})();
</script>

<?php get_footer(); ?>