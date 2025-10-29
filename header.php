<!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <?php get_template_part( 'parts/head' ); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<header class="site-header">
    <div class="container">
        <?php if ( is_front_page() && is_home() ) : ?>
            <h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php bloginfo( 'name' ); ?></a></h1>
        <?php else : ?>
            <p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php bloginfo( 'name' ); ?></a></p>
        <?php endif; ?>

        <nav class="site-nav">
            <?php
            wp_nav_menu( [
                'theme_location' => 'primary',
                'container'      => false,
                'menu_class'     => 'nav-list',
                'depth'          => 1,
            ] );
            ?>
        </nav>
    </div>
</header>
<main id="main">