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
        <article class="post-card">
            <div class="post-title">Getting Started with PHP</div>
            <div class="post-meta">May 10, 2025</div>
            <div class="post-excerpt">Learn how to write your first PHP script and understand the basics of the language...</div>
            <a class="read-more" href="#">Read more →</a>
        </article>

        <article class="post-card">
            <div class="post-title">Building with PDO in PHP</div>
            <div class="post-meta">May 12, 2025</div>
            <div class="post-excerpt">PDO makes working with databases safer and more powerful. Here’s how to get started...</div>
            <a class="read-more" href="#">Read more →</a>
        </article>

        <article class="post-card">
            <div class="post-title">How I Designed My First Blog</div>
            <div class="post-meta">May 15, 2025</div>
            <div class="post-excerpt">A behind-the-scenes look at how I built and styled my developer blog from scratch...</div>
            <a class="read-more" href="#">Read more →</a>
        </article>
    </section>

    <footer>
        © 2025 Kiitan’s Blog. All rights reserved.
    </footer>

    <script src="./assets/js/script.js"></script>
</body>

</html>