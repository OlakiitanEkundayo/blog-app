<?php

try {
    $pdo = new PDO('mysql:host=localhost;dbname=blog_app', 'root', '', [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
    ]);
} catch (PDOException $e) {
    die("Connection failed" . $e->getMessage());
}
