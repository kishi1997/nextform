<?php get_header(); ?>

<!-- ========== HERO ========== -->
<section class="ab-hero ab-hero--group-home">
    <div class="ab-hero-inner">
        <p class="ab-hero-en">HOME CARE</p>
        <h2 class="ab-hero-title">訪問看護について</h2>

    </div>
</section>

<main id="page-main" class="page-main">

    <!-- breadcrumb -->
    <?php get_template_part( 'template-parts/breadcrumb', null, [
        'items' => [
            [ 'label' => 'TOP',      'url' => home_url( '/' ) ],
            [ 'label' => '訪問看護について', 'url' => home_url( '/homecare/' ) ],
        ],
    ] ); ?>

    <div class="page-body">
        <!-- 訪問看護とは・対象となる方（統合セクション） -->
        <div class="hc-intro">
            <h3 class="title-low title-low-hcabout">訪問看護とは</h3>
            <div class="hc-intro-body">

                <div class="hc-intro-main">
                    <div class="hc-intro-img">
                        <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/homecare/intro.png"
                            alt="訪問看護とは">
                    </div>
                    <div class="hc-intro-text">
                        <p>主治医が「訪問看護の利用が適切」と判断した方を対象に、看護師・理学療法士・作業療法士などの専門スタッフがご自宅へ伺い、療養上のケアや診療の補助を行うサービスです。</p>
                        <p>要介護・要支援認定を受けた方、または特定疾病により継続した医療的支援が必要な方がご利用いただけます。</p>
                        <p>退院後の在宅移行支援や医療的ケアが必要な方、療養生活でのアドバイスを求めている方、ご自宅でのリハビリを継続したい方など、様々なニーズに対応しております。</p>
                    </div>
                </div>

                <div class="hc-intro-cards">
                    <div class="hc-intro-card">
                        <h4 class="hc-intro-card-title">対象となる方</h4>
                        <p class="hc-intro-card-text">
                            主治医が「訪問看護サービスの利用が必要」と認めた方が対象となります。要介護・要支援認定を受けた方、特定疾病が原因で介護を必要とする方（40歳以上65歳未満）、精神疾患をお持ちの方なども対象となります。まずはお気軽にご相談ください。
                        </p>
                    </div>
                    <div class="hc-intro-card">
                        <h4 class="hc-intro-card-title">こんな時にご活用ください</h4>
                        <ul class="hc-intro-list">
                            <li>退院後の医療管理が必要な方</li>
                            <li>点滴や栄養管理が必要な方</li>
                            <li>自宅での療養生活に不安を感じている方</li>
                            <li>リハビリを続けたい方</li>
                            <li>精神的なサポートが必要な方</li>
                        </ul>
                    </div>
                </div>

            </div>
        </div>
        <!-- サービス内容 -->
        <div class="hc-services">
            <h3 class="title-low title-low-feature">訪問看護サービスの特徴</h3>
            <p class="feature-description">nextformの訪問看護は、住み慣れたご自宅で安心して療養生活を続けられるよう、<br
                    class="feature-br">看護師・理学療法士・作業療法士が主治医の指示のもと訪問いたします。
            </p>
            <div class="hc-services-wrap">
                <div class="hc-services-item">
                    <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/homecare/homecare1.jpg"
                        alt="健康状態の確認・観察" class="hc-services-img">
                    <h3 class="hc-services-title hc-services-title01">健康状態の確認・観察</h3>
                </div>
                <div class="hc-services-item">
                    <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/homecare/homecare2.jpg"
                        alt="疾患・障がいに対する看護" class="hc-services-img">
                    <h3 class="hc-services-title hc-services-title02">疾患・障がいに対する看護</h3>
                </div>
                <div class="hc-services-item">
                    <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/homecare/homecare3.png"
                        alt="ご家族への相談対応と技術指導" class="hc-services-img">
                    <h3 class="hc-services-title hc-services-title03">ご家族への相談対応と技術指導</h3>
                </div>
                <div class="hc-services-item">
                    <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/homecare/homecare4.jpg"
                        alt="療養環境の整備と生活援助" class="hc-services-img">
                    <h3 class="hc-services-title hc-services-title04">療養環境の整備と生活援助</h3>
                </div>
                <div class="hc-services-item">
                    <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/homecare/homecare5.jpg"
                        alt="ご自宅でのリハビリテーション" class="hc-services-img">
                    <h3 class="hc-services-title hc-services-title05">ご自宅でのリハビリテーション</h3>
                </div>
                <div class="hc-services-item">
                    <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/homecare/homecare6.png"
                        alt="こころの健康への支援" class="hc-services-img">
                    <h3 class="hc-services-title hc-services-title06">こころの健康への支援</h3>
                </div>
            </div>
        </div>

        <!-- ご利用の流れ -->
        <div class="hc-flow">
            <h3 class="title-low title-low-flow">ご利用の流れ</h3>
            <div class="hc-flow-list">

                <div class="hc-flow-item">
                    <div class="hc-flow-badge">
                        <span class="hc-flow-badge-label">STEP</span>
                        <span class="hc-flow-badge-num">1</span>
                    </div>
                    <div class="hc-flow-body">
                        <h4 class="hc-flow-title">ケアマネジャーへのご相談</h4>
                        <p class="hc-flow-sub">〈ご利用者様・ケアマネジャー〉</p>
                        <p class="hc-flow-desc">まずは、担当のケアマネジャーに現状お困りのことをお伝えください。訪問看護の利用が適切かどうかを一緒に検討いたします。</p>
                    </div>
                </div>
                <div class="hc-flow-arrow"></div>

                <div class="hc-flow-item">
                    <div class="hc-flow-badge">
                        <span class="hc-flow-badge-label">STEP</span>
                        <span class="hc-flow-badge-num">2</span>
                    </div>
                    <div class="hc-flow-body">
                        <h4 class="hc-flow-title">サービス提供可否の確認</h4>
                        <p class="hc-flow-sub">〈ケアマネジャー・サービス提供事業者〉</p>
                        <p class="hc-flow-desc">ケアマネジャーからnextformへご連絡いただき、ご利用者様の住所や介護状況などをもとにサービス提供が可能かどうかを確認いたします。</p>
                    </div>
                </div>
                <div class="hc-flow-arrow"></div>

                <div class="hc-flow-item">
                    <div class="hc-flow-badge">
                        <span class="hc-flow-badge-label">STEP</span>
                        <span class="hc-flow-badge-num">3</span>
                    </div>
                    <div class="hc-flow-body">
                        <h4 class="hc-flow-title">主治医への看護指示書依頼</h4>
                        <p class="hc-flow-sub">〈サービス提供事業者・主治医〉</p>
                        <p class="hc-flow-desc">ご利用者様の主治医へ訪問看護指示書の発行を依頼いたします。依頼を受けた医師は、nextformへ訪問看護指示書を送付します。</p>
                    </div>
                </div>
                <div class="hc-flow-arrow"></div>

                <div class="hc-flow-item">
                    <div class="hc-flow-badge">
                        <span class="hc-flow-badge-label">STEP</span>
                        <span class="hc-flow-badge-num">4</span>
                    </div>
                    <div class="hc-flow-body">
                        <h4 class="hc-flow-title">ケアプランの作成</h4>
                        <p class="hc-flow-sub">〈ご利用者様・ご家族様・ケアマネジャー・サービス提供事業者〉</p>
                        <p class="hc-flow-desc">ご利用者様の意向や状態、介護保険給付の限度額を考慮しながら、利用頻度やサービス内容など、最適なケアプランを作成いたします。</p>
                    </div>
                </div>
                <div class="hc-flow-arrow"></div>

                <div class="hc-flow-item">
                    <div class="hc-flow-badge">
                        <span class="hc-flow-badge-label">STEP</span>
                        <span class="hc-flow-badge-num">5</span>
                    </div>
                    <div class="hc-flow-body">
                        <h4 class="hc-flow-title">契約・サービス利用開始</h4>
                        <p class="hc-flow-sub">〈ご利用者様・サービス提供事業者〉</p>
                        <p class="hc-flow-desc">ケアプラン決定後、サービス提供事業者との契約を経て利用開始となります。開始日は、担当のケアマネジャーとnextformの担当者が話し合い、決定いたします。</p>
                    </div>
                </div>

            </div>
        </div>

    </div>

</main><!-- /primary -->
<!-- contact -->
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
<!-- /.cta-c -->
<?php get_footer(); ?>