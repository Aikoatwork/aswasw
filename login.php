<!DOCTYPE html>
<html>
<head>
    <title>Halaman Login</title>
</head>
<body>
    <h1>Halaman Login</h1>
    <?php if(isset($_GET['error'])): ?>

        <p style="color: #ff0000">Username / Password salah, coba lagi</p>

    <?php endif; ?>
    
    <form action="proses_login.php" method="POST">
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required><br>

        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required><br>

        <input type="submit" value="Login">
    </form>

    <p>Belum memiliki akun? <a href="signup.php">Daftar disini</a></p>
</body>
</html>
