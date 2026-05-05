<?php get_header(); ?>

<main class="recruit-neo">
    <section class="recruit-neo-hero">
        <span class="recruit-neo-blob recruit-neo-blob-a" aria-hidden="true"></span>
        <span class="recruit-neo-blob recruit-neo-blob-b" aria-hidden="true"></span>
        <span class="recruit-neo-curve" aria-hidden="true"></span>

        <div class="recruit-neo-shell">
            <div class="recruit-neo-hero-grid">
                <div class="recruit-neo-hero-inner">
                    <p class="recruit-neo-eyebrow">RECRUIT</p>
                    <h1 class="recruit-neo-hero-title">
                        あなたの<span>「やってみたい」</span>を、<br>
                        一緒にかたちに。
                    </h1>
                    <p class="recruit-neo-hero-text">
                        nextformは「その人らしく、住み慣れた場所で生き続けられる福祉」を理念に、訪問看護・通所サービスを通じて、利用者さんの暮らしに寄り添うチームです。年齢・性別・経験は問いません。人と関わることが好きな方、福祉が未経験の方も、ベテランスタッフがしっかり伴走します。
                    </p>
                </div>

                <div class="recruit-neo-hero-visual">
                    <span class="recruit-neo-hero-visual-wash" aria-hidden="true"></span>
                    <div class="recruit-neo-hero-visual-frame">
                        <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/recruit/recruit-hero-team.png"
                            alt="チームで支える、nextformの仲間">
                    </div>
                    <span class="recruit-neo-hero-visual-dot recruit-neo-hero-visual-dot-a" aria-hidden="true"></span>
                </div>
            </div>
        </div>
    </section>

    <?php get_template_part( 'template-parts/breadcrumb', null, [
        'items' => [
            [ 'label' => 'TOP',   'url' => home_url( '/' ) ],
            [ 'label' => '採用情報', 'url' => home_url( '/recruit/' ) ],
        ],
    ] ); ?>

    <section class="recruit-neo-message">
        <div class="recruit-neo-shell down-to-top">
            <article class="recruit-neo-message-card">
                <div class="recruit-neo-message-head">
                    <p class="recruit-neo-section-label">MESSAGE</p>
                    <h2 class="recruit-neo-section-title">「やってみたい」を、<br>応援するチームです。</h2>
                </div>
                <div class="recruit-neo-message-body">
                    <p>訪問看護・通所サービスを通じて、利用者さんの暮らしに寄り添うお仕事です。nextformでは、「その人らしく、住み慣れた場所で生き続けられる福祉の追求」を理念に、一人ひとりに向き合ったサービスを提供しています。</p>
                    <p>その想いをともに実現してくださる方を募集しています。年齢・性別不問。人と関わることが好きな方、福祉が未経験の方もベテランスタッフがしっかりサポートします。ぜひ一緒に働きましょう。</p>
                </div>
            </article>
        </div>
    </section>

    <section class="recruit-neo-jobs">
        <div class="recruit-neo-shell down-to-top">
            <div class="recruit-neo-jobs-head">
                <p class="recruit-neo-section-label">REQUIREMENTS</p>
                <h2 class="recruit-neo-section-title">募集要項</h2>
            </div>
            <div class="recruit-neo-jobs-body">
                <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                <div class="page-content">
                    <?php the_content(); ?>
                </div>
                <?php endwhile; endif; ?>
            </div>
        </div>
    </section>

    <section class="recruit-neo-flow">
        <div class="recruit-neo-shell down-to-top">
            <div class="recruit-neo-flow-head">
                <p class="recruit-neo-section-label">FLOW</p>
                <h2 class="recruit-neo-section-title">採用の流れ</h2>
                <p class="recruit-neo-section-text">
                    エントリーから内定まで、書類選考は行わず面接のみ。一緒に働けることを、一人ひとり丁寧に見させていただきます。
                </p>
            </div>

            <ol class="recruit-neo-flow-list">
                <li class="recruit-neo-flow-item">
                    <div class="recruit-neo-flow-badge">
                        <span class="recruit-neo-flow-badge-label">STEP</span>
                        <span class="recruit-neo-flow-badge-num">01</span>
                    </div>
                    <div class="recruit-neo-flow-body">
                        <h3 class="recruit-neo-flow-title">エントリー</h3>
                        <p class="recruit-neo-flow-desc">まずはお問い合わせフォームより、ご応募ください。気になる点だけのご質問でも構いません。</p>
                    </div>
                </li>
                <li class="recruit-neo-flow-item">
                    <div class="recruit-neo-flow-badge">
                        <span class="recruit-neo-flow-badge-label">STEP</span>
                        <span class="recruit-neo-flow-badge-num">02</span>
                    </div>
                    <div class="recruit-neo-flow-body">
                        <h3 class="recruit-neo-flow-title">面接</h3>
                        <p class="recruit-neo-flow-desc">人柄を重視しているため、書類選考は行わず面接でお話しさせていただきます。日程はご相談のうえ調整します。</p>
                    </div>
                </li>
                <li class="recruit-neo-flow-item">
                    <div class="recruit-neo-flow-badge">
                        <span class="recruit-neo-flow-badge-label">STEP</span>
                        <span class="recruit-neo-flow-badge-num">03</span>
                    </div>
                    <div class="recruit-neo-flow-body">
                        <h3 class="recruit-neo-flow-title">内定</h3>
                        <p class="recruit-neo-flow-desc">私たちと一緒に、その人らしく住み続けられる福祉をつくっていきましょう。入社後はベテランスタッフが伴走します。</p>
                    </div>
                </li>
            </ol>
        </div>
    </section>

    <section class="recruit-neo-entry">
        <div class="recruit-neo-shell down-to-top">
            <div class="recruit-neo-entry-panel">
                <div class="recruit-neo-entry-copy">
                    <p class="recruit-neo-section-label">JOIN US</p>
                    <h2 class="recruit-neo-section-title">一緒に働きませんか？</h2>
                    <p class="recruit-neo-section-text">
                        ご応募・ご質問はお問い合わせフォームよりお気軽にどうぞ。<br>「話を聞いてみたい」だけでも歓迎します。
                    </p>
                </div>
                <div class="recruit-neo-entry-actions">
                    <a href="<?php echo esc_url( home_url( '/contact' ) ); ?>" class="recruit-neo-entry-btn">
                        <span class="recruit-neo-entry-btn-label">ENTRY</span>
                        <span class="recruit-neo-entry-btn-sub">エントリーフォームへ</span>
                    </a>
                </div>
            </div>
        </div>
    </section>
</main>

<?php get_footer(); ?>
