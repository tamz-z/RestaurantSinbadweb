<?php include(Connection.php); ?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
<div class="Register-container">
    <h2>Register</h2>
    <form class="register-form" onsubmit="registerUser(event)">
        <input type="text" id="register-username" placeholder="Username" required>
        <input type="email" id="register-email" placeholder="Email" required>
        <input type="password" id="register-password" placeholder="Password" required>
        <input type="password" id="confirm-password" placeholder="Confirm Password" required>
        <button type="submit">Register</button>
        <p class="error-message"></p>
    </form>
</div>

<div class="Login-container">
    <h2>Login</h2>
    <form class="login-form" action="login.php" method="post">
        <input type="text" name="username" placeholder="Username" required>
        <input type="password" name="password" placeholder="Password" required>
        <button type="submit">Login</button>
        <p class="error-message">
            <!-- Foutmelding vanaf de server wordt hier weergegeven -->
            <?php include("login.php"); ?>
        </p>
    </form>
</div>

</body>
</html>
heeft contextmenu