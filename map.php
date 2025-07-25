<?php 
// Enables Cross-Origin Resource Sharing (CORS) settings
// allowing or restricting access to resources from other domains
require_once('./config/cors.php');

// Sets HTTP headers for the response
// such as content type, permissions, and other metadata
require_once('./config/headers.php');

// Loads error handling configuration
// to customize how errors are displayed or logged
require_once('./config/error.php');

// Imports global constants used across the application
// such as paths, keys, or status codes
require_once('./config/constant.php');

// Initializes the database connection
// by setting parameters like host, database name, and credentials
require_once('./config/database.php');

require_once('./utils/json.php');

require_once('./utils/logs.php');
