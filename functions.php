<?php

function mytheme_enqueue_styles() {
    wp_enqueue_style( 'mytheme-styles', get_template_directory_uri() . '/style.css', [], '1.0.0' );
}

add_action( 'wp_enqueue_scripts', 'mytheme_enqueue_styles' );



function add_my_scripts() {
   wp_enqueue_script( 'script-one', get_template_directory_uri() . '/js/vendor.js', array ( 'jquery' ), 1.1, true);
   wp_enqueue_script( 'script-two', get_template_directory_uri() . '/js/main.js', array ( 'jquery' ), 1.1, true);
}
add_action( 'wp_enqueue_scripts', 'add_my_scripts' );

// Настройка меню

function register_my_menu() {
    register_nav_menu('header-menu',__( 'Главное меню' ));
}
add_action( 'init', 'register_my_menu' );

// Кастомная структура меню

class Walker_Nav_Primary extends Walker_Nav_menu {
    function start_el(&$output, $item, $depth=0, $args=array(), $id = 0) {
        $output .= "<li class=\"\">";
        $output .= '<a class="px-[10px]" href="' . $item->url . '">';
        $output .= $item->title;
        $output .= '</a>';
    }

    function end_el( &$output, $item, $depth = 0, $args = array() ) {
        $output .= "</li>\n";
    }
}

// Циклическая пагинация в постах

function circular_post_navigation() {
    $prev_post = get_previous_post();
    $next_post = get_next_post();

    if (empty($prev_post)) {
        // Получаем последний пост, если нет предыдущего
        $args = array(
            'posts_per_page' => 1,
            'order'          => 'DESC',
        );
        $last_post = get_posts($args);
        $prev_post = array_shift($last_post);
    }

    if (empty($next_post)) {
        // Получаем первый пост, если нет следующего
        $args = array(
            'posts_per_page' => 1,
            'order'          => 'ASC',
        );
        $first_post = get_posts($args);
        $next_post = array_shift($first_post);
    }

    // Возвращаем массив ссылок на предыдущий и следующий посты
    return array(
        'prev_post' => $prev_post,
        'next_post' => $next_post,
    );
}

// Хлебные крошки

function the_breadcrumbs() {
    // Получаем ID текущей страницы/записи
    $current_id = get_the_ID();
    // Массив для хранения элементов хлебных крошек
    $breadcrumbs = array();

    // Проверяем, не является ли текущая страница главной или 404
    if (!is_front_page() && !is_404()) {
        // Добавляем главную страницу
        $breadcrumbs[] = '<li><a href="' . home_url() . '">Главная</a></li>';

        // Если это запись, добавляем категории
        if( is_category() ) {
            $breadcrumbs[] = '<li><a href="' . get_category_link( get_query_var( 'cat' ) ) . '">' . single_cat_title( '', false ) . '</a></li>';
        } else if (is_singular('post')) {
            $categories = get_the_category($current_id);
            if ($categories) {
                $breadcrumbs[] = '<li><a href="' . get_category_link($categories[0]->term_id) . '">' . $categories[0]->name . '</a></li>';
            }
        }

        // Добавляем текущую страницу (без ссылки)
        $breadcrumbs[] = '<li>' . get_the_title() . '</li>';

        // Выводим хлебные крошки
        echo '<div class="text-sm breadcrumbs">';
        echo '<ul>';
        echo implode('', $breadcrumbs);
        echo '</ul>';
        echo '</div>';
    }
}

// Кастомные метки

// Добавляем поле для цвета в форму редактирования метки
function yourprefix_add_tag_form_fields($term) {
    ?>
    <div class="form-field term-group">
        <label for="tag-color"><?php _e('Цвет подчеркивания', 'yourtextdomain'); ?></label>
        <input type="color" id="tag-color" name="tag-color" value="">
    </div>
    <?php
}

add_action('add_tag_form_fields', 'yourprefix_add_tag_form_fields');

// Добавляем поле для цвета в форму редактирования существующей метки
function yourprefix_edit_tag_form_fields($term) {
    $color = get_term_meta($term->term_id, 'tag-color', true);
    ?>
    <tr class="form-field term-group-wrap">
        <th scope="row"><label for="tag-color"><?php _e('Цвет подчеркивания', 'yourtextdomain'); ?></label></th>
        <td>
            <input type="color" id="tag-color" name="tag-color" value="<?php echo esc_attr($color); ?>">
            <p class="description"><?php _e('Выберите цвет подчеркивания для этой метки.'); ?></p>
        </td>
    </tr>
    <?php
}
add_action('edit_tag_form_fields', 'yourprefix_edit_tag_form_fields');

// Сохраняем выбранный цвет в базу данных
function yourprefix_save_tag_meta($term_id) {
    if (isset($_POST['tag-color'])) {
        update_term_meta($term_id, 'tag-color', sanitize_hex_color($_POST['tag-color']));
    }
}
add_action('created_term', 'yourprefix_save_tag_meta', 10, 2);
add_action('edited_term', 'yourprefix_save_tag_meta', 10, 2);

// Позволяем использовать новое поле для цвета в REST API
function yourprefix_register_meta() {
    register_meta('term', 'tag-color', array(
        'show_in_rest' => true,
        'type' => 'string',
        'single' => true,
        'sanitize_callback' => 'sanitize_hex_color',
        'auth_callback' => function() {
            return current_user_can('edit_posts');
        }
    ));
}
add_action('init', 'yourprefix_register_meta');

// Добавление rounded-box ко всем картинкам, вставленным через админку
function add_rounded_box_class_to_images($content) {
    $pattern = '/<img(.*?)class="(.*?)"(.*?)>/i';
    $replacement = '<img$1class="$2 rounded-box"$3>';
    $content = preg_replace($pattern, $replacement, $content);

    // Если img не содержит атрибут class
    $pattern_no_class = '/<img((?:(?!class=).)*?)>/i';
    $replacement_no_class = '<img class="rounded-box" $1>';
    $content = preg_replace($pattern_no_class, $replacement_no_class, $content);

    return $content;
}
add_filter('the_content', 'add_rounded_box_class_to_images');

// Поддержка миниатюр записей

add_theme_support( 'post-thumbnails' );

?>