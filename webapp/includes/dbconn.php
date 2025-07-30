<?php  
define('DB_HOST', 'tls_db'); // This is the service name in docker-compose
define('DB_USER', 'teacher_user');
define('DB_PASS', 'teach_secret');
define('DB_NAME', 'teacher_leave_db');

try {
    $dbh = new PDO(
        "mysql:host=".DB_HOST.";dbname=".DB_NAME,
        DB_USER,
        DB_PASS,
        array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8'")
    );
} catch (PDOException $e) {
    // Do NOT use echo here
    // You can log this or handle it in other ways
    exit("Error: Could not connect to database. " . $e->getMessage());
}

// NO closing PHP tag, no extra newlines or spaces
