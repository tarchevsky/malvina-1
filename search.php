<?php get_header(); ?>

<div class="cont">
    <div class="search-page">
        <h1>Нашлось на сайте</h1>
        <div class="row">
            <div class="production__row">
                <?php
                $args = array(
                    's' => get_search_query(),
                    'category_name' => '',
                    'posts_per_page' => 10
                );
                $query = new WP_Query($args);
                if ($query->have_posts()) :
                    while ($query->have_posts()) : $query->the_post();
                        ?>
                        <a href="<?php echo get_permalink(); ?>"><?php the_title(); ?></a>
                    <?php endwhile;
                else : ?>
                    Постов не найдено.
                <?php endif;
                wp_reset_postdata(); ?>
            </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>
