<?php get_header(); ?>

<main class="about-neo">
    <section class="about-neo-hero">
        <span class="about-neo-blob about-neo-blob-a" aria-hidden="true"></span>
        <span class="about-neo-blob about-neo-blob-b" aria-hidden="true"></span>
        <span class="about-neo-curve" aria-hidden="true"></span>

        <div class="about-neo-shell">
            <div class="about-neo-hero-grid">
                <div class="about-neo-hero-inner">
                    <p class="about-neo-eyebrow">ABOUT</p>
                    <h1 class="about-neo-hero-title">
                        その人らしさの<br>
                        <span>すぐ隣に立つ</span>会社です。
                    </h1>
                    <p class="about-neo-hero-text">
                        nextformは「明日（next）」を「かたちにする（form）」会社として、地域で暮らす一人ひとりの選択に伴走します。医療と生活支援を横断し、住み慣れた場所での暮らしを継続的に支えます。
                    </p>
                </div>

                <div class="about-neo-hero-visual">
                    <span class="about-neo-hero-visual-wash" aria-hidden="true"></span>
                    <div class="about-neo-hero-visual-frame">
                        <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/about/hero.png"
                            alt="多様な暮らしに寄り添うnextformの支援">
                    </div>
                    <span class="about-neo-hero-visual-dot about-neo-hero-visual-dot-a" aria-hidden="true"></span>
                </div>
            </div>
        </div>
    </section>

    <?php get_template_part( 'template-parts/breadcrumb', null, [
        'items' => [
            [ 'label' => 'TOP',            'url' => home_url( '/' ) ],
            [ 'label' => 'nextformについて', 'url' => home_url( '/about/' ) ],
        ],
    ] ); ?>

    <section class="about-neo-concept">
        <div class="about-neo-shell down-to-top">
            <div class="about-neo-concept-card">
                <div class="about-neo-concept-media">
                    <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/about/about.png"
                        alt="nextformの想い">
                </div>
                <div class="about-neo-concept-copy">
                    <p class="about-neo-section-label">CONCEPT</p>
                    <h2 class="about-neo-section-title">自分らしく、この場所で。<br>未来へつながる福祉のかたち</h2>
                    <p class="about-neo-section-text">
                        住み慣れた地域で「自分の意思で暮らしを選ぶ」ことを支えるために、医療的なケアだけでなく日々の生活感覚や対人面までを含めて伴走します。制度の枠だけに閉じず、その人らしい一歩に寄り添う支援を大切にしています。
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section class="about-neo-message">
        <div class="about-neo-shell down-to-top">
            <article class="about-neo-message-card">
                <div class="about-neo-message-head">
                    <p class="about-neo-section-label">MESSAGE</p>
                    <h2 class="about-neo-section-title">代表あいさつ</h2>
                </div>
                <p class="about-neo-message-quote">
                    自分らしい明日を、一緒につくる。<br>
                    nextformは、あなたの隣に立ち続けます。
                </p>
                <div class="about-neo-message-body">
                    <p>株式会社nextformは、私たちが共に「明日（next）」を「かたちにする（form）」という思いを込めて立ち上げた会社です。</p>
                    <p>障がいのある方々やそのご家族、そして私たちのサービスに関わるすべての人が、自分の意思で未来を選び、一歩ずつ前へ進んでいけるよう、日々の支援を通じてお手伝いしていきます。</p>
                    <p>「その人らしく、住み続けられる福祉の追求」を法人理念に掲げ、障がいという個性を持ちながらも、住み慣れた地域で自分らしく暮らせる環境づくりに取り組んでいます。</p>
                    <p>既存の制度の枠組みにとらわれることなく、利用者の方お一人おひとりのニーズに向き合いながら、訪問看護・通所サービスを通じた地域福祉のさらなる充実を目指してまいります。</p>
                </div>
                <p class="about-neo-message-name"><span class="about-neo-message-role">代表取締役</span>小宮 夏</p>
            </article>
        </div>
    </section>

    <section class="about-neo-company">
        <div class="about-neo-shell down-to-top">
            <div class="about-neo-company-head">
                <p class="about-neo-section-label">COMPANY</p>
                <h2 class="about-neo-section-title">会社概要</h2>
            </div>
            <dl class="about-neo-company-list">
                <div class="about-neo-company-row">
                    <dt>法人名</dt>
                    <dd>株式会社nextform</dd>
                </div>
                <div class="about-neo-company-row">
                    <dt>代表者</dt>
                    <dd>小宮 夏</dd>
                </div>
                <div class="about-neo-company-row">
                    <dt>所在地</dt>
                    <dd>〒179-0083 東京都練馬区平和台3-30-19</dd>
                </div>
                <div class="about-neo-company-row">
                    <dt>電話番号</dt>
                    <dd>047-314-1520</dd>
                </div>
                <div class="about-neo-company-row">
                    <dt>メール</dt>
                    <dd>nekusutoform2025@gmail.com</dd>
                </div>
                <div class="about-neo-company-row">
                    <dt>設立</dt>
                    <dd>2021年5月</dd>
                </div>
                <div class="about-neo-company-row">
                    <dt>事業内容</dt>
                    <dd>訪問看護・通所系障がい福祉サービスの提供</dd>
                </div>
                <div class="about-neo-company-row">
                    <dt>関連企業</dt>
                    <dd>
                        <a href="https://kamesan-houkan.com/" target="_blank" rel="noopener noreferrer"
                            class="about-neo-company-link">かめさん訪問看護リハビリステーション</a>
                    </dd>
                </div>
            </dl>
        </div>
    </section>

    <section class="cta-c">
        <div class="down-to-top">
            <div class="cta-c-title">
                <h2 class="top-title top-title-contact">お問い合わせ</h2>
            </div>
            <div class="cta-c-container">
                <div class="cta-c-text">
                    <p>訪問看護やサービスについてのご相談など、<br>こちらからお気軽にご連絡ください。</p>
                </div>
                <div class="cta-c-btn-wrapper">
                    <a href="tel:047-314-1520" class="cta-c-btn -a">
                        <p class="cta-c-btn-text cta-c-btn-text-tel">047-314-1520</p>
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
</main>

<?php get_footer(); ?>
