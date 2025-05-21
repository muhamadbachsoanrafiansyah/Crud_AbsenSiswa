<?php
include "koneksi.php";

if (isset($_GET['nis'])) {
    $nis = $_GET['nis'];
    $query = "SELECT * FROM db_crud WHERE nis = $nis"; // Pastikan kolom yang benar
    $result = mysqli_query($koneksi, $query);
    $data = mysqli_fetch_assoc($result);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Update Data</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <section class="row">
        <div class="col-md-6 offset-md-3 align-self-center">
            <h1 class="text-center mt-4">Form Update Data</h1>
            <form method="POST">
                <input type="hidden" value="<?= $data['Nis'] ?>" name="Nis">
                <div class="mb-3">
                    <label for="inputNis" class="form-label">NIS</label>
                    <input type="number" class="form-control" id="inputNis" value="<?= $data['Nis'] ?>" name="Nis" placeholder="Masukkan Nis Siswa" required>
                </div>
                <div class="mb-3">
                    <label for="inputNama" class="form-label">Nama</label>
                    <input type="text" name="Nama" placeholder="Masukkan Nama Siswa" required>

                </div>
                <div class="mb-3">
                    <label for="inputKelas" class="form-label">Kelas</label>
                    <input type="text" class="form-control" id="inputKelas" value="<?= $data['Kelas'] ?>" name="kelas" placeholder="Masukkan Kelas Siswa" required>
                </div>
                <div class="mb-3">
                    <label for="inputAlamat" class="form-label">Alamat</label>
                    <input type="text" class="form-control" id="inputAlamat" value="<?= $data['Alamat'] ?>" name="alamat" placeholder="Masukkan Alamat Siswa" required>
                </div>
                <input name="update" type="submit" class="btn btn-primary" value="Update">
                <a href="index.php" class="btn btn-info text-white">Kembali</a>
            </form>
        </div>
    </section>

    <?php
    if (isset($_POST['update'])) {
        $Nis = $_POST['nis'];
        $Nama = $_POST['nama'];
        $Kelas = $_POST['kelas'];
        $Alamat = $_POST['alamat'];

        // Perbaiki query
        $query = "UPDATE db_crud SET nama = '$Nama', kelas = '$Kelas', alamat = '$Alamat' WHERE nis = '$Nis'";
        $result = mysqli_query($koneksi, $query);
        if ($result) {
            header("location: index.php");
            exit;
        } else {
            echo "<script>alert('Data gagal diupdate!')</script>";
        }
    }
    ?>
</body>
</html>
