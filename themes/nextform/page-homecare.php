<?php get_header(); ?>

<main class="homecare-neo">
    <section class="homecare-neo-hero">
        <span class="homecare-neo-blob homecare-neo-blob-a" aria-hidden="true"></span>
        <span class="homecare-neo-blob homecare-neo-blob-b" aria-hidden="true"></span>
        <span class="homecare-neo-curve" aria-hidden="true"></span>

        <div class="homecare-neo-shell">
            <div class="homecare-neo-hero-grid">
                <div class="homecare-neo-hero-inner">
                    <p class="homecare-neo-eyebrow">HOME CARE</p>
                    <h1 class="homecare-neo-hero-title">
                        住み慣れた場所で、<br>
                        <span>安心の療養</span>を続ける。
                    </h1>
                    <p class="homecare-neo-hero-text">
                        nextformの訪問看護は、看護師・理学療法士・作業療法士が主治医の指示のもとご自宅へ訪問し、医療的ケアから生活面の不安まで一緒に整えていきます。退院後の在宅移行から精神面のサポートまで、ひとりひとりのペースに寄り添います。
                    </p>
                </div>

                <div class="homecare-neo-hero-visual">
                    <span class="homecare-neo-hero-visual-wash" aria-hidden="true"></span>
                    <div class="homecare-neo-hero-visual-frame">
                        <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/homecare/hero.png"
                            alt="ご自宅で利用者と相談する訪問看護スタッフ">
                    </div>
                    <span class="homecare-neo-hero-visual-dot homecare-neo-hero-visual-dot-a" aria-hidden="true"></span>
                </div>
            </div>
        </div>
    </section>

    <?php get_template_part( 'template-parts/breadcrumb', null, [
        'items' => [
            [ 'label' => 'TOP',         'url' => home_url( '/' ) ],
            [ 'label' => '訪問看護について', 'url' => home_url( '/homecare/' ) ],
        ],
    ] ); ?>

    <section class="homecare-neo-intro">
        <div class="homecare-neo-shell down-to-top">
            <div class="homecare-neo-intro-grid">
                <div class="homecare-neo-intro-main">
                    <p class="homecare-neo-section-label">ABOUT</p>
                    <h2 class="homecare-neo-section-title">訪問看護とは</h2>
                    <p class="homecare-neo-section-text">
                        主治医が「訪問看護の利用が適切」と判断した方を対象に、看護師・理学療法士・作業療法士などの専門スタッフがご自宅へ伺い、療養上のケアや診療の補助を行うサービスです。
                    </p>
                    <p class="homecare-neo-section-text">
                        要介護・要支援認定を受けた方、特定疾病により継続した医療的支援が必要な方が利用対象です。退院後の在宅移行支援、医療的ケア、ご自宅でのリハビリ継続など、さまざまなニーズに対応します。
                    </p>
                </div>

                <div class="homecare-neo-intro-side">
                    <div class="homecare-neo-photo-card">
                        <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/homecare/intro_young.png"
                            alt="訪問看護の様子">
                    </div>
                </div>
            </div>

            <div class="homecare-neo-intro-cards">
                <article class="homecare-neo-intro-card">
                    <span class="homecare-neo-intro-card-label">Eligibility</span>
                    <h3 class="homecare-neo-intro-card-title">対象となる方</h3>
                    <p class="homecare-neo-intro-card-text">
                        主治医が「訪問看護サービスの利用が必要」と認めた方が対象です。要介護・要支援認定を受けた方、特定疾病が原因で介護を必要とする方（40〜65歳未満）、精神疾患をお持ちの方なども含まれます。まずはお気軽にご相談ください。
                    </p>
                </article>
                <article class="homecare-neo-intro-card">
                    <span class="homecare-neo-intro-card-label">Use Case</span>
                    <h3 class="homecare-neo-intro-card-title">こんな時にご活用ください</h3>
                    <ul class="homecare-neo-intro-list">
                        <li>退院後の医療管理が必要な方</li>
                        <li>点滴や栄養管理が必要な方</li>
                        <li>自宅での療養生活に不安を感じている方</li>
                        <li>リハビリを続けたい方</li>
                        <li>精神的なサポートが必要な方</li>
                    </ul>
                </article>
            </div>
        </div>
    </section>

    <section class="homecare-neo-services">
        <div class="homecare-neo-shell down-to-top">
            <div class="homecare-neo-services-head">
                <p class="homecare-neo-section-label">SERVICES</p>
                <h2 class="homecare-neo-section-title">訪問看護サービスの特徴</h2>
                <p class="homecare-neo-section-text">
                    nextformの訪問看護は、住み慣れたご自宅で安心して療養生活を続けられるよう、看護師・理学療法士・作業療法士が主治医の指示のもと訪問いたします。
                </p>
            </div>

            <div class="homecare-neo-services-grid">
                <article class="homecare-neo-service">
                    <div class="homecare-neo-service-media">
                        <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/homecare/homecare1_young.png"
                            alt="健康状態の確認・観察">
                    </div>
                    <span class="homecare-neo-service-num">01</span>
                    <h3 class="homecare-neo-service-title">健康状態の確認・観察</h3>
                </article>
                <article class="homecare-neo-service">
                    <div class="homecare-neo-service-media">
                        <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/homecare/homecare2_young.png"
                            alt="疾患・障がいに対する看護">
                    </div>
                    <span class="homecare-neo-service-num">02</span>
                    <h3 class="homecare-neo-service-title">疾患・障がいに対する看護</h3>
                </article>
                <article class="homecare-neo-service">
                    <div class="homecare-neo-service-media">
                        <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/homecare/homecare3.png"
                            alt="ご家族への相談対応と技術指導">
                    </div>
                    <span class="homecare-neo-service-num">03</span>
                    <h3 class="homecare-neo-service-title">ご家族への相談対応と技術指導</h3>
                </article>
                <article class="homecare-neo-service">
                    <div class="homecare-neo-service-media">
                        <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/homecare/homecare4_young.png"
                            alt="療養環境の整備と生活援助">
                    </div>
                    <span class="homecare-neo-service-num">04</span>
                    <h3 class="homecare-neo-service-title">療養環境の整備と生活援助</h3>
                </article>
                <article class="homecare-neo-service">
                    <div class="homecare-neo-service-media">
                        <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/homecare/homecare5_young.png"
                            alt="ご自宅でのリハビリテーション">
                    </div>
                    <span class="homecare-neo-service-num">05</span>
                    <h3 class="homecare-neo-service-title">ご自宅でのリハビリテーション</h3>
                </article>
                <article class="homecare-neo-service">
                    <div class="homecare-neo-service-media">
                        <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/homecare/homecare6.png"
                            alt="こころの健康への支援">
                    </div>
                    <span class="homecare-neo-service-num">06</span>
                    <h3 class="homecare-neo-service-title">こころの健康への支援</h3>
                </article>
            </div>
        </div>
    </section>

    <section class="homecare-neo-flow">
        <div class="homecare-neo-shell down-to-top">
            <div class="homecare-neo-flow-head">
                <p class="homecare-neo-section-label">FLOW</p>
                <h2 class="homecare-neo-section-title">ご利用の流れ</h2>
                <p class="homecare-neo-section-text">
                    ご相談から契約・サービス開始まで、担当ケアマネジャーと連携しながら丁寧にお手続きを進めます。
                </p>
            </div>

            <ol class="homecare-neo-flow-list">
                <li class="homecare-neo-flow-item">
                    <div class="homecare-neo-flow-badge">
                        <span class="homecare-neo-flow-badge-label">STEP</span>
                        <span class="homecare-neo-flow-badge-num">01</span>
                    </div>
                    <div class="homecare-neo-flow-body">
                        <h3 class="homecare-neo-flow-title">ケアマネジャーへのご相談</h3>
                        <p class="homecare-neo-flow-sub">ご利用者様 / ケアマネジャー</p>
                        <p class="homecare-neo-flow-desc">まずは、担当のケアマネジャーに現状お困りのことをお伝えください。訪問看護の利用が適切かどうかを一緒に検討します。</p>
                    </div>
                </li>
                <li class="homecare-neo-flow-item">
                    <div class="homecare-neo-flow-badge">
                        <span class="homecare-neo-flow-badge-label">STEP</span>
                        <span class="homecare-neo-flow-badge-num">02</span>
                    </div>
                    <div class="homecare-neo-flow-body">
                        <h3 class="homecare-neo-flow-title">サービス提供可否の確認</h3>
                        <p class="homecare-neo-flow-sub">ケアマネジャー / サービス提供事業者</p>
                        <p class="homecare-neo-flow-desc">ケアマネジャーからnextformへご連絡いただき、ご利用者様の住所や介護状況などをもとにサービス提供が可能かを確認します。</p>
                    </div>
                </li>
                <li class="homecare-neo-flow-item">
                    <div class="homecare-neo-flow-badge">
                        <span class="homecare-neo-flow-badge-label">STEP</span>
                        <span class="homecare-neo-flow-badge-num">03</span>
                    </div>
                    <div class="homecare-neo-flow-body">
                        <h3 class="homecare-neo-flow-title">主治医への看護指示書依頼</h3>
                        <p class="homecare-neo-flow-sub">サービス提供事業者 / 主治医</p>
                        <p class="homecare-neo-flow-desc">ご利用者様の主治医へ訪問看護指示書の発行を依頼し、医師から発行された指示書をnextformで受領します。</p>
                    </div>
                </li>
                <li class="homecare-neo-flow-item">
                    <div class="homecare-neo-flow-badge">
                        <span class="homecare-neo-flow-badge-label">STEP</span>
                        <span class="homecare-neo-flow-badge-num">04</span>
                    </div>
                    <div class="homecare-neo-flow-body">
                        <h3 class="homecare-neo-flow-title">ケアプランの作成</h3>
                        <p class="homecare-neo-flow-sub">ご利用者様 / ご家族 / ケアマネジャー / 事業者</p>
                        <p class="homecare-neo-flow-desc">ご意向や状態、介護保険給付の限度額を考慮しながら、利用頻度やサービス内容など最適なケアプランを作成します。</p>
                    </div>
                </li>
                <li class="homecare-neo-flow-item">
                    <div class="homecare-neo-flow-badge">
                        <span class="homecare-neo-flow-badge-label">STEP</span>
                        <span class="homecare-neo-flow-badge-num">05</span>
                    </div>
                    <div class="homecare-neo-flow-body">
                        <h3 class="homecare-neo-flow-title">契約・サービス利用開始</h3>
                        <p class="homecare-neo-flow-sub">ご利用者様 / サービス提供事業者</p>
                        <p class="homecare-neo-flow-desc">ケアプラン決定後、サービス提供事業者との契約を経て利用開始となります。開始日はケアマネジャーと担当者が話し合い決定します。</p>
                    </div>
                </li>
            </ol>
        </div>
    </section>

    <section class="cta-c">
        <div class="down-to-top">
            <div class="cta-c-title">
                <h2 class="top-title top-title-contact">お問い合わせ</h2>
            </div>
            <div class="cta-c-container">
                <div class="cta-c-text">
                    <p>訪問看護についてのご相談など、<br>こちらからお気軽にご連絡ください。</p>
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
                    <span class="cta-c-content-border">zoomによるオンライン相談も実施中！</span><br>ご希望の方はお問い合わせフォームよりご連絡ください。
                </div>
            </div>
        </div>
    </section>
</main>

<?php get_footer(); ?>
