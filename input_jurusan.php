<?php
require "functions.php";

// cek submit 
if (isset($_POST["submit"])) {

    //cek keberhasilan
    if (tambah1($_POST) > 0) {
        echo "
        <script>
            alert('Data Berhasil Ditambahkan');
            document.location.href = 'data_jurusan.php';
        </script>
        ";
    } else {
        echo " 
        <script>
            alert('Data Gagal Ditambahkan');
            document.location.href = 'data_jurusan.php';
        </script>
        ";
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<!-- Required meta tags -->
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

<!-- Bootstrap CSS -->
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" />

<head>
    <title>Webku</title>
</head>

<body class="mt-5">
    <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="index.html">
                <img src="logo.jpg" width="30" height="30" class="d-inline-block align-top" />
                Universitas PGRI Yogyakarta</a>
            <button class="navbar-toggler" type=" button" data-toggle="collapse" data-target="#navbarNavaltMarkup" aria-controls="navbarNavaltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavaltMarkup">
                <div class="navbar-nav">
                    <ul class=" navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="data_mahasiswa.php">Input Data Mahasiswa<span class="sr-only">(current)</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="nilai_mahasiswa.php">Input Nilai Mahasiswa</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="daftar_mahasiswa.php">Daftar Mahasiswa</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="data_jurusan.php">Data Jurusan</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link js-scroll-trigger" href="input_jurusan.php">Input Data Jurusan</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
    <br>
    <h1>
        <center>
            Input Jurusan
    </h1>
    <br>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <form action="" method="post">
                    <div class="form-group row">
                        <label for="nim" class="col-sm-2 col-form-label">Kode Jurusan</label>
                        <div class="col-sm-10">
                            <input type="text" name="kode_jurusan" class="form-control" id="kode_jurusan" placeholder="masukan kode jurusan" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="nama" class="col-sm-2 col-form-label">Nama Jurusan</label>
                        <div class="col-sm-10">
                            <input type="text" name="nama_jurusan" class="form-control" id="nama_jurusan" placeholder="masukan nama jurusan" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <button type="submit" name="submit" class="btn btn-info">Kirim</button>
                        <button type="reset" name="reset" class="btn btn-info">Reset</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <br>

    <footer class="bg-dark text-white">
        <div class="container">
            <div class="row pt-4">
                <div class="col text-center">
                    <p>Copyrigh 2019.Diyan Saputra</p>
                </div>
            </div>
        </div>

    </footer>
    <!-- Optional JavaScript -->
    <script src="js/jquery-3.3.1.slim.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
</body>

</html>