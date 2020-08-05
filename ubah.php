<?php
require "functions.php";

//ambil data di Url
$nama = $_GET["nama"];

// query data barang berdasarkan id
$user = query("SELECT * FROM login WHERE nama = $nama")[0];

// cek submit 
if (isset($_POST["submit"])) {

    //cek keberhasilan
    if (ubah($_POST) > 0) {
        echo "
        <script>
            alert('Data Berhasil Diubah');
            document.location.href = 'tabel_login.php';
        </script>
        ";
    } else {
        echo " 
        <script>
            alert('Data Gagal Diubah');
            document.location.href = 'tabel_login.php';
        </script>
        ";
    }
}
?>
<!DOCTYPE html>
<html>

<head>
    <title> Ubah Data Mahasiswa</title>
</head>

<body>
    <br>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <form action="" method="post">
                    <div class="form-group row">
                        <label for="nama" class="col-sm-2 col-form-label">Nama</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" type="text" name="nama" id="nama" required value="<?= $brg["nama"]; ?>">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Alamat</label>
                        <div class="col-sm-10">
                            <input type="text" name="alamat" class="form-control" id="alamat" placeholder="masukan alamat" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Username</label>
                        <div class="col-sm-10">
                            <input type="text" name="username" class="form-control" id="username" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Password</label>
                        <div class="col-sm-10">
                            <input type="text" name="password" class="form-control" id="password" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <button type="submit" name="submit" class="btn btn-info">Ubah</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <br>

    <br>
    <button type="submit" name="submit"> Ubah </button>

    </form>
</body>

</html>