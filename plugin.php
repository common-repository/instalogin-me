<?php

/**
 * Plugin Name: Official Instalogin
 * Plugin URI: https://instalogin.me/
 * Description: Official Instalogin integration enables login via InstaCode on your Wordpress installation.
 * Author: InstaSolutions GmbH
 * Author URI: https://instalogin.me
 * Requires at least: 5.0
 * Version: 0.13.3
 * Licence: GPL v2 or later
 * Licence URI: https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain: instalogin-me
 * Domain Path: /languages
 */

if (!defined('ABSPATH')) {
    exit;
}

// require_once __DIR__ . '/vendor/autoload.php';

// TODO: This is a fix for media selector not working. Check if really required
// function load_wp_media_files()
// {
//     wp_enqueue_media();
// }
// add_action('admin_enqueue_scripts', 'load_wp_media_files');

class InstalogIn
{
    private $client = false;

    public function __construct()
    {
        add_action('admin_notices', function () {
            ?>
            <div class="notice notice-info">
                <h1>Instalogin</h1>
                <p>
                    Instalogin has been replaced by <a href="https://almefy.com">Almefy</a>!<br>
                    <br>Please remove this plugin.</b>
                </p>
            </div>
            <?php
        });
    }
}

$instalog_in = new InstalogIn();
