<!DOCTYPE html>
<html data-theme="black" lang="ru">
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?php wp_title('|', true, 'right'); ?></title>
    <meta name="description" content="<?php echo get_post_meta(get_the_ID(), '_yoast_wpseo_metadesc', true); ?>">
    <meta name="theme-color" content="#fff">
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/img/favicons/favicon.ico"
          type="image/x-icon">
    <link rel="icon" sizes="16x16" href="<?php echo get_template_directory_uri(); ?>/img/favicons/favicon-16x16.png"
          type="image/png">
    <link rel="icon" sizes="32x32" href="<?php echo get_template_directory_uri(); ?>/img/favicons/favicon-32x32.png"
          type="image/png">
    <link rel="apple-touch-icon-precomposed"
          href="<?php echo get_template_directory_uri(); ?>/img/favicons/apple-touch-icon-precomposed.png">
    <link rel="apple-touch-icon" href="<?php echo get_template_directory_uri(); ?>/img/favicons/apple-touch-icon.png">
    <link rel="apple-touch-icon" sizes="57x57"
          href="<?php echo get_template_directory_uri(); ?>/img/favicons/apple-touch-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60"
          href="<?php echo get_template_directory_uri(); ?>/img/favicons/apple-touch-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72"
          href="<?php echo get_template_directory_uri(); ?>/img/favicons/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76"
          href="<?php echo get_template_directory_uri(); ?>/img/favicons/apple-touch-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114"
          href="<?php echo get_template_directory_uri(); ?>/img/favicons/apple-touch-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120"
          href="<?php echo get_template_directory_uri(); ?>/img/favicons/apple-touch-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144"
          href="<?php echo get_template_directory_uri(); ?>/img/favicons/apple-touch-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152"
          href="<?php echo get_template_directory_uri(); ?>/img/favicons/apple-touch-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="167x167"
          href="<?php echo get_template_directory_uri(); ?>/img/favicons/apple-touch-icon-167x167.png">
    <link rel="apple-touch-icon" sizes="180x180"
          href="<?php echo get_template_directory_uri(); ?>/img/favicons/apple-touch-icon-180x180.png">
    <link rel="apple-touch-icon" sizes="1024x1024"
          href="<?php echo get_template_directory_uri(); ?>/img/favicons/apple-touch-icon-1024x1024.png">
    <link
            rel="stylesheet"
            href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"
    />
    <style>
        .tag-item {
            padding: 2px 5px;
            margin: 0 2px;
            border-bottom: 3px solid; /* По умолчанию цвет не задан */
            text-decoration: none; /* Отключаем стандартное подчеркивание ссылок */
        }

    </style>
    <?php wp_head(); ?>
</head>
<body class="relative">

<header class="cont m-auto m-4 md:flex md:justify-between align-center py-2">
    <a href="/" class="flex justify-center items-center md:justify-start py-4">Психолог <br>Мальвина</a>
    <div class="header-search md:flex md:items-center md:ml-auto">
        <?php echo get_search_form(); ?>
    </div>
    <div class="flex justify-evenly md:justify-between items-center py-4">
        <nav>
            <?php
            wp_nav_menu( array(
                'theme_location' => 'header-menu',
                'menu_id'        => 'header-menu',
                'menu_class'     => 'menu flex-nowrap menu-horizontal header-menu__list',
                'container'      => false,
                'items_wrap'     => '<ul tabindex="0" id="%1$s" class="%2$s">%3$s</ul>',
                'walker'         => new Walker_Nav_Primary()
            ) );
            ?>
        </nav>
<!--        <nav>-->
<!--            <ul class="menu menu-horizontal header-menu__list gap-[10px]">-->
<!--                <li class="btn header-menu__item">-->
<!--                    <a class="btn" href="#">текст</a>-->
<!--                </li>-->
<!--            </ul>-->
<!--        </nav>-->
        <div class="dropdown hidden xl:inline-block">
            <a tabindex="0" role="button" class="btn flex-nowrap text-start btn-ghost font-normal px-[10px]">
                Цветовая схема
                <svg width="12px" height="12px" class="h-2 w-2 fill-current opacity-60 inline-block" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 2048 2048"><path d="M1799 349l242 241-1017 1017L7 590l242-241 775 775 775-775z"></path></svg>
            </a>
            <ul class="dropdown-content z-[100] mt-2 p-2 shadow-2xl bg-base-300 rounded-box w-30 sm:w-52">
                <li><input type="radio" name="theme-dropdown" class="theme-controller btn btn-sm btn-block btn-ghost justify-start" aria-label="Default" value="default"/></li>
                <li><input type="radio" name="theme-dropdown" class="theme-controller btn btn-sm btn-block btn-ghost justify-start" aria-label="Cupcake" value="cupcake"/></li>
                <li><input type="radio" name="theme-dropdown" class="theme-controller btn btn-sm btn-block btn-ghost justify-start" aria-label="Nord" value="nord"/></li>
                <li><input type="radio" name="theme-dropdown" class="theme-controller btn btn-sm btn-block btn-ghost justify-start" aria-label="Business" value="business"/></li>
                <li><input type="radio" name="theme-dropdown" class="theme-controller btn btn-sm btn-block btn-ghost justify-start" aria-label="Black" value="black"/></li>
                <li><input type="radio" name="theme-dropdown" class="theme-controller btn btn-sm btn-block btn-ghost justify-start" aria-label="Dim" value="dim"/></li>
            </ul>
        </div>
    </div>
</header>

