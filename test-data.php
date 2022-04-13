<?php
/**
 * Plugin Name: Test data plugin
 * Plugin URI: https://www.popolnapostava.com/
 * Description: Plugin, ki ustvari test data.
 * Version: 4.0.1.
 * Author: Popolna Postava
 * Author URI: https://www.popolnapostava.com/
 */

if (!defined('ABSPATH')) exit;

require_once dirname(__FILE__) . '/test-data-display.php';
add_action('plugins_loaded', array( 'testDataDisplay', 'init'));
