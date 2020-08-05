<html>

<head>

    <title> Data </title>
</head>

<body>
    <?php
    // koneksi ke database
    $conn = mysqli_connect("localhost", "root", "", "diyan_0008");

    function query($query)
    {
        global $conn;
        $result = mysqli_query($conn, $query);
        $rows = [];
        while ($row = mysqli_fetch_assoc($result)) {
            $rows[] = $row;
        }
        return $rows;
    }

    function tambah($data)
    {
        global $conn;
        // ambil data dari database
        $nim = htmlspecialchars($data["nim"]);
        $nama = htmlspecialchars($data["nama"]);
        $jk = $data["jk"];
        $nilai = htmlspecialchars($data["nilai"]);
        $grade = htmlspecialchars($data["grade"]);
        $jurusan = $data["jurusan"];


        //upload foto
        $Foto = upload();
        if (!$Foto) {
            return false;
        }


        //  menambah data dari form
        $query = "INSERT INTO mahasiswa 
                VALUES
            ('','$nim','$nama', '$jk','$nilai','$grade','$jurusan','$Foto' )
            ";

        mysqli_query($conn, $query);

        return mysqli_affected_rows($conn);
    }

    function upload()
    {

        $namaFile = $_FILES['Foto']['name']; //nama file Foto
        $ukuranFile = $_FILES['Foto']['size']; //ukuran Foto
        $error = $_FILES['Foto']['error']; //mengecek apakah Foto diupload atau tidak
        $tmpName = $_FILES['Foto']['tmp_name']; //tempat penyimpan foto

        //cek penguploadan
        if ($error === 4) {

            echo "<script>
            alert ('Pilih Foto dulu EAAAAA!');
            </script>";
            return false;
        }

        //cek validasi foto
        $ekstensiFotoValid = ['jpg', 'jpeg', 'png'];
        $ekstensiFoto = explode('.', $namaFile);
        $ekstensiFoto = strtolower(end($ekstensiFoto)); //mengambil nama belakang atau typenya (diyan.jpg) yang diambil jpg nya == strtolower itu untuk type file agar dibaca huruf kecil contohnya JPG

        if (!in_array($ekstensiFoto, $ekstensiFotoValid)) {

            echo "<script>
            alert ('File Salah EAAAA! bukan(jpg,jpeg,png)');
            </script>";
            return false;
        }

        //cek ukuran Foto 
        if ($ukuranFile > 1000000) {

            echo "<script>
            alert ('Ukuran Foto terlalu Besar TUMAN!');
            </script>";
            return false;
        }

        //lolos pengcekan , foto siap di upload
        move_uploaded_file($tmpName, 'img/' . $namaFile);

        return $namaFile;
    }


    function tambah1($data)
    {
        global $conn;
        // ambil data dari database
        $kode_jurusan = htmlspecialchars($data["kode_jurusan"]);
        $nama_jurusan = htmlspecialchars($data["nama_jurusan"]);


        //  menambah data dari form
        $query = "INSERT INTO jurusan 
                VALUES
            ('','$kode_jurusan','$nama_jurusan' )
            ";

        mysqli_query($conn, $query);

        return mysqli_affected_rows($conn);
    }

    function ubah($data)
    {
        global $conn;
        $id = ($data["id"]);
        $nim = htmlspecialchars($data["nim"]);
        $nama = htmlspecialchars($data["nama"]);
        $jk = $data["jk"];
        $nilai = htmlspecialchars($data["nilai"]);
        $grade = htmlspecialchars($data["grade"]);
        $jurusan = $data["jurusan"];
        $Foto = $_FILES["Foto"]["name"];

        //  mengubah data dari form
        $query = "UPDATE mahasiswa SET
            nim = '$nim',
            nama = '$nama',
            jk = '$jk',
            nilai = '$nilai';
            grade = '$grade'
            jurusan = '$jurusan'
            Foto = '$Foto'
            WHERE id = $id
        ";

        mysqli_query($conn, $query);

        return mysqli_affected_rows($conn);
    }

    function hapus($id)
    {
        global $conn;
        mysqli_query($conn, "DELETE FROM mahasiswa WHERE id = $id");

        return mysqli_affected_rows($conn);
    }

    function cari($keyword)
    {
        $query =  "SELECT * FROM mahasiswa
                    WHERE
                nama = '$keyword'
        ";
        return query($query);
    }

    ?>


</body>

</html>