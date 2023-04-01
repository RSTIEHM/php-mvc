<?php 

define('APP_NAME', 'Udemy App');
define('APP_DESC', 'Free And Paid Tutorials');

// DB CONFIG
if($_SERVER['SERVER_NAME'] == "localhost") {
    // DB CONFIG FOR LOCAL
    define('DBHOST', 'localhost');
    define('DBNAME', 'udemy_db');
    define('DBUSER', 'root');
    define('DBPASS', '');
    define('DBDRIVER', 'mysql');
} else {
    // LIVE SERVER
    define('DBHOST', 'localhost');
    define('DBNAME', 'udemy_db');
    define('DBUSER', 'root');
    define('DBPASS', '');
    define('DBDRIVER', 'mysql');
}

