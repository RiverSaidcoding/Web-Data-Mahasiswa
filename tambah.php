<?php
require "functions.php";

// cek submit 
if (isset($_POST["submit"])) {

    //cek keberhasilan
    if (tambah($_POST) > 0) {
        echo "
        <script>
            alert('Data Berhasil Ditambahkan');
            document.location.href = 'daftar_mahasiswa.php';
        </script>
        ";
    } else {
        echo " 
        <script>
            alert('Data Gagal Ditambahkan');
            document.location.href = 'daftar_mahasiswa.php';
        </script>
        ";
    }
}
?>
<!DOCTYPE html>
<html>

<head>
    <title> Tambah Data Minuman</title>
</head>

<body>
    <center><br><br>
        <h1> Tambah Data Minuman </h1>
        <table border="1" cellpadding="5" cellspacing="0">
            <form action="" method="post">
                <tr>
                    <td>
                        <label for="nama_barang">Nama Barang : </label>
                    </td>
                    <td>
                        <input type="text" name="nama_barang" id="nama_barang" required>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="harga">Harga : </label>
                    </td>
                    <td>
                        <input type="text" name="harga" id="harga" required>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="jumlah_item">Jumlah Item : </label>
                    </td>
                    <td>
                        <input type="text" name="jumlah_item" id="jumlah_item" required>
                    </td>
                </tr>
        </table>
        <br>
        <button type="submit" name="submit"> Tambah </button>
        <button type="reset" name="reset"> Ulangi </button>
        </form>
</body>

</html>