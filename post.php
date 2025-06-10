<?php
require __DIR__ . '/includes/db.inc.php';
require __DIR__ . '/includes/function.inc.php';

$id = $_GET['id'];
$stmt = $pdo->prepare("SELECT * FROM blog_table WHERE id = ?");
$stmt->execute([$id]);
$post = $stmt->fetch();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Post Title | Kiitan's Blog</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./assets/css/post.css">

</head>

<body>
    <header>
        <div class="brand">Kiitan's Blog</div>
        <nav>
            <a href="index.php">Home</a>
            <button class="dark-toggle" onclick="toggleTheme()">🌓</button>
        </nav>
    </header>

    <div class="body">
        <main class="post-container">
            <?php if ($post): ?>
                <h1 class="post-title"><?php echo e($post['title']) ?></h1>

                <div class="post-meta"><?php $createdAt = new DateTime($post['uploaded_at']);
                                        echo $createdAt->format('F j, Y \a\t g:i A'); ?>
                </div>
                <div class="post-content">
                    <p><?php echo e($post['content']) ?></p>
                </div>
            <?php endif; ?>

            <a class="back-link" href="index.php">← Back to homepage</a>
        </main>

        <footer>
            © 2025 Kiitan’s Blog. All rights reserved.
        </footer>

        <script src="./assets/js/script.js"></script>
    </div>
</body>

</html>