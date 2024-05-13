<?php get_header(); ?>

<div class="hero min-h-screen bg-base-200">
    <div class="hero-content text-center">
        <div class="max-w-md">
            <h1 class="text-5xl font-bold"><?php the_title(); ?></h1>
            <p>Здесь содержатся полезные статьи про психологию</p>
        </div>
    </div>
</div>
<div class="cont mt-80">
    <?php the_content(); ?>
</div>
<?php
$paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
$args = array(
    'post_type' => 'post',
    'category_name' => 'blog',
    'posts_per_page' => 10,
    'paged' => $paged
);

$query = new WP_Query( $args );

if ( $query->have_posts() ) {
    while ( $query->have_posts() ) {
        $query->the_post();
        ?>
        <h2><?php the_title(); ?></h2>
        <?php if ( has_post_thumbnail() ) {
            the_post_thumbnail();
        } ?>
        <p><?php the_excerpt(); ?></p>
        <?php
    }
    ?>
    <div class="pagination">
        <?php
        echo paginate_links( array(
            'total' => $query->max_num_pages
        ) );
        ?>
    </div>
    <?php
} else {
    // Если нет постов
    echo 'Постов не найдено.';
}

wp_reset_postdata();
?>

<?php get_footer(); ?>
