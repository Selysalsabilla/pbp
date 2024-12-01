<style>
    /* Reset dasar */
body {
    margin: 0;
    font-family: Arial, sans-serif;
    background-color: #f4f4f4;
}

/* Kontainer form login */
.login-container {
    width: 100px;
    max-width: 400px;
    margin: 50px auto;
    background: #ffffff;
    padding: 50px;
    border-radius: 8px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
}

/* Judul form */
.login-form h2 {
    text-align: center;
    margin-bottom: 20px;
    color: #333;
}

/* Form grup untuk label dan input */
.form-group {
    margin-bottom: 15px;
}

.form-group label {
    display: block;
    margin-bottom: 5px;
    color: #555;
}

.form-group input {
    width: 100%;
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 5px;
}

/* Tombol login */
.btn-login {
    width: 100%;
    padding: 10px;
    background-color: #007bff;
    color: white;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    font-size: 16px;
}

.btn-login:hover {
    background-color: #0056b3;
}

/* Fokus pada input */
input:focus {
    outline: none;
    border-color: #007bff;
    box-shadow: 0 0 5px rgba(0, 123, 255, 0.5);
}
</style>
<form action="konten/login.php" method="POST">
    <h2>Login</h2>
    <label>Username:</label>
    <input type="text" name="username" required><br>
    <label>Password:</label>
    <input type="password" name="password" required><br>
    <button type="submit">Login</button>
</form>
<?php
include "./koneksi.php";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $password = $_POST['password'];

    // Query untuk memeriksa username dan password
    $query = "SELECT * FROM users WHERE username = '$username'";
    $result = mysqli_query($conn, $query);
    $user = mysqli_fetch_assoc($result);

    if ($user && password_verify($password, $user['password'])) {
        // Menyimpan informasi session
        $_SESSION['username'] = $username;
        $_SESSION['role'] = $user['role'];

        // Redirect ke dashboard setelah login berhasil
        header("Location: ../konten/dashboard.php");
        exit();
    } else {
        echo "Login gagal. Username atau password salah.";
    }
}
?>


