<?php get_header(); ?>

<!-- ========== HERO ========== -->
<section class="ab-hero ab-hero--group-home">
    <div class="ab-hero-inner">
        <p class="ab-hero-en">GROUP HOME</p>
        <h2 class="ab-hero-title">グループホームについて</h2>
    </div>
</section>

<main id="page-main" class="page-main">

    <!-- breadcrumb -->
    <?php get_template_part( 'template-parts/breadcrumb', null, [
        'items' => [
            [ 'label' => 'TOP',           'url' => home_url( '/' ) ],
            [ 'label' => 'グループホームについて', 'url' => home_url( '/group-home/' ) ],
        ],
    ] ); ?>

    <div class="page-body">

        <div class="catch low-container">
            <h4 class="catch-title catch-title-concept">その人らしく、<br class="catch-pc">住み続けられる場所</h4>
            <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/group-home/concept.png"
                alt="nextform グループホームについて" class="catch-img">
        </div>

        <div class="feature">
            <h3 class="title-low title-low-feature">ネクストフォームの特徴</h3>
            <p class="feature-description">ネクストフォームは、知的障害・精神障害の方が「自分らしく」住み続けられる<br class="feature-br">障害者グループホームです。
            </p>
            <div class="feature-wrap">
                <div class="feature-item">
                    <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/group-home/feature_01.png"
                        alt="ネクストフォームの特徴 アットホームな環境" class="feature-img">
                    <h3 class="feature-title feature-title01">アットホームな環境</h3>
                    <p class="feature-text">
                        利用者さんの生活スタイルや趣味・趣向を尊重したサービスを提供します。共同生活のため門限や館内禁酒・禁煙等のルールはありますが、ネクストフォームを利用したから出来るようになったということが増えるよう職員が寄り添い、支援します。
                    </p>
                </div>
                <div class="feature-item">
                    <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/group-home/feature_02.png"
                        alt="ネクストフォームの特徴 入居者同士の交流" class="feature-img">
                    <h3 class="feature-title feature-title02">入居者同士の交流</h3>
                    <p class="feature-text">
                        週末の食事会や、希望する利用者さん参加型の調理イベントなどを開催します。その他、利用者さんの特技や趣味、興味のあることを共有し、一緒に楽しめる機会を提供します。</p>
                </div>
            </div>
            <div class="feature-wrap">
                <div class="feature-item">
                    <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/group-home/feature_03.png"
                        alt="ネクストフォームの特徴 自立のための生活づくり" class="feature-img">
                    <h3 class="feature-title feature-title03">自立のための生活づくり</h3>
                    <p class="feature-text">
                        近い将来、未来の自分はどうなりたい（したい）かを傾聴し、それに向けた支援を実施します。例えば、「一人暮らしをしたい」の希望に対し、「食事の用意が出来るように」練習したり、「働くことが出来るように」出かけたり、実際に仕事に行くことが出来るように支援を行います。
                    </p>
                </div>
                <div class="feature-item">
                    <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/group-home/feature_04.png"
                        alt="ネクストフォームの特徴 相談できる環境" class="feature-img">
                    <h3 class="feature-title feature-title04">相談できる環境</h3>
                    <p class="feature-text">
                        ネクストフォームには福祉の専門資格を有する相談担当者がいます。その職員を中心として、利用者さんの障害福祉の相談、生活の相談、仕事の相談等の対応をするとともに、家族の方や地域の方、福祉サービス従事の方の相談にも広く対応します。
                    </p>
                </div>
            </div>
        </div>

        <div class="service">
            <h3 class="title-low title-low-service">ネクストフォームのサービス</h3>
            <picture>
                <source srcset="<?php echo esc_url( get_template_directory_uri() ); ?>/img/group-home/service_sp.png"
                    media="(max-width: 770px)" class="service-img-sp" alt="ネクストフォームのサービス">
                <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/group-home/service.png"
                    alt="ネクストフォームのサービス" class="service-img">
            </picture>
        </div>
        <div class="list">
            <h3 class="title-low title-low-list">施設一覧</h3>

            <div class="list-wrap">
                <div class="list-item">
                    <div class="list-head">
                        <p class="list-title">小竹町ユニット</p>
                        <div class="list-category">女性専用</div>
                    </div>
                    <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/group-home/list.jpg" alt="施設一覧"
                        class="list-img">
                </div>
                <div class="list-contents">
                    <div class="list-access">
                        <p class="list-text">住所：東京都練馬区小竹町1丁目45番2号</p>
                        <a href="https://www.google.com/maps/place/%E3%81%82%E3%81%99%E3%81%BB%E3%83%BC%E3%82%80%E7%B7%B4%E9%A6%AC%E5%B0%8F%E7%AB%B9%E7%94%BA/@35.7397756,139.6754453,17z/data=!3m1!4b1!4m5!3m4!1s0x6018ed0bf7f554cf:0x194cef018c5bfa80!8m2!3d35.7397756!4d139.6754453?hl=ja"
                            target="_blank" class="list-map">Google map</a>
                    </div>
                    <p class="list-text list-space">入居定員数：7名</p>
                    <p class="list-text">利用料金</p>
                    <table class="list-table">
                        <tbody class="list-tbody">
                            <tr class="list-tr">
                                <th class="list-th">家賃</th>
                                <td class="list-td">53,700円/月</td>
                            </tr>
                            <tr class="list-tr">
                                <th class="list-th">食費</th>
                                <td class="list-td">朝食 350円・夕食 500円（1食あたり）</td>
                            </tr>
                            <tr class="list-tr">
                                <th class="list-th">水道光熱費</th>
                                <td class="list-td">15,000円/月</td>
                            </tr>
                            <tr class="list-tr">
                                <th class="list-th">日用品・通信費</th>
                                <td class="list-td">3,500円/月</td>
                            </tr>
                            <tr class="list-tr">
                                <th class="list-th">合計</th>
                                <td class="list-td">90,000円〜/月</td>
                            </tr>
                        </tbody>
                    </table>
                    <p class="list-note">※都及び区の特別給付等による負担減免が受けられます。</p>
                    <p class="list-note">※生活保護費受給者についてもご利用いただけます。</p>
                </div>
            </div>


            <div class="list-wrap list-wrap-02">
                <div class="list-item">
                    <div class="list-head">
                        <p class="list-title">中野かみさぎユニット</p>
                        <div class="list-category list-category-orange">男性専用</div>
                    </div>
                    <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/group-home/list_02.png"
                        alt="施設一覧" class="list-img">
                </div>
                <div class="list-contents">
                    <div class="list-access">
                        <p class="list-text">住所：東京都中野区上鷺宮4丁目6-3</p>
                        <a href="https://goo.gl/maps/3VeEHLbqpCwbAQrS8" target="_blank" class="list-map">Google
                            map</a>
                    </div>
                    <p class="list-text list-space">入居定員数：5名</p>
                    <p class="list-text">利用料金</p>
                    <table class="list-table">
                        <tbody class="list-tbody">
                            <tr class="list-tr">
                                <th class="list-th">家賃</th>
                                <td class="list-td">53,700円/月</td>
                            </tr>
                            <tr class="list-tr">
                                <th class="list-th">食費</th>
                                <td class="list-td">朝食 350円・夕食 500円（1食あたり）</td>
                            </tr>
                            <tr class="list-tr">
                                <th class="list-th">水道光熱費</th>
                                <td class="list-td">15,000円/月</td>
                            </tr>
                            <tr class="list-tr">
                                <th class="list-th">日用品・通信費</th>
                                <td class="list-td">3,500円/月</td>
                            </tr>
                            <tr class="list-tr">
                                <th class="list-th">合計</th>
                                <td class="list-td">90,000円〜/月</td>
                            </tr>
                        </tbody>
                    </table>
                    <p class="list-note">※都及び区の特別給付等による負担減免が受けられます。</p>
                    <p class="list-note">※生活保護費受給者についてもご利用いただけます。</p>
                </div>
            </div>

            <div class="list-wrap list-wrap-02">
                <div class="list-item">
                    <div class="list-head">
                        <p class="list-title">練馬平和台ユニット</p>
                        <div class="list-category list-category-orange">混合</div>
                    </div>
                    <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/group-home/efeel.jpg"
                        alt="施設一覧" class="list-img">
                </div>
                <div class="list-contents">
                    <div class="list-access">
                        <p class="list-text">住所：東京都練馬区平和台1-13-10<br>
                            東武東上線 / 上板橋駅 徒歩15分<br>
                            東京メトロ有楽町線 / 氷川台駅 徒歩17分<br>
                            東京メトロ有楽町線 / 平和台駅 徒歩19分<br>
                            東武東上線 / 東武練馬駅 徒歩19分
                        </p>
                        <a href="https://maps.app.goo.gl/x4BN4tYxFXCNfWhu9" target="_blank" class="list-map">Google
                            map</a>
                    </div>
                    <p class="list-text list-space">入居定員数：5居室</p>
                    <p class="list-text">利用料金</p>
                    <table class="list-table">
                        <tbody class="list-tbody">
                            <tr class="list-tr">
                                <th class="list-th">家賃</th>
                                <td class="list-td">53,700円/月</td>
                            </tr>
                            <tr class="list-tr">
                                <th class="list-th">食費</th>
                                <td class="list-td">朝食 350円・夕食 500円（1食あたり）</td>
                            </tr>
                            <tr class="list-tr">
                                <th class="list-th">水道光熱費</th>
                                <td class="list-td">個人使用量/実費</td>
                            </tr>
                            <tr class="list-tr">
                                <th class="list-th">日用品・通信費</th>
                                <td class="list-td">3,000円/月（共有ルーム費代含む）</td>
                            </tr>
                            <tr class="list-tr">
                                <th class="list-th">合計</th>
                                <td class="list-td">80,000円〜/月</td>
                            </tr>
                        </tbody>
                    </table>
                    <p class="list-note">※都及び区の特別給付等による負担免除が受けられます。</p>
                    <p class="list-note">※生活保護費受給者についてもご利用いただけます。</p>
                </div>
            </div>

            <div class="list-wrap list-wrap-02">
                <div class="list-item">
                    <div class="list-head">
                        <p class="list-title">高田馬場ユニット</p>
                        <div class="list-category list-category-orange">女性専用</div>
                    </div>
                    <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/group-home/takadanobaba.jpg"
                        alt="施設一覧" class="list-img">
                </div>
                <div class="list-contents">
                    <div class="list-access">
                        <p class="list-text">住所：東京都新宿区下落合2-8-13<br>
                            高田馬場駅 / 徒歩9分
                        </p>
                        <a href="https://maps.app.goo.gl/ZbKRmpYPf2KxLE2Q9" target="_blank" class="list-map">Google
                            map</a>
                    </div>
                    <p class="list-text list-space">入居定員数：10名</p>
                    <p class="list-text">利用料金</p>
                    <table class="list-table">
                        <tbody class="list-tbody">
                            <tr class="list-tr">
                                <th class="list-th">家賃</th>
                                <td class="list-td">53,700円/月</td>
                            </tr>
                            <tr class="list-tr">
                                <th class="list-th">食費</th>
                                <td class="list-td">朝食 350円・夕食 500円（1食あたり）</td>
                            </tr>
                            <tr class="list-tr">
                                <th class="list-th">水道光熱費</th>
                                <td class="list-td">15,000円/月</td>
                            </tr>
                            <tr class="list-tr">
                                <th class="list-th">日用品・通信費</th>
                                <td class="list-td">3,000円/月</td>
                            </tr>
                            <tr class="list-tr">
                                <th class="list-th">合計</th>
                                <td class="list-td">80,000円〜/月</td>
                            </tr>
                        </tbody>
                    </table>
                    <p class="list-note">※都及び区の特別給付等による負担免除が受けられます。</p>
                    <p class="list-note">※生活保護費受給者についてもご利用いただけます。</p>
                </div>
            </div>

            <div class="list-wrap list-wrap-02">
                <div class="list-item">
                    <div class="list-head">
                        <p class="list-title">平和台3丁目ユニット A/B</p>
                        <div class="list-category list-category-orange">男性専用</div>
                    </div>
                    <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/group-home/heiwadai1.png"
                        alt="施設一覧" class="list-img">
                </div>
                <div class="list-contents">
                    <div class="list-access">
                        <p class="list-text">住所<br>
                            ユニットA：東京都練馬区平和台3-30-19-101<br>
                            ユニットB：東京都練馬区平和台3-30-19-102<br>
                            平和台駅 / 徒歩5分<br>

                        </p>
                        <a href="https://maps.app.goo.gl/T9MTcPMe3hQkazcK8" target="_blank" class="list-map">Google
                            map</a>
                    </div>
                    <p class="list-text list-space">入居定員数：A 4居室/ B 4居室</p>
                    <p class="list-text">利用料金</p>
                    <table class="list-table">
                        <tbody class="list-tbody">
                            <tr class="list-tr">
                                <th class="list-th">家賃</th>
                                <td class="list-td">53,700円/月</td>
                            </tr>
                            <tr class="list-tr">
                                <th class="list-th">食費</th>
                                <td class="list-td">朝食 350円・夕食 500円（1食あたり）</td>
                            </tr>
                            <tr class="list-tr">
                                <th class="list-th">水光熱費</th>
                                <td class="list-td">15,000円/月</td>
                            </tr>
                            <tr class="list-tr">
                                <th class="list-th">日用品・通信費</th>
                                <td class="list-td">3,000円/月</td>
                            </tr>
                            <tr class="list-tr">
                                <th class="list-th">合計</th>
                                <td class="list-td">90,000円〜/月</td>
                            </tr>
                        </tbody>
                    </table>
                    <p class="list-note">※都及び区の特別給付等による負担免除が受けられます。</p>
                    <p class="list-note">※生活保護費受給者についてもご利用いただけます。</p>
                </div>
            </div>

            <div class="list-wrap list-wrap-02">
                <div class="list-item">
                    <div class="list-head">
                        <p class="list-title">平和台3丁目ユニット C/D</p>
                        <div class="list-category list-category-orange">女性専用</div>
                    </div>
                    <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/group-home/heiwadai2.png"
                        alt="施設一覧" class="list-img">
                </div>
                <div class="list-contents">
                    <div class="list-access">
                        <p class="list-text">住所<br>
                            ユニットA：東京都練馬区平和台3-30-19-103<br>
                            ユニットB：東京都練馬区平和台3-30-19-104<br>
                            平和台駅 / 徒歩5分<br>

                        </p>
                        <a href="https://maps.app.goo.gl/T9MTcPMe3hQkazcK8" target="_blank" class="list-map">Google
                            map</a>
                    </div>
                    <p class="list-text list-space">入居定員数：C 4居室/ D 4居室</p>
                    <p class="list-text">利用料金</p>
                    <table class="list-table">
                        <tbody class="list-tbody">
                            <tr class="list-tr">
                                <th class="list-th">家賃</th>
                                <td class="list-td">53,700円/月</td>
                            </tr>
                            <tr class="list-tr">
                                <th class="list-th">食費</th>
                                <td class="list-td">朝食 350円・夕食 500円（1食あたり）</td>
                            </tr>
                            <tr class="list-tr">
                                <th class="list-th">水光熱費</th>
                                <td class="list-td">15,000円/月</td>
                            </tr>
                            <tr class="list-tr">
                                <th class="list-th">日用品・通信費</th>
                                <td class="list-td">3,000円/月</td>
                            </tr>
                            <tr class="list-tr">
                                <th class="list-th">合計</th>
                                <td class="list-td">90,000円〜/月</td>
                            </tr>
                        </tbody>
                    </table>
                    <p class="list-note">※都及び区の特別給付等による負担免除が受けられます。</p>
                    <p class="list-note">※生活保護費受給者についてもご利用いただけます。</p>
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
<!-- /.cta-c -->
<?php get_footer(); ?>