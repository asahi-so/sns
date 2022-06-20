<?php get_header(); ?>
<?php
$wp_page = 'true';
$post_type_name = get_post_type_object(get_post_type())->label;
$post_type_slug = get_query_var('post_type');
?>

<div class="innerBlock">
    <div class="detailCnt">
        <h2 class="mainTtl"><?php the_title(); ?></h2>
        <?php while (have_posts()) : the_post(); ?>
            <div class="inBox">
                <?php the_content(); ?>
            </div>
        <?php endwhile; ?>
        <div class="backBtn"><a href="/<?= $post_type_slug; ?>/">一覧ページへ戻る</a></div>
    </div>
</div>
<!--/innerBlock -->
<?php
get_footer();
