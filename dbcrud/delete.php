<?php
include "koneksi.php";

if (isset($_GET['id'])) {
    $nis = (int)$_GET['id']; // Mengamankan input
    $query = "DELETE FROM db_crud WHERE nis = $nis"; // Pastikan kolom yang benar
    $result = mysqli_query($koneksi, $query);
    if ($result) {
        header("Location: index.php");
        exit;
    } else {
        echo "Error deleting record: " . mysqli_error($koneksi);
    }
} else {
    echo "Error: No id parameter provided.";
}
?>
