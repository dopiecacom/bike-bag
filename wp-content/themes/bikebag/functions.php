<?php

require_once ABSPATH . 'wp-admin/includes/plugin.php';
require_once ABSPATH . 'wp-content/themes/bikebag/vite-for-wp.php';

use Kucrut\Vite;

add_action( 'wp_enqueue_scripts', function (): void {
    Vite\enqueue_asset(
        ABSPATH . 'wp-content/themes/bikebag/assets/public',
        'assets/js/scripts.js',
        [
            'handle' => 'bikebag',
        ]
    );
} );
