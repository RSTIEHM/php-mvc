<?php 

define('APP_NAME', 'Udemy');
define('APP_DESC', 'Free And Paid Tutorials');


// DB CONFIG
if($_SERVER['SERVER_NAME'] == "localhost") {
    // DB CONFIG FOR LOCAL
    define('DBHOST', 'localhost');
    define('DBNAME', 'udemy_db');
    define('DBUSER', 'root');
    define('DBPASS', '');
    define('DBDRIVER', 'mysql');
    // ROOT PATH
    define('ROOT', 'http://localhost/php-mvc/public');
} else {
    // LIVE SERVER
    define('DBHOST', 'localhost');
    define('DBNAME', 'udemy_db');
    define('DBUSER', 'root');
    define('DBPASS', '');
    define('DBDRIVER', 'mysql');
    // LIVE_SITE
    define('ROOT', 'http://');
}

