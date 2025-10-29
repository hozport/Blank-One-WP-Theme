<?php get_header(); ?>

<div class="container">
    <h1><?php single_cat_title(); ?></h1>
    <?php if ( have_posts() ) : ?>
        <?php while ( have_posts() ) : the_post(); ?>
            <?php get_template_part( 'template-parts/content', get_post_type() ); ?>
        <?php endwhile; ?>
        <?php the_posts_pagination(); ?>
    <?php endif; ?>
</div>

<?php get_footer(); ?>