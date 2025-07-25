# structure / tree

├── app/
│   └── routes/
│       └── base.php         # Core route definitions
├── config/
│   ├── cors.php             # CORS setup
│   ├── headers.php          # HTTP header configuration
│   ├── error.php            # Error handling settings
│   ├── constant.php         # Global constants
│   └── database.php         # DB connection
├── public/
│   └── index.php            # Fallback route
├── utils/
│   └── json.php             # Custom JSON helpers
├── vendor/                  # Composer dependencies
├── map.php                 # Routing/files map
├── index.php              # Main entry point


# 🚀 How to Run
Install dependencies via Composer:

# bash
composer install
Start the server (optional with PHP's built-in server):

# bash
php -S localhost:8000
Access the app at http://localhost:8000


# ⚙️ Configuration
Make sure to configure the following files under config/:

- cors.php: Define allowed origins and methods.

- headers.php: Set response headers (e.g., content-type, CORS).

- error.php: Manage custom error output/logging.

- constant.php: App-wide constants (API keys, paths).

- database.php: Database connection settings using PDO or MySQLi.


# 📌 Routing
Routes are defined in:

- app/routes/base.php: Maps URLs to handlers.

- map.php: Additional mappings for route resolution.

AltoRouter matches the current request and loads the appropriate target file. Unmatched routes redirect to /public/index.php.

# 🔧 Tools & Dependencies

- AltoRouter

- PHP 7.4+ or higher

- Composer