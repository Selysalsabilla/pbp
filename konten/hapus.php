<?php
include "../koneksi.php";

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $hasil = mysqli_query($conn, "DELETE FROM register WHERE id='$id'");

    if ($hasil) {
        echo "<script>
                alert('Data berhasil dihapus');
                window.location.href='../index.php?module=view#pos';
              </script>";
        exit();
    } else {
        echo "<script>
                alert('Penghapusan data gagal');
                window.location.href='../index.php?module=view#pos';
              </script>";
        exit();
    }
} else {
    echo "<script>
            alert('ID tidak ditemukan');
            window.location.href='../index.php?module=view#pos';
          </script>";
    exit();
}
