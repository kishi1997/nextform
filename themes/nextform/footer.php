<!-- footer -->

<footer class="footer-d">
    <div class="footer-d-top">
        <div class="container3 footer-d-inner">
            <div class="footer-d-content">
                <div class="footer-d-logo"><img
                        src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/logo_footer.png" alt="nextform">
                </div>
                <div class="footer-d-address">〒179-0083　東京都練馬区平和台3丁目30番19号</div>
            </div>
            <div class="footer-d-menu-wrapper">
                <ul class="footer-d-menu">
                    <li class="footer-d-item"><a class="footer-d-link"
                            href="<?php echo esc_url( home_url( '/about' ) ); ?>">nextformについて</a>
                    </li>
                    <li class="footer-d-item"><a class="footer-d-link"
                            href="<?php echo esc_url( home_url( '/group-home' ) ); ?>">グループホームについて</a></li>
                </ul>
                <ul class="footer-d-menu footer-d-menu-r">
                    <li class="footer-d-item"><a class="footer-d-link"
                            href="<?php echo esc_url( home_url( '/recruit' ) ); ?>">採用情報</a></li>
                    <li class="footer-d-item"><a class="footer-d-link"
                            href="<?php echo esc_url( home_url( '/contact' ) ); ?>">お問い合わせ</a></li>
                    <li class="footer-d-item"><a class="footer-d-link"
                            href="<?php echo esc_url( home_url( '/privacy-policy' ) ); ?>">プライバシーポリシー</a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="footer-d-bottom">
        <p class="footer-d-copyright">©︎2026 nextform Co., Ltd.</p>
    </div>
</footer>
<?php wp_footer(); ?>
</body>

</html>