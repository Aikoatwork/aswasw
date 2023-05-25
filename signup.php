<!DOCTYPE html>
<html>
<head>
    <title>Halaman Signup</title>
</head>
<body>
    <h1>Halaman Signup</h1>

    <form action="proses_signup.php" method="POST">
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required><br>

        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required><br>

        <input type="submit" value="Signup">
    </form>

    <p>Sudah memiliki akun? <a href="login.php">Login disini</a></p>
</body>
</html>
