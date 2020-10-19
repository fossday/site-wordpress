<?php
if(!function_exists('schultz_saetup')){
    function schultz_saetup()
    {
        //Crete Header menu
        register_nav_menu('header-menu', __('Menu principal'));
        // Create Footer menu
        register_nav_menu('footer-menu', __('Menu Rodapé'));
        //Create Custom Logo Size
        add_theme_support('custom-logo', array(
            'height' => 47,
            'with' => 165,
            'flex-height' => true,
            'flex-width' => true
        ));
        //Enable Post Thumbnail
        add_theme_support('post-thumbnail');
        set_post_thumbnail_size(750,375, true);
    }add_action('init', 'schultz_saetup');

};
