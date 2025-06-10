<?php
require __DIR__ . '/includes/db.inc.php';
require __DIR__ . '/includes/function.inc.php';

$stmt = $pdo->prepare('SELECT * FROM `blog_table` ORDER BY uploaded_at DESC LIMIT 5');

$stmt->execute();

$allblogs = $stmt->fetchAll(PDO::FETCH_ASSOC);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Kiitan's Blog</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./assets/css/style.css">
</head>

<body>


    <header>
        <div class="brand">Kiitan's Blog</div>
        <nav>
            <a href="index.php">Home</a>
            <a href="./admin/login.php">Admin</a>
            <button class="dark-toggle" onclick="toggleTheme()">🌓</button>
        </nav>
    </header>

    <section class="hero">
        <h1>Welcome to Kiitan's Blog</h1>
        <p>Thoughts, tutorials & insights from a backend dev</p>
    </section>

    <section class="posts">
        <?php foreach ($allblogs as $blog): ?>
            <article class="post-card">
                <div class="post-title"><?php echo e($blog['title']); ?></div>
                <div class="post-meta"><?php $createdAt = new DateTime($blog['uploaded_at']);
                                        echo $createdAt->format('F j, Y \a\t g:i A'); ?>
                    <div class="post-excerpt"><?php echo e(substr($blog['content'], 0, 150)); ?></div>
                    <a class="read-more" href="post.php?id=<?= $blog['id'] ?>">Read more →</a>
            </article>


        <?php endforeach; ?>
    </section>

    <footer>
        © 2025 Kiitan’s Blog. All rights reserved.
    </footer>

    <script src="./assets/js/script.js"></script>
</body>

</html>