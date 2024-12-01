<?php
include "koneksi.php"; // Pastikan file koneksi.php sudah ada dan benar

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Ambil data dari form registrasi
    $namadep = mysqli_real_escape_string($conn, $_POST['namadep']);
    $namabel = mysqli_real_escape_string($conn, $_POST['namabel']);
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $password = mysqli_real_escape_string($conn, $_POST['password']); // Password tanpa hashing
    $usia = mysqli_real_escape_string($conn, $_POST['usia']);
    $jk = mysqli_real_escape_string($conn, $_POST['jk']);
    $ttl = mysqli_real_escape_string($conn, $_POST['ttl']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $notel = mysqli_real_escape_string($conn, $_POST['notel']);

    // Tambahkan logika untuk role
    // Jika Anda ingin role diambil dari form, tambahkan <select> atau <input> di form registrasi
    $role = isset($_POST['role']) ? mysqli_real_escape_string($conn, $_POST['role']) : 'user'; // Default ke 'user'

    // Query untuk memasukkan data ke tabel register
    $mysql_register = "INSERT INTO register (namadep, namabel, username, password, usia, jk, ttl, email, notel) 
                        VALUES ('$namadep', '$namabel', '$username', '$password', '$usia', '$jk', '$ttl', '$email', '$notel')";

    // Jalankan query untuk tabel register
    if (!mysqli_query($conn, $mysql_register)) {
        die("Error pada tabel register: " . mysqli_error($conn));
    }

    // Query untuk memasukkan data ke tabel users
    $mysql_users = "INSERT INTO users (username, password, role) VALUES ('$username', '$password', '$role')";

    // Jalankan query untuk tabel users
    if (!mysqli_query($conn, $mysql_users)) {
        die("Error pada tabel users: " . mysqli_error($conn));
    }

    // Jika berhasil, redirect ke index.php dengan pesan sukses
    echo "<script>
            alert('Data berhasil disimpan ke tabel register dan users');
            window.location.href = 'index.php';
          </script>";
    exit(); // Hentikan eksekusi agar redirect berjalan
}

// Menutup koneksi
mysqli_close($conn);
?>
