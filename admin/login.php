<?php
session_start();

require __DIR__ . '/../includes/function.inc.php';

$errors = [];

$username1 = 'Olakiitan';
$hashed_password = '$2y$10$ZdXN7cgySQ5rKV9CWqca.OY/6HXK6UEtXcgNbMyWazFlftgqu8uLa';

// Show message only on redirected GET
$showSuccessMessage = false;
if (isset($_SESSION['login-success']) && $_SERVER['REQUEST_METHOD'] === 'GET') {
    $showSuccessMessage = true;
    unset($_SESSION['login-success']); // remove after displaying
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = strip_tags(trim($_POST['username'] ?? ''));
    $password = strip_tags(trim($_POST['password'] ?? ''));

    if (!$username) {
        $errors[] = 'Username is required';
    }

    if (!$password) {
        $errors[] = 'Password is required';
    }


    if ($username === $username1 && password_verify($password, $hashed_password)) {
        $_SESSION['login-success'] = true;
        $_SESSION['username'] = $username;
        header("Location: login.php"); // redirect to show success message
        exit;
    } else {
        $errors[] = 'Invalid username or password';
    }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Admin Login - Kiitan's Blog</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../assets/css/login.css">
</head>

<body>
    <header>
        <div class="brand">Kiitan's Blog</div>
        <nav>
            <a href="../index.php">Home</a>
            <button class="dark-toggle" onclick="toggleTheme()">🌓</button>
        </nav>
    </header>

    <div class="body">
        <div class="login-container">
            <div class="login-title">Admin Login</div>

            <!-- Display the errors message -->
            <?php foreach ($errors as $error): ?>
                <div class="error-message">
                    <p style="color: red;"><?php echo e($error); ?></p>
                </div>
            <?php endforeach; ?>

            <!-- Display a successful message -->

            <?php if ($showSuccessMessage): ?>
                <div class="success-message">
                    <p style="color: green; animation: fadeIn 0.5s ease-in;">Login Successful! Redirecting...</p>
                    <div class="spinner"></div>
                    <script>
                        setTimeout(function() {
                            window.location.href = "dashboard.php";
                        }, 2000);
                    </script>
                </div>
            <?php endif; ?>

            <!-- Form UI -->
            <form method="post" action="login.php">
                <div class="form-group">
                    <label for="username">Username</label>
                    <input type="text" id="username" name="username" required value="<?php echo e($_POST['username'] ?? ''); ?>" />
                </div>

                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" id="password" name="password" />
                </div>

                <button class="login-btn" type="submit">Login</button>
            </form>
        </div>
    </div>
    <script src="../assets/js/script.js"></script>
</body>

</html>