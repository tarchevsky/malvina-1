<?php get_header(); ?>

<div class="hero min-h-screen bg-base-200">
    <div class="hero-content text-center">
        <div class="max-w-md">
            <h1 class="text-5xl font-bold"><?php the_title(); ?></h1>
        </div>
    </div>
</div>
<div class="cont mt-80">
    <?php the_content(); ?>
</div>

<?php get_footer(); ?>
