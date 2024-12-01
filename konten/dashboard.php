<?php
session_start();

// Cek apakah pengguna sudah login atau belum
if (!isset($_SESSION['role'])) {
    // Jika tidak ada session role, arahkan ke halaman login
    header("Location: ../index.php");
    exit;
}

// Mengambil role dari session
$role = $_SESSION['role'];
?>

<h1>Selamat datang, <?= $_SESSION['username']; ?></h1>

<nav>
    <ul>
        <!-- Link untuk input data dan lihat data -->
        <li><a href="input.php">Input Data</a></li>
        <li><a href="view.php">Lihat Data</a></li>
        <li><a href="search.php">Cari Data</a></li>

        <!-- Admin hanya dapat melihat menu ini -->
        <?php if ($role === 'admin'): ?>
            <li><a href="edit.php">Edit Data</a></li>
            <li><a href="delete.php">Hapus Data</a></li>
        <?php endif; ?>
    </ul>
</nav>

<!-- Link untuk logout -->
<a href="logout.php">Logout</a>
