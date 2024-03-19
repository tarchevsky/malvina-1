<?php

/*
   Template Name: Post
   Template post type: post
*/

get_header(); ?>

<?php while ( have_posts() ) : the_post(); ?>

    <div class="hero cont md:min-h-[50vh] md:mt-[100px] fade-in">
        <div class="relative hero-content flex-col lg:flex-row">
            <?php $thumbnail_id = get_post_thumbnail_id( $post->ID ); ?>
            <?php
            if ($thumbnail_id) {
                $thumbnail_url = wp_get_attachment_url($thumbnail_id);
                ?>
                <img src="<?php echo $thumbnail_url; ?>" alt="<?php the_title(); ?>" class="w-full brightness-50 h-[50vh] object-cover object-bottom lg:w-1/2 h-[600px] object-cover rounded-3xl shadow-2xl">
                <?php
            } else {
                ?>
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/jason-wang-5MG8cQbw-T8-unsplash.jpg" alt="<?php the_title(); ?>" class="w-full brightness-50 h-[50vh] object-cover object-bottom lg:w-1/2 h-[600px] object-cover rounded-3xl shadow-2xl">
                <?php
            }
            ?>
            <div class="absolute lg:relative lg:ml-[-100px] z-10">
                <h1 class="md:text-8xl font-bold"><?php the_title(); ?></h1>
                <button class="btn btn-primary btn-lg mt-10" onclick="my_modal_1.showModal()">Не знаете?</button>
                <dialog id="my_modal_1" class="modal">
                    <div class="modal-box">
                        <h3 class="font-bold text-lg">Начать развитие</h3>
                        <div>
                            <p>Здесь будет форма обратной связи</p>
                            <!--                <input type="text" placeholder="Type here" class="input input-bordered w-full max-w-xs" />-->
                            <!--                <textarea class="textarea textarea-ghost" placeholder="Bio"></textarea>-->
                        </div>
                        <div class="modal-action">
                            <form method="dialog">
                                <!-- if there is a button in form, it will close the modal -->
                                <button class="btn">Close</button>
                            </form>
                        </div>
                    </div>
                </dialog>
            </div>
        </div>
    </div>

    <div class="cont border-[1px] border-l-0 border-r-0 mt-20 fade-in">
        <?php the_breadcrumbs(); ?>
    </div>


    <div class="cont m-auto fade-in">

<!--        Вывод меток статьи-->

        <?php
        if ( has_tag() ) {
            echo '<div class="post-tags pt-20">';
            echo '<span>Теги: </span>';
            $tags = get_the_tags();
            foreach ($tags as $tag) {
                $tag_color = get_term_meta($tag->term_id, 'tag-color', true);
                $style = $tag_color ? 'style="border-bottom-color: ' . esc_attr($tag_color) . ';"' : '';
                echo '<span class="tag-item" ' . $style . '>' . esc_html($tag->name) . '</span>';
            }
            echo '</div>';
        }
        ?>

<!--        Конец вывода меток-->

        <div class="article-content-date"><?php the_date(); ?></div>
        <?php the_content(); ?>
    </div>
    <div class="cont m-auto fade-in mt-10">

        <div class="post-pagination flex justify-between">
            <?php
            // Вставьте этот код в нужном месте шаблона, где вы хотите выводить навигацию
            if (function_exists('circular_post_navigation')) {
                $nav_data = circular_post_navigation();

                if (!empty($nav_data['prev_post'])) {
                    echo '<a class="btn btn-neutral btn-sm md:btn-md gap-2 lg:gap-3" href="' . get_permalink($nav_data['prev_post']->ID) . '">Предыдущая</a>';
                }

                if (!empty($nav_data['next_post'])) {
                    echo '<a class="btn btn-sm md:btn-md gap-2 lg:gap-3" href="' . get_permalink($nav_data['next_post']->ID) . '">Следующая</a>';
                }
            }
            ?>
        </div>
    </div>
<?php endwhile; ?>

        <?php
        $related_posts = get_field('related');

        // Убедитесь, что $related_posts является массивом перед его использованием
        if ($related_posts && is_array($related_posts)) : ?>

            <aside class="cont m-auto flex flex-col mt-[50px] mb-[50px] fade-in">
            <h4>Рекомендую статьи</h4>

            <?php foreach ($related_posts as $post) :
                // Установка глобальной переменной $post для каждой связанной записи
                setup_postdata($post);
                ?>

                    <a href="<?php the_permalink(); ?>" class="underline">
                        <?php the_title(); ?>
                    </a>


            <?php endforeach; ?>
            </aside>
            <?php wp_reset_postdata(); // Сброс глобальной переменной $post ?>

        <?php endif; ?>



<?php get_footer(); ?>