<?php
session_start();
require __DIR__ . '/../includes/function.inc.php';
require __DIR__ . '/../includes/db.inc.php';


$showPopup = false;
if (isset($_SESSION['post_published'])) {
    $showPopup = true;
    unset($_SESSION['post_published']);
}

$stmt = $pdo->prepare('SELECT * FROM `blog` WHERE `title` = title AND `content` = content');
$stmt->execute();
$output = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin – All Posts | Kiitan's Blog</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../assets/css/all-posts.css">
</head>

<?php if ($showPopup): ?>
    <div class="popup" id="popup">Post published successfully!</div>
<?php endif; ?>

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
            <?php foreach ($output as $blogDetail): ?>
                <tbody>
                    <tr>
                        <td><?php echo e($blogDetail['title']); ?></td>
                        <td><span class="date"><?php $createdAt = new DateTime($blogDetail['uploaded_at']);
                                                echo $createdAt->format('F j, Y \a\t g:i A'); ?></span>
                        </td>
                        <td>Published</td>
                        <td class="actions">
                            <a href="#">Edit</a>
                            <a href="#">Delete</a>
                        </td>
                    </tr>

                </tbody>
            <?php endforeach; ?>
        </table>
        <a class="go-back" href="dashboard.php">Go back</a>
    </main>
    <footer>
        Admin Dashboard • Kiitan's Blog
    </footer>


    <script src="../assets/js/script.js"></script>
</body>

</html>