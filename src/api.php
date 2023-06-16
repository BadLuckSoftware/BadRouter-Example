<?php

use BadRouter\Router;

// Login using a password
Router::post('/api/login', function () {
  $result = false;

  if ($_POST['password'] == 'rosebud') {
    $result = true;
    $_SESSION['is_admin'] = true;
  }

  Router::json([
    'success' => $result,
  ]);
});

// Logout
Router::post('/api/logout', function () {
  session_destroy();
  Router::json([
    'result' => true
  ]);
});

// Check if logged in as admin
Router::get('/api/is_admin', function () {
  $result = false;
  if (isset($_SESSION['is_admin'])) {
    if ($_SESSION['is_admin'] === true) {
      $result = true;
    }
  }
  Router::json([
    'result' => $result
  ]);
});
