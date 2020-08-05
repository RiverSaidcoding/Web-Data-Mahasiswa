<?php

// koneksi ke database
$conn = mysqli_connect("localhost", "root", "", "diyan_0008");

// ambil data dari tabel Barang
$result = mysqli_query($conn, "SELECT * FROM jurusan");

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

    <center><br><br>
        <h1> Data Jurusan </h1>
        <form action="input_jurusan.php" method="get">

            <input type="text" name="cari" size="40" autofocus placeholder="masukan id jurusan" autocomplete="off">
            <input type="submit" name="submit" class="btn btn-info" value="cari">

        </form>
        <?php
        //tombol cari 
        if (isset($_GET['cari'])) {
            $cari = $_GET['cari'];

            echo "<br><b>Hasil pencarian : " . $cari . "</b>";
            echo "<br>";
        }
        ?>

        <br>

        <table border="1" class="border border-secondary" cellpadding="5" cellspacing="0">
            <tr>
                <th class="p-3 mb-2 bg-info text-white"> No. </th>
                <th class="p-3 mb-2 bg-info text-white"> Aksi </th>
                <th class="p-3 mb-2 bg-info text-white"> Kode Jurusan </th>
                <th class="p-3 mb-2 bg-info text-white"> Nama Jurusan </th>
            </tr>
            <?php
            if (isset($_GET['cari'])) {
                $cari = $_GET['cari'];
                $data =  mysqli_query($conn, "SELECT * FROM jurusan WHERE kode_jurusan LIKE '%" . $cari . "%'");
            } else {
                $data = mysqli_query($conn, "SELECT * FROM jurusan");
            }
            while ($row = mysqli_fetch_array($data)) {
                ?>
                <tr>
                    <td> <?= $row["id_jurusan"]; ?> </td>
                    <td>
                        <a href="ubah.php?id_jurusan=<?= $row["id_jurusan"]; ?>" onclick=" return confirm ('Apa anda yakin akan mengubah data ini?'); "> Ubah </a> |
                        <a href="hapus.php?id_jurusan=<?= $row["id_jurusan"]; ?>" onclick=" return confirm ('Apa anda yakin akan menghapus data ini?'); "> Hapus </a>
                    </td>
                    <td> <?= $row["kode_jurusan"]; ?> </td>
                    <td> <?= $row["nama_jurusan"]; ?> </td>
                </tr>
            <?php } ?>
        </table>
        <br>
        <a href="input_jurusan.php" class="btn btn-info"> Tambah Jurusan </a>
        <center><br><br>

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