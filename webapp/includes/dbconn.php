<?php  
define('DB_HOST', 'tls_db'); // Docker service name in docker-compose
define('DB_USER', 'teacher_user');
define('DB_PASS', 'teach_secret');
define('DB_NAME', 'teacher_leave_db');

try {
    $dbh = new PDO(
        "mysql:host=" . DB_HOST . ";dbname=" . DB_NAME . ";charset=utf8",
        DB_USER,
        DB_PASS,
        array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION)
    );
} catch (PDOException $e) {
    exit("Error: Could not connect to database. " . $e->getMessage());
}

// NO closing PHP tag, no extra newlines or spaces
