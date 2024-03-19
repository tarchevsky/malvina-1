<form role="search" class="header-search__form" id="searchform" method="get" action="<?php echo home_url('/'); ?>">
    <input class="header-search__input input input-bordered input-primary w-full rounded-3xl" id="search" type="text" name='s' id='s'  value="<?php echo get_search_query('q'); ?>" placeholder="Я хочу найти...">
</form>