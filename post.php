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
            <h1 class="post-title">How I Designed My First Blog</h1>
            <div class="post-meta">Published on May 15, 2025</div>

            <div class="post-content">
                <p>Designing a developer blog is a great way to showcase your skills, share your thoughts, and build an audience. In this post, I’ll walk you through the journey of building my own blog from scratch using PHP and pure CSS.</p>

                <p>I started by sketching the layout: homepage with post cards, a single post view, and a custom admin panel. I wanted a clean, readable design that worked well on both desktop and mobile.</p>

                <img src="https://via.placeholder.com/800x400" alt="Sample blog design">

                <p>The entire frontend uses only HTML and CSS, with a touch of JavaScript for dark mode. The backend will be powered by PHP and MySQL, giving me full control over content and structure.</p>

                <p>Thanks for reading! I hope this post gives you inspiration for your own developer blog. Stay tuned for more updates and tutorials!</p>
            </div>

            <a class="back-link" href="index.php">← Back to homepage</a>
        </main>

        <footer>
            © 2025 Kiitan’s Blog. All rights reserved.
        </footer>

        <script src="./assets/js/script.js"></script>
    </div>
</body>

</html>