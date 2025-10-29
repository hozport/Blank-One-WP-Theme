<?php
function blank_breadcrumb() {
    if ( is_front_page() ) { return; }

    $out   = [];
    $out[] = '<a href="' . home_url() . '">' . __( 'Home', 'blank' ) . '</a>';

    if ( is_category() || is_single() ) {
        $cat   = get_the_category()[0] ?? '';
        $out[] = sprintf( '<a href="%s">%s</a>', get_category_link( $cat ), $cat->name );
    }
    if ( is_single() ) {
        $out[] = get_the_title();
    }
    if ( is_page() ) {
        $out[] = get_the_title();
    }

    echo '<nav class="breadcrumb">' . implode( ' / ', $out ) . '</nav>';
}