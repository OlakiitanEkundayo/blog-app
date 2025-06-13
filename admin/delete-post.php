<?php
require_once __DIR__ . '/../includes/db.inc.php';
require_once __DIR__ . '/../includes/function.inc.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $stmt = $pdo->prepare("DELETE FROM `blog_table` WHERE id = ?");
    $stmt->execute([$id]);
    header('Location: all-posts.php?deleted=true');
    exit;
}
