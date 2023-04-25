<?php
session_start();

if (!isset($_SESSION['login_attempts'])) {
    $_SESSION['login_attempts'] = 0;
    $_SESSION['first_attempt_time'] = time();
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'] ?? '';
    $password = $_POST['password'] ?? '';

    $time_since_first_attempt = time() - $_SESSION['first_attempt_time'];

    if ($time_since_first_attempt > 3 * 60) {
        // Reset the login attempts and timer after 3 minutes
        $_SESSION['login_attempts'] = 0;
        $_SESSION['first_attempt_time'] = time();
    }

    if ($_SESSION['login_attempts'] >= 5) {
        $error_message = 'Maximum login attempts! Who are you? Fuck off!';
    } else {
        if ($username === 'Bibob' && strtolower($password) === '26 april 2001') {
            $_SESSION['is_logged_in'] = true;
            header('Location: http://139.180.138.242/index.php');
            exit;
        } else {
            $error_message = 'Username atau Password Salah!';
            $_SESSION['login_attempts']++;
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Great+Vibes&family=Open+Sans&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="navbar">
        <a href="#" class="navbar-logo">Bibob Birthday 💕</a>
    </div>
    <div class="login-container">
        <h2>Make sure it's you!</h2>
        <?php if (isset($error_message)): ?>
            <div class="error-message"><?= htmlspecialchars($error_message) ?></div>
        <?php endif; ?>
        <form method="post">
            <div class="input-group">
                <label for="username">Username</label>
                <input type="text" id="username" name="username" placeholder="Nama panggilan sayang" required>
            </div>
            <div class="input-group">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" placeholder="Tanggal lahir kamu" required>
            </div>
            <button type="submit">Login</button>
        </form>
        <a href="#" onclick="forgotPassword()">Forgot password?</a>
    </div>

    <div id="toast" class="toast">Hadeu sama tanggal lahir sendiri lupa, bentar ya bob.</div>

    <script>
        function forgotPassword() {
            showToast('Hadeu sama tanggal lahir sendiri lupa, bentar ya bob.', 2000);

            setTimeout(() => {
                const message = encodeURIComponent('Duh aku lupa sama tanggal lahir sendiri');
                window.location.href = `https://wa.me/6281211656789?text=${message}`;
            }, 2000);
        }

        function showToast(message, duration) {
            const toast = document.getElementById('toast');
            toast.textContent = message;
            toast.style.visibility = 'visible';

            setTimeout(() => {
                toast.style.visibility = 'hidden';
            }, duration);
        }
    </script>
    <!--I made this with all my heart and dedicated it to my Bibob who is celebrating her 23rd birthday.:) -->
</body>
</html>