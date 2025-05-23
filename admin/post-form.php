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
            <form action="#" method="POST" enctype="multipart/form-data">
                <label for="title">Post Title</label>
                <input type="text" id="title" name="title" required />

                <label for="content">Content</label>
                <textarea id="content" name="content" required></textarea>

                <label for="image">Featured Image (optional)</label>
                <input type="file" id="image" name="image" accept="image/*" />

                <button class="cta" type="submit">Publish Post</button>
            </form>
        </div>
    </div>

    <script src="../assets/js/script.js"></script>
</body>

</html>