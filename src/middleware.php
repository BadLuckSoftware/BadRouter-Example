<?php

use BadRouter\Router;
use BadRouter\Request;

// Require admin for specific routes
Router::use(function(Request $request) {
  $restricted_routes = [
    '/admin',
    '/admin/configuration',
  ];

  // Check if route is restricted
  if(in_array($request->route, $restricted_routes)) {
    // Check if user is logged in
    if($_SESSION['is_admin'] != true) {
      Router::redirect('/login');
    }
  }
});

// Log routes
// Router::use(function($request) {
//   Logger::log($request);
// });
