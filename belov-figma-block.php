<?php

/**
 * Plugin Name: Belov Figma Block Plugin
 * Description: This project is a conversion of a pixel-perfect HTML version of a Figma design into a fully functional WordPress ACF block. 
 * Requires at least: 5.0
 * Requires PHP: 7.0
 * Version: 1.0.0
 * Author: Martin Ndegwa Moche
 * Author URI: https://github.com/ndegwamoche/
 * License: GPLv2 or later
 * License URI: http://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain: belov-figma-block
 */

//Exit if accessed directly
if (! defined('ABSPATH')) {
    exit;
}

function belov_figma_block() {
    // Register the block.
    register_block_type(__DIR__ . '/blocks/belov-figma');
}

add_action('init', 'belov_figma_block');

function belov_figma_block_styles_and_scripts() {
    wp_register_style('google-fonts', 'https://fonts.googleapis.com/css2?family=Archivo:ital,wght@0,100..900;1,100..900&family=Lora:ital,wght@0,400..700;1,400..700&display=swap', array(), null);
    wp_enqueue_style('google-fonts');
}

add_action('wp_enqueue_scripts', 'belov_figma_block_styles_and_scripts');
add_action('admin_enqueue_scripts', 'belov_figma_block_styles_and_scripts');
