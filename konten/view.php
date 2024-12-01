<style>
    h1.view {
        color: yellowgreen;
        text-align: center;

    }

    table {
        border-collapse: collapse;
        width: 800px;
    }

    th,
    td {
        border: 1px solid black;
        padding: 5px;
        font-size: 12px;
        text-align: left;
    }

    th {
        text-align: center;
    }

    a {
        color: blue;
        text-decoration: none;
        cursor: pointer;
    }
</style>

<br>
<h1 class="view">Daftar Member</h1>
<?php
include "./koneksi.php";
$hasil = mysqli_query($conn, "SELECT * FROM register");
?>
<table>
    <tr>
        <th>id</th>
        <th>nama depan</th>
        <th>nama belakang</th>
        <th>username</th>
        <th>password</th>
        <th>usia</th>
        <th>jk</th>
        <th>ttl</th>
        <th>email</th>
        <th>notel</th>
        <th colspan="2">aksi</th>
    </tr>
    <?php
    while ($buff = mysqli_fetch_assoc($hasil)) {
    ?>
        <tr>
            <td>
                <?php echo $buff["id"]; ?>
            </td>
            <td>
                <?php echo $buff['namadep']; ?>
            </td>
            <td>
                <?php echo $buff["namabel"]; ?>
            </td>
            <td>
                <?php echo $buff["username"]; ?>
            </td>
            <td>
                <?php echo $buff["password"]; ?>
            </td>
            <td>
                <?php echo $buff["usia"]; ?>
            </td>
            <td>
                <?php echo $buff["jk"]; ?>
            </td>
            <td>
                <?php echo $buff["ttl"]; ?>
            </td>
            <td>
                <?php echo $buff["email"]; ?>
            </td>
            <td>
                <?php echo $buff["notel"]; ?>
            </td>
            <td><a href="?module=edit&id=<?php echo $buff['id']; ?>">edit</a></td>
            <td><a href="konten/hapus.php?id=<?php echo $buff["id"]; ?>">hapus</a></td>
        </tr>
    <?php
    };
    ?>
</table>
<br>
<a href="index.php"><---- Kembali ke index</a>