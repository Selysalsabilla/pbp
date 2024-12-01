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

<h1>SEARCH</h1>

<form action="?module=search" method="get">
    <input type="hidden" name="module" value="search" />
    <input type="text" name="username" placeholder="Ketikan username" />
    <input type="submit" value="cari">
</form>

<br>

<h2>Hasil pencarian</h2>
<?php
include "koneksi.php";
if (isset($_GET['username'])) {
    $username = $_GET['username'];
    $hasil = mysqli_query($conn, "SELECT * FROM register where username like '$username'");
}
?>
<div>
    <table border="1">
        <tr>
            <td>id</td>
            <td>nama depan</td>
            <td>nama belakang</td>
            <td>username</td>
            <td>password</td>
            <td>usia</td>
            <td>jk</td>
            <td>ttl</td>
            <td>email</td>
            <td>notel</td>
            <td colspan="2">aksi</td>
        </tr>
        <?php
        if (isset($_GET['username'])):
            while ($buff = mysqli_fetch_assoc($hasil)):
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
                        <?php echo str_repeat('*', strlen($buff["password"])); ?>
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
                    <td><a href="?module=edit&id=<?php echo $buff["id"]; ?>">edit</a></td>
                    <td><a href="hapus.php?id=<?php echo $buff["id"]; ?>">hapus</a></td>
                </tr>
        <?php
            endwhile;
        endif;
        ?>
    </table>
</div>
<br>
<a href="index.php"><---- Kembali ke index</a>