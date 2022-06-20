<?php get_header(); ?>
<?php if ( have_posts() ) : ?>
    <?php while ( have_posts() ) : the_post(); ?>
         <a href="<?php the_permalink(); ?>"><?php the_time('Y/m/d'); ?><?php the_title(); ?><?php print mb_strimwidth(strip_tags(get_the_content()), 0, 100, '', 'UTF-8'); ?></a>
    <?php endwhile; ?>
    <?php
    set_query_var( 'paging_query', $wp_query );
    get_template_part('paging');
    ?>
<?php endif; ?>
<?php
get_footer();