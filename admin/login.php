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
            <form method="post" action="admin_login.php">
                <div class="form-group">
                    <label for="username">Username</label>
                    <input type="text" id="username" name="username" required />
                </div>

                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" id="password" name="password" required />
                </div>

                <button class="login-btn" type="submit">Login</button>

                <!-- Optional error message area -->
                <!-- <div class="error-message">Invalid credentials</div> -->
            </form>
        </div>
    </div>
    <script src="../assets/js/script.js"></script>
</body>

</html>