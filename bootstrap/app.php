<?php
require_once __DIR__ . '/../vendor/autoload.php';
$database = require __DIR__ . '/../config/database.php';
define('DBHOST', $database['host']);
define('DBNAME', $database['database']);
define('DBUSER', $database['user']);
define('DBPASS', $database['password']);

require __DIR__ . '/../routes/web.php';
