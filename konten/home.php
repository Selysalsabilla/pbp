<style type="text/css">
    .style1 {
        color: #009;
        font-weight: bold;
        text-align: center;
    }

    input.submit {
        margin-top: 10px;
        padding: 10px 20px;
        background-color: #009;
        color: #fff;
        border: none;
        cursor: pointer;
    }

    a.view {
        display: block;
        color: #009;
        text-decoration: none;
        font-weight: bold;
        font-size: 16px;
        text-align: center;
    }
</style>

<form action="register.php" method="post">
    <p>&nbsp;</p>
    <div class="style1" align="center">
        <p>REGISTER</p>
    </div>
    <table width="496" border="0" align="center">
        <tr>
            <td width="163">Nama Depan :</td>
            <td width="317"><input type="text" name="namadep"></td>
        </tr>
        <tr>
            <td>Nama Belakang :</td>
            <td><input type="text" name="namabel"></td>
        </tr>
        <tr>
            <td>Username :</td>
            <td><input type="text" name="username"></td>
        </tr>
        <tr>
            <td>Password :</td>
            <td><input type="text" name="password"></td>
        </tr>
        <tr>
            <td>Usia :</td>
            <td><input type="text" name="usia"></td>
        </tr>
        <tr>
            <td>Jenis Kelamin :</td>
            <td><input type="text" name="jk"></td>
        </tr>
        <tr>
            <td>Tempat tanggal lahir :</td>
            <td><input type="text" name="ttl"></td>
        </tr>
        <tr>
            <td>Email :</td>
            <td><input type="text" name="email"></td>
        </tr>
        <tr>
            <td>Nomor Telepon :</td>
            <td><input type="text" name="notel"></td>
        </tr>
        <tr>
            <td>&nbsp;</td>
            <td><input type="submit" value="input" class="submit"></td>
        </tr>

    </table>
</form>

<a href="?module=view#pos" class="view">lihat daftar member----</a>