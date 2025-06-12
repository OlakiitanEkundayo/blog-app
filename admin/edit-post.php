<?php
require_once __DIR__ . '/../includes/db.inc.php';
require_once __DIR__ . '/../includes/function.inc.php';

if (!isset($_GET['id'])) {
    header('Location: all-posts.php');
    exit;
}

$id = $_GET['id'];
$stmt = $pdo->prepare("SELECT * FROM `blog_table` WHERE id = ?");
$stmt->execute([$id]);
$post = $stmt->fetch();

if (!$post) {
    echo "Post not found.";
    exit;
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $title = $_POST['title'];
    $content = $_POST['content'];

    $stmt = $pdo->prepare("UPDATE `blog_table` SET title = ?, content = ? WHERE id = ?");
    $stmt->execute([$title, $content, $id]);
    header('Location: all-posts.php?updated=true');
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Post</title>
    <style>
        body {
            font-family: 'Inter', sans-serif;
            background-color: #f5f5f5;
            padding: 2rem;
        }

        form {
            max-width: 600px;
            margin: auto;
            background: white;
            padding: 2rem;
            border-radius: 1rem;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
        }

        input,
        textarea {
            width: 100%;
            padding: 0.75rem;
            margin-bottom: 1rem;
            border: 1px solid #ccc;
            border-radius: 0.5rem;
            font-size: 1rem;
        }

        button {
            padding: 0.75rem 1.5rem;
            background-color: #6366f1;
            color: white;
            border: none;
            border-radius: 0.5rem;
            font-weight: 600;
            cursor: pointer;
        }
    </style>
</head>

<body>
    <form method="post">
        <h2>Edit Post</h2>
        <input type="text" name="title" value="<?= e($post['title']) ?>" required>
        <textarea name="content" rows="10" required><?= e($post['content']) ?></textarea>
        <button type="submit">Update Post</button>
    </form>
</body>

</html>