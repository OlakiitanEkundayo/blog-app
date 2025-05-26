<?php
session_start();
require __DIR__ . '/../includes/db.inc.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    try {
        $title = strip_tags(trim($_POST['title'] ?? ''));
        $content = strip_tags(trim($_POST['content'] ?? ''));

        $stmt = $pdo->prepare("INSERT INTO `blog` (title, content) VALUES (:title, :content)");
        $stmt->bindValue(':title', $title);
        $stmt->bindValue(':content', $content);
        $stmt->execute();

        $_SESSION['post_published'] = true;

        //Redirect to all post
        header("Location: all-posts.php");
    } catch (PDOException $e) {
        die('Could not be uploaded' . $e->getMessage());
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Add New Post - Kiitan's Blog</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../assets/css/post-form.css
   ">

</head>

<body>
    <header>
        <div class="brand">Kiitan's Blog</div>
        <nav>
            <a href="#">Home</a>
            <button class="dark-toggle" onclick="toggleTheme()">🌓</button>
        </nav>
    </header>
    <div class="body">
        <div class="form-container">
            <h1>Add New Post</h1>
            <form action="post-form.php" method="POST" enctype="multipart/form-data">
                <label for="title">Post Title</label>
                <input type="text" id="title" name="title" required />

                <label for="content">Content</label>
                <textarea id="content" name="content" required></textarea>

                <!-- <label for="image">Featured Image (optional)</label>
                <input type="file" id="image" name="image" accept="image/*" /> -->

                <button class="cta" type="submit">Publish Post</button>
            </form>
        </div>
        <a class="go-back" href="dashboard.php">Go back</a>
    </div>

    <script src="../assets/js/script.js"></script>
</body>

</html>