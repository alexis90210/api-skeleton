<?php

// Autoload Composer dependencies
// This includes all libraries installed via Composer (like AltoRouter)
require_once('./vendor/autoload.php');

// Include custom utility functions for handling JSON
require_once('./utils/json.php');

// Initialize the AltoRouter instance
// Used for defining and matching routes in your app
$router = new AltoRouter();

// Load base routes configuration
// This defines core routes for the application
require_once('./app/routes/base.php');

// Include additional route-to-handler mappings
require_once('./map.php');

// Attempt to match the current request with a defined route
$match = $router->match();

// If a matching route is found, require the target file (controller or handler)
if ($match) {
    require $match['target'];
} else {
    // If no route matches, redirect to a default public index page
    header('Location: /public/index.html');
}
