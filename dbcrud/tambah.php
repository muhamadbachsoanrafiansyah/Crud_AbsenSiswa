<?php
include "koneksi.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Tambah Data</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <section class="row">
        <div class="col-md-6 offset-md-3 align-self-center">
            <h1 class="text-center mt-4">Form Tambah Data</h1>
            <form method="POST">
                <div class="mb-3">
                    <label for="inputNis" class="form-label">NIS</label>
                    <input type="number" class="form-control" id="inputNis" name="nis" placeholder="Masukkan NIS Siswa" required>
                </div>
                <div class="mb-3">
                    <label for="inputNama" class="form-label">Nama</label>
                    <input type="text" class="form-control" id="inputNama" name="nama" placeholder="Masukkan Nama Siswa" required>
                </div>
                <div class="mb-3">
                    <label for="inputKelas" class="form-label">Kelas</label>
                    <input type="text" class="form-control" id="inputKelas" name="kelas" placeholder="Masukkan Kelas Siswa" required>
                </div>
                <div class="mb-3">
                    <label for="inputAlamat" class="form-label">Alamat</label>
                    <input type="text" class="form-control" id="inputAlamat" name="alamat" placeholder="Masukkan Alamat Siswa" required>
                </div>
                <input name="daftar" type="submit" class="btn btn-primary" value="Tambah">
                <a href="index.php" class="btn btn-info text-white">Kembali</a>
            </form>
        </div>
    </section>

    <?php
    if (isset($_POST['daftar'])) {
        $Nis = $_POST['nis'];
        $Nama = $_POST['nama'];
        $Kelas = $_POST['kelas'];
        $Alamat = $_POST['alamat'];

        // Perbaiki query
        $query = "INSERT INTO db_crud (Nis, Nama, Kelas, Alamat) VALUES ('$Nis', '$Nama', '$Kelas', '$Alamat')";
        $result = mysqli_query($koneksi, $query);
        if ($result) {
            header("location: index.php");
            exit;
        } else {
            echo "<script>alert('Data Gagal Ditambahkan!')</script>";
        }
    }
    ?>
</body>
</html>
