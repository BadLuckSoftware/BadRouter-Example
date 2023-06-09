<?php
require_once('vendor/autoload.php');
require_once('middleware.php');
require_once('api.php');
require_once('views.php');

use BadRouter\Router;

// Configure directories
Router::set_base_path('/');
Router::set_public('public');
Router::set_views('views');

// Run
session_start();
Router::run();
