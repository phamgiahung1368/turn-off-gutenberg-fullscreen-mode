<?php

/**
 * Plugin Name:     Turn Off Gutenberg Fullscreen Mode
 * Description:     Turn off gutenberg fullscreen mode
 * Version:         1.0.0
 * Author:          phamgiahung1368
 * License:         MIT
 * License URI:     https://opensource.org/licenses/MIT
 * Text Domain:     turn-off-gutenberg-fullscreen-mode
 */

function add_script()
{
    wp_enqueue_script(
        'custom-gutenberg-script',
        plugins_url('build/index.js', __FILE__)
    );
}
add_action('enqueue_block_editor_assets', 'add_script');
