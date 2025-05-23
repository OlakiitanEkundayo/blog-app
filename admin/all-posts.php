<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin – All Posts | Kiitan's Blog</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../assets/css/all-posts.css">
</head>

<body>
    <header>
        <div class="brand">Kiitan's Blog</div>
        <button class="dark-toggle" onclick="toggleTheme()">🌓</button>
    </header>


    <main>
        <h2>All Published Posts</h2>
        <table>
            <thead>
                <tr>
                    <th>Title</th>
                    <th>Date</th>
                    <th>Status</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Getting Started with PHP</td>
                    <td>May 10, 2025</td>
                    <td>Published</td>
                    <td class="actions">
                        <a href="#">Edit</a>
                        <a href="#">Delete</a>
                    </td>
                </tr>
                <tr>
                    <td>Building with PDO in PHP</td>
                    <td>May 12, 2025</td>
                    <td>Published</td>
                    <td class="actions">
                        <a href="#">Edit</a>
                        <a href="#">Delete</a>
                    </td>
                </tr>
                <tr>
                    <td>How I Designed My First Blog</td>
                    <td>May 15, 2025</td>
                    <td>Published</td>
                    <td class="actions">
                        <a href="#">Edit</a>
                        <a href="#">Delete</a>
                    </td>
                </tr>
            </tbody>
        </table>
        <a class="go-back" href="dashboard.php">Go back</a>
    </main>
    <footer>
        Admin Dashboard • Kiitan's Blog
    </footer>


    <script src="../assets/js/script.js"></script>
</body>

</html>