<?php
/**
 * Theme functionalities bootstrap
 *
 * This theme use PHP-DI to manage the classes dependencies. To access the
 * container object, use the global variable `$container`.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 * @link http://php-di.org/doc/
 *
 * @package Aztec
 */

use Aztec\Kernel;

/**
 * Theme container object
 *
 * @global DI\Container $container
 */
global $container;

$builder   = new \DI\ContainerBuilder();
$container = $builder->build();

$container->get( Kernel::class )->init();

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
