<?php

/**
 * Plugin Name:     Turn Off Gutenberg Fullscreen Mode
 * Description:     Turn off gutenberg fullscreen mode
 * Version:         0.1.0
 * Author:          The WordPress Contributors
 * License:         GPL-2.0-or-later
 * License URI:     https://www.gnu.org/licenses/gpl-2.0.html
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
