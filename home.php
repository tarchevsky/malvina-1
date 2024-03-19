<?php

/**
 * The home page template file.
 *
 * This is the template used for displaying the blog posts index,
 * whether it is the front page or a separate blog page.
 */

get_header();
?>

    <div class="hero min-h-[80vh] bg-base-200">
        <div class="hero-content flex-col lg:flex-row">
            <img src="https://randart.ru/art/JD99/wallpapers" class="w-1/2 h-[600px] object-cover rounded-lg shadow-2xl" />
            <div class="lg:ml-[-100px]">
                <h1 class="text-5xl font-bold"><?php echo get_field('first-block_text'); ?></h1>
                <button class="btn btn-primary"><?php echo get_field('first-screen_btn'); ?></button>
            </div>
        </div>
    </div>

    <div class="cont m-auto mt-[50px] mb-[50px]">
        <div class="join join-vertical w-full">
            <div class="collapse collapse-arrow join-item border border-neutral">
                <input type="radio" name="my-accordion-4" />
                <div class="collapse-title text-xl font-medium">
                    Формат встреч
                </div>
                <div class="collapse-content">
                    <p>Я веду только онлайн - формат. Да, думая о сессиях с психологом, мы все представляем себе удобное кресло и специалиста напротив. Но в таком формате есть большое количество преимуществ. Как минимум вы не тратите время на поездку по городу и можете поговорить со мной в удобном для себя месте.</p>
                </div>
            </div>
            <div class="collapse collapse-arrow join-item border border-neutral">
                <input type="radio" name="my-accordion-4" />
                <div class="collapse-title text-xl font-medium">
                    Надо ли что-то читать и как-то готовиться?
                </div>
                <div class="collapse-content">
                    <p>Не надо и не стоит волноваться, на то я и работаю в КПТ: работая над своими вопросами и проблемами, вы получаете достаточно инструментов и приёмов для того, чтобы после сессии у психолога использовать свой новый опыт в реальных ситуациях. Вам не нужно разбираться в том, как работает метод и штудировать книги по психологии. Находясь на приёме, клиент психолога, работающего по методу КПТ, учится. Поэтому цикл сессий у психолога ограничен - вы получаете достаточно знаний и методов работы с собой и разными жизненными ситуациями и начинаете реализовывать их в реальной жизни</p>
                </div>
            </div>
            <div class="collapse collapse-arrow join-item border border-neutral">
                <input type="radio" name="my-accordion-4" />
                <div class="collapse-title text-xl font-medium">
                    Я слышал(а), что психологи дают домашние задания. Это так?
                </div>
                <div class="collapse-content">
                    <p>Да, хорошая практика при работе с психологом - закреплять пройденное на сессии в реальной жизни. Мы будем планировать, как менять стратегию поведения в случаях, которые обсудили на сеансе. Мы будем вести дневник и учиться регистрировать разные состояния. Вы не просто будете говорить о проблемах, вы будете решать их. Поэтому надо быть готовым, что посещение психолога - это такая же работа, как и любая другая</p>
                </div>
            </div>
        </div>
    </div>

    <div class="cont m-auto grid lg:grid-cols-2 xl:grid-cols-3 gap-4 mt-[50px] mb-[50px]">

        <?php

        $args = array(
            'numberposts' => 6
        );
        $last_posts = wp_get_recent_posts( $args );

        foreach( $last_posts as $post ) : ?>
            <a href="<?php echo get_permalink($post["ID"]); ?>" class="card w-full bg-base-100 shadow-xl image-full">
                    <figure><img src="https://randart.ru/art/JD99/wallpapers" alt="Shoes" /></figure>
                    <div class="card-body">
                        <h2 class="card-title"><?php echo $post["post_title"]; ?></h2>
                        <?php echo mb_substr($post["post_content"], 0, 130) . '...'; ?>
                    </div>
            </a>
        <?php endforeach; ?>


    </div>

<?php get_footer(); ?>