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

        <div class="catch low-container">
            <h4 class="catch-title catch-title-concept">住み慣れた場所で、<br class="catch-pc">あなたらしく生きる</h4>
            <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/group-home/concept.png"
                alt="nextform 訪問看護について" class="catch-img">
        </div>

        <div class="feature">
            <h3 class="title-low title-low-feature">訪問看護サービスの特徴</h3>
            <p class="feature-description">nextformの訪問看護は、住み慣れたご自宅で安心して療養生活を続けられるよう、<br class="feature-br">看護師・理学療法士・作業療法士が主治医の指示のもと訪問いたします。
            </p>
            <div class="feature-wrap">
                <div class="feature-item">
                    <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/group-home/feature_01.png"
                        alt="訪問看護の特徴 健康状態の観察・管理" class="feature-img">
                    <h3 class="feature-title feature-title01">健康状態の観察・管理</h3>
                    <p class="feature-text">
                        定期的な訪問により、バイタルサインの測定や体調の変化を丁寧に確認します。病状の早期発見・早期対応を行い、安心できる在宅療養をサポートします。
                    </p>
                </div>
                <div class="feature-item">
                    <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/group-home/feature_02.png"
                        alt="訪問看護の特徴 医療処置・療養上のケア" class="feature-img">
                    <h3 class="feature-title feature-title02">医療処置・療養上のケア</h3>
                    <p class="feature-text">
                        点滴・注射・褥瘡処置・カテーテル管理など、医師の指示に基づく医療処置を行います。退院後の在宅移行においても、安全で継続的なケアを提供します。
                    </p>
                </div>
            </div>
            <div class="feature-wrap">
                <div class="feature-item">
                    <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/group-home/feature_03.png"
                        alt="訪問看護の特徴 リハビリテーション" class="feature-img">
                    <h3 class="feature-title feature-title03">リハビリテーション</h3>
                    <p class="feature-text">
                        理学療法士・作業療法士による自宅でのリハビリを提供します。身体機能の回復・維持を図り、日常生活の自立度を高めるための支援を行います。
                    </p>
                </div>
                <div class="feature-item">
                    <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/group-home/feature_04.png"
                        alt="訪問看護の特徴 精神科訪問看護" class="feature-img">
                    <h3 class="feature-title feature-title04">精神科訪問看護</h3>
                    <p class="feature-text">
                        精神疾患をお持ちの方の自宅療養を支援します。服薬管理・生活リズムの安定・家族への相談対応など、精神的なケアと生活全般のサポートを行います。
                    </p>
                </div>
            </div>
            <div class="feature-wrap">
                <div class="feature-item">
                    <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/group-home/feature_01.png"
                        alt="訪問看護の特徴 介護家族への支援" class="feature-img">
                    <h3 class="feature-title feature-title01">介護家族への支援</h3>
                    <p class="feature-text">
                        ご利用者さまだけでなく、介護するご家族の不安や疑問にも丁寧に対応します。介護技術の指導や精神的なサポートを通じて、家族全体での療養生活を支えます。
                    </p>
                </div>
                <div class="feature-item">
                    <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/group-home/feature_02.png"
                        alt="訪問看護の特徴 療養環境・生活支援" class="feature-img">
                    <h3 class="feature-title feature-title02">療養環境・生活支援</h3>
                    <p class="feature-text">
                        住環境の確認や福祉用具の活用提案など、安全に在宅生活を続けられる環境づくりをお手伝いします。日常生活動作の援助も合わせて行います。
                    </p>
                </div>
            </div>
        </div>

        <div class="service">
            <h3 class="title-low title-low-service">対象となる方</h3>
            <div class="low-container">
                <div class="col-o-content">
                    <h4 class="col-o-content-title">訪問看護の対象者</h4>
                    <p class="col-o-content-text">
                        主治医が「訪問看護サービスの利用が必要」と認めた方が対象となります。要介護・要支援認定を受けた方、特定疾病が原因で介護を必要とする方（40歳以上65歳未満）、精神疾患をお持ちの方なども対象となります。まずはお気軽にご相談ください。
                    </p>
                    <h4 class="col-o-content-title" style="margin-top:32px;">こんな時にご活用ください</h4>
                    <p class="col-o-content-text">
                        退院後の医療管理が必要な方・点滴や栄養管理が必要な方・自宅での療養生活に不安を感じている方・リハビリを続けたい方・精神的なサポートが必要な方など、様々なご状況に対応いたします。
                    </p>
                </div>
            </div>
        </div>

        <div class="list">
            <h3 class="title-low title-low-list">ご利用の流れ</h3>

            <div class="low-container">
                <div class="flow-wrap" style="display:flex; flex-direction:column; gap:24px; max-width:700px; margin:0 auto;">
                    <div class="flow-item flow-item01" style="padding:24px; background:#f8f8f8; border-left:4px solid #4CAF50;">
                        <h5 class="flow-title">① ご相談・お問い合わせ</h5>
                        <p class="flow-text">まずはお電話またはお問い合わせフォームよりご連絡ください。担当者が丁寧にご説明いたします。</p>
                    </div>
                    <div class="flow-item flow-item02" style="padding:24px; background:#f8f8f8; border-left:4px solid #4CAF50;">
                        <h5 class="flow-title">② 主治医への訪問看護指示書の依頼</h5>
                        <p class="flow-text">訪問看護の開始には主治医からの「訪問看護指示書」が必要です。手続きのご案内もサポートいたします。</p>
                    </div>
                    <div class="flow-item flow-item03" style="padding:24px; background:#f8f8f8; border-left:4px solid #4CAF50;">
                        <h5 class="flow-title">③ ご契約・サービス計画の作成</h5>
                        <p class="flow-text">ご利用者さまのご状況に合わせたサービス計画を作成し、ご説明のうえご契約いただきます。</p>
                    </div>
                    <div class="flow-item flow-item04" style="padding:24px; background:#f8f8f8; border-left:4px solid #4CAF50;">
                        <h5 class="flow-title">④ 訪問看護の開始</h5>
                        <p class="flow-text">看護師・リハビリスタッフが定期的にご自宅を訪問します。ご希望の曜日・時間帯でスケジュールを調整いたします。</p>
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
