<?php
include "./koneksi.php"; // Pastikan koneksi database

// Ambil data berdasarkan ID
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $query = "SELECT * FROM register WHERE id='$id'";
    $result = mysqli_query($conn, $query);

    if ($result && mysqli_num_rows($result) > 0) {
        $data = mysqli_fetch_assoc($result);
    } else {
        echo "Data tidak ditemukan";
        exit();
    }
} else {
    echo "ID tidak ditemukan";
    exit();
}
?>

<form action="./konten/update.php" method="post">
    <div class="style1" align="center">
        <p>EDIT</p>
    </div>
    <table width="496" border="0" align="center">
        <tr>
            <td width="163">Nama Depan :</td>
            <td width="317"><input type="text" name="namadep" value="<?php echo $data['namadep']; ?>"></td>
        </tr>
        <tr>
            <td>Nama Belakang :</td>
            <td><input type="text" name="namabel" value="<?php echo $data['namabel']; ?>"></td>
        </tr>
        <tr>
            <td>Username :</td>
            <td><input type="text" name="username" value="<?php echo $data['username']; ?>"></td>
        </tr>
        <tr>
            <td>Password :</td>
            <td><input type="text" name="password" value="<?php echo $data['password']; ?>"></td>
        </tr>
        <tr>
            <td>Usia :</td>
            <td><input type="text" name="usia" value="<?php echo $data['usia']; ?>"></td>
        </tr>
        <tr>
            <td>Jenis Kelamin :</td>
            <td><input type="text" name="jk" value="<?php echo $data['jk']; ?>"></td>
        </tr>
        <tr>
            <td>Tempat tanggal lahir :</td>
            <td><input type="text" name="ttl" value="<?php echo $data['ttl']; ?>"></td>
        </tr>
        <tr>
            <td>Email :</td>
            <td><input type="text" name="email" value="<?php echo $data['email']; ?>"></td>
        </tr>
        <tr>
            <td>Nomor Telepon :</td>
            <td><input type="text" name="notel" value="<?php echo $data['notel']; ?>"></td>
        </tr>
        <tr>
            <td>&nbsp;</td>
            <td>
                <input type="hidden" name="id" value="<?php echo $data['id']; ?>"> <!-- Menambahkan input tersembunyi untuk ID -->
                <input type="submit" value="Update" class="submit">
            </td>
        </tr>
    </table>
</form>