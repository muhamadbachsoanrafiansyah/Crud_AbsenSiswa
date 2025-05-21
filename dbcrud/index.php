<?php
include "koneksi.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Utama</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <section class="row">
        <div class="col-md-6 offset-md-3 align-self-center">
            <h1 class="text-center">Daftar Siswa</h1>
            <a href="tambah.php" class="btn btn-primary mb-2">Tambah</a>
            <table class="table table-striped table-bordered">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Nis</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Kelas</th>
                        <th scope="col">Alamat</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $no = 1;
                    $query = "SELECT * FROM db_crud";
                    $result = mysqli_query($koneksi, $query);
                    foreach ($result as $data) {
                        echo "
                        <tr>
                        <th scope='row'>". $no++ ."</th>
                        <td>". $data["Nis"] ."</td>
                        <td>". $data["Nama"] ."</td>
                        <td>". $data["Kelas"] ."</td>
                        <td>". $data["Alamat"] ."</td>
                        <td>
                        <a href='update.php?nis=".$data["Nis"]."' class='btn btn-success'>Update</a>
                        <a href='delete.php?id=".$data["Nis"]."' class='btn btn-danger' onclick='return confirm(\"Yakin ingin menghapus data?\")'>Delete</a>
                        </td>
                        </tr>
                        ";
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </section>
</body>
</html>
