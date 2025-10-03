<?php
session_start();
if (isset($_SESSION['username'])) {
    header("Location: dashboard.php");
    exit();
}

$error = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = trim($_POST['username']);
    $password = $_POST['password'];
    
    if ($username === "admin" && $password === "12345") {
        $_SESSION['username'] = $username;
        header("Location: dashboard.php");
        exit();
    } else {
        $error = "Username atau password salah!";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="login.css">
</head>
<body>
    <div class="container">
        <h2>Login</h2>

        <form method="POST" action="login.php">
            <div class="input">
                <label>Username</label>
                <input class="isi" type="text" name="username" required>

                <label>Password</label>
                <input class="isi" type="password" name="password" required>
            </div>

            <button type="submit">Login</button>

            <?php if (!empty($error)): ?>
                <p id="errorMsg" style="color: red; margin-top: 10px;"><?php echo htmlspecialchars($error); ?></p>
            <?php endif; ?>
        </form>

        <p>
            Mau langsung daftar?
            <a href="#">Daftar?</a>
        </p>
    </div>
</body>
</html>