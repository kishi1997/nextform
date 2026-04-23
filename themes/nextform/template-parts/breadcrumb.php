<?php
/**
 * パンくずリスト 共通パーツ
 *
 * 使い方:
 *   get_template_part( 'template-parts/breadcrumb', null, [
 *       'items' => [
 *           [ 'label' => 'TOP',  'url' => home_url( '/' ) ],
 *           [ 'label' => 'ページ名', 'url' => home_url( '/slug/' ) ], // 最後の要素が現在ページ
 *       ],
 *   ] );
 */

$items = $args['items'] ?? [];
$count = count( $items );
if ( empty( $items ) ) {
    return;
}
?>
<div class="nf-breadcrumb-wrap">
    <nav class="nf-breadcrumb" aria-label="パンくずリスト" vocab="http://schema.org/" typeof="BreadcrumbList">
        <?php foreach ( $items as $index => $item ) :
            $is_last = ( $index === $count - 1 );
            $position = $index + 1;
        ?>
        <span class="nf-breadcrumb__item<?php echo $is_last ? ' nf-breadcrumb__item--current' : ''; ?>"
              property="itemListElement" typeof="ListItem">
            <?php if ( ! $is_last ) : ?>
                <a property="item" typeof="WebPage"
                   href="<?php echo esc_url( $item['url'] ); ?>"
                   class="nf-breadcrumb__link">
                    <span property="name"><?php echo esc_html( $item['label'] ); ?></span>
                </a>
                <meta property="position" content="<?php echo esc_attr( $position ); ?>">
            <?php else : ?>
                <span property="name" class="nf-breadcrumb__current"><?php echo esc_html( $item['label'] ); ?></span>
                <?php if ( ! empty( $item['url'] ) ) : ?>
                    <meta property="url" content="<?php echo esc_url( $item['url'] ); ?>">
                <?php endif; ?>
                <meta property="position" content="<?php echo esc_attr( $position ); ?>">
            <?php endif; ?>
        </span>
        <?php if ( ! $is_last ) : ?>
            <span class="nf-breadcrumb__sep" aria-hidden="true"></span>
        <?php endif; ?>
        <?php endforeach; ?>
    </nav>
</div>
