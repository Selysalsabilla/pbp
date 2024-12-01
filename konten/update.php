<?php
include "../koneksi.php"; // Pastikan file koneksi sudah ada dan berfungsi

if (isset($_POST['id'])) {
    $id = $_POST['id'];

    // Query untuk memperbarui data
    $mysql = "UPDATE register SET 
        first_name = '" . $_POST['first_name'] . "', 
        last_name = '" . $_POST['last_name'] . "', 
        username = '" . $_POST['username'] . "', 
        password = '" . $_POST['password'] . "', 
        usia = '" . $_POST['usia'] . "', 
        jk = '" . $_POST['jk'] . "', 
        ttl = '" . $_POST['ttl'] . "', 
        email = '" . $_POST['email'] . "', 
        notel = '" . $_POST['notel'] . "' 
        WHERE id = '$id'";

    // Eksekusi query dan cek hasilnya
    if (!mysqli_query($conn, $mysql)) { // Gunakan variabel $conn yang berasal dari koneksi.php
        die("Error: " . mysqli_error($conn));
    } else {
        echo "<script>
                alert('Data berhasil diperbarui');
                window.location.href='../index.php?module=view#pos';
              </script>";
        exit(); // Menghentikan eksekusi agar redirect berjalan
    }

    // Menutup koneksi
    mysqli_close($conn);
} else {
    echo "<script>
            alert('ID tidak ditemukan');
            window.location.href='../index.php?module=view#pos';
          </script>";
    exit(); // Menghentikan eksekusi jika ID tidak ada
}
