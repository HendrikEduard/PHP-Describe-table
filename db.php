<?php
// DB credentials. => These *should* be on a seperate page.
$host = '127.0.0.1';
$db   = '16_or_more_random_characters';
$user = 'never_use_root';
$pass = 'never_use_password';
$charset = 'utf8mb4';

$dsn = "mysql:host=$host;dbname=$db;charset=$charset";
$opt = [ PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ,
        PDO::ATTR_EMULATE_PREPARES => false ];
$db = new PDO($dsn, $user, $pass, $opt);
