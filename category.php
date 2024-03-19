<?php get_header();

$category = get_queried_object();

?>

<div class="cont">

    <!-- Заголовок категории -->
    <h1>Рубрика: <?php single_cat_title(); ?></h1>

    <!-- Описание категории -->
    <div class="category-description">
        <?php echo category_description(); ?>
    </div>

    <?php

    $args = array(
        'category' => $category->term_id
    );

    $posts = get_posts( $args );

    if( $posts ): ?>

        <ul>
            <?php foreach( $posts as $post ): ?>
                <li>
                    <a href="<?php echo get_permalink( $post->ID ); ?>">
                        <?php echo get_the_title( $post->ID ); ?>
                    </a>
                </li>
            <?php endforeach; ?>
        </ul>

    <?php endif; ?>

</div>



<?php get_footer(); ?>
