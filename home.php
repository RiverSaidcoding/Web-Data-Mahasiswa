<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" />

    <title>Webku</title>
</head>

<body class="mt-5">
    <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="index.php">
                <img src="logo.jpg" width="30" height="30" class="d-inline-block align-top" />
                Universitas PGRI Yogyakarta</a>
            <button class="navbar-toggler" type=" button" data-toggle="collapse" data-target="#navbarNavaltMarkup" aria-controls="navbarNavaltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavaltMarkup">
                <div class="navbar-nav">
                    <ul class=" navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="index.php?page=data_mahasiswa.php">Input Data Mahasiswa<span class="sr-only">(current)</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="index.php?page=menu/nilai_mahasiswa.php">Input Nilai Mahasiswa</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="index.php?page=menu/daftar_mahasiswa.php">Daftar Mahasiswa</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="index.php?page=menu/data_mahasiswa.php">Data Jurusan</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link js-scroll-trigger" href="index.php?page=menu/input_jurusan.php">Input Data Jurusan</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>

    <div class="container">

        <?php
        if (isset($_GET['page'])) {
            $page = $_GET['page'];
        }
        ?>
    </div>

    <div class="jumbotron jumbotron-fluid">
        <div class="container text-center">
            <div class="alert alert-dark" role="alert">
                <img src="logo.png" width="50%">
            </div>
            <h1 class="display-4">Sistem Informasi Akademik</h1>
            <p class="lead">
                Selamat Datang Di Universitas PGRI Yogyakarta
            </p>
        </div>
    </div>

    <section id="about" class="about">
        <div class="container">
            <div class="jumbotron jumbotron-fluid">
                <div class="row mb-4">
                    <div class="col text-center">
                        <h2>About</h2>
                    </div>
                </div>

                <div class="row justify-content-center">
                    <div class="col text-justify">
                        <p>Semula Universitas PGRI Yogyakarta (UPY) berbentuk institut (IKIP PGRI Yogyakarta) yang berdiri tanggal
                            11
                            desember 1962 berdasarkan Surat Keputusan Menteri Perguruan Tinggi Dan Ilmu Pengetahuan RI Nomor
                            44/Swt/P/62
                            dalam bentuk Fakultas Keguruan dan Ilmu Pendidikan meliputi jurusan Ilmu Mendidik dan Jurusan Sejarah yang
                            berlokasi di SGA Stelladuce (Menumpang) yang berada di kompleks Lapangan Trenggono, Klitren kidul
                            Yogyakarta.
                            Mulai tahun 1964 kampus FKIP PGRI Yogyakarta (cikal bakal IKIP PGRI Yogyakarta) pindah di SD ungaran,
                            kotabaru
                            Yogyakarta (Sekarang menjadi SDN Ungaran 2) sampai tahun 1980. Selanjutnya pada tahun 1981 berpindah lagi
                            ke
                            kompleks SGPLB di Jl. Wates, Kalibayem Yogyakarta.</p>
                    </div>
                    <div class="col text-justify">
                        <p>Berdasarkan Keputusan Menteri Pendidikan dan kebudayaan RI Nomor : 029/0/1981 tanggal 22 januari 1981
                            tentang
                            Penetapan Kembali Status Terdaftar bagi PTS di Kopertis Wilayah IV yang menetapkan kembali status
                            Terdaftar
                            bagi IKIP PGRI Yogyakarta yang meliputi : Fakultas Ilmu Pendidikan jurusan Teori Dan Sejarah Pendidikan
                            dan
                            Fakultas Keguruan Ilmu sosial jurusan Ilmu Sejarah. Disamping itu juga mengembangkan jurusan baru pada
                            Fakultas Ilmu Pendidikan dan membuka jurusan Psikologi Pendidikan dan Bimbingan yang mendapat status
                            Terdaftar
                        </p>
                    </div>
                    <div class="col text-justify">
                        <p>Berdasarkan Keputusan Menteri Pendidikan dan Kebudayaan Nomor : 0109/O/1984 Tanggal 9 Maret 1984.
                            Disamping
                            itu Juga Membuka jurusan Pendidikan Matematika yang kelak memperoleh status terdaftar Berdasarkan
                            Keputusan
                            Menteri Pendidikan dan Kebudayaan Nomor : 0128/O/1985 Tanggal 6 Mei 1985. Dalam perkembangan nya,
                            Berdasarkan
                            Keputusan Menteri Pendidikan dan Kebudayaan Nomor : 042/O/1985 jurusan Teori dan Sejarah Pendidikan
                            mengalami
                            perubahan nama menjadi jurusan Filsafat dan Sosiologi Pendidikan, sedangkan jurusan Ilmu Sejarah berubah
                            menjadi Jurusan Pendidikan Sejarah. Untuk memenuhi tuntutan masyarakat dan kebutuhan tenaga pendidik serta
                            untuk mengembangkan diri,</p>
                    </div>
                    <div class="col text-justify">
                        <p>pada tahun 1983 Fakultas Pendidikan Ilmu Pengetahuan Sosial IKIP PGRI Yogyakarta
                            membuka jurusan baru yaitu jurusan Pendidikan Moral Pancasila dan Kewarganegaraan (seakarang PPKn) yang
                            mendapat status Terdaftar berdasarkan Keputusan Menteri Pendidikan dan Kebudayaan Nomor : 0428/O/1987
                            tanggal
                            27 juli 1987. Setelah sebelum nya selalu menumpang dengan instansi lain, mulai tahun 1984 dapat menempati
                            kampus milik sendiri di kawasan Sonosewu,Ngestiharjo Kasihan Bantul sampai sekarang. Dalam rangka
                            pemenuhan
                            tuntutan akan kebutuhan pembangunan, perkembangan ilmu pengetahuan dan teknologi, serta memperhatikan
                            prospek
                            masa depan maka sejak tahun 1995 dirilis alih bentuk, dari bentuk Institut Menjadi Universitas dengan
                            Surat
                            keputusan dengan nomor : 180/DIKTI/KEP/1997, tertanggal 25 juli 1997, IKIP PGRI Yogyakarta menjadi
                            Universitas
                            PGRI Yogyakarta (UPY).</p>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section id="agenda" class="agenda">
        <div class="container">
            <div class="alert alert-primary" role="alert">
                <div class="row mb-4">
                    <div class="col text-center">
                        <h2>Agenda Kegiatan</h2>
                    </div>
                </div>

                <div class="row mb-4">
                    <div class="col-md">
                        <div class="card">
                            <img src="1.jpg" class="card-img-top" alt="Card image cap">
                            <div class="card-body">
                                <p class="card-text">Kegiatan Mahasiswa Baru 2018</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md">
                        <div class="card">
                            <img src="2.jpg" class="card-img-top" alt="Card image cap">
                            <div class="card-body">
                                <p class="card-text">International Conference On Education Research</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md">
                        <div class="card">
                            <img src="3.jpg" class="card-img-top" alt="Card image cap">
                            <div class="card-body">
                                <p class="card-text">Teater GEMA UPY Gelar Festival Drama Pelajar Nasional</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md">
                        <div class="card">
                            <img src="4.jpg" class="card-img-top" alt="Card image cap">
                            <div class="card-body">
                                <p class="card-text">Kegiatan HMP-TI</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md">
                        <div class="card">
                            <img src="5.jpg" class="card-img-top" alt="Card image cap">
                            <div class="card-body">
                                <p class="card-text">Seminar Nasional Literasi II </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md">
                        <div class="card">
                            <img src="6.jpg" class="card-img-top" alt="Card image cap">
                            <div class="card-body">
                                <p class="card-text">Pertemuan Di Gedung Pusat</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="contact" class="contact mb-5">
        <div class="container">
            <div class="row pt-4 mb-4">
                <div class="col text-center">
                    <h2>Contact Us</h2>
                </div>
            </div>

            <div class="row justify-content-center">
                <div class="col-lg-4">
                    <div class="card text-white bg-info mb-3 text-center">
                        <div class="card-body">
                            <h5 class="card-title">Hubungi Kami</h5>
                            <p class="card-text">
                                Jika ingin menanyakan sesuatu berhubungan dengan Universitas PGRI Yogyakarta
                            </p>
                        </div>
                    </div>
                    <ul class="list-group">
                        <li class="list-group-item">
                            <h2>Alamat</h2>
                        </li>
                        <li class="list-group-item">Jl. PGRI I Sonosewu No. 117
                            Daerah Istimewa Yogyakarta
                            55182 Indonesia</li>
                        <li class="list-group-item">Phone: (0274) 376808, 418077</li>
                        <li class="list-group-item">Fax: (0274) 376808 </li>
                        <li class="list-group-item">Email: info@upy.ac.id</li>
                    </ul>
                </div>

                <div class="col-lg-6">
                    <form>
                        <div class="form-group">
                            <label for="nama">Nama</label>
                            <input type="text" class="form-control" id="nama" placeholder="Masukan Nama">
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="text" class="form-control" id="email" placeholder="Masukan Email">
                        </div>
                        <div class="form-group">
                            <label for="no">No Telepon</label>
                            <input type="text" class="form-control" id="no" placeholder="Masukan Nomor Telepon">
                        </div>
                        <div class="form-group">
                            <label for="isi">Isi Pesan</label>
                            <textarea class="form-control" id="isi" rows="3"></textarea>
                        </div>
                        <div class="form-group">
                            <button type="button" class="btn btn-info">Kirim Pesan</button>
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </section>

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