<?php
session_start();


require __DIR__ . '/../includes/function.inc.php';

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Admin Dashboard - Kiitan's Blog</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../assets/css/dashboard.css">

</head>

<body>
    <header>
        <div class="brand">Kiitan's Blog</div>
        <button class="dark-toggle" onclick="toggleTheme()">🌓</button>
    </header>

    <div class="dashboard">
        <aside class="sidebar">
            <h2>Navigation</h2>
            <a href="all-posts.php">📄 All Posts</a>
            <a href="post-form.php">➕ Add New Post</a>
            <a href="#">⚙️ Settings</a>
            <a href="logout.php">🚪 Logout</a>
        </aside>

        <main class="main-content">
            <h1>Welcome back, <?php echo e($_SESSION['username']); ?>. </h1>
            <div class="grid">
                <div class="card">
                    <h2>Total Posts</h2>
                    <p>3 published posts</p>
                </div>

                <div class="card">
                    <h2>Recent Activity</h2>
                    <ul>
                        <li>✔️ New post published: "Why PHP Still Rocks"</li>
                        <li>✔️ Post updated: "Intro to PDO in PHP"</li>
                        <li>✔️ Logged in at 10:42 AM</li>
                    </ul>
                </div>
            </div>
        </main>
    </div>

    <footer>
        Admin Dashboard • Kiitan's Blog
    </footer>

    <script src="../assets/js/script.js"></script>
</body>

</html>