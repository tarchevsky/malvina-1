<?php get_header(); ?>

<div class="hero cont md:min-h-[80vh] fade-in">
    <div class="relative hero-content flex-col lg:flex-row">
        <img src="<?php echo get_template_directory_uri(); ?>/img/malvina-2/IMG_E0275.jpg" class="lg:w-1/2 h-[600px] object-cover rounded-3xl shadow-2xl" />
        <div class="absolute lg:relative lg:ml-[-100px] z-10">
                <h1 class="md:text-6xl font-bold"><?php echo get_field('hero-text'); ?></h1>
            <button class="btn btn-primary btn-lg"><?php echo get_field('hero-btn'); ?></button>
        </div>
    </div>
</div>

<div class="cont flex flex-col md:flex-row mt-60 fade-in" id="about">
    <div class="md:w-1/2 md:flex-shrink-0">
<!--        <h2 class="w-[50%]">Давайте познакомимся</h2>-->
        <div class="flex flex-col my-4 fade-in">
            <div class="avatar">
                <div class="w-40 rounded-full">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/avatar-1.png" />
                </div>
            </div>
            <div class="font-bold">Мальвина</div>
            <div class="text-sm">дипломированный психолог-консультант МГУ, 2014 г.</div>
            <div class="grid grid-flow-col gap-4 mt-4 justify-start">
                <a><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" class="fill-current"><path d="M24 4.557c-.883.392-1.832.656-2.828.775 1.017-.609 1.798-1.574 2.165-2.724-.951.564-2.005.974-3.127 1.195-.897-.957-2.178-1.555-3.594-1.555-3.179 0-5.515 2.966-4.797 6.045-4.091-.205-7.719-2.165-10.148-5.144-1.29 2.213-.669 5.108 1.523 6.574-.806-.026-1.566-.247-2.229-.616-.054 2.281 1.581 4.415 3.949 4.89-.693.188-1.452.232-2.224.084.626 1.956 2.444 3.379 4.6 3.419-2.07 1.623-4.678 2.348-7.29 2.04 2.179 1.397 4.768 2.212 7.548 2.212 9.142 0 14.307-7.721 13.995-14.646.962-.695 1.797-1.562 2.457-2.549z"></path></svg></a>
                <a><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" class="fill-current"><path d="M19.615 3.184c-3.604-.246-11.631-.245-15.23 0-3.897.266-4.356 2.62-4.385 8.816.029 6.185.484 8.549 4.385 8.816 3.6.245 11.626.246 15.23 0 3.897-.266 4.356-2.62 4.385-8.816-.029-6.185-.484-8.549-4.385-8.816zm-10.615 12.816v-8l8 3.993-8 4.007z"></path></svg></a>
                <a><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" class="fill-current"><path d="M9 8h-3v4h3v12h5v-12h3.642l.358-4h-4v-1.667c0-.955.192-1.333 1.115-1.333h2.885v-5h-3.808c-3.596 0-5.192 1.583-5.192 4.615v3.385z"></path></svg></a>
            </div>
        </div>
    </div>
    <p class=flex-auto">Ко мне обращаются за помощью люди, которые не готовы долго и мучительно ковыряться в своем прошлом в поисках инсайтов, с которыми непонятно что потом делать. Практически каждый запрос звучит так: «Я так жить больше не могу! А как по-другому не знаю, не умею!»
        Благодаря совместным усилиям мои клиенты находят в себе силы и мотивацию развивать свой личный бренд на фрилансе, а кто-то напротив умудряется совмещать работу в найме и мягко реализовываться в творчестве, есть те, кто проделал большую работу, чтобы выбраться из депрессии и начать жить ту жизнь, которая подходит именно ему. Я практикую в рамках когнитивно-поведенческого подхода, в данный момент повышаю квалификацию и изучаю РЭПТ, с помощью которого результаты терапии заметны уже с первых встреч.</p>
</div>

<div class="cont flex flex-col flex-col-reverse md:flex-row mt-80 fade-in gap-[40px]">
<!--    <p class="flex-auto md:w-1/2">Мой подход как психолога по КПТ и коуча основан на научно обоснованной когнитивно-поведенческой терапии, которая помогает изменить неадаптивные мысли и поведение для улучшения эмоционального состояния и качества жизни моих клиентов.<br><br>Моя миссия – предоставить каждому клиенту эффективные инструменты КПТ для преодоления психологических трудностей и достижения личностного роста в онлайн-формате через изменение нездоровых (найти альтернативу) моделей мышления и поведения. В моем подходе я уделяю особое внимание выявлению и коррекции негативных автоматических мыслей, которые могут быть причиной тревожных, депрессивных состояний и других психологических проблем.</p><p class="flex-auto md:w-1/2">Мой подход как психолога по КПТ и коуча основан на научно обоснованной когнитивно-поведенческой терапии, которая помогает изменить неадаптивные мысли и поведение для улучшения эмоционального состояния и качества жизни моих клиентов.<br><br>Моя миссия – предоставить каждому клиенту эффективные инструменты КПТ для преодоления психологических трудностей и достижения личностного роста в онлайн-формате через изменение нездоровых (найти альтернативу) моделей мышления и поведения. В моем подходе я уделяю особое внимание выявлению и коррекции негативных автоматических мыслей, которые могут быть причиной тревожных, депрессивных состояний и других психологических проблем.</p>-->
    <div class="flex-auto md:w-1/2">
        <h2>Почему КПТ?</h2>
        <p>Всё просто: эффективно, быстро, научно.<br><br>Во время когнитивно-поведенческой терапии клиенты получают навыки, которые практикуют во время сеанса с психологом, а так же в обычной жизни на протяжении всего периода работы со специалистом. После окончания лечения клиент больше не зависит от своего терапевта: он может самостоятельно оценивать свои мысли и убеждения, решать проблемы, выстраивать и поддерживать межличностные отношения, достигать амбициозных целей. КПТ ориентирована на разумно короткие сроки достижения ощутимого облегчения (6-12 встреч). Часто клиенты видят заметный результат уже через пару сессий, а выполняя домашние задания получают навыки самопомощи, что у них успешно получается.</p>
    </div>
    <div class="relative md:w-1/3">
        <img src="<?php echo get_template_directory_uri(); ?>/img/malvina-2/IMG_E0280.jpg" class=" rounded-3xl object-cover" alt="">
        <div class="md:w-1/2 md:flex-shrink-0 absolute bottom-[5px] right-10"><h2 class="md:ml-auto md:text-right">Подход и миссия</h2></div>
    </div>
</div>

<div class="cont mt-80 fade-in">
    <h3>Алгоритм роста (можно ещё получения поддержки)</h3>
    <ul class="timeline timeline-vertical">
        <li>
            <div class="timeline-start timeline-box lg:tooltip" data-tip="Вы звоните и за 45 минут мы выясняем Ваши потребности и боли, к концу диалога вы обладаете первым раздаточным материалом и пониманием своего дальнейшего пути в терапии.">Стартовая консультация</div>
            <hr/>
        </li>
        <li>
            <hr/>
            <div class="timeline-end timeline-box lg:tooltip" data-tip="С пониманием дальнейшего пути Вы обращаетесь за консультацией и мы выбираем удобное время и обсуждаем формат общения">Запись</div>
            <hr/>
        </li>
        <li>
            <hr/>
            <div class="timeline-start timeline-box lg:tooltip" data-tip="На разных этапах работы сессии могут быть разного формата. Установочные призваны определить глубину запроса и выстроить план. Дальше двигаемся по намеченному пути">Сессия</div>
            <hr/>
        </li>
        <li>
            <hr/>
            <div class="timeline-end timeline-box lg:tooltip" data-tip="Обязательная часть работы. Без неё невозможно дальнейшее продвижение по курсу, наше общение завязано на совместных усилиях">Домашнее задание</div>
            <hr/>
        </li>
        <li>
            <hr/>
            <div class="timeline-start timeline-box lg:tooltip" data-tip="Чем хорош КПТ, клиент получает от психолога нужные навыки, прорабатывает основные ситуации, вызывающие неудобства - а не просто выговаривается. Наши занятия - конечны, вы не будете ходить к своему терапевту всю жизнь, надо же и меру знать">Итоги</div>
        </li>
    </ul>
</div>

<div class="cont m-auto mt-80 fade-in">
    <h3>Популярные вопросы</h3>
    <div class="join join-vertical w-full mt-10">
        <div class="collapse collapse-arrow join-item border border-neutral">
            <input type="radio" name="my-accordion-4" />
            <div class="collapse-title text-xl font-medium">
                Каков формат встреч?
            </div>
            <div class="collapse-content">
                <p>Я провожу онлайн-встречи. Самое хорошее в таком формате, что вы можете обратиться за консультацией в любое удобное для вас время. Не надо записываться в кабинет, тратить время на дорогу. Формат звонков всем уже давно привычен</p>
            </div>
        </div>
        <div class="collapse collapse-arrow join-item border border-neutral">
            <input type="radio" name="my-accordion-4" />
            <div class="collapse-title text-xl font-medium">
                Будут ли какие-то раздаточные материалы?
            </div>
            <div class="collapse-content">
                <p>В ходе бесед мы будем много записывать, вы будете получать домашние задания, и да, частью совместной работы будут pdf матеиралы для изучения. Ну и статьи в моём блоге уже достаточно хорошее подспорье начать работать над собой и менять жизнь к лучшему</p>
            </div>
        </div>
        <div class="collapse collapse-arrow join-item border border-neutral">
            <input type="radio" name="my-accordion-4" />
            <div class="collapse-title text-xl font-medium">
                Коуч или терапия?
            </div>
            <div class="collapse-content">
                <p>Формат неразделим, так как в нашей жизни важно сочетание мотивации и психического здоровья. Поэтому коучинг очень популярен.</p>
            </div>
        </div>
    </div>
</div>

<div class="cont mt-80">
    <h4>Кто Вам нужен?</h4>
    <div class="flex flex-col md:flex-row w-full justify-center">
        <div class="grid md:w-1/2 h-20 flex-grow card bg-base-300 rounded-box place-items-center">Психотерапевт</div>
        <div class="divider divider-horizontal m-auto md:w-20">или</div>
        <div class="grid md:w-1/2 h-20 flex-grow card bg-base-300 rounded-box place-items-center">Коуч</div>
    </div>
    <!-- Open the modal using ID.showModal() method -->
    <button class="btn btn-primary btn-lg mt-10 block m-auto" onclick="my_modal_1.showModal()">Не знаете?</button>
    <dialog id="my_modal_1" class="modal">
        <div class="modal-box">
            <div class="py-8 lg:py-16 px-4 mx-auto max-w-screen-md">
                <h2 class="mb-4 text-4xl text-center">Хотите связаться или оставить заявку?</h2>
                <p class="mb-8 lg:mb-16 font-light text-center sm:text-xl">Оставьте свои данные и сообщение, я свяжусь с Вами</p>
                <form action="#" class="space-y-8">
                    <div>
                        <label for="name" class="mb-2 text-sm font-medium">Имя</label>
                        <input type="text" id="name" class="input input-primary input-bordered p-4 w-full text-sm rounded-lg shadow-sm" placeholder="Как Вас зовут?" required>
                    </div>
                    <div>
                        <label for="email" class="mb-2 text-sm font-medium">Ваша почта</label>
                        <input type="email" id="email" class="input input-bordered input-primary p-4 w-full shadow-sm text-sm rounded-lg" placeholder="mail@mail.ru" required>
                    </div>
                    <div class="sm:col-span-2">
                        <label for="message" class="mb-2 text-sm font-medium">Сообщение</label>
                        <textarea id="message" rows="6" class="textarea textarea-bordered w-full pt-4 text-sm rounded-lg shadow-sm" placeholder="Оставьте сообщение или заявку"></textarea>
                    </div>
                    <div class="flex items-start mb-5">
                        <div class="flex items-center h-5">
                            <input id="terms" type="checkbox" value="" class="w-4 h-4 rounded" required />
                        </div>
                        <label for="terms" class="ms-2 text-sm font-medium">Оставляю свои персональные данные и ознакомлен(а) с <a href="#" class="text-blue-600 hover:underline">политикой конфиденциальности</a></label>
                    </div>
                    <button type="submit" class="btn py-3 px-5 text-sm font-medium text-center rounded-lg sm:w-fit">Отправить</button>
                </form>
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

<div class="cont mt-80 fade-in">
    <h3>
        Последние статьи
    </h3>
</div>

<div class="carousel carousel-center space-x-4 px-4 fade-in">
    <?php
    $args = array(
        'numberposts' => 6
    );
    $last_posts = wp_get_recent_posts($args);
    $placeholder_image_url = get_stylesheet_directory_uri() . '/img/Foggy%20Forest%20Path.jpg'; // Замените на путь к вашему изображению-заглушке

    foreach ($last_posts as $post) {
        echo '<a class="carousel-item relative" href="' . get_permalink($post["ID"]) . '">';
        // Получаем ID изображения записи
        $image_id = get_post_thumbnail_id($post["ID"]);
        // Получаем URL полноразмерного изображения
        $image_url = wp_get_attachment_image_url($image_id, 'full');
        // Выводим изображение, если оно есть, иначе выводим изображение-заглушку
        if ($image_url) {
            echo '<img src="' . $image_url . '" alt="' . $post["post_title"] . '" class="rounded-box w-[300px] md:w-[500px] h-[200px] md:h-[350px] object-cover brightness-50">';

        } else {
            echo '<img src="' . $placeholder_image_url . '" alt="Placeholder Image" class="rounded-box w-[300px] md:w-[500px] h-[200px] md:h-[350px] object-cover brightness-50">';
        }
        echo '<h2 class="absolute top-[30px] md:top-[50px] z-10 left-[60%] md:left-[60%] -translate-x-1/2 font-bold text-sm md:text-2xl text-white w-full">' . $post["post_title"] . '</h2>';
        echo '<div class="absolute bottom-[30px] md:bottom-[50px] left-[30px] md:left-[50px] text-xs md:text-xl text-white w-[80%] md:w-[80%]">' . substr($post["post_content"], 0, 140) . '...' . '</div>';
        echo '</a>';
    }
    ?>
<!--    <div class="carousel-item relative">-->
<!--        <img src="--><?php //echo get_template_directory_uri(); ?><!--/img/Black%20framed%20eyeglasses%20on%20white%20paper.jpg" class="rounded-box w-[300px] md:w-[500px] h-[200px] md:h-[350px] object-cover brightness-50" />-->
<!--        <h3 class="absolute top-[50px] z-10 left-[60%] md:left-[60%] -translate-x-1/2 font-bold text-2xl text-white w-full">Начать развитие</h3>-->
<!--        <p class="absolute bottom-[50px] left-[50px] text-white">Как помочь себе в трудный период? Жизненные изменения сопряжены с неудобствами, могут выбить из привычной колеи</p>-->
<!--    </div>-->
<!--    <div class="carousel-item relative">-->
<!--        <img src="--><?php //echo get_template_directory_uri(); ?><!--/img/Decorative.jpg" class="rounded-box w-[300px] md:w-[500px] h-[200px] md:h-[350px] object-cover brightness-50" />-->
<!--        <h3 class="absolute top-[50px] z-10 left-[60%] md:left-[60%] -translate-x-1/2 font-bold text-2xl text-white w-full">Начать развитие</h3>-->
<!--        <p class="absolute bottom-[50px] left-[50px] text-white">Как помочь себе в трудный период? Жизненные изменения сопряжены с неудобствами, могут выбить из привычной колеи</p>-->
<!--    </div>-->
<!--    <div class="carousel-item relative">-->
<!--        <img src="--><?php //echo get_template_directory_uri(); ?><!--/img/Foggy%20Forest%20Path.jpg" class="rounded-box w-[300px] md:w-[500px] h-[200px] md:h-[350px] object-cover brightness-50" />-->
<!--        <h3 class="absolute top-[50px] z-10 left-[60%] md:left-[60%] -translate-x-1/2 font-bold text-2xl text-white w-full">Начать развитие</h3>-->
<!--        <p class="absolute bottom-[50px] left-[50px] text-white">Как помочь себе в трудный период? Жизненные изменения сопряжены с неудобствами, могут выбить из привычной колеи</p>-->
<!--    </div>-->
<!--    <div class="carousel-item relative">-->
<!--        <img src="--><?php //echo get_template_directory_uri(); ?><!--/img/jason-wang-5MG8cQbw-T8-unsplash.jpg" class="rounded-box w-[300px] md:w-[500px] h-[200px] md:h-[350px] object-cover brightness-50" />-->
<!--        <h3 class="absolute top-[50px] z-10 left-[60%] md:left-[60%] -translate-x-1/2 font-bold text-2xl text-white w-full">Начать развитие</h3>-->
<!--        <p class="absolute bottom-[50px] left-[50px] text-white">Как помочь себе в трудный период? Жизненные изменения сопряжены с неудобствами, могут выбить из привычной колеи</p>-->
<!--    </div>-->
<!--    <div class="carousel-item relative">-->
<!--        <img src="--><?php //echo get_template_directory_uri(); ?><!--/img/Person%20writing%20on%20wooden%20table.jpg" class="rounded-box w-[300px] md:w-[500px] h-[200px] md:h-[350px] object-cover brightness-50" />-->
<!--        <h3 class="absolute top-[50px] z-10 left-[60%] md:left-[60%] -translate-x-1/2 font-bold text-2xl text-white w-full">Начать развитие</h3>-->
<!--        <p class="absolute bottom-[50px] left-[50px] text-white">Как помочь себе в трудный период? Жизненные изменения сопряжены с неудобствами, могут выбить из привычной колеи</p>-->
<!--    </div>-->
<!--    <div class="carousel-item relative">-->
<!--        <img src="--><?php //echo get_template_directory_uri(); ?><!--/img/Unknown%20person.jpg" class="rounded-box w-[300px] md:w-[500px] h-[200px] md:h-[350px] object-cover brightness-50" />-->
<!--        <h3 class="absolute top-[50px] z-10 left-[60%] md:left-[60%] -translate-x-1/2 font-bold text-2xl text-white w-full">Начать развитие</h3>-->
<!--        <p class="absolute bottom-[50px] left-[50px] text-white">Как помочь себе в трудный период? Жизненные изменения сопряжены с неудобствами, могут выбить из привычной колеи</p>-->
<!--    </div>-->
</div>

<div class="cont mt-80">
    <h5>Сферы моей деятельности</h5>
</div>

<div class="cont m-auto grid lg:grid-cols-2 gap-4 rounded-3xl fade-in">

<!--    --><?php
//    $args = array(
//        'numberposts' => 6
//    );
//    $last_posts = wp_get_recent_posts( $args );
//
//    foreach( $last_posts as $post ){
//        echo '<a class="card w-full shadow-xl rounded-3xl p-10" href="' . get_permalink($post["ID"]) . '">';
//        echo '<h2 class="card-title">' . $post["post_title"] . '</h2>';
//        echo '<div>' . substr($post["post_content"], 0, 100) . '...' . '</div>';
//        echo '</a>';
//    }
//    ?>

    <a class="card w-full shadow-xl rounded-3xl p-10" href="/malvina-1/chto-takoe-kpt"><h2 class="card-title">КПТ</h2>
        <div>КПТ, когнитивно поведенческая терапия, ветвь психологии</div>
    </a>
    <a class="card w-full shadow-xl rounded-3xl p-10" href="#"><h2 class="card-title">Семейные проблемы</h2>
        <div>Преодоление кризисов семейной жизни</div
    ></a>
    <a class="card w-full shadow-xl rounded-3xl p-10" href="#"><h2 class="card-title">Мотивация</h2>
        <div>Поиск изначального посыла деятельности и твердое понимание направления дальнейших усилий</div
    ></a>
    <a class="card w-full shadow-xl rounded-3xl p-10" href="#"><h2 class="card-title">Развитие личности</h2>
        <div>Практика осознанности, обучение сознательному контролю внутреннего состояния и принятия решений</div
    ></a>


</div>

<div class="cont" id="swiper">
    <div class="slider swiper mt-80 fade-in" id="slider">
        <div class="slider-wrapper swiper-wrapper">
            <div class="slider-slide swiper-slide">
                <img class="object-cover h-[500px] w-full rounded-3xl brightness-50" src="<?php echo get_template_directory_uri(); ?>/img/Black%20framed%20eyeglasses%20on%20white%20paper.jpg"/>
                <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 text-center">
                    <h5 class="text-5xl fade-in">Что-то чувственное</h5>
                    <p class="italic fade-in">Какая-то цитата, какой-то слоган</p>
                </div>
            </div>
            <div class="slider-slide swiper-slide">
                <img class="object-cover h-[500px] w-full rounded-3xl brightness-50" src="<?php echo get_template_directory_uri(); ?>/img/jason-wang-5MG8cQbw-T8-unsplash.jpg"/>
                <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 text-center fade-in">
                    <h5 class="text-5xl">Можно мысль</h5>
                    <p class="italic">Что-то в духе твоей инсты</p>
                </div>
            </div>
            <div class="slider-slide swiper-slide">
                <img class="object-cover h-[500px] w-full rounded-3xl brightness-50" src="<?php echo get_template_directory_uri(); ?>/img/Person%20writing%20on%20wooden%20table.jpg"/>
                <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 text-center fade-in">
                    <h5 class="text-5xl">Или боль клиентов</h5>
                    <p class="italic">В любом случае, надо вызвать у клиента отклик</p>
                </div>
            </div>
            <div class="slider-slide swiper-slide">
                <img class="object-cover h-[500px] w-full rounded-3xl brightness-50" src="<?php echo get_template_directory_uri(); ?>/img/White%20notebook%20textile.jpg"/>
                <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 text-center fade-in">
                    <h5 class="text-5xl">Метод</h5>
                    <p class="italic">Какое-то описание</p>
                </div>
            </div>
        </div>
        <div class="slider-navigation">
            <div class="slider-pagination swiper-pagination" id="slider-pagination"></div>
            <div class="slider-button-prev swiper-button-prev border-[1px] border-white hover:bg-white hover:text-black hover:border-transparent px-[22px] rounded-full"></div>
            <div class="slider-button-next swiper-button-next border-[1px] border-white hover:bg-white hover:text-black hover:border-transparent px-[22px] rounded-full"></div>
        </div>
    </div>

    <div class="overflow-x-auto mt-80 fade-in">
        <h5>Цены 1 (цены не обновлял)</h5>
        <table class="table table-zebra">
            <thead>
            <tr>
                <th class="text-xl">Описание</th>
                <th class="text-xl">Цена за единицу</th>
                <th class="text-xl">Цена</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td>Пакет 6 сессий (-20%)</td>
                <td>2 560 р</td>
                <td>15 360 р</td>
            </tr>
            <tr>
                <td>Пакет 8 сессий (-25%)</td>
                <td>2 400 р</td>
                <td>19 200 р</td>
            </tr>
            <tr>
                <td>Пакет 8 сессий (-25%)</td>
                <td>2 240 р</td>
                <td>26 880 р</td>
            </tr>
            </tbody>
        </table>
    </div>

    <div class="mt-80 fade-in">
        <h5 class="flex justify-center">Цены 2 (обновлено)</h5>
        <div class="stat-table flex justify-center">
            <div class="stats shadow grid-rows-3 lg:grid-rows-1">
                <div class="stat">
                    <div class="stat-value">19 440 р</div>
                    <div class="stat-title">Пакет 6 сессий (-20%)</div>
                    <!--                    <div class="stat-desc">2 560 р - цена 1 занятия</div>-->
                </div>

                <div class="stat">
                    <div class="stat-value">24 480 р</div>
                    <div class="stat-title">Пакет 8 сессий (-25%)</div>
                    <!--                    <div class="stat-desc">2 400 р - цена 1 занятия</div>-->
                </div>

                <div class="stat">
                    <div class="stat-value">34 560 р</div>
                    <div class="stat-title">Пакет 8 сессий (-25%)</div>
                    <!--                    <div class="stat-desc">2 240 р - цена 1 занятия</div>-->
                </div>
            </div>
        </div>
        <div><p>Продолжительность одной сессии: 50 минут<br>Стоимость разовой консультации 3.600 р за сессию<br>Стоимость первой (диагностической) сессии -50% = 1600 р (возможно, здесь надо тоже обновить)</p></div>
    </div>

    <div class="mt-80 fade-in">
        <h5>Цены 3</h5>
        <b class="font-bold">Стоимость разовой консультации 3.600 р за сессию<sup>*</sup></b>
        <p class="mt-10">Стоимость первой (диагностической) сессии -50% = 1600 р</p>
        <p class="text-xs mt-10 lg:mt-0"><sup>*</sup>продолжительность одной сессии: 50 минут</p>
        <button class="btn w-full mt-10 sm:w-fit lg:hidden">Записаться</button>
        <div class="mt-10 grid lg:grid-cols-2 lg:gap-10">
            <div class="py-6 border-y-[1px] border-white lg:border-none flex justify-between lg:bg-base-200 lg:p-6">
                <div class="font-bold">Пакет 6 сессий (-20%)</div>
                <div>19 440 р</div>
            </div>
            <div class="py-6 flex justify-between lg:bg-base-200 lg:p-6">
                <div class="font-bold">Пакет 8 сессий (-25%)</div>
                <div>24 480 р</div>
            </div>
            <div class="lg:col-span-2 py-6 border-y-[1px] border-white lg:border-none flex justify-center lg:bg-base-200 lg:p-6 lg:w-[48.5%] lg:m-auto">
                <div class="flex justify-between w-full lg:max-w-md">
                    <div class="font-bold">Пакет 8 сессий (-25%)</div>
                    <div>34 560 р</div>
                </div>
            </div>
        </div>
        <button class="btn mt-10 hidden lg:block lg:btn-lg m-auto">Записаться</button>
    </div>
</div>

<?php get_footer(); ?>
