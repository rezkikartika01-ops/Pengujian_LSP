<?php
include 'koneksi.php';

if (isset($_GET['id'])) {
    $id_user = $_GET['id'];

    // Ambil foto terlebih dahulu
    $result = mysqli_query($conn, "SELECT foto FROM user WHERE id_user='$id_user'");
    $data = mysqli_fetch_assoc($result);

    if ($data) {
        $foto = $data['foto'];

        // Hapus file foto jika ada
        if (!empty($foto) && file_exists("uploads/" . $foto)) {
            unlink("uploads/" . $foto);
        }

        // Hapus data dari database
        $delete = mysqli_query($conn, "DELETE FROM user WHERE id_user='$id_user'");

        if ($delete) {
            echo "<script>alert('Data berhasil dihapus');window.location='account.php';</script>";
        } else {
            echo "<script>alert('Gagal menghapus data');window.location='account.php';</script>";
        }
    } else {
        echo "<script>alert('Data tidak ditemukan');window.location='account.php';</script>";
    }
} else {
    echo "<script>alert('ID tidak valid');window.location='account.php';</script>";
}
?>
