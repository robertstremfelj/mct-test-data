<?php

if (!defined('ABSPATH')) exit;

class testDataDisplay
{
    
    public static function init() {
        $class = __CLASS__;
        new $class;
    }

    /*-----------------------------------------------------------------------------------------------------------------------------------------------------------------*/

    public function __construct() {
        add_action('rest_api_init', [$this, 'registerRoutes']);
    }

    /*-----------------------------------------------------------------------------------------------------------------------------------------------------------------*/

    public function registerRoutes() {
		register_rest_route(
			'test/v1',
			'/test-data',
			[
				'methods'             => 'GET',
				'callback'            => [$this, 'test_data'],
				'permission_callback' => [$this, 'auth']
			]
		);
	}

    /*-----------------------------------------------------------------------------------------------------------------------------------------------------------------*/

	public function auth() {
		return isset( $_GET['auth'] ) && $_GET['auth'] == '1576f59420f3dd49d858841d2657ae30';
	}

    /*-----------------------------------------------------------------------------------------------------------------------------------------------------------------*/

    public function test_data() {

        header('Content-Type: text/html; charset=UTF-8');
        echo '<div style="padding:10px;border:1px solid #cccccc;background:#fcd9d9;">Testiramo kako deluje plugin preko WP Pusherja ko je narejen update na novo čist al pa ne!</div>';

    }

    /*-----------------------------------------------------------------------------------------------------------------------------------------------------------------*/
    
}
